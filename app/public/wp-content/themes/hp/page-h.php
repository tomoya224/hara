<?php 
/**
 * Template Name: page-h
 */ 
?>
<?php get_header(); ?>

<!--  -->

<div class="shintiku">
  <h1>新築・注文住宅</h1>
</div>
<?php if (have_posts()) : ?>
 <?php while (have_posts()) : ?>
    the_post();
<?php the_content(); ?>



<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>