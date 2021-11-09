  <div class="side_menu_title">
                            <img class="doll" src="images/img_doll.png" alt="">
                            <span class="txt">
                                商品櫥窗
                            </span>
                            <img class="en" src="images/img_sideTitle01.png" alt="">
                        </div>
                        <div class="side_menu_info">
                            <ul>
                                <li class="flip">
                                    <div class="flip_title menu_list">
                                        <img class="deco-title" src="images/img_sideDeco.png" alt="">
                                        活動區
                                        <div class="down">
                                            +
                                        </div>
                                    </div>
                                    <ul class="subs" style="display: block;">
                                       
                                        <li>
                                            <a href="product-list.php">
                                                新品區
                                            </a>
                                        </li>
                                        <li>
                                            <a href="product-list.php">
                                                人氣商品
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="flip">
                                    <a class="flip_title menu_list" href="product-optional.php">
                                        <img class="deco-title" src="images/img_sideDeco.png" alt="">
                                        任選區
                                    </a>
                                </li>
								  <li class="flip">
                                    <div class="flip_title menu_list">
                                        <img class="deco-title" src="images/img_sideDeco.png" alt="">
                                        寢飾
                                        <div class="down">
                                            +
                                        </div>
                                    </div>
                                    <ul class="subs" style="display: block;">
                                       
                                        <li>
                                            <a href="product-list.php">
                                               印花系列
 
                                            </a>
                                        </li>
                                        <li>
                                            <a href="product-list.php">
                                              天絲系列
                                            </a>
                                        </li>
										  <li>
                                            <a href="product-list.php">
                                              緹花‧蕾絲系列
                                            </a>
                                        </li>
										  <li>
                                            <a href="product-list.php">
                                              其他相關產品
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <img class="bg" src="images/bg_side.png" alt="">
                        </div>

	  <script>
	
			$( function () {
			$( "ul.subs" ).show(); 
			$( ".flip_title" )
				.click( function () {
					$( "ul.subs" ).slideUp();
					$( ".flip_title" ).removeClass( "open" );
					if ( $( "+ul", this ).css( "display" ) == "none" ) {
						$( "+ul", this ).slideDown();
						$( this ).addClass( "open" ); 
					}
				})
				.mouseover( function () {
					$( this ).addClass( "rollover" ); 
				} )
				.mouseout( function () {
					$( this ).removeClass( "rollover" ); 
				} );
			
		} );
		
        </script>