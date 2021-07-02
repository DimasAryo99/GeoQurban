-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jul 2021 pada 19.24
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `nama_lengkap` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_admin` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`nama_lengkap`, `username`, `password`, `id_admin`) VALUES
('admin geoqurban', 'geoqurban', 'qurbanoke', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_hewan`
--

CREATE TABLE `data_hewan` (
  `jenis_hewan` varchar(100) NOT NULL,
  `id_hewan` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_hewan`
--

INSERT INTO `data_hewan` (`jenis_hewan`, `id_hewan`) VALUES
('sapi', 1),
('kambing', 2),
('domba', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_masjid`
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
-- Dumping data untuk tabel `data_masjid`
--

INSERT INTO `data_masjid` (`nama_masjid`, `alamat`, `latitude`, `longitude`, `no_telp`, `foto`, `id_masjid`, `deskripsi_masjid`) VALUES
('Masjid Agung Al-Azhar', 'Jl. Sisingamangaraja No.1, RT.2/RW.1, Selong, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ib', '-6.235061499351085', '106.79910672468752', '02172783683', '', 1, 'Masjid Agung Al-Azhar adalah masjid yang terletak di kompleks sekolah Al-Azhar, Kebayoran Baru, Jakarta Selatan. Masjid ini mulai dibangun pada 1953 atas prakarsa sejumlah tokoh partai Masyumi dan sel'),
('Masjid Raya Al Azhar', 'Jl. Dr. Sumarno No.6, RT.6/RW.8, Pulo Gebang, Kec. Cakung, Kota Jakarta Timur, Daerah Khusus Ibukota', '-6.211568003294864', '106.94604934557812', '0214801364', '', 2, ''),
('Masjid Raya Al Azhar Bintaro', 'Jl. Bonjol No.9, Pd. Karya, Kec. Pd. Aren, Kota Tangerang Selatan, Banten 15225', '-6.267146407141842', '106.74208572468778', '0812-9107-0848', '', 3, ''),
('Masjid Nur Al Azhar', 'RT.13/RW.9, Srengseng Sawah, Kec. Jagakarsa, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 126', '-6.351490291535406', '106.81326159585295', '', '', 4, ''),
('Masjid Jami Al-Azhar Jakapermai', 'Jakapermai, Jl. KH. Noer Ali, RT.005/RW.006, Jakasampurna, Bekasi Barat, Bekasi City, West Java 1714', '-6.2483096414542025', '106.97304436503315', '0851-5680-7068', '', 5, ''),
('Masjid Al Azhar Pejaten', 'Jl. Siaga Raya No.4, RT.12/RW.4, Pejaten Bar., Kec. Ps. Minggu, Kota Jakarta Selatan, Daerah Khusus ', '-6.269528278816006', '106.83741165424786', '', '', 6, ''),
('Masjid Ar Ridho Al-Azhar', 'Jl. Kemandoran I, RT.1/RW.16, Grogol Utara, Kec. Kby. Lama, Kota Jakarta Selatan, Daerah Khusus Ibuk', '-6.210476370920034', '106.79069189585186', '', '', 7, ''),
('Masjid Al azhar UNP', 'Jl. Prof. Dr. Hamka, Air Tawar Bar., Kec. Padang Utara, Kota Padang, Sumatera Barat 25173', '-0.8984599691452988', '100.35112838545206', '', '', 8, ''),
('Masjid Jami Al-Azhar (Pasar Minggu)', 'Jl. Mujair Raya No.24, RT.3/RW.9, Ps. Minggu, Kec. Ps. Minggu, Kota Jakarta Selatan, Daerah Khusus I', '-6.295912030660403', '106.84192417932127', '0217802650', '', 9, ''),
('Masjid Al Azhar Kemandoran', 'Jln. Kemandoran1 RT 01 RW 011, RT.1/RW.16, Grogol Utara, Jakarta Selatan, Kota Jakarta Selatan, Daer', '-6.210454005180001', '106.79069046812323', '', '', 10, ''),
('Masjid Al Azhar Sumarecon Bekasi', 'Jl. Bulevar Utara, Blok L, Kel, RT.006/RW.003, Marga Mulya, Kec. Bekasi Utara, Kota Bks, Jawa Barat ', '-6.221556145190834', '107.0017980971097	', '02129579407', '', 11, ''),
('Masjid Al Azhar Cempaka Putih', 'Jl. Cempaka Putih Barat III No. 25 RT 06 RW.03, Cempaka Putih, RT.6/RW.3, Cemp. Putih Bar., Jakarta ', '-6.1745449632034175	', '106.86241873335015', '', '', 12, ''),
('Masjid Raya Al Azhar Pondok Kopi', 'Masjid Raya Al Azhar Pondok Kopi\r\nJl. Dr. Sumarno No.6, RT.6/RW.8, Pulo Gebang, Kec. Cakung, Kota Ja', '-6.211602063808498', '106.94664683096539', '0214801364', '', 13, ''),
('Masjid Al-Azhar Pakuwon City', 'Kalisari, Kec. Mulyorejo, Kota SBY, Jawa Timur 60112', '-7.26792189787353', '112.80297899586071', '', '', 14, ''),
('Masjid Al azhar Padang', 'Ulak Karang Sel., Kec. Padang Utara, Kota Padang, Sumatera Barat', '-0.908846520460687', '100.35761798184652', '', '', 15, ''),
('Mesjid Al azhar ISI Padang Panjang', 'Jl. Abu Hanifah, Guguk Malintang, Padang Panjang Tim., Kota Padang Panjang, Sumatera Barat 27118', '-0.4569627002045399', '100.4053747198413', '', '', 16, ''),
('Masjid Asy-Syarif Al Azhar BSD', 'Komplek Sekolah Al-Azhar, Jalan Puspitaloka Sektor 3.2, BSD City Serpong, Lengkong Gudang, Kec. Serp', '-6.286939259411687', '106.67472746588912', '', '', 17, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hewan_masjid`
--

CREATE TABLE `hewan_masjid` (
  `id_hewan` int(50) NOT NULL,
  `id_masjid` int(50) NOT NULL,
  `jumlah_hewan` varchar(100) NOT NULL,
  `id_hewan_masjid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hewan_masjid`
--

INSERT INTO `hewan_masjid` (`id_hewan`, `id_masjid`, `jumlah_hewan`, `id_hewan_masjid`) VALUES
(1, 1, '30', 1),
(2, 1, '55', 2),
(3, 1, '15', 3),
(1, 2, '23', 4),
(2, 2, '34', 5),
(3, 2, '8', 6),
(1, 3, '18', 7);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `data_hewan`
--
ALTER TABLE `data_hewan`
  ADD PRIMARY KEY (`id_hewan`);

--
-- Indeks untuk tabel `data_masjid`
--
ALTER TABLE `data_masjid`
  ADD PRIMARY KEY (`id_masjid`);

--
-- Indeks untuk tabel `hewan_masjid`
--
ALTER TABLE `hewan_masjid`
  ADD PRIMARY KEY (`id_hewan_masjid`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data_hewan`
--
ALTER TABLE `data_hewan`
  MODIFY `id_hewan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `data_masjid`
--
ALTER TABLE `data_masjid`
  MODIFY `id_masjid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `hewan_masjid`
--
ALTER TABLE `hewan_masjid`
  MODIFY `id_hewan_masjid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
