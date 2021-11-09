<?php include('_head.php') ?>
<script type="text/javascript" src="SRC/js/jquery.twzipcode.min.js"></script>
<script>
  $(function() {

    // date picker
    $("#datepicker").datepicker({
      changeMonth: true,
      changeYear: true,
      yearRange: "-100:+0",
      maxDate: 0,
      onSelect: function() {
        handleLabel($(this));
      }
    });
    // 地址選擇
    $('#twzipcode').twzipcode();
    $.datepicker.setDefaults($.datepicker.regional["zh-TW"]);

  });
</script>
<!--wrapper-->
<div id="wrapper" class="main_bg">
  <?php include('_menu.php') ?>
  <main class="member-join">
    <section class="main-all wow fadeIn">
      <div class="box-1">
        <div class="title01 text_center">
          <h2>加入會員</h2>
        </div>
      </div>
      <div class="box-1">
        <!--加入會員-->
        <div class="member02">
          <div class="mbox">
            <div class="mbox01">
              <form action="javascript:void(0)">
                <ul class="styled-input">
                  <li>
                    <label>帳號*</label>
                    <input type="email" required />
                  </li>
                  <li class="txt">E-mail為您的登入帳號，註冊後即無法修改</li>
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
                  <li class="txt">
                    <input type="radio" name="radio">先生　
                    <input type="radio" name="radio">小姐
                  </li>
                  <li>
                    <label class="label" for="birthday">生日*</label>
                    <input type="text" id="datepicker" required />
                  </li>
                  <li>
                    <label>手機*</label>
                    <input type="tel" required />
                  </li>

                  <li>
                    <label>地址*</label>
                    <div class="mem_add" id="twzipcode">
                      <div data-role="county" data-style="mem_add_inpt" class="mem_inpt" data-value="110"></div>
                      <div data-role="district" data-style="mem_add_inpt" class="mem_inpt" data-value="臺北市"></div>
                      <div data-role="zipcode" data-style="mem_add_inpt" class="mem_inpt" data-value="信義區"></div>
                    </div>
                  </li>
                  <li class="add">
                    <input type="text02" id="add" required />
                  </li>
                  <li class="add">
                    <div class="check_list_box">
                      <div class="check_list">
                        <input type="checkbox" id="c3" name="cc" />
                        <label class="read" for="c3"><span></span>
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
                    <input type="submit" class="btn-style01" value="登入" onclick="location='member.php'" />
                  </li>
                </ul>
              </form>
            </div>
          </div>
        </div>
        <!--//加入會員-->
      </div>
    </section>
  </main>