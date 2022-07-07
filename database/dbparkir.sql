-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2022 at 02:19 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbparkir`
--

-- --------------------------------------------------------

--
-- Table structure for table `jeniskendaraan`
--

CREATE TABLE `jeniskendaraan` (
  `jenis_id` int(10) NOT NULL,
  `jeniskendaraan` varchar(150) NOT NULL,
  `status` enum('on','off') NOT NULL,
  `bayar` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jeniskendaraan`
--

INSERT INTO `jeniskendaraan` (`jenis_id`, `jeniskendaraan`, `status`, `bayar`) VALUES
(1, 'Motor', 'on', 2000),
(2, 'Mobil', 'on', 4000);

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `kendaraan_id` int(10) NOT NULL,
  `jenis_id` int(10) NOT NULL,
  `nomor_polisi` varchar(250) NOT NULL,
  `tempat_parkir` varchar(20) NOT NULL,
  `waktu_masuk` datetime NOT NULL,
  `waktu_keluar` datetime NOT NULL,
  `harga` int(10) NOT NULL,
  `keterangan` enum('Masuk','Keluar') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`kendaraan_id`, `jenis_id`, `nomor_polisi`, `tempat_parkir`, `waktu_masuk`, `waktu_keluar`, `harga`, `keterangan`) VALUES
(72, 1, '', 'A5', '2022-07-02 22:17:49', '2022-07-02 22:43:11', 2000, 'Keluar'),
(73, 1, '', 'A5', '2022-07-02 22:18:57', '2022-07-02 23:08:51', 2000, 'Keluar'),
(74, 2, 'BD 1234 TY', 'A5', '2022-07-02 22:20:57', '0000-00-00 00:00:00', 0, 'Masuk'),
(75, 2, 'B 1234 TY', 'A1', '2022-07-02 23:26:43', '2022-07-03 13:30:47', 60000, 'Keluar'),
(76, 1, 'B 1234 TA', 'A2', '2022-07-03 13:29:36', '2022-07-03 13:29:58', 2000, 'Keluar'),
(77, 2, 'BD 1234 TA', 'A2', '2022-07-03 21:48:45', '0000-00-00 00:00:00', 0, 'Masuk'),
(78, 1, 'A 1234 TA', 'B3', '2022-07-03 21:58:59', '2022-07-03 21:59:01', 2000, 'Keluar');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `level` varchar(30) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `username` varchar(160) NOT NULL,
  `alamat` varchar(400) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(300) NOT NULL,
  `status` enum('on','off') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `level`, `nama`, `username`, `alamat`, `phone`, `password`, `status`) VALUES
(10, 'Admin', 'Administrator', 'admin', 'NY', '089756', 'admin', 'on'),
(11, 'Petugas', 'Ramdani', 'petugas', 'Jalan Jakarta', '081111111', 'petugas', 'on'),
(12, 'Owner', 'Mark Lee', 'owner\r\n', 'Canada', '122345', 'owner', 'on');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jeniskendaraan`
--
ALTER TABLE `jeniskendaraan`
  ADD PRIMARY KEY (`jenis_id`);

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`kendaraan_id`),
  ADD KEY `kategori_id` (`jenis_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jeniskendaraan`
--
ALTER TABLE `jeniskendaraan`
  MODIFY `jenis_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `kendaraan_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
