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
    width:100px;
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
</style>
<?php
$var55=$_GET['vname'];
$query11="SELECT * FROM `brands` WHERE `Car Name` ='".$var55."' ";
if($query11_run=mysql_query($query11)){
	$row=mysql_fetch_assoc($query11_run);
        $dun=$row['Car Name'];
		$dun2=$row['Brand'];
		$dun3=$row['Price'];
		$dun5=$row['Photo'];

}



if($_GET['cname']=="1")
{
$query1="SELECT * FROM `city` WHERE `City` ='Delhi' AND `Brand`='".$dun2."'";
}
else if($_GET['cname']=="2")
{
$query1="SELECT * FROM `city` WHERE `City` ='Aligarh' AND `Brand`='".$dun2."' ";
}
else if($_GET['cname']=="3")
{
$query1="SELECT * FROM `city` WHERE `City` ='Mumbai' AND `Brand`='".$dun2."' ";
}
else if($_GET['cname']=="4")
{
$query1="SELECT * FROM `city` WHERE `City` ='Kolkata' AND `Brand`='".$dun2."' ";
}


echo'<span class="layout">';
	if($query1_run=mysql_query($query1)){
	while($row=mysql_fetch_assoc($query1_run)){
        $un=$row['Dealer'];
		$un2=$row['City'];
		$un3=$row['Address'];
		$un4=$row['Phone Number'];
		$un5=$row['Photo'];
		
		
		if($count%2==0)
		{
		echo'<a href="book1.php?value5='.$un.'& value2='.$var55.'"><div class="img">
<img src="images/'.$un5.'" width="200" height="200"><br>';
echo "<center><strong><br> Name:   ".$un."<br> City: ".$un2."<br> Address:  ".$un3."<br>Phone No: ".$un4." </strong></div></center></a>";
}
else if($count%2==1){
echo'<a href="book1.php?value5='.$un.'& value2='.$var55.'"><div class="img1">
<img src="images/'.$un4.'" width="200" height="200"><br>';
echo "<center><strong><br> Name: ".$un."<br> City: ".$un2."<br> Address:  ".$un3."<br>Phone No: ".$un4." </strong></div></center></a>"; 
}
}
echo'</span>';
}
?>