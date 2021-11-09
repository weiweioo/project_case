<?php include('_head.php') ?>
<!--wrapper-->
<div id="wrapper" class="main_bg">
  <?php include('_menu02.php') ?>
  <main class="member-set">
    <section class="main-all wow fadeIn">
      <div class="box-1">
        <div class="title01 text_center">
          <h2>訂單詢問</h2>
          <!--bread-->
          <div class="breadbox">
            <div class="bread-crumbs">
              <li><a href="index.php">首頁</a></li>
              <li><a href="member.php">會員系統</a></li>
              <li><a href="member_order.php">訂單查詢</a></li>
            </div>
          </div>
          <!--bread end-->
        </div>
      </div>
      <div class="content-all">
        <!--left-->
        <section class="left">
          <nav class="sidebar-nav02">
            <a href="member.php">
              <h2>會員系統</h2>
            </a>
            <ul class="metismenu" id="menu1">
              <li><a href="member_account.php">個人資料管理與修改</a></li>
              <li><a href="member_massage.php">會員訊息</a></li>
              <li class="active"><a href="member_order.php">兌換管理</a></li>
              <li><a href="member_point.php">我的點數</a></li>
              <li><a href="member_products.php">商品體驗</a></li>
              <li><a href="member_article.php">文章管理</a></li>
              <li><a href="member_favorite.php">我的書籤</a></li>
            </ul>
          </nav>
        </section>
        <!--//left-->
        <section class="right">
          <div class="account_box">
            <div class="member03">
              <form action="javascript:void(0)">
                <ul class="styled-input">
                  <li class="half">
                    <label>訂單編號</label>
                    <input type="text" value="201927234112445891238" readonly="readonly" class="onlyread" />
                  </li>
                  <li class="half">
                    <label>姓名</label>
                    <input type="text" value="林小花" readonly="readonly" class="onlyread" />
                  </li>
                  <li class="half">
                    <label>E-mail*</label>
                    <input type="text" value="service@jddt.tw" required />
                  </li>
                  <li class="half">
                    <label>聯絡電話*</label>
                    <input type="tel" required />
                  </li>
                  <li>
                    <label>詢問內容*</label>
                    <textarea required></textarea>
                  </li>
                  <li class="code">
                    <input type="submit" class="btn-style01" value="確認送出" onclick="location=''" />
                  </li>
                </ul>
              </form>
            </div>
          </div>
        </section>
      </div>
    </section>
  </main>