<?php include "../header/student-header.php" ?>

<body>

  <!-- check that the 'data' key exists -->
  <?php if (isset($_SESSION['student_reg_array'])) { ?>

    <?php $student_reg = $_SESSION['student_reg_array']; ?>

    <div class="container">

      <!-- Navbar -->
      <?php include "../nav/student-nav.php" ?>
      <!-- /Navbar -->

      <!-- Sidebar -->
      <?php include "../sidebar/student-sidebar.php" ?>
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
                          <button class="popup__submit-btn" id="update-btn">Update</button>
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
      <?php include "../footer/student-footer.php" ?>
      <!-- /Footer -->

      <!-- Scripts -->
      <script src="../../../assets/js/animation/popup-form.js"></script>
      <script src="../../../assets/js/animation/hamburger-menu.js"></script>
      <script src="../../../controller/student/student-sidebar/student-sidebar.js"></script>
      <script src="../../../controller/student/student-profile/student-profile-update.js"></script>
      <!-- /Scripts -->
    </div>

  <?php
  } else {
    echo "Access Denied!";
  }
  ?>

</body>

</html>