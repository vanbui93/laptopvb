<?php
    // Lấy nav menu hiển thị dashboard
    function register_my_menu() {
        register_nav_menu('header-menu',__( 'Menu chính'));
    }
    add_action( 'init', 'register_my_menu' );

    // Code chạy contact form 7
    add_filter( 'wpcf7_form_elements', 'mycustom_wpcf7_form_elements' );
    function mycustom_wpcf7_form_elements( $form ) {
        $form = do_shortcode( $form );
        return $form;
    }

    // Tạo sidebar và widget
    add_action( 'widgets_init', 'wpshare247_widgets_init' );
    function wpshare247_widgets_init(){
        // Thêm SB phải
        register_sidebar( array(
            'name'          => __( 'Sidebar phải', 'text_domain' ),
            'id'            => 'sidebar-right',
            'description'   => __( 'Thêm các widget *[Phải] vào đây', 'text_domain' ),
            'before_title'  => '<h4 class="title-sidebar"><i class="fas fa-bars"></i>',
            'after_title'   => '</h4>',
            'before_widget' => '<section id="%1$s" class="widget sb-right %2$s"><div class="box-border">',
            'after_widget'  => '</div></section>',
        ) );

        // Thêm SB footer1
        register_sidebar( array(
            'name'          => __( 'Footer 1 - Giới thiệu', 'text_domain'), // Tên sidebar hiển thị trong admin
            'id'            => 'sidebar-footer1', // ID của sidebar không được trùng, dùng để hiển thị SB
            'description'   => __( 'Thêm các widget *[Footer 1] vào đây', 'text_domain'), // Mô tả cho SB nảy
            'before_widget' => '<section id="%1$s" class="widget %2$s">', // Bạn có thể thêm Class cho SB vào đây
            'after_widget'  => '</section>',
            'before_title'  => '<h4 class="title">', // Thẻ mở để tạo tiêu đề chung cho tất cả các Widget nẳm trong Sidebar này
            'after_title'   => '</h4>', // Đóng thẻ tiêu đề
        ) );

        // Thêm SB footer 2
        register_sidebar( array(
            'name'          => __( 'Footer 2 - Về chúng tôi', 'text_domain'), // Tên sidebar hiển thị trong admin
            'id'            => 'sidebar-footer2', // ID của sidebar không được trùng, dùng để hiển thị SB
            'description'   => __( 'Thêm các widget *[Footer 2] vào đây', 'text_domain'), // Mô tả cho SB nảy
            'before_widget' => '<section id="%1$s" class="widget %2$s">', // Bạn có thể thêm Class cho SB vào đây
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="title">', // Thẻ mở để tạo tiêu đề chung cho tất cả các Widget nẳm trong Sidebar này
            'after_title'   => '</h2>', // Đóng thẻ tiêu đề
        ) );
    }
    
    function wpshare247_register_widgets(){
        //Khai báo widget tuỳ chỉnh mới
        $file = realpath(dirname(__FILE__)).'/widgets/wg_contact_info.php';
        require_once($file);
        register_widget('wp_contact_info');
    }
    add_action( 'widgets_init', 'wpshare247_register_widgets' );