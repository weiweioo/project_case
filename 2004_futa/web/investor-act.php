<?php include('_header.php') ?>
<link href="SRC/css/inn_page.css" rel="stylesheet" type="text/css" />


<main class="inner_page">
    <!-- banner -->
    <section>
        <div class="inp_banner">
            <div><img src="SRC/images/inp_b4.jpg" alt=""></div>
        </div>
    </section>
    <!-- banner -->
    <!-- bread -->

    <div class="bread">
        <div class="bread_con">
            <ul class="bre_all">
                <li>
                    <a href="index.php">
                        首頁<span>/</span>
                    </a>
                </li>
                <li>
                    <a href="investor.php">
                        投資人專區<span>/</span>
                    </a>
                </li>
                <li>
                    股利及股價
                </li>

            </ul>
        </div>
    </div>
    <!-- bread -->

    <!-- 內頁 -->
    <section class="inner_main">
        <div class="inn_con">
            <div class="inn_tt01">
                <div class="ch">投資人專區</div>
                <div class="en">INVESTOR</div>
            </div>
            <div class="inn_all_box">
                <div class="inn_leftbox">
                    <div class="mobile_list_menu">投資人專區選單</div>
                    <ul class="inn_menu">
                        <li><a href="investor.php" class="unit_link">每月營收</a></li>
                        <li><a href="investor.php" class="unit_link">財務報告</a></li>
                        <li><a href="investor.php" class="unit_link">公司年報</a></li>
                        <li><a href="investor-act.php" class="unit_link currt">股利及股價</a></li>
                        <li><a href="investor-act.php" class="unit_link">股東會資訊</a></li>
                        <li><a href="investor-act.php" class="unit_link">法說會資訊</a></li>
                        <li><a href="investor-act.php" class="unit_link">投資人服務</a></li>
                        <li><a href="investor-act.php" class="unit_link">公司治理</a></li>
                        <li><a href="investor-act.php" class="unit_link">重大訊息公告</a></li>
                        <li><a href="investor-act.php" class="unit_link">利害關係人</a></li>
                    </ul>
                </div>
                <div class="inn_rightbox">
                    <div class="irb_tt01">
                        股利及股價
                    </div>
                    <div class="user_editer">
                        <div class="inn_act_box">
                            <p>
                                <strong>福大材料科技股份有限公司成立於1970年</strong>
                            </p>
                            <ul>
                                <li>
                                    1971年開始進行第一紡紗工廠的建廠
                                </li>
                                <li>
                                    1972年開始量產。同時於1973年開始進行第二紡紗工廠的建廠
                                </li>
                                <li>
                                    1974年量產。公司因擴大營業需求於1982年將第一及第二紡紗廠遷移至梧棲關連工業區工廠現址
                                </li>
                                <li>
                                    1990年股票公開發行，並申請合併楊紡股份有司為本公司第二廠
                                </li>
                                <li>
                                    1996年股票正式上櫃掛牌交易(股票代號4402)
                                </li>
                                <li>
                                    1999年因尼龍產品需求殷切，於同年投入尼龍原絲廠之建廠工作
                                </li>
                                <li>
                                    2000年尼龍原絲廠房竣工，進行試車生產
                                </li>
                                <li>
                                    2001年尼龍原絲廠正式量產，一般衣料用尼龍絲之產能為12000噸/年；工業用尼龍絲之產能為4800噸/年
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- 內頁 -->

</main>

<?php include('_footer.php') ?>

<script>
    /*UNIT mobile menu*/
    var acc = document.getElementsByClassName("mobile_list_menu");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    } // JavaScript Document
</script>