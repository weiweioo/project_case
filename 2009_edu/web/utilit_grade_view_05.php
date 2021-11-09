<?php include('_head.php') ?>
<link href="SRC/css/inner-page.css? <?= rand(0, 999) ?>20201104" rel="stylesheet" type="text/css" />


<main id="wrap">
  <div class="inp-banner">
    <img src="SRC/images/inp-banner01.jpg" alt="">
  </div>
  <!--classLink-->
  <div class="classBox wow fadeIn">
    <div class="mobile_list_menu">成績加發列表</div>
    <ul class="classLink">
      <li><a href="utilit_grade_view.php" class="unit_link">TOEFL</a></li>
      <li><a href="utilit_grade_view_02.php" class="unit_link">IELTS(IDP)</a></li>
      <li><a href="utilit_grade_view_03.php" class="unit_link">IELTS(BC)</a></li>
      <li><a href="utilit_grade_view_04.php" class="unit_link">GRE</a></li>
      <li><a href="utilit_grade_view_05.php" class="unit_link">GMAT</a></li>
      <li><a href="utilit_grade_view_06.php" class="unit_link">SAT</a></li>
    </ul>
  </div>
  <!--classLink end-->
  <div class="inp-con uti">
    <!--文字編輯器內容-->
    <div class="utibox01 gv uti-view wow fadeIn user_editor">
      <div class="title">
      GMAT加發
      </div>
      <div class="title-line">
        <span class="red"></span>
        <span class="blue"></span>
      </div>
      <div class="inp-tt02">
        常見問題
        <div class="title-line02">
          <span class="red"></span>
          <span class="blue"></span>
        </div>
      </div>
      <div class="faq-box-all se1">
        <div class="qaBox">
          <div class="qa-title">
            <div class="arrow">
              <div class="arr_1"></div>
              <div class="arr_2"></div>
            </div>
            GMAT考試費用?
          </div>
          <ul class="qa-info">
            <li>GMAT報名費為250美金。</li>
          </ul>
        </div>
        <div class="qaBox">
          <div class="qa-title">
            <div class="arrow">
              <div class="arr_1"></div>
              <div class="arr_2"></div>
            </div>
            考後多久會知道成績?
          </div>
          <ul class="qa-info">
            <li>當天考試結束後在電腦螢幕上可立即看到非正式的分數 (不含AWA寫作)。</li>
            <li>正式成績 (含AWA寫作) 考後三週左右會以 email 方式寄發給學生。</li>
          </ul>
        </div>
        <div class="qaBox">
          <div class="qa-title">
            <div class="arrow">
              <div class="arr_1"></div>
              <div class="arr_2"></div>
            </div>
            GMAT成績加發費用?
          </div>
          <ul class="qa-info">
            <li>加發費用為35美金/每間學校。</li>
          </ul>
        </div>
        <div class="qaBox">
          <div class="qa-title">
            <div class="arrow">
              <div class="arr_1"></div>
              <div class="arr_2"></div>
            </div>
            學校何時會收到加發的GMAT成績？
          </div>
          <ul class="qa-info">
            <li>加發成績後，學校約兩星期後會收到。</li>
          </ul>
        </div>
      </div>
      <section>
        <div class="inp-tt02 gv">
        GMAT加發流程
          <div class="title-line02 gv">
          <span class="red"></span>
          <span class="blue"></span>
        </div>
        </div>
        
        <div class="step-all-box uti-view-step">
          <div class="step-box wow fadeInUp">
            <div class="step-num">
              STEP 1
            </div>
            <div class="des">
            進入GMAT官方網站<a href="https://www.mba.com/" target="_blank">https://www.mba.com/</a>點選右上方Log in 登錄
            </div>
            <div class="step-pic">
              <a href="SRC/images/uti-gmat01.jpg" data-lightbox="image-1">
                <img src="SRC/images/uti-gmat01.jpg" alt="">
              </a>
            </div>
          </div>
          <div class="step-box wow fadeInUp">
            <div class="step-num">
              STEP 2
            </div>
            <div class="des">
            點選右上角My Account 選取 Order School Report
            </div>
            <div class="step-pic">
              <a href="SRC/images/uti-gmat02.jpg" data-lightbox="image-2">
                <img src="SRC/images/uti-gmat02.jpg" alt="">
              </a>
            </div>
          </div>
          <div class="step-box wow fadeInUp">
            <div class="step-num">
              STEP 3
            </div>
            <div class="des">
            輸入學校名稱或學校代碼，將學校加入成績加發名單內
            </div>
            <div class="step-pic">
              <a href="SRC/images/uti-gmat03.jpg" data-lightbox="image-3">
                <img src="SRC/images/uti-gmat03.jpg" alt="">
              </a>
            </div>
          </div>
          <div class="step-box wow fadeInUp">
            <div class="step-num">
              STEP 4
            </div>
            <div class="des">
            增加完成後即可進入付款程序，付款完成可在主頁看見加發紀錄
            </div>
            <div class="step-pic">
              <a href="SRC/images/uti-gmat04.jpg"data-lightbox="image-4">
                <img src="SRC/images/uti-gmat04.jpg" alt="">
              </a>
            </div>
          </div>
        </div>
      </section>
    </div>
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
      }, 800);
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