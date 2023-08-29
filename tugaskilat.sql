-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Jul 2023 pada 03.32
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugaskilat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart`
--

CREATE TABLE `cart` (
  `id_keranjang` int(100) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_item` int(100) NOT NULL,
  `qty` int(100) NOT NULL,
  `subtotal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `checkout`
--

CREATE TABLE `checkout` (
  `id_checkout` int(100) NOT NULL,
  `id_user` int(100) NOT NULL,
  `item` varchar(100) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `subtotal` varchar(100) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `bukti` varchar(100) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `checkout`
--

INSERT INTO `checkout` (`id_checkout`, `id_user`, `item`, `qty`, `subtotal`, `deskripsi`, `bukti`, `tanggal`, `status`) VALUES
(62, 8, 'Joki Tugas Artikel', '2', '20000', 'adsdasdaw', '808-Joki.png', '2023-07-30', 'selesai'),
(63, 8, 'Joki Tugas Essay', '1', '12000', 'adsdasdaw', '808-Joki.png', '2023-07-30', 'selesai'),
(64, 1, 'Joki Tugas Makalah', '1', '15000', 'dsfwfwfddsfe', '951-Joki.png', '2023-07-30', 'selesai'),
(65, 1, 'Joki Tugas Excel', '2', '8000', 'sfsdfdscxcsdffds', '905-Joki.png', '2023-07-30', 'belum'),
(66, 1, 'Joki Tugas Artikel', '1', '10000', 'sfsdfdscxcsdffds', '905-Joki.png', '2023-07-30', 'belum'),
(67, 1, 'Joki Tugas Essay', '2', '24000', 'dasda', '611-Screenshot_4.jpg', '2023-07-30', 'belum'),
(68, 1, 'Joki Tugas Artikel', '1', '10000', 'sadsafasd', '116-Screenshot_4.jpg', '2023-07-31', 'belum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `item`
--

CREATE TABLE `item` (
  `id_item` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `item`
--

INSERT INTO `item` (`id_item`, `nama`, `deskripsi`, `harga`, `gambar`) VALUES
(1, 'Joki Tugas Artikel', 'pembuatan artikel yang pasti menarik', '10000', '545-4.jpg'),
(2, 'Joki Tugas Essay', 'pembuatan essay yang pasti menarik', '12000', '545-4.jpg'),
(3, 'Joki Tugas Makalah', 'pembuatan makalah yang pasti menarik', '15000', '545-4.jpg'),
(4, 'Joki Tugas Presentasi', 'pembuatan presentasi yang pasti menarik', '20000', '545-4.jpg'),
(5, 'Joki Tugas Excel', 'pembuatan excel yang pasti menarik', '4000', '545-4.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ulasan`
--

CREATE TABLE `ulasan` (
  `id_ulasan` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no` varchar(100) NOT NULL,
  `pesan` varchar(300) NOT NULL,
  `balasan` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ulasan`
--

INSERT INTO `ulasan` (`id_ulasan`, `nama`, `email`, `no`, `pesan`, `balasan`) VALUES
(12, 'fabyan', 'fabyan@gmail.com', '08129192292', 'tesss', 'yaa bisa dibantu?'),
(13, 'ddf', 'fabyan@gmail.com', '08291921', 'fdsf', 'sdsds');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `profil` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `no`, `email`, `alamat`, `password`, `profil`, `level`) VALUES
(1, 'fabyan', '08129192292', 'fabyan@gmail.com', 'Sidoarjooooo', 'fabyan', '675-Screenshot_9.jpg', 'admin'),
(8, 'udin', '0821921291092', 'udin@gmail.com', 'Malang', 'udin', 'user.png', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_keranjang`);

--
-- Indeks untuk tabel `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id_checkout`);

--
-- Indeks untuk tabel `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id_item`);

--
-- Indeks untuk tabel `ulasan`
--
ALTER TABLE `ulasan`
  ADD PRIMARY KEY (`id_ulasan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cart`
--
ALTER TABLE `cart`
  MODIFY `id_keranjang` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id_checkout` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT untuk tabel `item`
--
ALTER TABLE `item`
  MODIFY `id_item` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `ulasan`
--
ALTER TABLE `ulasan`
  MODIFY `id_ulasan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
