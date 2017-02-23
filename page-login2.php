<?php
/*
Template Name: Sign-up Page
Description: This part is optional, but helpful for describing the Post Template
*/
?>

<?php

get_header('clean');
?>
	<style>
    body {
      background-image: url(http://gdresources.staging.wpengine.com/wp-content/uploads/2017/02/body-back2.jpg);
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
    }
    
    .login-box {
      background: rgba(0, 0, 0, 0.7);
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
    .login-box p {
    	color: #eee;
    }
    </style>
		<div class="container" style="padding-top: 15%;">
			<div class="row">
		  		<div class="col-xl-8 col-xl-offset-2 col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
		  				<div class="row">
		  					<div class="login-box">
			  				<div class="col-sm-12">
			  					<img style="margin-bottom: 15px;" src="http://gdresources.staging.wpengine.com/wp-content/uploads/2017/02/logo-glidewell-resources.png" class="img-responsive glidewell-resources center-block">
			  				</div>
			  				<div class="col-xl-8 col-lg-7 col-md-12">
			  					<p>In Hawaiian mythology, Māui is a culture hero and ancient chief who appears in several different genealogies. He is often characterized by his cunning and trickery. In the Ulu line he is the son of ʻAkalana and his wife Hinakawea. Māui is one of the Kupua. His name is cognate with the Hawaiian island Maui. Some of Maui’s most famous myths include how he helped slow the sun so people could have longer days, or how he fished up land masses with his great fish hook.</p>
			  				</div>
		  					<div class="col-xl-4 col-lg-5 col-md-12">
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
		  	</div>
		</div>