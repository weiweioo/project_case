<?php include('_header.php') ?>
<link href="SRC/css/inn_page.css" rel="stylesheet" type="text/css" />


<main class="inner_page">
    <!-- banner -->
    <section>
        <div class="inp_banner">
            <div><img src="SRC/images/inp_b2.jpg" alt=""></div>
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
                    關於我們
                </li>

            </ul>
        </div>
    </div>
    <!-- bread -->

    <!-- 內頁 -->
    <section class="inner_main">
        <div class="inn_con">
            <div class="inn_tt01">
                <div class="ch">關於我們</div>
                <div class="en">ABOUT</div>
            </div>
            <div class="inn_all_box">
                <div class="inn_leftbox">
                    <div class="mobile_list_menu">關於我們</div>
                    <ul class="inn_menu">
                        <li><a href="about.php" class="unit_link currt">公司沿革</a></li>
                        <li><a href="about.php" class="unit_link">集團組織</a></li>
                        <li><a href="about.php" class="unit_link">人才招募</a></li>
                        <li><a href="about.php" class="unit_link">員工福利</a></li>
                    </ul>
                </div>
                <div class="inn_rightbox">
                    <div class="irb_tt01">
                        福大材料(總公司)
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
                        <div class="row">
                            <div class="col-12">
                                <div class="page-pic">
                                    <img src="SRC/images/about.jpg" alt="">
                                </div>
                            </div>
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