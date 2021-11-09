<?php include('_head.php') ?>
<link href="SRC/css/inner-page.css? <?= rand(0, 999) ?>20201104" rel="stylesheet" type="text/css" />


<main>
  <div class="inp-banner">
    <img src="SRC/images/inp-banner01.jpg" alt="">
  </div>
  <div class="inp-con">
    <section class="contact-list">
      <div class="title">
        落點分析/預約諮詢
      </div>
      <div class="title-line">
        <span class="red"></span>
        <span class="blue"></span>
      </div>
      <ul>
        <li class="">
          <a href="tel:02-2771-1027">
            <div class="contact-box">
              <figure class="effect-bubba">
                <img src="SRC/images/contact01.jpg" alt="">
                <figcaption>
                  <h2>電話諮詢</h2>
                </figcaption>
              </figure>
            </div>
          </a>
        </li>
        <li class="">
          <a href="contact_view.php">
            <div class="contact-box">
              <figure class="effect-bubba">
                <img src="SRC/images/contact02.jpg" alt="">
                <figcaption>
                  <h2>線上預約</h2>
                </figcaption>
              </figure>
            </div>
          </a>
        </li>
      </ul>
    </section>
  </div>

</main>
<?php include('_foot.php') ?>