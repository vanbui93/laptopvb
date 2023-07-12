<?php
    // Lấy nav menu hiển thị dashboard
    function register_my_menu() {
        register_nav_menu('header-menu',__( 'Menu chính'));
    }
    add_action( 'init', 'register_my_menu' );
?>