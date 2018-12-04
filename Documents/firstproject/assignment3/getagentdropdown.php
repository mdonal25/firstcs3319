
<?php
include 'connecttodb.php';
$query = "SELECT agentid, CONCAT(firstname, ' ', lastname) as fullname FROM agent;";
$result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo "<option value=\"".$row['agentid']."\">";
        echo $row['fullname'];
    
echo "</option>";
     }
     mysqli_free_result($result);
?>


