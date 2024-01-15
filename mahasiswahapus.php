
<?php
include 'koneksi.php';
$koneksi->query("DELETE FROM mahasiswa WHERE idmahasiswa='$_GET[id]'");
echo "<script>alert('Data Berhasil Di Hapus');</script>";
echo "<script>location='mahasiswadaftar.php';</script>";

?>