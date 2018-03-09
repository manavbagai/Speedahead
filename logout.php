
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
<script>
function goBack() {
    window.location="index.php";
	}
</script>
<?php

unset($_SESSION["username"]);
echo '<script type="text/javascript">
               goBack();</script>';
			   ?>
