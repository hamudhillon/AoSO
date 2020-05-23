<?php
require('../conn.php');
// print_r($_FILES['file']['name']);
$name=$_POST['d_name'];
$type=$_POST['t'];

if($type=='gallery'){
$img_q="SELECT `imagelinks` FROM `cats` WHERE `name`='$name'";
                    $result = $con->query($img_q);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                $imgs =json_decode($row["imagelinks"]);

                                foreach ($imgs as $k => $v){
                                    $v=str_replace(',','',$v);
                                    
                                    echo '<div class="card">
                        <div class="card-image">
                            <a href="../Admin/imgs/'.$v.'" data-fancybox="gallery" data-caption="Caption Images 1">
                                <img src="../Admin/imgs/'.$v.'" alt="Image Gallery">
                            </a>
                        </div>
                    </div>';
                                }
                                
                            }
                        } 
                        else {
                            echo 'No';
                        }

}

elseif($type=='video'){
$video_q="SELECT `videolinks` FROM `cats` WHERE `name`='$name'";
                    $result = $con->query($video_q);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                $video=$row['videolinks'];
                                echo '<div class="single-video">
    <figure>
      <iframe src="'.$video.'" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </figure>
  </div>';
                            }
                        } 
                        else {
                            echo 'No';
                        }

}


elseif($type=='mission'){
$mission_q="SELECT `misson` FROM `cats` WHERE `name`='Gur Sabad Nad'";
                    $result = $con->query($mission_q);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                $mission=$row['misson'];
                                echo $mission;
                                
                            }
                        } 
                        else {
                            echo 'No';
                        }
                    }
elseif($type=='about'){
$mission_q="SELECT `about` FROM `cats` WHERE `name`='Gur Sabad Nad'";
                    $result = $con->query($mission_q);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                $about=$row['about'];
                                echo $about;
                                
                            }
                        } 
                        else {
                            echo 'No';
                        }
                    }

?>