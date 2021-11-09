            <!-- 浮動ICON -->
            <div href="javascript:" id="fix-link" class="fadeIn animated">
            	<div class="line01"></div>
            	<a href="https://www.facebook.com/itcmg/?ref=bookmarks" class="side-btn" title="另開視窗連結至金色年代的FB" target="_blank">
            		<img class="" src="images/ico_side01.png" alt="金色年代的FB">
            	</a>
            	<a href="https://page.line.me/jbd4160r" class="side-btn" title="另開視窗連結至金色年代的line">
            		<img class="" src="images/ico_side02.png" alt="金色年代的line">
            	</a>
            	<a href="http://www.tcmg.com.tw/apptransurl/index.asp" class="side-btn" title="另開視窗連結至金色年代的app store">
            		<img class="" src="images/ico_side03.png" alt="金色年代的app store">
            	</a>
            	<a href="#" class="side-btn" title="另開視窗連結至金色年代的Messenger">
            		<img class="" src="images/ico_side04.png" alt="金色年代的Messenger">
            	</a>
            	<a href="#" class="side-btn" title="另開視窗連結至金色年代的服務電話">
            		<img class="" src="images/ico_side05.png" alt="金色年代的電話">
            	</a>
            	<a href="#" class="side-btn2" title="回到頂端">
            		<img class="" src="images/ico_side06.png" alt="回到頂端TOP">
            	</a>
            	<div class="line02"></div>
            </div>
            <!-- 浮動ICON -->
            <footer class="content">
            	<div class="foot_box row indexContent content">
            		<div class="col-sm-4 col-sm-push-8 foot-logo">
            <!-- <div class="txt">訂閱電子報</div>
			<form>
				<label for="email" class="account_title">
				</label>
				<input class="account_inpt email" type="email" value="" placeholder="請輸入email" name="" id="email">
				<div class="confirm">
					<label for="send">
					</label>
					<input type="submit" class="select_bnt01 send-bnt" value="送出" name="send" id="send">
				</div>
			</form> -->
            			<img class="pic" src="images/img_f-logo.png" alt="金色年代長照機構">
            			<div class="phone">客服電話：03-4629292</div>
            			<div class="ico-contact">
            				<a href="#" target="_blank" title="facebook">
            					<img class="" src="images/ico_fb.png" alt="facebook">
            				</a>
            				<a href="#" target="_blank" title="line">
            					<img class="" src="images/ico_line.png" alt="line">
            				</a>
            			</div>
            		</div>
            		<div class="col-sm-8 col-sm-pull-4 foot-menu">
            			<div class="">
            				<a href="news-list.php" title="最新消息">
            					最新消息
            				</a>
            				<a href="team.php" title="服務團隊">
            					服務團隊
            				</a>
							<a href="about.php" title="關於我們">
            					關於我們
            				</a>
            			</div>
            			<div class="">
            				<a href="carehome-list.php" title="護理之家">
            					護理之家
            				</a>
            				<a href="daycare1-1.php" title="日照中心">
            					日照中心
            				</a>
            				<a href="5Ghomeservice1-1.php" title="5G居家照顧">
            					5G居家照顧
            				</a>
            				<a href="comser01.php" title="社區整體照顧服務中心">
            					社區整體照顧服務中心
            				</a>
            			</div>
            			<div class="">
            				<a href="recruit.php" title="成為夥伴">
            					成為夥伴
            				</a>
            				<a href="http://www.tcmg.com.tw/" title="天成醫療體系">
            					天成醫療體系
            				</a>
            			</div>
            			<div class="">
            				<a href="contact.php" title="聯絡我們">
            					聯絡我們
            				</a>
            				<a href="prod-list.php" title="產品介紹">
            					產品介紹
            				</a>
            			</div>
            			<div class="">
            				<a href="member-account.php" title="會員中心">
            					會員中心
            				</a>
            				<a href="cart.php" title="購物系統">
            					購物系統
            				</a>
            				<a href="privacy.php" title="隱私權政策">
            					隱私權政策
            				</a>
            			</div>
            		</div>
            	</div>
            	<div class="foot_bottom">
            		<div class="foot_bottom_info">
            			<div class="text01">
            				© 2019 金色年代長照機構 All rights reserved.
            				<a href="https://www.jddt.tw/" target="_blank" class="text02" title="Designed by JDDT『另開新視窗』">
            					Designed by JDDT.
            				</a>
            			</div>
            		</div>
            	</div>
            </footer>
            <script>
            	$(window).scroll(function() {
            		if ($(this).scrollTop() >= 100) {
            			$('#fix-link').fadeIn("fast")
            		} else {
            			$('#fix-link').fadeOut("fast")
            		}
            	});
            	$('#fix-link').click(function() {
            		$('body,html').animate({
            				scrollTop: 0
            			},
            			500)
            	});
            </script>
            </body>
            </html>