<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />
  <title>政伸企業股份有限公司</title>

  <link href="css/normalize.css" rel="stylesheet" type="text/css" />
  <link href="css/layout.css?<?= rand(0, 999) ?>20200203" rel="stylesheet" type="text/css" />
  <link href="css/master.css?<?= rand(0, 999) ?>20200203" rel="stylesheet" type="text/css" />
  <link href="css/form.css?<?= rand(0, 999) ?>20200203" rel="stylesheet" type="text/css" />
  <link href="css/font.css?<?= rand(0, 999) ?>20200203" rel="stylesheet" type="text/css" />
  <link href="css/fontawesome-all.css" rel="stylesheet" type="text/css" />
  <link href="css/feather-icons.css" rel="stylesheet" type="text/css" />
  <link href="css/animate.min.css" rel="stylesheet" type="text/css">
  <link href="css/menu.css?<?= rand(0, 999) ?>20200203" rel="stylesheet" type="text/css" />
  <link href="css/user.css?<?= rand(0, 999) ?>20200203" rel="stylesheet" type="text/css" />

  <link rel="shortcut icon" href="images/favicon/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon/favicon.ico" type="image/x-icon">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">

  <meta property="og:type" content="website" />
  <meta property="og:title" content="政伸企業股份有限公司" />
  <meta property="og:description" content="政伸企業股份有限公司" />
  <meta property="og:image" content="images/og.png" />
  <meta property=”og:url” content="http://jlwork.com/2104_transart/web/index.php" />

</head>

<body>
  <!--wrapper-->
  <div id="wrapper">
    <header>
      <div class="pageHeader">
        <div class="box-top">
          <div class="logo">
            <h1><a href="index.php"><img src="images/logo.png" alt="政伸企業股份有限公司" title="政伸企業股份有限公司"></a></h1>
          </div>
          <!--web menu -->
          <nav class="menubox">
            <ul class="nav-menu">
              <li class="">
                <a href="news.php">訊息中心</a>
                <ul>
                  <li><a href="news.php">集團營運</a></li>
                  <li><a href="news.php">媒體報導</a></li>
                  <li><a href="news.php">活動展覽</a></li>
                </ul>
              </li>
              <li>
                <a href="about.php" class="nav-active">關於我們</a>
                <ul>
                  <li><a href="about.php">公司簡介</a></li>
                  <li><a href="about.php">經營理念</a></li>
                  <li><a href="about.php">大事紀</a></li>
                  <li><a href="about.php">服務流程</a></li>
                </ul>
              </li>
              <li>
                <a href="product.php">產品介紹</a>
                <ul>
                  <li><a href="product.php">最新產品</a></li>
                  <li><a href="product.php">水轉系列</a></li>
                  <li><a href="product.php">自黏系列</a></li>
                  <li><a href="product.php">熱轉系列</a></li>
                  <li><a href="product.php">其他系列</a></li>
                </ul>
              </li>
              <li>
                <a href="investor.php">投資人專區</a>
                <ul>
                  <li><a href="investor.php">財務業務資訊</a></li>
                  <li><a href="investor-shareholder.php">股東會資訊</a></li>
                  <li><a href="investor-dividend.php">股務及股價資訊</a></li>
                  <li><a href="investor-contact.php">股務作業</a></li>
                  <li><a href="investor-manage.php">公司治理資訊</a></li>
                  <li><a href="investor-stakes.php">利害關係人</a></li>
                  <li><a href="investor-csr01.php">企業社會責任</a></li>
                </ul>
              </li>
              <li><a href="colors.php">色票專區</a>
              </li>
              <li>
                <a href="contact.php">聯絡我們</a>
                <ul>
                  <li><a href="company-map.php">詳細地址</a></li>
                  <li><a href="contact.php">聯絡表單</a></li>
                  <li><a href="recruit.php">人才招募</a></li>
                </ul>
              </li>
              <li class="lug">
                <div class="lug-pic">
                  <img src="images/lug.svg" alt="">
                </div>
                <span class="active"><a href="">中文</a></span>
                <span><a href="">EN</a></span>
              </li>
            </ul>
          </nav>
          <!--//web menu -->
          <!--moblie menu -->
          <a href="javascript:;" class="menu-btn">
            <span></span>
            <span></span>
            <span></span>
          </a>
          <section class="menu">
            <div class="scrollbar-inner">
              <ul class="main-list">
                <li>
                  <a href="news.php">訊息中心</a>
                  <ul class="sub-list">
                    <li><a href="news.php">集團營運</a></li>
                    <li><a href="news.php">媒體報導</a></li>
                    <li><a href="news.php">活動展覽</a></li>
                  </ul>
                </li>
                <li class="more">
                  <a href="about.php">關於我們</a>
                  <ul class="sub-list">
                    <li><a href="about.php">公司簡介</a></li>
                    <li><a href="about.php">經營理念</a></li>
                    <li><a href="about.php">大事紀</a></li>
                    <li><a href="about.php">服務流程</a></li>
                  </ul>
                </li>
                <li class="more">
                  <a href="product.php">產品介紹</a>
                  <ul class="sub-list">
                    <li><a href="product.php">最新產品</a></li>
                    <li><a href="product.php">水轉系列</a></li>
                    <li><a href="product.php">自黏系列</a></li>
                    <li><a href="product.php">熱轉系列</a></li>
                    <li><a href="product.php">其他系列</a></li>
                  </ul>
                </li>
                <li class="more">
                  <a href="investor.php">投資人專區</a>
                  <ul class="sub-list">
                    <li><a href="investor.php">財務業務資訊</a></li>
                    <li><a href="investor-shareholder.php">股東會資訊</a></li>
                    <li><a href="investor-dividend.php">股務及股價資訊</a></li>
                    <li><a href="investor-contact.php">股務作業</a></li>
                    <li><a href="investor-manage.php">公司治理資訊</a></li>
                    <li><a href="investor-stakes.php">利害關係人</a></li>
                    <li><a href="investor-csr01.php">企業社會責任</a></li>
                  </ul>
                </li>
                <li><a href="colors.php">色票專區</a>
                <li>
                  <a href="contact.php">聯絡我們</a>
                  <ul class="sub-list">
                    <li><a href="company-map.php">詳細地址</a></li>
                    <li><a href="contact.php">聯絡表單</a></li>
                    <li><a href="recruit.php">人才招募</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </section>
          <!--//moblie menu -->
        </div>
      </div>
    </header>