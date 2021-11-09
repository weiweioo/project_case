<?php include '_header.php';?>
    <link rel="stylesheet" type="text/css" href="SRC/css/inner_page.css" />
    <script type="text/javascript" src="SRC/js/jquery.twzipcode.min.js">
    </script>
    <script type="text/javascript" src="SRC/js/jquery-ui.js">
    </script>
    <link rel="stylesheet" type="text/css" href="SRC/css/jquery-ui.css" />
    <main class="content">
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
                            <div class="">
                                我們會寄重設密碼的連結給你
                            </div>
                            <label for="email2">
                            </label>
                            <input class="email" type="email" id="email2" class="link-input" value=""
                            name="" placeholder="請輸入您的信箱">
                            <label for="submit">
                            </label>
                            <input type="submit" class="btn" value="寄送重設密碼連結" name="" id="submit">
                        </div>
                    </div>
                </div>
            </div>
        </form>
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
                <div class="article-name">
                   <h3>登入</h3>
                </div>
                <div class="page-login_block">
                    <form>
                        <div class="page_account_form">
                            <ul>
                                <li>
                                    <label for="email" class="account_title">
                                        EMAIL：
                                    </label>
                                    <input required="required" class="account_inpt" type="email" value="service@jddt.tw"
                                    name="" id="email">
                                </li>
                                <li>
                                    <label for="password" class="account_title">
                                        密碼：
                                    </label>
                                    <input class="account_inpt" type="password" placeholder="密碼*" value="12345678"
                                    required="required" name="" id="password">
                                </li>
                                <li>
                                    <label for="checkword" class="account_title">
                                        驗證碼
                                    </label>
                                    <input type="text" class="menber_loginbox_inpt" data-account="驗證碼" placeholder="請輸入驗證碼"
                                    name="" id="checkword">
                                </li>
                                <li>
                                    <div class="account_title">
                                    </div>
                                    <div class="menber_loginbox_verification">
                                        <img src="images/verification_bemo.jpg" alt="隨機驗證碼">
                                    </div>
                                </li>
                            </ul>
                            <div class="confirm_wrap">
                                <div class="forget_login">
                                    <a class="forget" href="#">
                                        忘記密碼?
                                    </a>
                                </div>
                                <div class="confirm_modify_box02">
                                    <a href="join.php" title="註冊會員" class="select_bnt02 bnt">
                                        註冊會員
                                    </a>
                                </div>
                                <div class="confirm_next_box02">
                                    <!--<label for="send">
                                    </label>
                                    <input type="submit" class="select_bnt01 bnt" value="確認送出" name="send" id="send">-->
                                    <!-- a連結給客戶示意 p3可用上方input -->
                                    <a href="member-account.php">
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