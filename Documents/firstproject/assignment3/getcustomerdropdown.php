<?php
include 'connecttodb.php';
$query = "SELECT customerid, CONCAT(firstname, ' ', lastname) as fullname FROM customer;";
$result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query failed.");
     }
     while ($row=mysqli_fetch_assoc($result)) {
        echo "<option value=\"".$row['customerid']."\">";
        echo $row['fullname'];

echo "</option>";
     }

     mysqli_free_result($result);
?>
