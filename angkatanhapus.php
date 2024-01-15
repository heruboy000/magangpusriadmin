
<?php
include 'koneksi.php';
$koneksi->query("DELETE FROM angkatan WHERE idangkatan='$_GET[id]'");
echo "<script>alert('Data Berhasil Di Hapus');</script>";
echo "<script>location='angkatandaftar.php';</script>";

?>