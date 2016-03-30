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
		<!--?php echo '<meta http-equiv="refresh" content="10;url=';echo get_home_url();echo '" />'; ?-->
		<?php get_template_part('main-structure/head_html'); ?>
</head>

<body <?php body_class( ); ?> >
<div class="qwe-container">
	<!-- container column width at all devices Start -->
	<div class="qwe-contain qwe-col-xl-12 qwe-col-lg-12 qwe-col-md-12 qwe-col-sm-12">
		<header class="qwe-col-xl-12 qwe-col-lg-12 qwe-col-md-12 qwe-col-sm-12">
			<?php get_header(); ?>
		</header>
		
		<div class="oops">
			<div class="qwe-row">
				<div class="qwe-col-xl-12 qwe-col-lg-12 qwe-col-md-12 qwe-col-sm-12">
					<!-- yon add a function to get user searched page to redirect to google with the same name -->

					<p>Oops The Page You Request Is not Found , click google button to search for this missing page at google cache ( What Is Google Cache ? ) <a href="http://www.google.com/"><button style="color:#fff;background:orange;width:100px;height:50px;padding:10px;margin:10px;box-shadow:4px 4px 8px #000;">Google</button></a> Or Go To Home Page 
					</p>

				</div>
			</div>
		</div>   



		<footer>
				<div class="qwe-col-xl-9 qwe-col-lg-9 qwe-col-md-12 qwe-col-sm-12 qwe-col-vs-12">
					<?php get_footer(); ?>
				</div>
		</footer>

	</div>
	<!-- container column width at all devices END -->

</div>

  <?php get_template_part('main-structure/script'); ?>

</body>


</html>