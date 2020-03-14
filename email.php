<?php
session_start();
if(isset($_POST['submit']))
{
     if($_SESSION['emailid']==$_POST['mail'] && $_SESSION['psw']==$_POST['pass'])
     {
     	echo "You are write";
     }
     else
     {
     	echo "Your password is wrong";
     }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
</head>
<body>
	<h2>Welcome to Login  Page</h2>
	<form method="POST" action=" ">
	<p><b>Email:</b><input type="email" name="mail" ></p>
	<p><b>Password:</b><input type="Password" name="pass"></p>
	<input type="submit" name="submit" value="Submit">
	</form>
</body>