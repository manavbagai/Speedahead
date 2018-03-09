<?php
  error_reporting(0);
require "dbconnectxx.php";
session_start();
if(isset($_SESSION["username"]) && !empty($_SESSION["username"])){
include"nav2.php";
}
else{
include"nav1.php";
}
?>



 <!doctype html>
<head>
<title>Register</title>
<style>
body{
    font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
	}
div.name1,div.name2,div.name3,div.name4,div.name5{

left:100px;

}
body{
background-color:#fccc6f;
}
center{
width:1000px;
margin:0 auto;
border:5px dashed #FF6600;
overflow:auto;
color:orange;
background-color:PapayaWhip;
}
.submit{

display: block;
    width: 120px;
    font-weight: bold;
    color: #FFFFFF;
    background-color: orange;
    text-align: center;
    padding: 4px;
    text-decoration: none;
    text-transform: uppercase;
	}
</style>
</head>
<body>
<center>
<img src="images/register.gif" height="300" width="300">




		<form action="signup.php" method="post">
		
			Username
			<div class="name1"><input type="text" name="username" required='true'></div>
			<br><br>
			Password
			<div class="name2"><input type="password" name="password" required='true' cols="20"></div>
			<br><br>
			Email    
			<div class="name3"><input type="email" cols="20" name="email" required='true'></div>
			<br><br>
			Phone Number 
			<div class="name4"><input type="text" cols="20" required='true' name="Phone"></div>
			<br><br>
			<div class="name5"><input type="submit" name="submit" value="Register" class="submit"></div>
			<br>
		</form>
		</center>
		</body>
		</html>
		<?php

if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	$pass=$_POST['password'];
	$email=$_POST['email'];
	$phone=$_POST['Phone'];
    
	$query="INSERT INTO `user` (`Username`, `Password`, `Email`, `Phone Number`) VALUES ('".$username."', '".$pass."', '".$email."', '".$phone."')";
	if(mysql_query($query))
	{
		echo '<br><br>Account added Successfully!';
	}
	else
		echo "Duplicate entry!";
}

?>