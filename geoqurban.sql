-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2021 at 06:31 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `geoqurban`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `nama_lengkap` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_admin` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`nama_lengkap`, `username`, `password`, `id_admin`) VALUES
('admin geoqurban', 'geoqurban', 'qurbanoke', 1);

-- --------------------------------------------------------

--
-- Table structure for table `data_hewan`
--

CREATE TABLE `data_hewan` (
  `jenis_hewan` varchar(100) NOT NULL,
  `id_hewan` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_hewan`
--

INSERT INTO `data_hewan` (`jenis_hewan`, `id_hewan`) VALUES
('sapi', 1),
('kambing', 2),
('domba', 3);

-- --------------------------------------------------------

--
-- Table structure for table `data_masjid`
--

CREATE TABLE `data_masjid` (
  `nama_masjid` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `foto` varchar(500) NOT NULL,
  `id_masjid` int(100) NOT NULL,
  `deskripsi_masjid` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_masjid`
--

INSERT INTO `data_masjid` (`nama_masjid`, `alamat`, `latitude`, `longitude`, `no_telp`, `foto`, `id_masjid`, `deskripsi_masjid`) VALUES
('Masjid Agung Al-Azhar', 'Jl. Sisingamangaraja No.1, RT.2/RW.1, Selong, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ib', '-6.235061499351085', '106.79910672468752', '02172783683', 'MasjidAgung.jpg', 1, 'Masjid Agung Al-Azhar adalah masjid yang terletak di kompleks sekolah Al-Azhar, Kebayoran Baru, Jakarta Selatan. Masjid ini mulai dibangun pada 1953 atas prakarsa sejumlah tokoh partai Masyumi dan sel'),
('Masjid Raya Al Azhar', 'Jl. Dr. Sumarno No.6, RT.6/RW.8, Pulo Gebang, Kec. Cakung, Kota Jakarta Timur, Daerah Khusus Ibukota', '-6.211568003294864', '106.94604934557812', '0214801364', 'MasjidRaya.jpg', 2, ''),
('Masjid Raya Al Azhar Bintaro', 'Jl. Bonjol No.9, Pd. Karya, Kec. Pd. Aren, Kota Tangerang Selatan, Banten 15225', '-6.267146407141842', '106.74208572468778', '0812-9107-0848', 'MajidRaya Bintaro.jpg', 3, ''),
('Masjid Nur Al Azhar', 'RT.13/RW.9, Srengseng Sawah, Kec. Jagakarsa, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 126', '-6.351490291535406', '106.81326159585295', '', '', 4, ''),
('Masjid Jami Al-Azhar Jakapermai', 'Jakapermai, Jl. KH. Noer Ali, RT.005/RW.006, Jakasampurna, Bekasi Barat, Bekasi City, West Java 1714', '-6.2483096414542025', '106.97304436503315', '0851-5680-7068', 'MasjidJamiBekasi.jpg', 5, ''),
('Masjid Al Azhar Pejaten', 'Jl. Siaga Raya No.4, RT.12/RW.4, Pejaten Bar., Kec. Ps. Minggu, Kota Jakarta Selatan, Daerah Khusus ', '-6.269528278816006', '106.83741165424786', '', 'MasjidPejaten.jpg', 6, ''),
('Masjid Ar Ridho Al-Azhar', 'Jl. Kemandoran I, RT.1/RW.16, Grogol Utara, Kec. Kby. Lama, Kota Jakarta Selatan, Daerah Khusus Ibuk', '-6.210476370920034', '106.79069189585186', '', '', 7, ''),
('Masjid Al azhar UNP', 'Jl. Prof. Dr. Hamka, Air Tawar Bar., Kec. Padang Utara, Kota Padang, Sumatera Barat 25173', '-0.8984599691452988', '100.35112838545206', '', 'MasjidUnp.jpg', 8, ''),
('Masjid Jami Al-Azhar (Pasar Minggu)', 'Jl. Mujair Raya No.24, RT.3/RW.9, Ps. Minggu, Kec. Ps. Minggu, Kota Jakarta Selatan, Daerah Khusus I', '-6.295912030660403', '106.84192417932127', '0217802650', '', 9, ''),
('Masjid Al Azhar Kemandoran', 'Jln. Kemandoran1 RT 01 RW 011, RT.1/RW.16, Grogol Utara, Jakarta Selatan, Kota Jakarta Selatan, Daer', '-6.210454005180001', '106.79069046812323', '', 'MasjidKemandoran.jpg', 10, ''),
('Masjid Al Azhar Sumarecon Bekasi', 'Jl. Bulevar Utara, Blok L, Kel, RT.006/RW.003, Marga Mulya, Kec. Bekasi Utara, Kota Bks, Jawa Barat ', '-6.221556145190834', '107.0017980971097	', '02129579407', 'MasjidRayaBekasi.jpg', 11, ''),
('Masjid Al Azhar Cempaka Putih', 'Jl. Cempaka Putih Barat III No. 25 RT 06 RW.03, Cempaka Putih, RT.6/RW.3, Cemp. Putih Bar., Jakarta ', '-6.1745449632034175	', '106.86241873335015', '', 'MasjidCempakaPutih.jpg', 12, ''),
('Masjid Al-Azhar Semarang', 'Jl. Klentengsari, Pedalangan, Kec. Banyumanik, Kota Semarang, Jawa Tengah 50268', '-7.056256191005614', '110.42672519943758', '', '', 13, ''),
('Masjid Al Azhar Permata Puri', 'Bringin, Kec. Ngaliyan, Kota Semarang, Jawa Tengah 50189', '-6.998537071450119', '110.34049621791506', '', 'permata puri semarang.jpeg', 15, ''),
('Mesjid Al azhar ISI Padang Panjang', 'Jl. Abu Hanifah, Guguk Malintang, Padang Panjang Tim., Kota Padang Panjang, Sumatera Barat 27118', '-0.4569627002045399', '100.4053747198413', '', 'MasjidPadang.jpg', 16, ''),
('Masjid Asy-Syarif Al Azhar BSD', 'Komplek Sekolah Al-Azhar, Jalan Puspitaloka Sektor 3.2, BSD City Serpong, Lengkong Gudang, Kec. Serp', '-6.286939259411687', '106.67472746588912', '', 'MasjidBsd.jpg', 17, '');

-- --------------------------------------------------------

--
-- Table structure for table `hewan_masjid`
--

CREATE TABLE `hewan_masjid` (
  `id_hewan` int(50) NOT NULL,
  `id_masjid` int(50) NOT NULL,
  `jumlah_hewan` varchar(100) NOT NULL,
  `id_hewan_masjid` int(50) NOT NULL,
  `foto_hewan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hewan_masjid`
--

INSERT INTO `hewan_masjid` (`id_hewan`, `id_masjid`, `jumlah_hewan`, `id_hewan_masjid`, `foto_hewan`) VALUES
(1, 1, '30', 1, ''),
(2, 1, '55', 2, ''),
(3, 1, '15', 3, ''),
(1, 2, '23', 4, ''),
(2, 2, '34', 5, ''),
(3, 2, '8', 6, ''),
(1, 3, '18', 7, ''),
(2, 3, '12', 8, ''),
(3, 3, '20', 9, ''),
(1, 4, '15', 10, ''),
(2, 4, '25', 11, ''),
(3, 4, '30', 12, ''),
(1, 5, '12', 13, ''),
(2, 5, '40', 14, ''),
(3, 5, '25', 15, ''),
(1, 6, '44', 16, ''),
(2, 6, '35', 17, ''),
(3, 6, '9', 18, ''),
(1, 7, '27', 19, ''),
(2, 7, '17', 20, ''),
(3, 7, '10\r\n', 21, ''),
(1, 8, '20', 22, ''),
(2, 8, '7', 23, ''),
(3, 8, '13', 24, ''),
(1, 9, '25', 25, ''),
(2, 9, '13', 26, ''),
(3, 9, '30', 27, ''),
(1, 10, '19', 28, ''),
(2, 10, '20', 29, ''),
(3, 10, '8', 30, ''),
(1, 11, '10', 31, ''),
(2, 11, '20', 32, ''),
(3, 11, '25', 33, ''),
(1, 12, '30', 34, ''),
(2, 12, '12', 35, ''),
(3, 12, '8', 36, ''),
(1, 13, '40', 37, ''),
(2, 13, '17', 38, ''),
(3, 13, '35', 39, ''),
(1, 14, '17', 40, ''),
(2, 14, '11', 41, ''),
(3, 14, '34', 42, ''),
(1, 15, '44', 43, ''),
(2, 15, '10', 44, ''),
(3, 15, '15', 45, ''),
(1, 16, '9', 46, ''),
(2, 16, '27', 47, ''),
(3, 16, '19', 48, ''),
(1, 17, '10', 49, ''),
(2, 17, '19', 50, ''),
(3, 17, '27', 51, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `data_hewan`
--
ALTER TABLE `data_hewan`
  ADD PRIMARY KEY (`id_hewan`);

--
-- Indexes for table `data_masjid`
--
ALTER TABLE `data_masjid`
  ADD PRIMARY KEY (`id_masjid`);

--
-- Indexes for table `hewan_masjid`
--
ALTER TABLE `hewan_masjid`
  ADD PRIMARY KEY (`id_hewan_masjid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `data_hewan`
--
ALTER TABLE `data_hewan`
  MODIFY `id_hewan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `data_masjid`
--
ALTER TABLE `data_masjid`
  MODIFY `id_masjid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `hewan_masjid`
--
ALTER TABLE `hewan_masjid`
  MODIFY `id_hewan_masjid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
