<?php

session_start();
require 'functions.php';

$id = $_GET["id"];
$produk = query("SELECT * FROM produk WHERE id_produk = '$id'")[0];

if(isset($_POST["kirim"])){
    if(editProduk($_POST) > 0){
        echo"
            <script type='text/javascript'>
                alert('Data produk berhasil diedit');
                window.location = 'produk.php'
            </script>
        ";
    }else{
        echo"
        <script type='text/javascript'>
            alert('Data produk gagal diedit');
            window.location = 'produk.php'
        </script>
    ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="produk">
    <div class="box">

        <h3>Edit Data Produk</h3>

        <form action="" method="POST" enctype="multipart/form-data">

            <input type="hidden" name="id_produk" value="<?= $produk["id_produk"]; ?>">

            <label for="nama_produk">Nama Produk</label><br />
            <input type="text" name="nama_produk" id="nama_produk" class="form-control" value="<?= $produk["nama_produk"] ?>"><br />
            
            <label for="harga">Harga Produk</label><br />
            <input type="number" name="harga" id="harga" class="form-control" value="<?= $produk["harga"] ?>"><br />

            <label for="foto">Foto</label><br />
            <input type="file" name="foto" id="foto" class="form-control" value="<?= $produk ["foto"] ?>"><br />
            
            <label for="stok">Stok Produk</label><br />
            <input type="number" name="stok" id="stok" class="form-control" value="<?= $produk["stok"] ?>"><br />

            <label for="deskripsi">Deskripsi Produk</label><br />
            <input type="deskripsi" name="deskripsi" id="deskripsi" class="form-control" value="<?= $produk["deskripsi"] ?>"><br />

            <button type="submit" name="kirim">Edit</button>
        </form>
    </div>
</div>
</body>
</html>