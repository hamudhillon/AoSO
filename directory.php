<?php 
include('./conn.php');


if(isset($_POST['da'])){

$img_q="SELECT `name` FROM `cats`  ORDER BY `name` DESC";
                    $result = $con->query($img_q);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                $name =$row["name"];
                                echo '<li class="list-group-item"><a href="./Directories?d='.$name.'">'.$name.'</a></li>';
                            }
                        } 
                        else {
                            echo 'No data';
                        }
}
else{
    header('location:./main.html');
}
?>