<!-- Header -->
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/styles/login/login.css">

    <title>Login Portal</title>
  </head>
  <!-- /Header -->

  <body>

    <div class="box">

      <!-- Navbar -->
      <div class="box__navbar">
        <a href="../archive/archive.php"><img class="box__logo" src="../../assets/img/archive.png"
               alt="archive_logo"></a>
      </div>
      <!-- /Navbar -->

      <div class="box__main">

        <div class="login-error" style="display: none;">
          <div class='card' id='error'>
            <span id="error-text"></span>
            <button id="error-close-btn"><img id="error-close-btn-icon" src="../../assets/img/x-circle.svg"
                   alt="X"></button>
          </div>
        </div>

        <div class="card">

          <div class="card__toggle-btn">
            <button class="card__toggle-btn-student" onclick="navStudent()">Student</button>
            <button class="card__toggle-btn-faculty" onclick="navFaculty()">Faculty</button>
          </div>

          <?php include "includes/login-student.php" ?>
          <?php include "includes/login-faculty.php" ?>

        </div>

      </div>

      <!-- Footer -->
      <div class="box__footer">
        <span class="box__footer-text">©Team Aurora</span>
      </div>
      <!-- /Footer -->

    </div>

    <!-- Scripts -->
    <script src="../../assets/js/animation/login-nav.js"></script>
    <script src="../../controller/login/login.js"></script>
    <!-- /Scripts -->

  </body>

</html>
