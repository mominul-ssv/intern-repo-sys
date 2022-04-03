<?php
include('../../connection/db_connect.php');

$data = stripslashes(file_get_contents("php://input"));
$myData = json_decode($data, true);

$studentEmail = $myData['dataStudentEmail'];
$studentPassword = $myData['dataStudentPassword'];

try {
  $sql = "SELECT * FROM student_reg WHERE email='$studentEmail' AND password='$studentPassword'";

  $stm = $db->prepare($sql);
  $stm->execute();
  $student_reg = $stm->fetchAll();
  $stm->closeCursor();

  $student_reg_array = array('id' => '');

  foreach ($student_reg as $std) {
    $student_reg_array[] = $std;
  }

  session_start();
  $_SESSION['student_reg_array'] = $student_reg_array[0];
} catch (Exception $e) {
  echo $e->getMessage();
}

// Returning JSON format data as response to ajax call
echo json_encode($student_reg_array[0]);
