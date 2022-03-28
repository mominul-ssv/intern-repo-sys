// Ajax request for retrieving data
document.getElementById("student-login-btn").addEventListener("click", loginStudent);
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
    xhr.open("POST", "../../model/login/login.php", true);

    // Set request header
    xhr.setRequestHeader("Content-Type", "application/json");

    // Handle response
    xhr.onload = function () {
      if (xhr.status === 200) {

        const obj = JSON.parse(xhr.response);

        if (obj.id !== '') {
          window.location.replace("../student/student-home.php");
        } else {
          // Response handling code
          loginError.style.display = "inline";
          errorText.innerText = "Incorrect email or password!";
        }
      } else {
        console.log("Problem Occurred!");
      }
    };

    // JavaScript object
    const myData = {
      dataStudentEmail: studentEmail,
      dataStudentPassword: studentPassword,
    };

    // Converts JavaScript objects to JSON string 
    const data = JSON.stringify(myData);

    // Send request with data
    xhr.send(data);

  } else {
    loginError.style.display = "inline";
    errorText.innerText = "All fields must be filled.";
  }
}

function closeError() {
  let loginError = document.querySelector(".login-error");
  loginError.style.display = "none";
}
