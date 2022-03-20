let studentLogin = document.getElementById("card__student");
let employerLogin = document.getElementById("card__employer");
let facultyLogin = document.getElementById("card__faculty");

function loginStudent() {
  studentLogin.style.display = "inline";
  employerLogin.style.display = "none";
  facultyLogin.style.display = "none";
}

function loginEmployer() {
  studentLogin.style.display = "none";
  employerLogin.style.display = "inline";
  facultyLogin.style.display = "none";
}

function loginFaculty() {
  studentLogin.style.display = "none";
  employerLogin.style.display = "none";
  facultyLogin.style.display = "inline";
}

