  <footer class="wow fadeIn">
    <div class="box-foot fadeInUp">
      <div class="box-left">
        <div class="logo">
          <h1><a href="index.php"><img src="images/f-logo.png" alt="政伸企業股份有限公司" title="政伸企業股份有限公司"></a></h1>
        </div>
        <div class="f-contant">
          <ul>
            <li>
              <div class="f-icon">
                <img src="images/f-icon01.svg">
              </div>
              <div class="f-txt">
                +886(0)4 2359 3687
              </div>
            </li>
            <li>
              <div class="f-icon">
                <img src="images/f-icon02.svg">
              </div>
              <div class="f-txt">
                service@transart.com.tw
              </div>
            </li>
            <li>
              <div class="f-icon">
                <img src="images/f-icon03.svg">
              </div>
              <div class="f-txt">
                台中市西屯區工業區十二路6號
              </div>
            </li>
            <li class="fb">
              <div class="f-icon">
                <a href="https://m.facebook.com/%E6%94%BF%E4%BC%B8%E4%BC%81%E6%A5%AD%E8%82%A1%E4%BB%BD%E6%9C%89%E9%99%90%E5%85%AC%E5%8F%B8-118396804909116/" target="_blank"><i class="fab fa-facebook-f"></i></a>
              </div>
            </li>
          </ul>

        </div>
      </div>
      <div class="box-right">
        <div class="flist">
          <ul class="f-lv1">
            <li>
              <a href="news.php">訊息中心</a>
              <ul class="f-lv2">
                <li><a href="news.php">集團營運</a></li>
                <li><a href="news.php">媒體報導</a></li>
                <li><a href="news.php">活動展覽</a></li>
              </ul>
            </li>
            <li>
              <a href="about.php">關於我們</a>
              <ul class="f-lv2">
                <li><a href="about.php">公司簡介</a></li>
                <li><a href="about.php">經營理念</a></li>
                <li><a href="about.php">大事紀</a></li>
                <li><a href="about.php">服務流程</a></li>
              </ul>
            </li>
            <li>
              <a href="product.php">產品介紹</a>
              <ul class="f-lv2">
                <li><a href="product.php">最新產品</a></li>
                <li><a href="product.php">水轉系列</a></li>
                <li><a href="product.php">自黏系列</a></li>
                <li><a href="product.php">熱轉系列</a></li>
                <li><a href="product.php">其他系列</a></li>
              </ul>
            </li>
            <li>
              <a href="investor.php">投資人專區</a>
              <ul class="f-lv2">
                <li><a href="investor.php">財務業務資訊</a></li>
                <li><a href="investor-shareholder.php">股東會資訊</a></li>
                <li><a href="investor-dividend.php">股務及股價資訊</a></li>
                <li><a href="investor-contact.php">股務作業</a></li>
                <li><a href="investor-manage.php">公司治理資訊</a></li>
                <li><a href="investor-stakes.php">利害關係人</a></li>
                <li><a href="investor-csr01.php">企業社會責任</a></li>
              </ul>
            </li>
            <li><a href="colors.php">色票專區</a></li>
            <li>
              <a href="contact.php">聯絡我們</a>
              <ul class="f-lv2">
              <li><a href="company-map.php">詳細地址</a></li>
                  <li><a href="contact.php">聯絡表單</a></li>
                  <li><a href="recruit.php">人才招募</a></li>
              </ul>
            </li>
          </ul>

        </div>
      </div>

    </div>
    <div class="copyright fadeInUp">
      <ul>
        <li><a href="terms.php">網站使用條款</a></li>
        <li><a href="privacy.php">隱私權政策</a></li>
        <li><a href="sitemap.php">網站地圖</a></li>
        <li class="f-link"><span>Copyright © 2021 transart All Rights Reserved.</span>
          <a href="https://www.jddt.tw/" target="_blank">Designed by JDDT</a>
        </li>
      </ul>
    </div>
  </footer>
  <!-- <div class="top">TOP</div> -->
  </div>
  <!--//wrapper-->
  </body>

  </html>

  <script src="js/jquery-1.8.3.min.js"></script>
  <script src="js/jquery.scrollbar.min.js"></script>
  <script src="js/main.js"></script>
  <!--[if lt IE 9]>
<script src="js/IE9.js"></script>
<script src="js/html5shiv.min.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

  <!--fadeIn -->
  <script type="text/javascript" src="js/effect.js"></script>
  <script>
    var wow = new WOW({
      boxClass: 'wow', // 要套用WOW.js縮需要的動畫class(預設是wow)
      animateClass: 'animated', // 要"動起來"的動畫(預設是animated, 因此如果你有其他動畫library要使用也可以在這裡調整)
      offset: 0, // 距離顯示多遠開始顯示動畫 (預設是0, 因此捲動到顯示時才出現動畫)
      mobile: true, // 手機上是否要套用動畫 (預設是true)
      live: true, // 非同步產生的內容是否也要套用 (預設是true, 非常適合搭配SPA)
      callback: function(box) {
        // 當每個要開始時, 呼叫這裡面的內容, 參數是要開始進行動畫特效的element DOM
      },
      scrollContainer: null // 可以設定成只套用在某個container中捲動才呈現, 不設定就是整個視窗
    });
    wow.init();
  </script>
  <!--//fadeIn -->

  <script>
    $(function() {
      $(window).scroll(function() {
        if ($(document).scrollTop() > 0) {
          $('.pageHeader').addClass('shrink');

        } else {
          $('.pageHeader').removeClass('shrink');
        }
      });
    });
  </script>

  <script>
    /*UNIT mobile menu*/
    var acc = document.getElementsByClassName("mobile_list_menu");
    var i;

    for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
          panel.style.maxHeight = null;
        } else {
          panel.style.maxHeight = panel.scrollHeight + "px";
        }
      });
    } // JavaScript Document
  </script>

  <script>
    $(function() {
      $("ul.level-2").hide();
      $(".unit_link")
        .click(function() {
          $("ul.level-2").slideUp();
          $(".unit_link").removeClass("open");
          if ($("+ul", this).css("display") == "none") {
            $("+ul", this).slideDown();
            $(this).addClass("open");
          }
        })
    });
  </script>