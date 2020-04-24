-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2020 at 04:25 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `calladocv2`
--

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE `reservasi` (
  `noreservasi` int(255) NOT NULL,
  `nid` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `subjek` varchar(255) NOT NULL,
  `pengirim` varchar(255) NOT NULL,
  `pesan` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `jam` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservasi`
--

INSERT INTO `reservasi` (`noreservasi`, `nid`, `nama`, `subjek`, `pengirim`, `pesan`, `tanggal`, `jam`) VALUES
(18, '1301180029', 'Dr. Salsabilla Rinaldi', 'Appointment', 'Maiza Radhiya', 'Besok bisa kan dok\r\nWA:+62 8123123', '04/20/2020', '14.00'),
(20, '1301180029', 'Dr. Salsabilla Rinaldi', 'Appointment', 'Lintang Aryasatya', 'Besok ya kak', '04/20/2020', '14.00'),
(22, '1', 'Dr. Salsabilla Rinaldi', 'Appointment', 'Maiza Radhiya', 'qwe', '04/22/2020', '14.00'),
(23, '1', 'Dr. Salsabilla Rinaldi', 'Appointment', 'Lintang Aryasatya', 'aduh pusing pengen wisuda', '04/22/2020', '14.00');

-- --------------------------------------------------------

--
-- Table structure for table `spesialis`
--

CREATE TABLE `spesialis` (
  `id_spesialis` int(11) NOT NULL,
  `nama_spesialis` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spesialis`
--

INSERT INTO `spesialis` (`id_spesialis`, `nama_spesialis`) VALUES
(1, 'Dokter Umum'),
(2, 'Dokter Jantung'),
(3, 'Dokter Kulit'),
(4, 'Dokter Mata');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_order`
--

CREATE TABLE `tbl_detail_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) DEFAULT NULL,
  `produk` int(10) DEFAULT NULL,
  `qty` int(10) DEFAULT NULL,
  `harga` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_detail_order`
--

INSERT INTO `tbl_detail_order` (`id`, `order_id`, `produk`, `qty`, `harga`) VALUES
(5, 6, 1, 1, '12000'),
(6, 9, 1, 1, '12000'),
(7, 10, 1, 2, '12000'),
(8, 10, 10, 1, '12000'),
(9, 11, 1, 1, '12000'),
(10, 11, 10, 1, '12000'),
(11, 12, 1, 1, '12000'),
(12, 13, 1, 1, '12000'),
(13, 14, 1, 2, '12000'),
(14, 14, 10, 1, '12000'),
(15, 15, 1, 1, '12000'),
(16, 17, 10, 1, '12000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_kategori` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id`, `nama_kategori`) VALUES
(1, 'Paracetamol');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_obat`
--

CREATE TABLE `tbl_obat` (
  `id_produk` int(10) UNSIGNED NOT NULL,
  `nama_produk` varchar(50) DEFAULT NULL,
  `deskripsi` varchar(50) DEFAULT NULL,
  `harga` varchar(10) DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  `kategori` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_obat`
--

INSERT INTO `tbl_obat` (`id_produk`, `nama_produk`, `deskripsi`, `harga`, `gambar`, `kategori`) VALUES
(1, 'Panadol Merah', 'Meredakan sakit kepala', '12000', 'pmerah.png', 1),
(10, 'Panadol Hijau', 'Meredakan Flu', '12000', 'phijau.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(10) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `pelanggan` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `tanggal`, `pelanggan`) VALUES
(6, '2020-04-21', 6),
(7, '2020-04-21', 7),
(8, '2020-04-21', 8),
(9, '2020-04-21', 9),
(10, '2020-04-21', 10),
(11, '2020-04-21', 11),
(12, '2020-04-21', 12),
(13, '2020-04-21', 13),
(14, '2020-04-21', 14),
(15, '2020-04-21', 15),
(16, '2020-04-21', 16),
(17, '2020-04-22', 17);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelanggan`
--

CREATE TABLE `tbl_pelanggan` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pelanggan`
--

INSERT INTO `tbl_pelanggan` (`id`, `nama`, `email`, `alamat`, `telp`) VALUES
(14, 'Maiza Radhiya', 'Maiza Radhiya@gmail.com', 'Jakarta', '081468597024'),
(15, 'Maiza Radhiya', 'Maiza Radhiya@gmail.com', 'Jakarta', '081468597024'),
(16, 'Maiza Radhiya', 'Maiza Radhiya@gmail.com', 'Jakarta', '081468597024'),
(17, 'Sabil', 'Sabil@gmail.com', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nohp` varchar(255) NOT NULL,
  `id_spesialis` int(11) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `role` enum('Pelanggan','Admin','Dokter') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `alamat`, `nohp`, `id_spesialis`, `foto`, `role`) VALUES
(1, 'sabil', 'sabil123', 'Dr. Salsabilla Rinaldi', 'Pekanbaru', '081268597024', 1, 'sabil.jpg', 'Dokter'),
(2, 'wiro', 'wiro123', 'Dr. Prawiro W', 'Subang', '081368597024', 2, 'wiro.jpg', 'Dokter'),
(3, 'maiza', 'maiza123', 'Maiza Radhiya', 'Jakarta', '081468597024', NULL, NULL, 'Pelanggan'),
(4, 'lintang', 'lintang', 'Lintang Aryasatya', 'Pekanbaru', '081568597024', NULL, NULL, 'Admin'),
(10, 'dita', '123', 'Dita', 'Bandung', '123', 1, '11.jpg', 'Dokter');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`noreservasi`);

--
-- Indexes for table `spesialis`
--
ALTER TABLE `spesialis`
  ADD PRIMARY KEY (`id_spesialis`);

--
-- Indexes for table `tbl_detail_order`
--
ALTER TABLE `tbl_detail_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_obat`
--
ALTER TABLE `tbl_obat`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_spesialis_fk` (`id_spesialis`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `noreservasi` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `spesialis`
--
ALTER TABLE `spesialis`
  MODIFY `id_spesialis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_detail_order`
--
ALTER TABLE `tbl_detail_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_obat`
--
ALTER TABLE `tbl_obat`
  MODIFY `id_produk` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
