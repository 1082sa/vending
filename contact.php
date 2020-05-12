<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Original - Lifestyle Blog Template</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css" />
    
    <?php 
    error_reporting(0);  
    if(isset($_GET[situation])){?>
    <script>     
           alert('已完成故障回報');   
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

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Contact Form Area -->
                <div class="col-12 col-md-10 col-lg-9">
                    <div class="contact-form">
                        <h5>販賣故障回報</h5>
                        <!-- Contact Form -->
                        <form enctype="multipart/form-data" action="contact-upload.php" method="post">
                            <div class="row">
                            
                                <div class="col-12">
                                    <div class="group">
                                        <textarea name="message"  required></textarea>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>請敘述故障狀況</label>
                                    </div>
                                </div>
                                
                                <br> <br> <br>
                                <div class="col-12">
                                    <div class="group">
                                    <input type="file" class="btn btn-outline-dark" name="my_file">
                             <label>圖片上傳(可忽略)</label>
                            <br>
                            <br>
                                       
                                        <span class="bar"></span>
                                       
                                    </div>
                                </div>
                                <div class="col-12">
                                    <input type="submit" class="btn original-btn">
                      
                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-12 col-md-10 col-lg-3">
                    <div class="post-sidebar-area">
                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title subscribe-title"></h5>
                            <div class="widget-content">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area text-center"></footer>

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
    <!-- Google Map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
    <script src="js/map-active.js"></script>
</body>

</html>