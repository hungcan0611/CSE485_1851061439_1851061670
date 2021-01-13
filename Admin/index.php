<?php
    include("header.php");
?>
<section id="login">
    <form action="login.php" method="POST">
        <h2><b>LOGIN</b></h2>
        <?php if(isset($_GET['error'])){ ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label>Username</label>
        <input type="text" name="username" placeholder="Username"><br>
        <label>Password</label>
        <input type="password" name="password" placeholder="Password"><br>
        <button type="submit">Login</button>
    </form>
</section>
    
<?php
    include("footer.php");
?>