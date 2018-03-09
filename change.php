<style>
.button1{

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
	a{
	color:white;
	}
		img.pic1 {
  border: 10px solid #fff;  
  float: left;
  height:250px;
  width: 350px;
  margin: 20px;
  overflow: hidden;
   
  -webkit-box-shadow: 5px 5px 5px #111;
          box-shadow: 5px 5px 5px #111;  
}
	</style>
 
  <script>
        var links = ["vehicle.php?value=HONDA CITY","vehicle.php?value=AUDI A3","brands.php?bname=8","#same"];
        var images = ["images/city.jpg","images/a3.jpg","images/tata.jpg","marutialigarh.jpg"];
		var names2 = ["Honda City", "Audi A3" , "TATA Cars","Dev Motors"];
		
        var i = 0;
        var renew = setInterval(function(){
            if(links.length == i){
                i = 0;
            }
            else {
            document.getElementById("bannerImage").src = images[i]; 
            document.getElementById("bannerLink").href = links[i]; 
			document.getElementById("bannerbutton").value = names2[i]; 
            i++;

        }
        },4000);
        </script>';
	



<a id="bannerLink" href="vehicle.php?value=HONDA CITY" onclick="void window.open(this.href); return false;">

<img id="bannerImage" src="images/city.jpg" width="400" height="300" alt="some text" class="pic1">
<center><input type="submit" id="bannerbutton" value="Honda City" class="button1"></center>
</a>