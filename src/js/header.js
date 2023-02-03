$(function () {
  $("#open-button").click(function () {
    // icon
    $(this).attr("data-is-open", "true");
    // overlay
    $("#overlay").attr("data-is-open", "true");
  });
});
