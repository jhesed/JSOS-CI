$(function () {
    $("#back-top").hide();
    $(window).scroll(function () {
        if ($(this).scrollTop() > 150) {
            $('#back-top').fadeIn();
        } else {
            $('#back-top').fadeOut();
        }
    });
});
jQuery('.back-to-top').click(function () {
    jQuery('html, body').animate({
        scrollTop: 0
    }, 'slow');
});