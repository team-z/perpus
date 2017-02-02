-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2017 at 07:49 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `fullname`, `password`, `foto`) VALUES
(4, 'killua', 'Killua Zoldyck', 'Killua', 'img/Killua_close_up.png'),
(5, 'admin', 'Rivaille Ackerman', 'admin', 'img/5277225-jeml72qa.jpeg'),
(7, 'korosensei', 'Koro-Sensei', 'korosensei', 'img/korosensei-assassination-classroom-80.7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id` int(11) NOT NULL,
  `nomor_anggota` varchar(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `ttl` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `nomor_anggota`, `nama`, `ttl`, `tempat_lahir`, `alamat`, `no_telp`, `foto`) VALUES
(1, '02.01', 'Seigen Amawaka', '', 'Japan', 'Tokyo', '081223473872', 'img/tumblr_o9r5ck3wfO1ty2dndo1_400.jpg'),
(2, '20000', 'Gon Freecs', '0684-11-20', 'Yorknew', 'Yorknew', '---', 'img/GonMugshot.png'),
(3, '', 'Rivaille Ackerman', '1985-06-25', 'Unkown', 'Unknown', '08123456789', 'img/Levi_Ackerman_character_image.png');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `id_buku` varchar(255) NOT NULL,
  `judul_buku` varchar(255) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `tahun_terbit` varchar(255) NOT NULL,
  `cover` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `id_buku`, `judul_buku`, `genre`, `penerbit`, `tahun_terbit`, `cover`) VALUES
(1, '02.01', 'GuruCorel', 'Multimedia', 'Team-Z', '2017', 'img/Cara Mudah 20 Menit Membuat COVER BUKU Dengan Corel Draw Terbaru2.png'),
(2, '01.01', 'Pemrograman Java', 'Pemrograman Komputer', 'Team-Z', '2017', 'img/1.png'),
(3, '02.01.01', 'Pemrograman Web', 'Pemrograman Komputer', 'Team-Z', '2017', 'img/Cover modul web.png');

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `id` int(11) NOT NULL,
  `lama` varchar(2) NOT NULL,
  `denda` varchar(4) NOT NULL,
  `berita` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`id`, `lama`, `denda`, `berita`) VALUES
(1, '7', '300', '19 Februari 2017 : Update Fitur Perpustakaan Online');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id` int(11) NOT NULL,
  `nomor_verifikasi` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `ttl` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id`, `nomor_verifikasi`, `fullname`, `ttl`, `tempat_lahir`, `no_telp`, `alamat`, `foto`) VALUES
(4, '109797', 'Erwin Smith', '2003-12-31', 'Jepang', '---', 'Hokkaido', 'img/Erwin_Smith_character_image.png'),
(6, '101679', 'Metal Bat', '2323-12-31', 'Z City', '08123456789', 'Z City', 'img/MetalbatAvi.png'),
(7, '108705', 'Killua', '3222-12-12', 'Yorknew', '081928273873', 'Yorknew', 'img/Killua_close_up.png');

-- --------------------------------------------------------

--
-- Table structure for table `pinjam`
--

CREATE TABLE `pinjam` (
  `id` int(11) NOT NULL,
  `judul_buku` varchar(255) NOT NULL,
  `nama_peminjam` varchar(255) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nomor_verifikasi` (`nomor_verifikasi`);

--
-- Indexes for table `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `pinjam`
--
ALTER TABLE `pinjam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
