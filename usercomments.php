
<?php
  error_reporting(0);
require "dbconnectxx.php";


?>
<?php
function check_for_existence($query){  

	if($query_run = mysql_query($query)){
		$row=mysql_fetch_assoc($query_run);
		$query_num_rows = mysql_num_rows($query_run);
		return $query_num_rows;
	}else{
		return die('error');
	}
	}


if(isset($_POST['comments']) && !empty($_POST['comments']){
	$comment = $_POST['comments'];
	
	$query = "SELECT comments FROM `comment` WHERE `comments` ='".$comment"';

	if(check_for_existence($query) == 1){
	echo $comments;
	
	  
	}else{
		echo $user_name. " ".$pass_word. "<br>";
		echo 'Please enter valid username and password combination!';
	}
	}

?>