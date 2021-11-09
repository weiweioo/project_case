// JavaScript Document
$(function(){
    $('select#sp3_t1').change(function()
        {
        if($(this).val()=="0"){
        $(".sp3t1ax01").fadeOut(100);
        }
        
        if($(this).val()=="1"){
        $(".sp3t1ax01").fadeIn(300);

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
        $(".sp3t2ax04").fadeOut(100);

        $(".sp_ship02").fadeOut(100);   
        }
        
        if($(this).val()=="3-1"){
        $(".sp3t2ax01").fadeIn(300);
        $(".sp3t2ax02").fadeOut(100);
		$(".sp3t2ax03").fadeOut(100);
        $(".sp3t2ax04").fadeOut(100);

        $(".sp_ship02").fadeOut(100);   
        }
        
        if($(this).val()=="3-2"){
        $(".sp3t2ax02").fadeIn(300);
        $(".sp3t2ax01").fadeOut(100);
		$(".sp3t2ax03").fadeOut(100);
        $(".sp3t2ax04").fadeOut(100);

        $(".sp_ship02").fadeOut(100);   
        }
        
        if($(this).val()=="3-3"){
        $(".sp3t2ax03").fadeIn(300);
        $(".sp3t2ax01").fadeOut(100);
		$(".sp3t2ax02").fadeOut(100);
        $(".sp3t2ax04").fadeOut(100);

        $(".sp_ship02").fadeOut(100);		
        }

        if($(this).val()=="3-4"){
        $(".sp3t2ax04").fadeIn(300);
        $(".sp3t2ax01").fadeOut(100);
        $(".sp3t2ax02").fadeOut(100);
        $(".sp3t2ax03").fadeOut(100);
        
        $(".sp_ship02").fadeIn(300);
        
        }
    });
    
});

$(function(){
	$(".request").click(function(){
		$(".invoice_box").fadeToggle(800);
	});
});
