<?php
    $conn = mysqli_connect("localhost", "id18479146_viraj", "Aryabhata@001", "id18479146_newstore") or die(mysqli_error($conn));


    if(!isset($_SESSION)){
        session_start();
    }
?>