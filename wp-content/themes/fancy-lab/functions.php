<?php

/**
 * Fancy Lab functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Fancy Lab
 */
// filetime( get_template_directory() . '/style.css' ) for developing the theme
 function fancy_lab_scripts() {
     wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/inc/bootstrap.min.js', [ 'jquery' ], '4.4.1', true );
     wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/inc/bootstrap.min.css', [], '4.4.1', 'all' );
     wp_enqueue_style( 'fancy-lab-style', get_stylesheet_uri(), [], filemtime( get_template_directory() . '/style.css' ), 'all' );
 }
 add_action( 'wp_enqueue_scripts', 'fancy_lab_scripts' );

 function fancy_lab_config() {
    register_nav_menus(
        [
            'fancy_lab_main_menu'       =>  'Fancy Lab Main Menu',
            'fancy_lab_footer_menu'  =>  'Fanca Lab Footer Menu'
        ]
    );

    // Add theme support for woocommerce with different features
    add_theme_support( 'woocommerce', [
        'thumbnail_image_width'     =>  255,
        'single_image_width'        =>  255,
        'product_grid'              =>  [
            'default_rows'          =>  10,
            'min_rows'              =>  5,
            'max_rows'              =>  10,
            'default_columns'       =>  1,
            'min_columns'           =>  1,
            'max_columns'           =>  1,
        ]
    ] );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );

    if ( ! isset( $content_width ) ) {
        $content_width = 600;
    }
 }
 add_action( 'after_setup_theme', 'fancy_lab_config', 0 );