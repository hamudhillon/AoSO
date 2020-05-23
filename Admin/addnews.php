<?php
extract($_POST);
$error=array();
$extension=array("jpeg","jpg","png","gif");
$images=array();
require('../conn.php');
// print_r($_FILES['file']['name']);
foreach($_FILES['file']['tmp_name'] as $key=>$tmp_name){
    $file_name=$_FILES["file"]["name"][$key];
    $file_tmp=$_FILES["file"]["tmp_name"][$key];
    // echo $file_name;
    $ext=pathinfo($file_name,PATHINFO_EXTENSION);

    if(in_array($ext,$extension)) {
        if(!file_exists("./imgs/".$file_name)) {
            move_uploaded_file($file_tmp=$_FILES["file"]["tmp_name"][$key],"./imgs/".$file_name);
        }
        else {
            $filename=basename($file_name,$ext);
            $newFileName=$filename.time().".".$ext;
            move_uploaded_file($file_tmp=$_FILES["file"]["tmp_name"][$key],"./imgs/".$newFileName);
        }

        $q ="INSERT INTO `in_news`(`src`) VALUES('".$file_name."')";
        if ($con->query($q) === TRUE) {
        echo "New record created successfully";
        } else {
            echo "Error: " . $q . "<br>" . $con->error;
            
        }

        
    
        // array_push($imgs,"$file_name, ");
        
        $upload=true;
    }
    else {
        $upload=false;
        array_push($error,"$file_name, ");
    }
    
}
?>