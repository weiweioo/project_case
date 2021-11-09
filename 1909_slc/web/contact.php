<?php include('_head.php') ?> 
  <script>
    $(document).ready(function () {
      // styled input
      $('input[type="text"]').keyup(function(){
        var tmpval = $(this).val();
        if(tmpval == '') {
          $(this).removeClass('active').siblings('label').removeClass('active');
        } else {
          $(this).addClass('active').siblings('label').addClass('active');
        }
      });
    });
  </script> 
  <div class="page-banner" style="background-image: url('images/banner10.jpg')">
    <h2>聯絡我們</h2>
  </div>
  <main>
    <section class="wow fadeIn">
      <div class="box-2">
        <div class="content">
          <!--contact--> 
          <div class="contact">
            <h2>誠摯的歡迎各界對本公司的意見，不管是業務指教、合作提議、或者是抱怨申訴，<br>填好以下表單即可將內容傳至本公司，並會有專人與您聯絡，感謝支持。
</h2>
            <form action="javascript:void(0)">
              <ul class="styled-input">
                <li class="half">
                  <label class="label">客戶名稱</label>
                  <input type="text">
                </li>
                 <li class="half">
                  <label class="label">聯絡人<span>*</span></label>
                  <input type="text" required>
                </li>
                <li class="half">
                  <label class="label">聯絡電話<span>*</span></label>
                  <input type="tel" required>
                </li>
                <li class="half">
                  <label class="label">傳真</label>
                  <input type="text">
                </li>
                <li class="half">
                  <label class="label">地址</label>
                  <input type="text" required>
                </li>
                <li class="half">
                  <label class="label">E-mail<span>*</span></label>
                  <input type="email" required>
                </li>
                <li>
                  <label class="label" for="content">問題與建議<span>*</span></label>
                  <textarea id="content"></textarea>
                </li>
                <li class="half">
                  <label class="label" for="code">驗證碼<span>*</span></label>
                  <input type="text" id="code"/>
                </li>
                <li class="half text_center code">
                  <img src="images/demo/code.png" />
                  <a href="javascript:void(0);"><img src="images/testing.svg" alt="刷新驗證碼"></a>
                </li>
                <li style="margin-top:40px;" class="text_center">
                  <input type="submit" class="btn-style06" value="確認送出"/> <input type="reset" class="btn-style06" value="重新填寫"/>
                </li>
              </ul>
            </form>
          </div>
          <!--//contact--> 
        </div>
      </div>        
    </section> 
  </main>
  <?php include('_foot.php') ?> 