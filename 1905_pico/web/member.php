<?php include '_header02.php';?>
<link rel="stylesheet" type="text/css" href="SRC/css/inner_page.css"/>
<main>
	<article>
		<div class="prod-banner">
			<div class="prod-banner-box">
				<div class="prod-banner_info">
					<div class="prod-banner_info_title">
						<div class="ch">
							會員中心
						</div>
						<img class="en" src="images/img_memberTxt.png" alt="">
					</div>
				</div>
			</div>
		</div>
		<div class="page-content">
			<div class="page-content-info">
				<div class="side_menu">
					<?php include '_sideMenu.php';?>
				</div>
				<div class="page-content_block">
					<div class="account-top">
						親愛的會員 林小花 您好，以下是您的帳戶資料
					</div>
					<ul class="account-box row">
						<li class="col-md-4 col-sm-4">
							<a class="account-box_item" href="member_account.php">
							  <img class="" src="images/ico_member01.png" alt="">
								<div class="account-txt">
									<h4>個人資料管理與修改</h4>
									<div class="txt02">您的個人帳戶管理</div>
								</div>
							</a>						
						</li>
						<li class="col-md-4 col-sm-4">
							<a class="account-box_item" href="member_order.php">
							  <img class="" src="images/ico_member02.png" alt="">
								<div class="account-txt">
									<h4>訂單查詢</h4>
									<div class="txt02">您的訂單歷史查詢</div>
								</div>
							</a>						
						</li>
						<li class="col-md-4 col-sm-4">
							<a class="account-box_item" href="qa.php">
							  <img class="" src="images/ico_member03.png" alt="">
								<div class="account-txt">
									<h4>常見問題</h4>
									<div class="txt02">訂購前請詳閱賣場購物說明</div>
								</div>
							</a>						
						</li>
					</ul>
					<ul class="account-box row">
						<li class="col-md-4 col-sm-4">
							<a class="account-box_item" href="payment.php">
							  <img class="" src="images/ico_member04.png" alt="">
								<div class="account-txt">
									<h4>付款方式</h4>
									<div class="txt02">提供您多種付款方式</div>
								</div>
							</a>						
						</li>
						<li class="col-md-4 col-sm-4">
							<a class="account-box_item" href="delivery.php">
							  <img class="" src="images/ico_member05.png" alt="">
								<div class="account-txt">
									<h4>運送方式</h4>
									<div class="txt02">商品享有到貨日起七天猶豫期</div>
								</div>
							</a>						
						</li>
						<li class="col-md-4 col-sm-4">
							<a class="account-box_item" href="return-policy.php">
							  <img class="" src="images/ico_member06.png" alt="">
								<div class="account-txt">
									<h4>退換貨說明</h4>
									<div class="txt02">申請「退貨」我們將盡速為您處理</div>
								</div>
							</a>						
						</li>
					</ul>
				</div>
			</div>
		</div>
		</div>
	</article>
</main>
<?php include '_footer.php';?>