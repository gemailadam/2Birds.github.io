</html>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?> >
<!--<![endif]-->
<head>
<meta name="viewport" content="width=device-width,initial-scall=1">
<!-- <meta content='width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;' name='viewport' /> -->
<meta http-equiv="X-UA-compatible" content="IE=edge">
<meta charset="<?php bloginfo('charset') ?>" >

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<title><?php wp_title(''); ?></title>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?> ">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/skeleton-col.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/skeleton-row.css">

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/animation.css">

<!-- sub style -->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/sub/wordpress.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/sub/root.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/sub/header.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/sub/nav.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/sub/sticky.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/sub/main.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/sub/page.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/sub/services.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/sub/sidebar.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/sub/newsletter-social.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/sub/footer.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/sub/z-others.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/sub/wiki.css">


<!-- font -->
<link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>
</head>

<!--?php
if ( is_home() ) :
	get_header( 'home' );
elseif ( is_404() ) :
	get_header( '404' );
else :
	get_header();
endif;
?-->