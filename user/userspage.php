<?php

require 'connect.php';
session_start();
  // confirm_logged_in();
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
          echo $fullname." ";
          echo "<img src='../image/".$photo."' width='100' height='100'/>";
          ?>
       </div>
       
    </div>
    </div>

<div class="container" style="margin: 0px;">
  <div class="row">
    <div class="col-md-4">
     <nav class="navbar navbar-inverse nav-justified" style="height: 600px; background-color: purple;" >
  <div class="container-fluid">
      <ul class="nav navbar-nav">
         <li ><a href="home.php" class="btn btn-link" role="button">Home</a></li><br>
          <br> <li class="active"><a href="userspage.php" class="btn btn-link" role="button">Dashboard</a></li><br>
          <li><a href="order.php" class="btn btn-link" role="button">Placeorder</a></li><br>
          <li><a href="return.php" class="btn btn-link" role="button">Returnpolicy</a></li><br>
             <li><a href="profile.php" class="btn btn-link" role="button">Updateprofile</a></li><br>
                  <li><a href="logout.php" class="btn btn-link" role="button">Logout</a></li>
       </ul>
  </div>
</nav>
</div>

<div class="col-md-8" style="margin-top: 20px;">
  <h3 style="text-align: center; font-family: poor richard; font-size: 40px; margin-bottom: 20px;">Order History</h3>

<table class="table table-bordered table-hover" border="1" width="100%" align="center">
  <tr>
    <th>id</th>
    <th>Category</th>
    <th>Items</th>
    <th>Paymentmethod</th>
    <th>Delivery address</th>
    <th>Delivery number</th>
    <th>Delivery date</th>
  <?php
extract($_SESSION);
$sql="SELECT * FROM item WHERE users_id='$id'";
$query=mysqli_query($con, $sql) or die(mysqli_error());
//$result=mysql_fetch_array($query);
while ($result=mysqli_fetch_array($query)){
  
        echo'<tr>
        <td>'.$result['id'].'</td>
        <td>'.$result['category'].'</td>
        <td>'.$result['item'].'</td>
        <td>'.$result['paymentmethod'].'</td>
        <td>'.$result['deliveryaddress'].'</td>
        <td>'.$result['deliverynumber'].'</td>
        <td>'.$result['deliverydate'].'</td>
             </tr>

 ';
}
  ?>
   </table>
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


