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
          echo "<img src='../image/".$photo."' width='100' height='100'/>";
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
          <li><a href="order.php" class="btn btn-link" role="button">Placeorder</a></li><br>
          <li><a href="return.php" class="btn btn-link" role="button">Returnpolicy</a></li><br>
             <li class="active"><a href="profile.php" class="btn btn-link" role="button">Updateprofile</a></li><br>
                  <li><a href="logout.php" class="btn btn-link" role="button">Logout</a></li>
       </ul>
  </div>
</nav>
</div>

<div class="col-md-8">
  <?php
  $sql="SELECT * FROM user WHERE email='$email'";
$query = mysql_query($sql) or die(mysql_error());
if (mysql_num_rows($query)==1) {
  while ($result=mysql_fetch_array($query)) {
    extract($result);

  ?>
  <form class="form-horizontal" enctype="multipart/form-data" method="POST" id="block-validate" style="font-size: 18px; padding-top: 30px; font-family: ariel">

    <div class="form-group">
         <label class="control-label col-lg-4">Full Name</label>
           <div class="col-lg-4">
            <input type="text" id="required2" value="<?php echo $fullname ?>" name="fullname" class="form-control" />
           </div>
      </div>
     
     <div class="form-group">
         <label class="control-label col-lg-4">Home address</label>
          <div class="col-lg-4">
            <input type="text" value="<?php echo $homeaddress ?>" name="homeaddress" class="form-control" />
           </div>
      </div>
      
     <div class="form-group">
      <label class="control-label col-lg-4">Phone number</label>
        <div class="col-lg-4">
         <input type="number" id="number2" value="<?php echo $phonenumber ?>" name="phonenumber" class="form-control" />
        </div>
      </div>
      
      <div class="form-group">
        <label class="control-label col-lg-4">Password</label>
          <div class="col-lg-4">
           <input type="password" id="password2" value="<?php echo $password ?>" name="password" class="form-control" />
          </div>
      </div>
      
      
       <div class="form-group">
        <label class="control-label col-lg-4">Profile picture</label>
          <div class="col-lg-4">
           <input type="file" name="image">
          </div>
      </div>
     
    <center> <button class="btn text-muted text-center btn-danger" style="background-color: violet" name="submit">Update</button></center>
    <?php  
    if (isset($_POST['submit'])) {
      extract($_POST);
      extract($_SESSION);
      $photo = $_FILES['image']['name'];

       if(move_uploaded_file($_FILES["image"]["tmp_name"], "image/".$photo)){


$sql1="UPDATE user SET fullname='$fullname', homeaddress='$homeaddress', phonenumber='$phonenumber',password='$password', image='$photo' WHERE id='$id'";
mysql_query($sql1) or die(mysql_error());
}
      
    }
    ?>
 </form>
 <?php 
  }

}
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


