<?php include('_head.php') ?>
<link rel="stylesheet" type="text/css" href="SRC/css/slick.css" />
<link rel="stylesheet" type="text/css" href="SRC/css/slick-theme.css" />
<!--TAB-->
<link href="SRC/css/tab.css" rel="stylesheet" type="text/css" />
<!--//TAB-->
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
              <li><a href="member_article_add.php">新增文章</a></li>
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
        <section class="right">
          <form action="" class="mae-form">
            <div class="mb_article_edit">
              <div class="art-box1">
                <ul class="styled-input">
                  <li>
                    <div class="acc-top01">
                      <div class="acc-top-pic">
                        <img src="SRC/images/account-pic.jpg" alt="">
                      </div>
                      <div class="acc-info">
                        <div class="acc-usename">JDDT0311</div>
                      </div>
                    </div>
                  </li>
                  <li class="maa-top-check">
                    <label><span><i class="fas fa-exclamation"></i></span>是否為體驗活動文章</label>
                    <div class="sort">
                      <select name="select2" id="select2" class="select_sort">
                        <option selected="selected">否</option>
                        <option>是</option>
                      </select>
                    </div>
                  </li>
                  <li>
                    <div class="tt05">
                      <span><i class="fas fa-exclamation"></i></span>若為商品體驗發文，請務必確認上方選項為<strong>否</strong>
                    </div>
                  </li>
                  <li class="">
                    <textarea rows="1" placeholder="請輸入標題"></textarea>
                  </li>
                  <li>
                    <div class="tt05">
                      <span><i class="fas fa-exclamation"></i></span> 若文章為體驗文章，務必放置圖片才能發表文章
                    </div>
                  </li>
                  <li>
                    <textarea rows="25" placeholder="請撰寫內文"></textarea>
                  </li>
                  <li class="file-box">
                    <button type="button">
                      <label for="file-img"><i class="mae-icn fas fa-image"></i></label>
                      <input type="file" name="progressbarTW_img" id="file-img" value="" class="onlyread" accept="image/gif, image/jpeg, image/png">
                    </button>
                  </li>
                  <li>
                    <textarea rows="3" placeholder="請輸入標籤"></textarea>
                  </li>
                </ul>
              </div>
              <div class="art-box2">
                <ul class="styled-input">
                  <li class="">
                    <label>文章分類</label>
                    <div class="sort">
                      <select name="select2" id="select2" class="select_sort">
                        <option selected="selected">美妝新訊</option>
                      </select>
                    </div>
                  </li>
                  <li>
                    <label>品牌</label>
                    <input type="text" value="雅詩蘭黛"  readonly="readonly"/>
                  </li>
                  <li>
                    <label>商品名稱</label>
                    <input type="text" value="情挑誘光唇膏"  readonly="readonly"/>
                  </li>

                  <li class="">
                    <label>是否使用匿名發文</label>
                    <div class="sort">
                      <select name="select2" id="select2" class="select_sort">
                        <option selected="selected">是</option>
                        <option>否</option>
                      </select>
                    </div>
                  </li>
                </ul>
                <div class="mae-btn">
                  <input type="reset" class="m-b btn-style07" value="取消發送" onclick="location=''" />
                  <input type="submit" class="m-b btn-style01" value="發送文章" onclick="location=''" />
                </div>
              </div>
            </div>

          </form>
        </section>
        <!-- //中間文章列表 -->
      </div>
    </section>
  </main>

  <script type="text/javascript" src="SRC/js/effect01.js"></script>

  <script>
    $('#file-img').change(function() {
      readURL(this);
    });

    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $("#preview-img").attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
      }
    }
  </script>