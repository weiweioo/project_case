<?php include('_head.php') ?>
<link href="SRC/css/swiper_pro.css" rel="stylesheet" type="text/css">
<link href="SRC/css/easyzoom.css" rel="stylesheet" type="text/css">
<!--TAB-->
<link href="SRC/css/tab.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
  $(function() {
    // 預設顯示第一個 Tab
    var _showTab = 0;
    var $defaultLi = $('ul.tabs li').eq(_showTab).addClass('active');
    $($defaultLi.find('a').attr('href')).siblings().hide();

    // 當 li 頁籤被點擊時...
    // 若要改成滑鼠移到 li 頁籤就切換時, 把 click 改成 mouseover
    $('ul.tabs li').click(function() {
      // 找出 li 中的超連結 href(#id)
      var $this = $(this),
        _clickTab = $this.find('a').attr('href');
      // 把目前點擊到的 li 頁籤加上 .active
      // 並把兄弟元素中有 .active 的都移除 class
      $this.addClass('active').siblings('.active').removeClass('active');
      // 淡入相對應的內容並隱藏兄弟元素
      $(_clickTab).stop(false, true).fadeIn().siblings().hide();

      return false;
    }).find('a').focus(function() {
      this.blur();
    });
  });
</script>
<!--//TAB-->
<!--wrapper-->
<div id="wrapper" class="main_bg">
  <?php include('_menu.php') ?>
  <main id="" class="">
    <section class="wow fadeIn">
      <div class="page-banner" style="background-image: url('SRC/images/banner03.jpg')"></div>
      <div class="content-all">
        <section class="product">
          <div class="all-box">
            <!-- 左側選單 -->
            <?php include('_left_point.php') ?>
            <!-- //左側選單 -->
            <section class="pro_main">
              <div class="pro_v_poto">
                <div class="swiper-container gallery-top">
                  <div class="swiper-wrapper pro_b_all">
                    <div class="swiper-slide pd">
                      <img src="SRC/images/point-view-pd01.jpg">
                    </div>
                    <div class="swiper-slide pd">
                      <img src="SRC/images/point-view-pd02.jpg">
                    </div>
                    <div class="swiper-slide pd">
                      <img src="SRC/images/point-view-pd01.jpg">
                    </div>
                    <div class="swiper-slide pd">
                      <img src="SRC/images/point-view-pd02.jpg">
                    </div>
                    <div class="swiper-slide pd">
                      <img src="SRC/images/point-view-pd02.jpg">
                    </div>
                    <div class="swiper-slide pd">
                      <img src="SRC/images/point-view-pd02.jpg">
                    </div>
                  </div>
                </div>
                <div class="swiper-container gallery-thumbs">
                  <div class="swiper-wrapper pro_s_all">
                    <div class="swiper-slide s_pic"><img src="SRC/images/point-view-pd01.jpg"></div>
                    <div class="swiper-slide s_pic"><img src="SRC/images/point-view-pd02.jpg"></div>
                    <div class="swiper-slide s_pic"><img src="SRC/images/point-view-pd01.jpg"></div>
                    <div class="swiper-slide s_pic"><img src="SRC/images/point-view-pd02.jpg"></div>
                    <div class="swiper-slide s_pic"><img src="SRC/images/point-view-pd02.jpg"></div>
                    <div class="swiper-slide s_pic"><img src="SRC/images/point-view-pd02.jpg"></div>
                  </div>
                  <!-- Add Arrows -->
                  <div class="swiper-button-next swiper-button-white"></div>
                  <div class="swiper-button-prev swiper-button-white"></div>
                </div>
              </div>
              <div class="pro_v_box">
                <ul class="pro_v_list">
                  <li class="title">極潤水光保濕面膜</li>
                </ul>
                <ul class="pro_v_list">
                  <li class="name">產品編號</li>
                  <li class="text">SG-1234567</li>
                </ul>
                <ul class="pro_v_list">
                  <li class="name">規格</li>
                  <li class="text">30ml</li>
                </ul>
                <ul class="pro_v_list">
                  <li class="name">點數</li>
                  <li class="text"><span>100</span></li>
                </ul>
                <ul class="pro_v_list02">
                  <li class="qty">
                    數量：1
                  </li>
                  <li class="txt">備註：每人限購2筆</li>
                </ul>
                <div class="pro_lin_box">
                  <a href="cart02.php" class="add_car">加入兌換</a>
                </div>
              </div>
              <div class="proview_topbox02 pro_v_con">
                <div class="abgne_tab">
                  <div class="sticky-top">
                    <ul class="tabs">
                      <li class="active"><a href="#tab1">活動內容</a></li>
                      <li><a href="#tab2">體驗分享</a></li>
                    </ul>
                  </div>
                  <div class="tab_container">
                    <div id="tab1" class="tab_content">
                      <div class="user_editor line-height">
                        <!--文字編輯器內容-->
                        <div class="tab-tit">
                          活動內容
                        </div>
                        <div class="w16">
                          *C318CL 透明 - 不會影響後續使用的睫毛膏效果，建議搭配其他睫毛膏使用。</br>
                          *C469BK 自然黑 - 自然濃密X烏黑，讓妳輪廓更為鮮明！</br>
                          *C410BR 柔和棕 - 柔和的棕色，創造自然眼妝。</br>
                          *C470WM 優雅紫紅 - 葡萄酒色, 創造女人味的眼妝。</br>
                          <p>&nbsp;</p>
                          <div class="w20">三合一多功能睫毛膏</div>
                          已經用掉N支的Canmake睫毛復活液！真的大推！ 我是用過很多品牌都會陽痿的睫毛，自從買了口碑很好的睫毛復活液 幾乎每支被我打入冷宮的睫毛膏都被救回來 原來我缺的不是好的睫毛膏，而是好的睫毛底膏阿！ 有搭睫毛復活液的睫毛可以站立一整天，睫毛也能刷出立體感 完全不會暈染，真的大愛這支</br>
                          <p>&nbsp;</p>
                          <p>延伸閱讀：【睫毛復活液】</p>
                          <img src="SRC/images/try02.jpg">
                        </div>
                        <p class="r16">※此區為圖文編輯器<br></p>
                        <!--//文字編輯器內容-->
                      </div>
                    </div>
                    <div id="tab2" class="tab_content">
                      <div class="user_editor line-height">
                        <!--文字編輯器內容-->
                        <div class="tab-tit">
                          體驗分享
                        </div>
                        <ul class="share-list">
                          <li>
                            <a href="products_view.php">
                              <div class="shr-pic">
                                <img src="SRC/images/try03.jpg" alt="">
                              </div>
                              <div class="shr-txt">
                                <div class="t01">
                                  CANMAKE 睫毛復活液
                                </div>
                                <div class="p01">
                                  大名鼎鼎的睫毛威爾剛XD 這支真的蠻厲害的！根根分明 梳子狀的刷頭很好上手，不容易沾眼皮 但我覺得用背面那面刷比較好用，相對不容易結塊 用完一定要再上有顏色的睫毛膏不然會白白的唷
                                </div>
                              </div>
                            </a>
                          </li>
                          <li>
                            <a href="products_view.php">
                              <div class="shr-pic">
                                <img src="SRC/images/try03.jpg" alt="">
                              </div>
                              <div class="shr-txt">
                                <div class="t01">
                                  CANMAKE 睫毛復活液
                                </div>
                                <div class="p01">
                                  大名鼎鼎的睫毛威爾剛XD 這支真的蠻厲害的！根根分明 梳子狀的刷頭很好上手，不容易沾眼皮 但我覺得用背面那面刷比較好用，相對不容易結塊 用完一定要再上有顏色的睫毛膏不然會白白的唷
                                </div>
                              </div>
                            </a>
                          </li>
                          <li>
                            <a href="products_view.php">
                              <div class="shr-pic">
                                <img src="SRC/images/try03.jpg" alt="">
                              </div>
                              <div class="shr-txt">
                                <div class="t01">
                                  CANMAKE 睫毛復活液
                                </div>
                                <div class="p01">
                                  大名鼎鼎的睫毛威爾剛XD 這支真的蠻厲害的！根根分明 梳子狀的刷頭很好上手，不容易沾眼皮 但我覺得用背面那面刷比較好用，相對不容易結塊 用完一定要再上有顏色的睫毛膏不然會白白的唷
                                </div>
                              </div>
                            </a>
                          </li>
                          <li>
                            <a href="products_view.php">
                              <div class="shr-pic">
                                <img src="SRC/images/try03.jpg" alt="">
                              </div>
                              <div class="shr-txt">
                                <div class="t01">
                                  CANMAKE 睫毛復活液
                                </div>
                                <div class="p01">
                                  大名鼎鼎的睫毛威爾剛XD 這支真的蠻厲害的！根根分明 梳子狀的刷頭很好上手，不容易沾眼皮 但我覺得用背面那面刷比較好用，相對不容易結塊 用完一定要再上有顏色的睫毛膏不然會白白的唷
                                </div>
                              </div>
                            </a>
                          </li>
                        </ul>
                        <p class="r16">※此區為圖文編輯器<br></p>
                        <!--//文字編輯器內容-->
                      </div>
                    </div>
                  </div>
                </div>
                <div class="back-btn">
                  <a href="javascript:history.back(1)" class="bk-button">
                    < Back</a>
                </div>
              </div>
            </section>
          </div>
        </section>
      </div>
    </section>
  </main>
  <script type="text/javascript" src="SRC/js/quantity.js"></script>
  <!--== swiper js ==-->
  <script type="text/javascript" src="SRC/js/swiper.js"></script>
  <script type="text/javascript" src="SRC/js/swiper.min.js"></script>
  <!-- Initialize Swiper -->
  <script type="text/javascript" src="SRC/js/easyzoom.js"></script>
  <script type="text/javascript" src="SRC/js/pro_js.js"></script>
