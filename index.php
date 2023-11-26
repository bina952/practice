<?php
/**
 * Front Page Settings
 * 
 * @package Elegant_Shop_Pro
 */

if ( ! function_exists( 'elegant_shop_pro_customize_register_frontpage' ) ) :

function elegant_shop_pro_customize_register_frontpage( $wp_customize ) {
	
    /** Front Page Settings */
    $wp_customize->add_panel( 
        'frontpage_settings',
         array(
<<<<<<< HEAD
            'priority'    => 70,
            'capability'  => 'edit_theme_options', //hello
=======
            'priority'    => 60, //s is 
            'capability'  => 'edit_theme_options',
>>>>>>> aee97f63eed59cadd7c0f5f8c9e5c1d572995abd
            'title'       => esc_html__( 'Front Page Settings', 'elegant-shop-pro' ),
            'description' => esc_html__( 'Static Home Page settings.', 'elegant-shop-pro' ),
        ) 
    ); 
    
    //added thiss code
 
   


    //upto here added this extra code.
}
endif;
add_action( 'customize_register', 'elegant_shop_pro_customize_register_frontpage' );