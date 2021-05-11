<?php
require_once("connect.php");
  require_once("session.php");
  confirm_logged_in();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>www.nwt.finalproject.com</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div id="wrapper">
	<div class="header">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar" style="padding-top: 20px"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
         <div class="sitename"><img src="img/logouse.jpg" width="100px" height="100px">
       Flash Delivery Service</div>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar" style="padding-top: 30px">
      <ul class="nav navbar-nav navbar-right" style="font-family: poor richard;">
         <li ><a href="home.php" class="btn btn-link" role="button">Home</a></li>
                    <li><a href="userspage.php" class="btn btn-link" role="button">Dashboard</a></li>
                    <li><a href="contact.php" class="btn btn-link" role="button">Update_Profile</a></li>
                    <li><a href="logout.php" class="btn btn-danger" role="button">Logout</a></li>
                  
       </ul>
    </div>
  </div>
</nav>
<div style="background-color: purple; color:white; padding-top: 20px; font-size: 25px; padding-left: 50px; margin-top:-20px; padding-bottom: 20px; font-family: ariel; text-align: center;">Welcome
<?php
extract($_SESSION);
echo $_SESSION['fullname']." ";
echo "<img src='image/".$photo."' width='100' height='100'/>";
?>
</div>
</div>


<div class="container">
	
</div>

</div>
 



</body>
<!-- GLOBAL SCRIPTS -->
    <script src="assets/plugins/jquery-2.0.3.min.js"></script>
     <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->
<script type="text/javascript">
  $('.dropdown').hover(function(){
      $('.dropdown-toggle', this).trigger('click');
  });
</script>
   
    <!-- END PAGE LEVEL SCRIPTS -->
</html>


