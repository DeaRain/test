<?php
get_header();

$tepm = get_queried_object();
var_dump($tepm);
?>

<?php if ( have_posts() ) : ?>

    <header class="page-header">
        <?php
        the_archive_title( '<h1 class="page-title">', '</h1>' );
        the_archive_description( '<div class="archive-description">', '</div>' );
        ?>
    </header><!-- .page-header -->

    <?php
    /* Start the Loop */

    while ( have_posts() ) :
        the_post();
    ?>

        <?php setup_postdata($post); ?>
<!--        --><?php //$product_fields = get_fields(); ?>
<!---->
<!--        <div class="production-slider__item">-->
<!--            <img class="production-slider__item-img" src="--><?php //the_post_thumbnail_url()?><!--" alt="">-->
<!--            <span class="production-slider__item-name">--><?php //the_title()?><!--</span>-->
<!--            <div class="production-slider__item-prices">-->
<!--                <span class="production-slider__item-price">--><?php //echo $product_fields["price"]." UAH"?><!--</span>-->
<!--                --><?php //if ($product_fields["price_old"]>0) : ?>
<!--                    <span class="production-slider__item-old-price">--><?php //echo $product_fields["price_old"]." UAH"?><!--</span>-->
<!--                --><?php //endif; ?>
<!--            </div>-->
<!--            <div class="production-slider_extend-info">-->
<!--                --><?php //echo $product_fields["status"]?>
<!--            </div>-->
<!--        </div>-->

        <?php  wp_reset_postdata(); // сброс ?>

    <?php
        /*
         * Include the Post-Type-specific template for the content.
         * If you want to override this in a child theme, then include a file
         * called content-___.php (where ___ is the Post Type name) and that will be used instead.
         */
        get_template_part( 'template-parts/content', get_post_type() );

    endwhile;

    the_posts_navigation();

else :

    get_template_part( 'template-parts/content', 'none' );

endif;
?>

<?php
get_footer();