<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>www.nwt.finalproject.com</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css">
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
         <div class="sitename"><img src="assets/img/logouse.jpg" width="100px" height="100px">
       Flash Delivery Service</div>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar" style="padding-top: 30px">
      <ul class="nav navbar-nav navbar-right">
         <li ><a href="index.php" class="btn btn-link" role="button">Home</a></li>
                    <li><a href="service.php" class="btn btn-link" role="button">Services</a></li>
                    <li><a href="about.php" class="btn btn-link" role="button">AboutUs</a></li>
                    <li><a href="faq.php" class="btn btn-link" role="button">FAQ</a></li>
                    <li><a href="contact.php" class="btn btn-link" role="button">ContactUs</a></li>
                   <li class="btn-group dropdown">    
                    <a style="text-align: center" class="btn dropdown-toggle"  data-toggle="dropdown" style="color: black"> 
                      Registration
                      <span class="caret"></span>
                             </a>   
                                 <ul class="dropdown-menu" role="menu">   
                                   <li><a href="login.php" class="btn btn-link" role="button"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
                                   <li><a href="signup,php" class="btn btn-link" role="button"> <span class="glyphicon glyphicon-user"></span>Signup</a></li>
                                      </ul> 
                                         </li>  
       </ul>
    </div>
  </div>
</nav>
  </div>

<div>
<div class="container">
  
  <h3 style="text-align: center; font-size: 30px; font-family: ariel">Register with us as a Customer (For individual and Businesses).</h3>
  <div style="border: 2px solid violet">
  <form class="form-horizontal" enctype="multipart/form-data" method="POST" id="block-validate" style="padding-top: 20px; padding-bottom: 20px; font-size: 18px; font-family: ariel">
     <div class="form-group">
         <label class="control-label col-lg-4">Full Name</label>
           <div class="col-lg-4">
            <input type="text" id="required2" name="fullname" placeholder="firstname/middlename/surname" class="form-control" />
           </div>
      </div>
      <div class="form-group">
         <label class="control-label col-lg-4">E-mail</label>
          <div class="col-lg-4">
            <input type="email" id="email2" name="email" placeholder="something@email.com" class="form-control" />
           </div>
      </div>
      <div class="form-group">
         <label class="control-label col-lg-4">Home address</label>
          <div class="col-lg-4">
            <input type="text"  name="homeaddress" class="form-control" />
           </div>
      </div>
      
      <div class="form-group">
      <label class="control-label col-lg-4">Phone number</label>
        <div class="col-lg-4">
         <input type="number" id="number2" name="phonenumber" placeholder="+234......" class="form-control" />
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-lg-4">Date Of Birth</label>
          <div class="col-lg-4">
           <input type="date" id="date2" name="dob" class="form-control" />
          </div>
      </div>      
      <div class="form-group">
        <label class="control-label col-lg-4">Password</label>
          <div class="col-lg-4">
           <input type="password" id="password2" name="password" placeholder="enter password" class="form-control" />
          </div>
      </div>
      
      
       <div class="form-group">
        <label class="control-label col-lg-4">Profile picture</label>
          <div class="col-lg-4">
           <input type="file" name="image"/>
          </div>
      </div>
     

     <div class="form-actions no-margin-bottom" style="text-align:center;">
      <input type="submit" value="Register"  name="formcustomer" class="btn btn-primary btn-lg " style="background-color: violet">
      </div>
  </form>
  </div>

<?php
require_once("connect.php");

 if(isset($_POST['formcustomer'])){
 extract($_POST);
 $fullname = $_POST['fullname'];
 $email = $_POST['email'];
 $homeaddress = $_POST['homeaddress'];
 $phonenumber = $_POST['phonenumber'];
 $dob = $_POST['dob'];
 $password = $_POST['password'];
 $photo = $_FILES['image']['name'];

 if(move_uploaded_file($_FILES["image"]["tmp_name"], "image/".$photo)){

 $sql = "INSERT INTO user(fullname,email,homeaddress,phonenumber,dob,password,image) VALUES('$fullname','$email','$homeaddress','$phonenumber','$dob','$password','$photo')" or die(mysql_error());

 mysqli_query($sql) or die(mysqli_error());
}}
?>



