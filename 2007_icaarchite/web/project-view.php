<?php include('_header.php') ?>



<main>
	<section class="inp_area">
		<div class="inp-con">
			<div class="inp-tt01">
				<div class="en">
					PROJECT
				</div>
				<div class="ch">
					專案作品
				</div>
			</div>
			<!-----內頁選單----->
			<div class="inp_link">
				<a href="project.php" class="active">建案實績</a>
				<a href="project.php">室內設計</a>
				<a href="project.php">交通設施</a>
			</div>
			<!-----詳細內容----->
			<div class="pj-view-main">
				<div class="pro-top">
					<div class="pro-view">
						<div class=" view-pic">
							<a href="SRC/images/pro2-1.jpg" data-fancybox data-width="1000">
								<img src="SRC/images/pro2-1.jpg" class="img-fluid">
								<i class="p-ic fas fa-expand"></i>
							</a>
						</div>
						<div class=" view-pic">
							<a href="SRC/images/pro2-2.jpg" data-fancybox data-width="1000">
								<img src="SRC/images/pro2-2.jpg" class="img-fluid">
								<i class="p-ic fas fa-expand"></i>
							</a>
						</div>
						<div class=" view-pic">
							<a href="SRC/images/pro2-3.jpg" data-fancybox data-width="1000">
								<img src="SRC/images/pro2-3.jpg" class="img-fluid">
								<i class="p-ic fas fa-expand"></i>
							</a>
						</div>
						<div class=" view-pic">
							<a href="SRC/images/pro2-1.jpg" data-fancybox data-width="1000">
								<img src="SRC/images/pro2-1.jpg" class="img-fluid">
								<i class="p-ic fas fa-expand"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="user_editor">
					<div class="pro-bot row">
						<div class="pro-detail col-12 col-lg-9">
							<div class="p-tt01">
								國強段幼兒園
							</div>
							<p class="p-p">
								利用周圍"登山步道"意象延伸至幼兒園，連接二樓大型遊戲室空間，使孩童愉快遊樂。
								利用周圍"登山步道"意象延伸至幼兒園，連接二樓大型遊戲室空間，使孩童愉快遊樂。
								利用周圍"登山步道"意象延伸至幼兒園，連接二樓大型遊戲室空間，使孩童愉快遊樂。
							</p>
						</div>
						<div class="pro-info col-12 col-lg-3">
							<ul>
								<li>地區：台灣-桃園</li>
								<li>年份：2019</li>
								<li>全區規劃/建築設計/景觀設計</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="back-to">
					<a href="project.php"><i class="back-icn fas fa-chevron-circle-left"></i>返回上頁</a>
				</div>
			</div>
		</div>
	</section>
</main>

<?php include('_footer.php') ?>

<!-- 圖片輪播 -->
<script>
	if ($('.pro-view').length > 0) {
		$('.pro-view').slick({
			slidesToShow: 3,
			slidesToScroll: 1,
			centerMode: true,
			autoplay: true,
			autoplaySpeed: 10000,
			centerPadding: '70px',
			responsive: [{
					breakpoint: 1200,
					settings: {
						centerPadding: '160px',
						slidesToShow: 1
					}
				},
				{
					breakpoint: 768,
					settings: {
						arrows: true,
						centerPadding: '0px',
						slidesToShow: 1
					}
				}
			]
		});
	}
</script>

<!-- 圖片輪播 -->