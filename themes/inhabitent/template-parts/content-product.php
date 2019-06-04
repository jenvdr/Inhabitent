<?php
/**
 * Template part for displaying products
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package inhabitent
 */
//DISPLAYS THE ACTUAL PRODUCT !!!!! KEEP SOCIAL BUTTONS IN HERE !!!!!
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<?php inhabitent_post_thumbnail(); ?>

	<div class="entry-content">
	<header class="product-content">
		<?php
			the_post();
			?>
			<h1 class="title"><?php the_field('title'); ?></h1>
			<p class="price"><?php the_field('price');?></p>
			<p class="description"><?php the_field('description');?></p>
			<div class="social-buttons">
		<button type="button" class="black-btn"><i class="fab fa-facebook-f"></i>Like</button>
		<button type="button" class="black-btn"><i class="fab fa-twitter"></i>Tweet</button>
		<button type="button" class="black-btn"><i class="fab fa-pinterest"></i>Pin</button>
		</div>
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'inhabitent' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'inhabitent' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->
	<footer class="entry-footer-journal">
		<?php inhabitent_entry_footer(); ?>

	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->


