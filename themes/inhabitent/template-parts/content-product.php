<?php
/**
 * Template part for displaying products
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package inhabitent
 */
//DISPLAYS THE ACTUAL PRODUCT
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<?php inhabitent_post_thumbnail(); ?>

	<div class="entry-content">
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		endif;?>
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
		<div class="social-buttons">
   <button type="button" class="black-btn"><i class="fa fa-facebook"></i>Like</button>
   <button type="button" class="black-btn"><i class="fa fa-twitter"></i>Tweet</button>
   <button type="button" class="black-btn"><i class="fa fa-pinterest"></i>Pin</button>
</div>
	</div><!-- .entry-content -->


</article><!-- #post-<?php the_ID(); ?> -->
