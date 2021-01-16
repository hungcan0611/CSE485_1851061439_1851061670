<?php
    $conn = mysqli_connect("localhost","root","","test_admin");
    if(!$conn){
        echo "Connection failed!";
    }
    mysqli_set_charset($conn,'UTF8');
?>