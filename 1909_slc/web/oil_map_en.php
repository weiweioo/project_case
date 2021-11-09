<?php include('_head.php') ?>
<?php include('_oil_right.php') ?>
<?php include('_oil_banner.php') ?>
<script type="text/javascript" src="js/jquery.twzipcode.min.js"></script>
<main>
  <!--classLink-->
  <section class="classBox wow fadeIn">
    <ul class="classLink">
      <li><a href="oil.php">油品業務銷售</a></li>
      <li><a href="oil_map.php" class="current">油站據點</a></li>
      <li><a href="oil_price.php">油品價格</a></li>
      <li><a href="oil_card.php">卡友專區</a></li>
      <li><a href="news_oil.php">活動新訊</a></li>
      <li><a href="oil_cooperation.php">合作專區</a></li>
    </ul>
  </section>
  <!--classLink end-->
  <section class="mapbox_">
    <div class="box-1 wow fadeIn">
      <div class="title03 text_center">
        <h2>關鍵字</h2>
      </div>
      <!--篩選條件-->
      <div class="textbox">
        <li>
          <h2>縣市地區尋找：</h2>
          <div class="list">
            <!-- <div id="twzipcode">
              <div class="select01" data-role="district" data-style="cus_inpt_boxx_adds01" data-value="臺北市"></div>
              <div class="select02" data-role="zipcode" data-style="cus_inpt_boxx_adds02" data-value="信義區"></div>
            </div> -->
            <select name="form" id="form01" class="select01">
              <option selected="selected">請選擇縣市</option>
              <option value="台北市">台北市</option>
              <option value="台南市">台南市</option>
              <option value="宜蘭縣">宜蘭縣</option>
              <option value="花蓮縣">花蓮縣</option>
              <option value="南投縣">南投縣</option>
              <option value="屏東縣">屏東縣</option>
              <option value="苗栗縣">苗栗縣</option>
              <option value="桃園市">桃園市</option>
              <option value="高雄市">高雄市</option>
              <option value="基隆市">基隆市</option>
              <option value="雲林縣">雲林縣</option>
              <option value="新北市">新北市</option>
              <option value="新竹市">新竹市</option>
              <option value="新竹縣">新竹縣</option>
              <option value="嘉義縣">嘉義縣</option>
              <option value="彰化縣">彰化縣</option>
            </select>
            <select name="form02" id="form02" class="select01">
              <option selected="selected">請選擇區域</option>
            </select>
          </div>
        </li>
        <li>
          <h2>進階篩選：</h2>
          <div class="list">
            <div class="form-group">
              <input type="checkbox" id="c1">
              <label for="c1">
                <span class="icon"><img src="images/map_icon_01.png" alt=""></span>
                <span class="tt">92汽油</span>
              </label>
            </div>
            <div class="form-group">
              <input type="checkbox" id="c2">
              <label for="c2">
                <span class="icon"><img src="images/map_icon_02.png" alt=""></span>
                <span class="tt">95+汽油</span>
              </label>
            </div>
            <div class="form-group">
              <input type="checkbox" id="c3">
              <label for="c3">
                <span class="icon"><img src="images/map_icon_03.png" alt=""></span>
                <span class="tt">98汽油</span>
              </label>
            </div>
            <div class="form-group">
              <input type="checkbox" id="c4">
              <label for="c4">
                <span class="icon"><img src="images/map_icon_04.png" alt=""></span>
                <span class="tt">超級柴油</span>
              </label>
            </div>
            <div class="form-group">
              <input type="checkbox" id="c5">
              <label for="c5">
                <span class="icon"><img src="images/map_icon_05.png" alt=""></span>
                <span class="tt">24小時營業</span>
              </label>
            </div>
            <div class="form-group">
              <input type="checkbox" id="c6">
              <label for="c6">
                <span class="icon"><img src="images/map_icon_06.png" alt=""></span>
                <span class="tt">非24小時營業</span>
              </label>
            </div>
            <div class="form-group">
              <input type="checkbox" id="c7">
              <label for="c7">
                <span class="icon"><img src="images/map_icon_07.png" alt=""></span>
                <span class="tt">中油供油</span>
              </label>
            </div>
            <div class="form-group">
              <input type="checkbox" id="c8">
              <label for="c8">
                <span class="icon"><img src="images/map_icon_08.png" alt=""></span>
                <span class="tt">台塑供油</span>
              </label>
            </div>
            <div class="form-group">
              <input type="checkbox" id="c9">
              <label for="c9">
                <span class="icon"><img src="images/map_icon_09.png" alt=""></span>
                <span class="tt">自助加油(僅機車)</span>
              </label>
            </div>
            <div class="form-group">
              <input type="checkbox" id="c10">
              <label for="c10">
                <span class="icon"><img src="images/map_icon_10.png" alt=""></span>
                <span class="tt">自助加油(汽機車皆有)</span>
              </label>
            </div>
            <div class="form-group">
              <input type="checkbox" id="c11">
              <label for="c11">
                <span class="icon"><img src="images/map_icon_11.png" alt=""></span>
                <span class="tt">廣告合作(已被租賃)</span>
              </label>
            </div>
            <div class="form-group">
              <input type="checkbox" id="c12">
              <label for="c12">
                <span class="icon"><img src="images/map_icon_12.png" alt=""></span>
                <span class="tt">廣告合作(尚有未租看板)</span>
              </label>
            </div>
        </li>
        <div class="text_center"><input type="submit" class="btn-style06" value="開始搜尋" /></div>
      </div>
      <!--//篩選條件-->
      <!--據點列表-->
      <div class="mapbox">
        <ul>
          <li>
            <div class="pic"><img src="images/demo/group01.jpg" /></div>
            <div class="txt">
              <h2>總公司</h2>
              <p>地址：<span class="add"><a href="https://goo.gl/maps/6KNqkFUjnS3guRff6" target="_blank">新北市板橋區民生路一段1-2號1樓</a></span></p>
              <p>電話：02-2959-6668</p>
              <p>傳真：02-2959-6669</p>
            </div>
            <div class="icon">
              <dd><img src="images/map_icon_01.png" title="92汽油"></dd>
              <dd><img src="images/map_icon_02.png" title="95+汽油"></dd>
              <dd><img src="images/map_icon_03.png" title="98汽油"></dd>
              <dd><img src="images/map_icon_04.png" title="超級柴油"></dd>
              <dd><img src="images/map_icon_05.png" title="24小時營業"></dd>
              <dd><img src="images/map_icon_07.png" title="中油供油"></dd>
              <dd><img src="images/map_icon_09.png" title="自助加油(僅機車)"></dd>
              <dd><a href="oil_cooperation02.php" target="_blank"><img src="images/map_icon_11.png" title="廣告合作(已被租賃)"></a></dd>
            </div>
          </li>
          <li>
            <div class="pic"><img src="images/demo/group02.jpg" /></div>
            <div class="txt">
              <h2>基隆分公司</h2>
              <p>地址：<span class="add"><a href="https://goo.gl/maps/bz3KnQDJ1yrHYMQ67" target="_blank">基隆市中正區義一路57號3樓 </a></span></p>
              <p>電話：02-2426-5501</p>
              <p>傳真：02-2426-5492</p>
            </div>
            <div class="icon">
              <dd><img src="images/map_icon_01.png" title="92汽油"></dd>
              <dd><img src="images/map_icon_02.png" title="95+汽油"></dd>
              <dd><img src="images/map_icon_03.png" title="98汽油"></dd>
              <dd><img src="images/map_icon_04.png" title="超級柴油"></dd>
              <dd><img src="images/map_icon_06.png" title="非24小時營業"></dd>
              <dd><img src="images/map_icon_08.png" title="台塑供油"></dd>
              <dd><img src="images/map_icon_10.png" title="自助加油(汽機車皆有)"></dd>
              <dd><img src="images/map_icon_12.png" title="廣告合作(尚有未租看板)"></dd>
            </div>
          </li>
          <li>
            <div class="pic"><img src="images/demo/group03.jpg" /></div>
            <div class="txt">
              <h2>總公司</h2>
              <p>地址：<span class="add"><a href="https://goo.gl/maps/6KNqkFUjnS3guRff6" target="_blank">新北市板橋區民生路一段1-2號1樓</a></span></p>
              <p>電話：02-2959-6668</p>
              <p>傳真：02-2959-6669</p>
            </div>
            <div class="icon">
              <dd><img src="images/map_icon_01.png" title="92汽油"></dd>
              <dd><img src="images/map_icon_02.png" title="95+汽油"></dd>
              <dd><img src="images/map_icon_03.png" title="98汽油"></dd>
              <dd><img src="images/map_icon_04.png" title="超級柴油"></dd>
            </div>
          </li>
          <li>
            <div class="pic"><img src="images/demo/group02.jpg" /></div>
            <div class="txt">
              <h2>基隆分公司</h2>
              <p>地址：<span class="add"><a href="https://goo.gl/maps/bz3KnQDJ1yrHYMQ67" target="_blank">基隆市中正區義一路57號3樓 </a></span></p>
              <p>電話：02-2426-5501</p>
              <p>傳真：02-2426-5492</p>
            </div>
            <div class="icon">
              <dd><img src="images/map_icon_04.png" title="超級柴油"></dd>
              <dd><img src="images/map_icon_06.png" title="非24小時營業"></dd>
              <dd><img src="images/map_icon_08.png" title="台塑供油"></dd>
              <dd><img src="images/map_icon_10.png" title="自助加油(汽機車皆有)"></dd>
              <dd><img src="images/map_icon_12.png" title="廣告合作(尚有未租看板)"></dd>
            </div>
          </li>
        </ul>
      </div>
      <!--//據點列表-->
    </div>
  </section>
</main>
<script>
  // 臺灣縣市郵遞區號
  $('#twzipcode').twzipcode({
    zipcodeIntoDistrict: false
  });
</script>
<?php include('_foot.php') ?>