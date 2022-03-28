<?php

include('../../connection/db_connect.php');

session_start();
$student_reg = $_SESSION['student_reg_array'];

$data = stripslashes(file_get_contents("php://input"));
$myData = json_decode($data, true);

$firstName = $myData['dataFirstName'];
$lastName = $myData['dataLastName'];
$email = $myData['dataEmail'];
$phone = $myData['dataPhone'];
$dob = $myData['dataDob'];
$country = $myData['dataCountry'];
$address = $myData['dataAddress'];
$universityName = $myData['dataUniversityName'];
$studentId = $myData['dataStudentId'];
$id = $student_reg['id'];

$sql = "UPDATE student_reg SET 
first_name = :first_name, 
last_name = :last_name, 
email = :email, 
phone = :phone,
dob = :dob,
country = :country,
address = :address,
university_name = :university_name,
student_id = :student_id 
WHERE id = :id";

$stm = $db->prepare($sql);
$stm->bindValue(':first_name', $firstName);
$stm->bindValue(':last_name', $lastName);
$stm->bindValue(':email', $email);
$stm->bindValue(':phone', $phone);
$stm->bindValue(':dob', $dob);
$stm->bindValue(':country', $country);
$stm->bindValue(':address', $address);
$stm->bindValue(':university_name', $universityName);
$stm->bindValue(':student_id', $studentId);
$stm->bindValue(':id', $id);
$execute_success = $stm->execute();
$stm->closeCursor();

if ($execute_success) {
  try {
    $sql = "SELECT * FROM student_reg WHERE id='$id'";

    $stm = $db->prepare($sql);
    $stm->execute();
    $student_reg = $stm->fetchAll();
    $stm->closeCursor();

    $student_reg_array = array('id' => '', 'first_name' => '', 'last_name' => '', 'email' => '');

    foreach ($student_reg as $std) {
      $student_reg_array['id'] = $std['id'];
      $student_reg_array['first_name'] = $std['first_name'];
      $student_reg_array['last_name'] = $std['last_name'];
      $student_reg_array['email'] = $std['email'];
      $student_reg_array['phone'] = $std['phone'];
      $student_reg_array['dob'] = $std['dob'];
      $student_reg_array['country'] = $std['country'];
      $student_reg_array['address'] = $std['address'];
      $student_reg_array['university_name'] = $std['university_name'];
      $student_reg_array['student_id'] = $std['student_id'];
    }
    $_SESSION['student_reg_array'] = $student_reg_array;
    echo json_encode($student_reg_array);
  } catch (Exception $e) {
    echo $e->getMessage();
  }
} else {
  echo $stm->errorInfo()[2];
}
