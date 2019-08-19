<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-products
 *
 * @package firstTheme
 */

get_header();
$product = get_post();
$product_fields = get_fields();
?>

    <div class="container">
        <div class="product">
            <div class="product__top">
                <div class="product__left">
                    <div class="product__img">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                    </div>
                </div>
                <div class="product__right">
                    <span class="product__name">Назва: <?php the_title(); ?></span>
                    <span class="product__status">Статус: <?php echo $product_fields['status']; ?></span>
                    <span class="product__price">Ціна: <?php echo $product_fields['price']; ?></span>
                    <span class="product__old-price">Стара ціна: <?php echo $product_fields['old_price']; ?></span>
                    <span class="product__material">Матеріал: <?php echo $product_fields['material']; ?></span>

                    <ul class="product__color"> Доступні кольори:
                        <?php foreach ($product_fields['color'] as $color) : ?>
                            <li class="product__color-item"><?php echo $color; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="product__bot">
                <?php the_excerpt(); ?>
            </div>

        </div>
    </div>

<?php
get_footer();
