<?php 
    if($_GET['id_paket']){ 
        include "koneksi.php";
        $qry_hapus=mysqli_query($koneksi,"DELETE FROM paket where id_paket='".$_GET['id_paket']."'");
        if($qry_hapus){
            echo "<script>alert('Sukses hapus paket');location.href='pemesanan.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus paket');location.href='pemesanan.php';</script>";
        }
    }
    else{
        echo "id_tidak ada";
    }
?>