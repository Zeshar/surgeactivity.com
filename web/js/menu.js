/** Menu animation **/
$(document).ready(function() {
    $('.drop-link').click(function () {
        if($(this).attr("href") !== '/admin/dashboard') {
            if ($(this).hasClass('opened-sub')) {
                $('.opened-sub').removeClass('opened-sub');
                $('.opened').slideToggle("slow", function () {}).removeClass('opened');;
            } else {
                $('.opened-sub').removeClass('opened-sub');
                $(this).addClass('opened-sub');
                // We hide the opened drop menus.
                $('.opened').slideToggle("slow", function () {}).removeClass('opened');
                // We show the clicked sub menu
                $(this).next().addClass('opened');
                $(this).next().slideToggle("slow", function () {});
            }
        }
    });

    $('.drop-link').mouseenter(function() {
        if($(this).attr("href") == '/admin/dashboard') {
            $(this).next().slideToggle("slow", function () {
                // Animation complete.
            });
        }
    });
});