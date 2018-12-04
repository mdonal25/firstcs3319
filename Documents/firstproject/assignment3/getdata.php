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
<! Code to Run Query which displays the customer's firstname, the description of the product and the quantity that they've purchased based on if the quantity is greater than or equal to the quantity specified by the user-->
<?php
$product=$_POST["getproduct"];
$quantity=$_POST["quantity"];
$quantityint=intval($quantity);
$query="SELECT firstname,description,isboughtby.quantity FROM customer,product,isboughtby WHERE customer.customerid=isboughtby.customerid AND product.productid=isboughtby.productid AND product.productid='$product' AND isboughtby.quantity>=$quantityint";
$result=mysqli_query($connection,$query);
if (!$result) {
    die("database query7 failed.");
 }
echo"<ol>";
while ($row = mysqli_fetch_assoc($result)) {
     echo "<li>";
     echo "<strong>Customer</strong>". " ".$row["firstname"]."<br>";
     echo "<strong>Product id:</strong>"." ". $row["description"]."<br> ";
     echo "<strong>quantity:</strong>". " ". $row["quantity"]."<br>";
}
mysqli_free_result($result);
echo"</ol>";

?>
</body>
</html>
