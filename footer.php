<div class="block-partner">
    <div class="container">
        <div class="responsive">
            <div class="col-2 item-partner">
                <div class="bg">
                    <img class="img-fluid" src="<?php bloginfo( 'template_directory' ) ?>/img/1.png" alt="">
                </div>
            </div>
            <div class="col-2 item-partner">
                <div class="bg">
                    <img class="img-fluid" src="<?php bloginfo( 'template_directory' ) ?>/img/2.png" alt="">
                </div>
            </div>
            <div class="col-2 item-partner">
                <div class="bg">
                    <img class="img-fluid" src="<?php bloginfo( 'template_directory' ) ?>/img/3.png" alt="">
                </div>
            </div>
            <div class="col-2 item-partner">
                <div class="bg">
                    <img class="img-fluid" src="<?php bloginfo( 'template_directory' ) ?>/img/4.png" alt="">
                </div>
            </div>
            <div class="col-2 item-partner">
                <div class="bg">
                    <img class="img-fluid" src="<?php bloginfo( 'template_directory' ) ?>/img/5.png" alt="">
                </div>
            </div>
            <div class="col-2 item-partner">
                <div class="bg">
                    <img class="img-fluid" src="<?php bloginfo( 'template_directory' ) ?>/img/6.png" alt="">
                </div>
            </div>
            <div class="col-2 item-partner">
                <div class="bg">
                    <img class="img-fluid" src="<?php bloginfo( 'template_directory' ) ?>/img/1.png" alt="">
                </div>
            </div>
        </div>
        <button class="button-slider next"><i class="fas fa-chevron-right"></i></button>
        <button class="button-slider prev"><i class="fas fa-chevron-left"></i></button>
    </div>
</div>
<div class="footer-bg">
    <div class="block-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 item">
                    <?php dynamic_sidebar( 'sidebar-footer1' ); ?>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 item">
                    <?php dynamic_sidebar( 'sidebar-footer2' ); ?>
                    <!-- <ul class="lh2-ul">
                        <li><a href="">Liên hệ với chúng tôi</a></li>
                        <li><a href="">Câu hỏi thường gặp</a></li>
                        <li><a href="">Điều khoản và chính sách</a></li>
                        <li><a href="">Chăm sóc khách hàng</a></li>
                    </ul> -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 item">
                    <p class="title">DỊCH VỤ</p>
                    <ul class="lh2-ul">
                        <?php $args = array( 
                            'hide_empty' => 0,
                            'taxonomy' => 'danh-muc',
                            ); 
                            $cates = get_categories( $args ); 
                            foreach ( $cates as $cate ) {  ?>
                                <li>
                                    <a href="<?php echo get_term_link($cate->slug, 'danh-muc'); ?>"><?php echo $cate->name; ?></a>
                                </li>
                        <?php } ?>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-12 item">
                    <p class="title">GỬI LIÊN HỆ</p>
                    <p>Liên hệ ngay với chúng tôi để nhận được những ưu đãi mới nhất</p>
                    <input type="" name="" placeholder="Nhập email của bạn">
                    <button type="">Gửi</button>
                    <p class="title">Kết nối</p>
                    <ul class="lh2-ul share-h2">
                        <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-skype"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="block-copyright">
        <div class="container">
            <p>Copyright © 2019 BABYLON Group. All Right Reserved.</p>
        </div>
    </div>
</div>
<a class="btn-top" id="bttop" href="javascript:void(0);" title="Top" style="display: inline;"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
</div>
<!-- Javascript -->
<script src="<?php bloginfo('template_directory')?>/js/tether.min.js"></script>
<script src="<?php bloginfo('template_directory')?>/js/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory')?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory')?>/js/wow.min.js"></script>
<script src="<?php bloginfo('template_directory')?>/js/jquery.mmenu.all.js"></script>
<script src="<?php bloginfo('template_directory')?>/js/slick.js"></script>
<script src="<?php bloginfo('template_directory')?>/js/smoothscroll.js"></script>
<script src="<?php bloginfo('template_directory')?>/js/lightslider.js"></script>
<script src="<?php bloginfo('template_directory')?>/js/lightGallery.js"></script>
<script src="<?php bloginfo('template_directory')?>/js/main.js"></script>
<?php wp_footer()?>

<!-- start code facebook comment -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v17.0" nonce="iiTb8OG5"></script>
<!-- end code facebook comment -->
</body>
</html>