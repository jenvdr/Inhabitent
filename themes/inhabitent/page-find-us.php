<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package inhabitent
 */

get_header();
?>
<div class="find-us">
<?php
if (have_posts()):
  while (have_posts()) : the_post();
  ?>

<div class="find-us-content">

      <?php
    the_content();
    ?>
</div>
<?php
  endwhile;
else:
  echo '<p>Sorry, no posts matched your criteria.</p>';
endif;
?>
 <?php
get_sidebar();
?>
</div>
<?php
get_footer();
?>
