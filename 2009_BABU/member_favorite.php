<?php include('_head.php') ?>
<!--wrapper-->
<div id="wrapper" class="main_bg">
  <?php include('_menu02.php') ?>
  <main class="member-set">
    <section class="main-all wow fadeIn">
      <div class="content-all">
        <div class="big-left">
          <!--bread-->
          <div class="breadbox">
            <div class="bread-crumbs">
              <li><a href="index.php">首頁</a></li>
              <li><a href="member_favorite.php">我的書籤</a></li>
            </div>
          </div>
          <!--bread end-->
          <!--left-->
          <section class="left">
            <nav class="sidebar-nav02">
              <a href="member.php">
                <h2>會員系統</h2>
              </a>
              <ul class="metismenu" id="menu1">
                <li><a href="member_account.php">個人資料管理與修改</a></li>
                <li><a href="member_massage.php">會員訊息</a></li>
                <li><a href="member_order.php">兌換管理</a></li>
                <li><a href="member_point.php">我的點數</a></li>
                <li><a href="member_products.php">商品體驗</a></li>
                <li><a href="member_article.php">文章管理</a></li>
                <li class="active"><a href="member_favorite.php">我的書籤</a></li>
              </ul>
            </nav>
          </section>
          <!--//left-->
        </div>
        <section class="right">
          <!--清單-->
          <form class="favorite">
            <div class="add-folder">
              <input type="submit" class="btn-style01" value="新增分類 + " onclick="location=''" />
            </div>
            <ul>
              <li class="fav-box">
                <a class="fav-box-top" href="member_favorite_view.php">
                  <div class="tt">穿搭參考</div>
                  <div class="fav-pic">
                    <img src="SRC/images/babu.svg" alt="">
                  </div>
                </a>
                <div class="fav-box-bot">
                  <div class="fav-icn">
                    <a data-fancybox data-src="#fix-box" href="javascript:;" class="fix-btn">修改<span><i class="fas fa-edit"></i></span></a>
                    <div class="fix-box-check" style="display: none;" id="fix-box">
                      <form>
                        <div class="fix-box-check-txt">
                          <ul class="styled-input fix">
                            <li>
                              <label>修改名稱</label>
                              <input type="text" value="穿搭參考" class="">
                            </li>
                            <li class="txt">備註:資料夾名稱最多四個字</li>
                          </ul>
                        </div>
                        <div class="ch-btn">
                          <input type="submit" class=" btn-style01" onclick="location=''" value="確認送出">
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="fav-icn">
                    <a href="javascript: void(0)" class="fix-btn">刪除<span><i class="fas fa-times"></i></span></a>
                  </div>
                </div>
              </li>
              <li class="fav-box">
                <a class="fav-box-top" href="member_favorite_view.php">
                  <div class="tt">穿搭參考</div>
                  <div class="fav-pic">
                    <img src="SRC/images/babu.svg" alt="">
                  </div>
                </a>
                <div class="fav-box-bot">
                  <div class="fav-icn">
                    <a data-fancybox data-src="#fix-box" href="javascript:;" class="fix-btn">修改<span><i class="fas fa-edit"></i></span></a>
                    <div class="fix-box-check" style="display: none;" id="fix-box">
                      <form>
                        <div class="fix-box-check-txt">
                          <ul class="styled-input fix">
                            <li>
                              <label>修改名稱</label>
                              <input type="text" value="穿搭參考" class="">
                            </li>
                            <li class="txt">備註:資料夾名稱最多四個字</li>
                          </ul>
                        </div>
                        <div class="ch-btn">
                          <input type="submit" class=" btn-style01" onclick="location=''" value="確認送出">
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="fav-icn">
                    <a href="javascript: void(0)" class="fix-btn">刪除<span><i class="fas fa-times"></i></span></a>
                  </div>
                </div>
              </li>
              <li class="fav-box">
                <a class="fav-box-top" href="member_favorite_view.php">
                  <div class="tt">穿搭參考</div>
                  <div class="fav-pic">
                    <img src="SRC/images/babu.svg" alt="">
                  </div>
                </a>
                <div class="fav-box-bot">
                  <div class="fav-icn">
                    <a data-fancybox data-src="#fix-box" href="javascript:;" class="fix-btn">修改<span><i class="fas fa-edit"></i></span></a>
                    <div class="fix-box-check" style="display: none;" id="fix-box">
                      <form>
                        <div class="fix-box-check-txt">
                          <ul class="styled-input fix">
                            <li>
                              <label>修改名稱</label>
                              <input type="text" value="穿搭參考" class="">
                            </li>
                            <li class="txt">備註:資料夾名稱最多四個字</li>
                          </ul>
                        </div>
                        <div class="ch-btn">
                          <input type="submit" class=" btn-style01" onclick="location=''" value="確認送出">
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="fav-icn">
                    <a href="javascript: void(0)" class="fix-btn">刪除<span><i class="fas fa-times"></i></span></a>
                  </div>
                </div>
              </li>
              <li class="fav-box">
                <a class="fav-box-top" href="member_favorite_view.php">
                  <div class="tt">穿搭參考</div>
                  <div class="fav-pic">
                    <img src="SRC/images/babu.svg" alt="">
                  </div>
                </a>
                <div class="fav-box-bot">
                  <div class="fav-icn">
                    <a data-fancybox data-src="#fix-box" href="javascript:;" class="fix-btn">修改<span><i class="fas fa-edit"></i></span></a>
                    <div class="fix-box-check" style="display: none;" id="fix-box">
                      <form>
                        <div class="fix-box-check-txt">
                          <ul class="styled-input fix">
                            <li>
                              <label>修改名稱</label>
                              <input type="text" value="穿搭參考" class="">
                            </li>
                            <li class="txt">備註:資料夾名稱最多四個字</li>
                          </ul>
                        </div>
                        <div class="ch-btn">
                          <input type="submit" class=" btn-style01" onclick="location=''" value="確認送出">
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="fav-icn">
                    <a href="javascript: void(0)" class="fix-btn">刪除<span><i class="fas fa-times"></i></span></a>
                  </div>
                </div>
              </li>
              <li class="fav-box">
                <a class="fav-box-top" href="member_favorite_view.php">
                  <div class="tt">穿搭參考</div>
                  <div class="fav-pic">
                    <img src="SRC/images/babu.svg" alt="">
                  </div>
                </a>
                <div class="fav-box-bot">
                  <div class="fav-icn">
                    <a data-fancybox data-src="#fix-box" href="javascript:;" class="fix-btn">修改<span><i class="fas fa-edit"></i></span></a>
                    <div class="fix-box-check" style="display: none;" id="fix-box">
                      <form>
                        <div class="fix-box-check-txt">
                          <ul class="styled-input fix">
                            <li>
                              <label>修改名稱</label>
                              <input type="text" value="穿搭參考" class="">
                            </li>
                            <li class="txt">備註:資料夾名稱最多四個字</li>
                          </ul>
                        </div>
                        <div class="ch-btn">
                          <input type="submit" class=" btn-style01" onclick="location=''" value="確認送出">
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="fav-icn">
                    <a href="javascript: void(0)" class="fix-btn">刪除<span><i class="fas fa-times"></i></span></a>
                  </div>
                </div>
              </li>
              <li class="fav-box">
                <a class="fav-box-top" href="member_favorite_view.php">
                  <div class="tt">穿搭參考</div>
                  <div class="fav-pic">
                    <img src="SRC/images/babu.svg" alt="">
                  </div>
                </a>
                <div class="fav-box-bot">
                  <div class="fav-icn">
                    <a data-fancybox data-src="#fix-box" href="javascript:;" class="fix-btn">修改<span><i class="fas fa-edit"></i></span></a>
                    <div class="fix-box-check" style="display: none;" id="fix-box">
                      <form>
                        <div class="fix-box-check-txt">
                          <ul class="styled-input fix">
                            <li>
                              <label>修改名稱</label>
                              <input type="text" value="穿搭參考" class="">
                            </li>
                            <li class="txt">備註:資料夾名稱最多四個字</li>
                          </ul>
                        </div>
                        <div class="ch-btn">
                          <input type="submit" class=" btn-style01" onclick="location=''" value="確認送出">
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="fav-icn">
                    <a href="javascript: void(0)" class="fix-btn">刪除<span><i class="fas fa-times"></i></span></a>
                  </div>
                </div>
              </li>
              <li class="fav-box">
                <a class="fav-box-top" href="member_favorite_view.php">
                  <div class="tt">穿搭參考</div>
                  <div class="fav-pic">
                    <img src="SRC/images/babu.svg" alt="">
                  </div>
                </a>
                <div class="fav-box-bot">
                  <div class="fav-icn">
                    <a data-fancybox data-src="#fix-box" href="javascript:;" class="fix-btn">修改<span><i class="fas fa-edit"></i></span></a>
                    <div class="fix-box-check" style="display: none;" id="fix-box">
                      <form>
                        <div class="fix-box-check-txt">
                          <ul class="styled-input fix">
                            <li>
                              <label>修改名稱</label>
                              <input type="text" value="穿搭參考" class="">
                            </li>
                            <li class="txt">備註:資料夾名稱最多四個字</li>
                          </ul>
                        </div>
                        <div class="ch-btn">
                          <input type="submit" class=" btn-style01" onclick="location=''" value="確認送出">
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="fav-icn">
                    <a href="javascript: void(0)" class="fix-btn">刪除<span><i class="fas fa-times"></i></span></a>
                  </div>
                </div>
              </li>
              <li class="fav-box">
                <a class="fav-box-top" href="member_favorite_view.php">
                  <div class="tt">穿搭參考</div>
                  <div class="fav-pic">
                    <img src="SRC/images/babu.svg" alt="">
                  </div>
                </a>
                <div class="fav-box-bot">
                  <div class="fav-icn">
                    <a data-fancybox data-src="#fix-box" href="javascript:;" class="fix-btn">修改<span><i class="fas fa-edit"></i></span></a>
                    <div class="fix-box-check" style="display: none;" id="fix-box">
                      <form>
                        <div class="fix-box-check-txt">
                          <ul class="styled-input fix">
                            <li>
                              <label>修改名稱</label>
                              <input type="text" value="穿搭參考" class="">
                            </li>
                            <li class="txt">備註:資料夾名稱最多四個字</li>
                          </ul>
                        </div>
                        <div class="ch-btn">
                          <input type="submit" class=" btn-style01" onclick="location=''" value="確認送出">
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="fav-icn">
                    <a href="javascript: void(0)" class="fix-btn">刪除<span><i class="fas fa-times"></i></span></a>
                  </div>
                </div>
              </li>
              <li class="fav-box">
                <a class="fav-box-top" href="member_favorite_view.php">
                  <div class="tt">穿搭參考</div>
                  <div class="fav-pic">
                    <img src="SRC/images/babu.svg" alt="">
                  </div>
                </a>
                <div class="fav-box-bot">
                  <div class="fav-icn">
                    <a data-fancybox data-src="#fix-box" href="javascript:;" class="fix-btn">修改<span><i class="fas fa-edit"></i></span></a>
                    <div class="fix-box-check" style="display: none;" id="fix-box">
                      <form>
                        <div class="fix-box-check-txt">
                          <ul class="styled-input fix">
                            <li>
                              <label>修改名稱</label>
                              <input type="text" value="穿搭參考" class="">
                            </li>
                            <li class="txt">備註:資料夾名稱最多四個字</li>
                          </ul>
                        </div>
                        <div class="ch-btn">
                          <input type="submit" class=" btn-style01" onclick="location=''" value="確認送出">
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="fav-icn">
                    <a href="javascript: void(0)" class="fix-btn">刪除<span><i class="fas fa-times"></i></span></a>
                  </div>
                </div>
              </li>
            </ul>
            <!--//清單-->

          </form>

        </section>
        <!-- 廣告列表 -->
        <?php include('_ads_list.php') ?>
        <!-- 廣告列表 -->
    </section>
  </main>