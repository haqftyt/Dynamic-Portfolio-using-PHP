<?php
include("includes/db.php");
$query = mysqli_query($connection, "SELECT * from tb_users");
$row = mysqli_fetch_assoc($query);
$skillget = mysqli_query($connection, "SELECT * from tb_skills");
$home = mysqli_query($connection, "SELECT * from tb_home");
$rock = mysqli_fetch_assoc($home);
$about = mysqli_query($connection, "SELECT * from tb_about");
$demo = mysqli_fetch_assoc($about);
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="https://cdn.iconscout.com/icon/free/png-256/free-administrator-6992387-5728885.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/portfolio.css">
    <title><?php echo $row['name'] ?></title>

</head>

<body>
    <!--Navigation bar Section-->
    <nav class="navbar navbar-expand-lg fixed-top navbar-light">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#"><?php echo $row['name'] ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="navi-link" active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="navi-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="navi-link" href="#skills">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="navi-link" href="#contact">Contact</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <button class="btn btn-primary" id="toggle-mode" type="submit"><a href="pages/login.php">Login</a></button>
                </div>
            </div>
        </div>
    </nav>
    <!-- Home Section-->
    <section class="main py-5 bg-primary" id="home">
        <div class="container py-5">
            <div class="row py-5 px-5">
                <div class="col-lg-6">
                    <h3><small>Hello I'm</small><br>
                        <?php echo $rock['name'] ?>
                    </h3>
                    <h6><span id="role">Web Developer</span></h6>
                    <button class=" buttons btn btn-warning mt-5"><a href="#contact">
                            <?php echo $rock['button2'] ?>
                        </a></button>
                    <button class=" buttons btn btn-success mt-5">
                    <a href="pages/signup.php"><?php echo $rock['button3'] ?></a>
                    </button>
                </div>
                <div class="col-lg-6 py-4">
                    <img class="image" src="assets/img/<?php echo $rock['image'] ?>" alt="" width="500">
                </div>
            </div>
        </div>
    </section>
    <!--About section -->
    <section class="py-5 bg-light" id="about">
        <div class="container py-5">
            <div class="row py-5">
                <div class="col-lg-6 px-5 py-1 pic d-flex justify-content-center">
                    <img src="assets/img/<?php echo $demo['image'] ?>" alt="" width="400">
                </div>
                <div class="col-lg-6 ran py-5">
                    <h4>
                        <?php echo $demo['heading'] ?>
                    </h4>
                    <div class="info">
                        <?php echo $demo['content'] ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Skills Section-->
    <section class=" py-5 px-5 bg-warning" id="skills">

        <div class="container py-5">
            <h1 style="text-align:center;">Skills</h1>

            <div class="row py-5">
                <?php while ($row = mysqli_fetch_assoc($skillget)) { ?>
                    <div class="col-xl-4 px-3 py-3 col-md-6 cardsome">
                        <div class="card d-flex" style="width: 20rem; padding:20px;">
                            <div class="img-box">
                                <img src="assets/img/<?php echo $row['image'] ?>" class="card-img-top develop">
                            </div>
                            <div class="py-3">
                                <div class="progress progressbar" role="progressbar" aria-label="Animated striped example"
                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated"
                                        style="width:<?php echo $row['percentage'] ?>%;"><b
                                            style="color:black; padding:20px;font-size: 16px;">
                                            <?php echo $row['skillname'] ?>
                                            <?php echo $row['percentage'] ?>%
                                        </b></div>
                                </div>
                            </div>
                        </div>

                    </div>
                <?php } ?>
    </section>
    <!--Contact Section-->

  <section class="bg-dark text-white" id="contact">
    <div class="container">
      <div class="row py-3">
        <div class="col-md-12">
          <h2 class="text-center">Contact</h2>
        </div>
      </div>
      <form action="register.php" method="post">
        <div class="container">
            <div class="row  py-3 text-white justify-content-center">
                <div class="col-md-6">
                <div class="mb-3">
                    <label for="exampleInputName1" class="form-label">Name</label>
                    <input type="text" class="form-control" id="exampleInputName1" name="exampleInputName1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="exampleInputEmail1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPhone1" class="form-label">Phone</label>
                    <input type="text" class="form-control" name="exampleInputPhone1" id="exampleInputPhone1">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Comments</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="exampleFormControlTextarea1"
                        rows="3"></textarea>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>
    </div>
  </section>
  <footer>
    <div class="container">
      <div class="row py-3">
        <div class="col-md-12 text-center">
          <p><b>Copyright &copy; 2023 - Developed by Blabber Tamil</b></p>
        </div>
      </div>
    </div>
  </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
<script>
    var typed = new Typed('#role', {
        strings: ['Web Developer', 'Php Developer', 'C# Developer', ' Software Intern'],
        typeSpeed: 100,
        loop: true,
        fadeOut: true
    });
</script>

</html>