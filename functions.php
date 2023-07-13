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
?>