<link href="css/slick.css" rel="stylesheet" type="text/css" />
<link href="css/slick-theme.css" rel="stylesheet" type="text/css" />


<?php include('_head.php') ?>
<div class="page-banner" style="background-image: url('images/banner03.jpg')">
  <h2>關於山隆</h2>
</div>
<main>
  <!--classLink-->
  <section class="classBox wow fadeIn">
    <ul class="classLink">
      <li><a href="about.php">公司簡介</a></li>
      <li><a href="business.php">理念願景</a></li>
      <li><a href="growth.php">公司沿革</a></li>
      <li><a href="corporate.php">經營團隊</a></li>
      <li><a href="honor.php" class="current">企業殊榮</a></li>
    </ul>
  </section>
  <!--classLink end-->

  <!--classLink-->
  <section class="classBox02 wow fadeIn">
    <div class="classLink03">
      <li><a href="honor.php" id="se01">重要政策</a></li>
      <li><a href="honor_2.php" id="se02" class="current">ISO認證</a></li>
      <li><a href="honor_3.php" id="se03">SQAS評鑑</a></li>
      <li><a href="honor_4.php" id="se04">安全認證優質企業(AEO)</a></li>
      <li><a href="honor_5.php" id="se05">RSQAS驗證</a></li>
      <li><a href="honor_6.php" id="se06">供應鏈綠色管理</a></li>
    </div>
  </section>
  <!--classLink end-->
  <section class="user_editor line-height honor">
    <!--文字編輯器內容-->
    <div class="honbox2 wow fadeIn">
      <div class="container">
        <div class="hb_des">
          <div class="txtbox">
            <div class="hb_tt01">
              ISO認證
            </div>
            <p>
              本公司原以承運正隆集團的原物料運輸與原紙、紙箱及紙板配送為起點，於1976 年在板橋成立營運總部，一路伴隨著國內經濟起飛，進出口貿易蓬勃的發展，公司也從核心貨櫃運輸、散裝物流配送領域，延伸到加油站業務與船務報關市場的拓展，全體同仁秉持著「忠誠信實」的經營理念，即忠於公司、誠實可靠、信守承諾、腳踏實地的工作態度，成功的垂直整合運輸、物流、油品以及船務報關等營業項目，成為台灣極具規模的運輸公司。
            </p><br>
            <p>
              憑藉著穩健的營運基礎，我們追求更佳的品質、環境與安全衛生管理作為，在1994年、2003年以及2006年分別通過ISO 9002品質管理系統、ISO 14001環境管理系統、OHSAS 18001安全衛生管理系統之驗證，不僅成為國內第一家獲環保驗證之運輸公司，也透過管理系統的持續運作，使山隆公司在品質與環安衛的績效朝向持續改善之路邁進。
            </p>
          </div>
          <div class="hb_pic">
            <img src="images/demo/hon_1.jpg" alt="">
          </div>
        </div>
        <div class="hon_card">
          <div class="card">
            <div class="cd_pic">
              <img src="./images/demo/honbox_1.jpg" alt="">
            </div>
            <div class="cd_info">
              <h4>
                通過ISO9001 <br> 2000改版驗證
              </h4>
            </div>
          </div>
          <div class="card">
            <div class="cd_pic">
              <img src="./images/demo/honbox_2.jpg" alt="">
            </div>
            <div class="cd_info">
              <h4>
                通過ISO 14001 <br> 國際環境管理系統驗證
              </h4>
            </div>
          </div>
          <div class="card">
            <div class="cd_pic">
              <img src="./images/demo/honbox_3.jpg" alt="">
            </div>
            <div class="cd_info">
              <h4>
                通過OHSAS18001 <br> 職業安全衛生評核系統驗證
              </h4>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--//文字編輯器內容-->
  </section>

</main>
<?php include('_foot.php') ?>

<script type="text/javascript" src="js/fontawesome-all.js"></script>

<script type="text/javascript" src="js/slick.min.js"></script>
<script>
  $('.hon_card').slick({
    arrows: true,

  });
</script>