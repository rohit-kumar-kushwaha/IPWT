<?php
    include 'php/connection.php';
    // session_start();
    if(!isset($_SESSION['username'])) {
        header('location:index.php');
    }

?>

<!DOCTYPE html>
<html lang="en">

<!-- shop-grid23:10  -->

<head>
    <!-- <script language="javascript" type="text/javascript">
        window.history.forward();
    </script> -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>>> Edit form | Thinking Byte</title>

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

    <style>
        .fbtne{
            /* width: 20px; */
            width: 85px;
            background-color: #e756ab;
            color: white;
            border-radius: 7px;
            /* border: none; */
            padding: 5px 25px;
            font-size: 18px;
        }
        input[type="submit"]{
            /* width: 20px; */
            width: 85px;
            background-color: #e756ab;
            color: white;
            border-radius: 7px;
            /* border: none; */
            padding: 3px;
            font-size: 18px;
            border: antiquewhite;
        }

    </style>
    
    
</head>

<body>

    <?php

       
    //    $student_id = "20210";
       $student_id = $_SESSION['student_id'];
       $studentQuery = "select * from student where id='$student_id' ";
       $studentQuery = mysqli_query($con, $studentQuery);
       $student = mysqli_fetch_assoc($studentQuery);

       $addressQuery = "select * from address where student_id='$student_id' ";
       $addressQuery = mysqli_query($con, $addressQuery);
       $address = mysqli_fetch_assoc($addressQuery);

       $academicQuery = "select * from academic where student_id='$student_id' ";
       $academicQuery = mysqli_query($con, $academicQuery);
       $academic = mysqli_fetch_assoc($academicQuery);
       
    //    echo $student['photo'];
    //    $a = "upload_img/20210pic.jpg";

   ?>



