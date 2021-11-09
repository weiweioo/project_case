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
                            申請退貨
                        </div>
                        <div class="cart_info">
                            <div class="titlebox">
                                請勾選欲退貨品項
                            </div>
                            <ul>
                                <li class="prod">
                                    <img class="" src="images/img_prod04.jpg" alt="">
                                    <div class="prod_wrap">
                                        <div class="check_list_box">
                                            <div class="check_list">
                                                <input type="checkbox" id="c3" name="cc" />
                                                <label for="c3">
                                                    <span>
                                                    </span>
                                                    <div class="prod_title">
                                                        100%精梳棉印花雙人兩用被床包組
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="">
                                            規格：雙人床包150x186cm、雙人被套180x210cm
                                        </div>
                                    </div>
                                </li>
                                <li class="other">
                                    <div class="number">
                                        1
                                    </div>
                                    <div class="price">
                                        NT$2,587
                                    </div>
                                </li>
                            </ul>
                            <ul>
                                   <li class="prod">
                                    <img class="" src="images/img_prod04.jpg" alt="">
                                    <div class="prod_wrap">
                                        <div class="check_list_box">
                                            <div class="check_list">
                                                <input type="checkbox" id="c4" name="cc" />
                                                <label for="c4">
                                                    <span>
                                                    </span>
                                                    <div class="prod_title">
                                                        100%精梳棉印花雙人兩用被床包組
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="">
                                            規格：雙人床包150x186cm、雙人被套180x210cm
                                        </div>
                                    </div>
                                </li>
                                <li class="other">
                                    <div class="number">
                                        1
                                    </div>
                                    <div class="price">
                                        NT$2,587
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <form>
                            <div class="page_account_form">
                                <ul>
                                    <li>
                                        <div class="account_title">
                                            訂單編號：
                                        </div>
                                        <input type="text" class="account_inpt" required="required" readonly  value="2019272341124458">
                                    </li>
                                    <li>
                                        <div class="account_title">
                                            姓名：
                                        </div>
                                        <input class="account_inpt" type="text" readonly  value="林小花"
                                        required="required">
                                    </li>
                                    <li>
                                        <div class="account_title">
                                            EMAIL：
                                        </div>
                                        <input required="required" class="account_inpt" type="text" value="service@jddt.tw">
                                    </li>
                                    <li>
                                        <div class="account_title">
                                            連絡電話：
                                        </div>
                                        <input type="text" class="account_inpt"  value="0915145814">
                                    </li>
                                    <li>
                                        <div class="account_title">
                                          退貨原因
                                        </div>
                                     <textarea class="contact_suptxt" type="text" >                                                  
										</textarea>
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