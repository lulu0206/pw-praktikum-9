-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jan 2022 pada 17.21
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `praktikum_9`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `position` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id`, `name`, `email`, `address`, `gender`, `position`, `status`) VALUES
(2, 'lulu', 'luluksaja20@gmail.com', 'Jakarta Selatan', 'Wanita', 'Staf IT', 'Parttime'),
(27, 'mawar', 'Mawar30@gmail.com', 'Jakarta Selatan', 'Wanita', 'Admin', 'Parttime');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