<h3 style="text-align: center; font-size: 30px; font-family: ariel">Become a delivery personnel.</h3>
<div style="border: 2px solid violet">
  <form class="form-horizontal" method="POST" id="block-validate" style="padding-top: 20px; padding-bottom: 20px; font-size: 18px; font-family: ariel">
     <div class="form-group">
         <label class="control-label col-lg-4">Full Name</label>
           <div class="col-lg-4">
            <input type="text" id="required2" name="fullname" placeholder="firstname/middlename/surname" class="form-control" />
           </div>
      </div>
      <div class="form-group">
         <label class="control-label col-lg-4">E-mail</label>
          <div class="col-lg-4">
            <input type="email" id="email2" name="email" placeholder="something@email.com" class="form-control" />
           </div>
      </div>
      <div class="form-group">
        <label class="control-label col-lg-4">Sex</label>
          <div class="col-lg-4" style="font-size: 17px">
            <input type="radio" name="sex" value="male" >Male<br>
            <input type="radio" name="sex" value="female" >Female<br>
            </div>
      </div>
      
      <div class="form-group">
      <label class="control-label col-lg-4">Phone number</label>
        <div class="col-lg-4">
         <input type="number" id="number2" name="phonenumber" placeholder="+234........" class="form-control" />
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-lg-4">Date Of Birth</label>
          <div class="col-lg-4">
           <input type="date" id="date2" name="dob" class="form-control" />
          </div>
      </div>
      <div class="form-group">
        <label class="control-label col-lg-4">Transport you can control<br>(multiple selection is possible)</label>
          <div class="col-lg-4" style="font-size: 17px">
           <input type="checkbox" value="transby" name="transby">Bicycle<br> <input type="checkbox" value="transtri" name="transtri">Tricycle<br> <input type="checkbox" value="transmoto" name="transmoto">Motorcycle
          </div>
      </div>
      <div class="form-group">
        <label class="control-label col-lg-4">Do you have have any previous <br>experience as a delivery personnel?</label>
          <div class="col-lg-4" style="font-size: 17px">
          <input type="radio" name="experience" value="yes"> Yes<br>
          <input type="radio" name="experience" value="no"> No<br>
          </div>
      </div>
      <div class="form-group">
        <label class="control-label col-lg-4">Spoken language(s)</label>
          <div class="col-lg-4" style="font-size: 17px">
           <input type="checkbox" name="langeng">English<br> <input type="checkbox" name="langhau">Hausa<br> <input type="checkbox" name="langyor">Yoruba<br>
            <input type="checkbox" name="langigbo">igbo<br>  <input type="checkbox" name="langothers">Others
          </div>
      </div>
      
      <div class="form-group">
        <label class="control-label col-lg-4">Any disability</label>
          <div class="col-lg-4">
           <input type="text" id="disability2" name="disability" placeholder="please enter your disability." class="form-control">
          </div>
      </div>
      <div class="form-group">
        <label class="control-label col-lg-4">Password</label>
          <div class="col-lg-4">
           <input type="password" id="password2" name="password" placeholder="enter password" class="form-control" />
          </div>
      </div>
      
      <p style="text-align: center; font-family: ariel; font-style: italic; font-size: 20px"> By submitting this form, you are applying to be a member of our organization and you request<br> will be duely considered and we'll get back to you. Thanks
       </p>
     <div class="form-actions no-margin-bottom" style="text-align:center;">
      <input type="submit" value="Register"  name="staff" class="btn btn-primary btn-lg " style="background-color: violet">
      </div>
  </form>
</div>
</div>
</div>
<?php
$host="localhost";
$user="root";
$Password="";
$database="delivery_db";

$db = mysql_connect("localhost","root","") or die(mysql_error());
 
 mysql_select_db("delivery_db");

 if(isset($_POST['staff'])){
 extract($_POST);
 $sql1 = "INSERT INTO staff(fullname,email,sex,phonenumber,dob,transby,transtri,transmoto,experience,langeng,langhau,langyor,langigbo,langothers,disability,password) VALUES('$fullname','$email', '$sex','$phonenumber','$dob', '$transby','$transtri','$transmoto','$experience', '$langeng','$langhau','$langyor','$langigbo','$langothers','$disability','$password')";
 
 mysql_query($sql1) or die(mysql_error());

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
        <a href="facebook">Google+<span class="glyphicon glyphicon-icon-twitter"></span></a>        </div>
        <div class="col-md-2"></div>
    </div>
    <p style="font-size: 20px; text-align: center; padding-top: 20px"> Copyright &copy 2018 Flash delivery service.<br> All right reserved.
</p>
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


