<?php include('_head.php') ?>
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css" />

<div class="main_top"></div>
<div class="page_top">
  <div class="page-banner" style="background-image: url('images/demo/pg-banner03.jpg')">
    <div class="banner_ttbox wow fadeInDown">
      <h2>投資人專區</h2>
    </div>
  </div>
</div>
<main>
  <section class="contant-box wow fadeInUp">
    <!-- 左側選單 -->
    <?php include('_left_menu.php') ?>
    <!-- 左側選單 -->
    <div class="inner_right wow fadeInRight">
      <div class="content_right">
        <div class="content">
          <div class="articleTitle03">
            <div class="ch">股東會資訊</div>
            <!-- <div class="en">shareholder</div> -->
          </div>
          <div class="inves_shareholder">
            <ul class="tt01">
              <li class="t-year">年度</li>
              <li class="t-down">檔案下載</li>
            </ul>
            <?php for ($i = 0; $i < 10; $i++) {  ?>
              <ul class="info">
                <li class="t-year">110年</li>
                <li class="t-down">
                  <div class="item">
                    <a href="pdf/110-01.pdf" target="_blank">
                      <span>股東開會通知</span>
                      <div class="box-icon"><i class="fas fa-file-pdf"></i></div>
                    </a>
                  </div>
                </li>
                <li class="t-down">
                  <div class="item">
                    <a href="pdf/110-01.pdf" target="_blank">
                      <span>股東會議事手冊</span>
                      <div class="box-icon"><i class="fas fa-file-pdf"></i></div>
                    </a>
                  </div>
                </li>
                <li class="t-down">
                  <div class="item">
                    <a href="pdf/110-01.pdf" target="_blank">
                      <span>股東會議事錄</span>
                      <div class="box-icon"><i class="fas fa-file-pdf"></i></div>
                    </a>
                  </div>
                </li>
                <li class="t-down">
                  <div class="item">
                    <a href="pdf/110-01.pdf" target="_blank">
                      <span>股東會年報</span>
                      <div class="box-icon"><i class="fas fa-file-pdf"></i></div>
                    </a>
                  </div>
                </li>

              </ul>
            <?php } ?>
          </div>
        </div>

      </div>
    </div>

  </section>
  <!-- 右側內容 -->

</main>
<?php include('_foot.php') ?>

<script type="text/javascript" src="js/jquery-ui.min.js"></script>