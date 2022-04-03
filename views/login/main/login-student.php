<div id="card__student">

  <!-- student profile -->
  <div class="card__profile">
    <img class="card__profile-img" src="../../../assets/img/student.png" alt="">
    <h2 class="card__profile-text">Student Login</h2>
  </div>

  <form>

    <!-- student email -->
    <div class="card__group">
      <input type="email" id="student-email" class="card__input" placeholder=" " required>
      <label for="email" class="card__label">Email</label>
    </div>

    <!-- student password -->
    <div class="card__group">
      <input type="password" id="student-password" class="card__input" placeholder=" " required>
      <label for="password" class="card__label">Password</label>
    </div>

    <!-- student login button -->
    <button type="submit" id="student-login-btn" class="card__submit-btn-student">Login</button>

    <!-- student forgot password -->
    <a class="card__forgot-password-student" href="#">Forgot Password?</a>
    <hr class="card__hr-student">
  </form>

  <!-- student register now -->
  <div class="card__register-block">
    <span>Not Registered?</span>
    <a class="card__register-now-student" href="../../registration/reg-student.php">Register Now!</a>
  </div>

</div>