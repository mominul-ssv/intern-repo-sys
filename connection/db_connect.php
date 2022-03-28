<?php
DEFINE('DB_USER', 'root');
DEFINE('DB_PASSWORD', '');

$dsn = 'mysql:host=localhost;dbname=cse482_project_db';
try {
    $db = new PDO($dsn, DB_USER, DB_PASSWORD);
} catch (PDOException $e) {
    $err_msg = $e->getMessage();
    include('db_error.php');
    exit();
}
