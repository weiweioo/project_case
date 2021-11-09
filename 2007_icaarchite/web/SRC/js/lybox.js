

// jumpbox =======================================================

$( function () {
	$( '.jump_i' ).click( function () {
		$( '.jump_box' ).fadeIn();
		$( '.jump_ly_box' ).show();
	} );

	$( '.jump_close ,.jump_close_butt' ).click( function () {
		$( '.jump_box' ).fadeOut();
		$( '.jump_ly_box' ).hide();
	} );
} );


$( function () {
	$( '.jump02' ).click( function () {
		$( '.jump_box02' ).fadeIn();
		$( '.jump_ly_box02' ).show();
	} );

	$( '.jump_close02 ,.jump_close_butt02' ).click( function () {
		$( '.jump_box02' ).fadeOut();
		$( '.jump_ly_box02' ).hide();
	} );
} );


$( function () {
	$( '.jump03' ).click( function () {
		$( '.jump_box03' ).fadeIn();
		$( '.jump_ly_box03' ).show();
	} );

	$( '.jump_close03 ,.jump_close_butt03' ).click( function () {
		$( '.jump_box03' ).fadeOut();
		$( '.jump_ly_box03' ).hide();
	} );
} );
