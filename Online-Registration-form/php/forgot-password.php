
<?php

include 'connection.php';

if(isset($_POST['fpassword'])) {
    $email =  $_POST['email'];

    $emailSearch = "select * from user where email='$email' ";
    $query = mysqli_query($con, $emailSearch);

    $emailCount = mysqli_num_rows($query);
    if($emailCount) {
        $userdata = mysqli_fetch_assoc($query);

        $username = $userdata['username'];

        $subject = "Password Reset";
        $body = "Hi, $username. Click here to reset your password
        http://localhost/Learning-Management-University-Website/reset-password.php?email=$email";
        
        $sender_email = "From: rohit3888kumar@gmail.com";
        echo $email;
        if(mail($email, $subject, $body, $sender_email)) {
            $_SESSION['status'] = "Check your mail to reset your password ";
            $_SESSION['text'] = $email;
            $_SESSION['status_code'] = "success";
            header('location:../index.php');
        }
        else{
            $_SESSION['status'] = "email sending failed... ";
            $_SESSION['text'] = "";
            $_SESSION['status_code'] = "error";
        //    echo "email sending failed...";
            header('location:../index.php');
        }

    }
    else {
        $_SESSION['status'] = "Email not found. ";
        $_SESSION['text'] = $email;
        $_SESSION['status_code'] = "warning";
        echo "Email not found.";
        header('location:../index.php');
    }


}


?>
