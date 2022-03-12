<?php
/*
Template Name: イベント投稿ページ
Template Post Type; post
*/
?>

<?php get_header(); ?>
<?php if (have_posts()):
     while (have_posts()) :
        the_post();
        the_content();
     endwhile;
    endif; ?>
<?php previous_post_link(); ?>
<?php next_post_link(); ?>




<!-- Sidebar -->
<div class="col-lg-4" style="background-color: #2b7b8e33">
<div class="sidebar">
    <?php get_sidebar( 'main'); ?>
</div>
</div>
</div>
</div>


<!-- Footer -->

<?php get_footer(); ?>