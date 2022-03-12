<?php 
/**
 * Template Name: page-h
 */ 
?>
<?php get_header(); ?>
<?php if (have_posts()):
  while (have_posts()) :
    the_post();
    the_content();
  endwhile;
endif; 
?>

<div id="shintiku">
  <h1>実績ページ</h1>
</div>
<?php get_footer(); ?>