<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="http://gl-dev-staticweb.s3.amazonaws.com/blimp.css">
		<link rel="stylesheet" type="text/css" href="http://gl-dev-staticweb.s3.amazonaws.com/maui_2_0.css">	

		<link rel="stylesheet" type="text/css" href="css/styles.css">   

	<style>
	    body {
	      background-image: url(http://gdresources.staging.wpengine.com/wp-content/uploads/2017/02/body-back2.jpg);
	      background-repeat: no-repeat;
	      background-size: cover;
	      background-position: center center;
	    }
	    
	    .login-box {
	      background: rgba(255, 255, 255, 0.5);
	      padding: 30px;
	      filter: progid: DXImageTransform.Microsoft.gradient(gradientType=0, startColorstr='#E6FFFFFF', endColorstr='#E6FFFFFF');
	      z-index: 999999999;
	      -webkit-box-shadow: 0 6px 6px rgba(0, 0, 0, 0.3);
	      -moz-box-shadow: 0 6px 6px rgba(0, 0, 0, 0.3);
	      box-shadow: 0 6px 6px rgba(0, 0, 0, 0.3);
	      -webkit-border-radius: 6px;
	      -moz-border-radius: 6px;
	      -ms-border-radius: 6px;
	      -o-border-radius: 6px;
	      border-radius: 6px;
	      overflow: hidden;
	      zoom: 1;
	    }
    </style>

	</head>
	<body>

		<div class="container" style="padding-top: 15%;">
			<div class="row">
		  	<div class="col-xl-4 col-xl-offset-4 col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
		    	<div class="login-box">
		        <img src="http://gdresources.staging.wpengine.com/wp-content/uploads/2017/02/logo-glidewell-resources.png" class="img-responsive glidewell-resources center-block"><br>
				        <div class="login-branding">
				  <p class="login-desc">
				    
				  </p>
				</div>
				<div class="login-form">
				<?php
				$args = array(
				    'redirect' => home_url(), 
				    'id_username' => 'user',
				    'id_password' => 'pass',
				   ) 
				;?>
				<?php wp_login_form( $args ); ?>
				</div>
		      </div>
		    </div>
		  </div>
		</div>

		<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	</body>
</html>




