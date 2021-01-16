<?php
    include("header.php");
?>
    <section id="admin">
        <div class="wrapper">
            <input type="checkbox" id="check">
            <div class="header">
                <div class="header-menu">
                    <div class="title-admin">Ad<span>min</span></div>
                    <!--<div class="sidebar-btn" id="sidebar-check" for="check">
                        <i class="fas fa-bars"></i>
                    </div>-->
                    <label for="check" class="sidebar-btn">
                        <i class="fas fa-bars" id="sidebar-btn"></i>
                    </label>
                    <ul>
                        <li><a href="logout.php"><i class="fas fa-power-off"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="sidebar">
                <div class="sidebar-menu">
                    <center class="profile">
                        <img src="../Images/GI.gif" alt="">
                        <p>Admin</p>
                    </center>
                    <li class="item" id="profile">
                        <a href="#profile" class="menu-btn">
                            <i class="fas fa-concierge-bell"></i><span>Services<i class="fas fa-chevron-down drop-down"></i></span>
                        </a>
                        <div class="sub-menu">
                            <a href="services.php"><i class="fas fa-folder-plus"></i><span>Add</span></a>
                            <a href="#"><i class="fas fa-list"></i><span>List</span></a>
                        </div>
                    </li>
                    <li class="item" id="message">
                        <a href="#message" class="menu-btn">
                            <i class="fas fa-concierge-bell"></i><span>Services<i class="fas fa-chevron-down drop-down"></i></span>
                        </a>
                        <div class="sub-menu">
                            <a href="services.php"><i class="fas fa-folder-plus"></i><span>Add</span></a>
                            <a href="#"><i class="fas fa-edit"></i><span>Edit</span></a>
                            <a href="#"><i class="fas fa-folder-minus"></i><span>Delete</span></a>
                        </div>
                    </li>
                
                </div>
            </div>
            <div class="main-container">
            
            
        
            
        

