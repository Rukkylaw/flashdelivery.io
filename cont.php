<?php
 $con = mysqli_connect('localhost','root','');

 if(!$con)
{
	echo 'Not connected to server';
}

 if(!mysqli_select_db($con, 'delivery'))
{
  echo 'Database not selected';
}

 $Full_Name = $_POST['fullname'];
 $E_mail = $_POST['email2'];
 $Phone_number = $_POST['number2'];
 $Message = $_POST['message'];

 $sql = "INSERT INTO contact (fullname,email2,number2,message) VALUES ('$Full_Name', '$E_mail', '$Phone_number','$Message')";

 if (!mysqli_query($con,$sql))
 {
 	echo 'Not Inserted';
 }
 else
 {
    echo 'THANK YOU FOR IMPROVING US!';
 }


 ?>