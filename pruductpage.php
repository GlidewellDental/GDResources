<?php
/*
Template Name: GDR ~ Product Page
Description: This part is optional, but helpful for describing the Post Template
*/
?>

<?php

get_header();

?>
<style>
/*overwrite bootstrap*/
.nav-tabs>li>a {
  border-radius: 25px 4px 0 0;
}

.nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
  font-weight: bold;
}

.container {
  max-width: 1470px;
}

.margin-top {
  margin-top: 100px;
}

.box-br {
  border: 1px solid #e1e1e1;
  border-radius: 25px 0px 25px 0px;
  padding: 50px 15px 60px 15px;
  margin-bottom: 30px;
}

.fa-download {
  border-right: solid 1px #99bcdb;
  padding-right: 9px;
  line-height: 20px;
  margin-right: 6px;
  font-size: 20px;
  vertical-align: sub;
}

.btn-download {
  background-color: #ffffff;
  border-color: #e1e1e1;
  
  color: #337ab7;
  text-align: left;
  border-radius: 0px;
  margin-bottom: 1px;
}
.btn-download:hover,
.btn-download:focus,
.btn-download:active,
.btn-download.active {
  background-color: #ebebeb;
  border-color: #ebebeb;
  
  color: #337ab7;
}

/*tab responsive*/
.responsive-tabs {
  margin-top: 0px;
}

.responsive-tabs-container .tab-content {
  padding: 30px 15px;
  border:1px solid #ddd;
  border-top:none;
  border-radius: 0 0 25px 0;
  background-color: #fff;
}

.responsive-tabs-container[class*="accordion-"] .tab-pane {
  margin-bottom: 15px;
  font-weight: bold;
}

.responsive-tabs-container[class*="accordion-"] .accordion-link {
  display: none;
  margin-bottom: 10px;
  padding: 10px 15px;
  background-color: #f5f5f5;
  border-radius: 4px;
  border: 1px solid #ddd;
  color: #337ab7;
}

.responsive-tabs-container[class*="accordion-"] .accordion-link.active {
    border-bottom: medium none;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
    color: #333;
    font-weight: bold;
}

@media (max-width: 767px) {
  .responsive-tabs-container.accordion-xs .nav-tabs {
    display: none;
  }
  
  .responsive-tabs-container.accordion-xs .accordion-link {
    display: block;
  }
  
  .responsive-tabs-container[class*="accordion-"] .tab-pane {
    border:1px solid #ddd;
    border-top:none;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-width: medium 1px 1px;
    margin-bottom: 10px;
    margin-top: -10px;
    padding: 30px 15px;
 }
}

/*@media (min-width: 768px) and (max-width: 991px) {*/
@media (min-width: 768px) and (max-width: 767px) {
  .responsive-tabs-container.accordion-sm .nav-tabs {
    display: none;
  }
  
  .responsive-tabs-container.accordion-sm .accordion-link {
    display: block;
  }
  
  .responsive-tabs-container[class*="accordion-"] .tab-pane {
    border:1px solid #ddd;
    border-top:none;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-width: medium 1px 1px;
    margin-bottom: 10px;
    margin-top: -10px;
    padding: 30px 15px;
 }
}

@media (min-width: 992px) and (max-width: 1199px) {
  .responsive-tabs-container.accordion-md .nav-tabs {
    display: none;
  }
  
  .responsive-tabs-container.accordion-md .accordion-link {
    display: block;
  }
}

@media (min-width: 1200px) {
  .responsive-tabs-container.accordion-lg .nav-tabs {
    display: none;
  }
  
  .responsive-tabs-container.accordion-lg .accordion-link {
    display: block;
  }
}

@media (max-width: 767px) {
.responsive-tabs-container .tab-content {
  padding: 30px 0px;
  border:0px solid #ddd;
  border-top:none;
}
}
li.active {
    background-color: initial;
}
li {
  background-color: #fff;
}
.nav-tabs>li>a {
    color: #000;
    cursor: default;
    border: 1px solid #ddd;
    background-color: #eee;
}
li:hover {
  background-color: initial;
}
.nav-tabs>li>a:active {
  color: #000;
}
.object {
  margin-top: 15px;
}
</style>
<?php get_template_part('include', 'headbanner'); ?>
<!-- Start: text-stage -->
<section class="text-stage">
  <div class="container">
    <div class="row">
       <div class="col-sm-6">
        <h1>Māui plants his hook at Hamakua</h1>
        <p>In Hawaiian mythology, Māui is a culture hero and ancient chief who appears in several different genealogies. He is often characterized by his cunning and trickery. In the Ulu line he is the son of ʻAkalana and his wife Hinakawea. Māui is one of the Kupua. His name is cognate with the Hawaiian island Maui. Some of Maui’s most famous myths include how he helped slow the sun so people could have longer days, or how he fished up land masses with his great fish hook.</p>
      </div>
      <div class="col-sm-6">
        <img src="http://dummyimage.com/900x250/f00/fff" class="img-responsive">
      </div>
    </div>
  </div>
</section>
<!-- End: text-stage -->
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
            <div class="col-sm-4">
              <div class="object">
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-responsive">
                <p><?php echo $title; ?></p>
                <a class="btn btn-sm btn-download" href="<?php echo $link['url']; ?>" role="button">
                <i class="fa fa-download" aria-hidden="true"></i> <strong>DOWNLOAD</strong> (RIGHT CLICK)
                </a>
              </div>
            </div>
            <?php
              endwhile; //if( get_sub_field('tab_content') ):
              endif; //if( get_sub_field('tab_content') ):?>
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
 
<?php get_footer(); ?>