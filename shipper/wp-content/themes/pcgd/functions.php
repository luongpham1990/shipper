<?php
/**
@ Thiết lập các hằng dữ liệu quan trọng
@ THEME_URL = get_stylesheet_directory() - đường dẫn tới thư mục theme
@ CORE = thư mục /core của theme, chứa các le nguồn quan trọng.
 **/
define( 'THEME_URL', get_stylesheet_directory() );
define( 'CORE', THEME_URL . '/core' );
/**
@ Load le /core/init.php
@ Đây là le cấu hình ban đầu của theme mà sẽ không nên được thay đổi sau này.
 * **/
require_once( CORE . '/init.php' );
/** @ Thiết lập $content_width để khai báo kích thước chiều rộng của nội dung **/
if ( ! isset( $content_width ) ) {
    /* * Nếu biến $content_width chưa có dữ liệu thì gán giá trị cho nó */
    $content_width = 620; }
/** @ Thiết lập các chức năng sẽ được theme hỗ trợ **/
if ( ! function_exists( 'duytrung_theme_setup' ) ) {
    /* * Nếu chưa có hàm duytrung_theme_setup() thì sẽ tạo mới hàm đó */
    function duytrung_theme_setup() {
        /* * Thiết lập theme có thể dịch được */
        $language_folder = THEME_URL . '/languages';
        load_theme_textdomain( 'duytrung', $language_folder );
        /* * Tự chèn RSS Feed links trong <head> */
        add_theme_support( 'automatic-feed-links' );
        /* * Thêm chức năng post thumbnail */
        add_theme_support( 'post-thumbnails' );
        /* * Thêm chức năng title-tag để tự thêm <title> */
        add_theme_support( 'title-tag' );
        /* * Thêm chức năng post format */
        add_theme_support( 'post-formats',
            array(
                'video',
                'image',
                'audio',
                'gallery'
            ) );


        register_nav_menus( array(
            'primary' => __( 'Primary/Main Menu', 'duytrung' ),
            'footer' => __( 'Footer Menu', 'duytrung' )
        ) );
        /* Tạo sidebar cho theme */
        $sidebar = array(
            'name' => __('Main Sidebar', 'duytrung'),
            'id' => 'main-sidebar',
            'description' => 'Main sidebar for duytrung theme',
            'class' => 'main-sidebar',
            'before_title' => '<h3 class="widgettitle">',
            'after_sidebar' => '</h3>'
        );
        register_sidebar( $sidebar );
    }
    add_action ( 'init', 'duytrung_theme_setup' );
}

/**@ Thiết lập hàm hiển thị duytrung_menu( $slug )**/
if ( ! function_exists( 'duytrung_menu' ) ) {
    function duytrung_menu( $slug ) {
        $menu = array(
            'theme_location' => $slug,
            'container' => 'ul',
            'container_class' => $slug,
            'menu_class'=>'nav navbar-nav'
        );
        wp_nav_menu( $menu );
    }}


