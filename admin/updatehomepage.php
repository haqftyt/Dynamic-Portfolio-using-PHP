<?php
include('../includes/db.php');
$id = $_GET['id'];
$fetchabout = mysqli_query($connection, "SELECT * FROM tb_home WHERE id='$id'");
$r = mysqli_fetch_assoc($fetchabout);
?>
<?php
if (isset($_POST['submit'])) {
    $name=$_POST['name'];
    $menu1=$_POST['menu1'];
    $menu2=$_POST['menu2'];
    $menu3=$_POST['menu3'];
    $menu4=$_POST['menu4'];
    $button1=$_POST['button1'];
    $button2=$_POST['button2'];
    $button3=$_POST['button3'];
    $oldimage = $_POST['old_image'];
    $newimage = $_FILES['image']['name'];
    $tmpname = $_FILES['image']['tmp_name'];
    if ($newimage != '') {
        $updatefile = $newimage;
    } else {
        $updatefile = $oldimage;
    }
    // if (file_exists('../assets/img' . $newimage)) {
    //     echo "<script>alert('Image already exists')</script>";
    // }
        $query = "UPDATE tb_home SET name='$name',menu1='$menu1',menu2='$menu2',menu3='$menu3',menu4='$menu4',button1='$button1',button2='$button2',button3='$button3',image='$updatefile'WHERE id='$id'";
        $update = mysqli_query($connection, $query);
        if ($update) {
            move_uploaded_file($tmpname, '../assets/img/' . $newimage);
            if($newimage!= null){
                unlink('../assets/img/'.$oldimage);
               }
            header('Location:../admin/');
        } else {
            header('Location:../admin/');
        }
    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<link rel="icon" href="https://cdn-icons-png.flaticon.com/512/25/25694.png" type="image/x-icon">
    <title> Update Home Page</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');
    body {
        width: 100%;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: burlywood;
        font-family: 'Poppins', sans-serif;
        flex-direction: column;
    }

    .UpdateForm {
        box-shadow: 2px 3px 2px black;
        width: 370px;
        height: 370px;
        font-weight: bold;
        font-size: 18px;
        padding: 10px;
        border-radius: 5px;
        background-color: bisque;
    }

    .contentpart {
        width: 280px;
        height: 200px;
    }

    .div1 {
        margin: 10px 0;
    }

    .div1 input {
        width: 200px;
    }

    .UpdateForm button {
        float: right;
        width: 100px;
        height: 30px;
        background-color: red;
        color: white;
        border-radius: 5px;
    }
</style>

<body>
<h2>Update Home</h2>
    <form class="UpdateForm" method="post" enctype="multipart/form-data">
        <div>
            <div class='div1'>
                <label>Name:</label>
                <input type="text" name="name" value=<?php echo $r['name'] ?>>
            </div>
            <div class='div1'>
                <label>menu1</label>
                <input type="text" name="menu1" value=<?php echo $r['menu1'] ?>>
            </div>
            <div class='div1'>
                <label>menu2</label>
                <input type="text" name="menu2" value=<?php echo $r['menu2'] ?>>
            </div>
            <div class='div1'>
                <label>menu3</label>
                <input type="text" name="menu3" value=<?php echo $r['menu3'] ?>>
            </div>
        </div>
        <div>
            <div class='div1'>
                <label>menu4</label>
                <input type="text" name="menu4" value=<?php echo $r['menu4'] ?>>
            </div>
            <div class='div1'>
                <label>button1</label>
                <input type="text" name="button1" value=<?php echo $r['button1'] ?>>
            </div>
            <div class='div1'>
                <label>button2</label>
                <input type="text" name="button2" value=<?php echo $r['button2'] ?>>
            </div>
            <div class='div1'>
                <label>button3</label>
                <input type="text" name="button3" value=<?php echo $r['button3'] ?>>
            </div>
        </div>
        <div>
            <label>Image</label>
            <input type="file" name="image">
            <input type="hidden" name="old_image" value="<?php echo $r['image'] ?>" </div>
            <button type="submit" name="submit">Update</button>
    </form>
</body>

</html>