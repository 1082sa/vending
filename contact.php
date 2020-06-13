<!DOCTYPE html>

    <!-- Preloader 
    <div id="preloader">
        <div class="preload-content">
            <div id="original-load"></div>
        </div>
    </div>

    <!-- ##### Contact Area Start ##### -->


    <!-- Contact Form -->

    <input type="button" class="btn btn-sm" value="吃錢" id="btn">
    <input type="button" class="btn btn-sm" value="商品錯誤" id="btn2">
    <input type="button" class="btn btn-sm" value="存貨不足" id="btn3">
    <input type="button" class="btn btn-sm" value="沒看到販賣機" id="btn4">
    <br><br>

    <form enctype="multipart/form-data" action="action.php" method="post">
        <input type="hidden" name="ven_num" id="ven_num_id" >
        <div class="row">

            <div class="col-12">
                <div class="group">
                    
                    <input id="txt" style="textarea  width:300px height:100px" name="error_words" required>
                    
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




            </div>

        </div>
        <center>
            <button type="submit" class="btn original-btn" id="post-btn">提交 </button>
            <!-- <input type="submit" class="btn original-btn"> -->
        </center>
    </form>


