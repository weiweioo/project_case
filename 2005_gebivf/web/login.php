<?php include '_header.php'; ?>
<link rel="stylesheet" type="text/css" href="SRC/css/inner-page.css" />

<main class="inner_page">
	<article>
		<div class="page_banner">
			<div class="page_banner_img">
				<img src="SRC/images/inb-1.jpg" alt="">
			</div>
		</div>
		<div class=""></div>
		<!-- 標題 -->
		<div class="bread">
			<div class="bre_con">
				<div class="page-title">
					<div class="page-title_ch">
						我的卵銀/登錄
					</div>
					<div class="page-title_en">
						My Egg Bank
					</div>
				</div>
				<ul class="bre_all">
					<li>
						<a href="index.php">
							首頁<span>/</span>
						</a>
					</li>
					<li>
						我的卵銀/登錄
					</li>

				</ul>
			</div>
		</div>
		<!-- 標題 -->
		<div class="page_con row">
			<div class="egg-bank-box  ">
				<div class="inp_tt01">
					<div class="inp_icon">
						<img src="SRC/images/in-logo.png" alt="">
					</div>
					卵銀理念
				</div>
				<div class="">
					<div class="user_editer">
						<div class="right_box_text">
							<div class="row">
								<div class="col-md-12">
									<p>
										<strong>全球卵銀為徐明義院長領軍一群專業醫療團隊</strong><br>
										因應全球晚婚不孕的危機與商機，創新世界一流生殖保存服務而創立的卵子保存銀行。
									</p>

								</div>
								<div class="col-md-12">
									<p>
										我們希望能能突破試管嬰兒高速發展瓶頸，解決優質卵子嚴重缺乏壓力提供一個能讓保存者完全安心的環境
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</article>
</main>

<script>
	/*UNIT mobile menu*/
	var acc = document.getElementsByClassName("mobile_list_menu");
	var i;

	for (i = 0; i < acc.length; i++) {
		acc[i].addEventListener("click", function() {
			this.classList.toggle("active");
			var panel = this.nextElementSibling;
			if (panel.style.maxHeight) {
				panel.style.maxHeight = null;
			} else {
				panel.style.maxHeight = panel.scrollHeight + "px";
			}
		});
	} // JavaScript Document
</script>


<?php include '_footer.php'; ?>