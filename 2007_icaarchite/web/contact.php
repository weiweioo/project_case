<?php include('_header.php') ?>
<main>
	<section class="inp_area">
		<div class="inp-con">
			<div class="inp-tt01">
				<div class="en">
					CONTACT US
				</div>
				<div class="ch">聯絡我們</div>
			</div>
			<!-----詳細內容----->
			<!-- 標題限制23字 -->
			<div class="con_info">
				<div class="con-left">
					<!-- <div class="con_logo">
						<img src="SRC/images/logo.png" alt="">
					</div> -->
					<div class="con_detail">
						<ul>
							<li>
								<div class="con_tt01">地址</div>
								<span>|</span>
								<div class="con_tt02">
									10084 台北市中正區羅斯福路二段70號5樓之2
								</div>
							</li>
							<li>
								<div class="con_tt01">電話</div>
								<span>|</span>
								<div class="con_tt02">
									02-23219507
								</div>
							</li>
							<li>
								<div class="con_tt01">傳真</div>
								<span>|</span>
								<div class="con_tt02">
									02-23219570
								</div>
							</li>
							<li>
								<div class="con_tt01">信箱</div>
								<span>|</span>
								<div class="con_tt02">
									ICA.archite@gmail.com
								</div>
							</li>
						</ul>
						<div class="con-map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3615.2009338433745!2d121.51983156537862!3d25.02725419471499!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a99cfcd54b35%3A0x6eb5d65a3df04dc8!2z5Ym15qeL5bu656-J5bir5LqL5YuZ5omA!5e0!3m2!1szh-TW!2stw!4v1599056133987!5m2!1szh-TW!2stw" width="450" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
						</div>
					</div>

				</div>
				<div class="con-right">
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
								<div class="con_form_tit"><span>*</span>詢問</div>
								<textarea type="textarea" rows="4" class="" required="" name="content" placeholder="請輸入您想詢問的問題"></textarea>
							</li>
							<li class="code">
								<div class="con_form_tit"><span>*</span>驗證</div>
								<div class="num">
									<input type="text" placeholder="請輸入驗證碼" required="" class="" name="code">
									<div class="num_pic">
										<img src="SRC/images/code_img.png" alt="">
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
	</section>
</main>

<?php include('_footer.php') ?>