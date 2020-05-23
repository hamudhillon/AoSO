<?php 
include('./conn.php');
if(isset($_POST['da'])){
$q="SELECT `src` FROM `imagegallery`";
 $result = $con->query($q);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                $imgs =$row["src"];
                                echo '<div class="card">
                        <div class="card-image">
                            <a href="./Admin/imgs/'.$imgs.'" data-fancybox="gallery" data-caption="Caption Images 1">
                                <img src="./Admin/imgs/'.$imgs.'" alt="Image Gallery">
                            </a>
                        </div>
                    </div>';
                            }
                        } 
                        else {
                            echo 'No';
                        }
}
else{
    header('location:./main.html');
}
?>