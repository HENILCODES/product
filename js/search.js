$(document).ready(function () {
  $("#search").focus();
  $("#search").on("keyup", function () {
    var inputValue = $(this).val().toLowerCase();
    $("#Search_table tr").filter(function () {
      $(this).toggle($(this).text().toLowerCase().indexOf(inputValue) > -1);
    });
  });
});