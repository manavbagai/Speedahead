

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
<title>Log In</title>
<style>
body{
    font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
	}
div.name1,div.name2{

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
<script>
function goBack() {
    window.location="index.php";
}
</script>
</head>
<body>
<center>
<img src="images/login.png" height="300" width="300">
		<form action="login.php" method="post">
			<strong>Username</strong>
	<div class="name1">		<input type="text" name="username" required='true' ></div>
			<br><br>
			<strong>Password</strong>
		<div class="name2">	<input type="password" name="password" required='true' ></div>
			<br><br>
		<input type="submit" name="submit" value="submit" class="submit">
			<br>
		</form>
      



</body>
</html>

<?php
function check_for_existence($query){  

	if($query_run = mysql_query($query)){
		$row=mysql_fetch_assoc($query_run);
		$query_num_rows = mysql_num_rows($query_run);
		return $query_num_rows;
	}else{
		return die('error');
	}
}

if(isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])){
	$user_name = $_POST['username'];
	$pass_word = $_POST['password'];
	$query12 = "SELECT username FROM `user` WHERE `username` ='".$user_name."' AND `password` = '".$pass_word."'";

	if(check_for_existence($query12) == 1){
	session_start();
	$_SESSION["username"]=$user_name;
	echo '<script type="text/javascript">
               goBack();</script>';
	
	  
	}else{
		
		echo '<strong>Please enter valid username and password combination!</strong>';
	}
}


?>

