<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" type="text/css" href="bootstrap.css">
  <link rel="stylesheet" type="text/css" href="w3.css">
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
<div class="w3-row w3-light-grey" style="height:750px;">
    <br><br>
    <div class="w3-quarter" style="height:700px;width:30%;">
      
    </div>
    <div class="w3-quarter" style="height:450px;width:40%;background-color:white;">
        <center>
         <form action="" method="POST" style="background-color:white;">
          <h5 align="center" class="w3-text-white w3-border w3-black" style="font-weight:bolder;margin:auto;margin-top:0px;">CONTACT US</h5>
          <table class="w3-table" style="max-width:100%;">
           <?php
           include 'function2.php';
           $connection = new Connection();
           $contact = $connection->contact();

          ?> 
              <tr>
                <td class="w3-text-black" style="font-weight:bolder;">Fullname
                <input class="w3-input w3-border"  type="text" name="fullname" required="required"  placeholder="Enter Your Full name here ... "></td>
              </tr>
              <tr>
                <td class="w3-text-black" style="font-weight:bolder;">Email
                <input type="email" name="email" required="required" class="w3-input w3-border" placeholder="Enter Your email here ... "></td>
              </tr>
              <tr>
                <td class="w3-text-black" style="font-weight:bolder;">Mobile
                <input type="text" name="mobile" required="required" class="w3-input w3-border" placeholder="Enter Your mobile here ... "></td>
              </tr>
              <tr>
                <td class="w3-text-black" style="font-weight:bolder;">Address
                <textarea name="address" cols="20" rows="5" required="required" class="w3-input w3-border" placeholder="Enter your address here....."></textarea></td>
              </tr>
              <tr>
                <td class="w3-text-black" style="font-weight:bolder;">Message
                <textarea name="message" cols="20" rows="5" required="required" class="w3-input w3-border" placeholder="Enter your Message here....."></textarea></td>
              </tr>
          </table>
           <center><input type="submit" name="send" value="Send" button="button" class="btn btn-default" style="background-color:black;color:white;font-weight:bolder;"></center>
       </form>
     </center>
    </div>
    <div class="w3-quarter" style="height:700px;width:30%;">
      
    </div>
</div>
<div class="w3-border-0" style="height:300px;width:100%;">
  
</div>
<div class="w3-border-0" style="height:10px;width:100%;background-color:black;"></div>
<footer  class="w3-border-0 w3-grey" style="height:300px;width:100%;">
   <br><br><br>
   <div id="footer"></div>
</footer>
<script>
  document.getElementById('greeting').innerHTML ='<br><center><b><font color="white">My Fashion Store</font></b></center>';
   document.getElementById('footer').innerHTML = '<br><br><br><br><br><center><b>Copyright &copy 2023 - 2024</b></center>';
</script>
</body>
</html>