<?php get_header(); ?>

<main>
  <article>
      <section id="main-visual">
        <div id="main-message">
            <h1 class="message">家づくりは暮らしづくりへ。</h1>
            <p>READ MORE</p>
       </div>
       <div class="main-img">
       <img src="<?php echo get_template_directory_uri() ?>/images/main1.png">
       </div>
     </section>

  <section id="reform">
    <div id="reform-flex">
      <div class="div-img">
        <div>
          <img src="<?php echo get_template_directory_uri() ?>/images/reform.png"> 
        </div>
        <h1>リノベーション・リフォーム</h1>
        <p>暮らしに合わせた住まいの見直し</p>
      </div>  
      <div class="div-img">
        <div>
          <img src="<?php echo get_template_directory_uri() ?>/images/reform.png">
       </div>
       <h1>新築・注文住宅</h1>
       <p>光と風と木の住まい</p>          
     </div>
     <div class="div-img">
       <div>
         <img src="<?php echo get_template_directory_uri() ?>/images/reform.png">
       </div>
       <h1>不動産・システム建築</h1>
       <p>賃貸住宅・中古住宅・土地</p> 
      </div>
    </div>    
</section>

<div class="go">
  <img src="<?php echo get_template_directory_uri() ?>/images/sr.png">
  <h1>展示場にご来場希望のお客様へ</h1>
  <p>事前に来場予約をいただけましたら、ご指定の時間で見学いただけます。事前予約をぜひご活用ください。<br>
  各展示場では消毒などによる感染対策防止を徹底させていただいております。ご来場が重なった場合などには見学時間を調整させていただく場合がございます。</p>
</div>


<!-- イベント情報 -->
<div class="event">
  
      <a href="/%e3%82%a4%e3%83%99%e3%83%b3%e3%83%88/">イベント情報</a>
    

   <img class="event-img" src="<?php echo get_template_directory_uri() ?>/images/event.png">
</div>

</section>

<!-- スタッフブログ -->
<div class="blog">
  <h1 class="blog-h1">スタッフブログ</h1>
  <div id="blog-flex">
     <div class="blog-img">
        <div>
          <img src="<?php echo get_template_directory_uri() ?>/images/blog1.png">
        </div>
        <a href>コロナ対策を考えた家づくりのポイント。</a>
     </div>
     <div class="blog-img">
        <div>
          <img src="<?php echo get_template_directory_uri() ?>/images/blog2.png">
        </div>
        <a href>必見!!!山口市の分譲地</a>
     </div>
     <div class="blog-img">
        <div>
          <img src="<?php echo get_template_directory_uri() ?>/images/blog3.png">
       </div>
       <a href>分譲住宅のご案内</a>
     </div>
 </div>
</div>

<!-- 住まいの訪問記 -->
<section id="home">
  <h1 class="home-h1">住まいの訪問記</h1>
  <div id="home-flex">
    <div class="home-img">
      <div>
        <img src="<?php echo get_template_directory_uri() ?>/images/home-img1.png">
      </div>
      <h1>家族時間を大切にする暮らし</h1>
    </div>
    <div class="home-img">
      <img src="<?php echo get_template_directory_uri() ?>/images/home-img1.png">
      <h1>趣味と”好き”がつまった住まい</h1>
    </div>
  </div>
</section>

 <?php get_footer(); ?>