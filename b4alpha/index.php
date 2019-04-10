<!-- Doctype -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <!-- Meta tags always come first -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Link css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index1.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>
<style>
a{
    color:black;
}
.form-sign-in input{
        margin: 20px 0;
    }
.container {
    margin-bottom:50px;
}
.jumbotron {
    background-image: url(img/43395018_p0.jpg);
    background-repeat:no-repeat;
    background-size:cover;
    background-position: top;
    color:white;
    padding:100px;
}
.about img {
    width:100%;
    height:100%;
    border-radius:50%;
}
.desc {
    border-left:8px solid rgb(0, 123, 255); 
    padding:2em;
}
.desc p {
    line-height:2;
}
.cust-title-sect{
    font-size:30px;
    font-weight:bolder;
    justify-content:center;
    padding-bottom:20px;
}
footer {
    background-color:rgb(248, 249, 250);
}
.close-btn{
    cursor:pointer;
}
.pop-out {
    transition:.5s ease;
    visibility:hidden;
}
.ps-fixed {
    position:fixed;
}
.ps-absolute {
    position:absolute;
}
</style>
<body>
<div class ="wrapper ps-absolute" style="width:100%;">
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
                    <a href="buyerpage.php" class="nav-link">Shop</a>
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
    <header class="jumbotron my-4">
        <h1 class="display-4">Selamat Datang Di Toko Saya</h1>
        <p class="lead">Website TokoKu ini dilatar belakangi oleh sebuah tugas yang diberikan oleh teman saya bernama 
            <br>Tiyan Qudni Attrimidzi</p>
        <hr class="my-4">
        <p class="lead">Website ini dibuat dengan tujuan memperdalam Skill PHP</p>
        <a href="" class="btn btn-primary btn-lg">Learn More</a>
    </header>
    <div class="container about">
    <div class="row cust-title-sect">
        About Me
    </div>
    <div class="row">
        <div class="col-sm-3">
            <img src="img/30317664.png" alt="" class="image-fluid">
        </div>
        <div class="col-sm-9 desc">
            <h3>Muh Fachrul</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus, quae. Consectetur, ipsam. Reprehenderit culpa officiis maiores quo sunt eum dolorem possimus, voluptate suscipit ratione libero quos repellendus ut iste veniam.</p>
        </div>
    </div>
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
<script src="js/bootstraps.min.js"></script>
<script src="function.js"></script>
</body>
</html