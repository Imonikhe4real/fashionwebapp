<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" type="text/css" href="bootstrap.css">
  <link rel="stylesheet" type="text/css" href="w3.css">
  <style>
.mySlides {display:none;}
</style>
</head>
<body>
	<div class="w3-top">
<div class="w3-border-0 w3-grey" style="height:100px;width:auto;"> 
  <div id="greeting" style="font-size:20px;">
		
	</div>
</div>
<div class="w3-bar w3-black">
  <a href="index.php" class="w3-bar-item w3-button w3-hide-small" style="font-weight:bolder;text-decoration:none;">Home</a>
  <a href="registration.php" class="w3-bar-item w3-button w3-hide-small" style="font-weight:bolder;text-decoration:none;">Register</a>
  <a href="login.php" class="w3-bar-item w3-button w3-hide-small" style="font-weight:bolder;text-decoration:none;">Login</a>
  <a href="contact.php" class="w3-bar-item w3-button w3-hide-small" style="font-weight:bolder;text-decoration:none;">Contact</a>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="myFunction()">&#9776;</a>
</div>
<div id="demo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium">
  <a href="index.php" class="w3-bar-item w3-button" style="font-weight:bolder;text-decoration:none;">Home</a>
  <a href="registration.php" class="w3-bar-item w3-button" style="font-weight:bolder;text-decoration:none;">Register</a>
  <a href="login.php" class="w3-bar-item w3-button" style="font-weight:bolder;text-decoration:none;">login</a>
