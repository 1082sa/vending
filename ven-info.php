<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <!-- Title -->
    <title>ven-info</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css" />

    <link rel="manifest" href="manifest.json" />
     <?php
 include("ven-infolist.php");?>
</head>

<body>
    
    <div class="container">
        <div class="col-12 ven_block">
            <div class="row ven_item_list">
                
                 <?php foreach($rows as $product){ ?>
                
                 <div class="ven_item">
                    <div class="ven_item_img">
                        <img src="<?=$product->pro_pic?>">
                    </div>
                    <div class="ven_item_name text-center">
                        <p><?=$product->pro_name?></p>
                    </div>
                    <div class="ven_item_info text-center">
                        <p><span class="ven_item_price"><?=$product->price?></span>元，剩餘<span class="ven_item_quantity"><?=$product->amount?></span>個</p>
                    </div>
                </div>
                      <br /><br />
                
                            <br /><br/>
                <br><br> 
                            <br><br>
                            
                         
                       <?php }?>
                
                <div class="ven_item">
                    <div class="ven_item_img">
                        <img src="img/blog-img/3.jpg">
                    </div>
                    <div class="ven_item_name text-center">
                        <p>商品一</p>
                    </div>
                    <div class="ven_item_info text-center">
                        <p><span class="ven_item_price">QQ</span>元，剩餘<span class="ven_item_quantity">XX</span>個</p>
                    </div>
                </div>
                <div class="ven_item">
                    <div class="ven_item_img">
                        <img src="img/blog-img/4.jpg">
                    </div>
                    <div class="ven_item_name text-center">
                        <p>商品二</p>
                    </div>
                    <div class="ven_item_info text-center">
                        <p><span class="ven_item_price">QQ</span>元，剩餘<span class="ven_item_quantity">XX</span>個</p>
                    </div>
                </div>
                <div class="ven_item">
                    <div class="ven_item_img">
                        <img src="img/blog-img/5.jpg">
                    </div>
                    <div class="ven_item_name text-center">
                        <p>商品三</p>
                    </div>
                    <div class="ven_item_info text-center">
                        <p><span class="ven_item_price">QQ</span>元，剩餘<span class="ven_item_quantity">XX</span>個</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>