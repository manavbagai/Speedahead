
<script>
function goBack() {
    window.location="book3.php";
}
function goregister() {
   alert("Login/Register First");
}

</script>

<?php
error_reporting(0);
require "dbconnectxx.php";
session_start();
$ab=$_GET['value2'];
$se=$_GET['value5'];
$us=$_SESSION['username'];
if($us=="")
{
echo'<script type="text/javascript">
               goregister();</script>';
		}   
			   

$query0="SELECT * FROM `user` WHERE `Username` ='".$us."' ";
if($query0_run=mysql_query($query0)){
	$row=mysql_fetch_assoc($query0_run);
        $uun=$row['Username'];
		$uun2=$row['Email'];
		$uun3=$row['Phone Number'];
		}
$query1="SELECT * FROM `brands` WHERE `Car Name` ='".$ab."' ";
	if($query1_run=mysql_query($query1)){
	$row=mysql_fetch_assoc($query1_run);
        $dun=$row['Car Name'];
		$dun2=$row['Brand'];
		$dun3=$row['Price'];
		$dun4=$row['Photo'];
		}
		
$query12="INSERT INTO `booking` (`Seller`, `Vehicle Name`, `Photo`, `Price`,`User Name`, `Phone Number`,`Email`) VALUES ('".$se."', '".$dun."', '".$dun4."', '".$dun3."' , '".$uun."' , '".$uun3."' , '".$uun2."')";
	

	if(mysql_query($query12))
	{
		
		echo'<script type="text/javascript">
               goBack();</script>';
	}



?>