<?php
$query = "SELECT description FROM product WHERE productid NOT IN (SELECT productid FROM isboughtby)" ;
$result = mysqli_query($connection,$query);
if (!$result) {
    die("databases query failed.");
}

echo"<ul>";
while ($row = mysqli_fetch_assoc($result)) {
     echo "<li>";
     echo "<strong>Product:</strong>". " ".$row["description"];
}
mysqli_free_result($result);
echo"</ul>";
