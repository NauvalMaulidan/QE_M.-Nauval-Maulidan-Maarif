-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Des 2021 pada 17.34
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbakbar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `hari_main` varchar(11) NOT NULL,
  `tgl_main` date NOT NULL,
  `jam_main` varchar(11) NOT NULL,
  `tim` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `hari_main`, `tgl_main`, `jam_main`, `tim`) VALUES
(1, 'Minggu', '2021-12-12', '18.00 WIB', 'NBA VS LAKERS'),
(2, 'Senin', '2021-12-13', '21.00 WIB', 'WARRIORS VS LAKERS'),
(3, 'Selasa', '2021-12-14', '17.00 WIB', 'BROOKLYN NETS VS CHICAGO BULLS'),
(4, 'Rabu', '2021-12-15', '22.00 WIB', 'LAKERS VS CHICAGO BULLS'),
(5, 'Kamis', '2021-12-16', '23.00 WIB', 'NEW YORK KNICKS VS CHICAGO BULLS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`) VALUES
(2, '', 'akbar1', 'akbar1@gmail.com', '$2y$10$WPFOGbqkD14J17MgTKprou1CDUo8qGCFzK/xnMJzPMCd43DhVs3Ra'),
(3, '', 'fia', 'fia@gmail.com', '$2y$10$HBEB8aE.K05b/pKtJ8XKm.Hf7fdplgfH/WtYPrV79Uj8xVd.RGMgm'),
(4, '', 'Akbar', 'akjdj@gmail.com', '$2y$10$ELBlZ2LqGMARNIfuw1R66.XiO0yjrCTLCbjTYX2pEeuZg.42AG4/.');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
