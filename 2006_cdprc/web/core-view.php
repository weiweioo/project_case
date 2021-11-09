<?php include('_head.php') ?>
<link href="SRC/css/inner-page.css?<?= rand(0, 999) ?>20201012" rel="stylesheet" type="text/css">
<!--banner-->
<section class="index-banner">
  <ul class="index-banner-slick">
    <div class="item">
      <figcaption class="caption">
        <h2><a href="core-view.php">水利科技組</a></h2>
      </figcaption>
      <div class="slide_img for_PC" style="background-image: url('SRC/images/banner04.jpg')"></div>
      <div class="slide_img for_mobile" style="background-image: url('SRC/images/mb-banner04.jpg')"></div>
    </div>
    <div class="item">
      <figcaption class="caption">
        <h2><a href="core-view.php">水利科技組</a></h2>
      </figcaption>
      <div class="slide_img for_PC" style="background-image: url('SRC/images/banner05.jpg')"></div>
      <div class="slide_img for_mobile" style="background-image: url('SRC/images/mb-banner05.jpg')"></div>
    </div>
    <div class="item">
      <figcaption class="caption">
        <h2><a href="core-view.php">水利科技組</a></h2>
      </figcaption>
      <div class="slide_img for_PC" style="background-image: url('SRC/images/banner06.jpg')"></div>
      <div class="slide_img for_mobile" style="background-image: url('SRC/images/mb-banner06.jpg')"></div>
    </div>
  </ul>
</section>
<!--//banner-->
<main class="in-page">
  <div class="content">
    <div class="page-top wow fadeIn">
      <div class="inp-tt01">
        <a href="core-list.php">
          <div class="ch">專業服務</div>
          <div class="en">servises</div>
        </a>
      </div>
      <div class="tt-line"></div>
      <!--classLink-->
      <section class="classBox ">
        <ul class="classLink">
          <li><a class="current" href="core-list.php">核心技術</a></li>
          <li><a class="hvr-underline-from-center" href="service-list-year.php">課程營隊</a></li>
          <li><a class="hvr-underline-from-center" href="service02-list-year.php">學術活動</a></li>
        </ul>
      </section>
      <!--classLink end-->
    </div>
    <!--core-->
    <section class="page-bot wow fadeIn">
      <div class="core">
        <div class="inpp-tt01">
          核心技術-災害防救領域
        </div>
        <div class="inpp-tt02-2">
          智慧決策支援系統開發
        </div>
        <div class="inpp-tt03">
          技術聯絡人：
        </div>
        <div class="inpp-p" style="font-weight: 600;">
          <a href="mailto:cdprc@gmail.com">組長-連惠邦</a>
        </div>
        <div class="inpp-tt03">
          說明：
        </div>
        <div class="inpp-p">
          <p>考量河川水量與水質之交互影響，探討水庫堰壩操作規則對於下游河川生態環境與人類用水之衝擊</p>
        </div>

        <div class="inpp-tt03">
          相關圖片：
        </div>
        <div class="core-pic">
          <img src="SRC/images/core-01.jpg" alt="">
        </div>
      
        <div class="core-bot-box">
          <ul class="tabs">
            <li class="active"><a href="#tab1">105年度</a></li>
            <li><a href="#tab2">106年度</a></li>
            <li><a href="#tab3">107年度</a></li>
            <li><a href="#tab4">108年度</a></li>
            <li><a href="#tab5">109年度</a></li>
          </ul>
          <div class="tab_container">
            <div id="tab1" class="tab_content">
              <div class="user_editor line-height">
                <ul>
                  <li><a target="_blank" href="SRC/pdf/word01.pdf">108年度花蓮縣南區等集水區農塘盤點調查、評估與規劃</a></li>
                  <li><a target="_blank" href="SRC/images/ser-view-01.jpg">中苗地區重要水庫集水區農塘保水優化及農塘活化計畫</a></li>
                  <li><a target="_blank" href="SRC/pdf/word01.pdf">竹桃北地區穩定供水與減災綜合策略研究與成效評估-子計畫新型態乾旱預警技術與應變決策系統研究</a></li>
                  <li><a target="_blank" href="SRC/images/ser-view-01.jpg">108年度花蓮縣南區等集水區農塘盤點調查、評估與規劃</a></li>
                </ul>
              </div>
            </div>
            <div id="tab2" class="tab_content">
              <div class="user_editor line-height">
                <div class="tab-tit">
                  活動內容2
                </div>
              </div>
            </div>
            <div id="tab3" class="tab_content">
              <div class="user_editor line-height">
                <div class="tab-tit">
                  活動內容3
                </div>
              </div>
            </div>
            <div id="tab4" class="tab_content">
              <div class="user_editor line-height">
                <div class="tab-tit">
                  活動內容4
                </div>
              </div>
            </div>
            <div id="tab5" class="tab_content">
              <div class="user_editor line-height">
                <div class="tab-tit">
                  活動內容5
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="back-to">
        <a class="back" href="javascript:history.back()">回上一頁</a>
      </div>
  </div>
  </section>
  <!--//core-->
  </div>

</main>
<?php include('_foot.php') ?>

<script>
  $(document).ready(function() {
    // SUB MENU
    $('.sub-title').click(function() {
      // change icon
      $(this).toggleClass('active')
        .parent().siblings().children('.sub-title').removeClass('active');
      // open sub menu
      $(this).next('.sub-links').slideToggle(400)
        .parent().siblings().children('.sub-links').slideUp();
    });
    // Keep current submenu opened
    $('.sub-title').each(function() {
      if ($(this).hasClass('active')) {
        $(this).next('.sub-links').css('display', 'block');
      };
    });
  });
</script>

<script type="text/javascript">
  $(function() {
    // 預設顯示第一個 Tab
    var _showTab = 0;
    var $defaultLi = $('ul.tabs li').eq(_showTab).addClass('active');
    $($defaultLi.find('a').attr('href')).siblings().hide();

    // 當 li 頁籤被點擊時...
    // 若要改成滑鼠移到 li 頁籤就切換時, 把 click 改成 mouseover
    $('ul.tabs li').click(function() {
      // 找出 li 中的超連結 href(#id)
      var $this = $(this),
        _clickTab = $this.find('a').attr('href');
      // 把目前點擊到的 li 頁籤加上 .active
      // 並把兄弟元素中有 .active 的都移除 class
      $this.addClass('active').siblings('.active').removeClass('active');
      // 淡入相對應的內容並隱藏兄弟元素
      $(_clickTab).stop(false, true).fadeIn().siblings().hide();

      return false;
    }).find('a').focus(function() {
      this.blur();
    });
  });
</script>

<script>
  $('.index-banner-slick').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: true,
    fade: true,
    pauseOnHover: false,
    autoplay: true,
    autoplaySpeed: 5000,
  });
</script>