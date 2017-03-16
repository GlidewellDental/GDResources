<?php 
  $headerbanner = get_field('header_banner_image');
 ?>
<style>
  .headerbanner {
    background-image: url(<?php echo $headerbanner['url']; ?>);
    background-size: cover;
    background-position: center center;
    padding-bottom: 20%;
    margin-bottom: 30px;
  }
</style>
<!-- Start: headerbanner -->
<section class="headerbanner"></section>
<!-- End: headerbanner -->