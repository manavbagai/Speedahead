
<script>
function goBack() {
   window.history.back();
}
</script>

<?php
error_reporting(0);
require "dbconnectxx.php";
session_start();
$ab=$_GET['value1'];

$us=$_SESSION['username'];
function check_for_existence($query){  

	if($query_run = mysql_query($query)){
		$row=mysql_fetch_assoc($query_run);
		$query_num_rows = mysql_num_rows($query_run);
		return $query_num_rows;
	}else{
		return die('error');
	}
	}
	$query2="SELECT * FROM `wishlist` WHERE `Vehicle Name` ='".$ab."' AND `User Name`= '".$us."'";
$query1="SELECT * FROM `brands` WHERE `Car Name` ='".$ab."' ";
if(check_for_existence($query2) == 0){
	if($query1_run=mysql_query($query1)){
	$row=mysql_fetch_assoc($query1_run);
        $dun=$row['Car Name'];
		$dun2=$row['Brand'];
		$dun3=$row['Price'];
		$dun4=$row['Photo'];
		}
		
$query12="INSERT INTO `wishlist` (`User Name`, `Vehicle Name`, `Photo`, `Price`) VALUES ('".$us."', '".$ab."', '".$dun4."', '".$dun3."')";
	

	if(mysql_query($query12))
	{
		echo '<br><br>Account added Successfully!';
		echo'<script type="text/javascript">
               goBack();</script>';
	}
}
else{
echo'<script type="text/javascript">
               goBack();</script>';
			   }


?>
