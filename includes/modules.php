<?php


/* max size for content like images and videos */
if ( ! isset( $content_width ) ) {
	$content_width = 600;
}


 	$defaults_2 = array(
		'before'           => '<p>' . 'Pages:',
		'after'            => '</p>',
		'link_before'      => '',
		'link_after'       => '',
		'next_or_number'   => 'number',
		'separator'        => ' ',
		'nextpagelink'     => 'Next page',
		'previouspagelink' => 'Previous page',
		'pagelink'         => '%',
		'echo'             => 1
	);
 
        wp_link_pages( $defaults_2 );



function qwe_register_nav_menu(){

    $location='header';
    $description='Primary menu En';
    register_nav_menu( $location, $description );

}
add_action('after_setup_theme','qwe_register_nav_menu' );

/* register widgets for sidebare*/

/////////////////////////////////////////////
///////////// sidebar float /////////////////
/////////////////////////////////////////////

function qwe_register_float_sidebar() {
$args = array('name' =>'sidebar-float',
	'id'=>'sidebar-float' ,
	'description'=> 'add wigjet to right sidebar',
	'class'  => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' ); 

register_sidebar($args);

}

add_action('widgets_init','qwe_register_float_sidebar');


/////////////////////////////////////////////
///////////// sidebare 2 ////////////////////
/////////////////////////////////////////////

function qwe_register_left_sidebar() {
$args = array('name' => 'sidebar2',
	'id'=>'sidebar2' ,
	'description'=> 'add wigjet to left sidebar if any',
	'class'  => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' ); 

register_sidebar($args);

}

add_action('widgets_init','qwe_register_left_sidebar');


/////////////////////////////////////////////
///////////// Float sidebar /////////////////
/////////////////////////////////////////////

function qwe_register_float_newsletter() {
$args = array('name' =>'newsletter',
	'id'=>'newsletter' ,
	'description'=> 'add wigjet to float newsletter signin',
	'class'  => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' ); 

register_sidebar($args);

}

add_action('widgets_init','qwe_register_float_newsletter');


function register_float_newsletter_plugin_qwe() {
$args = array('name' =>'newsletter-plugin',
	'id'=>'newsletter' ,
	'description'=> 'add wigjet to float newsletter signin',
	'class'  => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' ); 

register_sidebar($args);

}

add_action('widgets_init','register_float_newsletter_plugin_qwe');



function register_newsletter_social_qwe() {
$args = array('name' =>'newsletter-social',
	'id'=>'newsletter-social' ,
	'description'=> 'add wigjet newsletter signin and social',
	'class'  => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' ); 

register_sidebar($args);

}

add_action('widgets_init','register_newsletter_social_qwe');


/* nav arabic */

function qwe_register_nav_ar_menu(){

    $location='headerarabic';
    $description='Primary menu arabic';
    register_nav_menu( $location, $description );

}
add_action('after_setup_theme','qwe_register_nav_ar_menu' );


/////////////////////////////////////////////
////////// sidebare arabic float   //////////
/////////////////////////////////////////////

function qwe_register_float_sidebar_arabic() {
$args = array('name' =>'sidebar-float-arabic',
	'id'=>'sidebar-float-arabic' ,
	'description'=> 'add wigjet to arabic sidebar',
	'class'  => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' ); 

register_sidebar($args);

}

add_action('widgets_init','qwe_register_float_sidebar_arabic');


/////////////////////////////////////////////
////////// Footer 1 arabic    ///////////////
/////////////////////////////////////////////

function qwe_register_footer_1_arabic() {
$args = array('name' =>'footer_1_arabic',
	'id'=>'footer_1_arabic' ,
	'description'=> 'add wigjet to arabic footer 1',
	'class'  => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' ); 

register_sidebar($args);

}

add_action('widgets_init','qwe_register_footer_1_arabic');


/////////////////////////////////////////////
////////// Footer 1 arabic    ///////////////
/////////////////////////////////////////////

function qwe_register_footer_2_arabic() {
$args = array('name' =>'footer_2_arabic',
	'id'=>'footer-2-arabic' ,
	'description'=> 'add wigjet to arabic footer 2',
	'class'  => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' ); 

register_sidebar($args);

}

add_action('widgets_init','qwe_register_footer_2_arabic');

/////////////////////////////////////////////
////////// Footer 1 arabic    ///////////////
/////////////////////////////////////////////

function qwe_register_footer_3_arabic() {
$args = array('name' =>'footer_3_arabic',
	'id'=>'footer_3_arabic' ,
	'description'=> 'add wigjet to arabic footer 3',
	'class'  => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' ); 

register_sidebar($args);

}

add_action('widgets_init','qwe_register_footer_3_arabic');




?>