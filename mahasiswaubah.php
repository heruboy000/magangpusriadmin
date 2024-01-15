<?php include 'header.php';
include 'koneksi.php'; ?>
<?php
$ambil = $koneksi->query("SELECT * FROM mahasiswa WHERE idmahasiswa='$_GET[id]'");
$data = $ambil->fetch_assoc();
?>
<div class="row">
    <div class="col-md-12 mb-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Edit mahasiswa</h6>
            </div>
            <div class="card-body">
                <form method="post" class="form-horizontal" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="control-label">NIM</label>
                        <input type="number" inputmode="numerics" name="nim" class="form-control" value="<?= $data['nim'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Nama</label>
                        <input type="text" name="nama" class="form-control" value="<?= $data['nama'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Jenis Kelamin</label>
                        <select type="text" name="jeniskelamin" class="form-control" required>
                            <option value=""></option>
                            <option value="Laki-laki" <?= $data['jeniskelamin'] == 'Laki-laki' ? 'selected' : ''; ?>>Laki-laki</option>
                            <option value="Perempuan" <?= $data['jeniskelamin'] == 'Perempuan' ? 'selected' : ''; ?>>Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Semester</label>
                        <input type="text" name="semester" class="form-control" value="<?= $data['semester'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Jurusan</label>
                        <input type="text" name="jurusan" class="form-control" value="<?= $data['jurusan'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Prodi</label>
                        <input type="text" name="prodi" class="form-control" value="<?= $data['prodi'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Tahun Angkatan</label>
                        <select name="idangkatan" class="form-control" required>
                            <option value="">-- Pilih --</option>
                            <?php
                            $angkatan = $koneksi->query("SELECT * FROM `angkatan` order by `tahun` asc");
                            while ($row = $angkatan->fetch_assoc()) :
                            ?>
                                <option value="<?php echo $row['idangkatan'] ?>" <?= $data['idangkatan'] == $row['idangkatan'] ? 'selected' : ''; ?>><?php echo  $row['tahun'] ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Email</label>
                        <input type="email" name="email" class="form-control" value="<?= $data['email'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Alamat</label>
                        <textarea name="alamat" id="" rows="3" class="form-control"><?= $data['alamat'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label class="control-label">No HP</label>
                        <input type="number" name="nohp" class="form-control" value="<?= $data['nohp'] ?>" required min="0">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Tanggal Masuk Magang</label>
                        <input type="date" name="tanggalmasuk" class="form-control" value="<?= $data['tanggalmasuk'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Tanggal Keluar Magang</label>
                        <input type="date" name="tanggalkeluar" class="form-control" value="<?= $data['tanggalkeluar'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Foto KTM</label>
                        <input type="file" name="foto_ktm_update" class="form-control">
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
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $semester = $_POST['semester'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $idangkatan = $_POST['idangkatan'];
    $jurusan = $_POST['jurusan'];
    $prodi = $_POST['prodi'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['nohp'];
    $tanggalmasuk = $_POST['tanggalmasuk'];
    $tanggalkeluar = $_POST['tanggalkeluar'];

    // Check if a new image is uploaded
    if (!empty($_FILES["foto_ktm_update"]["name"])) {
        // Handle file upload
        $foto_ktm = $_FILES["foto_ktm_update"]["name"];
        $foto_ktm_tmp = $_FILES["foto_ktm_update"]["tmp_name"];
        move_uploaded_file($foto_ktm_tmp, "upload/" . $foto_ktm);
    } else {
        // No new image uploaded, retain the old image
        $queryImage = "SELECT foto_ktm FROM mahasiswa WHERE idmahasiswa='$_GET[id]'";
        $resultImage = mysqli_query($koneksi, $queryImage);
        $rowImage = mysqli_fetch_assoc($resultImage);
        $foto_ktm = $rowImage['foto_ktm'];
    }
    $sql = "UPDATE mahasiswa SET
                idangkatan = '$idangkatan',
                nim = '$nim',
                nama = '$nama',
                jeniskelamin = '$jeniskelamin',
                semester = '$semester',
                jurusan = '$jurusan',
                prodi = '$prodi',
                email = '$email',
                alamat = '$alamat',
                nohp = '$nohp',
                foto_ktm = '$foto_ktm',
                tanggalmasuk = '$tanggalmasuk',
                tanggalkeluar = '$tanggalkeluar'
            WHERE idmahasiswa = '$_GET[id]'";
    $koneksi->query($sql) or die(mysqli_error($koneksi));

    echo "<script>alert('Data berhasil di edit')</script>";
    echo "<script>location='mahasiswadaftar.php';</script>";
}
?>