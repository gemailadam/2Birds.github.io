</div>
<footer>
<div class="qwe-col-xl-12 qwe-col-lg-12 qwe-col-md-12 qwe-col-sm-12">

<div class="qwe-footer qwe-col-xl-12 qwe-col-lg-12 qwe-col-md-12 qwe-col-sm-12">
<?php dynamic_sidebar('footer 1'); ?>
</div>
<div class="qwe-footer qwe-col-xl-12 qwe-col-lg-12 qwe-col-md-12 qwe-col-sm-12">
<?php dynamic_sidebar('footer 2'); ?>
</div>
<div class="qwe-footer qwe-col-xl-12 qwe-col-lg-12 qwe-col-md-12 qwe-col-sm-12">
<?php dynamic_sidebar('footer 3'); ?>
</div>

<div class="qwe-copyright">
<a href="http://www.inspireforweb.com/Support">&copy;copyright adam <?php echo date('Y') ?> <?php fetchPostViews_zxc(get_the_ID()); ?></a>
</div>

</div>
</footer>

</div>
<!-- container column width at all devices END -->

</div>

<?php get_template_part('main-structure/script'); ?>

</body>
</html>