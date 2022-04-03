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

  session_start();
  $_SESSION['student_reg_array'] = $student_reg_array;

  // Returning JSON format data as response to ajax call
  echo json_encode($student_reg_array);
} catch (Exception $e) {
  echo $e->getMessage();
}
