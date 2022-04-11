$(document).ready(function () {
  load_data();

  function load_data(query) {
    $.ajax({
      url: "../../model/archive/archive-search.php",
      method: "post",
      data: {
        query: query
      },
      success: function (data) {
        $('#result').html(data);
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