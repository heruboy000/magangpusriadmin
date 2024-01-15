<?php include 'header.php';
include 'koneksi.php'; ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <a href="kelolaUsertambah.php" class="btn btn-sm btn-primary shadow-sm float-right pull-right"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah User</a>
</div>
<div class="row">
    <div class="col-md-12 mb-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="table">
                        <thead class="bg-primary text-white text-center">
                            <tr>
                                <th width="10px">No.</th>
                                <th>Nama</th>
                                <th>email</th>
                                <th>Password</th>
                                <th>level</th>
                                <th>Aksi</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            <?php $nomor = 1; ?>
                            <?php $ambil = $koneksi->query("SELECT*FROM akun "); ?>
                            <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                                <tr>
                                    <td class="text-center"><?php echo $nomor; ?></td>
                                    <td><?php echo $pecah['nama'] ?></td>
                                    <td><?php echo $pecah['email'] ?></td>
                                    <td><?php echo $pecah['password'] ?></td>
                                    <td><?php echo $pecah['level'] ?></td>
                                    <td>
                                    <a href="userUbah.php?id=<?php echo $pecah['idakun']; ?>" class="btn btn-warning m-1">Edit</a>
                                        <a href="userHapus.php?id=<?php echo $pecah['idakun']; ?>" class="btn btn-danger m-1" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data ?')">Hapus</a>
                                    </td>
                                  
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