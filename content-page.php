
<div class="qwe-main">
<div class="qwe-row">
<div class="qwe-page">
<!-- page column width Start -->
<div class="qwe-col-xl-12 qwe-col-lg-12 qwe-col-md-12 qwe-col-sm-12">
<!--?php get_template_part('main-structure/main_page'); ?-->
<section class="qwe-page-class">
<?php 
if (have_posts()) {
	while (have_posts()) {
		the_post();
		echo '<div id="post-';the_ID();echo '"';post_class();echo '>';

		echo '<div class="qwe-post-wrapper">';

			echo '<h1 class="qwe-page-title"><a href="';the_permalink();echo '">';the_title();echo'</a></h1>';

			echo '<div class="qwe-page-body">';
			the_content();
			echo '</div>';

		echo '</div>';

		echo "</div>";
	}
}

		echo '<div class="qwe-newsletter-social">';
		dynamic_sidebar( 'newsletter-social' );
		echo '</div>';
	
?>

</section>
<!-- end qwe-page-class -->

</div>
<!-- page column width END -->
</div>
</div>
</div>

