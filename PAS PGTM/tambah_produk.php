<?php

require 'function.php';
require './template/header.php';

if (isset($_POST["submit"])) {
    if (tambahProduk($_POST) > 0) {
        echo "
        <script type='text/javascript'>
            alert('Data berhasil ditambahkan');
            window.location = 'index.php'
        </script>
       ";
    } else {
        echo "  
        <script type='text/javascript'>
            alert('Data gagal ditambahkan');
            window.location = 'tambahproduk.php'
        </script>
       ";
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
</head>
<style>
    h1{
        text-align: center;
        color: aqua;
    }
    body{
        background-color: green;
    }
    label{
        color: white;
    }
</style>
<body>
    <div class="tambah-produk">
        <h1>Tambah Produk</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <label>Nama Sepatu</label><br />
            <input type="text" name="nama_produk" class="form-control"><br /> <br />

            <label>Harga</label><br />
            <input type="number" name="harga" class="form-control"><br /><br />

            <label>Stok</label><br>
            <input type="number" name="stok" class="form-control"><br><br>


            <label>Foto</label><br />
            <input type="file" name="foto" class="form-control"><br /> <br />
            
            <label>Deskripsi Produk</label><br>
            <textarea name="deskripsi" id="" cols="30" rows="7"></textarea><br><br>

            <button type="submit" name="submit">Tambah</button>
            <a href="index.php">Back</a>
        </form>
       
    </div>
</body>
<?php
require './template/footer.php';

?>
</html>