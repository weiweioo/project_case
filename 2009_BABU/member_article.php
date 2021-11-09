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
              <li><a href="member_article.php">文章管理</a></li>
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
                <li class="active"><a href="member_article.php">文章管理</a></li>
                <li><a href="member_favorite.php">我的書籤</a></li>
              </ul>
            </nav>
          </section>
          <!--//left-->
        </div>
        <!-- 中間文章列表 -->
        <section class="right mba">
          <div class="right-top">
            <input type="submit" style="margin: 0 10px 0 0;" class="btn-style01" value="新增文章" onclick="location='member_article_add.php'" />
          </div>
          <div class="mb_article">
            <ul>
              <li class="art-list">
                <div class="al-top">
                  草稿
                </div>
                <!-- 文章標題 -->
                <a class="art-left" href="content_view.php">
                  <div class="al al-title">琉璃水光特色唇釉</div>
                  <div class="al al-sort">分類：<span>美妝新訊</span></div>
                  <div class="al al-date">發文日期：<span>2020.12.31</span></div>
                </a>
                <!-- //文章標題 -->
                <ul class="art-right">
                  <li>
                    <a class="edit" href="member_article_edit.php" title="修改">
                      <i class="at-ic fas fa-edit"></i>修改
                    </a>
                  </li>
                  <li>
                    <a href="javascript: void(0)" title="刪除">
                      <i class="at-ic fas fa-times"></i>刪除
                    </a>
                  </li>
                </ul>
              </li>
              <?php for ($i = 0; $i < 10; $i++) {  ?>
                <li class="art-list">
                  <!-- 文章標題 -->
                  <a class="art-left" href="content_view.php">
                    <div class="al al-title">琉璃水光特色唇釉</div>
                    <div class="al al-sort">分類：<span>美妝新訊</span></div>
                    <div class="al al-date">發文日期：<span>2020.12.31</span></div>
                  </a>
                  <!-- //文章標題 -->
                  <ul class="art-right">
                    <li>
                      <a class="edit" href="member_article_edit.php" title="修改">
                        <i class="at-ic fas fa-edit"></i>修改
                      </a>
                    </li>
                    <li>
                      <a href="javascript: void(0)" title="刪除">
                        <i class="at-ic fas fa-times"></i>刪除
                      </a>
                    </li>
                  </ul>
                </li>
              <?php } ?>
            </ul>
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