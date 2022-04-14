<?php
session_start();
unset($_SESSION['faculty_reg_array']);

header("Location: ../login/login.php");
