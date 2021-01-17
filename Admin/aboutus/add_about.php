<?php
    session_start();
    if(isset($_SESSION['username'])){
        require "../config.php";
        include("../sidebar_header.php");
        if(isset($_POST['submit'])){
            $status = "error";
            if(!empty($_POST["content"])){
                $content = $_POST["content"];
                $sql = "INSERT INTO about_us(au_content) VALUES ('$content')";
                $insert = mysqli_query($conn, $sql);
                if($insert){
                    $status = 'success';
                    $statusMsg = "Add content successed";
                }else{
                    $statusMsg = "Add content failed. Please try again.";
                }
            }else{
                $statusMsg = "Please enter content.";
            }
        }
        
?>
<div class="container">
    <h1>Add About Content</h1>
    <?php
        if(!empty($statusMsg)){
    ?>
        <p class="status <?php echo $status; ?>" style="color: red;"><?php echo $statusMsg?></p>
    <?php
        }
    ?>
    <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label>Content</label>
            <input type="text" class="form-control" name="content" >
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" name = "submit">Add</button>
        </div>
    </form>
</div>
<?php
        include "../sidebar_footer.php";
    }else{
        header("location: ../index.php");
    exit();
    }
?>