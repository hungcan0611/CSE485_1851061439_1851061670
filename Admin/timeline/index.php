<?php
    session_start();
    if(isset($_SESSION['username'])){
        require "../config.php";
        include("../sidebar_header.php");
        $result_tl = mysqli_query($conn,"SELECT * FROM timeline");
        if(mysqli_num_rows($result_tl) > 0){
            $time = mysqli_fetch_all($result_tl);
        }
        if(isset($_POST['submit'])){
            $status = "error";
            if(!empty($_POST["person"])){
                if(!empty($_POST["date"])){
                    if(!empty($_POST["detail"])){
                        $result_info = mysqli_query($conn,"SELECT * FROM infomation");
                        $person = $_POST["person"];
                        $date = $_POST["date"];
                        $detail = $_POST["detail"];
                        $sql = "INSERT INTO timeline(info_id, tl_time, tl_detail) VALUES ('$person', Year('$date'), '$detail')";
                        $insert = mysqli_query($conn, $sql);
                        if($insert){
                            $status = 'success';
                            $statusMsg = "Add timeline successed";
                        }else{
                            $statusMsg = "Add timeline failed. Please try again.";
                        }
                    }else{
                        $statusMsg = "Please enter detail.";
                    }
                }else{
                    $statusMsg = "Please select date.";
                }
            }else{
                $statusMsg = "Please select person.";
            }

        }
        
?>
<div class="container">
    <h1>Add Timeline</h1>
    <?php
        if(!empty($statusMsg)){
    ?>
        <p class="status <?php echo $status; ?>" style="color: red;"><?php echo $statusMsg?></p>
    <?php
        }
    ?>
    <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="person">Person</label>
            <select class="form-control" id="person" name="person">
                <?php
                    $result_info = mysqli_query($conn,"SELECT * FROM information");
                    if(mysqli_num_rows($result_info) > 0){
                        $info = mysqli_fetch_all($result_info);
                    }
                    foreach($info as $i){
                ?>
                <option value="" disabled selected hidden></option>
                <?php
                    echo "<option value=".$i[0].">".$i[1]."</option>";
                    }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label>Time</label>
            <input type="date" class="form-control" name="date">
        </div>
        <div class="form-group">
            <label>Detail</label>
            <input type="text" class="form-control" name="detail" >
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