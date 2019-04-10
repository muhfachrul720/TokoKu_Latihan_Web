<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- For Bootstrap Css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Dashboard</title>
</head>
<body class="h-100">
    <!-- Menu Bar Untuk Device HP dan Ipad Dari Toggle Burger -->
    <nav class="navbar navbar-expand-sm navbar-light bg-dark sticky-top">
        <a href="#" class="navbar-brand text-white">Manajemen Penjualan</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon text-white"></span>
        </button>
        <nav class="collapse navbar-collapse" id="sidebar">
            <ul class="navbar-nav d-sm-none">
                <li class="nav-item">
                    <a href="" class="nav-link text-white"><i class="oi oi-dashboard"></i> Dashboard</a>
                </li>
            </ul>
            <ul class="navbar-nav d-sm-none">
                <li class="nav-item">
                    <a href="" class="nav-link text-white"><i class="oi oi-person"></i> Profile</a>
                </li>
            </ul>
            <ul class="navbar-nav d-sm-none">
                <li class="nav-item">
                    <a href="" class="nav-link text-white"><i class="oi oi-sort-descending"></i> Data Penjualan</a>
                </li>
            </ul>
            <ul class="navbar-nav d-sm-none">
                <li class="nav-item">
                    <a href="" class="nav-link text-white"><i class="oi oi-account-logout"></i> Logout</a>
                </li>
            </ul>
        </nav>
    </nav>
    <!-- Menu Bar Samping Untuk Dekstop -->
    <div class="container-fluid h-100">
        <div class="row h-100">
            <nav class="col-md-2 col-sm-3 bg-light h-100 p-0 position-fixed d-none d-sm-block">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-light">
                        <a href="dashboardseller.php?hal=home" class="nav-link text-dark">Dashboard</a>
                    </li>
                    <li class="list-group-item bg-light">
                        <a href="dashboardseller.php?hal=profile" class="nav-link text-dark">Profile</a>
                    </li>
                    <li class="list-group-item bg-light">
                        <a href="dashboardseller.php?hal=inputsell" class="nav-link text-dark">Input Penjualan</a>
                    </li>
                    <li class="list-group-item bg-light">
                        <a href="logout.php" class="nav-link text-dark">Logout</a>
                    </li>
                </ul>
            </nav>
            <div class="col-md-10 col-sm-9 offset-md-2 offset-sm-3 mb-3">
                <section>

                <?php
                    if (isset($_GET['hal'])){
                        $halaman = $_GET['hal'];

                        switch ($halaman){
                            case 'home' :
                                include "overviewseller.php";
                                break;
                            case 'profile' :
                                include "profile.php";
                                break;
                            case 'inputsell' :
                                include "input.php";
                                break;
                            default :
                                echo "<h1 class='display-3'>Maaf halaman tidak ditemukan</h1>";
                                break;
                        }
                    }
                    else {
                        include "overviewseller.php";
                    }
                ?>   


                </section>
            </div>
        </div>
    </div>
    <div class="bg-dark fixed-bottom">
        <p class="m-2 text-center text-muted">CopyRight &copy; Muh Fachrul</p>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php
    
?>