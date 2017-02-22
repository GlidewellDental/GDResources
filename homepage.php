<?php
/*
Template Name: Home Page
*/
?>
<?php get_header(); ?>
<!-- Start: homepage -->
<section class="homepage">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<?php dynamic_sidebar( 'main_wid' ); ?>
			</div>
		</div>
	</div>
</section>
<!-- End: homepage -->
<?php get_footer(); ?>