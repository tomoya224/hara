<?php
/**
*  Template Name:page-event
*/ 
?>
<?php get_header(); ?>
<div class="event1">
    <div class="header_event1">
         <div>イベント情報</div>
    </dvi>
</div>

<div class="event2">
    <h1 class="event2-h1">OB感謝祭</h1>
    <div class="event-flex">
        <div class="event2-img">
             <div>
                 <img src="<?php echo get_template_directory_uri() ?>/images/event.png">
             </div>
             <p>お得意様限定のイベント開催予定<br>
                開催日時:3月22日・3月23日の2日間!
            </p>
        </div>
    </div>
</div>
<?php the_content(); ?>




<?php get_footer(); ?>