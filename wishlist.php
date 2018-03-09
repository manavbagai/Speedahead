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
nav {
    line-height:30px;
    background-color:PapayaWhip;
    height:400px;
    width:150px;
    float:left;
	border:5px dashed #FF6600;
    padding:5px;	   
	display:block;
	
}
.layout{
width:1100px;
margin:0 auto;
border:5px dashed #FF6600;
overflow:auto;
background-color:PapayaWhip;
display:block;
}
div.img2 {
    float:left;
   /* text-align: center;*/
	 display: block;
 padding-bottom: 25px;
	 margin:20px;
	/*0 border: 5px dashed #FF6600 ;*/
	 	 box-shadow: 1px 1px 5px #888888;
      }


 
	 body{
background-color:#fccc6f;

	 
}
header {
    background-color:orange;
    color:white;
    text-align:center;
    padding:5px;	 
	height:20px;
}
.submit{

display: block;
    width: 90px;
    font-weight: bold;
    color: #FFFFFF;
    background-color: orange;
    text-align: center;
    padding: 4px;
    text-decoration: none;
    text-transform: uppercase;
	}
	.yy{
	float:right;
	}
	img.pic {
  border: 10px solid #fff;  
  float: left;
  height: 240px;
  width: 240px;
  margin: 20px;
  overflow: hidden;
   
  -webkit-box-shadow: 5px 5px 5px #111;
          box-shadow: 5px 5px 5px #111;  
}
</style>
<?php

$user=$_SESSION["username"];
$query1="SELECT * FROM `wishlist` WHERE `User Name` ='".$user."'" ;
echo'<span class="layout"><center><img src="images/wishlist.gif" width="200" height="70"></center>';
	if($query1_run=mysql_query($query1)){
	while($row=mysql_fetch_assoc($query1_run)){
        $un=$row['Vehicle Name'];
		$un3=$row['Price'];
		$un4=$row['Photo'];
		echo'<div  class="img2">';
	echo'<a href="wishlist2.php?value3='.$un.'"><img src="images/minus.gif" width="20" height="20" align="right" ></a>
	<a href="vehicle.php?value='.$un.'">';	


		
		
		
			

echo'<img src="images/'.$un4.'" width="300" height="300" class="pic">';
echo "<center><strong><br> CAR:   ".$un."<br> PRICE:  Rs.".$un3." Lakh</strong></center>";
echo'</div></a>';
}
}
echo'</span>';
 ?>