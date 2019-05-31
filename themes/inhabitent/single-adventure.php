<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package inhabitent
 */
// adventure frame
get_header();
?>

<!--CONTENT -->
<?php
if (have_posts()):
  while (have_posts()) : the_post();
  ?>
<div class="adventure">
      <?php
      the_post_thumbnail();
      the_content();
    ?>
</div>
<?php
  endwhile;
else:
  echo '<p>Sorry, no posts matched your criteria.</p>';
endif;
?>
<div class="adventure-buttons">
<footer class="entry-footer container">

  <div class="social-buttons">
    <button type="button" class="black-btn"><i class="fa fa-facebook"></i>Like</button>
    <button type="button" class="black-btn"><i class="fa fa-twitter"></i>Tweet</button>
    <button type="button" class="black-btn"><i class="fa fa-pinterest"></i>Pin</button>
  </div>
</footer>
</div>
<!-- NO SIDEBAR -->
<?php
get_footer();
?>

