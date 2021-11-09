<?php include('_head.php') ?>
<!-- <script type="text/javascript" src="SRC/js/quantity.js"></script> -->
<!--TAB-->
<link href="SRC/css/tab.css" rel="stylesheet" type="text/css" />


<!--wrapper-->
<div id="wrapper" class="main_bg">
  <?php include('_menu.php') ?>
  <main id="products" class="">
    <section class=" wow fadeIn">
      <!-- <div class="page-banner" style="background-image: url('SRC/images/banner03.jpg')"></div> -->
      <div class="content-all">
        <section class="product try-art-view">
          <div class="all-box">
            <section class="tav-box">
              <!--產品上半部資訊-->
              <div class="proview_topbox">
                <div class="left_img">
                  <img src="SRC/images/try01.jpg" alt="" />
                </div>
                <div class="right_info">
                  <div class="name">CLARINS 克蘭詩</div>
                  <ul class="info_list">
                    <li>
                      <div class="tit">申請條件：</div>
                      <div class="txt tag">
                        <span>點數到達50點</span>
                      </div>
                    </li>
                    <li>
                      <div class="tit">開始日期 - 結束日期：</div>
                      <div class="txt">2021.01.14 - 2021.01.23</div>
                    </li>
                    <li>
                      <div class="tit">報名名額 / 目前報名：</div>
                      <div class="txt"> <span>10</span> 人 / <span>20</span> 人</div>
                    </li>
                    <li>
                      <div class="tit">入選公告日期：</div>
                      <div class="txt">2021.01.14 </div>
                    </li>
                  </ul>
                  <div class="link-share">
                    <div class="tt01">
                      分享至：
                    </div>
                    <ul class="">
                      <li><a href=""><i class="fab fa-facebook fb-ic"></i></a></li>
                      <li><a href=""><i class="fab fa-line line-ic"></i></a></li>
                    </ul>
                  </div>
                  <div class="pdv-btn">
                    <div class="back-btn">
                      <a href="javascript:history.back(1)" class="bk-button">
                        回上一頁</a>
                    </div>
                    <div class="apply-box-btn">
                      <div class="apply">
                        <a data-fancybox data-src="#modal" href="javascript:;">我要報名</a>
                        <div class="apply-box" style="display: none;" id="modal">
                          <div class="login-box">
                            <div class="in-header">
                              <div class="logo text-center">
                                <img src="SRC/images/logo.png" alt="">
                              </div>
                            </div>
                            <div class="tab-all-box prd-view">
                              <ul class="tabs">
                                <li class="active"><a href="#memb-in01">會員登入</a></li>
                                <li><a href="#memb-vip-in01">會員註冊</a></li>
                              </ul>
                              <div class="login-box-con">
                                <div id="memb-in01">
                                  <div class="member">
                                    <div class="mbox prd-view">
                                      <div class="mbox01">
                                        <form action="javascript:void(0)">
                                          <ul class="styled-input prd-view">
                                            <li class="btn btn-fb-login">
                                              <a href=""> 使用 Facebook 登入</a>
                                            </li>
                                            <li class="btn btn-gogle-login"><a href="">使用 Google 登入</a></li>
                                            <li class="btn btn-ig-login"><a href="">使用 Instagram 登入</a></li>
                                            <li>
                                              <div class="or-line"><span>or</span></div>
                                            </li>
                                            <li>
                                              <label class="label" for="name">帳　　號*</label>
                                              <input type="email" id="name" required />
                                            </li>
                                            <li>
                                              <label class="label" for="phone">密　　碼*</label>
                                              <input type="text" id="phone" required />
                                            </li>
                                            <li class="join forget">
                                              <a href="password.php">忘記密碼?</a>
                                            </li>
                                            <li>
                                              <label class="label" for="code">驗證碼*</label>
                                              <input type="text" id="code" required />
                                            </li>
                                            <li class="code">
                                              <img src="SRC/images/verification_bemo.jpg" />
                                              <input type="submit" class="btn-style01" value="登入" onclick="location='products_view_check.php'" />
                                            </li>
                                          </ul>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div id="memb-vip-in01" style="display: none;">
                                  <div class="member">
                                    <div class="mbox prd-view">
                                      <div class="mbox01">
                                        <form action="javascript:void(0)">
                                          <ul class="styled-input prd-view">
                                            <li class="btn btn-fb-login">
                                              <a href="">使用 Facebook 註冊</a>
                                            </li>
                                            <li class="btn btn-gogle-login"><a href="">使用 Google 註冊</a></li>
                                            <li class="btn btn-ig-login"><a href="">使用 Instagram 註冊</a></li>
                                            <li>
                                              <div class="or-line"><span>or</span></div>
                                            </li>
                                            <li class="code register">
                                              <input type="submit" class="btn-style01" value="加入BABU會員" onclick="location='member_join.php'" />
                                            </li>
                                          </ul>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
              <!--//產品上半部資訊-->
              <!--產品下半部資訊-->
              <div class="proview_topbox02">
                <!--產品資訊-->
                <div class="abgne_tab">
                  <div class="sticky-top">
                    <ul class="tabs">
                      <li class="active"><a href="#tab1">活動內容</a></li>
                      <li><a href="#tab2">商品/體驗說明</a></li>
                      <li><a href="#tab3">參加規則</a></li>
                      <li><a href="#tab4">體驗分享</a></li>
                      <li class="apply-btn-tab"><a data-fancybox data-src="#modal02" href="javascript:;">我要報名</a></li>
                      <div class="apply-box" style="display: none;" id="modal02">
                        <div class="login-box">
                          <div class="in-header">
                            <div class="logo text-center">
                              <img src="SRC/images/logo.png" alt="">
                            </div>
                          </div>
                          <div class="tab-all-box prd-view">
                            <ul class="tabs">
                              <li class="active"><a href="#memb-in02">會員登入</a></li>
                              <li><a href="#memb-vip-in02">會員註冊</a></li>
                            </ul>
                            <div class="login-box-con">
                              <div id="memb-in02">
                                <div class="member">
                                  <div class="mbox prd-view">
                                    <div class="mbox01">
                                      <form action="javascript:void(0)">
                                        <ul class="styled-input prd-view">
                                          <li class="btn btn-fb-login">
                                            <a href=""> 使用 Facebook 登入</a>
                                          </li>
                                          <li class="btn btn-gogle-login"><a href="">使用 Google 登入</a></li>
                                          <li class="btn btn-ig-login"><a href="">使用 Instagram 登入</a></li>
                                          <li>
                                            <div class="or-line"><span>or</span></div>
                                          </li>
                                          <li>
                                            <label class="label" for="name">帳　　號*</label>
                                            <input type="email" id="name" required />
                                          </li>
                                          <li>
                                            <label class="label" for="phone">密　　碼*</label>
                                            <input type="text" id="phone" required />
                                          </li>
                                          <li class="join forget">
                                            <a href="password.php">忘記密碼?</a>
                                          </li>
                                          <li>
                                            <label class="label" for="code">驗證碼*</label>
                                            <input type="text" id="code" required />
                                          </li>
                                          <li class="code">
                                            <img src="SRC/images/verification_bemo.jpg" />
                                            <input type="submit" class="btn-style01" value="登入" onclick="location='products_view_check.php'" />
                                          </li>
                                        </ul>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div id="memb-vip-in02" style="display: none;">
                                <div class="member">
                                  <div class="mbox prd-view">
                                    <div class="mbox01">
                                      <form action="javascript:void(0)">
                                        <ul class="styled-input prd-view">
                                          <li class="btn btn-fb-login">
                                            <a href="">使用 Facebook 註冊</a>
                                          </li>
                                          <li class="btn btn-gogle-login"><a href="">使用 Google 註冊</a></li>
                                          <li class="btn btn-ig-login"><a href="">使用 Instagram 註冊</a></li>
                                          <li>
                                            <div class="or-line"><span>or</span></div>
                                          </li>
                                          <li class="code register">
                                            <input type="submit" class="btn-style01" value="加入BABU會員" onclick="location='member_join.php'" />
                                          </li>
                                        </ul>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
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
                          商品體驗說明
                        </div>
                        <ul class="tab-list">
                          <li>
                            <div class="tit">申請條件：</div>
                            <div class="txt">
                              <span>點數到達50點</span>
                            </div>
                          </li>
                          <li>
                            <div class="tit">開始日期 - 結束日期：</div>
                            <div class="txt">2021.01.14 - 2021.01.23</div>
                          </li>
                          <li>
                            <div class="tit">報名名額 / 目前報名：</div>
                            <div class="txt"> <span>10</span> 人 / <span>20</span> 人</div>
                          </li>
                          <li>
                            <div class="tit">入選公告日期：</div>
                            <div class="txt">2021.01.14 </div>
                          </li>
                        </ul>
                        <p class="r16">※此區為圖文編輯器<br></p>
                        <!--//文字編輯器內容-->
                      </div>
                    </div>
                    <div id="tab3" class="tab_content">
                      <div class="user_editor line-height">
                        <!--文字編輯器內容-->
                        <div class="tab-tit">
                          參加規則
                        </div>
                        <ul class="tab-list">
                          <li>
                            <div class="tit">參加領域資格：</div>
                            <div class="txt tag">
                              <span>點數到達50點</span>
                            </div>
                          </li>
                          <li>
                            <div class="tit">開始日期 - 結束日期：</div>
                            <div class="txt">2021.01.14 - 2021.01.23</div>
                          </li>
                          <li>
                            <div class="tit">報名名額 / 報名上限：</div>
                            <div class="txt"> <span>10</span> 人 / <span>20</span> 人</div>
                          </li>
                          <li>
                            <div class="tit">目前報名：</div>
                            <div class="txt"> <span>6</span> 人</div>
                          </li>
                          <li>
                            <div class="tit">入選公告日期：</div>
                            <div class="txt">2021.01.14 </div>
                          </li>
                        </ul>
                        <p class="r16">※此區為圖文編輯器<br></p>
                        <!--//文字編輯器內容-->
                      </div>
                    </div>
                    <div id="tab4" class="tab_content">
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
                <!--產品資訊-->

              </div>
              <!--產品下半部資訊-->
            </section>
          </div>
        </section>
      </div>
    </section>
  </main>

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