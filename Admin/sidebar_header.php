<?php
    include("header.php");
?>
    <section id="admin">
        <input type="checkbox" id="check">
        <header>
            <label for="check">
                <i class="fas fa-bars" id="sidebar_btn"></i>
            </label>
            <div class="left-area">
                <h3>Ad<span>min</span></h3>
            </div>
            <div class="right-area">
                <a href="logout.php" class="logout_btn">Logout</a>
            </div>
        </header>
        <div class="sidebar">
            <center>
                <img src="../Images/GI.gif" class="admin_image" alt="">
                <h4>Admin</h4>
            </center>
            <a href="#"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
            <a href="#"><i class="fas fa-cog"></i><span>Components</span></a>
            <a href="#"><i class="fas fa-table"></i><span>Tables</span></a>
            <a href="services.php"><i class="fas fa-th"></i><span>Add service</span></a>
            <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
            <a href="#"><i class="fas fa-sliders-h"></i><span>Setting</span></a>
        </div>
        <div class="content">
            
        

