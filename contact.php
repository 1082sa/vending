<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>WEVEN - 故障申報</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css" />
    
    
</head>

<body>
    <!-- Preloader 
    <div id="preloader">
        <div class="preload-content">
            <div id="original-load"></div>
        </div>
    </div>
-->

    <!-- Contact Area Start -->
    
                       
                        <!-- Contact Form -->
   
    <input type="button" class="btn btn-sm" value="吃錢" id="btn">
    <input type="button" class="btn btn-sm" value="商品錯誤" id="btn2">
    <input type="button" class="btn btn-sm" value="存貨不足" id="btn3">
     <input type="button" class="btn btn-sm" value="沒看到販賣機" id="btn4">
              <br><br>
              <form enctype="multipart/form-data" action="contact-upload.php" method="post">
                            <div class="row">
                            
                                <div class="col-12">
                                    <div class="group">
                                        <input id="txt" style="textarea  width:300px height:100px" name="message"  value="請敘述故障狀況" required>
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
                                 
                                <div class="col-12"  >
                                  
                                   
                    
                    
                                </div>
                                   
                            </div>
                  <center>
                   <input type="submit" class="btn original-btn">
                      </center>
                        </form>
                    

              
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
   <script src="js/contact.js"></script>
    
               
</body>

</html>