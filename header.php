<div class="qwe-nav" >
	<?php wp_nav_menu(array('theme_location'=>'header')); ?>
</div>
<div class="qwe-site-title">
	<a href="<?php the_permalink();?>"><?php bloginfo('title' ); ?></a>
	<a href="<?php echo get_theme_mod( 'qwe-description1-link', '#' ); ?>"><?php echo get_theme_mod( 'qwe-description1', '- THEME -' ); ?></a>	
	<a href="#">&#8964;</a>	
	<a href="<?php  the_permalink();?>"><?php bloginfo('description' );?></a>
</div>
<div class="qwe-header-img">
	<img src="<?php echo get_template_directory_uri(); ?>/images/light-love-clouds-river.jpg" alt="">
</div>
