<div id="card__faculty" style="display: none;">

  <!-- faculty profile -->
  <div class="card__profile">
    <img class="card__profile-img" src="../../assets/img/faculty.png" alt="faculty-img">
    <h2 class="card__profile-text">Faculty Login</h2>
  </div>

  <form>

    <!-- faculty email -->
    <div class="card__group">
      <input type="email" id="faculty-email" class="card__input" placeholder=" " required>
      <label for="email" class="card__label">Email</label>
    </div>

    <!-- faculty password -->
    <div class="card__group">
      <input type="password" id="faculty-password" class="card__input" placeholder=" " required>
      <label for="password" class="card__label">Password</label>
    </div>

    <!-- faculty login button -->
    <button type="submit" id="faculty-login-btn" class="card__submit-btn-faculty">Login</button>

    <!-- faculty forgot password -->
    <a class="card__forgot-password-faculty" href="#">Forgot
      Password?</a>
    <hr class="card__hr-faculty">

  </form>

  <!-- faculty register now -->
  <div class="card__register-block">
    <span>Not Registered?</span>
    <a class="card__register-now-faculty" href="../registration/reg-faculty.php">Register Now!</a>
  </div>

</div>
