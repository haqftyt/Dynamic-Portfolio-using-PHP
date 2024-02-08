<?php
include('../includes/db.php');
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $getimage= mysqli_query($connection,"SELECT * from tb_skills where id='$id'");
    $image=mysqli_fetch_assoc($getimage);
    $filename=$image['image'];
    if(unlink("../assets/img/".$filename)){
        mysqli_query($connection,"DELETE from tb_skills where id='$id'");
        header('Location:../admin/index.php?page=editskill');
    }
    else{
        header('Location:../admin/index.php?page=editskill');
    }
}
?>