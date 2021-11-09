<?php include('_head.php') ?>
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css" />

<div class="main_top"></div>
<div class="page_top">
  <div class="page-banner" style="background-image: url('images/demo/pg-banner05.jpg')">
    <div class="banner_ttbox wow fadeInDown">
      <h2>色票專區</h2>
    </div>
  </div>
</div>
<main>
  <section class="contant-box-3 wow fadeInUp">
    <div class="content-3">
      <div class="articleTitle03">
        <div class="ch">色票下載</div>
        <!-- <div class="en">Legal person briefing</div> -->
      </div>
      <div class="color_ex user_editor line-height">
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
      <div class="color-box-all">
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

  </section>
  <!-- 右側內容 -->

</main>
<?php include('_foot.php') ?>

<script type="text/javascript" src="js/jquery-ui.min.js"></script>