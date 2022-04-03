document.querySelector(".job-short__right").addEventListener("click", jobShortBtn);
const job = document.querySelector(".job");

let count = 0;
function jobShortBtn() {
  if (count == 0) {
    job.style.display = "flex";
    count++;
  } else if (count == 1) {
    job.style.display = "none";
    count--;
  }
}