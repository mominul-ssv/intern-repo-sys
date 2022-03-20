<?php
session_start();
unset($_SESSION['data']);
header("Location: ../login/login.html");
