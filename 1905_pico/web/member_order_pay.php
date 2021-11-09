<?php include '_header.php';?>
    <link rel="stylesheet" type="text/css" href="SRC/css/inner_page.css" />
    <script type="text/javascript" src="SRC/js/jquery.twzipcode.min.js">
    </script>
    <script type="text/javascript" src="SRC/js/jquery-ui.js">
    </script>
    <link rel="stylesheet" type="text/css" href="SRC/css/jquery-ui.css" />
    <main>
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
                    <div class="side_menu">
                        <?php include '_sideMenu.php';?>
                    </div>
                    <div class="page-content_block">
                        <div class="page-title">
                            <img class="page-deco" src="images/img_pageDeco.png" alt="">
                            匯款回覆
                        </div>
                        <form>
                            <div class="page_account_form">
                               
                                <ul>
                                    <li>
                                        <div class="account_title">
                                         訂單編號：
                                        </div>
                                        <input type="text" class="account_inpt" readonly value="2019272341124458">
                                    </li>
                                    <li>
                                        <div class="account_title">
                                         訂購日期：
                                        </div>
                                        <input class="account_inpt" type="text"  readonly value=" 2019-06-10"
                                        >
                                    </li>
                                    <li>
                                        <div class="account_title">
                                           訂購金額：
                                        </div>
                                        <input   class="account_inpt" type="text"  readonly
                                        value="NT$2,587">
                                    </li>
                                    <li>
                                        <div class="account_title">
                                          匯款帳號<br>末五碼：
                                        </div>
                                        <input type="text" class="account_inpt" required="required" value="">
                                    </li>
                                    <li>
                                        <div class="account_title">
                                            匯款金額：
                                        </div>
                                       
                                       <input type="text" class="account_inpt" required="required" value="">
                                    </li>
                                    <li>
                                        <div class="account_title">
                                            匯款時間：
                                        </div>
                                        <input type="text" class="account_inpt" required="required" value="">
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
            $(document).ready(function() {
                // fancy box 
                $('.fancyBox').fancybox();
                // styled input
                $('input[type="text"], input[type="password"]').keyup(function() {
                    var tmpval = $(this).val();
                    if (tmpval == '') {
                        $(this).removeClass('active').siblings('label').removeClass('active');
                    } else {
                        $(this).addClass('active').siblings('label').addClass('active');
                    }
                });
                // date picker
                $('#birthday').datepicker({
                    changeMonth: true,
                    changeYear: true,
                    yearRange: "-100:+0",
                    maxDate: 0,
                    onSelect: function() {
                        handleLabel($(this));
                    }
                });
                // 地址選擇
            });
        </script>