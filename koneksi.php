<?php
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $database = "ukl_laundry";

    //buat koneksi
    $koneksi = mysqli_connect($serverName, $userName, $password, $database);

    //cek koneksi
    // if (!$koneksi) {
    //     die("Koneksi Gagal".mysqli_connect_error());
    // }
    // else {
    //     echo "Koneksi Berhasil";
    // }
?>