<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>WEVEN - your vending machine</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css" />

    <link rel="manifest" href="manifest.json" />
    <!--service worker-->
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
<? include("profile_user.php");?>
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="preload-content">
            <div id="original-load"></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Top Header Area -->
        
                    <!-- Breaking News Area -->
                    <div class="col-12 col-sm-8">
                        <div class="breaking-news-area">
                            <div id="breakingNewsTicker" class="ticker">
                                <ul>
                                    <li><a href="#">提供完整商品資訊!</a></li>
                                    <li><a href="#">幫您規劃最佳路線!</a></li>
                                    <li><a href="#">活動優惠報你知!</a></li>
                                    <li><a href="#">個性化頁面設計!</a></li>
                                    <li><a href="#">讓您收藏喜愛的販賣機!</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>



    </header>
    <!-- ##### Header Area End ##### -->
    <!-- ##### Blog Wrapper Start ##### -->
    
    <div class="blog-wrapper section-padding-100 clearfix" style="text-align: center;">
        <div class="container">
            <div>
                <!-- Single Blog Area -->
                <div class="single-blog-area clearfix mb-100">
                    <!-- Blog Content -->
                    <div class="single-blog-content">
                        
                        <h4 style="font-weight: bold; text-align: center;">個人資訊</h4>
                        <br />
                   <p>
                       <?php foreach($rows as $user){ ?>
                      帳號:<?=$user->account?>&emsp;&emsp;&nbsp;&emsp;&ensp;<br /><br />暱稱:<?=$user->name?>&emsp;&emsp;&nbsp;&emsp;&ensp;
                            <br /><br/>性別:<?=$user->gender?>&emsp;&emsp;&nbsp;&emsp;&ensp;<br><br> 職業:<?=$user->job?>&emsp;&emsp;&nbsp;&emsp;&ensp;
                            <br><br>
                            <a href="edit-password.html" class="post-tag" onclick="">修改密碼
                            </a>  
                       <?php }?>
                   </p>
                            
                            
                  
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
    <!-- Optional JavaScript -->

</body>

</html>