<?php include('_head.php') ?>
<div class="main_top"></div>
<section class="index-banner">
  <div class="index-banner-bg">
    <ul class="index-banner-slick  wow fadeInUp">
      <div class="item">
        <a href="">
          <div class="slide_img">
            <img src="images/demo/banner-pd01.png">
          </div>
        </a>
      </div>
      <div class="item">
        <a href="">
          <div class="slide_img">
            <img src="images/demo/banner-pd01.png">
          </div>
        </a>
      </div>
      <div class="item">
        <a href="">
          <div class="slide_img">
            <img src="images/demo/banner-pd01.png">
          </div>
        </a>
      </div>
    </ul>
  </div>
</section>
<main>
  <section class="ind_news ">
    <div class="ind_news_box wow fadeInUp">
      <div class="box-3 ">
        <div class="articleTitle">
          <span>訊息中心</span>
        </div>
        <ul>
          <li>
            <div class="date">
              2021/06/30
            </div>
            <div class="tt01">
              訊息中心標題訊息中心標題訊息中心標題訊息中心標題訊息中心標題訊息中心標題
            </div>
          </li>
          <li>
            <div class="date">
              2021/06/30
            </div>
            <div class="tt01">
              訊息中心標題訊息中心標題訊息中心標題訊息中心標題訊息中心標題訊息中心標題
            </div>
          </li>
          <li>
            <div class="date">
              2021/06/30
            </div>
            <div class="tt01">
              訊息中心標題訊息中心標題訊息中心標題訊息中心標題訊息中心標題訊息中心標題
            </div>
          </li>
          <li>
            <div class="date">
              2021/06/30
            </div>
            <div class="tt01">
              訊息中心標題訊息中心標題訊息中心標題訊息中心標題訊息中心標題訊息中心標題
            </div>
          </li>
          <li class="more_btn">
            <a href="">更多消息<i class="fas fa-arrow-right"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <section class="box-2 ">
    <div class="ind_about">
      <div class="articleTitle"><span>關於政伸</span></div>
      <div class="ind_abt_box">
        <div class="abt_b01 abt_left wow fadeInUp">
          <a href="">
            <div class="pic_l ab_img">
              <div class="txt">
                <div class="txt_tt">
                  台灣營運總部
                </div>
                政伸企業於1973年創立於台灣台中市，致力於特殊印刷產業，所開發的自粘貼標與轉寫類貼標，提供自行車及各種工業產品之包裝美化...
              </div>
              <img src="images/ind-abt-left.jpg" alt="">
            </div>
          </a>
        </div>
        <div class="abt_b01 abt_right">
          <a href="">
            <div class="abt_t ab_img wow fadeInUp">
              <div class="txt">
                <div class="txt_tt">
                  福建廠
                </div>
              </div>
              <img src="images/ind-abt-right-t.jpg" alt="">
            </div>
          </a>
          <div class="abt_b">
            <div class="abt_b02">
              <a href="">
                <div class=" pic_r_l ab_img wow fadeInUp">
                  <div class="txt">
                    <div class="txt_tt">
                      歐洲廠
                    </div>
                  </div>
                  <img src="images/ind-abt-right-b1.jpg" alt="">
                </div>
              </a>
            </div>
            <div class="abt_b02">
              <a href="">
                <div class="pic_r_r ab_img wow fadeInUp">
                  <div class="txt">
                    <div class="txt_tt">
                      越南廠
                    </div>
                  </div>
                  <img src="images/ind-abt-right-b2.jpg" alt="">
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="ind_prouds">
    <div class="articleTitle02"><span>產品中心</span></div>
    <ul>
      <li>
        <a href="products.php">
          <div class="pic wow fadeInUp">
            <img src="images/demo/ind-pd01.jpg">
          </div>
        </a>
        <div class="btn">
          <button class="ind_pd_btn">
            <a href="products.php">幻彩系列</a>
          </button>
        </div>
      </li>
      <li>
        <a href="products.php">
          <div class="pic wow fadeInUp">
            <img src="images/demo/ind-pd02.jpg">
          </div>
        </a>
        <div class="btn">
          <button class="ind_pd_btn">
            <a href="products.php">鈦虹系列</a>
          </button>
        </div>
      </li>
      <li>
        <a href="products.php">
          <div class="pic wow fadeInUp">
            <img src="images/demo/ind-pd03.jpg">
          </div>
        </a>
        <div class="btn">
          <button class="ind_pd_btn">
            <a href="products.php">皮革系列</a>
          </button>
        </div>
      </li>
      <li>
        <a href="products.php">
          <div class="pic wow fadeInUp">
            <img src="images/demo/ind-pd04.jpg">
          </div>
        </a>
        <div class="btn">
          <button class="ind_pd_btn">
            <a href="products.php">鈦閃系列</a>
          </button>
        </div>
      </li>
      <li>
        <a href="products.php">
          <div class="pic wow fadeInUp">
            <img src="images/demo/ind-pd05.jpg">
          </div>
        </a>
        <div class="btn">
          <button class="ind_pd_btn">
            <a href="products.php">反光系列</a>
          </button>
        </div>
      </li>
    </ul>

  </section>

</main>
<?php include('_foot.php') ?>
<link rel="stylesheet" type="text/css" href="css/slick.css" />
<link rel="stylesheet" type="text/css" href="css/slick-theme.css" />
<script type="text/javascript" src="js/effect01.js"></script>
<script>
  
  $(document).ready(function() {
    $('.index-banner-slick').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      dots: true,
      fade: true,
      pauseOnHover: false,
      autoplay: true,
      autoplaySpeed: 5000,
      responsive: [{
          breakpoint: 600,
          settings: {
            // dots: false,
          }
        }

      ]
    });

  });
</script>