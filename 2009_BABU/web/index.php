<?php include('_head.php') ?>
<!--wrapper-->
<div id="wrapper">
  <?php include('_menu.php') ?>
  <div class="index-banner">
    <ul class="index-banner-slick">
      <a href="javascript: void(0)">
        <img class="for_PC" src="SRC/images/banner01.jpg" alt="">
        <!-- <img class="for_mobile" src="images/demo/ind_banner_mobile01.jpg" alt=""> -->
      </a>
      <a href="javascript: void(0)">
        <img class="for_PC" src="SRC/images/banner02.jpg" alt="">
        <!-- <img class="for_mobile" src="images/demo/ind_banner_mobile02.jpg" alt=""> -->
      </a>
    </ul>
  </div>
  <main class="main-all index">
    <section class="wow fadeIn">
      <div class="content-all">
        <!-- 左側選單區塊 -->
        <?php include('_left_menu_index.php') ?>
        <!-- 左側選單區塊 -->
        <!-- 中間文章列表 -->
        <section class="right">
          <div class="right-top">
            <div class="title01 text_center">
              <ul>
                <li class="current"><a href="">熱門文章</a></li><span>|</span>
                <li><a href="">最新文章</a></li>
              </ul>
            </div>
            <div class="search">
              <form method="post" action="search.php">
                <div class="box">
                  <input class="sbox" type="text" placeholder="搜尋" />
                  <input class="sbtn" type="submit" value="" />
                </div>
              </form>
            </div>
          </div>
          <div class="index-art">
            <ul>
              <!-- 列表文章(點擊過按讚) -->
              <li class="art-list">
                <div class="art-top">
                  <!-- 列表-上方分類 -->
                  <ul class="art-sort">
                    <li><a href="">美妝新訊</a></li>
                  </ul>
                  <!-- //列表-上方分類 -->
                  <!-- 列表-右上分享、檢舉 -->
                  <div class="art-menu">
                    <i class="mu-ic fas fa-ellipsis-h"></i>
                    <ul class="am-lv2">
                      <li>
                        <a data-fancybox data-src="#report" href="javascript:;">檢舉</a>
                        <form style="display: none;" id="report" action="">
                          <div class="report-box">
                            <ul class="report-all">
                              <li class="tit">
                                檢舉此篇文章的原因?
                              </li>
                              <li>
                                <input class="form-check-input" type="radio" name="reports" id="report1" value="report" checked>
                                <label class="form-check-label" for="report1">
                                  中傷、歧視、挑釁或謾罵他人
                                </label>
                              </li>
                              <li>
                                <input class="form-check-input" type="radio" name="reports" id="report2" value="report">
                                <label class="form-check-label" for="report2">
                                  交換個人資料
                                </label>
                              </li>
                              <li>
                                <input class="form-check-input" type="radio" name="reports" id="report3" value="report">
                                <label class="form-check-label" for="report3">
                                  惡意洗板、重複張貼
                                </label>
                              </li>
                              <li>
                                <input class="form-check-input" type="radio" name="reports" id="report4" value="report">
                                <label class="form-check-label" for="report4">
                                  包含色情、露點、性騷擾或血腥恐怖等讓人不舒服之內容
                                </label>
                              </li>
                              <li>
                                <input class="form-check-input" type="radio" name="reports" id="report5" value="report">
                                <label class="form-check-label" for="report5">
                                  暴力、傷害他人或傷害動物的內容
                                </label>
                              </li>
                              <li>
                                <input class="form-check-input" type="radio" name="reports" id="report6" value="report">
                                <label class="form-check-label" for="report6">
                                  包含廣告、商業宣傳之內容
                                </label>
                              </li>
                              <li>
                                <input class="form-check-input" type="radio" name="reports" id="report7" value="report">
                                <label class="form-check-label" for="report7">
                                  文章發表在不適當的看板
                                </label>
                              </li>
                              <li>
                                <input class="form-check-input" type="radio" name="reports" id="report8" value="report">
                                <label class="form-check-label" for="report8">
                                  文章內容空泛或明顯無意義內容
                                </label>
                              </li>
                              <li>
                                <input class="form-check-input" type="radio" name="reports" id="report9" value="report">
                                <label class="form-check-label" for="report9">
                                  文章意圖號召他人按愛心，且無實質社會價值
                                </label>
                              </li>
                              <li>
                                <input class="form-check-input" type="radio" name="reports" id="report10" value="report">
                                <label class="form-check-label" for="report10">
                                  其他原因
                                </label>
                              </li>
                            </ul>
                            <div class="rp-btn">
                              <button type="submit" class="report btn">送出</button>
                            </div>
                          </div>
                        </form>
                      </li>
                      <!-- 檢舉 -->
                      <li>
                        <a href="javascript:;">分享至</a>
                        <div class="am-lv3">
                          <ul class="share-box">
                            <li><a href="javascript:;"><i class="share-ic fab fa-facebook-square"></i></a></li>
                            <li><a href="javascript:;"><i class="share-ic fab fa-instagram"></i></a></li>
                            <li><a href="javascript:;"><i class="share-ic fab fa-line"></i></a></li>
                          </ul>
                        </div>
                      </li>
                      <!-- 分享 -->
                    </ul>
                  </div>
                  <!-- //列表-右上分享、檢舉 -->
                </div>
                <div class="mid-box">
                  <div class="art-info">
                    <a class="" href="content_view.php">
                      <div class="art-txt">
                        <div class="title">琉璃水光特色唇釉</div>
                        <p>這次包裝很美，雖是壓克力外殼但感覺質感挺好，不會很塑料感</p>
                    </a>
                  </div>
                  <!-- 列表按讚(點擊過按讚)、回應、收藏 -->
                  <ul class="art-icon">
                    <li>
                      <a data-fancybox data-src="#ind-thumbs" href="javascript:;" title="按讚" class="current">
                        <div class="at-ic good"><i class="far fa-thumbs-up"></i></div>
                        <div class="h "><i class="fas fa-thumbs-up"></i></div>
                        按讚<span class="qty">666</span>
                      </a>
                      <div style="display: none;" id="ind-thumbs">
                        <div class="ind-thumbs">
                          <div class="tt01">
                            文章評價
                          </div>
                          <form action="">
                            <div class="rating">
                              <input type="radio" value="5" name="rating" id="rating-5" />
                              <label for="rating-5" title="5 stars"><i class="fas fa-3x fa-star"></i></label>
                              <input type="radio" value="4" name="rating" id="rating-4" />
                              <label for="rating-4" title="4 stars"><i class="fas fa-3x fa-star"></i></label>
                              <input type="radio" value="3" name="rating" id="rating-3" />
                              <label for="rating-3" title="3 stars"><i class="fas fa-3x fa-star"></i></label>
                              <input type="radio" value="2" name="rating" id="rating-2" />
                              <label for="rating-2" title="2 stars"><i class="fas fa-3x fa-star"></i></label>
                              <input type="radio" value="1" name="rating" id="rating-1" />
                              <label for="rating-1" title="1 star"><i class="fas fa-3x fa-star"></i></label>
                            </div>
                            <div class="ind-thumbs-sent">
                              <input type="submit" name="" value=" 送出" class="ind-thumbs-btn">
                            </div>
                          </form>
                        </div>
                      </div>
                    </li>
                    <!-- 按讚 -->
                    <li>
                      <a data-fancybox data-src="#ind-res" href="javascript:;" title="回應">
                        <div class="at-ic comment"><i class="far fa-comment-alt"></i></div>
                        <div class="h"><i class="fas fa-comment-alt"></i></div>
                        回應<span class="qty">66</span>
                      </a>
                      <div class="box-res" style="display: none;" id="ind-res">
                        <!-- =========回應彈跳視窗文章========= -->
                        <div class="main-art fan-res">
                          <div class="art-top">
                            <!-- 回應彈跳視窗文章-發文者資訊 -->
                            <div class="art-user">
                              <div class="acc-top-pic">
                                <img src="SRC/images/account-pic.jpg" alt="">
                              </div>
                              <div class="acc-info">
                                <div class="acc-usename">JDDT0311</div>
                              </div>
                            </div>
                            <!-- 回應彈跳視窗文章-發文者資訊 -->
                            <!-- 回應彈跳視窗文章-檢舉、分享 -->
                            <div class="art-menu">
                              <i class="mu-ic fas fa-ellipsis-h"></i>
                              <ul class="am-lv2">
                                <li>
                                  <a data-fancybox data-src="#report" href="javascript:;">檢舉</a>
                                  <form style="display: none;" id="report" action="">
                                    <div class="report-box">
                                      <ul class="report-all">
                                        <li class="tit">
                                          檢舉此篇文章的原因?
                                        </li>
                                        <li>
                                          <input class="form-check-input" type="radio" name="reports" id="report1" value="report" checked>
                                          <label class="form-check-label" for="report1">
                                            中傷、歧視、挑釁或謾罵他人
                                          </label>
                                        </li>
                                        <li>
                                          <input class="form-check-input" type="radio" name="reports" id="report2" value="report">
                                          <label class="form-check-label" for="report2">
                                            交換個人資料
                                          </label>
                                        </li>
                                        <li>
                                          <input class="form-check-input" type="radio" name="reports" id="report3" value="report">
                                          <label class="form-check-label" for="report3">
                                            惡意洗板、重複張貼
                                          </label>
                                        </li>
                                        <li>
                                          <input class="form-check-input" type="radio" name="reports" id="report4" value="report">
                                          <label class="form-check-label" for="report4">
                                            包含色情、露點、性騷擾或血腥恐怖等讓人不舒服之內容
                                          </label>
                                        </li>
                                        <li>
                                          <input class="form-check-input" type="radio" name="reports" id="report5" value="report">
                                          <label class="form-check-label" for="report5">
                                            暴力、傷害他人或傷害動物的內容
                                          </label>
                                        </li>
                                        <li>
                                          <input class="form-check-input" type="radio" name="reports" id="report6" value="report">
                                          <label class="form-check-label" for="report6">
                                            包含廣告、商業宣傳之內容
                                          </label>
                                        </li>
                                        <li>
                                          <input class="form-check-input" type="radio" name="reports" id="report7" value="report">
                                          <label class="form-check-label" for="report7">
                                            文章發表在不適當的看板
                                          </label>
                                        </li>
                                        <li>
                                          <input class="form-check-input" type="radio" name="reports" id="report8" value="report">
                                          <label class="form-check-label" for="report8">
                                            文章內容空泛或明顯無意義內容
                                          </label>
                                        </li>
                                        <li>
                                          <input class="form-check-input" type="radio" name="reports" id="report9" value="report">
                                          <label class="form-check-label" for="report9">
                                            文章意圖號召他人按愛心，且無實質社會價值
                                          </label>
                                        </li>
                                        <li>
                                          <input class="form-check-input" type="radio" name="reports" id="report10" value="report">
                                          <label class="form-check-label" for="report10">
                                            其他原因
                                          </label>
                                        </li>
                                      </ul>
                                      <div class="rp-btn">
                                        <button type="submit" class="report btn">送出</button>
                                      </div>
                                    </div>
                                  </form>
                                </li>
                                <!-- 回應彈跳視窗文章-檢舉 -->
                                <li>
                                  <a href="javascript:;">分享至</a>
                                  <div class="am-lv3">
                                    <ul class="share-box">
                                      <li><a href="javascript:;"><i class="share-ic fab fa-facebook-square"></i></a></li>
                                      <li><a href="javascript:;"><i class="share-ic fab fa-instagram"></i></a></li>
                                      <li><a href="javascript:;"><i class="share-ic fab fa-line"></i></a></li>
                                    </ul>
                                  </div>
                                </li>
                                <!-- //回應彈跳視窗文章-分享 -->
                              </ul>
                            </div>
                            <!-- //回應彈跳視窗文章-檢舉、分享 -->
                          </div>
                          <!-- 回應彈跳視窗文章-上方分類 -->
                          <ul class="art-sort">
                            <li><a href="">美妝新訊</a></li>
                          </ul>
                          <!-- //回應彈跳視窗文章-上方分類 -->
                          <!-- 回應彈跳視窗文章-內文 -->
                          <div class="art-mid">
                            <div class="art-txt">
                              <div class="title">琉璃水光特色唇釉</div>
                              <ul class="type-list">
                                <li class="brand">雅詩蘭黛</li>
                                <li class="pd-name">情挑誘光唇膏</li>
                              </ul>
                              <div class="art-time">2021/01/19 17:08</div>
                            </div>
                            <div class="art-mid-con">
                              <p>這次包裝很美，雖是壓克力外殼但感覺質感挺好，不會很塑料感</p>
                              <p>這次包裝很美，雖是壓克力外殼但感覺質感挺好，不會很塑料感</p>
                              <p>這次包裝很美，雖是壓克力外殼但感覺質感挺好，不會很塑料感</p>
                              <p>這次包裝很美，雖是壓克力外殼但感覺質感挺好，不會很塑料感</p>
                              <p>這次包裝很美，雖是壓克力外殼但感覺質感挺好，不會很塑料感</p>
                              <p>這次包裝很美，雖是壓克力外殼但感覺質感挺好，不會很塑料感</p>
                              <p>這次包裝很美，雖是壓克力外殼但感覺質感挺好，不會很塑料感</p>
                              <p>這次包裝很美，雖是壓克力外殼但感覺質感挺好，不會很塑料感</p>
                              <p>這次包裝很美，雖是壓克力外殼但感覺質感挺好，不會很塑料感</p>
                              <p>這次包裝很美，雖是壓克力外殼但感覺質感挺好，不會很塑料感</p>
                              <div class="pic">
                                <img src="SRC/images/art01.jpg">
                              </div>
                            </div>
                          </div>
                          <!-- //回應彈跳視窗文章-內文 -->
                          <!-- 回應彈跳視窗文章-下方標籤 -->
                          <ul class="art-tag">
                            <li>美妝新訊</li>
                            <li>美妝新訊</li>
                            <li>美妝新訊</li>
                          </ul>
                          <!-- //回應彈跳視窗文章-下方標籤 -->
                          <!-- 回應彈跳視窗文章下方按讚、收藏 -->
                          <ul class="art-icon">
                            <li>
                              <a data-fancybox data-src="#ind-thumbs" href="javascript:;" title="按讚" class="current">
                                <div class="at-ic good"><i class="far fa-thumbs-up"></i></div>
                                <div class="h "><i class="fas fa-thumbs-up"></i></div>
                                按讚<span class="qty">666</span>
                              </a>
                            </li>
                            <!--  -->
                            <li>
                              <a data-fancybox data-src="#ind-keep" href="javascript:;" title="收藏" class="current">
                                <div class="at-ic"><i class="far fa-heart"></i></div>
                                <div class="h "><i class="fas fa-heart"></i></div>
                                收藏
                              </a>
                              <div style="display: none;" id="ind-keep">
                                <div class="ind-keep">
                                  <i class=" fas fa-heart"></i>
                                  <p>已將此文章加入收藏</p>
                                </div>
                              </div>
                            </li>
                          </ul>
                          <!-- //回應彈跳視窗文章下方按讚、收藏 -->
                          <!-- 回應彈跳視窗文章-其他回應 -->
                          <div class="other-res-box">
                            <ul>
                              <?php for ($i = 0; $i < 5; $i++) {  ?>
                                <li class="res-box">
                                  <div class="user">
                                    <div class="name">JDDT@gmail.com</div>
                                    <div class="art-menu fan-res-menu">
                                      <i class="mu-ic fas fa-ellipsis-h"></i>
                                      <ul class="am-lv2">
                                        <li>
                                          <a data-fancybox data-src="#report" href="javascript:;">檢舉</a>
                                          <form style="display: none;" id="report" action="">
                                            <div class="report-box">
                                              <ul class="report-all">
                                                <li class="tit">
                                                  檢舉此篇文章的原因?
                                                </li>
                                                <li>
                                                  <input class="form-check-input" type="radio" name="reports" id="report1" value="report" checked>
                                                  <label class="form-check-label" for="report1">
                                                    中傷、歧視、挑釁或謾罵他人
                                                  </label>
                                                </li>
                                                <li>
                                                  <input class="form-check-input" type="radio" name="reports" id="report2" value="report">
                                                  <label class="form-check-label" for="report2">
                                                    交換個人資料
                                                  </label>
                                                </li>
                                                <li>
                                                  <input class="form-check-input" type="radio" name="reports" id="report3" value="report">
                                                  <label class="form-check-label" for="report3">
                                                    惡意洗板、重複張貼
                                                  </label>
                                                </li>
                                                <li>
                                                  <input class="form-check-input" type="radio" name="reports" id="report4" value="report">
                                                  <label class="form-check-label" for="report4">
                                                    包含色情、露點、性騷擾或血腥恐怖等讓人不舒服之內容
                                                  </label>
                                                </li>
                                                <li>
                                                  <input class="form-check-input" type="radio" name="reports" id="report5" value="report">
                                                  <label class="form-check-label" for="report5">
                                                    暴力、傷害他人或傷害動物的內容
                                                  </label>
                                                </li>
                                                <li>
                                                  <input class="form-check-input" type="radio" name="reports" id="report6" value="report">
                                                  <label class="form-check-label" for="report6">
                                                    包含廣告、商業宣傳之內容
                                                  </label>
                                                </li>
                                                <li>
                                                  <input class="form-check-input" type="radio" name="reports" id="report7" value="report">
                                                  <label class="form-check-label" for="report7">
                                                    文章發表在不適當的看板
                                                  </label>
                                                </li>
                                                <li>
                                                  <input class="form-check-input" type="radio" name="reports" id="report8" value="report">
                                                  <label class="form-check-label" for="report8">
                                                    文章內容空泛或明顯無意義內容
                                                  </label>
                                                </li>
                                                <li>
                                                  <input class="form-check-input" type="radio" name="reports" id="report9" value="report">
                                                  <label class="form-check-label" for="report9">
                                                    文章意圖號召他人按愛心，且無實質社會價值
                                                  </label>
                                                </li>
                                                <li>
                                                  <input class="form-check-input" type="radio" name="reports" id="report10" value="report">
                                                  <label class="form-check-label" for="report10">
                                                    其他原因
                                                  </label>
                                                </li>
                                              </ul>
                                              <div class="rp-btn">
                                                <button type="submit" class="report btn">送出</button>
                                              </div>
                                            </div>
                                          </form>
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                  <div class="user-info">
                                    <div class="fool">
                                      B1
                                    </div>
                                    <span>•</span>
                                    <div class="date">
                                      2021/01/19 17:05
                                    </div>
                                  </div>
                                  <div class="text-box">
                                    頭香!感謝分享
                                  </div>
                                </li>
                              <?php } ?>
                              <!-- 回應彈跳視窗文章-使用者留言 -->
                              <li class="res-box us">
                                <form action="">
                                  <div class="user">
                                    JDDT@gmail.com
                                  </div>
                                  <div class="user-info">
                                    <div class="fool">
                                      B10
                                    </div>
                                    <span>•</span>
                                    <div class="date">
                                      2021/01/19 17:05
                                    </div>
                                  </div>
                                  <textarea class="res-edit" name="" id=""></textarea>
                                  <div class="res-btn">
                                    <button class="cancle-btn" type="reset">取消</button>
                                    <button class="sum-btn" type="submit">送出</button>
                                  </div>
                                </form>
                              </li>
                              <!-- 回應彈跳視窗文章-使用者留言 -->
                            </ul>
                          </div>
                          <!-- //回應彈跳視窗文章-其他回應 -->
                        </div>
                        <!-- =========回應彈跳視窗文章========= -->
                      </div>
                    </li>
                    <!-- 回應 -->
                    <li>
                      <a data-fancybox data-src="#ind-keep" href="javascript:;" title="收藏" class="current">
                        <div class="at-ic"><i class="far fa-heart"></i></div>
                        <div class="h "><i class="fas fa-heart"></i></div>
                        收藏
                      </a>
                      <div style="display: none;" id="ind-keep">
                        <div class="ind-keep">
                          <i class=" fas fa-heart"></i>
                          <p>已將此文章加入收藏</p>
                        </div>
                      </div>
                    </li>
                    <!-- 收藏 -->
                  </ul>
                  <!--//列表按讚、回應、收藏 -->
                </div>
                <div class="art-pic">
                  <a class="" href="content_view.php">
                    <img src="SRC/images/art01.jpg">
                  </a>
                </div>
              </li>
              <!-- //列表文章(點擊過按讚) -->
              <!-- 列表文章(未點擊過按讚) -->
              <?php for ($i = 0; $i < 30; $i++) {  ?>
                <li class="art-list">
                  <div class="art-top">
                    <!-- 列表分類 -->
                    <ul class="art-sort">
                      <li><a href="">美妝新訊</a></li>
                    </ul>
                    <!-- //列表分類 -->
                    <!-- //列表分享、檢舉 -->
                    <div class="art-menu">
                      <i class="mu-ic fas fa-ellipsis-h"></i>
                      <ul class="am-lv2">
                        <li>
                          <a data-fancybox data-src="#report" href="javascript:;">檢舉</a>
                          <form style="display: none;" id="report" action="">
                            <div class="report-box">
                              <ul class="report-all">
                                <li class="tit">
                                  檢舉此篇文章的原因?
                                </li>
                                <li>
                                  <input class="form-check-input" type="radio" name="reports" id="report1" value="report" checked>
                                  <label class="form-check-label" for="report1">
                                    中傷、歧視、挑釁或謾罵他人
                                  </label>
                                </li>
                                <li>
                                  <input class="form-check-input" type="radio" name="reports" id="report2" value="report">
                                  <label class="form-check-label" for="report2">
                                    交換個人資料
                                  </label>
                                </li>
                                <li>
                                  <input class="form-check-input" type="radio" name="reports" id="report3" value="report">
                                  <label class="form-check-label" for="report3">
                                    惡意洗板、重複張貼
                                  </label>
                                </li>
                                <li>
                                  <input class="form-check-input" type="radio" name="reports" id="report4" value="report">
                                  <label class="form-check-label" for="report4">
                                    包含色情、露點、性騷擾或血腥恐怖等讓人不舒服之內容
                                  </label>
                                </li>
                                <li>
                                  <input class="form-check-input" type="radio" name="reports" id="report5" value="report">
                                  <label class="form-check-label" for="report5">
                                    暴力、傷害他人或傷害動物的內容
                                  </label>
                                </li>
                                <li>
                                  <input class="form-check-input" type="radio" name="reports" id="report6" value="report">
                                  <label class="form-check-label" for="report6">
                                    包含廣告、商業宣傳之內容
                                  </label>
                                </li>
                                <li>
                                  <input class="form-check-input" type="radio" name="reports" id="report7" value="report">
                                  <label class="form-check-label" for="report7">
                                    文章發表在不適當的看板
                                  </label>
                                </li>
                                <li>
                                  <input class="form-check-input" type="radio" name="reports" id="report8" value="report">
                                  <label class="form-check-label" for="report8">
                                    文章內容空泛或明顯無意義內容
                                  </label>
                                </li>
                                <li>
                                  <input class="form-check-input" type="radio" name="reports" id="report9" value="report">
                                  <label class="form-check-label" for="report9">
                                    文章意圖號召他人按愛心，且無實質社會價值
                                  </label>
                                </li>
                                <li>
                                  <input class="form-check-input" type="radio" name="reports" id="report10" value="report">
                                  <label class="form-check-label" for="report10">
                                    其他原因
                                  </label>
                                </li>
                              </ul>
                              <div class="rp-btn">
                                <button type="submit" class="report btn">送出</button>
                              </div>
                            </div>
                          </form>
                        </li>
                        <li>
                          <a href="javascript:;">分享至</a>
                          <div class="am-lv3">
                            <ul class="share-box">
                              <li><a href="javascript:;"><i class="share-ic fab fa-facebook-square"></i></a></li>
                              <li><a href="javascript:;"><i class="share-ic fab fa-instagram"></i></a></li>
                              <li><a href="javascript:;"><i class="share-ic fab fa-line"></i></a></li>
                            </ul>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <!-- //列表分享、檢舉 -->
                  </div>
                  <div class="mid-box">
                    <div class="art-info">
                      <a class="" href="content_view.php">
                        <div class="art-txt">
                          <div class="title">琉璃水光特色唇釉</div>
                          <p>這次包裝很美，雖是壓克力外殼但感覺質感挺好，不會很塑料感</p>
                      </a>
                    </div>
                    <!-- 列表按讚(未點擊過按讚)、回應、收藏 -->
                    <ul class="art-icon">
                      <li>
                        <a href="" title="按讚" class="">
                          <div class="at-ic good"><i class="far fa-thumbs-up"></i></div>
                          <div class="h "><i class="fas fa-thumbs-up"></i></div>
                          按讚<span class="qty">666</span>
                        </a>
                      </li>
                      <!-- 按讚 -->
                      <li>
                        <a data-fancybox data-src="#ind-res" href="javascript:;" title="回應">
                          <div class="at-ic comment"><i class="far fa-comment-alt"></i></div>
                          <div class="h"><i class="fas fa-comment-alt"></i></div>
                          回應<span class="qty">66</span>
                        </a>
                      </li>
                      <!-- 回應  -->
                      <li>
                        <a data-fancybox data-src="#ind-keep" href="javascript:;" title="收藏">
                          <div class="at-ic"><i class="far fa-heart"></i></div>
                          <div class="h "><i class="fas fa-heart"></i></div>
                          收藏
                        </a>
                        <div style="display: none;" id="ind-keep">
                          <div class="ind-keep">
                            <i class=" fas fa-heart"></i>
                            <p>已將此文章加入收藏</p>
                          </div>
                        </div>
                      </li>
                      <!-- 收藏 -->
                    </ul>
                    <!--//列表按讚、回應、收藏 -->
                  </div>
                  <div class="art-pic">
                    <a class="" href="content_view.php">
                      <img src="SRC/images/art01.jpg">
                    </a>
                  </div>
                </li>
              <?php } ?>
              <!-- //列表文章(未點擊過按讚) -->
            </ul>
          </div>
        </section>
        <!-- //中間文章列表 -->
        <!-- 廣告列表 -->
        <?php include('_ads_list.php') ?>
        <!-- 廣告列表 -->
      </div>
    </section>
  </main>

  <script type="text/javascript" src="SRC/js/effect01.js"></script>
  <script src="SRC/js/slick.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.index-banner-slick').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        fade: true,
        pauseOnHover: false,
        autoplay: true,
        autoplaySpeed: 5000,
      });
    });
  </script>

  <script>
    $(document).ready(function() {
      // current submenu
      $('.page-left-menu li').each(function() {
        if ($(this).hasClass('current')) {
          $(this).parents().siblings('a').addClass('active').next('ul').show();
        }
      });
      $('.page-left-menu a[href="javascript:void(0)"]').click(function() {
        // change icon
        $(this).toggleClass('active').parent().siblings().children('a').removeClass('active');
        // open submenu
        $(this).next('ul').slideToggle().parent().siblings().children('ul').slideUp();
      });
    });
  </script>