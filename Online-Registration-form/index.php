<?php

    session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <script language="javascript" type="text/javascript">
        window.history.forward();
    </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Thinking Byte</title>

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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    
</head>

<body>


    <?php   include 'php/sweet-alert.php';  ?>
    <!--// Main Wrapper \\-->
    <div class="wm-main-wrapper">

        <!--// Header \\-->
        <header id="wm-header" class="wm-header-one" style="position:;">

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
                                    <li><a href="#" data-toggle="modal" data-target="#ModalLogin">Login as Student</a>
                                    </li>
                                    <li><a href="#" data-toggle="modal" data-target="#ModalLoginTwo">Login as
                                            Instructor</a></li>
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
                        <div class="col-md-3"><a href="" class="wm-logo"><img src="extra-images/logo1.jpg" alt="" height=100 width=100></a></div>
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
                                        <li class="active"><a href="#">Home</a></li>
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
                                        <li>        
                                        <a href="#">Dashboard</a>
                                        </li>
                                       
                                        <li class="wm-megamenu-li"><a href="#contact">Contact</a>
                                           
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                            <!--// Navigation \\-->
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
                                    <!-- <li><a href="#profile" aria-controls="profile" data-toggle="tab">Information
                                            Details</a></li> -->
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
    <!--// Main Wrapper \\-->

    <!-- ModalLogin Box -->
    <div class="modal fade" id="ModalLogin" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">

                    <div class="wm-modallogin-form wm-login-popup xxx">
                        <span class="wm-color">Login to Your Account</span>
                        <form action="php/student-login.php" method="POST" id="studentLogin" >
                            <ul>
                                <li><input class="form-control" id="email" placeholder="Enter Email Id" required=""
                                        name="email" type="email"></li>
                                <li><input required="" class="form-control" id="pwd1"
                                        pattern="(?=.*[!@#$%^&amp;*-])(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{8,20}"
                                        id="pwd1" placeholder=" Enter Password" name="pwd" type="password"></li>
                                <li><input type="checkbox" onclick="showPassword()">
                                    Show Password</li>
                                <li> <a href="#" class="wm-forgot-btn">Forgot Password?</a> </li>
                                <li> <input type="submit" name="studentLogin" value="Sign In"></li>
                            </ul>
                        </form>
                        <span class="wm-color">or try our socials</span>
                        <ul class="wm-login-social-media">
                            <li><a href="#"><i class="wmicon-social5"></i> Facebook</a></li>
                            <li class="wm-twitter-color"><a href="#"><i class="wmicon-social4"></i> twitter</a></li>
                            <li class="wm-googleplus-color"><a href="#"><i class="fa fa-google-plus-square"></i>
                                    Google+</a></li>
                        </ul>
                        <p>Not a member yet? <a href="#">Sign-up Now!</a></p>
                    </div>
                    <div class="wm-modallogin-form wm-register-popup">
                        <span class="wm-color">create Your Account today</span>
                        <form role="form" action="php/student-signup.php" name="myform" id="studentSignup" onsubmit="return validate()" method="POST"
                            class="form-horizontal">
                            <ul>
                                <li><input class="form-control" name="username" id="name" placeholder="Enter Your Name"
                                        required type="text"></li>
                                <li><input class="form-control" id="email" placeholder="Enter Email Id" required
                                        name="email" type="email"></li>
                                <li><input class="form-control" id="mobile" required name="mobile"
                                        placeholder="Enter Mobile No." type="text"></li>
                                <li><input required class="form-control"
                                        pattern="(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{8,20}" id="pwd"
                                        placeholder="Enter Password" name="pwd" type="password"
                                        title="Must contain atleast one lowercase letter, one uppercase letter, one number, one sepcial symbol and minimum 8 characters">
                                </li>
                                <li><input class="form-control" id="cpwd"
                                        pattern="(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{8,20}"
                                        placeholder="Enter Confirm Password" name="cpwd" type="password" required
                                        title="Must contain atleast one lowercase letter, one uppercase letter, one number, one sepcial symbol and minimum 8 characters">
                                </li>
                                <li><input type="checkbox" onclick="showPassword1()" > Show Password</li>
                                <li> <input type="submit" name="studentCreateAccount" value="Create Account"> </li>
                            </ul>
                        </form>
                        <span class="wm-color">or signup with your socials:</span>
                        <ul class="wm-login-social-media">
                            <li><a href="#"><i class="wmicon-social5"></i> Facebook</a></li>
                            <li class="wm-twitter-color"><a href="#"><i class="wmicon-social4"></i> twitter</a></li>
                            <li class="wm-googleplus-color"><a href="#"><i class="fa fa-google-plus-square"></i>
                                    Google+</a></li>
                        </ul>
                        <p>Already a member? <a href="#">Sign-in Here!</a></p>
                    </div>

                    <div class="wm-modallogin-form wm-forgot-popup">
                        <span class="wm-color">Forgot Your Password</span>
                        <form action="php/forgot-password.php" method="POST" id="forget-form" >
                        <!-- <form action="#" method="POST" id="forget-form" > -->
                            <ul>
                                <!-- <li>
                                    <div id="meg"></div>
                                </li> -->
                                <li><input class="form-control" id="email" placeholder="Enter register Email Id" required="" name="email" type="email"></li>
                               <div class="button"> <li> <input type="submit" name="fpassword" value="Go"></li> </div>
                            </ul>
                        </form>
                        <li style="list-style:none">Password Not Forgot? <a href="#"><strong>Login</strong></a></li>
                    </div>

                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- ModalLogin Box -->

    <!-- ModalLogin Box -->
    <div class="modal fade" id="ModalLoginTwo" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">

                    <div class="wm-modallogin-form wm-login-popup">
                        <span class="wm-color">Login as Instructor</span>
                        <form action="php/teacher-login.php" method="POST" id="">
                            <ul>
                                <li><input class="form-control" id="email" placeholder="Enter Email Id" required=""
                                        name="email" type="email"></li>
                                <li><input required="" class="form-control" id="pwdAdmin"
                                        pattern="(?=.*[!@#$%^&amp;*-])(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{8,20}"
                                        id="pwd1" placeholder=" Enter Password" name="pwd" type="password"></li>
                                <li><input type="checkbox" onclick="showPasswordAdmin()">
                                    Show Password</li>
                                <li> <a href="#" class="wm-forgot-btn">Forgot Password?</a> </li>

                                <li> <input type="submit" name="teacherLogin" value="Sign In"></li>
                            </ul>
                        </form>
                        <span class="wm-color">or try our socials</span>
                        <ul class="wm-login-social-media">
                            <li><a href="#"><i class="wmicon-social5"></i> Facebook</a></li>
                            <li class="wm-twitter-color"><a href="#"><i class="wmicon-social4"></i> twitter</a></li>
                            <li class="wm-googleplus-color"><a href="#"><i class="fa fa-google-plus-square"></i>
                                    Google+</a></li>
                        </ul>
                        <p>Not a member yet? <a href="#">Sign-up Now!</a></p>
                    </div>
                    <div class="wm-modallogin-form wm-register-popup">
                        <span class="wm-color">create Your Account today</span>
                        <form role="form" action="php/admin-signup.php" name="myformAdmin" onsubmit="return validateAdmin()"
                            method="POST" class="form-horizontal">
                            <ul>
                                <li><input class="form-control" name="username" id="name" placeholder="Enter Your Name"
                                        required type="text"></li>
                                <li><input class="form-control" id="email" placeholder="Enter Email Id" required=""
                                        name="email" type="email"></li>
                                <li><input class="form-control" id="mobileAdmin" required name="mobile"
                                        placeholder="Enter Mobile No." type="text"></li>
                                <li><input required class="form-control"
                                        pattern="(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{8,20}"
                                        id="pwdAdmin1" placeholder="Enter Password" name="pwd" type="password"
                                        title="Must contain atleast one lowercase letter, one uppercase letter, one number, one sepcial symbol and minimum 8 characters">
                                </li>
                                <li><input class="form-control" id="cpwdAdmin"
                                        pattern="(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{8,20}"
                                        placeholder="Enter Confirm Password" name="cpwd" type="password" required
                                        title="Must contain atleast one lowercase letter, one uppercase letter, one number, one sepcial symbol and minimum 8 characters">
                                </li>
                                <li><input class="form-control" name="adminID" id="adminID" placeholder="Admin ID"
                                        required type="password">

                                </li>
                                <li><input type="checkbox" onclick="showPasswordAdmin1()" /> Show Password</li>
                                <li> <input type="submit" name="adminCreateAccount" value="Create Account"> </li>
                            </ul>
                        </form>
                        <span class="wm-color">or signup with your socials:</span>
                        <ul class="wm-login-social-media">
                            <li><a href="#"><i class="wmicon-social5"></i> Facebook</a></li>
                            <li class="wm-twitter-color"><a href="#"><i class="wmicon-social4"></i> twitter</a></li>
                            <li class="wm-googleplus-color"><a href="#"><i class="fa fa-google-plus-square"></i>
                                    Google+</a></li>
                        </ul>
                        <p>Already a member? <a href="#">Sign-in Here!</a></p>
                    </div>
                    <div class="wm-modallogin-form wm-forgot-popup">
                        <span class="wm-color">Forgot Your Password</span>
                        <form action="" method="POST" id="studentLogin" >
                            <ul>
                                <li><input class="form-control" id="email" placeholder="Enter Email Id" required=""
                                        name="email" type="email"></li>
                                <li> <input type="submit" name="studentLogin" value="Go"></li>
                            </ul>
                        </form>
                        <li style="list-style:none">Password Not Forgot? <a href="#"><strong>Login</strong></a></li>
                    </div>

                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- ModalLogin Box -->

   

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
    <!-- <script type="text/javascript" src="script/show-msg.js"></script> -->

</body>

<!--  15:20  -->

</html>


