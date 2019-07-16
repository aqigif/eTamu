-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Nov 2018 pada 08.26
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `etamu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku_tamu`
--

CREATE TABLE `buku_tamu` (
  `no_tamu` int(5) NOT NULL,
  `tgl` date NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `instansi` varchar(100) NOT NULL,
  `kabkota` varchar(100) NOT NULL,
  `kesan` text NOT NULL,
  `pesan` text NOT NULL,
  `jml` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku_tamu`
--

INSERT INTO `buku_tamu` (`no_tamu`, `tgl`, `nama`, `jabatan`, `instansi`, `kabkota`, `kesan`, `pesan`, `jml`) VALUES
(3, '2018-11-08', 'Aqil Gifari', 'Pelajar', 'SMK N 1 Kawali', 'Ciamis', 'Karya-karya nya sangat mengesankan.', 'Semoga lebih banyak lagi karya-karyanya', 1),
(4, '2018-11-08', 'Faiq Fahmi', 'Pelajar', 'Institut Teknologi Bandung', 'Bandung', 'Wow, keren-keren', 'Semoga makin keren', 1),
(5, '2018-11-08', 'Sandy Herdiansyah', 'Pelajar', 'SMK N 1 Kawali', 'Ciamis', 'Hebat, jabar juara lah', 'Buat inovasi lain', 1),
(6, '2018-11-08', 'Tes', 'Tes', 'Tes', 'Kab. Bandung', 'tes', 'tes', 1),
(7, '2018-11-08', 'Tes', 'Tes', 'Tes', 'Kab. Bandung', 'tes', 'tes', 1),
(8, '2018-11-07', 'Tes', 'Tes', 'Tes', 'Kab. Bandung', 'tes', 'tes', 1),
(9, '2018-11-07', 'Tes', 'Tes', 'Tes', 'Kab. Bandung', 'tes', 'tes', 1),
(10, '2018-11-07', 'Tes', 'Tes', 'Tes', 'Kab. Bandung', 'tes', 'tes', 1),
(11, '2018-11-07', 'Tes', 'Tes', 'Tes', 'Kab. Bandung', 'tes', 'tes', 1),
(12, '2018-11-07', 'Tes', 'Tes', 'Tes', 'Kab. Bandung', 'tes', 'tes', 1),
(13, '2018-11-08', 'Tes', 'Tes', 'Tes', 'Kab. Bandung', 'tes', 'tes', 1),
(14, '2018-11-08', 'Tes', 'Tes', 'Tes', 'Kab. Bandung', 'tes', 'tes', 1),
(15, '2018-11-08', 'Tes', 'Tes', 'Tes', 'Kab. Bandung', 'tes', 'tes', 1),
(16, '2018-11-08', 'Tes', 'Tes', 'Tes', 'Kab. Bandung Barat', 'tes', 'tes', 1),
(17, '2018-11-08', 'Tes', 'Tes', 'Tes', 'Kab. Bandung Barat', 'tes', 'tes', 1),
(18, '2018-11-08', 'Tes', 'Tes', 'Tes', 'Kab. Bandung Barat', 'tes', 'tes', 1),
(19, '2018-11-08', 'Tes', 'Tes', 'Tes', 'Kab. Bandung Barat', 'tes', 'tes', 1),
(20, '2018-11-09', 'Tes', 'Tes', 'Tes', 'Kab. Bandung Barat', 'tes', 'tes', 1),
(21, '2018-11-09', 'Tes', 'Tes', 'Tes', 'Kab. Bandung Barat', 'tes', 'tes', 1),
(22, '2018-11-09', 'Tes', 'Tes', 'Tes', 'Kab. Bekasi', 'tes', 'tes', 1),
(23, '2018-11-09', 'Tes', 'Tes', 'Tes', 'Kab. Bekasi', 'tes', 'tes', 1),
(24, '2018-11-09', 'Tes', 'Tes', 'Tes', 'Kab. Bekasi', 'tes', 'tes', 1),
(25, '2018-11-09', 'Tes', 'Tes', 'Tes', 'Kab. Bekasi', 'tes', 'tes', 1),
(26, '2018-11-09', 'Tes', 'Tes', 'Tes', 'Kab. Bekasi', 'tes', 'tes', 1),
(27, '2018-11-09', 'Tes', 'Tes', 'Tes', 'Kab. Bekasi', 'tes', 'tes', 1),
(28, '2018-11-07', 'Tes', 'Tes', 'Tes', 'Kab. Bekasi', 'tes', 'tes', 1),
(29, '2018-11-08', 'Tes', 'Tes', 'Tes', 'Kab. Bekasi', 'tes', 'tes', 1),
(30, '2018-11-08', 'Tes', 'Tes', 'Tes', 'Kab. Bekasi', 'tes', 'tes', 1),
(31, '2018-11-07', 'Tes', 'Tes', 'Tes', 'Kab. Bekasi', 'tes', 'tes', 1),
(32, '2018-11-09', 'Tes', 'Tes', 'Tes', 'Kab. Bekasi', 'tes', 'tes', 1),
(33, '2018-11-08', 'asa', 'sas', 'asa', 'asa', 'asa', 'sasa', 1),
(34, '2018-11-08', 'sdAD', 'DAd', 'asas', 'Kabupaten Bandung Barat', 'asas', 'asasa', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar`
--

CREATE TABLE `gambar` (
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gambar`
--

INSERT INTO `gambar` (`gambar`) VALUES
('epitech1'),
('epitech2'),
('epitech1'),
('epitech1'),
('gub1'),
('gub2'),
('1'),
('2'),
('3'),
('4'),
('5'),
('6'),
('7'),
('8'),
('9'),
('10'),
('11'),
('12'),
('13'),
('14'),
('15'),
('16'),
('17'),
('18'),
('19'),
('20'),
('21'),
('22'),
('23'),
('24'),
('25'),
('26'),
('27'),
('28'),
('29'),
('30'),
('31'),
('32'),
('33'),
('34'),
('35'),
('36'),
('37'),
('38'),
('39'),
('40'),
('41'),
('42'),
('43'),
('44'),
('45'),
('46'),
('47'),
('48'),
('49'),
('50'),
('51'),
('52'),
('53'),
('54'),
('55'),
('56'),
('57'),
('58'),
('59'),
('60'),
('61'),
('62'),
('63'),
('64'),
('65'),
('66'),
('67'),
('68'),
('69'),
('70'),
('71'),
('72'),
('73'),
('74'),
('75'),
('76'),
('77'),
('78'),
('79'),
('80'),
('81'),
('82'),
('83');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kabkota`
--

CREATE TABLE `kabkota` (
  `pilih` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kabkota`
--

INSERT INTO `kabkota` (`pilih`) VALUES
('Kabupaten Bandung'),
('Kabupaten Bandung Barat'),
('Kabupaten Bekasi'),
('Kabupaten Bogor'),
('Kabupaten Ciamis'),
('Kabupaten Cianjur'),
('Kabupaten Cirebon'),
('Kabupaten Garut'),
('Kabupaten Indramayu'),
('Kabupaten Karawang'),
('Kabupaten Kuningan'),
('Kabupaten Majalengka'),
('Kabupaten Pangandaran'),
('Kabupaten Purwakarta'),
('Kabupaten Subang'),
('Kabupaten Sukabumi'),
('Kabupaten Sumedang'),
('Kabupaten Tasikmalaya'),
('Kota Bandung'),
('Kota Banjar'),
('Kota Bekasi'),
('Kota Bogor'),
('Kota Cimahi'),
('Kota Cirebon'),
('Kota Depok'),
('Kota Sukabumi'),
('Kota Tasikmalaya');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku_tamu`
--
ALTER TABLE `buku_tamu`
  ADD PRIMARY KEY (`no_tamu`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku_tamu`
--
ALTER TABLE `buku_tamu`
  MODIFY `no_tamu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
