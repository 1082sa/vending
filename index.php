<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WEVEN - 首頁</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico" />


    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- PWA manifest -->
    <link rel="manifest" href="manifest.json" />

    <!-- PWA service-Worker -->
    <script>
        if ("serviceWorker.js" in navigator) {
            console.log("Will service worker register?");
            navigator.serviceWorker
                .register("service-worker.js")
                .then(function(reg) {
                    console.log("yes it did.");
                })
                .catch(function(err) {
                    console.log("No it didn,t This happened: ", err);
                });
        }
    </script>
    
</head>

<body>
    <header class="header-area">
        
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
                                        <a href="#"><span>故障回報紀錄</span></a>
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
    </header>

    <iframe src="map.php" class="map" frameborder="0" scrolling="no"></iframe>
    
    

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    <!--include html-->
    <script src="https://www.w3schools.com/lib/w3.js"></script>
    <script>
        w3.includeHTML();
    </script>
</body>

</html>
