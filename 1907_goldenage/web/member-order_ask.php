<?php include '_header.php';?>
    <main class="content">
        <article>
            <div class="page-banner">
                <div class="page-banner_box">
                    <div class="page-banner_info">
                        <div class="page-banner_info_title">
                            會員中心
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-content fadeInUp animated index_page-detail">
                <div class="article-name">
                    訂單詢問
                </div>
                <form>
                    <div class="page_account_form page-form">
                        <ul>
                            <li>
                                 <label for="number" class="account_title">
                                    訂單編號：
                                </label>
                                <input type="number" class="account_inpt" readonly value="2019272341124458"
                                name="" id="number">
                            </li>
                            <li>
                                <label for="name" class="account_title">
                                    姓名：
                                </label>
                                <input class="account_inpt" type="name" readonly value="林小花" name="" id="name">
                            </li>
                            <li>
                                <label for="email" class="account_title">
                                    EMAIL：
                                </label>
                                <input required="required" class="account_inpt" type="email" value="service@jddt.tw"
                                name="" id="email">
                            </li>
                            <li>
                                <label for="tel" class="account_title">
                                    連絡電話：
                                </label>
                                <input type="tel" class="account_inpt" value="0915145814" required="required"
                                name="" id="tel">
                            </li>
                            <li>
                                <label for="content" class="account_title">
                                    詢問內容：
                               </label>
                                <textarea class="contact_suptxt" placeholder="商品退貨原因" required="required"
                                id="content" name="">
                                </textarea>
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
    