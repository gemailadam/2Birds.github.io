<div class="qwe-index">
<?php 
	if (have_posts()) {
		$oddeven=1;

		$count_qwe=1; 

		while (have_posts()) {
			the_post();


			$post_image='image_post_'.$count_qwe.'_qwe';


			$post_image_id_qwe='post_image'.$oddeven.'_qwe';
			
			echo '<div id="post-';the_ID();echo '"';post_class();echo '>';
			echo '<div class="qwe-post-wrapper qwe-col-xl-12 qwe-col-lg-12 qwe-col-md-12 qwe-col-sm-12">';
			
			if ($oddeven %2 == 0) {
			$qweImage=get_template_directory_uri().'/images/postimage'.$oddeven.'.jpg';
			echo '<div class="qwe-left-part qwe-col-xl-6 qwe-col-lg-12 qwe-col-md-12 qwe-col-sm-12">';				
			echo '<div class="qwe-article">';				
				echo '<h1 class="qwe-page-title"><a href="';the_permalink();echo '">';the_title();echo '</a></h1>';
				// the_content();
				the_excerpt();
			echo '</div>';
			echo '</div>';
			echo '<div class="qwe-right-part qwe-col-xl-6 qwe-col-lg-12 qwe-col-md-12 qwe-col-sm-12">';
				echo '<img class="previewImage" src="';echo get_theme_mod($post_image,$qweImage);echo '" alt=""/>';
			echo '</div>';
			}else{
			$qweImage=get_template_directory_uri().'/images/postimage'.$oddeven.'.jpg';
			echo '<div class="qwe-left-part qwe-col-xl-6 qwe-col-lg-12 qwe-col-md-12 qwe-col-sm-12">';
				echo '<img class="previewImage" src="';echo get_theme_mod($post_image,$qweImage);echo '" alt=""/>';
			echo '</div>';
			echo '<div class="qwe-right-part qwe-article qwe-col-xl-6 qwe-col-lg-12 qwe-col-md-12 qwe-col-sm-12">';				
			echo '<div class="qwe-article">';
				echo '<h1 class="qwe-page-title"><a href="';the_permalink();echo '">';the_title();echo '</a></h1>';
				// the_content();
				the_excerpt();
			echo '</div>';
			echo '</div>';
			}

			echo '</div>';
			echo "</div>";

			$oddeven=$oddeven+1;
			$count_qwe++;

echo '<span class="qwe-prev-post">';previous_posts_link();echo '</span>';
echo '<span class="qwe-next-post">';next_posts_link();echo '</span>';  

		}
	}


?>
<span class="qwe-prev-post">
	 <?php previous_posts_link(); ?> 
</span>
<span class="qwe-next-post">
	<?php next_posts_link(); ?>
</span>  
<div class=" qwe-col-xs-9 qwe-col-lg-9 qwe-col-md-12 qwe-col-sm-12 qwe-col-vs-12">
<div class="qwe-comments">
 <?php comments_template('comments.php'); ?>
 </div>


</div>
<!-- end qwe-index class -->