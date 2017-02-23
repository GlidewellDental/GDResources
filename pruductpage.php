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
</style>   

<div class="container margin-top">
  <div class="row">
    <div class="col-sm-12">

      <ul class="nav nav-tabs responsive-tabs">
        <li class="active"><a href="#product-images">Product Images</a></li>
        <li><a href="#clinical-images">Clinical Images</a></li>
        <li><a href="#logos">Logos</a></li>
        <li><a href="#graphs">Graphs</a></li>
        <li><a href="#brochures">Brochures</a></li>
        <li><a href="#presentations">Presentations</a></li>
      </ul>

      <div class="tab-content">
        <div class="tab-pane active" id="product-images">
          <div class="row">
            
            <div class="col-sm-4">
              <img src="https://www.glidewelldirect.com/portals/0/Images/Resources/bruxzir/product-images/All-Blanks-a.jpg" class="img-responsive">
              <p>1 All BruxZir Blanks</p>
              <a class="btn btn-sm btn-download" href="http://yahoo.com" role="button">
                <i class="fa fa-download" aria-hidden="true"></i> <strong>DOWNLOAD</strong> (RIGHT CLICK)
              </a>
            </div>
            
            <div class="col-sm-4">
              <img src="https://www.glidewelldirect.com/portals/0/Images/Resources/bruxzir/product-images/All-Blanks-a.jpg" class="img-responsive">
              <p>2 All BruxZir Blanks Blanks</p>
              <a class="btn btn-sm btn-download" href="http://yahoo.com" role="button">
                <i class="fa fa-download" aria-hidden="true"></i> <strong>DOWNLOAD</strong> (RIGHT CLICK)
              </a>
            </div>
            
            <div class="col-sm-4">
              <img src="https://www.glidewelldirect.com/portals/0/Images/Resources/bruxzir/product-images/All-Blanks-a.jpg" class="img-responsive">
              <p>3 All BruxZir Blanks Blanks Blanks</p>
              <a class="btn btn-sm btn-download" href="http://yahoo.com" role="button">
                <i class="fa fa-download" aria-hidden="true"></i> <strong>DOWNLOAD</strong> (RIGHT CLICK)
              </a>
            </div>
          
            <div class="col-sm-4">
              <img src="https://www.glidewelldirect.com/portals/0/Images/Resources/bruxzir/product-images/All-Blanks-a.jpg" class="img-responsive">
              <p>4 All BruxZir Blanks Blanks Blanks Blanks</p>
              <a class="btn btn-sm btn-download" href="http://yahoo.com" role="button">
                <i class="fa fa-download" aria-hidden="true"></i> <strong>DOWNLOAD</strong> (RIGHT CLICK)
              </a>
            </div>
            
            <div class="col-sm-4">
              <img src="https://www.glidewelldirect.com/portals/0/Images/Resources/bruxzir/product-images/All-Blanks-a.jpg" class="img-responsive">
              <p>5 All BruxZir Blanks Blanks Blanks Blanks Blanks</p>
              <a class="btn btn-sm btn-download" href="http://yahoo.com" role="button">
                <i class="fa fa-download" aria-hidden="true"></i> <strong>DOWNLOAD</strong> (RIGHT CLICK)
              </a>
            </div>
            
            <div class="col-sm-4">
              <img src="https://www.glidewelldirect.com/portals/0/Images/Resources/bruxzir/product-images/All-Blanks-a.jpg" class="img-responsive">
              <p>6 All BruxZir Blanks</p>
              <a class="btn btn-sm btn-download" href="http://yahoo.com" role="button">
                <i class="fa fa-download" aria-hidden="true"></i> <strong>DOWNLOAD</strong> (RIGHT CLICK)
              </a>
            </div>
            
          </div>
        </div>
        
        <div class="tab-pane" id="clinical-images">
          <div class="row">
            
            Top of pane
            <div class="col-sm-4">
              <img src="http://dummyimage.com/1200x1000/f00/fff" class="img-responsive">
              <p>1a All BruxZir Blanks</p>
              <a class="btn btn-sm btn-download" href="http://yahoo.com" role="button">
                <i class="fa fa-download" aria-hidden="true"></i> <strong>DOWNLOAD</strong> (RIGHT CLICK)
              </a>
            </div>
            
            <div class="col-sm-4">
              <img src="http://dummyimage.com/1200x1000/f00/fff" class="img-responsive">
              <p>2 All BruxZir Blanks Blanks</p>
              <a class="btn btn-sm btn-download" href="http://yahoo.com" role="button">
                <i class="fa fa-download" aria-hidden="true"></i> <strong>DOWNLOAD</strong> (RIGHT CLICK)
              </a>
            </div>
            
            <div class="col-sm-4">
              <img src="http://dummyimage.com/1200x1000/f00/fff" class="img-responsive">
              <p>3 All BruxZir Blanks Blanks Blanks</p>
              <a class="btn btn-sm btn-download" href="http://yahoo.com" role="button">
                <i class="fa fa-download" aria-hidden="true"></i> <strong>DOWNLOAD</strong> (RIGHT CLICK)
              </a>
            </div>
          
            <div class="col-sm-4">
              <img src="http://dummyimage.com/1200x1000/f00/fff" class="img-responsive">
              <p>4 All BruxZir Blanks Blanks Blanks Blanks</p>
              <a class="btn btn-sm btn-download" href="http://yahoo.com" role="button">
                <i class="fa fa-download" aria-hidden="true"></i> <strong>DOWNLOAD</strong> (RIGHT CLICK)
              </a>
            </div>
            
            <div class="col-sm-4">
              <img src="http://dummyimage.com/1200x1000/f00/fff" class="img-responsive">
              <p>5 All BruxZir Blanks Blanks Blanks Blanks Blanks</p>
              <a class="btn btn-sm btn-download" href="http://yahoo.com" role="button">
                <i class="fa fa-download" aria-hidden="true"></i> <strong>DOWNLOAD</strong> (RIGHT CLICK)
              </a>
            </div>
            
            <div class="col-sm-4">
              <img src="http://dummyimage.com/1200x1000/f00/fff" class="img-responsive">
              <p>6 All BruxZir Blanks</p>
              <a class="btn btn-sm btn-download" href="http://yahoo.com" role="button">
                <i class="fa fa-download" aria-hidden="true"></i> <strong>DOWNLOAD</strong> (RIGHT CLICK)
              </a>
            </div>
            
          </div>
        </div>

        <div class="tab-pane" id="logos">
          <div class="row">
            
            <div class="col-sm-4">
              <img src="https://www.glidewelldirect.com/portals/0/Images/Resources/bruxzir/product-images/All-Blanks-a.jpg" class="img-responsive">
              <p>1 All BruxZir Blanks</p>
              <a class="btn btn-sm btn-download" href="http://yahoo.com" role="button">
                <i class="fa fa-download" aria-hidden="true"></i> <strong>DOWNLOAD</strong> (RIGHT CLICK)
              </a>
            </div>
            
            <div class="col-sm-4">
              <img src="https://www.glidewelldirect.com/portals/0/Images/Resources/bruxzir/product-images/All-Blanks-a.jpg" class="img-responsive">
              <p>2 All BruxZir Blanks Blanks</p>
              <a class="btn btn-sm btn-download" href="http://yahoo.com" role="button">
                <i class="fa fa-download" aria-hidden="true"></i> <strong>DOWNLOAD</strong> (RIGHT CLICK)
              </a>
            </div>
            
            <div class="col-sm-4">
              <img src="https://www.glidewelldirect.com/portals/0/Images/Resources/bruxzir/product-images/All-Blanks-a.jpg" class="img-responsive">
              <p>3 All BruxZir Blanks Blanks Blanks</p>
              <a class="btn btn-sm btn-download" href="http://yahoo.com" role="button">
                <i class="fa fa-download" aria-hidden="true"></i> <strong>DOWNLOAD</strong> (RIGHT CLICK)
              </a>
            </div>
          
            <div class="col-sm-4">
              <img src="https://www.glidewelldirect.com/portals/0/Images/Resources/bruxzir/product-images/All-Blanks-a.jpg" class="img-responsive">
              <p>4 All BruxZir Blanks Blanks Blanks Blanks</p>
              <a class="btn btn-sm btn-download" href="http://yahoo.com" role="button">
                <i class="fa fa-download" aria-hidden="true"></i> <strong>DOWNLOAD</strong> (RIGHT CLICK)
              </a>
            </div>
            
            <div class="col-sm-4">
              <img src="https://www.glidewelldirect.com/portals/0/Images/Resources/bruxzir/product-images/All-Blanks-a.jpg" class="img-responsive">
              <p>5 All BruxZir Blanks Blanks Blanks Blanks Blanks</p>
              <a class="btn btn-sm btn-download" href="http://yahoo.com" role="button">
                <i class="fa fa-download" aria-hidden="true"></i> <strong>DOWNLOAD</strong> (RIGHT CLICK)
              </a>
            </div>
            
            <div class="col-sm-4">
              <img src="https://www.glidewelldirect.com/portals/0/Images/Resources/bruxzir/product-images/All-Blanks-a.jpg" class="img-responsive">
              <p>6 All BruxZir Blanks</p>
              <a class="btn btn-sm btn-download" href="http://yahoo.com" role="button">
                <i class="fa fa-download" aria-hidden="true"></i> <strong>DOWNLOAD</strong> (RIGHT CLICK)
              </a>
            </div>
            
          </div>
        </div>

        <div class="tab-pane" id="graphs">
          <div class="row">
            
            <div class="col-sm-4">
              <img src="https://www.glidewelldirect.com/portals/0/Images/Resources/bruxzir/product-images/All-Blanks-a.jpg" class="img-responsive">
              <p>1 All BruxZir Blanks</p>
              <a class="btn btn-sm btn-download" href="http://yahoo.com" role="button">
                <i class="fa fa-download" aria-hidden="true"></i> <strong>DOWNLOAD</strong> (RIGHT CLICK)
              </a>
            </div>
            
            <div class="col-sm-4">
              <img src="https://www.glidewelldirect.com/portals/0/Images/Resources/bruxzir/product-images/All-Blanks-a.jpg" class="img-responsive">
              <p>2 All BruxZir Blanks Blanks</p>
              <a class="btn btn-sm btn-download" href="http://yahoo.com" role="button">
                <i class="fa fa-download" aria-hidden="true"></i> <strong>DOWNLOAD</strong> (RIGHT CLICK)
              </a>
            </div>
            
            <div class="col-sm-4">
              <img src="https://www.glidewelldirect.com/portals/0/Images/Resources/bruxzir/product-images/All-Blanks-a.jpg" class="img-responsive">
              <p>3 All BruxZir Blanks Blanks Blanks</p>
              <a class="btn btn-sm btn-download" href="http://yahoo.com" role="button">
                <i class="fa fa-download" aria-hidden="true"></i> <strong>DOWNLOAD</strong> (RIGHT CLICK)
              </a>
            </div>
          
            <div class="col-sm-4">
              <img src="https://www.glidewelldirect.com/portals/0/Images/Resources/bruxzir/product-images/All-Blanks-a.jpg" class="img-responsive">
              <p>4 All BruxZir Blanks Blanks Blanks Blanks</p>
              <a class="btn btn-sm btn-download" href="http://yahoo.com" role="button">
                <i class="fa fa-download" aria-hidden="true"></i> <strong>DOWNLOAD</strong> (RIGHT CLICK)
              </a>
            </div>
            
            <div class="col-sm-4">
              <img src="https://www.glidewelldirect.com/portals/0/Images/Resources/bruxzir/product-images/All-Blanks-a.jpg" class="img-responsive">
              <p>5 All BruxZir Blanks Blanks Blanks Blanks Blanks</p>
              <a class="btn btn-sm btn-download" href="http://yahoo.com" role="button">
                <i class="fa fa-download" aria-hidden="true"></i> <strong>DOWNLOAD</strong> (RIGHT CLICK)
              </a>
            </div>
            
            <div class="col-sm-4">
              <img src="https://www.glidewelldirect.com/portals/0/Images/Resources/bruxzir/product-images/All-Blanks-a.jpg" class="img-responsive">
              <p>6 All BruxZir Blanks</p>
              <a class="btn btn-sm btn-download" href="http://yahoo.com" role="button">
                <i class="fa fa-download" aria-hidden="true"></i> <strong>DOWNLOAD</strong> (RIGHT CLICK)
              </a>
            </div>
            
          </div>
        </div>
        
        <div class="tab-pane" id="brochures">
          <div class="row">
            
            <div class="col-sm-4">
              <img src="https://www.glidewelldirect.com/portals/0/Images/Resources/bruxzir/product-images/All-Blanks-a.jpg" class="img-responsive">
              <p>1 All BruxZir Blanks</p>
              <a class="btn btn-sm btn-download" href="http://yahoo.com" role="button">
                <i class="fa fa-download" aria-hidden="true"></i> <strong>DOWNLOAD</strong> (RIGHT CLICK)
              </a>
            </div>
            
            <div class="col-sm-4">
              <img src="https://www.glidewelldirect.com/portals/0/Images/Resources/bruxzir/product-images/All-Blanks-a.jpg" class="img-responsive">
              <p>2 All BruxZir Blanks Blanks</p>
              <a class="btn btn-sm btn-download" href="http://yahoo.com" role="button">
                <i class="fa fa-download" aria-hidden="true"></i> <strong>DOWNLOAD</strong> (RIGHT CLICK)
              </a>
            </div>
            
            <div class="col-sm-4">
              <img src="https://www.glidewelldirect.com/portals/0/Images/Resources/bruxzir/product-images/All-Blanks-a.jpg" class="img-responsive">
              <p>3 All BruxZir Blanks Blanks Blanks</p>
              <a class="btn btn-sm btn-download" href="http://yahoo.com" role="button">
                <i class="fa fa-download" aria-hidden="true"></i> <strong>DOWNLOAD</strong> (RIGHT CLICK)
              </a>
            </div>
          
            <div class="col-sm-4">
              <img src="https://www.glidewelldirect.com/portals/0/Images/Resources/bruxzir/product-images/All-Blanks-a.jpg" class="img-responsive">
              <p>4 All BruxZir Blanks Blanks Blanks Blanks</p>
              <a class="btn btn-sm btn-download" href="http://yahoo.com" role="button">
                <i class="fa fa-download" aria-hidden="true"></i> <strong>DOWNLOAD</strong> (RIGHT CLICK)
              </a>
            </div>
            
            <div class="col-sm-4">
              <img src="https://www.glidewelldirect.com/portals/0/Images/Resources/bruxzir/product-images/All-Blanks-a.jpg" class="img-responsive">
              <p>5 All BruxZir Blanks Blanks Blanks Blanks Blanks</p>
              <a class="btn btn-sm btn-download" href="http://yahoo.com" role="button">
                <i class="fa fa-download" aria-hidden="true"></i> <strong>DOWNLOAD</strong> (RIGHT CLICK)
              </a>
            </div>
            
            <div class="col-sm-4">
              <img src="https://www.glidewelldirect.com/portals/0/Images/Resources/bruxzir/product-images/All-Blanks-a.jpg" class="img-responsive">
              <p>6 All BruxZir Blanks</p>
              <a class="btn btn-sm btn-download" href="http://yahoo.com" role="button">
                <i class="fa fa-download" aria-hidden="true"></i> <strong>DOWNLOAD</strong> (RIGHT CLICK)
              </a>
            </div>
            
          </div>
        </div>
        
        <div class="tab-pane" id="presentations">
          <div class="row">
            
            <div class="col-sm-4">
              <img src="https://www.glidewelldirect.com/portals/0/Images/Resources/bruxzir/product-images/All-Blanks-a.jpg" class="img-responsive">
              <p>1 All BruxZir Blanks</p>
              <a class="btn btn-sm btn-download" href="http://yahoo.com" role="button">
                <i class="fa fa-download" aria-hidden="true"></i> <strong>DOWNLOAD</strong> (RIGHT CLICK)
              </a>
            </div>
            
            <div class="col-sm-4">
              <img src="https://www.glidewelldirect.com/portals/0/Images/Resources/bruxzir/product-images/All-Blanks-a.jpg" class="img-responsive">
              <p>2 All BruxZir Blanks Blanks</p>
              <a class="btn btn-sm btn-download" href="http://yahoo.com" role="button">
                <i class="fa fa-download" aria-hidden="true"></i> <strong>DOWNLOAD</strong> (RIGHT CLICK)
              </a>
            </div>
            
            <div class="col-sm-4">
              <img src="https://www.glidewelldirect.com/portals/0/Images/Resources/bruxzir/product-images/All-Blanks-a.jpg" class="img-responsive">
              <p>3 All BruxZir Blanks Blanks Blanks</p>
              <a class="btn btn-sm btn-download" href="http://yahoo.com" role="button">
                <i class="fa fa-download" aria-hidden="true"></i> <strong>DOWNLOAD</strong> (RIGHT CLICK)
              </a>
            </div>
          
            <div class="col-sm-4">
              <img src="https://www.glidewelldirect.com/portals/0/Images/Resources/bruxzir/product-images/All-Blanks-a.jpg" class="img-responsive">
              <p>4 All BruxZir Blanks Blanks Blanks Blanks</p>
              <a class="btn btn-sm btn-download" href="http://yahoo.com" role="button">
                <i class="fa fa-download" aria-hidden="true"></i> <strong>DOWNLOAD</strong> (RIGHT CLICK)
              </a>
            </div>
            
            <div class="col-sm-4">
              <img src="https://www.glidewelldirect.com/portals/0/Images/Resources/bruxzir/product-images/All-Blanks-a.jpg" class="img-responsive">
              <p>5 All BruxZir Blanks Blanks Blanks Blanks Blanks</p>
              <a class="btn btn-sm btn-download" href="http://yahoo.com" role="button">
                <i class="fa fa-download" aria-hidden="true"></i> <strong>DOWNLOAD</strong> (RIGHT CLICK)
              </a>
            </div>
            
            <div class="col-sm-4">
              <img src="https://www.glidewelldirect.com/portals/0/Images/Resources/bruxzir/product-images/All-Blanks-a.jpg" class="img-responsive">
              <p>6 All BruxZir Blanks</p>
              <a class="btn btn-sm btn-download" href="http://yahoo.com" role="button">
                <i class="fa fa-download" aria-hidden="true"></i> <strong>DOWNLOAD</strong> (RIGHT CLICK)
              </a>
            </div>
            
          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>

