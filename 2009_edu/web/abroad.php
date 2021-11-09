<?php include('_head.php') ?>
<link href="SRC/css/inner-page.css? <?= rand(0, 999) ?>20201104" rel="stylesheet" type="text/css" />


<main>
  <div class="inp-banner">
    <img src="SRC/images/inp-banner01.jpg" alt="">
  </div>
  <!--classLink-->
  <div class="classBox wow fadeIn">
    <div class="mobile_list_menu">服務項目列表</div>
    <ul class="classLink">
      <li><a href="abroad_master.php" class="unit_link">美國碩士</a></li>
      <li><a href="abroad_university.php" class="unit_link">美國大學</a></li>
      <li><a href="abroad_middle.php" class="unit_link">美國中學</a></li>
      <li><a href="abroad_pathway.php" class="unit_link">銜接課程</a></li>
      <li><a href="abroad_comm.php" class="unit_link">社區大學2+2</a></li>
      <li><a href="abroad_qa.php" class="unit_link">常見問題</a></li>
    </ul>
  </div>
  <!--classLink end-->
  <div class="inp-con">
    <section class="abroad-list">
      <div class="title">
        美國留學
      </div>
      <div class="title-line">
        <span class="red"></span>
        <span class="blue"></span>
      </div>
      <ul>
        <li>
          <a href="abroad_master.php">
            <div class="abd-box">
              <figure class="effect-julia">
                <img src="SRC/images/abd01.jpg" alt="">
                <figcaption>
                  <h2>美國碩士</h2>
                  <div>
                    <p>打造留學計畫</p><br>
                    <p>客製申請文件</p><br>
                    <p>精準選校判斷</p><br>
                    <p>獲得名校錄取</p>
                  </div>
                </figcaption>
              </figure>
            </div>
          </a>
        </li>
        <li>
          <a href="abroad_pathway.php">
            <div class="abd-box">
              <figure class="effect-julia">
                <img src="SRC/images/abd02.jpg" alt="">
                <figcaption>
                  <h2>銜接課程</h2>
                  <div>
                    <p>發掘個人志向</p><br>
                    <p>選系選校分析</p><br>
                    <p>客製申請文件</p><br>
                    <p>獲得名校錄取</p>
                  </div>
                </figcaption>
              </figure>
            </div>
          </a>
        </li>
        <li>
          <a href="abroad_middle.php">
            <div class="abd-box">
              <figure class="effect-julia">
                <img src="SRC/images/abd03.jpg" alt="">
                <figcaption>
                  <h2>美國中學</h2>
                  <div>
                    <p>接受同級轉學</p><br>
                    <p>校內住宿安全</p><br>
                    <p>多元AP課程</p><br>
                    <p>顧問輔導升學</p>
                  </div>
                </figcaption>
              </figure>
            </div>
          </a>
        </li>
        <li>
          <a href="abroad_university.php">
            <div class="abd-box">
              <figure class="effect-julia">
                <img src="SRC/images/abd04.jpg" alt="">
                <figcaption>
                  <h2>美國大學</h2>
                  <div>
                    <p>客製申請文件</p><br>
                    <p>名校入學面試</p><br>
                    <p>爭取各獎學金</p><br>
                    <p>進入名校跳板</p>
                  </div>
                </figcaption>
              </figure>
            </div>
          </a>
        </li>
        <li>
          <a href="abroad_comm.php">
            <div class="abd-box">
              <figure class="effect-julia">
                <img src="SRC/images/abd05.jpg" alt="">
                <figcaption>
                  <h2>社區大學2+2</h2>
                  <div>
                    <p>入學門檻彈性</p><br>
                    <p>學費低廉實惠</p><br>
                    <p>保證轉學方案</p><br>
                    <p>取得名校學歷</p>
                  </div>
                </figcaption>
              </figure>
            </div>
          </a>
        </li>
        <li>
          <a href="abroad_qa.php">
            <div class="abd-box">
              <figure class="effect-julia">
                <img src="SRC/images/abd06.jpg" alt="">
                <figcaption>
                  <h2>常見問題</h2>
                  <div>
                    <p>關於申請大學</p><br>
                    <p>關於申請碩士</p><br>
                    <p>關於銜接課程</p><br>
                    <p>關於美國中學</p>
                  </div>
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

<script>
  /*UNIT mobile menu*/
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