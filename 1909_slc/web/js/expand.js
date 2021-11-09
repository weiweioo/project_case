$(document).ready(function(){
	
	$('#righteject strong').toggle(
	  function () {
		 $(this).addClass("rightejectthis").next("div").animate({width: '+200px'}, "100");
	  },
	  function () {
		$(this).removeClass("rightejectthis").next("div").animate({width: '-200px'}, "100");
	  }
	);
	/*下面這一句只是為了讓標題中的文本垂直居中，如果你使用圖片做tit或者你知道span的高度，你可以刪除它，在.rightejecttit span寫上margin-top:span高度的一半*/
	$('#righteject strong span').css("margin-top",-$('#righteject strong span').height()*0.5);

});


