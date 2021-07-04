
<?php

    include 'connection.php';

    if(isset($_POST['studentLogin'])) {
        $email =  $_POST['email'];
        $password =  $_POST['pwd'];

        $emailSearch = "select * from user where email='$email' ";
        $query = mysqli_query($con, $emailSearch);

        $emailCount = mysqli_num_rows($query);

        if($emailCount) {
            $email_pass = mysqli_fetch_assoc($query);

            $db_Pass = $email_pass['password'];

            $_SESSION['username'] = $email_pass['username'];
            $_SESSION['email'] = $email_pass['email'];

            $pass_decode = password_verify($password, $db_Pass);

            if($pass_decode) {
                header('location:../home.php');
                ?>
                    <!-- <script>
                        alert("login.");
                        location.replace("home.php");
                        alert("login.......");
                    </script> -->
                <?php

            }else{
                $_SESSION['status'] = "Password incorrect.";
                $_SESSION['text'] = "";
                $_SESSION['status_code'] = "info";
                header('location:../index.php');
                ?>
                    <!-- <script> alert("Password incorrect.") </script> -->
                <?php
            }

        }else{

            $_SESSION['status'] = "Wrong email.";
            $_SESSION['text'] = "Use valid email.";
            $_SESSION['status_code'] = "info";
            header('location:../index.php');
            ?>
                <!-- <script> alert("email incorrect.") </script> -->
            <?php
        }


    }


?>
