<?php
require_once('../../../connection/db_connect.php');

session_start();
$student_reg = $_SESSION['student_reg_array'];

$data = stripslashes(file_get_contents("php://input"));
$myData = json_decode($data, true);

$studentRegId = $student_reg['id'];
$companyName = $myData['dataCompanyName'];
$companyAddress = $myData['dataCompanyAddress'];
$companyCity = $myData['dataCompanyCity'];
$companyCountry = $myData['dataCompanyCountry'];
$companyDepartment = $myData['dataCompanyDepartment'];
$companyPosition = $myData['dataCompanyPosition'];
$requiredSkills = $myData['dataRequiredSkills'];
$startDate = $myData['dataStartDate'];
$endDate = $myData['dataEndDate'];
$facultyEmail = $myData['dataFacultyEmail'];
$workDescription = $myData['dataWorkDescription'];
$verificationStatus = "FALSE";

$sql = "INSERT INTO student_archive(
  student_reg_id,
  company_name, 
  company_address, 
  company_city, 
  company_country, 
  company_department, 
  company_position, 
  required_skills, 
  start_date, 
  end_date,
  faculty_email, 
  verification_status,
  work_description) 
VALUES(
  :student_reg_id,
  :company_name, 
  :company_address, 
  :company_city, 
  :company_country, 
  :company_department, 
  :company_position, 
  :required_skills, 
  :start_date, 
  :end_date, 
  :faculty_email, 
  :verification_status,
  :work_description)";

$stm = $db->prepare($sql);
$stm->bindValue(':student_reg_id', $studentRegId);
$stm->bindValue(':company_name', $companyName);
$stm->bindValue(':company_address', $companyAddress);
$stm->bindValue(':company_city', $companyCity);
$stm->bindValue(':company_country', $companyCountry);
$stm->bindValue(':company_department', $companyDepartment);
$stm->bindValue(':company_position', $companyPosition);
$stm->bindValue(':required_skills', $requiredSkills);
$stm->bindValue(':start_date', $startDate);
$stm->bindValue(':end_date', $endDate);
$stm->bindValue(':faculty_email', $facultyEmail);
$stm->bindValue(':verification_status', $verificationStatus);
$stm->bindValue(':work_description', $workDescription);
$execute_success = $stm->execute();
$stm->closeCursor();

if ($execute_success) {

  try {
    $sql = "SELECT * FROM student_archive WHERE student_reg_id=$studentRegId";

    $stm = $db->prepare($sql);
    $stm->execute();
    $student_archive = $stm->fetchAll();
    $stm->closeCursor();

    $_SESSION['student_archive_array'] = $student_archive;
  } catch (Exception $e) {
    echo $e->getMessage();
  }
} else {
  echo $stm->errorInfo()[2];
}

// Returning JSON format data as response to ajax call
echo json_encode($student_archive);