<a href="contact.php" class="w3-bar-item w3-button" style="font-weight:bolder;text-decoration:none;">Contact</a>
</div>
<script>
   function myFunction() {
  var x = document.getElementById("demo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>
</div>
<div class="w3-border-0" style="height:200px;width:100%;">

</div>
<div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides" src="redshirt.jpg" style="width:100%">
  <img class="mySlides" src="shirt.jpg" style="width:100%">
  <img class="mySlides" src="skirt.jpg" style="width:100%">
  <img class="mySlides" src="bluecap.jpg" style="width:100%">
  <img class="mySlides" src="bluejeans.jpg" style="width:100%">
  <img class="mySlides" src="blacktrouser.jpg" style="width:100%">
  <img class="mySlides" src="blacksneakers.jpg" style="width:100%">
  <img class="mySlides" src="blackshoes.jpg" style="width:100%">
  <img class="mySlides" src="womanshoe.jpg" style="width:100%">
  <img class="mySlides" src="goldwatch.jpg" style="width:100%">
  <img class="mySlides" src="eyeglass.png" style="width:100%">
  <img class="mySlides" src="hat.jpg" style="width:100%">
</div>
<div class="w3-light-grey" style="height:100px;width:100%">
  
</div>
<div class="w3-row w3-light-grey">
    <center>
    <div class="w3-third">
       <div class="w3-border-0">
          <img src="redshirt.jpg" class="w3-hover-opacity" alt="redshirt" style="height:100px;width:300px;">
       </div>
       <div class="w3-border" style="height:100px;width:300px;background-color:black;">
          <div id="polos" style="color:white;"></div>
       </div>
    </div>
    <div class="w3-third">
       <div class="w3-border-0">
          <img src="goldwatch.jpg" class="w3-hover-opacity" alt="redshirt" style="height:100px;width:300px;">
       </div>
       <div class="w3-border" style="height:100px;width:300px;background-color:black;">
         <div id="goldwatch" style="color:white;"></div>
       </div>
    </div>
    <div class="w3-third">
      <div class="w3-border-0">
          <img src="shirt.jpg" class="w3-hover-opacity" alt="shirt" style="height:100px;width:300px;">
       </div>
       <div class="w3-border" style="height:100px;width:300px;background-color:black;">
          <div id="shirt" style="color:white;"></div>
       </div>
      </div>
      </center>
</div>

<div class="w3-border-0 w3-light-grey" style="height:20px;width:100%;"></div>
<div class="w3-row w3-light-grey">
    <center>
    <div class="w3-third">
       <div class="w3-border-0">
          <img src="blackshoes.jpg" class="w3-hover-opacity" alt="blackshoes" style="height:100px;width:300px;">
       </div>
       <div class="w3-border" style="height:100px;width:300px;background-color:black;">
          <div id="blshoes" style="color:white;"></div>
       </div>
       <br>
    </div>
    <div class="w3-third">
       <div class="w3-border-0">
          <img src="blacksneakers.jpg" class="w3-hover-opacity" alt="blacksneakers" style="height:100px;width:300px;">
       </div>
       <div class="w3-border" style="height:100px;width:300px;background-color:black;">
          <div id="blsneakers" style="color:white;"></div>
       </div>
       <br>
    </div>
    <div class="w3-third">
      <div class="w3-border-0">
          <img src="bluejeans.jpg" class="w3-hover-opacity" alt="redshirt" style="height:100px;width:300px;">
       </div>
       <div class="w3-border" style="height:100px;width:300px;background-color:black;">
          <div id="jeans" style="color:white;"></div>
       </div>
       <br>
      </div>
      </center>
</div>
<div class="w3-border-0 w3-light-grey" style="height:20px;width:100%;"></div>
<div class="w3-row w3-light-grey">
    <center>
    <div class="w3-third">
       <div class="w3-border-0">
          <img src="hat.jpg" class="w3-hover-opacity" alt="hat" style="height:100px;width:300px;">
       </div>
       <div class="w3-border" style="height:100px;width:300px;background-color:black;">
          <div id="hat" style="color:white;"></div>
       </div>
       <br>
    </div>
    <div class="w3-third">
       <div class="w3-border-0">
          <img src="womanshoe.jpg" class="w3-hover-opacity" alt="woamnshoe" style="height:100px;width:300px;">
       </div>
       <div class="w3-border" style="height:100px;width:300px;background-color:black;">
          <div id="womanshoe" style="color:white;"></div>
       </div>
       <br>
    </div>
    <div class="w3-third">
      <div class="w3-border-0">
          <img src="eyeglass.png" class="w3-hover-opacity" alt="eyeglass" style="height:100px;width:300px;">
       </div>
       <div class="w3-border" style="height:100px;width:300px;background-color:black;">
          <div id="eyeglass" style="color:white;"></div>
       </div>
       <br>
      </div>
      </center>
</div>
<div class="w3-border-0 w3-light-grey" style="height:20px;width:100%;"></div>
<div class="w3-row w3-light-grey">
    <center>
    <div class="w3-third">
       <div class="w3-border-0">
          <img src="bluecap.jpg" class="w3-hover-opacity" alt="bluecap" style="height:100px;width:300px;">
       </div>
       <div class="w3-border" style="height:100px;width:300px;background-color:black;">
          <<div id="bluecap" style="color:white"></div>
       </div>
       <br>
    </div>
    <div class="w3-third">
       <div class="w3-border-0">
          <img src="skirt.jpg" class="w3-hover-opacity" alt="skirt" style="height:100px;width:300px;">
       </div>
       <div class="w3-border" style="height:100px;width:300px;background-color:black;">
         <div id="skirt" style="color:white;"></div>
       </div>
       <br>
    </div>
    <div class="w3-third">
      <div class="w3-border-0">
          <img src="blacktrouser.jpg" class="w3-hover-opacity" alt="blacktrouser" style="height:100px;width:300px;">
       </div>
       <div class="w3-border" style="height:100px;width:300px;background-color:black;">
         <div id="bltrouser" style="color:white;"></div>
       </div>
       <br>
      </div>
      </center>
</div>
<div class="w3-border-0 w3-light-grey" style="height:20px;width:100%;"></div>
<div class="w3-border-0" style="height:200px;width:100%;">
  
</div>
<div class="w3-border-0" style="height:10px;width:100%;background-color:black;"></div>
<footer class="w3-border-0 w3-grey" style="height:300px;width:100%;">
   <br><br><br>
   <div id="footer"></div>
</footer>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
<script>
  document.getElementById('greeting').innerHTML ='<br><center><b><font color="white">My Fashion Store</font></b></center>';
  document.getElementById('blshoes').innerHTML = 'Shoes are available in different color,sizes  and in different prices from $1000 - $5000.';
  document.getElementById('blsneakers').innerHTML = 'Sneakers are available in different ,colors,sizes and in different prices from $1000 - $5000.';
  document.getElementById('bltrouser').innerHTML = 'Trousers are available in different sizes from small to xtra large,colors and in different prices from $1000 - $5000.';
  document.getElementById('polos').innerHTML = 'Polos are available in different sizes from small to xtra large and in different prices from $1000 - $5000.';
  document.getElementById('goldwatch').innerHTML = 'Watches are available in different colors and in different prices from $1000 - $5000.';
  document.getElementById('shirt').innerHTML = 'Shirts are available in different sizes from small to xtra large and in different prices from $1000 - $5000.';
   document.getElementById('jeans').innerHTML = 'Jeans are available in different sizes from small to xtra large,colors and in different prices from $1000 - $5000.';
   document.getElementById('skirt').innerHTML = 'Skirt are available in different sizes from small to xtra large,colors and  prices from $1000 - $5000.';
   document.getElementById('hat').innerHTML = 'Hat are available in different sizes,colors and prices from $1000 - $5000.';
   document.getElementById('eyeglass').innerHTML = 'Eye Glasses are available in different sizes, colors and  prices from $1000 - $5000.';
   document.getElementById('bluecap').innerHTML = 'Caps are available in different sizes,colors and prices from $1000 - $5000.';
   document.getElementById('womanshoe').innerHTML = 'Women Shoes are available in different sizes,colors and prices from $1000 - $5000.';
   document.getElementById('footer').innerHTML = '<br><br><br><br><br><center><b>Copyright &copy 2023 - 2024</b></center>';
</script>


</body>
</html>