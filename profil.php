<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Admin</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>
<body>
    <?php
        include "navbar.php"; 
        include "koneksi.php";
        $query_profil = mysqli_query($koneksi, "SELECT * FROM user 
        where id_user = '".$_SESSION['id_user']."'");
        $data_user=mysqli_fetch_array($query_profil);
        ?>
    
        
            
            <br><br><br>
            <div class="container">
        <div class="card">
            <div class="card-header" style="background-color: #D3DEDC;">
    <h1 class= "text-center text-white">Data Pelanggan</h1>
            </div>
            <div class="card-body">
        <table class="table table-striped text-white" style="background-color: #7C99AC;">
        <thead style="text-align: left;">
                    <tr>
                        <td>ID User</td>
                        <td>:</td>
                        <td><?=$data_user["id_user"]?></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?=$data_user["nama"]?></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td>:</td>
                        <td><?=$data_user["username"]?></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>:</td>
                        <td><?=$data_user["password"]?></td>
                    </tr>
                </thead>
</table>
<a href="home.php" class="btn text-white" style="background-color: #92A9BD;">Kembali ke halaman utama</a>
        <div style="float: right;">
        <a
            href="ubah_profil.php?id_user=<?=$data_user['id_user']?>"
            class="btn text-white" style="background-color: #92A9BD;">Ubah Akun Ini</a> | <a
            href="hapus_profil.php?id_user=<?=$data_user['id_user']?>"
            onclick="return confirm('Apakah anda yakin menghapus data ini?')" 
            class="btn btn-danger">Hapus Akun Ini</a>
    </div>
        </div>
    </div>
        
    </div>          
</body>
</html>