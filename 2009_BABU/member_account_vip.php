<?php include('_head.php') ?>
<script type="text/javascript" src="SRC/js/jquery.twzipcode.min.js"></script>
<script>
  $(function() {
    // 地址選擇
    $('#twzipcode').twzipcode();
    $.datepicker.setDefaults($.datepicker.regional["zh-TW"]);

  });
</script>
<!-- wrapper-->
<div id="wrapper" class="main_bg">
  <?php include('_menu02.php') ?>
  <main class="member-set">
    <section class="main-all wow fadeIn">
      <div class="content-all">
        <div class="big-left">
          <!--bread-->
          <div class="breadbox">
            <div class="bread-crumbs">
              <li><a href="index.php">首頁</a></li>
              <li><a href="member.php">會員系統</a></li>
            </div>
          </div>
          <!--bread end-->
          <!--left-->
          <section class="left">
            <nav class="sidebar-nav02">
              <a href="member.php">
                <h2>會員系統</h2>
              </a>
              <ul class="metismenu" id="menu1">
                <li class="active"><a href="member_account.php">個人資料管理與修改</a></li>
                <li><a href="member_massage.php">會員訊息</a></li>
                <li><a href="member_order.php">兌換管理</a></li>
                <li><a href="member_point.php">我的點數</a></li>
                <li><a href="member_products.php">商品體驗</a></li>
                <li><a href="member_article.php">文章管理</a></li>
                <li><a href="member_favorite.php">我的書籤</a></li>
              </ul>
            </nav>
          </section>
          <!--//left-->
        </div>
        <section class="right">
          <div class="account_box">
            <div class="member03">
              <form action="javascript:void(0)">
                <ul class="styled-input">
                  <li>
                    <label>會員等級</label>
                    <input type="text" readonly="readonly" value="VIP會員" class="onlyread">
                  </li>
                  <li class="txt">
                    <a class="mb-text" data-fancybox data-src="#mber-icon" href="javascript:;"><span>已升級為VIP會員</span><i class="vip-mber fas fa-crown"></i></a>
                    <div style="display: none;" id="mber-icon">
                      <form class="mber-icon-con">
                        <div class="tit">
                          親愛的會員您好，升級為VIP會員 <br> 
                          請上傳含出生年月的證件圖檔並填寫身分證字號
                        </div>
                        <div class="file-box">
                          <label class="file-tit">請上傳圖檔</label>
                          <img id="preview-img" src="SRC/images/Not-uploaded.jpg" alt="">
                          <input type="file" name="progressbarTW_img" id="file-img" value="" class="onlyread" accept="image/gif, image/jpeg, image/png">
                        </div>
                        <div class="file-txt">※限jpg，尺寸200 x 200像素</div>
                        <ul class="styled-input">
                          <li>
                            <label>身分證字號*</label>
                            <input type="text" id="datepicker" readonly="readonly" value="L123456789" >
                          </li>
                        </ul>
                        <input type="submit" class="file-btn btn-style01" onclick="location='javascript: void(0)'" value="確認送出">
                      </form>
                    </div>
                  </li>
                  <li>
                    <label>帳號*</label>
                    <input type="email" readonly="readonly" value="service@jddt.tw" class="onlyread">
                  </li>
                  <li class="txt">E-mail為您的登入帳號</li>
                  <li>
                    <label>密碼*</label>
                    <input type="password" value="123456" required />
                  </li>
                  <li class="txt">請輸入6位數以上英數混合字元，密碼大小寫有差別</li>
                  <li>
                    <label>確認密碼*</label>
                    <input type="password" value="123456" required />
                  </li>
                  <li class="txt">請再輸入一次密碼做為確認</li>
                  <li>
                    <label>姓名*</label>
                    <input type="text" readonly="readonly" value="林小花" class="onlyread">
                  </li>
                  <li>
                    <label>性別</label>
                    <input type="text" readonly="readonly" value="女" class="onlyread">
                  </li>
                  <li>
                    <label>生日*</label>
                    <input type="text" id="datepicker" readonly="readonly" value="1988/09/30" class="onlyread">
                  </li>
                  <li>
                    <label>聯絡電話</label>
                    <input type="tel" />
                  </li>
                  <li class="txt">更改以3次為限，第4次需通知管理人員修改</li>
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
                  <li class="txt">更改以3次為限，第4次需通知管理人員修改</li>
                  <li>
                    <label>驗證碼*</label>
                    <div class="code">
                      <input type="text" id="code" required />
                      <img src="SRC/images/verification_bemo.jpg" />
                    </div>
                  </li>
                  <li class="form-btn">
                    <input type="reset" class="btn-style02" value="重新填寫" onclick="location=''" />
                    <input type="submit" class="btn-style01" value="確認送出" onclick="location=''" />
                  </li>
                </ul>
              </form>
            </div>
          </div>
        </section>
        <!-- 廣告列表 -->
        <?php include('_ads_list.php') ?>
        <!-- 廣告列表 -->
      </div>
    </section>
  </main>

  <script>
    $('#file-img').change(function() {
      readURL(this);
    });

    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $("#preview-img").attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
      }
    }
  </script>