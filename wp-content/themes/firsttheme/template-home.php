<?php

/* Template Name: Головна */

$slider = get_field("slider");
//var_dump($slider);
get_header();
?>
<?php //if(count($slider) > 0) :?>
<!--<div class="main-slider js-main-slider slider__dots_main-theme">-->
<!--    <div class="main-slider__item">-->
<!--        <img src="--><?php //echo get_template_directory_uri() ?><!--/assets/img/main-slider/slider1.jpg" alt="">-->
<!--        <a class="main-slider__button" href="#">перейти в каталог</a>-->
<!--    </div>-->
<!---->
<!--    --><?php //foreach ($slider as $slide) : ?>
<!---->
<!--    <div class="main-slider__item"><img src="--><?php //echo $slide["img"]?><!--" alt=""></div>-->
<!---->
<!--    --><?php //if(count($slide["text"]) > 0) :?>
<!---->
<!--        <a class="main-slider__button" href="#">перейти в каталог</a>-->
<!---->
<!--        --><?php //endif?>
<!---->
<!--    --><?php //endforeach; ?>
<!---->
<!---->
<!--</div>-->
<?php //endif?>

<!--<pre> --><?php //var_dump($slider) ?><!--</pre>-->

<div class="main-slider main-slider_full js-main-slider slider__dots_main-theme">
<!--    <div class="main-slider__item ">-->
<!--        <img src="--><?php //echo get_template_directory_uri() ?><!--/assets/img/main-slider/slider1.jpg" alt="">-->
<!--        <a class="main-slider__button" href="#">перейти в каталог</a>-->
<!--    </div>-->
<!--    <div class="main-slider__item "><img src="--><?php //echo get_template_directory_uri() ?><!--/assets/img/main-slider/slider2.jpg" alt=""></div>-->
<!--    <div class="main-slider__item "><img src="--><?php //echo get_template_directory_uri() ?><!--/assets/img/main-slider/slider3.jpg" alt=""></div>-->
<!--    <div class="main-slider__item "><img src="--><?php //echo get_template_directory_uri() ?><!--/assets/img/main-slider/slider3.jpg" alt=""></div>-->

    <?php foreach ($slider as $slide) : ?>
        <div class="main-slider__item">
            <img src="<?php echo $slide["img"]?>" alt="">
            <a class="main-slider__button" href="<?php echo $slide["link"]?>"><?php echo $slide["text"]?></a>
        </div>
    <?php endforeach; ?>



</div>

<div class="main-slider main-slider_mob js-main-slider slider__dots_main-theme">
    <div class="main-slider__item "><img src="<?php echo get_template_directory_uri() ?>/assets/img/main-slider/slider-mob.jpg" alt=""></div>
    <div class="main-slider__item "><img src="<?php echo get_template_directory_uri() ?>/assets/img/main-slider/slider-mob.jpg" alt=""></div>
</div>


