<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-products
 *
 * @package firstTheme
 */

get_header();
?>
<?php
while ( have_posts() ) :
    the_post();

    the_content();

    the_title();
    the_excerpt();
    ?>


    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
<?php
//			get_template_part( 'template-parts/content', get_post_type() );

endwhile; // End of the loop.
?>
<?php
get_footer();
