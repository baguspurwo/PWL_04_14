-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 07 Jan 2017 pada 18.15
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

DELIMITER $$
--
-- Prosedur
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `tampil_kamar` ()  SELECT ruang_kamar.id_ruang, ruang_kamar.nama_kamar, tipe_kamar.jenis_kamar, tipe_kamar.harga, tipe_kamar.fasilitas, ruang_kamar.status
	FROM ruang_kamar
	INNER JOIN tipe_kamar
	ON ruang_kamar.id_type=tipe_kamar.id_type$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pesan` int(8) NOT NULL,
  `id_type` int(10) NOT NULL,
  `jumlah` int(2) NOT NULL,
  `nama_pemesan` varchar(25) NOT NULL,
  `no_ktp` varchar(30) NOT NULL,
  `tgl_pesan` varchar(15) NOT NULL,
  `tgl_out` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telepon` char(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id_pesan`, `id_type`, `jumlah`, `nama_pemesan`, `no_ktp`, `tgl_pesan`, `tgl_out`, `email`, `telepon`) VALUES
(1, 3, 2, 'Ramadhani', '85426974', '2011-08-02', '2011-04-29', 'Ramadhani@gmail.com', '08563219001'),
(2, 5, 2, 'Shanti', '65874982', '2011-03-07', '2011-04-15', 'Shanti@gmail.com', '08146900124'),
(3, 4, 1, 'andi', '25468430', '2010-12-17', '2010-11-14', 'andi@yahoo.co.id', '08219811054'),
(4, 0, 5, 'Richardo', '54821691', '2016-01-01', '2016-01-02', 'rich123@yahoo.com', '08783625229'),
(5, 2, 3, 'Mustafi', '54012810', '2016-01-08', '2016-01-09', 'mustaf@gmail.com', '08974545746');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruang_kamar`
--

CREATE TABLE `ruang_kamar` (
  `id_ruang` int(10) NOT NULL,
  `id_type` int(10) NOT NULL,
  `nama_kamar` varchar(15) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ruang_kamar`
--

INSERT INTO `ruang_kamar` (`id_ruang`, `id_type`, `nama_kamar`, `status`) VALUES
(1, 1, 'CS-01', 'KOSONG'),
(2, 1, 'CS-02', 'KOSONG'),
(3, 2, 'CD-01', 'KOSONG'),
(4, 2, 'CD-02', 'ADA'),
(5, 3, 'EX-01', 'KOSONG'),
(6, 3, 'EX-02', 'ADA'),
(7, 4, 'ST-01', 'KOSONG'),
(8, 4, 'ST-02', 'KOSONG'),
(9, 5, 'EC-01', 'KOSONG'),
(10, 5, 'Dd-78', 'KOSONG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tipe_kamar`
--

CREATE TABLE `tipe_kamar` (
  `id_type` int(10) NOT NULL,
  `jenis_kamar` varchar(15) NOT NULL,
  `harga` int(10) NOT NULL,
  `fasilitas` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tipe_kamar`
--

INSERT INTO `tipe_kamar` (`id_type`, `jenis_kamar`, `harga`, `fasilitas`) VALUES
(1, 'Cherry Suite', 230000, ''),
(2, 'Cherry Deluxe', 200000, ''),
(3, 'Executive', 180000, ''),
(4, 'Standart', 160000, ''),
(5, 'Economy', 140000, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `nama` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `status` varchar(150) NOT NULL DEFAULT 'member'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `status`) VALUES
(1, 'Mr Hendy', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'Mr Sulton', 'admin1', '21232f297a57a5a743894a0e4a801fc3', 'admin1'),
(3, 'Mr Bagus', 'admin2', '21232f297a57a5a743894a0e4a801fc3', 'admin2'),
(4, 'Mr Yusak', 'admin3', '21232f297a57a5a743894a0e4a801fc3', 'admin3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `ruang_kamar`
--
ALTER TABLE `ruang_kamar`
  ADD PRIMARY KEY (`id_ruang`);

--
-- Indexes for table `tipe_kamar`
--
ALTER TABLE `tipe_kamar`
  ADD PRIMARY KEY (`id_type`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pesan` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT for table `ruang_kamar`
--
ALTER TABLE `ruang_kamar`
  MODIFY `id_ruang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tipe_kamar`
--
ALTER TABLE `tipe_kamar`
  MODIFY `id_type` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=324;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
