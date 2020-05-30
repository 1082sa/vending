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

    <?php 
    error_reporting(0);  
    if(isset($_GET[situation])){?>
    <script>     
           alert('密碼更改完畢！');  
    </script>
    <?php
    }
 include("profile_user.php");?>
</head>

<body>
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
                        
                        <h4 style="font-weight: bold; text-align: center;">個人資訊</h4>
                        <br />
                        
                            <p style="text-align:center" class="ml-30">
                                <?php foreach($rows as $user){ ?>
                                    &emsp;帳號:&ensp;<?=$user->account?>&emsp;&emsp;&nbsp;&emsp;&ensp;<br /><br />
                                    &emsp;暱稱:&ensp;<?=$user->name?>&emsp;&emsp;&nbsp;&emsp;&ensp;<br /><br/>
                                    &emsp;性別:&ensp;<?=$user->gender?>&emsp;&emsp;&nbsp;&emsp;&ensp;<br><br>
                                    &emsp;職業:&ensp;<?=$user->job?>&emsp;&emsp;&nbsp;&emsp;&ensp;
                                <br><br>
                                <a href="edit-password.php" class="post-tag" onclick="">重設密碼&emsp;&emsp;&ensp;</a>  
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