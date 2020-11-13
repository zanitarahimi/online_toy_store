<?php
    include 'scripts/header.html';
?>
<div class="content-section">
    <div class="container">
        <div class="row">
<?php
    require 'scripts/db.php';
    $result = mysqli_query($mysqli, 'select * from products');
?>
               
 <?php while($product = mysqli_fetch_object($result)){?>
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
                <span class="price">Përshkrimi:</span>
                <p><?php echo substr($string1, 0, 155).'...';?></p>
                <span class="price">Çmimi: €<?php echo $product->Price;?></span>
            </div>
        </div>
    </div>
<?php }?>
</div> <!-- /.row -->
<hr>
<br>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="product-item-4">
                        <div class="product-thumb">
                            <img src="images/produkti4.jpg" alt="Product Title">
                        </div> <!-- /.product-thumb -->
                        <div class="product-content overlay">
                            <h5><a href="#">Robotta</a></h5>
                            <span class="tagline">4 robota, me te cilët mund të luani një loje!</span>
                            <span class="price">€5.00</span>
                            <p>Prej materialit të mirë dhe shumë të qendrueshëm.</p>
                        </div> <!-- /.product-content -->
                    </div> <!-- /.product-item-4 -->
                </div> <!-- /.col-md-4 -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="product-item-4">
                        <div class="product-thumb">
                            <img src="images/produkti5.jpg" alt="Product Title">
                        </div> <!-- /.product-thumb -->
                        <div class="product-content overlay">
                            <h5><a href="#">Retro</a></h5>
                            <span class="tagline">Kanë mbetur një sasi mjaft e vogël.<br>Nxitoni!</span>
                            <span class="price">€8.00</span>
                            <p>Si asnjë herë më parë, kanë arritur këto lloje të këtyre robotave mjaft të veqantë.</p>
                        </div> <!-- /.product-content -->
                    </div> <!-- /.product-item-4 -->
                </div> <!-- /.col-md-4 -->
                <div class="col-md-4 col-sm-6 col-xs-12"">
                    <div class="product-item-4">
                    	<div class="product-thumb">
                        <img src="images/produkti6.jpg" alt="">
                        </div>
                          <div class="product-content overlay">
                            <h5><a href="#">Gamma</a></h5>
                            <span class="tagline"><br>Nxitoni!<br>Numri i limituar.</span>
                            <span class="price">€4.30</span>
                            <p>Veturë me funksione të ndryshme, dhe me një çmim mjaf të volitshëm</p>
                        </div> 
                    </div> <!-- /.ads-placement -->
                </div> <!-- /.col-md-4 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.content-section -->

    <div class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-title">
                    <h2>Produktet e reja</h2>
                </div> <!-- /.section -->
            </div> <!-- /.row -->
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img src="images/4/1.jpg" alt="">
                        </div> <!-- /.product-thum -->
                        <div class="product-content">
                            <h5><a href="produktiRi.php">Crayola Qwikflip</a></h5>
                            <span class="price">€22.50</span>
                        </div> <!-- /.product-content -->
                    </div> <!-- /.product-item -->
                </div> <!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img src="images/5/2.jpg" alt="">
                        </div> <!-- /.product-thum -->
                        <div class="product-content">
                            <h5><a href="produktiRi1.php">Paint-Sation</a></h5>
                            <span class="price">€11.00</span>
                        </div> <!-- /.product-content -->
                    </div> <!-- /.product-item -->
                </div> <!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img src="images/produkti11.jpg" alt="">
                        </div> <!-- /.product-thum -->
                        <div class="product-content">
                            <h5><a>Balon për ditëlindje</a></h5>
                             <span class="tagline">E disponueshme vetëm në shitore.</span>
                            <span class="price">€2.99</span>
                        </div> <!-- /.product-content -->
                    </div> <!-- /.product-item -->
                </div> <!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img src="images/6/2.jpg" alt="">
                        </div> <!-- /.product-thum -->
                        <div class="product-content">
                            <h5><a href="produktiRi4.php">Makinë Karaoke me mikrofon</a></h5>

                            <span class="price">€25.00</span>
                        </div> <!-- /.product-content -->
                    </div> <!-- /.product-item -->
                </div> <!-- /.col-md-3 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.content-section -->

<?php
    include 'footer.html';
?>    