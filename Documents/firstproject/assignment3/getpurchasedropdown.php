<?php
include 'connecttodb.php';
$query = "SELECT productid, description  FROM product;";
$result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query failed.");
     }
     while ($row=mysqli_fetch_assoc($result)) {
        echo "<option value=\"".$row['productid']."\">";
        echo $row['description'];

echo "</option>";
     }

     mysqli_free_result($result);
?>
</ol>
