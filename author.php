<!DOCTYPE html>
<html <?php language_attributes(); ?> >

<head>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<meta name="viewport" content="width=device-width,initial-scall=1">
<!-- meta content='width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;' name='viewport' / -->
<meta http-equiv="X-UA-compatible" content="IE=edge">
<meta charset="<?php bloginfo('charset') ?>" >

<!-- link rel="profile" href="http://gmpg.org/xfn/11" / -->
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<title><?php wp_title(''); ?></title>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
<!--link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style-inspire.css"-->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style-author-min.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/animation-min.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/hbootstrap-min.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/hbootstrap-row-min.css">

<!-- font -->
<link href='https://fonts.googleapis.com/css?family=Ubuntu:300|Anton|Russo+One|Limelight' rel='stylesheet' type='text/css'>



<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<div class="container">
<!-- container column width at all devices Start -->
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<header class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">

	<div class="nav-zxc wrap-50" >
		<?php wp_nav_menu(array('theme_location'=>'header')); ?>
	</div>

	<div class="slideshow-zxc">
			<?php

			$logo_qwe=get_template_directory_uri() .'/images/logo.png';

			?>

			<div class="slideshow-container-zxc">

			<div class="slideshow-img-container-zxc">
				<!-- div class="galleryPreviewImage" -->
					<?php
					for ($count_qwe=1; $count_qwe <=3 ; $count_qwe++) { 

					$image_qwe=get_template_directory_uri() .'/images/slice'.$count_qwe.'.jpg';
					$image_id_qwe=array('image1_qwe','image2_qwe','image3_qwe');	

					// echo '<img class="previewImage'.$count_qwe.'" src="';echo get_theme_mod($image_id_qwe[$count_qwe],$image_qwe);
					echo '<img class="img-common-zxc Image-'.$count_qwe.'-zxc" src="';echo get_theme_mod($image_id_qwe[$count_qwe],$image_qwe);
					echo '" alt=""/>';

					}

					?>
			</div>

			<!-- Title STaRT-->
			<!--div class="qwe-site-title"-->
			<div class="site-title-zxc">
				<p>
					<a href="<?php the_permalink();?>"><?php bloginfo('title' ); ?></a>
					<a href="<?php echo get_theme_mod( 'qwe-description1-link', '#' ); ?>"><?php echo get_theme_mod( 'qwe-description1', '- WELCOME -' ); ?></a>	
					<a href="<?php  the_permalink();?>"><?php bloginfo('description' );?></a>
					<!-- <a href="#"><button><?php echo get_theme_mod('qwe-title-button','BUTTON' ); ?></button></a>	 -->
				</p>
			</div>
			<!-- Title END -->

			<div class="logo-zxc">
			<!--?php echo '<img id="logo" src="';echo get_theme_mod('logo_qwe',$logo_qwe);echo '" alt=""/>';?-->
			<?php echo '<img id="logo-id-zxc" src="';echo get_theme_mod('logo_qwe',$logo_qwe);echo '" alt=""/>';?>
			</div>



			</div>
			<!--div class="gallerydescription"-->
			<div class="slideshow-description-zxc">
				<?php

				for ($count_qwe=1; $count_qwe <=3 ; $count_qwe++) { 
				$text_description_link_id_qwe='text_description_link'.$count_qwe.'_qwe';
				echo '<div class="description'.$count_qwe.'">';
				echo '<div class="desbg">';
				echo '<p><a href="';
				echo get_theme_mod($text_description_link_id_qwe,'#');
				echo '">';
				$description_qwe='description'.$count_qwe.'_qwe';
				echo get_theme_mod($description_qwe,'To Inspire Some You Must Inspire Your Self First');
				echo '</p></a>';
				echo '</div>';
				echo '<p><a href="';
				$button_description_link_id_qwe='button_description_link'.$count_qwe.'_qwe';
				echo get_theme_mod($button_description_link_id_qwe,'#');
				$button_description_id_qwe='button_description_id'.$count_qwe.'_qwe';
				$button_description_qwe=array('SUPPORT','IT','WEB DEV');
				echo '"><input type="submit" onClick="" name="button'.$count_qwe.'" value="';
				echo get_theme_mod( $button_description_id_qwe,$button_description_qwe[$count_qwe-1] );
				echo '"/></p></a>';
				echo '</div>';

				}

				?>

			</div>

			<!--div class="galleryNavigationBullets"-->
			<div class="Navigation-Bullets-zxc">
				<?php 
				echo '<p>';	
				//if ($qwe_dir=='ltr'){
				$Total_count=3;//u can use total count for the avove for loops
				for ($b=1; $b <=$Total_count ; $b++) { 
					echo '<a href="javascript: changeimage('.$b.')" class="galleryBullets'.$b.'"><span>Bullet</span></a>';			 			
	 				}
	 			//}elseif($qwe_dir=='rtl'){
	 				//for ($b=8; $b >=1 ; $b--) { 
	 				//	echo '<a href="javascript: changeimage('.$b.')" class="galleryBullets'.$b.'"><span>Bullet</span></a>';			 			
	 				//}
	 			//} 
	 			echo '</p>';	
	 			?>


	 		</div>

	 	</div>
</div>
<!-- </div> -->

</header>

<div class="main-zxc">
	<div class="row">
		<div class="page-zxc col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
			<!-- page column width Start -->
			<div class="">

					<div id="content" class="narrowcolumn author-zxc">

					<!-- This sets the $curauth variable -->

					<?php
					$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
					?>

					<h2>about: <?php echo $curauth->nickname; ?></h2>
					<dl>
					<dt>Website</dt>
					<dd><a href="<?php echo $curauth->user_url; ?>"><?php echo $curauth->user_url; ?></a></dd>
					<dt>Profile</dt>
					<dd><?php echo $curauth->user_description; ?></dd>
					</dl>

					<h2>Posts by <?php echo $curauth->nickname; ?>:</h2>

					<ul>
					<!-- The Loop -->

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<li>
					<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">
					<?php the_title(); ?></a>,
					<?php the_time('d M Y'); ?> in <?php the_category('&');?>
					</li>

					<?php endwhile; else: ?>
					<p><?php _e('No posts by this author.'); ?></p>

					<?php endif; ?>

					<!-- End Loop -->

					</ul>
					</div>
			</div>
			<!-- page column width END -->
		</div>

	</div>
</div>

<!-- sidebar Start -->
<div class="float-sidebar-zxc">
	<h3>archive</h3>
	<?php get_sidebar(); ?>
</div>
<!-- sidebar END -->


<!-- danger don't use width with footer or footer class -->
<footer class="row footer-zxc">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div class="footer-inspire">
   <?php  get_footer('new'); ?>
   </div>
</div>
<!-- end col footer -->
</footer>
<!-- end footer and row -->

</div>
<!-- container column width at all devices END -->

</div>

  <?php get_template_part('main-structure/script'); ?>

</body>
</html>