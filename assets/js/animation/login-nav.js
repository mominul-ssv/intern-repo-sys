let studentLoginNav = document.getElementById("card__student");
let facultyLoginNav = document.getElementById("card__faculty");

function navStudent() {
  studentLoginNav.style.display = "inline";
  facultyLoginNav.style.display = "none";
}

function navFaculty() {
  studentLoginNav.style.display = "none";
  facultyLoginNav.style.display = "inline";
}

