<?php include '_header.php';?>
    <link rel="stylesheet" type="text/css" href="SRC/css/inner_page.css" />
    
<script type="text/javascript" src="SRC/js/jquery.twzipcode.min.js"></script>
   
<script type="text/javascript" src="SRC/js/jquery-ui.js"></script>
<link rel="stylesheet" type="text/css" href="SRC/css/jquery-ui.css"/>
   
    <main>
			<div class="forget_BG">
            </div>
		<form>
            <div class="forget_wrap">
                <div class="pop-up">
                    <div class="content">
                        <div class="container">
                            <span class="close">
                                X
                            </span>
                            <div class="subscribe">
                              忘記密碼?
                               
                            </div>
							<div class="">我們會寄重設密碼的連結給你</div>
							<input class="email" type="text" id="" class="link-input" value="" placeholder="請輸入您的信箱" >
							
							
								          
            <input type="submit" class="btn" value="寄送重設密碼連結">
							</div>
                        </div>
                    </div>
                </div>
			</form>
        <article>
            <div class="prod-banner">
                <div class="prod-banner-box">
                    <div class="prod-banner_info">
                        <div class="prod-banner_info_title">
                            <div class="ch">
                                會員中心
                            </div>
                            <img class="en" src="images/img_memberTxt.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-content">
                <div class="page-content-info">
                   
                    <div class="page-login_block">
                        <div class="page-title">
                            <img class="page-deco" src="images/img_pageDeco.png" alt="">
                           登入
                        </div>
                        <form>
                            <div class="page_account_form">
                              
                                <ul>
                                    <li>
                                        <div class="account_title">
                                           
                                            E-mail：
                                        </div>
                                        <input type="text" class="account_inpt" required="required" value="service@jddt.tw">
                                    </li>
                                    <li>
                                        <div class="account_title">
                                           
                                            密碼：
                                        </div>
                                        <input class="account_inpt" type="password" placeholder="密碼*" value="12345678"
                                        required="required">
                                    </li>
                                   
                                    <li>
                                        <div class="account_title">
                                           
                                            驗 證 碼：
                                        </div>
                                        <input type="text" class="menber_loginbox_inpt" data-account="驗證碼" placeholder="請輸入驗證碼">
                                       
                                       
                                    </li>
									<li>
										 <div class="account_title">
                                           
                                        </div>
									 <div class="menber_loginbox_verification">
                                            <img src="images/verification_bemo.jpg" alt="">
                                        </div>
										</li>
                                </ul>
								
                                <div class="confirm_wrap">
									<div class="forget_login">
									<a class="forget" href="#">忘記密碼?
									</a>
								</div>
                                    <div class="confirm_modify_box02">
                                        <button type="button" class="select_bnt02 bnt">
                                            重新填寫
                                        </button>
                                    </div>
                                    <div class="confirm_next_box02">
                                        <!--<input type="submit" class="select_bnt01 bnt" value="確認送出">-->
                                        <a href="member.php">
                                            <button type="button" class="select_bnt01 bnt" onclick="location='member.php'">
                                                確認送出
                                            </button>
                                        </a>
                                    </div>
                                </div>
								
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </article>
    </main>
    <?php include '_footer.php';?>
 
     <script>
        $('.forget').click(function() {
            $('.forget_wrap >.pop-up').addClass('open');
            $('.forget_BG').addClass('open02')
        });
        $('.pop-up .close').click(function() {
            $('.forget_wrap >.pop-up').removeClass('open');
            $('.forget_BG').removeClass('open02')
        });
    </script>