let deleteCell = document.getElementsByClassName("archive-box__delete");

for (let i = 0; i < deleteCell.length; i++) {
  deleteCell[i].addEventListener('click', function () {

    archive_id = deleteCell[i].getAttribute('data-archive-id');


    // ============================ Delete Archive ============================ //
    document.getElementById("archive-delete-submit-btn").addEventListener("click", studentArchiveDelete);

    function studentArchiveDelete(e) {

      e.preventDefault();

      console.log(archive_id);

      // Creating xhr object
      const xhr = new XMLHttpRequest();

      // Initialize ("true" means asynchronous request)
      xhr.open("POST", "../../model/student/student-archive/student-archive-delete.php", true);

      // Set request header
      xhr.setRequestHeader("Content-Type", "application/json");

      // JavaScript object
      const myData = {
        dataArchiveId: archive_id
      };

      // Converts JavaScript objects to JSON string
      const data = JSON.stringify(myData);

      // Send request with data
      xhr.send(data);

      // Handle response
      xhr.onload = function () {
        if (xhr.status === 200) {
          console.log(xhr.response);
          if (xhr.response === 'SUCCESS') {
            window.location.replace("../student/student-archive.php");
          }
        } else {
          console.log("Error occurred!" + "\nxhr.status: " + xhr.status);
        }
      };
    }
    // ============================ Delete Archive ============================ //
  });
}

