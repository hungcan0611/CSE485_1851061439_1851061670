<?php
    session_start();
    if(isset($_SESSION['username'])){
        require "../config.php";
        include("../sidebar_header.php");
        $result = mysqli_query($conn,"SELECT * FROM services");
        if(mysqli_num_rows($result) > 0){
            $serv = mysqli_fetch_all($result);
        }
    
    
?>
<h1>List Services</h1>
<table class="table" position="relative">
    <thead>
        <tr>
            <th>Name Of Service</th>
            <th>Detail</th>
            <th>Image</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($serv as $s){?>
        <tr>
            <td><?php echo $s[1]?></td>
            <td><?php echo $s[2]?></td>
            <td><img src="../../<?php echo $s[3]?>" style="width: 100px; height: 100px-->"></td>
            <th><a href="edit_services.php?id=<?php echo $s[0];?>"><i class="far fa-edit"></i></a></th>
            <th><a href="delete_services.php?id=<?php echo $s[0];?>"><i class="far fa-trash-alt"></i></a></th>
        </tr>
        <?php } ?>
    </tbody>
</table>
<form method="POST" action="add_services.php">
    <button type="submit" class="btn btn-primary" style="float: right; margin-right: 30px">Add</button>
</form>
<?php
        include "../sidebar_footer.php";
    }else{
        header("location: ../index.php");
        exit();
    }
?>