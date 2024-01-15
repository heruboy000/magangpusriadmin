
<?php
include 'koneksi.php';
$koneksi->query("DELETE FROM akun WHERE idakun='$_GET[id]'");
echo "<script>alert('Data Berhasil Di Hapus');</script>";
echo "<script>location='kelolaUser.php';</script>";

?>