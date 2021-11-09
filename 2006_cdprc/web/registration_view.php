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
    <div class="page-top-view wow fadeIn">
      <div class="inpv-tt01">
        <div class="inpv-type">
          <a href="registration.php">防災科技組</a>
        </div>
        <div class="inpv-date">
          2019/08/22-2019/08/23
        </div>
        <div class="inpv-mode">
          學術演講
        </div>
      </div>
      <div class="inpv-tt02">
        109年第一期防災士培訓
        <div class="tt-line"></div>

      </div>
      <div class="inpv-tt03">
        <div class="inpv-limit bd">
          名額限制：<span>30</span> 人
        </div>
        <div class="inpv-money bd">
          費用：<span>1000</span> 元
        </div>
      </div>

    </div>
    <section class="page-bot-view">
      <!--sign-con-->

      <div class="user_editor">
        <div class="inpp-tt02">
          課程簡介
        </div>
        <ul class="inp-list hv">
          <li><i class="li-icn fas fa-caret-right"></i>防災士職責與任務、我國災防體系與運作</li>
          <li><i class="li-icn fas fa-caret-right"></i>我國近年災害經驗及災害特性</li>
          <li><i class="li-icn fas fa-caret-right"></i>資訊掌握、運用與社區防災計畫</li>
          <li><i class="li-icn fas fa-caret-right"></i>社區防災工作推動與運作</li>
          <li><i class="li-icn fas fa-caret-right"></i>基礎急救訓練、急救措施實作(含急救術科測驗)</li>
          <li><i class="li-icn fas fa-caret-right"></i>防災計畫實作與驗證</li>
          <li><i class="li-icn fas fa-caret-right"></i>個人與居家防護措施情境練習</li>
          <li><i class="li-icn fas fa-caret-right"></i>社區避難收容場所開設與運作</li>
        </ul>
      </div>
      <div class="form-box">
        <div class="inpp-tt02">
          線上報名
        </div>
        <form id='formBody' class='FlowupLabels'>
          <div class='fl_wrap'>
            <label class='fl_label' for=''>*姓名:</label>
            <input class='fl_input' required='required' type='text' name='' id='' />
          </div>
          <div class='fl_wrap'>
            <label class='fl_label' for=''>*信箱:</label>
            <input class='fl_input' required='required' type='email' name='' id='' />
          </div>
          <div class='fl_wrap'>
            <label class='fl_label' for=''>*電話:</label>
            <input class='fl_input' required='required' type='tel' name='' id='' />
          </div>
          <div class='fl_wrap'>
            <label class='fl_label' for=''>*住址:</label>
            <input class='fl_input' required='required' type='text' name='' id='' />
          </div>
          <div class='fl_wrap'>
            <label class='fl_label' for=''>備註:</label>
            <textarea class="fl_input"  type='text' name='' id=''></textarea>
          </div>
          <div class="form-btn">
            <button class="rf_reset" type="reset" value="reset">重填</button>
            <button class="rf_submit" type="submit" value="send">送出</button>
          </div>
        </form>
      </div>
      <!--//sign-con-->
      <div class="back-to">
        <a class="back" href="javascript:history.back()">回上一頁</a>
      </div>
    </section>
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