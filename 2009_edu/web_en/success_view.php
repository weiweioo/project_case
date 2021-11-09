<?php include('_head.php') ?>
<link href="SRC/css/inner-page.css? <?= rand(0, 999) ?>20201104" rel="stylesheet" type="text/css" />


<main>
  <div class="inp-banner">
    <img src="SRC/images/inp-banner01.jpg" alt="">
  </div>
  <!--classLink-->
  <div class="classBox wow fadeIn">
    <div class="mobile_list_menu">成功案例列表</div>
    <ul class="classLink">
    <li><a href="success_view.php" class="current unit_link">哥倫比亞大學</a></li>
      <li><a href="success_view_02.php" class="unit_link">多倫多大學</a></li>
      <li><a href="success_view_03.php" class="unit_link">華盛頓大學</a></li>
      <li><a href="success_view_04.php" class="unit_link">伊利諾大學</a></li>
      <li><a href="success_view_05.php" class="unit_link">紐約大學</a></li>
    </ul>
  </div>
  <!--classLink end-->
  <div class="inp-con">
    <section class="">
      <!--文字編輯器內容 user_editor-->
      <div class="suc wow fadeIn ">
        <div class="title">
        哥倫比亞大學
        </div>
        <div class="title-line">
          <span class="red"></span>
          <span class="blue"></span>
        </div>
        <div class="suc-des">
          轉科系 無相關背景 <br>
          也能成功進入哥倫比亞大學
          <div class="title-line02">
            <span class="red"></span>
            <span class="blue"></span>
          </div>
        </div>
        <div class="suc-bot">
          <div class="suc-pic">
            <img src="SRC/images/suc01.jpg" alt="">
          </div>
          <ul class="suc-table">
            <li>
              <div class="tit">學生姓名</div>
              <div class="con"> C.N., Wang</div>
            </li>
            <li>
              <div class="tit">成績分數</div>
              <div class="con">
                GPA: 3.06/4.0 <br>
                TOEFL: 免(在美國取得學士學位) <br>
                GRE: 318 <br>
              </div>
            </li>
            <li>
              <div class="tit">申請困境</div>
              <div class="con">跨領域、轉科系，卻沒有相關學經歷背景</div>
            </li>
            <li>
              <div class="tit">錄取學校</div>
              <div class="con">Columbia University哥倫比亞大學</div>
            </li>
            <li>
              <div class="tit">錄取科系</div>
              <div class="con">Counseling and Clinical Psychology 碩士班</div>
            </li>

          </ul>
          <div class="suc-qa">
            <div class="faq-box-all se1">
              <div class="qaBox">
                <div class="qa-title">
                  <div class="arrow">
                    <div class="arr_1"></div>
                    <div class="arr_2"></div>
                  </div>
                  請問你最終決定就讀的大學/研究所是哪間？
                </div>
                <ul class="qa-info">
                  <li>
                    全美綜合大學排名第三的 Columbia University哥倫比亞大學，Counseling and Clinical Psychology 碩士班。
                  </li>
                </ul>
              </div>
              <div class="qaBox">
                <div class="qa-title">
                  <div class="arrow">
                    <div class="arr_1"></div>
                    <div class="arr_2"></div>
                  </div>
                  申請學校過程中發現自己的弱項是什麼？
                </div>
                <ul class="qa-info">
                  <li>
                    我大學就讀UC-Santa Barbara， 念的專業是微生物系。畢業後決定勇敢的跨科申請研究所 追求自己更喜歡的專業 「臨床心理學」。大部分的人對我的決定有很大的疑問，因為沒有心理學背景 這樣申請研究所是非常有挑戰的。
                  </li>
                </ul>
              </div>
              <div class="qaBox">
                <div class="qa-title">
                  <div class="arrow">
                    <div class="arr_1"></div>
                    <div class="arr_2"></div>
                  </div>
                  EDU壹教育顧問如何包裝你的申請？
                </div>
                <ul class="qa-info">
                  <li>
                    這一次很開心能有緣份和顧問 Jeffrey 合作。第一次通話聊天到見面會談，我感受到 Jeffrey的熱誠和專業。因為過去有太多申請的經驗 我需要的是清楚與直接的建議和計畫。Jeffrey 毫不猶豫地分享他的做法和建議 令我非常驚訝的同時也很感動。考慮後決定讓 Jeffrey 顧問來幫助我繼續這趟求學之路。準備考試的幾個月裡Jeffrey很尊重我的時間與空間，並當我的後盾給我支持和鼓勵。討論的過程中猶如朋友般的親近和輕鬆 我們很像一個團隊。對我來說，最重要的是我感受到 Jeffrey 的信任，因為他們的相信，很累很辛苦也會一步一步的堅持下去。
                  </li>
                </ul>
              </div>
              <div class="qaBox">
                <div class="qa-title">
                  <div class="arrow">
                    <div class="arr_1"></div>
                    <div class="arr_2"></div>
                  </div>
                  給想出國的同學們的建議
                </div>
                <ul class="qa-info">
                  <li>
                    學弟妹們加油！不要怕有挑戰性的目標 要相信自己的能力並按部就班的努力。準備的過程中心念很重要 ，一切會有最好的安排。</li>
                </ul>
              </div>
            </div>
          </div>
        </div>


      </div>

      <!--//文字編輯器內容-->
    </section>
  </div>
</main>
<?php include('_foot.php') ?>

<!--  -->
<!-- <script>
    $(window).scroll(function() {
      if ($(document).scrollTop() > 100) {
        $('body').addClass('shrink');
      } else {
        $('body').removeClass('shrink');
      }
    });
  </script> -->
<!--  -->
<!-- 分類滑動 -->
<script>
  $(function() {

    var link = $('#navbar a.dot');

    // Move to specific section when click on menu link
    link.on('click', function(e) {
      var target = $($(this).attr('href'));
      $('html, body').animate({
        scrollTop: target.offset().top
      }, 0);
      $(this).addClass('active');
      e.preventDefault();
    });

    // Run the scrNav when scroll
    $(window).on('scroll', function() {
      scrNav();
    });

    // scrNav function 
    // Change active dot according to the active section in the window
    function scrNav() {
      var sTop = $(window).scrollTop();
      $('#wrap, section').each(function() {
        var id = $(this).attr('id'),
          offset = $(this).offset().top - 1,
          height = $(this).height();
        if (sTop >= offset && sTop < offset + height) {
          link.removeClass('active');
          $('#navbar').find('[data-scroll="' + id + '"]').addClass('active');
        }
      });
    }
    scrNav();
  });
</script>
<!-- 分類滑動 -->

<!-- 常見問題 -->
<script>
  $(function() {
    $("ul.qa-info").hide();
    $(".qa-title").click(function() {
      $("+ul", this).slideToggle();
      $(this).toggleClass("open");
    })
  });
</script>
<!-- 常見問題 -->

<!-- unit mobile menu -->
<script>
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