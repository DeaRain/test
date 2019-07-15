console.log('common file');

$( document ).ready(function() {
    $('.js-main-slider').slick({
        dots:true,
        arrows:false,
    });
    $('.production-slider').slick({
        dots:true,
        arrows:true,
        slidesToShow: 4,
        slidesToScroll: 2,
        variableWidth: true
    });
});

$(document).ready( function() {
    $('.dropdown-toggle').dropdown();
});