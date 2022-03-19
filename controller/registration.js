document.getElementById("register-btn").addEventListener("click", registerStudent);

function registerStudent(e) {

  e.preventDefault();

  let firstName = document.getElementById("first-name").value;
  let lastName = document.getElementById("last-name").value;
  let email = document.getElementById("email").value;
  let phone = document.getElementById("phone").value;
  let dob = document.getElementById("dob").value;
  let country = document.getElementById("country").value;
  let address = document.getElementById("address").value;
  let universityName = document.getElementById("university-name").value;
  let studentId = document.getElementById("student-id").value;
  let password = document.getElementById("password").value;
  let confirmPassword = document.getElementById("confirm-password").value;

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

    if (password === confirmPassword) {

      // Creating xhr object
      const xhr = new XMLHttpRequest();

      // Initialize ("true" means asynchronous request)
      xhr.open("POST", "../../model/registration.php", true);

      // Set request header
      xhr.setRequestHeader("Content-Type", "application/json");

      // Handle response
      xhr.onload = function () {
        if (xhr.status === 200) {
          console.log(xhr.response);
          window.location.replace("../login/login.html");
        } else {
          console.log("Error occurred!");
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
        dataAddress: address,
        dataUniversityName: universityName,
        dataStudentId: studentId,
        dataPassword: password
      };

      // Converts JavaScript objects to JSON string 
      const data = JSON.stringify(myData);

      // Send request with data
      xhr.send(data);

    } else {
      console.log("Password mismatch!");
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