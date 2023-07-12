<?php get_header(); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="module-product-detail">
    <div class="container">
        <div class="bread-crumb">
            <a href="<?php bloginfo( 'url' ) ?>">Trang chủ</a>
            <span class="dot">/</span>
            <a href="<?php bloginfo( 'url' ) ?>/san-pham">Sản phẩm</a>
            <span class="dot">/</span>
            <span class="name"><?php the_title(); ?></span>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="block-product-slider">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6  left">
                            <ul id="imageGallery">
                                <?php $gallery = get_field('hinh_anh')?>
                                <?php foreach ($gallery as $key => $value) {?>
                                    <li data-thumb="<?php echo $value['sizes']['thumbnail'] ?>" data-src="<?php echo $value['url'] ?>">
                                        <div class="img-height">
                                            <img  class="img-fluid lh2-img" src="<?php echo $value['url'] ?>"/>
                                            <div class="overlay">
                                                <a href="" class="zoom"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                <?php }?>
                            </ul>
                        </div>
                        <div class="col-md-6  col-sm-6 col-xs-6 right">
                            <div class="border">
                                <b class="name"><?php the_title(); ?></b>
                                <p><b>Giá:</b> 
                                    <?php if(get_field('gia_sp')) { ?> 
                                        <?php the_field('gia_sp'); ?>
                                    <?php } else {?> 
                                        Liên hệ
                                    <?php }?>
                                </p>
                                <p><b>Thương hiệu:</b> <?php the_field('thuong_hieu'); ?></p>
                                <p><b>Màu sắc:</b> <?php the_field('mau_sac'); ?></p>
                                <p><b>CPU:</b> <?php the_field('cpu'); ?></p>
                                <p><b>RAM:</b> <?php the_field('ram'); ?></p>
                                <p><b>Ổ cứng:</b> <?php the_field('o_cung'); ?></p>
                                <p><b>Card đồ hoạ:</b> <?php the_field('card_do_hoa'); ?></p>
                                <p><b>Màn hình:</b> <?php the_field('man_hinh'); ?></p>
                                <button class="lh2-button lh-show-bk">Mua ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end block-slider -->
                <div class="block-info-product-detail">
                    <p class="title-other"><span>Thông tin chi tiết</span></p>
                    <div class="box-content">
                        <?php the_content(); ?>
                    </div>
                </div>
                <!-- block-inffo -->
                <div class="block-product-other">
                    <p class="title-other"><span>Xe liên quan</span></p>
                    <div class="slider-product">
                        <?php
                            $terms = get_the_terms( get_the_ID(), 'danh-muc' );
                            $current_term = $terms[0]-> slug;
                            if($current_term) {
                                $args=array(
                                'danh-muc' => $current_term,
                                'post__not_in' => array(get_the_id()),
                                'showposts'=>6, // Số sản phẩm bạn muốn hiển thị.
                                'caller_get_posts'=>1,
                                'post_type'=>'san-pham'
                                );
                                $my_query = new wp_query($args);
                                if( $my_query->have_posts() ) 
                                {
                                    while ($my_query->have_posts())
                                    {
                                        $my_query->the_post(); ?>
                                        <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>
                                            <div class="item-product">
                                                <div class="bg">
                                                    <div class="img-height">
                                                        <a class="img" href="">
                                                            <img class="img-fluid lh2-img" src="<?php echo $featured_img_url; ?>" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="info-product">
                                                        <a class="name" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                        <p class="price"> <b><i class="fas fa-tag"></i>Giá:</b> Liên hệ</p>
                                                        <p><b><i class="fas fa-car"></i>Thương hiệu:</b> <?php the_field('thuong_hieu'); ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                    }
                                }
                            }
                        ?>
                    </div>
                    <button class="button-slider next"><i class="fas fa-chevron-right"></i></button>
                    <button class="button-slider prev"><i class="fas fa-chevron-left"></i></button>
                </div>
                <!-- end block-product-other -->
            </div>
            <div class="col-lg-3 d-none d-lg-block">
                <div class="box-cate">
                    <p class="title-sidebar"><i class="fas fa-bars"></i>Dịch vụ thuê xe</p>
                    <div class="box-border">
                        <ul class="lh2-ul">
                            <li><a href=""><i class="fas fa-caret-right"></i>Thuê xe du lịch</a></li>
                            <li><a href=""><i class="fas fa-caret-right"></i>Thuê xe dự án</a></li>
                            <li><a href=""><i class="fas fa-caret-right"></i>Thuê xe cưới hỏi</a></li>
                        </ul>
                    </div>
                </div>
                <div class="box-contact">
                    <p class="title-sidebar"><i class="fas fa-bars"></i>Hỗ trợ trực tuyến</p>
                    <div class="box-border">
                        <ul class="lh2-ul">
                            <li>Hotline: 0915 17 12 19</li>
                            <li>Email: inb.mycar@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="box-hightlight-news">
                    <p class="title-sidebar"><i class="fas fa-bars"></i>Tin nỗi bật</p>
                    <div class="box-border">
                        <div class="list-news">
                            <a class="img" href=""><img class="img-fluid lh2-img" src="img/a1.jpg" alt=""></a>
                            <div class="right-list">
                                <a href="">Giới chức Thái Lan thông báo một người trong đội thợ lặn</a>
                                <div class="lh2-date"><i class="fas fa-calendar-alt"></i> 20/08/1993</div>
                            </div>
                        </div>
                        <!-- end item -->
                        <div class="list-news">
                            <a class="img" href=""><img class="img-fluid lh2-img" src="img/a2.jpg" alt=""></a>
                            <div class="right-list">
                                <a href="">Giới chức Thái Lan thông báo một người trong đội thợ lặn</a>
                                <div class="lh2-date"><i class="fas fa-calendar-alt"></i> 20/08/1993</div>
                            </div>
                        </div>
                        <!-- end item -->
                        <div class="list-news">
                            <a class="img" href=""><img class="img-fluid lh2-img" src="img/a3.jpg" alt=""></a>
                            <div class="right-list">
                                <a href="">Giới chức Thái Lan thông báo một người trong đội thợ lặn</a>
                                <div class="lh2-date"><i class="fas fa-calendar-alt"></i> 20/08/1993</div>
                            </div>
                        </div>
                        <!-- end item -->
                        <div class="list-news">
                            <a class="img" href=""><img class="img-fluid lh2-img" src="img/a4.jpg" alt=""></a>
                            <div class="right-list">
                                <a href="">Giới chức Thái Lan thông báo một người trong đội thợ lặn</a>
                                <div class="lh2-date"><i class="fas fa-calendar-alt"></i> 20/08/1993</div>
                            </div>
                        </div>
                        <!-- end item -->
                        <div class="list-news">
                            <a class="img" href=""><img class="img-fluid lh2-img" src="img/toyota.png" alt=""></a>
                            <div class="right-list">
                                <a href="">Giới chức Thái Lan thông báo một người trong đội thợ lặn</a>
                                <div class="lh2-date"><i class="fas fa-calendar-alt"></i> 20/08/1993</div>
                            </div>
                        </div>
                        <!-- end item -->
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- popup -->
<div class="popup-overlay">

