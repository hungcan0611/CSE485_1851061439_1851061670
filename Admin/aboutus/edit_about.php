<?php
    session_start();
    if(isset($_GET['id'])){
        require "../config.php";
        include("../sidebar_header.php");
        $id = $_GET['id'];
        $result = mysqli_query($conn, "SELECT * FROM about_us WHERE au_id = '$id'");
        if(mysqli_num_rows($result) === 1 ){
            $about = mysqli_fetch_array($result);
            $content = $about['au_content'];
        }

        if(isset($_POST['update'])){
            $status = "error";
            if(!empty($_POST["content"])){
                $content = $_POST["content"];
                $sql = "UPDATE about_us SET au_content = '$content' WHERE au_id = '$id'";
                $insert = mysqli_query($conn, $sql);
                if($insert){
                    $status = 'success';
                    $statusMsg = "Update content successed";
                }else{
                    $statusMsg = "Update content failed. Please try again.";
                }
            }else{
                $statusMsg = "Please enter content.";
            }
        }
?>
<div class="container">
    <h1>Edit Content</h1>
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
            <input type="text" class="form-control" name="content" value="<?php echo $content?>">
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