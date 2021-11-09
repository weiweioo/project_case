<?php include '_header.php';?>
    <link rel="stylesheet" type="text/css" href="SRC/css/inner_page.css" />
    <main>
        <article>
            <div class="prod-banner">
                <div class="prod-banner-box">
                    <div class="prod-banner_info">
                        <div class="prod-banner_info_title">
                            <div class="ch">
                                客服諮詢
                            </div>
                            <img class="en" src="images/img_serviceTxt.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-content">
                <div class="page-content-info">
                    <div class="side_menu">
                        <?php include '_sideMenu.php';?>
                    </div>
                    <div class="page-content_block">
                        <div class="proview_infobox">
							<div class="page-title"> <img class="page-deco" src="images/img_pageDeco.png" alt="">聯絡我們</div>
                             <form>
                                        <div class="page_content_form">
                                            <div class="remind_tt">
                                                *字號為必要填寫資訊
                                            </div>
                                            <ul>
                                                <li>
                                                    <div class="sign_up_title">
                                                        <span>
                                                            *
                                                        </span>
                                                        姓　　名：
                                                    </div>
                                                    <input type="text" class="sign_up_inpt" placeholder="請輸入您的全名">
                                                </li>
                                                <li>
                                                    <div class="sign_up_title">
                                                        <span>
                                                            *
                                                        </span>
                                                        聯絡電話：
                                                    </div>
                                                    <input onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')"
                                                    class="sign_up_inpt" placeholder="請輸入您的聯絡方式">
                                                </li>
                                                <li>
                                                    <div class="sign_up_title">
                                                        <span>
                                                            *
                                                        </span>
                                                        E - Mail：
                                                    </div>
                                                    <input name="email" type="email" required class="sign_up_inpt" placeholder="請輸入您的E-mail">
                                                </li>
                                                <li>
                                                    <div class="sign_up_title">
                                                        <span>
                                                            *
                                                        </span>
                                                        您的意見：
                                                    </div>
                                                    <textarea class="contact_suptxt" placeholder="請輸入您的意見">
                                                    </textarea>
                                                </li>
                                                <li>
                                        <div class="account_title">
                                            <span>
                                                *
                                            </span>
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
                                                <div class="confirm_modify_box02">
                                                    <button type="button" class="select_bnt02 bnt">
                                                        重新填寫
                                                    </button>
                                                </div>
                                                <div class="confirm_next_box02">
                                                    <!--<input type="submit" class="select_bnt01 bnt" value="確認送出">-->
                                                    <a href="#">
                                                        <button type="button" class="select_bnt01 bnt">
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
            function openCity01(evt, cityName) {
                var i, x, tablinks;
                x = document.getElementsByClassName("city");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none"
                }
                tablinks = document.getElementsByClassName("tablink");
                for (i = 0; i < x.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace("w3-bar-hover", "")
                }
                document.getElementById(cityName).style.display = "block";
                evt.currentTarget.className += " w3-bar-hover",
                "active";
                $(this).addClass('active').siblings().removeClass('active')
            }
        </script>