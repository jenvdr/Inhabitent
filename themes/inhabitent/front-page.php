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

         <h2>Inhabitent Journal</h2>
         <div class="blogposts">
        <?php
$args = array( 'post_type' => 'post', 'order' => 'ASC', 'posts_per_page' => 3);
   $products = new WP_Query( $args ); // instantiate our object
?>
<?php if ( $products->have_posts() ) : ?>
  <?php while ( $products->have_posts() ) : $products->the_post(); ?>
    <div class="home-blog-posts">
      <ul>
        <li>
          <div class="thumbnail-wrapper">
            <img href=<?php echo the_post_thumbnail( 'full' ) ?>
          </div>
          <div class="post-info-wrapper">
            <span class="entry-meta"> <?php the_time( get_option( 'date_format' ) ) ?> / <?php echo get_comments_number() ?></span>
            <h3><?php echo the_title() ?></h3>
          <button class="read-entry"><a href="<?php echo the_permalink() ?>">Read Entry</a></button>
          </div>
      </li>
      </ul>
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
      <!-- instantiate ADVENTURES --->

      <div class="adventures">
      <?php
         $args = array( 'post_type' => 'adventure', 'order' => 'ASC', 'posts_per_page' => 4); //<——— ADD AMOUNT

         $adventures = new WP_Query( $args ); // instantiate our object
      ?>
      <ul>
      <?php if ( $adventures->have_posts() ) : ?>

        <?php while ( $adventures->have_posts() ) : $adventures->the_post(); ?>
        <li>
          <div class="adventure-wrapper">
            <img href=<?php echo the_post_thumbnail( 'large' ) ?>
          <div class="post-info-wrapper">
            <h3><?php echo the_title() ?></h3>
          <button class="read-entry"><a href="<?php echo the_permalink() ?>">Read More</a></button>
          </div>
          </div>
      </li>
        <?php endwhile; ?>
        </ul>
        <?php wp_reset_postdata(); ?>

      <?php else : ?>

            <h2>Nothing found!</h2>

      <?php endif; ?>
      </div>

		</main><!-- #main -->
	</div><!-- #primary -->

</div>
</div>
<?php
get_footer();
