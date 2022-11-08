$(function () {

    $('.header__btn').on('click' , function () {
        $('.rightside-menu').removeClass('rightside-menu--close');
    });

    $('.rightside-menu__close').on('click' , function () {
        $('.rightside-menu').addClass('rightside-menu--close');
    });

    $('.top__slider').slick({
        dots: true,
        arrows: false,
        fade: true, //Чтобы менялась плавно\
        autoplay: true //Автоматически меняется слайд(стандарт 3 сек)
    }) //Активация слайдера(slick-carousel)
}); //Появляющиеся сбоку меню on/off
