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
                <span class="footer-container__header">
                    Про компанію
                </span>
                <a href="#" class="footer-container__url">Про нас</a>
                <a href="#" class="footer-container__url">Скоро у продажу</a>
                <a href="#" class="footer-container__url">Таблицяя розмірів</a>
                <a href="#" class="footer-container__url">Новини</a>
                <a href="#" class="footer-container__url">Відгуки</a>
                <a href="#" class="footer-container__url">Контакти</a>
            </div>

            <div class="footer-container__item">
                <span class="footer-container__header">
                    магазин
                </span>
                <a href="#" class="footer-container__url">Жінкам</a>
                <a href="#" class="footer-container__url">Чоловікам</a>
                <a href="#" class="footer-container__url">Дітям</a>
                <a href="#" class="footer-container__url">Sale</a>
                <a href="#" class="footer-container__url">Підписка</a>
                <a href="#" class="footer-container__url">Подарункові коробки</a>
            </div>

            <div class="footer-container__item">
                <span class="footer-container__header">
                    Клієнтам
                </span>
                <a href="#" class="footer-container__url">Питання-відповідь</a>
                <a href="#" class="footer-container__url">Доставка і оплата</a>
                <a href="#" class="footer-container__url">Повернення товару</a>
                <a href="#" class="contact contact-footer contact-footer-bot">Прайс-лист <span class="icon-download"></span></a>
            </div>

            <div class="footer-container__item">
                <span class="footer-container__header">
                    Партнерам
                </span>
                <a href="#" class="footer-container__url">Опт</a>
                <a href="#" class="footer-container__url">Крупний опт</a>
                <a href="#" class="footer-container__url">Дропшипінг</a>
                <a href="#" class="footer-container__url">Корпоративні замовлення</a>
            </div>

            <div class="footer-container__item footer-container__item_last">
                <span class="footer-container__header">
                    Контакти
                </span>

                <a href="#" class="contact contact-footer ">+38 (096) 762-40-96</a>
                <a href="#" class="contact contact-footer ">Nesterenkoluda.ln@gmail.com</a>

                <div class="footer_container_soc">
                    <a href="#" class="contact contact-soc"><span class="icon-facebook-logo"></span></a>
                    <a href="#" class="contact contact-soc"><span class="icon-instagram-social-outlined-logo"></span></a>
                    <a href="#" class="contact contact-soc"><span class="icon-twitter-social-outlined-logo"></span></a>
                    <a href="#" class="contact contact-soc"><span class="icon-youtube"></span></a>
                </div>

            </div>



        </div>
    </div>
    <div class="grey-container__footer">
        <div class="container">
            <div class="copyright-container">
                <div class="copyright-container__left">
                    ©Сopyright 2018 - V&T SOCKS
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
