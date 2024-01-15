<?php 
include 'header.php';
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $ambil = $koneksi->query("SELECT * FROM akun WHERE idakun='$id'");
    $data = $ambil->fetch_assoc();
    
    if (empty($data)) {
        echo "<script>alert('Data tidak ditemukan');window.location='kelolaUser.php';</script>";
        exit;
    }
} else {
    echo "<script>alert('ID tidak ditemukan');window.location='kelolaUser.php';</script>";
    exit;
}

?>

<div class="row">
    <div class="col-md-12 mb-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Edit mahasiswa</h6>
            </div>
            <div class="card-body">
                <form method="post" class="form-horizontal">
                    <div class="form-group">
                        <label class="control-label">Nama</label>
                        <input type="text" inputmode="text" name="nama" class="form-control" value="<?= $data['nama'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Email</label>
                        <input type="email" name="email" class="form-control" value="<?= $data['email'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Password</label>
                        <input type="text" name="password" class="form-control" value="<?= $data['password'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Level</label>
                        <select name="level" class="form-control" required>
                            <option value="Admin" <?= $data['level'] == 'Admin' ? 'selected' : ''; ?>>Admin</option>
                            <option value="user" <?= $data['level'] == 'user' ? 'selected' : ''; ?>>User</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <br>
                        <button class="btn btn-primary float-right" name="simpan">Simpan</button>
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

    $sql = "UPDATE akun SET
                nama = '$nama',
                email = '$email',
                password = '$password',
                level = '$level'
            WHERE idakun = '$id'";
    
    $koneksi->query($sql) or die(mysqli_error($koneksi));

    echo "<script>alert('Data berhasil diedit')</script>";
    echo "<script>window.location='kelolaUser.php';</script>";
}
?>
