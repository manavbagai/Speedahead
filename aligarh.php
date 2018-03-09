<?php
  error_reporting(0);
session_start();

if(isset($_SESSION["username"]) && !empty($_SESSION["username"])){
include"nav2.php";
}
else{
include"nav1.php";
}
?>
<!DOCTYPE html>
<html>

<head>
<style>
header {
    background-color:orange;
    color:white;
    text-align:center;
    padding:5px;	 
}
nav {
    line-height:30px;
    background-color:PapayaWhip;
    height:300px;
    width:100px;
    float:left;
    padding:5px;	      
}
section {
left:1000px;
    width:350px;
    float:left;
    padding:10px;	
color:black;	
display:Block;
}
footer {
    background-color:orange;
    color:white;
    clear:both;
    text-align:center;
    padding:5px;	 	 
}
a{
color:orange;
}
</style>
</head>

<body>

<header>
<h1>CITY DEALERS</h1>
</header>

<nav>
<a href="maruti.php" >Dev Maruti</a><br>
<a href="honda.php"> RS Honda</a><br>
<a href="chev.php">Shiv Chevrolet</a><br>
</nav>
<center>
<section>

<h1><strong>DEV MARUTI</strong></h1>

<img src="images/marutialigarh.jpg" width="200" height="200">
<p>
It is one of the oldest dealers of Maruti.<br>There main moto is "service before self".<br>
Address:GT Road, Aligarh<br>
Phone No: 0571 11111<br>
<a href ="maruti.php"><h2>View Catalogue</h2></a>

<h1><strong>RS HONDA</strong></h1>
<img src="images/hondashow.jpg" width="200" height="200">
<p>
It is the dealer for Honda for Aligarh, Hathras and other nearby regions.<br>They give full assurance for proper service.<br>
Address:Agra Road, Aligarh<br>
Phone No: 0571 22222<br>
<a href ="honda.php"><h2>View Catalogue</h2></a>
</p>
</section>

<footer>
Aligarh City
</footer>

</body>
</html>