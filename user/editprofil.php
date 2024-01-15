<?php
include 'header.php';
include 'koneksi.php';
?>
<?php
$idakun = $_SESSION["user"]['idakun'];
$ambil = $koneksi->query("SELECT *FROM akun WHERE idakun='$idakun'");
$pecah = $ambil->fetch_assoc(); ?>


<body class="bg-gradient-primary">

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
                                        <h1 class="h4 text-gray-900 mb-4">Edit Profil</h1>
                                    </div>
                                    <form class="user" method="post" action="">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input value="<?php echo $pecah['nama']; ?>" type="text" value="" class="form-control" name="nama">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input value="<?php echo $pecah['email']; ?>" type="email" class="form-control" name="email">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" name="password">
                                            <input type="hidden" class="form-control" name="passwordlama" value="<?php echo $pecah['password']; ?>">
                                            <span class="text-primary">Kosongkan Password jika tidak ingin mengganti</span>
                                        </div>
                                        <button type="submit" name="ubah" class="btn btn-primary btn-user btn-block">Simpan</button>
                                        <hr>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <?php
    if (isset($_POST['ubah'])) {
        if ($_POST['password'] == "") {
            $password = $_POST['passwordlama'];
        } else {
            $password = $_POST['password'];
        }

        $koneksi->query("UPDATE akun SET password='$password',nama='$_POST[nama]', email='$_POST[email]' WHERE idakun='$idakun'") or die(mysqli_error($koneksi));
        echo "<script>alert('Profil Berhasil Di Ubah');</script>";
        echo "<script>location='beranda.php';</script>";
    }
    ?>
    <?php include 'footer.php'; ?>