<?php include('_head.php') ?>
<link href="SRC/css/inner-page.css? <?= rand(0, 999) ?>20201104" rel="stylesheet" type="text/css" />


<main>
  <div class="inp-banner">
    <img src="SRC/images/inp-banner01.jpg" alt="">
  </div>
  <!--classLink-->
  <div class="classBox wow fadeIn">
    <div class="mobile_list_menu">留遊學Q&A</div>
    <ul class="classLink">
      <li><a href="study_abroad.php" class="unit_link">英國留學Q&A</a></li>
      <li><a href="study_tour.php" class="unit_link">英國遊學Q&A</a></li>
      <li><a href="ireland.php" class="unit_link">愛爾蘭打工遊學Q&A</a></li>
    </ul>
  </div>
  <!--classLink end-->
  <div class="inp-con">
    <section class="uti-list uti">
      <div class="title">
        留遊學Q&A
      </div>
      <div class="title-line">
        <span class="red"></span>
        <span class="blue"></span>
      </div>
      <ul>
        <li class="wow fadeInUp">
          <a href="study_abroad.php">
            <div class="uti-box">
              <figure class="effect-julia">
                <img src="SRC/images/uti01.jpg" alt="">
                <figcaption>
                  <h2>英國留學Q&A</h2>
                </figcaption>
              </figure>
            </div>
          </a>
        </li>
        <li class="wow fadeInUp">
          <a href="study_tour.php">
            <div class="uti-box">
              <figure class="effect-julia">
                <img src="SRC/images/uti02.jpg" alt="">
                <figcaption>
                  <h2>英國遊學Q&A</h2>
                </figcaption>
              </figure>
            </div>
          </a>
        </li>
        <li class="wow fadeInUp">
          <a href="ireland.php">
            <div class="uti-box">
              <figure class="effect-julia">
                <img src="SRC/images/uti03.jpg" alt="">
                <figcaption>
                  <h2>愛爾蘭打工遊學Q&A</h2>
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