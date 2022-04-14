<?php
include('../../connection/db_connect.php');

$data = stripslashes(file_get_contents("php://input"));
$myData = json_decode($data, true);

$facultyEmail = $myData['dataFacultyEmail'];
$facultyPassword = $myData['dataFacultyPassword'];
$faculty_error = array('exists' => FALSE, 'password' => FALSE);

try {
  $sql = "SELECT * FROM faculty_reg WHERE email='$facultyEmail'";

  $stm = $db->prepare($sql);
  $stm->execute();
  $faculty_email = $stm->fetchAll();
  $stm->closeCursor();

  // Checking whether the user exists or not
  if (empty($faculty_email)) {
    echo json_encode($faculty_error);
  } else {
    $sql = "SELECT * FROM faculty_reg WHERE email='$facultyEmail' AND password='$facultyPassword'";

    $stm = $db->prepare($sql);
    $stm->execute();
    $faculty_reg = $stm->fetchAll();
    $stm->closeCursor();

    // Password mismatch
    if (empty($faculty_reg)) {
      $faculty_error['exists'] = TRUE;
      echo json_encode($faculty_error);
    }

    // Valid Credentials
    else {
      $faculty_error['exists'] = TRUE;
      $faculty_error['password'] = TRUE;

      $faculty_reg_array = array();

      foreach ($faculty_reg as $faculty) {
        $faculty_reg_array['id'] = $faculty['id'];
        $faculty_reg_array['first_name'] = $faculty['first_name'];
        $faculty_reg_array['last_name'] = $faculty['last_name'];
        $faculty_reg_array['email'] = $faculty['email'];
        $faculty_reg_array['phone'] = $faculty['phone'];
        $faculty_reg_array['dob'] = $faculty['dob'];
        $faculty_reg_array['country'] = $faculty['country'];
        $faculty_reg_array['university_name'] = $faculty['university_name'];
      }

      session_start();
      $_SESSION['faculty_reg_array'] = $faculty_reg_array;
      echo json_encode($faculty_error);
    }
  }
} catch (Exception $e) {
  echo $e->getMessage();
}
