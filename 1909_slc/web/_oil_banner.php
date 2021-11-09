<div class="index-banner02">
    <ul class="index-banner02-slick">
      <a href="javascript: void(0)">
        <img src="images/demo/oil_banner01.jpg" alt="">
      </a>
      <a href="javascript: void(0)">
        <img src="images/demo/oil_banner02.jpg" alt="">
      </a>
      <a href="javascript: void(0)">
        <img src="images/demo/oil_banner03.jpg" alt="">
      </a>
      <a href="javascript: void(0)">
        <img src="images/demo/oil_banner04.jpg" alt="">
      </a>
    </ul>
  </div>

  <link rel="stylesheet" type="text/css" href="css/slick.css" />
<link rel="stylesheet" type="text/css" href="css/slick-theme.css" />
<script type="text/javascript" src="js/effect01.js"></script>

<script>
  $(document).ready(function (){
    // index banner slick
    $('.index-banner02-slick').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      dots: true,
      fade: true,
      pauseOnHover: false,
      autoplay: true,
      autoplaySpeed: 5000,
    }); 
  });
</script>