<?php include "../includes/student-header.php" ?>

<body>

  <!-- check that the 'data' key exists -->
  <?php if (isset($_SESSION['student_reg_array'])) { ?>

  <?php $student_reg = $_SESSION['student_reg_array']; ?>

  <div class="container">

    <!-- Navbar -->
    <?php include "../includes/student-nav.php" ?>
    <!-- /Navbar -->

    <!-- Sidebar -->
    <?php include "../includes/student-sidebar.php" ?>
    <!-- /Sidebar -->

    <!-- Main -->
    <main class="container__main">

      <div class="main-status">
        Status
      </div>

    </main>
    <!-- /Main -->

    <!-- Footer -->
    <?php include "../includes/student-footer.php" ?>
    <!-- /Footer -->

    <!-- Scripts -->
    <script src="../../../assets/js/animation/hamburger-menu.js"></script>
    <script src="../../../controller/student/student-sidebar/student-sidebar.js"></script>
    <!-- /Scripts -->
  </div>

  <?php
  } else {
    echo "Access Denied!";
  }
  ?>

</body>

</html>
