<?php
$connect=mysqli_connect("localhost","root","","sample");
$name=$_POST['exampleInputName1'];
$email=$_POST['exampleInputEmail1'];
$phone=$_POST['exampleInputPhone1'];
$message=$_POST['exampleFormControlTextarea1'];
$query="INSERT into tb_message(name,email,phone,message)VALUES('$name','$email','$phone','$message')";
$done=mysqli_query($connect,$query);
if($done){
    header("Location:index.php");
}
else{
    echo"<script>alert('Data not saved')</script>";
}
