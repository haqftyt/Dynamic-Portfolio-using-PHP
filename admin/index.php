<?php
include("../includes/db.php");
if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $query = mysqli_query($connection, "SELECT * from tb_person where id='$id'");
    $q = mysqli_query($connection, "SELECT * from tb_message");
    $user = mysqli_query($connection, "SELECT * from tb_users");
    $use = mysqli_fetch_assoc($user);
    $row = mysqli_fetch_assoc($query);
} 
else {
    header('Location:../pages/login.php');
}
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/8899/8899687.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="wrapper">
        <aside id="sidebar" class="js-sidebar">
            <!-- Content For Sidebar -->
            <div class="h-100">
                <div class="sidebar-logo">
                    <a href="#">Faisal Haq</a>
                </div>
                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Menu
                    </li>
                    <li class="sidebar-item">
                        <a href="index.php?page=home" class="sidebar-link">
                            <i class="fa-solid fa-house pe-2"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="index.php?page=edithome" class="sidebar-link">
                            <i class="fa-solid fa-pencil pe-2"></i>
                            Edit Menu
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="index.php?page=editabout" class="sidebar-link">
                            <i class="fa-solid fa-address-card pe-2"></i>
                            Edit About
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="index.php?page=editskill" class="sidebar-link">
                            <i class="fa-solid fa-chart-simple pe-2"></i>
                            Edit Skills
                        </a>
                    </li>
                </ul>
                <li class="sidebar-item">
                        <a  class="sidebar-link collapsed" data-bs-target="#auth" data-bs-toggle="collapse"
                            aria-expanded="false"><i class="fa-solid fa-gear pe-2"></i>
                            Settings
                        </a>
                        <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="index.php?page=editadmin" class="sidebar-link">
                                <i class="fa-solid fa-user"></i>
                                    Edit Admin</a>
                            </li>
                        </ul>
                    </li>
            </div>
        </aside>
        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom">
                <button class="btn" id="sidebar-toggle" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                                <img src="image/profile.jpg" class="avatar img-fluid rounded" alt="">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="../pages/logout.php" class="dropdown-item">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="content px-3 py-2">
            <?php
            $page = isset($_GET['page']) ? ($_GET['page']) : 'home';

            include "../php/" . $page . ".php";
            ?>
            </main>
            <a href="#" class="theme-toggle">
                <i class="fa-regular fa-moon"></i>
                <i class="fa-regular fa-sun"></i>
            </a>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                            <p class="mb-0">
                                <a href="#" class="text-muted">
                                    <strong>Faisal Haq</strong>
                                </a>
                            </p>
                        </div>
                        <div class="col-6 text-end">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="#" class="text-muted">Contact</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-muted">About Us</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-muted">Terms</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-muted">Booking</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/script.js"></script>
</body>

</html>