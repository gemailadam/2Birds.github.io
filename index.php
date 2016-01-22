<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta name="viewport" content="width=device-width,initial-scall=1">
<meta http-equiv="X-UA-compatible" content="IE=edge">
<meta charset="<?php bloginfo('charset') ?>" >
<!--[if (gte IE 6) & (lte IE 8)]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/respond.min.js"></script> 
<![endif]-->													


	<title><?php wp_title(''); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?> ">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/skeleton.min.css ">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="qwe-container">
	<!-- container column width at all devices Start -->
	<div class="contain qwe-col-lg-12 qwe-col-md-12 qwe-col-sm-12 qwe-col-xs-12 qwe-col-vs-12">
		<header>
			<?php get_header(); ?>
		</header>

		<div class="main">
			<div class="qwe-row">
				<div class="page">
					<!-- page column width Start -->
					<div class="qwe-col-xs-9 qwe-col-lg-9 qwe-col-md-12 qwe-col-sm-12 qwe-col-vs-12">
						<?php 
							if (have_posts()) {
								while (have_posts()) {
									the_post();
									echo '<div id="post-';the_ID();echo '"';post_class();echo '>';

									echo '<div class="post-wrapper">';

									echo '<h1 class="qwe-page-title"><a href="';the_permalink();echo '">';the_title();echo '</a></h1>';

									the_content();
									echo '</div>';

									echo "</div>";
								}
							}
						?>
					</div>
					<!-- page column width END -->
				</div>
				<div class="sidebar">
					<!-- sidebar column width Start -->
					<div class="qwe-col-xs-3 qwe-col-lg-3 qwe-col-md-12 qwe-col-sm-12 qwe-col-vs-12">
						<?php get_sidebar(); ?>
					</div>
					<!-- sidebar column width END -->
				</div>
			</div>
		</div>

		<footer>
			<?php get_footer(); ?>
		</footer>

	</div>
	<!-- container column width at all devices END -->

</div>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.3.min.js"></script> 
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slideshow.js"></script> 

<?php wp_footer(); ?>
</body>
</html>