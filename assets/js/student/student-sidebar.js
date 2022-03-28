let mainProfile = document.querySelector(".main-profile");
let mainApply = document.querySelector(".main-apply");
let mainStatus = document.querySelector(".main-status");
let mainApproval = document.querySelector(".main-approval");
let mainArchive = document.querySelector(".main-archive");

function studentProfile() {
  mainProfile.style.display = "inline";
  mainApply.style.display = "none";
  mainStatus.style.display = "none";
  mainApproval.style.display = "none";
  mainArchive.style.display = "none";
}

function studentApply() {
  mainProfile.style.display = "none";
  mainApply.style.display = "inline";
  mainStatus.style.display = "none";
  mainApproval.style.display = "none";
  mainArchive.style.display = "none";
}

function studentStatus() {
  mainProfile.style.display = "none";
  mainApply.style.display = "none";
  mainStatus.style.display = "inline";
  mainApproval.style.display = "none";
  mainArchive.style.display = "none";
}
function studentApproval() {
  mainProfile.style.display = "none";
  mainApply.style.display = "none";
  mainStatus.style.display = "none";
  mainApproval.style.display = "inline";
  mainArchive.style.display = "none";
}
function studentArchive() {
  mainProfile.style.display = "none";
  mainApply.style.display = "none";
  mainStatus.style.display = "none";
  mainApproval.style.display = "none";
  mainArchive.style.display = "inline";
}

