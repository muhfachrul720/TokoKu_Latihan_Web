<?php 

    include "koneksi.php"; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buyerpage</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index1.css">
        <script type='text/javascript' src="css/bootstrap.js"></script>
        <script type="text/javascript" src="js/bootstrap-carousel.js"></script>
        <script type="text/javascript" src="js/functions.js"></script>
        <script type="text/javascript">
             //starts the carousel
             $document.ready(function () {
                 $('#myCarousel').carousel();
             });
        </script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


</head>
<style>
    .sub-text {
        color :rgb(141, 141, 141);
    }
    .carousel-img {
        background-size:cover;
        background-repeat:no-repeat;
        background-position:center;
        width:100%;
        height:100vh;
    }
    .border-active {
        border:solid thin;
    }
    .border-bottom-blue {
        padding:0 0 10px 0;
        border-bottom:solid thin rgba(0, 123, 255,.4);
    }
    .mg-1{
        margin: 10px 0 10px;
    }
    .pd-1 {
        padding:1em 1em 0em 1em;
    }
    .pd-2 {
        padding:0em 1em;
    }
    .pd-3{
        padding:1.5em 0; 
    }
    .pict1 {
        background-image:url(img/69988640_p0.png);
    }
    .pict2 {
        background-image:url(img/1126Kanon-Matsubara-Cool-L3Qdgc.png);
    }
    .ps-absolute {
        position: absolute;
    }
    .ps-relative {
        position: relative;
    }
    .border-active{
        border:solid thin sienna;
    }
    .form-sign-in input{
        margin: 20px 0;
    }
    .ps-absolute {
        position: absolute;
    }
    .ps-relative {
        position: relative;
    }
    .pop-out {
        transition:.5s ease;
        visibility:hidden;
    }
    .pop-in {
        visibility:visible;
    }
    .ps-fixed {
        position:fixed;
    }
    .close-btn{
        cursor:pointer;
    }
    .image-produk {
        background-size:cover;
        background-repeat:no-repeat;
        background-position:center;
        width:90%;
        height:200px;
    }
</style>
<body>
<div class ="wrapper ps-absolute">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href="" class="navbar-brand">
            <img src="img/Logo.png" alt="" width="30" height="30">
            TokoKu
        </a>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="index.php" class="nav-link nav-active">Home</a>
                </li>    
                <li class="nav-item">
                    <a href="" class="nav-link">Shop</a>
                </li>    
                <li class="nav-item">
                    <a href="" class="nav-link">Contact</a>
                </li>   
                <li class="nav-item">
                    <div class="nav-link close-btn" onclick="RegisterPop()">Register</div>
                </li>   
                <li class="nav-item">
                    <div class="nav-link close-btn" onclick="SellerSignPop()">Login</div>
                </li>    
            </ul>
        </div>
        <form action="" method="post" class="form-inline my-2 my-lg-0">
            <input type="search" placeholder="Search.." class="form-control mr-sm-2" aria-label="Search">
            <button type="submit" class="btn btn-outline-success my-2 my-lg-0" style="margin:0px 10px;">Search</button>
        </form>
    </nav>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <h4 class="display-5 pd-3">Our Product</h5>
        </div>
        <div class="row">
        <?php
            
            $sqlQuery = "SELECT * FROM tokoku_produk";
            $sqlExecute = mysqli_query($con, $sqlQuery);

            while($result = mysqli_fetch_array($sqlExecute)){

        ?>
            <div class="col-lg-3 col-md-6 col-sm-12 align-text pd-1">
                <div class="row justify-content-center">
                    <div class="image-produk" style="background-image:url(uploadimg/<?=$result[5]?>);"></div>
                </div>
                <div class="row justify-content-center pd-1">
                    <h5 class="border-bottom-blue"><?= $result[1]?></h5>
                </div>
                <div class="row justify-content-center pd-1">
                    <p class="sub-text"><?=$result[4]?></p>
                </div>
                <form action="transaksi.php" method="post">
                <div class="row">
                    <input type="hidden" name="table_transaksi_idbarang" value="<?=$result[0]?>">
                    <input type="hidden" name="table_transaksi_namabarang" value="<?=$result[1]?>">
                    <input type="hidden" name="table_transaksi_harga" value="<?=$result[2]?>">
                    <input type="hidden" name="table_transaksi_jumlah" value="<?=$result[3]?>">
                    <div class="col-lg-4 col-md-4 col-sm-2 "><input type="submit" class="btn btn-primary" value="Take Out"></div>
                    <div class="col-lg-4 col-md-4 col-sm-5 text-right text-secondary"><?=$result[2]?></div>
                    <div class="col-lg-4 col-md-4 col-sm-5 text-right text-secondary">Stock <?=$result[3]?></div>
                </div>
                </form>
            </div>
        <?php
            };
        ?>
        </div>
    </div>
    <footer class="footer-copyright text-center py-3">© 2019 Copyright :
        <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
    </footer>
    </div>
    <div class="container-fluid ps-fixed pop-out" id="SignIn">
        <div class="row">
            <div class="col-sm-9 col-md-6 col-lg-4 mx-auto">
                <div class="card card-sign-in" style="margin:34vh 0">
                    <div class="card-body ps-relative">
                        <div class="close-btn"><i class="fas fa-times" onclick="SellerSignOut()"></i></div>
                        <h5 class="card-title text-center">Sign In</h5>
                        <form action="login.php" method="post" class="form-sign-in">
                                <input type="email" name="email" class="form-control" placeholder="Email Goes Here...">
                                <input type="password" name="password" class="form-control" placeholder="Password Goes Here...">
                                <input type="submit" class="btn btn-primary btn-block text-uppercase" value="Sign-In" name="signin">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid ps-fixed pop-out" id="Register">
        <div class="row">
            <div class="col-sm-9 col-md-6 col-lg-4 mx-auto">
                <div class="card card-sign-in" style="margin:34vh 0">
                    <div class="card-body ps-relative">
                        <div class="close-btn"><i class="fas fa-times" onclick="RegisterOut()"></i></div>
                        <h5 class="card-title text-center">Register</h5>
                        <form action="register.php" method="post" class="form-sign-in">
                                <input type="email" name="inputemail" class="form-control" placeholder="Email Goes Here...">
                                <input type="password" name="inputpassword" class="form-control" placeholder="Password Goes Here...">
                                <input type="submit" class="btn btn-primary btn-block text-uppercase" value="Register" name="register">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<!-- Wrapper end Here -->
    <script type="text/javascript" src="function.js"></script>
</body>
</html>