<?php include '_header.php'; ?>
<link rel="stylesheet" type="text/css" href="SRC/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css" />
<link rel="stylesheet" type="text/css" href="SRC/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css" />
<link rel="stylesheet" type="text/css" href="SRC/css/bootstrap-datepicker3.css">



<main class="content">
    <article>
        <section>
            <div class="index_banner">
                <div class="index_banner_bg fadeIn animated">
                </div>
                <div class="index_banner_box  fadeIn animated">
                    <div class="owl-carousel owl-theme" id="carousel">
                        <div class="item">
                            <img class="banner_pic pc" src="images/img_banner01.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="banner_pic pc" src="images/img_banner02.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="banner_pic pc" src="images/img_banner01.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="banner_pic pc" src="images/img_banner01.jpg" alt="">
                        </div>
                    </div>
                    <ul id='carousel-custom-dots' class='owl-dots'>
                        <li class='owl-dot'>
                            1
                        </li>
                        <li class='owl-dot'>
                            2
                        </li>
                        <li class='owl-dot'>
                            3
                        </li>
                        <li class='owl-dot'>
                            4
                        </li>
                    </ul>
                </div>
            </div>
            <div class="index_ban-other">
                <div class="index_ban-txt fadeIn animated">
                    <div class="index_ban-txt_box">
                        <h2>
                            為家人提供最溫暖安心的照護
                            <br>
                            醫養 優質 樂齡 健康管理
                        </h2>
                        <ul>
                            <li>
                                天成醫療體系首家取得桃園市長照社團法人
                            </li>
                            <li>
                                天晟醫院經營、專業照顧的服務
                            </li>
                            <li>
                                實踐醫養一條龍、營造在地安老
                            </li>
                            <li>
                                提供5G長照：居家服務、居家復健、居家醫療、居家護理、居家藥事
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="index_reserve  fadeIn animated">
                    <h1 class="index_reserve_title">
                        預約參觀
                    </h1>
                    <div class="index_reserve_info">
                        <form>
                            <div class="building">
                                <select name="building" required="">
                                    <option value="預約館別*">
                                        預約館別*
                                    </option>
                                    <option value="內壢金色時代護理之家">
                                        內壢金色時代護理之家
                                    </option>
                                    <option value="楊梅天晟醫院附設護理之家">
                                        楊梅天晟醫院附設護理之家
                                    </option>
                                    <option value="金色年代新街日照中心">
                                        金色年代新街日照中心
                                    </option>
                                </select>
                                <span class="oi oi-caret-bottom">
                                </span>
                            </div>
                            <div class="box space">
                                <label for="date"></label>
                                <input type="text" name="date" placeholder="日期*" class="datepicker" required="" id="date">
                            </div>
                            <div class="box">
                                <select name="time" required="">
                                    <option value="時間*">
                                        時間
                                    </option>
                                    <option value=" 09:00am">
                                        09:00am
                                    </option>
                                    <option value=" 10:00am">
                                        10:00am
                                    </option>
                                    <option value=" 10:00am">
                                        11:00am
                                    </option>
                                    <option value=" 10:00am">
                                        12:00pm
                                    </option>
                                    <option value=" 10:00am">
                                        01:00pm
                                    </option>
                                    <option value=" 10:00am">
                                        02:00pm
                                    </option>
                                    <option value=" 10:00am">
                                        03:00pm
                                    </option>
                                    <option value=" 10:00am">
                                        04:00pm
                                    </option>
                                    <option value=" 10:00am">
                                        05:00pm
                                    </option>
                                </select>
                                <span class="oi oi-caret-bottom">
                                </span>
                            </div>
                            <div class="box space">
                                <label for="name"></label>
                                <input type="text" name="姓名" placeholder="姓名*" required="" name"name" id="name">
                            </div>
                            <div class="box">
                                <label for="tel"></label>
                                <input type="text" name="電話" placeholder="電話*" required="" name="tel" id="tel">
                            </div>
                            <label for="send"></label>
                            <input type="submit" class="submit-bnt" value="我要預約" name="send" id="send">
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="index_building indexContent fadeInUp animated wow" data-wow-duration="1s" data-wow-delay="0.3s">
            <div class="index_building_block row ">
                <a class="col-md-4 col-sm-4" href="carehome-info.php" title="內壢金色時代護理之家">
                    <figure>
                        <img class="pic" src="images/img_center01.jpg" alt="內壢金色時代護理之家">
                    </figure>
                    <div class="txt">
                        <img class="pic" src="images/img_tc01.png" alt="內壢金色時代護理之家">
                    </div>
                </a>
                <a class="col-md-4 col-sm-4" href="carehome-info.php" title="楊梅天晟醫院附設護理之家">
                    <figure>
                        <img class="pic" src="images/img_center02.jpg" alt="楊梅天晟醫院附設護理之家">
                    </figure>
                    <div class="txt">
                        <img class="pic" src="images/img_tc02.png" alt="楊梅天晟醫院附設護理之家">
                    </div>
                </a>
                <a class="col-md-4 col-sm-4" href="carehome-info.php" title="中壢金色年華護理之家">
                    <figure>
                        <img class="pic" src="images/img_center03.jpg" alt="中壢金色年華護理之家">
                    </figure>
                    <div class="txt">
                        <img class="pic" src="images/img_tc03.png" alt="中壢金色年華護理之家">
                    </div>
                </a>
            </div>
            <div class="index_building_block row">
                <a class="col-md-4 col-sm-4" href="#" title="金色年代新街日照中心">
                    <figure>
                        <img class="pic" src="images/img_center04.jpg" alt="金色年代新街日照中心">
                    </figure>
                    <div class="txt">
                        <img class="pic" src="images/img_tc04.png" alt="金色年代新街日照中心">
                    </div>
                </a>
                <a class="col-md-4 col-sm-4" href="5Ghomeservice1-1.php" title="5G照顧服務">
                    <figure>
                        <img class="pic" src="images/img_careHome02.JPG" alt="5G照顧服務">
                    </figure>
                    <h3 class="txt">
                        5G照顧服務
                    </h3>
                </a>
                <a class="col-md-4 col-sm-4" href="comser.php" title="社區整體照顧服務中心">
                    <figure>
                        <img class="pic" src="images/img_careHome03.png" alt="社區整體照顧服務中心">
                    </figure>
                    <h3 class="txt">
                        社區整體照顧服務中心
                    </h3>
                </a>
            </div>
        </section>
        <section class="index_news fadeIn animated wow" data-wow-duration="1.5s" data-wow-delay="0.3s">
            <div class="index_news_bg">
                <img class="pic" src="images/img_b01.jpg" alt="最新消息">
            </div>
            <div class="index_news_block indexContent ">
                <div class="info-box">
                    <h2 class="title">
                        最新消息
                    </h2>
                    <div class="more">
                        <a href="news-list.php" class="more-btn" title="查看更多資訊">
                            查看更多資訊→
                        </a>
                    </div>
                    <div class="item row">
                        <a class="col-md-4 col-sm-4" href="news-detail.php" title="楊梅天成醫院附設護理之家7月16日開業，歡迎預約入住參觀">
                            <div class="news-tag type01">
                                消息公告
                            </div>
                            <img class="pic" src="images/img_share01.jpg" alt="楊梅天成醫院附設護理之家7月16日開業，歡迎預約入住參觀">
                            <h4 class="txt">
                                楊梅天成醫院附設護理之家7月16日開業，歡迎預約入住參觀
                            </h4>
                        </a>
                        <a class="col-md-4 col-sm-4" href="news-detail.php" title="金色年代日間照顧中心長輩度過愉快中秋">
                            <div class="news-tag type01">
                                消息公告
                            </div>
                            <img class="pic" src="images/img_share02.jpg" alt="金色年代日間照顧中心長輩度過愉快中秋">
                            <h4 class="txt">
                                金色年代日間照顧中心長輩度過愉快中秋
                            </h4>
                        </a>
                        <a class="col-md-4 col-sm-4" href="news-detail.php" title="金色時代護理之家長輩新髮型增添色彩">
                            <div class="news-tag type02">
                                活動訊息
                            </div>
                            <img class="pic" src="images/img_share03.jpg" alt="金色時代護理之家長輩新髮型增添色彩">
                            <h4 class="txt">
                                金色時代護理之家長輩新髮型增添色彩
                            </h4>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="index_events fadeInLeft animated wow " data-wow-duration="1.8s" data-wow-delay="0.3s">
            <div class="index_events_bg">
            </div>
            <div class="index_events_block row indexContent ">
                <div class="left col-md-6 col-sm-6">
                    <h2 class="title">
                        大事記
                    </h2>
                    <ul>
                        <li>

                            2017年榮獲桃園市第一家衛生福利部長照A級旗艦店

                        </li>
                        <li>

                            2018年成立首家南桃園失智共同照護中心

                        </li>
                        <li>

                            2018年智慧居家服務榮獲SNQ國家品質標章認證

                        </li>
                    </ul>
                    <div class="more">
                        <a href="#" class="more-btn" title="查看更多資訊">
                            查看更多資訊→
                        </a>
                    </div>
                </div>
                <div class="right col-md-6 col-sm-6">
                    <img class="pic" src="images/img_award.jpg" alt="大事記">
                </div>
            </div>
        </section>
        <section class="index_environment indexContent fadeInRight animated wow" data-wow-duration="2s" data-wow-delay="0.3s">
            <div class="index_environment_block row">
                <div class="col-md-6 col-sm-6">
                    <img class="pic" src="images/img_space.jpg" alt="空間環境">
                </div>
                <div class="col-md-6 col-sm-6">
                    <h2 class="title">
                        優質溫馨的空間環境
                    </h2>
                    <p>
                        千萬裝修、全新設備、交通便利，教學醫院附設由專業醫師、護理、復健、社工、營養、藥師等醫療團隊溫馨照顧。選擇醫療專業背景，醫養一條龍的天成護理之家，讓長輩安心、家人放心。
                    </p>
                </div>
            </div>
        </section>
        <section class="index_space  fadeInLeft animated wow" data-wow-duration="2s" data-wow-delay="0.3s">
            <div class="index_space_bg">
            </div>
            <div class="index_space_box owl-carousel owl-theme indexContent" id="index_space_block">
                <div class="item">
                    <img class="pic" src="images/img_space01.jpg" alt="空間環境">
                </div>
                <div class="item">
                    <img class="pic" src="images/img_space02.jpg" alt="空間環境">
                </div>
                <div class="item">
                    <img class="pic" src="images/img_space03.jpg" alt="空間環境">
                </div>
                <div class="item">
                    <img class="pic" src="images/img_space01.jpg" alt="空間環境">
                </div>
            </div>
        </section>
        <section class="index_prod indexContent fadeInUp animated wow" data-wow-duration="0.8s" data-wow-delay="0.3s">
            <h2 class="index_prod_title">
                熱門產品
            </h2>
            <div class="index_prod_box owl-carousel owl-theme row" id="index_prod_block">
                <div class="item">
                    <a href="prod-detail.php" alt="添寧 貼心敢動褲 L-XL號 (10片/包，6包/箱) 成人紙尿褲">
                        <img class="pic" src="images/img_prod01.png" alt="添寧 貼心敢動褲 L-XL號 (10片/包，6包/箱) 成人紙尿褲">
                        <div class="txt-info">
                            添寧 貼心敢動褲 L-XL號 (10片/包，6包/箱) 成人紙尿褲
                            <span class="price">
                                $1,074
                            </span>
                        </div>
                    </a>
                    <div class="btnbar">
                        <input type="checkbox" id="cart1" name="btn">
                        <label for="cart1">
                            <span class="oi oi-cart">
                            </span>
                        </label>
                        <input type="checkbox" id="heart1" name="btn">
                        <label for="heart1">
                            <span class="oi oi-heart">
                            </span>
                        </label>
                    </div>
                </div>
                <div class="item">
                    <a href="prod-detail.php" alt="添寧 貼心敢動褲 L-XL號 (10片/包，6包/箱) 成人紙尿褲">
                        <img class="pic" src="images/img_prod01.png" alt="添寧 貼心敢動褲 L-XL號 (10片/包，6包/箱) 成人紙尿褲">
                        <div class="txt-info">
                            添寧 貼心敢動褲 L-XL號 (10片/包，6包/箱) 成人紙尿褲
                            <span class="price">
                                $1,074
                            </span>
                        </div>
                    </a>
                    <div class="btnbar">
                        <input type="checkbox" id="cart2" name="btn">
                        <label for="cart2">
                            <span class="oi oi-cart">
                            </span>
                        </label>
                        <input type="checkbox" id="heart2" name="btn">
                        <label for="heart2">
                            <span class="oi oi-heart">
                            </span>
                        </label>
                    </div>
                </div>
                <div class="item">
                    <a href="prod-detail.php" alt="添寧 貼心敢動褲 L-XL號 (10片/包，6包/箱) 成人紙尿褲">
                        <img class="pic" src="images/img_prod01.png" alt="添寧 貼心敢動褲 L-XL號 (10片/包，6包/箱) 成人紙尿褲">
                        <div class="txt-info">
                            添寧 貼心敢動褲 L-XL號 (10片/包，6包/箱) 成人紙尿褲
                            <span class="price">
                                $1,074
                            </span>
                        </div>
                    </a>
                    <div class="btnbar">
                        <input type="checkbox" id="cart3" name="btn">
                        <label for="cart3">
                            <span class="oi oi-cart">
                            </span>
                        </label>
                        <input type="checkbox" id="heart3" name="btn">
                        <label for="heart3">
                            <span class="oi oi-heart">
                            </span>
                        </label>
                    </div>
                </div>
                <div class="item">
                    <a href="prod-detail.php" alt="添寧 貼心敢動褲 L-XL號 (10片/包，6包/箱) 成人紙尿褲">
                        <img class="pic" src="images/img_prod01.png" alt="添寧 貼心敢動褲 L-XL號 (10片/包，6包/箱) 成人紙尿褲">
                        <div class="txt-info">
                            添寧 貼心敢動褲 L-XL號 (10片/包，6包/箱) 成人紙尿褲
                            <span class="price">
                                $1,074
                            </span>
                        </div>
                    </a>
                    <div class="btnbar">
                        <input type="checkbox" id="cart4" name="btn">
                        <label for="cart4">
                            <span class="oi oi-cart">
                            </span>
                        </label>
                        <input type="checkbox" id="heart4" name="btn">
                        <label for="heart4">
                            <span class="oi oi-heart">
                            </span>
                        </label>
                    </div>
                </div>
                <div class="item">
                    <a href="prod-detail.php" alt="添寧 貼心敢動褲 L-XL號 (10片/包，6包/箱) 成人紙尿褲">
                        <img class="pic" src="images/img_prod01.png" alt="添寧 貼心敢動褲 L-XL號 (10片/包，6包/箱) 成人紙尿褲">
                        <div class="txt-info">
                            添寧 貼心敢動褲 L-XL號 (10片/包，6包/箱) 成人紙尿褲
                            <span class="price">
                                $1,074
                            </span>
                        </div>
                    </a>
                    <div class="btnbar">
                        <input type="checkbox" id="cart5" name="btn">
                        <label for="cart5">
                            <span class="oi oi-cart">
                            </span>
                        </label>
                        <input type="radio" name="color" id="heart5" /><label for="heart5">
                            <span class="oi oi-heart">
                            </span>
                        </label>
                    </div>
                </div>
            </div>
        </section>
    </article>
