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
        function validate_phone($phone) {
            $filtered_phone_number = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
            $phone_to_check = str_replace("-", "", $filtered_phone_number);
            // if (strlen($phone_to_check) < 10 || strlen($phone_to_check) > 14) {
            if (strlen($phone_to_check) != 10 ) {
                return false;
            } 
            else {
                return true;
            }
        }
        
        $mobile = $_POST['mobile'];
        if(validate_phone($mobile)){

    

        $year = date("Y");
        $totalStudentQuery = " select * from student ";
        $query = mysqli_query($con, $totalStudentQuery);
        $totalStudents = mysqli_num_rows($query);
        $year = strval($year);
        $totalStudents = strval($totalStudents);
        $student_id = $year.$totalStudents;
        $_SESSION['student_id'] = $student_id;


        $name = $_POST['name'];
        $father_name = $_POST['fname'];
        $mother_name = $_POST['mname'];
        $guardian_name = $_POST['gname'];
        $occupation = $_POST['occupation'];
        $nationality = $_POST['nationality'];
        $d_state = $_POST['dstate'];
        $sex = $_POST['sex'];
        $dob = $_POST['dob'];
        // $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $religion = $_POST['religion'];
        $course = $_POST['course'];
        $_SESSION['course'] = $course;
        $caste = $_POST['caste'];
        $caste_certificate = $_FILES['casteCertificate'];
        $caste_certificate = upload_document($student_id."caste.pdf", $caste_certificate['tmp_name']);
        $p_status = "pending";

        // echo $caste_certificate;
        
        // $caste_certificate = file_get_contents($caste_certificate);
        // $caste_certificate = base64_encode($caste_certificate);

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
        

        $year = date("Y");
        $totalStudentQuery = " select * from student ";
        $query = mysqli_query($con, $totalStudentQuery);
        $totalStudents = mysqli_num_rows($query);
        $year = strval($year);
        $totalStudents = strval($totalStudents);
        $student_id = $year.$totalStudents; 


        $insertQueryStudent = "insert into student (id, name, father_name, mother_name, gurdian_name, occupation, nationality, domicile_state, sex, dob, mobile, religion, email, cast, cast_certificate, photo, signature, payment_status) values('$student_id','$name','$father_name','$mother_name','$guardian_name','$occupation','$nationality','$d_state',' $sex','$dob','$mobile','$religion','$email','$caste','$caste_certificate','$photo','$signature','$p_status')";

        $insertQueryAddress = "insert into address(student_id, village, po, ps, distric, pin, state, status) values('$student_id','$village','$po','$ps','$distric','$pin','$state','$status')";
        
        $insertQueryCaddress = "insert into address(student_id, village, po, ps, distric, pin, state, status) values('$student_id','$cvillage','$cpo','$cps','$cdistric','$cpin','$cstate','$cstatus')";
       
        $insertQueryAcademic = "insert into academic(student_id, class, board, institution, year, roll_no, registration_no, full_marks, obtained_marks, division, marks_sheet) values('$student_id','$class','$board','$institution',' $year','$roll','$registration','$fmarks','$omarks','$division','$marksSheet')";

        $insertQueryAcademic1 = "insert into academic(student_id, class, board, institution, year, roll_no, registration_no, full_marks, obtained_marks, division, marks_sheet) values('$student_id','$class1','$board1','$institution1',' $year1','$roll1','$registration1','$fmarks1','$omarks1','$division1','$marksSheet1')";

        $courseQuery = "select * from course where course_name='$course' ";
        $courseQuery = mysqli_query($con, $courseQuery);
        $courseQuery = mysqli_fetch_assoc($courseQuery);
        $course_id = $courseQuery['course_id'];

        $insertQueryEnroll = "insert into enroll(student_id, course_id) values('$student_id','$course_id')";
    ?>
    <?php
            $query = mysqli_query($con, $insertQueryStudent);
            $query = mysqli_query($con, $insertQueryAddress);
            $query = mysqli_query($con, $insertQueryCaddress);
            $query = mysqli_query($con, $insertQueryAcademic);
            $query = mysqli_query($con, $insertQueryAcademic1);
            $query = mysqli_query($con, $insertQueryEnroll);
            if($query) {

                $_SESSION['status'] = "Registration successful.";
                $_SESSION['text'] = "your Registration No. ".$student_id;
                $_SESSION['status_code'] = "success";
                header('location:../display.php');
                ?>
                    <!-- <script>
                        var msg = "Registration successful !\n your Registration No. ";
                        var reg = ""
                        alert(msg.concat(reg)) ;
                        location.replace("../display.php");
                     </script> -->
                <?php
            }else{
                ?>
                <script>alert(" Student Error ") </script>
            <?php     
            }
        }
        else{
            header('location:../admission-form.php');
        }
    }

?>