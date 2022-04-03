let studentLoginNav = document.getElementById("card__student");
let employerLoginNav = document.getElementById("card__employer");
let facultyLoginNav = document.getElementById("card__faculty");

function navStudent() {
  studentLoginNav.style.display = "inline";
  employerLoginNav.style.display = "none";
  facultyLoginNav.style.display = "none";
}

function navEmployer() {
  studentLoginNav.style.display = "none";
  employerLoginNav.style.display = "inline";
  facultyLoginNav.style.display = "none";
}

function navFaculty() {
  studentLoginNav.style.display = "none";
  employerLoginNav.style.display = "none";
  facultyLoginNav.style.display = "inline";
}

