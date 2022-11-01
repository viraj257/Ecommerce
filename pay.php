<?php
    
    require './includes/common.php';

    
        $user_id = $_SESSION["id"];
        $pay = $_POST['pay'];
        $qan="INSERT INTO payment(user_id, pay, status) VALUES('$user_id', '$pay', 'done')";
        $query_result = mysqli_query($conn, $qan);

        header("location: online.php");

    
?>