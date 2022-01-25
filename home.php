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
    <title>Home</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
<body>
<?php 
include "koneksi.php";
include "navbar.php";
            $qry_user=mysqli_query($koneksi,"select * from user");
            $qry_user=mysqli_query($koneksi,"select * from member");
            $no=0;
            while($data_user=mysqli_fetch_array($qry_user)){
                $no++;
            }
            $qry_laundry=mysqli_query($koneksi,"select * from transaksi");
            $no1=0;
            while($data_produk=mysqli_fetch_array($qry_laundry)){
                $no1++;
            }
            $qry_paket=mysqli_query($koneksi,"select * from paket");
            $no2=0;
            while($data_produk=mysqli_fetch_array($qry_paket)){
                $no2++;
            }
            $qry_outlet=mysqli_query($koneksi,"select * from user");
            $no3=0;
            while($data_user=mysqli_fetch_array($qry_user)){
                $no3++;
            }
      ?>
      <div class="row">
                <div class="profile-details1">
                <div class="name_job">
                <div class="name text-center"><h3>Welcome <b><?=$_SESSION['nama']?></b>!</h3></div>
            </div>
            </div>
    <div class="col-md-6 grid-margin transparent text-center" >
              <div class="row">
                <div class="col-md-6 mb-4 stretch-card" >
                  <div class="card card-tale">
                    <div class="card-body" style="background-color: #7C99AC;">
                    <div class="mb-4">Total Member</div>
                        <div class="fs-30 mb-2"><?=$no?></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <div class="card-body" style="background-color: #7C99AC;">
                      <div class="mb-4">Total Transaksi</div>
                            <div class="fs-30 mb-2"><?=$no1?></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                  <div class="card card-light-blue">
                    <div class="card-body" style="background-color: #7C99AC;">
                    <div class="mb-4">Total Paket</div>
                            <div class="fs-30 mb-2"><?=$no2?></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 stretch-card transparent">
                  <div class="card card-light-danger">
                    <div class="card-body" style="background-color: #7C99AC;">
                    <div class="mb-4">Total Admin</div>
                            <div class="fs-30 mb-2"><?=$no2?></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </main>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    
</body>
</html>