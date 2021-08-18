-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2021 at 12:23 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `persediaan_barang`
--

-- --------------------------------------------------------

--
-- Table structure for table `brg_keluar`
--

CREATE TABLE `brg_keluar` (
  `kd_keluar` varchar(8) NOT NULL,
  `tgl_keluar` date NOT NULL,
  `kd_brg` varchar(6) NOT NULL,
  `id_pel` varchar(6) NOT NULL,
  `jml_keluar` tinyint(1) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brg_keluar`
--

INSERT INTO `brg_keluar` (`kd_keluar`, `tgl_keluar`, `kd_brg`, `id_pel`, `jml_keluar`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
('S03221', '2021-03-11', 'B0002', 'C-0003', 70, 1, '2021-08-04 04:09:52', NULL, NULL),
('S03821', '2021-08-20', 'B0003', 'C-0001', 127, 1, '2021-08-04 04:13:33', NULL, NULL),
('S03921', '2021-08-29', 'B0001', 'C-0002', 127, 1, '2021-08-04 04:15:20', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `brg_masuk`
--

CREATE TABLE `brg_masuk` (
  `kd_masuk` varchar(21) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `kd_brg` varchar(6) NOT NULL,
  `id_supp` varchar(6) NOT NULL,
  `jml_masuk` tinyint(1) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brg_masuk`
--

INSERT INTO `brg_masuk` (`kd_masuk`, `tgl_masuk`, `kd_brg`, `id_supp`, `jml_masuk`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
('012/SSS/0321', '2021-03-09', 'B0002', 'S-0002', 50, 1, '2021-08-04 03:59:02', NULL, NULL),
('024/SSS/0321', '2021-03-17', 'B0003', 'S-0003', 100, 1, '2021-08-04 04:02:54', NULL, NULL),
('037/SSS/0321', '2021-08-27', 'B0001', 'S-0001', 127, 1, '2021-08-04 04:05:13', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_barang`
--

CREATE TABLE `t_barang` (
  `kd_brg` varchar(8) NOT NULL,
  `nm_brg` varchar(21) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `satuan` char(12) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_barang`
--

INSERT INTO `t_barang` (`kd_brg`, `nm_brg`, `harga`, `stok`, `satuan`, `gambar`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
('B0001', 'Fire Brick SK 34', 14800, 10373, 'pcs', 'http://localhost/bcit-ci-CodeIgniter-b73eb19/assets/uploads/2021-08-03-22-34-33.png', 1, '2021-08-04 03:34:34', 1, '2021-08-04 04:15:20'),
('B0002', 'Rock Wool', 375000, 2980, 'box', 'http://localhost/bcit-ci-CodeIgniter-b73eb19/assets/uploads/2021-08-03-22-57-24.png', 1, '2021-08-04 03:44:45', 1, '2021-08-04 04:09:52'),
('B0003', 'Superbond', 160000, 6900, 'kgs', 'http://localhost/bcit-ci-CodeIgniter-b73eb19/assets/uploads/2021-08-03-22-46-04.png', 1, '2021-08-04 03:46:04', 1, '2021-08-04 04:13:33'),
('B0004', 'Supercast', 450000, 500, 'kgs', 'http://localhost/bcit-ci-CodeIgniter-b73eb19/assets/uploads/2021-08-04-06-40-36.png', 1, '2021-08-04 11:39:18', 1, '2021-08-04 11:40:36');

-- --------------------------------------------------------

--
-- Table structure for table `t_pegawai`
--

CREATE TABLE `t_pegawai` (
  `id` int(11) NOT NULL,
  `nama` varchar(21) NOT NULL,
  `jenis_kelamin` char(10) NOT NULL,
  `jabatan` varchar(12) NOT NULL,
  `hak_akses` varchar(7) NOT NULL,
  `no_telp` int(17) NOT NULL,
  `alamat` longtext NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(16) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_pelanggan`
--

CREATE TABLE `t_pelanggan` (
  `id_pel` varchar(6) NOT NULL,
  `nm_pel` varchar(50) NOT NULL,
  `telp_pel` char(13) NOT NULL,
  `alamat_pel` longtext NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_pelanggan`
--

INSERT INTO `t_pelanggan` (`id_pel`, `nm_pel`, `telp_pel`, `alamat_pel`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
('C-0001', 'PT. ARTHAFAJAR MITRASEJATI', '0254382203', '   Kedaleman, Kec. Cibeber, Kota Cilegon, Banten 42422 ', 1, '2021-08-04 02:24:51', NULL, NULL),
('C-0002', 'PT. JAYA REFRACTORINDO UTAMA', '0215951253', '  Jl. Raya Serang No.km 26.8, Kp. Pos, Sentul, Kec. Balaraja, Tangerang, Banten 15610', 1, '2021-08-04 02:40:39', NULL, NULL),
('C-0003', 'PT. SWEET INDO LAMPUNG', '0726565712', '  Jl. Astra Ksetra, Gedung Meneng, km 108 Menggala, Kab. Tulangbawang, Lampung Utara 34696', 1, '2021-08-04 02:45:12', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_supplier`
--

CREATE TABLE `t_supplier` (
  `id_supp` varchar(6) NOT NULL,
  `nm_supp` varchar(50) NOT NULL,
  `telp_supp` char(13) NOT NULL,
  `alamat_supp` longtext NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_supplier`
--

INSERT INTO `t_supplier` (`id_supp`, `nm_supp`, `telp_supp`, `alamat_supp`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
('S-0001', 'PT. SOMAR GEMILANG SEJAHTERA', '0254382203', '   Kedaleman, Kec. Cibeber, Kota Cilegon, Banten 42422 ', 1, '2021-08-04 02:49:19', NULL, NULL),
('S-0002', 'PT. WILLICH ISOLASI PRATAMA', '02131938065', 'Gedung Cikini Pusat, Jl. Cikini Raya 60 J, Jakarta 10330', 1, '2021-08-04 02:57:03', NULL, NULL),
('S-0003', 'SURYA GLOBAL PRATAMA', '', 'ERA PRIMA, blok 08, Daan Mogot Rd, RT.001/RW.001, Poris Gaga Baru, Batuceper, Kota Tangerang, Banten 15122', 1, '2021-08-04 03:03:12', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brg_keluar`
--
ALTER TABLE `brg_keluar`
  ADD PRIMARY KEY (`kd_keluar`);

--
-- Indexes for table `brg_masuk`
--
ALTER TABLE `brg_masuk`
  ADD PRIMARY KEY (`kd_masuk`);

--
-- Indexes for table `t_barang`
--
ALTER TABLE `t_barang`
  ADD PRIMARY KEY (`kd_brg`);

--
-- Indexes for table `t_pegawai`
--
ALTER TABLE `t_pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_pelanggan`
--
ALTER TABLE `t_pelanggan`
  ADD PRIMARY KEY (`id_pel`);

--
-- Indexes for table `t_supplier`
--
ALTER TABLE `t_supplier`
  ADD PRIMARY KEY (`id_supp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
