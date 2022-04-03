function studentProfile() {

  const xhr = new XMLHttpRequest();

  xhr.open("GET", "../../../model/student/student-profile/student-profile-read.php", true);

  xhr.setRequestHeader("Content-Type", "application/json");

  xhr.onload = function () {
    if (xhr.status === 200) {
      window.location.replace("../../student/main/student-profile.php");
    } else {
      console.log("Error occurred!" + "\nxhr.status: " + xhr.status);
    }
  };

  xhr.send();
}

function studentApply() {
  window.location.replace("../../student/main/student-apply.php");
}

function studentStatus() {
  window.location.replace("../../student/main/student-status.php");
}

function studentApproval() {
  window.location.replace("../../student/main/student-approval.php");
}

function studentArchive() {

  const xhr = new XMLHttpRequest();

  xhr.open("GET", "../../../model/student/student-archive/student-archive-read.php", true);

  xhr.setRequestHeader("Content-Type", "application/json");

  xhr.onload = function () {
    if (xhr.status === 200) {
      window.location.replace("../../student/main/student-archive.php");
    } else {
      console.log("Error occurred!" + "\nxhr.status: " + xhr.status);
    }
  };

  xhr.send();
}




