<!DOCTYPE html>
	<html <?php language_attributes(); ?>>
		<head>
			<meta charset="<?php bloginfo( 'charset' ); ?>" />
			<meta name="viewport" content="width=device-width" />
			<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
			<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
			<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="http://gl-dev-staticweb.s3.amazonaws.com/blimp.css">
			<link rel="stylesheet" type="text/css" href="http://gl-dev-staticweb.s3.amazonaws.com/maui_2_0.css">
			<link rel="stylesheet" type="text/css" href="css/styles.css">
			<?php wp_head(); ?>
		</head>
		<body <?php body_class(); ?>>
			<!-- Start: head-banner -->
			<section class="head-banner">
				<div class="container">
					<div class="row">
						 <div class="col-md-4 col-sm-12">
						 	<a href="#">
						 		<img src="http://gdresources.staging.wpengine.com/wp-content/uploads/2017/02/logo-glidewell-resources.png" class="img-responsive glidewell-resources" alt="Glidewell Resource Logo">
						 	</a>
						 </div>
						 <div class="col-md-8">
							 <div style="text-align: right;">
							 	<a href="<?php echo wp_logout_url(); ?>">Logout</a> | <a href="#" alt="contact Us">Contact Us</a>
							 	<br>
							 	<?php custom_breadcrumbs(); ?>
							 </div>
						 </div>
					</div>
				</div>
			</section>
			<!-- End: head-banner -->
			