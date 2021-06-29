-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2021 at 04:05 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventori`
--

-- --------------------------------------------------------

--
-- Table structure for table `b_keluar`
--

CREATE TABLE `b_keluar` (
  `id_keluar` int(11) NOT NULL,
  `wh_asal` varchar(100) NOT NULL,
  `sn_keluar` varchar(100) NOT NULL,
  `mac_keluar` varchar(100) NOT NULL,
  `tgl_kirim` date DEFAULT NULL,
  `wh_tujuan` varchar(100) NOT NULL,
  `jumlah_keluar` int(50) NOT NULL,
  `jenis_keluar` varchar(10) NOT NULL,
  `tipe_keluar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `b_keluar`
--

INSERT INTO `b_keluar` (`id_keluar`, `wh_asal`, `sn_keluar`, `mac_keluar`, `tgl_kirim`, `wh_tujuan`, `jumlah_keluar`, `jenis_keluar`, `tipe_keluar`) VALUES
(1, 'WH RATU SIANUM', '3344234112', '9983774582', '2021-06-17', 'WH BATURAJA', 200, 'ONT', 'ZTE F609 V5.3');

-- --------------------------------------------------------

--
-- Table structure for table `b_masuk`
--

CREATE TABLE `b_masuk` (
  `id` int(100) NOT NULL,
  `vendor` varchar(50) NOT NULL,
  `sn` varchar(100) NOT NULL,
  `mac` varchar(100) NOT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `wh_penerima` varchar(100) NOT NULL,
  `jenis` varchar(10) NOT NULL,
  `tipe` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `b_masuk`
--

INSERT INTO `b_masuk` (`id`, `vendor`, `sn`, `mac`, `tgl_masuk`, `wh_penerima`, `jenis`, `tipe`) VALUES
(1, 'Huawei', '555893021321', '1122324235324', '2021-06-17', 'GUDANG TELKOM AKSES JL.RATU SIANUM NO 13 PALEMBANG SUMATERA SELATAN', 'ONT', 'HG8245H5'),
(13, 'adasd', 'dsdad', 'dad', '2021-06-22', 'dasd', 'sdad', 'sddsad'),
(14, 'mmsmms', 'msmsmms', 'msmsms', '2021-06-22', 'lllsl', ';apapa', 'spsp'),
(15, 'mm,', 'msdamsmd', ',mdasd,', '2021-06-22', 'eeee', 'rerer', 'tttt'),
(16, 'sdasd', 'sdasd', 'sdasd', '2021-06-23', 'asdasd', 'we', 'wewe'),
(17, 'sdasd', 'dsad', 'sdasd', '2021-06-23', 'asdsad', 'dsadasd', 'sadsad'),
(18, 'uhiuashd', 'uhauishd', 'iuhuiasd', '2021-06-23', 'knaskjd', 'kjnasjkdn', 'asdjnasj'),
(19, 'coba', 'cobasn', 'cobamac', '2021-06-23', 'whcoba', 'cobajenis', 'cobatipe');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`) VALUES
(1, 'admin', 'admin', '5f4dcc3b5aa765d61d8327deb882cf99');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `b_keluar`
--
ALTER TABLE `b_keluar`
  ADD PRIMARY KEY (`id_keluar`);

--
-- Indexes for table `b_masuk`
--
ALTER TABLE `b_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `b_keluar`
--
ALTER TABLE `b_keluar`
  MODIFY `id_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `b_masuk`
--
ALTER TABLE `b_masuk`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
