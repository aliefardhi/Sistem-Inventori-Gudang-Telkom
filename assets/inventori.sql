-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2021 at 06:16 AM
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
(1, 'WH 3 Ilir', '3344234112', '9983774582', '2021-06-17', 'WH Baturaja', 500, 'ONT', 'ZTE F609 V5.3'),
(2, 'WH 3 Ilir', '8876598', '993929', '2021-07-01', 'WH TLK', 90, 'ONT', 'HG8245U'),
(3, 'WH 3 Ilir', '2312312', '5544345', '2021-06-23', 'WH Baturaja', 30, 'ONT', 'HG8245U'),
(4, 'WH 3 Ilir', '88003912', '77848293', '2021-06-27', 'WH Kenten Ujung', 20, 'STB', 'B860H4K V5.0'),
(5, 'WH 3 Ilir', '66526712', '99928312', '2021-07-05', 'WH Sebrang Ulu', 50, 'ONT', 'HG8245H');

-- --------------------------------------------------------

--
-- Table structure for table `b_masuk`
--

CREATE TABLE `b_masuk` (
  `id` int(100) NOT NULL,
  `wh_asal_masuk` varchar(128) NOT NULL,
  `vendor` varchar(50) NOT NULL,
  `sn` varchar(100) NOT NULL,
  `mac` varchar(100) NOT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `jumlah_masuk` int(128) NOT NULL,
  `wh_penerima` varchar(100) NOT NULL,
  `jenis` varchar(10) NOT NULL,
  `tipe` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `b_masuk`
--

INSERT INTO `b_masuk` (`id`, `wh_asal_masuk`, `vendor`, `sn`, `mac`, `tgl_masuk`, `jumlah_masuk`, `wh_penerima`, `jenis`, `tipe`) VALUES
(1, 'WH Baturaja', 'Huawei', '99999', '1122324235324', '2021-06-17', 100, 'WH 3 Ilir', 'ONT', 'HG8245H5'),
(2, 'WH TLK', 'Huawei', '12345678', '12345678', '2021-07-01', 20, 'WH 3 Ilir', 'ONT', 'HG 8245H'),
(3, 'WH PGC', 'ZTE', '119922319', '233001923', '2021-06-09', 50, 'WH 3 Ilir', 'STB', 'B860_V5.0'),
(4, 'WH Sebrang Ulu', 'ZTE', '99288123', '38843181', '2021-05-17', 24, 'WH 3 Ilir', 'ONT', 'F609_V2.0'),
(5, 'WH Sekayu', 'Huawei', '55663234', '77785734', '2021-04-03', 200, 'WH 3 Ilir', 'ONT', 'HG8245U'),
(6, 'WH PGC', 'Huawei', '3434234', '5544562234', '2021-06-09', 150, 'WH 3 Ilir', 'ONT', 'HG8245H5'),
(7, 'WH Kenten Ujung', 'Fiberhome', '4453434', '88867655', '2021-06-15', 400, 'WH 3 Ilir', 'ONT', 'HG6145F'),
(8, 'WH Baturaja', 'Huawei', '5554523', '21231245', '2021-07-23', 44, 'WH 3 Ilir', 'ONT', 'HG8245U'),
(9, 'WH Baturaja', 'ZTE', '8884943', '9992012', '2021-06-11', 50, 'WH 3 Ilir', 'ONT', 'F609_V2.0');

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
