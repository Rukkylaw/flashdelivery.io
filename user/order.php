<?php

require_once("../connect.php");
  require_once("../session.php");
  confirm_logged_in();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>www.nwt.finalproject.com</title>
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../index.css">
</head>
<body>
<div id="wrapper">
	<div class="header" style="border:2px solid violet;">
    <div class="row">
      <div class="col-md-6">
        <div class="sitename"><img src="../assets/img/logouse.jpg" width="100px" height="100px">
       Flash Delivery Service</div>
      </div>
      <div class="col-md-1"></div>
        <div class="col-md-5" style="font-family: poor richard; font-size: 25px;">Welcome
         <?php
          extract($_SESSION);
          echo $_SESSION['fullname']." ";
          echo "<img src='../assets/image/".$photo."' width='100' height='100'/>";
          ?>
       </div>
       
    </div>
    </div>

<div class="container" style="margin: 0px;">
  <div class="row">
    <div class="col-md-4">
     <nav class="navbar navbar-inverse nav-justified" style="height: 550px; background-color: purple;">
  <div class="container-fluid">
      <ul class="nav navbar-nav">
         <li ><a href="home.php" class="btn btn-link" role="button">Home</a></li><br>
          <br> <li><a href="userspage.php" class="btn btn-link" role="button">Dashboard</a></li><br>
          <li class="active"><a href="order.php" class="btn btn-link" role="button">Placeorder</a></li><br>
          <li><a href="return.php" class="btn btn-link" role="button">Returnpolicy</a></li><br>
             <li><a href="profile.php" class="btn btn-link" role="button">Updateprofile</a></li><br>
                  <li><a href="logout.php" class="btn btn-link" role="button">Logout</a></li>
       </ul>
  </div>
</nav>
</div>

<div class="col-md-8">
  <form class="form-horizontal" enctype="multipart/form-data" method="POST" id="block-validate" style="font-size: 18px; padding-top: 30px; font-family: ariel">

     <div class="form-group">
        <label class="control-label col-lg-4">Select order category</label>
          <div class="col-lg-4" style="font-size: 17px">
            <select name="category">
              <option value="Package delivery">package delivery</option>
                <option value="Meal delivery">Meal delivery</option>
                 <option value="Foodstuff delivery">Foodstuff delivery</option>
             </select>
  
            </div>
      </div>

       <div class="form-group">
         <label class="control-label col-lg-4">Enter order item/items with price where neccessary</label>
          <div class="col-lg-4">
            <textarea name="item" rows="6" cols="30" required>
            </textarea>
           </div>
      </div>

       <div class="form-group">
        <label class="control-label col-lg-4">Select delivery fee payment method</label>
          <div class="col-lg-4" style="font-size: 17px">
            <select name="paymentmethod">
              <option value="Bank transfer">Bank transfer</option>
                <option value="P.O.S">P.O.S</option>
                 <option value="Cash on delivery">Cash on delivery</option>
             </select>
  
            </div>
      </div>


      <div class="form-group">
        <label class="control-label col-lg-4">Enter delivery address</label>
          <div class="col-lg-4">
             <input type="text" name="deliveryaddress" placeholder="enter delivery address" class="form-control" required/>
          </div>
      </div>

      <div class="form-group">
        <label class="control-label col-lg-4">Enter delivery phone number</label>
          <div class="col-lg-4">
           <input type="number" name="deliverynumber" placeholder="+234........" class="form-control" required />
          </div>
      </div>

      <div class="form-group">
        <label class="control-label col-lg-4">Order date</label>
          <div class="col-lg-4">
           <input type="date" name="orderdate" class="form-control" required/>
          </div>
      </div>
      
      <div class="form-group">
        <label class="control-label col-lg-4">Enter delivery date</label>
          <div class="col-lg-4">
           <input type="date" name="deliverydate" class="form-control" required/>
          </div>
      </div>
      
      <div class="form-actions no-margin-bottom" style="text-align:center;">
      <input type="submit" value="Submit-order"  name="submit" class="btn btn-primary btn-lg " style="background-color: violet">
      </div>
 </form>
 <?php
if (isset($_POST['submit'])) {
  extract($_POST);
  $sql="INSERT INTO item(users_id,category,item,paymentmethod,deliveryaddress,deliverynumber,orderdate,deliverydate) VALUES('$id','$category','$item','$paymentmethod','$deliveryaddress','$deliverynumber','$orderdate','$deliverydate')";
  mysql_query($sql) or die(mysql_error());

  echo "<script type='text/javascript' src='Todayswork.js'></script>";
    }
   
  # code...


 ?>
</div>
  </div>
  
</div>

</div>
 



</body>
<!-- GLOBAL SCRIPTS -->

    <script src="../assets/plugins/jquery-2.0.3.min.js"></script>
     <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->
<script type="text/javascript">
  $('.dropdown').hover(function(){
      $('.dropdown-toggle', this).trigger('click');
  });
</script>
   
    <!-- END PAGE LEVEL SCRIPTS -->
</html>


