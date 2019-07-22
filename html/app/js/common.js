console.log('common file');

$( document ).ready(function() {
    $('.js-main-slider').slick({
        dots:true,
        arrows:false,
    });

    $('.infoline-slider-js').slick({
        // dots:true,
        arrows:false,
        slidesToShow: 6,
        variableWidth: true,
        // draggable: true
        responsive: [
            {
                breakpoint: 500,
                settings: {
                    variableWidth: false,
                    arrows:true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
    });

    $('.production-slider').slick({
        dots:true,
        arrows:true,
        slidesToShow: 4,
        slidesToScroll: 2,
        variableWidth: true,
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
