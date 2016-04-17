<?php
// require_once ('inc/shortcode.php');



/* max size for content like images and videos */
if ( ! isset( $content_width ) ) {
	$content_width = 600;
}



/////////////////////////////////////////////
///////////// Primary Menu ////////////////////
/////////////////////////////////////////////

function register_nav_menu_zxc(){

    $location='header-primary-inspire';
    $description='Inspire Primary menu En';
    register_nav_menu( $location, $description );

}
add_action('after_setup_theme','register_nav_menu_zxc' );


/////////////////////////////////////////////
///////////// Top Menu ////////////////////
/////////////////////////////////////////////

function register_nav_menu_top_zxc(){

    $location='header-top-inspire';
    $description='Inspire Top menu En';
    register_nav_menu( $location, $description );

}
add_action('after_setup_theme','register_nav_menu_top_zxc' );




/* register widgets for search*/

/////////////////////////////////////////////
///////////// sidebare 1 ////////////////////
/////////////////////////////////////////////

function register_search_zxc() {
$args = array('name' =>'search',
	'id'=>'search' ,
	'description'=> 'add search',
	'class'  => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' );

register_sidebar($args);

}

add_action('widgets_init','register_search_zxc');

function register_sidebar_zxc() {
$args = array('name' =>'sidebar-inspire',
	'id'=>'sidebar-inspire' ,
	'description'=> 'add sidebar widgets',
	'class'  => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' );

register_sidebar($args);

}

add_action('widgets_init','register_sidebar_zxc');

function register_footer_zxc() {
$args = array('name' =>'footer-inspire',
	'id'=>'footer-inspire' ,
	'description'=> 'add footers links widget',
	'class'  => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' );

register_sidebar($args);

}

add_action('widgets_init','register_footer_zxc');

function new_excerpt_more_zxc( $more ) {
	return ' <div><a class="read-more" href="'.
	get_permalink( get_the_ID() ) . '">' . __(' Continue Reading ', 'your-text-domain') . '</a></div>';
}
add_filter( 'excerpt_more', 'new_excerpt_more_zxc' );


?>