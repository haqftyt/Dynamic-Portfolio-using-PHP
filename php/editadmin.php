
<!DOCTYPE html>
<html lang="en">
<style>
    .heading{
        text-align: center;
        margin:30px 0;
    }
    .input-group{
      width:90%;
      padding:10px 5px;
      background-color:blue;
      display:flex;
      justify-content: space-around;
      align-items: center;
      margin:30px 0;
    }
    .input-group label{
        font-size: 17px;
        font-weight: bold;
    }
    .input-group input{
        width:80%;
        height:20%;
        padding:5px 15px;
        background-color:transparent;
        outline:none;
        border:none;
        font-size:20px;
    }
    .cover{
        background-color: bisque;
        width:100%;
        max-width:80%;
        margin-left:80px;
        height:40%;
        padding:20px;
        display:flex;
        justify-content: space-evenly;
        border-radius: 5px;
    }
    @media only screen and (max-width:1060px) {
        .cover{
            flex-direction: column;
        }
    }
    @media only screen and (max-width:650px){
        .cover{
            margin-left:50px;
        }
    }
    input[type='submit']{
        width:100px;
        padding:8px 0;
        background-color:red;
        color:white;
        border-radius:5px;
        font-size:15px;
    }
</style>
<body>
<h1 class="heading">Edit Admin user</h1>
<form action="updateadmin.php" method="post">
<div class="cover">
<div>
<div class="input-group">
    <label for="name">Name</label>
    <input type="text" name="name"  id="name"value="<?php echo $use['name']?>" required>
 </div>
 <div class="input-group">
    <label for="username">Email</label>
    <input type="email"  id="username" name="username" value="<?php echo $use['username']?>" required>
 </div>
</div>
 <div>
 <div class="input-group">
    <label for="password">Pass</label>
    <input type="password" name="password" id="password" value="<?php echo $use['password']?>" required>
 </div>
    <input type="submit" value="update">
 </div>
</div>
</form>
</body>
</html>