<?php 
$name=$_GET['d'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="../css/main.css">

    <!-- Gallery CSS Link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
    <!-- end of gallery css -->
    <!-- video gallery css -->
    <link rel="stylesheet" href="https://dimsemenov.com/plugins/royal-slider/royalslider/royalslider.css">
    <link rel="stylesheet" href="https://dimsemenov.com/plugins/royal-slider/royalslider/skins/default/rs-default.css?v=1.0.4">
    <link rel="stylesheet" href="https://dimsemenov.com/plugins/royal-slider/preview-assets/css/reset.css?v=1.0.4">
    <title>Alliance Of Sikh Organization</title>

    <style>
        .animation {
            animation-name: load;
            animation-duration: .5s;
            animation-iteration-count: infinite;
            height: 50px;
        }
        
        @keyframes load {
            from {
                background-color: rgb(206, 206, 206);
            }
            to {
                background-color: rgb(255, 255, 255);
            }
        }
    </style>
</head>

<body>
    <div id="main">


        <div class="header container-fluid">


            <div class="nav navbar flex-control-nav" id="nav">
                <div class="m-nav col-md-12 col-sm-12">
                    <ul class="list-group" style="list-style: none; display:flex;justify-content:space-evenly">
                        <li class="list-group-item"><a href="../main.html">Home</a></li>
                        <li class="list-group-item"><a href="#about">About</a></li>
                        <li class="list-group-item"><a href="#mission">Mission</a></li>
                        <li class="list-group-item"><a href="#gallery">Gallery</a></li>
                        <li class="list-group-item"><a href="#footer">Contact</a></li>
                    </ul>
                </div>
                <div class="nav-button navbar-toggler"><i class="fa fa-hamburger"></i></div>
                <a class="logo text-decoration-none d-sm-flex col-lg-7 col-sm-12 col-md-10">
                    <div class="logo_img">
                        <img src="https://scontent.fixc4-1.fna.fbcdn.net/v/t1.0-9/48392340_2212869815703739_5446714749821648896_n.jpg?_nc_cat=103&_nc_sid=85a577&_nc_ohc=CGNeda-_keQAX80wJW8&_nc_ht=scontent.fixc4-1.fna&oh=970b293701c74ccd8adbcd06a559fe03&oe=5EEDD5AD" alt="">
                    </div>
                    <h1>Alliance of Sikh Organization</h1>

                </a>
                <ul class="flex-row list col-lg-4 col-sm-12" style="list-style: none; display:flex;justify-content:space-evenly">
                    <li><a class="btn btn-block" href="../main.html">Home</a></li>
                    <li><a class="btn btn-block" href="#about">About</a></li>
                    <li><a class="btn btn-block" href="#mission">Mission</a></li>
                    <li><a class="btn btn-block" href="#gallery">Gallery</a></li>
                    <li><a class="btn btn-block" href="#footer">Contact</a></li>
                </ul>
            </div>

            <div class="more-space row">
                <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center intro">
                        <h1 id='name'><?php echo $name; ?></h1>
                        <h4 id='mission'>Mission</h4>
                        <!-- <h4 class="red">Lorem Ipsum is simply dummy text of the printing and typesetting industry. -->
                        </h4>
                    </div>
                </div>
            </div>
        </div>
            </div>
            

        </div>


    </div>

    <div class="content">
        <div class="about col-lg-12 justify-content-center" id="about">
            <h2 class="text-lg-center">About</h2>
            <p class="about-us-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem minima, sunt, quis et enim, nulla doloribus accusamus ex officiis dolor vitae. Nostrum rem et numquam velit temporibus incidunt consequuntur quod. Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Autem minima, sunt, quis et enim, nulla doloribus accusamus ex officiis dolor vitae. Nostrum rem et numquam velit temporibus incidunt consequuntur quod.
            </p>
        </div>

        <!-- <div class="mission col-lg-12 justify-content-center" id="mission">
            <h2 class="text-lg-center">mission</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem minima, sunt, quis et enim, nulla doloribus accusamus ex officiis dolor vitae. Nostrum rem et numquam velit temporibus incidunt consequuntur quod.
            </p>
        </div> -->

        <div class="in-news col-lg-12 justify-content-center" id="gallery">
            <h2 class="text-lg-center">Gallery</h2>
            <main class="main">
                <div class="container" id="gallerydata">

                </div>
            </main>
        </div>



        <!-- Video Gallery -->

        <div class="cont">

                    <div class="text-center col-xs-12 col-sm-12 col-md-12">
                        <h1>Videos</h1>
                    </div>

                    <div class="gallery" id='video_gal'>

</div>


                </div>



        <!-- END of video gallery -->


    </div>
    </div>

    <footer class="footer-section" id="footer">
        <div class="container">
            <div class="footer-cta pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="cta-text">
                                <h4>Find us</h4>
                                <span>1010 Avenue, sw 54321, chandigarh</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-phone"></i>
                            <div class="cta-text">
                                <h4>Call us</h4>
                                <span>9876543210 0</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="far fa-envelope-open"></i>
                            <div class="cta-text">
                                <h4>Mail us</h4>
                                <span>mail@info.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-50">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="index.html"><img src="https://scontent.fixc4-1.fna.fbcdn.net/v/t1.0-9/48392340_2212869815703739_5446714749821648896_n.jpg?_nc_cat=103&_nc_sid=85a577&_nc_ohc=CGNeda-_keQAX80wJW8&_nc_ht=scontent.fixc4-1.fna&oh=970b293701c74ccd8adbcd06a559fe03&oe=5EEDD5AD"
                                        class="img-fluid" alt="logo"></a>
                            </div>
                            <div class="footer-text">
                                <p>Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do eiusmod tempor incididuntut consec tetur adipisicing elit,Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="footer-social-icon">
                                <span>Follow us</span>
                                <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                                <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Useful Links</h3>
                            </div>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">about</a></li>
                                <li><a href="#">Previous Projects</a></li>
                                <li><a href="#">Up Comming Projects</a></li>
                                <li><a href="#">Mission</a></li>
                                <li><a href="#">In News</a></li>
                                <li><a href="#">Gallery</a></li>
                                <li><a href="#">Videos</a></li>
                                <li><a href="#">Contact us</a></li>
                                <li><a href="#">Latest News</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Subscribe</h3>
                            </div>
                            <div class="footer-text mb-25">
                                <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                            </div>
                            <div class="subscribe-form">
                                <form action="#">
                                    <input type="text" placeholder="Email Address">
                                    <button><i class="fab fa-telegram-plane"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2020, All Right Reserved <a href="">Alliance of Sikh Organization</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Policy</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- Gallery Script links -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <!-- End -->
    <!-- Video gallery scripts-->
    <script src="https://dimsemenov.com/plugins/royal-slider/royalslider/jquery.royalslider.min.js?v=9.3.6"></script>
    <!-- end of video -->
    <script>
        $(document).ready(function() {

            var name=$('#name').text();

            
            setInterval(function() {
                           $.ajax({
                    url: './directoriesdata.php',
                    method: 'POST',
                    data: {
                        d_name: name,
                        t:'gallery'
                    },
                    success: function(data) {
                        console.log(data);
                        $('#gallerydata').html(data);
                    }
                });
            }, 300);

$.ajax({
                    url: './directoriesdata.php',
                    method: 'POST',
                    data: {
                        d_name: name,
                        t:'video'
                    },
                    success: function(data) {
                        console.log(data);
                        $('#video_gal').html(data);
                    }
                });
             $.ajax({
                    url: './directoriesdata.php',
                    method: 'POST',
                    data: {
                        d_name: name,
                        t:'mission'
                    },
                    success: function(data) {
                        console.log(data);
                        $('#mission').html(data);
                    }
                });
            
                  $.ajax({
                    url: './directoriesdata.php',
                    method: 'POST',
                    data: {
                        d_name: name,
                        t:'about'
                    },
                    success: function(data) {
                        console.log(data);
                        $('.about-us-p').html(data);
                    }});

            

            $('.m-nav').hide();
            $('.nav-button').on('click', function() {
                $('.m-nav').slideToggle(200);
            });

            /* ==========================================
            scrollTop() >= 300
            Should be equal the the height of the header
            ========================================== */

            $(window).scroll(function() {
                if ($(window).scrollTop() >= 100) {
                    $('.nav').addClass('fixed-header');
                    $('.nav div').addClass('visible-title');
                } else {
                    $('.nav').removeClass('fixed-header');
                    $('nav div').removeClass('visible-title');
                }
            });

            $('#carouselExampleControls').carousel();
            $('[data-fancybox="gallery"]').fancybox({
                buttons: [
                    "slideShow",
                    "thumbs",
                    "zoom",
                    "fullScreen",
                    "share",
                    "close"
                ],
                loop: false,
                protect: true
            });
            var slider = $(".royalSlider").royalSlider({
                arrowsNav: false,
                fadeinLoadedSlide: true,
                controlNavigationSpacing: 0,
                controlNavigation: 'thumbnails',
                thumbs: {
                    autoCenter: false,
                    fitInViewport: true,
                    orientation: 'vertical',
                    spacing: 0,
                    paddingBottom: 0
                },
                keyboardNavEnabled: true,
                imageScaleMode: 'fill',
                imageAlignCenter: true,
                slidesSpacing: 0,
                loop: false,
                loopRewind: true,
                numImagesToPreload: 3,
                video: {
                    autoHideArrows: true,
                    autoHideControlNav: false,
                    autoHideBlocks: true
                },
                autoScaleSlider: true,
                autoScaleSliderWidth: 960,
                autoScaleSliderHeight: 450,
                imgWidth: 640,
                imgHeight: 360
            }).data('royalSlider');

            slider.ev.on('rsOnCreateVideoElement', function() {
                var f = slider.videoObj,
                    url = f.attr('src').split('?')[0];
                // postMessage
                function post(action, value) {
                    var data = {
                        method: action
                    };
                    if (value) {
                        data.value = value;
                    }
                    if (f && f[0] && f[0].contentWindow) f[0].contentWindow.postMessage(JSON
                        .stringify(data), url);
                }
                // display event
                function onMessageReceived(e) {
                    var data = JSON.parse(e.data);
                    // Add listeners here
                    if (data.event === 'ready') {
                        // post('addEventListener', 'play');
                        // post('addEventListener', 'pause');
                        post('addEventListener', 'finish');
                    }
                    if (data.event === 'finish') {
                        if (data.event === 'finish') {
                            setTimeout(function() {
                                var $slider = $('.royalslider');
                                slider.next();
                                console.log(slider.currSlideId);
                            }, 2000);
                        }
                    }
                }
                if (window.addEventListener) {
                    window.addEventListener('message', onMessageReceived, false);
                } else { // IE
                    window.attachEvent('onmessage', onMessageReceived, false);
                }
            });
        });
    </script>
</body>

</html>