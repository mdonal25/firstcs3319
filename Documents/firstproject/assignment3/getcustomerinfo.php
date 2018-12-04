<?php
$query = "SELECT * FROM customer ORDER BY lastname";
$result = mysqli_query($connection,$query);
if (!$result) {
    die("databases query failed.");
}


echo"<form action='getcustomerpurchases.php' method='post'>";
echo"<ol>";
while ($row = mysqli_fetch_assoc($result)) {
     echo "<li>";
     echo "<input type='radio' name='customerid' value='".$row["customerid"]."'><strong>Id:</strong>". " ".$row["customerid"]."<br>";
     echo "<strong>Firstname:</strong>". " ".$row["firstname"]."<br>";
     echo "<strong>Lastname:</strong>"." ". $row["lastname"]."<br> ";
     echo "<strong>City:</strong>". " ". $row["city"]."<br>";
     echo "<strong>Phone Number</strong>". " ". $row["phonenumber"]."<br>";
     echo "<strong>Agent id</strong>"." ".$row["agentid"]."</li>";
}
mysqli_free_result($result);
echo"</ol>
<input type='submit'>
</form>";
?>
