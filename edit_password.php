<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>WEVEN - 修改密碼</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css" />

    <!--manifest.json-->
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
      <div id="preloader">
        <div class="preload-content">
            <div id="original-load"></div>
        </div>
    </div>

    <div class="blog-wrapper section-padding-100 clearfix" style="text-align: center;">
        <div class="container">
            <div>
                <!-- Single Blog Area -->
                <div class="single-blog-area clearfix mb-100">
                    <!-- Blog Content -->
                    <div class="single-blog-content">
                        <h4 style="font-weight: bold; text-align: center;">重設密碼</h4>
                         <hr size="10px" width="100%">
                        <br />
                        <form method="post" action="edit_password_process.php" style="margin-top:60px ">
                            <p sytle="font-color:#727272;display:inline-block">原始密碼&emsp;&emsp;
                            <input  type="password" name="password1" size="18" class="text lightSpeedIn" placeholder="PASSWORD" autocomplete="off" required style="animation-duration: 1.5s"><br /><br /> 修改密碼&emsp;&emsp;
                          
                            <input type="password" name="password2" size="18" class="text lightSpeedIn" placeholder="PASSWORD" autocomplete="off" required style="animation-duration: 1.5s"><br /><br />  <br><br>
                            <a href="profile.php"  class="btn btn-outline-dark">取消</a>
                            <button type="submit" class="btn btn-outline-dark">完成</button>
                            </p>
                            <br>
                            
                        </form>
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