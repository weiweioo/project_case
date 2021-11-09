<?php include('_head.php') ?>
<link href="SRC/css/inner-page.css? <?= rand(0, 999) ?>20201104" rel="stylesheet" type="text/css" />


<main id="wrap">
  <div class="inp-banner">
    <img src="SRC/images/inp-banner01.jpg" alt="">
  </div>
  <!--classLink-->
  <div class="classBox wow fadeIn">
    <div class="mobile_list_menu">英國留學Q&A</div>
    <ul class="classLink">
      <li><a href="study_abroad_view.php" class="current unit_link">英國碩士</a></li>
      <li><a href="study_abroad_view_02.php" class="unit_link">英國學士</a></li>
      <li><a href="study_abroad_view_03.php" class="unit_link">英國中學</a></li>
    </ul>
  </div>
  <!--classLink end-->
  <div class="inp-con uti">
    <!--文字編輯器內容-->
    <div class="utibox01 gv uti-view wow fadeIn user_editor">
      <div class="title">
        英國碩士
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
            TOEFL iBT考試費用？
          </div>
          <ul class="qa-info">
            <li>TOEFL iBT 考試報名費為210美金。</li>
          </ul>
        </div>
        <div class="qaBox">
          <div class="qa-title">
            <div class="arrow">
              <div class="arr_1"></div>
              <div class="arr_2"></div>
            </div>
            考後多久會收到成績單，何時可上網查詢？
          </div>
          <ul class="qa-info">
            <li>考試後約10天，學生可在ETS個人帳戶內查看分數並選擇加發成績。</li>
            <li>如在報名考試時，學生已在帳戶勾「Online score report AND a paper copy mailed to you (需要電子以及紙本成績單)」<br> 將會在大約一個月左右收到紙本成績單。</li>
          </ul>
        </div>
        <div class="qaBox">
          <div class="qa-title">
            <div class="arrow">
              <div class="arr_1"></div>
              <div class="arr_2"></div>
            </div>
            TOEFL iBT成績加發費用？
          </div>
          <ul class="qa-info">
            <li>加發費用為20美金/每間學校。</li>
          </ul>
        </div>
        <div class="qaBox">
          <div class="qa-title">
            <div class="arrow">
              <div class="arr_1"></div>
              <div class="arr_2"></div>
            </div>
            學校何時會收到加發的TOEFL iBT成績？
          </div>
          <ul class="qa-info">
            <li>加發成績後，學校約一星期後會收到。</li>
          </ul>
        </div>
      </div>
      <section>
        <div class="inp-tt02 gv">
        TOEFL加發流程
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
              登錄TOEFL官方網站
              <a href="https://v2.ereg.ets.org/ereg/public/jump?_p=TEL" target="_blank">https://www.ets.org/toefl</a>
            </div>
            <div class="step-pic">
              <a href="SRC/images/uti-tofel01.jpg" data-lightbox="image-1">
                <img src="SRC/images/uti-tofel01.jpg" alt="">
              </a>
            </div>
          </div>
          <div class="step-box wow fadeInUp">
            <div class="step-num">
              STEP 2
            </div>
            <div class="des">
              點選Send Additional Score Reports
            </div>
            <div class="step-pic">
              <a href="SRC/images/uti-tofel02.jpg"data-lightbox="image-2">
                <img src="SRC/images/uti-tofel02.jpg" alt="">
              </a>
            </div>
          </div>
          <div class="step-box wow fadeInUp">
            <div class="step-num">
              STEP 3
            </div>
            <div class="des">
              選擇成績最高之分數 <br>
              並輸入學校名稱或學校代碼，將學校加入成績加發名單內
            </div>
            <div class="step-pic">
              <a href="SRC/images/uti-tofel03.jpg" data-lightbox="image-3">
                <img src="SRC/images/uti-tofel03.jpg" alt="">
              </a>
            </div>
          </div>
          <div class="step-box wow fadeInUp">
            <div class="step-num">
              STEP 4
            </div>
            <div class="des">
              選擇欲加發之科系<br>
              若找不到自己的科系請選擇99-For any other department not on list
            </div>
            <div class="step-pic">
              <a href="SRC/images/uti-tofel04.jpg" data-lightbox="image-4">
                <img src="SRC/images/uti-tofel04.jpg" alt="">
              </a>
            </div>
          </div>
          <div class="step-box wow fadeInUp">
            <div class="step-num">
              STEP 5
            </div>
            <div class="des">
              線上繳付加發費用<br>
              付款完成可在主頁點選 View My Orders 查詢加發紀錄
            </div>
            <div class="step-pic">
              <a href="SRC/images/uti-tofel05.jpg" data-lightbox="image-3">
                <img src="SRC/images/uti-tofel05.jpg" alt="">
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