<?php include '_header.php'; ?>
<link rel="stylesheet" type="text/css" href="SRC/css/inner-page.css" />

<main class="inner_page">
	<article>
		<div class="page_banner">
			<div class="page_banner_img">
				<img src="SRC/images/inb-8.jpg" alt="">
			</div>
		</div>
		<!-- 標題 -->
		<div class="bread">
			<div class="bre_con">
				<div class="page-title">
					<div class="page-title_ch">
						聯絡我們
					</div>
					<div class="page-title_en">
						Contact Us
					</div>
				</div>
				<ul class="bre_all">
					<li>
						<a href="index.php">
							首頁<span>/</span>
						</a>
					</li>
					<li>
						聯絡我們
					</li>
				</ul>
			</div>
		</div>
		<!-- 標題 -->
		<div class="page_con row">
			<div class="con_info">
				<div class="con-left">
					<div class="con_logo">
						<img src="SRC/images/logo-black.png" alt="">
					</div>
					<div class="con_detail">
						<ul>
							<li>
								<div class="con_tt01">網址</div>
								<span>|</span>
								<div class="con_tt02">
									<a href="index.php">www.asiapfha.com</a>
								</div>
							</li>
							<li>
								<div class="con_tt01">地址</div>
								<span>|</span>
								<div class="con_tt02">
									台北市大安區敦化南路2段39號12樓
								</div>
							</li>
							<li>
								<div class="con_tt01">電話</div>
								<span>|</span>
								<div class="con_tt02">
									02-2709-9966
								</div>
							</li>
							<li>
								<div class="con_tt01">傳真</div>
								<span>|</span>
								<div class="con_tt02">
									02-2709-2878
								</div>
							</li>
							<li>
								<div class="con_tt01">信箱</div>
								<span>|</span>
								<div class="con_tt02">
									contactme@huayuivf.com
								</div>
							</li>
							<li>
								<div class="con_tt01">統編</div>
								<span>|</span>
								<div class="con_tt02">
									27092878
								</div>
							</li>
						</ul>
						<div class="con-map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3615.0696039405448!2d121.54702211540048!3d25.031711844536215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442abcd6f8a6a0d%3A0xb79d2375ef9cfe68!2zMTA25Y-w5YyX5biC5aSn5a6J5Y2A5pWm5YyW5Y2X6Lev5LqM5q61MznomZ8xMg!5e0!3m2!1szh-TW!2stw!4v1595834461735!5m2!1szh-TW!2stw" width="400" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
						</div>
					</div>

				</div>
				<div class="con-right">
					<div class="tt01">
						客戶意見表
					</div>
					<form>
						<ul>
							<li>
								<div class="con_form_tit"><span>*</span>姓名</div>
								<input type="text" class="con_from_inp" required="" placeholder="姓名" name="name">
							</li>
							<li>
								<div class="con_form_tit"><span>*</span>電話</div>
								<input type="text" class="con_from_inp" required="" placeholder="聯絡電話" name="tel">
							</li>
							<li>
								<div class="con_form_tit"><span>*</span>信箱</div>
								<input type="text" class="con_from_inp" required="" placeholder="Email" name="email">
							</li>
							<li>
								<div class="con_form_tit"><span>*</span>意見</div>
								<textarea type="textarea" rows="4" class="" required="" name="content" placeholder="您的意見"></textarea>
							</li>
							<li class="">
								<div class="con_form_tit"><span>*</span>驗證</div>
								<div class="num">
									<input type="text" placeholder="請輸入驗證碼" required="" class="" name="code">
									<div class="num_pic">
										<img src="http://www.tsongyo.com.tw/tw/contact/code_img" alt="">
									</div>
								</div>
							</li>
							<li class="con_btn">
								<button class="con_clear" type="reset" value="清除">清除</button>
								<button class="con_send" type="submit" value="送出">送出</button>
							</li>

						</ul>

					</form>
				</div>
			</div>
		</div>
	</article>
</main>


<?php include '_footer.php'; ?>