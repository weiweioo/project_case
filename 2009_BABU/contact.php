<?php include('_head.php') ?>
<!--wrapper-->
<div id="wrapper" class="main_bg">
  <?php include('_menu.php') ?>
  <main>
    <div class="page-banner" style="background-image: url('SRC/images/banner03.jpg')"></div>
    <div class="content-all">
      <section class="contact">
        <div class="inp-tt01">
          <div class="ch">
            聯絡我們
          </div>
          <div class="en">
            contact
          </div>
        </div>
        <!--contact-->
        <div class="contact-main">
          <h2>誠摯的歡迎各界對本公司的意見，不管是業務指教、合作提議、或者是抱怨申訴，<br>填好以下表單即可將內容傳至本公司，並會有專人與您聯絡，感謝支持。
          </h2>
          <form action="javascript:void(0)">
            <ul class="styled-input">
              <li>
                <label class="label">帳號</label>
                <input type="email" readonly="readonly" value="service@jddt.tw" class="onlyread">
              </li>
              <li>
                <label class="label" for="quation">問題主旨<span>*</span></label>
                <input type="text" id="quation" required />
              </li>
              <li>
                <label class="label" for="content">您的意見<span>*</span></label>
                <textarea id="content"></textarea>
              </li>
              <li class="c-code">
                <label class="label c" for="code">驗證碼*</label>
                <input type="text" id="code" required />
                <div>
                  <img src="SRC/images/verification_bemo.jpg" />
                </div>
              </li>
              <li class="text_center c-btn">
                <input type="reset" class="btn-style05" value="重新填寫" />
                <input type="submit" class="btn-style05" value="確認送出" />
              </li>
            </ul>
          </form>
        </div>
        <!--//contact-->
      </section>
    </div>
  </main>