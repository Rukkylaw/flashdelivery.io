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
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../index.css">
</head>
<body>
<div id="wrapper">
	<div class="header" style="border:2px solid violet;">
    <div class="row">
      <div class="col-md-6">
        <div class="sitename"><img src="../img/logouse.jpg" width="100px" height="100px">
       Flash Delivery Service</div>
      </div>
      <div class="col-md-1"></div>
        <div class="col-md-5" style="font-family: poor richard; font-size: 25px; padding-top: 30px;">Welcome 
         <?php
          extract($_SESSION);
          echo $fullname." ";
          echo" Staff id ";
          echo $staffid." ";
          ?>
       </div>
       
    </div>
    </div>

<div class="container" style="margin: 0px;">
  <div class="row">
    <div class="col-md-4">
     <nav class="navbar navbar-inverse nav-justified" style="height:1000px; background-color: purple;" >
  <div class="container-fluid">
      <ul class="nav navbar-nav">
         <li class="active"><a href="adminpage.php" class="btn btn-link" role="button">Dashboard</a></li><br>
          <br> <li><a href="manage.php" class="btn btn-link" role="button">Manage-order</a></li><br>
          <li><a href="../logout.php" class="btn btn-link" role="button">Logout</a></li>
       </ul>
  </div>
</nav>
</div>

<div class="col-md-8" style="margin-top: 20px;">
  <h3 style="text-align: center; font-family: poor richard; font-size: 40px; margin-bottom: 20px;">Order History</h3>

<table class="table table-bordered table-hover" border="1" width="100%" align="center">
  <tr>
    <th>id</th>
    <th>User's_id</th>
    <th>Category</th>
    <th>Items</th>
    <th>Paymentmethod</th>
    <th>Delivery address</th>
    <th>Delivery number</th>
    <th>Order date</th>
    <th>Delivery date</th>
    <th>Order status</th>
  <?php

$sql="SELECT * FROM item";
$query=mysql_query($sql) or die(mysql_error());
$result=mysql_fetch_array($query);
while ($result=mysql_fetch_array($query)){
  
        echo'<tr>
        <td>'.$result['id'].'</td>
         <td>'.$result['users_id'].'</td>
        <td>'.$result['category'].'</td>
        <td>'.$result['item'].'</td>
        <td>'.$result['paymentmethod'].'</td>
        <td>'.$result['deliveryaddress'].'</td>
        <td>'.$result['deliverynumber'].'</td>
        <td>'.$result['orderdate'].'</td>
        <td>'.$result['deliverydate'].'</td>
        <td><form method="post"><input type="text" name="orderstatus"></form></td>
             </tr>

 ';
}
  ?>
  <?php 
        if (isset($_post['orderstatus'])){
          extract($_post);
          $orderstatus = $_post['orderstatus'];
        
          $sql = "INSERT INTO item(orderstatus) VALUES($orderstatus)";
          mysql_query($sql) or die(mysql_error());
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


