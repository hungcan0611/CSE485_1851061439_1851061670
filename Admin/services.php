<?php
    include("config.php");
    include("sidebar_header.php");
    $result = mysqli_query($conn,"SELECT * FROM services");
    if(mysqli_num_rows($result) > 0){
        $serv = mysqli_fetch_all($result);
    }

    if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $detail = $_POST["detail"];
        $img = $_POST["img"];
        mysqli_query($conn, "INSERT INTO services(Serv_name, Serv_detail, Serv_img) VALUES ('$name', '$detail', '$img')");
        header("location: home.php");
    }
?>
<div class="container">
    <form method = "POST">
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
            <input type="text" class="form-control" name="img" >
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" name = "submit">Add</button>
        </div>
    </form>
</div>
<?php
    include("footer.php");
?>