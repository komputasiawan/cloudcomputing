-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Des 2021 pada 14.55
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental_mobil`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `username` varchar(60) NOT NULL,
  `pass_admin` varchar(60) NOT NULL,
  `nama_toko` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `no_hp` varchar(16) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `profil` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `pass_admin`, `nama_toko`, `email`, `no_hp`, `alamat`, `profil`) VALUES
(1, 'Admin', 'admin', 'admin', 'Penggembala Mobil', 'mobilku@gmail.com', '081234567890', 'JL. Banjarmasin', 'Saya adalah seorang penggembala mobil');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mobil`
--

CREATE TABLE `mobil` (
  `id_mobil` int(11) NOT NULL,
  `nama_mobil` varchar(20) NOT NULL,
  `biaya` decimal(10,0) NOT NULL,
  `deskripsi` varchar(250) NOT NULL,
  `foto` varchar(20) NOT NULL,
  `pemilik` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `nama_mobil`, `biaya`, `deskripsi`, `foto`, `pemilik`) VALUES
(1, 'ALPHARD', '2750000', 'mobil termewah dari toyota', 'alphard.jpg', 1),
(2, 'VELLFIRE', '2550000', 'mobil termewah dari toyota', 'vellfire.jpg', 1),
(3, 'PALISADE', '2200000', 'mobil keluaran dari hyundai', 'palisade.png', 1),
(4, 'SANTA FE', '2000000', 'mobil keluaran dari hyundai', 'santa fe.png', 1),
(5, 'FORTUNER', '1500000', 'mobil sport yang dimiliki toyota', 'fortuner.png', 1),
(6, 'CRV', '1500000', 'mobil SUV termahal dari honda', 'crv.jpg', 1),
(7, 'PAJERO', '1300000', 'mobil sport dari mitshubishi', 'pajero.png', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyewaan`
--

CREATE TABLE `penyewaan` (
  `id_pemesanan` int(11) NOT NULL,
  `tgl_sewa` varchar(20) NOT NULL,
  `tgl_kembali` varchar(20) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `pemilik` int(11) NOT NULL,
  `mobil` varchar(100) NOT NULL,
  `penyewa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penyewaan`
--

INSERT INTO `penyewaan` (`id_pemesanan`, `tgl_sewa`, `tgl_kembali`, `jumlah`, `pemilik`, `mobil`, `penyewa`) VALUES
(1, '04-12-2021', '05-12-2021', 1, 1, 'FORTUNER', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `resetpasswords`
--

CREATE TABLE `resetpasswords` (
  `id_penyewa` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `email_penyewa` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `resetpasswords`
--

INSERT INTO `resetpasswords` (`id_penyewa`, `code`, `email_penyewa`) VALUES
(2, '161ae13571f547', 'komputasiawan6@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_penyewa` int(11) NOT NULL,
  `nama_penyewa` varchar(50) NOT NULL,
  `username_penyewa` varchar(11) NOT NULL,
  `pass_penyewa` varchar(100) NOT NULL,
  `otp_penyewa` varchar(11) NOT NULL,
  `email_penyewa` varchar(30) NOT NULL,
  `no_hp_penyewa` varchar(14) NOT NULL,
  `alamat_penyewa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_penyewa`, `nama_penyewa`, `username_penyewa`, `pass_penyewa`, `otp_penyewa`, `email_penyewa`, `no_hp_penyewa`, `alamat_penyewa`) VALUES
(1, 'user', 'user', 'user', '', 'user@gmail.com', '0987123123123', 'JL. Bumi'),
(2, 'Kelompok6', 'kelompok6', '123', '', 'komputasiawan6@gmail.com', '0896123123123', 'JL. ULM');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`),
  ADD KEY `fk1` (`pemilik`) USING BTREE;

--
-- Indeks untuk tabel `penyewaan`
--
ALTER TABLE `penyewaan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `fk2` (`pemilik`) USING BTREE,
  ADD KEY `fk3` (`penyewa`) USING BTREE,
  ADD KEY `fk4` (`mobil`) USING BTREE;

--
-- Indeks untuk tabel `resetpasswords`
--
ALTER TABLE `resetpasswords`
  ADD PRIMARY KEY (`id_penyewa`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_penyewa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `penyewaan`
--
ALTER TABLE `penyewaan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `resetpasswords`
--
ALTER TABLE `resetpasswords`
  MODIFY `id_penyewa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_penyewa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
