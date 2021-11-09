<?php include('_header.php') ?>
<link href="SRC/css/inn_page.css" rel="stylesheet" type="text/css" />


<main class="inner_page">
    <!-- banner -->
    <section>
        <div class="inp_banner">
            <div><img src="SRC/images/inp_b3.jpg" alt=""></div>
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
                    <a href="product-sort.php">
                        紡織事業部
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
                <div class="ch">產品介紹</div>
                <div class="en">PRODUCT</div>
            </div>
            <div class="inn_all_box">
                <div class="inn_leftbox">
                    <div class="mobile_list_menu"><a href="product-sort.php">產品類別</a></div>
                    <ul class="inn_menu">
                        <li>
                            <a href="javascript:void(0);" class="unit_link currt">紡織事業部</a>
                            <ul class="level-2">
                                <li class="lv2"><a href="product-view.php">尼龍布</a></li>
                                <li class="lv2"><a href="product-view.php">聚酯布</a></li>
                                <li class="lv2"><a href="product-view.php">家飾布</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0);" class="unit_link">綠能事業部</a>
                        </li>
                        <li><a href="javascript:void(0);" class="unit_link">醫材事業部</a>
                            <ul class="level-2">
                                <li class="lv2"><a href="product-view.php">防護衣</a></li>
                                <li class="lv2"><a href="product-view.php">口罩</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="inn_rightbox">
                    <div class="irb_tt01">
                        紡織事業部
                    </div>
                    <div class="irb_tt02">
                        <div class="user_editor">
                            <p>
                                <strong>各式織布材質供應</strong><br>
                                我們供應及生產各式不同材質的織布，產品線廣佈了尼龍布、聚酯布、家飾布，醫材事業的防護衣、口罩。 <br> 如果您想了解更多產品細節，請直接連絡我們，將會有專人為您服務。
                            </p>
                        </div>
                    </div>
                    <div class="pro-list">
                        <ul>
                            <li>
                                <a class="p-box" href="product-view.php">
                                    <div class="pl-info">
                                        <div class="pli-tt01">
                                            尼龍布
                                        </div>
                                    </div>
                                    <div class="pl-pic">
                                        <img src="SRC/images/P-1.jpg" alt="">
                                    </div>

                                </a>
                            </li>
                            <li>
                                <a class="p-box" href="product-view.php">
                                    <div class="pl-info">
                                        <div class="pli-tt01">
                                            聚酯布
                                        </div>
                                    </div>
                                    <div class="pl-pic">
                                        <img src="SRC/images/P-2.jpg" alt="">
                                    </div>

                                </a>
                            </li>
                            <li>
                                <a class="p-box" href="product-view.php">
                                    <div class="pl-info">
                                        <div class="pli-tt01">
                                            家飾布
                                        </div>
                                    </div>
                                    <div class="pl-pic">
                                        <img src="SRC/images/P-3.jpg" alt="">
                                    </div>

                                </a>
                            </li>
                            <li>
                                <a class="p-box" href="product-view.php">
                                    <div class="pl-info">
                                        <div class="pli-tt01">
                                            尼龍布
                                        </div>
                                    </div>
                                    <div class="pl-pic">
                                        <img src="SRC/images/P-1.jpg" alt="">
                                    </div>

                                </a>
                            </li>
                            <li>
                                <a class="p-box" href="product-view.php">
                                    <div class="pl-info">
                                        <div class="pli-tt01">
                                            聚酯布
                                        </div>
                                    </div>
                                    <div class="pl-pic">
                                        <img src="SRC/images/P-2.jpg" alt="">
                                    </div>

                                </a>
                            </li>
                            <li>
                                <a class="p-box" href="product-view.php">
                                    <div class="pl-info">
                                        <div class="pli-tt01">
                                            家飾布
                                        </div>
                                    </div>
                                    <div class="pl-pic">
                                        <img src="SRC/images/P-3.jpg" alt="">
                                    </div>

                                </a>
                            </li>

                        </ul>
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

<script>
    $(function() {
        $("ul.level-2").hide();
        $(".unit_link")
            .click(function() {
                $("ul.level-2").slideUp();
                $(".unit_link").removeClass("open");
                if ($("+ul", this).css("display") == "none") {
                    $("+ul", this).slideDown();
                    $(this).addClass("open");
                }
            })
            .mouseover(function() {
                $(this).addClass("rollover");
            })
            .mouseout(function() {
                $(this).removeClass("rollover");
            });

    });
</script>