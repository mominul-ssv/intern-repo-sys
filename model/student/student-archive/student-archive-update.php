<?php
include('../../../connection/db_connect.php');

$data = stripslashes(file_get_contents("php://input"));
$myData = json_decode($data, true);

$archiveId = $myData['dataArchiveId'];
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

$sql = "UPDATE student_archive SET 
company_name = :company_name, 
company_address = :company_address, 
company_city = :company_city,
company_country = :company_country,
company_department = :company_department,
company_position = :company_position,
required_skills = :required_skills,
start_date = :start_date, 
end_date = :end_date, 
faculty_email = :faculty_email,
work_description = :work_description 
WHERE archive_id = :archive_id";

$stm = $db->prepare($sql);
$stm->bindValue(':archive_id', $archiveId);
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
$stm->bindValue(':work_description', $workDescription);
$execute_success = $stm->execute();
$stm->closeCursor();

if ($execute_success) {
  echo $execute_success;
} else {
  echo $stm->errorInfo()[2];
}
