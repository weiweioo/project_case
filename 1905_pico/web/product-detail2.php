<?php include '_header.php';?>
    <link rel="stylesheet" type="text/css" href="SRC/css/inner_page.css" />
    <link rel="stylesheet" type="text/css" href="SRC/css/master 2.css" />
<link rel="stylesheet" type="text/css" href="css/slick-test.css" />
<!--
<link rel="stylesheet" type="text/css" href="css/slick-theme.css" />
<script type="text/javascript" src="js/quantity.js"></script>
<script type="text/javascript" src="js/effect01.js"></script>
<script src="js/jquery.zoom.js"></script>
<script type="text/javascript" src="js/jquery.localScroll.min.js"></script>
<!--ZOOM -->
<!--<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" />
<script src="js/fancybox/jquery.fancybox.js" type="text/javascript"></script>
<script type="text/javascript">
		$(document).ready(function() {			
			$('.fancybox').fancybox();
			
			
		});
</script>-->-->
<!--//ZOOM --> 

<script>
  $(document).ready(function() {
      // localscroll
      $('.localscroll').localScroll();
      // product slick
      $('.product-slick').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        dots: false,
        arrows: false,
        asNavFor: '.product-nav',
      });
      // product nav
      $('.product-nav').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
        focusOnSelect: true,
        asNavFor: '.product-slick',
      });
      // zoom
      $(window).on('load resize', function (){
          if ($(window).width() > 1210) {
            $('.product-slick .zoom').zoom();
          }
      });
  });


</script>

    <main>
        <article>
            <div class="prod-banner">
                <div class="prod-banner-box">
                    <div class="prod-banner_info">
                        <div class="prod-banner_info_title">
                            <div class="ch">
                                商品櫥窗
                            </div>
                            <img class="en" src="images/img_prodTxt.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-content">
                <div class="page-product">
                    <div class="side_menu">
                        <?php include '_sideMenu.php';?>
                    </div>
                    <div class="page-product_block">
						<div class="proview_topbox">
            <div class="left_img">    
            
<div class="container">
  <div class="b-slider b-slider--horizontal-tm-1 js-slider-horizontal-tm-1">
    <div class="b-slider__carousel b-slider__carousel--screen">
      <div class="b-slider__item"><img src="images/img_prod02.jpg" alt=""/></div>
      <div class="b-slider__item"><img src="images/img_prod03.jpg" alt=""/></div>
      <div class="b-slider__item"><img src="images/img_prod04.jpg" alt=""/></div>
      <div class="b-slider__item"><img src="images/img_prod05.jpg" alt=""/></div>
      <div class="b-slider__item"><img src="images/img_prod06.jpg" alt=""/></div>
      
    </div>
    <div class="b-slider__carousel b-slider__carousel--thumbs">
       <div class="b-slider__item"><img src="images/img_prod02.jpg" alt=""/></div>
      <div class="b-slider__item"><img src="images/img_prod03.jpg" alt=""/></div>
      <div class="b-slider__item"><img src="images/img_prod04.jpg" alt=""/></div>
      <div class="b-slider__item"><img src="images/img_prod05.jpg" alt=""/></div>
      <div class="b-slider__item"><img src="images/img_prod06" alt=""/></div>
    </div>
  </div>
</div>
            </div>       
            <div class="right_info">   
              <div class="name">鏤空刺繡。洞洞綁帶棉衫</div>
              <div class="no">NO12345678</div>
              <div class="tagbox">
                <div class="new">新品</div>
                <div class="freeship">免運</div>
                <div class="sale">特價</div>
              </div>  
              <div class="txt">高質感的縷空刺繡白襯衫，<br />
是不用扣扣子的襯衫好方便～<br />
穿上去立刻氣質大提升，<br />
套上後領口再打上蝴蝶結，<br />
帶點宮廷風搭配牛仔褲也好好看</div>  
              <div class="money">$800<h1>$900</h1></div> 
              <div class="info_line"></div> 
              <div class="info_list">
             
                
              </div> 
              
              <div class="info_list">
                <div class="dtt">數量</div>
                <div class="spec">
                  <div class="quantity buttons_added">
                    <input type="button" value="-" class="minus">
                    <input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="">
                    <input type="button" value="+" class="plus">
                  </div>
                </div>
              </div>  
              <div class="info_line"></div>     
              <div class="buy_sbox">  
                <a href="cart.php" class="btn-style02 hvr-bob">立即購買</a>
                <a href="member_favorite.php" class="btn-style02 hvr-bob" alt="加入最愛" title="加入最愛"><i class="far fa-heart"></i></a>
                <a href="javascript: void(0)" class="btn-style02 hvr-bob" alt="加入購物車" title="加入購物車"><i class="fe-shopping-cart"></i></a>
              </div>  
              <!-- FB -->
              <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v3.3"></script>
<div class="fb-share-button" data-href="http://www.jlwork.com/1903_make3w/web/products_view.php" data-layout="button" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.jlwork.com%2F1903_make3w%2Fweb%2Fproducts_view.php&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">分享</a></div>
              <!-- //FB -->           
            </div>              
        </div>
                    </div>
					
                </div>
				
            </div>
        </article>
    </main>
    <?php include '_footer.php';?>