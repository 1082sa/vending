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
     <?php 
    include("search.php");?>
  <div class="container">
    <div class="col-12" id="result_block">
      <div class="row" id="result_list"> 
         
 
          
          <?php 
          
          foreach($statement as $row){
              if (($row['pro_pic'])==null){
          echo "test";
          } 
          else{?>
              <div class="list_item">
          <div class="item_img">
            <img src="<?echo $row['pro_pic']?>">
          </div>
          <div class="item_name text-center">
            <p><?echo $row['pro_name']?></p>
          </div>
            <!----
          <div class="item_info text-center">
            <p><span class="item_price">QQ</span>元，剩餘<span class="item_quantity">XX</span>個</p>
          </div>--->
        </div>
              
         <? 
          }}  ?>
        
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