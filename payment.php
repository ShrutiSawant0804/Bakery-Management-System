<?php
include("connection.php");
    $user_id=$_GET['id'];
    $user_total=$_GET['total'];      

?>
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
           <div id="">
               <div class="">
                   <center>
                   <img src="img/sweet.png" hight=, width=250 alt="quality">
</div>
                   </center>
</div>
  <body style="background-color: black;font-size: x-large;">
    <div class="container">
      <div class="main-content">
        <center>
            <h1>Payment Page</h1></center>
      </div>
</div>
      <center>
      <div class="card-details" >
        <h2><p>Pay using Credit or Debit card</p></h2>
        <div class="card-number">
          <label> Card Number </label>
          <input
            type="number"
            class="card-number-field"
            placeholder="###-###-###"/>
        </div>
        <div class="date-number">
	        <label> Expiry Date </label>
          <input type="date" class="date-number-field" 
                 placeholder="MM-DD-YYYY"/>
</div>
        <div class="cvv-number">
          <label> CVV number </label>
          <input type="number" class="cvv-number-field" 
                 placeholder="xxx"/>
        </div>
        <div class="nameholder-number">
          <label> Card Holder name </label>
          <input
            type="text"
            class="card-name-field"
            placeholder="Enter your Name"/>
        </div>
        <div class="card-number">
            <label>Price</label>
            <input
              type="text"
              class="card-number-field"
              placeholder="<?php echo $user_total?>" disabled/>
</div>
          <a href="success.php?id=<?php echo $user_id?>"><button type="submit" 
                class="submit-now-btn">
          Submit
	        </button></a>
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
  </body>
</html>
