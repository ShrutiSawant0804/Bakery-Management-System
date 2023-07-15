
<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/sweet.jpeg">
        <title>Sweet Bite Cake Shop</title>
        <meta charset="UTF-1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    
    <body>
        <div style="background-color: black;">
           <?php
            require 'header.php';
           ?>
        <div id="bannerImage">
               <div class="container">
                   <center>
                       <h1><b>Our Features</b></h1>
                   </div>
                   </center>
               </div>
               
           <div style="background-color: black;">
                <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                            <img src="img/Q.jpeg" alt="quality">
                           <center>
                           <div class="card-body">
                                <h1 class="card-title"><i class="fas fa-shipping-fast"></i></h1>
                                <h2 class="card-title"><b>Quality</b></h2>
                                <p class="card-text"><b>Our very first priority is the quality we never compromised in the quality of our bakery products.</b></p>
                            </div>
                           </center>
                       </div>
                   </div>
                <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                            <img src="img/C.jpeg" alt="fresh">
                           <center>
                           <div class="card-body">
                                <h1 class="card-title"><i class="fas fa-shipping-fast"></i></h1>
                                <h2 class="card-title"><b>Fresh & Natural</b></h2>
                                <p class="card-text"><b>Our every product is fresh and made with natural ingredients we do not use the artificial food ingredient in our products.</b></p>
                            </div>
                           </center>
                       </div>
                   </div>
                <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                            <img src="img/D.jpeg" alt="delivery">
                           <center>
                           <div class="card-body">
                                <h1 class="card-title"><i class="fas fa-shipping-fast"></i></h1>
                                <h2 class="card-title"><b>Free delivery</b></h2>
                                <p class="card-text"><b>We provide free delivery to our customers. We deliver in 1 hr from the time customer order the product.</b></p>
                            </div>
                           </center>
                       </div>
                   </div>
</div>  
<div id="bannerImage">
               <div class="container">
                   <center>
                       <h1><b>Our Products</b></h1>
                   </div>
                   </center>
               </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-3">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="img/Mix Fruit.jpg" alt="Mix Fruit Cake">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Mix Fruit Cakes</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-3">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/Red Velvet.jpg" alt="Red Velvet">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Red Velvet Cakes</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-3">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/Truffle tarle.jpg" alt="Truffel Tarle">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Trufeel Tarle</p>
                               </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-3">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/Malabar coast cardamon.jpg" alt="Malabar coast cardamon">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Malabar Coast Cardamon</p>
                               </div>
                           </center>
                        </div>
                    </div>
                    <div class="col-xs-3">
                                <div class="thumbnail">
                                    <a href="products.php">
                                        <img src="img/Blood cake.jpg" alt="blood orange chocolate cake">
                                    </a>
                                    <center>
                                        <div class="caption">
                                            <p id="autoResize">Blood orange chocolate cake</p>
                                        </div>
                                    </center>
                        </div>
                    </div> 
                    <div class="col-xs-3">
                                <div class="thumbnail">
                                    <a href="products.php">
                                        <img src="img/roses 2.jpg" alt="cup cake">
                                    </a>
                                    <center>
                                        <div class="caption">
                                            <p id="autoResize">Cup Cakes</p>
                                        </div>
                                    </center>
                        </div>
                    </div>  
                    <div class="col-xs-3">
                                <div class="thumbnail">
                                    <a href="products.php">
                                        <img src="img/bundt cake.jpeg" alt="bundt cake">
                                    </a>
                                    <center>
                                        <div class="caption">
                                            <p id="autoResize">Bundt Cake</p>
                                        </div>
                                    </center>
                        </div>
                    </div>
                    <div class="col-xs-3">
                                <div class="thumbnail">
                                    <a href="products.php">
                                        <img src="img/donut.jpeg" alt="Donuts">
                                    </a>
                                    <center>
                                        <div class="caption">
                                            <p id="autoResize">Donuts</p>
                                        </div>
                                    </center>
                        </div>
                    </div>    
        </div>
    </div>               
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center>
                   <h6>Cake Shop System</a> Store. All Rights Reserved.</h6>
                   <h6>This website is developed by Shruti Sawant</h6>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>