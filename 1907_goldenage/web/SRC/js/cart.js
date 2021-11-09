// JavaScript Document
$(function(){
    $('select#sp3_t1').change(function()
        {
        if($(this).val()=="0"){
        $(".sp3t1ax01").fadeOut(100);
        }
        
        if($(this).val()=="1"){
        $(".sp3t1ax01").fadeIn(300);
        $(".sp3t1ax02").fadeOut(100);
		$(".sp3t1ax03").fadeOut(100);

		$(".sp_ship01").fadeIn(300);
		$(".sp_ship02").fadeOut(100);			
        }
        
        if($(this).val()=="2"){
        $(".sp3t1ax02").fadeIn(300);
        $(".sp3t1ax01").fadeOut(100);
		$(".sp3t1ax03").fadeOut(100);
		
		$(".sp_ship01").fadeIn(300);
		$(".sp_ship02").fadeOut(100);	
        }
        
        if($(this).val()=="3"){
        $(".sp3t1ax03").fadeIn(300);
		$(".sp3t1ax01").fadeOut(100);
		$(".sp3t1ax02").fadeOut(100);
      
		$(".sp_ship01").fadeIn(300);
		$(".sp_ship02").fadeOut(100);
        }
        
    });
    
    $('select#sp3_t2').change(function()
        {
        if($(this).val()=="3-0"){
        $(".sp3t2ax01").fadeOut(100);
        $(".sp3t2ax02").fadeOut(100);
        $(".sp3t2ax03").fadeOut(100);
        }
        
        if($(this).val()=="3-1"){
        $(".sp3t2ax01").fadeIn(300);
        $(".sp3t2ax02").fadeOut(100);
		$(".sp3t2ax03").fadeOut(100);
        }
        
        if($(this).val()=="3-2"){
        $(".sp3t2ax02").fadeIn(300);
        $(".sp3t2ax01").fadeOut(100);
		$(".sp3t2ax03").fadeOut(100);
        }
        
        if($(this).val()=="3-3"){
        $(".sp3t2ax03").fadeIn(300);
        $(".sp3t2ax01").fadeOut(100);
		$(".sp3t2ax02").fadeOut(100);
		
		$(".sp_ship02").fadeIn(300);
		
        }
    });
    
});

// $(function(){
// 	$(".request").click(function(){
// 		$(".invoice_box").fadeToggle(800);
// 	});
// });

$('#request-3').click(function() {
    if ($(this).prop('checked')) {
        $('.request-box-4').slideUp();
        $('.request-box').slideDown();

        $('input[data-type="invoice3"]').removeAttr('name');
        $('input[data-type="invoice3"]').removeAttr('required');
        $('input[data-type="invoice2"]').eq(0).attr('name', 'invoice_title');
        $('input[data-type="invoice2"]').eq(1).attr('name', 'invoice_number');
    }
});

$('#request-4').click(function() {
    if ($(this).prop('checked')) {
        $('.request-box').slideUp();
        $('.request-box-4').slideDown();

        $('input[data-type="invoice2"]').removeAttr('name');
        $('input[data-type="invoice2"]').removeAttr('required');
        $('input[data-type="invoice3"]').eq(0).attr('name', 'invoice_title');
        $('input[data-type="invoice3"]').eq(0).prop('required', true);
        $('input[data-type="invoice3"]').eq(1).attr('name', 'invoice_number');
        $('input[data-type="invoice3"]').eq(1).prop('required', true);
    }
});
