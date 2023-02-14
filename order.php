<?php

include 'function.php';
$select = new Select();
if (isset($_SESSION["id"])) {
	$user = $select->selectUserById($_SESSION["id"]);
}
else
{
     header("Location:dashboard.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="w3.css">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="sidebar.css">
</head>
<body>
<div class="sidenav">
  <a href="dashboard.php">Dashboard</a>
  <a href="profile.php">Profile</a>
  <a href="order.php">Order</a>
  <a href="logout.php">Logout</a>
</div>

<div class="main">
<br><br>
<center>	
<div class="w3-card" style="height:200px;width:40%;background-color:white;">
<h1>Username:<font color="blue"><?php echo $user["username"]; ?></font></h1><br>
<p style="font-size:20px;">Email:<u><?php echo $user["email"]; ?></u></p>
 <p><a href="logout.php" class="btn btn-yellow btn-primary" style="font-weight:bolder;">Logout</a></p>
</div>
</center>
<br><br>
<div class="w3-border-0">
        <center>
        	<div class="w3-border w3-light-grey" style="height:700px;width:400px;">
        <form action="ordercon.php" method="POST">
        	   <h1 align="center">Order Here</h1><br>
                <table>
                	 <tr>
                	 	<td>Customer name</td>
                	 	<td><input type="text" name="name" class="w3-input w3-border" required="required" placeholder="Enter Your Name"></td>
                	 </tr>
                	 <tr>
                	 	<td>Customer email</td>
                	 	<td><input type="email" name="email" class="w3-input w3-border" required="required" placeholder="Enter Your Email"></td>
                	 </tr>
                	  <tr>
                	 	<td>Customer mobile</td>
                	 	<td><input type="text" name="mobile" class="w3-input w3-border" required="required" placeholder="Enter Your Mobile Number"></td>
                	 </tr>
                	 <tr>
                	 	<td>Customer Address</td>
                	 	<td><textarea name="address" cols="20" rows="5" class="w3-input w3-border" required="required" placeholder="Enter Your Address"></textarea></td>
                	 </tr>
                	 <tr>
                	 	<td>Item</td>
                	 	<td>
                	 		<select name="item" required="required">
                	 			<option value=""></option>
                	 			<option value="--Select--">--Select--</option>
                	 			 <option value="Jeans">Jeans</option>
                	 			 <option value="T-shirt">T-shirt</option>
                	 			 <option value="Polo">Polo</option>
                	 			 <option value="Shoe">Shoe</option>
                	 			 <option value="Cap">Cap</option>
                	 			 <option value="Eyeglass">Eyeglass</option>
                	 			 <option value="Hat">Hat</option>
                	 			 <option value="Skirt">Skirt</option>
                	 			 <option value="Watch">Watch</option>
                	 			 <option value="Trouser">Trouser</option>
                	 			 <option value="Sneakers">Sneakers</option>
                	 			 <option value="womanshoe">Woman Shoe</option>
                	 		</select>
                	 	</td>
                	 </tr>
                	 <tr>
                	 	<td>Color</td>
                	 	<td>
                	 		<select name="color" required="required">
                	 		    <option value=""></option>
                	 			<option value="--Select--">--Select--</option>
                	 			 <option value="Blue">Blue</option>
                	 			 <option value="Black">Black</option>
                	 			 <option value="Green">Green</option>
                	 			 <option value="Red">Red</option>
                	 			 <option value="Grey">Grey</option>
                	 			 <option value="Gold">Gold</option>
                	 			 <option value="orange">Orange</option>
                	 			 <option value="brown">Brown</option>
                	 			 <option value="Grey">Grey</option>
                	 			 <option value="Yellow">Yellow</option>
                	 			 <option value="Purple">Purple</option>
                	 		</select>
                	 	</td>
                	 </tr>
                     <tr>
                	 	<td>Size</td>
                	 	<td>
                	 		<select name="size" required="required">
                	 			<option value=""></option>
                	 			<option value="--Select--">--Select--</option>
                	 			 <option value="Small">Small</option>
                	 			 <option value="Medium">Medium</option>
                	 			 <option value="Normal">Normal</option>
                	 			 <option value="Large">Large</option>
                	 			 <option value="Xtra-Large">Xtra-Large</option>
                	 		</select>
                	 	</td>
                	 </tr>
                	 <tr>
                	 	<td>Price</td>
                	 	<td>
                	 		<select name="price" required="required">
                	            <option value=""></option>
                	 			<option value="--Select--">--Select--</option>
                	 			 <option value="$1000">$1000</option>
                	 			 <option value="$2000">$2000</option>
                	 			 <option value="$3000">$3000</option>
                	 			 <option value="$4000">$4000</option>
                	 			 <option value="$5000">$5000</option>
                	 		</select>
                	 	</td>
                	 </tr>
                	 <tr>
                	 	<td>Description<br>
                	 		<td><textarea name="description" cols="20" rows="5" required="required" placeholder="Enter Description Here..."></textarea></td>
                	 	</td>
                	 </tr>
                	 <tr>
                	 	<td>Order Date</td>
                	 	<td><input type="date" name="order_date"></td>
                	 </tr>
                </table>
 <td><input type="submit" name="order" value="Order" button="button" class="btn btn-success" style="font-weight:bolder;"></td>
 </div>
        </form>	
    </center>
</div>










</div>
</body>
</html>

