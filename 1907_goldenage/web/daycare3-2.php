<?php include '_header.php'; ?>
<main class="content">
    <article>
        <div class="page-banner">
            <div class="page-banner_box">
                <div class="page-banner_info">
                    <h2 class="page-banner_info_title">
                        日照中心
                    </h2>
                </div>
            </div>
        </div>
        <div class="page-content index_5Ghomeservice index_page-detail row fadeInUp animated">
            <div class="side_menu col-md-3 col-sm-3">
                <?php include '_careMenu.php'; ?>
            </div>
            <div class="right-wrap  col-md-9 col-sm-12 dc-name">
                <div class="article-name">
                    <h3>入托申請流程</h3>
                </div>
                <div class="page-inner user_editor">
                    <div class="daycare">
                        <div class="step">
                            <a href="images/daycare/step-1.jpg" data-fancybox="images">
                                <img src="images/daycare/step-1.jpg" alt="申請入托程序" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="backBtn">
                    <a href="javascript:history.back(1)" title="回上頁">
                        回上頁
                    </a>
                </div>
            </div>
        </div>

    </article>
</main>
<?php include '_footer.php'; ?>

<script>
    $('.dcfac_pic').slick({
        autoplay: true,
        speed: 800,
        arrows: false,

    });
</script>