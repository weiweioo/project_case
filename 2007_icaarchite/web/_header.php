<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1 user-scalable=no" />
	<meta http-equiv="X-UA-Compatible" content="IE=9,IE=10,IE=11,IE=EDGE" />
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="SRC/images/favicons/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<!-- OG -->
	<meta property="og:type" content="website" />
	<meta property="og:title" content="創構建築事務所" />
	<meta property="og:description" content="創構建築事務所" />
	<meta property="og:image" content="SRC/images/og.jpg" />
	<!-- OG -->
	<title>創構建築事務所</title>
	<link rel="apple-touch-icon" sizes="57x57" href="SRC/images/favicons/apple-icon-57x57.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="SRC/images/favicons/apple-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="SRC/images/favicons/apple-icon-114x114.png" />
	<link rel="icon" sizes="192x192" href="SRC/images/favicons/android-icon-192x192.png" type="image/png" />
	<link rel="shortcut icon" href="SRC/images/favicons/favicon.ico" type="image/x-icon" />
	<!--== all css ==-->
	<link href="SRC/css/mobile_menu.css" rel="stylesheet" type="text/css">
	<link href="SRC/css/master.css" rel="stylesheet" type="text/css">
	<link href="SRC/css/reset.css" rel="stylesheet" type="text/css">
	<link href="SRC/css/fontawesome-all.css" rel="stylesheet" type="text/css">
	<link href="SRC/css/hover.css" rel="stylesheet" type="text/css">
	<link href="SRC/css/imagehover.min.css" rel="stylesheet" type="text/css">
	<link href="SRC/css/slick.css" rel="stylesheet" type="text/css" />
	<link href="SRC/css/slick-theme.css" rel="stylesheet" type="text/css" />
	<link href="SRC/css/jquery.fancybox.css" rel="stylesheet" type="text/css" />

</head>

<body>
	<header>
		<section class="inp-nav">
			<div class="inp-nav-con">
				<div class="logo">
					<a href="index.php">
						<img src="SRC/images/logo.png" alt="">
					</a>
				</div>
				<!-- pc-nav -->
				<div class="pc_menu">
					<ul>
						<li>
							<a class="h-nav" href="about.php">關於我們</a>
							<ul class="level-2">
								<li><a href="about.php">關於創構</a></li>
								<li><a href="about-service.php">服務項目</a></li>
								<li><a href="about-team.php">團隊介紹</a></li>
							</ul>
						</li>
						<li>
							<a class="h-nav" href="project.php">專案作品</a>
							<ul class="level-2">
								<li><a href="project.php">建案實績</a></li>
								<li><a href="project.php">室內設計</a></li>
								<li><a href="project.php">交通設施</a></li>
							</ul>
						</li>
						<li>
							<a class="h-nav" href="news.php">最新消息</a>
						</li>
						<li>
							<a class="h-nav" href="contact.php">聯絡我們</a>
						</li>

					</ul>
				</div>
				<!-- pc-nav -->
				<!-- mb-nav -->
				<div class="mobile_menu-in">
					<div id="toggle-in">
						<div class="one"></div>
						<div class="two"></div>
						<div class="three"></div>
					</div>
					<div id="menu-in">
						<a href="about.php">關於我們</a>
						<a href="project.php">專案作品</a>
						<a href="news.php">最新消息</a>
						<a href="contact.php">聯絡我們</a>
					</div>
				</div>
				<!-- mb-nav -->
			</div>
		</section>

	</header>

	<!--== all js ==-->
	<script type="text/javascript" src="SRC/js/jquery-3.1.1.js"></script>
	<script type="text/javascript" src="SRC/js/fontawesome-all.js"></script>
	<script type="text/javascript" src="SRC/js/slick.js"></script>
	<script type="text/javascript" src="SRC/js/jquery.fancybox.js"></script>

	<script>
		$("#toggle-in").click(function() {
			$(this).toggleClass("on-in");
			$("#menu-in").slideToggle();
		});
	</script>