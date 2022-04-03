<?php
session_start();
unset($_SESSION['student_reg_array']);

if (isset($_SESSION['student_archive_array'])) {
  unset($_SESSION['student_archive_array']);
}

header("Location: ../login/main/login.php");