<script>
! function($) {
    "use strict";
    var a = {
        accordionOn: ["xs"]
    };
    $.fn.responsiveTabs = function(e) {
        var t = $.extend({}, a, e),
            s = "";
        return $.each(t.accordionOn, function(a, e) {
            s += " accordion-" + e
        }), this.each(function() {
            var a = $(this),
                e = a.find("> li > a"),
                t = $(e.first().attr("href")).parent(".tab-content"),
                i = t.children(".tab-pane");
            a.add(t).wrapAll('<div class="responsive-tabs-container" />');
            var n = a.parent(".responsive-tabs-container");
            n.addClass(s), e.each(function(a) {
                var t = $(this),
                    s = t.attr("href"),
                    i = "",
                    n = "",
                    r = "";
                t.parent("li").hasClass("active") && (i = " active"), 0 === a && (n = " first"), a === e.length - 1 && (r = " last"), t.clone(!1).addClass("accordion-link" + i + n + r).insertBefore(s)
            });
            var r = t.children(".accordion-link");
            e.on("click", function(a) {
                a.preventDefault();
                var e = $(this),
                    s = e.parent("li"),
                    n = s.siblings("li"),
                    c = e.attr("href"),
                    l = t.children('a[href="' + c + '"]');
                s.hasClass("active") || (s.addClass("active"), n.removeClass("active"), i.removeClass("active"), $(c).addClass("active"), r.removeClass("active"), l.addClass("active"))
            }), r.on("click", function(t) {
                t.preventDefault();
                var s = $(this),
                    n = s.attr("href"),
                    c = a.find('li > a[href="' + n + '"]').parent("li");
                s.hasClass("active") || (r.removeClass("active"), s.addClass("active"), i.removeClass("active"), $(n).addClass("active"), e.parent("li").removeClass("active"), c.addClass("active"))
            })
        })
    }
}(jQuery);


$('.responsive-tabs').responsiveTabs({
                         accordionOn: ['xs', 'sm']
                  });
</script>    
 
<?php get_footer(); ?>