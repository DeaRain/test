console.log('common file');

$( document ).ready(function() {
    $('.js-single-item').slick({
        dots:true,
        arrows:false,
    });
    $('.production-slider').slick({
        dots:true,
        arrows:true,
        slidesToShow: 4,
        slidesToScroll: 2
    });
});

$(document).ready( function() {
    $('.dropdown-toggle').dropdown();
});