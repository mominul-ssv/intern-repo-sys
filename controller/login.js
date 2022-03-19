// Ajax request for retrieving data
document.getElementById("student-login-btn").addEventListener("click", loginStudent);

function loginStudent(e) {

  e.preventDefault();

  let studentEmail = document.getElementById("student-email").value;
  let studentPassword = document.getElementById("student-password").value;

  // Creating xhr object
  const xhr = new XMLHttpRequest();

  // Initialize ("true" means asynchronous request)
  xhr.open("POST", "../../model/login.php", true);

  // Set request header
  xhr.setRequestHeader("Content-Type", "application/json");

  // Handle response
  xhr.onload = function () {
    if (xhr.status === 200) {
      // console.log(xhr.response);
      const obj = JSON.parse(xhr.response);

      if (obj[0].email !== undefined) {
        console.log("Success!");
        window.location.replace("../home/home.html");
      } else {
        console.log("Failure.");
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
}