<?php include('_head.php') ?>
<link href="SRC/css/inner-page.css? <?= rand(0, 999) ?>20201104" rel="stylesheet" type="text/css" />


<main id="wrap">
  <div class="inp-banner">
    <img src="SRC/images/inp-banner01.jpg" alt="">
  </div>
  <!--classLink-->
  <div class="classBox">
    <div class="mobile_list_menu">實用工具列表</div>
    <ul class="classLink">
      <li><a href="utilit_grade.php" class="unit_link">成績加發</a></li>
      <li><a href="utilit_wes.php" class="unit_link">WES認證</a></li>
      <li><a href="utilit_norm.php" class="unit_link">兵役規範</a></li>
      <li><a href="utilit_visa.php" class="current unit_link">簽證相關</a></li>
    </ul>
  </div>
  <!--classLink end-->
  <div class="uti inp-con">
    <!--文字編輯器內容-->
    <div class="utibox01 uti-view user_editor">
      <div class="title">
        簽證相關
      </div>
      <div class="title-line">
        <span class="red"></span>
        <span class="blue"></span>
      </div>
      <section id="" class="">
        <div class="faq-box-all se1">
          <div class="qaBox">
            <div class="qa-title">              
              <div class="arrow">
                <div class="arr_1"></div>
                <div class="arr_2"></div>
              </div>
              美國學生簽證的辦理流程是？
            </div>
            <ul class="qa-info">
              <li>1.前往美國學生簽證網站<strong>Online Nonimmigrant Visa Application</strong>填寫DS-160。</li>
              <li>2.至美國在臺協會AIT官網申請<strong>「美國銀行代收美國在台協會簽證手續費郵局繳費單」</strong> 。</li>
              <li>3.持<strong>「美國銀行代收美國在台協會簽證手續費郵局繳費單」</strong> 至郵局繳交 <strong>160美金(約4960台幣)</strong> ，並將收據留存。</li>
              <li>4.繳費完成隔日下午即可持收據上之編號，至<strong>AIT網站預約簽證面談</strong> 。</li>
              <li>5.前往美國國安局I-901 Fee網站繳交<strong>SEVIS國土安全費350美金</strong>。</li>
              <li>6.於預約時間前往AIT進行面談，通過後二至三天可收到簽證。</li>
            </ul>
          </div>
          <div class="qaBox">
            <div class="qa-title">
              <div class="arrow">
                <div class="arr_1"></div>
                <div class="arr_2"></div>
              </div>
              申辦美國學生簽證所需費用?
            </div>
            <ul class="qa-info">
              <li>簽證費用：160美金 (約4960台幣)</li>
              <li>SEVIS美國國土安全費：350美金</li>
            </ul>
          </div>
          <div class="qaBox">
            <div class="qa-title">
              <div class="arrow">
                <div class="arr_1"></div>
                <div class="arr_2"></div>
              </div>
              何時可以申辦美國學生簽證？
            </div>
            <ul class="qa-info">
              <li>開課日前120天可辦理簽證。<br>
                開課日以I-20 (學校正式入學許可) 上Program Start Date為準。
              </li>
            </ul>
          </div>
          <div class="qaBox">
            <div class="qa-title">
              <div class="arrow">
                <div class="arr_1"></div>
                <div class="arr_2"></div>
              </div>
              何時能持美國學生簽證入境美國？
            </div>
            <ul class="qa-info">
              <li>開課日前30天可入境美國，最慢需於開課日前入境美國。<br>
                開課日以I-20 (學校正式入學許可) 上Program Start Date為準。
              </li>
            </ul>
          </div>
          <div class="qaBox">
            <div class="qa-title">
              <div class="arrow">
                <div class="arr_1"></div>
                <div class="arr_2"></div>
              </div>
              美國學生簽證的有效期限以及離美時間？
            </div>
            <ul class="qa-info">
              <li>美國學生簽證效期為五年。但是學生實際能在美國的停留時間是根據學校發給學生的I-20(學校正式入學許可)的有效期決定，只有I-20有效，學生簽證才有效力。
                學生於課程結束後，須在60天內離開美國。</li>
            </ul>
          </div>
          <div class="qaBox">
            <div class="qa-title">
              <div class="arrow">
                <div class="arr_1"></div>
                <div class="arr_2"></div>
              </div>
              美國學生簽證可轉換至不同學校續用嗎？
            </div>
            <ul class="qa-info">
              <li>離開美國超過五個月的學生，都需重新申辦美國學生簽證。</li>
              <li>離開美國不超過五個月、學生簽證仍在有效期內，且已重新取得另一所學校核發之I-20(學校正式入學許可)，<br>
                學生<strong>只需重新繳交SEVIS國土安全費350美金</strong>，即可入境美國。</li>
            </ul>
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
      //展開收合 
      // $("ul.qa-info").slideUp(); 
      //展開收合 
      $(".qa-title").removeClass("open");
      if ($("+ul", this).css("display") == "none") {
        $("+ul", this).slideDown();
        $(this).addClass("open");
      } else {
        $("+ul", this).slideUp();
        $(this).removeClass("open");
      }
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