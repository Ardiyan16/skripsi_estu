-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Bulan Mei 2022 pada 05.36
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsi_estu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `status` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `status`) VALUES
(1, 'admin', 'admin', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_latih`
--

CREATE TABLE `data_latih` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) DEFAULT NULL,
  `speed` varchar(5) DEFAULT NULL,
  `power` varchar(5) DEFAULT NULL,
  `stamina` varchar(5) DEFAULT NULL,
  `agility` varchar(5) DEFAULT NULL,
  `kedisiplinan` varchar(5) DEFAULT NULL,
  `teknik` varchar(5) DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_latih`
--

INSERT INTO `data_latih` (`id`, `nama`, `speed`, `power`, `stamina`, `agility`, `kedisiplinan`, `teknik`, `kategori`) VALUES
(1, 'Muhammad Fat\'Hur R ', '77', '75', '71', '70', '67', '66', 'Fight'),
(2, 'Satrio Budi', '68', '65', '62', '61', '59', '59', 'Fight'),
(3, 'Arif Hidayatullah', '60', '69', '61', '68', '69', '59', 'Fight'),
(4, 'Ahmad Ainul Yaqin', '70', '67', '64', '63', '61', '60', 'Fight'),
(5, 'MUHAMMAD SULTON HABIBI ALAMSYAH', '72', '75', '70', '70', '67', '62', 'TGR'),
(6, 'Rizki Yulia Anggraeni', '65', '69', '70', '67', '55', '67', 'TGR'),
(7, 'Elok Miftakhul Fikriyah', '44', '69', '72', '40', '55', '76', 'TGR'),
(8, 'Faiq Mubaroq', '78', '74', '71', '70', '68', '68', 'TGR'),
(9, 'Cindy Bahtiar', '65', '62', '67', '72', '70', '68', 'Serang Hindar'),
(10, 'Intan Nur Aini', '62', '58', '60', '57', '62', '62', 'Serang Hindar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_set`
--

CREATE TABLE `data_set` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) DEFAULT NULL,
  `speed` varchar(5) DEFAULT NULL,
  `power` varchar(5) DEFAULT NULL,
  `stamina` varchar(5) DEFAULT NULL,
  `agility` varchar(5) DEFAULT NULL,
  `kedisiplinan` varchar(5) DEFAULT NULL,
  `teknik` varchar(5) DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_set`
--

INSERT INTO `data_set` (`id`, `nama`, `speed`, `power`, `stamina`, `agility`, `kedisiplinan`, `teknik`, `kategori`) VALUES
(13, 'Muhammad Fat\'Hur R ', '77', '75', '71', '70', '67', '66', 'Fight'),
(15, 'Satrio Budi', '68', '65', '63', '61', '60', '59', 'Fight'),
(16, 'Susi Nurhidayah', '68', '66', '63', '61', '60', '59', 'TGR'),
(17, 'Naufal Farros', '60', '57', '54', '53', '52', '50', 'Serang Hindar'),
(18, 'MUHAMMAD ALFIN', '78', '74', '71', '70', '68', '67', 'Fight'),
(19, 'Ramadhan Ibnu', '60', '57', '53', '52', '50', '49', 'Serang Hindar'),
(20, 'Ali Wajhah', '75', '72', '68', '67', '65', '63', 'Serang Hindar'),
(21, 'Sisca Nurmala', '59', '57', '54', '53', '52', '50', 'TGR'),
(22, 'Nabila Qurrotun Nada A', '68', '66', '63', '60', '61', '59', 'TGR'),
(23, 'Mohammad Rizki Y', '77', '75', '71', '70', '67', '66', 'Fight');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_uji`
--

CREATE TABLE `data_uji` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) DEFAULT NULL,
  `speed` varchar(5) DEFAULT NULL,
  `power` varchar(5) DEFAULT NULL,
  `stamina` varchar(5) DEFAULT NULL,
  `agility` varchar(5) DEFAULT NULL,
  `kedisiplinan` varchar(5) DEFAULT NULL,
  `teknik` varchar(5) DEFAULT NULL,
  `kategori` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_uji`
--

INSERT INTO `data_uji` (`id`, `nama`, `speed`, `power`, `stamina`, `agility`, `kedisiplinan`, `teknik`, `kategori`) VALUES
(12, 'Kia Dzaky E', '73', '70', '67', '65', '63', '62', 'Fight'),
(13, 'Abdur Rosyid Bachtiar', '72', '69', '66', '65', '63', '62', 'Fight'),
(14, 'Robiatul Andawiyah', '65', '68', '62', '69', '58', '60', 'Fight'),
(15, 'Ahmad Ifan Hakiki', '59', '69', '61', '71', '55', '59', 'Fight'),
(16, 'Meta Gadiecha W', '63', '61', '60', '56', '55', '59', 'TGR'),
(17, 'Yusnianto', '42', '70', '69', '45', '59', '71', 'TGR'),
(18, 'Dian Amaniatul Fitri', '74', '71', '68', '67', '66', '64', 'TGR'),
(19, 'Anggi Sofy Anjeli', '79', '76', '73', '71', '70', '69', 'TGR'),
(20, 'Ali Wajhah', '75', '72', '68', '67', '65', '63', 'Serang Hindar'),
(21, 'Nur Fajar Eka Saputra', '72', '69', '66', '70', '69', '68', 'Serang Hindar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konversi_dataset`
--

