<?php
include('../includes/db.php');
$id = $_GET['id'];
$fetchabout = mysqli_query($connection, "SELECT * FROM tb_skills WHERE id='$id'");
$r = mysqli_fetch_assoc($fetchabout);
?>
<?php
if (isset($_POST['submit'])) {
  $skillname = $_POST['skillname'];
  $percentage = $_POST['percentage'];
  $oldimage = $_POST['old_image'];
  $newimage = $_FILES['image']['name'];
  $tmpname=$_FILES['image']['tmp_name'];
  if ($newimage != '') {
    $updatefile = $newimage;
  } else {
    $updatefile = $oldimage;
  }
//   if (file_exists('../assets/img' . $newimage)) {
//     echo "<script>alert('Image already exists')</script>";
//   } 
    $query = "UPDATE tb_about SET skillname='$skillname',percentage='$percentage',image='$updatefile'WHERE id='$id'";
    $update = mysqli_query($connection, $query);
    if ($update) {
      move_uploaded_file($tmpname,'../assets/img/'.$newimage);
      unlink('../assets/img/'.$oldimage);
      header('Location:../admin/');
    } else {
      header('Location:../');
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/4252/4252963.png" type="image/x-icon">
  <title> Update Skills</title>
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');
  body {
    width: 100%;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: skyblue;
    flex-direction: column;
    font-family: 'Poppins', sans-serif;
  }

  .UpdateForm {
    box-shadow: 2px 3px 2px black;
    width: 300px;
    height: 200px;
    font-weight: bold;
    font-size: 18px;
    padding: 10px;
    border-radius: 5px;
    background-color: chartreuse;
  }

  .contentpart {
    width: 280px;
    height: 200px;
  }

  .div1 {
    margin: 5px 0;
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
<h2>Update Skills</h2>
  <form class="UpdateForm" method="post" enctype="multipart/form-data">
    <div class='div1'>
      <label>Skillname</label>
      <input type="text" name="skillname" value=<?php echo $r['skillname'] ?>>
    </div>
    <div>
      <label>percentage</label>
      <input type="text" name="percentage" value="<?php echo $r['percentage'] ?>">
    </div>
    <div>
      <label>Image</label>
      <input type="file" name="image">
      <input type="hidden" name="old_image" value="<?php echo $r['image'] ?>" </div>
      <button type="submit" name="submit">Update</button>
  </form>
</body>

</html>