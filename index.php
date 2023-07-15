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
                   <img src="img/sweet.png" alt="quality">
                       <h1><b><i>Sweet Bite Cake Shop</i></b></h1>
                       <h4>The taste of home-baked goodness</h4>
                       <a href="view.php" class="btn btn-danger">Shop Now</a>
                   </div>
                   </center>
               </div>
           <footer class="footer"> 
               <div class="container">
               <center>
                   <h6>Cake Shop System</a> Store. All Rights </h6>
                   <h6>This website is developed by Shruti Sawant</h6>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>
               