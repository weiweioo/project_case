<?php include('_head.php') ?>
<script type="text/javascript" src="SRC/js/jquery.twzipcode.min.js"></script>
<script src="SRC/js/cart.js"></script>
<script>
  $(function() {

    // date picker
    $("#datepicker").datepicker({
      changeMonth: true,
      changeYear: true,
      yearRange: "-100:+0",
      maxDate: 0,
      onSelect: function() {
        handleLabel($(this));
      }
    });
    // 地址選擇
    $('#twzipcode').twzipcode();
    $.datepicker.setDefaults($.datepicker.regional["zh-TW"]);

  });
</script>
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
            <li>
              <div class="num">1</div>
              <div class="tt">購物清單確認</div>
            </li>
            <li class="active">
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
        <!--cart_boxr-->
        <div class="cart_boxr">
          <!--清單-->
          <div class="cart02">
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
                <div class="number">1</div>
                <div class="price">100</div>
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
                <div class="number">1</div>
                <div class="price">100</div>
              </div>
            </ul>
            <ul>
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
                <div class="number">1</div>
                <div class="price">100</div>
              </div>
            </ul>
          </div>
          <!--//清單-->
          <!--金/物流-->
          <div class="recipient">
            <div class="title05">運送方式</div>
            <ul class="styled-input" style="margin-top:10px;">
              <li>
                <div class="off_cudinp_box">
                  <select id="sp3_t1" class="scart_product_cat">
                    <option value="0" selected="SELECTED">請選擇運送方式</option>
                    <option value="1">宅配</option>
                    <option value="1">7-11配送</option>
                    <option value="1">全家配送</option>
                    <option value="1">OK配送</option>
                    <option value="1">萊爾富配送</option>
                  </select>
                </div>
              </li>
            </ul>
          </div>
          <!--//金/物流-->
          <!--收件人資料-->
          <div class="recipient">
            <div class="title05">收件人資料</div>
            <form action="javascript:void(0)">
              <ul class="styled-input" style="margin-top:10px;">
                <li class="half">
                  <label>姓名*</label>
                  <input type="text" value="林小花" required />
                </li>
                <li class="half">
                  <label>聯絡電話*</label>
                  <input type="tel" value="0912345678" required />
                </li>
                <li>
                  <label>E-mail*</label>
                  <input type="text" value="service@jddt.tw" />
                </li>
                <li>
                  <label>取貨地址*</label>
                  <div class="mem_add" id="twzipcode">
                    <div data-role="county" data-style="mem_add_inpt" class="mem_inpt" data-value="110"></div>
                    <div data-role="district" data-style="mem_add_inpt" class="mem_inpt" data-value="臺北市"></div>
                    <div data-role="zipcode" data-style="mem_add_inpt" class="mem_inpt" data-value="信義區"></div>
                  </div>
                </li>
                <li class="add">
                    <input type="text02" required/>
                  </li>
                <li>
                  <label for="content">備註</label>
                  <textarea id="content" placeholder="備註"></textarea>
                </li>
              </ul>
            </form>
          </div>
          <!--//收件人資料-->
        </div>
        <!--//cart_boxr-->
        <!--cart_boxl-->
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
            <input type="submit" class="btn-style01" onclick="location='cart04.php'" value="完成訂購">
          </div>
          <!--小計-->
        </div>
        <!--//cart_boxl-->
      </div>
</div>
</section>
</main>