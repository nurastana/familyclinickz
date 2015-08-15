jQuery(document).ready(function ($) {
    $('.catalog-tabs__item').eq(0).addClass('active');
    $('.catalog-tabs-content-box').eq(0).addClass('active');
    $('.catalog-tabs__item').click(function () {
        var itemCount = $(this).index();
        $(this).addClass('active').siblings().removeClass('active');
        $('.catalog-tabs-content').find('.catalog-tabs-content-box').eq(itemCount).addClass('active').siblings().removeClass('active');
    });
});
$(document).ready(function () {
    $('#slider').slick({
        speed: 1300,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 6000,
        arrows: false,
        draggable: true
    });
});
jQuery(document).ready(function ($) {
    $('.top-menu__item').click(function () {
        if ($(this).hasClass('active')) {
            $('.top-menu-inside, .top-menu__item, .mask').removeClass('active');
        } else {
            if ($(this).next('.top-menu-inside').length == 1) {
                $(this).toggleClass('active').siblings().removeClass('active');
                $(this).next('.top-menu-inside').toggleClass('active');
                $('.mask').addClass('active');
            } else {
                $(this).siblings().removeClass('active');
                $('.mask').removeClass('active');
            }
        }
    });
    $('.mask').click(function () {
        $('.top-menu-inside, .top-menu__item, .mask').removeClass('active');
    });
});