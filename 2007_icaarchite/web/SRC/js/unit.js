/*mobile_menu*/
$(".mobile_menu").click(
 function() {
	 $(this).toggleClass("on");
  //toggle 像電燈般開闔物件
  $(this).find("#menu").slideToggle("1000");
 }
);
/*mobile_menu_window*/
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.documentElement.scrollTop > 200) {
    	document.getElementById("navbar").style.background = "rgba(0,0,0,0.72)";
	  	document.getElementById("navbar").style.height = "100px";
  } else {
    
	  document.getElementById("navbar").style.background = "rgba(0,0,0,0)";
	  document.getElementById("navbar").style.height = "130px";
  }
}
/*href*/
$(document).on("click", 'a[href^="#"]', function(event) {
  event.preventDefault();
  $("html, body").animate(
    {
      scrollTop: $($.attr(this, "href")).offset().top
    },
    1000
  );
});

/*banner*/
$('.banner').slick({
  dots: true,
  infinite: true,
  speed: 500,
  fade: true,
  cssEase: 'linear',
		arrows:false,
		autoplay:true
});
/*banner_mobile*/
$('.banner_mobile').slick({
  dots: true,
  infinite: true,
  speed: 500,
  fade: true,
  cssEase: 'linear',
		arrows:false,
		autoplay:false
});
/*news_slick*/
$('.news_slick').slick({
  dots: true,
  infinite: true,
  speed:500,
  autoplay:true,
  arrows:true,
		fade: true,
  cssEase: 'linear',
});
/*mp4_box*/
$('.mp4_box').slick({
  dots: true,
  infinite: true,
  speed:500,
  autoplay:true,
  arrows:true,
		fade: true,
  cssEase: 'linear',
});
/*award*/
$('.award').slick({
  slidesToShow:5,
  slidesToScroll: 1,
  autoplay:true,
  autoplaySpeed: 2500,
  infinite: true,
  dots: true,
		responsive: [{
                breakpoint: 1366,
                settings: {
					 autoplaySpeed: 2500,
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
					{
                breakpoint: 1100,
                settings: {
					 autoplaySpeed: 2500,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
					 
					 {
                breakpoint: 767,
                settings: {
					 autoplaySpeed: 2500,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
					 
            
            ]
		
});
/*research_itm*/
$('.research_itm').slick({
  dots:false,
  infinite: true,
  speed:500,
  autoplay:true,
  arrows:false,
  fade: true,
  cssEase: 'linear',
});