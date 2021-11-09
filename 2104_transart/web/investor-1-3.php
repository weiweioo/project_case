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
        <div class="mobile_list_menu">財務業務資訊列表</div>
        <ul class="menu">
          <li><a href="investor.php" class="unit_link ">財務報告</a></li>
          <li><a href="investor-1-2.php" class="unit_link ">重大訊息</a></li>
          <li><a href="investor-1-3.php" class="unit_link unit_active">法人說明會</a></li>
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
          <div class="ch">法人說明會</div>
          <!-- <div class="en">Legal person briefing</div> -->
        </div>
        <div class="inves_Legal">
          <ul class="tt01">
            <li class="t-01 br-b">日期</li>
            <li class="t-01">時間</li>
            <li class="t-03">內容</li>
            <li class="t-02 br-b">下載</li>
            <li class="t-01">備註</li>
          </ul>
          <?php for ($i = 0; $i < 9; $i++) {  ?>
            <ul class="info">
              <li class="t-01 br-b" data-label="日期"><span>2021.10.10</span></li>
              <li class="t-01" data-label="時間"><span>14:30</span></li>
              <li class="t-03" data-label="內容"><span>本公司受邀參加宏遠證券舉辦之法人說明會</span></li>
              <li class="t-02 br-b" data-label="下載">
                <span>
                  <a href="pdf/110-01.pdf" target="_blank">
                    法人說明會簡報
                    <div class="box-icon"><i class="fas fa-file-pdf"></i></div>
                  </a>
                </span>
              </li>
              <li class="t-01" data-label="備註"><span></span></li>
              <li class="t-bot">
                <div class="tt02">地點：台北市信義路四段236號7樓(宏遠證券會議室)</div>
              </li>
            </ul>
          <?php } ?>
          <ul class="info yt">
            <li class="t-01 br-b" data-label="日期"><span>2021.10.10</span></li>
            <li class="t-01" data-label="時間"><span>14:30</span></li>
            <li class="t-03" data-label="內容">
              <span>
                <div class="youtube">
                  <iframe width="100%" height="150" src="https://www.youtube.com/embed/QKEjrzbAi8U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
              </span>
            </li>
            <li class="t-02 br-b" data-label="下載">
              <a href="pdf/110-01.pdf" target="_blank">
                <span> 法人說明會簡報
                  <div class="box-icon"><i class="fas fa-file-pdf"></i></div>
                </span>
              </a>
            </li>
            <li class="t-01" data-label="備註"><span></span></li>
            <li class="t-bot">
              <div class="tt02">
                地點：台北市信義路四段236號7樓(宏遠證券會議室)
              </div>
            </li>
          </ul>
        </div>

      </div>
    </div>

  </section>
  <!-- 右側內容 -->

</main>
<?php include('_foot.php') ?>

<script type="text/javascript" src="js/jquery-ui.min.js"></script>