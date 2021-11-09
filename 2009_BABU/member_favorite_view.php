<?php include('_head.php') ?>
<link rel="stylesheet" type="text/css" href="SRC/css/slick.css" />
<link rel="stylesheet" type="text/css" href="SRC/css/slick-theme.css" />
<!--wrapper-->
<div id="wrapper">
  <?php include('_menu02.php') ?>
  <main class="member-set ">
    <section class="main-all wow fadeIn">
      <div class="content-all">
        <div class="big-left">
          <!--bread-->
          <div class="breadbox">
            <div class="bread-crumbs">
              <li><a href="index.php">首頁</a></li>
              <li><a href="member_favorite.php">我的書籤</a></li>
              <li><a href="member_favorite_view.php">編輯書籤</a></li>
            </div>
          </div>
          <!--bread end-->
          <!--left-->
          <section class="left">
            <nav class="sidebar-nav02">
              <a href="member.php">
                <h2>會員系統</h2>
              </a>
              <ul class="metismenu" id="menu1">
                <li><a href="member_account.php">個人資料管理與修改</a></li>
                <li><a href="member_massage.php">會員訊息</a></li>
                <li><a href="member_order.php">兌換管理</a></li>
                <li><a href="member_point.php">我的點數</a></li>
                <li><a href="member_products.php">商品體驗</a></li>
                <li><a href="member_article.php">文章管理</a></li>
                <li class="active"><a href="member_favorite.php">我的書籤</a></li>
              </ul>
            </nav>
          </section>
          <!--//left-->
        </div>
        <section class="right">
          <div class="mv_view">
            <ul>
              <li class="art-list">
                <div class="art-pic">
                  <img src="SRC/images/art01.jpg">
                </div>
                <div class="art-left">
                  <div class="sort">
                    <select name="select2" id="select2" class="select_sort">
                      <option selected="selected">未分類</option>
                      <option>美妝新訊</option>
                      <option>身體保養</option>
                      <option>健身器材</option>
                    </select>
                  </div>
                  <div class="art-p">
                    <a class="art-bot" href="content_view.php">
                      <div class="title">琉璃水光特色唇釉琉璃水光特色唇釉琉璃水光特色唇釉琉璃水光特色唇釉琉璃水光特色唇釉琉璃水光特色唇釉琉璃水光特色唇釉琉璃水光特色唇釉琉璃水光特色唇釉琉璃水光特色唇釉琉璃水光特色唇釉琉璃水光特色唇釉琉璃水光特色唇釉琉璃水光特色唇釉琉璃水光特色唇釉琉璃水光特色唇釉琉璃水光特色唇釉琉璃水光特色唇釉
                        琉璃水光特色唇釉琉璃水光特色唇釉琉璃水光特色唇釉琉璃水光特色唇釉琉璃水光特色唇釉琉璃水光特色唇釉琉璃水光特色唇釉琉璃水光特色唇釉琉璃水光特色唇釉琉璃水光特色唇釉琉璃水光特色唇釉琉璃水光特色唇釉琉璃水光特色唇釉琉璃水光特色唇釉琉璃水光特色唇釉琉璃水光特色唇釉琉璃水光特色唇釉琉璃水光特色唇釉
                      </div>
                    </a>
                  </div>
                </div>
              </li>
              <?php for ($i = 0; $i < 6; $i++) {  ?>
                <li class="art-list">
                  <div class="art-pic">
                    <img src="SRC/images/art01.jpg">
                  </div>
                  <div class="art-left">
                    <div class="sort">
                      <select name="select2" id="select2" class="select_sort">
                        <option selected="selected">未分類</option>
                        <option>美妝新訊</option>
                        <option>身體保養</option>
                        <option>健身器材</option>
                      </select>
                    </div>
                    <div class="art-p">
                      <a class="art-bot" href="content_view.php">
                        <div class="title">琉璃水光特色唇釉琉璃</div>
                      </a>
                    </div>
                  </div>
                </li>
              <?php } ?>
            </ul>
          </div>
          <div class="page" style="margin: 10px 0 0px 0;">
            <a href="javascript: void(0)">&lt;</a>
            <a href="#?page=1" class="current">1</a>
            <a href="#?page=2">2</a>
            <a href="#?page=3">3</a>
            <a href="#?page=4">4</a>
            <a href="#?page=5">5</a>
            <a href="#?page=6">6</a>
            <a href="javascript: void(0)">&gt;</a>
          </div>
        </section>
        <!-- //中間文章列表 -->
        <!-- 廣告列表 -->
        <?php include('_ads_list.php') ?>
        <!-- 廣告列表 -->
      </div>
    </section>
  </main>

  <script type="text/javascript" src="SRC/js/effect01.js"></script>