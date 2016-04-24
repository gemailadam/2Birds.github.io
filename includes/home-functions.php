<?php
// require_once ('inc/shortcode.php');



/* max size for content like images and videos */
if ( ! isset( $content_width ) ) {
	$content_width = 600;
}



/////////////////////////////////////////////
///////////// Primary Menu ////////////////////
/////////////////////////////////////////////

function register_nav_menu_home_zxc(){

    $location='header-primary-home';
    $description='home tag Primary menu En';
    register_nav_menu( $location, $description );

}
add_action('after_setup_theme','register_nav_menu_home_zxc' );


/////////////////////////////////////////////
///////////// Top Menu ////////////////////
/////////////////////////////////////////////

function register_nav_menu_top_home_zxc(){

    $location='header-top-home';
    $description='home tag Top menu En';
    register_nav_menu( $location, $description );

}
add_action('after_setup_theme','register_nav_menu_top_home_zxc' );



/////////////////////////////////////////////
///////////// Top Big Image  ////////////////
/////////////////////////////////////////////




function customize_register_magPC_zxc( $wp_customize ) {


// Home Tag Panel

    $wp_customize->add_panel( 'panel_home_zxc', array(
      'priority'       => 2,
      'capability'     => 'edit_theme_options',
      'theme_supports' => '',
      'title'          => 'Home Tag Theme Options',
      'description'    => 'First page for my site [magPC Theme]',
      // 'active_callback' => 'is_front_page',
    ) );


    $wp_customize->add_section('primary_section_zxc',array(
        'title' =>'Images and its Description' ,
        'description' => 'change and modify Images and Descriptions',
        'priority' => 1 ,
        'panel'=> 'panel_home_zxc',
        ));



//   Top Image Primary

        $slice_zxc=get_template_directory_uri(). '/images/slice.jpg';


        $wp_customize->add_setting('slice_zxc',array('default' => $slice_zxc ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'slice_zxc',array(
            'label' =>'Upload Top Primary Image',
            'description'=>'',
            'priority'=>1,
            'section' => 'primary_section_zxc' ,
            'settings' => 'slice_zxc' ,
            // 'active_callback' => 'is_front_page',
        )));




}
add_action( 'customize_register', 'customize_register_magPC_zxc' );


/////////////////////////////////////////////
//////////// Tumbnail Image  ////////////////
/////////////////////////////////////////////

add_theme_support( 'post-thumbnails' );


?>