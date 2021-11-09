<?php include '_header.php';?>
<link rel="stylesheet" type="text/css" href="SRC/css/inner_page.css"/>

<script type="text/javascript" src="SRC/js/jquery.twzipcode.min.js"></script>

<script type="text/javascript" src="SRC/js/jquery-ui.js"></script>
<link rel="stylesheet" type="text/css" href="SRC/css/jquery-ui.css"/>

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

				<div class="page-login_block">
					<div class="page-title">
						<img class="page-deco" src="images/img_pageDeco.png" alt=""> 會員註冊
					</div>
					<form>
						<div class="page_account_form">
							<div class="remind_tt">
								*字號為必要填寫資訊
							</div>
							<ul>
								<li>
									<div class="account_title">
										<span>
                                                *
                                            </span>
										E-mail：
									</div>
									<input type="text" class="account_inpt" required="required" value="" placeholder="E-mail為您的登入帳號">
								</li>
								<li>
									<div class="account_title">
										<span>
                                                *
                                            </span>
										密碼：
									</div>
									<input class="account_inpt" type="password" placeholder="請輸入6位數以上英數混合字元，密碼大小寫有差別" value="" required="required">
								</li>
								<li>
									<div class="account_title">
										<span>
                                                *
                                            </span>
										確認密碼：
									</div>
									<input required="required" class="account_inpt" type="password" placeholder="請再輸入一次密碼做為確認" value="">
								</li>
								<li>
									<div class="account_title">
										<span>
                                                *
                                            </span>
										姓名：
									</div>
									<input type="text" class="account_inpt" required="required" value="" placeholder="請輸入您的姓名">
								</li>
								<li>
									<div class="account_title">
										<span>
                                                *
                                            </span>
										性別：
									</div>
									<input name="radio" type="radio" id="radio" value="radio"/> 先生
									<input type="radio" name="radio" id="radio2" value="radio" checked="checked"/> 小姐
								</li>
								<li>
									<div class="account_title">
										<span>
                                                *
                                            </span>
										生日：
									</div>
									<input class="account_inpt" type="text" id="birthday" placeholder="生日" required="required" value=""/>
									<script type="text/javascript">
										// date picker
										$( '#birthday' ).datepicker( {
											changeMonth: true,
											changeYear: true,
											yearRange: "-100:+0",
											maxDate: 0,
											onSelect: function () {
												handleLabel( $( this ) );
											}
										} );
									</script>
								</li>
								<li>
									<div class="account_title">
										<span>
                                                *
                                            </span>
										手機：
									</div>
									<input type="text" class="account_inpt" required="required" value="" placeholder="請輸入您的手機">
								</li>
								<li>
									<div class="account_title"><span>*</span>地址：</div>
									<div class="add twzipcode">
										<div data-role="county1" data-style="mem_add_st_inpt" class="add_inpt add-m" data-value="110"></div>
										<div data-role="district1" data-style="mem_add_st_inpt" class="add_inpt add-m" data-value="臺北市"></div>
										<div data-role="zipcode1" data-style="mem_add_st_inpt" class="add_inpt add-m" data-value="信義區"></div>
									</div>
									<script type="text/javascript">
										$( '.twzipcode' ).twzipcode();
										$.datepicker.setDefaults( $.datepicker.regional[ "zh-TW" ] );
									</script>


								</li>
								<li>
									<div class="account_title add-space"></div>

									<input class="account_inpt" type="text" required="required">

								</li>
								<li>
									<div class="account_title">
										<span>
                                                *
                                            </span>
										驗 證 碼：
									</div>
									<input type="text" class="menber_loginbox_inpt" data-account="驗證碼" placeholder="請輸入驗證碼">


								</li>
								<li>
									<div class="account_title">

									</div>
									<div class="menber_loginbox_verification">
										<img src="images/verification_bemo.jpg" alt="">
									</div>
								</li>

							</ul>
							<div class="agreement">
								<input type="radio" name="" id="" required="required"> 我已詳細閱讀<a href="privacy.php">會員條款</a>

							</div>
							<div class="confirm_wrap">
								<div class="confirm_modify_box02">
									<button type="button" class="select_bnt02 bnt">
                                            重新填寫
                                        </button>
								
								</div>
								<div class="confirm_next_box02">
									<!--<input type="submit" class="select_bnt01 bnt" value="確認送出">-->
									<a href="index.php">
                                            <button type="button" class="select_bnt01 bnt">
                                                確認送出
                                            </button>
                                        </a>
								
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</article>
</main>
<?php include '_footer.php';?>
<script>
	$( document ).ready( function () {
		// fancy box 
		$( '.fancyBox' ).fancybox();
		// styled input
		$( 'input[type="text"], input[type="password"]' ).keyup( function () {
			var tmpval = $( this ).val();
			if ( tmpval == '' ) {
				$( this ).removeClass( 'active' ).siblings( 'label' ).removeClass( 'active' );
			} else {
				$( this ).addClass( 'active' ).siblings( 'label' ).addClass( 'active' );
			}
		} );



	} );
</script>