document.getElementById("register-btn").addEventListener("click", registerStudent);
document.getElementById("error-close-btn").addEventListener("click", closeError);

let registrationError = document.querySelector(".registration-error");
let errorText = document.querySelector("#error-text");

function registerStudent(e) {

  e.preventDefault();

  const firstName = document.getElementById("first-name").value;
  const lastName = document.getElementById("last-name").value;
  const email = document.getElementById("email").value;
  const phone = document.getElementById("phone").value;
  const dob = document.getElementById("dob").value;
  const country = document.getElementById("country").value;
  const address = document.getElementById("address").value;
  const universityName = document.getElementById("university-name").value;
  const studentId = document.getElementById("student-id").value;
  const password = document.getElementById("password").value;
  const confirmPassword = document.getElementById("confirm-password").value;

  if (firstName.length !== 0
    && lastName.length !== 0
    && email.length !== 0
    && phone.length !== 0
    && dob.length !== 0
    && country.length !== 0
    && address.length !== 0
    && universityName.length !== 0
    && studentId.length !== 0
    && password.length !== 0
    && confirmPassword.length !== 0) {

    if (password == confirmPassword) {

      // Creating xhr object
      const xhr = new XMLHttpRequest();

      // Initialize ("true" means asynchronous request)
      xhr.open("POST", "../../model/registration/student-registration.php", true);

      // Set request header
      xhr.setRequestHeader("Content-Type", "application/json");

      // JavaScript object
      const myData = {
        dataFirstName: firstName,
        dataLastName: lastName,
        dataEmail: email,
        dataPhone: phone,
        dataDob: dob,
        dataCountry: country,
        dataAddress: address,
        dataUniversityName: universityName,
        dataStudentId: studentId,
        dataPassword: password
      };

      // Converts JavaScript objects to JSON string 
      const data = JSON.stringify(myData);

      // Send request with data
      xhr.send(data);

      // Handle response
      xhr.onload = function () {
        if (xhr.status === 200) {

          // Student successfully created
          if (xhr.response === '1') {
            window.location.replace("../login/login.php");
          }

          // Student already exists
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

    if (address.length !== 0) {
      document.getElementById("address").style.border = "2.5px solid #00c853";
    } else {
      document.getElementById("address").style.border = "2.5px solid #d50000";
    }

    if (universityName.length !== 0) {
      document.getElementById("university-name").style.border = "2.5px solid #00c853";
    } else {
      document.getElementById("university-name").style.border = "2.5px solid #d50000";
    }

    if (studentId.length !== 0) {
      document.getElementById("student-id").style.border = "2.5px solid #00c853";
    } else {
      document.getElementById("student-id").style.border = "2.5px solid #d50000";
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
  registrationError.style.display = "none";
}