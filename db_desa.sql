-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 03, 2019 at 06:23 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_desa`
--

-- --------------------------------------------------------

--
-- Table structure for table `monitoring`
--

CREATE TABLE `monitoring` (
  `id_monitoring` int(10) NOT NULL,
  `j_kegiatan` varchar(20) NOT NULL,
  `id_pembangunan` varchar(20) NOT NULL,
  `lokasi` varchar(40) NOT NULL,
  `ukuran_selesai` varchar(25) NOT NULL,
  `satuan_selesai` int(100) NOT NULL,
  `jml_hr_kerja` int(100) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `monitoring`
--

INSERT INTO `monitoring` (`id_monitoring`, `j_kegiatan`, `id_pembangunan`, `lokasi`, `ukuran_selesai`, `satuan_selesai`, `jml_hr_kerja`, `tgl`) VALUES
(1, 'asu', '1000', 'karang tengah', '10', 100, 12, '2019-11-03'),
(2, 'dancuk', '1001', 'pacitan', '10', 10, 0, '2019-11-03');

-- --------------------------------------------------------

--
-- Table structure for table `pembangunan`
--

CREATE TABLE `pembangunan` (
  `no` int(11) NOT NULL,
  `id_pembangunan` varchar(20) NOT NULL,
  `id_user` int(15) NOT NULL,
  `jenis_kegiatan` varchar(20) NOT NULL,
  `lokasi` varchar(25) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `jumlah_biaya` int(11) NOT NULL,
  `sumber_dana` varchar(10) NOT NULL,
  `pola_pelaksanaan` varchar(15) NOT NULL,
  `tgl_pelaksanaan` date NOT NULL,
  `tgl_target_selesai` date NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=REDUNDANT;

--
-- Dumping data for table `pembangunan`
--

INSERT INTO `pembangunan` (`no`, `id_pembangunan`, `id_user`, `jenis_kegiatan`, `lokasi`, `ukuran`, `satuan`, `jumlah_biaya`, `sumber_dana`, `pola_pelaksanaan`, `tgl_pelaksanaan`, `tgl_target_selesai`, `tanggal`, `status`) VALUES
(1, 'PMD1191103', 155410156, 'rabat jalan', 'karang tengah', 1, '1000', 200000000, 'APBD', 'swadaya', '2019-11-03', '2019-11-10', '2019-11-03', 'rencana'),
(2, 'PMD2191103', 155410156, 'rabat jalan', 'karang tengah', 1, '1000', 200000000, 'APBD', 'swadaya', '2019-11-03', '2019-11-03', '2019-11-03', 'rencana'),
(3, 'PMD3191103', 155410156, 'rabat jalan', 'karang tengah', 1, '1000', 200000000, 'APBD', 'swadaya', '2018-10-02', '2018-10-02', '2018-10-02', 'batal');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pendaftar` int(100) NOT NULL,
  `id_pembangunan` varchar(10) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `no_ktp` int(25) NOT NULL,
  `no_hp` int(15) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pendaftar`, `id_pembangunan`, `nama`, `alamat`, `no_ktp`, `no_hp`, `tanggal`) VALUES
(1, 'PMD1191103', 'ulang', 'karang tengah', 2147483647, 2147483647, '2019-11-03'),
(2, 'PMD1191103', 'ULANG', 'karang tengah', 2147483647, 2147483647, '2019-11-03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `monitoring`
--
ALTER TABLE `monitoring`
  ADD PRIMARY KEY (`id_monitoring`);

--
-- Indexes for table `pembangunan`
--
ALTER TABLE `pembangunan`
  ADD PRIMARY KEY (`id_pembangunan`),
  ADD UNIQUE KEY `id` (`no`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pendaftar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `monitoring`
--
ALTER TABLE `monitoring`
  MODIFY `id_monitoring` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pembangunan`
--
ALTER TABLE `pembangunan`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pendaftar` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
