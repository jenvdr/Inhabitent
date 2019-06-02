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

              <!-- SHOP STUFF --->
              <section class="shop-stuff">
          <h2>Shop Stuff</h2>
          <div class="product-blocks">
            <div class="product-block-wrapper">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/product-type-icons/do.svg" alt="Do">
              <p>Get back to nature with all the tools and toys you need to enjoy the great outdoors.</p>
              <p><a href="http://localhost:8887/inhabitent-project/producttype/do/" class="btn">Do Stuff</a></p>
            </div>
          <div class="product-block-wrapper">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/product-type-icons/eat.svg" alt="Eat">
            <p>Nothing beats food cooked over a fire. We have all you need for good camping eats.</p>
            <p><a href="http://localhost:8887/inhabitent-project/producttype/eat/" class="btn">Eat Stuff</a></p>
          </div>
          <div class="product-block-wrapper">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/product-type-icons/sleep.svg" alt="Sleep">
            <p>Get a good night's rest in the wild in a home away from home that travels well.</p>
            <p><a href="http://localhost:8887/inhabitent-project/producttype/sleep/" class="btn">Sleep Stuff</a></p>
          </div>
            <div class="product-block-wrapper">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/product-type-icons/wear.svg" alt="Wear">
              <p>From flannel shirts to toques, look the part while roughing it in the great outdoors.</p>
              <p><a href="http://localhost:8887/inhabitent-project/producttype/wear/" class="btn">Wear Stuff</a></p>
            </div>
          </div>
        </section>


        <!-- JOURNAL STUFF -->
        <div class="journal-stuff">
        <h2>Inhabitent Journal</h2>
    </div>
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
      <h2>Latest Adventures</h2>
      <?php
         $args = array( 'post_type' => 'adventure', 'order' => 'ASC', 'posts_per_page' => 4); //<——— ADD AMOUNT

         $adventures = new WP_Query( $args ); // instantiate our object
      ?>
      <ul>
      <?php if ( $adventures->have_posts() ) : ?>

        <?php while ( $adventures->have_posts() ) : $adventures->the_post(); ?>
        <li>
          <div class="adventure-wrapper">
            <img href=<?php echo the_post_thumbnail( 'full' ) ?>
          <div class="post-info-wrapper">
            <h3><?php echo the_title() ?></h3>
          <a href="<?php echo the_permalink() ?>">Read More</a>
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
