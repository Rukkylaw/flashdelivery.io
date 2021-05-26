<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>www.nwt.finalproject.com</title>
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../index.css">
</head>
<body >
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
         <div class="sitename"><img src="../assets/img/logouse.jpg" width="100px" height="100px">
       Flash Delivery Service</div>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar" style="padding-top: 30px">
      <ul class="nav navbar-nav navbar-right">
         <li ><a href="../index.php" class="btn btn-link" role="button">Home</a></li>
                    <li><a href="../service.php" class="btn btn-link" role="button">Services</a></li>
                    <li><a href="../about.php" class="btn btn-link" role="button">AboutUs</a></li>
                    <li><a href="../faq.php" class="btn btn-link" role="button">FAQ</a></li>
                    <li><a href="../contact.php" class="btn btn-link" role="button">ContactUs</a></li>
                   <li class="btn-group dropdown">    
                    <a style="text-align: center" class="btn dropdown-toggle"  data-toggle="dropdown" style="color: black"> 
                      Registration
                      <span class="caret"></span>
                             </a>   
                                 <ul class="dropdown-menu" role="menu">   
                                   <li><a href="../login.php" class="btn btn-link" role="button"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
                                   <li><a href="../signup.php" class="btn btn-link" role="button"> <span class="glyphicon glyphicon-user"></span>Signup</a></li>
                                      </ul> 
                                         </li>  
       </ul>
    </div>
  </div>
</nav>
  </div>

<div class="container">
    <div class="row" style="margin-top: 40px">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <div id="login" class="tab-pane active">
            <form method="POST" class="form-signin">
                <p style="background-color: violet; text-align: center;font-size: 30px; font-family: pristina">
                    Enter fullname and password
                </p>
                <input type="text" placeholder="Fullname" name="fullname" class="form-control" />
                <input type="password" placeholder="Password" name="staffid" class="form-control" /><center>
                <button class="btn text-muted text-center btn-danger" style="background-color: violet" type="login" name="login">Login</button></center>
            </form>
        </div>
</div>
<div class="col-md-3"></div>
</div>

    <div class="row" style="margin-top: 30px">
     <div class="col-md-4"></div>  
    <div class="col-md-2">
        <p>
          <a class="text-muted" href="forget.php" style="font-family: pristina; font-size: 30px; color: black;">Forgot Password</a></p>
    </div>
          <div class="col-md-3" style="font-family: pristina; font-size: 25px; color: black">
          Don't have an account?<a class="text-muted" href="signup.php" style="font-size: 25px; color: black;">Signup</a>
        </div>
    </div>


</div>
<?php 

if (isset($_POST['login'])){

  require_once("../connect.php");
  require_once("../session.php");

  $fullname = $_POST['fullname'];
  $password = $_POST['staffid'];

  $sql = "SELECT * FROM workers WHERE fullname='$fullname' AND staffid='$password'";

  $query = mysql_query($sql) or die(mysql_error());

    if(mysql_num_rows($query)==1){
      $user=mysql_fetch_array($query) or die(mysql_error());

      $_SESSION['id'] = $user['id'];
      $_SESSION['fullname'] = $user['fullname'];
      $_SESSION['staffid'] = $user['staffid'];
    

      // echo "<script>windows.location.href= 'index1.php'</script>";
      header('location: landin.php');
    }
    
  }



?>

<div class="footer">
    <div class="row" style="font-size: 20px; padding-top: 20px; font-family: ariel">
        <div class="col-md-2"></div>
        <div class="col-md-3">
             <h4>CUSTOMER SERVICE</h4>
    <a href="privacy.php">Privacy Policy</a><br>
    <a href="faq.php">Frequently Asked</a><br>
        </div>
        <div class="col-md-2">
         <h4>PAYMENT</h4>
    <a href="terms.php">Terms & Coditions</a><br>
    <a href="return.php">Return & Refunds</a>
       </div>
       <div class="col-md-1"></div>
        <div class="col-md-2">
            <h4> follow us on:</h4>
        <a href="facebook">facebook <span class="glyphicon glyphicon-twitter"></span></a><br>
        <a href="facebook">Instagram <span class="glyphicon glyphicon-twitter"></span></a> <br>
        <a href="facebook">Google+<span class="glyphicon glyphicon-twitter"></span></a>        </div>
        <div class="col-md-2"></div>
    </div>
    <p style="font-size: 20px; text-align: center; padding-top: 20px"> Copyright &copy 2018 Flash delivery service.<br> All right reserved.
</p>
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

