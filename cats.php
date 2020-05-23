<?php
require("conn.php");
$cat=$_GET['c'];
$q="SELECT * FROM cats WHERE name='".$cat."'";
$result = $con->query($q);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<li><a href='cats.php?c=". $row["name"]."'> ". $row["name"]."</a></li>";
        echo "<li><a href='cats.php?c=". $row["videolinks"]."'> ". $row["videolinks"]."</a></li>";
        echo "<li><a href='cats.php?c=". $row["imagelinks"]."'> ". $row["imagelinks"]."</a></li>";
        echo "<li><a href='cats.php?c=". $row["misson"]."'> ". $row["misson"]."</a></li>";
    }
} else {
    echo "0 results";
}

?>