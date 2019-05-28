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
// HOMEPAGE
get_header();
?>

<div class="homepage">

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
      <section class="home-hero">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/inhabitent-logo-full.svg" alt="Inhabitent Logo">
      </section>

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );
        ?>
        <div class="GIVEMEANAMEPLEASE">
        <?php
$args = array( 'post_type' => 'post', 'order' => 'ASC', 'posts_per_page' => 3);
   $products = new WP_Query( $args ); // instantiate our object
?>
<?php if ( $products->have_posts() ) : ?>
    <?php while ( $products->have_posts() ) : $products->the_post(); ?>
        <div class="home-blog-posts">
          <img href="<?php echo the_post_thumbnail( 'medium' ) ?>">
          <h3><?php the_time( get_option( 'date_format' ) ) ?> / <?php echo get_comments_number() ?></h3>
          <h3><?php echo the_title() ?></h3>
          <button><a href="<?php echo the_permalink() ?>"></a></button>
        </div>
   <?php endwhile; ?>
   <?php wp_reset_postdata(); ?>
<?php else : ?>
      <h2>Nothing found!</h2>
<?php endif; ?>
        </div>
        <?php
		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

</div>
</div>
<?php
get_footer();
