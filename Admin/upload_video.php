<?php
if(isset($_POST['video_url'])){
    require('../conn.php');
    $cat=$_POST['cat_name'];
    $url=$_POST['video_url'];
    $q="UPDATE `cats` SET `videolinks`='$url' WHERE `name`='$cat' ";
    if ($con->query($q) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $q . "<br>" . $con->error;
        
    }
    $con->close();
    }
else{
    echo 'Hello';
    // header('location:index.php');
}
?>
