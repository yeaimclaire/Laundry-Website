<?php
//post mengirimkan data atau nilai langsung ke action untuk ditampung
//get menampilkan data atau nilai pada url kemudian ditampung oleh action
    if($_POST){
        $username=$_POST['username'];
        $password=$_POST['password'];
    if(empty($username)){
        echo "<script>alert('Username tidak boleh kosong');location.href='index.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('Password tidak boleh kosong');location.href='index.php';</script>";
    } else {

    include "koneksi.php";
    $qry_login=mysqli_query($koneksi,"select * from user where username = '".$username."' and password = '".md5($password)."'");
    if(mysqli_num_rows($qry_login)>0){
        $dt_login=mysqli_fetch_array($qry_login);session_start();
        $_SESSION['id_user']=$dt_login['id_user'];
        $_SESSION['nama']=$dt_login['nama'];
        $_SESSION['status_login']=true;
        echo "<script>alert('Login Berhasil');location.href='home.php';</script>";
    } else {
        echo "<script>alert('Username dan Password tidak benar');location.href='index.php';</script>";
    }
}
}
?>