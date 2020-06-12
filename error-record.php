<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Title -->
  <title>WEVEN - 故障回報紀錄</title>

  <!-- Favicon -->
  <link rel="icon" href="img/core-img/favicon.ico" />

  <!-- Style CSS -->
  <link rel="stylesheet" href="css/style.css" />

  <link rel="manifest" href="manifest.json" />

  <!--animation.css-->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />
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
</head>
<body>
  <!-- Preloader -->
  <div id="preloader">
      <div class="preload-content">
          <div id="original-load"></div>
      </div>
  </div>

  <!-- Header -->
  <header class="header-area">
      <?php include("sidebar.php")?>
  </header>

  <div class="blog-wrapper section-padding-50 clearfix" style="text-align: center;">
      <div class="container">
          <div>
              <!-- Single Blog Area -->
              <div class="single-blog-area clearfix">
                  <!-- Blog Content -->
                  <div class="single-blog-content">
                      <h3 class="our-title">故障回報紀錄</h3>
                      <br>
                      <hr size="10px" class="our-hr">
                      <!-- 表格 -->
                      <table class="error-content">
                        <tr class="error-title">
                          <td>時間</td>
                          <td>編號</td>
                          <td>故障原因</td>
                          <td>狀態</td>
                        </tr>
                        <tr class="error-empty">
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        
                        <tr class="error-content-odd">
                          <td>06/11</td>
                          <td>販賣機01</td>
                          <td>沒看到販賣機</td> <!-- 分為常見問題的那四個加其他？-->
                          <td><img class="correct" src="img/correct.svg"></td>
                        </tr>
                        <tr class="error-content-even">
                          <td>06/10</td>
                          <td>販賣機02</td>
                          <td>吃錢</td> <!-- 分為常見問題的那四個加其他？-->
                          <td><img class="cross" src="img/cross.svg"></td>
                        </tr>
                      </table>

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
    <!-- Optional JavaScript -->
  
</body>
</html>