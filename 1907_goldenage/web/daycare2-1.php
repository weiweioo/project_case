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
                    <h3>收費標準</h3>
                </div>
                <div class="page-inner user_editor">
                    <div class="daycare">
                        <div class="page-title">
                            <h4>活動課表</h4>
                            <p>
                                一週作息表
                            </p>
                        </div>
                        <div class="dc-table">
                            <table class="table table-striped table-bordered table-rwd">
                                <tr class="tr-only-hide">
                                    <th>時間</th>
                                    <th>週一</th>
                                    <th>週二</th>
                                    <th>週三</th>
                                    <th>週四</th>
                                    <th>週五</th>
                                </tr>
                                <tr>
                                    <td data-th="時間">08:00-09:00</td>
                                    <td data-th="週一至週五" colspan="5">讀報時間</td>
                                    <!-- <td data-th="週二">讀報時間</td>
                                    <td data-th="週三">讀報時間</td>
                                    <td data-th="週四">讀報時間</td>
                                    <td data-th="週五">讀報時間</td> -->
                                </tr>
                                <tr>
                                    <td data-th="時間">09:00-09:30</td>
                                    <td data-th="週一至週五" colspan="5">健康管理</td>
                                    <!-- <td data-th="週二">健康管理</td>
                                    <td data-th="週三">健康管理</td>
                                    <td data-th="週四">健康管理</td>
                                    <td data-th="週五">健康管理</td> -->
                                </tr>
                                <tr>
                                    <td data-th="時間">09:30-09:50</td>
                                    <td data-th="週一至週五" colspan="5">健康操</td>
                                    <!-- <td data-th="週二">健康操</td>
                                    <td data-th="週三">健康操</td>
                                    <td data-th="週四">健康操</td>
                                    <td data-th="週五">健康操</td> -->
                                </tr>
                                <tr>
                                    <td data-th="時間">09:50-10:00</td>
                                    <td data-th="週一至週五" colspan="5">休養生息</td>
                                    <!-- <td data-th="週二">休養生息</td>
                                    <td data-th="週三">休養生息</td>
                                    <td data-th="週四">休養生息</td>
                                    <td data-th="週五">休養生息</td> -->
                                </tr>
                                <tr>
                                    <td data-th="時間">10:00-11:00</td>
                                    <td data-th="週一">體能促進</td>
                                    <td data-th="週二">益智增能</td>
                                    <td data-th="週三">體能促進</td>
                                    <td data-th="週四">社會互動</td>
                                    <td data-th="週五">體能促進</td>
                                </tr>
                                <tr>
                                    <td data-th="時間">11:00-13:30</td>
                                    <td data-th="週一至週五" colspan="5">午飯時間</td>
                                    <!-- <td data-th="週二">午飯時間</td>
                                    <td data-th="週三">午飯時間</td>
                                    <td data-th="週四">午飯時間</td>
                                    <td data-th="週五">午飯時間</td> -->
                                </tr>
                                <tr>
                                    <td data-th="時間">13:30-14:00</td>
                                    <td data-th="週一至週五" colspan="5">生活智慧王</td>
                                    <!-- <td data-th="週二">生活智慧王</td>
                                    <td data-th="週三">生活智慧王</td>
                                    <td data-th="週四">生活智慧王</td>
                                    <td data-th="週五">生活智慧王</td> -->
                                </tr>
                                <tr>
                                    <td data-th="時間">14:00-15:30</td>
                                    <td data-th="週一">文藝心理</td>
                                    <td data-th="週二">體能促進</td>
                                    <td data-th="週三">社會互動</td>
                                    <td data-th="週四">體能促進</td>
                                    <td data-th="週五">烘焙</td>
                                </tr>
                                <tr>
                                    <td data-th="時間">15:30-16:00</td>
                                    <td data-th="週一至週五" colspan="5">點心時間</td>
                                    <!-- <td data-th="週二">點心時間</td>
                                    <td data-th="週三">點心時間</td>
                                    <td data-th="週四">點心時間</td>
                                    <td data-th="週五">點心時間</td> -->
                                </tr>
                                <tr>
                                    <td data-th="時間">16:00-17:00</td>
                                    <td data-th="週一至週五" colspan="5">長者賦歸</td>
                                    <!-- <td data-th="週二">長者賦歸</td>
                                    <td data-th="週三">長者賦歸</td>
                                    <td data-th="週四">長者賦歸</td>
                                    <td data-th="週五">長者賦歸</td> -->
                                </tr>
                            </table>
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