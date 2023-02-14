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
<h1>Welcome <font color="blue"><?php echo $user["username"]; ?></font></h1><br>
<p style="font-size:20px;">Email:<u><?php echo $user["email"]; ?></u></p>
 <p><a href="logout.php" class="btn btn-primary" style="font-weight:bolder;">Logout</a></p>
</div>
</center>
<br><br>

<center>
<table class="table-striped" width="30%">
 <tr>
 	<td style="font-size:20px;"><b>Firstname </b></td><td><?php echo $user["firstname"]; ?></td>
  </tr>
  <tr>
    <td style="font-size:20px;"><b>Laststname </b></td><td><?php echo $user["lastname"]; ?></td>
   </tr>
 <tr>
 <td style="font-size:20px;"><b>Email </b></td><td><?php echo $user["email"]; ?></td>
</tr>
<tr>
  <td style="font-size:20px;"><b>Mobile </b></td><td><?php echo $user["mobile"]; ?></td>
</tr>
<tr>
  <td style="font-size:20px;"><b>Username </b></td><td><?php echo $user["username"]; ?></td>
</tr>
<tr>
 <td style="font-size:20px;"><b>Password </b></td><td> <?php echo $user["password"]; ?></td>
</tr>
<tr>
 <td style="font-size:20px;"><b> Address </b></td><td> <?php echo $user["address"]; ?></td>
</tr>
<tr>
 <td style="font-size:20px;"><b>Created Time:</b></td><td> <?php echo $user["created_at"]; ?></td>
 </tr>
</table>
</center>
</div>


</body>
</html>