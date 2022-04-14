<?php include "includes/faculty-header.php" ?>

<body>

  <!-- check that the 'data' key exists -->
  <?php if (isset($_SESSION['faculty_reg_array'])) { ?>

  <?php $student_reg = $_SESSION['faculty_reg_array']; ?>

  <div class="container">

    <!-- Navbar -->
    <?php include "includes/faculty-nav.php" ?>
    <!-- /Navbar -->

    <!-- Sidebar -->
    <?php include "includes/faculty-sidebar.php" ?>
    <!-- /Sidebar -->


    <!-- Footer -->
    <?php include "includes/faculty-footer.php" ?>
    <!-- /Footer -->

    <!-- Scripts -->
    <script src="../../assets/js/animation/popup-form.js"></script>
    <script src="../../assets/js/animation/hamburger-menu.js"></script>
    <script src="../../controller/faculty/faculty-sidebar/faculty-sidebar.js"></script>
    <!-- /Scripts -->
  </div>

  <?php
  } else {
    echo "Access Denied!";
  }
  ?>

</body>

</html>
