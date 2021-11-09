<!-- line@ -->
<div class="lineat_box">
  <a target="_blank" href="http://line.me/ti/p/@edu.worldwide">
    <img src="SRC/images/line_iconc.svg" alt="">
    <span>點我NOW</span>
  </a>
</div>
<div class="float">
  <ul>
    <!--立即諮詢-->
    <li>
      <div class="pc-f-icon">
        <a href="tel:00-1234-567">
          立即<br>諮詢
        </a>
      </div>
    </li>
    <!--scrollToTop -->
    <li>
      <button class="scrollToTop" type="button"></button>
    </li>
  </ul>
</div>

<!--footbox-->
<footer class="">
  <div class="ind-con">
    <div class="footbox">
      <div class="leftbox">
        <ul class="info">
          <li>總公司地址：台北市大安區光復南路260巷23號三樓<br>　　　　　　(國父紀念館站2號出口)</li>
          <li>總公司電話：02-2771-1027</li>
          <li><strong>Line</strong>：@edu.worldwide</li>
          <li><strong>WeChat</strong> ：EDU_worldwide</li>
        </ul>
      </div>
      <div class="rightbox">
        <div class="icon-box">
          <a href="http://line.me/ti/p/@edu.worldwide" target="_blank">
            <div class="f-icon">
              <img src="SRC/images/fot-icon02.svg" alt="">
            </div>
          </a>
        </div>
        <div class="icon-box">
          <a href="https://www.facebook.com/EDU-%E5%A3%B9%E6%95%99%E8%82%B2%E7%95%99%E9%81%8A%E5%AD%B8-101260135194573" target="_blank">
            <div class="f-icon">
              <img src="SRC/images/fot-icon03.svg" alt="">
            </div>
          </a>
        </div>
        <div class="icon-box">
          <a href="https://www.instagram.com/edu_worldwide_education/" target="_blank">
            <div class="f-icon">
              <img src="SRC/images/fot-icon04.svg" alt="">
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="copyright wow fadeInUp">
    <div class="ind-con">
      © 2020 EDU壹教育 All rights reserved.<br>
      <a class="cr-link" href="privacy.php">Privacy Policy</a>
      <a href="http://www.jddt.tw/" target="_blank"><span>Designed by JDDT.</span></a>
    </div>
  </div>
  <div class="mb-footbox fadeInUp">
    <div class="ind-con">
      <ul class="mb-botbox">
        <li>
          <a href="contact_view.php">
            <div class="fot-bot-icon">
              <img src="SRC/images/fot-bot-icon01.svg" alt="">
            </div>
            線上預約
          </a>
        </li>
        <li>
          <a href="contact.php">
            <div class="fot-bot-icon">
              <img src="SRC/images/fot-bot-icon02.svg" alt="">
            </div>
            落點評估/選校分析
          </a>
        </li>
        <li>
          <a href="tel:02-2771-1027">
            <div class="fot-bot-icon">
              <img src="SRC/images/fot-bot-icon03.svg" alt="">
            </div>
            立即諮詢
          </a>
        </li>
      </ul>
    </div>
  </div>
</footer>
</div>
<!--//wrapper-->
</body>

<script>
  $(document).ready(function() {
    //Check to see if the window is top if not then display button
    $(window).scroll(function() {
      if ($(this).scrollTop() > 100) {
        $('.scrollToTop').fadeIn();
      } else {
        $('.scrollToTop').fadeOut();
      }
    });
    //Click event to scroll to top
    $('.scrollToTop').click(function() {
      $('html, body').animate({
        scrollTop: 0
      }, 800);
      return false;
    });
  });
</script>

</html>