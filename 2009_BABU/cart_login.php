<?php include('_head.php') ?> 
<!--wrapper-->
<div id="wrapper" class="main_bg">
  <?php include('_menu.php') ?> 
  <main>
    <section class="content02 wow fadeIn">
      <div class="box-1">
        <div class="title01 text_center">
          <h2>會員登入</h2>
          <!--bread-->
          <div class="breadbox">
            <div class="bread-crumbs">
              <li><a href="index.php">首頁</a></li>
              <li><a href="login.php">會員系統</a></li>
            </div>
          </div>     
          <!--bread end--> 
        </div> 
      </div>
      <div class="box-1">
        <!--會員-->
        <div class="member">
          <div class="mbox">
            <div class="mbox01">
              <form action="javascript:void(0)">
                <ul class="styled-input">
                  <li>
                    <label class="label" for="name">帳　　號*</label>
                    <input type="email" id="name" required/>
                  </li>
                  <li>
                    <label class="label" for="phone">密　　碼*</label>
                    <input type="text" id="phone" required/>
                  </li>
                  <li class="join">
                    <a href="join.php">加入會員</a>
                    <a href="password.php">忘記密碼</a>
                  </li>  
                  <li>
                    <label class="label" for="code">驗証碼*</label>
                    <input type="text" id="code" required/>
                  </li>
                  <li class="code">
                    <img src="images/demo/verification_bemo.jpg" />
                    <span class="refresh"><a href="javascript:void(0);"><img src="images/testing.svg" alt="刷新驗證碼"></a></span>
                  </li>
                  <li class="code">
                    <input type="submit" class="btn-style01" value="登入" onclick="location='cart02.php'"/>
                  </li>         
                </ul> 
              </form>
            </div>
          </div>          
        </div>
        <!--//會員-->  
      </div>  
    </section>  
  </main>
  <?php include('_foot.php') ?> 