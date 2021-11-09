<?php include('_head.php') ?>

<script type="text/javascript" src="SRC/js/jquery.twzipcode.min.js"></script>
<script>
  $(function() {
    // 地址選擇
    $('#twzipcode').twzipcode();
    $.datepicker.setDefaults($.datepicker.regional["zh-TW"]);

  });
</script>
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
  <!-- <div class="page-banner" style="background-image: url('SRC/images/banner03.jpg')"></div> -->
  <main class="content-all">
    <section class="member-login wow fadeIn">
      <div class="mb-login">
        <div class="abgne_tab">
          <ul class="tabs">
            <li><a href="#tab1">會員登入</a></li>
            <li><a href="#tab2">會員註冊</a></li>
          </ul>
          <div class="tab_container">
            <div id="tab1" class="tab_content tb1">
              <div class="member">
                <div class="mbox">
                  <div class="mbox01">
                    <form action="javascript:void(0)">
                      <ul class="styled-input">
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
                          <label for="code">驗證碼*</label>
                          <input type="text" id="code" required />
                        </li>
                        <li class="code">
                          <img src="SRC/images/verification_bemo.jpg" />
                          <input type="submit" class="btn-style01" value="登入" onclick="location='member.php'" />
                        </li>
                      </ul>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div id="tab2" class="tab_content tb2">
              <div class="member02">
                <div class="mbox">
                  <div class="mbox01">
                    <form action="javascript:void(0)">
                      <ul class="styled-input">
                        <li>
                          <label>帳號*</label>
                          <input type="email" required />
                        </li>
                        <li class="txt">E-mail為您的登入帳號</li>
                        <li>
                          <label>密碼*</label>
                          <input type="password" required />
                        </li>
                        <li class="txt">請輸入6位數以上英數混合字元，密碼大小寫有差別</li>
                        <li>
                          <label>確認密碼*</label>
                          <input type="password" required />
                        </li>
                        <li class="txt">請再輸入一次密碼做為確認</li>
                        <li>
                          <label>姓名*</label>
                          <input type="text" required />
                        </li>
                        <li>
                          <label>性別*</label>
                          <div class="box-radio">
                            <input type="radio" name="radio">男
                            <input type="radio" name="radio">女
                          </div>
                        </li>
                        <li>
                          <label for="birthday">生日*</label>
                          <input type="text" id="datepicker" required />
                        </li>
                        <li>
                          <label>手機</label>
                          <input type="tel" />
                        </li>

                        <li>
                          <label>地址</label>
                          <div class="mem_add" id="twzipcode">
                            <div data-role="county" data-style="mem_add_inpt" class="mem_inpt" data-value="110"></div>
                            <div data-role="district" data-style="mem_add_inpt" class="mem_inpt" data-value="臺北市"></div>
                            <div data-role="zipcode" data-style="mem_add_inpt" class="mem_inpt" data-value="信義區"></div>
                          </div>
                        </li>
                        <li class="add">
                          <input type="text02" id="add" />
                        </li>
                        <li class="add">
                          <div class="check_list_box">
                            <div class="check_list">
                              <input type="checkbox" id="c3" name="cc" />
                              <label for="c3"><span></span>
                                <h5>我已詳細閱讀<a href="privacy.php" target="_blank">會員條款</a></h5>
                              </label>
                            </div>
                          </div>
                        </li>
                        <li>
                          <label for="code">驗證碼*</label>
                          <input type="text" id="code" required />
                        </li>
                        <li class="code">
                          <img src="SRC/images/verification_bemo.jpg" />
                          <input type="submit" class="btn-style01" value="確認送出" onclick="location='check.php'" />
                        </li>
                      </ul>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--tab_container end-->
        </div>
      </div>
    </section>
  </main>