</main>

<script type="text/javascript" src="SRC/OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js">
</script>
<script type="text/javascript" src="SRC/OwlCarousel2-2.3.4/dist/owl.carousel.js">
</script>
<script>
    $('#carousel').owlCarousel({
        autoWidth: true,
        // afterInit: setWidth(),
        stagePadding: 50,
        loop: false,
        items: 2,
        margin: 10,
        nav: true,
        dots: true,
        dotsContainer: '#carousel-custom-dots',
        responsive: {
            0: {
                items: 1,
                nav: true,
                autoWidth: false,
                loop: false,
                stagePadding: 0,
            },
            1366: {

                items: 2,
                nav: true,
                loop: false
            }
        }
        // navText: ["1","2"],
    });
    $('.owl-dot').click(function() {
        $('.owl-carousel').trigger('to.owl.carousel', [$(this).index(), 300]);
    });
    $('.owl-stage').css('width', 1112 * $('.owl-item').length);
    // $('.owl-stage').css('width', 300 * $('.owl-item').length);
</script>
<script>
    $('#index_space_block').owlCarousel({
        loop: true,
        margin: 10,
        dots: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            768: {
                items: 2,
                nav: false
            },
            1023: {
                items: 3,
                nav: true,
                loop: false,

            }
        }
    })
</script>
<script>
    $('#index_prod_block').owlCarousel({
        loop: true,
        margin: 10,
        dots: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true,
                margin: 0,
            },
            480: {
                items: 2,
                nav: false
            },
            1023: {
                items: 3,
                nav: true,
                loop: false
            },
            1366: {
                items: 4,
                nav: true,
                loop: false
            }
        }
    })
</script>
<script type="text/javascript" src="SRC/js/bootstrap-datepicker.min.js">
</script>
<script type="text/javascript" src="SRC/js/bootstrap-datepicker.zh-TW.min.js" charset="UTF-8">
</script>
<script type="text/javascript">
    $(function() {
        $('.datepicker').datepicker({
            language: 'zh-TW'
        });
    })
</script>
<?php include '_footer.php'; ?>