<?php include '_header.php'; ?>
<main class=" content">
    <article>
        <div class="page-banner">
            <div class="page-banner_box">
                <div class="page-banner_info">
                    <h2 class="page-banner_info_title">
                        線上預約系統
                    </h2>
                </div>
            </div>
        </div>
        <div class="page-content fadeInUp animated appointment">
            <div class="article-name">
                <h3>預約系統</h3>
            </div>
            <div class="user_editor ">
                <p>
                    您好，請填寫預約參觀資料，
                    收到預約資料後，3天內會有專人聯繫並電話與您做確認，
                    確認後才算預約成功。
                </p>
            </div>
            <form>
                <section class="ap_top_1">
                    <div class="page-title">
                        <h4><span>選擇預約單位</span></h4>
                    </div>
                    <div class="order_employer ">
                        <select name="" id="employer">
                            <option selected value="內壢金色時代護理之家">內壢金色時代護理之家</option>
                            <option value="楊梅天成醫院附設理之家">楊梅天成醫院附設理之家</option>
                            <option value="中壢金色年華護理之家">中壢金色年華護理之家</option>
                            <option value="金色年代日間照顧中心">金色年代日間照顧中心</option>
                            <option value="金色年代天慈日間照護中心">金色年代天慈日間照護中心</option>
                            <option value="金色年華日間照顧中心">金色年華日間照顧中心</option>
                            <option value="居家服務">居家服務</option>
                            <option value="居家復健">居家復健</option>
                            <option value="居家醫療">居家醫療</option>
                            <option value="居家護理">居家護理</option>
                            <option value="居家藥事">居家藥事</option>
                        </select>
                        <label for="employer"></label>
                    </div>
                </section>
                <section class="appointment_top">
                    <div class="page-title">
                        <h4><span>選擇預約日期</span></h4>
                    </div>
                    <!--calendar-->
                    <div class="calendar">
                        <div class="datebox">
                            <div class="date_cont">
                                <span><a href="javascript: void(0)"><i class="fas fa-caret-left"></i> 上個月</a></span>
                                <h2>2019 年 11月</h2>
                                <span><a href="javascript: void(0)">上個月 <i class="fas fa-caret-right"></i></a></span>
                            </div>
                        </div>
                        <ul class="weekdays">
                            <li>日</li>
                            <li>一</li>
                            <li>二</li>
                            <li>三</li>
                            <li>四</li>
                            <li>五</li>
                            <li>六</li>
                        </ul>

                        <!-- Row #1 -->
                        <ul class="days">
                            <li class="day no"></li>
                            <li class="day no"></li>
                            <li class="day no"></li>
                            <li class="day no"></li>
                            <li class="day no"></li>
                            <li class="day current">
                                <div class="date">1</div>
                                <div class="event">
                                    <div class="Y_order">
                                        <a class="" href="#">尚可預約<span>2</span>組</a>
                                    </div>
                                </div>
                            </li>
                            <li class="day holiday">
                                <div class="date">2</div>
                            </li>
                        </ul>

                        <!-- Row #2 -->

                        <ul class="days">
                            <li class="day holiday">
                                <div class="date">3</div>
                            </li>
                            <li class="day current">
                                <div class="date">4</div>
                                <div class="event">
                                    <div class="Y_order">
                                        <a class="" href="#">尚可預約<span>2</span>組</a>
                                    </div>
                                </div>
                            </li>
                            <li class="day current">
                                <div class="date">5</div>
                                <div class="event">
                                    <div class="Y_order">
                                        <a class="" href="#">尚可預約<span>2</span>組</a>
                                    </div>
                                </div>
                            </li>
                            <li class="day current">
                                <div class="date">6</div>
                                <div class="event">
                                    <div class="Y_order">
                                        <a class="" href="#">尚可預約<span>2</span>組</a>
                                    </div>
                                </div>
                            </li>
                            <li class="day F_od">
                                <div class="date">7</div>
                                <div class="event">
                                    <div class="F_order">
                                        已預約額滿
                                    </div>
                                </div>
                            </li>
                            <li class="day F_od">
                                <div class="date">8</div>
                                <div class="event">
                                    <div class="F_order">
                                        已預約額滿
                                    </div>
                                </div>
                            </li>
                            <li class="day holiday">
                                <div class="date">9</div>
                            </li>
                        </ul>

                        <!-- Row #3 -->

                        <ul class="days">
                            <li class="day holiday">
                                <div class="date">10</div>
                            </li>
                            <li class="day current">
                                <div class="date">11</div>
                                <div class="event">
                                    <div class="Y_order">
                                        <a class="" href="#">尚可預約<span>2</span>組</a>
                                    </div>
                                </div>
                            </li>
                            <li class="day F_od">
                                <div class="date">12</div>
                                <div class="event">
                                    <div class="F_order">
                                        已預約額滿
                                    </div>
                                </div>
                            </li>
                            <li class="day F_od">
                                <div class="date">13</div>
                                <div class="event">
                                    <div class="F_order">
                                        已預約額滿
                                    </div>
                                </div>
                            </li>
                            <li class="day N_od">
                                <div class="date">14</div>
                                <div class="event">
                                    <div class="N_order">
                                        不開放預約
                                    </div>
                                </div>
                            </li>
                            <li class="day current">
                                <div class="date">15</div>
                                <div class="event">
                                    <div class="Y_order">
                                        <a class="" href="#">尚可預約<span>2</span>組</a>
                                    </div>
                                </div>
                            </li>
                            <li class="day holiday">
                                <div class="date">16</div>
                            </li>
                        </ul>

                        <!-- Row #4 -->

                        <ul class="days">
                            <li class="day holiday">
                                <div class="date">17</div>
                            </li>
                            <li class="day F_od">
                                <div class="date">18</div>
                                <div class="event">
                                    <div class="F_order">
                                        已預約額滿
                                    </div>
                                </div>
                            </li>
                            <li class="day current">
                                <div class="date">19</div>
                                <div class="event">
                                    <div class="Y_order">
                                        <a class="" href="#">尚可預約<span>2</span>組</a>
                                    </div>
                                </div>
                            </li>
                            <li class="day current">
                                <div class="date">20</div>
                                <div class="event">
                                    <div class="Y_order">
                                        <a class="" href="#">尚可預約<span>2</span>組</a>
                                    </div>
                                </div>
                            </li>
                            <li class="day current">
                                <div class="date">21</div>
                                <div class="event">
                                    <div class="Y_order">
                                        <a class="" href="#">尚可預約<span>2</span>組</a>
                                    </div>
                                </div>
                            </li>
                            <li class="day N_od">
                                <div class="date">22</div>
                                <div class="event">
                                    <div class="N_order">
                                        不開放預約
                                    </div>
                                </div>
                            </li>
                            <li class="day holiday">
                                <div class="date">23</div>
                            </li>
                        </ul>
                        <!-- Row #5 -->
                        <ul class="days">
                            <li class="day holiday">
                                <div class="date">24</div>
                            </li>
                            <li class="day N_od">
                                <div class="date">25</div>
                                <div class="event">
                                    <div class="N_order">
                                        不開放預約
                                    </div>
                                </div>
                            </li>
                            <li class="day F_od">
                                <div class="date">26</div>
                                <div class="event">
                                    <div class="F_order">
                                        已預約額滿
                                    </div>
                                </div>
                            </li>
                            <li class="day current">
                                <div class="date">27</div>
                                <div class="event">
                                    <div class="Y_order">
                                        <a class="" href="#">尚可預約<span>2</span>組</a>
                                    </div>
                                </div>
                            </li>
                            <li class="day current">
                                <div class="date">28</div>
                                <div class="event">
                                    <div class="Y_order">
                                        <a class="" href="#">尚可預約<span>12</span>組</a>
                                    </div>
                                </div>
                            </li>
                            <li class="day F_od">
                                <div class="date">29</div>
                                <div class="event">
                                    <div class="F_order">
                                        已預約額滿
                                    </div>
                                </div>
                            </li>
                            <li class="day holiday">
                                <div class="date">30</div>
                            </li>
                        </ul>
                    </div>
                    <!-- //calendar -->
                </section>
                <!-- 預約系統資料確認 -->
                <section class="appointment_bot">
                    <div class="page-title">
                        <h4><span>選擇預約時間</span></h4>
                    </div>
                    <ul class="order_1">
                        <li>
                            <div class="order_time ">
                                <div class="ot_1">
                                    <label for="morning"></label>
                                    <input class="ot_my" type="radio" name="order_time" id="morning" value="上午(10:00~11:30)">上午(10:00~11:30)
                                </div>
                                <div class="ot_2">
                                    <label for="afterroon"></label>
                                    <input class="ot_my" type="radio" name="order_time" id="afterroon" value="下午(14:00~16:30)">下午(14:00~16:30)
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="page-title">
                        <h4><span>填寫聯絡資料</span></h4>
                    </div>
                    <ul class="order_2 ">
                        <li>
                            <label for="name" class="account_title">姓名：</label>
                            <input type="text" class="account_inpt" required="required" value="林小花" id="name" name="" readonly>
                        </li>
                        <li>
                            <label for="tel" class="account_title">手機：</label>
                            <input type="tel" class="account_inpt" value="" required="required" placeholder="請輸入您的手機" name="" id="tel">
                        </li>
                        <li class="ac_text">
                            <label for="descript" class="account_title">住民狀況簡述：</label>
                            <textarea class="account_suptxt" placeholder="請輸入概述" name="descript" id="descript"></textarea>
                        </li>
                    </ul>
                </section>
                <div class="confirm_wrap">
                    <div class="confirm_modify_box02">
                        <label for="reset">
                        </label>
                        <input type="reset" value="重新填寫" class="select_bnt02 bnt" id="reset" title="重新填寫" alt="重新填寫">
                    </div>
                    <div class="confirm_next_box02">
                        <label for="send">
                        </label>
                        <input type="submit" class="select_bnt01 bnt" value="確認送出" name="send" id="send" title="確認送出" alt="確認送出">
                    </div>
                </div>
            </form>
            <!-- 預約系統資料確認 -->
        </div>
    </article>
</main>
<?php include '_footer.php'; ?>