<?php include 'header.php';
include 'koneksi.php'; 



?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<div class="row">
    <?php
    $sql = "select * from akun";
    $result = mysqli_query($koneksi,$sql);
    
    

    
    

    ?>

    <div class="col-md-12 mb-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Tambah mahasiswa</h6>
            </div>
            <div class="card-body">
                <form method="post" class="form-horizontal" enctype="multipart/form-data">
                <div class="form-group" >
                        <label class="control-label">Data akun</label>
                        <select type="text" name="data" id="data"  class="form-control" required>
                            <option value="">-- Pilih --</option>
                            <?php while($akun = mysqli_fetch_assoc($result)): ?>
                            <option value="<?=$akun['idakun'] ?>"><?=$akun['nama'] ?></option>
                            
                            <?php endwhile; ?> 
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Nama</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Jenis Kelamin</label>
                        <select type="text" name="jeniskelamin" class="form-control" required>
                            <option value="">-- Pilih --</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group" >
                        <label class="control-label">Jenjang Pendidikan</label>
                        <select type="text" name="jenjang" id="jenjang"  class="form-control" required>
                            <option value="">-- Pilih --</option>
                            <option value="SMA">SMA/SMK</option>
                            <option value="perguruan">Perguruan Tinggi</option>
                        </select>
                    </div>
                    <div class="form-group" id="perguruan">
                        <label class="control-label">Perguruan</label>
                        <input type="text" name="perguruan" class="form-control">
                    </div>
                    <div class="form-group"  id="SMA" >
                        <label class="control-label">SMA/SMK</label>
                        <input type="text" name="sma" class="form-control">
                    </div>
                    <div class="form-group" id="semester">
                        <label class="control-label">Semester</label>
                        <input type="text" name="semester" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Jurusan</label>
                        <input type="text" name="jurusan" class="form-control" required>
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
                            <button class="btn btn-primary float-right" name="simpan" id="simpan">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    
</div>

<?php
include 'footer.php';

?>





<script type="text/javascript">
$(document).ready(function(){
 $("#SMA").hide();
 $("#perguruan").hide();
 $("#semester").closest("div").hide();
 $("#jenjang").on("change", function(){
   var v = $(this).val();
   if(v=="SMA"){
      $("#SMA").closest("div").show();
      $("#perguruan").closest("div").hide();
      $("#semester").closest("div").hide();
    }else{
    $("#SMA").closest("div").hide();
    $("#perguruan").closest("div").show();
    $("#semester").closest("div").show();
   } 
 });
 

});
</script>

<?php
if (isset($_POST["simpan"])) {
    $idakun = $_POST['data'];
    $nama = $_POST['nama'];
    if ($_POST['sma'] == NULL){
        $jenjang = $_POST['perguruan'];
    }else{
        $jenjang = $_POST['sma'];
    }
    $semester = $_POST['semester'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $idangkatan = $_POST['idangkatan'];
    $jurusan = $_POST['jurusan'];
  
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['nohp'];
    $tanggalmasuk = $_POST['tanggalmasuk'];
    $tanggalkeluar = $_POST['tanggalkeluar'];
  
    // Handle file upload
    $foto_ktm = $_FILES["foto_ktm"]["name"];
    $foto_ktm_tmp = $_FILES["foto_ktm"]["tmp_name"];
    move_uploaded_file($foto_ktm_tmp, "upload/" . $foto_ktm);

    

    $sql = "INSERT INTO mahasiswa(idangkatan,idakun,nama,jeniskelamin,semester,jurusan,jenjang,email,alamat,nohp,foto_ktm,tanggalmasuk,tanggalkeluar) 
                VALUES('$idangkatan','$idakun','$nama','$jeniskelamin','$semester','$jurusan','$jenjang','$email','$alamat','$nohp','$foto_ktm','$tanggalmasuk','$tanggalkeluar')";
    $koneksi->query($sql) or die(mysqli_error($koneksi));

    if($sql){
        
        echo "<script>alert('Data berhasil di tambah')</script>";
        echo "<script>location='mahasiswadaftar.php';</script>";
    }else{
        echo "<script>alert('Data gagal di tambah Karena Data sudah terisi')</script>";
        echo "<script>location='mahasiswadaftar.php';</script>";
    }

   


  
}

?>
