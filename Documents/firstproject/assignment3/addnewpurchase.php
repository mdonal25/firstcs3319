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
<! Code to Run Query which inserts a new purchase with fields customer, product, and quantity from user into the database. If product already purchased by customer code simply just updates the quantity-->
<?php
$cus=$_POST["getcustomer"];
$prod=$_POST["getproduct"];
$quantity=$_POST["quantity"];

$query="SELECT quantity from isboughtby WHERE customerid='$cus' AND productid='$prod'";
$result=mysqli_query($connection,$query);
if (mysqli_num_rows($result) == 0){
  $query="INSERT INTO isboughtby(productid, customerid, quantity) VALUES ('$prod', '$cus', '$quantity')";
  $result=mysqli_query($connection,$query);
   if (!$result) {
         die("database query4 failed.");
     }
}
else if (mysqli_num_rows($result) != 0){
  $quantityint=intval($quantity);
  $query="UPDATE isboughtby SET quantity=quantity+$quantityint WHERE customerid='$cus' AND productid='$prod'";
  $result=mysqli_query($connection,$query);
   if (!$result) {
         die("database query5 failed.");
     }
}
echo "Purchase added";
echo "<br>";
echo "Go back to Customer to view changes";
?>
</body>
</html>
