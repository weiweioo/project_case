<?php include('_head.php') ?>
<link href="SRC/css/inner-page.css?<?= rand(0, 999) ?>20201012" rel="stylesheet" type="text/css">
<!--banner-->
<section class="index-banner inp">
  <ul class="index-banner-slick">
    <div class="item">
      <div class="slide_img" style="background-image: url('SRC/images/inp_banner06.jpg')"></div>
    </div>
  </ul>
</section>
<!--//banner-->
<main class="in-page">
  <div class="content">
    <div class="page-top wow fadeIn">
      <div class="inp-tt01">
        <a href="recruit-list.php">
          <div class="ch">徵才公告</div>
          <div class="en">recruit</div>
        </a>
      </div>
      <div class="tt-line"></div>
    </div>
    <!--recruit-->
    <section class="page-bot wow fadeIn">
      <div class="recruit-list">
        <div class="inpp-tt01">
        徵才公告
        </div>
        <ul>
          <?php for ($i = 0; $i < 10; $i++) {  ?>
            <li class="">
              <a class="recruit-box" href="recruit-view.php">
                <div class="recruit-type">
                  水土保育組
                </div>
                <div class="recruit-tt02">
                行政美編人員
                </div>
              </a>
            </li>
          <?php } ?>
        </ul>
        <div class="page" style="margin-top: 30px;">
          <a href="javascript: void(0)">&lt;</a>
          <a href="#?page=1" class="current">1</a>
          <a href="#?page=2">2</a>
          <a href="#?page=3">3</a>
          <a href="#?page=4">4</a>
          <a href="#?page=5">5</a>
          <a href="#?page=6">6</a>
          <a href="javascript: void(0)">&gt;</a>
        </div>
      </div>
  </div>
  </section>
  <!--//recruit-->
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

<script>
  $('[data-fancybox]').fancybox({

  });
</script>