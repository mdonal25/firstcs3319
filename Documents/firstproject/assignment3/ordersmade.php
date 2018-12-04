
<!DOCTYPE html>
<html>
<head>
<title> Carroll Co </title>
<!--Reference to stylesheet-->
   <link href="carrollco.css" rel="stylesheet" type="text/css">

</head>
<body>
<!--Connecting to database-->
<?php
include 'connecttodb.php';
?>
<h1 class="title"> Carroll Co</h1>
<!--This generates the navagation bar with a link to every page-->
<div class="navbar">
<ul>
  <li class="navbar1"><a href="customer.php">Customers</a></li>
  <li class="navbar1"><a href="products.php">Products</a></li>
  <li class="navbar1"><a href="createpurchase.php">Create a new Purchase</a></li>
  <li class="navbar1"><a href="createcustomer.php">Create a Customer</a></li>
  <li class="navbar1"><a href="updatenumber.php"> Update Customer Number</a></li>
  <li class="navbar1"><a href="deletecustomer.php"> Delete Customer</a></li>
  <li class="navbar1"><a href="boughtmorethan.php"> Bought More Than #</a></li>
  <li class="navbar1"><a href="notpurchasedatall.php">Not Purchased at all</a></li>
  <li class="navbar1"><a href="ordersmade.php"> Orders Made</a></li>
</ul>
</div>
<h2> Orders Made </h2>
<!--This allows user to choose which product they'd like to see the orders for-->
<form action="viewsummary.php" method="post">
Select Product
<select name="getproduct" id="getproduct">
  <option >select here</option>
<!--This connects to the php file which sets the dropdown options to the products in the database-->
<?php   include "getpurchasedropdown.php"; ?>
</select>
<input type="submit" value="Show Information">
</form>
<!--Disconnects from the database-->
<?php
   mysqli_close($connection);
?>
</body>
</html>
