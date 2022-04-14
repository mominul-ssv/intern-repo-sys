<?php
include('../../../connection/db_connect.php');

session_start();
$faculty_reg = $_SESSION['faculty_reg_array'];

$data = stripslashes(file_get_contents("php://input"));
$myData = json_decode($data, true);

$firstName = $myData['dataFirstName'];
$lastName = $myData['dataLastName'];
$email = $myData['dataEmail'];
$phone = $myData['dataPhone'];
$dob = $myData['dataDob'];
$country = $myData['dataCountry'];
$universityName = $myData['dataUniversityName'];
$id = $faculty_reg['id'];

$sql = "UPDATE faculty_reg SET 
first_name = :first_name, 
last_name = :last_name, 
email = :email, 
phone = :phone,
dob = :dob,
country = :country,
university_name = :university_name
WHERE id = :id
";

$stm = $db->prepare($sql);
$stm->bindValue(':first_name', $firstName);
$stm->bindValue(':last_name', $lastName);
$stm->bindValue(':email', $email);
$stm->bindValue(':phone', $phone);
$stm->bindValue(':dob', $dob);
$stm->bindValue(':country', $country);
$stm->bindValue(':university_name', $universityName);
$stm->bindValue(':id', $id);
$execute_success = $stm->execute();
$stm->closeCursor();

if ($execute_success) {
  try {
    $sql = "SELECT * FROM faculty_reg WHERE id='$id'";

    $stm = $db->prepare($sql);
    $stm->execute();
    $faculty_reg = $stm->fetchAll();
    $stm->closeCursor();

    $faculty_reg_array = array();

    foreach ($faculty_reg as $std) {
      $faculty_reg_array[] = $std;
    }

    $_SESSION['faculty_reg_array'] = $faculty_reg_array[0];
  } catch (Exception $e) {
    echo $e->getMessage();
  }
} else {
  echo $stm->errorInfo()[2];
}

// Returning JSON format data as response to ajax call
echo json_encode($faculty_reg_array[0]);
