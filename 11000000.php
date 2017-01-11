<?php
/*
Template Name: 11000000 Page
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
</style>
<div class="container margin-top">

  <div class="row">
    <div class="col-sm-4">
      <a href="bruxzir.html">
        <div class="box-br">
          <img src="http://gdresources.wpengine.com/wp-content/uploads/2017/01/logo-bruxzir-solid-zirconia-crowns-bridges.png" class="img-responsive center-block">
        </div>
      </a>
    </div>
    
    <div class="col-sm-4">
      <a href="bruxzir.html">
        <div class="box-br">
          <img src="http://gdresources.wpengine.com/wp-content/uploads/2017/01/logo-inclusive-dental-implant-system.png" class="img-responsive center-block">
        </div>
      </a>
    </div>
  </div>
  
</div>
 
<?php get_footer(); ?>