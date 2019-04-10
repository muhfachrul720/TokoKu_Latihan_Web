<?php

    include "koneksi.php";

    if(isset($_POST['register'])){
        if(empty($_POST['inputemail']) || empty($_POST['inputpassword'])){
            echo "<script>alert('Sorry Email and Password Are Empty')</script>";
            echo "<script> document.location.href='index.php';</script>";
        }
        else {
            $email = $_POST['inputemail'];
            $password = $_POST['inputpassword'];
            $sql = "INSERT INTO `tokoku` (`Tokoku_member_email`, `Tokoku_member_password`) VALUES ('$email', '$password')";
            $check = mysqli_query($con, $sql);
    
            if ($check){
                echo "<script>alert('Berhasil Masuk Data')</script>";
                echo "<script> document.location.href='index.php';</script>";
            }
        }
    }

?>