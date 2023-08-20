/**
 * トップページのロケットアイコンをクリックした際の処理
 */

$(function () {
  $("#rocket-button").on("click", function () {
    $(this).attr("data-clicked", "true");
  });
});
