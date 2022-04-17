<?php
include('../../../connection/db_connect.php');

$archiveId = $_POST["archive_id"];
$verificationStatus = $_POST["verification_status"];

$sql = "UPDATE student_archive SET 
verification_status = :verification_status
WHERE archive_id = :archive_id";

$stm = $db->prepare($sql);
$stm->bindValue(':archive_id', $archiveId);
$stm->bindValue(':verification_status', $verificationStatus);
$execute_success = $stm->execute();
$stm->closeCursor();

if ($execute_success) {
  echo $execute_success;
} else {
  echo $stm->errorInfo()[2];
}
