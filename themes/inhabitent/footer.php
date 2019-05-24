<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package inhabitent
 */

?>

</div><!-- #content -->
<footer id="colophon" class="site-footer">
<div class="footer-blocks">
<?php if ( ! is_active_sidebar( 'footer-1' ) ) {
	return;
}
?>

<aside id="secondaryFooter" class="widget-area-footer">
	<?php dynamic_sidebar( 'footer-1' ); ?>
</aside><!-- #secondary -->
<!-- WIDGET AREA FOR FOOTER CONTENT-->
	<a href="http://localhost:8888/inhabitent-project/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/inhabitent-logo-text.svg" alt="Inhabitent Logo"></a>
</div>
<div class="site-info">
	<div class="copyright-container">
		Copyright &copy; 2019 Inhabitent
	</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
