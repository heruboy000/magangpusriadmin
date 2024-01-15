<?php include 'header.php';
include 'koneksi.php'; ?>
<div class="row">
    <div class="col-md-12 mb-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Tambah User</h6>
            </div>
            <div class="card-body">
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
                        <input type="text" name="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label">level</label>
                        <select type="text" name="level" class="form-control" required>
                            <option value=""></option>
                            <option value="Admin">Admin</option>
                            <option value="user">User</option>
                        </select>
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
<?php include 'footer.php'; ?>
<?php
if (isset($_POST["simpan"])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $level = $_POST['level'];
   
 


    $sql = "INSERT INTO akun(nama, email, password, level) 
                VALUES('$nama','$email','$password','$level')";
    $koneksi->query($sql) or die(mysqli_error($koneksi));

    echo "<script>alert('Data berhasil di tambah')</script>";
    echo "<script>location='kelolaUser.php';</script>";
}
?>