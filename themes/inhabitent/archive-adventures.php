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


<div id="primary-adventuress" class="content-area">
	<main id="main-adventuress" class="site-main">

		<?php if (have_posts()) : ?>

			<header class="adventures-archive-header">
				<h1> Adventures </h1>
				<div class="adventures-categories">
					<ul>
						<?php
						$terms = get_terms(array(
							'taxonomy' => 'adventurestype',
							'hide_empty' => false,
						));
						foreach ($terms as $term) {
							echo "<li><a href=" . esc_url(site_url()) . "/adventurestype/" . $term->name . ">" . $term->name . "</a></li>";
						}
						?>
					</ul>
				</div>
			</header><!-- .page-header -->

			<div class="adventures-grid">
				<?php
				/* Start the Loop */
				while (have_posts()) :
					the_post();
					?>
					<div class="adventures-grid-item">
                        <div class="thumbnail-wrapper">
						<a href="<?php echo esc_url(get_the_permalink(get_the_ID())) ?>" class="adventures-image-wrapper">
							<?php echo the_post_thumbnail();?>
                        </a>
                </div>
						<div class="adventures-info">
							<p class="adventures-title">
								<?php echo get_the_title(); ?>
                            </p>
                            <p id="adventures-divider">
								...........................................................
							</p>
							<p class="adventures-price">
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
