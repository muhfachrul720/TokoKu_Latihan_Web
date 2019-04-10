<?php

    include "koneksi.php";

    session_start();

    if(isset($_POST['signin'])){
        if(empty($_POST['email']) || empty($_POST['password'])){
            echo "email kosong";
        }
        else {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $sql = "SELECT Tokoku_member_email,Tokoku_member_password FROM `tokoku_member` WHERE Tokoku_member_email = '$email' AND Tokoku_member_password = '$password' LIMIT 1";

            $row = mysqli_fetch_array(mysqli_query($con, $sql));

            if($row['Tokoku_member_email'] == $email && $row['Tokoku_member_password'] == $password){
                echo "<script> document.location.href='dashboardseller.php';</script>";
            }
            else {
                echo "<script>alert('Gagal Login Ulang Lagi')</script>";
                echo "<script> document.location.href='index.php';</script>";
            }
        mysqli_close($con);
        }
    }

?>