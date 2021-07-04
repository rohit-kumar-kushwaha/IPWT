<?php

    include 'connection.php';
    echo "hii";
    if(isset($_POST['payment_id'])){
        $payment_id = $_POST['payment_id'];
        // $student_id = 20210;
        // echo $student_id;
        $student_id = $_SESSION['student_id'];
        $amount = 250;
        $date = date('Y-m-d h:i:s');

        mysqli_query($con, "update student set payment_status='complete' where id='$student_id'");
        mysqli_query($con, "insert into payment(student_id,payment_id,amount,date) values('$student_id','$payment_id','$amount','$date')");
    }

?>
