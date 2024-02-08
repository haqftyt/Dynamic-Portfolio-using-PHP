<?php
include("../includes/db.php");
 if(!empty($_SESSION['id'])){
   header("Location:../admin/");
 }
if(isset($_POST['submit'])){
    $username= $_POST['email'];
    $password= $_POST['password'];
    $result = mysqli_query($connection,"SELECT * from tb_users where username='$username' or password='$password'");
    $row= mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
        if($password==$row['password']){
            $_SESSION['login']=true;
            $_SESSION['id']=$row['id'];
            header("Location:../admin/");
        }
        else{
            echo "<script>alert('Incorrect password');</script>";
        }
    }
    else{
        echo "<script>alert('user not registered');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/mic.png">
    <link rel="stylesheet" href="../css/styles.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Sign up Page</title>
</head>
<body>
    <div class="container">
        <div class="log-container">
            <h2 id="title">Login</h2>
            <form action="" method="post">
                <div class="input-group">
                    <div class="input-field">
                        <i class="fa fa-envelope"></i>
                        <input type="email" placeholder="Enter email" name="email">
                        <span id="emailerror"></span>
                    </div>
                    <div class="input-field">
                        <i class="fa fa-unlock"></i>
                        <input type="password" id="password" name="password" maxlength="8" placeholder="Enter password">
                        <span id="passerror"></span>
                    </div>
                    <div class="check">
                         <label>Are you want to <a href="signup.php">SignUp</a></label>
                    </div>
                </div>
                <div class="btn-field">
                    <button type="submit" name="submit" class="">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>