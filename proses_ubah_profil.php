<?php
if($_POST){
$id_user=$_POST['id_user'];
$nama=$_POST['nama'];
$username=$_POST['username'];
$password=$_POST['password'];

if(empty($nama)){
    echo "<script>alert('nama tidak boleh kosong');location.href='ubah_profil.php';</script>";
}elseif(empty($username)){
    echo "<script>alert('username tidak boleh kosong');location.href='ubah_profil.php';</script>";
}elseif(empty($password)){
    echo "<script>alert('password tidak boleh kosong');location.href='ubah_profil.php';</script>";
} else {
include "koneksi.php";

$update=mysqli_query($koneksi,"update user set nama='".$nama."',username='".$username."' ,password='".md5($password)."' where id_user = '".$id_user."' ") or die(mysqli_error($koneksi));
if($update){
    echo "<script>alert('Sukses update profil');location.href='profil.php';</script>";
} else {
    echo "<script>alert('Gagal update profil');location.href='profil.php?id_user=".$id_user."';</script>";
}
}
}
?>