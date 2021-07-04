<?php
     include 'php/connection.php';
    //session_start();
    if(!isset($_SESSION['username'])) {
        header('location:index.php');
    }

?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>>> Payment | Thinking Byte</title>

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
                            <li><a href="logout.php" >LogOut</a></li>
                            <!-- <li><a href="#" data-toggle="modal" data-target="#ModalLoginTwo">Login as Instructor</a></li> -->
                            <li><a href="#" data-toggle="modal" data-target=""> <?php echo $_SESSION['username']; ?> </a></li>
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

    <div class="wrapper">
        
        <section class="pay">

            <h1>Registration successful.</h1><br>
            <h3>Registration number : <?php echo $_SESSION['student_id']; ?></h3><br>
            <p>Save your registration number for future use.</p><br>
            <p>Click <strong>Pay Now </strong> button for payment.</p><br>
        </section>
        <div class="pay-button">
            <input class="fbtn" type="button" name="pay" value="Pay Now" onclick="pay_now()">
        </div>
    
    </div>

    <script>
        function pay_now() {
            var options = {
            "key": "rzp_test_n4zWLwxdWYk4aJ", // Enter the Key ID generated from the Dashboard
            "amount": "25000", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
            "currency": "INR",
            "name": "Thinking Byte",
            "description": "Design Your Thought",
            "image": "extra-images/logo.jpg",
            // "order_id": "order_Ef80WJDPBmAeNt", //Pass the `id` obtained in the previous step
            // "account_id": "acc_Ef7ArAsdU5t0XL",
            "handler": function (response){
                // alert(response.razorpay_payment_id);
                // alert(response.razorpay_order_id);
                // alert(response.razorpay_signature)
                // console.log(response);
                jQuery.ajax({
                    type:'post',
                    url:'php/payment.php',
                    data:"payment_id="+response.razorpay_payment_id,
                    success:function(result){
                        window.location.href="thank_you.php";
                    }
                })
            }
            };
            var rzp1 = new Razorpay(options);
            // document.getElementById('rzp-button1').onclick = function(e){
                rzp1.open();
                // e.preventDefault();
            // }

        }

    
    </script>
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

</body>

</html>

