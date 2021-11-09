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
      <li><a href="success_view.php" class="unit_link">哥倫比亞大學</a></li>
      <li><a href="success_view_02.php" class="unit_link">多倫多大學</a></li>
      <li><a href="success_view_03.php" class="unit_link">華盛頓大學</a></li>
      <li><a href="success_view_04.php" class="unit_link">伊利諾大學—香檳分校</a></li>
      <li><a href="success_view_05.php" class="unit_link">紐約大學</a></li>
    </ul>
  </div>
  <!--classLink end-->
  <div class="inp-con">
    <section class="">
      <!--文字編輯器內容 user_editor-->
      <div class="suc wow fadeIn ">
        <div class="title">
        紐約大學
        </div>
        <div class="title-line">
          <span class="red"></span>
          <span class="blue"></span>
        </div>
        <div class="suc-des">
          截止日期迫在眉睫<br>
          千鈞一髮進入紐約大學
          <div class="title-line02">
            <span class="red"></span>
            <span class="blue"></span>
          </div>
        </div>
        <div class="suc-bot">
          <div class="suc-pic">
            <img src="SRC/images/suc05.jpg" alt="">
          </div>
          <ul class="suc-table">
            <li>
              <div class="tit">學生姓名</div>
              <div class="con">T.Y., Liu</div>
            </li>
            <li>
              <div class="tit">成績分數</div>
              <div class="con">
                GPA：73.5/100<br>
                TOEFL：84<br>
                GMAT：510 <br>
              </div>
            </li>
            <li>
              <div class="tit">申請困境</div>
              <div class="con">申請時間太晚，截止日期迫在眉睫</div>
            </li>
            <li>
              <div class="tit">錄取學校</div>
              <div class="con">New York University 紐約大學</div>
            </li>
            <li>
              <div class="tit">錄取科系</div>
              <div class="con">MS in Public Relations and Corporate Communication</div>
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
                  全美綜合大學排名30的New York University紐約大學，Public Relations and Corporate Communication碩士班。
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
                  一般大家都從十一月就開始送出申請了，但我是年底了才要開始準備，其實是很趕，但顧問Jeffrey，真的幫助了我完成計畫，讓我進了紐約大學NYU，超級感謝!
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
                  顧問有豐富的經驗，在第一次見面時就給予了我很多的建議，也分析了我申請的現況。從一開始決定要申請學校名單時，我們就反覆的討論，找到學校的申請期限與條件，以及我自身的條件與期望都符合的學校。申請過程中，顧問都會很詳盡地引導，最感謝的是準備期間還適逢大過年，但顧問放假期間還是抽空協助我改稿並幫我翻譯趕件。
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
                  顧問團隊很貼心地幫我檢查申請細節並且與我隨時更新進度。他們是我在申請時很信任很棒的後援!! 若不是他們的幫助，我不敢想像我竟然可以進我最想要去的學校!</li>
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