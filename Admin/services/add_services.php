<?php
    session_start();
    if(isset($_SESSION['username'])){
        require "../config.php";
        include("../sidebar_header.php");
        $result = mysqli_query($conn,"SELECT * FROM services");
        if(mysqli_num_rows($result) > 0){
            $serv = mysqli_fetch_all($result);
        }
        if(isset($_POST["submit"])){
            $status = "error";
            if(!empty($_FILES["img"]["name"])){
                $fileName = basename($_FILES["img"]["name"]);
                $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
                $allowTypes = array('jpg','png','jpeg','gif');
                if(in_array($fileType,$allowTypes)){
                    $name = $_POST["name"];
                    $detail = $_POST["detail"];
                    $img = 'Images/'.$_FILES["img"]["name"];
                    $insert = mysqli_query($conn, "INSERT INTO services(Serv_name, Serv_detail, Serv_img) VALUES ('$name', '$detail', '$img')");
                    if($insert){
                        $status = 'success';
                        $statusMsg = "Upload file successfully";
                        header("location: index.php");
                    }else{
                        $statusMsg = "Upload file failed. Please try again.";
                    }
                }else{
                    $statusMsg = "Sorry. Only JPG, JPEG, PNG or GIF files are allowed top upload.";
                }
            }else{
                $statusMsg = "Please select an image file to upload.";
            }
        }
?>
<div class="container">
    <h1>Add Services</h1>
    <?php
        if(!empty($statusMsg)){
    ?>
        <p class="status <?php echo $status; ?>" style="color: red;"><?php echo $statusMsg?></p>
    <?php
        }
    ?>
    <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label>Name of Service</label>
            <input type="text" class="form-control" name="name" >
        </div>
        <div class="form-group">
            <label>Detail</label>
            <input type="text" class="form-control" name="detail" >
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" name="img">
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