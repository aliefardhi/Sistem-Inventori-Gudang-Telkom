-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2021 at 06:46 AM
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
-- Database: `db_inventori`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `kode_barang` varchar(20) DEFAULT NULL,
  `nama_barang` varchar(80) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `satuan` varchar(20) DEFAULT NULL,
  `tgl_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `kode_barang`, `nama_barang`, `stok`, `satuan`, `tgl_masuk`) VALUES
(1, '36143613', 'ONT ZTE F609', 34, 'ont', '2021-10-01'),
(2, '158768555', 'ONT ZTE F609_V5.3', 25, 'ont', '2021-09-13'),
(4, '9999999', 'ONT HUAWEI HG 8245H5', 8, 'ont', '2021-09-18'),
(5, '88888888', 'ONT HUAWEI HG 8245H5', 7, 'ont', '2021-10-02'),
(7, '12345', 'STB ZTE B860H_V2.0', 91, 'stb', '2021-09-22'),
(10, '111999200', 'ONT ZTE F609_V5.3', 1000, 'ont', '2021-10-05');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `kode` varchar(20) DEFAULT NULL,
  `nama` varchar(80) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telepon` varchar(15) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `kode`, `nama`, `email`, `telepon`, `alamat`) VALUES
(2, 'WH LHT', 'WH Lahat', 'lahat@gmail.com', '081188392', 'Lahat'),
(3, 'WH KAG', 'WH Kayu Agung', 'kayuagung@gmail.com', '088884322', 'Kayu Agung'),
(4, 'WH PBM', 'WH Prabumulih', 'prabumulih@gmail.com', '0899334234', 'Prabumulih'),
(5, 'WH LLG', 'WH Lubuk Linggau', 'lubuklinggau@gmail.com', '0899923231', 'Lubuk Linggau'),
(6, 'WH BTA', 'WH Baturaja', 'baturaja@gmail.com', '0877334234', 'Baturaja'),
(7, 'WH PGC', 'WH Palembang Centrum', 'palembangcentrum@gmail.com', '0813222312', 'Palembang Centrum'),
(8, 'WH SKY', 'WH Sekayu', 'sekayu@gmail.com', '0856333231', 'Sekayu'),
(9, 'WH TLK', 'WH Talang Kelapa', 'talangkelapa@gmail.com', '0899232321', 'Talang Kelapa'),
(10, 'WH KTU', 'WH Kenten Ujung', 'kenten@gmail.com', '0878999232', 'Kenten Ujung'),
(11, 'WH SBU', 'WH Sebrang Ulu', 'sebrangulu@gmail.com', '0821332321', 'Sebrang Ulu'),
(12, 'WH BABEL', 'WH BABEL', 'babel@gmail.com', '0823223232', 'Babel'),
(13, 'WH BENGKULU', 'WH Bengkulu', 'bengkulu@gmail.com', '0899282321', 'Bengkulu');

-- --------------------------------------------------------

--
-- Table structure for table `data_toko`
--

