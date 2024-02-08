<?php
include("../includes/db.php");
 if(!empty($_SESSION['id'])){
    header("Location:../admin/");
 }
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $gender =$_POST['gender'];
    $username= $_POST['username'];
    $password= $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $result= mysqli_query($connection,"SELECT * from tb_person where username='$username' or name='$name'");
    if(mysqli_num_rows($result) > 0){
        echo "<script>alert('username is already in use')</script>";
    }
    else{
        if($password == $confirmpassword){
            $q="INSERT into tb_person(name,gender,username,password) VALUES('$name','$gender','$username','$password')";
            mysqli_query($connection,$q);
            echo "<script>alert('User Registered Successfully')</script>";
        }
        else{
            echo "<script>alert('Password does not match')</script>";
        }
       
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/pages.css" type="text/css">
    <title>Document</title>
</head>
<body class="body">
<div class="signup-container">
<p style="text-align:right;"><a href="login.php">Login</a></p>
    <h1 style="text-align:center;" class="h1">SignUp</h1>
    <form action="" method="post">
        <div>
        <label>Name</label>
        <br>
        <input type="text" placeholder="enter your name" name="name" id="name">
        </div>
        <br>
        <div>
        <label>Gender</label>
         <select name="gender">
            <option>Select your option</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="others">Others</option>
         </select>         
        </div>
        <br>
        <div>
        <label>Email</label>
        <br>
        <input type="email" placeholder="enter your email" name="username" id="username">
        </div>
        <br>
        <div>
        <label>Password</label>
        <br>
        <input type="password" maxlength="8" placeholder="enter your password" name="password">
        <br>
        </div> 
        <br>
        <div>
        <label> Confirm Password</label>
        <br>
        <input type="password" maxlength="8" placeholder="enter your password" name="confirmpassword">
        <br>
        </div>
        <button type="submit" name="submit">Signup</button>
    </form>
</body>
</html>