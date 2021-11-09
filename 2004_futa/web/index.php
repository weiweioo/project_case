<?php include('_header.php') ?>

<!-- <section class="banner"><img src="SRC/images/banner.jpg" alt=""></section> -->
<!-- banner -->
<section>
    <div class="banner">
        <div><img src="SRC/images/banner.jpg" alt=""></div>
        <div><img src="SRC/images/banner-new.png" alt=""></div>
    </div>
    <div class="mobile_banner">
        <div><img src="SRC/images/mobile_banner.jpg" alt=""></div>
        <div><img src="SRC/images/mobile_banner_new.png" alt=""></div>
    </div>
</section>
<!-- banner -->

<section class="about">
    <div class="about_info">
        <div class="about_tittle">
            <div class="about_tittle_left">
                <h1>福大材料科技股份有限公司</h1>
            </div>
            <div class="about_tittle_right">
                <h2>FUTA Material Technology</h2>
            </div>
        </div>
        <div class="about_text">
            <p class="user_editor">
                福大材料科技股份有限公司-紡織事業經營近50年之久，胚布不斷的研究、開發新產品，提升產品品質，力求少量多樣化，充分供應客戶需求，增加產品附加價值及市場佔有率，近年正式跨足綠能事業，提供中小型太陽能發電站安裝規劃，更跨足醫材供應事業，因應新型冠狀病毒開發一系列的產品，如防護衣、口罩襯墊、洗手液等產品，至今我們仍秉持環境綠能、保護地球，滿足客戶的需求。
            </p>
            <a class="about_btn" href="about.php">VIEW MORE</a>
        </div>
    </div>
</section>
<section>
    <div class="about_mobile">
        <h1>福大材料科技股份有限公司</h1>
        <p>福大材料科技股份有限公司-紡織事業經營近50年之久，胚布不斷的研究、開發新產品，提升產品品質，力求少量多樣化，充分供應客戶需求，增加產品附加價值及市場佔有率，近年正式跨足綠能事業，提供中小型太陽能發電站安裝規劃，更跨足醫材供應事業，因應新型冠狀病毒開發一系列的產品，如防護衣、口罩襯墊、洗手液等產品，至今我們仍秉持環境綠能、保護地球，滿足客戶的需求。</p>
    </div>
</section>

<section class="company">
    <a class="company_item" href="https://sites.google.com/view/futaitextile-english/%E9%A6%96%E9%A0%81" target="_blank">
        <div class="company_img">
            <img src="SRC/images/company01.jpg" alt="">
            <h2>紡織事業部</h2>
        </div>
        <div class="company_info">
            <h2>紡織事業部</h2>
        </div>
    </a>
    <a class="company_item" href="http://www.futage.com.tw/" target="_blank">
        <div class="company_img">
            <img src="SRC/images/company02.jpg" alt="">
            <h2>綠能事業部</h2>
        </div>
        <div class="company_info">
            <h2>綠能事業部</h2>
        </div>
    </a>
    <a class="company_item" href="https://sites.google.com/view/futamedical-materials-chinese/%E9%A6%96%E9%A0%81" target="_blank">
        <div class="company_img">
            <img src="SRC/images/company03.jpg" alt="">
            <h2>醫材事業部</h2>
        </div>
        <div class="company_info">
            <h2>醫材事業部</h2>
        </div>
    </a>
</section>

<script type="text/javascript" src="SRC/js/slick.min.js"></script>
<script>
    $('.banner').slick({
        accessibility: false,
        adaptiveHeight: false,
        dots: false,
        autoplaySpeed: 2000,
        // speed: 1000,
        autoplay: true,
        prevArrow: false,
        nextArrow: false,
        fade: false,
    });

    $('.mobile_banner').slick({
        accessibility: false,
        adaptiveHeight: false,
        dots: false,
        autoplaySpeed: 2000,
        // speed: 1000,
        autoplay: true,
        prevArrow: false,
        nextArrow: false,
        fade: false,
    });
</script>

<?php include('_footer.php') ?>