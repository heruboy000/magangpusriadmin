<?php

session_start();
function rupiah($angka)
{
    $hasilrupiah = "Rp " . number_format($angka, 2, ',', '.');
    return $hasilrupiah;
}
function tanggal($tgl)
{
    $tanggal = substr($tgl, 8, 2);
    $bulan = getBulan(substr($tgl, 5, 2));
    $tahun = substr($tgl, 0, 4);
    return $tanggal . ' ' . $bulan . ' ' . $tahun;
}
function getBulan($bln)
{
    switch ($bln) {
        case 1:
            return "Januari";
            break;
        case 2:
            return "Februari";
            break;
        case 3:
            return "Maret";
            break;
        case 4:
            return "April";
            break;
        case 5:
            return "Mei";
            break;
        case 6:
            return "Juni";
            break;
        case 7:
            return "Juli";
            break;
        case 8:
            return "Agustus";
            break;
        case 9:
            return "September";
            break;
        case 10:
            return "Oktober";
            break;
        case 11:
            return "November";
            break;
        case 12:
            return "Desember";
            break;
    }
}

include 'koneksi.php';
$angkatan    = $_GET['angkatan'];
$getangkatan = $koneksi->query("SELECT tahun FROM angkatan where idangkatan = '$angkatan'");
$tahun = $getangkatan->fetch_assoc();
$getmahasiswa = $koneksi->query("SELECT * FROM mahasiswa WHERE idangkatan = '$angkatan'");
$jumlahMahasiswa = $getmahasiswa->num_rows;
?>

<!DOCTYPE html>
<html>

<head>

    <title>Laporan Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="../img/pusri.png" rel="shortcut icon">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <style>
        body {
            font-family: arial;
            padding: 10px;
            height:700px;
            position: relative;
        }

        table {
            border-collapse: collapse;
        }

        @page {
            margin: 3mm;
        }
    </style>
</head>

<!-- <body> -->

<body >

    <table style='width:700; font-size:16pt; font-family:calibri; border-collapse: collapspe;' border='0'>
        <tr>
            <td style="padding-left: 20px;">
                <img src="../img/pusri.png" width="100px">
            </td>
            <td>
                <font size="5"><b>LAPORAN</b></font><br>
                <font size="5"><b>Pengelolaan Data Mahasiswa Magang PT Pusri</b></font><br>
                <br>
            </td>
        </tr>
    </table>
    <hr />
    Tahun Angkatan: <?= $tahun['tahun'] ?> <br>
    Jumlah Mahasiswa Magang: <b><?= $jumlahMahasiswa ?></b> Orang
    <br />
    <br>
    <table border="1" cellpadding="6" width="100%">
        <tr>
            <th>No.</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Jurusan</th>
            <th>Prodi</th>
            <th>Tanggal Masuk</th>
            <th>Tanggal Keluar</th>
        </tr>
        <?php
        $data    = $koneksi->query("SELECT * FROM mahasiswa WHERE idangkatan='$angkatan'");
        $i        = 1;
        while ($dta = $data->fetch_assoc()) :
        ?>
            <tr>
                <td align="center"> <?= $i ?></td>
                <td align="left"> <?= $dta['nim'] ?></td>
                <td align="left"> <?= $dta['nama'] ?></td>
                <td align=""> <?= $dta['jeniskelamin'] ?></td>
                <td align=""> <?= $dta['jurusan'] ?></td>
                <td align=""> <?= $dta['prodi'] ?></td>
                <td align=""> <?= tanggal($dta['tanggalmasuk']) ?></td>
                <td align=""> <?= tanggal($dta['tanggalkeluar']) ?></td>
            </tr>
            <?php $i++; ?>
        <?php endwhile; ?>

    </table>

        <div class="clear" style="position:absolute; bottom:0; right:0; margin-right:20px;">
            <table>
                <tr>
                    <td>Diketahui Oleh</td>
                </tr>
                <tr>
                    <td> <BR></BR></td>
                </tr>    
                <tr>
                    <td><br> </td>
                </tr>    
                <tr>
                    <td>(...................................)</td>
                </tr>    
            </table>
        </div>
    

<script>
    window.print();
</script>
</body>

</html>