<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  
  <!-- Title -->
  <title>商品搜尋結果</title>
  
  <!-- Favicon -->
  <link rel="icon" href="img/core-img/favicon.ico" />

  <!-- Style CSS -->
  <link rel="stylesheet" href="css/style.css" />

  <link rel="manifest" href="manifest.json" />

  <!-- Vue.js --> 
  <script src="https://cdn.jsdelivr.net/npm/vue"></script>
  
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
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
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
                                        <a href="profile.html"><img src="img/vending-machine.png" /></a>
                                    </div>
                                    &emsp;
                                    <h4>Mavis</h4>
                                </div>

                                <ul>
                                    <li>
                                        <a href="index.html"><span>首頁</span></a>
                                    </li>
                                    <li>
                                        <a href="#導向4的條件三"><span>我的最愛</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span>消費紀錄</span></a>
                                    </li>
                                    <li>
                                        <a href="contact.php"><span>故障回報紀錄</span></a>
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
                                        <a href="#"><span>登出</span></a>
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
     <?php 
    include("search.php");?>
  <div class="container">
    <div class="col-12" id="result_block">
      <div class="row" id="result_list"> 
         
 
          
          <?php 
         if(!empty($statement)){
        
          if($statement=="notyet"){
              echo "請搜尋欲搜尋的商品.....";
          }
          
              else{
              
          
          foreach($statement as $row){
              
        ?>
              <div class="list_item">
          <div class="item_img">
            <img src="<?php echo $row['pro_pic']?>">
          </div>
          <div class="item_name text-center">
            <p><?php echo $row['pro_name']?></p>
          </div>
            
        </div>
              
         <?php 
          } }}
          
          ?>
        
      </div>
      <!--返回上一頁-->
      <button type="button" class="btn btn-outline-light back">
        <img src="img/back.svg">     
      </button>
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