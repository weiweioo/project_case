<?php include '_header.php'; ?>
<link rel="stylesheet" type="text/css" href="SRC/css/inner_page.css" />
<script type="text/javascript" src="SRC/js/jquery.twzipcode.min.js">
</script>
<script type="text/javascript" src="SRC/js/jquery-ui.js">
</script>
<link rel="stylesheet" type="text/css" href="SRC/css/jquery-ui.css" />
<main class="content">
    <article>
        <div class="page-banner">
            <div class="page-banner_box">
                <div class="page-banner_info">
                    <h2 class="page-banner_info_title">
                        會員中心
                    </h2>
                </div>
            </div>
        </div>
        <div class="page-content fadeInUp animated index_page-detail">
            <div class="page-login_block">
                <div class="article-name">
                    <h3>會員註冊</h3>
                </div>
                <form>
                    <div class="page_account_form">
                        <div class="remind_tt">
                            *字號為必要填寫資訊
                        </div>
                        <ul>
                            <li>
                                <label for="email" class="account_title">
                                    <span> *</span>EMAIL：
                                </label>
                                <input required="required" class="account_inpt" type="email" value="service@jddt.tw" name="" id="email">
                            </li>
                            <li>
                                <label for="password" class="account_title">
                                    <span>* </span>密碼：
                                </label>
                                <input class="account_inpt" type="password" placeholder="密碼*" value="12345678" required="required" name="" id="password">
                            </li>
                            <li>
                                <label for="password2" class="account_title">
                                    <span>*</span>確認密碼：
                                </label>
                                <input required="required" class="account_inpt" type="password" placeholder="請再輸入一次密碼做為確認" value="" name="" id="password2">
                            </li>
                            <li>
                                <label for="name" class="account_title">
                                    <span>*</span>姓名：
                                </label>
                                <input type="text" class="account_inpt" required="required" value="" placeholder="請輸入您的姓名" id="name" name="">
                            </li>
                            <li>
                                <label for="sex" class="account_title_2">
                                    <span>* </span>性別：
                                </label>
                                <input class="" type="radio" name="sex" id="female" value="女士" />女士<label for="female"></label>
                                <input class="rd_ml" type="radio" name="sex" id="male" value="男士" />男士<label for="male"></label>
                            </li>
                            <li>
                                <label for="birthday" class="account_title">
                                    <span>*</span>生日：
                                </label>
                                <input class="account_inpt" type="text" id="birthday" placeholder="生日" required="required" value="" name="">
                                <script type="text/javascript">
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
                                </script>
                            </li>
                            <li>
                                <label for="tel" class="account_title">
                                    <span>*</span>手機：
                                </label>
                                <input type="tel" class="account_inpt" value="" required="required" placeholder="請輸入您的手機" name="" id="tel">
                            </li>
                            <li>
                                <div class="account_title_3">
                                    <span>*</span>地址：
                                </div>
                                <div class="add twzipcode">
                                    <div data-role="county1" data-style="mem_add_st_inpt" class="add_inpt add-m" data-value="110">
                                    </div>
                                    <div data-role="district1" data-style="mem_add_st_inpt" class="add_inpt add-m" data-value="臺北市">
                                    </div>
                                    <div data-role="zipcode1" data-style="mem_add_st_inpt" class="add_inpt add-m" data-value="信義區">
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    $('.twzipcode').twzipcode();
                                    $.datepicker.setDefaults($.datepicker.regional["zh-TW"]);
                                </script>
                            </li>
                            <li>
                                <label class="account_title add-space" for="address">
                                </label>
                                <input class="account_inpt" type="text" required="required" name="" id="address">
                            </li>
                            <li>
                                <label for="checkword" class="account_title">
                                    驗證碼
                                </label>
                                <input type="text" class="menber_loginbox_inpt" data-account="驗證碼" placeholder="請輸入驗證碼" name="" id="checkword">
                            </li>
                            <li>
                                <div class="account_title">
                                </div>
                                <div class="menber_loginbox_verification">
                                    <img src="images/verification_bemo.jpg" alt="隨機驗證碼">
                                </div>
                            </li>
                        </ul>
                        <div class="agreement">
                            <input type="radio" name="" id="agreement" required="required">
                            <label for="agreement">我已詳細閱讀</label>
                            <a href="privacy.php">
                                會員條款
                            </a>
                        </div>
                        <div class="confirm_wrap">
                            <div class="confirm_modify_box02">
                                <label for="reset"></label>
                                <input type="reset" value="重新填寫" class="select_bnt02 bnt" id="reset">
                            </div>
                            <div class="confirm_next_box02">
                                <label for="send"></label>
                                <input type="submit" class="select_bnt01 bnt" value="確認送出" name="send" id="send">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </article>
</main>
<?php include '_footer.php'; ?>