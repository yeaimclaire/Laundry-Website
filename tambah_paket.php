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
    <h3 class="text-center">Tambah Paket Laundry</h3>
    <form action="proses_tambah_paket.php" method="post">
        <br>
        Jenis Laundry :
        <input type="text" name="jenis" value="" class="form-control">
        <br>
        Harga : 
        <input type="number" name="harga" value="" class="form-control">
        <br>
        Proses Pengerjaan : 
        <input type="number" name="proses" value="" class="form-control">
        <br>
        <input type="submit" name="simpan" value="Tambah Paket" class="w-100 btn btn-lg text-white" style="background-color: #92A9BD;">
    </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>