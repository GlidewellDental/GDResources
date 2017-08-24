<?php
/*
Template Name: GDR ~ Product Page
Description: This part is optional, but helpful for describing the Post Template
*/
?>

<?php

get_header();

$h1title = get_field('h1title');
$paragraph = get_field('paragraph');

$logo = get_field('logo');
$seal = get_field('seal');

?>

<?php get_template_part('include', 'headbanner'); ?>




<section class="text-stage">
  <div class="container">
    <div class="row">
			<div class="col-sm-12">
				<h1><?php echo $h1title; ?></h1>
      </div>
		</div>
    
    <div class="row">
    	<div class="col-md-6">
      	<?php echo $paragraph; ?>
      </div>
      <div class="col-md-6">
      	<div class="row">
        	<div class="col-md-8 col-sm-6">
          	<img src="<?php echo $logo['url']; ?>" class="img-responsive center-block">
          </div>
          <div class="col-md-4 col-sm-6">
          	<img src="<?php echo $seal['url']; ?>" class="img-responsive center-block">
          </div>
        </div>
      </div>
    </div>
	</div>
</section>




<?php if( have_rows('resource_tab') ): ?>
<div class="container">
  <div class="row">
    <div class="col-sm-12">

      
      <ul class="nav nav-tabs responsive-tabs">
      <?php 
        $resource_tab = get_field('resource_tab');
        $index = 0;
       ?>
        <?php 
          
            while( have_rows('resource_tab') ):the_row();
            $tab = get_sub_field('tab_label');
            $index++;
            $activate = ('active');
            if($index !== 1) {
              $activate = ('');
            }
        ?>
        <li class="<?php echo $activate; ?>"><a href="#tab-<?php echo $index; ?>" data-toggle="tab"><?php echo $tab; ?></a></li>
        <?php
            //optional
          endwhile; //if( get_sub_field('resource_tab') ):
        ?>  
      </ul>
        
        <?php 
        $tally = 0;
        
        ?>
          <div class="tab-content">
          <?php
            while( have_rows('resource_tab') ):the_row();
          $tally++;
          $activate = ('active');
            if($tally !== 1) {
              $activate = ('');
            }
         ?> 
        <div class="tab-pane <?php echo $activate; ?>" id="tab-<?php echo $tally; ?>">
          <div class="row">
            <!-- Start Product Rotator -->
            <?php 
                if( have_rows('tab_content') ):
                while( have_rows('tab_content') ):the_row(); 
                  $title = get_sub_field('resource_title');
                  $image = get_sub_field('resource_image');
                  $link = get_sub_field('resource_link'); 
                  ?>
            <div class="col-sm-4 tab-pad">
              <div class="object">
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-responsive">
                <p><?php echo $title; ?></p>
                <a class="btn btn-sm btn-download" href="<?php echo $link['url']; ?>" role="button" target="_blank">
                <i class="fa fa-download" aria-hidden="true"></i> <strong>DOWNLOAD</strong> (RIGHT CLICK)
                </a>
              </div>
            </div>
            <?php
              endwhile; //if( get_sub_field('tab_content') ):
              endif; //if( get_sub_field('tab_content') ):?>

            


            <!--REPEATER-->
            <?php 
              $ifu_content = get_field('ifu_content');
            ?>
            
            <?php if( have_rows('ifu_content') ): ?>
              
            <!-- ****Code and beginning divs -->
              
            
              <?php 
                $menunum = 0;  //optional
            
                while( have_rows('ifu_content') ): the_row(); 
            
                // variables within the repeater
                $ifu_title = get_sub_field('ifu_title');
                $ifu_image = get_sub_field('ifu_image');
                $ifu_option = get_sub_field('ifu_option');
                $ifu_option_link = get_sub_field('ifu_option_link');
            
                $menunum++;  //optional
              ?>
            
            <!-- ***Code that is repeated for every repeater row -->
              <div class="col-sm-4 tab-pad">
                <div class="object">
                  <img src="<?php echo $ifu_image['url']; ?>" alt="<?php echo $ifu_image['alt']; ?>" class="img-responsive">
                  <p><?php echo $ifu_title; ?></p>
                  <a href="javascript:;" id="dropdownMenu<?php echo $menunum; ?> " data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <button class="btn btn-sm btn-download dropdown-toggle" type="button">
                      <i class="fa fa-download" aria-hidden="true"></i> <strong>SELECT LANGUAGE</strong> <span class="caret"></span>
                    </button>
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu<?php echo $menunum; ?> " style="margin-top: -20px; width: 280px;">
                    <!--REPEATER-->
                    <?php 
                      $ifu_option = get_field('ifu_option');
                    ?>
                    
                    <?php if( have_rows('ifu_option') ): ?>
                      
                    <!-- ****Code and beginning divs -->
                      
                    
                      <?php 
                        $index = 0;  //optional
                    
                        while( have_rows('ifu_option') ): the_row(); 
                    
                        // variables within the repeater
                        $option = get_sub_field('option');
                        $link = get_sub_field('link');
                    
                        $index++;  //optional
                      ?>
                    
                    <!-- ***Code that is repeated for every repeater row -->
                      
                    <li><a href="<?php echo $link['url']; ?>" target="_blank"><?php echo $option; ?></a></li>
                      <?php endwhile; ?>
                    
                    <!-- ****Code and END divs if there are posts for this category -->
                      
                    
                    <?php endif; ?>
                      
                    
            
                  </ul>
                </div>
              </div>
            
              <?php endwhile; ?>
            
            <!-- ****Code and END divs if there are posts for this category -->
              
            
            <?php endif; ?>
          
          
          

