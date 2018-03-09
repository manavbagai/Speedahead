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
<title>feedback</title>
<style>
body{
background-color:#fccc6f;
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
div.com{

left:100px;

}
div.layout{
width:1000px;
margin:0 auto;
border:5px dashed #FF6600;
overflow:auto;
background-color:PapayaWhip;
}

body{
    font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
	}

div.kk{
 box-shadow: 1px 1px 5px #888888;
 margin:5px;
 }
 .XX{
 color:orange;
 }
textbox,h4{
font-size:18px;
}
</style>
</head>
<body>
<center>
<div class="layout">
<form action="feedback1.php" method="post">
			<h1><strong>FEEDBACK</strong></h1>
	               	
			<h2>Heading:</h2> <div class="com"><textarea rows="2" cols="50" name="heading">
</textarea> </div>
			<h2>Feedback:</h2> <div class="com"><textarea rows="4" cols="50" name="comments">
</textarea></div><br><div class="com">	
 <input type="radio" name="like" value="Like"><img src="images/like.png" width="50" height="50">&nbsp;&nbsp;&nbsp;.
<input type="radio" name="like" value="Dislike"><img src="images/dislike.png" width="50" height="50"></div><br>
		<input type="submit" name="submit" value="submit" class="submit">
			<br>
			<br>
		</form>
      </center>
	  </div>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <div class="layout">
	 <center> <img src="images/feedback.png" width="400" height="400"></center>
	 <?php

if(isset($_POST['submit']))
{
if(isset($_SESSION["username"]) && !empty($_SESSION["username"])){
    $username=$_SESSION["username"];
	$comment=$_POST['comments'];
	$heading=$_POST['heading'];
	if($_POST['like']=="Like")
	{
	$like=1;
	}
	else{
	$like=0;
	}
	
}
else{
$username="Guest";
	$comment=$_POST['comments'];
	$heading=$_POST['heading'];
	if($_POST['like']=="Like")
	{
	$like=1;
	}
	else{
	$like=0;
	}
}
    
    
	$query="INSERT INTO `comments` (`Name`,`Heading`, `Comments`,`Like`) VALUES ('".$username."','".$heading."', '".$comment."','".$like."')";
	if(mysql_query($query))
	{
	
	}
	else
		echo "Duplicate entry!";
}
	
	$query1="SELECT * FROM `comments`";
	
	if($query1_run=mysql_query($query1)){
	while($row=mysql_fetch_assoc($query1_run)){
        $un=$row['Comments'];
		$un1=$row['Heading'];
		$un2=$row['Name'];
		if($row['Like']==1)
		{
		$un5="like.png";
		}
		else
		{
		$un5="dislike.png";
		}
echo'
    <div class="kk"><strong><h2 class="XX">&nbsp;&nbsp;&nbsp;USER: '.$un2.'</h2></strong>
	<strong><center><h2>'.$un1.'</strong></center></h2>
	<h4>&nbsp;&nbsp;&nbsp;'.$un.'</h4>
    <center><img src="images/'.$un5.'" width="40" height="40"></center>	
	</div><br><br><br>
	';
		}
		}
		
//$query1="SELECT * FROM 'Comments'";



?> 
	  </div>
	  
	  </body>
	  </html>

	