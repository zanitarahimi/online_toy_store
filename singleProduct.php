<?php
    include 'scripts/header.html';
?>
    <?php $queryString_id= $_GET["ID"];?>
    <?php
    require 'scripts/db.php';
    $result = mysqli_query($mysqli, "select * from products where ID=$queryString_id");
    $result=mysqli_fetch_object($result);
?>

    <div class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="product-image">
                        <img src="images/<?php echo $result->ID;?>/0.jpg" alt="" width="70" height="500">
                    </div> <!-- /.product-image -->
                    <div class="product-information">
                        <h2>Përshkrimi i produktit  </h2>
                        <p>
                            <?php echo $result->Description;?>
                        </p>
                        <p class="product-infos">
                            <span>Çmimi aktual: € <?php echo $result->Price;?></span>
                            <?php $quantity='';?>
                            <?php if($result->Quantity>0){
                                $quantity=$result->Quantity;
                            }else{
                               $quantity='Nuk ka ne stok'; 
                            }?>
                            <span>Sasia:</span><span id="sasia"><?php echo $quantity;?></span>
                        </p>
                        <ul class="product-buttons">
                            <li>
                                <a href="#" class="main-btn" id="blejeBtn">Bleni tani</a>
                            </li>
                        <?php
                        if (isset($_SESSION['logged_in'])) {?>
                            <form action="Shporta.php" method="post">
                                    <input type="hidden" name="product" value="<?php echo $result->ID;?>"/>
                                    <input type="submit" class="main-btn" value="Shto në shportë"/>
                            </form> 
                        <?php } 
                        else{?>
                                <li>
                                    <a href="scripts/index.php" class="main-btn" id="blejeBtn">Shto në shportë</a>
                                </li>
                       <?php }?>
                        </ul>

                    </div> <!-- /.product-information -->
                </div> <!-- /.col-md-8 -->
                <div class="col-md-4 col-sm-8">
                    <div class="product-item-2">
                        <div class="product-thumb">
                            <img src="images/<?php echo $result->ID;?>/1.jpg" alt="">
                        </div> <!-- /.product-thumb -->
                    </div> <!-- /.product-item-2 -->
                    <div class="product-item-2">
                        <div class="product-thumb">
                            <img src="images/<?php echo $result->ID;?>/2.jpg" alt="">
                        </div> <!-- /.product-thumb -->
                    </div> <!-- /.product-item-2 -->
                    <div class="product-item-2">
                        <div class="product-thumb">
            
                         
                        </div> <!-- /.product-thumb -->
                    </div> <!-- /.product-item-2 -->
                </div> <!-- /.col-md-4 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.content-section -->



<?php
    include 'footer.html';
?>