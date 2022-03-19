<?php
include('../connection/db_connection.php');

$data = stripslashes(file_get_contents("php://input"));
$myData = json_decode($data, true);

$studentEmail = $myData['dataStudentEmail'];
$studentPassword = $myData['dataStudentPassword'];

// Retrieve student information
try {
  $sql = "SELECT * FROM student_reg WHERE email='$studentEmail' AND password='$studentPassword'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $data = array();
    while ($row = $result->fetch_assoc()) {
      $data[] = $row;
    }
  }

  session_start();
  $_SESSION['data'] = $data;
} catch (Exception $e) {
  echo $e->getMessage();
}

// Returning JSON format data as response to ajax call
echo json_encode($data);
