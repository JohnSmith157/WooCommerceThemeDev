<?php

/**
 * Fancy Lab functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Fancy Lab
 */

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

/**
 * Call the customizer file
 */
require_once get_template_directory() . '/inc/customizer.php';

/**
 * Enqueue scripts and styles
 */

// filetime( get_template_directory() . '/style.css' ) for developing the theme
 function fancy_lab_scripts() {
     // Bootstrap JS and CSS files
     wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/inc/bootstrap.min.js', [ 'jquery' ], '4.4.1', true );
     wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/inc/bootstrap.min.css', [], '4.4.1', 'all' );
     // Theme's main stylesheet
     wp_enqueue_style( 'fancy-lab-style', get_stylesheet_uri(), [], filemtime( get_template_directory() . '/style.css' ), 'all' );
     // Google fonts
     wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&family=Roboto&display=swap|https://fonts.googleapis.com/css2?family=Seaweed+Script&display=swap' );
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

    add_theme_support( 'custome-logo', [
        'height'        =>  85,
        'width'         =>  160,
        'flex_height'   =>  true,
        'flex_width'    =>  true,
    ] );

    if ( ! isset( $content_width ) ) {
        $content_width = 600;
    }
 }
 add_action( 'after_setup_theme', 'fancy_lab_config', 0 );

 if ( class_exists( 'WooCommerce' ) ) {
    require get_template_directory() . '/inc/wc-modifications.php';
 }

 /**
 * Show cart contents / total Ajax
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'fancy_lab_woocommerce_header_add_to_cart_fragment' );

function fancy_lab_woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

	?>
	<span class="items"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
	<?php
	$fragments['span.items'] = ob_get_clean();
	return $fragments;
}