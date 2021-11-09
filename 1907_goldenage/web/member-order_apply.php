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
            <div class="page-content  fadeInUp animated index_page-detail">
                <div class="article-name">
                    <h3>申請退貨</h3>
                </div>
                <div class="cart_info">
                    <div class="titlebox">
                        請勾選欲退貨品項
                    </div>
                    <ul>
                        <li class="prod">
                            <a href="prod-detail.php" class="prod-link" title="安永鮮物 健康優鮮鱸魚精-原味 (60ml/6包/單盒)">
                                <img class="" src="images/img_prod04.jpg" alt="安永鮮物 健康優鮮鱸魚精-原味 (60ml/6包/單盒)">
                                <div class="prod_wrap">
                                    <div class="check_list_box">
                                        <div class="check_list">
                                            <input type="checkbox" id="check1" name="" />
                                            <label for="check1">
                                                <span>
                                                </span>
                                                <div class="prod_title">
                                                    安永鮮物 健康優鮮鱸魚精-原味 (60ml/6包/單盒)
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="">
                                        規格： 60ml/包
                                    </div>
                                </div>
                            </a>
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
                            <a href="prod-detail.php" class="prod-link" title="安永鮮物 健康優鮮鱸魚精-原味 (60ml/6包/單盒)">
                                <img class="" src="images/img_prod04.jpg" alt="安永鮮物 健康優鮮鱸魚精-原味 (60ml/6包/單盒)">
                                <div class="prod_wrap">
                                    <div class="check_list_box">
                                        <div class="check_list">
                                            <input type="checkbox" id="check2" name="" />
                                            <label for="check2">
                                                <span>
                                                </span>
                                                <div class="prod_title">
                                                    安永鮮物 健康優鮮鱸魚精-原味 (60ml/6包/單盒)
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="">
                                        規格： 60ml/包
                                    </div>
                                </div>
                            </a>
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
                                <label for="reason" class="account_title">
                                    退貨原因：
                                </label>
                                <textarea class="contact_suptxt" type="text" id="reason" name="">
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