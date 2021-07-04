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
    <title>>> dashboard | Thinking Byte</title>

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
    <style>
        td{
            width: 15px;
        }
    </style>

</head>

<body>

    
    <?php
        include 'php/sweet-alert.php';
        
       
        // $student_id = $_SESSION['student_id'];
        $student_id = $_GET['id'];
        $studentQuery = "select * from student where id='$student_id' ";
        $studentQuery = mysqli_query($con, $studentQuery);
        $student = mysqli_fetch_assoc($studentQuery);

        $addressQuery = "select * from address where student_id='$student_id' ";
        $addressQuery = mysqli_query($con, $addressQuery);
        $address = mysqli_fetch_assoc($addressQuery);

        $academicQuery = "select * from academic where student_id='$student_id' ";
        $academicQuery = mysqli_query($con, $academicQuery);
        $academic = mysqli_fetch_assoc($academicQuery);

        $courseQuery = "select * from enroll where student_id='$student_id' ";
        $courseQuery = mysqli_query($con, $courseQuery);
        $courseQuery = mysqli_fetch_assoc($courseQuery);
        $course_id = $courseQuery['course_id'];
        $courseQuery = "select * from course where course_id='$course_id' ";
        $courseQuery = mysqli_query($con, $courseQuery);
        $course = mysqli_fetch_assoc($courseQuery);
        // $course_id = $courseQuery['course_id'];

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

    <div class="abc">
        <div class="form-header">
            <h1>T.P Varma College, Shikarpur, Narkatiaganj (West Champaran)</h1>
            <h3>Admission Form for BCA (Bachelor of Computer Application) Hons. </h2>
                <h5>(A Recognised T.D.C Vocational Course of <strong>B.R.A.Bihar University Muzaffarpur</strong>)</h5>
        </div>
        <div class="form">
            <form action="registration-form.php" name="regform" id="admissionform" method="POST" enctype="multipart/form-data" onsubmit='return validate_form()'>
                <section class="first-table">
                    <div class="firstHalf">
                        <table id="details">
                            <tr>
                                <td>Full Name : </td>
                                <td><?php echo $student['name']; ?></td>
                            </tr>
                            <tr>
                                <td>Father's Name : </td>
                                <td><?php echo $student['father_name']; ?></td>
                            </tr>
                            <tr>
                                <td>Mother's Name : </td>
                                <td><?php echo $student['mother_name']; ?></td>
                            </tr>
                            <tr>
                                <td>Guardian's Name : </td>
                                <td><?php echo $student['gurdian_name']; ?></td>
                            </tr>
                            <tr>
                                <td>Occupation : </td>
                                <td><?php echo $student['occupation']; ?></td>
                            </tr>
                            <tr>
                                <td>Nationality : </td>
                                <td><?php echo $student['nationality']; ?></td>
                            </tr>
                            <tr>
                                <td>Domicile State : </td>
                                <td><?php echo $student['domicile_state']; ?></td>
                            </tr>
                            <tr>
                                <td>Sex : </td>
                                <td><?php echo $student['sex']; ?></td>
                            </tr>
                            <tr>
                                <td>Date of Birth : </td>
                                <td><?php echo $student['dob']; ?></td>
                            </tr>
                            <tr>
                                <td>Permanen Address :</td>
                                <td>
                                    <?php  echo $address['village']."  ".$address['po']."\n".$address['ps']."  ".$address['distric']."\n".$address['pin']."  ".$address['state']; ?>
                                </td>

                            </tr>
                            <tr>
                                <td>Current Address :</td>
                                
                                <td>
                                    <?php  echo $address['village']."  ".$address['po']."\n".$address['ps']."  ".$address['distric']."\n".$address['pin']."  ".$address['state']; ?>
                                </td>

                            </tr>
                            
                            <tr>
                                <td>Mobile Number : </td>
                                <td><?php echo $student['mobile']; ?></td>
                            </tr>
                            <tr>
                                <td>E-mail ID : </td>
                                <td><?php echo $_SESSION['email']; ?></td>
                            </tr>
                            <tr>
                                <td>Religion : </td>
                                <td><?php echo $student['religion']; ?></td>
                            </tr>
                            <tr>
                                <td>Course : </td>
                               
                                <!-- <td><?php echo $_SESSION['course']; ?></td> -->
                                <td><?php echo $course['course_name']; ?></td>
                            </tr>
                            <tr>
                                <td>Caste : </td>
                                
                                <td><?php echo $student['cast']; ?></td>
                            </tr>
                            <tr>
                                <td>Payment : </td>
                                
                                <td><?php echo $student['payment_status']; ?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="secondHalf">

                        <!-- upload photo -->
                        
                        <img src=" php/<?php echo $student['photo']; ?>" alt="">
                       
                    </div>
                    <!-- upload photo -->

                    <!-- upload Signature -->
                    <div class="thirdHalf">
                        
                        <img src=" php/<?php echo $student['signature']; ?>" alt="">
                        
                    </div>
                    <!-- upload Signature -->

                </section>



                <div class="form-table">
                    <h2>Academic Qualification </h2>
                    <div style="overflow-x:auto;">
                        <table id="aducation">
                            <thead>
                                <tr>
                                    <th>Examination</th>
                                    <th>Name of Board/ University</th>
                                    <th>Name of Institution</th>
                                    <th>Year</th>
                                    <th>Roll No.</th>
                                    <th>Registration No./Year</th>
                                    <th>Full Marks</th>
                                    <th>Obtained Marks</th>
                                    <th>Division</th>
                                    <!-- <th>Upload Marks Sheet</th> -->
                                </tr>
                            </thead>        
                            <tbody>
                                <tr>
                                    <td>10th</th>
                                    <td><?php echo $academic['board']; ?></td>
                                    <td><?php echo $academic['institution']; ?></td>
                                    <td><?php echo $academic['year']; ?></td>
                                    <td><?php echo $academic['roll_no']; ?></td>
                                    <td><?php echo $academic['registration_no']; ?></td>
                                    <td><?php echo $academic['full_marks']; ?></td>
                                    <td><?php echo $academic['obtained_marks']; ?></td>
                                    <td><?php echo $academic['division']; ?></td>
                                    <!-- <td><input class="long-text-box" type="file" id="marksSheet10" name="marksSheet"
                                            onchange="fun(this)" required></td> -->
                                </tr>
                                <tr>
                                    <td>12th</th>
                                    <td><?php echo $academic['board']; ?></td>
                                    <td><?php echo $academic['institution']; ?></td>
                                    <td><?php echo $academic['year']; ?></td>
                                    <td><?php echo $academic['roll_no']; ?></td>
                                    <td><?php echo $academic['registration_no']; ?></td>
                                    <td><?php echo $academic['full_marks']; ?></td>
                                    <td><?php echo $academic['obtained_marks'] ?></td>
                                    <td><?php echo $academic['division']; ?></td>
                                    <!-- <td><input class="long-text-box" type="file" id="marksSheet12" name="marksSheet1"
                                            onchange="fun(this)" required></td> -->
                                </tr>
                            </tbody>
                    </div>
                    </table>
                </div>
                <div class="fotor">
                    <!-- <input class="fbtn" type="button" name="clear" value="edit" onclick="allClear()"> -->
                    <!-- <a href="edit-form.php?id=" class="fbtne">Edit</a> -->
                    <!-- <a href="payment.php?id=" class="fbtne">Payment</a> -->
                    <!-- <input class="fbtn" type="submit" name="submit" value="Submit" > -->
                </div>

            </form>
        </div>



    </div>
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

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <script type="text/javascript" src="script/upload-pic.js"></script>
    <script type="text/javascript" src="script/upload-sig.js"></script>
    <!-- <script type="text/javascript" src="script/clear-submit.js"></script> -->
    <script type="text/javascript" src="script/validate-form.js"></script>

</body>

</html>

