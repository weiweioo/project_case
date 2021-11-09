<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="images/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title>
        金色年代長照機構
    </title>
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-touch-icon.png">
    <link rel="manifest" href="images/favicons/site.webmanifest">
    <link rel="apple-touch-icon" sizes="57x57" href="images/favicons/apple-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicons/apple-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicons/ms-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicons/apple-icon-114x114.png" />
    <link rel="icon" sizes="192x192" href="images/favicons/android-icon-192x192.png" type="image/png" />
    <link rel="shortcut icon" href="images/favicons/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="SRC/css/fontawesome.css" />
    <link rel="stylesheet" type="text/css" href="SRC/css/component.css" />
    <link rel="stylesheet" type="text/css" href="SRC/css/hamburgers.css" />
    <link rel="stylesheet" type="text/css" href="SRC/css/slick-theme.css" />
    <link href="http://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="SRC/css/slick.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="SRC/css/icon/css/open-iconic-bootstrap.css">
    <link href="SRC/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="SRC/css/inner-page.css" />
    <link rel="stylesheet" type="text/css" href="SRC/css/master.css" />
    <link rel="stylesheet" type="text/css" href="SRC/css/animate.css">
    <script type="text/javascript" src="SRC/js/jquery-3.1.1.js">
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/js/tempusdominus-bootstrap-4.min.js">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/css/tempusdominus-bootstrap-4.min.css" />
    <script src="SRC/js/bootstrap.min.js">
    </script>
    <script type="text/javascript" src="SRC/js/wow.min.js">
    </script>
    <script type="text/javascript" src="SRC/js/slick.js">
    </script>
    <script type="text/javascript" src="SRC/js/modernizr.custom.js">
    </script>
    <script type="text/javascript" src="SRC/js/jquery.dlmenu.js">
    </script>
    <script type="text/javascript" src="SRC/js/hamburgers.js">
    </script>
    <script type="text/javascript" src="SRC/js/bootstrap-datetimepicker.min.js" charset="UTF-8">
    </script>

    <!--文字大小-->
    <script src="SRC/js/jstorage.js"></script>
    <script src="SRC/js/jquery.jfontsize-2.0.js"></script>
    <script>
        $(function() {
            $('.content').jfontsize({
                btnMinusClasseId: '#jfontsize-m', // Defines the class or id of the decrease button
                btnDefaultClasseId: '#jfontsize-d', // Defines the class or id of default size button
                btnPlusClasseId: '#jfontsize-p', // Defines the class or id of the increase button
                btnMinusMaxHits: 1, // 最多可被縮小的次數
                btnPlusMaxHits: 3, // 最多可被放大的次數
                sizeChange: 2 // 每次縮放字體變化像素
            });
        });
    </script>
    <!--//文字大小-->
</head>

