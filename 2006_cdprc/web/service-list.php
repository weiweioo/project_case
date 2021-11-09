<?php include('_head.php') ?>
<link href="SRC/css/inner-page.css?<?= rand(0, 999) ?>20201012" rel="stylesheet" type="text/css">

<div class="page-banner">
  <img src="SRC/images/inp_banner04.jpg">
</div>
<main class="in-page">
  <div class="content">
    <div class="page-top wow fadeIn">
      <div class="inp-tt01">
        <a href="service.php">
          <div class="ch">專業服務</div>
          <div class="en">SERVICE</div>
        </a>
      </div>
      <div class="tt-line"></div>
      <!--classLink-->
      <section class="classBox ">
        <ul class="classLink">
          <li><a class="hvr-underline-from-center" href="core-list.php">核心技術</a></li>
          <li><a class=" current" href="service-list-year.php">課程營隊</a></li>
          <li><a class="hvr-underline-from-center" href="service02-list-year.php">學術活動</a></li>
        </ul>
      </section>
      <!--classLink end-->
    </div>
    <section class="page-bot wow fadeIn">
      <!--service-->
      <div class="service-list">
        <div class="inpp-tt01">
          課程營隊
        </div>
        <div class="section-top">
          <div class="search">
            <form id="search">
              <input type="search" placeholder="Search">
            </form>
          </div>
        </div>
        <ul>
          <?php for ($i = 0; $i < 10; $i++) {  ?>
            <li class="hvr-shadow">
              <a class="srv-box" href="service-view.php">
                <div class="service-pic">
                  <img src="SRC/images/ser-view-01.jpg" alt="">
                </div>
                <div class="service-info">
                  <div class="top">
                    <div class="srv-type">
                      災害管理組
                    </div>
                    <div class="srv-date">
                      109年度
                    </div>
                  </div>
                  <div class="srv-tt02">
                    109年第一期防災士培訓
                  </div>
                </div>
              </a>
            </li>
          <?php } ?>
        </ul>

      </div>
      <!--//service-->
      <div class="page" style="margin-top: 30px;">
        <a href="javascript: void(0)">&lt;</a>
        <a href="#?page=1" class="current">1</a>
        <a href="#?page=2">2</a>
        <a href="#?page=3">3</a>
        <a href="#?page=4">4</a>
        <a href="#?page=5">5</a>
        <a href="#?page=6">6</a>
        <a href="javascript: void(0)">&gt;</a>
      </div>
  </div>
  </section>
</main>
<?php include('_foot.php') ?>