-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Okt 2024 pada 11.53
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_php0057`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_users0057`
--

CREATE TABLE `tb_users0057` (
  `id` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` enum('Pria','Wanita') NOT NULL,
  `umur` tinyint(4) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `status` enum('Nikah','Belum') NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nohp` char(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_users0057`
--

INSERT INTO `tb_users0057` (`id`, `nama`, `jenis_kelamin`, `umur`, `tempat_lahir`, `status`, `jurusan`, `alamat`, `nohp`) VALUES
(1, 'Fareza Dava Rabbani     ', 'Pria', 20, 'Batang', 'Belum', 'Teknik Informatika', 'Pasekaran Batang     ', '081327676677'),
(2, 'Caca Maruca   ', 'Wanita', 22, 'Batang', 'Belum', 'Sistem Informasi', 'Griyapermai Batang   ', '081345787833'),
(3, 'Trajang Laksamana Kapal Laud    ', 'Pria', 20, 'Ngawi', 'Belum', 'Desain Grafis', 'Kasepuan Batang Well    ', '081345678899'),
(8, 'Xion       ', 'Pria', 25, 'Jepara', 'Belum', 'Teknik Nuklir', 'Jepara    ', '081325092424'),
(9, 'Ahmad Khasim  ', 'Pria', 30, 'Arab', 'Nikah', 'Teknik Informatika', 'JL.Durian 23 Pekalongan  ', '081489987755'),
(13, 'Pak  Agus  ', 'Pria', 35, 'Jepara', 'Nikah', 'Rekayasa Perangkat L', 'Jl. Gatot Subroto No. 5, Medan  ', '081489987755');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_users0057`
--
ALTER TABLE `tb_users0057`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_users0057`
--
ALTER TABLE `tb_users0057`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
