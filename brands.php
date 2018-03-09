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
width:1000px;
margin:0 auto;
border:5px dashed #FF6600;
overflow:auto;
background-color:PapayaWhip;
display:block;
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
	img.pic {
  border: 10px solid #fff;  
  float: left;
  height: 300px;
  width: 400px;
  margin: 20px;
  overflow: hidden;
   
  -webkit-box-shadow: 5px 5px 5px #111;
          box-shadow: 5px 5px 5px #111;  
}
</style>
<nav><strong><h1>BRANDS</h1>
 <form action="brands.php" method="post">
<input type="checkbox" name="vehicle1">Maruti<br>
<input type="checkbox" name="vehicle2">Honda<br>
<input type="checkbox" name="vehicle3">Audi<br>
<input type="checkbox" name="vehicle4">BMW<br>
<input type="checkbox" name="vehicle5">Hyundai<br>
<input type="checkbox" name="vehicle6">Toyota<br>
<input type="checkbox" name="vehicle7">Chevrolet<br>
<input type="checkbox" name="vehicle8">Tata<br>
<input type="checkbox" name="vehicle9">All Brands<br><br>
<input type="submit" name="submit" class="submit">
</strong></form>
</nav>







<?php
$count=0;
if((!isset($_POST['vehicle1'])&& !isset($_POST['vehicle2']) && !isset($_POST['vehicle3']) && !isset($_POST['vehicle4']) && !isset($_POST['vehicle5']) && !isset($_POST['vehicle6']) && !isset($_POST['vehicle7']) &&!isset($_GET['bname']) && !isset($_POST['vehicle8']))||isset($_POST['vehicle9']))
{
$query1="SELECT * FROM `brands`";
}
else if((isset($_POST['vehicle1'])&& !isset($_POST['vehicle2']) && !isset($_POST['vehicle3']) && !isset($_POST['vehicle4']) && !isset($_POST['vehicle5']) && !isset($_POST['vehicle6']) && !isset($_POST['vehicle7']) && !isset($_POST['vehicle8']))||($_GET['bname']=="1"))
{
$query1="SELECT * FROM `brands` WHERE `Brand` ='MARUTI' ";
}
 else if((!isset($_POST['vehicle1'])&& isset($_POST['vehicle2']) && !isset($_POST['vehicle3']) && !isset($_POST['vehicle4']) && !isset($_POST['vehicle5']) && !isset($_POST['vehicle6']) && !isset($_POST['vehicle7']) && !isset($_POST['vehicle8']))||($_GET['bname']=="2"))
{
$query1="SELECT * FROM `brands` WHERE `Brand` ='HONDA' ";
}
else if((!isset($_POST['vehicle1'])&& !isset($_POST['vehicle2']) && isset($_POST['vehicle3']) && !isset($_POST['vehicle4']) && !isset($_POST['vehicle5']) && !isset($_POST['vehicle6']) && !isset($_POST['vehicle7']) && !isset($_POST['vehicle8']))||($_GET['bname']=="3"))
{
$query1="SELECT * FROM `brands` WHERE `Brand` ='AUDI' ";
}
else if((!isset($_POST['vehicle1'])&& !isset($_POST['vehicle2']) && !isset($_POST['vehicle3']) && isset($_POST['vehicle4']) && !isset($_POST['vehicle5']) && !isset($_POST['vehicle6']) && !isset($_POST['vehicle7']) && !isset($_POST['vehicle8']))||($_GET['bname']=="4"))
{
$query1="SELECT * FROM `brands` WHERE `Brand` ='BMW' ";
}
else if((!isset($_POST['vehicle1'])&& !isset($_POST['vehicle2']) && !isset($_POST['vehicle3']) && !isset($_POST['vehicle4']) && isset($_POST['vehicle5']) && !isset($_POST['vehicle6']) && !isset($_POST['vehicle7']) && !isset($_POST['vehicle8']))||($_GET['bname']=="5"))
{
$query1="SELECT * FROM `brands` WHERE `Brand` ='HYUNDAI' ";
}
else if((!isset($_POST['vehicle1'])&& !isset($_POST['vehicle2']) && !isset($_POST['vehicle3']) && !isset($_POST['vehicle4']) && !isset($_POST['vehicle5']) && isset($_POST['vehicle6']) && !isset($_POST['vehicle7']) && !isset($_POST['vehicle8']))||($_GET['bname']=="6"))
{
$query1="SELECT * FROM `brands` WHERE `Brand` ='TOYOTA' ";
}
else if((!isset($_POST['vehicle1'])&& !isset($_POST['vehicle2']) && !isset($_POST['vehicle3']) && !isset($_POST['vehicle4']) && !isset($_POST['vehicle5']) && !isset($_POST['vehicle6']) && isset($_POST['vehicle7']) && !isset($_POST['vehicle8']))||($_GET['bname']=="7"))
{
$query1="SELECT * FROM `brands` WHERE `Brand` ='CHEVROLET' ";
}
else if((!isset($_POST['vehicle1'])&& !isset($_POST['vehicle2']) && !isset($_POST['vehicle3']) && !isset($_POST['vehicle4']) && !isset($_POST['vehicle5']) && !isset($_POST['vehicle6']) && !isset($_POST['vehicle7']) && isset($_POST['vehicle8']))||($_GET['bname']=="8"))
{
$query1="SELECT * FROM `brands` WHERE `Brand` ='TATA' ";
}
else{
echo"<script>alert('Select only 1 checkbox');</script>";
}
	$count=0;

		
		echo'<span class="layout">';
	if($query1_run=mysql_query($query1)){
	while($row=mysql_fetch_assoc($query1_run)){
        $bun=$row['Car Name'];
		$bun2=$row['Brand'];
		$bun3=$row['Price'];
		$bun4=$row['Photo'];
		
	echo'<a href="vehicle.php?value='.$bun.'">';	
	
		if($count%2==1)
		{
		echo '<div class="img1">';
		
		}
	else{
		echo'<div class="img">';
		}
echo'<img src="images/'.$bun4.'" width="450" height="300" class="pic"><br>';
echo "<center><strong><br> Car:   ".$bun."<br> Brand: ".$bun2."<br> Price:  Rs.".$bun3." Lakh</strong></div></center>";
$count++;
}
echo'</a></span>';
}

?>
