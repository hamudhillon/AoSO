
<?php
if(isset($_POST['mission'])){
    require('../conn.php');
    $cat=$_POST['cat_name'];
    $url=$_POST['mission'];
    $ab=$_POST['about'];
    $q="UPDATE `cats` SET `misson`='$url' ,`about`='$ab' WHERE `name`='$cat' ";
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