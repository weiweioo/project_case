<?php include('_head.php') ?>
<!--wrapper-->
<div id="wrapper" class="main_bg">
  <?php include('_menu02.php') ?>
  <main class="main-all">
    <section class="wow fadeIn member-set">
      <div class="con-box">
        <section class="right">
          <div class="account_box">
            <div class="account-top">
              <div class="acc-top01">
                <div class="acc-top-pic">
                  <img src="SRC/images/account-pic.jpg" alt="">
                  <div class="avatar-edit">
                    <form action="" method="post" id="form-image">
                      <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                      <label for="imageUpload"></label>
                    </form>
                  </div>
                </div>
                <div class="acc-user-top">
                  <div class="acc-usename">
                    JDDT0311
                  </div>
                  <div class="acc-ico"><span><i class="vip-mber fas fa-crown"></i></span></div>
                  <!-- 普通會員
                  <div class="acc-ico"><span><i class="gen-mber fas fa-crown"></i></span></div> 
                -->
                </div>
                <div class="acc-user-point">
                  可使用的點數：<span>200</span>
                </div>

              </div>
              <ul class="acc-top02">
                <li>發佈文章數：<span>10</span></li>
                <li>獲得讚數：<span>109</span></li>
                <li>獲得回應數：<span>666</span></li>
                <li class="score">
                  文章平均評價：
                  <div class="score-box">
                    <div class="score-line">
                      <div class="get"></div>
                    </div>
                    <span>4.5</span>
                  </div>
                </li>
              </ul>
            </div>
            <div class="account">
              <ul>
                <li>
                  <a href="member_account.php">
                    <div class="act_icon02"><span><i class="fas fa-user"></i></span></div>
                    <div class="act_txt">
                      <h2>個人資料管理與修改</h2>
                      <div class="txt02">您的個人帳戶管理</div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="member_massage.php">
                    <div class="act_icon02"><span><i class="fas fa-comment-dots"></i></span></div>
                    <div class="act_txt">
                      <h2>會員訊息</h2>
                      <div class="txt02">您的會員訊息</div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="member_order.php">
                    <div class="act_icon02"><span><i class="fas fa-gift"></i></span></div>
                    <div class="act_txt">
                      <h2>兌換管理</h2>
                      <div class="txt02">您的訂單歷史查詢</div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="member_point.php">
                    <div class="act_icon02"><span><i class="fab fa-product-hunt"></i></span></div>
                    <div class="act_txt">
                      <h2>我的點數</h2>
                      <div class="txt02">顯示目前可使用、已使用點數</div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="member_products.php">
                    <div class="act_icon02"><span><i class="fas fa-heart"></i></span></div>
                    <div class="act_txt">
                      <h2>商品體驗</h2>
                      <div class="txt02">您的商品體驗列表</div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="member_article.php">
                    <div class="act_icon02"><span><i class="fas fa-book-open"></i></span></div>
                    <div class="act_txt">
                      <h2>文章管理</h2>
                      <div class="txt02">您的文章管理列表</div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="member_favorite.php">
                    <div class="act_icon02"><span><i class="fas fa-bookmark"></i></span></div>
                    <div class="act_txt">
                      <h2>我的書籤</h2>
                      <div class="txt02">您的書籤清單</div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="contact.php">
                    <div class="act_icon02"><span><i class="fas fa-envelope"></i></span></div>
                    <div class="act_txt">
                      <h2>客服中心</h2>
                      <div class="txt02">點數說明、隱私權條款、聯絡我們</div>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </section>
      </div>
    </section>
  </main>

  <script>
    $(document).ready(function() {

      $("#imageUpload").change(function(data) {

        var imageFile = data.target.files[0];
        var reader = new FileReader();
        reader.readAsDataURL(imageFile);

        reader.onload = function(evt) {
          $('#imagePreview').attr('src', evt.target.result);
          $('#imagePreview').hide();
          $('#imagePreview').fadeIn(650);
        }

      });



    });
  </script>