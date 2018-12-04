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
  <li class="navbar1"><a href="ordersmade.php">Orders Made</a></li>
</ul>
</div>
<h3> How would you like to view products </h3>
<!--Allows user to chose how they wish to view products. default is acsending and when reverse is slected order is descending-->
<form action="getproducts.php" method="post">
<input type="radio" name="order" value="description">By Description<br>
<input type="radio" name="order" value="price">By Price<br>
<input type="checkbox" name="type" value=" DESC">Reverse<br>
<input type="submit" value="Get List of Products">
</form>
<!--Disconnects from the database-->
<?php
   mysqli_close($connection);
?>
</body>
</html>
