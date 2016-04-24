<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <?php get_template_part('main-structure/head_html-ar'); ?>
</head>
<body <?php body_class(); ?>>
<div class="qwe-container">
	<!-- container column width at all devices Start -->
	<div class="qwe-contain qwe-col-xl-12 qwe-col-lg-12 qwe-col-md-12 qwe-col-sm-12">
		<header >
		<div class="qwe-row">

			<div class="qwe-col-xl-12 qwe-col-lg-12 qwe-col-md-12 qwe-col-sm-12">

			<!-- <?php get_header(); ?> -->
				<?php get_template_part('sub-pages/header-ar'); ?>
			</div>
		</div>
		</header>

		<div class="qwe-main">
			<div class="qwe-row">
				<div class="qwe-page">
					<!-- page column width Start -->
					<div class="qwe-col-xl-12 qwe-col-lg-12 qwe-col-md-12 qwe-col-sm-12">
					<!--?php get_template_part('sub-pages/main-category'); ?-->
					<!--use content-it.php instead -->
					<?php get_template_part('main-structure/main_index'); ?>
					</div>
					<!-- page column width END -->
				</div>

			</div>
		</div>

		<footer>
			<div class="qwe-col-xl-12 qwe-col-lg-12 qwe-col-md-12 qwe-col-sm-12">
				<?php get_footer(); ?>
			</div>
		</footer>

	</div>
	<!-- container column width at all devices END -->

</div>

  <?php get_template_part('main-structure/script'); ?>

</body>
</html>