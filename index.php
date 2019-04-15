<!DOCTYPE html>
<html lang="en">

<?php get_template_part('templates/head') ?>

<body>

	<?php get_template_part('templates/preloader') ?>

	<?php get_header() ?>

	<?php get_template_part('templates/intro') ?>

	<?php get_template_part('templates/about') ?>

	<?php get_template_part('templates/testimonials') ?>

	<?php get_template_part('templates/services') ?>

	<?php get_template_part('templates/team') ?>

	<?php get_template_part('templates/promotion') ?>

	<?php get_template_part('templates/contact') ?>

	<?php get_footer() ?>

	<!--====== Javascripts & Jquery ======-->
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-2.1.4.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/magnific-popup.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/circle-progress.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
</body>
</html>
