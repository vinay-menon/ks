<?php
ob_start();

if(isset($_REQUEST['submit'])) {
    $course = $_REQUEST['course-subject'];
    $name = $_REQUEST['user-name'];
    $email = $_REQUEST['user-email'];
    $phone = $_REQUEST['user-phone'];
    $addr = $_REQUEST['user-place'];
    $acco = $_REQUEST['accomodation'];
    $message = $_REQUEST['user-message'];
     
    $faddr = $email;
    $baddr = "info@kathakalischool.com";
    $eol = "\r\n";
    $dblln = "<br style='margin-bottom: 10px'>";


    $descr = "<b>Course:</b> ".$course.$dblln."<b>Name:</b> ".$name.$dblln."<b>Email ID:</b> ".$email.$dblln."<b>Phone:</b> ".$phone.$dblln."<b>Place:</b> ".$addr.$dblln."<b>Include Accomodation &amp; Food:</b> ".$acco.$dblln."<b>Message:</b> ".$message;

    $faddr = $email;

    $headers1 .= "From: <".$baddr.">".$eol;
    $headers1 .= "Reply-To: <".$faddr.">".$eol;
    $headers1 .= "Return-Path: <".$faddr.">".$eol;    // these two to set reply address
    $headers1 .= "Message-ID: <".time()."-".$faddr.">".$eol;
    $headers1 .= "X-Mailer: PHP v".phpversion().$eol;
    $headers1 .= "Content-Type: text/html; charset=UTF-8\r\n";

    //$too=$subj;
    $too="info@kathakalischool.com";

    $sub = "KathakaliSchool.com Course enquiry from"." ".$name;
    $msg = $descr;

    $mail_sent = @mail($too,$sub,$msg,$headers1);


    header("location:training.html");
    }
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Kathakali School</title>
    <link rel="apple-touch-icon" sizes="57x57" href="images/assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="images/assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="images/assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/flickity.min.css">
