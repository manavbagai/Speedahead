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
<title>Honda</title>








<style>
body{
background-color:#fccc6f;
}
div.img {
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

<h1><center><img src="images/honda.jpg" width="150" height="70"></center></h1>

<div class="img">
<a href="#city.php">
<img src="images/city.jpg"  width="420" height="200">

<center>
<button type="button" class="a1"><u>Honda City</u></button>

</center>
</div>
</a>
<div class="img1">
<a href="#crv.php">
<img src="images/crv.jpg" width="420" height="200">

<center>
<button type="button" class="a2"><u>Honda CRV</u></button>
</center>
</div>
</a>


<div class="img">
<a href="#brio.php">
<img src="images/brio.jpg" width="420" height="200">
<center>
<button type="button" class="a3"><u>Honda Brio</u></button>
</center>
</div>
</a>
<div class="img1">
<a href="#amaze.php">
<img src="images/amaze.jpg" width="420" height="200">
<center>
<button type="button" class="a4"><u>Honda Amaze</u></button>
</center></div>
</div>
</a>

</body>
</html>