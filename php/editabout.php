<?php
$about = mysqli_query($connection, "SELECT * from tb_about");
$demo = mysqli_fetch_assoc($about);
?>
<!DOCTYPE html>
<html lang="en">
<style>
  .heading {
    text-align: center;
    margin: 25px 0;
  }

  .cover1 {
    background-color: bisque;
    width: 90%;
    margin-left: 80px;
    height: 10%;
    border-radius: 5px;
    padding: 10px;
    display: flex;
  }

  .cover2 {
    background-color: bisque;
    width: 90%;
    height: 20%;
    border-radius: 5px;
    padding: 20px;
    display: flex;
    margin: 20px 0;
    margin-left: 80px;
  }

  .cover3 {
    background-color: bisque;
    width: 90%;
    height: 15%;
    border-radius: 5px;
    padding:3px;
    display: flex;
    margin: 20px 0;
    margin-left: 80px;
  }

  h5 {
    margin: 5px 10px;
  }

  .imageblock {
    width: 280px;
    height: 60px;
    display: flex;
    justify-content: space-around;
    align-items: center;
  }

  .aboutheading {
    background-color: transparent;
    color: black;
    font-size: 25px;
    width: 300px;
    outline: none;
    border: none;
    padding: 0 10px;
  }

  .contentpart {
    width: 100%;
    height: 100px;
    font-size: 22px;
    padding: 0 10px;
    background-color: transparent;
    border: none;
    outline: none;
  }
  button a{
        text-decoration: none;
        color:black;
        font-weight:bold;
    }
    button:hover{
        background-color: red;
        color:white;
    }
    button:hover a{
        color:white;
    }
    @media only screen and (max-width:1060px) {
        .cover1{
            margin-left: 50px;
        }
        .cover2{
            margin-left: 50px;
            height:30%;
        }
        .cover3{
          margin-left:50px;
        } 
    }

    @media only screen and (max-width:650px) {
        .cover1{
            margin-left: 30px;
        }
        .cover2{
            margin-left: 30px;
            height:35%;
            font-size:13px;
        }
        .cover3{
            margin-left: 30px;
        }
    }
</style>

<body>
  <h1 class="heading">Manage About</h1>
  <button style="float:right; margin:0 50px 20px 0; border-radius: 5px;"><a href="updateeditabout.php/?id=<?php echo $demo['id']?>"><i class="fa-solid fa-pencil"></i></a></button>
    <div class="cover1">
      <h5>Heading:</h5>
      <h5><?php echo $demo['heading'] ?></h5>
      <!-- <input class="aboutheading" type="text" name="heading"id="heading" value="<?php echo $demo['heading'] ?>"> -->
      
    </div>
    <div class="cover2">
      <h5>Content:</h5>
      <!-- <textarea class="contentpart" name="content"><?php echo $demo['content'] ?></textarea> -->
      <p><?php echo $demo['content'] ?></p>
    </div>
    <div class="cover3">
      <h5>image:</h5>
      <div class="imageblock">
        <img src="../assets/img/<?php echo $demo['image'] ?>" width="60px">
        <h4>
          <?php echo $demo['image'] ?>
        </h4>
      </div>
    </div>
</body>
<script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
</html>