</head>
<body class="flex-column">
    <div class="circle"></div>
    <header class="main-header -secondary">
        <div class="id-collection">
            <div class="logo">
                <a href="index.html" class="logo-group">
                    <div class="logo-img">
                        <div class="logo-img-wrap">
                            <img src="images/assets/logo_big.jpg" alt="kathakali school">
                        </div>
                    </div>
                    <div class="logo-text">
                        <div class="logo-title">Kathakali School</div>
                        <p class="logo-about">Center for Performing Arts &amp; Culture</p>
                        <p class="logo-location">Cheruthuruthy, Kerala</p>
                    </div>
                </a>
            </div>
            
            <div class="main-extra">
                <div class="emp-logo">
                    <img src="images/assets/logo-iccr.png" alt="ICCR">
                </div>
                <div class="emp-logo emp-mcr">
                    <img src="images/assets/mcr.png" alt="ministry of culture">
                </div>
                <div class="main-contact">
                    <p class="phone icon-call">+91-9447061360</p>
                    <p class="phone icon-call">+91- 4884-261360</p>
                    <p class="email icon-msg">kathakalischool@yahoo.co.in</p>
                </div>
                <div class="socmed">
                    <a href="https://www.facebook.com/Kathakali-104234974302/">
                        <img src="images/assets/social-icons/fb.png" alt="facebook" width="24px">
                    </a>
                    <a href="https://vimeo.com/user7390871">
                        <img src="images/assets/social-icons/vimeo.png" alt="vimeo" width="24px">
                    </a>
                    <a href="https://www.youtube.com/user/TheKathakaliSchool">
                        <img src="images/assets/social-icons/yt.png" alt="youtube" width="24px">
                    </a>
                </div>
            </div>
        </div>

        <nav class="main-nav is-hidden">
            <div class="nav-item icon-white-block">
                <a href="training.html#content">
                    <h2 class="ico n-fwd-c">Training</h2>
                    <p>
                        Learn about the courses we offer and details to help your join.
                    </p>
                </a>
                <ul class="extended-links">
                    <li><a href="#">Courses</a></li>
                    <li><a href="#">Enlist</a></li>
                    <li><a href="#">Students</a></li>
                </ul>
            </div>
            <div class="nav-item icon-white-block">
                <a href="kathakali.html#content">
                    <h2 class="ic on-fwd-c">Kathakali</h2>
                    <p>
                        Learn about the history and future of Kathakali.
                    </p>
                </a>
                <ul class="extended-links">
                    <li><a href="#">List of Events</a></li>
                    <li><a href="#">Book an Event</a></li>
                </ul>
            </div>
            <div class="nav-item icon-white-block">
                <a href="art-forms.html#content">
                    <h2 class="ico n-fwd-c">Art Forms</h2>
                    <p>
                        An overview of the traditional art forms we practice in.
                    </p>
                </a>
                <ul class="extended-links">
                    <li><a href="#">Classical Dance Forms</a></li>
                    <li><a href="#">Kerala Folk Arts</a></li>
                    <li><a href="#">Kerala Martial Arts</a></li>
                </ul>
            </div>
            <div class="nav-item icon-white-block">
                <a href="about-us.html#content">
                    <h2 class="ico n-fwd-c">About Us</h2>
                    <p>
                        Get to know about our history and our influences.
                    </p>
                </a>
                <ul class="extended-links">
                    <li><a href="#">The Director</a></li>
                    <li><a href="#">Our History</a></li>
                    <li><a href="#">Shop</a></li>
                </ul>
            </div>
            <div class="nav-item icon-white-block">
                <a href="./gallery.html">
                    <h2 class="ic on-fwd-c">Photos &amp; Videos</h2>
                    <p>
                        View photos of our events and watch exclusive videos.
                    </p>
                </a>
                <ul class="extended-links">
                    <li><a href="#">The Director</a></li>
                    <li><a href="#">Our History</a></li>
                    <li><a href="#">Shop</a></li>
                </ul>
            </div>
            <!-- <div class="nav-item icon-white-block">
                <a href="gallery.html#content">
                    <h2 class="ic on-fwd-c">Photos &amp; Videos</h2>
                    <p>
                        Get to know about our history and our influences.
                    </p>
                </a>
                <ul class="extended-links">
                    <li><a href="#">The Director</a></li>
                    <li><a href="#">Our History</a></li>
                    <li><a href="#">Shop</a></li>
                </ul>
            </div> -->
            <div class="nav-item icon-white-block">
                <a href="contact.php#content">
                    <h2 class="ic on-fwd-c">Contact</h2>
                    <p>
                        Get directions to our school or send us a quick message through the enquiry form.
                    </p>
                </a>
                <ul class="extended-links">
                    <li><a href="#">Get Directions</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Quick Message</a></li>
                    <li><a href="#">Get Directions</a></li>
                </ul>
            </div>    
        </nav>        

        <div class="main-nav-trigger">
            <button>menu</button>
        </div>
    </header>
    
    <section class="main-content" id="content">
        <div class="quick-nav">
            <nav class="breadcrumbs">
                <a href="index.html"><img src="images/assets/icons/home.png" alt="home"></a>
                <a href="./training.html">Training</a>
                <a href="#" class="is-active">Join a Course</a>
            </nav>
            <nav class="quick-links">
                <h2>Quick Links:</h2>
                <a href="#">Book Performances</a>
                <a href="#">Book Shows</a>
                <a href="#">Another Link</a>
                <a href="#">One more, if you must</a>
            </nav>
        </div>

        <header class="content-header">
            <div class="content-header-nav training">
                <h1>Join a Course</h1>
                <!-- <nav class="content-header-links">
                    <a class="icon-fwd-c" href="aboutschool.html">Faculty</a>
                    <a class="icon-fwd-c" href="#">International Students</a>
                    <a class="icon-fwd-c" href="#">School Facilities</a>
                </nav> -->
            </div>

            <div class="content-header-body">
                <p>
                    Please provide us with your requirements in the form below.
                </p>
                <div class="content-header-lnk-group">
                    <a href="art-forms.html" class="icon-info">View more art forms.</a>
                    <a href="contact.php" class="icon-msg">Send us a message in case you require specialzed classes.</a>
                </div>
            </div>
        </header>

        <div class="training-form">
            <div class="artform-portrait">
                <img src="images/portraits/kalaripayyattu.jpg" alt="">
            </div>
            <form name="form1" method="post" action="" class="training-form-content">
                <div class="user-form">
                    <input type="text" class="course-subject" id="course-subject" name="course-subject">
                    <label for="user-name">
                        <div class="label">Name</div>
                        <input type="text" id="user-name" name="user-name">
                    </label>
                    <label for="user-email">
                        <div class="label">Email</div>
                        <input type="text" id="user-email" name="user-email">
                    </label>
                    <label for="user-phone">
                        <div class="label">Phone</div>
                        <input type="text" id="user-phone" name="user-phone">
                    </label>
                    <label for="user-place">
                        <div class="label">Place</div>
                        <input type="text" id="user-place" name="user-place">
                    </label>
                    <div>
                        <div class="label">Would you like us to arrange for your accomodation and food?</div>
                        <label for="accomodation-y" class="user-form-radio">
                            <div class="label">Yes</div>
                            <input type="radio" name="accomodation" value="yes" id="accomodation-y">
                        </label>
                        <label for="accomodation-n" class="user-form-radio">
                            <div class="label">No</div>
                            <input type="radio" name="accomodation" value="no" id="accomodation-n">
                        </label>
                    </div>
                    <label for="user-message">
                        <div class="label">Message</div>
                        <textarea name="user-message" id="user-message" rows="5"></textarea>
                    </label>

                    <button name="submit">Send</button>
                </div>
            </form>
        </div>
        

    </section><!-- #content -->
    
    <footer class="main-footer">
        <div class="main-footer-content">
            <div class="socmed">
                <a href="https://www.facebook.com/Kathakali-104234974302/">
                    <img src="images/assets/social-icons/fb.png" alt="facebook" width="24px">
                </a>
                <a href="https://vimeo.com/user7390871">
                    <img src="images/assets/social-icons/vimeo.png" alt="vimeo" width="24px">
                </a>
                <a href="https://www.youtube.com/user/TheKathakaliSchool">
                    <img src="images/assets/social-icons/yt.png" alt="youtube" width="24px">
                </a>
            </div>
            <div class="main-footer-copyright">
                &copy; Kathakali School 2018
            </div>
            <!-- <div class="main-footer-dev">
                Design &amp; Development: Crow Creative Crew
            </div> -->
        </div>
    </footer>    


<script src="js/jq.js"></script>
<script src="js/main.js"></script>
<script>
    $(document).ready(function(){
        trainingForm();
    });
</script>
<script>
//    function debugLayout(state,elem) {
//        state == "on" ? $(elem).css("outline", "1px solid red") : $(elem).css("outline", "0");
//    }
//
//    $("body").on("keydown", function(e){
//        if(e.keyCode == 65) {
//                debugLayout("on","*");
//            }
//        if(e.keyCode == 83) {
//                debugLayout("off","*");
//            }
//    });
</script>
<script src="js/main-nav.js"></script>
</body>
</html>