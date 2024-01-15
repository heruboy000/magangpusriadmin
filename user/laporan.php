<?php
include 'header.php';
include 'koneksi.php';
?>



<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Cetak Data Laporan </h5>
    </div>
    <div class="card-body">
        <form action="laporancetak.php" method="get" target="_blank">
            <div class="form-group row">
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <label for="">Tahun Angkatan:</label>
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <select name="angkatan" class="form-control" id="">
                        <option value="">Pilih</option>
                        <?php
                        $exec = mysqli_query($koneksi, "SELECT * FROM angkatan order by idangkatan");
                        while ($angkatan = mysqli_fetch_assoc($exec)) : ?>
                            <option value="<?= $angkatan['idangkatan'] ?>"><?= $angkatan['tahun'] ?></option>
                        <?php endwhile ?>
                    </select>
                </div>
                <div class="col-sm-4">
                    <button type="submit" class="btn btn-primary" name="cetak">Cetak</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php include 'footer.php'; ?>