<?php include('_head.php') ?>
<link href="SRC/css/inner-page.css? <?= rand(0, 999) ?>20201104" rel="stylesheet" type="text/css" />
<!-- contactbox -->
<link rel="stylesheet" href="SRC/css/jquery.FlowupLabels.css">
<script src="SRC/js/jquery.FlowupLabels.js"></script>
<!-- contactbox -->

<main>
  <div class="inp-banner">
    <img src="SRC/images/inp-banner01.jpg" alt="">
  </div>
  <div class="inp-con">
    <section class="contact">
      <div class="title">
        線上預約
      </div>
      <div class="title-line">
        <span class="red"></span>
        <span class="blue"></span>
      </div>
      <div class="con-top">
        <ul class="info-box">
          <li>
            <div class="info-tit">聯絡電話<span>|</span></div>
            <div class="info-p">02-2771-1027</div>
          </li>
          <li>
            <div class="info-tit">公司地址<span>|</span></div>
            <div class="info-p">台北市大安區光復南路260巷23號三樓<br>(國父紀念館站2號出口)</div>
          </li>
          <li>
            <div class="info-tit"><strong>LINE @</strong> <span>|</span></div>
            <div class="info-p">@edu.worldwide</div>
          </li>
          <li>
            <div class="info-tit"><strong>WeChat</strong><span>|</span></div>
            <div class="info-p">EDU_worldwide</div>
          </li>
        </ul>
        <div class="info-des">
        我們重視您的留遊學計畫！<br>
        收到您的資訊後，我們將於<br>
        <span>上班時間</span>，<em>四小時內</em>與您聯繫<br>
        <span>假日期間</span>，<em>八小時內</em>與您聯繫
      </div>
      </div>
      
      <form action="" id="formBody" class="FlowupLabels">

        <div class="contact-box-all">
          <div class="leftbox">
            <div class="tip">
              *為必填項目
            </div>
            <div class="fl_wrap">
              <label class="fl_label" for=""><span>*</span>姓名:</label>
              <input class="fl_input" required type="text" id="" name="name"/>
            </div>
            <div class="fl_wrap">
              <label class="fl_label" for=""><span>*</span>電話:</label>
              <input class="fl_input" required type="tel" id="" name="tel"/>
            </div>
            <div class="fl_wrap">
              <label class="fl_label" for=""><span>*</span>信箱:</label>
              <input class="fl_input" required type="text" id="" name="email"/>
            </div>
            <div class="fl_wrap">
              <label class="fl_label" for="">LINE:</label>
              <input class="fl_input" type="text" id="" name="line"/>
            </div>
            <div class="fl_wrap">
              <label class="fl_label" for="">WeChat:</label>
              <input class="fl_input" type="text" id="" name="WeChat"/>
            </div>
          </div>
          <div class="rightbox">
            <div class="fl_wrap">
              <div class="list-tit">
                出發國家
              </div>
              <div class="list">
                <input type="radio" id="abd1" name="abd-radios" checked>
                <label for="abd1">美國</label><br>
                <input type="radio" id="abd2" name="abd-radios">
                <label for="abd2">加拿大</label><br>
                <input type="radio" id="abd3" name="abd-radios">
                <label for="abd3">英國</label>
                <input type="radio" id="abd4" name="abd-radios">
                <label for="abd4">愛爾蘭</label><br>
                <input type="radio" id="abd5" name="abd-radios">
                <label for="abd5">澳洲</label><br>
                <input type="radio" id="abd6" name="abd-radios">
                <label for="abd6">其他</label>
              </div>
            </div>
            <div class="list-tit0">
              出國規劃:
            </div>
            <div class="box-all">
              <div class="box-l">
                <div class="fl_wrap">
                  <div class="list-tit">
                    留學
                  </div>
                  <div class="list">
                    <input type="radio" id="study1" name="studys" checked>
                    <label for="study1">碩士</label><br>
                    <input type="radio" id="study2" name="studys">
                    <label for="study2">大學</label><br>
                    <input type="radio" id="study3" name="studys">
                    <label for="study3">高中</label>
                  </div>
                </div>
                <div class="fl_wrap">
                  <div class="list-tit">
                    入學年份
                  </div>
                  <select name="sd-ch1" id="sd-ch1">
                    <option value="ch1-1">2021</option>
                    <option value="ch1-2">2022</option>
                    <option value="ch1-3">2023</option>
                    <option value="ch1-4">2024</option>
                  </select>
                </div>
                <div class="fl_wrap">
                  <div class="list-tit">
                    入學季別
                  </div>
                  <select name="sd-ch2" id="sd-ch2">
                    <option value="ch2-1">秋季班</option>
                    <option value="ch2-2">春季班</option>
                  </select>
                </div>
              </div>
              <div class="box-r">
                <div class="fl_wrap">
                  <div class="list-tit">
                    遊學
                  </div>
                  <div class="list">
                    <input type="radio" id="study2-1" name="studys" checked>
                    <label for="study2-1">加拿大打工遊學</label><br>
                    <input type="radio" id="study2-2" name="studys">
                    <label for="study2-2">語言學校</label><br>
                  </div>
                </div>
                <div class="fl_wrap">
                  <div class="list-tit">
                    出發年份
                  </div>
                  <select name="sd-ch3" id="sd-ch3">
                    <option value="ch3-1">2021</option>
                    <option value="ch3-2">2022</option>
                    <option value="ch3-3">2023</option>
                    <option value="ch3-4">2024</option>
                  </select>
                </div>
                <div class="fl_wrap">
                  <div class="list-tit">
                    出發月份
                  </div>
                  <select name="sd-ch4" id="sd-ch4">
                    <option value="ch4-1">01月份</option>
                    <option value="ch4-2">02月份</option>
                    <option value="ch4-3">03月份</option>
                    <option value="ch4-4">04月份</option>
                    <option value="ch4-5">05月份</option>
                    <option value="ch4-6">06月份</option>
                    <option value="ch4-7">07月份</option>
                    <option value="ch4-8">08月份</option>
                    <option value="ch4-9">09月份</option>
                    <option value="ch4-10">10月份</option>
                    <option value="ch4-11">11月份</option>
                    <option value="ch4-12">12月份</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="con-bot">
          <div class="botbox">
            <div class="fl_wrap">
              <label class="fl_label" for="">備註:</label>
              <textarea class="fl_textarea" col="3" type="text">

           </textarea>
            </div>
          </div>
          <div class="botbox">
            <div class="fl_wrap code">
              <div class="code-con">
                <label class="fl_label" for="">驗證碼:</label>
                <input class="fl_input" type="text" id="" name="" />
              </div>
              <div class="pic">
                <img src="SRC/images/code.png" alt="">
              </div>
            </div>
          </div>
          <div class="submit-btn">
            <div class="hvr-sweep-to-right">
              <input class="sb-btn " type="submit" value="Submit">
            </div>
          </div>
        </div>
      </form>
    </section>
  </div>
  <!-- <div class="con-info-bg">
  <img src="SRC/images/con-info-bg.png" alt="">
</div> -->

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