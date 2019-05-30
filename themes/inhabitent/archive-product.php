<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Inhabitents
 */
/*
Template Name: Archives
*/
get_header();
?>


<div id="primary-products" class="content-area">
	<main id="main-products" class="site-main">

		<?php if (have_posts()) : ?>

			<header class="product-archive-header">
				<h1> Shop Stuff </h1>
				<div class="product-categories">
					<ul>
						<?php
						$terms = get_terms(array(
							'taxonomy' => 'producttype',
							'hide_empty' => false,
						));
						foreach ($terms as $term) {
							echo "<li><a href=" . esc_url(site_url()) . "/producttype/" . $term->name . ">" . $term->name . "</a></li>";
						}
						?>
					</ul>
				</div>
			</header><!-- .page-header -->

			<div class="product-grid">
				<?php
				/* Start the Loop */
				while (have_posts()) :
					the_post();
					?>
					<div class="product-grid-item">
                        <div class="thumbnail-wrapper">
						<a href="<?php echo esc_url(get_the_permalink(get_the_ID())) ?>" class="product-image-wrapper">
							<?php echo the_post_thumbnail();?>
                        </a>
                </div>
						<div class="product-info">
							<p class="product-title">
								<?php echo get_the_title(); ?>
                            </p>
                            <p id="product-divider">
								...........................................................
							</p>
							<p class="product-price">
								<?php echo "$" . get_field('price'); ?>
							</p>
						</div>
					</div>
				<?php
			endwhile;
		else :
			get_template_part('template-parts/content', 'none');
		endif;
		?>
		</div>

	</main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
