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
body{
    font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
	}
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
width:1020px;
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
$query2="SELECT * FROM `brands` WHERE `Brand`";




	echo'<span class="layout">';
	if($query2_run=mysql_query($query2)){
	while($row2=mysql_fetch_assoc($query2_run)){
        $gun=$row2['Car Name'];
		$gun2=$row2['Brand'];
		$gun3=$row2['Price'];
		$gun4=$row2['Photo'];
		
	echo'<a href="vehicle.php?value='.$gun.'">';	
	
		/*if($count%2==0)
		{*/
		echo'<div class="img">
<img src="images/'.$gun4.'" width="300" height="300"><br>';
echo "<center><strong><br> Car:   ".$gun."<br> Brand: ".$gun2."<br> Price:  Rs.".$gun3."</strong></div></center>";

}
echo'</a></span>';
}
?>
<nav><strong><h1>BRANDS</h1>
 <form action="" method="post">
<input type="checkbox" name="vehicle[]"  value="Maruti">Maruti<br>
<input type="checkbox" name="vehicle[]" value="Honda">Honda<br>
<input type="checkbox" name="vehicle[]" value="Audi">Audi<br>
<input type="checkbox" name="vehicle[]" value="BMW">BMW<br>
<input type="checkbox" name="vehicle[]" value="Hyundai">Hyundai<br>
<input type="checkbox" name="vehicle[]" value="Toyota">Toyota<br>
<input type="checkbox" name="vehicle[]" value="Chevrolet">Chevrolet<br>
<input type="checkbox" name="vehicle[]" value="Tata">Tata<br>

<input type="submit" name="submit" class="submit">
<br><br>
</strong></form>
</nav>







<?php
$temp=$_POST['vehicle'];
$temp2=array();
foreach($temp as $c)
{
	$temp2[]="'$c'";
}
$count=0;
$temp1=implode(",",$temp2);
if(isset($_POST['vehicle']))
{
$query1="SELECT * FROM `brands` WHERE `Brand` IN($temp1)";
}



	echo'<span class="layout">';
	if($query1_run=mysql_query($query1)){
	while($row=mysql_fetch_assoc($query1_run)){
        $un=$row['Car Name'];
		$un2=$row['Brand'];
		$un3=$row['Price'];
		$un4=$row['Photo'];
		
	echo'<a href="vehicle.php?value='.$un.'">';	
	
		/*if($count%2==0)
		{*/
		echo'<div class="img">
<img src="images/'.$un4.'" width="300" height="300"><br>';
echo "<center><strong><br> Car:   ".$un."<br> Brand: ".$un2."<br> Price:  Rs.".$un3."</strong></div></center>";

}
echo'</a></span>';
}
?>
