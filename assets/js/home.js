let hamburger = document.querySelector(".nav__hamburger");
let navMenu = document.querySelector(".nav__menu");
let jobShortBtn = document.querySelector(".job-short__right");
let job = document.querySelector(".job");

hamburger.addEventListener("click", () => {
  hamburger.classList.toggle("active");
  navMenu.classList.toggle("active");
});

let count = 0;
jobShortBtn.addEventListener("click", () => {
  if (count == 0) {
    job.style.display = "flex";
    count++;
  } else if (count == 1) {
    job.style.display = "none";
    count--;
  }
});