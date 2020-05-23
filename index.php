<!DOCTYPE html>

<head>
    <title>Foundation</title>
</head>

<body>
    <div id="Categories" class="Categories-box">
    <ul class="Categories-card">
<?php 
require("conn.php");
$q="SELECT `name` FROM cats";
$result = $con->query($q);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<li><a href='cats.php?cat_name=". $row["name"]."'> ". $row["name"]."</a></li>";
    }
} else {
    echo "0 results";
}
?>
            
        </ul>
    </div>
</body>

</html>