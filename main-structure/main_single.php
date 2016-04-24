<section class="qwe-single">

<!-- view count -->
<?php observePostViews_zxc(get_the_ID()); ?>
 <!--?php query_posts('cat=-26'); ?-->
 <!--?php query_posts(array('post__not_in'=>'452')); ?-->
<?php
if (have_posts()) {
while (have_posts()) {
the_post();
echo '<div id="post-';the_ID();echo '"';post_class();echo '>';

echo '<div class="qwe-post-wrapper">';

echo '<h1 class="qwe-page-title"><a href="';the_permalink();echo '">';the_title();echo '</a></h1>';

echo '<div class="postedby">';
echo '<b>';
echo '<a href="';
// the_author_link();
echo '"><span>author: ';
// the_author();
the_author_posts_link();
echo ' , </span></a>';
echo '<a href="';
the_permalink();
echo '"><span> at : ';
the_date( get_option( 'date_format', 'F Y'));
echo '</span></a>';
echo '<a><span> , Category : ';
the_category();
echo '</span></a><a><span> , Tags :';
the_tags();
echo "</span></a>";
echo '</b>';
echo '</div>';
echo '<!-- END post by class -->';

the_content();

fetchPostViews_zxc(get_the_ID());

?>
<div class="qwe-next-prev-post">
	<span class="qwe-prev-post">
		<?php previous_post_link(); ?>
	</span>
	<span class="qwe-next-post">
		<?php next_post_link(); ?>
	</span>
</div>

<?php
		echo '<div class="qwe-newsletter-social">';
		dynamic_sidebar( 'newsletter-social' );
		echo '</div>';
?>


<div class="qwe-comments qwe-col-xl-8 qwe-col-lg-8 qwe-col-md-8 qwe-col-sm-8">
	<div class="">
	<?php comments_template( $file, $separate_comments ); ?>
	</div>
</div>

<?php

echo '</div>';
echo '</div>';

} //end while
} //end if

?>
</section>
<!-- end qwe-single -->

