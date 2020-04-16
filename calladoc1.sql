-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2020 at 07:56 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `calladoc1`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `nid` varchar(10) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `id_spesialis` int(11) NOT NULL,
  `foto` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`nid`, `nama`, `alamat`, `id_spesialis`, `foto`) VALUES
('1301180502', 'Dr. Rafly Mizalfi', 'Batam, Kepulauan Riau', 4, 'rafly.jpg'),
('1301184425', 'Dr. Aldilla Rafi', 'Pangkalanbun, Kalimantan Tengah', 3, 'aldi.jpg'),
('1301184439', 'Dr. Faisal Adly', 'Bandung, Jawa Barat', 1, 'faisal.jpg'),
('1301184463', 'Dr. Salsabilla Rinaldi', 'Pekanbaru, Riau', 1, 'sabila.jpg'),
('1301188839', 'Dr. Azka Jauhary Thantawy', 'Bandung, Jawa Barat', 2, 'azka.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jenisobat`
--

CREATE TABLE `jenisobat` (
  `id_jenis` int(11) NOT NULL,
  `nama_jenis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenisobat`
--

INSERT INTO `jenisobat` (`id_jenis`, `nama_jenis`) VALUES
(0, ''),
(1, 'Paracetamol'),
(2, 'Antibiotik');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id_obat` varchar(11) NOT NULL,
  `namaobat` varchar(255) NOT NULL,
  `harga` int(255) NOT NULL,
  `id_jenis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `namaobat`, `harga`, `id_jenis`) VALUES
('OBT0001', 'Panadol Hijau', 12000, 1),
('OBT0002', 'Panadol Merah', 12000, 1),
('OBT0003', 'Synthroid', 20000, 2),
('OBT0004', 'Hydrocodone', 18000, 1),
('OBT0005', 'Lisinopril', 18500, 2),
('OBT0006', 'Hydrochlorothiazide', 23000, 2),
('OBT0007', 'Crestor', 15500, 1),
('OBT0008', 'Seroquel', 21000, 2),
('OBT0009', 'Lipitor', 19500, 1),
('OBT0010', 'Plavix', 22000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `profile_pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`user_id`, `username`, `password`, `profile_pic`) VALUES
(1, 'dziem', '123', '1585367037-sad_shen.PNG'),
(2, 'mate', 'qwe', '1585367662-theodd1sout.jpg');

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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `role` enum('user','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `role`) VALUES
(1, 'lintang', 'lintang123', 'Lintang Aryasatya', 'admin'),
(2, 'sabil', 'sabil123', 'Sabil', 'user'),
(3, 'maiza', 'maiza123', 'Maiza Radhiya', 'user'),
(4, 'kintari', 'kintari123', 'Kintari Nurul', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`nid`),
  ADD KEY `id_spesialis_fk` (`id_spesialis`) USING BTREE;

--
-- Indexes for table `jenisobat`
--
ALTER TABLE `jenisobat`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`),
  ADD KEY `obat_fk_1` (`id_jenis`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `spesialis`
--
ALTER TABLE `spesialis`
  ADD PRIMARY KEY (`id_spesialis`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `spesialis`
--
ALTER TABLE `spesialis`
  MODIFY `id_spesialis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `obat`
--
ALTER TABLE `obat`
  ADD CONSTRAINT `obat_fk_1` FOREIGN KEY (`id_jenis`) REFERENCES `jenisobat` (`id_jenis`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
