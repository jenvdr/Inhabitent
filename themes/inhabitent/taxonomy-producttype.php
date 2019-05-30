<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package inhabitent
 */
//DISPLAYS THE PRODUCTS WITHIN THEIR TAXONOMIES
get_header();
?>
<div class="shop-archive-content">
	<div id="primary-shop-archive" class="content-area">
		<main id="main-shop-archive" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header-shop-archive">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<!--- Start the Loop */ -->
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

		</main><!-- #main -->
	</div><!-- #primary -->
	</div>

<?php
get_footer();
