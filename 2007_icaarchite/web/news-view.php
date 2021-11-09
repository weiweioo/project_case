<link href="SRC/css/owl.carousel.css" rel="stylesheet" type="text/css" />
<link href="SRC/css/owl.theme.default.css" rel="stylesheet" type="text/css" />
<?php include('_header.php') ?>
<main>
	<section class="inp_area">
		<div class="inp-con">
			<div class="inp-tt01">
				<div class="en">
					NEWS
				</div>
				<div class="ch">最新消息</div>
			</div>
			<!-----詳細內容----->
			<div class="news-view">
				<div class="nv-top">
					<div class="nv-tt01">
						<div class="nv-t-L">
							<div class="n-type">
								金獎
							</div>
						</div>
						<div class="nv-t-R">
							<div class="n-date">
								2020.09.02
							</div>
							<div class="n-name">
								文化部南海工作坊室內裝修工程
							</div>
						</div>
					</div>

				</div>
				<div class="nv-bot">
					<div class="left-box">
						<div class="owl-carousel owl-theme">
							<div class="item">
								<img src="SRC/images/news1.jpg" alt="">
							</div>
							<div class="item">
								<img src="SRC/images/news2.jpg" alt="">
							</div>
							<div class="item">
								<img src="SRC/images/news3.jpg" alt="">
							</div>
						</div>
					</div>
					<div class="right-box">
						<div class="user_editor">
							<p>
								文化部南海工作坊10樓室內裝修工程委託規劃設計監造案
							</p>
						</div>
					</div>
				</div>
				<div class="back-to">
					<a href="news.php"><i class="back-icn fas fa-chevron-circle-left"></i>返回上頁</a>
				</div>
			</div>
		</div>
	</section>
</main>

<?php include('_footer.php') ?>

<script type="text/javascript" src="SRC/js/owl.carousel.min.js"></script>
<script>
	$('.owl-carousel').owlCarousel({
		loop: true,
		margin: 10,
		nav: false,
		dot: true,
		items: 1,

	})
</script>