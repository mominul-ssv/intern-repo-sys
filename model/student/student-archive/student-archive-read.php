<?php
include('../../../connection/db_connect.php');

session_start();
$student_reg = $_SESSION['student_reg_array'];
$studentRegId = $student_reg['id'];

try {
  $sql = "SELECT * FROM student_archive WHERE student_reg_id='$studentRegId'";

  $stm = $db->prepare($sql);
  $stm->execute();
  $student_archive = $stm->fetchAll();
  $stm->closeCursor();

  $_SESSION['student_archive_array'] = $student_archive;
  echo "Success!";
} catch (Exception $e) {
  echo $e->getMessage();
}
