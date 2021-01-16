<?php
    include('../header.php');
    require "../config.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        mysqli_query($conn, "DELETE FROM services WHERE Serv_id='$id'");
        header("location: index.php");
    }
    include('../footer.php');
?>
