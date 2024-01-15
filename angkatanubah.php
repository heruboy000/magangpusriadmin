<?php include 'header.php';
include 'koneksi.php'; ?>
<?php
$ambil = $koneksi->query("SELECT * FROM angkatan WHERE idangkatan='$_GET[id]'");
$data = $ambil->fetch_assoc();
?>
<div class="row">
    <div class="col-md-12 mb-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Edit Angkatan</h6>
            </div>
            <div class="card-body">
                <form method="post" class="form-horizontal">
                    <div class="form-group">
                        <label class="control-label">Nama Tahun Angkatan</label>
                        <input type="text" name="tahun" class="form-control" value="<?= $data['tahun'] ?>" required>
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
    $tahun = $_POST['tahun'];

    $sql = "UPDATE angkatan SET tahun='$tahun' WHERE idangkatan='$_GET[id]'";
    $koneksi->query($sql) or die(mysqli_error($koneksi));

    echo "<script>alert('Data berhasil di edit')</script>";
    echo "<script>location='angkatandaftar.php';</script>";
}
?>