console.log('common file');

$( document ).ready(function() {

        $('.right-drop-list').click(function () {
            $(this).find('.right-drop-list__container').toggleClass('right-drop-list__container_active');
        });

        $('.footer-container__item').click(function () {
            $(this).find('.footer_container__toggle').toggleClass('footer_container__toggle_active');
        });

        $(document).click(function (e){ // событие клика по веб-документу
            var div = $(".right-drop-list"); // тут указываем ID элемента
            if (!div.is(e.target) // если клик был не по нашему блоку
                && div.has(e.target).length === 0)
            { // и не по его дочерним элементам
                div.find('.right-drop-list__container').removeClass('right-drop-list__container_active');// скрываем его
            }
        });



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
                breakpoint: 1199,
                settings: {
                    variableWidth: false,
                    arrows:true,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 767,
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
                    variableWidth: true,
                }
            },
            {
                breakpoint: 767,
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
