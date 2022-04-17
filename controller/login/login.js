document.getElementById("student-login-btn").addEventListener("click", loginStudent);
document.getElementById("faculty-login-btn").addEventListener("click", loginFaculty);
document.getElementById("error-close-btn").addEventListener("click", closeError);

let loginError = document.querySelector(".login-error");
let errorText = document.querySelector("#error-text");

function loginStudent(e) {

  e.preventDefault();

  const studentEmail = document.getElementById("student-email").value;
  const studentPassword = document.getElementById("student-password").value;

  if (studentEmail.length !== 0 && studentPassword.length !== 0) {

    // Creating xhr object
    const xhr = new XMLHttpRequest();

    // Initialize ("true" means asynchronous request)
    xhr.open("POST", "../../model/login/student-login.php", true);

    // Set request header
    xhr.setRequestHeader("Content-Type", "application/json");

    // JavaScript object
    const myData = {
      dataStudentEmail: studentEmail,
      dataStudentPassword: studentPassword
    };

    // Converts JavaScript objects to JSON string 
    const data = JSON.stringify(myData);

    // Send request with data
    xhr.send(data);

    // Handle response
    xhr.onload = function () {
      if (xhr.status === 200) {

        const obj = JSON.parse(xhr.response);

        // Checking whether the user exists or not
        if (obj.exists == false && obj.password == false) {
          loginError.style.display = "inline";
          errorText.innerText = "User is not registered!";
        }

        // Password mismatch
        else if (obj.exists == true && obj.password == false) {
          loginError.style.display = "inline";
          errorText.innerText = "Wrong password!";
        }

        // Valid Credentials
        else if (obj.exists == true && obj.password == true) {
          window.location.replace("../student/student-profile.php");
        }

      } else {
        console.log("Problem Occurred!");
      }
    };

  } else {
    loginError.style.display = "inline";
    errorText.innerText = "All fields must be filled.";
  }
}

function loginFaculty(e) {

  e.preventDefault();

  const facultyEmail = document.getElementById("faculty-email").value;
  const facultyPassword = document.getElementById("faculty-password").value;

  if (facultyEmail.length !== 0 && facultyPassword.length !== 0) {

    // Creating xhr object
    const xhr = new XMLHttpRequest();

    // Initialize ("true" means asynchronous request)
    xhr.open("POST", "../../model/login/faculty-login.php", true);

    // Set request header
    xhr.setRequestHeader("Content-Type", "application/json");

    // JavaScript object
    const myData = {
      dataFacultyEmail: facultyEmail,
      dataFacultyPassword: facultyPassword
    };

    // Converts JavaScript objects to JSON string 
    const data = JSON.stringify(myData);

    // Send request with data
    xhr.send(data);

    // Handle response
    xhr.onload = function () {
      if (xhr.status === 200) {

        const obj = JSON.parse(xhr.response);

        // Checking whether the user exists or not
        if (obj.exists == false && obj.password == false) {
          loginError.style.display = "inline";
          errorText.innerText = "User is not registered!";
        }

        // Password mismatch
        else if (obj.exists == true && obj.password == false) {
          loginError.style.display = "inline";
          errorText.innerText = "Wrong password!";
        }

        // Valid Credentials
        else if (obj.exists == true && obj.password == true) {
          window.location.replace("../faculty/faculty-profile.php");
        }

      } else {
        console.log("Problem Occurred!");
      }
    };

  } else {
    loginError.style.display = "inline";
    errorText.innerText = "All fields must be filled.";
  }

}

function closeError() {
  loginError.style.display = "none";
}
