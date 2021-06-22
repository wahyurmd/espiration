-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Mar 2021 pada 09.02
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.2.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spiration`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `aspirasi`
--

CREATE TABLE `aspirasi` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `aspirasi` varchar(500) NOT NULL,
  `created_at` datetime NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `aspirasi`
--

INSERT INTO `aspirasi` (`id`, `id_user`, `aspirasi`, `created_at`, `status`) VALUES
(1, 4442, 'coba 1', '2021-03-26 21:02:12', 1),
(2, 4442, 'Coba 2sadddddddddddddddddddddddddddddddddddddsdddddddddddddddddddddddddddddddddd', '2021-03-26 21:06:41', 1),
(3, 4442, 'asdas', '2021-03-27 03:07:52', 1),
(4, 4442, 'asdsad', '2021-03-27 14:29:11', 1),
(5, 4442, '', '2021-03-27 14:29:14', 1),
(6, 4442, 'asdasd', '2021-03-27 14:29:20', 1),
(7, 4442, 'asdasdasddasd', '2021-03-27 14:29:24', 1),
(8, 4442, 'sadasdasasd', '2021-03-27 14:29:29', 1),
(9, 4442, 'sadasdasd', '2021-03-27 14:29:33', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `aspirasi`
--
ALTER TABLE `aspirasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `aspirasi`
--
ALTER TABLE `aspirasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
