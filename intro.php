<div class="block-intro">
    <div class="container">
        <p class="lh2-title1">VỀ CHÚNG TÔI</p>
        <p class="lh2-caption">là công ty du lịch, với nhiều năm kinh nghiệm trong việc cung cấp dịch vụ về vận tải du lịch, tư vấn và lập kế hoạch đi du lịch tới các điểm đến nổi tiếng. Chúng tôi có một mạng lưới liên kết lữ hành rộng và cung cấp các dịch vụ hỗ trợ lập kế hoạch...</p>
        <div class="row">
            <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=3&post_type=dich-vu'); ?>
                <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>
                <div class="col-lg-4 item-intro">
                    <div class="img-height">
                        <a href="<?php the_permalink(); ?>"><img src="<?php echo $featured_img_url; ?>" alt="<?php the_title(); ?>" width="80px"></a>
                    </div>
                    <div class="item-info">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        <?php the_content(); ?>
                    </div>
                </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
</div>