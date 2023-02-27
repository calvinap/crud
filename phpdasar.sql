-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Feb 2023 pada 04.50
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mobil`
--

CREATE TABLE `mobil` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `merek` varchar(20) NOT NULL,
  `mesin` varchar(100) NOT NULL,
  `harga` char(20) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mobil`
--

INSERT INTO `mobil` (`id`, `nama`, `merek`, `mesin`, `harga`, `gambar`) VALUES
(1, 'HURACAN STO', 'LAMBORGHINI', '5.2L V10 7AT', '13.800.000.000', '63d78da9de1ad.jpg'),
(2, 'GR SUPRA', 'TOYOTA', 'B58 inline 6 ', '2.160.000.000', '63d9eefc572cb.jpg'),
(3, 'GT-R', 'NISSAN', 'VR38DETT', '8.275.000.000', '63d78fde5812f.jpg'),
(4, 'FAIRLADY 400Z', 'NISSAN', 'VR30DDTT', '3.400.000.000', '63d7915040937.jpg'),
(5, 'CHALLENGER SRT DEMON', 'DODGE', ' V8 6.2 L SUPERCHARGED', '5.850.000.000', '63d78d5914dbb.jpg'),
(6, 'RX-7', 'MAZDA', '2.6 ROTARY TT', '659.000.000', '63d78e1bc25fe.jpg'),
(7, 'R8', 'AUDI', '5.2L V10', '8.500.000.000', '63d78e5dd6d19.jpg'),
(8, '296 GTB', 'FERRARI', '2.9 L V6 HYBRID', '12.500.000.000', '63d791b173a95.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'calvin', '$2y$10$ly5uZY5TuX0DvUh9ykZSF.HYMUr/r.ecIPXpfyvrnPJTluT4dspnK'),
(2, 'jason', '$2y$10$gDlL35aCAmF0BeHw0ccVJu/5TcGvNzN6g7qnxgEamlOOTNMoLpl4W'),
(3, 'admin', '$2y$10$Bf6nyV0byIbxW6WYQxIXK.wxVcLsXAc.YcHPo7480w5OowCwPXRAW'),
(4, 'omaga', '$2y$10$xLbz0Vo0yvZcWku8.jQE5.x5Kh9vnhnEwOeYJ5aRbRWJHrqJI41sC');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
