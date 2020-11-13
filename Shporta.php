<?php
    include 'scripts/header.html';
?>
<?php
ini_set('display_errors', 0);
error_reporting(E_ERROR | E_WARNING | E_PARSE); 
require 'scripts/db.php';
$product_id='';
if (isset($_POST["product"]) && !empty($_POST["product"])) {
    $product_id=$_POST["product"];
}
$user_id='';
if (isset($_SESSION['logged_in'])) {
    $user_id=$id;
}
$sql = "INSERT INTO users_stock (user_id, product_id) " . "VALUES ($user_id,$product_id)";
$mysqli->query($sql);

$products= mysqli_query($mysqli, "select * from products where ID=$product_id");
$quantity='';
while($product = mysqli_fetch_object($products)){
    if($product->Quantity>0){
        $quantity=$product->Quantity -1;
    }
    else{
    		$quantity='';
    }
}
    		
$sqlProduct = "UPDATE products SET Quantity=$quantity WHERE ID=$product_id";
$mysqli->query($sqlProduct);

$userStock = mysqli_query($mysqli, "select * from users_stock WHERE user_id=$user_id");

$products= mysqli_query($mysqli, "SELECT products.*, count(users_stock.product_id) as number_of_orders, SUM(products.Price)  as total      
from products
right join users_stock
on (products.ID = users_stock.product_id && users_stock.user_id=$user_id)
group by
    products.ID");
?>

<div class="content-section">
    <div class="container">
        <div class="row">
            <?php 
                $total_price = 0;
                while($product = mysqli_fetch_object($products)){?>
     	              <?php print_r($product->total.'aaaaaaa');
                            $b = $product ->total;
                            $total_price = $total_price + $b;
                            print_r($total_price); 
                      ?>
       			            <div class="col-md-3">
                            <div class="product-item-1">
                                <div class="product-thumb" style="max-height: 200px;">
                                    <img style="max-height: 200px;" src="images/<?php echo $product->ID;?>/0.jpg" alt="Veture">
                                </div>
                                <div class="product-content">
                                     <h5><a href="singleProduct.php?ID=<?php echo $product->ID;?>"><?php echo $product->Name;?></a></h5>
                                    <?php
                                        $string1 = $product->Description;
                                        
                                        if(strlen($string1) >= 10){
                                          $string = substr($string1, 0, 20);
                                        }
                                    ?>
                                    <span class="tagline"><?php echo $string; ?></span>
                                    <?php $price =  $product->total;?>
                                    <span class="price"> Çmimi total: €<?php echo $price;?></span>
                                    <span class="price"> Sasia e porositur: <?php echo $product->number_of_orders;?></span>
                                    
                                </div>
                            </div>
                        </div>

                <?php }?>
        </div>
        <p style="font-size: 20px; color: #985e6d; font-weight: bold;">Çmimi i të gjitha blerjeve: €<?php echo $total_price;?></p>
        
    </div>
</div>


<?php
	include 'footer.html';
?>