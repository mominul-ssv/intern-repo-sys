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

    <!-- Main -->
    <main class="container__main">

      <div class="main">

        <div class="main__search">
          <div class="search">
            <span class="search__icon"><i class="bi bi-search"></i></span>
            <input type="text" class="search__box" id="search_archive">
          </div>
        </div>

        <div id="result">
        </div>

      </div>
    </main>
    <!-- /Main -->

    <!-- Footer -->
    <?php include "includes/faculty-footer.php" ?>
    <!-- /Footer -->

    <!-- Scripts -->
    <script src="../../assets/js/animation/popup-form.js"></script>
    <script src="../../assets/js/animation/hamburger-menu.js"></script>
    <script src="../../controller/faculty/faculty-sidebar/faculty-sidebar.js"></script>
    <script src="../../controller/faculty/faculty-archive/faculty-archive-search.js"></script>
    <!-- /Scripts -->
  </div>

  <?php
  } else {
    echo "Access Denied!";
  }
  ?>

</body>

</html>
