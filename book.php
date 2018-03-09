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




<style>
#am {
    width: 250px;
    height: 200px;
    background-image:url("car3.jpg");
	background-repeat:no-repeat;
    position: relative;
    /* Chrome, Safari, Opera */
    -webkit-animation-name: myfirst;
    -webkit-animation-duration: 5s;
    -webkit-animation-timing-function: linear;
    -webkit-animation-delay: 2s;
    -webkit-animation-iteration-count: infinite;
    -webkit-animation-direction: alternate;
    -webkit-animation-play-state: running; 
    /*standard syntax*/
    animation-name: myfirst;
    animation-duration: 3s;
    animation-timing-function: linear;
    animation-delay: 2s;
    animation-iteration-count: infinite;
   animation-direction:initial ;
    animation-play-state: running; 
}
@-webkit-keyframes myfirst {
    
	0%   { background-image:url("car3.jpg"); left:0px; top:0px;}
    100%  { background-image:url("car3.jpg"); left:1200px; top:0px;}
    
}
@keyframes myfirst {
    
	0%   { background-image:url("car3.jpg"); left:0px; top:0px;}
    100%  { background-image:url("car3.jpg"); left:1200px; top:0px;}
    
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
border-left:5px dashed #FF6600;
border-right:5px dashed #FF6600;
border-bottom:5px dashed #FF6600;
overflow:auto;
background-color:PapayaWhip;
}

button{

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
	
center{
font:67.5% "Lucida Sans Unicode" , "Bitstream Vera Sans", "Trebuchet Unicode MS" , "Lucida Grande" , Verdana, Helvetica, sans-serif;
/*padding-top: 25px;
padding-bottom: 25px;*/
}

header {
    background-color:orange;
    color:white;
    text-align:center;
width:1010px;
height:40px;	
}
body{
background-color:#fccc6f;
}

</style>

<center>
<header>
<h1>Choose City</h1>
</header></center>




<?php
$var=$_GET['value2'];
echo'
<div class="layout">
<div class="img">
<a href="book2.php?cname=1&vname='.$var.'">
<img src="images/delhi1.jpg" width="200" height="200">
<center>
<button type="button" ><u>Delhi</u></button>
</a>
</center>
</div>
<div class="img">
<a href="book2.php?cname=2&vname='.$var.'">
<img src="images/aligarh1.jpg" width="200" height="200" >
<center>
<button type="button" ><u>Aligarh</u></button>
</a>
</center>
</div>
<div class="img">
<a href="book2.php?cname=3&vname='.$var.'">
<img src="images/mumbai1.jpg"  width="200" height="200">
<center>
<button type="button" ><u>Mumbai</u></button>
</a>
</center>

</div>
<div class="img">
<a href="book2.php?cname=4&vname='.$var.'">
<img src="images/kolkata1.jpg"  width="200" height="200">
<center>
<button type="button" ><u>Kolkata</u></button>
</a>
</center>
</div>
</div>';
?>