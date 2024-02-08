<?php
$home = mysqli_query($connection, "SELECT * from tb_home");
$rock = mysqli_fetch_assoc($home);
?>
<!DOCTYPE html>
<html lang="en">
<style>
    .heading {
        text-align: center;
        margin: 30px 0;
    }
    .cover {
        background-color: bisque;
        width: 90%;
        margin-left: 80px;
        height: 80%;
        border-radius: 5px;
        padding: 20px;
        display: flex;
        align-items: center;
    }
    .firstdiv {
        width: 400px;
        height: 380px;
        background-color: beige;
        border-radius: 5px;
        padding: 5px;
        margin: 0 20px;
    }
    .input-group input {
        width: 80%;
        height: 25px;
        padding: 5px 15px;
        background-color: transparent;
        outline: none;
        border: none;
    }

    .input-group {
        width: 85%;
        background-color: whitesmoke;
        display: flex;
        justify-content: space-around;
        align-items: center;
        margin:25px;
    }

    .image-col input {
        width: 400px;
        height: 40px;
        font-size: 16px;
        padding: 10px;
    }

    .imageblock {
        width: 280px;
        height: 85px;
        padding: 5px;
        margin-left:20px;
        background-color: bisque;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    button a {
        text-decoration: none;
        color: black;
        font-weight: bold;
    }

    button:hover {
        background-color: red;
        color: white;
    }

    button:hover a {
        color: white;
    }
    @media only screen and (max-width:1260px) {
        .cover{
            flex-direction: column;
            width:600px;
            margin-left:100px;
            height:90%;
        }
    }
    @media only screen and (max-width:1032px){
        .cover{
            flex-direction: column;
            width:80%;
            max-width:80%;
            margin-left:100px;
            height:90%;
        }
    }
    @media only screen and (max-width:650px) {
        .cover{
            flex-direction: column;
            width:480px;
            max-width:480px;
            margin-left:30px;
            height:90%;
        }
    } 
    @media only screen and (max-width:552px) {
        .cover{
            flex-direction: column;
            width:450px;
            max-width:450px;
            margin-left:30px;
            height:90%;
        }
    }
    @media only screen and (max-width:528px) {
        .cover{
            flex-direction: column;
            width:420px;
            max-width:420px;
            margin-left:30px;
            height:90%;
        }
    }
    @media only screen and (max-width:487px) {
        .cover{
            flex-direction: column;
            width:400px;
            max-width:400px;
            margin-left:20px;
            height:90%;
        }
       .firstdiv{
         width:360px;
       }
    }
</style>

<body>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/25/25694.png" type="image/x-icon">
    <h1 class="heading">Manage Home page</h1>
    <div class="cover">
        <form>
            <div class="firstdiv">
                <div>
                    <div class="input-group">
                        <!-- <input type="text" name="name" id="name" value="<?php echo $rock['name'] ?>" required> -->
                        <p style="font-size:20px;">
                            <?php echo $rock['name'] ?>
                        </p>
                        <button style="margin:0 10px; border-radius: 10px;"><a
                                href="updatehomepage.php?id=<?php echo $rock['id'] ?>">Edit</a></button>
                    </div>
                    <div class="input-group">
                        <!-- <input type="text" name="menu1" id="menu1" value="<?php echo $rock['menu1'] ?>" required>
                        <button style="margin:0 10px;">Edit</button>
                        <button style="margin:0 10px;">Del</button> -->
                        <p style="font-size:20px;">
                            <?php echo $rock['menu1'] ?>
                        </p>
                        <button style="margin:0 10px; border-radius: 10px;"><a
                                href="updatehomepage.php?id=<?php echo $rock['id'] ?>">Edit</a></button>
                    </div>
                    <div class="input-group">
                        <!-- <input type="text" name="menu2" id="menu2" value="<?php echo $rock['menu2'] ?>" required>
                        <button style="margin:0 10px;">Edit</button>
                        <button style="margin:0 10px;">Del</button> -->
                        <p style="font-size:20px;">
                            <?php echo $rock['menu2'] ?>
                        </p>
                        <button style="margin:0 10px; border-radius: 10px;"><a
                                href="updatehomepage.php?id=<?php echo $rock['id'] ?>">Edit</a></button>
                    </div>
                    <div class="input-group">
                        <!-- <input type="text" name="menu3" id="menu3" value="<?php echo $rock['menu3'] ?>" required>
                        <button style="margin:0 10px;">Edit</button>
                        <button style="margin:0 10px;">Del</button> -->
                        <p style="font-size:20px;">
                            <?php echo $rock['menu3'] ?>
                        </p>
                        <button style="margin:0 10px; border-radius: 10px;"><a
                                href="updatehomepage.php?id=<?php echo $rock['id'] ?>">Edit</a></button>
                    </div>
                    <div class="input-group">
                        <!-- <input type="text" name="menu4" id="menu4" value="<?php echo $rock['menu4'] ?>" required>
                        <button style="margin:0 10px;">Edit</button>
                        <button style="margin:0 10px;">Del</button> -->
                        <p style="font-size:20px;">
                            <?php echo $rock['menu4'] ?>
                        </p>
                        <button style="margin:0 10px; border-radius: 10px;"><a
                                href="updatehomepage.php?id=<?php echo $rock['id'] ?>">Edit</a></button>
                    </div>
                </div>
            </div>
        </form>
        <form>
            <div class="firstdiv">
                <div>
                    <div class="input-group">
                        <!-- <input type="text" name="button1" id="button1" value="<?php echo $rock['button1'] ?>" required>
                        <button style="margin:0 10px;">Edit</button>
                        <button style="margin:0 10px;">Del</button> -->
                        <p style="font-size:20px;">
                            <?php echo $rock['button1'] ?>
                        </p>
                        <button style="margin:0 10px; border-radius: 10px;"><a
                                href="updatehomepage.php?id=<?php echo $rock['id'] ?>">Edit</a></button>
                    </div>
                    <div class="input-group">
                        <!-- <input type="text" name="button2" id="button2" value="<?php echo $rock['button2'] ?>" required>
                        <button style="margin:0 10px;">Edit</button>
                        <button style="margin:0 10px;">Del</button> -->
                        <p style="font-size:20px;">
                            <?php echo $rock['button2'] ?>
                        </p>
                        <button style="margin:0 10px; border-radius: 10px;"><a
                                href="updatehomepage.php?id=<?php echo $rock['id'] ?>">Edit</a></button>
                    </div>
                    <div class="input-group">
                        <!-- <input type="text" name="button3" id="button3" value="<?php echo $rock['button3'] ?>" required>
                        <button style="margin:0 10px;">Edit</button>
                        <button style="margin:0 10px;">Del</button> -->
                        <p style="font-size:20px;">
                            <?php echo $rock['button3'] ?>
                        </p>
                        <button style="margin:0 10px; border-radius: 10px;"><a
                                href="updatehomepage.php?id=<?php echo $rock['id'] ?>">Edit</a></button>
                    </div>
                    <div style="display:flex;">
                        <div class="imageblock">
                            <img src="../assets/img/<?php echo $rock['image'] ?>" width="60px">
                            <p>
                                <?php echo $rock['image'] ?>
                            </p>
                        </div>
                        <div style="margin:20px 0;">
                            <button style="margin:0 10px; border-radius: 10px;"><a
                                    href="updatehomepage.php?id=<?php echo $rock['id'] ?>">Edit</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>