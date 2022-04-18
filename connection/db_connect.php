<?php

//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"], 1);
$active_group = 'default';
$query_builder = TRUE;

$dsn = "mysql:host=$cleardb_server;dbname=$cleardb_db";
try {
    $db = new PDO($dsn, $cleardb_username, $cleardb_password);
} catch (PDOException $e) {
    $err_msg = $e->getMessage();
    include('db_error.php');
    exit();
}
