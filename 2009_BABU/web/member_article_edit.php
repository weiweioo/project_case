<?php include('_head.php') ?>
<link rel="stylesheet" type="text/css" href="SRC/css/slick.css" />
<link rel="stylesheet" type="text/css" href="SRC/css/slick-theme.css" />
<!--TAB-->
<link href="SRC/css/tab.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
  $(function() {
    // 預設顯示第一個 Tab
    var _showTab = 0;
    var $defaultLi = $('ul.tabs-art-edit li').eq(_showTab).addClass('active');
    $($defaultLi.find('a').attr('href')).siblings().hide();

    // 當 li 頁籤被點擊時...
    // 若要改成滑鼠移到 li 頁籤就切換時, 把 click 改成 mouseover
    $('ul.tabs-art-edit li').click(function() {
      // 找出 li 中的超連結 href(#id)
      var $this = $(this),
        _clickTab = $this.find('a').attr('href');
      // 把目前點擊到的 li 頁籤加上 .active
      // 並把兄弟元素中有 .active 的都移除 class
      $this.addClass('active').siblings('.active').removeClass('active');
      // 淡入相對應的內容並隱藏兄弟元素
      $(_clickTab).stop(false, true).fadeIn().siblings().hide();

      return false;
    }).find('a').focus(function() {
      this.blur();
    });
  });
</script>
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
              <li><a href="member_article_edit.php">修改文章</a></li>
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
                        <div class="acc-time">2021.04.26</div>
                      </div>
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
                    <label>標籤</label>
                    <textarea rows="3"></textarea>
                  </li>
                </ul>
              </div>
              <div class="art-box2">
                <ul class="styled-input">
                  <li class="">
                    <label>文章分類</label>
                    <div class="sort">
                      <select name="select2" id="select2" class="select_sort">
                        <option selected="selected">選擇分類</option>
                        <option>美妝新訊</option>
                        <option>身體保養</option>
                        <option>健身器材</option>
                      </select>
                    </div>
                  </li>
                  <li>
                    <label>品牌</label>
                    <input type="text" value="雅詩蘭黛" />
                  </li>
                  <li>
                    <label>商品名稱</label>
                    <input type="text" value="情挑誘光唇膏" />
                  </li>
                  <li class="">
                    <label>是否為體驗活動文章</label>
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