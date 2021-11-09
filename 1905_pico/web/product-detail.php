<?php include '_header.php';?>
    <link rel="stylesheet" type="text/css" href="SRC/css/inner_page.css" />
    <link rel="stylesheet" type="text/css" href="SRC/css/prod-effect.css"
    />
    <link rel="stylesheet" type="text/css" href="SRC/css/slick-prod.css" />
    <link rel="stylesheet" type="text/css" href="SRC/css/slick-theme.css"
    />
    <script type="text/javascript" src="SRC/js/quantity.js">
    </script>
    <script type="text/javascript" src="SRC/js/effect01.js">
    </script>
    <script src="SRC/js/jquery.zoom.js">
    </script>
    <script type="text/javascript" src="SRC/js/jquery.localScroll.min.js">
    </script>
    <script>
        $(document).ready(function() {
            // localscroll
            $('.localscroll').localScroll();
            // product slick
            $('.product-slick').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                fade: true,
                dots: false,
                arrows: false,
                asNavFor: '.product-nav',
            });
            // product nav
            $('.product-nav').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                dots: false,
                arrows: false,
                focusOnSelect: true,
                asNavFor: '.product-slick',
            });
            // zoom
            $(window).on('load resize',
            function() {
                if ($(window).width() > 1210) {
                    $('.product-slick .zoom').zoom();
                }
            });
        });
    </script>
    <main>
        <article>
            <div class="prod-banner">
                <div class="prod-banner-box">
                    <div class="prod-banner_info">
                        <div class="prod-banner_info_title">
                            <div class="ch">
                                商品櫥窗
                            </div>
                            <img class="en" src="images/img_prodTxt.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-content">
                <div class="page-product">
                    <div class="side_menu">
                        <?php include '_sideMenu.php';?>
                    </div>
                    <div class="page-product_block">
                        <div class="proview_topbox row">
                            <div class="left_img col-md-6 col-sm-6">
                                <ul class="product-slick">
                                    <li class="zoom">
                                        <img src="images/img_prod02.jpg" alt="" />
                                    </li>
                                    <li class="zoom">
                                        <img src="images/img_prod03.jpg" alt="" />
                                    </li>
                                    <li class="zoom">
                                        <img src="images/img_prod04.jpg" alt="" />
                                    </li>
                                    <li class="zoom">
                                        <img src="images/img_prod05.jpg" alt="" />
                                    </li>
                                </ul>
                                <ul class="product-nav">
                                    <li>
                                        <img src="images/img_prod02.jpg" alt="" />
                                    </li>
                                    <li>
                                        <img src="images/img_prod03.jpg" alt="" />
                                    </li>
                                    <li>
                                        <img src="images/img_prod04.jpg" alt="" />
                                    </li>
                                    <li>
                                        <img src="images/img_prod05.jpg" alt="" />
                                    </li>
                                </ul>
                            </div>
                            <div class="right_info col-md-6 col-sm-6">
                                <div class="name">
                                    100%精梳棉印花雙人兩用被床包組
                                </div>
                                <div class="note">
                                    宅配滿NT$1,000免運
                                </div>
                                <div class="tagbox">
                                    <div class="new">
                                        新品
                                    </div>
                                    <div class="freeship">
                                        人氣
                                    </div>
                                </div>
                                <ul class="txt">
                                    <li>
                                        材質：表布/底布─100% Cotton、填充─100% Polyester
                                    </li>
                                    <li>
                                        產地：中國
                                    </li>
                                    <li>
                                        規格：雙人床包150x186cm、雙人被套180x210cm
                                    </li>
                                </ul>
                                <div class="money">
                                    NT$2,587
                                    <h1>
                                        NT$3,587
                                    </h1>
                                </div>
                                <div class="info_line">
                                </div>
                                <div class="info_list">
                                    <div class="dtt">
                                        數量
                                    </div>
                                    <div class="spec">
                                        <div class="quantity buttons_added">
                                            <input type="button" value="-" class="minus">
                                            <input type="number" step="1" min="1" max="" name="quantity" value="1"
                                            title="Qty" class="input-text qty text" size="4" pattern="" inputmode="">
                                            <input type="button" value="+" class="plus">
                                        </div>
                                    </div>
                                    <div class="info_list_buy">
                                        <a href="#">
                                            <span class="oi oi-cart">
                                            </span>
                                        </a>
                                        <a href="#" class="btn">
                                            立即購買
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="proview_infobox">
                        <div class="w3-bar w3-light-gray nav proview_infobox_tab">
                            <button class="w3-bar-item w3-button tablink w3-bar-hover" onclick="openCity01(event,'ps01')">
                                詳細
                            </button>
                            <button class="w3-bar-item w3-button tablink" onclick="openCity01(event,'ps02')">
                                特色
                            </button>
                            <button class="w3-bar-item w3-button tablink" onclick="openCity01(event,'ps03')">
                                尺寸規格
                            </button>
                            <button class="w3-bar-item w3-button tablink" onclick="openCity01(event,'ps04')">
                                注意事項
                            </button>
                        </div>
                        <div class="tab-content" id="">
                            <div id="ps01" class="w3-container city spt_cont01 sptp_stop01 op_out">
                                <div class="tab_block">
                                    <img src="images/img_prod03.jpg" alt="" />
                                    <img src="images/img_prod04.jpg" alt="" />
                                    <img src="images/active-printed1.jpg" alt="" />
                                </div>
                            </div>
                            <div id="ps02" class="w3-container city spt_cont01 sptp_stop01 op_out"
                            style="display:none">
                                <div class="tab_block">
                                     <img src="images/cotton_01.jpg" alt="" />
									  <img src="images/cotton_02.jpg" alt="" />
									  <img src="images/cotton_03.jpg" alt="" />
									  <img src="images/cotton_04.jpg" alt="" />
                                </div>
                            </div>
                            <div id="ps03" class="w3-container city spt_cont01 sptp_stop01 op_out"
                            style="display:none">
                                <div class="tab_block">
                                    <img src="images/img_spec.jpg" alt="" />
                                </div>
                            </div>
                            <div id="ps04" class="w3-container city spt_cont01 sptp_stop01 op_out"
                            style="display:none">
                                <div class="tab_block">
                                   <img src="images/img_tip.jpg" alt="" />
                                </div>
                            </div>
                        </div>
							  </div>
                    </div>
                </div>
            </div>
        </article>
    </main>
    <?php include '_footer.php';?>
        <script>
            function openCity01(evt, cityName) {
                var i, x, tablinks;
                x = document.getElementsByClassName("city");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none"
                }
                tablinks = document.getElementsByClassName("tablink");
                for (i = 0; i < x.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace("w3-bar-hover", "")
                }
                document.getElementById(cityName).style.display = "block";
                evt.currentTarget.className += " w3-bar-hover",
                "active";
                $(this).addClass('active').siblings().removeClass('active')
            }
        </script>