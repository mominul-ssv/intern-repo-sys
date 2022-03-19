<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Dashboard</title>
</head>

<body>

  <?php
  // check that the 'data' key exists
  if (isset($_SESSION['data'])) {

    // it does; output the message
    $myData = json_encode($_SESSION['data'], true);
    echo $myData;

    // remove the key so we don't keep outputting the message
    unset($_SESSION['data']);
  } else {
    echo "Access Denied!";
  }
  ?>

</body>

</html>