
<?php
include 'connection.php';
        
if(isset($_POST['adminCreateAccount'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
    $password = mysqli_real_escape_string($con, $_POST['pwd']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpwd']);
    $admin_id = mysqli_real_escape_string($con, $_POST['adminID']);

    // echo $username;
    

    $pass = password_hash($password, PASSWORD_BCRYPT);
    $cpass = password_hash($cpassword, PASSWORD_BCRYPT);
    $id = password_hash($admin_id, PASSWORD_BCRYPT);
    

    $emailQuery = "select * from teacher where email='$email' ";
    $query = mysqli_query($con, $emailQuery);

    $emailCount = mysqli_num_rows($query);

    if($emailCount>0) {

            $_SESSION['status'] = "email is already exists.";
            $_SESSION['text'] = "";
                $_SESSION['status_code'] = "warning";
                header('location:../index.php');
                // echo $_SESSION['status'];

        ?>
            <!-- <script>
            
            swal("Poof! Your imaginary file has been deleted");
            alert("email exist.")  
                location.replace("index.php");
                
               
            </script> -->
        <?php
    }else{
        if($password == $cpassword) {
            $insertQuery = "insert into teacher(username, email, mobile, password, cpassword, id) value('$username','$email','$mobile','$pass','$cpass','$id') ";
            $iquery = mysqli_query($con, $insertQuery);
            //  echo $username;
            if($iquery){

                $_SESSION['status'] = "Registration successful.";
                $_SESSION['text'] = "Now you can login your account.";
                $_SESSION['status_code'] = "success";
                
                header('location:../index.php');

                 ?>
                    <!-- <script> 
                        alert("Registration successful.") ;
                        location.replace("index.php");
                        swal("Poof! Your imaginary file has been deleted!", {
                    icon: "success",
                });
                    </script> -->
                <?php
            }else{

                $_SESSION['status'] = "Registration failed.";
                $_SESSION['text'] = "";
                $_SESSION['status_code'] = "error";
                header('location:../index.php');

                ?>
                    <!-- <script> alert("Registration failed.") </script> -->
                    <!-- <script> 
                    alert("Registration failed.");
                        location.replace("index.php");
                        swal("Poof! Your imaginary file has been deleted!", {
                    icon: "error",
                });
                
                    </script> -->
                <?php
            }
        }else{

                $_SESSION['status'] = "conform password is not matching.";
                $_SESSION['text'] = "";
                $_SESSION['status_code'] = "warning";
                header('location:../index.php');

            ?>
                <!-- <script> alert("conform password is not matching.") </script> -->
                <!-- <script> 
                    location.replace("index.php");
                    swal("Poof! Your imaginary file has been deleted!", {
                    icon: "error",
                });
                alert("conform password is not matching.");
                </script> -->
            <?php
        }
    }
}


?>