<?php
include('../../../connection/db_connect.php');

session_start();
$student_reg = $_SESSION['student_reg_array'];
$id = $student_reg['id'];

try {
  $sql = "SELECT * FROM student_reg WHERE id='$id'";

  $stm = $db->prepare($sql);
  $stm->execute();
  $student_reg = $stm->fetchAll();
  $stm->closeCursor();

  $student_reg_array = array('id' => '');

  foreach ($student_reg as $std) {
    $student_reg_array[] = $std;
  }

  $_SESSION['student_reg_array'] = $student_reg_array[0];
} catch (Exception $e) {
  echo $e->getMessage();
}

// Returning JSON format data as response to ajax call
echo json_encode($student_reg_array[0]);
