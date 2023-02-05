$(function () {
  $("#open-button").click(function () {
    // icon
    $(this).attr("data-is-open", "true");
    // overlay
    $("#overlay").attr("data-is-open", "true");
    // triangle
    $("#triangle").attr("data-is-open", "true");
    // line
    $("#line").attr("data-is-open", "true");
    // nav
    $("#nav").attr("data-is-open", "true");
    $(".p-header__nav-item").attr("data-is-open", "true");
    $(".p-header__nav-sns").attr("data-is-open", "true");
    // close button
    $("#close-button").attr("data-is-open", "true");
  });
  $("#close-button").click(function () {
    // icon
    $(this).attr("data-is-open", "false");
    // overlay
    $("#overlay").attr("data-is-open", "false");
    // triangle
    $("#triangle").attr("data-is-open", "false");
    // line
    $("#line").attr("data-is-open", "false");
    // nav
    $("#nav").attr("data-is-open", "false");
    $(".p-header__nav-item").attr("data-is-open", "false");
    $(".p-header__nav-sns").attr("data-is-open", "false");
    // close button
    $("#open-button").attr("data-is-open", "false");
  });
});
