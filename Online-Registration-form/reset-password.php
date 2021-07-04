<?php
     include 'php/connection.php';
    // session_start();
    // if(!isset($_SESSION['username'])) {
    //     header('location:index.php');
    // }

?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>>> Reset password | Thinking Byte</title>

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
    <link href="css/responsive.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <style>
        td{
            width: 15px;
        }
    </style>

</head>

<body>


<?php

// include 'connection.php';

if(isset($_POST['reset-password'])) {
    // $email = $_GET['email'];
    // echo $email;
    if(isset($_GET['email'])) {
        $email = $_GET['email'];
        echo $email;

        $newPassword = mysqli_real_escape_string($con, $_POST['newPassword']);
        $cPassword = mysqli_real_escape_string($con, $_POST['cPassword']);

        $pass = password_hash($newPassword, PASSWORD_BCRYPT);
        $cpass = password_hash($cPassword, PASSWORD_BCRYPT);

        

        if($newPassword === $cPassword ) {
            $updateQuery = "UPDATE `user` SET `password`='$pass',`cpassword`='$cpass' WHERE email='$email' ";
            $query = mysqli_query($con, $updateQuery);
            if($query) {
                $_SESSION['status'] = "Your password has been updated. ";
                $_SESSION['text'] = "";
                $_SESSION['status_code'] = "success";
                header('location:index.php');
            }
            else{
                // $_SESSION['status'] = "Your password is not updated. ";
                // $_SESSION['text'] = "";
                // $_SESSION['status_code'] = "warning";
                // header('location:../index.php');
                $_SESSION['msg'] = "Your password is not updated. ";
                // header('location:reset-password.php');
            }
        }else{
                // $_SESSION['status'] = "Password is not matching. ";
                // $_SESSION['text'] = "";
                // $_SESSION['status_code'] = "warning";
                // header('location:../index.php');
                $_SESSION['msg'] = "Password is not matching. ";
                // header('location:reset-password.php');
        }
    }
    else{
        echo "email not found.";
    }
}


?>
    
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
                </div>
            </div>
        </div>
    </div>
    <!--// TopStrip \\-->


    <!-- <div class="modal fade" id="ModalLogin" tabindex="-1" role="dialog"> -->
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="left:-354px">
                <div class="modal-body">
                    <div class="wm-modallogin-form wm-login-popup xxx">
                        <span class="wm-color">Reset Password</span>
                        <form action="" method="POST" id="studentLogin" >
                            <ul>
                                <p class="bg-info text-white px-5">
                                    <?php
                                        if(isset($_SESSION['msg'])){
                                            echo $_SESSION['msg'];
                                            // unset($_SESSION['msg']);
                                        }
                                        else{
                                            echo $_SESSION['msg'] = "";
                                        }
                                    ?>
                                
                                </p>
                                <li><input required="" class="form-control" id="pwd1"
                                        pattern="(?=.*[!@#$%^&amp;*-])(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{8,20}"
                                        id="npwd" placeholder=" New Password" name="newPassword" type="password"></li>
                                <li><input required="" class="form-control" id="pwd1"
                                        pattern="(?=.*[!@#$%^&amp;*-])(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{8,20}"
                                        id="cfpwd" placeholder=" Confirm Password" name="cPassword" type="password"></li>
                                <li><input type="checkbox" onclick="showPassword2()">
                                    Show Password</li>
                                <li> <input type="submit" name="reset-password" value="Submit"></li>
                            </ul>
                        </form>
                    </div>
                </dev>
            </dev>
        </dev>

        <script type="text/javascript" src="script/showPassword.js"></script>
        

        
        
</body>

</html>

