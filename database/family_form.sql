-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2023 at 04:33 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `family_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `idUser` int(11) NOT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `Password` varchar(35) DEFAULT NULL,
  `Level` enum('Admin','Operator') DEFAULT NULL,
  `Aktif` enum('Enable','Disable') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`idUser`, `Username`, `Password`, `Level`, `Aktif`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'Enable');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_warga`
--

CREATE TABLE `tbl_warga` (
  `id_warga` int(11) NOT NULL,
  `no_kk` varchar(50) DEFAULT NULL,
  `no_ktp` varchar(50) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `tmp_lhr` varchar(100) DEFAULT NULL,
  `tgl_lhr` date DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') DEFAULT NULL,
  `status_perkawinan` enum('Belum Menikah','Menikah','Cerai') DEFAULT NULL,
  `alamat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_warga`
--

INSERT INTO `tbl_warga` (`id_warga`, `no_kk`, `no_ktp`, `nama`, `tmp_lhr`, `tgl_lhr`, `jenis_kelamin`, `status_perkawinan`, `alamat`) VALUES
(21, '1234567890123456', '1234567890123456', 'Andi Wijaya', 'Jakarta', '1990-01-01', 'Laki-laki', 'Belum Menikah', 'Jl. Tanah Putih No. 1'),
(22, '2345678901234567', '2345678901234567', 'Siti Rahayu', 'Surabaya', '1992-05-10', 'Perempuan', 'Menikah', 'Jl. Tanah Putih No. 2'),
(23, '3456789012345678', '3456789012345678', 'Budi Santoso', 'Bandung', '1985-12-15', 'Laki-laki', 'Belum Menikah', 'Jl. Tanah Putih No. 3'),
(24, '4567890123456789', '4567890123456789', 'Rina Setiawati', 'Yogyakarta', '1997-09-20', 'Perempuan', 'Menikah', 'Jl. Tanah Putih No. 4'),
(25, '5678901234567890', '5678901234567890', 'Eko Prasetyo', 'Medan', '1991-03-05', 'Laki-laki', 'Belum Menikah', 'Jl. Tanah Putih No. 5'),
(26, '6789012345678901', '6789012345678901', 'Linda Susanti', 'Malang', '1988-07-25', 'Perempuan', 'Menikah', 'Jl. Tanah Putih No. 6'),
(27, '7890123456789012', '7890123456789012', 'Adi Kurniawan', 'Semarang', '1993-11-12', 'Laki-laki', 'Belum Menikah', 'Jl. Tanah Putih No. 7'),
(28, '8901234567890123', '8901234567890123', 'Rita Permata', 'Makassar', '1987-06-30', 'Perempuan', 'Menikah', 'Jl. Tanah Putih No. 8'),
(29, '9012345678901234', '9012345678901234', 'Hadi Nugroho', 'Bali', '1995-02-08', 'Laki-laki', 'Belum Menikah', 'Jl. Tanah Putih No. 9'),
(30, '0123456789012345', '0123456789012345', 'Anita Kartika', 'Palembang', '1994-04-18', 'Perempuan', 'Menikah', 'Jl. Tanah Putih No. 10'),
(31, '3456123456123456', '3456123456123456', 'Agus Wibowo', 'Jakarta', '1990-01-01', 'Laki-laki', 'Belum Menikah', 'Jl. Tanah Putih No. 11'),
(32, '4567234567234567', '4567234567234567', 'Dewi Susanti', 'Surabaya', '1992-05-10', 'Perempuan', 'Menikah', 'Jl. Tanah Putih No. 12'),
(33, '5678345678345678', '5678345678345678', 'Eko Surya', 'Bandung', '1985-12-15', 'Laki-laki', 'Belum Menikah', 'Jl. Tanah Putih No. 13'),
(34, '6789456789456789', '6789456789456789', 'Lina Sari', 'Yogyakarta', '1997-09-20', 'Perempuan', 'Menikah', 'Jl. Tanah Putih No. 14'),
(35, '7890567890567890', '7890567890567890', 'Wahyu Pramono', 'Medan', '1991-03-05', 'Laki-laki', 'Belum Menikah', 'Jl. Tanah Putih No. 15'),
(36, '8901678901678901', '8901678901678901', 'Desi Anggraini', 'Malang', '1988-07-25', 'Perempuan', 'Menikah', 'Jl. Tanah Putih No. 16'),
(37, '9012789012789012', '9012789012789012', 'Yudi Perdana', 'Semarang', '1993-11-12', 'Laki-laki', 'Belum Menikah', 'Jl. Tanah Putih No. 17'),
(38, '0123890123890123', '0123890123890123', 'Rina Susilawati', 'Makassar', '1987-06-30', 'Perempuan', 'Menikah', 'Jl. Tanah Putih No. 18'),
(39, '1234901234901234', '1234901234901234', 'Dedi Gunawan', 'Bali', '1995-02-08', 'Laki-laki', 'Belum Menikah', 'Jl. Tanah Putih No. 19'),
(40, '2345012345012345', '2345012345012345', 'Anita Martini', 'Palembang', '1994-04-18', 'Perempuan', 'Menikah', 'Jl. Tanah Putih No. 20'),
(43, '123456789013', '3172171900940004', 'Ani Dewi', 'Denpasar', '2002-02-01', 'Perempuan', 'Cerai', 'xbsbsdbsdn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`idUser`);

--
-- Indexes for table `tbl_warga`
--
ALTER TABLE `tbl_warga`
  ADD PRIMARY KEY (`id_warga`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_warga`
--
ALTER TABLE `tbl_warga`
  MODIFY `id_warga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
