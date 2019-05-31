<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package inhabitent
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script src="https://kit.fontawesome.com/506671914d.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'inhabitent' ); ?></a>

	<header id="masthead" class="site-header">
    <div class="container">
		<div class="site-branding">

		<a href="http://localhost:8887/inhabitent-project/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/inhabitent-logo-tent.svg" alt="Inhabitent Logo"></a>
			<!-- <?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$inhabitent_description = get_bloginfo( 'description', 'display' );
			if ( $inhabitent_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $inhabitent_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?> -->
		</div><!-- .site-branding -->
		<nav id="site-navigation" class="main-navigation">
			<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'inhabitent' ); ?></button> -->
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
      ?>
      <div class="header-search">
        <form role="search" method="get" class="search-form" action="http://localhost:8888/inhabitent-project/">
  <fieldset>
		<a href="#" class="search-toggle" aria-hidden="true">
			<i class="fa fa-search"></i>
		</a>
		<label>
			<input type="search" class="search-field" value="" name="s" title="Search for:">
		</label>
		<input type="submit" id="search-submit" class="screen-reader-text" value="Search">
	</fieldset>
        </form>
      </div>
    </nav><!-- #site-navigation -->
    </div><!-- .container -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
