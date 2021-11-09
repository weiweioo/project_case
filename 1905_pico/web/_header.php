<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=1">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1 user-scalable=no"/>
	<meta http-equiv="X-UA-Compatible" content="IE=9,IE=10,IE=11,IE=EDGE"/>
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="images/favicons/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<title>
		FLORIS | 清新比可
	</title>
	<link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-touch-icon.png">
	<link rel="manifest" href="images/favicons/site.webmanifest">
	<link rel="mask-icon" href="images/favicons/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
	<link rel="apple-touch-icon" sizes="57x57" href="images/favicons/apple-icon-57x57.png"/>
	<link rel="apple-touch-icon" sizes="72x72" href="images/favicons/apple-icon-72x72.png"/>
	<link rel="apple-touch-icon" sizes="144x144" href="images/favicons/ms-icon-144x144.png"/>
	<link rel="apple-touch-icon" sizes="114x114" href="images/favicons/apple-icon-114x114.png"/>
	<link rel="icon" sizes="192x192" href="images/favicons/android-icon-192x192.png" type="image/png"/>
	<link rel="shortcut icon" href="images/favicons/favicon.ico" type="image/x-icon"/>
	<link rel="stylesheet" type="text/css" href="SRC/css/icon/css/open-iconic-bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="SRC/css/jquery-ui.css"/>
	<link rel="stylesheet" type="text/css" href="SRC/css/slick-theme.css"/>
	<link rel="stylesheet" type="text/css" href="SRC/css/slick.css"/>
	<link rel="stylesheet" type="text/css" href="SRC/css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="SRC/css/bootstrap-grid.css"/>
	<link rel="stylesheet" type="text/css" href="SRC/css/master.css"/>
	<script type="text/javascript" src="SRC/js/jquery-3.1.1.js">
	</script>
	<script type="text/javascript" src="SRC/js/slick.js">
	</script>
	<script type="text/javascript" src="SRC/js/jquery-ui.js">
	</script>
	<script type="text/javascript" src="SRC/js/jquery.dlmenu.js">
	</script>

	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
</head>

<body>
	<header>

		<div class="navbar">
			<div class="navbar_inner">
				<ul>
					<li>
						<a href="#">
                                <img class="" src="images/ico_fb.png" alt="">
                            </a>
					
					</li>
					<li>
						<a href="#">
                                <img class="" src="images/ico_ig.png" alt="">
                            </a>
					
					</li>
					<li>
						<a href="login.php" class="user-btn sign-in">
                               會員登入
                            </a>
					
					</li>
					<li>
						<a href="join.php" class="user-btn sign-up">
                                註冊
                            </a>
					
					</li>

				</ul>
			</div>
		</div>
		<div class="menu-box indexBar">
			<ul>
				<a href="index.php">
                        <img class="menu-box_logo" src="images/logo.png" alt="">
                    </a>
			
				<li class="link">
					<a href="brand.php" class="link_item">
                            <span>
                              品牌故事
                            </span>
                        </a>
				

				</li>
				<li class="link">
					<a href="new-list.php" class="link_item">
                            <span>
                               最新消息
                            </span>
                        </a>
				
				</li>
				<li class="link">
					<a href="product-list.php" class="link_item">
                            <span>
                                商品櫥窗
                            </span>
                        </a>
				

				</li>
				<li class="link">
					<a href="member.php" class="link_item">
                            <span>
                                會員中心
                            </span>
                        </a>
				

				</li>
				<li class="link">
					<a href="contact.php" class="link_item">
                            <span>
                                聯絡我們
                            </span>
                        </a>
				
				</li>
				<li class="link">
					<a href="cart.php" class="link_item">
                              <span class="oi oi-cart">
                                            </span>
                        </a>
				
				</li>
				<li class="link">

					<a href="#search_box" class="search-btn" id="search">&#9740;</a>


				</li>
				<form class="search_box" id="search_box" action="/search/">
					<input name="search_criteria" placeholder="請輸入關鍵字" value="" type="text">
					<input class="search_icon" value="搜尋" type="submit">
				</form>
			</ul>
		</div>
		<div class="index-bg">
		</div>
		<div class="hamburger-btn">
			<nav role="navigation">
				<div id="menuToggle">
					<input type="checkbox" class="checkbox"/>
					<div class="close-btn">
					</div>
					<span>
                        </span>
				
					<span>
                        </span>
				
					<span>
                        </span>
				
					<ul id="menu">
						<li>
							<form id="m-search">
								<img class="ico-search" src="images/ico_m-search.png" alt="">
								<input type="search" placeholder="Search">
							</form>
						</li>
						<li>
							<a class="menu_title" href="brand.php">
                                   品牌故事
                                </a>
						
						</li>
						<li>
							<a class="menu_title" href="new-list.php" target="_blank">
                                    最新消息
                                </a>
						
						</li>
						<li>
							<a class="subs_title menu_title" href="javascript:void(0);">
                                    商品櫥窗
                                </a>
						
							<ul class="subs-box">
								<li>
									<a href="product-list.php" class="level_2-h">
                                    活動區
                                </a>
								
								</li>
								<li>
									<a href="product-optional.php" class="level_2-h">
                                   
								任選區
								</a>

								
								</li>
								<li>
									<a href="product-list.php" class="level_2-h">
                                   
								寢飾
								</a>

								
								</li>
							</ul>
						</li>

						<li>
							<a class="menu_title" href="member.php">
                                   會員中心
                                </a>
						
						</li>
						<li>
							<a class="menu_title" href="contact.php">
                                     聯絡我們
                                </a>
						
						</li>

						<li class="menu-btn">
							<a href="#">
                                    <img class="menu-btn_icon" src="images/ico_fb.png" alt="">
                                </a>
						
							<a href="#">
                                    <img class="menu-btn_icon" src="images/ico_ig.png" alt="">
                                </a>
						
							<a href="cart.php" class="">
                              <span class="oi oi-cart">
                                            </span>
                        </a>
						
						</li>
						<li>
							<div class="s-btn ">
								<a href="join.php" class="user-box">
                                        註冊
                                    </a>
							
								<a href="login.php" class="user-box">
                                        登入
                                    </a>
							
							</div>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</header>
	<script>
		$( window ).scroll( function () {
			if ( $( this ).scrollTop() >= 50 ) {
				$( '#top' ).fadeIn( "fast" )
			} else {
				$( '#top' ).fadeOut( "fast" )
			}
		} );
		$( '#top' ).click( function () {
			$( 'body,html' ).animate( {
					scrollTop: 0
				},
				500 )
		} );
	</script>
	<script>
		$( function () {
			$( window ).scroll( function () {
				if ( $( document ).scrollTop() > 100 ) {
					$( 'header' ).addClass( 'shrink' );

				} else {
					$( 'header' ).removeClass( 'shrink' );
				}
			} );
		} );
		$( "#search" ).click( function ( e ) {
			e.preventDefault();
			$( ".search_box" ).toggleClass( 'active' );
		} );
	</script>
	<script>
		$( function () {
			$( "ul.subs-box" ).hide();
			$( ".subs_title" )
				.click( function () {
					$( "ul.subs-box" ).slideUp();
					$( ".subs_title" ).removeClass( "open" );
					if ( $( "+ul", this ).css( "display" ) == "none" ) {
						$( "+ul", this ).slideDown();
						$( this ).addClass( "open" );
					}
				} )
				.mouseover( function () {
					$( this ).addClass( "rollover" );
				} )
				.mouseout( function () {
					$( this ).removeClass( "rollover" );
				} );

		} );
	</script>