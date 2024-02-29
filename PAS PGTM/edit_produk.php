<?php
require 'function.php';
require './template/header.php';

$id = $_GET["id_produk"];
$produk = queryProduk("SELECT * FROM produk WHERE id_produk = '$id'")[0];

if (isset($_POST["submit"])) {
    if (editProduk($_POST) > 0) {
        echo "
        <script type='text/javascript'>
            alert('Data berhasil diupdate');
            window.location = 'index.php'
        </script>
       ";
    } else {
        echo "  
        <script type='text/javascript'>
            alert('Data gagal diupdate');
            window.location = 'index.php'
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
    <title>Edit Produk</title>
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
        color:white;
    }
    
</style>
<body>
<div class="edit-produk">
        <h1>Edit Produk</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id_produk" value="<?= $produk["id_produk"]; ?>">
            <label>Nama Produk</label><br />
            <input type="text" name="nama_produk" class="form-control" value="<?= $produk["nama_produk"]; ?>"><br /> <br />

            <label>Harga</label><br />
            <input type="number" name="harga" class="form-control" value="<?= $produk["harga"]; ?>"><br /><br />
           
            <label>Stok</label><br>
            <input type="number" name="stok" class="form-control" value="<?= $produk["stok"]; ?>"><br><br>

            <label>Foto</label><br />
            <input type="file" name="foto" class="form-control" value="<?= $produk["foto"]; ?>"><br /> <br />

            <label>Deskripsi Produk</label><br>
            <textarea name="deskripsi" id="" cols="30" rows="7"><?= $produk["deskripsi"]; ?></textarea><br><br>

            <button type="submit" name="submit">Edit</button>
            <button><a href="index.php"></a>Back</button>
        </form>
    </div>
</body>
<?php
require'./template/footer.php';
?>
</html>