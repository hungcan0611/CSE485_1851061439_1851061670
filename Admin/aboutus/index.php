<?php
    session_start();
    if(isset($_SESSION['username'])){
        require "../config.php";
        include("../sidebar_header.php");
        $result = mysqli_query($conn,"SELECT * FROM about_us");
        if(mysqli_num_rows($result) > 0){
            $about = mysqli_fetch_all($result);
        }
    
    
?>
<h1>List Services</h1>
<table class="table" position="relative">
    <thead>
        <tr>
            <th>ID</th>
            <th>About us</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($about as $au){?>
        <tr>
            <td><?php echo $au[0]?></td>
            <td><?php echo $au[1]?></td>
            <th><a href="edit_about.php?id=<?php echo $s[0];?>"><i class="far fa-edit"></i></a></th>
            <th><a href="delete_about.php?id=<?php echo $s[0];?>"><i class="far fa-trash-alt"></i></a></th>
        </tr>
        <?php } ?>
    </tbody>
</table>
<form method="POST" action="add_about.php">
    <button type="submit" class="btn btn-primary" style="float: right; margin-right: 30px">Add</button>
</form>
<?php
        include "../sidebar_footer.php";
    }else{
        header("location: ../index.php");
        exit();
    }
?>