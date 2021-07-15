-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2021 at 01:33 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tes-login`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_toko`
--

CREATE TABLE `admin_toko` (
  `admin_id` int(11) NOT NULL,
  `name_admin` varchar(128) NOT NULL,
  `email_admin` varchar(128) NOT NULL,
  `image_admin` varchar(128) NOT NULL,
  `password_admin` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  `toko_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_toko`
--

INSERT INTO `admin_toko` (`admin_id`, `name_admin`, `email_admin`, `image_admin`, `password_admin`, `role_id`, `is_active`, `date_created`, `toko_id`) VALUES
(3, 'Aryo', 'dimasaryo819@gmail.com', 'default.jpg', '$2y$10$Wea62eX3V5BOQ5nVEBSm9.U998eIDQwUkKgzn1/kKsPK2URj4Tj4y', 2, 1, 1624081415, 12),
(4, 'Aldrian', 'aldrian@gmail.com', 'default.jpg', '$2y$10$gPd6QHG6iXLH2.cV2bf5pelKuj3o.uOA/3itHRqBXaxX8oB9qDw5a', 2, 1, 1624104589, 11),
(5, 'Rafif', 'rafif@gmail.com', 'default.jpg', '$2y$10$d9BWSmfO66EPKnS9G2hEPucWCNjfOykBQheQy2RJoQAUAszsmePSy', 2, 1, 1624199135, 15);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `nama_kategori` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `nama_kategori`, `url`) VALUES
(9, 'Laptop', 'produk/laptop'),
(10, 'Handphone', 'produk/handphone'),
(11, 'Earphone', 'produk/earphone');

-- --------------------------------------------------------

--
-- Table structure for table `kurir`
--

CREATE TABLE `kurir` (
  `kurir_id` int(11) NOT NULL,
  `nama_kurir` varchar(128) NOT NULL,
  `layanan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kurir`
--

INSERT INTO `kurir` (`kurir_id`, `nama_kurir`, `layanan_id`) VALUES
(1, 'JNE', 1),
(3, 'SiCepat', 1),
(4, 'SiCepat', 2),
(5, 'JNE', 2);

-- --------------------------------------------------------

--
-- Table structure for table `layanan_kurir`
--

CREATE TABLE `layanan_kurir` (
  `layanan_id` int(11) NOT NULL,
  `nama_layanan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `layanan_kurir`
--

INSERT INTO `layanan_kurir` (`layanan_id`, `nama_layanan`) VALUES
(1, 'Reguler'),
(2, 'Next Day');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role` int(11) NOT NULL,
  `image` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `username`, `password`, `role`, `image`, `email`) VALUES
(2, 'tes123', 'dimas', '1234', 1, 'default.jpg', 'tes123@mail.com');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(128) NOT NULL,
  `ket_produk` varchar(128) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `berat_produk` int(11) NOT NULL,
  `stok_produk` int(11) NOT NULL,
  `gambar_produk` varchar(128) NOT NULL,
  `toko_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `ket_produk`, `harga_produk`, `berat_produk`, `stok_produk`, `gambar_produk`, `toko_id`, `kategori_id`) VALUES
(5, 'Iphone 12 Pro', 'Merupakan produk flagship terbaru dari apple', 21500000, 800, 7, 'Hp2.jpeg', 15, 10),
(6, 'Google Pixel 3', 'Merupakan handphone flagship keluaran dari google ', 6500000, 500, 10, 'Hp1.jpeg', 12, 10),
(7, 'Airpods 3', 'Merupakan produk keluaran terbaru dari apple', 2000000, 128, 10, 'Earphone1.jpeg', 15, 11),
(8, 'Pixel Buds', 'Keluaran Earphone terbaru dari google', 1000000, 128, 10, 'Earphone2.jpg', 12, 11),
(18, 'Asus Zenbook Pro', 'Merupakan keluaran laptop asus terbaru', 15000000, 1700, 4, 'Laptop1.jpeg', 11, 9);

-- --------------------------------------------------------

--
-- Table structure for table `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(56) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL,
  `kurir_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`, `kurir_id`) VALUES
(9, 'Dimas Aryo Wibowo', 'JL.CEMERLANG NO.9 RT/RW.002/006 JATIBENING BARU PONDOKGEDE BEKASI 17412', '2021-06-28 02:15:04', '2021-06-29 02:15:04', 0),
(10, 'Dimas Aryo Wibowo', 'JL.CEMERLANG NO.9 RT/RW.002/006 JATIBENING BARU PONDOKGEDE BEKASI 17412', '2021-06-28 02:18:44', '2021-06-29 02:18:44', 0),
(11, 'Dimas Aryo Wibowo', 'JL.CEMERLANG NO.9 RT/RW.002/006 JATIBENING BARU PONDOKGEDE BEKASI 17412', '2021-06-28 02:23:43', '2021-06-29 02:23:43', 0),
(12, 'Dimas Aryo Wibowo', 'JL.CEMERLANG NO.9 RT/RW.002/006 JATIBENING BARU PONDOKGEDE BEKASI 17412', '2021-06-28 02:26:40', '2021-06-29 02:26:40', 0),
(13, 'asddas', 'asdas', '2021-07-03 23:32:23', '2021-07-04 23:32:23', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `toko`
--

CREATE TABLE `toko` (
  `toko_id` int(11) NOT NULL,
  `nama_toko` varchar(128) NOT NULL,
  `deskripsi_toko` varchar(128) NOT NULL,
  `alamat_toko` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `toko`
--

INSERT INTO `toko` (`toko_id`, `nama_toko`, `deskripsi_toko`, `alamat_toko`, `url`) VALUES
(11, 'A Store', 'Kami menyediakan laptop-laptop terbaik', 'Jakarta Barat', 'produk/astore'),
(12, 'D Store', 'Toko distributor resmi google pixel', 'Bekasi', 'produk/dstore'),
(15, 'I Store', 'Kami menjual produk - produk dari apple', 'Bogor', 'produk/istore');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'dimas', 'dimas.aryo@if.uai.ac.id', 'default.jpg', '$2y$10$8kGozI7cVaoab3E96hlupuizUMnoQvVUismdVeqZJzOV9R1jyRfcO', 1, 1, 1622710133);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `accessmenu_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`accessmenu_id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `menu_id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`menu_id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Pengguna');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`role_id`, `role_name`) VALUES
(1, 'admin'),
(2, 'member'),
(3, 'pengguna');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `submenu_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `tittle` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`submenu_id`, `menu_id`, `tittle`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'Superadmin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'Dashboard', 'Admintoko', 'fas fa-fw fa-tachometer-alt', 1),
(3, 1, 'Toko', 'Superadmin/toko', 'fas fa-fw fa-store', 1),
(4, 1, 'Kategori', 'Superadmin/listkategori', 'fas fa-fw fa-tag', 1),
(5, 1, 'Kurir', 'Superadmin/kurir', 'fas fa-fw fa-shipping-fast', 1),
(6, 2, 'Produk', 'Admintoko/produk', 'fas fa-fw fa-gifts', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_toko`
--
ALTER TABLE `admin_toko`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `kurir`
--
ALTER TABLE `kurir`
  ADD PRIMARY KEY (`kurir_id`);

--
-- Indexes for table `layanan_kurir`
--
ALTER TABLE `layanan_kurir`
  ADD PRIMARY KEY (`layanan_id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`toko_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`accessmenu_id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`submenu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_toko`
--
ALTER TABLE `admin_toko`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
