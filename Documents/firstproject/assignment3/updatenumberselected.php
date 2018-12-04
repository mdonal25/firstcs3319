
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
<!--Code to Run Query to View current phone number of selected customer-->
<?php
$customer=$_POST["getcustomer"];
$query="SELECT phonenumber FROM customer WHERE customerid=$customer";
$result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo "<strong>Phone Number:</strong>"." ". $row["phonenumber"];
     }
     mysqli_free_result($result);
echo "<form action='update.php' method='post'>
New Phone Number: <input type='text' name='phonenumber'><input type='hidden' name='customerid' value='$customer'><br>
<input type='submit' value='Change Number'>
</form>";
?>
<!--Code directly above allows user to enter new phonenumber for selected customer then sends this value to another form-->
</body>
</html>
