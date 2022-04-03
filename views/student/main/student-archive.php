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
          <button class="archive__add" onclick="togglePopupArchiveCreate()">+</button>
        </div>

        <div class="popup" id="popup-archive-create">

          <div class="popup__overlay"></div>

          <div class="popup__content">

            <div class="popup__title">
              <h2 class="popup__update-text">Archive Past Internship</h2>
              <div class="popup__close-btn" onclick="togglePopupArchiveCreate()">&times;</div>
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
                        <label for="work-description" class="card__label" id="description-label">Work
                          Description</label>
                      </div>
                    </div>

                  </div>

                  <div class="popup__submit">
                    <button class="popup__submit-btn" id="archive-create-submit-btn">Archive</button>
                  </div>
                </form>
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

          <div class="archive-box">

            <table class="archive-box__id">
              <td>Archive ID <?php echo "#" . $archive['archive_id'] ?></td>
              <td class="archive-box__update" data-archive-id="<?php echo $archive['archive_id'] ?>"
                  onclick="togglePopupArchiveUpdate()">Update</td>
              <td class="archive-box__delete" data-archive-id="<?php echo $archive['archive_id'] ?>">Delete</td>
            </table>

            <table class="archive-box__details">
              <tr>
                <th>Company Name</th>
                <td id="company-name"><?php echo $archive['company_name'] ?></td>
              </tr>
              <tr>
                <th>Address</th>
                <td id="company-address"><?php echo $archive['company_address'] ?></td>
              </tr>
              <tr>
                <th>City</th>
                <td id="company-city"><?php echo $archive['company_city'] ?></td>
              </tr>
              <tr>
                <th>Country</th>
                <td id="company-country"><?php echo $archive['company_country'] ?></td>
              </tr>
              <tr>
                <th>Department</th>
                <td id="company-department"><?php echo $archive['company_department'] ?></td>
              </tr>
              <tr>
                <th>Position</th>
                <td id="company-position"><?php echo $archive['company_position'] ?></td>
              </tr>
              <tr>
                <th>Required Skills</th>
                <td id="required-skills"><?php echo $archive['required_skills'] ?></td>
              </tr>
              <tr>
                <th>Start Date</th>
                <td id="start-date"><?php echo $archive['start_date'] ?></td>
              </tr>
              <tr>
                <th>End Date</th>
                <td id="end-date"><?php echo $archive['end_date'] ?></td>
              </tr>
              <tr>
                <th>Work Description</th>
                <td id="work-description"><?php echo $archive['work_description'] ?></td>
              </tr>
            </table>

          </div>

          <div class="popup" id="popup-archive-update">

            <div class="popup__overlay"></div>

            <div class="popup__content">

              <div class="popup__title">
                <h2 class="popup__update-text">Update Archived Information</h2>
                <div class="popup__close-btn" onclick="togglePopupArchiveUpdate()">&times;</div>
              </div>

              <div class="popup__body">
                <div class="card">
                  <form>
                    <div class="grid-container-archive">

                      <!-- company name -->
                      <div class="grid-item-company-name">
                        <div class="card__group">
                          <input type="text" id="archive-company-name" class="card__input" placeholder=" ">
                          <input type="hidden" class="value-company-name"
                                 data-company-name="<?php echo $archive['company_name'] ?>">
                          <label for="company-name" class="card__label">Company Name</label>
                        </div>
                      </div>

                      <!-- company address -->
                      <div class="grid-item-company-address">
                        <div class="card__group">
                          <input type="text" id="archive-company-address" class="card__input" placeholder=" ">
                          <input type="hidden" class="value-company-address"
                                 data-company-address="<?php echo $archive['company_address'] ?>">
                          <label for="company-address" class="card__label">Company Address</label>
                        </div>
                      </div>

                      <!-- city -->
                      <div class="grid-item-company-city">
                        <div class="card__group">
                          <input type="text" id="archive-company-city" class="card__input" placeholder=" ">
                          <input type="hidden" class="value-company-city"
                                 data-company-city="<?php echo $archive['company_city'] ?>">
                          <label for="company-city" class="card__label">City</label>
                        </div>
                      </div>

                      <!-- country -->
                      <div class="grid-item-company-country">
                        <div class="card__group">
                          <input type="text" id="archive-company-country" class="card__input" placeholder=" ">
                          <input type="hidden" class="value-company-country"
                                 data-company-country="<?php echo $archive['company_country'] ?>">
                          <label for="company-country" class="card__label">Country</label>
                        </div>
                      </div>

                      <!-- department -->
                      <div class="grid-item-company-department">
                        <div class="card__group">
                          <input type="text" id="archive-company-department" class="card__input" placeholder=" ">
                          <input type="hidden" class="value-company-department"
                                 data-company-department="<?php echo $archive['company_department'] ?>">
                          <label for="company-department" class="card__label">Department</label>
                        </div>
                      </div>

                      <!-- position -->
                      <div class="grid-item-company-position">
                        <div class="card__group">
                          <input type="text" id="archive-company-position" class="card__input" placeholder=" ">
                          <input type="hidden" class="value-company-position"
                                 data-company-position="<?php echo $archive['company_position'] ?>">
                          <label for="company-position" class="card__label">Position</label>
                        </div>
                      </div>

                      <!-- required skills -->
                      <div class="grid-item-required-skills">
                        <div class="card__group">
                          <input type="text" id="archive-required-skills" class="card__input" placeholder=" ">
                          <input type="hidden" class="value-required-skills"
                                 data-required-skills="<?php echo $archive['required_skills'] ?>">
                          <label for="required-skills" class="card__label">Required Skills</label>
                        </div>
                      </div>

                      <!-- start-date -->
                      <div class="grid-item-start-date">
                        <div class="card__group">
                          <input type="date" id="archive-start-date" class="card__input" placeholder=" ">
                          <input type="hidden" class="value-start-date"
                                 data-start-date="<?php echo $archive['start_date'] ?>">
                          <label for="start-date" class="card__label">Start Date</label>
                        </div>
                      </div>

                      <!-- end-date -->
                      <div class="grid-item-end-date">
                        <div class="card__group">
                          <input type="date" id="archive-end-date" class="card__input" placeholder=" ">
                          <input type="hidden" class="value-end-date"
                                 data-end-date="<?php echo $archive['end_date'] ?>">
                          <label for="end-date" class="card__label">End Date</label>
                        </div>
                      </div>

                      <!-- description -->
                      <div class="grid-item-work-description">
                        <div class="card__group">
                          <textarea id="archive-work-description" class="card__description" cols="1"
                                    rows="4"></textarea>
                          <input type="hidden" class="value-work-description"
                                 data-work-description="<?php echo $archive['work_description'] ?>">
                          <label for="work-description" class="card__label" id="description-label">Work
                            Description</label>
                        </div>
                      </div>

                    </div>

                    <div class="popup__submit">
                      <button class="popup__submit-btn" id="archive-update-submit-btn">Update</button>
                    </div>
                  </form>
                </div>
              </div>

            </div>
          </div>
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
    <script src="../../../controller/student/student-archive/student-archive-update.js"></script>
    <script src="../../../controller/student/student-archive/student-archive-delete.js"></script>
    <!-- /Scripts -->
  </div>

  <?php
  } else {
    echo "Access Denied!";
  }
  ?>

</body>

</html>
