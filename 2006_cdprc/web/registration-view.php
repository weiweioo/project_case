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
    <div class="sign-view">
      <div class="inpp-tt01">
        109年度-防災士培訓機構
      </div>
      <section class="page-top-view wow fadeIn">
        <div class="left-box">
          <img src="SRC/images/ser-view-ex01.jpg">
        </div>
        <div class="right-box">
          <ul>
            <li>
              <div class="li-tt01">報名課程:</div>防災士培訓機構
            </li>
            <li>
              <div class="li-tt01">報名費用:</div><span>$2,000</span>
            </li>
            <li>
              <div class="li-tt01">課程日期:</div>109/10/24-25
            </li>
            <li>
              <div class="li-tt01">課程講師及學歷：</div>何智超-國立交通大學土木工程學系博士
            </li>
            <li>
              <div class="li-tt01">課程地點:</div>逢甲大學土水管402室
            </li>
          </ul>
        </div>
      </section>
      <section class="page-bot-view wow fadeIn">
        <!--service-con-->
        <div class="user_editor">
          <div class="inpp-tt02">
            課程大綱：
          </div>
          <ul>
            <li>防災士職責與任務、我國災防體系與運作</li>
            <li>我國近年災害經驗及災害特性</li>
            <li>資訊掌握、運用與社區防災計畫</li>
            <li>社區防災工作推動與運作</li>
            <li>基礎急救訓練、急救措施實作</li>
            <li>防災計畫實作與驗證</li>
            <li>個人與居家防護措施情境練習</li>
            <li>社區避難收容場所開設與運作</li>
          </ul>
        </div>
        <form action="">
          <div class="check-box">
            <input class="cb" name="sameNameHere" type="checkbox" id="check1" />
            <label for="check1" class="check">本人已詳盡<span><a href="reg-privacy.php">個人資料同意書</a></span>並同意</label>
          </div>
          <div class="check-btn">
            <input class="ck-b" type="button" value="進入報名">
          </div>
        </form>

        <!--//service-con-->
        <div class="back-to">
          <a class="back" href="javascript:history.back()">回上一頁</a>
        </div>
      </section>
    </div>
  </div>

</main>
<?php include('_foot.php') ?>

<script>
  (function() {
    $('.FlowupLabels').FlowupLabels({
      feature_onInitLoad: true,
      class_focused: 'focused',
      class_populated: 'populated'
    });
  })();
</script>