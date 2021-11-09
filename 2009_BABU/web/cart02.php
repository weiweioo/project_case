<?php include('_head.php') ?>
<!--wrapper-->
<div id="wrapper" class="main_bg">
  <?php include('_menu02.php') ?>
  <main class="shop-cart">
    <section class="main-all wow fadeIn">
      <div class="box-1">
        <div class="title01 text_center">
          <h2>購物車</h2>
          <!--bread-->
          <div class="breadbox">
            <div class="bread-crumbs">
              <li><a href="index.php">首頁</a></li>
              <li><a href="cart02.php">購物車</a></li>
            </div>
          </div>
          <!--bread end-->
        </div>
      </div>
      <div class="box-1">
        <div class="container">
          <ul class="progressbar">
            <li class="active">
              <div class="num">1</div>
              <div class="tt">購物清單確認</div>
            </li>
            <li>
              <div class="num">2</div>
              <div class="tt">填寫訂購資料</div>
            </li>
            <li>
              <div class="num">3</div>
              <div class="tt">訂購完成</div>
            </li>
          </ul>
        </div>
      </div>
      <div class="content-all">
        <!--左側清單-->
        <div class="cart_boxr">
          <!--清單-->
          <div class="cart01">
            <ul>
              <div class="namebox">
                <div class="name">
                  <dd><a href="products_view.php"><img src="SRC/images/point-pd01.jpg" /></a></dd>
                  <dt>
                    <div class="tt"><a href="products_view.php">富勒烯UV光感妝前乳</a></div>
                    <div class="salesbox">
                      <div class="slist">
                        <div class="icon"><span class="icon_spec">規格：150ml</span></div>
                      </div>
                    </div>
                  </dt>
                </div>
              </div>
              <div class="numberbox">
                <div class="number">
                  <div class="quantity buttons_added">
                    <input type="button" value="-" class="minus">
                    <input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="">
                    <input type="button" value="+" class="plus">
                  </div>
                </div>
                <div class="price"><span>100</span></div>
                <div class="del">
                  <a href="javascript: void(0)" class="btn-style06 hvr-bob"><i class="fe-x"></i><span>刪　　除</span></a>
                </div>
              </div>
            </ul>
            <ul>
              <div class="namebox">
                <div class="name">
                  <dd><a href="products_view.php"><img src="SRC/images/point-pd02.jpg" /></a></dd>
                  <dt>
                    <div class="tt"><a href="products_view.php">冰河泥活膚拉提潔顏乳</a></div>
                    <div class="salesbox">
                      <div class="slist">
                        <div class="icon"><span class="icon_spec">規格：150ml</span></div>
                      </div>
                    </div>
                  </dt>
                </div>
              </div>
              <div class="numberbox">
                <div class="number">
                  <div class="quantity buttons_added">
                    <input type="button" value="-" class="minus">
                    <input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="">
                    <input type="button" value="+" class="plus">
                  </div>
                </div>
                <div class="price"><span>100</span></div>
                <div class="del">
                  <a href="javascript: void(0)" class="btn-style06 hvr-bob"><i class="fe-x"></i><span>刪　　除</span></a>
                </div>
              </div>
            </ul>
            <ul class="stock_btn">
              <div class="stock"><span>目前無庫存</span></div>
              <div class="namebox">
                <div class="name">
                  <dd><a href="products_view.php"><img src="SRC/images/point-pd03.jpg" /></a></dd>
                  <dt>
                    <div class="tt"><a href="products_view.php">駐顏有樹全效修護精華</a></div>
                    <div class="salesbox">
                      <div class="slist">
                        <div class="icon"><span class="icon_spec">規格：150ml</span></div>
                      </div>
                    </div>
                  </dt>
                </div>
              </div>
              <div class="numberbox">
                <div class="number">
                  <div class="quantity buttons_added">
                    <input type="button" value="-" class="minus">
                    <input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="">
                    <input type="button" value="+" class="plus">
                  </div>
                </div>
                <div class="price"><span>100</span></div>
                <div class="del">
                  <a href="javascript: void(0)" class="btn-style06 hvr-bob"><i class="fe-x"></i><span>刪　　除</span></a>
                </div>
              </div>
            </ul>
          </div>
          <!--//清單-->
        </div>
        <!--//左側清單-->
        <!--右側小計-->
        <div class="cart_boxl">
          <!--小計-->
          <div class="all">
            <div class="title05">會員點數</div>
            <div class="cost">
              <li>
                目前擁有<span class="cost-span">800</span>點
              </li>
            </div>
            <div class="cart_line"></div>
            <div class="title05">訂單資訊</div>
            <div class="cost">
              <li>
                <dd>小計</dd>
                <dt>300點</dt>
              </li>
              <div class="cart_line02"></div>
            </div>
            <div class="cost">
              <li>
                <dd class="total">剩餘</dd>
                <dt class="total">500點</dt>
              </li>
            </div>
            <input type="submit" class="btn-style01" onclick="location='cart03.php'" value="填寫結帳資料">
          </div>
          <!--小計-->
        </div>
        <!--//右側小計-->
      </div>
    </section>
  </main>