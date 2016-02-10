<?php

// register navigation menus
function register_nav_menu_qwe(){

	register_nav_menu( 'header', 'Header Menu' );
}
add_action('init','register_nav_menu_qwe' );

// register sidebar 

function register_sidebar_qwe(){

$args = array(
	'name'          => __( 'sidebar-right', 'theme_text_domain' ),
	'id'            => 'sidebar-right',
	'description'   => 'Right Sidebar',
        'class'         => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' );

	register_sidebar($args);
}
add_action('widgets_init','register_sidebar_qwe');


function register_footers_qwe(){

$args = array(
	'name'          => __( 'footer %d', 'theme_text_domain' ),
	'id'            => 'footer',
	'description'   => '',
        'class'         => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' );

	register_sidebars(3,$args);
}
add_action('widgets_init','register_footers_qwe');

function customize_register_qwe( $wp_customize ) {

// Header Title

    $wp_customize->add_panel( 'panel_qwe', array(
      'priority'       => 1,
      'capability'     => 'edit_theme_options',
      'theme_supports' => '',
      'title'          => 'Theme Options',
      'description'    => '',
      // 'active_callback' => 'is_front_page',
    ) );


    $wp_customize->add_section('qwe_header_section',array(
        'title' =>'Header Titles' ,
        'description' => 'change and modify header title',
        'priority' => 1 ,
        'panel'=> 'panel_qwe',
        ));


        $wp_customize->add_setting('qwe-description1',array('default' => '-THEME-' ,'sanitize_callback'=>'esc_textarea'));
        $wp_customize->add_control('qwe-description1-control',array(
                'description' =>'modify description to your header title',        
                'settings' => 'qwe-description1', 
                'type' => 'textarea',
                'label' => 'Description 1',
                'priority'=>1,
                'section' => 'qwe_header_section',
                'transport' => 'postMessage',
                // 'active_callback' => 'is_front_page',   
                
            )
        );


        $wp_customize->add_setting('qwe-description1-link',array('default' => '#','sanitize_callback'=>'esc_url' ));

        $wp_customize->add_control('qwe-description1-link-control',array(
                'description' =>'add hyperlink',        
                'settings' => 'qwe-description1-link', 
                'type' => 'text',
                'label' => 'description 1 link refrance',
                'priority'=>2,
                'section' => 'qwe_header_section',
                'transport' => 'postMessage',
                // 'active_callback' => 'is_front_page',
                
            )
        );


}
add_action( 'customize_register', 'customize_register_qwe' );


?>

