-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Apr 2021 pada 12.06
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tp4pbo2021`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_data`
--

CREATE TABLE `tb_data` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nim` int(10) NOT NULL,
  `tgl_peminjaman` date NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `kelas` varchar(2) NOT NULL,
  `buku` varchar(255) NOT NULL,
  `stat` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_data`
--

INSERT INTO `tb_data` (`id`, `nama`, `nim`, `tgl_peminjaman`, `jurusan`, `kelas`, `buku`, `stat`) VALUES
(1, 'Ira', 1900001, '2021-04-01', 'Ilmu Komputer', 'D', 'Algoritma Pemrograman', 'Belum Mengembalikan'),
(2, 'Fitri', 1900002, '2021-04-02', 'DKV', 'G', 'Teknik Lukis 3D', 'Sudah Mengembalikan'),
(3, 'Yani', 1900003, '2021-04-12', 'Manajemen', 'H', 'Manajemen Dasar', 'Belum Mengembalikan'),
(4, 'Ari', 1900074, '2021-04-16', 'Fisika', 'C', 'Rumus Fisika', 'Sudah Mengembalikan'),
(5, 'Rara', 1900031, '2021-04-18', 'Psikologi', 'E', 'Physiological book', 'Belum Mengembalikan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_data`
--
ALTER TABLE `tb_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_data`
--
ALTER TABLE `tb_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
