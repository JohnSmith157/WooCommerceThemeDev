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
            'title'         =>  'Copyright Settings',
            'description'   =>  'Copyright Section'
        ]
    );

    // Field 1 - Copyright Text Box
    $wp_customize->add_setting(
        'set_copyright', [  
            'type'                  =>  'theme_mode',
            'default'               =>  '',
            'sanitize'              =>  'sanitize_text_field'
        ]
    );


    $wp_customize->add_control(
        'set_copyright', [  
            'label'                 =>  'Copyright',
            'description'           =>  'Please, add your copyright information here',
            'section'               =>  'set_copyright',
            'type'                  =>  'text'
        ]
    );
}
add_action( 'customize_register', 'fancy_lab_customizer' );