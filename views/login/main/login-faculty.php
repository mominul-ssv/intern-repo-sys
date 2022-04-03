<div id="card__employer" style="display: none;">

  <!-- employer profile -->
  <div class="card__profile">
    <img class="card__profile-img" src="../../../assets/img/employer.png" alt="">
    <h2 class="card__profile-text">employer Login</h2>
  </div>

  <form>

    <!-- employer email -->
    <div class="card__group">
      <input type="email" id="employer-email" class="card__input" placeholder=" " required>
      <label for="email" class="card__label">Email</label>
    </div>

    <!-- employer password -->
    <div class="card__group">
      <input type="password" id="employer-password" class="card__input" placeholder=" " required>
      <label for="password" class="card__label">Password</label>
    </div>

    <!-- employer login button -->
    <button class="card__submit-btn-employer">Login</button>

    <!-- employer forgot password -->
    <a class="card__forgot-password-employer" href="#">Forgot
      Password?</a>
    <hr class="card__hr-employer">

  </form>

  <!-- employer register now -->
  <div class="card__register-block">
    <form action="post" action="../registration/reg-student.php">
      <span>Not Registered?</span>
      <a class="card__register-now-employer" href="../../registration/reg-employer.php">Register Now!</a>
    </form>
  </div>

</div>