</div>
<div class="my-popup">
    <div class="popup-content">
        <button class="lh-close-2 exit"></button>
        <p class="title">Đặt xe</p>
        <form action="">
            <div class="info-car">
                <p class="box-title">Thông tin xe</p>
                <div class="row">
                    <div class="col-4">
                        <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>" alt="">
                    </div>
                    <div class="col-8">
                        <p> <b class="name"><?php the_title(); ?></b></p>
                        <p class="price"><b>Giá:</b> 
                            <?php if(get_field('gia_sp')) { ?> 
                                <?php the_field('gia_sp'); ?>
                            <?php } else {?> 
                                Liên hệ
                            <?php }?>
                        </p>
                        <p><b>Thương hiệu:</b> <?php the_field('thuong_hieu'); ?></p>
                        <p><b>Màu sắc:</b> <?php the_field('mau_sac'); ?></p>
                        <p><b>CPU:</b> <?php the_field('cpu'); ?></p>
                        <p><b>RAM:</b> <?php the_field('ram'); ?></p>
                        <p><b>Ổ cứng:</b> <?php the_field('o_cung'); ?></p>
                        <p><b>Card đồ hoạ:</b> <?php the_field('card_do_hoa'); ?></p>
                        <p><b>Màn hình:</b> <?php the_field('man_hinh'); ?></p>
                    </div>
                </div>
            </div>
            <p class="box-title">Thông tin khách hàng</p>
            <input type="" name="" placeholder="Họ và tên *">
            <div class="row">
                <div class="col-6">
                    <input type="" name="" placeholder="Email *">
                </div>
                <div class="col-6">
                    <input type="" name="" placeholder="Điện thoại *">
                </div>
            </div>
            <div class="text-right">
                <button class="lh2-button" type="">Mua ngay</button>
            </div>
        </form>
    </div>
</div>
<!-- end popup -->
<a class="btn-top" id="bttop" href="javascript:void(0);" title="Top" style="display: inline;"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>

<?php endwhile; else : ?>
<?php endif; ?>
<?php get_footer(); ?>