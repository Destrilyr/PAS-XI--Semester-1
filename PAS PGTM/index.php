<?php
 
require 'function.php';
require './template/header.php';
$produk = queryProduk("SELECT * FROM produk");
$last_produkid = queryProduk("SELECT MAX(id_produk) from produk");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produk</title>
</head>
<style>
    table{
        margin: auto;
        background: pink;
        font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }
    h1{
        text-align: center;
        color: aqua;
        
    }
    a.tambah{
        color: black;
    }
    body{
        background-color: green;
    }
</style>
<body>
    <h1>Data Produk</h1>
   <button><a href="tambah_produk.php" class="tambah">Tambah Produk</a></button> 
    <table border="2" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Foto</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>

        <?php $no = 1; ?>
        
        <?php foreach ($produk as $a) : ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $a["nama_produk"]; ?></td>
                <td>Rp <?= number_format($a["harga"]); ?></td>
                <td><?= $a["stok"]; ?></td>
                <td><img src="./image/<?= $a["foto"];?>"width="100"></td>
                <td><?= $a["deskripsi"]; ?></td>
                <td>
                   <button><a href="hapus_produk.php?id=<?= $a["id_produk"]; ?>" onClick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</a></button> 
                    <button><a href="edit_produk.php?id_produk=<?= $a["id_produk"]; ?>">Edit</a></button>
                </td>
            </tr>
            <?php $no++; ?>
        <?php endforeach; ?>
    </table>
</body>
<?php
require'./template/footer.php';
?>
</html>