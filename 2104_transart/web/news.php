<?php include('_head.php') ?>
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css" />

<div class="main_top"></div>
<div class="page_top">
  <div class="page-banner" style="background-image: url('images/demo/pg-banner.jpg')">
    <div class="banner_ttbox wow fadeInDown">
      <h2>訊息中心</h2>
    </div>
  </div>
  <aside class="inp-menu">
    <div class="top-menu-box">
      <div class="box-4">
        <div class="mobile_list_menu">訊息中心列表</div>
        <ul class="menu">
          <li>
            <a href="news.php" class="unit_link unit_active">集團營運</a>
          </li>
          <li><a href="news.php" class="unit_link">媒體報導</a></li>
          <li><a href="news.php" class="unit_link">活動展覽</a></li>
        </ul>
      </div>
    </div>
  </aside>
</div>

<main>
  <section class="contant-box wow fadeInUp">
    <div class="content">
      <div class="articleTitle03">
        <div class="ch">集團營運</div>
        <div class="en">Group operations</div>
      </div>
      <div class="news-list">
        <ul>
          <?php for ($i = 0; $i < 4; $i++) {  ?>
            <li>
              <a href="news_view.php">
                <div class="news-box">
                  <div class="news-pic">
                    <img src="images/demo/new-list-pic.jpg" alt="">
                  </div>

                  <div class="news-txt">
                    <div class="date">
                      2021/10/05
                    </div>
                    <div class="tt01">
                      政伸企業將參與美利達盃&單車嘉年華活動政伸企業將參與美利達盃&單車嘉年華活動政伸企業將參與美利達盃&單車嘉年華活動
                    </div>
                    <div class="tt02">
                      設攤期間之商品所得將全數捐贈兒童福利聯盟！政伸企業邀您一起來做公益！設攤期間之商品所得將全數捐贈兒童福利聯盟！政伸企業邀您一起來做公益！設攤期間之商品所得將全數捐贈兒童福利聯盟！政伸企業邀您一起來做公益！設攤期間之商品所得將全數捐贈兒童福利聯盟！政伸企業邀您一起來做公益！
                    </div>
                    <div class="re-mo">
                      read more >
                    </div>
                  </div>

                </div>
              </a>
            </li>
          <?php } ?>
        </ul>
      </div>
      <div class="inp_pagination">
        <nav aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
              </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">2</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>

  </section>
  <!-- 右側內容 -->

</main>
<?php include('_foot.php') ?>

<script type="text/javascript" src="js/jquery-ui.min.js"></script>