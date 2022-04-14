<?php
include('../../../connection/db_connect.php');

$data = stripslashes(file_get_contents("php://input"));
$myData = json_decode($data, true);

$archiveId = $myData['dataArchiveId'];

try {
  $sql = "DELETE FROM student_archive WHERE archive_id='$archiveId'";

  $stm = $db->prepare($sql);
  $stm->execute();
  $student_archive = $stm->fetchAll();
  $stm->closeCursor();

  echo "SUCCESS";
} catch (Exception $e) {
  echo $e->getMessage();
}
