<?php
    include 'connection.php';

    
    if(isset($_POST['submit'])) {

        function upload_img($fileName, $tmp_file) {

            $destinationFile = 'upload_img/'.$fileName;
            move_uploaded_file($tmp_file, $destinationFile);
            return $destinationFile;
        }
        function upload_document($fileName, $tmp_file) {

            $destinationFile = 'upload_document/'.$fileName;
            move_uploaded_file($tmp_file, $destinationFile);
            return $destinationFile;
        }


        
        $student_id = $_SESSION['student_id'] ;


        $name = $_POST['name'];
        $father_name = $_POST['fname'];
        $mother_name = $_POST['mname'];
        $guardian_name = $_POST['gname'];
        $occupation = $_POST['occupation'];
        $nationality = $_POST['nationality'];
        $d_state = $_POST['dstate'];
        $sex = $_POST['sex'];
        $dob = $_POST['dob'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $religion = $_POST['religion'];
        $course = $_POST['course'];
        $_SESSION['course'] = $course;
        $caste = $_POST['caste'];
        $caste_certificate = $_FILES['casteCertificate'];
        $caste_certificate = upload_document($student_id."caste.pdf", $caste_certificate['tmp_name']);
        $p_status = "pending";

        $photo = $_FILES['photo'];
        $photo = upload_img($student_id."pic.jpg", $photo['tmp_name']);
        // $photo = file_get_contents($photo);
        // $photo = base64_encode($photo);
        $signature = $_FILES['signature'];
        // $signature = upload_img($signature['name'], $signature['tmp_name']);
        $signature = upload_img($student_id."sig.jpg", $signature['tmp_name']);
        // $signature = file_get_contents($signature);
        // $signature = base64_encode($signature);

        $village = $_POST['village'];
        $po = $_POST['post'];
        $ps = $_POST['policeStation'];
        $distric = $_POST['distric'];
        $pin = $_POST['pin'];
        $state = $_POST['state'];
        $status = "permanent address";
    

        $cvillage = $_POST['cvillage'];
        $cpo = $_POST['cpost'];
        $cps = $_POST['cpoliceStation'];
        $cdistric = $_POST['cdistric'];
        $cpin = $_POST['cpin'];
        $cstate = $_POST['cstate'];
        $cstatus = "current address";

        $class = "10th";
        $board = $_POST['board'];
        $institution = $_POST['institution'];
        $year = $_POST['year'];
        $roll = $_POST['roll'];
        $registration = $_POST['registration'];
        $fmarks = $_POST['fmarks'];
        $omarks = $_POST['omarks'];
        $division = $_POST['division'];

        $marksSheet = $_FILES['marksSheet'];
        $marksSheet = upload_document($student_id."doc10.pdf", $marksSheet['tmp_name']);
        // $marksSheet = file_get_contents($marksSheet);
        // $marksSheet = base64_encode($marksSheet);

        $class1 = "12th";
        $board1 = $_POST['board1'];
        $institution1 = $_POST['institution1'];
        $year1 = $_POST['year1'];
        $roll1 = $_POST['roll1'];
        $registration1 = $_POST['registration1'];
        $fmarks1 = $_POST['fmarks1'];
        $omarks1 = $_POST['omarks1'];
        $division1 = $_POST['division1'];
        $marksSheet1 = $_FILES['marksSheet1'];
        $marksSheet1 = upload_document($student_id."doc12.pdf", $marksSheet1['tmp_name']);
        // $marksSheet1 = file_get_contents($marksSheet1);
        // $marksSheet1 = base64_encode($marksSheet1);
        

        // $year = date("Y");
        // $totalStudentQuery = " select * from student ";
        // $query = mysqli_query($con, $totalStudentQuery);
        // $totalStudents = mysqli_num_rows($query);
        // $year = strval($year);
        // $totalStudents = strval($totalStudents);
        // $student_id = $year.$totalStudents; 


        $updateQueryStudent = "UPDATE `student` SET `id`='$student_id',`name`='$name',`father_name`='$father_name',`mother_name`='$mother_name',`gurdian_name`='$guardian_name',`occupation`='$occupation',`nationality`='$nationality',`domicile_state`='$d_state',`sex`='$sex',`dob`='$dob',`mobile`='$mobile',`religion`='$religion',`email`='$email',`cast`='$caste',`cast_certificate`='$caste_certificate',`photo`='$photo',`signature`='$signature',`payment_status`='$p_status' WHERE id='$student_id'";

        $updateQueryAddress = " update address set student_id='$student_id',village='$village',po='$po',ps='$ps',distric='$distric', pin='$pin',state='$state',status='$status' where student_id='$student_id' and status='$status'";
        
        $updateQueryCaddress = " update address set student_id='$student_id',village='$cvillage',po='$cpo',ps='$cps',distric='$cdistric', pin='$cpin',state='$cstate',status='$cstatus' where student_id='$student_id' and status='$cstatus'";
       
        $updateQueryAcademic = " update academic set student_id='$student_id', class='$class', board='$board', institution='$institution', year='$year', roll_no='$roll', registration_no='$registration', full_marks='$fmarks', obtained_marks='$omarks', division='$division', marks_sheet='$marksSheet' where student_id='$student_id' and class='$class' ";

        $updateQueryAcademic1 = " update academic set student_id='$student_id', class='$class1', board='$board1', institution='$institution1', year='$year1', roll_no='$roll1', registration_no='$registration1', full_marks='$fmarks1', obtained_marks='$omarks1', division='$division1', marks_sheet='$marksSheet1' where student_id='$student_id' and class='$class1' ";

        $courseQuery = "select * from course where course_name='$course' ";
        $courseQuery = mysqli_query($con, $courseQuery);
        $courseQuery = mysqli_fetch_assoc($courseQuery);
        $course_id = $courseQuery['course_id'];



        $updateQueryEnroll = "update enroll set student_id='$student_id', course_id='$course_id' where student_id='$student_id'";
    ?>
    <?php
            $query = mysqli_query($con, $updateQueryStudent);
            
            $query = mysqli_query($con, $updateQueryAddress);
            $query = mysqli_query($con, $updateQueryCaddress);
            $query = mysqli_query($con, $updateQueryAcademic);
            $query = mysqli_query($con, $updateQueryAcademic1);
            $query = mysqli_query($con, $updateQueryEnroll);
            if($query) {

                $_SESSION['status'] = "Edit successful.";
                $_SESSION['text'] = "your Registration No. ".$student_id;
                $_SESSION['status_code'] = "success";
                header('location:../home.php');
                ?>
                    <!-- <script>
                        var msg = "Registration successful.. !\n your Registration No. ";
                        var reg = ""
                        alert(msg.concat(reg)) ;
                        location.replace("../home.php");
                     </script> -->
                <?php
            }else{
                ?>
                <script>alert("  Error ") </script>
            <?php     
            }
    }

?>