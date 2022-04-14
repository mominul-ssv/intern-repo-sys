document.getElementById("register-btn").addEventListener("click", registerFaculty);
document.getElementById("error-close-btn").addEventListener("click", closeError);

const registrationError = document.querySelector(".registration-error");
const errorText = document.querySelector("#error-text");

function registerFaculty(e) {

  e.preventDefault();

  const firstName = document.getElementById("first-name").value;
  const lastName = document.getElementById("last-name").value;
  const email = document.getElementById("email").value;
  const phone = document.getElementById("phone").value;
  const dob = document.getElementById("dob").value;
  const country = document.getElementById("country").value;
  const universityName = document.getElementById("university-name").value;
  const password = document.getElementById("password").value;
  const confirmPassword = document.getElementById("confirm-password").value;

  if (firstName.length !== 0
    && lastName.length !== 0
    && email.length !== 0
    && phone.length !== 0
    && dob.length !== 0
    && country.length !== 0
    && universityName.length !== 0
    && password.length !== 0
    && confirmPassword.length !== 0) {

    if (password == confirmPassword) {

      // Creating xhr object
      const xhr = new XMLHttpRequest();

      // Initialize ("true" means asynchronous request)
      xhr.open("POST", "../../model/registration/faculty-registration.php", true);

      // Set request header
      xhr.setRequestHeader("Content-Type", "application/json");

      // Handle response
      xhr.onload = function () {
        if (xhr.status === 200) {

          console.log(xhr.response);

          // Faculty successfully created
          if (xhr.response === '1') {
            window.location.replace("../login/login.php");
          }

          // Faculty already exists
          else if (xhr.response === 'EXISTS') {
            registrationError.style.display = "inline";
            errorText.innerText = "Email is already in use!";
          }

          // Server errors
          else {
            console.log("Error occurred!" + "\nxhr.response: " + xhr.response + "\nxhr.status: " + xhr.status);
          }
        } else {
          console.log("Error occurred!" + "\nxhr.status: " + xhr.status);
        }
      };

      // JavaScript object
      const myData = {
        dataFirstName: firstName,
        dataLastName: lastName,
        dataEmail: email,
        dataPhone: phone,
        dataDob: dob,
        dataCountry: country,
        dataUniversityName: universityName,
        dataPassword: password
      };

      // Converts JavaScript objects to JSON string 
      const data = JSON.stringify(myData);

      // Send request with data
      xhr.send(data);

    } else {
      // Response handling code
      registrationError.style.display = "inline";
      errorText.innerText = "Password mismatch!";
    }

  } else {

    if (firstName.length !== 0) {
      document.getElementById("first-name").style.border = "2.5px solid #00c853";
    } else {
      document.getElementById("first-name").style.border = "2.5px solid #d50000";
    }

    if (lastName.length !== 0) {
      document.getElementById("last-name").style.border = "2.5px solid #00c853";
    } else {
      document.getElementById("last-name").style.border = "2.5px solid #d50000";
    }

    if (email.length !== 0) {
      document.getElementById("email").style.border = "2.5px solid #00c853";
    } else {
      document.getElementById("email").style.border = "2.5px solid #d50000";
    }

    if (phone.length !== 0) {
      document.getElementById("phone").style.border = "2.5px solid #00c853";
    } else {
      document.getElementById("phone").style.border = "2.5px solid #d50000";
    }

    if (dob.length !== 0) {
      document.getElementById("dob").style.border = "2.5px solid #00c853";
    } else {
      document.getElementById("dob").style.border = "2.5px solid #d50000";
    }

    if (country.length !== 0) {
      document.getElementById("country").style.border = "2.5px solid #00c853";
    } else {
      document.getElementById("country").style.border = "2.5px solid #d50000";
    }

    if (universityName.length !== 0) {
      document.getElementById("university-name").style.border = "2.5px solid #00c853";
    } else {
      document.getElementById("university-name").style.border = "2.5px solid #d50000";
    }

    if (password.length !== 0) {
      document.getElementById("password").style.border = "2.5px solid #00c853";
    } else {
      document.getElementById("password").style.border = "2.5px solid #d50000";
    }

    if (confirmPassword.length !== 0) {
      document.getElementById("confirm-password").style.border = "2.5px solid #00c853";
    } else {
      document.getElementById("confirm-password").style.border = "2.5px solid #d50000";
    }

  }
}

function closeError() {
  let registrationError = document.querySelector(".registration-error");
  registrationError.style.display = "none";
}