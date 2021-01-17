<?php
    include('../header.php');
    require "../config.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        mysqli_query($conn, "DELETE FROM about_us WHERE au_id='$id'");
        header("location: index.php");
    }
    include('../footer.php');
?>
