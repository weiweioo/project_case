<?php include '_header.php'; ?>
<link rel="stylesheet" type="text/css" href="SRC/css/prod-effect.css" />
<link rel="stylesheet" type="text/css" href="SRC/css/slick-prod.css" />
<link rel="stylesheet" type="text/css" href="SRC/css/slick-theme.css" />
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
        $('.localscroll').localScroll();
        $('.product-slick').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            fade: true,
            dots: false,
            arrows: false,
            asNavFor: '.product-nav',
        });
        $('.product-nav').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            dots: false,
            arrows: false,
            focusOnSelect: true,
            asNavFor: '.product-slick',
        });
        $(window).on('load resize',
            function() {
                if ($(window).width() > 1210) {
                    $('.product-slick .zoom').zoom()
                }
            })
    });
</script>
<meta property="og:url" content="https://www.your-domain.com/your-page.html" />
<meta property="og:type" content="website" />
<meta property="og:title" content="金色年代長照機構" />
<meta property="og:url" content="http://jlwork.com/1907_goldenage/web/prod-detail.php" />
<main class="content">
    <article>
        <div class="page-banner">
            <div class="page-banner_box">
                <div class="page-banner_info">
                    <h2 class="page-banner_info_title">
                        產品介紹
                    </h2>
                </div>
            </div>
        </div>
        <div class="page-content index_5Ghomeservice row fadeInUp animated">
            <div class="side_menu col-md-3 col-sm-3">
                <?php include '_prodMenu.php'; ?>
            </div>
            <div class="right-wrap user_editor col-md-9 col-sm-12">
                <div class="page-product_block">
                    <div class="proview_topbox row">
                        <div class="left_img col-md-6 col-sm-6">
                            <ul class="product-slick">
                                <li class="zoom">
                                    <img src="images/img_prod02.jpg" alt="健康優鮮鱸魚精1" title="健康優鮮鱸魚精1" />
                                </li>
                                <li class="zoom">
                                    <img src="images/img_prod03.jpg" alt="健康優鮮鱸魚精2" title="健康優鮮鱸魚精2" />
                                </li>
                                <li class="zoom">
                                    <img src="images/img_prod04.jpg" alt="健康優鮮鱸魚精3" title="健康優鮮鱸魚精3" />
                                </li>
                                <li class="zoom">
                                    <img src="images/img_prod05.jpg" alt="健康優鮮鱸魚精4" title="健康優鮮鱸魚精4" />
                                </li>
                            </ul>
                            <ul class="product-nav">
                                <li>
                                    <img src="images/img_prod02.jpg" alt="健康優鮮鱸魚精1" title="健康優鮮鱸魚精1" />
                                </li>
                                <li>
                                    <img src="images/img_prod03.jpg" alt="健康優鮮鱸魚精2" title="健康優鮮鱸魚精2" />
                                </li>
                                <li>
                                    <img src="images/img_prod04.jpg" alt="健康優鮮鱸魚精3" title="健康優鮮鱸魚精3" />
                                </li>
                                <li>
                                    <img src="images/img_prod05.jpg" alt="健康優鮮鱸魚精4" title="健康優鮮鱸魚精4" />
                                </li>
                            </ul>
                        </div>
                        <div class="right_info col-md-6 col-sm-6">
                            <div class="name">
                                安永鮮物 健康優鮮鱸魚精-原味 (60ml/6包/單盒)
                            </div>
                            <ul class="txt">
                                <li>
                                    商品編號：21564854
                                </li>
                                <li>
                                    商品簡介：這款酒由成熟的美國橡木桶和歐洲橡木桶裝瓶以慶祝2019年的Feis Ile。 限量發行6,000瓶。
                                </li>
                                <li>
                                    商品規格：
                                    <div class="spec">
                                        <select name="" id="" title="商品規格">
                                            <option value="60ml/包">
                                                60ml/包
                                            </option>
                                            <option value="120ml/包">
                                                120ml/包
                                            </option>
                                            <option value="360ml/包">
                                                360ml/包
                                            </option>
                                        </select>
                                    </div>
                                </li>
                                <li>
                                    數量：
                                    <div class="number">
                                        <div class="quantity buttons_added">
                                            <input type="button" value="-" class="minus">
                                            <input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="">
                                            <input type="button" value="+" class="plus">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="info_other">
                                <div class="money">
                                    <h3>NT$2,587</h3>
                                    NT$3,587
                                </div>
                                <div class="link">
                                    <div class="fb">
                                        <div class="fb-share-button" data-href="http://jlwork.com/1907_goldenage/web/prod-detail.php" data-size="large" data-layout="button_count">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="info_line">
                            </div>
                            <div class="info_list">
                                <div class="collection">
                                    <span id="add" class="plus-btn">
                                        加入收藏
                                    </span>
                                </div>
                                <div class="info_list_order">
                                    <a title="加入購物車" alt="加入購物車">
                                        <span class="oi oi-cart">
                                        </span>
                                    </a>
                                    <a href="login-cart.php" class="btn" title="立即購買">
                                        立即購買
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 產品說明 -->
                    <div class="proview_infobox">
                        <div class="proview_infobox_title">
                            產品說明
                        </div>
                        <div class="proview_infobox_detail">
                            水滴狀造型的拿破崙XO，擁有王者般的尊貴氣勢，也難怪會得到一個「帝王」（Imperial）的別名了！採用來自干邑地區裡面大小香檳區葡萄作為原料，再配合上一些非常陳年的邊緣區葡萄作為輔助，拿破崙XO訴求的是要在溫和的口感之中隱藏一點掩蓋不住的獨特品味。
                        </div>
                    </div>
                    <!-- 產品說明 -->
                    <!-- 規格說明 -->
                    <div class="proview_infobox">
                        <div class="proview_infobox_title">
                            規格說明
                        </div>
                        <div class="proview_infobox_detail">
                            水滴狀造型的拿破崙XO，擁有王者般的尊貴氣勢，也難怪會得到一個「帝王」（Imperial）的別名了！採用來自干邑地區裡面大小香檳區葡萄作為原料，再配合上一些非常陳年的邊緣區葡萄作為輔助，拿破崙XO訴求的是要在溫和的口感之中隱藏一點掩蓋不住的獨特品味。
                        </div>
                    </div>
                    <!-- 規格說明 -->
                </div>
                <!-- 相關產品推薦 -->
                <div class="other-prod">
                    <div class="other-prod_title">
                        相關產品推薦
                    </div>
                    <div class="prod-wrap">
                        <div class="tab_block">
                            <div class="prod-box">
                                <div class="prod-tag01">
                                    特價
                                </div>
                                <a href="prod-detail.php" title=" 添寧 貼心敢動褲 L-XL號 (10片/包，6包/箱) 成人紙尿褲">
                                    <img class="pic" src="images/img_prod01.png" alt="成人紙尿褲1" title="成人紙尿褲1">
                                    <div class="title">
                                        添寧 貼心敢動褲 L-XL號 (10片/包，6包/箱) 成人紙尿褲
                                    </div>
                                </a>
                                <div class="functions">
                                    <div class="btnbar">
                                        <input type="checkbox" id="heart1" name="btn">
                                        <label for="heart1">
                                            <span class="oi oi-heart">
                                            </span>
                                        </label>
                                        <span class="delete" title="刪除商品">
                                            <i class="material-icons">
                                                &#xe872;
                                            </i>
                                        </span>
                                    </div>
                                    <div class="money">
                                        NT$2,587
                                        <h3>
                                            NT$3,000
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="prod-box">
                                <div class="prod-tag02">
                                    免運
                                </div>
                                <a href="prod-detail.php" title=" 添寧 貼心敢動褲 L-XL號 (10片/包，6包/箱) 成人紙尿褲">
                                    <img class="pic" src="images/img_prod01.png" alt="成人紙尿褲2" title="成人紙尿褲2">
                                    <div class="title">
                                        添寧 貼心敢動褲 L-XL號 (10片/包，6包/箱) 成人紙尿褲
                                    </div>
                                </a>
                                <div class="functions">
                                    <div class="btnbar">
                                        <input type="checkbox" id="heart2" name="btn">
                                        <label for="heart2">
                                            <span class="oi oi-heart">
                                            </span>
                                        </label>
                                        <span class="delete" title="刪除商品">
                                            <i class="material-icons">
                                                &#xe872;
                                            </i>
                                        </span>
                                    </div>
                                    <div class="money">
                                        NT$2,587
                                        <h3>
                                            NT$3,000
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="prod-box">
                                <div class="prod-tag01">
                                    特價
                                </div>
                                <a href="prod-detail.php" title=" 添寧 貼心敢動褲 L-XL號 (10片/包，6包/箱) 成人紙尿褲">
                                    <img class="pic" src="images/img_prod01.png" alt="成人紙尿褲3" title="成人紙尿褲3">
                                    <div class="title">
                                        添寧 貼心敢動褲 L-XL號 (10片/包，6包/箱) 成人紙尿褲
                                    </div>
                                </a>
                                <div class="functions">
                                    <div class="btnbar">
                                        <input type="checkbox" id="heart3" name="btn">
                                        <label for="heart3">
                                            <span class="oi oi-heart">
                                            </span>
                                        </label>
                                        <span class="delete" title="刪除商品">
                                            <i class="material-icons">
                                                &#xe872;
                                            </i>
                                        </span>
                                    </div>
                                    <div class="money">
                                        NT$2,587
                                        <h3>
                                            NT$3,000
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="prod-box">
                                <div class="prod-tag02">
                                    免運
                                </div>
                                <a href="prod-detail.php" title=" 添寧 貼心敢動褲 L-XL號 (10片/包，6包/箱) 成人紙尿褲">
                                    <img class="pic" src="images/img_prod01.png" alt="成人紙尿褲4" title="成人紙尿褲4">
                                    <div class="title">
                                        添寧 貼心敢動褲 L-XL號 (10片/包，6包/箱) 成人紙尿褲
                                    </div>
                                </a>
                                <div class="functions">
                                    <div class="btnbar">
                                        <input type="checkbox" id="heart4" name="btn">
                                        <label for="heart4">
                                            <span class="oi oi-heart">
                                            </span>
                                        </label>
                                        <span class="delete" title="刪除商品">
                                            <i class="material-icons">
                                                &#xe872;
                                            </i>
                                        </span>
                                    </div>
                                    <div class="money">
                                        NT$2,587
                                        <h3>
                                            NT$3,000
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="prod-box">
                                <div class="prod-tag01">
                                    特價
                                </div>
                                <a href="prod-detail.php" title=" 添寧 貼心敢動褲 L-XL號 (10片/包，6包/箱) 成人紙尿褲">
                                    <img class="pic" src="images/img_prod01.png" alt="成人紙尿褲5" title="成人紙尿褲5">
                                    <div class="title">
                                        添寧 貼心敢動褲 L-XL號 (10片/包，6包/箱) 成人紙尿褲
                                    </div>
                                </a>
                                <div class="functions">
                                    <div class="btnbar">
                                        <input type="checkbox" id="heart5" name="btn">
                                        <label for="heart5">
                                            <span class="oi oi-heart">
                                            </span>
                                        </label>
                                        <span class="delete" title="刪除商品">
                                            <i class="material-icons">
                                                &#xe872;
                                            </i>
                                        </span>
                                    </div>
                                    <div class="money">
                                        NT$2,587
                                        <h3>
                                            NT$3,000
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="prod-box">
                                <div class="prod-tag02">
                                    免運
                                </div>
                                <a href="prod-detail.php" title=" 添寧 貼心敢動褲 L-XL號 (10片/包，6包/箱) 成人紙尿褲">
                                    <img class="pic" src="images/img_prod01.png" alt="成人紙尿褲6" title="成人紙尿褲6">
                                    <div class="title">
                                        添寧 貼心敢動褲 L-XL號 (10片/包，6包/箱) 成人紙尿褲
                                    </div>
                                </a>
                                <div class="functions">
                                    <div class="btnbar">
                                        <input type="checkbox" id="heart6" name="btn">
                                        <label for="heart6">
                                            <span class="oi oi-heart">
                                            </span>
                                        </label>
                                        <span class="delete" title="刪除商品">
                                            <i class="material-icons">
                                                &#xe872;
                                            </i>
                                        </span>
                                    </div>
                                    <div class="money">
                                        NT$2,587
                                        <h3>
                                            NT$3,000
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 相關產品推薦 -->
            </div>
        </div>
    </article>
</main>
<script>
    $("span[id='add']").on("click",
        function() {
            row = $("");
            if ($(this).text() == '已加入') {
                $(this).removeClass();
                $(this).addClass("plus-btn");
                $(this).text('加入收藏')
            } else {
                $(this).removeClass();
                $(this).addClass("check plus-btn");
                $(this).text('已加入')
            }
            row.toggle(300)
        });
</script>
<script>
    $('.tab_block').slick({
        dots: true,
        infinite: true,
        speed: 1200,
        slidesToShow: 4,
        slidesToScroll: 4,
        adaptiveHeight: true,
        autoplay: false,
        arrows: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        }]
    });
</script>
<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<script src="https://d.line-scdn.net/r/web/social-plugin/js/thirdparty/loader.min.js" async="async" defer="defer">
</script>
<?php include '_footer.php'; ?>