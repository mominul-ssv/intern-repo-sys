<!-- Header -->
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
          integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" type="text/css" href="../../assets/styles/home/home.css">

    <title>Internship Repository</title>

  </head>
  <!-- /Header -->

  <body>

    <div class="container">

      <!-- Navbar -->
      <div class="container__nav">

        <nav class="nav">

          <a href="home.php" class="nav__branding">Internship Repository</a>

          <ul class="nav__menu">
            <li class="nav__item">
              <button class="nav__btn-register">Register</button>
            </li>
            <li class="nav__item">
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

          <div class="sidebar__archives">
            <button class="sidebar__archives-btn" onclick="window.location.href='../archives/archives.php'">
              <span>Archives</span>
            </button>
          </div>

          <div class="sidebar__hr">
            <hr class="sidebar__hr-archives-filter">
          </div>

          <div class="sidebar__filter">
            <button class="sidebar__filter-btn">
              <span>Filter By</span>
              <span><i class="fa-solid fa-plus"></i></span>
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
              <span class="search__icon"><i class="fa fa-search" aria-hidden="true"></i></span>
              <input class="search__box" type="text" name="">
            </div>
          </div>

        </div>

      </main>
      <!-- /Main -->

      <!-- Footer -->
      <footer class="container__footer">
        <div class="footer">
          <span>©Team Aurora</span>
        </div>
      </footer>
      <!-- /Footer -->

    </div>

    <!-- Scripts -->
    <script src="../../assets/js/animation/hamburger-menu.js"></script>
    <!-- /Scripts -->
  </body>

</html>
