<?php

    include "koneksi.php";

    $jumlahBarang = $_POST['table_transaksi_jumlah'];
    $sisaStock = $jumlahBarang - 1;
    $idBarang = $_POST['table_transaksi_idbarang'];


    $sqlQueryAdd = "INSERT INTO `tokoku_transaksi` (`table_transaksi_namabarang`, `table_transaksi_harga`, `table_transaksi_jumlah`) VALUES ('$_POST[table_transaksi_namabarang]', '$_POST[table_transaksi_harga]', '$_POST[table_transaksi_jumlah]')";
    $sqlQueryUpdate = "UPDATE `tokoku_produk` SET `produk_table_stock` = '$sisaStock' WHERE `id_table_produk` = $idBarang";
    $sqlQueryCek = "SELECT * FROM `tokoku_produk` WHERE id_table_produk = $idBarang";
    $sqlQueryDelete = "DELETE FROM `tokoku_produk` WHERE `tokoku_produk`.`id_table_produk` = $idBarang";
    

    if(mysqli_query($con, $sqlQueryAdd))
    {
        if(mysqli_query($con, $sqlQueryUpdate))
        {
            $result= mysqli_query($con, $sqlQueryCek);
            $data = mysqli_fetch_array($result);
            if($data['produk_table_stock'] <= 0)
            {
                mysqli_query($con, $sqlQueryDelete);
            }
        }   
        echo "<script> document.location.href='buyerpage.php';</script>";
    }





?>