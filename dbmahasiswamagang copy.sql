-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2024 at 06:15 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmahasiswamagang`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `idakun` int(11) NOT NULL,
  `nama` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `level` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`idakun`, `nama`, `email`, `password`, `level`) VALUES
(1, 'Admin', 'admin@gmail.com', '123456', 'Admin'),
(2, 'user', 'user@gmail.com', 'user', 'user'),
(21, 'satria', 'satria@gmail.com', '123456', 'user'),
(23, 'Heru ', 'Heru@gmail.com', '123', 'user'),
(24, 'alo', 'al@gmail.com', '123', 'user'),
(25, 'heru perdana', 'heruperdana@gmail.com', '123', 'user'),
(26, 'perdana', 'perdana@gmail.com', '123', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `angkatan`
--

CREATE TABLE `angkatan` (
  `idangkatan` int(11) NOT NULL,
  `tahun` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `angkatan`
--

INSERT INTO `angkatan` (`idangkatan`, `tahun`) VALUES
(3, '2021/2022'),
(4, '2022/2023'),
(5, '2025/2026');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `idmahasiswa` int(11) NOT NULL,
  `idangkatan` int(11) NOT NULL,
  `idakun` int(11) NOT NULL,
  `nim` varchar(100) DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `jeniskelamin` varchar(10) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `nohp` varchar(15) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `jurusan` varchar(50) DEFAULT NULL,
  `prodi` varchar(50) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `foto_ktm` text DEFAULT NULL,
  `tanggalmasuk` date DEFAULT NULL,
  `tanggalkeluar` date DEFAULT NULL,
  `filelaporan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`idmahasiswa`, `idangkatan`, `idakun`, `nim`, `nama`, `jeniskelamin`, `alamat`, `nohp`, `email`, `jurusan`, `prodi`, `semester`, `foto_ktm`, `tanggalmasuk`, `tanggalkeluar`, `filelaporan`) VALUES
(6, 5, 0, '231313', 'Upin', 'Laki-laki', 'asdadsasd', '231231', 'asdasd@dsad.com', 'dsdasdasd', 'asdasd', 2, 'Pusri (1) (1).jpg', '2023-12-29', '2024-02-29', NULL),
(7, 3, 17, '213132', 'Upin', 'Laki-laki', 'zcdsd', '2131231', 'silva@gmail.com', 'Teknik Komputer', 'Ilmu Kedokteran', 2, 'Pusri (1) (1).jpg', '2023-12-29', '2024-02-29', 'BAB III (3).pdf'),
(8, 3, 20, '062130701985', 'Azka', 'Laki-laki', 'lunjuk jaya 1', '089876543211', 'Azka@gmail.com', 'Teknik Komputer', 'D3 Teknik Komputer', 6, '366646.jpg', '2023-12-02', '2023-12-30', 'Surat Lamaran Wulan.pdf'),
(9, 3, 21, '06211', 'satria ', 'Laki-laki', 'lunjuk', '0979', 'satria@gmail.com', 'Teknik Sipil', 'teknik sipil', 3, '366646.jpg', '2024-01-01', '2024-01-31', 'Surat Lamaran Wulan.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`idakun`);

--
-- Indexes for table `angkatan`
--
ALTER TABLE `angkatan`
  ADD PRIMARY KEY (`idangkatan`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`idmahasiswa`),
  ADD UNIQUE KEY `id_user` (`idakun`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `idakun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `angkatan`
--
ALTER TABLE `angkatan`
  MODIFY `idangkatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `idmahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
