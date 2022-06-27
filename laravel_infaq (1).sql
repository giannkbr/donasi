-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 27 Jun 2022 pada 05.27
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_infaq`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_admin`
--

CREATE TABLE `data_admin` (
  `id_admin` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `hak_akses` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_admin`
--

INSERT INTO `data_admin` (`id_admin`, `username`, `password`, `hak_akses`) VALUES
(1, 'admin', '0da0ee7cd68d3d6dab82c32c27039984', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_donasi`
--

CREATE TABLE `data_donasi` (
  `id_donasi` int(11) NOT NULL,
  `nama_donasi` text NOT NULL,
  `kategori_donasi` text NOT NULL,
  `target_donasi` text NOT NULL,
  `perolehan_donasi` text NOT NULL,
  `masa_donasi` date NOT NULL,
  `deskripsi_donasi` text NOT NULL,
  `tgl_donasi` date NOT NULL,
  `masa_aktif` int(3) NOT NULL,
  `img1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_donasi`
--

INSERT INTO `data_donasi` (`id_donasi`, `nama_donasi`, `kategori_donasi`, `target_donasi`, `perolehan_donasi`, `masa_donasi`, `deskripsi_donasi`, `tgl_donasi`, `masa_aktif`, `img1`) VALUES
(31, 'Infaq dong', 'Infaq', '20000000', '10031482', '2022-06-30', 'Kasihan banget', '2022-06-18', 3, 'wp5103769-mob-psycho-minimalist-wallpapers.png'),
(32, 'Test', 'Infaq', '900000000', '0', '2022-07-31', 'keren nih bro', '2022-06-19', 40, 'wp4918345-fire-force-desktop-wallpapers.jpg'),
(33, 'Keren euy', 'Infaq', '120000000', '110000000', '2022-08-31', 'Butuh bantuan banget', '2022-06-19', 71, '599379.jpg'),
(34, 'Halo ini donasi baru', 'Infaq', '900000000', '900000000', '2022-12-10', 'bimsi', '2022-06-19', 172, '599379.jpg'),
(35, 'asdasdas', 'infaq', '900000000', '0', '2022-06-30', 'asdasdas', '2022-06-20', 9, 'front/images/donasi/');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_feedback`
--

CREATE TABLE `data_feedback` (
  `id_feedback` int(11) NOT NULL,
  `nama_feedback` text NOT NULL,
  `no_telp_feedback` text NOT NULL,
  `pesan_feedback` text NOT NULL,
  `tgl_feedback` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_transaksi`
--

CREATE TABLE `data_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_donasi` int(11) NOT NULL,
  `nama_donatur` text NOT NULL,
  `no_telp_donatur` text NOT NULL,
  `pesan_donatur` text NOT NULL,
  `jumlah_donasi` int(11) NOT NULL,
  `kode_transaksi` text NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `bayar` tinyint(1) NOT NULL,
  `bukti_transfer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_transaksi`
--

INSERT INTO `data_transaksi` (`id_transaksi`, `id_donasi`, `nama_donatur`, `no_telp_donatur`, `pesan_donatur`, `jumlah_donasi`, `kode_transaksi`, `tgl_transaksi`, `bayar`, `bukti_transfer`) VALUES
(53, 34, 'Gian', '08515323423432', 'sdfdsfsdf', 9000891, 'LMI200635', '2022-06-20', 1, 'Screen_Shot_2022-05-23_at_13_42_07.jpg'),
(54, 32, 'sdfd', '2332432432', 'dfsdfsd', 1000492, 'LMI200318', '2022-06-20', 1, 'Screen_Shot_2022-05-24_at_14_46_42.jpg'),
(56, 32, 'sfas', '1232312323', 'semoga sehat', 900000, 'LMI200748', '2022-06-20', 1, 'wp5137022-fire-force-desktop-wallpapers.png'),
(60, 31, 'tets', '09876543467', 'gxghvsxhvshx', 10000912, 'LMI200345', '2022-06-20', 1, 'Picture1.png'),
(61, 31, 'gian', '085757575', 'dsfdsfs', 30570, 'LMI200781', '2022-06-20', 1, 'wp4918345-fire-force-desktop-wallpapers.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_admin`
--
ALTER TABLE `data_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `data_donasi`
--
ALTER TABLE `data_donasi`
  ADD PRIMARY KEY (`id_donasi`);

--
-- Indeks untuk tabel `data_feedback`
--
ALTER TABLE `data_feedback`
  ADD PRIMARY KEY (`id_feedback`);

--
-- Indeks untuk tabel `data_transaksi`
--
ALTER TABLE `data_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_admin`
--
ALTER TABLE `data_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data_donasi`
--
ALTER TABLE `data_donasi`
  MODIFY `id_donasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `data_feedback`
--
ALTER TABLE `data_feedback`
  MODIFY `id_feedback` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `data_transaksi`
--
ALTER TABLE `data_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
