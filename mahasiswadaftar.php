<?php include 'header.php';
include 'koneksi.php'; ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <a href="mahasiswatambah.php" class="btn btn-sm btn-primary shadow-sm float-right pull-right"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Mahasiswa</a>
</div>
<div class="row">
    <div class="col-md-12 mb-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Data Magang</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="table">
                        <thead class="bg-primary text-white text-center">
                            <tr>
                                <th width="10px">No.</th>
                                <th>NIM</th>
                                <th>Nama Mahasiswa</th>
                                <th>Jenis Kelamin</th>
                                <th>Semester</th>
                                <th>Jurusan</th>
                                <th>Prodi</th>
                                <th>Nomor HP</th>
                                <th>Email</th>
                                <th>Foto KTM</th>
                                <th>Tanggal Masuk Magang</th>
                                <th>Tanggal Keluar Magang</th>
                                <th>File Laporan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $nomor = 1; ?>
                            <?php $ambil = $koneksi->query("SELECT*FROM mahasiswa order by idmahasiswa desc"); ?>
                            <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                                <tr>
                                    <td class="text-center"><?php echo $nomor; ?></td>
                                    <td><?php echo $pecah['nim'] ?></td>
                                    <td><?php echo $pecah['nama'] ?></td>
                                    <td><?php echo $pecah['jeniskelamin'] ?></td>
                                    <td><?php echo $pecah['semester'] ?></td>
                                    <td><?php echo $pecah['jurusan'] ?></td>
                                    <td><?php echo $pecah['prodi'] ?></td>
                                    <td><?php echo $pecah['nohp'] ?></td>
                                    <td><?php echo $pecah['email'] ?></td>
                                    <td><img src='upload/<?= $pecah['foto_ktm'] ?>' alt='Foto KTM' style='max-width: 100px; max-height: 100px;'></td>
                                    <td><?php echo tanggal($pecah['tanggalmasuk']) ?></td>
                                    <td><?php echo tanggal($pecah['tanggalkeluar']) ?></td>
                                    <td><?php if ($pecah['filelaporan'] == NULL) : ?>

                                        <?php else : ?>
                                            <a href="upload/<?= $pecah['filelaporan'] ?>" class="text-decoration-underline" target="_blank">File</a>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-primary m-1" data-toggle="modal" data-target="#uploadModal<?php echo $pecah['idmahasiswa']; ?>">
                                            Upload File Laporan
                                        </button> <a href="mahasiswaubah.php?id=<?php echo $pecah['idmahasiswa']; ?>" class="btn btn-warning m-1">Edit</a>
                                        <a href="mahasiswahapus.php?id=<?php echo $pecah['idmahasiswa']; ?>" class="btn btn-danger m-1" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data ?')">Hapus</a>

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
                                    </td>
                                </tr>
                                <?php $nomor++; ?>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>