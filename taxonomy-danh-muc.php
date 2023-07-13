<?php get_header(); ?>
<!-- end lh-header -->
<div class="module-product">
    <div class="container">
        <div class="bread-crumb">
            <a href="<?php bloginfo( 'url' ); ?>">Trang chủ</a>
            <span class="dot">/</span>
            <a href="<?php bloginfo( 'url' ); ?>/san-pham">Sản phẩm</a>
            <span class="dot">/</span>
            <span class="name"><?php single_cat_title(); ?></span>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>
                <div class="item-product col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="bg">
                        <div class="img-height">
                            <a class="img" href="<?php the_permalink(); ?>">
                                <img class="img-fluid lh2-img" src="<?php echo $featured_img_url; ?>" alt="">
                            </a>
                        </div>
                        <div class="info-product">
                            <a class="name" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <p class="price"> <b><i class="fas fa-tag"></i>Giá:</b> <?php the_field('gia_sp'); ?></p>
                            <p><b><i class="fas fa-car"></i>Thương hiệu:</b> <?php the_field('thuong_hieu'); ?></p>
                            <p><b><i class="fas fa-car"></i>Màu sắc:</b> <?php the_field('mau_sac'); ?></p>
                            <p><b><i class="fas fa-car"></i>CPU:</b> <?php the_field('cpu'); ?></p>
                            <p><b><i class="fas fa-car"></i>RAM:</b> <?php the_field('ram'); ?></p>
                            <p><b><i class="fas fa-car"></i>Ổ cứng:</b> <?php the_field('o_cung'); ?></p>
                            <p><b><i class="fas fa-car"></i>Card đồ hoạ:</b> <?php the_field('card_do_hoa'); ?></p>
                            <p><b><i class="fas fa-car"></i>Màn hình:</b> <?php the_field('man_hinh'); ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile; else : ?>
            <p>Rất tiếc! Không có sản phẩm nào trong danh mục</p>
            <?php endif; ?>
            <!-- end item -->
            <?php if(paginate_links()!='') {?>
                <div class="lh2-pagging col-12">
                    <div class="quatrang">
                        <?php
                        global $wp_query;
                        $big = 999999999;
                        echo paginate_links( array(
                            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                            'format' => '?paged=%#%',
                            'prev_text'    => __('« Mới hơn'),
                            'next_text'    => __('Tiếp theo »'),
                            'current' => max( 1, get_query_var('paged') ),
                            'total' => $wp_query->max_num_pages
                            ) );
                        ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>