<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package firstTheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<header>
    <div class="container">
        <div class="header-container">
            <div class="header-container__left">
                <div class="menu-button">
                    <div class="menu-button__logo">
                        <i class="icon-menu"></i>
                    </div>
                    <span class="menu-button__text">
                            MENU
                        </span>
                </div>

                <div class="header-container__phone">
                    <a class="contact" href="#" >+38 (096) 762-40-96 </a>
                </div>
            </div>

            <div class="header-container__center-logo">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.svg" class="logo__img">
            </div>

            <div class="header-container__right">
                <div class="interface-item">
                    <span class="icon-magnifying-glass interface-item__icon"></span>
                </div>
                <div class="interface-item">
                    <span class="icon-heart interface-item__icon "></span>
                    <span class="interface-item__counter">4</span>
                </div>
                <div class="interface-item">
                    <span class="icon-shopping-bag interface-item__icon"></span>
                    <span class="interface-item__counter">4</span>
                </div>
                <div class="interface-item">
                    <span class="icon-user interface-item__icon"></span>
                </div>


                <div class="header-container__right-drop-lists">
                    <div class="right-drop-list">
                        <a class="right-drop-list__header" href="#">UAH</a>
                        <!--                            <span class="icon-down-arrow-of-angle"></span>-->
                        <div class="right-drop-list__container">
                            <a class="right-drop-list__item" href="#">UAH</a>
                            <a class="right-drop-list__item" href="#">USD</a>
                        </div>
                    </div>

                    <div class="right-drop-list">
                        <a class="right-drop-list__header" href="#">UA</a>
                        <!--                            <span class="icon-down-arrow-of-angle"></span>-->
                        <div class="right-drop-list__container">
                            <a class="right-drop-list__item" href="#">UA</a>
                            <a class="right-drop-list__item" href="#">RU</a>
                            <a class="right-drop-list__item" href="#">EN</a>

                            <?php the_widget('qTranslateXWidget', array('widget-css-off' =>true,
                                'hide-title' =>true,
                                'hide-title-colon' =>true,
                                'type' =>'custom',
                                'format' =>'%c') );?>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
<?php wp_nav_menu( [
	'theme_location'  => '',
	'menu'            => 'Menu 1',
	'container'       => false,
	'container_class' => false,
	'container_id'    => false,
	'menu_class'      => 'top-menu',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	'depth'           => 0,
	'walker'          => '',
] ); ?>


    <div class="container">
        <div class="header-menu-container">
            <nav>
                <div class="top-menu-changer">
                    <span class="top-menu-changer__text">каталог продукції</span>
                    <span class="icon-down-arrow-of-angle top-menu-changer__arrow"></span>
                </div>




                <ul class="top-menu">
                    <li class="top-menu__item">
                        <a href="#" class="top-menu__item-url">Жінкам</a>
                        <div class="top-menu__item-container">
                            <div class="container">
                                <div class="top-menu__item-container-inside">
                                    <a href="#" class="top-menu__item-container-item">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/woman-1.svg" class="top-menu__item-container-item-image">
                                        <span class="top-menu__item-container-item-header">
                                            Довгі шкарпетки
                                        </span>
                                    </a>
                                    <a class="top-menu__item-container-item">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/woman-2.svg" class="top-menu__item-container-item-image">
                                        <span class="top-menu__item-container-item-header">
                                            Класичні шкарпетки
                                        </span>
                                    </a>
                                    <a class="top-menu__item-container-item">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/woman-3.svg" class="top-menu__item-container-item-image">
                                        <span class="top-menu__item-container-item-header">
                                            Короткі шкарпетки
                                        </span>
                                    </a>
                                    <a class="top-menu__item-container-item">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/woman-4.svg" class="top-menu__item-container-item-image">
                                        <span class="top-menu__item-container-item-header">
                                            Слід, підслідок
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="top-menu__item">
                        <a href="#" class="top-menu__item-url">Чоловікам</a>
                        <div class="top-menu__item-container">
                            <div class="container">
                                <div class="top-menu__item-container-inside">
                                    <a href="#" class="top-menu__item-container-item">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/man-1.svg" class="top-menu__item-container-item-image">
                                        <span class="top-menu__item-container-item-header">
                                            Довгі шкарпетки
                                        </span>
                                    </a>
                                    <a class="top-menu__item-container-item">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/man-2.svg" class="top-menu__item-container-item-image">
                                        <span class="top-menu__item-container-item-header">
                                            Класичні шкарпетки
                                        </span>
                                    </a>
                                    <a class="top-menu__item-container-item">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/man-3.svg" class="top-menu__item-container-item-image">
                                        <span class="top-menu__item-container-item-header">
                                            Короткі шкарпетки
                                        </span>
                                    </a>
                                    <a class="top-menu__item-container-item">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/man-4.svg" class="top-menu__item-container-item-image">
                                        <span class="top-menu__item-container-item-header">
                                            Слід, підслідок
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="top-menu__item">
                        <a href="#" class="top-menu__item-url">Дітям</a>
                        <div class="top-menu__item-container">
                            <div class="container">
                                <div class="top-menu__item-container-inside">
                                    <a href="#" class="top-menu__item-container-item">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/kid-1.svg" class="top-menu__item-container-item-image">
                                        <span class="top-menu__item-container-item-header">
                                            Довгі шкарпетки
                                        </span>
                                    </a>
                                    <a class="top-menu__item-container-item">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/kid-2.svg" class="top-menu__item-container-item-image">
                                        <span class="top-menu__item-container-item-header">
                                            Класичні шкарпетки
                                        </span>
                                    </a>
                                    <a class="top-menu__item-container-item">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/kid-3.svg" class="top-menu__item-container-item-image">
                                        <span class="top-menu__item-container-item-header">
                                            Короткі шкарпетки
                                        </span>
                                    </a>
                                    <a class="top-menu__item-container-item">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/kid-4.svg" class="top-menu__item-container-item-image">
                                        <span class="top-menu__item-container-item-header">
                                            Слід, підслідок
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="top-menu__item">
                        <a href="#" class="top-menu__item-url top-menu__item-url_hot">SALE</a>
                    </li>
                    <li class="top-menu__item">
                        <a href="#" class="top-menu__item-url">Підписка</a>
                    </li>
                    <li class="top-menu__item">
                        <a href="#" class="top-menu__item-url">Подарункові коробки</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