<<<<<<< HEAD
      </ul>
    </div>
  </div>

  <?php endwhile; ?>

<!-- ****Code and END divs if there are posts for this category -->
  

<?php endif; ?>
  
            
          
<!--REPEATER-->
<?php 
  $ba_content = get_field('ba_content');
?>

<?php if( have_rows('ba_content') ): ?>
  
<!-- ****Code and beginning divs -->
  

  <?php 
    $menunum = 0;  //optional

    while( have_rows('ba_content') ): the_row(); 

    // variables within the repeater
    $ba_title = get_sub_field('ba_title');
    $ba_image = get_sub_field('ba_image');
    $ba_option = get_sub_field('ba_option');
    $ba_option_link = get_sub_field('ba_option_link');

    $menunum++;  //optional
  ?>

<!-- ***Code that is repeated for every repeater row -->
  <div class="col-sm-4 tab-pad">
    <div class="object">
      <img src="<?php echo $ba_image['url']; ?>" alt="<?php echo $ba_image['alt']; ?>" class="img-responsive">
      <p><?php echo $ba_title; ?></p>
      <a href="javascript:;" id="dropdownMenu<?php echo $menunum; ?> " data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        <button class="btn btn-sm btn-download dropdown-toggle" type="button">
          <i class="fa fa-download" aria-hidden="true"></i> <strong>Before / After</strong> <span class="caret"></span>
        </button>
      </a>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenu<?php echo $menunum; ?> " style="margin-top: -20px; width: 280px;">
        <!--REPEATER-->
        <?php 
          $ba_option = get_field('ba_option');
        ?>
        
        <?php if( have_rows('ba_option') ): ?>
          
        <!-- ****Code and beginning divs -->
          
        
          <?php 
            $index = 0;  //optional
        
            while( have_rows('ba_option') ): the_row(); 
        
            // variables within the repeater
            $option = get_sub_field('option');
            $link = get_sub_field('link');
        
            $index++;  //optional
          ?>
        
        <!-- ***Code that is repeated for every repeater row -->
          
        <li><a href="<?php echo $link['url']; ?>"><?php echo $option; ?></a></li>
          <?php endwhile; ?>
        
        <!-- ****Code and END divs if there are posts for this category -->
          
        
        <?php endif; ?>
          
        

      </ul>
    </div>
  </div>

  <?php endwhile; ?>

<!-- ****Code and END divs if there are posts for this category -->
  

<?php endif; ?>


          </div>
        </div>
      
      <?php
        endwhile; //if( get_sub_field('resource_tab') ): ?>
        </div>
          
   </div> 
  </div>
</div>
<?php endif; //if( get_sub_field('resource_tab') ): ?>
<script type="text/javascript" src="http://gdresources.staging.wpengine.com/wp-content/themes/mauitoolbox/js/tab-responsive.js"></script> 
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<?php get_footer(); ?>