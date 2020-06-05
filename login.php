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

    <!--animation.css-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"/>

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
   <?php 
    error_reporting(0);  
        if($_GET['situation']=="complete"){
    ?> 
        <script>   
           alert('密碼更改成功，請重新登入！');  
       </script>
   <?php 
    }
?>
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="preload-content">
            <div id="original-load"></div>
        </div>
    </div>
    <!-- ##### Blog Wrapper Start ##### -->
    <div class="blog-wrapper section-padding-70 clearfix" style="text-align: center;">
        <div class="container">
            <div>
                <!-- Single Blog Area -->
                <div class="single-blog-area clearfix mb-100">
                    <!-- Blog Content -->
                    <div class="single-blog-content">
                        <h4 style="font-weight: bold; text-align: center;">登入</h4><br />
                        
                        <hr size="10px" style="align:center" width="100%">
						  
                        <p style="padding-top:40px">
							<form action="login_process.php" method="post">
                            帳號&emsp;&emsp;&nbsp;&emsp;<input type="email" name="account" size="18" class="text animated lightSpeedIn" placeholder="email" style="animation-duration: 2s"/><br /><br /> 密碼&emsp;&emsp;&nbsp;&emsp;
                            <input type="password" name="password" size="18" class="text animated lightSpeedIn" placeholder="password" style="animation-duration: 2.5s"/><br /><br /><br><?php $msg = isset($_GET["msg"])? $_GET["msg"]: "";echo $msg; ?>
                            <a href="registration.html" class="post-tag animated bounceInDown">尚未註冊?</a>
                            <a href="forget.php" class="post-tag">忘記密碼?</a>
                            <br>
                            <form action="index.php">
                                <button type="submit" class="btn original-btn">登入</button>
                            </form>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>



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
</body>

</html>