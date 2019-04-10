<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<style>
    .border-active {
        border:solid thin;
    }
</style>
<body>
    <div class="container w-100">
    <div class="row">
        <h1 class="lead text-center m-3">Input Barang</h1>
    </div>
    <form action="inputdatasell.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="size" value="1000000">
        <div class="form-row my-3">
            <div class="col-lg-6">
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="inputbarang">Nama Product</label>
                        <input type="text" class="form-control is-valid" id="inputbarang" name="produk_table_nama">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-6 col-sm-6">
                        <label for="inputharga">Harga</label>
                        <input type="number" class="form-control is-valid" id="inputharga" name="produk_table_harga">
                    </div>
                    <div class="form-group col-lg-6 col-sm-6">
                        <label for="inputstock">Stock</label>
                        <input type="number" class="form-control is-valid" id="inputstock" name="produk_table_stock">
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-md-12">
                        <input type="file" class="form-control is-valid" name="produk_table_gambar">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <input type="submit" value="Submit" class="btn btn-primary" name="input">
                    </div>
                </div>
            </div>
            <div class="form-group col-lg-6">
                <label for="inputdesc">Deskripsi</label>
                <textarea class="form-control is-valid" id="inputdesc" name="produk_table_desc"></textarea>
            </div>
        </div>
    </form>
    </div>
</body>
</html>