<?php
     include 'php/connection.php';
     

    //session_start();
    if(!isset($_SESSION['username'])) {
        header('location:index.php');
    }
    // echo $_SESSION['status'];
    // echo $_SESSION['text'];
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>>> dashboard | Thinking Byte</title>

    <!-- Css Files -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/flaticon.css" rel="stylesheet">
    <link href="css/slick-slider.css" rel="stylesheet">
    <link href="css/prettyphoto.css" rel="stylesheet">
    <link href="build/mediaelementplayer.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="style1.css" rel="stylesheet">
    <link href="css/color.css" rel="stylesheet">
    <link href="css/color-two.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <style>
        table{
    border-collapse: collapse;
    background-color: #fff;
    box-shadow: 0 10px 20px 0 rgba(0,0,0,.03);
    border-radius: 10px;
    margin: auto;
}


    </style>

</head>

<body>
    <?php
        include 'php/sweet-alert.php';
    ?>

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
                            <li><a href="logout.php">LogOut</a></li>
                            <!-- <li><a href="#" data-toggle="modal" data-target="#ModalLoginTwo">Login as Instructor</a></li> -->
                            <li><a href="#" data-toggle="modal" data-target="">
                                    <?php echo $_SESSION['username']; ?>
                                </a></li>
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
                                        <li><a href="admin-dashboard.php">Dashboard</a>
                                            
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

    <div class="main-div">
        <h2>List of candidates</h2>
        <div class="table-responsive center-div">
            <table>
                <thead>
                    <tr>
                        <!-- <th>SL No.</th> -->
                        <th>ID</th>
                        <th>Name</th>
                        <th>Payment</th>
                        <th colspan="2">Operation</th>
                        <!-- <th >Operation</th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $selectQuery = "select * from student";
                        $query = mysqli_query($con, $selectQuery);
                        $num = mysqli_num_rows($query);
                        while($res = mysqli_fetch_array($query)){
                            ?>
                                <tr>
                                    <td><?php echo $res['id']; ?></td>
                                    <td><?php echo $res['name']; ?></td>
                                    
                                    <form action="php/admin-dashboard.php?id=<?php echo $res['id'];?>" method="POST">
                                        <td>
                                            <?php
                                                if($res['payment_status']=='complete'){
                                                    ?>
                                                        <!-- <select name="payment_status" id="cast">
                                                            <option value="" selected><?php echo $res['payment_status']; ?></option>
                                                            <option value="pending">pending</option>
                                                        </select> -->
                                                        <?php echo $res['payment_status']; ?>
                                                    <?php
                                                }else{
                                                    ?>
                                                        <select name="payment_status" id="cast">
                                                        <option value="complete">complete</option>
                                                            <option value="" selected><?php echo $res['payment_status']; ?></option>
                                                            
                                                        </select>
                                                    <?php
                                                }
                                            ?>

                                            

                                        </td>
                                        <td><a href="dashboard.php?id=<?php echo $res['id'];?> " class="fbtne">View</a></td>
                                            <?php
                                                if($res['payment_status']=='complete'){
                                                    ?>
                                                        <!-- <td><input class="fbtn" style="border:none" type="submit" name="none" value="Update" ></td> -->
                                                        <td><a  class="fbtne">Update</a></td>
                                                    <?php
                                                }else{
                                                    ?>
                                                        <td><input class="fbtn" style="border:none" type="submit" name="update" value="Update" ></td>
                                                    <?php
                                                }
                                            ?>
                                        <!-- <td><input class="fbtn" style="border:none" type="submit" name="update" value="Update" ></td> -->
                                        <!-- <td><input class="fbtn" style="border:none" type="submit" name="update" value="Update" ></td> -->
                                    </form>
                                    
                                    <!-- <td><a href="edit-form.php?id=<?php echo $res['id'];?>"><i class="far fa-save" aria-hidden="true"></i></a></td> -->
                                    <!-- <td><a href=""><i class="fas fa-trash" aria-hidden="true"></i></a></td> -->
                                    
                                </tr>
                            <?php


                        }
                    ?>


                    
                </tbody>
            </table>

        </div>
    
    </div>



</body>

</html>