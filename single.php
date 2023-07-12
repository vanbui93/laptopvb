<?php get_header() ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
    </div>
    <!-- end lh-header -->
    <div class="module-news-detail">
        <div class="container">
            <div class="bread-crumb">
                <a href="<?php bloginfo( 'url' ) ?>">Trang chủ</a>
                <span class="dot">/</span>
                <a href="<?php bloginfo( 'url' ) ?>/category/tin-tuc">Tin tức</a>
                <span class="dot">/</span>
                <span class="name">Dịch vụ thuê xe</span>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="border">
                        <p class="lh2-title1"><?php the_title(); ?></p>
                        <div class="lh2-date"><i class="fas fa-calendar-alt"></i> Ngày đăng: <?php get_the_date('d/m/Y'); ?></div>
                        <?php the_content(); ?>
                        <p class="author">Lê Hiến</p>
                        <!-- Comment Facebook -->
                        <div class="comment-facebook">
                            <div class="fb-comments" data-href="<?php the_permalink(); ?>" data-width="" data-numposts="5"></div>
                        </div>
                        <!-- End Comment Facebook -->

                        <div class="mau2-share-7ncn">
                            <span>Chia sẻ: </span>
                            <a href="" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                            <a href="" target="_blank"><i class="fab fa-skype"></i></a>
                            <?php the_tags(', '); ?>
                        </div>
                        <div class="mau2-other">
                            <?php
                                $categories = get_the_category($post->ID);
                                if ($categories) 
                                {
                                    $category_ids = array();
                                    foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
                            
                                    $args=array(
                                    'category__in' => $category_ids,
                                    'post__not_in' => array($post->ID),
                                    'showposts'=>5, // Số bài viết bạn muốn hiển thị.
                                    'caller_get_posts'=>1
                                    );
                                    $my_query = new wp_query($args);
                                    if( $my_query->have_posts() ) 
                                    {
                                        echo '<h3>Bài viết liên quan</h3><ul class="list-news">';
                                        while ($my_query->have_posts())
                                        {
                                            $my_query->the_post();
                                            ?>
                                            <li><a href="<?php the_permalink(); ?>"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span><?php the_title(); ?></a></li>
                                            <?php
                                        }
                                        echo '</ul>';
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <?php get_sidebar()?>
            </div>
            
        </div>
    </div>

<?php endwhile; else : ?>
<?php endif; ?>
<?php get_footer() ?>