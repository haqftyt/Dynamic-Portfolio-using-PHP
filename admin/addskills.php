<?php
include('../includes/db.php');
if(isset($_POST['submit'])){
    $name=$_POST['skillname'];
    $filename=$_FILES['image']['name'];
    $tempname=$_FILES['image']['tmp_name'];
    $folder="../assets/img/".$filename;
    $percentage=$_POST['percent'];
    $query=mysqli_query($connection,"INSERT into tb_skills(image,skillname,percentage)values('$filename','$name','$percentage')");
    if(move_uploaded_file($tempname,$folder)){
        echo"<script>alert('Skills added')</script>";
        header('Location:../admin/index.php?page=editskill');
    }
    else{
        echo"<script>alert('Skills not added')</script>";
    }
}   
?>