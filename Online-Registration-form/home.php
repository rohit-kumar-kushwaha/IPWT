<?php
    include 'php/connection.php';
    if(!isset($_SESSION['username'])) {
        header('location:index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<!--  13:28  -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Thinking Bytes</title>

    <!-- Css Files -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/flaticon.css" rel="stylesheet">
    <link href="css/slick-slider.css" rel="stylesheet">
    <link href="css/prettyphoto.css" rel="stylesheet">
    <link href="build/mediaelementplayer.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="css/color.css" rel="stylesheet">
    <link href="css/color-two.css" rel="stylesheet">
    <link href="css/color-three.css" rel="stylesheet">
    <link href="css/color-four.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    
</head>

<body>

    <?php
        $emailSearch = "select * from student where email='{$_SESSION['email']}' ";
        $query = mysqli_query($con, $emailSearch);
        $emailCount = mysqli_num_rows($query);
        $userdata = mysqli_fetch_assoc($query);
    ?>

    <!--// Main Wrapper \\-->
    <div class="wm-main-wrapper">

        <!--// Header \\-->
        <header id="wm-header" class="wm-header-one">

            <!--// TopStrip \\-->
            <div class="wm-topstrip">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="wm-stripinfo">
                            <li><i class="wmicon-location"></i> Thinking Byte, Bettiah</li>
                                <li><i class="wmicon-technology4"></i> +91 999-999-9999</li>
                                <li><i class="wmicon-time2"></i> Mon - fri: 7:00am - 6:00pm</li>
                            </ul>
                            <div class="wm-right-section">
                                <ul class="wm-login-section">
                                    <li><a href="logout.php" >LogOut</a>
                                    
                                    </li>
                                    <li><a href="#" data-toggle="modal" data-target="#ModalLoginTwo"> <?php echo $_SESSION['username']; ?> </a></li>
                                </ul>
                                <form class="wm-search-section">
                                    <input type="text" value="Type your search"
                                        onblur="if(this.value == '') { this.value ='Type your search'; }"
                                        onfocus="if(this.value =='Type your search') { this.value = ''; }">
                                    <input type="submit" value="">
                                    <i class="wmicon-search wm-color-two"></i>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// TopStrip \\-->

            <!--// MainHeader \\-->
            <div class="wm-main-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3"><a href="" class="wm-logo"><img src="extra-images/logo1.jpg" alt="" height=50 width=70></a></div>
                        <div class="col-md-9">
                            <!--// Navigation \\-->
                            <nav class="navbar navbar-default">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                        data-target="#navbar-collapse-1" aria-expanded="true">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                    <ul class="nav navbar-nav">
                                        <li class="active"><a href="#">Home</a>
                                        </li>
                                        <li><a href="#">courses</a>
                                            <ul class="wm-dropdown-menu">
                                                <li><a href="bca.html">BCA</a></li>
                                                <li><a href="bba.html">BBA</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">event</a>
                                            <ul class="wm-dropdown-menu">
                                               
                                            </ul>
                                        </li>
                                        <li><a href="dashboard.php?id=<?php echo $userdata['id'];?>">Dashboard</a>
                                           
                                        </li>
                                        
                                        <li class="wm-megamenu-li"><a href="#contact">Contact</a>
                                           
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                            <!--// Navigation \\-->
                            <?php 
                                if($emailCount){
                                    $pstatus = $userdata['payment_status'];
                                    if($pstatus=='complete'){
                                    
                                    }else{
                                        ?>
                                            <a href="display.php" class="wm-header-btn">Apply Now</a>
                                        <?php
                                    }
                                }else{
                                    ?>
                                        <a href="admission-form.php" class="wm-header-btn">Apply Now</a>
                                    <?php
                                }
                            ?>
                           
                        </div>
                    </div>
                </div>
            </div>
            <!--// MainHeader \\-->

        </header>
        <!--// Header \\-->

        <!--// Main Banner \\-->
        <div class="wm-main-banner">

            <div class="wm-banner-one">
                <div class="wm-banner-one-for">
                    <div class="wm-banner-one-for-layer"> <img src="extra-images/banner-view1-1.jpg" alt=""> </div>
                    <div class="wm-banner-one-for-layer"> <img src="extra-images/banner-view1-2.jpg" alt=""> </div>
                    <div class="wm-banner-one-for-layer"> <img src="extra-images/banner-view1-3.jpg" alt=""> </div>
                    <div class="wm-banner-one-for-layer"> <img src="extra-images/banner-view1-1.jpg" alt=""> </div>
                </div>
                <div class="wm-banner-one-nav">
                    <div class="wm-banner-one-nav-layer">
                        <h1>International Programmes</h1>
                        <p>The study programmes of the Enroll Campus University are open to people from all
                            nationalities.</p>
                        <a href="#" class="wm-banner-btn">learn more</a>
                    </div>
                    <div class="wm-banner-one-nav-layer">
                        <h1>UA Degree Programmes</h1>
                        <p>We offer companies the opportunity to access the technology and knowledge developed at the
                            Enroll Campus University.</p>
                        <a href="#" class="wm-banner-btn">know more</a>
                    </div>
                   
                </div>
            </div>

        </div>
        <!--// Main Banner \\-->

        <!--// Main Content \\-->
        <div class="wm-main-content">

            

            <!--// Main Section \\-->
            <div class="wm-main-section wm-learn-listing-full">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="wm-fancy-title">
                                <h2>You Can <span>Learn</span></h2>
                            </div>
                            <div class="wm-learn-listing">
                                <ul class="row">
                                    <li class="col-md-6">
                                        <figure><a href="#"><img src="extra-images/learn-listing-1.png" alt=""></a>
                                            <figcaption>
                                                <h2>Research</h2>
                                                <a href="#" class="wm-banner-btn">Read More</a>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li class="col-md-6">
                                        <figure><a href="#"><img src="extra-images/learn-listing-2.png" alt=""></a>
                                            <figcaption>
                                                <h2>Academics</h2>
                                                <a href="#" class="wm-banner-btn">Read More</a>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li class="col-md-6">
                                        <figure><a href="#"><img src="extra-images/learn-listing-3.png" alt=""></a>
                                            <figcaption>
                                                <h2>Admissions</h2>
                                                <a href="#" class="wm-banner-btn">Read More</a>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li class="col-md-6">
                                        <figure><a href="#"><img src="extra-images/learn-listing-4.png" alt=""></a>
                                            <figcaption>
                                                <h2>Student Life</h2>
                                                <a href="#" class="wm-banner-btn">Read More</a>
                                            </figcaption>
                                        </figure>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

        

            <!--// Main Section \\-->
            <div class="wm-main-section wm-contact-full">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12">

                            <div class="wm-contact-tab">

                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs">
                                    <li id="contact" class="active"><a href="#home" aria-controls="home"
                                            data-toggle="tab">Contact
                                            Us</a></li>
                                   
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active" id="home">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="wm-map">
                                                    <!-- <div id="map"></div> -->
                                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3561.2211693108366!2d84.50842981504253!3d26.801085483175875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39936f548fad6399%3A0x4a629c969e998b1e!2sBelieve_Us!5e0!3m2!1sen!2sin!4v1613488914613!5m2!1sen!2sin" frameborder="0" style="border:0; width: 100%; height: 497px;" allowfullscreen=""></iframe>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="wm-contact-form">
                                                    <span>Talk To Us Today</span>
                                                    <form>
                                                        <ul>
                                                            <li>
                                                                <i class="wmicon-black"></i>
                                                                <input type="text" value="Name"
                                                                    onblur="if(this.value == '') { this.value ='Name'; }"
                                                                    onfocus="if(this.value =='Name') { this.value = ''; }">
                                                            </li>
                                                            <li>
                                                                <i class="wmicon-symbol3"></i>
                                                                <input type="text" value="E-mail"
                                                                    onblur="if(this.value == '') { this.value ='E-mail'; }"
                                                                    onfocus="if(this.value =='E-mail') { this.value = ''; }">
                                                            </li>
                                                            <li>
                                                                <i class="wmicon-technology4"></i>
                                                                <input type="text" value="Phone"
                                                                    onblur="if(this.value == '') { this.value ='Phone'; }"
                                                                    onfocus="if(this.value =='Phone') { this.value = ''; }">
                                                            </li>
                                                            <li>
                                                                <i class="wmicon-web2"></i>
                                                                <textarea placeholder="Message"></textarea>
                                                            </li>
                                                            <li> <input type="submit" value="Send Message"> </li>
                                                        </ul>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

        </div>
        <!--// Main Content \\-->

        <!--// Footer \\-->
        <footer id="wm-footer" class="wm-footer-one">

           

            <!--// FooterCopyRight \\-->
            <div class="wm-copyright" style="background-color:#e0dede">
                <div class="container">
                    <div class="row">
                    <div class="col-md-6"> <span><i class="wmicon-nature"></i> Designed and Developed by : Rohit kumar</span>
                        </div>
                        <div class="col-md-6">
                            <p><a target="_blank" href="https://www.justdial.com/Bettiah/A-Thinking-Byte/9999P6254-6254-190404182034-D5N2_BZDET">Thinking Byte</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!--// FooterCopyRight \\-->

        </footer>
        <!--// Footer \\-->

        <div class="clearfix"></div>
    </div>
   

    <!-- jQuery (necessary for JavaScript plugins) -->
    <script type="text/javascript" src="script/jquery.js"></script>
    <script type="text/javascript" src="script/modernizr.js"></script>
    <script type="text/javascript" src="script/bootstrap.min.js"></script>
    <script type="text/javascript" src="script/jquery.prettyphoto.js"></script>
    <script type="text/javascript" src="script/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="script/fitvideo.js"></script>
    <script type="text/javascript" src="script/skills.js"></script>
    <script type="text/javascript" src="script/slick.slider.min.js"></script>
    <script type="text/javascript" src="script/waypoints-min.js"></script>
    <script type="text/javascript" src="build/mediaelement-and-player.min.js"></script>
    <script type="text/javascript" src="script/isotope.min.js"></script>
    <script type="text/javascript" src="script/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
    <script type="text/javascript" src="script/functions.js"></script>
    <script type="text/javascript" src="script/showPassword.js"></script>

</body>

<!--  15:20  -->

</html>