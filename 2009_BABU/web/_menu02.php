<header>
  <div class="box-top">
    <div class="pageHeader">
      <h1>
        <a href="index.php">
          <div class="logo">
            <img src="SRC/images/logo.svg">
          </div>
        </a>
      </h1>
      <div class="menubox02">
        <div class="menu_top" id="nav">
          <div class="nav-l">
            <dd class="current">
              <a href="hot.php">
                <div class="tta">熱門文章</div>
              </a>
            </dd>
            <dd>
              <a href="news.php">
                <div class="tta">最新消息</div>
              </a>
            </dd>
            <dd>
              <a href="products_list.php">
                <div class="tta">體驗活動</div>
              </a>
            </dd>
            <dd>
              <a href="point_pds_list.php">
                <div class="tta">點數兌換</div>
              </a>
            </dd>
            <dd>
              <a href="javascript:void(0)">
                <div class="tta">異業合作</div>
              </a>
            </dd>
          </div>
          <div class="nav-r">
            <dd>
              <a href="member_article_add.php">
                <div class="mb-icon">
                  <img src="SRC/images/icon/head-vip_02.svg" title="我要發文">
                </div>
              </a>
            </dd>
            <dd>
              <a href="member_massage.php">
                <div class="mb-icon">
                  <img src="SRC/images/icon/head-vip_03.svg" title="會員訊息">
                </div>
              </a>
            </dd>
            <dd>
              <a href="member.php">
                <div class="mb-icon">
                  <img src="SRC/images/icon/head-vip_05.svg" title="會員管理">
                </div>
              </a>
            </dd>
            <dd>
              <a href="cart02.php">
                <div class="mb-icon">
                  <img src="SRC/images/icon/head-vip_04.svg" title="我的購物車">
                </div>
              </a>
            </dd>
            <dd>
              <a href="javascript:void(0)">
                <div><span><i class="fas fa-caret-down"></i></span></div>
              </a>
              <ul class="sub">
                <li><a href="contact.php">聯絡我們</a></li>
                <li><a href="qa.php">點數說明</a></li>
                <li><a href="privacy.php">隱私權條款</a></li>
              </ul>
            </dd>
          </div>
        </div>
      </div>
      <!-- <div class="menubox02">
        <div class="search">
          <form method="post" action="search.php">
            <div class="box">
              <input class="sbox" type="text" placeholder="請輸入商品" />
              <input class="sbtn" type="submit" value="" />
            </div>
          </form>
        </div>
        <div class="user"><a href="login.php"><img src="images/user.png"></a></div>
        <div class="cart"><a href="cart.php">
            <img src="images/cart.png">
            <span>1</span>
          </a></div>
      </div> -->
      <!--mobile menu -->
      <!-- <div class="mobile_menu">
        <div id="toggle">
          <div class="one"></div>
          <div class="two"></div>
          <div class="three"></div>
        </div>
        <div id="menu">
          <div class="msearch">
            <form method="post" action="search.php">
              <div class="box">
                <input class="sbox" type="text" placeholder="請輸入商品" />
                <input class="sbtn" type="submit" value="" />
              </div>
            </form>
          </div>
          <ul class="gw-nav gw-nav-list">
            <li class="init-arrow-down"><a href="javascript:void(0)"><span class="gw-menu-text">商品情報</span><b class="gw-arrow"></b> </a>
              <ul class="gw-submenu">
                <li><a href="products.php">藥品</a></li>
                <li><a href="products.php">食品</a></li>
                <li><a href="pd_sales.php">活動專區</a></li>
                <li><a href="store.php">服務據點</a></li>
              </ul>
            </li>
            <li class="init-arrow-down"><a href="javascript:void(0)"><span class="gw-menu-text">健康領航站</span><b class="gw-arrow"></b> </a>
              <ul class="gw-submenu">
                <li><a href="news.php">健康知識</a></li>
                <li><a href="news.php">醫療知識</a></li>
                <li><a href="news.php">運動強骨</a></li>
              </ul>
            </li>
            <li class="init-arrow-down"><a href="javascript:void(0)"><span class="gw-menu-text">衛教資訊</span><b class="gw-arrow"></b> </a>
              <ul class="gw-submenu">
                <li><a href="healthypilot.php">專家專欄</a></li>
                <li><a href="healthypilot.php">保健知識</a></li>
              </ul>
            </li>
            <li class="init-un-active"><a href="videos.php"><span class="gw-menu-text">影片分享</span></a></li>
            <li class="init-arrow-down"><a href="javascript:void(0)"><span class="gw-menu-text">關於美時</span><b class="gw-arrow"></b> </a>
              <ul class="gw-submenu">
                <li><a href="about.php">關於美時</a></li>
                <li><a href="about.php">分類為後台建立</a></li>
              </ul>
            </li>
            <li class="init-arrow-down"><a href="javascript:void(0)"><span class="gw-menu-text">會員系統</span><b class="gw-arrow"></b> </a>
              <ul class="gw-submenu">
                <li><a href="member_account.php">個人資料管理與修改</a></li>
                <li><a href="member_order.php">訂單查詢</a></li>
                <li><a href="member_favorite.php">我的收藏</a></li>
                <li><a href="member_point.php">我的紅利</a></li>
              </ul>
            </li>
            <li class="init-un-active"><a href="contact.php"><span class="gw-menu-text">客服聯絡</span></a></li>
          </ul>
        </div> -->
      <!--//mobile menu -->
    </div>
  </div>
</header>

<!--web menu-->
<link rel="stylesheet" type="text/css" href="SRC/css/menu.css" />
<script type="text/javascript" src="SRC/js/menu.js"></script>
<!--//web menu-->

<!--mobile menu -->
<script>
  $("#toggle").click(function() {
    $(this).toggleClass("on");
    $("#menu").slideToggle();
  });
</script>

<!-- <link rel="stylesheet" type="text/css" href="SRC/css/bs_leftnavi.css">
<script src="SRC/js/bs_leftnavi.js"></script> -->
<!--//mobile menu -->