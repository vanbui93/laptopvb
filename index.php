<?php get_header() ?>
    <?php get_template_part('slider'); ?>
<!-- end block-slider -->
</div>
<!-- end lh-header -->
<?php get_template_part('intro'); ?>

<div class="block-contact">
    <div class="container">
        <p class="lh2-title1">dỊCH VỤ CHO Bán xe DU LỊCH</p>
        <p class="caption">Cung cấp dịch vụ cho Bán xe tự lái, du lịch từ 4 đến 45 chỗ</p>
        <p class="bottom">Thủ tục nhanh gọn - Nhận xe nhanh chóng</p>
        <button class="lh3-button" type=""><span>Xem ngay</span></button>
    </div>
</div>
<div class="block-product">
    <div class="container">
        <p class="lh2-title"> <span>Laptop cũ</span></p>
        <div class="row">
            <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=6&post_type=san-pham&danh-muc=laptop-cu'); ?>
            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>
                <div class="item-product col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="bg">
                        <div class="img-height">
                            <a class="img" href="<?php the_permalink(); ?>">
                                <img class="img-fluid lh2-img" src="<?php echo $featured_img_url; ?>" alt="<?php the_title(); ?>">
                            </a>
                        </div>
                        <div class="info-product">
                            <a class="name" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <p class="price"> <b><i class="fas fa-tag"></i>Giá:</b> <?php the_field('gia_sp') ?></p>
                            <p><b><i class="fab fa-accessible-icon"></i>Thương hiệu: </b><?php the_field('thuong_hieu') ?></p>
                            <p><b><i class="fas fa-car"></i>Màu sắc:</b> <?php the_field('mau_sac') ?></p>
                            <p><b><i class="fas fa-car"></i>CPU:</b> <?php the_field('cpu') ?></p>
                            <p><b><i class="fas fa-car"></i>RAM:</b> <?php the_field('ram') ?></p>
                            <p><b><i class="fas fa-car"></i>Ổ cứng:</b> <?php the_field('o_cung') ?></p>
                            <p><b><i class="fas fa-car"></i>Card đồ hoạ:</b> <?php the_field('card_do_hoa') ?></p>
                            <p><b><i class="fas fa-car"></i>Màn hình:</b> <?php the_field('man_hinh') ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile; wp_reset_postdata(); ?>
            <!-- end item -->

        </div>
    </div>
</div>
<!-- end block-product -->
<div class="block-product">
    <div class="container">
        <p class="lh2-title"> <span>Laptop mới</span></p>
        <div class="row">
            <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=6&post_type=san-pham&danh-muc=laptop-moi'); ?>
            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>
                <div class="item-product col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="bg">
                        <div class="img-height">
                            <a class="img" href="<?php the_permalink(); ?>">
                                <img class="img-fluid lh2-img" src="<?php echo $featured_img_url; ?>" alt="<?php the_title(); ?>">
                            </a>
                        </div>
                        <div class="info-product">
                            <a class="name" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <p class="price"> <b><i class="fas fa-tag"></i>Giá:</b> <?php the_field('gia_sp') ?></p>
                            <p><b><i class="fab fa-accessible-icon"></i>Thương hiệu: </b><?php the_field('thuong_hieu') ?></p>
                            <p><b><i class="fas fa-car"></i>Màu sắc:</b> <?php the_field('mau_sac') ?></p>
                            <p><b><i class="fas fa-car"></i>CPU:</b> <?php the_field('cpu') ?></p>
                            <p><b><i class="fas fa-car"></i>RAM:</b> <?php the_field('ram') ?></p>
                            <p><b><i class="fas fa-car"></i>Ổ cứng:</b> <?php the_field('o_cung') ?></p>
                            <p><b><i class="fas fa-car"></i>Card đồ hoạ:</b> <?php the_field('card_do_hoa') ?></p>
                            <p><b><i class="fas fa-car"></i>Màn hình:</b> <?php the_field('man_hinh') ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile; wp_reset_postdata(); ?>
            <!-- end item -->

        </div>
    </div>
</div>
<!-- end block-product -->
<?php get_footer() ?>