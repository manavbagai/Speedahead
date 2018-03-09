



<!DOCTYPE html>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
}

li {
    float: left;
}
.AAA{
width:400px;
position:absolute;
top:110px;
right:1px;

}
.qqw{
left:1000px;
position:absolute;
top:10px;
color:white;
background-color:orange;
   height:20px;
 display: block;
  padding: 4px;
 text-transform: uppercase;
}
a.a1:link, a.a1:visited, a.a2:link, a.a2:visited,a.a3:link, a.a3:visited,a.a4:link, a.a4:visited,a.a5:link, a.a5:visited,a.a6:link, a.a6:visited,a.a7:link, a.a7:visited,a.a8:link, a.a8:visited {
    display: block;
    width: 120px;
	height:20px;
    font-weight: bold;
    color: #FFFFFF;
    background-color: orange;
    text-align: center;
    padding: 4px;
    text-decoration: none;
    text-transform: uppercase;
}
a.a20:link, a.a20:visited {
display: block;
    width: 160px;
	height:20px;
    font-weight: bold;
    color: #FFFFFF;
    background-color: orange;
    text-align: center;
    padding: 4px;
    text-decoration: none;
    text-transform: uppercase;
	}
a.a1:hover, a.a1:active,a.a2:hover, a.a2:active,a.a3:hover, a.a3:active,a.a4:hover, a.a4:active,a.a5:hover, a.a5:active,a.a6:hover, a.a6:active,a.a7:hover, a.a7:active ,a.a8:hover, a.a8:active,a.a20:hover, a.a20:active{
    background-color: red;
}
a.a1{
position:absolute;
top:60px;
left:380px;
}
a.a2{
position:absolute;
top:60px;
left:490px;
}
a.a3{
position:absolute;
top:60px;
left:590px;
}
a.a4{
position:absolute;
top:60px;
left:690px;
}
a.a5{
position:absolute;
top:60px;
left:810px;
}
a.a6{
position:absolute;
top:60px;
left:930px;
}
a.a7{
position:absolute;
top:60px;
left:1040px;
}
a.a20{
position:absolute;
top:60px;
left:1160px;
}
#panel
{
position:absolute;
left:470px;
 width: 30px;
display: block;  
top:90px;
display:none;
}
#panel1
{
position:absolute;
left:580px;
top:90px;
display: block;
 width:100px;
display:none;

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








</style>
<LINK REL="SHORTCUT ICON" href="favicon (2).ico" >
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){
  $("#flip").mouseenter(function(){
    $("#panel").slideDown("fast");
	 $("#panel1").hide(0);
  });
});
$(document).ready(function(){
  $("#flip1").mouseenter(function(){
    $("#panel1").slideDown("fast");
	 $("#panel").hide(0);
  });
});
$(document).ready(function(){
  $("#panel").mouseleave(function(){
    $("#panel").hide("fast");
  });
});
$(document).ready(function(){
  $("#navi").mouseleave(function(){
    $("#panel").hide("fast");
	$("#panel1").hide("fast");
  });
});
$(document).ready(function(){
  $("#panel1").mouseleave(function(){
    $("#panel1").hide("fast");
  });
});
$(document).ready(function(){
  $("#xx").mouseenter(function(){
	 $("#panel").hide(0);
  });
});
$(document).ready(function(){
  $("#yy").mouseenter(function(){
	 $("#panel1").hide(0);
  });
});
</script>

</head>
<body>
 <div class="AAA">
<script>
  (function() {
    var cx = '016600122334591945597:omrbtxh5l8e';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//www.google.com/cse/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:search></gcse:search>
<br></div>




<img src="images/speedaheadfinal.png" width="350" height="100" align="left">
<div class="qqw">
 <?php
 session_start();

if(isset($_SESSION["username"]) && !empty($_SESSION["username"])){
echo"<strong>Welcome ";
echo $_SESSION["username"];
echo"</strong>";
}
?>
</div>



<ul class="hello" ><span id="navi">
  <li><div id="xx"><a href="index.php" class="a1">Home</a></li></div>
  <div id="flip"><li><a href="#same" class="a2">City</li></a></div>
    <ul><div id="panel"><li><a href="dealers.php?cname=3" class="a8">Mumbai</a></li>
  <li><a href="dealers.php?cname=2" class="a8">Aligarh</a></li>
  <li><a href="dealers.php?cname=4" class="a8">Kolkata</a></li>
  <li><a href="dealers.php?cname=1"class="a8">Delhi</a></li>
  
  </ul>
  </div>
   <div id="flip1"><li><a href="#same" class="a3">Brands</li></a></div>
  <ul><div id="panel1"><li><a href="brands.php?bname=1" class="a8">Maruti</a></li>
  <li><a href="brands.php?bname=5" class="a8">Hyundai</a></li>
  <li><a href="brands.php?bname=8" class="a8">Tata</a></li>
  <li><a href="brands.php?bname=6" class="a8">Toyota</a></li>
  <li><a href="brands.php?bname=2" class="a8">Honda</a></li>
  <li><a href="brands.php?bname=3" class="a8">Audi</a></li>
  <li><a href="brands.php?bname=4" class="a8">BMW</a></li>
  <li><a href="brands.php?bname=7" class="a8">Chevrolet</a></li>
 <li><a href="brands.php" class="a8">All Brands</a></li>
 
  </ul>
  </div>
  
 <li><div id="yy"><a href="wishlist.php" class="a4">Wishlist</a></li></div>
<li><a href="contactus.php" class="a5">Contact Us</a></li> 
 <li><a href="signup2.php" class="a6">Register</a></li>
 <li><a href="logout.php" class="a7">Log Out</a></li>
 <li><a href="book3.php" class="a20">Booked Vehicle</a></li>
 <li><?php
include "feedback2.php";
?></li>
 </ul></div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="AAA">
<script>
  (function() {
    var cx = '016600122334591945597:omrbtxh5l8e';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//www.google.com/cse/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:search></gcse:search>
<br></div>
<br>
<br>
<br>
</body>

</html>