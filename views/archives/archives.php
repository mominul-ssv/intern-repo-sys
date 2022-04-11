<!-- Header -->
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

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
              <input class="search__box" id="search_archive" type="text">
            </div>
          </div>

          <div style="color: black;" id="result">
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
    <script src="../../controller/archive/archive-search.js"></script>
    <!-- /Scripts -->

  </body>

</html>
