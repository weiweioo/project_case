<?php include('_head.php') ?>
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css" />

<div class="main_top"></div>
<div class="page_top">
  <div class="page-banner" style="background-image: url('images/demo/pg-banner03.jpg')">
    <div class="banner_ttbox wow fadeInDown">
      <h2>投資人專區</h2>
    </div>
  </div>
  <aside class="inp-menu investor">
    <div class="top-menu-box">
      <div class="box-4">
        <div class="mobile_list_menu">企業社會責任列表</div>
        <ul class="menu">
          <li><a href="investor-csr01.php" class="unit_link ">企業社會責任之使命及願景</a></li>
          <li><a href="investor-csr01.php" class="unit_link">環境政策與社會責任</a></li>
          <li><a href="investor-csr02.php" class="unit_link unit_active">履行企業社會責任情形</a></li>
        </ul>
      </div>
    </div>
  </aside>
</div>
<main>
  <section class="contant-box-2 ">
    <!-- 左側選單 -->
    <?php include('_left_menu.php') ?>
    <!-- 左側選單 -->
    <div class="inner_right wow fadeInRight">
      <div class="content_right">
        <div class="articleTitle03">
          <div class="ch">履行企業社會責任情形</div>
          <!-- <div class="en">Legal person briefing</div> -->
        </div>
        <div class="inves_csr02_ex user_editor line-height">
          <ul class="tt01">
            <li class="t-01">主題</li>
            <li class="t-02">說明內容</li>
          </ul>
          <ul class="info">
            <li class="t-01" data-label="主題"><span>Adobe Illustrator</span></li>
            <li class="t-02" data-label="內容">
              <span>
                <ul class="info-box">
                  <li>TA電子色票的使用方法(Adobe Illustrator)：</li>
                  <li>1.適用於Illustrator CS3以上版本。</li>
                  <li>2.至系統打開軟體資料夾，選取預設資料夾內色票資料庫，滑鼠點擊左鏈兩下。</li>
                  <li>3.將下載的TAColor-1.rar複製至色票檔案夾內。</li>
                  <li>4.啟動軟體，執行功能表列中的【視窗→色票資料庫】選擇TA2012Color，即可使用TA色票</li>
                </ul>
              </span>
            </li>
          </ul>
        </div>
        <div class="inves_csr02-box-all">
          <ul class="tt01">
            <li class="t-01">項目</li>
            <li class="t-02">大小</li>
            <li class="t-02">下載</li>
          </ul>
          <?php for ($i = 0; $i < 10; $i++) {  ?>
            <ul class="info">
              <li class="t-01" data-label="項目名稱"><span>履行企業社會責任情形</span></li>
              <li class="t-02" data-label="檔案大小">164KB</li>
              <li class="t-02 down" data-label="下載檔案">
                <a href="pdf/110-01.pdf" target="_blank">
                  <div class="box-icon"><i class="fas fa-file-pdf"></i></div>
                </a>
              </li>
            </ul>
          <?php } ?>
        </div>
      </div>
    </div>


  </section>
  <!-- 右側內容 -->

</main>
<?php include('_foot.php') ?>

<script type="text/javascript" src="js/jquery-ui.min.js"></script>