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


 <!doctype html>
<head>
<title>About Us</title>
<style>
div.layout{
float:center;
width:1300px;
margin:0 auto;
overflow:auto;
background-color:PapayaWhip;
color:orange;
 
}

div.button{
  float:center;
 
   padding-bottom: 25px;
  padding-top: 25px;
}
div.mm{
border: 5px dashed #FF6600 ;
}
div.img{
 padding-bottom: 25px;
  padding-top: 25px;
  
  }
  img{
  align:center;
  
  }
 
div.layout1
 {
width:1360px;
height:100px;
margin:0 auto;
 /*padding-bottom: 25px;
  padding-top: 25px;*/
overflow:auto;
background-color:#FF6600;
}
body{
background-color:#fccc6f;
}
</style>
</head>
<body >


<div class="layout">
<div class="mm">
<h2 align="center"><u>Programmed & Developed for Minor Project By-</u></h2>
<h2 align="center">Manav Bagai (12PEB338)</h2>
<h2 align="center">Siddharth Gupta (12PEB542)</h2>

</div>
</div>
</body>
</html>