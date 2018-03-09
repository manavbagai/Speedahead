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
div.layout{
width:1000px;
margin:0 auto;
border:5px dashed #FF6600;

overflow:auto;
background-color:PapayaWhip;
display:block;
}
.layout22{
width:1000px;
margin:0 auto;
border-left:5px dashed #FF6600;
border-right:5px dashed #FF6600;
border-bottom:5px dashed #FF6600;
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
	 display: block;
 padding-bottom: 25px;
	 margin:20px;
	/* border: 5px dashed #FF6600 ;*/
	 box-shadow: 1px 1px 5px #888888;
	 }
	 body{
background-color:#fccc6f;

	 
}
header {
    background-color:orange ;
    color:white;
    text-align:center;
   /* padding-top:4px;
	padding-bottom:8px;*/
	font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
width:1010px;
height:40px;	
}

.submit{

display: block;
    width: 150px;
	height:30px;
    font-weight: bold;
    color: #FFFFFF;
    background-color: orange;
    text-align: center;
    padding: 4px;
    text-decoration: none;
	margin-right:150px;
      margin-left:190px;
    text-transform: uppercase;
	}
	.x1 {
    border: 1px solid black;
    border-collapse: collapse;
}
th.x1, td.x1 {
    padding: 20px;
}
h1{
margin-right:150px;
margin-left:150px;
}
div.kk{
 box-shadow: 1px 1px 5px #888888;
 margin:5px;
 }
div.img1{
    font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
	
}
textarea,h4{
font-size:18px;
}
body{
    font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
	}
	a{
	color:white;
	}
</style>












<?php

$user_name=$_SESSION["username"];
function check_for_existence($query){  

	if($query_run = mysql_query($query)){
		$row=mysql_fetch_assoc($query_run);
		$query_num_rows = mysql_num_rows($query_run);
		return $query_num_rows;
	}else{
		return die('error');
	}
}

$query2 = "SELECT * FROM `user` WHERE `UserName` ='".$user_name."'";
if($query2_run=mysql_query($query2)){
	$row=mysql_fetch_assoc($query2_run);
        $qun=$row['Authorise'];
	}

if($qun==1){
echo'<center>
<header>
<h1>Booked History for Seller</h1>
</header></center><br><br>';

	$query12 = "SELECT * FROM `booking` WHERE `Seller` ='".$user_name."'";

	if($query1_run=mysql_query($query12)){
	while($row=mysql_fetch_assoc($query1_run)){
	echo'<div class="layout">';
        $un=$row['Vehicle Name'];
		$un2=$row['Price'];
		$un3=$row['Photo'];
		$un4=$row['User Name'];
	    $un5=$row['Phone Number'];
		$un6=$row['Email'];
		
     echo '<strong><table style="width:100%" class="x1">
	<tr class="x1">
    <td class="x1">Vehicle Name</td>
	<td class="x1">'.$un.'</td>
	</tr>
	  <tr>
    <td class="x1">Price</td>	
	<td class="x1">Rs.'.$un2.'</td>
	</tr>
	<tr>
    <td class="x1">User Name</td>
	 <td class="x1">'.$un4.'</td>
	 </tr>
	 <tr>
	<td class="x1">Phone Number</td>
	 <td class="x1">'.$un5.'</td>
	 </tr>
	 <tr>
	<td class="x1">Email</td>
	 <td class="x1">'.$un6.'</td>
	 </tr>
	 </table></div><br><br>';
}
}
echo'<center>
<header>
<h1>Booked History by Seller</h1>
</header></center><br><br>';
$query12 = "SELECT * FROM `booking` WHERE `User Name` ='".$user_name."'";
echo'<span class="layout">';
	if($query1_run=mysql_query($query12)){
	while($row=mysql_fetch_assoc($query1_run)){
echo'<div class="layout">';

        $un=$row['Vehicle Name'];
		$un2=$row['Price'];
		
		$un4=$row['Seller'];
	    
		$query52 = "SELECT * FROM `city` WHERE `Dealer` ='".$un4."'";
		if($query52_run=mysql_query($query52)){
	        $row5=mysql_fetch_assoc($query52_run);
			$un5=$row5['Address'];
			$un6=$row5['Phone Number'];
			$un7=$row5['City'];
			}
     echo '<strong><table style="width:100%" class="x1">
	<tr class="x1">
    <td class="x1">Vehicle Name</td>
	<td class="x1">'.$un.'</td>
	</tr>
	  <tr>
    <td class="x1">Price</td>	
	<td class="x1">Rs.'.$un2.'Lakh</td>
	</tr>
	<tr>
    <td class="x1">Seller</td>
	 <td class="x1">'.$un4.'</td>
	 </tr>
	 <tr>
	<td class="x1">Seller Address</td>
	 <td class="x1">'.$un5.'</td>
	 </tr>
	  <tr>
	<td class="x1">City</td>
	 <td class="x1">'.$un7.'</td>
	 </tr>
	 <tr>
	<td class="x1">Seller Phone Number</td>
	 <td class="x1">'.$un6.'</td>
	 </tr>
	 </table></div><br><br>';
	 
}
}
}
else{
echo'<center>
<header>
<h1>Booked History</h1>
</header></center><br><br>';
$query12 = "SELECT * FROM `booking` WHERE `User Name` ='".$user_name."'";
echo'<span class="layout">';
	if($query1_run=mysql_query($query12)){
	while($row=mysql_fetch_assoc($query1_run)){
echo'<div class="layout">';

        $un=$row['Vehicle Name'];
		$un2=$row['Price'];
		
		$un4=$row['Seller'];
	    
		$query52 = "SELECT * FROM `city` WHERE `Dealer` ='".$un4."'";
		if($query52_run=mysql_query($query52)){
	        $row5=mysql_fetch_assoc($query52_run);
			$un5=$row5['Address'];
			$un6=$row5['Phone Number'];
			$un7=$row5['City'];
			}
     echo '<strong><table style="width:100%" class="x1">
	<tr class="x1">
    <td class="x1">Vehicle Name</td>
	<td class="x1">'.$un.'</td>
	</tr>
	  <tr>
    <td class="x1">Price</td>	
	<td class="x1">Rs.'.$un2.' Lakh</td>
	</tr>
	<tr>
    <td class="x1">Seller</td>
	 <td class="x1">'.$un4.'</td>
	 </tr>
	 <tr>
	<td class="x1">Seller Address</td>
	 <td class="x1">'.$un5.'</td>
	 </tr>
	  <tr>
	<td class="x1">City</td>
	 <td class="x1">'.$un7.'</td>
	 </tr>
	 <tr>
	<td class="x1">Seller Phone Number</td>
	 <td class="x1">'.$un6.'</td>
	 </tr>
	 </table></div><br><br>';
	 
}
}
}
?>
