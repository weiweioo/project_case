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
    <section class="page-bot wow fadeIn">
      <!--core-->
      <div class="core-list">
        <div class="inpp-tt01">
          核心技術
        </div>
        <ul class="">

          <li class="hvr-shadow">
            <a href="core-view.php">
              <div class="core-tt02">
                環境監測組
              </div>
            </a>
          </li>
          <li class="hvr-shadow">
            <a href="core-view.php">
              <div class="core-tt02">
                水利工程組
              </div>
            </a>
          </li>
          <li class="hvr-shadow">
            <a href="core-view.php">
              <div class="core-tt02">
                災害防救組
              </div>
            </a>
          </li>
          <li class="hvr-shadow">
            <a href="core-view.php">
              <div class="core-tt02">
                空間資訊組
              </div>
            </a>
          </li>
          <li class="hvr-shadow">
            <a href="core-view.php">
              <div class="core-tt02">
                國土法政組
              </div>
            </a>
          </li>
        </ul>
      </div>

      <!--//core-->

  </div>
  </section>
</main>
<?php include('_foot.php') ?>

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