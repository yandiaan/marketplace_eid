-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 07 Sep 2022 pada 06.22
-- Versi server: 10.6.5-MariaDB-log
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marketplace-eid`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alamat_pengguna`
--

CREATE TABLE `alamat_pengguna` (
  `id_alamat_pengguna` int(11) NOT NULL,
  `id_pengguna` int(11) DEFAULT NULL,
  `nama_penerima` varchar(255) DEFAULT NULL,
  `nomor_hp` varchar(255) DEFAULT NULL,
  `provinsi` varchar(255) DEFAULT NULL,
  `kota` varchar(255) DEFAULT NULL,
  `kecamatan` varchar(255) DEFAULT NULL,
  `koordinat` varchar(255) DEFAULT NULL,
  `kode_pos` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `tandai_sebagai` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `no_hp` varchar(25) NOT NULL,
  `kelamin` enum('LK','PR') NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kode_pos` char(10) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_customer`, `username`, `email`, `password`, `nama_lengkap`, `no_hp`, `kelamin`, `tanggal_lahir`, `provinsi`, `kota`, `kecamatan`, `kode_pos`, `is_active`, `updated_at`) VALUES
(1, 'admin', 'rizki@gmail.com', '$2y$10$73NCG.YIHTl4FjW2I1dLp.GK7xUjU5Qke9qQapubFcDGjYqoCdEo2', 'rizki', '', 'LK', '0000-00-00', '', '', '', '', 1, '2022-09-05 01:24:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_detail_transaksi` int(11) NOT NULL,
  `id_transaksi` int(11) DEFAULT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `id_suplier` int(11) DEFAULT NULL,
  `jumlah` varchar(100) DEFAULT NULL,
  `id_variasi` int(11) DEFAULT NULL,
  `catatan` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Struktur dari tabel `diskon`
--

CREATE TABLE `diskon` (
  `id_diskon` int(11) NOT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `nama_diskon` varchar(255) DEFAULT NULL,
  `persentase` decimal(20,6) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri_produk`
--

CREATE TABLE `galeri_produk` (
  `id_galeri_produk` int(11) NOT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `id_pengguna` int(11) DEFAULT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `id_variasi` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_suplier` int(11) DEFAULT 0,
  `id_produk_kategori` int(11) DEFAULT 0,
  `nama_produk` varchar(100) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `spesifikasi` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`spesifikasi`)),
  `brand` varchar(100) DEFAULT NULL,
  `harga` varchar(100) DEFAULT NULL,
  `berat` varchar(100) DEFAULT NULL,
  `lebar` varchar(100) DEFAULT NULL,
  `tinggi` varchar(100) DEFAULT NULL,
  `is_varisi` tinyint(1) DEFAULT NULL,
  `delete_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Tabel Produk';

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk_kategori`
--

CREATE TABLE `produk_kategori` (
  `id_produk_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Struktur dari tabel `review`
--

CREATE TABLE `review` (
  `id_review` int(11) NOT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `id_pengguna` int(11) DEFAULT NULL,
  `pesan` varchar(255) DEFAULT NULL,
  `rating` varchar(255) DEFAULT NULL,
  `file_review` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`file_review`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Struktur dari tabel `suplier`
--

CREATE TABLE `suplier` (
  `id_suplier` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `nama_toko` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `join_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_pengguna` int(11) DEFAULT NULL,
  `id_alamat_pengguna` int(11) DEFAULT NULL,
  `kode_unik` varchar(255) DEFAULT NULL,
  `total_transaksi` varchar(255) DEFAULT NULL,
  `status_transaksi` varchar(255) DEFAULT NULL,
  `payment_url` text DEFAULT NULL,
  `catatan` text DEFAULT NULL,
  `kode_voucher` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Struktur dari tabel `variasi`
--

CREATE TABLE `variasi` (
  `id_variasi` int(11) NOT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `model_variasi` varchar(255) DEFAULT NULL,
  `harga` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alamat_pengguna`
--
ALTER TABLE `alamat_pengguna`
  ADD PRIMARY KEY (`id_alamat_pengguna`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indeks untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detail_transaksi`);

--
-- Indeks untuk tabel `diskon`
--
ALTER TABLE `diskon`
  ADD PRIMARY KEY (`id_diskon`);

--
-- Indeks untuk tabel `galeri_produk`
--
ALTER TABLE `galeri_produk`
  ADD PRIMARY KEY (`id_galeri_produk`);

--
-- Indeks untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `produk_kategori`
--
ALTER TABLE `produk_kategori`
  ADD PRIMARY KEY (`id_produk_kategori`);

--
-- Indeks untuk tabel `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id_review`);

--
-- Indeks untuk tabel `suplier`
--
ALTER TABLE `suplier`
  ADD PRIMARY KEY (`id_suplier`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `variasi`
--
ALTER TABLE `variasi`
  ADD PRIMARY KEY (`id_variasi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alamat_pengguna`
--
ALTER TABLE `alamat_pengguna`
  MODIFY `id_alamat_pengguna` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_detail_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `diskon`
--
ALTER TABLE `diskon`
  MODIFY `id_diskon` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `galeri_produk`
--
ALTER TABLE `galeri_produk`
  MODIFY `id_galeri_produk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `produk_kategori`
--
ALTER TABLE `produk_kategori`
  MODIFY `id_produk_kategori` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `review`
--
ALTER TABLE `review`
  MODIFY `id_review` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `suplier`
--
ALTER TABLE `suplier`
  MODIFY `id_suplier` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `variasi`
--
ALTER TABLE `variasi`
  MODIFY `id_variasi` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
