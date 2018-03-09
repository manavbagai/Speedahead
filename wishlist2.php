<script>
function goBack() {
window.location="wishlist.php";
}
</script>

<?php
error_reporting(0);
require "dbconnectxx.php";
session_start();
$ab=$_GET['value3'];

echo $ab;
$us=$_SESSION[username];
$query1="DELETE FROM `wishlist` WHERE `User Name` ='".$us."' AND `Vehicle Name`='".$ab."'";
if(mysql_query($query1))
	{
		echo '<br><br>Account added Successfully!';
		echo'<script type="text/javascript">
               goBack();</script>';
	}
			   
	?>