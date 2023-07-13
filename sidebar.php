<div class="col-lg-3 d-none d-lg-block">
    <div class="box-cate">
        <p class="title-sidebar"><i class="fas fa-bars"></i>Xem sản phẩm</p>
        <div class="box-border">
            <ul class="lh2-ul">
                <?php $args = array( 
                    'hide_empty' => 0,
                    'taxonomy' => 'danh-muc',
                    ); 
                    $cates = get_categories( $args ); 
                    foreach ( $cates as $cate ) {  ?>
                        <li>
                            <a href="<?php echo get_term_link($cate->slug, 'danh-muc'); ?>"><i class="fas fa-caret-right"></i><?php echo $cate->name; ?></a>
                        </li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <div class="box-contact">
        <?php dynamic_sidebar( 'sidebar-right' ); ?>
    </div>
    <div class="box-hightlight-news">
        <p class="title-sidebar"><i class="fas fa-bars"></i>Tin nỗi bật</p>
        <div class="box-border">
            <!-- Code lấy bài viết nỗi bật nhất -->
            <?php 
                $args = array(
                    'posts_per_page' => 5,
                    'post_type'      => 'post',
                    'post_status' => 'publish',
                    'cat'            => 1
                );
            ?>
            <?php  $the_query = new WP_Query( $args ); ?>
            <?php if( $the_query->have_posts() ): ?>
            <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="list-news">
                    <a class="img" href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail( 'thumbnail' ); ?>
                    </a>
                    <div class="right-list">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        <div class="lh2-date"><i class="fas fa-calendar-alt"></i> <?php get_the_date('d/m/Y'); ?></div>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
            <!-- end item -->
        </div>
    </div>
</div>