CREATE TABLE `konversi_dataset` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `speed` varchar(5) DEFAULT NULL,
  `power` varchar(5) DEFAULT NULL,
  `stamina` varchar(5) DEFAULT NULL,
  `agility` varchar(5) DEFAULT NULL,
  `kedisiplinan` varchar(5) DEFAULT NULL,
  `teknik` varchar(5) DEFAULT NULL,
  `kategori` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `konversi_dataset`
--

INSERT INTO `konversi_dataset` (`id`, `nama`, `speed`, `power`, `stamina`, `agility`, `kedisiplinan`, `teknik`, `kategori`) VALUES
(12, 'Muhammad Fat\'Hur R ', 'B', 'B', 'B', 'B', 'C', 'C', 'Fight'),
(13, 'Satrio Budi', 'B', 'C', 'C', 'C', 'C', 'C', 'Fight'),
(14, 'Susi Nurhidayah', 'B', 'C', 'C', 'C', 'C', 'C', 'TGR'),
(15, 'Naufal Farros', 'C', 'C', 'D', 'D', 'D', 'D', 'Serang Hindar'),
(16, 'MUHAMMAD ALFIN', 'B', 'B', 'B', 'B', 'B', 'C', 'Fight'),
(17, 'Ramadhan Ibnu', 'C', 'C', 'D', 'D', 'D', 'D', 'Serang Hindar'),
(18, 'Ali Wajhah', 'B', 'B', 'B', 'C', 'C', 'C', 'Serang Hindar'),
(19, 'Sisca Nurmala', 'C', 'C', 'D', 'D', 'D', 'D', 'TGR'),
(20, 'Nabila Qurrotun Nada A', 'B', 'C', 'C', 'C', 'C', 'C', 'TGR'),
(21, 'Mohammad Rizki Y', 'B', 'B', 'B', 'B', 'C', 'C', 'Fight');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `speed` varchar(5) DEFAULT NULL,
  `power` varchar(5) DEFAULT NULL,
  `stamina` varchar(5) DEFAULT NULL,
  `agility` varchar(5) DEFAULT NULL,
  `kedisiplinan` varchar(5) DEFAULT NULL,
  `gerak_teknik` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `id_user`, `speed`, `power`, `stamina`, `agility`, `kedisiplinan`, `gerak_teknik`) VALUES
(3, 2, '80', '78', '76', '67', '78', '89'),
(4, 3, '78', '77', '86', '67', '84', '89');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `asal_unit` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `asal_unit`, `email`, `password`, `status`) VALUES
(2, 'Bawik Ardiyan Ramadhan', 'Politeknik Negeri Jember', 'ardiyanramadhan4@gmail.com', '$2y$10$u4iXIujeUEBc.81XMHEt3.nsEovgmaxjVp4Smdj8eiVTzILAHfxN2', '2'),
(3, 'Dwi Saka Pangestu', 'Mumbulsari', 'estu@gmail.com', '$2y$10$C1tP3mpwH0mmldeE.C6qiuVV2.sYlq6wEP0pQQ0yhFF5OtdLIaq3S', '2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_latih`
--
ALTER TABLE `data_latih`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_set`
--
ALTER TABLE `data_set`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_uji`
--
ALTER TABLE `data_uji`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `konversi_dataset`
--
ALTER TABLE `konversi_dataset`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data_latih`
--
ALTER TABLE `data_latih`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `data_set`
--
ALTER TABLE `data_set`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `data_uji`
--
ALTER TABLE `data_uji`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `konversi_dataset`
--
ALTER TABLE `konversi_dataset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
