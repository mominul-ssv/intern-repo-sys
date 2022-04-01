<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link rel="stylesheet" type="text/css" href="../../assets/styles/student/student.css">
  <title>Student Dashboard</title>
</head>

<body>

  <!-- check that the 'data' key exists -->
  <?php if (isset($_SESSION['student_reg_array'])) { ?>

    <?php $student_reg = $_SESSION['student_reg_array']; ?>

    <div class="container">

      <!-- Navbar -->
      <header class="container__nav">

        <nav class="nav">

          <a href="home.html" class="nav__branding">Student Dashboard</a>

          <ul class="nav__menu">
            <li class="nav__item">
              <button class="nav__btn-logout" onclick="window.location.href='../logout/logout.php'">Logout</button>
            </li>
          </ul>

          <div class="nav__hamburger">
            <span class="nav__bar"></span>
            <span class="nav__bar"></span>
            <span class="nav__bar"></span>
          </div>

        </nav>

      </header>
      <!-- /Navbar -->

      <!-- Sidebar -->
      <div class="container__sidebar">

        <div class="sidebar">

          <div class="sidebar__filter">
            <button class="sidebar__filter-btn" onclick="studentProfile()">
              <span class="sidebar__icon"><i class="bi bi-person-circle"></i></span>
              <span>Profile</span>
            </button>
          </div>

          <div class="sidebar__filter">
            <button class="sidebar__filter-btn" onclick="studentApply()">
              <span class=" sidebar__icon"><i class="bi bi-app-indicator"></i></span>
              <span>Apply</span>
            </button>
          </div>

          <div class="sidebar__filter">
            <button class="sidebar__filter-btn" onclick="studentStatus()">
              <span class="sidebar__icon"><i class="bi bi-clock-history"></i></span>
              <span>Status</span>
            </button>
          </div>

          <div class="sidebar__filter">
            <button class="sidebar__filter-btn" onclick="studentApproval()">
              <span class="sidebar__icon"><i class="bi bi-clipboard-check"></i></span>
              <span>Approval</span>
            </button>
          </div>

          <div class="sidebar__filter">
            <button class="sidebar__filter-btn-archive" onclick="studentArchive()">
              <span class="sidebar__icon"><i class="bi bi-columns-gap"></i></span>
              <span>Archive</span>
            </button>
          </div>

        </div>

      </div>
      <!-- /Sidebar -->

      <!-- Main -->
      <main class="container__main">

        <div class="main-profile">

          <div class="main-profile__table">
            <table>
              <tr>
                <th>Student ID</th>
                <td id="student-id-td"><?php echo $student_reg['student_id'] ?></td>
              </tr>
              <tr>
                <th>Name</th>
                <td id="name-td"><?php echo $student_reg['first_name'] . " " . $student_reg['last_name'] ?></td>
              </tr>
              <tr>
                <th>Email</th>
                <td id="email-td"><?php echo $student_reg['email'] ?></td>
              </tr>
              <tr>
                <th>Phone</th>
                <td id="phone-td"><?php echo $student_reg['phone'] ?></td>
              </tr>
              <tr>
                <th>Date of Birth</th>
                <td id="dob-td"><?php echo $student_reg['dob'] ?></td>
              </tr>
              <tr>
                <th>Country</th>
                <td id="country-td"><?php echo $student_reg['country'] ?></td>
              </tr>
              <tr>
                <th>Address</th>
                <td id="address-td"><?php echo $student_reg['address'] ?></td>
              </tr>
              <tr>
                <th>University</th>
                <td id="university-name-td"><?php echo $student_reg['university_name'] ?></td>
              </tr>
            </table>
          </div>

          <div class="main-profile__update">

            <button class="profile-update-btn" onclick="togglePopupUpdate()">Update Profile Information</button>

            <div class="profile-update-popup">

              <div class="popup" id="popup-update">

                <div class="popup__overlay"></div>

                <div class="popup__content">

                  <div class="popup__title">
                    <h2 class="popup__update-text">Update Profile Information</h2>
                    <div class="popup__close-btn" onclick="togglePopupUpdate()">&times;</div>
                  </div>

                  <div class="popup__body">

                    <div class="card">

                      <form>

                        <div class="grid-container-student">

                          <!-- student first name -->
                          <div class="grid-item-first-name">
                            <div class="card__group">
                              <input type="text" id="first-name" class="card__input" placeholder=" " value="<?php echo $student_reg['first_name'] ?>">
                              <label for="first-name" class="card__label">First Name</label>
                            </div>
                          </div>

                          <!-- student last name -->
                          <div class="grid-item-last-name">
                            <div class="card__group">
                              <input type="text" id="last-name" class="card__input" placeholder=" " value="<?php echo $student_reg['last_name'] ?>">
                              <label for="last-name" class="card__label">Last Name</label>
                            </div>
                          </div>

                          <!-- student email -->
                          <div class="grid-item-email">
                            <div class="card__group">
                              <input type="email" id="email" class="card__input" placeholder=" " value="<?php echo $student_reg['email'] ?>">
                              <label for="email" class="card__label">Email</label>
                            </div>
                          </div>

                          <!-- student phone -->
                          <div class="grid-item-phone">
                            <div class="card__group">
                              <input type="text" id="phone" class="card__input" placeholder=" " value="<?php echo $student_reg['phone'] ?>">
                              <label for="phone" class="card__label">Phone</label>
                            </div>
                          </div>

                          <!-- student dob -->
                          <div class="grid-item-dob">
                            <div class="card__group">
                              <input type="date" id="dob" class="card__input" placeholder=" " value="<?php echo $student_reg['dob'] ?>">
                              <label for="dob" class="card__label">Date of Birth</label>
                            </div>
                          </div>

                          <!-- student country -->
                          <div class="grid-item-country">
                            <div class="card__group">
                              <input type="text" id="country" class="card__input" placeholder=" " value="<?php echo $student_reg['country'] ?>">
                              <label for="country" class="card__label">Country</label>
                            </div>
                          </div>

                          <!-- student address -->
                          <div class="grid-item-address">
                            <div class="card__group">
                              <input type="text" id="address" class="card__input" placeholder=" " value="<?php echo $student_reg['address'] ?>">
                              <label for="address" class="card__label">Address</label>
                            </div>
                          </div>

                          <!-- student university -->
                          <div class="grid-item-university">
                            <div class="card__group">
                              <input type="text" id="university-name" class="card__input" placeholder=" " value="<?php echo $student_reg['university_name'] ?>">
                              <label for="university" class="card__label">University
                                Name</label>
                            </div>
                          </div>

                          <!-- student id -->
                          <div class="grid-item-student-id">
                            <div class="card__group">
                              <input type="number" id="student-id" class="card__input" placeholder=" " value="<?php echo $student_reg['student_id'] ?>">
                              <label for="student-id" class="card__label">Student ID</label>
                            </div>
                          </div>

                        </div>

                        <div class="popup__submit">
                          <button class="popup__submit-btn" id="update-btn" onclick="togglePopupUpdate()">Update</button>
                        </div>

                      </form>

                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div>

        </div>

        <div class="main-apply" style="display: none;">
          Apply
        </div>

        <div class="main-status" style="display: none;">
          Status
        </div>

        <div class="main-approval" style="display: none;">
          Approval
        </div>

        <div class="main-archive" style="display: none;">
          <div class="archive">
            <div class="archive__text">Archive Past Internships</div>
            <button class="archive__add" onclick="togglePopupArchive()">+</button>

          </div>
          <hr class="archive-hr">
          <div class="archive-history">
            <div class="archive-history__text">Archive History</div>
            <div class="profile-update-popup">

              <div class="popup" id="popup-archive">
                <div class="popup__overlay"></div>
                <div class="popup__content">
                  <div class="popup__title">
                    <h2 class="popup__update-text">Archive Past Internship</h2>
                    <div class="popup__close-btn" onclick="togglePopupArchive()">&times;</div>
                  </div>
                  <div class="popup__body">
                    <div class="card">
                      <form>
                        <div class="grid-container-archive">

                          <!-- company name -->
                          <div class="grid-item-company-name">
                            <div class="card__group">
                              <input type="text" id="company-name" class="card__input" placeholder=" ">
                              <label for="company-name" class="card__label">Company Name</label>
                            </div>
                          </div>

                          <!-- company address -->
                          <div class="grid-item-company-address">
                            <div class="card__group">
                              <input type="text" id="company-address" class="card__input" placeholder=" ">
                              <label for="company-address" class="card__label">Company Address</label>
                            </div>
                          </div>

                          <!-- city -->
                          <div class="grid-item-company-city">
                            <div class="card__group">
                              <input type="text" id="company-city" class="card__input" placeholder=" ">
                              <label for="company-city" class="card__label">City</label>
                            </div>
                          </div>

                          <!-- country -->
                          <div class="grid-item-company-country">
                            <div class="card__group">
                              <input type="text" id="company-country" class="card__input" placeholder=" ">
                              <label for="company-country" class="card__label">Country</label>
                            </div>
                          </div>

                          <!-- department -->
                          <div class="grid-item-company-department">
                            <div class="card__group">
                              <input type="text" id="company-department" class="card__input" placeholder=" ">
                              <label for="company-department" class="card__label">Department</label>
                            </div>
                          </div>

                          <!-- position -->
                          <div class="grid-item-company-position">
                            <div class="card__group">
                              <input type="text" id="company-position" class="card__input" placeholder=" ">
                              <label for="company-position" class="card__label">Position</label>
                            </div>
                          </div>

                          <!-- required skills -->
                          <div class="grid-item-required-skills">
                            <div class="card__group">
                              <input type="text" id="required-skills" class="card__input" placeholder=" ">
                              <label for="required-skills" class="card__label">Required Skills</label>
                            </div>
                          </div>

                          <!-- start-date -->
                          <div class="grid-item-start-date">
                            <div class="card__group">
                              <input type="date" id="start-date" class="card__input" placeholder=" ">
                              <label for="start-date" class="card__label">Start Date</label>
                            </div>
                          </div>

                          <!-- end-date -->
                          <div class="grid-item-end-date">
                            <div class="card__group">
                              <input type="date" id="end-date" class="card__input" placeholder=" ">
                              <label for="end-date" class="card__label">End Date</label>
                            </div>
                          </div>

                          <!-- description -->
                          <div class="grid-item-work-description">
                            <div class="card__group">
                              <textarea name="work-description" class="card__description" cols="1" rows="4"></textarea>
                              <label class="card__label" id="description-label">Work Description</label>
                            </div>
                          </div>

                        </div>

                        <div class="popup__submit">
                          <button class="popup__submit-btn" id="archive-btn" onclick="togglePopupArchive()">Archive</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
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
      <script src="../../assets/js/animation/popup.js"></script>
      <script src="../../assets/js/student/student-sidebar.js"></script>
      <script src="../../controller/student/student.js"></script>
    </div>

  <?php
  } else {
    echo "Access Denied!";
  }
  ?>

</body>

</html>