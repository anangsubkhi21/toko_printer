<?php

require '../koneksi.php';

function query($query){

    global $conn;

    $rows = [];

    $result = mysqli_query($conn, $query);

    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }

    return $rows;
}

function tambahProduk($data){
    global $conn;

    //deklarasiin data-dataa apa saja yang ingin kalian insert
    $nama_produk = htmlspecialchars($data["nama_produk"]);
    $harga = htmlspecialchars($data["harga"]);
    $foto = $_FILES["foto"]["name"];
    $files = $_FILES["foto"]["tmp_name"];
    $stok = htmlspecialchars($data["stok"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $roles = htmlspecialchars($data["roles"]);

    //insert data, menggunakan query INSERT INTO
    $query = "INSERT INTO produk VALUES (NULL, '$nama_produk', '$harga', '$foto', '$stok', '$deskripsi', '$roles')";

    // jalanin fungsi untuk upload file
    move_uploaded_file($files, "../assets/images/".$foto);

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function editProduk($data){
    global $conn;

    $id = htmlspecialchars($data["id_produk"]);
    $nama_produk = htmlspecialchars($data["nama_produk"]);
    $harga = htmlspecialchars($data["harga"]);
    $foto = $_FILES["foto"]["name"];
    $files = $_FILES["foto"]["tmp_name"];
    $stok = htmlspecialchars($data["stok"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $roles = htmlspecialchars($data["roles"]);

    if(empty($foto)){
        $query = "UPDATE produk SET
        nama_produk = '$nama_produk',
        harga = '$harga',
        stok = '$stok',
        deskripsi = '$deskripsi',
        roles = '$roles', WHERE id_produk = '$id'";

        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }else{
        
        $query = "UPDATE produk SET
        nama_produk = '$nama_produk',
        harga = '$harga',
        foto = '$foto',
        stok = '$stok',
        deskripsi = '$deskripsi',
        roles = '$roles', WHERE id_produk = '$id'";
        move_uploaded_file($files, "../foto/$foto");

        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }
}

function hapusProduk($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM produk WHERE id_produk = '$id'");
    return mysqli_affected_rows($conn);
}


function tambahUser($data){
    global $conn;

    $username = htmlspecialchars ($data["username"]);
    $nama_lengkap = htmlspecialchars ($data["nama_lengkap"]);
    $password = htmlspecialchars ($data["password"]);
    $role = htmlspecialchars ($data["role"]);

    $query = "INSERT INTO user VALUES(NULL,'$username', '$nama_lengkap', '$password', '$role')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapusUser($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM user WHERE id_user ='$id'");
    return mysqli_affected_rows($conn);
}

function editUser($data){
    global $conn;

    $id = htmlspecialchars ($data["id_user"]);
    $nama_lengkap = htmlspecialchars ($data["nama_lengkap"]);
    $username = htmlspecialchars ($data["username"]);
    $password = htmlspecialchars ($data["password"]);
    $roles = htmlspecialchars ($data["roles"]);

    $query = "UPDATE user SET
    nama_lengkap = '$nama_lengkap',
    username = '$username',
    password = '$password',
    roles = '$roles' WHERE id_user = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}