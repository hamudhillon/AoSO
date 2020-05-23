<?php
extract($_POST);
$cat=$_POST['catname'];
$error=array();
$extension=array("jpeg","jpg","png","gif");
$imges=array();
array_push($imges,'s');
require('../conn.php');
// print_r($_FILES['file']['name']);
$img_q="SELECT `imagelinks` FROM `cats` WHERE `name`='$cat'";
                    $result = $con->query($img_q);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                if($row["imagelinks"]==null){
                                    echo 'null';
                                   $imges=array();
                                }
                                else{
                                    echo 'not null';
                                    
                                     $imges=json_decode($row["imagelinks"]);
                                     print_r($imges);
                                }
                                
                                
                                
                            }
                        } 
                        else {
                            echo 'No';
                            $imges=array();
                            
                        }
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
        echo $file_name;
        array_push($imges,$file_name);
        
        $upload=true;
    }
    else {
        $upload=false;
        array_push($error,$file_name);
    }
    
}
if($upload=true){
    $im=json_encode($imges);

$q="UPDATE `cats` SET `imagelinks`='$im' WHERE `name`='$cat'";
        if ($con->query($q) === TRUE) {
        echo "New record created successfully";
        } else {
            echo "Error: " . $q . "<br>" . $con->error;
            
        }

        $con->close();
}

?>