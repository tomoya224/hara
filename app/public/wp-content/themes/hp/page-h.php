<?php 
/**
 * Template Name: page-h
 */ 
?>
<?php get_header(); ?>

<!--  -->

<div class="ie">
    <div class="breadcrumbs_container">
        <div class="image_header">
            <div class="header_info">
                <div>新築・注文住宅</div>
            </div>
        </div>
    </div>
</div>

<!-- 新築 -->
<div class="shintiku">
    <h1 class="shintiku-h1">新築</h1>
    <div class="shintiku-flex">
      <div class="shintiku-img">
           <div>
              <img src="<?php echo get_template_directory_uri() ?>/images/shintiku1.png">
           </div>
           <p href>T様邸</p>
        </div>
        <div class="shintiku-img">
            <div>
                <img src="<?php echo get_template_directory_uri() ?>/images/shintiku2.png">
            </div>
            <p href>N様邸</p>
        </div>
        <div class="shintiku-img">
            <div>
                <img src="<?php echo get_template_directory_uri() ?>/images/shintiku3.png">
            </div>
            <p href>M様邸</p>
        </div>
    </div>
</div>

<!-- リフォーム -->
<div class="tyumon">
    <h1 class="tyumon-h1">注文住宅</h1>
    <div class="tyumon-flex">
      <div class="tyumon-img">
          <div>
              <img src="<?php echo get_template_directory_uri() ?>/images/tyumon1.png">
          </div>
          <p href>O様邸</p>
      </div>
      <div class="tyumon-img">
          <div>
              <img src="<?php echo get_template_directory_uri() ?>/images/tyumon2.png">
          </div>
          <p href>R様邸</p>
      </div>
      <div class="tyumon-img">
          <div>
              <img src="<?php echo get_template_directory_uri() ?>/images/tyumon3.png">
          </div>
          <p href>W様邸</p>
      </div>
    </div>
</div>
 <?php the_content(); ?>





 
<?php get_footer(); ?>