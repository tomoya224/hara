<?php
/**
* Template Name:page-f
*/
?>
<?php get_header(); ?>

<div class="fudousan">
    <div class="header_fudo">
        <div>不動産</div>
    </div>
</div>

<div class="toti">
    <h1 class="toti-h1">土地</h1>
    <div class="toti-flex">
        <div class="toti-img">
            <h2 href>売買</h2>
            <div>
                <img src="<?php echo get_template_directory_uri() ?>/images/toti.png">
            </div>
            <p>
                一戸建て住宅には分譲住宅と注文住宅があります。<br>
                注文住宅を建築するには住宅の敷地になる土地を購入する必要ですが、<br>
                住宅の建築ができない土地があるので、注意しましょう。
            </p>
        </div>
        <div class="toti-img">
            <h2 href>賃貸</h2>
            <div>
                <img src="<?php echo get_template_directory_uri() ?>/images/toti2.png">
            </div>
            <p>
                土地の種類は土地の登記事項証明書の地目の欄に記載されています。<br>
                地目は宅地や田、畑など23種類あり、23種類の地目は次の通りです。<br>

                田　畑　宅地　山林　牧場　塩田　鉱泉地　池沼　学校用地　原野　<br>
                墓地　境内地　鉄道用地　運河用地　水道用地　用悪水路　ため池　<br>
                堤　井溝　保安林　公衆用道路　公園　雑種地

            </p>
        </div>
    </div>
</div>
<div class="tate">
    <h1 class="tate-h1">建物</h1>
    <div class="tate-flex">
        <div class="tate-img">
            <h2 href>売買</h2>
            <div>
                <img src="<?php echo get_template_directory_uri() ?>/images/tate1.png">
            </div>
        </div>
        <div class="tate-img">
            <h2 href>賃貸</h2>
            <div>
                <img src="<?php echo get_template_directory_uri() ?>/images/tate2.png">
            </div>
        </div>
    </div>
</div>
<?php the_content(); ?>
<?php get_footer(); ?>