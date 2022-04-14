<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../assets/styles/login/login.css">

    <title>Faculty Registration</title>
  </head>

  <body>

    <div class="box">

      <div class="box__navbar">
        <a href="../archive/archive.php"><img class="box__logo" src="../../assets/img/archive.png"
               alt="archive_logo"></a>
      </div>

      <div class="box__main">

        <div class="card">

          <form action="">

            <!-- faculty registration -->
            <div class="card__profile">
              <h2 class="card__profile-text">Faculty Registration</h2>
            </div>

            <div class="grid-container-faculty">

              <!-- faculty first name -->
              <div class="grid-item-first-name">
                <div class="card__group">
                  <input type="text" id="first-name" class="card__input" placeholder=" " required>
                  <label for="first-name" class="card__label">First Name</label>
                </div>
              </div>

              <!-- faculty last name -->
              <div class="grid-item-last-name">
                <div class="card__group">
                  <input type="text" id="last-name" class="card__input" placeholder=" " required>
                  <label for="last-name" class="card__label">Last Name</label>
                </div>
              </div>

              <!-- faculty email -->
              <div class="grid-item-email">
                <div class="card__group">
                  <input type="email" id="email" class="card__input" placeholder=" " required>
                  <label for="email" class="card__label">Email</label>
                </div>
              </div>

              <!-- faculty phone -->
              <div class="grid-item-phone">
                <div class="card__group">
                  <input type="text" id="phone" class="card__input" placeholder=" " required>
                  <label for="phone" class="card__label">Phone</label>
                </div>
              </div>

              <!-- faculty dob -->
              <div class="grid-item-dob">
                <div class="card__group">
                  <input type="date" id="dob" class="card__input" placeholder=" " required>
                  <label for="dob" class="card__label">Date of Birth</label>
                </div>
              </div>

              <!-- faculty country -->
              <div class="grid-item-country">
                <div class="card__group">
                  <input type="text" id="country" class="card__input" placeholder=" " required>
                  <label for="country" class="card__label">Country</label>
                </div>
              </div>

              <!-- faculty university -->
              <div class="grid-item-university">
                <div class="card__group">
                  <input type="text" id="university" class="card__input" placeholder=" " required>
                  <label for="university" class="card__label">University
                    Name</label>
                </div>
              </div>

              <!-- faculty password -->
              <div class="grid-item-password">
                <div class="card__group">
                  <input type="password" id="password" class="card__input" placeholder=" " required>
                  <label for="password" class="card__label">Password</label>
                </div>
              </div>

              <!-- faculty confirm password -->
              <div class="grid-item-confirm-password">
                <div class="card__group">
                  <input type="password" id="confirm-password" class="card__input" placeholder=" " required>
                  <label for="confirm-password" class="card__label">Confirm
                    Password</label>
                </div>
              </div>

              <!-- faculty register -->
              <div class="grid-item-register">
                <button type="submit" class="card__submit-btn-faculty">Register</button>
              </div>

            </div>

            <!-- faculty horizontal line -->
            <hr class="card__hr-faculty">

            <!-- faculty login home -->
            <div class="card__profile">
              <button class="card__faculty-login-home" onclick="window.location.href='../login/login.php'">Go to
                login
                page</button>
            </div>

          </form>

        </div>
      </div>

      <div class="box__footer">
        <span class="box__footer-text">©Team Aurora</span>
      </div>

    </div>

  </body>

</html>
