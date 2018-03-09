<?php

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
<title>Maruti</title>








<style>
body{
background-color:#fccc6f;
}
div.img2 {
    float:left;
   /* text-align: center;*/
	 display: inline;
 padding-bottom: 25px;
	 margin:20px;
	/*0 border: 5px dashed #FF6600 ;*/
	 	 box-shadow: 1px 1px 5px #888888;
      }

 div.img1 {
    
    float:right;
   /* text-align: center;*/
	 display: inline;
 padding-bottom: 25px;
	 margin:20px;
	/* border: 5px dashed #FF6600 ;*/
	 box-shadow: 1px 1px 5px #888888;
	 }


div.desc {
  width: 120px;
  margin: 20px;
  color:blue;
  font-size:40px;
}
div.button{
  float:right;
   padding-bottom: 25px;
  padding-top: 25px;
}
.layout{
width:1000px;
margin:0 auto;
overflow:auto;
background-color:PapayaWhip;
}


center{

padding-top: 25px;
padding-bottom: 25px;
}
h1{
box-shadow: 1px 1px 5px #888888;
}


button.a1,button.a2,button.a3,button.a4{
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
	u{
	color:white;
	}
</style>




</head>
<body>













<br>



















<div class="layout">

<h1><center><img src="images/maruti.jpg" width="150" height="70"></center></h1>

<div class="img2">
<a href="#celerio.php">
<img src="images/celerio.jpg"  width="420" height="200">

<center>
<button type="button" class="a1"><u>Celerio</u></button>

</center>
</div>
</a>
<div class="img1">
<a href="#alto.php">
<img src="images/alto.jpg" width="420" height="200">

<center>
<button type="button" class="a2"><u>Maruti Alto</u></button>
</center>
</div>
</a>
<div class="img2">
<a href="#ciaz.php">
<img src="images/ciaz.jpg"  width="420" height="200">

<center>
<button type="button" class="a1"><u>Maruti Ciaz</u></button>

</center>
</div>
</a>
<div class="img1">
<a href="#ertiga.php">
<img src="images/ertiga.jpg" width="420" height="200">
<center>
<button type="button" class="a4"><u>Maruti Ertiga</u></button>
</center></div>
</div>
</a>

</body>
</html>