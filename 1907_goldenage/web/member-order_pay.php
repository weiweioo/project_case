<?php include '_header.php';?>
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
                <div class="article-name">
                    <h3>匯款回覆</h3>
                </div>
                <form>
                    <div class="page_account_form page-form ">
                        <ul>
                            <li>
                               <label for="number" class="account_title">
                                    訂單編號：
								</label>
                                <input type="number" class="account_inpt" readonly value="2019272341124458"
                                name="" id="number">
                            </li>
                            <li>
                                <label for="date" class="account_title">
                                    訂購日期：
                               </label>
                                <input class="account_inpt" type="text" readonly value=" 2019-06-10" id="date" name="">
                            </li>
                            <li>
                               <label for="orderCash" class="account_title">
                                    訂購金額：
                                </label>
                                <input class="account_inpt" type="text" readonly value="NT$2,587" id="orderCash" name="">
                            </li>
                            <li>
                                <label for="account" class="account_title">
                                    匯款帳號
                                    <br>
                                    末五碼：
                                 </label>
                                <input type="text" class="account_inpt" required="required" value="" id="account" name="">
                            </li>
                            <li>
                                <label for="payCash" class="account_title">
                                    匯款金額：
                                </label>
                                <input type="text" class="account_inpt" required="required" value="" id="payCash" name="">
                            </li>
                            <li>
                               <label for="time" class="account_title">
                                    匯款時間：
                                  </label>
                                <input type="text" class="account_inpt" required="required" value="" id="time" name="">
                            </li>
                        </ul>
                        <div class="confirm_wrap">
                            <div class="confirm_modify_box02">
                               <label for="reset">
                                </label>
                                 <input type="reset" value="重新填寫" class="select_bnt02 bnt" id="reset">
                            </div>
                            <div class="confirm_next_box02">
                                <label for="send">
                                </label>
                                <input type="submit" class="select_bnt01 bnt" value="確認送出" name="send" id="send">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </article>
    </main>
    <?php include '_footer.php';?>
    