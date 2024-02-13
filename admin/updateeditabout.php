<?php
include('../includes/db.php');
$id = $_GET['id'];
$fetchabout = mysqli_query($connection, "SELECT * FROM tb_about WHERE id='$id'");
$r = mysqli_fetch_assoc($fetchabout);
?>
<?php
if (isset($_POST['submit'])) {
  $heading = $_POST['heading'];
  $content = $_POST['content'];
  $oldimage = $_POST['old_image'];
  $newimage = $_FILES['image']['name'];
  $tmpname=$_FILES['image']['tmp_name'];
  if ($newimage != '') {
    $updatefile = $newimage;
  } else {
    $updatefile = $oldimage;
  }
  if (file_exists('../assets/img' . $newimage)) {
    echo "<script>alert('Image already exists')</script>";
  } 
  else {
    $query = "UPDATE tb_about SET heading='$heading',content='$content',image='$updatefile'WHERE id='$id'";
    $update = mysqli_query($connection, $query);
    if ($update) {
      move_uploaded_file($tmpname,'../assets/img/'.$newimage);
      if($newimage!= null){
        unlink('../assets/img/'.$oldimage);
       }
      header('Location:../');
    } else {
      header('Location:../');
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<link rel="icon" href="https://cdn-icons-png.flaticon.com/512/684/684833.png" type="image/x-icon">
  <title> Update About</title>
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
    width: 300px;
    height: 370px;
    font-weight: bold;
    font-size: 18px;
    padding: 20px;
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
<h2>Update About</h2>
  <form class="UpdateForm" method="post" enctype="multipart/form-data">
    <div class='div1'>
      <label>Heading</label>
      <input type="text" name="heading" value=<?php echo $r['heading'] ?>>
    </div>
    <div>
      <label>Content</label>
      <textarea class="contentpart" name="content"><?php echo $r['content'] ?></textarea>
    </div>
    <div>
      <label>Image</label>
      <input type="file" name="image">
      <input type="hidden" name="old_image" value="<?php echo $r['image'] ?>" </div>
      <button type="submit" name="submit">Update</button>
  </form>
</body>

</html>