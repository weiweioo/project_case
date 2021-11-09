	<div class="float_icon" id="f_icon">
		<!-- <a class="fi_bg" href="contact.php">
			<span>我要<br>諮詢</span>
		</a> -->
		<a class="fi_bg" href="contact.php">
			<span class="h-fli"><i class=" fi_line fab fa-line"></i></span>
			<span class="h-con">我要<br>諮詢</span>
		</a>
		<a class="fi_bg" href="login.php">
			<span>登錄<br>卵銀</span>
		</a>
		<a href="" id="top" class="">
			<img class="up" src="SRC/images/up.svg" alt="">
			<img class="up-h" src="SRC/images/up-h.svg" alt="">
			<span>TOP</span>
		</a>
	</div>
	<footer>
		<div class="foot-box">
			<div class="foot_L_box">
				<div class="fot_img">
					<a href="index.php">
						<img class="f-logo" src="SRC/images/logo-white.png" alt="">
					</a>
				</div>
				<div class="fot_detail">
					<ul class="box-1">
						<li>
							<a href="" target="_blank">
								<i class="fas fa-map-marker-alt"></i>
								台北市大安區敦化南路2段39號12樓
							</a>
						</li>
						<li>
							<a href="mailto:contactme@huayuivf.com ">
								<i class="fas fa-fax"></i>
								contactme@huayuivf.com
							</a>
						</li>

					</ul>
					<ul class="box-2">
						<li>
							<a href="tel:02-2709-9966">
								<i class="fas fa-phone"></i>
								02-2709-9966
							</a>
						</li>
						<li>
							<a href="tel:02-2709-2878">
								<i class="fas fa-envelope"></i>
								02-2709-2878
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="foot_R_box">
				<div class="text01">
					© 2020 GLOBAL EGG BANK All Rights Reserved.
					<a href="https://www.jddt.tw/" target="_blank" class="text02">
						Designed By JDDT.
					</a>
				</div>
			</div>
		</div>
	</footer>


	<script>
		$(window).scroll(function() {
			if ($(this).scrollTop() >= 50) { // If page is scrolled more than 50px
				$('#f_icon').fadeIn("fast"); // Fade in the arrow
			} else {
				$('#f_icon').fadeOut("fast"); // Else fade out the arrow
			}
		});
		$('#top').click(function() { // When arrow is clicked
			$('body,html').animate({
				scrollTop: 0 // Scroll to top of body
			}, 500);
		});
	</script>


	</body>

	</html>