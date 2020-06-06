<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>WEVEN - 客服聯繫</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css" />

    <link rel="manifest" href="manifest.json" />

    <!--animation.css-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />

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
        <?php include("sidebar.php")?>
     </header>
    <!-- Preloader -->
    <div id="preloader">
        <div class="preload-content">
            <div id="original-load"></div>
        </div>
    </div>

    <!-- ##### Blog Wrapper Start ##### -->
    <div class="blog-wrapper section-padding-100 clearfix" style="text-align: center;">
        <div class="container">
            <div>
                <!-- Single Blog Area -->
                <div class="single-blog-area clearfix mb-100">
                    <!-- Blog Content -->
                    <div class="single-blog-content">
                    <h4 style="font-weight: bold; text-align: center;">客服聯繫</h4>
                         <hr size="10px" width="100%">
                        <br />
                        <p class="lightSpeedIn" style="animation-duration:1.3s">
                            信箱&emsp;&emsp;&nbsp;&emsp;tty09183@gmail.com <br /><br /> 電話&emsp;&emsp;&nbsp;&emsp;&nbsp;&emsp;&nbsp;02-89302156&nbsp;&emsp;&emsp;
                            <br /><br /> &emsp;&emsp;住址&emsp;&emsp;&nbsp;&emsp;新北市中正路514巷96號&nbsp;&emsp;
                            <br>
                            </br>
                            <a href="QA.php"  class="btn btn-outline-dark">常見問題</a>

                            <p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">



                </div>
            </div>
        </div>


    </footer>
    <!-- ##### Footer Area End ##### -->

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
    <!--chatrobot-->
    <script src="//code.tidio.co/jsr6b61vrobwzh2zqgab6h1rquc51x6y.js" async></script>
</body>

</html>