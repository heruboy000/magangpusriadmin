<?php
session_start();
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $idmahasiswa = $_POST['idmahasiswa'];
   
    if (isset($_SESSION["user"])) {
        // Lokasi tempat menyimpan file
        // Handle file upload
        $filelaporan = $_FILES["filelaporan"]["name"];
        $filelaporan_tmp = $_FILES["filelaporan"]["tmp_name"];
        move_uploaded_file($filelaporan_tmp, "../upload/" . $filelaporan);
        $query = "UPDATE mahasiswa SET filelaporan = '$filelaporan' WHERE idmahasiswa = '$idmahasiswa'";
        $koneksi->query($query);
        echo "<script>alert('Data berhasil di tambah')</script>";
        echo "<script>location='mahasiswadaftar.php';</script>";
    }
} else {
    echo "Akses tidak valid.";
}
