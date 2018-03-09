  <?php

  error_reporting(0);
session_start();
require "dbconnectxx.php";
if(isset($_SESSION["username"]) && !empty($_SESSION["username"])){
include"nav2.php";
}
else{
include"nav1.php";
}
?>
 
 
 
 
 
 
 <!doctype html>
<head>
<title>Speedahead</title>
<LINK REL="SHORTCUT ICON" href="favicon (2).ico" >
<style>
body{
    font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
	}
#am {
    width: 250px;
    height: 200px;
    background-image:url("car99.gif");
	background-repeat:no-repeat;
    position: relative;
	 z-index: -1;
    /* Chrome, Safari, Opera */
    -webkit-animation-name: myfirst;
    -webkit-animation-duration: 5s;
    -webkit-animation-timing-function: linear;
    -webkit-animation-delay: 2s;
    -webkit-animation-iteration-count: infinite;
    /*-webkit-animation-direction: alternate;*/
    -webkit-animation-play-state: running; 
    /*standard syntax*/
    animation-name: myfirst;
    animation-duration: 3s;
    animation-timing-function: linear;
    animation-delay: 4s;
    animation-iteration-count: infinite;
   animation-direction:initial ;
    animation-play-state: running; 
}
@-webkit-keyframes myfirst {
    
	0%   { background-image:url("car99.gif"); left:0px; top:0px;}
    100%  { background-image:url("car99.gif"); left:1200px; top:0px;}
    
}
@keyframes myfirst {
    
	0%   { background-image:url("car99.gif"); left:0px; top:0px;}
    100%  { background-image:url("car99.gif"); left:1200px; top:0px;}
    
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

div.img2 {
    float:left;
	width:450px;
   /* text-align: center;*/
	 display: block;

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


div.desc {
  width: 120px;
  margin: 20px;
  color:blue;
  font-size:40px;
}
div.button{
  float:right;
   padding-bottom: 25px;
  padding-top: 25px;
}
.layout{
width:1000px;
margin:0 auto;
border-left:5px dashed #FF6600;
border-right:5px dashed #FF6600;
border-bottom:5px dashed #FF6600;
overflow:auto;
background-color:PapayaWhip;
}

button{

display: block;
    width: 120px;
    font-weight: bold;
    color: #FFFFFF;
    background-color: orange;
    text-align: center;
    padding: 4px;
    text-decoration: none;
    text-transform: uppercase;
	}
	.button55{

display: block;
    width: 120px;
    font-weight: bold;
    color: #FFFFFF;
    background-color: orange;
    text-align: center;
    padding: 4px;
    text-decoration: none;
    text-transform: uppercase;
	}
	u{
	color:white;
	}
	
center{
font:67.5% "Lucida Sans Unicode" , "Bitstream Vera Sans", "Trebuchet Unicode MS" , "Lucida Grande" , Verdana, Helvetica, sans-serif;
/*padding-top: 25px;
padding-bottom: 25px;*/
}

header.zx {
    background-color:orange;
    color:white;
    text-align:center;
width:1010px;
height:40px;	
}
header.xz {
    background-color:orange;
    color:white;
    text-align:center;
	padding-top:1.01px;
	padding-bottom:7px;
width:450px;
height:30px;
font-size:12px;	
}
body{
background-color:#fccc6f;
}
h1.zzq{
padding-top:1px;
	padding-bottom:10px;
	}
	img.pic {
  border: 10px solid #fff;  
  float: left;
  height:180px;
  width: 150px;
  margin: 20px;
  overflow: hidden;
   
  -webkit-box-shadow: 5px 5px 5px #111;
          box-shadow: 5px 5px 5px #111;  
}
</style>

</head>
<body>
<center>
<header class="zx">
<h1>WELCOME TO SPEEDAHEAD.COM</h1>
</header></center>
<div class="layout" id="kkr">

<div class="img2"><center><header class="xz">
<h1 class="zzq"><center><b>REGISTER</center></b></h1><br>
</header></center><br><center>
<form action="index.php" method="post">
		<b>
			Username
			<div class="name1"><input type="text" name="username" required='true'></div>
			<br><br>
			Password
			<div class="name2"><input type="password" name="password" required='true' cols="20"></div>
			<br><br>
			Email    
			<div class="name3"><input type="email" cols="20" name="email" required='true'></div>
			<br><br>
			Phone Number 
			<div class="name4"><input type="text" cols="20" required='true' name="Phone" pattern="^[0-9]{6}|[0-9]{8}|[0-9]{10}$"></div>
			<br><br></b>
			<div class="name5"><input type="submit" name="submit" value="Register" class="button55"></div></center>
			<br>
		</form>
		</center>
		</body>
		</html>
		<?php

if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	$pass=$_POST['password'];
	$email=$_POST['email'];
	$phone=$_POST['Phone'];
    
	$query1="INSERT INTO `user` (`Username`, `Password`, `Email`, `Phone Number`) VALUES ('".$username."', '".$pass."', '".$email."', '".$phone."')";
	if(mysql_query($query1))
	{
		echo '<br><br>Account added Successfully!';
	}
	else
		echo "Duplicate entry!";
}

?>
<br>
</div>










<div class="img1">
<header class="xz">
<h1 class="zzq"><center><b>OUR SPECIALS</center></b></h1><br>
</header></center><br><center>
<?php
include"change.php";
?></div>
</div>
<br><br>
<center>
<header class="zx">
<h1>City Dealers</h1>
</header></center>


<div class="layout">
<div class="img">
<a href="dealers.php?cname=1">
<img src="images/delhi1.jpg" width="200" height="200" class="pic">
<center>
<button type="button" ><u>Delhi</u></button>
</a>
</center>
</div>
<div class="img">
<a href="dealers.php?cname=2">
<img src="images/aligarh1.jpg" width="200" height="200" class="pic">
<center>
<button type="button" ><u>Aligarh</u></button>
</a>
</center>
</div>
<div class="img">
<a href="dealers.php?cname=3">
<img src="images/mumbai1.jpg"  width="200" height="200" class="pic">
<center>
<button type="button" ><u>Mumbai</u></button>
</a>
</center>

</div>
<div class="img">
<a href="dealers.php?cname=4">
<img src="images/kolkata1.jpg"  width="200" height="200" class="pic">
<center>
<button type="button" ><u>Kolkata</u></button>
</a>
</center>
</div>
</div>
<br><br>
<center>
<header class="zx">
<h1><strong>Our Brands</strong></h1>
</header></center>
<div class="layout">
<div class="img">
<a href="brands.php?bname=1">
<img src="images/maruti.jpg" width="200" height="200" class="pic">
<center>
<button type="button" ><u>Maruti Suzuki</u></button>
</center>
</a>
</div>
<div class="img">
<a href="brands.php?bname=2">
<img src="images/honda.jpg" width="200" height="200" class="pic">

<center>
<button type="button" ><u>Honda</u></button>
</center>
</a>
</div>
<div class="img">
<a href="brands.php?bname=8">
<img src="images/tata.jpg" width="200" height="200" class="pic">
<center>
<button type="button" ><u>Tata</u></button>
</center>
</a>
</div>
<div class="img">
<a href="brands.php?bname=6">
<img src="images/toyota.jpg" width="200" height="200" class="pic">
<center>
<button type="button" ><u>Toyota</u></button>
</center></div></a>
<div class="img">
<a href="brands.php?bname=5">
<img src="images/hyundai.jpg" width="200" height="200" class="pic">
<center>
<button type="button" ><u>Hyundai</u></button>
</center></div></a>
<div class="img">
<a href="brands.php?bname=7">
<img src="images/chev.jpg" width="200" height="200" class="pic">
<center>
<button type="button" ><u>Chevrolet</u></button>
</center></div></a>
<div class="img">
<a href="brands.php?bname=3">
<img src="images/audi.jpg" width="200" height="200" class="pic">
<center>
<button type="button" ><u>Audi</u></button>
</center></div></a>
<div class="img">
<a href="brands.php?bname=4">
<img src="images/bmw.jpg" width="200" height="200" class="pic">
<center>
<button type="button" ><u>BMW</u></button>
</center></div></a>
</div>


</body>
</html>