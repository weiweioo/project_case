<?php include('_head.php') ?>
<!--wrapper-->
<div id="wrapper" class="main_bg">
  <?php include('_menu02.php') ?>
  <main class="shop-cart">
    <section class="main-all wow fadeIn">
      <div class="box-1">
        <div class="title01 text_center">
          <h2>訂購完成</h2>
          <!--bread-->
          <div class="breadbox">
            <div class="bread-crumbs">
              <li><a href="index.php">首頁</a></li>
              <li><a href="member.php">會員系統</a></li>
              <li><a href="member_order.php">兌換管理</a></li>
            </div>
          </div>
          <!--bread end-->
        </div>
      </div>
      <div class="box-1">
        <div class="container">
          <ul class="progressbar">
            <li>
              <div class="num">1</div>
              <div class="tt">購物清單確認</div>
            </li>
            <li >
              <div class="num">2</div>
              <div class="tt">填寫訂購資料</div>
            </li>
            <li class="active">
              <div class="num">3</div>
              <div class="tt">訂購完成</div>
            </li>
          </ul>
        </div>
      </div>
      <div class="content-all cart04">
        <div class="cart-box04">
          <!--清單-->
          <div class="cart02">
            <ul>
              <div class="namebox">
                <div class="name">
                  <dd><a href="products_view.php"><img src="SRC/images/product01.jpg" /></a></dd>
                  <dt>
                    <div class="tt"><a href="products_view.php">快樂鼠尾草舒敏保濕乳</a></div>
                    <div class="salesbox">
                      <div class="slist">
                        <div class="icon"><span class="icon_spec">規格：150ml</span></div>
                      </div>
                    </div>
                  </dt>
                </div>
              </div>
              <div class="numberbox">
                <div class="number">數量：1</div>
                <div class="price">點數：50</div>
              </div>
            </ul>
            <ul>
              <div class="namebox">
                <div class="name">
                  <dd><a href="products_view.php"><img src="SRC/images/product02.jpg" /></a></dd>
                  <dt>
                    <div class="tt"><a href="products_view.php">快樂鼠尾草舒敏保濕乳</a></div>
                    <div class="salesbox">
                      <div class="slist">
                        <div class="icon"><span class="icon_spec">規格：150ml</span></div>
                      </div>
                    </div>
                  </dt>
                </div>
              </div>
              <div class="numberbox">
                <div class="number">數量：1</div>
                <div class="price">點數：50</div>
              </div>
            </ul>
            <ul>
              <div class="namebox">
                <div class="name">
                  <dd><a href="products_view.php"><img src="SRC/images/product03.jpg" /></a></dd>
                  <dt>
                    <div class="tt"><a href="products_view.php">快樂鼠尾草舒敏保濕乳</a></div>
                    <div class="salesbox">
                      <div class="slist">
                        <div class="icon"><span class="icon_spec">規格：150ml</span></div>
                      </div>
                    </div>
                  </dt>
                </div>
              </div>
              <div class="numberbox">
                <div class="number">數量：1</div>
                <div class="price">點數：50</div>
              </div>
            </ul>
            <!--小計-->
            <div class="all">
              <div class="cost-tt01">訂單資訊</div>
              <ul class="cost">
                <li>
                  <dd>此筆訂單消耗點數總計</dd>
                  <dt>150</dt>
                </li>
                <div class="cart_line"></div>
                <li class="lave">
                  <dd>點數剩餘</dd>
                  <dt>100</dt>
                </li>
              </ul>
            </div>
            <!--小計-->
          </div>
          <!--//清單-->
        </div>
        <form class="cart-box04-form">
          <!--金/物流-->
          <div class="recipient">
            <div class="user_editor">
              <div class="title05">運送方式</div>
              <ul class="styled-input" style="margin-top:10px;">
                <li>
                  7-11超商
                </li>
                <li>
                  <div class="spcar_ck_tips02">元保門市</div>
                </li>
              </ul>
            </div>
          </div>
          <!--//金/物流-->
          <!--收件人資料-->
          <div class="recipient">
            <div class="title05">收件人資料</div>
            <form action="javascript:void(0)">
              <ul class="styled-input" style="margin-top:10px;">
                <li class="half">
                  <label>姓名*</label>
                  <input type="text" value="林小花" readonly="readonly" class="onlyread" />
                </li>
                <li class="half">
                  <label>聯絡電話*</label>
                  <input type="tel" value="0912345678" readonly="readonly" class="onlyread" />
                </li>
                <li>
                  <label>E-mail*</label>
                  <input type="text" placeholder="E-mail*" value="service@jddt.tw" readonly="readonly" class="onlyread" />
                </li>
                <li>
                  <label>地址*</label>
                  <input type="text" value="110台中市北區進化北路392-2號8樓之2" readonly="readonly" class="onlyread" />
                </li>

                <li>
                  <label for="content">備註</label>
                  <input type="text" placeholder="備註欄" readonly="readonly" class="onlyread">
                </li>
              </ul>
            </form>
          </div>
          <!--//收件人資料-->
          <input type="submit" class="m-btn btn-style01" onclick="location='javascript: void(0)'" value="列印表單">
        </form>
      </div>
    </section>
  </main>