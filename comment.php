<?php
error_reporting (0);
session_start();

if(!$_SESSION['username']){
    header ('location: login.php');
}
else{
error_reporting(0);
require('connect.php');
echo "<a href=\"logout.php\">Logout</a><br /><br /><br />";
$name = $_SESSION['username'];
$today = date("c");
//$today = date("c", strtotime()); 
$comment = $_POST['comment'];
$submit=isset($_POST['submit']);
if($submit)
{
    if($name&&$comment)
    {
    $query = mysql_query("INSERT INTO comment (name,comment,time) VALUES ('$name','$comment','$today')");
    header("Location: success.php");
    }
    else
    {
        echo "Please fill out all the fields.";
    }}}
?>
<html>
<head>
<title>Comment Box | HelperTuts</title>
<script src="jquery-1.7.2.min.js" type="text/javascript"></script>
<script src="jquery.timeago.js" type="text/javascript"></script>
<script>
jQuery(document).ready(function() {
  jQuery("abbr.timeago").timeago();
});
</script>
</head>
<style>
body {
	background-color: #DFDFDF;
}
</style>
<body>
<link type="text/javascript" href="localtime.js" />
<form action="#" method="POST">
  <label>Name: </label>
  <br />
  <input type="text" disabled="disabled" name="name" value="<?php echo "$name" ?>" />
  <br />
  <br />
  <label>Comment: </label>
  <br />
  <textarea name="comment" cols="25" rows="7"></textarea>
  <br />
  <br />
  <input type="submit" name="submit" value="Comment" />
  <br />
</form>
<hr width="1100px" size="5px" />
</body>
<?php
require('connect.php');
$query=mysql_query("SELECT * FROM comment ORDER BY id DESC");
while($rows=mysql_fetch_assoc($query))
{
     $id=$rows['id'];
     $dname=$rows['name'];
     $dcomment=$rows['comment'];
	 $dtime=$rows['time'];
	 $atime="<abbr class='timeago' title='$dtime'></abbr>";
	 
     echo '<font color="red">Name:</font>  ' . $dname . '&nbsp; &nbsp;&nbsp;&nbsp;'. $atime  . '<br />' . '<br />' . '<font color="red">Comments:</font>  ' . '<br />' . $dcomment . '&nbsp' . '&nbsp' .
      '&nbsp' . '&nbsp';
	  
	  if($_SESSION['username']=="admin"){
		echo "<a href=\"delete.php?id=" . $rows['id'] . "\">Delete User</a>"; 
	 }
	 else
	 {
		echo "";
	}
	  
	  
	echo '<br />' . '<br />' . 
     '<hr size="5px" width="500px" color="blue" />' . '<br />' . '<br />' ;    
}
?>
</html>
