<?php include('_head.php') ?>
<link href="SRC/css/inner-page.css? <?= rand(0, 999) ?>20201104" rel="stylesheet" type="text/css" />


<main id="wrap">
  <div class="inp-banner">
    <img src="SRC/images/inp-banner01.jpg" alt="">
  </div>
  <!--classLink-->
  <div class="classBox wow fadeIn">
    <div class="mobile_list_menu">留遊學Q&A</div>
    <ul class="classLink">
      <li><a href="study_abroad.php" class="unit_link">英國留學Q&A</a></li>
      <li><a href="study_tour.php" class="unit_link">英國遊學Q&A</a></li>
      <li><a href="ireland.php" class="current unit_link">愛爾蘭打工遊學Q&A</a></li>
    </ul>
  </div>
  <!--classLink end-->
  <div class="uti inp-con">
    <!--文字編輯器內容-->
    <div class="utibox01 uti-view user_editor">
      <div class="title">
        愛爾蘭打工遊學Q&A
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
              役男年齡(役齡)定義？
            </div>
            <ul class="qa-info">
              <li>役男年齡是指<strong>自19歲當年1月1日起至36歲當年12月31日止的期間</strong>。 <br>
                例如2000年出生者，於2019年1月1日起至2036年12月31日止即為役男年齡﹙2000+19=2019, 2000+36=2036﹚。</li>
            </ul>
          </div>
          <div class="qaBox">
            <div class="qa-title">
              <div class="arrow">
                <div class="arr_1"></div>
                <div class="arr_2"></div>
              </div>
              役齡前出境就學規定？
            </div>
            <ul class="qa-info">
              <li><strong>18歲之年12月31日以前</strong>男子之出境不受管制，不需申請核准即可出國就讀。</li>
            </ul>
          </div>
          <div class="qaBox">
            <div class="qa-title">
              <div class="arrow">
                <div class="arr_1"></div>
                <div class="arr_2"></div>
              </div>
              役齡男子可以出國就學嗎？
            </div>
            <ul class="qa-info">
              <li><strong>19歲之年1月1日以後之役男(包含未服役之大專院校畢業生)，</strong><br>
                符合國外就讀學歷及就學最高年齡(大學以下學歷24歲前、碩士學位27歲前或博士學位30歲前)，<br>
                取得國外學校入學許可者，得申請核准出境就學。</li>
            </ul>
          </div>
          <div class="qaBox">
            <div class="qa-title">
              <div class="arrow">
                <div class="arr_1"></div>
                <div class="arr_2"></div>
              </div>
              役齡男子出國就學，需要準備哪些文件？在哪申辦？
            </div>
            <ul class="qa-info">
              <li><strong>役男可持國外高中以上，包含大學、碩士、博士班或是語言學校之正式入學許可和護照正本，</strong> <br>
                於開學前三個內，向各縣市移民署服務站辦理出國就學。</li>
            </ul>
          </div>
          <div class="qaBox">
            <div class="qa-title">
              <div class="arrow">
                <div class="arr_1"></div>
                <div class="arr_2"></div>
              </div>
              如何與內政部役政署聯繫，確認役男出國就學事項？
            </div>
            <ul class="qa-info">
              <li>內政部服務專線：1996<br>
                內政部LINE: @wrt8612u
              </li>
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