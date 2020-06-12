<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nav</title>

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
    <!-- include 導覽列 -->
    <header class="header-area">
         <?php include("sidebarsearch.php")?>
    </header>
    <!-- include 地圖 -->
    <div class="map">
        <?php include("newindex.php")?>
    </div>
    <!-- <iframe src="newindex.php" class="map" frameborder="0" scrolling="no"></iframe> -->
    
    

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
