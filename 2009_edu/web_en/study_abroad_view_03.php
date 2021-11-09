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
      <li><a href="study_abroad_view.php" class="unit_link">英國碩士</a></li>
      <li><a href="study_abroad_view_02.php" class="unit_link">英國學士</a></li>
      <li><a href="study_abroad_view_03.php" class="current unit_link">英國中學</a></li>
    </ul>
  </div>
  <!--classLink end-->
  <div class="inp-con uti">
    <!--文字編輯器內容-->
    <div class="utibox01 gv uti-view wow fadeIn user_editor">
      <div class="title">
      英國中學
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
            IELTS考試費用?
          </div>
          <ul class="qa-info">
            <li>IELTS報名費為7200台幣。</li>
          </ul>
        </div>
        <div class="qaBox">
          <div class="qa-title">
            <div class="arrow">
              <div class="arr_1"></div>
              <div class="arr_2"></div>
            </div>
            考後多久會收到成績單，何時可上網查詢?
          </div>
          <ul class="qa-info">
            <li>如果考IELTS紙筆考試，可於考後13天在官網上查詢成績，考試機構也會將成績單郵寄至報名表格上所填寫的地址。</li>
            <li>如果考IELTS電腦考試，可於考後3-5天在官網上查詢成績，考試機構也會將成績單郵寄至報名表格上所填寫的地址。</li>
          </ul>
        </div>
        <div class="qaBox">
          <div class="qa-title">
            <div class="arrow">
              <div class="arr_1"></div>
              <div class="arr_2"></div>
            </div>
            IELTS考試加發機構？
          </div>
          <ul class="qa-info">
            <li>IELTS的主辦考試機構有兩個：British Council (BC) 或 IDP。</li>
            <li>British Council (BC) 以及 IDP的加發方式不同，請見成績單下方Centre Stamp，確認你的考試機構。</li>
            <li>
              <a href="SRC/images/uti-bc01.jpg" data-lightbox="image-0">
                <img src="SRC/images/uti-bc01.jpg" alt="">
              </a>
            </li>
          </ul>
        </div>
      </div>
      <section>
        <div class="inp-tt02 gv">
        British Council(BC)加發流程
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
            登錄British Council(BC)個人帳號：
              <a href="https://tw.ieltsasia.org/index.php?action=login" target="_blank">https://tw.ieltsasia.org/index.php?action=login</a>
            </div>
            <div class="step-pic">
              <a href="SRC/images/uti-bc02.jpg" data-lightbox="image-1">
                <img src="SRC/images/uti-bc02.jpg" alt="">
              </a>
            </div>
          </div>
          <div class="step-box wow fadeInUp">
            <div class="step-num">
              STEP 2
            </div>
            <div class="des">
            選擇欲加發之IELTS成績於<strong>「報考記錄」</strong> 區塊，在左下方點選 <strong>「預覽訂單明細」</strong> 查看成績，並在右下方點選 <strong>「額外成績單申請」</strong> ，選定要加發的考試成績。
            </div>
            <div class="step-pic">
              <a href="SRC/images/uti-bc03.jpg" data-lightbox="image-2">
                <img src="SRC/images/uti-bc03.jpg" alt="">
              </a>
            </div>
          </div>
          <div class="step-box wow fadeInUp">
            <div class="step-num">
              STEP 3
            </div>
            <div class="des">
            填寫要加發的學校資訊。<br> 
            如要增加加發的學校，請點選「+增加地址」，新增加發的學校資訊。
            </div>
            <div class="step-pic">
              <a href="SRC/images/uti-bc04.jpg"data-lightbox="image-3">
                <img src="SRC/images/uti-bc04.jpg" alt="">
              </a>
            </div>
          </div>
          <div class="step-box wow fadeInUp">
            <div class="step-num">
              STEP 4
            </div>
            <div class="des">
            線上繳付加發費用，完成加發流程
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