<?php
    include("Admin/config.php");
    include("header.php");

    if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $job = $_POST["job"];
        $comment = $_POST["comment"];
        $avatar = $_POST["avatar"];
        mysqli_query($conn, "INSERT INTO testimonials(tes_name, tes_job, tes_comment, tes_avatar) VALUES ('$name', '$job', '$comment', '$avatar') ");
        header("location: index.php");
    }
?>
<div class="container">
    <form method = "POST">
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label>Job</label>
            <input type="text" class="form-control" name="job" >
        </div>
        <div class="form-group">
            <label>Comment</label>
            <input type="text" class="form-control" name="comment" >
        </div>
        <div class="form-group">
            <label>Avatar</label>
            <input type="text" class="form-control" name="avatar" >
        </div>
        <div class="form-group">
                <button type="submit" class="btn btn-primary" name = "submit">Add</button>
        </div>
    </form>
</div>