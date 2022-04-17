$(document).ready(function () {
  load_data();

  function load_data(query) {
    $.ajax({
      url: "../../model/faculty/faculty-archive/faculty-archive-search.php",
      method: "post",
      data: {
        query: query
      },
      success: function (data) {
        $('#result').html(data);
        let archiveApprove = document.getElementsByClassName("archive-approve");
        let archiveDeny = document.getElementsByClassName("archive-deny");

        for (let i = 0; i < archiveApprove.length; i++) {
          archiveApprove[i].addEventListener('click', function () {
            archive_id = archiveApprove[i].getAttribute('data-archive-id');
            $.ajax({
              url: "../../model/faculty/faculty-archive/faculty-archive-approve.php",
              method: "post",
              data: {
                archive_id: archive_id,
                verification_status: "TRUE"
              },
              success: function (data) {
                window.location.replace("../faculty/faculty-archive.php");
              }
            });
          });
        }
        for (let i = 0; i < archiveDeny.length; i++) {
          archiveDeny[i].addEventListener('click', function () {
            archive_id = archiveDeny[i].getAttribute('data-archive-id');
            $.ajax({
              url: "../../model/faculty/faculty-archive/faculty-archive-deny.php",
              method: "post",
              data: {
                archive_id: archive_id,
                verification_status: "FALSE"
              },
              success: function (data) {
                window.location.replace("../faculty/faculty-archive.php");
              }
            });
          });
        }
      }
    });
  }

  $('#search_archive').keyup(function () {
    var search = $(this).val();
    if (search != '') {
      load_data(search);
    } else {
      load_data();
    }
  });
});