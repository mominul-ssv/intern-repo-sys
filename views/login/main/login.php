<!-- Header -->
<?php include "../header/login-header.php" ?>
<!-- /Header -->

<body>

  <div class="box">

    <!-- Navbar -->
    <?php include "../nav/login-nav.php" ?>
    <!-- /Navbar -->

    <div class="box__main">

      <div class="login-error" style="display: none;">
        <div class='card' id='error'>
          <span id="error-text"></span>
          <button id="error-close-btn"><i class='bi bi-x-circle'></i></button>
        </div>
      </div>

      <div class="card">

        <div class="card__toggle-btn">
          <button class="card__toggle-btn-student" onclick="navStudent()">Student</button>
          <button class="card__toggle-btn-employer" onclick="navEmployer()">employer</button>
          <button class="card__toggle-btn-faculty" onclick="navFaculty()">Faculty</button>
        </div>

        <?php include "login-student.php" ?>
        <?php include "login-employer.php" ?>
        <?php include "login-faculty.php" ?>

      </div>

    </div>

    <!-- Footer -->
    <?php include "../footer/login-footer.php" ?>
    <!-- /Footer -->

  </div>

  <!-- Scripts -->
  <script src="../../../assets/js/animation/login-nav.js"></script>
  <script src="../../../controller/login/login-student.js"></script>
  <!-- /Scripts -->

</body>

</html>