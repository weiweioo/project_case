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
        <div class="mobile_list_menu">公司治理資訊列表</div>
        <ul class="menu">
          <li><a href="investor-manage.php" class="unit_link ">公司組織</a></li>
          <li><a href="investor-manage.php" class="unit_link ">董事會</a></li>
          <li><a href="investor-manage.php" class="unit_link">委員會</a></li>
          <li><a href="investor-regulation.php" class="unit_link unit_active">組織規章辦法</a></li>
          <li><a href="investor-regulation.php" class="unit_link">內部稽核</a></li>
          <li><a href="investor-regulation.php" class="unit_link">其他</a></li>
        </ul>
      </div>
    </div>
  </aside>
</div>
<main>
  <section class="contant-box-2">
    <!-- 左側選單 -->
    <?php include('_left_menu.php') ?>
    <!-- 左側選單 -->
    <div class="inner_right wow fadeInRight">
      <div class="content_right">
        <div class="articleTitle03">
          <div class="ch">組織規章辦法</div>
          <!-- <div class="en">Legal person briefing</div> -->
        </div>
        <div class="inves_regulation">
          <div class="explation_editor user_editor line-height">
            <div class="tt01">介紹</div>
          </div>
          <ul class="tt01">
            <li class="t-01">項目</li>
            <li class="t-02">大小</li>
            <li class="t-02">下載</li>
          </ul>
          <?php for ($i = 0; $i < 10; $i++) {  ?>
            <ul class="info">
              <li class="t-01" data-label="項目名稱"><span>公司章程</span></li>
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