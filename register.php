<?php 
include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Admin</title>

    <link href="img/logosmp.png" rel="shortcut icon">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<style class="text/css">
    body {
        background-color: #F5F5DC;
        width: 100%;
        height: 100vh;
        background-size: cover;
    }
</style>

<body>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-5">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">

                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <img src="img/pusri.png" width="150" height="80">
                                        <p></p>
                                        <h1 class="h4 text-gray-900 mb-4 text-uppercase">Register</h1>
                                        <h1 class="h4 text-gray-900 mb-4">Aplikasi Pengelolaan Data Mahasiswa Magang PT. Pusri</h1>

                                    </div>
                                    <form method="post" class="form-horizontal" >
                    <div class="form-group">
                        <label class="control-label">Nama</label>
                        <input type="text" inputmode="numerics" name="nama" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label">email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label">password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                 
                   
                    <div class="col-md-12">
                        <div class="form-group">
                            <br>
                            <button class="btn btn-primary float-right" name="simpan">Simpan</button>
                        </div>
                    </div>
                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

<?php
if (isset($_POST["simpan"])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $level = $_POST['level'];
   
 


    $sql = "INSERT INTO akun(nama, email, password, level) 
                VALUES('$nama','$email','$password','user')";
    $koneksi->query($sql) or die(mysqli_error($koneksi));

  

    echo "<script>alert('Data berhasil di tambah')</script>";
    echo "<script>location='login.php';</script>";
}
?>

</html>