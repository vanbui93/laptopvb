<?php 
/* Template Name: Trang liên hệ */ 
?>
<?php get_header(); ?>
<div class="module-contact">
    <div class="container">
        <div class="bread-crumb">
            <a href="">Trang chủ</a>
            <span class="dot">/</span>
            <span class="name">Liên hệ</span>
        </div>
    </div>
    <div class="form">
        <div class="container">
            <div class="row">
                <div class="col-xl-6  col-lg-6 col-md-12 h-100 d-inline w-100 left">
                    <p class="lh2-title1">Gửi liên hệ</p>
                    <?php echo do_shortcode('[contact-form-7 id="148" title="Liên hệ"]') ?>
                </div>
                <div class="col-xl-6  col-lg-6 right h-100">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="block-map">
        <img class="img-fluid" src="img/map.jpg" alt="">
    </div>
</div>
<?php get_footer(); ?>