</html>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >

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
<body <?php body_class(); ?>>
<div class="qwe-container">
<!-- container column width at all devices Start -->
<div class="qwe-contain qwe-col-xl-12 qwe-col-lg-12 qwe-col-md-12 qwe-col-sm-12">
<header class="qwe-col-xl-12 qwe-col-lg-12 qwe-col-md-12 qwe-col-sm-12">
<div class="qwe-header qwe-row-xl-7 qwe-row-lg-7 qwe-row-md-7 qwe-row-sm-7" >
	<div class="qwe-nav-one">
		<?php get_template_part('plugins/nav-one'); ?>
	</div>
	<div class="qwe-slideshow">
		<?php get_template_part('plugins/slideshow'); ?>
	</div>
</div>
<!-- </div> -->
<div class="main qwe-col-xl-12 qwe-col-lg-12 qwe-col-md-12 qwe-col-sm-12">
