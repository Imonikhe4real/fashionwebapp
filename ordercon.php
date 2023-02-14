<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="sidebar.css">
	<link rel="stylesheet" type="text/css" href="w3.css">
</head>
<body class="w3-light-grey">
<div class="sidenav">
  <a href="dashboard.php">Dashboard</a>
  <a href="profile.php">Profile</a>
  <a href="order.php">Order</a>
  <a href="logout.php">Logout</a>
</div>
<div class="main">


<?php 


include 'function3.php';
$connection = new Connection();
$order = $connection->order();



?>