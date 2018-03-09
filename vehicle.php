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
width:1100px;
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
{
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
      -ms-box-sizing: border-box;
          box-sizing: border-box;
}
 

 
img.pic {
  border: 10px solid #fff;  
  float: left;
  height: 300px;
  width: 300px;
  margin: 20px;
  overflow: hidden;
   
  -webkit-box-shadow: 5px 5px 5px #111;
          box-shadow: 5px 5px 5px #111;  
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
	.img img {
    -webkit-transition: all 1s ease; /* Safari and Chrome */
    -moz-transition: all 1s ease; /* Firefox */
    -ms-transition: all 1s ease; /* IE 9 */
    -o-transition: all 1s ease; /* Opera */
    transition: all 1s ease;
}

.img:hover img {
    -webkit-transform:scale(1.25); /* Safari and Chrome */
    -moz-transform:scale(1.25); /* Firefox */
    -ms-transform:scale(1.25); /* IE 9 */
    -o-transform:scale(1.25); /* Opera */
     transform:scale(1.25);
}
	
</style>
<?php
$abcd=$_GET['value'];
$query1="SELECT * FROM `vehicle` WHERE `Vehicle Name` ='".$abcd."' ";
$query2="SELECT `Price` FROM `brands` WHERE `Car Name` ='".$abcd."' ";
if($query2_run=mysql_query($query2)){
	$row2=mysql_fetch_assoc($query2_run);
	$un1=$row2['Price'];
	}
	if($query1_run=mysql_query($query1)){
	$row=mysql_fetch_assoc($query1_run);
        $un=$row['Vehicle Name'];
		$un2=$row['Photo'];
		$un3=$row['Length'];
		$un4=$row['Width'];
		$un5=$row['Height'];
		$un6=$row['Wheelbase'];
		$un7=$row['Seating Capacity'];
		$un8=$row['Engine'];
		$un9=$row['Displacement'];
		$un10=$row['Gears'];
		$un11=$row['Cylinders'];
		$un12=$row['Power'];
		$un13=$row['Torque'];
		$un14=$row['Fuel'];
		$un15=$row['Milage'];
		$un16=$row['Fuel Type'];
		
		echo'<div class="layout">';
		echo'<div class="img"><img src="images/'.$un2.'" width="350" height="300" class="pic"></div><div class="img1"><h1>'.$un.'<br><br><center> Price: Rs.'.$un1.' Lakh.</h1></center>';
		if(isset($_SESSION["username"]) && !empty($_SESSION["username"])){
echo'	<u><a href="wishlist1.php?value1='.$un.'">
		<input type="button" name="submit" value="Add to wishlist" class="submit">
		</a><br><a href="book.php?value2='.$un.'"><input type="button" name="submit" class="submit" value="Book Now"/></u> </div></a><br><br><br>';
	}
else{
echo'</div>';
}	
		echo'</div><br><br><br><br><br><center>
<header>
<h1>Specifications</h1>
</header></center><div class="layout22">';
		
		echo'<strong><table style="width:100%" class="x1">
		
  <tr class="x1">
    <td class="x1">Vehicle Name</td>
	<td class="x1">'.$un.'</td>
	</tr>
	<tr>
    <td class="x1">Length</td>	
	<td class="x1">'.$un3.'</td>
	</tr>
	<tr>
    <td class="x1">Width</td>
	 <td class="x1">'.$un4.'</td>
	 </tr>
	 <tr>
	<td class="x1">Height</td>
	 <td class="x1">'.$un5.'</td>
	 </tr>
	 <tr>
	<td class="x1">Wheel Base</td>
	 <td class="x1">'.$un6.'</td>
	 </tr>
	 <tr>
	<td class="x1">Seating Capacity</td>
	 <td class="x1">'.$un7.'</td></tr>
	<tr><td class="x1">Engine Type</td>
	<td class="x1">'.$un8.'</td></tr>
	<tr><td class="x1">Displacement</td>
	<td class="x1">'.$un9.'</td></tr>
	<tr><td class="x1">Gears</td>
	<td class="x1">'.$un10.'</td></tr>
	<tr><td class="x1">Cylinders</td>
	<td class="x1">'.$un11.'</td></tr>
	<tr><td class="x1">Total Power</td>
	<td class="x1">'.$un12.'</td></tr>
	<tr><td class="x1">Total Torque</td>
	<td class="x1">'.$un13.'</td></tr>
	<tr><td class="x1">Fuel</td>
	<td class="x1">'.$un14.'</td></tr>
	<tr><td class="x1">Mileage</td>
	<td class="x1">'.$un15.'</td></tr>
	<tr><td class="x1">Fuel Type</td>
	<td class="x1">'.$un16.'</td></tr>
  
</table></strong></div></center><br><br><br> ';
}
?>
<center>
<div class="layout">
<form action="" method="post">
			<h1><strong>Review</strong></h1>
	               	
			<h2>Heading:</h2> <div class="com"><textarea rows="2" cols="50" name="heading">
</textarea> </div>
			<h2>Feedback:</h2> <div class="com"><textarea rows="4" cols="50" name="comments">
</textarea></div><br><div class="com">	
 <input type="radio" name="like" value="Like" ><img src="images/like.png" width="50" height="50">&nbsp;&nbsp;&nbsp;.
<input type="radio" name="like" value="Dislike"><img src="images/dislike.png" width="50" height="50"></div><br>
		<input type="submit" name="submit" value="submit" class="submit">
			<br>
			<br>
		</form>
      </center>
	  </div>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <div class="layout">

	 <?php

if(isset($_POST['submit']))
{
if(isset($_SESSION["username"]) && !empty($_SESSION["username"])){
    $username=$_SESSION["username"];
	$comment=$_POST['comments'];
	$heading=$_POST['heading'];
	if($_POST['like']=="Like")
	{
	$like=1;
	}
	else{
	$like=0;
	}
	
}
else{
$username="Guest";
	$comment=$_POST['comments'];
	$heading=$_POST['heading'];
	if($_POST['like']=="Like")
	{
	$like=1;
	}
	else{
	$like=0;
	}
}
    
    
	$query56="INSERT INTO `review` (`Vehicle Name` ,`User Name` ,`Heading`, `Comment` ,`Like`) VALUES ('".$un."','".$username."','".$heading."', '".$comment."','".$like."')";
	if(mysql_query($query56))
	{
	
	}
	else
	echo "Failed";
}
	
	$query55="SELECT * FROM `review` WHERE `User Name`='".$username."' AND `Vehicle Name`='".$un. "'";
	
	if($query55_run=mysql_query($query55)){
	while($row=mysql_fetch_assoc($query55_run)){
        $gun10=$row['Comment'];
		$gun11=$row['Heading'];
		$gun12=$row['User Name'];
		if($row['Like']==1)
		{
		$gun15="like.png";
		}
		else
		{
		$gun15="dislike.png";
		}
echo'
    <div class="kk"><strong><h2 class="XX">&nbsp;&nbsp;&nbsp;USER: '.$gun12.'</h2></strong>
	<strong><center><h2>'.$gun11.'</strong></center></h2>
	<h4>&nbsp;&nbsp;&nbsp;'.$gun10.'</h4>
    <center><img src="images/'.$gun15.'" width="40" height="40"></center>	
	</div><br><br><br>
	';
		}
		}
		
//$query1="SELECT * FROM 'Comments'";



?> 