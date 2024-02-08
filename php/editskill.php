<?php
$getimage = mysqli_query($connection, "SELECT * from tb_skills");
?>
<html>
<style>
    .heading {
        text-align: center;
        margin: 30px 0;
    }

    .cover {
        background-color: bisque;
        width: 80%;
        margin-left: 80px;
        height: 40%;
        margin-bottom: 30px;
        overflow: scroll;
    }

    .addcover {
        background-color: bisque;
        width: 80%;
        margin-left: 80px;
        height: 40%;
        margin-bottom: 30px;
        padding: 30px;
        display: flex;
        justify-content: space-evenly;
    }

    input[type='submit'] {
        width: 100px;
        padding: 10px 0;
        background-color: red;
        color: white;
        border-radius: 5px;
        font-size: 15px;
    }

    @media only screen and (max-width:1060px) {
        .cover {
            flex-direction: column;
        }

        .addcover {
            flex-direction: column;
        }
    }

    @media only screen and (max-width:650px) {
        .cover {
            margin-left: 50px;
        }

        .addcover {
            margin-left: 50px;
            flex-direction: column;
        }
    }

    th {
        padding: 10px 40px;
        color: black;
    }

    td {
        padding: 10px 40px;
        color: black;
    }

    .input-group {
        width: 90%;
        padding: 10px 5px;
        background-color: whitesmoke;
        display: flex;
        justify-content: space-around;
        align-items: center;
        margin: 30px 0;
    }

    .input-group label {
        font-size: 17px;
        font-weight: bold;
    }

    .input-group input {
        width: 80%;
        height: 20%;
        padding: 5px 15px;
        background-color: transparent;
        outline: none;
        border: none;
        font-size: 20px;
    }

    .input-group input[type="file"] {
        height: 30px;
        font-size: 13px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    input[type="file"] {
        font-weight: bold;
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
</style>

<body>
    <h1 class="heading">Manage Skills</h1>
    <div class="cover">
        <table>
            <tr>
                <th> No</th>
                <th> Image</th>
                <th> Skill Name</th>
                <th> Percentage(out of 100%)</th>
                <th> Actions</th>
            </tr>
            <?php
            while ($res = mysqli_fetch_assoc($getimage)) {
                ?>
                <tr>
                    <td>
                        <?php echo $res['id'] ?>
                    </td>
                    <td><img src="../assets/img/<?php echo $res['image'] ?>" width="40px"></td>
                    <td>
                        <?php echo $res['skillname'] ?>
                    </td>
                    <td>
                        <?php echo $res['percentage'] ?>
                    </td>
                    <td>
                        <button><a href="updateskills.php?id=<?php echo $res['id'] ?>"
                                style="text-decoration:none;"><i class="fa-solid fa-pencil"></i></a></button>
                        <button><a href="deleteskills.php?id=<?php echo $res['id'] ?>"
                                style="text-decoration:none;"><i class="fa-solid fa-trash"></i></a></button>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
    <form action="addskills.php" method="post" enctype="multipart/form-data">
        <div class="addcover">
            <div>
                <div class="input-group">
                    <label for="skillname">Skill</label>
                    <input type="text" name="skillname" id="skillname" placeholder="enter skills" required>
                </div>
                <div class="input-group">
                    <label for="image">Image</label>
                    <input type="file" id="image" name="image" required>
                </div>
            </div>
            <div>
                <div class="input-group">
                    <label for="percent">%</label>
                    <input type="text" name="percent" id="percent" placeholder="out of 100%" required>
                </div>
                <input type="submit" name="submit" value="Add Skills">
            </div>
        </div>
    </form>
</body>
<script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
</html>