<?php 

/**
 * Fancy Lab Thee Customizer
 * 
 * @package Fancy Lab
 */

function fancy_lab_customizer( $wp_customize ) {

    // Copyright Section
    $wp_customize->add_section(
        'sec_copyright', [
            'title'         =>  __( 'Copyright Settings', 'fancy-lab' ),
            'description'   =>  __( 'Copyright Section', 'fancy-lab' )
        ]
    );

        // Field 1 - Copyright Text Box
        $wp_customize->add_setting(
            'set_copyright', [  
                'type'                  =>  'theme_mod',
                'default'               =>  '',
                'sanitize_callback'     =>  'sanitize_text_field'
            ]
        );


        $wp_customize->add_control(
            'set_copyright', [  
                'label'                 =>  __( 'Copyright', 'fancy-lab' ),
                'description'           =>  __( 'Please, add your copyright information here', 'fancy-lab' ),
                'section'               =>  'sec_copyright',
                'type'                  =>  'text'
            ]
        );

    /*---------------------------------------------------------------*/
    //Slider section
    $wp_customize->add_section(
        'sec_slider', [
            'title'         =>  __( 'Slider Settings', 'fancy-lab' ),
            'description'   =>  __( 'Slider Section', 'fancy-lab' )
        ]
    );
        // Field 1 - Slider button text number 1
        $wp_customize->add_setting(
            'set_slider_page1', [  
                'type'                  =>  'theme_mod',
                'default'               =>  '',
                'sanitize_callback'     =>  'absint'
            ]
        );

        $wp_customize->add_control(
            'set_slider_page1', [  
                'label'                 =>  __( 'Set slider page 1', 'fancy-lab' ),
                'description'           =>  __( 'Set slider page 1', 'fancy-lab' ),
                'section'               =>  'sec_slider',
                'type'                  =>  'dropdown-pages'
            ]
        );

        // Field 2 - Slider button text number 1
        $wp_customize->add_setting(
            'set_slider_button_text1', [  
                'type'                  =>  'theme_mod',
                'default'               =>  '',
                'sanitize_callback'     =>  'sanitize_text_field'
            ]
        );

        $wp_customize->add_control(
            'set_slider_button_text1', [  
                'label'                 =>  __( 'Button text for page 1', 'fancy-lab' ),
                'description'           =>  __( 'Button text for page 1', 'fancy-lab' ),
                'section'               =>  'sec_slider',
                'type'                  =>  'text'
            ]
        );

        // Field 3 - Slider button URL number 1
        $wp_customize->add_setting(
            'set_slider_button_url1', [  
                'type'                  =>  'theme_mod',
                'default'               =>  '',
                'sanitize_callback'     =>  'esc_url_raw'
            ]
        );

        $wp_customize->add_control(
            'set_slider_button_url1', [  
                'label'                 =>  __( 'URL for page 1', 'fancy-lab' ),
                'description'           =>  __( 'URL for page 1', 'fancy-lab' ),
                'section'               =>  'sec_slider',
                'type'                  =>  'url'
            ]
        );

        // Field 4 - Slider page number 2
        $wp_customize->add_setting(
            'set_slider_page2', [  
                'type'                  =>  'theme_mod',
                'default'               =>  '',
                'sanitize_callback'     =>  'absint'
            ]
        );

        $wp_customize->add_control(
            'set_slider_page2', [  
                'label'                 =>  __( 'Set slider page 2', 'fancy-lab' ),
                'description'           =>  __( 'Set slider page 2', 'fancy-lab' ),
                'section'               =>  'sec_slider',
                'type'                  =>  'dropdown-pages'
            ]
        );

        // Field 5 - Slider button text number 2
        $wp_customize->add_setting(
            'set_slider_button_text2', [  
                'type'                  =>  'theme_mod',
                'default'               =>  '',
                'sanitize_callback'     =>  'sanitize_text_field'
            ]
        );

        $wp_customize->add_control(
            'set_slider_button_text2', [  
                'label'                 =>  __( 'Button text for page 2', 'fancy-lab' ),
                'description'           =>  __( 'Button text for page 2', 'fancy-lab' ),
                'section'               =>  'sec_slider',
                'type'                  =>  'text'
            ]
        );

        // Field 6 - Slider button URL number 2
        $wp_customize->add_setting(
            'set_slider_button_url2', [  
                'type'                  =>  'theme_mod',
                'default'               =>  '',
                'sanitize_callback'     =>  'esc_url_raw'
            ]
        );

        $wp_customize->add_control(
            'set_slider_button_url2', [  
                'label'                 =>  __( 'URL for page 2', 'fancy-lab' ),
                'description'           =>  __( 'URL for page 2', 'fancy-lab' ),
                'section'               =>  'sec_slider',
                'type'                  =>  'url'
            ]
        );

        // Field 7 - Slider page number 3
        $wp_customize->add_setting(
            'set_slider_page3', [  
                'type'                  =>  'theme_mod',
                'default'               =>  '',
                'sanitize_callback'     =>  'absint'
            ]
        );

        $wp_customize->add_control(
            'set_slider_page3', [  
                'label'                 =>  __( 'Set slider page 3', 'fancy-lab' ),
                'description'           =>  __( 'Set slider page 3', 'fancy-lab' ),
                'section'               =>  'sec_slider',
                'type'                  =>  'dropdown-pages'
            ]
        );

        // Field 8 - Slider button text number 3
        $wp_customize->add_setting(
            'set_slider_button_text3', [  
                'type'                  =>  'theme_mod',
                'default'               =>  '',
                'sanitize_callback'     =>  'sanitize_text_field'
            ]
        );

        $wp_customize->add_control(
            'set_slider_button_text3', [  
                'label'                 =>  __( 'Button text for page 3', 'fancy-lab' ),
                'description'           =>  __( 'Button text for page 3', 'fancy-lab' ),
                'section'               =>  'sec_slider',
                'type'                  =>  'text'
            ]
        );

        // Field 9 - Slider button URL number 3
        $wp_customize->add_setting(
            'set_slider_button_url3', [  
                'type'                  =>  'theme_mod',
                'default'               =>  '',
                'sanitize_callback'     =>  'esc_url_raw'
            ]
        );

        $wp_customize->add_control(
            'set_slider_button_url3', [  
                'label'                 =>  __( 'URL for page 3', 'fancy-lab' ),
                'description'           =>  __( 'URL for page 3', 'fancy-lab' ),
                'section'               =>  'sec_slider',
                'type'                  =>  'url'
            ]
        );
    

    /*---------------------------------------------------------------*/
    // Home page settings
    $wp_customize->add_section(
        'sec_home_page', [
            'title'         =>  __( 'Home Page Products and Blog Settings', 'fancy-lab' ),
            'description'   =>  __( 'Home Page Section', 'fancy-lab' )
        ]
    );
        // Popular products
        $wp_customize->add_setting(
            'set_popular_max_num', [  
                'type'                  =>  'theme_mod',
                'default'               =>  '',
                'sanitize_callback'     =>  'absint'
            ]
        );

        $wp_customize->add_control(
            'set_popular_max_num', [  
                'label'                 =>  __( 'Popular Products Max Number', 'fancy-lab' ),
                'description'           =>  __( 'Popular Products Max Number', 'fancy-lab' ),
                'section'               =>  'sec_home_page',
                'type'                  =>  'number'
            ]
        );

        $wp_customize->add_setting(
            'set_popular_max_col', [  
                'type'                  =>  'theme_mod',
                'default'               =>  '',
                'sanitize_callback'     =>  'absint'
            ]
        );

        $wp_customize->add_control(
            'set_popular_max_col', [  
                'label'                 =>  __( 'Popular Products Max Columns', 'fancy-lab' ),
                'description'           =>  __( 'Popular Products Max Columns', 'fancy-lab' ),
                'section'               =>  'sec_home_page',
                'type'                  =>  'number'
            ]
        );

        // Title for Popular products
        $wp_customize->add_setting(
            'set_popular_title', [  
                'type'                  =>  'theme_mod',
                'default'               =>  '',
                'sanitize_callback'     =>  'sanitize_text_field'
            ]
        );

        $wp_customize->add_control(
            'set_popular_title', [  
                'label'                 =>  __( 'Title for popular products', 'fancy-lab' ),
                'description'           =>  __( 'Title for popular products', 'fancy-lab' ),
                'section'               =>  'sec_home_page',
                'type'                  =>  'text'
            ]
        );

        // New arrivals
        $wp_customize->add_setting(
            'set_new_arrivals_max_num', [  
                'type'                  =>  'theme_mod',
                'default'               =>  '',
                'sanitize_callback'     =>  'absint'
            ]
        );

        $wp_customize->add_control(
            'set_new_arrivals_max_num', [  
                'label'                 =>  __( 'New Arrivals Max Number', 'fancy-lab' ),
                'description'           =>  __( 'New Arrivals Max Number', 'fancy-lab' ),
                'section'               =>  'sec_home_page',
                'type'                  =>  'number'
            ]
        );

        $wp_customize->add_setting(
            'set_new_arrivals_max_col', [  
                'type'                  =>  'theme_mod',
                'default'               =>  '',
                'sanitize_callback'     =>  'absint'
            ]
        );

        $wp_customize->add_control(
            'set_new_arrivals_max_col', [  
                'label'                 =>  __( 'New Arrivals Max Columns', 'fancy-lab' ),
                'description'           =>  __( 'New Arrivals Max Columns', 'fancy-lab' ),
                'section'               =>  'sec_home_page',
                'type'                  =>  'number'
            ]
        );

        // Title for New Arrivals
        $wp_customize->add_setting(
            'set_new_arrivals_title', [  
                'type'                  =>  'theme_mod',
                'default'               =>  '',
                'sanitize_callback'     =>  'sanitize_text_field'
            ]
        );

        $wp_customize->add_control(
            'set_new_arrivals_title', [  
                'label'                 =>  __( 'Title for New Arrivals', 'fancy-lab' ),
                'description'           =>  __( 'Title for New Arrivals', 'fancy-lab' ),
                'section'               =>  'sec_home_page',
                'type'                  =>  'text'
            ]
        );
            
        // Deal of the Week Checkbox
        $wp_customize->add_setting(
            'set_deal_show', [  
                'type'                  =>  'theme_mod',
                'default'               =>  '',
                'sanitize_callback'     =>  'fancy_lab_sanitize_checkbox'
            ]
        );

        $wp_customize->add_control(
            'set_deal_show', [  
                'label'                 =>  __( 'Show Deal of the Week?', 'fancy-lab' ),
                'section'               =>  'sec_home_page',
                'type'                  =>  'checkbox'
            ]
        );

        // Deal of the Week Product ID
        $wp_customize->add_setting(
            'set_deal', [  
                'type'                  =>  'theme_mod',
                'default'               =>  '',
                'sanitize_callback'     =>  'absint'
            ]
        );

        $wp_customize->add_control(
            'set_deal', [  
                'label'                 =>  __( 'Deal of the Week Product ID', 'fancy-lab' ),
                'description'           =>  __( 'Product ID to Display', 'fancy-lab' ),
                'section'               =>  'sec_home_page',
                'type'                  =>  'number'
            ]
        );

        // Title for Deal of the Week Product
        $wp_customize->add_setting(
            'set_deal_of_the_week_title', [  
                'type'                  =>  'theme_mod',
                'default'               =>  '',
                'sanitize_callback'     =>  'sanitize_text_field'
            ]
        );

        $wp_customize->add_control(
            'set_deal_of_the_week_title', [  
                'label'                 =>  __( 'Title for Deal of the Week Product', 'fancy-lab' ),
                'description'           =>  __( 'Title for Deal of the Week Product', 'fancy-lab' ),
                'section'               =>  'sec_home_page',
                'type'                  =>  'text'
            ]
        );


}
add_action( 'customize_register', 'fancy_lab_customizer' );

function fancy_lab_sanitize_checkbox( $checked ) {
    return ( ( isset( $checked ) && true == $checked ) ? true : false );
}