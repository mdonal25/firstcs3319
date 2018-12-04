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
<! Code to Run Query which inserts a new customer with fields id, firstname, lastname, city, phonenumber from user into the database. If id already used  by another customer code shows error message-->
<?php
$newid=$_POST["id"];
$newfname=$_POST["firstname"];
$newlname=$_POST["lastname"];
$newcity=$_POST["city"];
$newphonenumber=$_POST["phonenumber"];
$newagent=$_POST["getagent"];

$query="SELECT customerid FROM customer WHERE customerid = '$newid'";
$result=mysqli_query($connection,$query);
 if (!$result) {
         die("database query2 failed.");
     }
    if (mysqli_num_rows($result) != 0) {
       die("customer already exists");
     }
     mysqli_free_result($result);

$query="INSERT INTO customer(customerid, firstname, lastname, city, phonenumber, agentid) VALUES ('$newid', '$newfname', '$newlname', '$newcity','$newphonenumber','$newagent')";
$result=mysqli_query($connection,$query);
if (!$result) {
	die("database query3 failed.");
}
echo "Customer added";
echo "<br>";
echo "Go back to Customer to view changes";
?>
</body>
</html>
