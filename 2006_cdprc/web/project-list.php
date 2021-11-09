<?php include('_head.php') ?>
<link href="SRC/css/inner-page.css?<?= rand(0, 999) ?>20201012" rel="stylesheet" type="text/css">

<!--banner-->
<section class="index-banner">
  <ul class="index-banner-slick">
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
    <div class="item">
      <figcaption class="caption">
        <h2><a href="core-view.php">水利科技組</a></h2>
      </figcaption>
      <div class="slide_img for_PC" style="background-image: url('SRC/images/banner07.jpg')"></div>
      <div class="slide_img for_mobile" style="background-image: url('SRC/images/mb-banner07.jpg')"></div>
    </div>
  </ul>
</section>
<!--//banner-->
<main class="in-page">
  <div class="content">
    <div class="page-top wow fadeIn">
      <div class="inp-tt01">
        <a href="project-list.php">
          <div class="ch">專案實績</div>
          <div class="en">PROJECT</div>
        </a>
        <div class="tt-line pj"></div>
      </div>
    </div>
    <section class="page-bot wow fadeIn">
      <!--project-->
      <div class="project-list">
        <div class="inpp-tt01">
          委辦計畫
        </div>
        <ul class="">
          <li class="hvr-shadow">
            <a href="project-view.php">
              <div class="pro-tt02">
                109年度
              </div>
            </a>
          </li>
          <li class="hvr-shadow">
            <a href="project-view.php">
              <div class="pro-tt02">
              108年度
              </div>
            </a>
          </li>
          <li class="hvr-shadow">
            <a href="project-view.php">
              <div class="pro-tt02">
              107年度
              </div>
            </a>
          </li>
          <li class="hvr-shadow">
            <a href="project-view.php">
              <div class="pro-tt02">
              106年度
              </div>
            </a>
          </li>
          <li class="hvr-shadow">
            <a href="project-view.php">
              <div class="pro-tt02">
              105年度
              </div>
            </a>
          </li>
          <li class="hvr-shadow">
            <a href="project-view.php">
              <div class="pro-tt02">
              104年度
              </div>
            </a>
          </li>
        </ul>
      </div>

      <!--//project-->

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