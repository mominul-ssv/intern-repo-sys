<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="../../assets/styles/login/login.css">

  <title>Student Registration</title>
</head>

<body>

  <div class="box">

    <div class="box__navbar">
      <h2 style="cursor: pointer;" onclick="window.location.href='../home/main/home.php'">intern</h2>
    </div>

    <div class="box__main">
      <div class="card">

        <form>

          <!-- student registration -->
          <div class="card__profile">
            <h2 class="card__profile-text">Student Registration</h2>
          </div>

          <div class="grid-container-student">

            <!-- student first name -->
            <div class="grid-item-first-name">
              <div class="card__group">
                <input type="text" id="first-name" class="card__input" placeholder=" ">
                <label for="first-name" class="card__label">First Name</label>
              </div>
            </div>

            <!-- student last name -->
            <div class="grid-item-last-name">
              <div class="card__group">
                <input type="text" id="last-name" class="card__input" placeholder=" ">
                <label for="last-name" class="card__label">Last Name</label>
              </div>
            </div>

            <!-- student email -->
            <div class="grid-item-email">
              <div class="card__group">
                <input type="email" id="email" class="card__input" placeholder=" ">
                <label for="email" class="card__label">Email</label>
              </div>
            </div>

            <!-- student phone -->
            <div class="grid-item-phone">
              <div class="card__group">
                <input type="text" id="phone" class="card__input" placeholder=" ">
                <label for="phone" class="card__label">Phone</label>
              </div>
            </div>

            <!-- student dob -->
            <div class="grid-item-dob">
              <div class="card__group">
                <input type="date" id="dob" class="card__input" placeholder=" ">
                <label for="dob" class="card__label">Date of Birth</label>
              </div>
            </div>

            <!-- student country -->
            <div class="grid-item-country">
              <div class="card__group">
                <input type="text" id="country" class="card__input" placeholder=" ">
                <label for="country" class="card__label">Country</label>
              </div>
            </div>

            <!-- student address -->
            <div class="grid-item-address">
              <div class="card__group">
                <input type="text" id="address" class="card__input" placeholder=" ">
                <label for="address" class="card__label">Address</label>
              </div>
            </div>

            <!-- student university -->
            <div class="grid-item-university">
              <div class="card__group">
                <input type="text" id="university-name" class="card__input" placeholder=" ">
                <label for="university" class="card__label">University
                  Name</label>
              </div>
            </div>

            <!-- student id -->
            <div class="grid-item-student-id">
              <div class="card__group">
                <input type="number" id="student-id" class="card__input" placeholder=" ">
                <label for="student-id" class="card__label">Student ID</label>
              </div>
            </div>

            <!-- student password -->
            <div class="grid-item-password">
              <div class="card__group">
                <input type="password" id="password" class="card__input" placeholder=" ">
                <label for="password" class="card__label">Password</label>
              </div>
            </div>

            <!-- student confirm password -->
            <div class="grid-item-confirm-password">
              <div class="card__group">
                <input type="password" id="confirm-password" class="card__input" placeholder=" ">
                <label for="confirm-password" class="card__label">Confirm
                  Password</label>
              </div>
            </div>

            <!-- student register -->
            <div class="grid-item-register">
              <button type="submit" id="register-btn" class="card__submit-btn-student">Register</button>
            </div>

          </div>

        </form>

        <!-- student horizontal line -->
        <hr class="card__hr-student">

        <!-- student login home -->
        <div class="card__profile">
          <button class="card__student-login-home" onclick="window.location.href='../login/main/login.php'">Go to
            login
            page</button>
        </div>

      </div>

    </div>

    <div class="box__footer">
      <div class="footer">
        <span>©Team Aurora</span>
      </div>
    </div>

  </div>

  <script src="../../controller/registration/reg-student.js"></script>
</body>

</html>