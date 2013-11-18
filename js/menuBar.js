$(function() {
    $(window).on('scroll resize', function() {
        if ($(window).width() > 768) {
            if ($(window).scrollTop() > $('header').height()) {
                $('#navigation').addClass('clearBorder');
                $('#navContainer').addClass('fixedContainer');
                $('nav').addClass('fixedNav');
                $('.menuFiller').addClass('fillVacatedSpace');
            } else {
                $('#navigation').removeClass('clearBorder');
                $('#navContainer').removeClass('fixedContainer');
                $('nav').removeClass('fixedNav');
                $('.menuFiller').removeClass('fillVacatedSpace');
            }
        }
    });
});
