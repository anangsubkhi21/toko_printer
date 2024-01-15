<?php
session_start();
require 'functions.php';

if(!isset($_SESSION["username"])){
    echo "
    <script type='text/javascript'>
        alert('Silahkan login terlebih dahulu, ya!');
        window.location = '../auth/login/index.php';
    </script>
    ";
}

if(isset($_POST["tambah"])){
    if(tambahProduk($_POST) > 0){
        echo"
            <script type='text/javascript'>
                alert('Data produk berhasil ditambahkan');
                window.location = 'produk.php';
            </script>
        ";
    }else{
        echo"
        <script type='text/javascript'>
            alert('yha:(Data produk gagal ditambahkan');
            window.location = 'produk.php';
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
    <title>Tambah Data Produk</title>
</head>
<body>

    <div class="content">
        <h3>Tambah Data Produk - Toko Printer JP1</h3>
        <form action="" method="POST" enctype="multipart/form-data">
        <label for="nama_produk">Nama Produk</label><br />
        <input type="text" name="nama_produk" id="nama_produk" class="form-control"><br />

        <label for="harga">Harga</label><br />
        <input type="text" name="harga" id="harga" class="form-control"><br />

        <label for="foto">Foto</label><br />
        <input type="file" name="foto" id="foto" class="form-control"><br />

        <label for="stok">stok</label><br />
        <input type="number" name="stok" id="stok" class="form-control"><br />

        <label for="deskripsi">Deskripsi</label><br />
        <textarea name="deskripsi" id="deskripsi" cols="30" rows="10"></textarea><br />

        <button type="submit" name="tambah">Tambah</button>
        </form>
    </div>

</body>
</html>