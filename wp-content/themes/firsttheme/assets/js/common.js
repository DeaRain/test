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
        // variableWidth: true,
        responsive: [
            {
                breakpoint: 1199,
                settings: {
                    dots:true,
                    arrows:true,
                    slidesToShow: 3,
                    slidesToScroll: 2,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    dots:true,
                    arrows:true,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots:true,
                    arrows:true,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            ]
    });
});

// $(document).ready( function() {
//     $('.dropdown-toggle').dropdown();
// });