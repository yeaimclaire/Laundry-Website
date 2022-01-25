<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Akun</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>
<body>
    <?php
    include "koneksi.php";
    $qry_get_user = mysqli_query($koneksi, "select * from user where id_user = '".$_GET['id_user']."'");
    $dt_user=mysqli_fetch_array($qry_get_user);
    ?>
     <div class="p-3 mb-2">
    <div class = "container">
    <h3  class = "text-center">Ubah Profil</h3> 
    <form action="proses_ubah_profil.php" method="post" enctype="multipart/form-data">
        <input type = "hidden" name="id_user" value ="<?=$dt_user['id_user']?>">

        Nama :
        <br><input type ="text" name ="nama" value ="<?=$dt_user['nama']?>" class = "form-control"></br>

        Username : 
        
        <br><input type ="text" name ="username" value ="<?=$dt_user['username']?>" class = "form-control"></br>
          
        Password :
        <br><input type ="password" name ="password" value ="<?=$dt_user['password']?>" class = "form-control"></br>

        <br><input type="submit" name="simpan" value="Ubah Profil" class="w-100 btn btn-lg text-white" style="background-color: #92A9BD;">
        </br>
    </form>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
   
</body>
</html>