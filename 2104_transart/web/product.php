<?php include('_head.php') ?>
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css" />

<div class="main_top"></div>

<div class="page_top">
    <div class="page-banner" style="background-image: url('images/demo/pg-banner04.jpg')">
        <div class="banner_ttbox wow fadeInDown">
            <h2>產品介紹</h2>
        </div>
    </div>
    <aside class="inp-menu">
        <div class="top-menu-box">
            <div class="box-4">
                <div class="mobile_list_menu">產品介紹列表</div>
                <ul class="menu">
                    <li>
                        <a href="product.php" class="unit_link unit_active">最新商品</a>
                    </li>
                    <li><a href="product.php" class="unit_link">水轉系列</a></li>
                    <li><a href="product.php" class="unit_link">自黏系列</a></li>
                    <li><a href="product.php" class="unit_link">熱轉系列</a></li>
                    <li><a href="product.php" class="unit_link">其他系列</a></li>
                </ul>
            </div>
        </div>
    </aside>
</div>
<main>
    <section class="contant-box wow fadeInUp">
        <div class="content">
            <div class="articleTitle03">
                <div class="ch">最新商品</div>
                <div class="en">new products</div>
            </div>
            <div class="product-list">
                <ul>
                    <?php for ($i = 0; $i < 9; $i++) {  ?>
                        <li>
                            <a href="product_view.php">
                                <div class="product-box">
                                    <div class="product-pic">
                                        <img src="images/demo/list-pd01.jpg" alt="">
                                    </div>
                                    <div class="name">
                                        煥彩系列
                                    </div>
                                </div>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <!-- <div class="inp_pagination">
        <nav aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
              </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">2</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
              </a>
            </li>
          </ul>
        </nav>
      </div> -->
        </div>

    </section>
    <!-- 右側內容 -->

</main>
<?php include('_foot.php') ?>

<script type="text/javascript" src="js/jquery-ui.min.js"></script>