<body class="content">
    <header>
        <div href="javascript:" id="fix-link">
            <div class="line01">
            </div>
            <a href="#" class="side-btn" title="FB『另開新視窗』" target="_blank">
                <img class="" src="images/ico_side01.png" alt="FB">
            </a>
            <a href="#" class="side-btn" title="line『另開新視窗">
                <img class="" src="images/ico_side02.png" alt="line">
            </a>
            <a href="#" class="side-btn" title="app store『另開新視窗">
                <img class="" src="images/ico_side03.png" alt="app store">
            </a>
            <div class="line02">
            </div>
        </div>
        <div class="navbar">
            <div class="top-menu">
                <ul>
                    <li>
                        <div>
                            字型設定：
                            <span class="text-size">
                                <a id="jfontsize-m" href="" class="text-size_item current" title="小">
                                    小
                                </a>
                                <a id="jfontsize-d" href="" class="text-size_item" title="中">
                                    中
                                </a>
                                <a id="jfontsize-p" href="" class="text-size_item" title="大">
                                    大
                                </a>
                            </span>
                        </div>
                    </li>
                    <li>
                        <a href="" title=EN>
                            EN
                        </a>
                    </li>
                    <li>
                        <a href="" title=簡中>
                            簡中
                        </a>
                    </li>
                    <li>
                        <form id="search">
                            <label for="search">
                            </label>
                            <input type="search" placeholder="Search" name="" id="search">
                        </form>
                    </li>
                    <li>
                        <a title="購物車" class="cart-btn">
                            <span class="oi oi-cart">
                            </span>
                            購物車
                            <span class="cart-count">
                                4
                            </span>
                        </a>
                        <div class="cart_block" style="display: none;">
                            <div class="cart_block_list">
                                <div class="product_item">
                                    <div class="img-flex">
                                        <img class="pic" src="images/img_prod01.png" alt="添寧 貼心敢動褲 L-XL號 (10片/包，6包/箱) 成人紙尿褲">
                                    </div>
                                    <div class="info-flex">
                                        <p class="title">
                                            <a href="#" title="添寧 貼心敢動褲 L-XL號 (10片/包，6包/箱) 成人紙尿褲">
                                                添寧 貼心敢動褲 L-XL號 (10片/包，6包/箱) 成人紙尿褲
                                            </a>
                                        </p>
                                        <p class="amount">
                                            <span class="text-danger">
                                                NT$26800
                                            </span>
                                            <span class="quantity">
                                                *1
                                            </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="product_item">
                                    <div class="img-flex">
                                        <img class="pic" src="images/img_prod01.png" alt="添寧 貼心敢動褲 L-XL號 (10片/包，6包/箱) 成人紙尿褲">
                                    </div>
                                    <div class="info-flex">
                                        <p class="title">
                                            <a href="#" title="添寧 貼心敢動褲 L-XL號 (10片/包，6包/箱) 成人紙尿褲">
                                                添寧 貼心敢動褲 L-XL號 (10片/包，6包/箱) 成人紙尿褲
                                            </a>
                                        </p>
                                        <p class="amount">
                                            <span class="text-danger">
                                                NT$26800
                                            </span>
                                            <span class="quantity">
                                                *1
                                            </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="product_item">
                                    <div class="img-flex">
                                        <img class="pic" src="images/img_prod01.png" alt="添寧 貼心敢動褲 L-XL號 (10片/包，6包/箱) 成人紙尿褲">
                                    </div>
                                    <div class="info-flex">
                                        <p class="title">
                                            <a href="#" title="添寧 貼心敢動褲 L-XL號 (10片/包，6包/箱) 成人紙尿褲">
                                                添寧 貼心敢動褲 L-XL號 (10片/包，6包/箱) 成人紙尿褲
                                            </a>
                                        </p>
                                        <p class="amount">
                                            <span class="text-danger">
                                                NT$26800
                                            </span>
                                            <span class="quantity">
                                                *1
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="button">
                                <a class="btn-checkout" href="cart.php" title="立即結帳">
                                    立即結帳
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        您好,xxx
                        <a href="index.php" title=登出>
                            <span class="glyphicon">
                                &#xe163;
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="menu-box indexBar">
                <a href="index.php" class="menu-box_logo">
                    <img class="" src="images/img_logo.png" alt="金色年代長照機構">
                </a>
                <ul>
                    <li class="link">
                        <a href="team.php" class="link_item" title="服務團隊">
                            <div>
                                服務團隊
                            </div>
                        </a>
                    </li>
                    <li class="link h-link">
                        <a href="carehome-list.php" class="link_item" title="護理之家">
                            <div>
                                護理之家
                            </div>
                        </a>
                        <div class="level_2">
                            <div class="level_2_box">
                                <div class="index_building_block row ">
                                    <a class="col-md-4 col-sm-4" href="carehome-info.php" title="中壢金色年華護理之家">
                                        <figure>
                                            <img class="pic" src="images/img_center01.jpg" alt="內壢金色時代護理之家">
                                        </figure>
                                        <div class="txt">
                                            內壢金色時代護理之家
                                        </div>
                                    </a>
                                    <a class="col-md-4 col-sm-4" href="carehome-info.php" title="中壢金色年華護理之家">
                                        <figure>
                                            <img class="pic" src="images/img_center02.jpg" alt="楊梅天晟醫院附設護理之家">
                                        </figure>
                                        <div class="txt">
                                            楊梅天晟醫院附設護理之家
                                        </div>
                                    </a>
                                    <a class="col-md-4 col-sm-4" href="carehome-info.php" title="中壢金色年華護理之家">
                                        <figure>
                                            <img class="pic" src="images/img_center03.jpg" alt="中壢金色年華護理之家">
                                        </figure>
                                        <div class="txt">
                                            中壢金色年華護理之家
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="link">
                        <a href="daycare1-1.php" class="link_item" title="日照中心">
                            <div>
                                日照中心
                            </div>
                        </a>
                    </li>
                    <li class="link">
                        <a href="5Ghomeservice1-1.php" class="link_item" title="5G居家照顧">
                            <div>
                                5G居家照顧
                            </div>
                        </a>
                    </li>
                    <li class="link">
                        <a href="comser.php" class="link_item" title="社區整體照顧服務中心">
                            <div>
                                社區整體照顧服務中心
                            </div>
                        </a>
                    </li>
                    <li class="link">
                        <a href="recruit.php" class="link_item" title="成為夥伴">
                            <div>
                                成為夥伴
                            </div>
                        </a>
                    </li>
                    <li class="link">
                        <a href="http://www.tcmg.com.tw/" class="link_item" title="天晟醫院" target="_blank">
                            <div>
                                天晟醫院
                            </div>
                        </a>
                    </li>
                    <li class="link">
                        <a href="contact.php" class="link_item" title="聯絡我們">
                            <div>
                                聯絡我們
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <button class="hamburger-bg hamburger hamburger--spin-r js-hamburger">
                <span class="hamburger-box">
                    <span class="hamburger-inner">
                    </span>
                </span>
            </button>
            <div id="dl-menu" class="dl-menuwrapper nav_mobile_box" style="display: none">
                <button class="hamburger-bg hamburger hamburger--spin-r js-hamburger">
                    <span class="hamburger-box">
                        <span class="hamburger-inner">
                        </span>
                    </span>
                </button>
                <div class="m-menu_other">
                    <ul>
                        <li>
                            <a href="cart.php" title=購物車>
                                <span class="oi oi-cart">
                                </span>
                                購物車
                            </a>
                        </li>
                        <li>
                            <a href="login.php" title=登入>
                                <i class="material-icons">
                                    person_outline
                                </i>
                                登入
                            </a>
                        </li>
                    </ul>
                </div>
                <form id="m-search">
                    <img class="ico-search" src="images/ico_m-search.png" alt="">
                    <label for="search">
                    </label>
                    <input type="search" placeholder="Search" name="" id="search">
                </form>
                <ul class="dl-menu dl-menuopen">
                    <li>
                        <a href="team.php" title="服務團隊">
                            服務團隊
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" title="護理之家">
                            護理之家
                        </a>
                        <ul class="dl-submenu">
                            <li>
                                <a href="carehome-info.php" title="內壢金色時代護理之家">
                                    內壢金色時代護理之家
                                </a>
                            </li>
                            <li>
                                <a href="carehome-info.php" title="楊梅天晟醫院附設護理之家">
                                    楊梅天晟醫院附設護理之家
                                </a>
                            </li>
                            <li>
                                <a href="carehome-info.php" title="中壢金色年華護理之理(coming soom)">
                                    中壢金色年華護理之理(coming soom)
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" title="日照中心">
                            日照中心
                        </a>
                        <ul class="dl-submenu">
                            <li>
                                <a href="javascript:void(0);" title="環境設施與介紹">
                                    環境設施與介紹
                                </a>
                                <ul class="dl-submenu">
                                    <li>
                                        <a href="daycare1-1.php" title="服務對象">
                                            服務對象
                                        </a>
                                    </li>
                                    <li>
                                        <a href="daycare1-2.php" title="服務對象">
                                            服務項目
                                        </a>
                                    </li>
                                    <li>
                                        <a href="daycare1-3.php" title="服務對象">
                                            服務時間
                                        </a>
                                    </li>
                                    <li>
                                        <a href="daycare1-4.php" title="服務對象">
                                            環境設施
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="carehome-info.php" title="課程與活動花絮">
                                    課程與活動花絮
                                </a>
                            </li>
                            <li>
                                <a href="carehome-info.php" title="入托需知項目">
                                    入托需知項目
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" title="5G居家照顧">
                            5G居家照顧
                        </a>
                        <ul class="dl-submenu">
                            <li>
                                <a href="5Ghomeservice1-1.php" title="居家服務">
                                    居家服務
                                </a>
                            </li>
                            <li>
                                <a href="5Ghomeservice1-1.php" title="居家復健">
                                    居家復健
                                </a>
                            </li>
                            <li>
                                <a href="5Ghomeservice1-1.php" title="居家醫療">
                                    居家醫療
                                </a>
                            </li>
                            <li>
                                <a href="5Ghomeservice1-1.php" title="居家護理">
                                    居家護理
                                </a>
                            </li>
                            <li>
                                <a href="5Ghomeservice5.php" title="居家藥事">
                                    居家藥事
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="comser.php" title="社區整體照顧服務中心">
                            社區整體照顧服務中心
                        </a>
                    </li>
                    <li>
                        <a href="recruit.php" title="成為夥伴">
                            成為夥伴
                        </a>
                    </li>
                    <li>
                        <a href="http://www.tcmg.com.tw/.php" title="天晟醫院『另開新視窗』" target="_blank">
                            天晟醫院
                        </a>
                    </li>
                    <li>
                        <a href="contact.php" title="聯絡我們">
                            聯絡我們
                        </a>
                    </li>
                    <li class="lau-btn">
                        <a href="#" class="current">
                            繁體版
                        </a>
                        <a href="#">
                            ENGLISH
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <script>
        $(function() {
            $('#dl-menu').dlmenu({
                animationClasses: {
                    classin: 'dl-animate-in-2',
                    classout: 'dl-animate-out-2'
                }
            });
        });
    </script>
    <script>
        $(".hamburger-bg").click(function() {
            $(".nav_mobile_box").fadeToggle(200);
        });
    </script>
    <script>
        new WOW().init();
    </script>
    <script>
        $(window).scroll(function() {
            if ($(this).scrollTop() >= 50) {
                $('#fix-link').fadeIn("fast")
            } else {
                $('#fix-link').fadeOut("fast")
            }
        });
        $('#fix-link').click(function() {
            $('body,html').animate({
                    scrollTop: 0
                },
                500)
        });
    </script>
    <script>
        $(document).ready(function() {
            $(".cart-btn").click(function() {
                $(".cart_block").toggle();
            });
        });
    </script>