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
      <li><a href="success_view_03.php" class="current unit_link">華盛頓大學</a></li>
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
        華盛頓大學
        </div>
        <div class="title-line">
          <span class="red"></span>
          <span class="blue"></span>
        </div>
        <div class="suc-des">
          考試成績全未達標 <br>
          依然進入全美#10華盛頓大學
          <div class="title-line02">
            <span class="red"></span>
            <span class="blue"></span>
          </div>
        </div>
        <div class="suc-bot">
          <div class="suc-pic">
            <img src="SRC/images/suc03.jpg" alt="">
          </div>
          <ul class="suc-table">
            <li>
              <div class="tit">學生姓名</div>
              <div class="con">C.F, Lin</div>
            </li>
            <li>
              <div class="tit">成績分數</div>
              <div class="con">
                GPA：3.76/4.3<br>
                TOEFL：82<br>
                GMAT：510 <br>
              </div>
            </li>
            <li>
              <div class="tit">申請困境</div>
              <div class="con">TOEFL/GMAT都未達到學校基本入學門檻要求</div>
            </li>
            <li>
              <div class="tit">錄取學校</div>
              <div class="con">University of Washington 華盛頓大學</div>
            </li>
            <li>
              <div class="tit">錄取科系</div>
              <div class="con">Master of Professional Accounting</div>
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
                  University of Washington 華盛頓大學，全美最佳綜合大學排名10，Accounting專業排名全美第19。
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
                  以University of Washington的招生標準來看，GMAT至少要650以上才有機會；而TOEFL成績，學校官網建議要有92分以上才算是有競爭力的申請人。兩項成績我都未能滿足學校要求。
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
                  顧問跟我說，美國大學評比學生看得不光是成績，還有其他指標，包含：人格特質、課外活動參與、實習/工作經驗等多元面向 綜合評鑑。協助我從推薦信、讀書計畫方面展現優勢，讓學校進一步瞭解我過去的學經歷背景，知道我是適合該校的學生，且能帶給學校怎樣的貢獻，以具體、且避免自賣自誇的方式提升文件的公信力，果然成功進入我最想進學校─華盛頓大學！
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
                  當時考試一直無法達到理想成績，讓我很灰心。沒想到文件包裝的作用這麼大，讓我能夠突破學校成績門檻限制進入心目中第一名的學校就讀。找代辦不只是跑流程而已，最重要的是，好的顧問能協助把文件大大加分，讓不可能變成可能！再次感謝你們的幫忙！</li>
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