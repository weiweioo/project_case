<!--scrollToTop -->
<button class="scrollToTop" type="button"></button>
      <script>
        $(document).ready(function(){
          //Check to see if the window is top if not then display button
          $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
              $('.scrollToTop').fadeIn();
            } else {
              $('.scrollToTop').fadeOut();
            }
          });
          //Click event to scroll to top
          $('.scrollToTop').click(function(){
            $('html, body').animate({scrollTop : 0},800);
            return false;
          });
        });
      </script>
<!--//scrollToTop -->
<footer> 
    <div class="footbox wow fadeIn">
      <!--footbox-->
      <div class="box-3">
        <section class="addbox">
          <h1><a href="index.php"><img src="images/logo_foot.png" alt="山隆通運股份有限公司" title="山隆通運股份有限公司"></a></h1> 
          <div class="fadd">
            <li>新北市板橋區民生路一段1-2號1樓</li>
            <li><b>TEL:</b> 02-29599611</li>
            <li><b>FAX:</b> 02-29599441</li>
            <li><b>EMAIL:</b> hq@slc.com.tw</li>
            <div class="link"> 
              <li><a href="https://www.facebook.com/ShanLoong1982/" target="_blank"><img src="images/link01.png" alt=""></a></li>
              <li><a href="https://www.youtube.com/watch?v=QyZ8O5evI8g&feature=youtu.be" target="_blank"><img src="images/link02.png" alt=""></a></li>
              <li><a href="https://www.instagram.com/shan_loong/" target="_blank"><img src="images/link03.png" alt=""></a></li>
            </div><!--//link -->
            <li><a href="policy.php">個資法與隱私聲明</a></li>
          </div> 
        </section>
        <section class="fbox02">
          <ul>
            <div class="tt"><a href="about.php">關於山隆</a></div>
            <li><a href="about.php">公司簡介</a></li>
            <li><a href="about.php">理念願景</a></li>
            <li><a href="about.php">公司沿革</a></li>
            <li><a href="about.php">經營團隊</a></li>
            <li><a href="about.php">企業殊榮</a></li>
          </ul>
          <ul>
            <div class="tt"><a href="group.php">事業體系</a></div>
            <li><a href="transportation.php">運輸事業</a></li>
            <li><a href="oil.php">油品事業</a></li>
            <li><a href="logistics.php">倉儲物流</a></li>
            <li><a href="shipping.php">船務報關</a></li>
          </ul>
          <ul>
            <div class="tt"><a href="csr.php">企業社會責任</a></div>
            <li><a href="csr.php">社會公益</a></li>
            <li><a href="csr.php">綠色回饋</a></li>
          </ul>
          <ul>
            <div class="tt"><a href="ir.php">投資人專區</a></div>
            <li><a href="ir.php">股東專區</a></li>
            <li><a href="ir_a.php">財務資訊</a></li>
            <li><a href="ir_b.php">股東專區</a></li>
            <li><a href="ir_c.php">法人說明會</a></li>
            <li><a href="ir_e.php">投資人連絡窗口</a></li>
          </ul>
          <ul>
            <div class="tt"><a href="overseas.php">海外據點</a></div>
            <li><a href="overseas.php">越南山隆</a></li>
            <li><a href="overseas.php">上海山通</a></li>
          </ul>
          <ul>
            <div class="tt"><a href="service.php">查詢服務</a></div>
            <li><a href="https://w3.slc.com.tw/gas/custom/" target="_blank">油品客戶查詢</a><li>
            <li><a href="http://vip.slc.com.tw:8093/vipweb/" target="_blank">會員卡查詢</a><li>
            <li><a href="https://w3.slc.com.tw/pur_login.php" target="_blank">供應商查詢</a><li>
            <li><a href="index.php" target="_blank">貨態查詢</a><li>
          </ul>   
        </section>
      </div>
      <!--//footbox-->
    </div> 
    <div class="copyright wow fadeIn">
        © 2019 山隆通運股份有限公司 All Rights Reserved.　<a href="http://www.jddt.tw/" target="_blank"><span>Designed by JDDT.</span></a>
    </div>   
  </footer>
</div>
<!--//wrapper-->
</body>
</html>