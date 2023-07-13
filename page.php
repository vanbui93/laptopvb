<?php get_header(); ?>
<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php while( have_posts() ) : the_post(); ?>
                    <h3 class="lh2-title1"><?php the_title(); ?></h3>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>