-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2019 at 08:07 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_joker`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun_mahasiswa`
--

CREATE TABLE `akun_mahasiswa` (
  `username` varchar(40) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun_mahasiswa`
--

INSERT INTO `akun_mahasiswa` (`username`, `nim`, `password`) VALUES
('krisna', '1708561042', 'krisna'),
('lanang', '1708561042', 'lanang');

-- --------------------------------------------------------

--
-- Table structure for table `akun_perusahaan`
--

CREATE TABLE `akun_perusahaan` (
  `username` varchar(40) NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun_perusahaan`
--

INSERT INTO `akun_perusahaan` (`username`, `id_perusahaan`, `password`) VALUES
('yuda', 1, 'yuda');

-- --------------------------------------------------------

--
-- Table structure for table `detail_lowongan`
--

CREATE TABLE `detail_lowongan` (
  `id_lowongan` int(11) NOT NULL,
  `nama_pekerjaan` varchar(40) NOT NULL,
  `bidang` varchar(40) NOT NULL,
  `jenis` varchar(25) NOT NULL,
  `gaji` varchar(40) NOT NULL,
  `prodi_req` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_lowongan`
--

INSERT INTO `detail_lowongan` (`id_lowongan`, `nama_pekerjaan`, `bidang`, `jenis`, `gaji`, `prodi_req`, `deskripsi`) VALUES
(7, '1', '1', '1', '1', '', '1'),
(9, 'lanang', 'krisna', 'bagus', '100000', '', 'aman');

-- --------------------------------------------------------

--
-- Table structure for table `lamar`
--

CREATE TABLE `lamar` (
  `id_lowongan` int(11) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `apply_date` date NOT NULL,
  `cv_mhs` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lowongan`
--

CREATE TABLE `lowongan` (
  `id_lowongan` int(11) NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `status` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(10) NOT NULL,
  `password` varchar(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tmpt_lahir` varchar(20) NOT NULL,
  `fakultas` varchar(20) NOT NULL,
  `prodi` varchar(20) NOT NULL,
  `semester` varchar(2) NOT NULL,
  `ipk` varchar(5) NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `email` varchar(40) NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `password`, `nama`, `tgl_lahir`, `tmpt_lahir`, `fakultas`, `prodi`, `semester`, `ipk`, `no_hp`, `email`, `alamat`, `foto`) VALUES
('1708561042', 'yudabagus', 'I Dewa Gde Yudha Ari Wibawa', '2019-05-07', 'Klungkung', 'MIPA', 'Teknik Informatika', '4', '3.98', '08768797292', 'dewayuda2061@yahoo.co.id', 'jalan untung surapati no 14.a', '691209_720.jpg'),
('1708561043', 'yudabagus', 'I Dewa Gde Yudha Ari Wibawa', '2019-05-07', 'Klungkung', 'MIPA', 'Teknik Informatika', '4', '3.98', '08768797292', 'dewayuda2061@yahoo.co.id', 'jalan untung surapati no 14.a', '691209_720.jpg'),
('1708561048', 'yudabagus', 'I Dewa Gde Yudha Ari Wibawa', '2019-05-07', 'Klungkung', 'MIPA', 'Teknik Informatika', '4', '3.98', '08768797292', 'dewayuda2061@yahoo.co.id', 'jalan untung surapati no 14.a', '691209_720.jpg'),
('1708561049', 'yudabagus', 'I Dewa Gde Yudha Ari Wibawa', '2019-05-07', 'Klungkung', 'MIPA', 'Teknik Informatika', '4', '3.98', '08768797292', 'dewayuda2061@yahoo.co.id', 'jalan untung surapati no 14.a', 'IMG_9448.JPG'),
('1708561050', 'yudabagus', 'I Dewa Gde Yudha Ari Wibawa', '2019-05-15', 'Klungkung', 'MIPA', 'Teknik Informatika', '4', '3.90', '08768797292', 'dewayuda2061@yahoo.co.id', 'klunhajagkagja', ''),
('1708561053', 'yudabagus', 'I Dewa Gde Yudha Ari Wibawa', '2019-05-15', 'Klungkung', 'MIPA', 'Teknik Informatika', '4', '3.90', '08768797292', 'dewayuda2061@yahoo.co.id', 'klunhajagkagja', ''),
('1708561055', 'yudabagus', 'I Dewa Gde Yudha Ari Wibawa', '2019-05-15', 'Klungkung', 'MIPA', 'Teknik Informatika', '4', '3.90', '08768797292', 'dewayuda2061@yahoo.co.id', 'klunhajagkagja', '250px-WiFi_Logo.svg.png'),
('1708561057', 'yudabagus', 'I Dewa Gde Yudha Ari Wibawa', '2019-05-15', 'Klungkung', 'MIPA', 'Teknik Informatika', '4', '3.90', '08768797292', 'dewayuda2061@yahoo.co.id', 'klunhajagkagja', 'C:xampp	mpphp850A.tmp'),
('1708561073', 'yudabagus', '250px-WiFi_Logo.svg.png', '2019-05-15', 'Klungkung', 'MIPA', 'Teknik Informatika', '4', '3.90', '08768797292', 'dewayuda2061@yahoo.co.id', 'klunhajagkagja', '250px-WiFi_Logo.svg.png'),
('1708561077', 'yudabagus', '250px-WiFi_Logo.svg.png', '2019-05-15', 'Klungkung', 'MIPA', 'Teknik Informatika', '4', '3.90', '08768797292', 'dewayuda2061@yahoo.co.id', 'klunhajagkagja', 'C:xampp	mpphp255D.tmp'),
('1708561078', 'yudabagus', '250px-WiFi_Logo.svg.png', '2019-05-15', 'Klungkung', 'MIPA', 'Teknik Informatika', '4', '3.90', '08768797292', 'dewayuda2061@yahoo.co.id', 'klunhajagkagja', '250px-WiFi_Logo.svg.png'),
('1708561090', 'yudabagus', 'I Dewa Gde Yudha Ari Wibawa', '2019-05-15', 'Klungkung', 'MIPA', 'Teknik Informatika', '4', '3.90', '08768797292', 'dewayuda2061@yahoo.co.id', 'klunhajagkagja', ''),
('1708561091', 'yudabagus', 'I Dewa Gde Yudha Ari Wibawa', '2019-05-15', 'Klungkung', 'MIPA', 'Teknik Informatika', '4', '3.90', '08768797292', 'dewayuda2061@yahoo.co.id', 'klunhajagkagja', ''),
('1708561233', 'yudabagus', '250px-WiFi_Logo.svg.png', '2019-05-15', 'Klungkung', 'MIPA', 'Teknik Informatika', '4', '3.90', '08768797292', 'dewayuda2061@yahoo.co.id', 'klunhajagkagja', '250px-WiFi_Logo.svg.png'),
('1708561234', 'yudabagus', '250px-WiFi_Logo.svg.png', '2019-05-15', 'Klungkung', 'MIPA', 'Teknik Informatika', '4', '3.90', '08768797292', 'dewayuda2061@yahoo.co.id', 'klunhajagkagja', 'C:xampp	mpphp1DE7.tmp'),
('1708561236', 'yudabagus', '250px-WiFi_Logo.svg.png', '2019-05-15', 'Klungkung', 'MIPA', 'Teknik Informatika', '4', '3.90', '08768797292', 'dewayuda2061@yahoo.co.id', 'klunhajagkagja', '250px-WiFi_Logo.svg.png'),
('1708561238', 'yudabagus', '250px-WiFi_Logo.svg.png', '2019-05-15', 'Klungkung', 'MIPA', 'Teknik Informatika', '4', '3.90', '08768797292', 'dewayuda2061@yahoo.co.id', 'klunhajagkagja', '250px-WiFi_Logo.svg.png'),
('1708561239', 'yudabagus', '250px-WiFi_Logo.svg.png', '2019-05-15', 'Klungkung', 'MIPA', 'Teknik Informatika', '4', '3.90', '08768797292', 'dewayuda2061@yahoo.co.id', 'klunhajagkagja', 'C:xampp	mpphpFD46.tmp'),
('1708561277', 'yudabagus', 'I Dewa Gde Yudha Ari Wibawa', '2019-05-15', 'Klungkung', 'MIPA', 'Teknik Informatika', '4', '3.90', '08768797292', 'dewayuda2061@yahoo.co.id', 'klunhajagkagja', 'upload/250px-WiFi_Logo.svg.png'),
('1708561289', 'yudabagus', '250px-WiFi_Logo.svg.png', '2019-05-15', 'Klungkung', 'MIPA', 'Teknik Informatika', '4', '3.90', '08768797292', 'dewayuda2061@yahoo.co.id', 'klunhajagkagja', '250px-WiFi_Logo.svg.png');

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id_perusahaan` int(11) NOT NULL,
  `nama_perusahaan` varchar(40) NOT NULL,
  `alamat` text NOT NULL,
  `kontak` varchar(14) NOT NULL,
  `logo` varchar(40) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`id_perusahaan`, `nama_perusahaan`, `alamat`, `kontak`, `logo`, `username`, `password`) VALUES
(1, 'pt.guna perkasa', 'surapati 14/A', 'pc yuda', 'tugasku/img/3.jpg', 'yuda', 'yuda');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_mhs`
--

CREATE TABLE `riwayat_mhs` (
  `nim` varchar(10) NOT NULL,
  `id_lowongan` int(11) NOT NULL,
  `apply_date` date NOT NULL,
  `end_date` date NOT NULL,
  `nama_pekerjaan` varchar(40) NOT NULL,
  `bidang` varchar(40) NOT NULL,
  `jenis` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun_mahasiswa`
--
ALTER TABLE `akun_mahasiswa`
  ADD PRIMARY KEY (`username`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `akun_perusahaan`
--
ALTER TABLE `akun_perusahaan`
  ADD PRIMARY KEY (`username`),
  ADD KEY `id_perusahaan` (`id_perusahaan`);

--
-- Indexes for table `detail_lowongan`
--
ALTER TABLE `detail_lowongan`
  ADD PRIMARY KEY (`id_lowongan`);

--
-- Indexes for table `lamar`
--
ALTER TABLE `lamar`
  ADD KEY `id_lowongan` (`id_lowongan`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `lowongan`
--
ALTER TABLE `lowongan`
  ADD KEY `id_lowongan` (`id_lowongan`),
  ADD KEY `id_perusahaan` (`id_perusahaan`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- Indexes for table `riwayat_mhs`
--
ALTER TABLE `riwayat_mhs`
  ADD KEY `id_lowongan` (`id_lowongan`),
  ADD KEY `nim` (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_lowongan`
--
ALTER TABLE `detail_lowongan`
  MODIFY `id_lowongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id_perusahaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `akun_mahasiswa`
--
ALTER TABLE `akun_mahasiswa`
  ADD CONSTRAINT `akun_mahasiswa_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`);

--
-- Constraints for table `akun_perusahaan`
--
ALTER TABLE `akun_perusahaan`
  ADD CONSTRAINT `akun_perusahaan_ibfk_1` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id_perusahaan`);

--
-- Constraints for table `lamar`
--
ALTER TABLE `lamar`
  ADD CONSTRAINT `lamar_ibfk_2` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`),
  ADD CONSTRAINT `lamar_ibfk_3` FOREIGN KEY (`id_lowongan`) REFERENCES `detail_lowongan` (`id_lowongan`);

--
-- Constraints for table `lowongan`
--
ALTER TABLE `lowongan`
  ADD CONSTRAINT `lowongan_ibfk_1` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id_perusahaan`),
  ADD CONSTRAINT `lowongan_ibfk_2` FOREIGN KEY (`id_lowongan`) REFERENCES `detail_lowongan` (`id_lowongan`);

--
-- Constraints for table `riwayat_mhs`
--
ALTER TABLE `riwayat_mhs`
  ADD CONSTRAINT `id_lowongan` FOREIGN KEY (`id_lowongan`) REFERENCES `detail_lowongan` (`id_lowongan`),
  ADD CONSTRAINT `nim` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
