/** Menu animation **/
$(document).ready(function() {
    $(".drop-link").click(function () {
        console.log('here');
        alert('test');
        $(this).next().toggle().slideDown("slow", function () {
            // Animation complete.
        });
    });
});