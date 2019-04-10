<?php
    include "koneksi.php";

    // Untuk Total Pembelian
    $sqlTotalBeli = "SELECT SUM(total_pembelian) AS total FROM (SELECT COUNT(table_transaksi_namabarang) as jumlah_barangdibeli, table_transaksi_harga, (table_transaksi_harga * COUNT(table_transaksi_namabarang)) AS total_pembelian FROM tokoku_transaksi GROUP BY table_transaksi_namabarang ORDER BY id_table_transaksi) p;";
    $cekTotalBeli = mysqli_query($con, $sqlTotalBeli);
    $rowTotalBeli = mysqli_fetch_array($cekTotalBeli);

    // Untuk Stock yang Tersisa
    $sqlStockTersisa = "SELECT SUM(produk_table_stock) FROM `tokoku_produk`;";
    $cekStockTersisa = mysqli_query($con, $sqlStockTersisa);
    $rowStockTersisa = mysqli_fetch_array($cekStockTersisa);

    // Untuk tampil List Barang yang ada
    $sqlListBarang = "SELECT produk_table_nama, produk_table_stock FROM tokoku_produk GROUP BY id_table_produk ORDER BY id_table_produk;";
    $cekListBarang = mysqli_query($con, $sqlListBarang);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<style>
    .jumbo-image-bg{
        background-image:url(img/72795228_p0.png);
        background-size:cover;
        background-position:center;
        background-repeat:no-repeat;
        width:100%;
    }
    .bg-color-gray {
        background-color:rgb(248, 249, 250);
    }
    .overview {
        padding:20px;
        margin: 0 0px;
    }
    .border-left-blue {
        border-left:solid 5px rgb(77, 196, 255);
    }
</style>
<body>
<div class="wrapper">
   <div class="jumbotron my-3 jumbo-image-bg">
        <h1 class="display-4 text-white">Welcome User</h1>
        <p class="lead text-white">Hasil Penjualan hari ini ... </p>
   </div>
   <div class="container">
        <div class="row">
        <div class="col-lg-8">
            <div class="row">
                <div class="col-sm-6 my-2">
                    <div class="overview bg-color-gray border-left-blue">
                        <p class="lead">Total Penjualan</p>
                        <h1 class="display-4">Rp. <?=$rowTotalBeli[0]?></h1>
                    </div>
                </div>
                <div class="col-sm-6 my-2">
                    <div class="overview bg-color-gray border-left-blue">
                        <p class="lead">Total Stock Barang yang tersisa</p>
                        <h1 class="display-4"><?=$rowStockTersisa[0]?> Barang</h1>
                    </div>
                </div>
            </div>
        </div>
            <div class="col-lg-4 col-md-12 my-2 bg-color-gray border-left-blue">
                <div class="row-fluid">
                    <p class="lead p-2" style="border-bottom:solid thin;">Product</p>
                </div>
                <?php
                    while($rowListBarang = mysqli_fetch_array($cekListBarang)) {
                ?>
                <div class="row">
                    <div class="col-sm-9 px-4">
                        <?=$rowListBarang[0]?>
                    </div>
                    <div class="col-sm-3 text-center">
                        <?=$rowListBarang[1]?>
                    </div>
                </div>
                <?php
                    };
                ?>
            </div>
        </div>
   </div>
</div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>