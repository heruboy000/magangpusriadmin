-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jan 15, 2024 at 01:33 PM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

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

DROP TABLE IF EXISTS `akun`;
CREATE TABLE IF NOT EXISTS `akun` (
  `idakun` int NOT NULL AUTO_INCREMENT,
  `nama` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `level` text NOT NULL,
  PRIMARY KEY (`idakun`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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

DROP TABLE IF EXISTS `angkatan`;
CREATE TABLE IF NOT EXISTS `angkatan` (
  `idangkatan` int NOT NULL AUTO_INCREMENT,
  `tahun` text NOT NULL,
  PRIMARY KEY (`idangkatan`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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

DROP TABLE IF EXISTS `mahasiswa`;
CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `idmahasiswa` int NOT NULL AUTO_INCREMENT,
  `idangkatan` int NOT NULL,
  `idakun` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `instansi` varchar(255) NOT NULL,
  `jenjang` varchar(255) NOT NULL,
  `jeniskelamin` varchar(10) DEFAULT NULL,
  `alamat` text,
  `nohp` varchar(15) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `jurusan` varchar(50) DEFAULT NULL,
  `semester` int DEFAULT NULL,
  `foto_ktm` text,
  `tanggalmasuk` date DEFAULT NULL,
  `tanggalkeluar` date DEFAULT NULL,
  `filelaporan` text,
  PRIMARY KEY (`idmahasiswa`),
  UNIQUE KEY `id_user` (`idakun`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`idmahasiswa`, `idangkatan`, `idakun`, `nama`, `instansi`, `jenjang`, `jeniskelamin`, `alamat`, `nohp`, `email`, `jurusan`, `semester`, `foto_ktm`, `tanggalmasuk`, `tanggalkeluar`, `filelaporan`) VALUES
(16, 3, 1, 'Ridho Rahmatullah', '', 'sdfs', 'Laki-laki', 'asdfsdf', '453454', 'rdh.rdh.rhmtllah@gmail.com', 'dfgdfg', 0, 'logo-polsri-300x300.png', '2024-01-15', '2024-04-15', NULL),
(22, 3, 24, 'Excellent Riza Rahmatullah', '', 'sdfsdf', 'Perempuan', 'fddsfsf', '34234', 'rdh.rdh.rhmtllah@gmail.com', 'dfgdfg', 432432, '_MG_8495.JPG', '2024-01-15', '2024-04-15', NULL),
(24, 4, 26, 'heru', '', 'UNSRI', 'Laki-laki', 'dfsfs', '34', 'rdh.rhmtllah@gmail.com', 'asdasd', 4, 'logo-polsri-300x300.png', '2024-03-15', '2024-05-15', NULL),
(26, 5, 23, 'Heru PERDANA', '', 'POLSRI', 'Laki-laki', 'fsdfsdfs', '1234', 'rdh.rhmtllah@gmail.com', 'TEKKOM', 4, 'pngwing.com.png', '2024-01-15', '2024-04-15', 'Proposal Perancangan rrr.pdf');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
