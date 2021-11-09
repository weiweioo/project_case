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
                            個人資料管理與修改
                        </div>
                        <form>
                            <div class="page_account_form">
                                <div class="remind_tt">
                                    *字號為不可修改
                                </div>
                                <ul>
                                    <li>
                                        <div class="account_title">
                                            <span>
                                                *
                                            </span>
                                            E-mail：
                                        </div>
                                        <input type="text" class="account_inpt" required="required" readonly value="service@jddt.tw">
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
                                           
                                            確認密碼：
                                        </div>
                                        <input required="required" class="account_inpt" type="password" placeholder="確認密碼*"
                                        value="12345678">
                                    </li>
                                    <li>
                                        <div class="account_title">
                                            <span>
                                                *
                                            </span>
                                            姓名：
                                        </div>
                                        <input type="text" class="account_inpt" required="required" value="林小花" readonly>
                                    </li>
                                    <li>
                                        <div class="account_title">
                                            <span>
                                                *
                                            </span>
                                            性別：
                                        </div>
                                       
                                        <input type="radio" name="radio" id="radio2" value="radio" checked="checked"
                                        />
                                        小姐
                                    </li>
                                    <li>
                                        <div class="account_title">
                                            <span>
                                                *
                                            </span>
                                            生日：
                                        </div>
                                        <input class="account_inpt" type="text" id="birthday" placeholder="生日" readonly
                                        required="required" value="1990-10-10" />
                                    </li>
                                    <li>
                                        <div class="account_title">
                                          
                                            手機：
                                        </div>
                                        <input type="text" class="account_inpt" required="required" value="091231464">
                                    </li>
                                    <li>
                                        <div class="account_title">
                                           
                                            地址：
                                        </div>
                                        <div class="add twzipcode">
                                            <div data-role="county1" data-style="mem_add_st_inpt" class="add_inpt add-m"
                                            data-value="110">
                                            </div>
                                            <div data-role="district1" data-style="mem_add_st_inpt" class="add_inpt add-m"
                                            data-value="臺北市">
                                            </div>
                                            <div data-role="zipcode1" data-style="mem_add_st_inpt" class="add_inpt add-m"
                                            data-value="信義區">
                                            </div>
                                        </div>
                                        <script type="text/javascript">
                                            $('.twzipcode').twzipcode();
                                            $.datepicker.setDefaults($.datepicker.regional["zh-TW"]);
                                        </script>
                                    </li>
                                    <li>
                                        <div class="account_title">
                                        </div>
                                        <input class="account_inpt" type="text" required="required">
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