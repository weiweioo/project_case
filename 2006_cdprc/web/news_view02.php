<?php include('_head.php') ?>
<link href="SRC/css/inner-page.css?<?= rand(0, 999) ?>20201012" rel="stylesheet" type="text/css">

<!--banner-->
<section class="index-banner inp">
  <ul class="index-banner-slick">
    <div class="item">
      <div class="slide_img" style="background-image: url('SRC/images/inp_banner02.jpg')"></div>
    </div>
  </ul>
</section>
<!--//banner-->
<main class="in-page">
  <div class="content">
    <div class="page-top-view wow fadeIn">
      <div class="inpv-tt01">
        <div class="inpv-type">
          <a href="news_list02.php">防災科技組</a>
        </div>
        <div class="inpv-date">
          2019-09-23
        </div>
      </div>
      <div class="inpv-tt02">
      2020臺灣燈會緊急應變演練
        <div class="tt-line"></div>
      </div>

    </div>
    <section class="page-bot-view wow fadeIn">
      <!--news-con-->
      <div class="user_editor">
        <div class="vid-box">
          <div class="video">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/bfFAccmh6jQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="vid-txt">
            <p>
              2020臺灣燈會緊急應變演練暨臺中市109年災害防救演習兵棋推演
            </p>
          </div>
        </div>
      </div>
      <!--//news-con-->
      <div class="back-to">
        <a class="back" href="javascript:history.back()">回上一頁</a>
      </div>
    </section>
  </div>

</main>
<?php include('_foot.php') ?>