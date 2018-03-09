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
<title>Contact Us</title>
<style>
div.layout{
float:center;
width:1300px;
margin:0 auto;
overflow:auto;
background-color:PapayaWhip;
color:orange;
 
}
body{
    font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
	}
body{
background-color:#fccc6f;
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
</style>
</head>

<body >

<div class="layout">
<div class="mm">
<center><h1><u>Contact Us</u> </h1>
<img src="images/contact.png"height="300" width="300"></center>
<h2 align="center">Manav Bagai - manav@gmail.com</h2>
<h2 align="center">Siddharth Gupta - sidgupta@gmail.com</h2>
<h2 align="center">Phone No +91 9995559922</h2>
</div>
</div>
</body>
</html>