<?php
    $conn = mysqli_connect("localhost","root","","test");
    if(!$conn){
        echo "Connection failed!";
    }
    mysqli_set_charset($conn,'UTF8');
?>