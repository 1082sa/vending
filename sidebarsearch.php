
        <!-- Nav Area -->
        <div class="original-nav-area" id="stickyNav">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar">
                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span
                ></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu" id="originalNav">
                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap">
                                    <span class="top"></span><span class="bottom"></span>
                                </div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <!-- Sidebar information -->
                                <div class="sideinfo">
                                    <div class="circle ml-15 mb-7">
                                        <a href="profile.php"><img src="img/vending-machine.png" /></a>
                                    </div>
                                    &emsp;
                                    <h4>Mavis</h4>
                                </div>

                                <ul>
                                    <li>
                                        <a href="index.php"><span>首頁</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span>我的最愛</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span>消費紀錄</span></a>
                                    </li>
                                    <li>
                                        <a href="contact.php"><span>故障回報紀錄</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span>客服聯繫</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span>活動優惠</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span>行動支付</span></a>
                                    </li>
                                    <li>
                                        <a href="logout.php"><span>登出</span></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                        <!-- searching -->
                        <div id="searching">
                            <form name="searched" action="searching.php" method="POST">
                                <input type="text" name="searching_keyword" id="searching_keyword" placeholder="請輸入商品關鍵字" required>
                                <button type="submit" class="btn btn-outline-light" id="searching_submit" onclick="searching_submit()">
                                <img src="img/searching.svg"/>
                                </button>
                            </form>
                            <!-- form表單結構說明：https://reurl.cc/X6R4ga -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
   
