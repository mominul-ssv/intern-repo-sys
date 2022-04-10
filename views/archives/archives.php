<?php
include('../../connection/db_connect.php');

try {
  $sql = "SELECT * FROM student_archive";

  $stm = $db->prepare($sql);
  $stm->execute();
  $archives = $stm->fetchAll();
  $stm->closeCursor();

  $sql = "SELECT id, first_name, last_name, country, university_name FROM student_reg";

  $stm = $db->prepare($sql);
  $stm->execute();
  $students = $stm->fetchAll();
  $stm->closeCursor();

  $student_reg_array = array();
} catch (Exception $e) {
  echo $e->getMessage();
}
?>


<!-- Header -->
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="../../assets/styles/archives/archives.css">

    <title>Internship Repository</title>

  </head>
  <!-- /Header -->

  <body>

    <div class="container">

      <!-- Navbar -->
      <div class="container__nav">

        <nav class="nav">

          <a href="../home/home.php" class="nav__branding">Internship Repository</a>

          <ul class="nav__menu">
            <li class="nav__item">
              <button class="nav__btn-register">Register</button>
            </li>
            <li class="nav-item">
              <button class="nav__btn-login" onclick="window.location.href='../login/login.php'">Login</button>
            </li>
          </ul>

          <div class="nav__hamburger">
            <span class="nav__bar"></span>
            <span class="nav__bar"></span>
            <span class="nav__bar"></span>
          </div>

        </nav>

      </div>
      <!-- /Navbar -->

      <!-- Sidebar -->
      <div class="container__sidebar">

        <div class="sidebar">

          <div class="sidebar__filter">
            <button class="sidebar__filter-btn">
              <span>Filter By</span>
              <span><i class="bi bi-plus-circle-dotted"></i></span>
            </button>
          </div>

        </div>

      </div>
      <!-- /Sidebar -->

      <!-- Main -->
      <main class="container__main">

        <div class="main">

          <div class="main__search">
            <div class="search">
              <span class="search__icon"><i class="bi bi-search"></i></span>
              <input class="search__box" type="text" name="">
            </div>
          </div>

          <div style="color: black;">
            <?php if (isset($archives)) {  ?>

            <?php foreach ($archives as $archive_cell) { ?>

            <div class="archive-box">

              <table class="archive-box__details">

                <?php foreach ($students as $student_cell) {  ?>
                <?php if ($archive_cell['student_reg_id'] == $student_cell['id']) { ?>
                <tr>
                  <td>
                    <i class="bi bi-journal-bookmark" style="font-size: 2rem; display:flex; align-items:center"></i>
                  </td>
                  <td>
                    <span style=" display:flex; justify-content: center; font-size: large">
                      <?php echo "Archive ID #" . $archive_cell['archive_id'] ?>
                    </span>
                  </td>
                </tr>

                <tr>
                  <th>Name</th>
                  <td><?php echo $student_cell['first_name'] . " " . $student_cell['last_name'] ?></td>
                </tr>
                <tr>
                  <th>Country</th>
                  <td><?php echo $student_cell['country'] ?></td>
                </tr>
                <tr>
                  <th>University Name</th>
                  <td><?php echo $student_cell['university_name'] ?></td>
                </tr>
                <?php } ?>
                <?php } ?>

                <tr>
                  <th>Company Name</th>
                  <td id="company-name"><?php echo $archive_cell['company_name'] ?></td>
                </tr>
                <tr>
                  <th>Address</th>
                  <td id="company-address"><?php echo $archive_cell['company_address'] ?></td>
                </tr>
                <tr>
                  <th>City</th>
                  <td id="company-city"><?php echo $archive_cell['company_city'] ?></td>
                </tr>
                <tr>
                  <th>Country</th>
                  <td id="company-country"><?php echo $archive_cell['company_country'] ?></td>
                </tr>
                <tr>
                  <th>Department</th>
                  <td id="company-department"><?php echo $archive_cell['company_department'] ?></td>
                </tr>
                <tr>
                  <th>Position</th>
                  <td id="company-position"><?php echo $archive_cell['company_position'] ?></td>
                </tr>
                <tr>
                  <th>Required Skills</th>
                  <td id="required-skills"><?php echo $archive_cell['required_skills'] ?></td>
                </tr>
                <tr>
                  <th>Start Date</th>
                  <td id="start-date"><?php echo $archive_cell['start_date'] ?></td>
                </tr>
                <tr>
                  <th>End Date</th>
                  <td id="end-date"><?php echo $archive_cell['end_date'] ?></td>
                </tr>
                <tr>
                  <th>Work Description</th>
                  <td id="work-description"><?php echo $archive_cell['work_description'] ?></td>
                </tr>
              </table>
            </div>

            <?php } ?>
            <?php } ?>
          </div>


        </div>
      </main>
      <!-- /Main -->

      <!-- Footer -->
      <footer class="container__footer">
        <div class="footer">
          <span>@Team Aurora</span>
        </div>
      </footer>
      <!-- /Footer -->

    </div>

    <!-- Scripts -->
    <script src="../../assets/js/animation/hamburger-menu.js"></script>
    <!-- /Scripts -->

  </body>

</html>