<div class="container">
    <div class="our-productions">
        <div class="our-productions__top">
            <span class="our-productions__header">
                Наша продукція
            </span>
            <div class="our-productions__tabs">
                <ul class="nav">
                    <li><a class="active" data-toggle="tab" href="#panel1">новинки</a></li>
                    <li><a data-toggle="tab" href="#panel2">SALE</a></li>
                </ul>
            </div>
        </div>


        <div class="our-productions__content">
            <div class="tab-content">
                <div id="panel1" class="tab-pane fade in active show">
                    <div class="production-slider slider__dots_main-theme slider__dots_our-productions-style slider__arrows_main-theme">
                        <div class="production-slider__item">
                            <img class="production-slider__item-img" src="<?php echo get_template_directory_uri() ?>/assets/img/sock1.png" alt="">
                            <span class="production-slider__item-name">Шкарпетки короткі V&T</span>
                            <div class="production-slider__item-prices">
                                <span class="production-slider__item-price">65.00 UAH</span>
                            </div>
                            <div class="production-slider_extend-info">
                                NEW
                            </div>
                        </div>
                        <div class="production-slider__item">
                            <img class="production-slider__item-img" src="<?php echo get_template_directory_uri() ?>/assets/img/sock2.png" alt="">
                            <span class="production-slider__item-name">Шкарпетки короткі V&T</span>
                            <div class="production-slider__item-prices">
                                <span class="production-slider__item-price">65.00 UAH</span>
                            </div>
                            <div class="production-slider_extend-info">
                                NEW
                            </div>
                        </div>
                        <div class="production-slider__item">
                            <img class="production-slider__item-img" src="<?php echo get_template_directory_uri() ?>/assets/img/sock3.png" alt="">
                            <span class="production-slider__item-name">Шкарпетки короткі V&T</span>
                            <div class="production-slider__item-prices">
                                <span class="production-slider__item-price">65.00 UAH</span>
                                <span class="production-slider__item-old-price">70.00 UAH</span>
                            </div>
                            <div class="production-slider_extend-info">
                                -10%
                            </div>
                        </div>
                        <div class="production-slider__item">
                            <img class="production-slider__item-img" src="<?php echo get_template_directory_uri() ?>/assets/img/sock4.png" alt="">
                            <span class="production-slider__item-name">Шкарпетки короткі V&T</span>
                            <div class="production-slider__item-prices">
                                <span class="production-slider__item-price">65.00 UAH</span>
                            </div>
                            <div class="production-slider_extend-info">
                                NEW
                            </div>
                        </div>
                        <div class="production-slider__item">
                            <img class="production-slider__item-img" src="<?php echo get_template_directory_uri() ?>/assets/img/sock2.jpg" alt="">
                            <span class="production-slider__item-name">Шкарпетки короткі V&T</span>
                            <div class="production-slider__item-prices">
                                <span class="production-slider__item-price">65.00 UAH</span>
                                <span class="production-slider__item-old-price">70.00 UAH</span>
                            </div>
                            <div class="production-slider_extend-info">
                                -20%
                            </div>
                        </div>
                        <div class="production-slider__item">
                            <img class="production-slider__item-img" src="<?php echo get_template_directory_uri() ?>/assets/img/sock1.jpg" alt="">
                            <span class="production-slider__item-name">Шкарпетки короткі V&T</span>
                            <div class="production-slider__item-prices">
                                <span class="production-slider__item-price">65.00 UAH</span>
                                <span class="production-slider__item-old-price">70.00 UAH</span>
                            </div>
                            <div class="production-slider_extend-info">
                                NEW
                            </div>
                        </div>
                        <div class="production-slider__item">
                            <img class="production-slider__item-img" src="<?php echo get_template_directory_uri() ?>/assets/img/sock1.jpg" alt="">
                            <span class="production-slider__item-name">Шкарпетки короткі V&T</span>
                            <div class="production-slider__item-prices">
                                <span class="production-slider__item-price">65.00 UAH</span>
                                <span class="production-slider__item-old-price">70.00 UAH</span>
                            </div>
                            <div class="production-slider_extend-info">
                                NEW
                            </div>
                        </div>
                    </div>

                </div>
                <div id="panel2" class="tab-pane fade">
                    <h3>Панель 2</h3>
                    <p>Содержимое 2 панели...</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="grey-container">
    <div class="container">
        <div class="infoline infoline-slider-js slider__arrows_main-theme slider__arrows_info-theme">
            <div class="">
                <div class="infoline__item">
                    <span class="infoline__icon icon-like" style="font-size: 45px"></span>
                    <span class="infoline__header">НАЯВНІСТЬ</span>
                    <span class="infoline__info">Весь представлений асортимент є в наявності</span>
                </div>
            </div>
            <div class="">
                <div class="infoline__item">
                    <span class="infoline__icon icon-handshake" style="font-size: 54px; margin-top: -5px"></span>
                    <span class="infoline__header">СПІВПРАЦЯ</span>
                    <span class="infoline__info">Вигідні умови співпраці щодо оптових закупок</span>
                </div>
            </div>
            <div class="">
                <div class="infoline__item">
                    <span class="infoline__icon icon-exchange" style="font-size: 45px"></span>
                    <span class="infoline__header">ДРОПШИПІНГ</span>
                    <span class="infoline__info">Працюємо за системою дропшипінгу </span>
                </div>
            </div>
            <div class="">
                <div class="infoline__item">
                    <span class="infoline__icon icon-online-shop" style="font-size: 49px"></span>
                    <span class="infoline__header">ОПЛАТА</span>
                    <span class="infoline__info">Можливість оплатити замовлення на сайті</span>
                </div>
            </div>
            <div class="">
                <div class="infoline__item">
                    <span class="infoline__icon icon-shipped" style="font-size: 55px; margin-top: -5px"></span>
                    <span class="infoline__header">ДОСТАВКА</span>
                    <span class="infoline__info">Доставка в максимально швидкі терміни </span>
                </div>
            </div>
            <div class="">
                <div class="infoline__item infoline__item_last">
                    <span class="infoline__icon icon-label" style="font-size: 45px"></span>
                    <span class="infoline__header">ЗНИЖКИ</span>
                    <span class="infoline__info">Вигідна система знижок для постійних клієнтів</span>
                </div>
            </div>
        </div>
    </div>
