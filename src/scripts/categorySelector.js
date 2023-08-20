/**
 * notesページでカテゴリーが変更された際の処理
 */

$(function () {
  $(".p-notes__category-button").click(function () {
    const category = $(this).attr("data-category");
    $(".p-notes__category-button").attr("data-is-selected", "false");
    $(this).attr("data-is-selected", "true");

    $(".p-notes__contents").attr("data-is-show", "false");
    $(`#contents-${category}`).attr("data-is-show", "true");
  });
});
