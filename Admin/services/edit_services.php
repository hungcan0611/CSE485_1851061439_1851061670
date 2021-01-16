<?php
    session_start();
    if(isset($_GET['id'])){
        require "../config.php";
        include("../sidebar_header.php");
        $id = $_GET['id'];
        $result = mysqli_query($conn, "SELECT * FROM services WHERE Serv_id = '$id'");
        if(mysqli_num_rows($result) === 1 ){
            $serv = mysqli_fetch_array($result);
            $name = $serv['Serv_name'];
            $detail = $serv['Serv_detail'];
            $img = $serv['Serv_img'];
        }

        if(isset($_POST['update'])){
            $status = "error";
            if(!empty($_FILES["img"]["name"])){
                $fileName = basename($_FILES["img"]["name"]);
                $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

                $allowTypes = array('jpg','png','jpeg','gif');
                if(in_array($fileType,$allowTypes)){
                    $name = $_POST["name"];
                    $detail = $_POST["detail"];
                    $img = 'Images/'.$_FILES["img"]["name"];

                    $update = mysqli_query($conn, "UPDATE services SET Serv_name = '$name', Serv_detail = '$detail', Serv_img = '$img' WHERE Serv_id = '$id'");
                    if($update){
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
    <?php
        if(!empty($statusMsg)){
    ?>
        <p class="status <?php echo $status; ?>"><?php echo $statusMsg?></p>
    <?php
        }
    ?>
    <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label>Name of Service</label>
            <input type="text" class="form-control" name="name" value="<?php echo $name?>">
        </div>
        <div class="form-group">
            <label>Detail</label>
            <!--<input type="text" class="form-control" name="detail" >-->
            <textarea name="detail" rows="4" cols="100"><?php echo $detail?></textarea>
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" name="img" value="<?php echo $img?>">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" name="update">Cập nhật</button>
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