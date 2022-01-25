<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi</title>
    <?php include "navbar.php"?>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title></title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<?php
    include "koneksi.php";
    ?>
    <br><br>
    <div class="container">
        <div class="card">
            <div class="card-header" style="background-color: #D3DEDC;">
    <h1 class= "text-center text-white">Data Transaksi</h1>
        <form action="transaksi.php" method="POST" class="d-flex">
        <input class="form-control me-2" type="search" name="cari" placeholder="Search" aria-label="Search">
            <button class="btn text-white" style="background-color: #92A9BD;" type="submit">Search</button>
        </form>
            </div>
            <div class="card-body">
        <table class="table text-white" style="background-color: #92A9BD;">
    <thead>
        <tr>
            <th scope="col">Tanggal Masuk</th>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Laundry</th>
            <th scope="col">Total</th>
            <th scope="col">Status Laundry</th>
            <th scope="col">Status Pembayaran</th>
            <!-- <th scope="col">Aksi</th> -->
        </tr>
  </thead>
  <tbody>
  <?php
            $qry_transaksi = mysqli_query($koneksi,"SELECT a.*, b.nama, SUM(c.harga) as total FROM transaksi a JOIN member b ON a.id_member=b.id_member JOIN detail_transaksi c ON a.id_transaksi=c.id_transaksi GROUP BY a.id_transaksi");
            while($data_transaksi=mysqli_fetch_array($qry_transaksi)){
                $qry_detail_transaksi = mysqli_query($koneksi,"SELECT a.*, b.jenis FROM detail_transaksi a JOIN paket b ON a.id_paket=b.id_paket WHERE a.id_transaksi = '".$data_transaksi['id_transaksi']."'");
                $detail = '<table border="0" style="border-collapse: collapse;">';
                while($data_detail_transaksi=mysqli_fetch_array($qry_detail_transaksi)){
                    $detail .= '
                        <tr>
                            <td>'.$data_detail_transaksi['jenis'].'</td>
                            <td>('.$data_detail_transaksi['qty'].')</td>
                            <td>'.$data_detail_transaksi['harga'].'</td>
                        </tr>
                    ';
                }
                $detail .= '</table>'; 
            ?>    
                <tr>
                    <td><?=$data_transaksi['tgl']?></td>
                    <td><?=$data_transaksi['id_transaksi']?></td>
                    <td><?=$data_transaksi['nama']?></td>
                    <td><?=$detail?></td>
                    <td>Rp <?=$data_transaksi['total']?>,00.</td>  
                    <td>
                    <form action="ubah_status.php" method="post">
                                                <input type="hidden" name="id_transaksi" value="<?=$data_transaksi['id_transaksi']?>">
                                                <select name="status" class="form-select">
                                                    <option value=""disabled selected><?=$data_transaksi['status']?></option>
                                                    <option value="baru">Baru</option>
                                                    <option value="proses">Proses</option>
                                                    <option value="selesai">Selesai</option>
                                                    <option value="diambil">DIambil</option>
                                                </select>
                                                <input type="submit" value="OK" class="btn" style="background-color: #D3DEDC;">
                                            </form>                   
                    </td>                   
                    <td>
                        <form action="ubah_status_bayar" method="get">
                        <select name="dibayar" class="form-select">
                            <option value=""selected><?=$data_transaksi['dibayar']?></option>
                            <option value="dibayar">Dibayar</option>
                        </select>
                        <a type="submit" value="Bayar" name="status" class="btn" style="background-color: #D3DEDC;" href="ubah_bayar.php?id_member=<?php echo $data_transaksi['id_member']?>">
                            Bayar
                        </a>
                        </form>                   
                    </td> 
                    <!-- <td><a href="detail_transaksi.php?id_transaksi=<?=$data_transaksi['id_transaksi']?>" class="btn"style="background-color: #D3DEDC;"><img class="bi d-block mx-auto mb-1" src="stuff/editing.png" width="15" height="15"></a> -->
                </tr>                  
            <?php 
                } 
            ?>       
    </table>
    <a class="btn text-white" style="background-color: #92A9BD;" href="#" onclick="window.print();" role="button">Cetak Laporan</a>
</table>
    </div>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>