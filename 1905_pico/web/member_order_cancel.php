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
                           取消訂單
                        </div>
						  <div class="order_block">
                            <ul>
                                <li class="order_block_info01">
                                    <div class="">
                                        訂單編號：
                                        <a href="#" class="number">
                                            2019272341
                                        </a>
                                    </div>
                                    <div class="">
                                        付款方式：ATM轉帳
                                    </div>
                                    <div class="">
                                        訂購日期：2019-06-10
                                    </div>
                                   
                                </li>
                                <li class="order_block_info02">
                                    <div class="">
                                        訂單金額：
                                        <span class="price">
                                            NT$6,990
										</span>
                                    </div>
                                    <div class="">
                                        訂單狀態：準備中
                                    </div>
                                   
                                </li>
                            </ul>
                        </div>
                        <div class="cart_info">
                           
                            <ul>
                                <li class="prod">
                                    <img class="" src="images/img_prod04.jpg" alt="">
                                    <div class="prod_wrap">
                                      
                                                    <div class="prod_title">
                                                        100%精梳棉印花雙人兩用被床包組
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
                                       
                                                    <div class="prod_title">
                                                        100%精梳棉印花雙人兩用被床包組
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
                                         取消訂單原因：
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