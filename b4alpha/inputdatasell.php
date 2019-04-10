<?php

    include "koneksi.php";

    if(isset($_POST['input'])){
        if(empty($_POST['produk_table_nama']) || empty($_POST['produk_table_harga']) || empty($_POST['produk_table_stock']) || empty($_POST['produk_table_desc'])){
            echo "<script>alert('Maaf Anda Mengisi Kosong')</script>";
            echo "<script> document.location.href='dashboardseller.php';</script>";
        }
        else {
            $produkNama = $_POST['produk_table_nama'];
            $produkHarga = $_POST['produk_table_harga'];
            $produkStock = $_POST['produk_table_stock'];
            $produkDesc = mysqli_real_escape_string($con, $_POST['produk_table_desc']);
            $produkGambar = $_FILES['produk_table_gambar']['name'];
            $imageTarget = "uploadimg/".basename($produkGambar);

            $insertQuery =  "INSERT INTO `tokoku_produk` (`produk_table_nama`, `produk_table_harga`, `produk_table_stock`, `produk_table_desc`, `produk_table_gambar`) VALUES ('$produkNama', '$produkHarga', '$produkStock', '$produkDesc', '$produkGambar')";
           
            $cekInsert = mysqli_query($con, $insertQuery);
            move_uploaded_file($_FILES['produk_table_gambar']['tmp_name'], $imageTarget);


            if($cekInsert){
                echo "<script>alert('Data Telah Berhasil Masuk Gan')</script>";
                echo "<script> document.location.href='dashboardseller.php';</script>";
            }
            else {
                echo "<script>alert('Data Gagal Masuk Gan')</script>";
                echo "<script> document.location.href='dashboardseller.php';</script>";
            }
        }   
    }

?>