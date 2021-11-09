<?php include('_head.php') ?>
<link href="SRC/css/inner-page.css?<?= rand(0, 999) ?>20201012" rel="stylesheet" type="text/css">
<!--banner-->
<section class="index-banner inp">
  <ul class="index-banner-slick">
    <div class="item">
      <div class="slide_img" style="background-image: url('SRC/images/inp_banner05.jpg')"></div>
    </div>
  </ul>
</section>
<!--//banner-->
<main class="in-page">
  <div class="content">
    <div class="page-top wow fadeIn">
      <div class="inp-tt01">
        <a href="registration-list.php">
          <div class="ch">線上報名</div>
          <div class="en">REGISTRATION</div>
        </a>
        <div class="tt-line"></div>
      </div>
    </div>
    <!--sign-->
    <section class="page-bot wow fadeIn">
      <div class="sign-list-group">
        <div class="inpp-tt01">
          水土保育組
        </div>
        <div class="section-top">
          <div class="search">
            <form id="search">
              <input type="search" placeholder="Search">
            </form>
          </div>
        </div>
        <ul>
          <li>
            <a href="registration-list.php">
              <div class="sign-tt01">
                課程/營隊
              </div>
            </a>
          </li>
          <li>
            <a href="registration-list.php">
              <div class="sign-tt01">
               學術演講
              </div>
            </a>
          </li>
        </ul>
      </div>
    </section>
    <!--//sign-->
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