CREATE TABLE `data_toko` (
  `id` int(11) NOT NULL,
  `nama_toko` varchar(80) DEFAULT NULL,
  `nama_pemilik` varchar(80) DEFAULT NULL,
  `no_telepon` varchar(15) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_toko`
--

INSERT INTO `data_toko` (`id`, `nama_toko`, `nama_pemilik`, `no_telepon`, `alamat`) VALUES
(1, 'Toko Maju Jaya', 'Nugroho', '081299764535', 'Sidareja');

-- --------------------------------------------------------

--
-- Table structure for table `detail_keluar`
--

CREATE TABLE `detail_keluar` (
  `no_keluar` varchar(25) DEFAULT NULL,
  `nama_barang` varchar(80) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `satuan` varchar(20) DEFAULT NULL,
  `kode_barang` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_keluar`
--

INSERT INTO `detail_keluar` (`no_keluar`, `nama_barang`, `jumlah`, `satuan`, `kode_barang`) VALUES
('TR1584538942', 'Keyboard', 1, 'pcs', ''),
('TR1584538942', 'Mouse', 1, 'pcs', ''),
('TR1633266434', 'Keyboard', 3, 'pcs', ''),
('TR1633364503', 'ONT HUAWEI HG 8245H5', 2, 'ont', ''),
('TR1633364676', 'ONT HUAWEI HG 8245H5', 3, 'ont', ''),
('TR1633365063', 'ONT HUAWEI HG 8245H5', 4, 'ont', '88888888'),
('TR1633365083', 'ONT HUAWEI HG 8245H5', 1, 'ont', '9999999'),
('TR1633365144', 'ONT HUAWEI HG 8245H5', 5, 'ont', '88888888'),
(NULL, 'STB ZTE B860H_V2.0', 7, 'stb', '12345'),
('TR1633433962', 'STB ZTE B860H_V2.0', 1, 'stb', '12345'),
('TR1633434202', 'STB ZTE B860H_V2.0', 3, 'stb', '88888888'),
('TR1633434556', 'ONT HUAWEI HG 8245H5', 1, 'ont', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `detail_terima`
--

CREATE TABLE `detail_terima` (
  `no_terima` varchar(25) DEFAULT NULL,
  `nama_barang` varchar(80) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `satuan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_terima`
--

INSERT INTO `detail_terima` (`no_terima`, `nama_barang`, `jumlah`, `satuan`) VALUES
('TR1584538872', 'Keyboard', 1, 'pcs'),
('TR1584538872', 'Mouse', 1, 'pcs'),
('TR1584539271', 'Keyboard', 4, 'pcs'),
('TR1633266012', 'Keyboard', 1, 'pcs'),
('TR1633361985', 'Keyboard', 4, 'pcs'),
('TR1633362023', 'Keyboard', 20, 'pcs');

-- --------------------------------------------------------

--
-- Table structure for table `penerimaan`
--

CREATE TABLE `penerimaan` (
  `id` int(11) NOT NULL,
  `no_terima` varchar(25) DEFAULT NULL,
  `tgl_terima` varchar(25) DEFAULT NULL,
  `jam_terima` varchar(10) DEFAULT NULL,
  `nama_supplier` varchar(80) DEFAULT NULL,
  `nama_petugas` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penerimaan`
--

INSERT INTO `penerimaan` (`id`, `no_terima`, `tgl_terima`, `jam_terima`, `nama_supplier`, `nama_petugas`) VALUES
(3, 'TR1584538872', '18/03/2020', '20:41:12', 'Mutiara Comp', 'Nugrohoo'),
(4, 'TR1584539271', '18/03/2020', '20:47:51', 'Mutiara Comp', 'Fanani'),
(5, 'TR1633266012', '03/10/2021', '20:00:12', 'Mutiara Comp', 'Nugrohoo'),
(6, 'TR1633267809', '03/10/2021', '20:30:09', 'Mutiara Comp', 'Nugrohoo'),
(7, 'TR1633267809', '03/10/2021', '20:30:09', 'Mutiara Comp', 'Nugrohoo'),
(8, 'TR1633267871', '03/10/2021', '20:31:11', 'Mutiara Comp', 'Nugrohoo'),
(9, 'TR1633268104', '03/10/2021', '20:35:04', '', 'Nugrohoo'),
(10, 'TR1633268108', '03/10/2021', '20:35:08', 'Mutiara Comp', 'Nugrohoo'),
(11, 'TR1633269229', '03/10/2021', '20:53:49', 'Mutiara Comp', 'Nugrohoo'),
(12, 'TR1633269229', '03/10/2021', '20:53:49', 'Mutiara Comp', 'Nugrohoo'),
(13, 'TR1633361985', '04/10/2021', '22:39:45', 'Huawei', 'admin'),
(14, 'TR1633362023', '04/10/2021', '22:40:23', 'Huawei', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id` int(11) NOT NULL,
  `no_keluar` varchar(25) DEFAULT NULL,
  `tgl_keluar` varchar(25) DEFAULT NULL,
  `jam_keluar` varchar(10) DEFAULT NULL,
  `jumlah_keluar` int(11) NOT NULL,
  `nama_customer` varchar(80) DEFAULT NULL,
  `nama_petugas` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengeluaran`
--

INSERT INTO `pengeluaran` (`id`, `no_keluar`, `tgl_keluar`, `jam_keluar`, `jumlah_keluar`, `nama_customer`, `nama_petugas`) VALUES
(25, 'TR1633433962', '2021-09-05', '18:39', 101, 'WH Prabumulih', 'WH 3 Ilir'),
(26, 'TR1633434202', '2021-10-05', '18:43', 20, 'WH Baturaja', 'WH 3 Ilir'),
(27, 'TR1633434556', '2021-10-05', '18:49', 240, 'WH Lubuk Linggau', 'WH 3 Ilir');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `kode` varchar(20) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `kode`, `nama`, `username`, `password`) VALUES
(1, NULL, 'WH 3 Ilir', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id` int(11) NOT NULL,
  `kode` varchar(20) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id`, `kode`, `nama`, `username`, `password`) VALUES
(3, 'PETUGAS - 35', 'Fanani', 'PTGS35', 'pwd_fanani');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `kode` varchar(20) DEFAULT NULL,
  `nama` varchar(80) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telepon` varchar(15) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `kode`, `nama`, `email`, `telepon`, `alamat`) VALUES
(1, 'SPL641', 'Mutiara Comp', 'mutcomp@web.com', '087814256738', 'Cilacap'),
(2, 'SPL507', 'Huawei', 'huawei@huawei.com', '12345', ''),
(3, 'SPL160', 'ZTE', 'zte@zte.com', '12345', ''),
(4, 'SPL331', 'Fiberhome', 'fiberhome@fiberhome.com', '12345', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_toko`
--
ALTER TABLE `data_toko`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penerimaan`
--
ALTER TABLE `penerimaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `no_terima` (`no_terima`);

--
-- Indexes for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `no_keluar` (`no_keluar`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `data_toko`
--
ALTER TABLE `data_toko`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `penerimaan`
--
ALTER TABLE `penerimaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
