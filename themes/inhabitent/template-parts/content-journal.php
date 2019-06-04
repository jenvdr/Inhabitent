<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Inhabitents
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="blog-post-header">
	<header class="entry-header">
	<?php the_post_thumbnail('full'); ?>
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				echo get_the_date(); ?> / <?PHP comments_number();?> / <?php inhabitent_posted_by();?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->
	</div>
	<div class="entry-content">
		<?php
        the_excerpt ();
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer-journal">

	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->


