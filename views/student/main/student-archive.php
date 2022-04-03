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

        <div class="main-archive">

          <!-- Archive Past Internship -->
          <div class="archive">
            <div class="archive__text">Archive Past Internships</div>
            <button class="archive__add" onclick="togglePopupArchive()">+</button>
          </div>

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
                            <textarea id="work-description" class="card__description" cols="1" rows="4"></textarea>
                            <label for="work-description" class="card__label" id="description-label">Work Description</label>
                          </div>
                        </div>

                      </div>

                      <div class="popup__submit">
                        <button class="popup__submit-btn" id="archive-btn">Archive</button>
                      </div>
                    </form>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <!-- /Archive Past Internship -->

          <!-- Horizontal Line -->
          <hr class="archive-hr">
          <!-- /Horizontal Line -->

          <!-- Archive History -->
          <div class="archive-history">

            <div class="archive-history__text">Archive History</div>

            <?php if (isset($_SESSION['student_archive_array'])) { ?>

              <?php $student_archive = $_SESSION['student_archive_array']; ?>

              <?php foreach ($student_archive as $archive) { ?>

                <!-- Scripts -->
                <script src="../../../assets/js/animation/main-card.js"></script>
                <!-- /Scripts -->

              <?php } ?>

            <?php } ?>

          </div>
          <!-- /Archive History -->

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
      <script src="../../../controller/student/student-archive/student-archive-create.js"></script>
      <!-- /Scripts -->
    </div>

  <?php
  } else {
    echo "Access Denied!";
  }
  ?>

</body>

</html>