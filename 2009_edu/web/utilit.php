<?php include('_head.php') ?>
<link href="SRC/css/inner-page.css? <?= rand(0, 999) ?>20201104" rel="stylesheet" type="text/css" />


<main>
  <div class="inp-banner">
    <img src="SRC/images/inp-banner01.jpg" alt="">
  </div>
  <!--classLink-->
  <div class="classBox wow fadeIn">
    <div class="mobile_list_menu">實用工具列表</div>
    <ul class="classLink">
      <li><a href="utilit_grade.php" class="unit_link">成績加發</a></li>
      <li><a href="utilit_wes.php" class="unit_link">WES認證</a></li>
      <li><a href="utilit_norm.php" class="unit_link">兵役規範</a></li>
      <li><a href="utilit_visa.php" class="unit_link">簽證相關</a></li>
    </ul>
  </div>
  <!--classLink end-->
  <div class="inp-con">
    <section class="uti-list uti">
      <div class="title">
        留遊學實用工具
      </div>
      <div class="title-line">
        <span class="red"></span>
        <span class="blue"></span>
      </div>
      <ul>
        <li class="wow fadeInUp">
          <a href="utilit_grade.php">
            <div class="uti-box">
              <figure class="effect-julia">
                <img src="SRC/images/uti01.jpg" alt="">
                <figcaption>
                  <h2>成績加發</h2>
                </figcaption>
              </figure>
            </div>
          </a>
        </li>
        <li class="wow fadeInUp">
          <a href="utilit_wes.php">
            <div class="uti-box">
              <figure class="effect-julia">
                <img src="SRC/images/uti02.jpg" alt="">
                <figcaption>
                  <h2>WES認證</h2>
                </figcaption>
              </figure>
            </div>
          </a>
        </li>
        <li class="wow fadeInUp">
          <a href="utilit_norm.php">
            <div class="uti-box">
              <figure class="effect-julia">
                <img src="SRC/images/uti03.jpg" alt="">
                <figcaption>
                  <h2>兵役規範</h2>
                </figcaption>
              </figure>
            </div>
          </a>
        </li>
        <li class="wow fadeInUp">
          <a href="utilit_visa.php">
            <div class="uti-box">
              <figure class="effect-julia">
                <img src="SRC/images/uti04.jpg" alt="">
                <figcaption>
                  <h2>簽證相關</h2>
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