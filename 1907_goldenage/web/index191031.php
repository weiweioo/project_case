<?php include '_header.php';?>
    <link rel="stylesheet" type="text/css" href="SRC/css/bootstrap-datepicker3.css">
    <main class="">
        <a href="javascript:" id="top">
            <img class="top-pic" src="images/ico-top.png" alt="">
            top
        </a>
        <article>
            <section>
                <div class="index_banner">
                    <div class="index_banner_bg">
                    </div>
                    <div class="index_banner_box">
                        <div class="bannerallbg">
                            <div class="bannerallbg_box">
                                <img class="banner_pic pc" src="images/img_banner01.jpg" alt="">
                                <img class="banner_pic mobile" src="images/img-m-banner01.jpg" alt="">
                            </div>
                            <div class="bannerallbg_box">
                                <img class="banner_pic pc" src="images/img_banner02.jpg" alt="">
                                <img class="banner_pic mobile" src="images/img-m-banner02.jpg" alt="">
                            </div>
                            <div class="bannerallbg_box">
                                <img class="banner_pic pc" src="images/img_banner01.jpg" alt="">
                                <img class="banner_pic mobile" src="images/img-m-banner03.jpg" alt="">
                            </div>
                            <div class="bannerallbg_box">
                                <img class="banner_pic pc" src="images/img_banner02.jpg" alt="">
                                <img class="banner_pic mobile" src="images/img-m-banner03.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="index_reserve">
                    <div class="index_reserve_title">
                        預約參觀
                    </div>
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
                                <input type="text" name="日期" placeholder="日期*" class="datepicker" required="">
                            </div>
                            <div class="box">
                                <select name="時間" required="">
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
                                <input type="text" name="姓名" placeholder="姓名*" required="">
                            </div>
                            <div class="box">
                                <input type="text" name="電話" placeholder="電話*" required="">
                            </div>
                            <input type="submit" class="submit-bnt" value="我要預約">
                        </form>
                    </div>
                </div>
                <div class="index_ban-txt ">
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
            </section>
        </article>
    </main>
    <script>
        $('.bannerallbg').slick({
            dots: true,
            infinite: false,
            speed: 1200,
            slidesToShow: 2,
            // adaptiveHeight: true,
            autoplay: false,
            arrows: true,
            customPaging: function(slider, i) {
                var thumb = jQuery(slider.$slides[i]).data();
                return '<a>' + (i + 1) + '</a>';
            }
        });
    </script>
    <script>
        $('.index_news_box').slick({
            dots: false,
            infinite: true,
            speed: 1000,
            arrows: true,

            cssEase: 'linear',
            autoplay: false,
            autoplaySpeed: 6000,
        });
    </script>
    <script src="SRC/js/jquery.min.js" type="text/javascript">
    </script>
    <script src="SRC/js/bootstrap.min.js">
    </script>
    <script type="text/javascript" src="SRC/js/bootstrap-datepicker.min.js">
    </script>
    <script type="text/javascript" src="SRC/js/bootstrap-datepicker.zh-TW.min.js"
    charset="UTF-8">
    </script>
    <script type="text/javascript">
        $(function() {
            $('.datepicker').datepicker({
                language: 'zh-TW'
            });
        })
    </script>
    <?php include '_footer.php';?>