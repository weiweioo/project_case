<?php include('_head.php') ?>
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css" />

<div class="main_top"></div>

<div class="page_top">
  <div class="page-banner" style="background-image: url('images/demo/pg-banner06.jpg')">
    <div class="banner_ttbox wow fadeInDown">
      <h2>聯絡我們</h2>
    </div>
  </div>
  <aside class="inp-menu investor">
    <div class="top-menu-box">
      <div class="box-4">
        <div class="mobile_list_menu">聯絡我們列表</div>
        <ul class="menu">
          <li>
            <a href="company-map.php" class="unit_link ">詳細地址</a>
          </li>
          <li><a href="contact.php" class="unit_link unit_active">聯絡表單</a></li>
          <li><a href="recruit.php" class="unit_link">人才招募</a></li>
        </ul>
        </ul>
      </div>
    </div>
  </aside>
</div>
<main>

  <section class="contant-box-4 ">
    <div class="contact-info">
      <ul>
        <li class="wow fadeInLeft">
          <div class="logo-pic">
            <img src="images/f-logo.png" alt="">
          </div>
        </li>
        <li class="wow fadeInUp">
          <p>歡迎您的來信，請填寫下方表單傳送郵件，我們將會盡快處理並回覆。</p>
        </li>
        <li class="info-box wow fadeInRight">
          <ul>
            <li>電話: 886-4-23593687</li>
            <li>傳真: 886-4-23591243</li>
            <li>信箱: service@transart.com.tw</li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="contact-bg wow fadeInUp">
      <div class="content">
        <form action="javascript:void(0)">
          <ul class="styled-input">
            <li class="">
              <label>公司名稱<span>*</span></label>
              <input type="text" required>
            </li>
            <li class="half">
              <label>聯絡姓名<span>*</span></label>
              <input type="text" required>
            </li>
            <li class="half">
              <label>聯絡信箱<span>*</span></label>
              <input type="email" required>
            </li>
            <li class="half">
              <label>聯絡電話<span>*</span></label>
              <input type="text" required>
            </li>
            <li class="half">
              <label>傳真號碼</label>
              <input type="text">
            </li>
            <li>
              <label>諮詢主旨<span>*</span></label>
              <input type="text" required>
            </li>
            <li>
              <div class="label" for="content">諮詢內容<span>*</span></div>
              <textarea id="content" required></textarea>
            </li>
            <li class="half">
              <label>驗證碼<span>*</span></label>
              <input type="text" required>
            </li>
            <li class="half text_center code">
              <img src="images/demo/verification_bemo.jpg" />
              <button type="submit" class="contact_btn">
                <a href="">確認送出</a>
              </button>
            </li>
          </ul>
        </form>
      </div>
    </div>
  </section>

</main>
<?php include('_foot.php') ?>

<script type="text/javascript" src="js/jquery-ui.min.js"></script>