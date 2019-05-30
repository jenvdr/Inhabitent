<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package inhabitent
 */

get_header();
?>
<div class="shop">
<?php
   $args = array( 'post_type' => 'product', 'order' => 'ASC' ); //<——— ADD AMOUNT

   $products = new WP_Query( $args ); // instantiate our object
?>

<?php if ( $products->have_posts() ) : ?>

   <?php while ( $products->have_posts() ) : $products->the_post(); ?>

      <?php the_post();
				    the_title(); //<!-- ADD TEMPLATE TAG FOR IMG,etc. -->
            the_post_thumbnail();
            ?>
   <?php endwhile; ?>
   <?php wp_reset_postdata(); ?>

<?php else : ?>

      <h2>Nothing found!</h2>

<?php endif; ?>
</div>
<?php
get_footer();
?>
