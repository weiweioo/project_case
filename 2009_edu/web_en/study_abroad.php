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
      <li><a href="study_abroad.php" class="current unit_link">英國留學Q&A</a></li>
      <li><a href="study_tour.php" class="unit_link">英國遊學Q&A</a></li>
      <li><a href="ireland.php" class="unit_link">愛爾蘭打工遊學Q&A</a></li>
    </ul>
  </div>
  <!--classLink end-->
  <div class="inp-con">
    <section class="uti">
      <div class="title">
        英國留學Q&A
      </div>
      <div class="title-line">
        <span class="red"></span>
        <span class="blue"></span>
      </div>
      <div class="abd-table uti-g-list">
        <ul class="item-all">
          <li class=" item-box wow fadeInUp">
            <a class="hvr-shadow g-box" href="study_abroad_view.php">
              <div class="tt02">
                英國碩士
              </div>
            </a>
          </li>
          <li class=" item-box wow fadeInUp">
            <a class="hvr-shadow g-box" href="study_abroad_view_02.php">
              <div class="tt02">
                英國學士
              </div>
            </a>
          </li>
          <li class=" item-box wow fadeInUp">
            <a class="hvr-shadow g-box" href="study_abroad_view_03.php">
              <div class="tt02">
                英國中學
              </div>
            </a>
          </li>
        </ul>
      </div>
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