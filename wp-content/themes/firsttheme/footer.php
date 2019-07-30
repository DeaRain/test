<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package firstTheme
 */

?>


<footer>
    <div class="container">
        <div class="subscribe-container">
            <div class="subscribe-container__header">
                Підпишись на новини та акції
            </div>

            <div class="subscribe-container__text-box">
                <form>
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введіть email для підписки">
                        <button type="submit" class="btn subscribe-container__submit-bnt"><span class="icon-right-chevron-1_3"></span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="footer-container">
            <div class="footer-container__item">
                <?php wp_nav_menu( [
                    'theme_location'  => '',
                    'menu'            => 'Menu-about',
                    'container'       => false,
                    'container_class' => false,
                    'container_id'    => false,
                    'menu_class'      => 'menu-footer',
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
            </div>
            <div class="footer-container__item">
                <?php wp_nav_menu( [
                    'theme_location'  => '',
                    'menu'            => 'Menu-shop',
                    'container'       => false,
                    'container_class' => false,
                    'container_id'    => false,
                    'menu_class'      => 'menu-footer',
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
            </div>

            <div class="footer-container__item">
                <?php wp_nav_menu( [
                    'theme_location'  => '',
                    'menu'            => 'Menu-client',
                    'container'       => false,
                    'container_class' => false,
                    'container_id'    => false,
                    'menu_class'      => 'menu-footer menu-footer-client',
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

                <a href="<?= get_field("footer_price_url",'option'); ?>" class="contact contact-footer-bot contact-toogle"><?= get_field("footer_price_text",'option'); ?><span class="icon-download"></span></a>
            </div>

            <div class="footer-container__item footer-container__item_partner">
                <?php wp_nav_menu( [
                    'theme_location'  => '',
                    'menu'            => 'Menu-partner',
                    'container'       => false,
                    'container_class' => false,
                    'container_id'    => false,
                    'menu_class'      => 'menu-footer',
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
            </div>

            <div class="footer-container__item">
                <ul id="menu-menu-about12234" class="menu-footer menu-footer-contact">
                    <li id="menu-item-69412" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-69">
                        <a>Контакти</a>
                        <ul class="sub-menu">

                        </ul>
                    </li>
                </ul>

                <?php $footer_phone = get_field("footer_phone",'option');
                $footer_phone_cut = str_replace(array(' ', '(', ')', '-','+'),'',$footer_phone);?>

                <div class="footer_container__toggle">
                    <a href="tel:<?=$footer_phone_cut; ?>" class="contact contact-footer "><?= $footer_phone; ?></a>
                    <a href="mailto:<?= get_field("footer_email",'option'); ?>" class="contact contact-footer "><?= get_field("footer_email",'option'); ?></a>

                    <div class="footer_container_soc">
                        <a href="<?= get_field("footer_facebook",'option'); ?>" class="contact contact-soc"><span class="icon-facebook-logo"></span></a>
                        <a href="<?= get_field("footer_instagram",'option'); ?>" class="contact contact-soc"><span class="icon-instagram-social-outlined-logo"></span></a>
                        <a href="<?= get_field("footer_twitter",'option'); ?>" class="contact contact-soc"><span class="icon-twitter-social-outlined-logo"></span></a>
                        <a href="<?= get_field("footer_youtube",'option'); ?>" class="contact contact-soc"><span class="icon-youtube"></span></a>
                    </div>
                </div>
            </div>



        </div>
    </div>
    <div class="grey-container__footer">
        <div class="container">
            <div class="copyright-container">
                <div class="copyright-container__left">
                    <?= get_field("footer_copyright",'option'); ?>
                </div>

                <div class="copyright-container__right">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/group.svg"
                         class="Group">
                </div>
            </div>
        </div>
    </div>


</footer>

<?php wp_footer(); ?>
</body>
</html>
