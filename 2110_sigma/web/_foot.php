  <footer class="wow fadeIn">
    <div class="box-foot fadeInUp">
      <div class="box-left">
        <div class="f-contant">
          <ul>
            <li>
              <div class="f-txt">
                電話：(02)22532276
              </div>
            </li>
            <li>
              <div class="f-txt">
                信箱：jeffrey.sung007@hotmail.com
              </div>
            </li>
            <li>
              <div class="f-txt">
                地址：新北市新莊區中正路649之3號7樓
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="box-right">
        <div class="flist">
          <ul class="f-lv1">
            <li class="f-icon">
              <a href="">
                <img src="images/f-icon-1.svg" alt="">
              </a>
            </li>
            <li class="f-icon">
              <a href="">
                <img src="images/f-icon-2.svg" alt="">
              </a>
            </li>
            <li class="f-icon">
              <a href="">
                <img src="images/f-icon-3.svg" alt="">
              </a>
            </li>
            <li class="f-icon">
              <a href="">
                <img src="images/f-icon-4.svg" alt="">
              </a>
            </li>
          </ul>

        </div>
      </div>

    </div>
    <div class="copyright fadeInUp">
      <ul>
        <li class="f-link"><span>COPYRIGHT © 2021 SIGMA ALL RIGHTS RESERVED.</span></li>
        <li><span><a href="privacy.php">隱私權政策</a></span></li>
        <li><a href="https://www.jddt.tw/" target="_blank">Designed by JDDT</a></li>
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

  <script>
    $(function() {
      $('#ind1').click(function() {
        $('html,body').animate({
          scrollTop: $('#about').offset().top - 90
        }, 800);
        $('#ind2').click(function() {
          $('html,body').animate({
            scrollTop: $('#skill').offset().top - 90
          }, 800);
        });
        $('#ind3').click(function() {
          $('html,body').animate({
            scrollTop: $('#contact').offset().top - 90
          }, 800);
        });

        // $('#ind1_mb').click(function() {
        //   $('html,body').animate({
        //     scrollTop: $('#about').offset().top - 130
        //   }, 800);
        //   $('.menu-btn').toggleClass('animate');
        //   var mobileNav = $('.scrollbar-inner');
        //   mobileNav.toggleClass('hide show');
        // });
        // $('#ind2_mb').click(function() {
        //   $('html,body').animate({
        //     scrollTop: $('#skill').offset().top - 130
        //   }, 800);
        //   $('.menu-btn').toggleClass('animate');
        //   var mobileNav = $('.scrollbar-inner');
        //   mobileNav.toggleClass('hide show');
        // });
        // $('#ind3_mb').click(function() {
        //   $('html,body').animate({
        //     scrollTop: $('#contact').offset().top - 80
        //   }, 800);
        //   $('.menu-btn').toggleClass('animate');
        //   var mobileNav = $('.scrollbar-inner');
        //   mobileNav.toggleClass('hide show');
        // });

      });
    });
  </script>