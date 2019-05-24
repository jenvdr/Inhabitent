<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package inhabitent
 */
//BLOG POST
get_header();
?>
<div class="blog-post-content">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
		<div role="form" class="wpcf7" id="wpcf7-f93-p11-o1" lang="en-GB" dir="ltr">
<div class="screen-reader-response"></div>
<form action="/inhabitent-project/find-us/#wpcf7-f93-p11-o1" method="post" class="wpcf7-form" novalidate="novalidate">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="93">
<input type="hidden" name="_wpcf7_version" value="5.1.3">
<input type="hidden" name="_wpcf7_locale" value="en_GB">
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f93-p11-o1">
<input type="hidden" name="_wpcf7_container_post" value="11">
</div>
<p><label> Name <span class="required">*</span><br>
    <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span> </label></p>
<p><label> Email <span class="required">*</span><br>
    <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false"></span> </label></p>
<p><label> Subject <span class="required">*</span><br>
    <span class="wpcf7-form-control-wrap your-subject"><input type="text" name="your-subject" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false"></span> </label></p>
<p><label> Message <span class="required">*</span><br>
    <span class="wpcf7-form-control-wrap message"><textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea></span> </label></p>
<p><input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit"><span class="ajax-loader"></span></p>
<div class="wpcf7-response-output wpcf7-display-none"></div></form></div>

		</main><!-- #main -->
	</div><!-- #primary -->
	</div>

<?php
get_sidebar();
?>
<?php
get_footer();