</div>



<?php
// параметры по умолчанию
$posts = get_posts( array(
'numberposts' => 2,
'category'    => 0,
'orderby'     => 'date',
'order'       => 'ASC',
'include'     => array(),
'exclude'     => array(),
'meta_key'    => '',
'meta_value'  =>'',
'post_type'   => 'post',
'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

//echo "<pre>";
//var_dump($posts);
//echo "</pre>";
?>


<?php foreach ($posts as $post) : ?>
<?php  setup_postdata($post); ?>
    <div class="news-block">
        <img src="<?php the_post_thumbnail_url()?>" alt="" class="news-block__img">
        <span class="news-block__header"><?php the_title(); ?></span>
        <span class="news-block__desc"><?php the_excerpt(); ?></span>
        <a href="<?php the_permalink(); ?>">Link</a>
    </div>
    <?php  wp_reset_postdata(); // сброс ?>
<?php //echo $post->post_title?>
<?php endforeach; ?>






<div class="container">
    <div class="news-container">
        <span class="news-container__header">
            Новини
        </span>
        <div class="news-container__news">
            <div class="news-container__left">
                <div class="news-block">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/news1.jpg" alt="" class="news-block__img">
                    <span class="news-block__header">Не впускайте можливість бути яскравим - кольорові шкарпетки в моді!</span>
                    <span class="news-block__desc">Бажаєте бути модним? Мати свій особливий стиль і бути тим, кому наслідують? А можливо ви просто любите все прикольне і стильне? Тоді швидше знайдіть місце в своєму гардеробі для нетривіальних кольорових сучасних шкарпеток.</span>
                </div>
            </div>
            <div class="news-container__right">
                <div class="news-block">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/news2.jpg" alt="" class="news-block__img">
                    <span class="news-block__header">Босоніжки зі шкарпетками: жіноча мода, комфорт або несмак</span>
                    <span class="news-block__desc">Бажаєте бути модним? Мати свій особливий стиль і бути тим, кому наслідують? А можливо ви просто любите все прикольне і стильне? Тоді швидше знайдіть місце в своєму гардеробі для нетривіальних кольорових сучасних шкарпеток.</span>
                </div>
            </div>
        </div>
        <div class="news-container__button">
            <a href="#" class="main-theme-button">Всі новини</a>
        </div>
    </div>
</div>

<div class="grey-container">
    <div class="container">
        <div class="about">
            <span class="about__header">
про нас
            </span>

            <span class="about__desc">
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</span>
            <span class="about__desc about__desc_second">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            </span>

            <div class="about__button">
                <a href="#" class="main-theme-button">читати більше</a>
            </div>
        </div>
    </div>
</div>

<div class="flex-container">
    <div class="photo-tape">
        <span class="photo-tape__header">#V&T_Socks</span>
        <div class="photo-tape__photos">
            <div class="photo-tape__photo"><img src="<?php echo get_template_directory_uri() ?>/assets/img/bot-sock1.png" alt=""></div>
            <div class="photo-tape__photo"><img src="<?php echo get_template_directory_uri() ?>/assets/img/bot-sock2.png" alt=""></div>
            <div class="photo-tape__photo"><img src="<?php echo get_template_directory_uri() ?>/assets/img/bot-sock3.png" alt=""></div>
            <div class="photo-tape__photo"><img src="<?php echo get_template_directory_uri() ?>/assets/img/bot-sock4.png" alt=""></div>
            <div class="photo-tape__photo"><img src="<?php echo get_template_directory_uri() ?>/assets/img/bot-sock5.png" alt=""></div>
            <div class="photo-tape__photo"><img src="<?php echo get_template_directory_uri() ?>/assets/img/bot-sock6.png" alt=""></div>
            <div class="photo-tape__photo"><img src="<?php echo get_template_directory_uri() ?>/assets/img/bot-sock7.png" alt=""></div>
            <div class="photo-tape__photo"><img src="<?php echo get_template_directory_uri() ?>/assets/img/bot-sock8.png" alt=""></div>
        </div>
    </div>
</div>




<?php
get_footer();
?>
