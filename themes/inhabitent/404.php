<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package inhabitent
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<!-- CHECK THIS COPY-->
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'inhabitent' ); ?></h1>
				</header><!-- .page-header -->
				<!-- SEARCH BOX AND MOST RECENT LIKE IN PROJECT COMPS -->
				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'inhabitent' ); ?></p>

					<?php
					get_search_form();

					the_widget( 'WP_Widget_Recent_Posts' );
					?>
				<!-- MOST USED CATEGORIES LIKE IN PROJECT COMPS -->
					<div class="widget widget_categories">
						<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'inhabitent' ); ?></h2>
						<ul>
							<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
							?>
						</ul>
					</div><!-- .widget -->
				<!-- ARCHIVE DROPDOWN LIKE IN PROJECT COMPS -->
					<?php
					/* translators: %1$s: smiley */
					$inhabitent_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'inhabitent' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$inhabitent_archive_content" );

					the_widget( 'WP_Widget_Tag_Cloud' );
					?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->
				<!-- SIDEBAR LIKE IN PROJECT COMPS -->
<?php
get_footer();
