<?php include('_head.php') ?>
<!--wrapper-->
<div id="wrapper" class="main_bg">
  <?php include('_menu02.php') ?>
  <!-- <div class="page-banner" style="background-image: url('SRC/images/banner02.jpg')"></div> -->
  <main id="" class="member-set">
    <div class="main-all">
      <section class="product-step wow fadeIn">
        <div class="content-all">
          <section class="step-box-check">
            <div class="top">
              <ul>
                <li class="tt01">雅詩蘭黛商品體驗合約</li>
                <li>合約日期:2021.05.05</li>
              </ul>
            </div>
            <form action="">
              <div class="check-con">
                <div class="tt01">注意事項</div>
                <ul>
                  <li>體驗活動報名完成並非正式獲取資格。</li>
                  <li class="ps">送出表單後，須先經過審核，通過後將另外通知，請注意<a href="contact.php">會員訊息</a>。</li>
                  <li>填寫過程中，若有任何問題，歡迎詢問右下的客服人員。</li>
                </ul>
              </div>
              <div class="check-info-con">
                <div class="tt01">
                  體驗者資訊：
                </div>
                <ul class="styled-input ct-top">
                  <li>
                    <label>帳號</label>
                    <input type="text" value="babu0442" readonly="readonly" class="onlyread" />
                  </li>
                  <li>
                    <label>姓名</label>
                    <input type="text" value="林小樂" readonly="readonly" class="onlyread" />
                  </li>
                </ul>
              </div>
              <div class="check-info-con">
                <div class="tt01">
                  商品資訊：
                </div>
                <ul class="pd-info">
                  <li>色號:<div class="tt02">#102</div>
                  </li>
                  <li>香味:<div class="tt02">玫瑰</div>
                  </li>
                  <li>型號:<div class="tt02">A1025</div>
                  </li>
                  <li>尺寸:<div class="tt02">X</div>
                  </li>
                  <li>口味:<div class="tt02">玫瑰</div>
                  </li>
                  <li>體驗時間:<div class="tt02">2021.05.21</div>
                  </li>
                </ul>
              </div>
              <div class="check-con">
                <div class="tt01">內容</div>
                <div class="con-p">
                  <p>
                    BABU IG粉絲票選，最想體驗的產品第一名，Heme輕透柔光粉底液，招募1名體驗大使
                  </p>
                </div>
                <div class="tt01">執行內容</div>
                <ul>
                  <li>將Instagram帳號設為公開</li>
                  <li>貼文中須標記@BABU</li>
                  <li>貼文中須有體驗過程的圖片or影片，並提及體驗品來源為BABU</li>
                  <li>貼文中須加上 以下#tag：<br>
                    #BABU<br>
                    #仔體驗計劃</li>
                  <li>BABU不審稿，貼文內容皆需要是您的真實體驗心得</li>
                </ul>
                <ul class="styled-input cc-check">
                  <li>
                    <input class="form-check-input" type="checkbox" name="reports" id="report0" value="report">
                    <label class="form-check-label" for="report0">
                      我已經確認上述發文資訊可以完全遵守。
                    </label>
                  </li>
                </ul>
                <div class="tt02">若無法遵守者，請勿參加此體驗活動</div>
              </div>
              <div class="check-info-con bot">
                <form action="">
                  <div class="tt01">
                    收件資訊(請務必填寫正確並確認)：
                  </div>
                  <ul class="styled-input ct-top">
                    <li>
                      <label>收 件 人</label>
                      <input type="text" value="林小樂" readonly="readonly" class="onlyread" />
                    </li>
                    <li>
                      <label>收件電話</label>
                      <input type="tel" value="0912345678" readonly="readonly" class="onlyread" />
                    </li>
                    <li>
                      <label>收件地址</label>
                      <input type="text" value="110台中市北區進化北路392-2號8樓之2" readonly="readonly" class="onlyread" />
                    </li>
                  </ul>
                <div class="tt02">請務必確認上述收件資訊填寫無誤，一旦送出表單就無法修改內容</div>
                
                  <div class="sbc-btn">
                    <button type="reset" class="sbc-b btn-style07">
                      <a href="member_products_step.php">取消資格</a>
                    </button>
                    <button type="submit" class="sbc-b btn-style01">
                      <a data-fancybox data-src="#sbc-b-check" href="javascript:;">確認(合約生效)</a>
                    </button>
                    <div style="display: none;" id="sbc-b-check">
                      <form class="">
                        <div class="sbc-b-check-con">
                          <div class="tt01">
                            是否確認送出 ?
                          </div>
                          <input type="submit" class=" btn-style01" onclick="location='member_products_step02.php'" value="確認送出">
                        </div>
                      </form>
                    </div>
                    <!-- href="member_products_step02.php" -->
                  </div>
                </form>
              </div>
            </form>
          </section>
        </div>
      </section>
    </div>
  </main>