<?php
// session_start();
// echo "hello";
    if(isset($_SESSION['status']) && $_SESSION['status'] != '') {
        // echo "hii";
        ?>
            <script>
                swal({
                    title: "<?php echo $_SESSION['status'];?>",
                    text: "<?php echo $_SESSION['text'];?>",
                    icon: "<?php echo $_SESSION['status_code'];?>",
                    button: "Ok...Done",
                })
             </script>
        <?php 
        
        unset($_SESSION['status']);
        unset($_SESSION['text']);
        unset($_SESSION['status_code']);
        unset($_SESSION['msg']);

    }
?>