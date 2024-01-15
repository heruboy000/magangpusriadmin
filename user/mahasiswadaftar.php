<?php include 'header.php';
include 'koneksi.php'; ?>
<?php
if (isset($_SESSION["user"])) {
    
    $idakun = $_SESSION['user']['idakun'];
}

$ambil = $koneksi->query("SELECT*FROM mahasiswa where idakun = '$idakun'");
$pecah = $ambil->fetch_assoc();

if($pecah['idakun'] == NULL){ ?>
   
   
   <div class="row">
    <div class="col-md-12 mb-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">ISI DATA DIRI</h6>
            </div>
            <div class="card-body">
                <form method="post" class="form-horizontal" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="control-label">NIM</label>
                        <input type="number" inputmode="numerics" name="nim" class="form-control" required>
                    </div>
                    <div class="form-group">
                        
                        <input type="hidden" name="idakun" class="form-control" value="<?=$idakun?>" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Nama</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Jenis Kelamin</label>
                        <select type="text" name="jeniskelamin" class="form-control" required>
                            <option value=""></option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Semester</label>
                        <input type="text" name="semester" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Jurusan</label>
                        <input type="text" name="jurusan" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Prodi</label>
                        <input type="text" name="prodi" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Tahun Angkatan</label>
                        <select name="idangkatan" class="form-control" required>
                            <option value="">-- Pilih --</option>
                            <?php
                            $angkatan = $koneksi->query("SELECT * FROM `angkatan` order by `tahun` asc");
                            while ($row = $angkatan->fetch_assoc()) :
                            ?>
                                <option value="<?php echo $row['idangkatan'] ?>"><?php echo  $row['tahun'] ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Alamat</label>
                        <textarea name="alamat" id="" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="control-label">No HP</label>
                        <input type="number" name="nohp" class="form-control" required min="0">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Tanggal Masuk Magang</label>
                        <input type="date" name="tanggalmasuk" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Tanggal Keluar Magang</label>
                        <input type="date" name="tanggalkeluar" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Foto KTM</label>
                        <input type="file" name="foto_ktm" class="form-control">
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

   <?php
}else{ ?>

<div class="row">
    <div class="col-md-12 mb-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">DATA DIRI <span class="text-uppercase"><?=$pecah['nama']?></span></h6>
            </div>
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-md-9">
                       
                        <table class="border-none table table-striped" style="width:100%;">
                            <tr>
                                <td style="width:25%;">NIM </td>
                                <td>: <?=$pecah['nim'] ?></td>
                            </tr>
                            <tr>
                                <td style="width:25%;">Jenis Kelamin </td>
                                <td>: <?=$pecah['jeniskelamin'] ?></td>
                            </tr>
                            <tr>
                                <td style="width:25%;">Nama </td>
                                <td>: <?=$pecah['nama'] ?></td>
                            </tr>
                            <tr>
                                <td style="width:25%;">No.HP </td>
                                <td>: <?=$pecah['nohp'] ?></td>
                            </tr>
                            <tr>
                                <td style="width:25%;">Email </td>
                                <td>: <?=$pecah['email'] ?></td>
                            </tr>
                            <tr>
                                <td style="width:25%;">Jurusan </td>
                                <td>: <?=$pecah['jurusan'] ?></td>
                            </tr>
                            <tr>
                                <td style="width:25%;">Prodi </td>
                                <td>: <?=$pecah['prodi'] ?></td>
                            </tr>
                            <tr>
                                <td style="width:25%;">Semester </td>
                                <td>: <?=$pecah['semester'] ?></td>
                            </tr>
                            <tr>
                                <td style="width:25%;">Tanggal masuk </td>
                                <td>: <?=$pecah['tanggalmasuk'] ?></td>
                            </tr>
                            <tr>
                                <td style="width:25%;">Tanggal keluar </td>
                                <td>: <?=$pecah['tanggalkeluar'] ?></td>
                            </tr>
                            <tr>
                                <td style="width:25%;">Foto KTM </td>
                                <td>: 
                                    <?php if ($pecah['foto_ktm'] == NULL) : ?>

                                    <?php else : ?>
                                        <a href="../upload/<?= $pecah['foto_ktm'] ?>" class="text-decoration-underline" target="_blank">File</a>
                                    <?php endif; ?>
                                
                                </td>
                            </tr>
                            <tr>
                                <td style="width:25%;">File Laporan </td>
                                <td>: 
                                    <?php if ($pecah['filelaporan'] == NULL) : ?>
                                        <button type="button" class="btn btn-primary m-1" data-toggle="modal" data-target="#uploadModal<?php echo $pecah['idmahasiswa']; ?>">
                                            Upload File Laporan
                                        </button>
                                        <!-- Modal untuk upload file laporan -->
                                        <div class="modal fade" id="uploadModal<?php echo $pecah['idmahasiswa']; ?>" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="uploadModalLabel">Upload File Laporan</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <!-- Formulir untuk upload file -->
                                                        <form action="uploadlaporansimpan.php" method="post" enctype="multipart/form-data">
                                                            <input type="hidden" name="idmahasiswa" value="<?php echo $pecah['idmahasiswa']; ?>">
                                                            <div class="form-group">
                                                                <label for="filelaporan">Upload File Laporan:</label>
                                                                <input type="file" class="form-control" name="filelaporan" id="filelaporan">
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Upload</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php else : ?>
                                        <a href="../upload/<?= $pecah['filelaporan'] ?>" class="text-decoration-underline" target="_blank">File</a>
                                    <?php endif; ?>
                                
                                </td>
                            </tr>
                            
                        </table>
                    </button> <a href="mahasiswaubah.php?id=<?php echo $pecah['idmahasiswa']; ?>" class="btn btn-warning m-1">Edit</a>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    
    <?php
}


?>

<?php include 'footer.php'; ?>
<?php
if (isset($_POST["simpan"])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $idakun = $_POST['idakun'];
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
    $password = '123456';
    // Handle file upload
    $foto_ktm = $_FILES["foto_ktm"]["name"];
    $foto_ktm_tmp = $_FILES["foto_ktm"]["tmp_name"];
    move_uploaded_file($foto_ktm_tmp, "../upload/" . $foto_ktm);

    $sql = "INSERT INTO mahasiswa(idangkatan,idakun,nim,nama,jeniskelamin,semester,jurusan,prodi,email,alamat,nohp,foto_ktm,tanggalmasuk,tanggalkeluar) 
                VALUES('$idangkatan','$idakun','$nim','$nama','$jeniskelamin','$semester','$jurusan','$prodi','$email','$alamat','$nohp','$foto_ktm','$tanggalmasuk','$tanggalkeluar')";
    $koneksi->query($sql) or die(mysqli_error($koneksi));

    echo "<script>alert('Data berhasil di tambah')</script>";
    echo "<script>location='mahasiswadaftar.php';</script>";
}
?>