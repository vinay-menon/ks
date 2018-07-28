<?php
    ob_start();
    if(isset($_REQUEST['submit'])) {
    $name = $_REQUEST['user-name'];
    $email = $_REQUEST['user-email'];
    $contactno = $_REQUEST['user-phone'];
    $uplace = $_REQUEST['user-place'];
    $udate = $_REQUEST['user-date'];
    $umessage = $_REQUEST['user-message'];
     
    $faddr = $email;
    $baddr = "info@kathakalischool.com";
    $eol = "\r\n";
    $dblln = "<br style='margin-bottom: 10px'>";
    
    $artkathakali = $_REQUEST['art-kathakali'].$_REQUEST['no-kathakali'].$dblln;
    $artmohiniyattam = $_REQUEST['art-mohiniyattam'].$_REQUEST['no-mohiniyattam'].$dblln;
    $artkalaripayattu = $_REQUEST['art-kalaripayattu'].$_REQUEST['no-kalaripayattu'].$dblln;
    $artbharathanatyam = $_REQUEST['art-bharathanatyam'].$_REQUEST['no-bharathanatyam'].$dblln;
    $arttheyyam = $_REQUEST['art-theyyam'].$_REQUEST['no-theyyam'].$dblln;
    $artthiruvathirakali = $_REQUEST['art-thiruvathirakali'].$_REQUEST['no-thiruvathirakali'].$dblln;
    $artpanchavadhyam = $_REQUEST['art-panchavadhyam'].$_REQUEST['no-panchavadhyam'].$dblln;
    $artpookkavadi = $_REQUEST['art-pookkavadi'].$_REQUEST['no-pookkavadi'].$dblln;
    $artkuchipudi = $_REQUEST['art-kuchipudi'].$_REQUEST['no-kuchipudi'].$dblln;
    $artmayooranritham = $_REQUEST['art-mayooranritham'].$_REQUEST['no-mayooranritham'].$dblln;
    $artpoothankali = $_REQUEST['art-poothankali'].$_REQUEST['no-poothankali'].$dblln;
    $artpoothan_thira = $_REQUEST['art-poothan_thira'].$_REQUEST['no-poothan_thira'].$dblln;
    $artpulikali = $_REQUEST['art-pulikali'].$_REQUEST['no-pulikali'].$dblln;
    $artkummatti = $_REQUEST['art-kummatti'].$_REQUEST['no-kummatti'].$dblln;
    $artnilakavadi = $_REQUEST['art-nilakavadi'].$_REQUEST['no-nilakavadi'].$dblln;
  
    $headers1 .= "From: <".$baddr.">".$eol;
    $headers1 .= "Reply-To: <".$faddr.">".$eol;
    $headers1 .= "Return-Path: <".$faddr.">".$eol;    // these two to set reply address
    $headers1 .= "Message-ID: <".time()."-".$faddr.">".$eol;
    $headers1 .= "X-Mailer: PHP v".phpversion().$eol;
    $headers1 .= "Content-Type: text/html; charset=UTF-8\r\n";


    $descr = "Name: ".$name.$dblln."Contact No: ".$contactno.$dblln."Email ID: ".$email.$dblln."Place: ".$uplace.$dblln."Date of Event: ".$udate.$dblln."Message: ".$umessage.$dblln."Art Forms: ".$dblln;

    if(isset($_REQUEST['art-kathakali'])) {
        $descr .= $artkathakali;
    }
    if(isset($_REQUEST['art-mohiniyattam'])) {
        $descr .= $artmohiniyattam;
    }
    if(isset($_REQUEST['art-kalaripayattu'])) {
        $descr .= $artkalaripayattu;
    }
    if(isset($_REQUEST['art-bharathanatyam'])) {
        $descr .= $artbharathanatyam;
    }
    if(isset($_REQUEST['art-theyyam'])) {
        $descr .= $arttheyyam;
    }
    if(isset($_REQUEST['art-thiruvathirakali'])) {
        $descr .= $artthiruvathirakali;
    }
    if(isset($_REQUEST['art-panchavadhyam'])) {
        $descr .= $artpanchavadhyam;
    }
    if(isset($_REQUEST['art-pookkavadi'])) {
        $descr .= $artpookkavadi;
    }
    if(isset($_REQUEST['art-kuchipudi'])) {
        $descr .= $artkuchipudi;
    }
    if(isset($_REQUEST['art-mayooranritham'])) {
        $descr .= $artmayooranritham;
    }
    if(isset($_REQUEST['art-poothankali'])) {
        $descr .= $artpoothankali;
    }
    if(isset($_REQUEST['art-poothan_thira'])) {
        $descr .= $artpoothan_thira;
    }
    if(isset($_REQUEST['art-pulikali'])) {
        $descr .= $artpulikali;
    }
    if(isset($_REQUEST['art-kummatti'])) {
        $descr .= $artkummatti;
    }
    if(isset($_REQUEST['art-nilakavadi'])) {
        $descr .= $artnilakavadi;
    }

    //$too=$subj;
    //$too="kathakalischool@yahoo.co.in";
    $too="info@kathakalischool.com";
    // $too = "vinaymenon313@gmail.com";
    $sub = "Booking"." ".$name;
    $msg = $descr;
    
    $mail_sent = @mail($too,$sub,$msg,$headers1);
	
	 header("location:book.php");
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
    
    <section class="main-content on-step-1" id="content">
        <div class="quick-nav">
            <nav class="breadcrumbs">
                <a href="index.html"><img src="images/assets/icons/home.png" alt="home"></a>
                <a href="#" class="is-active">Book Art Forms</a>
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
            <div class="content-header-nav book">
                <h1>Book art forms</h1>
            </div>

            <div class="content-header-body">                
                <div class="content-header-lnk-group progress-tracker">
                    <button class="progress-1">Select Art Forms.</buton>
                    <button class="progress-2">Select No. of Artists</button>
                    <button class="progress-3">Fill in Your Details</button>
                </div>
            </div>
        </header>

        <form class="forms" name="form1" method="post" action="">
            <div class="artform-selection" id="form-part-1">
                <button class="artform-item is-selectable" data-label="kathakali" data-members="1">
                    <img src="images/select-artforms/kathakali.jpg" alt="kathakali">
                    <div class="artform-item-label">
                        <div class="name">Kathakali</div>  
                        <div class="desc">Availability: <br> Single, Group</div>  
                    </div>
                </button>
                <button class="artform-item is-selectable" data-label="mohiniyattam" data-members="1">
                    <img src="images/select-artforms/mohiniyattam.jpg" alt="mohiniyattam">
                    <div class="artform-item-label">
                        <div class="name">Mohinyattam</div>  
                        <div class="desc">Availability: <br> Single, Group</div>  
                    </div>
                </button>
                <button class="artform-item is-selectable" data-label="kalaripayattu" data-members="2">
                    <img src="images/select-artforms/kalari.jpg" alt="Kalaripayyattu">
                    <div class="artform-item-label">
                        <div class="name">Kalaripayyattu</div>  
                        <div class="desc">Availability: <br> Min.2 artists, Group</div>  
                    </div>
                </button>
                <button class="artform-item is-selectable" data-label="bharathanatyam" data-members="1">
                    <img src="images/artforms/bharathanatyam.jpg" alt="Bharathanatyam">
                    <div class="artform-item-label">
                        <div class="name">Bharathanatyam</div>  
                        <div class="desc">Availability: <br> Single, Group</div>  
                    </div>
                </button>
                <button class="artform-item is-selectable" data-label="theyyam" data-members="1">
                    <img src="images/artforms/theyyam.jpg" alt="Theyyam">
                    <div class="artform-item-label">
                        <div class="name">Theyyam</div>  
                        <div class="desc">Availability: <br> Single, Group</div>  
                    </div>
                </button>
                <button class="artform-item is-selectable" data-label="thiruvathirakali" data-members="7">
                    <img src="images/select-artforms/thiruvathirakali.jpg" alt="Thiruvathirakali">
                    <div class="artform-item-label">
                        <div class="name">Thiruvathirakali</div>  
                        <div class="desc">Availability: <br> Min.7 artists, Group</div>  
                    </div>
                </button>
                <button class="artform-item is-selectable" data-label="panchavadhyam" data-members="9">
                    <img src="images/select-artforms/panchavadhyam.jpg" alt="Panchavadhayam">
                    <div class="artform-item-label">
                        <div class="name">Panchavadhayam</div>  
                        <div class="desc">Availability: <br> Min.9 artists, Group</div>  
                    </div>
                </button>
                <button class="artform-item is-selectable" data-label="pookkavadi" data-members="1">
                    <img src="images/select-artforms/pookkavadi.jpg" alt="Pookavadi">
                    <div class="artform-item-label">
                        <div class="name">Pookavadi</div>  
                        <div class="desc">Availability: <br> Single, Group</div>  
                    </div>
                </button>
                <button class="artform-item is-selectable" data-label="kuchipudi" data-members="1">
                    <img src="images/select-artforms/kuchipudi.jpg" alt="Kuchipudi">
                    <div class="artform-item-label">
                        <div class="name">Kuchipudi</div>  
                        <div class="desc">Availability: <br> Single, Group</div>  
                    </div>
                </button>
                <button class="artform-item is-selectable" data-label="mayooranritham" data-members="1">
                    <img src="images/select-artforms/mayooranritham.jpg" alt="Mayooranritham">
                    <div class="artform-item-label">
                        <div class="name">Mayooranritham</div>  
                        <div class="desc">Availability: <br> Single, Group</div>  
                    </div>
                </button>
                <button class="artform-item is-selectable" data-label="poothankali" data-members="1">
                    <img src="images/select-artforms/poothankali.jpg" alt="Poothan">
                    <div class="artform-item-label">
                        <div class="name">Poothan</div>  
                        <div class="desc">Availability: <br> Single, Group</div>  
                    </div>
                </button>
                <button class="artform-item is-selectable" data-label="poothan_thira" data-members="1">
                    <img src="images/select-artforms/poothan-thira.jpg" alt="Poothan Thira">
                    <div class="artform-item-label">
                        <div class="name">Poothan Thira</div>  
                        <div class="desc">Availability: <br> Single, Group</div>  
                    </div>
                </button>
                <button class="artform-item is-selectable" data-label="pulikali" data-members="1">
                    <img src="images/select-artforms/pulikkali.jpg" alt="Pulikali">
                    <div class="artform-item-label">
                        <div class="name">Pulikali</div>  
                        <div class="desc">Availability: <br> Single, Group</div>  
                    </div>
                </button>
                <button class="artform-item is-selectable" data-label="kummatti" data-members="1">
                    <img src="images/select-artforms/kummatti.jpg" alt="Kummatti">
                    <div class="artform-item-label">
                        <div class="name">Kummatti</div>  
                        <div class="desc">Availability: <br> Single, Group</div>  
                    </div>
                </button>
                <button class="artform-item is-selectable" data-label="nilakavadi" data-members="1">
                    <img src="images/select-artforms/nilakkavadi.jpg" alt="Nilakavadi">
                    <div class="artform-item-label">
                        <div class="name">Nilakavadi</div>  
                        <div class="desc">Availability: <br> Single, Group</div>  
                    </div>
                </button>
            </div><!-- .artform-selection -->

            <div id="form-part-2">
                <header>
                    <h2>Selected Artforms: </h2>
                    <div class="selected-artform-counter"></div>
                    <p class="artform-selection-instruction-1">
                        If you have finished selecting art forms, proceed to <button class="artform-selection-final-step-btn">next step</button>.
                    </p>
                    <p class="artform-selection-instruction-2">
                        Select more artforms? <button class="artform-selection-prev-step-btn">previous step</button>.
                    </p>
                </header>
                <div class="selected-artforms-group"></div>
            </div>

            <div id="form-part-3">
                <div class="user-form">
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
                    <label for="user-date">
                        <div class="label">Date of Event</div>
                        <input type="text" id="user-date" name="user-date">
                    </label>
                    <label for="user-message">
                        <div class="label">Message</div>
                        <textarea id="user-message" name="user-message" rows="5"></textarea>
                    </label>

                    <button id="submit" name="submit">Send</button>
                </div>
            </div>
            
        </form>
        
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

<script src="js/flickity.pkgd.min.js"></script>
<script>
    var flkty = new Flickity(
        '.flickity',
         { 
             "cellAlign": "left", 
             "contain": true, 
             "autoPlay": 2000,
             "prevNextButtons": true,
             "pageDots": 0
         }
    );
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