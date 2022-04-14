<?php
include('../../connection/db_connect.php');

$data = stripslashes(file_get_contents("php://input"));
$myData = json_decode($data, true);

$firstName = $myData['dataFirstName'];
$lastName = $myData['dataLastName'];
$email = $myData['dataEmail'];
$phone = $myData['dataPhone'];
$dob = $myData['dataDob'];
$country = $myData['dataCountry'];
$universityName = $myData['dataUniversityName'];
$password = $myData['dataPassword'];

try {
  $sql = "SELECT * FROM faculty_reg WHERE email='$email'";

  $stm = $db->prepare($sql);
  $stm->execute();
  $student_email = $stm->fetchAll();
  $stm->closeCursor();

  if (empty($student_email)) {
    $sql = "INSERT INTO faculty_reg(
      first_name, 
      last_name, 
      email, 
      phone, 
      dob, 
      country, 
      university_name, 
      password) 
      VALUES(
      :first_name, 
      :last_name, 
      :email, 
      :phone, 
      :dob, 
      :country, 
      :university_name, 
      :password)
    ";

    $stm = $db->prepare($sql);
    $stm->bindValue(':first_name', $firstName);
    $stm->bindValue(':last_name', $lastName);
    $stm->bindValue(':email', $email);
    $stm->bindValue(':phone', $phone);
    $stm->bindValue(':dob', $dob);
    $stm->bindValue(':country', $country);
    $stm->bindValue(':university_name', $universityName);
    $stm->bindValue(':password', $password);
    $execute_success = $stm->execute();
    $stm->closeCursor();

    if ($execute_success) {
      echo $execute_success;
    } else {
      echo $stm->errorInfo()[2];
    }
  } else {
    echo "EXISTS";
  }
} catch (Exception $e) {
  echo $e->getMessage();
}
