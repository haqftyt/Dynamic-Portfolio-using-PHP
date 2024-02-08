<?php
$connect=mysqli_connect("localhost","root","","sample");
$name=$_POST['name'];
$email=$_POST['username'];
$pass=$_POST['password'];
    $query="UPDATE tb_users set name='$name',username='$email',password='$pass' WHERE id='1'";
$done=mysqli_query($connect,$query);
if($done){
    echo"<script>alert('Data Saved')</script>";
    header("Location:../admin/index.php?page=editadmin");
}
else{
    echo"<script>alert('Data not saved')</script>";
}
