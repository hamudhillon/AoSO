<?php
if(isset($_POST['cat'])){
    require('../conn.php');
    $q="INSERT INTO `cats`(`name`) VALUES ('".$_POST['cat']."')";
    if ($con->query($q) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $q . "<br>" . $con->error;
        
    }

    $con->close();
    }
else{
    header('location:index.php');
}
?>