<?php include('_header.php') ?>
<link href="SRC/css/inn_page.css" rel="stylesheet" type="text/css" />


<main class="inner_page">
    <!-- banner -->
    <section>
        <div class="inp_banner">
            <div><img src="SRC/images/inp_b5.jpg" alt=""></div>
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
                    <a href="index.php">
                        人才招募
                    </a>
                </li>

            </ul>
        </div>
    </div>
    <!-- bread -->

    <!-- 內頁 -->
    <section class="inner_main">
        <div class="inn_con">
            <div class="inn_tt01">
                <div class="ch">人才招募</div>
                <div class="en">CAREER</div>
            </div>
            <div class="inn_all_box">
                <div class="inn_leftbox">
                    <div class="mobile_list_menu">人才招募</div>
                    <ul class="inn_menu">
                        <li><a href="career.php" class="unit_link currt">人才招募</a></li>
                        <li><a href="career.php" class="unit_link">福利制度</a></li>
                        <li><a href="career.php" class="unit_link">教育訓練</a></li>
                    </ul>
                </div>
                <div class="inn_rightbox">
                    <div class="irb_tt01">
                        人才招募
                    </div>
                    <div class="user_editer">
                        <div class="inn_act_box">
                            <p>
                                福大材料科技公司長期耕耘、努力，擁有廣博的研發技術、厚植的生產經驗和成功的經營團隊，專注於棉紗的應用領域中；透過不斷成長的銷售實績和緊密的客戶關係，將所得到的寶貴經驗融合轉化，永續追求績效和品質來贏得客戶的滿意。
                            </p>
                            <p>
                                福大材料科技尋找的是活潑有實力想要創造自己的您。<br>
                                如果您熱愛挑戰、具強烈企圖心及團隊精神，渴望與一群優秀的伙伴一起工作。<br>
                                <strong>
                                    請立即加入福大材料科技，為自己創造職業生涯的光明前景！！
                                </strong>
                            </p>
                            <div class="act-box">
                                <div class="act-tt01">
                                    福利制度
                                </div>
                                <ul>
                                    <li>休假福利：週休二日</li>
                                    <li>保險福利：勞保、健保、勞退提撥金</li>
                                    <li>娛樂福利：國內旅遊</li>
                                    <li>補助福利：員工在職教育訓練</li>
                                </ul>
                            </div>
                            <div class="act-box-2">
                                <div class="act-tt01">
                                    目前職缺
                                </div>
                                <div class="actbox2-tit">
                                    太陽能光電工程師
                                </div>
                                <ul>
                                    <li>
                                        針對光電材料、元件產品之製作、管理及設備採購作業，提供技術性建議及相關諮詢
                                    </li>
                                    <li>督導光電材料與元件產品之良率、穩定度的控制與分析</li>
                                    <li>太陽能電站規劃工程師與監造工程師</li>
                                </ul>
                                <div class="actbox2-tit">
                                    業務行銷人員
                                </div>
                                <ul>
                                    <li>
                                        胚布、成品布、長織絲、紗及電子材料.副料等業務銷售及售服
                                    </li>
                                </ul>
                                <div class="actbox2-tit">
                                    會計財務儲備幹部
                                </div>
                                <ul>
                                    <li>
                                        會計相關財務儲備幹部
                                    </li>
                                </ul>

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