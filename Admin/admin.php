<?php 
session_start();
    require('../conn.php');

?>
<!DOCTYPE html>

<head>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <style>
        @import url("https://fonts.googleapis.com/css?family=Open+Sans:400,600,700");
        @import url("https://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css");
        *,
        *:before,
        *:after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        html,
        body {
            height: 100%;
        }
        
        body {
            font: 14px/1 'Open Sans', sans-serif;
            color: #555;
            background: #eee;
        }
        
        h1 {
            padding: 50px 0;
            font-weight: 400;
            text-align: center;
        }
        
        p {
            margin: 0 0 20px;
            line-height: 1.5;
        }
        
        main {
            min-width: 320px;
            max-width: 800px;
            padding: 50px;
            margin: 0 auto;
            background: #fff;
        }
        
        section {
            width: 100%;
            display: none;
            padding: 20px 0 0;
            border-top: 1px solid #ddd;
        }
        
        input {
            display: none;
        }
        
        section input {
            display: block;
        }
        
        label {
            display: inline-block;
            margin: 0 0 -1px;
            padding: 15px 25px;
            font-weight: 600;
            text-align: center;
            color: #bbb;
            border: 1px solid transparent;
        }
        
        label:before {
            font-family: fontawesome;
            font-weight: normal;
            margin-right: 10px;
        }
        
        label[for*='1']:before {
            content: '\f1cb';
        }
        
        label[for*='2']:before {
            content: '\f17d';
        }
        
        label[for*='3']:before {
            content: '\f16b';
        }
        
        label[for*='4']:before {
            content: '\f1a9';
        }
        
        label:hover {
            color: #888;
            cursor: pointer;
        }
        
        input:checked+label {
            color: #555;
            border: 1px solid #ddd;
            border-top: 2px solid orange;
            border-bottom: 1px solid #fff;
        }
        
        #tab1:checked~#content1,
        #tab2:checked~#content2,
        #tab3:checked~#content3,
        #tab4:checked~#content4,
        #tab5:checked~#content5,
        #tab6:checked~#content6 {
            display: block;
        }
        
        @media screen and (max-width: 650px) {
            label {
                font-size: 0;
            }
            label:before {
                margin: 0;
                font-size: 18px;
            }
        }
        
        @media screen and (max-width: 400px) {
            label {
                padding: 15px;
            }
        }
        
        .container {
            width: 100% !important;
        }
        
        .gallery {
            position: relative;
            width: 100%;
            -webkit-column-count: 3;
            -moz-column-count: 3;
            column-count: 3;
            -webkit-column-gap: 10px;
            -moz-column-gap: 10px;
            column-gap: 10px;
            margin-top: 10px;
            overflow: hidden;
        }
        
        .gallery img {
            width: 100%;
            height: auto;
            transition: 500ms;
            margin-bottom: 10px;
            opacity: 0.8;
            page-break-inside: avoid;
            /* For Firefox. */
            -webkit-column-break-inside: avoid;
            /* For Chrome & friends. */
            break-inside: avoid;
            /* For standard browsers like IE. :-) */
        }
        
        .gallery img:hover {
            opacity: 1;
        }
        /* .modal {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: center;
    } */
        
        .modal-img,
        .model-vid {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            display: table
        }
        
        .modal-body {
            padding: 0px;
        }
        
        .modal-dialog {
            height: 100%;
            position: relative;
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .modal-content {
            border: none;
        }
        
        @media screen and (max-width: 767px) {
            .gallery {
                -webkit-column-count: 2;
                -moz-column-count: 2;
                column-count: 2;
            }
            .gallery div {
                margin: 0;
                width: 200px;
            }
            .modal-dialog {
                margin: 0 8vw;
            }
        }
        
        @media screen and (max-width: 479px) {
            .gallery {
                -webkit-column-count: 1;
                -moz-column-count: 1;
                column-count: 1;
            }
            .gallery div {
                margin: 0;
                width: 200px;
            }
        }
    </style>
</head>

<body>

    <main>

        

        <input id="tab1" type="radio" name="tabs" checked>
        <label for="tab1">Gallery</label>

        <input id="tab2" type="radio" name="tabs">
        <label for="tab2">In News</label>

        <input id="tab3" type="radio" name="tabs" checked>
        <label for="tab3">Directories</label>

        <input id="tab4" type="radio" name="tabs">
        <label for="tab4">Directories Add Gallery</label>
        <input id="tab5" type="radio" name="tabs">
        <label for="tab5">Directories Add Video</label>

        <input id="tab6" type="radio" name="tabs">
        <label for="tab6">Directories Mission</label>
        <section id="content1">
            <form method='post' class='row input-group' action='addgallery.php' enctype="multipart/form-data">
            
            <input type="file" name="file[]" class='col-lg-8 input-lg' multiple accept="image/*">
               
                <input class="btn btn-success col-lg-4"  type="submit" value="Submit">
            </form>
        </section><section id="content2">
            <form method='post' action='addnews.php' class='row input-group' enctype="multipart/form-data">
                <input type="file" name="file[]" class='col-lg-8 input-lg' multiple accept="image/*">
               
                <input class="btn btn-success col-lg-4"  type="submit" value="Submit">
            </form>
        </section>
        <section id="content3">
            <form method='post' class='row' action='addcat.php'>
                <input type='text' name='cat' class='col-lg-6 input-lg' placeholder='Directory name'>
                <input type='submit' class='btn btn-success col-lg-4' style='margin-left:10px; height:40px;' value='Create'>
            </form>
        </section>

        <section id="content4">

            <form method="POST" action="upload.php" enctype="multipart/form-data">
                <select name="catname" class='custom-select mb-3' style='margin:0 0 20px 0;'>
                <?php 
                    $cats_q="SELECT `name` FROM `cats`";
                    $result = $con->query($cats_q);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                    echo "<option value='".$row["name"]."'>".$row["name"]."</option>";
                            }
                        } 
                        else {
                            echo 'No';
                        }
                ?>
                </select>
                <div class="row">
                  <input type="file" name="file[]" class='col-lg-8 input-lg' multiple accept="image/*">
               
                <input class="btn btn-success col-lg-4"  type="submit" value="Submit">
                </div>
            </form>

            <div class="container">
                <div class="gallery">
                    <?php 
                    $img_q="SELECT `imagelinks` FROM `cats` WHERE `name`='Cat1'";
                    $result = $con->query($img_q);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                $imgs =json_decode($row["imagelinks"]);

                                for($i=0;$i<count($imgs);$i++){
                                    $img=str_replace(',','',$imgs[$i]);
                                    echo '<img src="./imgs/'.$img.'" alt="" width="100%" height="auto" class="gallery-img" />';
                                }
                            }
                        } else {
                            echo 'No';
                        }
                    ?>
                </div>
            </div>

            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="content5">
            <form action="upload_video.php" method="POST">
                <select name="cat_name" id="" class='custom-select mb-3' style='margin:0 0 20px 0;'>
                    <?php 
                    $cats_q="SELECT `name` FROM `cats`";
                    $result = $con->query($cats_q);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                    echo "<option value='".$row["name"]."'>".$row["name"]."</option>";
                            }
                        } 
                        else {
                            echo 'No';
                        }
                ?>
                </select>
                <div class="row">
                  <input type="text" name="video_url" placeholder='Enter Link' class='col-lg-10 input-lg'>
               
                <input class="btn btn-success col-lg-4" style='margin:10px 0;'  type="submit" value="Submit link">
                </div>

            </form>

        </section>

        <section id="content6">
            <form action="./addmission.php" method="POST">
                <select name="cat_name" id=" " class='custom-select mb-3' style='margin:0 0 20px 0;'>
                   <?php 
                    $cats_q="SELECT `name` FROM `cats`";
                    $result = $con->query($cats_q);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                    echo "<option value='".$row["name"]."'>".$row["name"]."</option>";
                            }
                        } 
                        else {
                            echo 'No';
                        }
                ?>
                </select>
                <div class="row">
                  <textarea type="text" name="mission" placeholder='Enter Mission' col='100' row='10' class='col-lg-10 input-lg'></textarea>
                  <textarea type="text" name="about" placeholder='Enter About' col='100' row='10' class='col-lg-10 input-lg'></textarea>
               
                <input class="btn btn-success col-lg-4" style='margin:10px 0;'  type="submit" value="Submit">
                </div>
            </form>

        </section>

    </main>
</body>
<script>
    $(document).ready(function() {
        $(".gallery-img ").click(function() {
            var t = $(this).attr("src ");
            $(".modal-body ").html("<img src='" + t + "' class='modal-img'>");
            $("#myModal").modal();
        });
    });
</script>

</html>