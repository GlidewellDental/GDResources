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
						 <div class="col-sm-12">
						 	<a href="#">
						 		<img src="http://dummyimage.com/200x100/f00/fff" class="img-responsive">
						 	</a>
						 </div>
					</div>
				</div>
			</section>
			<!-- End: head-banner -->
			<nav>
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-12">
							<nav class="navbar navbar-default" role="navigation">
							    <div class="container-fluid">
							        <!-- Brand and toggle get grouped for better mobile display -->
							        <div class="navbar-header">
							            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							                <span class="sr-only">Toggle navigation</span>
							                <span class="icon-bar"></span>
							                <span class="icon-bar"></span>
							                <span class="icon-bar"></span>
							            </button>
							        </div>
							        <!-- Collect the nav links, forms, and other content for toggling -->
							        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
										<?php wp_nav_menu( array( 'theme_location' => mainmenu, 'menu_class' => 'nav navbar-nav'  ) ); ?>
									</div>
								</div><!-- /.navbar-collapse -->
							</nav>
						</div>
					</div>
				</div>
			</nav>