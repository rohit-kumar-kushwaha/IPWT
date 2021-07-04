<?php
    include 'connection.php';
    if(isset($_POST['update'])){
        if(isset($_GET['id'])){
            $student_id = $_GET['id'];
            echo "hii";
            echo $student_id;
        
        $status = $_POST['payment_status'];
        $payment_id = "admin";


        $amount = 250;
        $date = date('Y-m-d h:i:s');

        mysqli_query($con, "update student set payment_status='$status' where id='$student_id'");
        mysqli_query($con, "insert into payment(student_id,payment_id,amount,date) values('$student_id','$payment_id','$amount','$date')");
        $_SESSION['status'] = "Payment Status updated";
        $_SESSION['text'] = "";
        $_SESSION['status_code'] = "success";
        header('location:../admin-dashboard.php');
        
        }
    }

    if(isset($_POST['none'])){
        $_SESSION['status'] = "Unable to update this payment sataus";
        $_SESSION['text'] = "";
        $_SESSION['status_code'] = "warning";
        $_SESSION['x'] = "warning";

        header('location:../admin-dashboard.php');

    }

?>