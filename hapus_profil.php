<?php 
    include "koneksi.php";
    
    $id_user = $_GET['id_user'];

    //mendapatkan data buku yang diubah
    $sql = "select * from user where id_user='$id_user'";
    //eksekusi perintah sql
    $query = mysqli_query($koneksi, $sql);
    //konversi ke array
    $user= mysqli_fetch_array($query);

    $sql = "delete from user where id_user = '$id_user'";

    //eksekusi perintah update
    $result = mysqli_query($koneksi, $sql);

    if ($result) {
        echo "<script>alert('Berhasil');location.href='profil.php';</script>";
    }
    else {
        echo "<script>alert('Gagal');location.href='profil.php';</script>";
    }

?>