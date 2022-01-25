<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <?php
        include "navbar.php";
        include "koneksi.php";
    $qry_get_member = mysqli_query($koneksi, "select * from member where id_member = '".$_GET['id_member']."'");
    $dt_member=mysqli_fetch_array($qry_get_member);
    ?>
    <div class="container">
    <h3 class="text-center">Edit Pemesanan</h3>
    <form action="proses_tambah_pemesanan.php" method="post">
        <br>
        <input type = "hidden" name="id_transaksi" value ="<?=$dt_transaksi['id_transaksi']?>">
        Nama Pelanggan :
        <select name="id_member" class="form-control">
            <option></option>
            <?php
            include "koneksi.php";
            $qry_member=mysqli_query($koneksi,"select * from member");
            while($data_member=mysqli_fetch_array($qry_member)){
                if($data_member['id_member']==$dt_siswa['id_kelas']){
                    $select="selected";
                } else {
                    $select="";
                }
                echo '<option value="'.$data_member['id_member'].'">'.$data_member['nama'].'</option>';
            }
            ?>
        </select>
        <br>
        Jenis Laundry :
        <select name="id_paket" class="form-control">
            <option></option>
            <?php
            include "koneksi.php";
            $qry_paket=mysqli_query($koneksi,"select * from paket");
            while($data_paket=mysqli_fetch_array($qry_paket)){
                echo '<option value="'.$data_paket['id_paket'].'">'.$data_paket['jenis'].'</option>';
            }
            ?>
        </select>
        <br>
        Jumlah : 
        <input type="number" name="qty" value="" class="form-control">
        <br>
        Harga : 
        <input type="number" name="harga" value="" class="form-control">
        <br>
        Tanggal Pemesanan :
        <input type="date" name="tgl" value="" class="form-control">
        <br>
        Batas Waktu :
        <input type="date" name="batas_waktu" value="" class="form-control">
        <br>
        Tanggal Bayar :
        <input type="date" name="tgl_bayar" value="" class="form-control">
        <br>
        Status :
        <select name="status" class="form-control">
            <option></option>
            <option value="baru">Baru</option>
            <option value="proses">Proses</option>
            <option value="selesai">Selesai</option>
            <option value="diambil">Diambil</option>
        </select>
        <br>
        Dibayar :
        <select name="dibayar" class="form-control">
            <option></option>
            <option value="dibayar">Dibayar</option>
            <option value="belum_dibayar">Belum dbayar</option>
        </select>
        <br>
        Id User :
        <select name="id_user" class="form-control">
            <option></option>
            <?php
            include "koneksi.php";
            $qry_user=mysqli_query($koneksi,"select * from user");
            while($data_user=mysqli_fetch_array($qry_user)){
                echo '<option value="'.$data_user['id_user'].'">'.$data_user['nama'].'</option>';
            }
            ?>
        </select>
        <input type="submit" name="simpan" value="Tambah Pemesanan" class="w-100 btn btn-lg text-white" style="background-color: #92A9BD;">
    </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>