<!-- <input type="file" id="upload_file" name="photo" value="C:/xampp\htdocs/Learning-Management-University-Website/upload_img/20210pic.jpg" required> -->

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

    <div class="abc">
        <div class="form-header">
            <h1>T.P Varma College, Shikarpur, Narkatiaganj (West Champaran)</h1>
            <h3>Admission Form for BCA (Bachelor of Computer Application) Hons. </h2>
                <h5>(A Recognised T.D.C Vocational Course of <strong>B.R.A.Bihar University Muzaffarpur</strong>)</h5>
        </div>
        <div class="form">
            <form action="php/edit.php" name="regform" id="admissionform" method="POST"
                enctype="multipart/form-data" onsubmit='return validate_form()'>
                <section class="first-table">
                    <div class="firstHalf">
                        <table id="details">
                            <tr>
                                <td>Full Name : </td>
                                <td><input type="text" id="na" name="name" value="<?php echo $student['name'];?>"
                                        required></td>
                            </tr>
                            <tr>
                                <td>Father's Name : </td>
                                <td><input type="text" name="fname" value="<?php echo $student['father_name'];?>"
                                        required></td>
                            </tr>
                            <tr>
                                <td>Mother's Name : </td>
                                <td><input class="" type="text" name="mname"
                                        value="<?php echo $student['mother_name'];?>" required></td>
                            </tr>
                            <tr>
                                <td>Guardian's Name : </td>
                                <td><input class="form-text-box" type="text" name="gname"
                                        value="<?php echo $student['gurdian_name'];?>" required></td>
                            </tr>
                            <tr>
                                <td>Occupation : </td>
                                <td><input class="form-text-box" type="text" name="occupation"
                                        value="<?php echo $student['occupation'];;?>" required></td>
                                
                            </tr>
                            <tr>
                                <td>Nationality : </td>
                                <td><input class="form-text-box" type="text" name="nationality"
                                        value="<?php echo $student['nationality'];?>" required></td>
                            </tr>
                            <tr>
                                <td>Domicile State : </td>
                                <td><input class="form-text-box" type="text" name="dstate"
                                        value="<?php echo $student['domicile_state'];?>" required></td>
                            </tr>
                            <tr>
                                <td>Sex : </td>
                                <td><select name="sex" id="sex" required>
                                        <option value="" selected></option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Date of Birth : </td>
                                <td><input type="date" name="dob" value="<?php echo $student['dob'];?>" required></td>
                            </tr>
                            <tr>
                                <td>Permanen Address :</td>
                                <td>
                                    <div class="address">
                                        <input type="text" name="village" id="vill" placeholder="Village/Town"
                                            value="<?php echo $address['village']; ?>" required>
                                        <input type="text" name="post" id="post" placeholder="Post Office"
                                            value="<?php echo $address['po'];?>">

                                    </div>
                                    <div class="address mid-add">
                                        <input type="text" name="policeStation" id="ps" placeholder="Pollice Station"
                                            value="<?php echo $address['ps'];?>" required>
                                        <input type="text" name="distric" id="dist" placeholder="Distric"
                                            value="<?php echo $address['distric'];?>" required>
                                    </div>
                                    <div class="address last-add">
                                        <input type="text" name="pin" id="pin" placeholder="Pin code"
                                            value="<?php echo $address['pin'];?>" required>
                                        <input type="text" name="state" id="state" placeholder="State"
                                            value="<?php echo $address['state'];?>" required>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td>Current Address :</td>

                                <td>
                                    <div class="caddress ">
                                        <input type="text" name="cvillage" id="vill" placeholder="Village/Town"
                                            value="<?php echo $address['village']; ?>" required>
                                        <input type="text" name="cpost" id="post" placeholder="Post Office"
                                            value="<?php echo $address['po'];?>">

                                    </div>
                                    <div class="caddress">
                                        <input type="text" name="cpoliceStation" id="ps" placeholder="Pollice Station"
                                            value="<?php echo $address['ps'];?>" required>
                                        <input type="text" name="cdistric" id="dist" placeholder="Distric"
                                            value="<?php echo $address['distric'];?>" required>
                                    </div>
                                    <div class="caddress">
                                        <input type="text" name="cpin" id="pin" placeholder="Pin code"
                                            value="<?php echo $address['pin'];?>" required>
                                        <input type="text" name="cstate" id="state" placeholder="State"
                                            value="<?php echo $address['state'];?>" required>
                                    </div>
                                </td>

                            </tr>

                            <tr>
                                <td>Mobile Number : </td>
                                <td><input type="text" id="mobile" name="mobile"
                                        value="<?php echo $student['mobile'];?>" required></td>
                            </tr>
                            <tr>
                                <td>E-mail ID : </td>
                                <td><input type="email" name="email" required value="<?php echo $_SESSION['email']; ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Religion : </td>
                                <td><input type="text" name="religion" value="<?php echo $student['religion'];?>"
                                        required></td>
                            </tr>
                            <tr>
                                <td>Course : </td>

                                <td>
                                    <select name="course" id="course" required>
                                        <option value="" selected></option>
                                        <option value="BCA">BCA</option>
                                        <option value="BBA">BBA</option>

                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Caste : </td>

                                <td>
                                    <select name="caste" id="cast">
                                        <option value="" selected></option>
                                        <option value="general">General</option>
                                        <option value="EWS">EWS</option>
                                        <option value="BC2">BC II</option>
                                        <option value="BC1">BC I</option>
                                        <option value="SC">SC</option>
                                        <option value="ST">ST</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Caste Certificate : </td>
                                <td><input type="file" id="caste" name="casteCertificate" onchange="fun(this)" required>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="secondHalf">

                        <!-- upload photo -->

                        <main class="main_full">
                            <div class="containt">
                                <div class="panel">
                                    <div class="button_outer">
                                        <div class="btn_upload">
                                            <input type="file" id="upload_file" name="photo" value="<?php echo $student['photo']; ?>" required>
                                            Upload Image
                                        </div>
                                        <div class="processing_bar"></div>
                                        <div class="success_box"></div>
                                    </div>
                                </div>
                                <div class="error_msg"></div>
                                <div class="uploaded_file_view" id="uploaded_view" >
                                
                                    <span class="file_remove">X</span>
                                </div>
                            </div>
                        </main>

                    </div>
                    <!-- upload photo -->

                    <!-- upload Signature -->
                    <div class="thirdHalf">

                        <main class="main_full_sig">
                            <div class="containt_sig">
                                <div class="panel_sig">
                                    <div class="button_outer_sig">
                                        <div class="btn_upload_sig">
                                            <input type="file" id="upload_file_sig" name="signature" required>
                                            Upload Signature
                                        </div>
                                        <div class="processing_bar_sig"></div>
                                        <div class="success_box_sig"></div>
                                    </div>
                                </div>
                                <div class="error_msg_sig"></div>
                                <div class="uploaded_file_view_sig" id="uploaded_view_sig">
                                    <span class="file_remove_sig">X</span>
                                </div>
                            </div>
                        </main>

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
                                    <th>Upload Marks Sheet</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>10th</th>
                                    <td><input class="long-text-box" type="text" name="board"
                                            value="<?php echo $academic['board'];?>" required></td>
                                    <td><input class="long-text-box" type="text" name="institution"
                                            value="<?php echo $academic['institution'];?>" required></td>
                                    <td><input class="sort-text-box" type="number" name="year"
                                            value="<?php echo $academic['year'];?>" required></td>
                                    <td><input class="sort-text-box" type="number" name="roll"
                                            value="<?php echo $academic['roll_no'];?>" required></td>
                                    <td><input class="sort-text-box" type="text" name="registration"
                                            value="<?php echo $academic['registration_no'];?>" required></td>
                                    <td><input class="sort-text-box" type="number" name="fmarks"
                                            value="<?php echo $academic['full_marks'];?>" required></td>
                                    <td><input class="sort-text-box" type="number" name="omarks"
                                            value="<?php echo $academic['obtained_marks'];?>" required></td>
                                    <td><input class="sort-text-box" type="text" name="division"
                                            value="<?php echo $academic['division'];?>" required></td>
                                    <td><input class="long-text-box" type="file" id="marksSheet10" name="marksSheet"
                                            onchange="fun(this)" required></td>
                                </tr>
                                <tr>
                                    <td>12th</th>
                                    <td><input class="long-text-box" type="text" name="board1"
                                            value="<?php echo $academic['board'];?>" required></td>
                                    <td><input class="long-text-box" type="text" name="institution1"
                                            value="<?php echo $academic['institution'];?>" required></td>
                                    <td><input class="sort-text-box" type="number" name="year1"
                                            value="<?php echo $academic['year'];?>" required></td>
                                    <td><input class="sort-text-box" type="number" name="roll1"
                                            value="<?php echo $academic['roll_no'];?>" required></td>
                                    <td><input class="sort-text-box" type="text" name="registration1"
                                            value="<?php echo $academic['registration_no'];?>" required></td>
                                    <td><input class="sort-text-box" type="number" name="fmarks1"
                                            value="<?php echo $academic['full_marks'];?>" required></td>
                                    <td><input class="sort-text-box" type="number" name="omarks1"
                                            value="<?php echo $academic['obtained_marks'];?>" required></td>
                                    <td><input class="sort-text-box" type="text" name="division1"
                                            value="<?php echo $academic['division'];?>" required></td>
                                    <td><input class="long-text-box" type="file" id="marksSheet12" name="marksSheet1"
                                            onchange="fun(this)" required></td>
                                </tr>
                            </tbody>
                    </div>
                    </table>
                </div>
                <div class="fotor">
                    <!-- <input class="fbtn" type="button" name="clear" value="Clear" onclick="allClear()"> -->
                    <!-- <a href="update.php?id=" class="fbtne">Edit</a> -->
                    <input class="fbtn" type="submit" name="submit" value="Submit">
                    <!-- <input class="fbtn" type="submit" name="submit" value="Submit" > -->
                    <!-- <a href="display.php" class="fbtn">Submit</a> -->
                </div>

            </form>
        </div>



    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <script type="text/javascript" src="script/upload-pic.js"></script>
    <script type="text/javascript" src="script/upload-sig.js"></script>
    <!-- <script type="text/javascript" src="script/clear-submit.js"></script> -->
    <script type="text/javascript" src="script/validate-form.js"></script>

</body>

</html>