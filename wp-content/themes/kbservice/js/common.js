if (typeof $ != 'function') {
    var $ = jQuery;
}
$(document).ready(function () {

    //var table = $('.price-body tr');
    $('.price-body tr:even').addClass('odd');
    $('.price-body td:not(:first-child)').addClass('c');
    $('.price-body tr').hover(
        function () {
            $(this).addClass('hover');
        },
        function () {
            $(this).removeClass('hover');
        }
    );
    $("ul.tabs").tabs("div.panes > div");
    $("ul.tabss").tabs("div.paness > div");
});