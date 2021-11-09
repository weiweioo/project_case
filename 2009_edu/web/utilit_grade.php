<?php include('_head.php') ?>
<link href="SRC/css/inner-page.css? <?= rand(0, 999) ?>20201104" rel="stylesheet" type="text/css" />


<main>
  <div class="inp-banner">
    <img src="SRC/images/inp-banner01.jpg" alt="">
  </div>
  <!--classLink-->
  <div class="classBox wow fadeIn">
    <div class="mobile_list_menu">成績加發列表</div>
    <ul class="classLink">
      <li><a href="utilit_grade_view.php" class="unit_link">TOEFL</a></li>
      <li><a href="utilit_grade_view_02.php" class="unit_link">IELTS(IDP)</a></li>
      <li><a href="utilit_grade_view_03.php" class="unit_link">IELTS(BC)</a></li>
      <li><a href="utilit_grade_view_04.php" class="unit_link">GRE</a></li>
      <li><a href="utilit_grade_view_05.php" class="unit_link">GMAT</a></li>
      <li><a href="utilit_grade_view_06.php" class="unit_link">SAT</a></li>
    </ul>
  </div>
  <!--classLink end-->
  <div class="inp-con">
    <section class="uti">
      <div class="title">
        成績加發
      </div>
      <div class="title-line">
        <span class="red"></span>
        <span class="blue"></span>
      </div>
      <div class="abd-table uti-g-list">
        <ul class="item-all">
          <li class=" item-box wow fadeInUp">
            <a class="hvr-shadow g-box" href="utilit_grade_view.php">
              <div class="tt02">
                TOEFL
              </div>
            </a>
          </li>
          <li class=" item-box wow fadeInUp">
            <a class="hvr-shadow g-box" href="utilit_grade_view_02.php">
              <div class="tt02">
                IELTS(IDP)
              </div>
            </a>
          </li>
          <li class=" item-box wow fadeInUp">
            <a class="hvr-shadow g-box" href="utilit_grade_view_03.php">
              <div class="tt02">
                IELTS(BC)
              </div>
            </a>
          </li>
          <li class=" item-box wow fadeInUp">
            <a class="hvr-shadow g-box" href="utilit_grade_view_04.php">
              <div class="tt02">
                GRE
              </div>
            </a>
          </li>
          <li class=" item-box wow fadeInUp">
            <a class="hvr-shadow g-box" href="utilit_grade_view_05.php">
              <div class="tt02">
                GMAT
              </div>
            </a>
          </li>
          <li class=" item-box wow fadeInUp">
            <a class="hvr-shadow g-box" href="utilit_grade_view_06.php">
              <div class="tt02">
                SAT
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