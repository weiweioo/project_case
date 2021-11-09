<?php include('_head.php') ?>
<?php include('_oil_right.php') ?>
<?php include('_oil_banner.php') ?>
<main>
  <!--classLink-->
  <section class="classBox wow fadeIn">
    <ul class="classLink">
      <li><a href="oil.php">油品業務銷售</a></li>
      <li><a href="oil_map.php">油站據點</a></li>
      <li><a href="oil_price.php">油品價格</a></li>
      <li><a href="oil_card.php">卡友專區</a></li>
      <li><a href="news_oil.php">活動新訊</a></li>
      <li><a href="oil_cooperation.php" class="current">合作專區</a></li>
    </ul>
  </section>
  <!--classLink end-->
  <!--classLink-->
  <section class="classBox02 wow fadeIn">
    <div class="classLink03">
      <li><a href="oil_cooperation.php">行銷提案</a></li>
      <li><a href="oil_cooperation.php">採購合作</a></li>
      <li><a href="oil_cooperation.php">油站租售</a></li>
      <li><a href="oil_cooperation.php">廣告洽詢</a></li>
      <li><a href="oil_cooperation02.php">看板廣告</a></li>
      <li><a href="oil_cooperation.php">面紙廣告</a></li>
      <li><a href="oil_cooperation.php">大宗用油</a></li>
      <li><a href="oil_ads.php" class="current">看板廣告</a></li>
    </div>
  </section>
  <!--classLink end-->
  <section class="box-4 wow fadeIn">
    <div class="content">
      <!--content-->
      <div class="ir">
        <div class="title03 text_center">
          <h2>看板廣告</h2>
        </div>
        <div class="board">
          <h2>本公司加油站皆有廣告看板可供各商界友人刊登廣告，若有意願，請直接來電洽詢
            (02)2959-9611 轉企劃部#186。</h2>
          <select name="form02" id="form02" class="select01">
            <option selected="selected">請選擇區域</option>
            <option class="sec_name">臺北市</option>
            <option class="gas_name">　萬大站</option>
            <option class="sec_name">桃園市</option>
            <option class="gas_name">　中壢站</option>
            <option class="gas_name">　大溪站</option>
            <option class="sec_name">台中市</option>
            <option class="gas_name">　大雅站</option>
            <option class="gas_name">　清水站</option>
            <option class="gas_name">　梧棲站</option>
            <option class="gas_name">　五權站</option>
            <option class="sec_name">屏東縣</option>
            <option class="gas_name">　潮州站</option>
            <option class="sec_name">高雄市</option>
            <option class="gas_name">　仁武站</option>
            <option class="gas_name">　林園站</option>
            <option class="gas_name">　燕巢站</option>
            <option class="gas_name">　苓雅站</option>
            <option class="sec_name">台南市</option>
            <option class="gas_name">　善化站</option>
            <option class="gas_name">　嘉豐站</option>
            <option class="sec_name">嘉義縣</option>
            <option class="gas_name">　嘉泰站</option>
            <option class="sec_name">嘉義市</option>
            <option class="gas_name">　嘉益站</option>
          </select>
          <div class="oil-ads">
            <h3>看板廣告：</h3>
            <ul class="oil-ads-all ">
              <li>
                <div class="ads-box">
                  <div class="ads-pic">
                    <img src="images/demo/oil-ads01.jpg" alt="">
                  </div>
                </div>
              </li>
            </ul>
            <h3>面紙廣告：</h3>
            <ul class="oil-ads-all tissue">
              <li>
                <div class="ads-txt">
                  規格：寬21cm*深12cm*高4.3cm
                </div>
                <div class="ads-pic">
                  <img src="images/demo/oil-ads02.jpg" alt="">
                </div>
              </li>
              <li>
                <div class="ads-txt">
                  規格：寬21cm*深12cm*高8.2cm
                </div>
                <div class="ads-pic">
                  <img src="images/demo/oil-ads03.jpg" alt="">
                </div>
              </li>
            </ul>
          </div>
        </div>

      </div>
      <!--//content-->
    </div>
  </section>
</main>
<?php include('_foot.php') ?>

<!--ZOOM -->
<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" />
<script src="js/fancybox/jquery.fancybox.js" type="text/javascript"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('.fancybox').fancybox();


  });
</script>
<!--//ZOOM -->