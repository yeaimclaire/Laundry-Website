<?php
session_start();
if ($_SESSION['status_login'] != true) {
    header('location:index.php');
}
?>
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
    ?>
    <div class="container">
    <h3 class="text-center">Tambah Pemesanan</h3>
    <form action="proses_tambah_pemesanan.php" method="post">
    <div class="form-group">
                    Nama Pelanggan :
                    <select name="id_member" class="form-control">
                        <?php 
                        include "koneksi.php";
                        $qry_member=mysqli_query($koneksi,"select * from member");
                        while($data_member=mysqli_fetch_array($qry_member)){
                            echo '<option value="'.$data_member['id_member'].'">'.$data_member['nama'].'</option>';    
                        }
                        ?>
                    </select>
                    <br>
                    </div>
                    <div class="form-group">
                    Batas Waktu :  
                    <input type="date" name="batas_waktu" value="" class="form-control" require>
                    <br>
                    </div>

                    <table class="table text-white" style="background-color: #92A9BD;">
                            <tr>
                        <th>Jenis</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                    </tr>
                    <?php 
                        include "koneksi.php";
                        $qry_paket=mysqli_query($koneksi,"select * from paket");
                        while($data_paket=mysqli_fetch_array($qry_paket)){
                            echo '<tr>
                                <td> 
                                    <input type="checkbox" id="'.$data_paket['id_paket'].'" name="'.$data_paket['id_paket'].'" value="'.$data_paket['id_paket'].'">
                                    <label for="'.$data_paket['id_paket'].'"> '.$data_paket['jenis'].'</label></td>
                                <td>
                                    <input type="number" name="harga_'.$data_paket['id_paket'].'" value="'.$data_paket['harga'].'" readonly>
                                </td>
                                <td>
                                    <input type="number" name="qty_'.$data_paket['id_paket'].'" value="">
                                </td>
                            </tr>';    
                        }
                    ?>
                </table>
                <br>
                <input type="submit" name="simpan" value="Tambah Pemesanan" class="w-100 btn btn-lg text-white" style="background-color: #92A9BD;">
                  </form>
                </div>
              </div>
            </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>