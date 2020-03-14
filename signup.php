<?php
session_start();
if(isset($_POST['submit']))
{
   $name=$_POST['name'];
  $_SESSION['emailid']=$_POST['email'];
   $chars = "0123456789";
$_SESSION['psw']= substr( str_shuffle( $chars ), 0, 4 );
   $to=$_POST['email'];
    $subject="Thanks";
    $message=$_SESSION['psw'];
    if(mail($to,$subject,$message))
   {
     header('location:email.php');
   	//echo "Message send successfully";

   }
   else
   {
    echo "Please write the correct email id";
   }
  

}

?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
</head>
<body>
	<h2>Welcome to Signup Page</h2>
	<form method="POST" action=" ">
	<p><b>Name:</b><input type="text" name="name" required></p>
	<p><b>Email:</b><input type="email" name="email"></p>
	<input type="submit" name="submit" value="Submit">
	</form>
</body>