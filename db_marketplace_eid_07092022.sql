-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table marketplace-eid.alamat_pengguna
CREATE TABLE IF NOT EXISTS `alamat_pengguna` (
  `id_alamat_pengguna` int(11) NOT NULL AUTO_INCREMENT,
  `id_pengguna` int(11) DEFAULT NULL,
  `nama_penerima` varchar(255) DEFAULT NULL,
  `nomor_hp` varchar(255) DEFAULT NULL,
  `provinsi` varchar(255) DEFAULT NULL,
  `kota` varchar(255) DEFAULT NULL,
  `kecamatan` varchar(255) DEFAULT NULL,
  `koordinat` varchar(255) DEFAULT NULL,
  `kode_pos` varchar(100) DEFAULT NULL,
  `deskripsi` text,
  `tandai_sebagai` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_alamat_pengguna`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table marketplace-eid.alamat_pengguna: ~0 rows (approximately)
/*!40000 ALTER TABLE `alamat_pengguna` DISABLE KEYS */;
/*!40000 ALTER TABLE `alamat_pengguna` ENABLE KEYS */;

-- Dumping structure for table marketplace-eid.customer
CREATE TABLE IF NOT EXISTS `customer` (
  `id_customer` int(11) NOT NULL AUTO_INCREMENT,
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
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_customer`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table marketplace-eid.customer: ~0 rows (approximately)
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` (`id_customer`, `username`, `email`, `password`, `nama_lengkap`, `no_hp`, `kelamin`, `tanggal_lahir`, `provinsi`, `kota`, `kecamatan`, `kode_pos`, `is_active`, `updated_at`) VALUES
	(1, 'admin', 'rizki@gmail.com', '$2y$10$73NCG.YIHTl4FjW2I1dLp.GK7xUjU5Qke9qQapubFcDGjYqoCdEo2', 'rizki', '', 'LK', '0000-00-00', '', '', '', '', 1, '2022-09-05 08:24:31');
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;

-- Dumping structure for table marketplace-eid.detail_transaksi
CREATE TABLE IF NOT EXISTS `detail_transaksi` (
  `id_detail_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `id_transaksi` int(11) DEFAULT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `id_suplier` int(11) DEFAULT NULL,
  `jumlah` varchar(100) DEFAULT NULL,
  `id_variasi` int(11) DEFAULT NULL,
  `catatan` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_detail_transaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table marketplace-eid.detail_transaksi: ~0 rows (approximately)
/*!40000 ALTER TABLE `detail_transaksi` DISABLE KEYS */;
/*!40000 ALTER TABLE `detail_transaksi` ENABLE KEYS */;

-- Dumping structure for table marketplace-eid.diskon
CREATE TABLE IF NOT EXISTS `diskon` (
  `id_diskon` int(11) NOT NULL AUTO_INCREMENT,
  `id_produk` int(11) DEFAULT NULL,
  `nama_diskon` varchar(255) DEFAULT NULL,
  `persentase` decimal(20,6) DEFAULT NULL,
  `is_active` enum('Y','N') DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_diskon`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table marketplace-eid.diskon: ~0 rows (approximately)
/*!40000 ALTER TABLE `diskon` DISABLE KEYS */;
/*!40000 ALTER TABLE `diskon` ENABLE KEYS */;

-- Dumping structure for table marketplace-eid.galeri_produk
CREATE TABLE IF NOT EXISTS `galeri_produk` (
  `id_galeri_produk` int(11) NOT NULL AUTO_INCREMENT,
  `id_produk` int(11) DEFAULT NULL,
  `is_active` enum('Y','N') DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_galeri_produk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table marketplace-eid.galeri_produk: ~0 rows (approximately)
/*!40000 ALTER TABLE `galeri_produk` DISABLE KEYS */;
/*!40000 ALTER TABLE `galeri_produk` ENABLE KEYS */;

-- Dumping structure for table marketplace-eid.keranjang
CREATE TABLE IF NOT EXISTS `keranjang` (
  `id_keranjang` int(11) NOT NULL AUTO_INCREMENT,
  `id_pengguna` int(11) DEFAULT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `id_variasi` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_keranjang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table marketplace-eid.keranjang: ~0 rows (approximately)
/*!40000 ALTER TABLE `keranjang` DISABLE KEYS */;
/*!40000 ALTER TABLE `keranjang` ENABLE KEYS */;

-- Dumping structure for table marketplace-eid.produk
CREATE TABLE IF NOT EXISTS `produk` (
  `id_produk` int(11) NOT NULL AUTO_INCREMENT,
  `id_suplier` int(11) DEFAULT '0',
  `id_produk_kategori` int(11) DEFAULT '0',
  `nama_produk` varchar(100) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `spesifikasi` json DEFAULT NULL,
  `brand` varchar(100) DEFAULT NULL,
  `harga` varchar(100) DEFAULT NULL,
  `berat` varchar(100) DEFAULT NULL,
  `lebar` varchar(100) DEFAULT NULL,
  `tinggi` varchar(100) DEFAULT NULL,
  `is_variation` enum('Y','N') DEFAULT NULL,
  `delete_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_produk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabel Produk';

-- Dumping data for table marketplace-eid.produk: ~0 rows (approximately)
/*!40000 ALTER TABLE `produk` DISABLE KEYS */;
/*!40000 ALTER TABLE `produk` ENABLE KEYS */;

-- Dumping structure for table marketplace-eid.produk_kategori
CREATE TABLE IF NOT EXISTS `produk_kategori` (
  `id_produk_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_produk_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table marketplace-eid.produk_kategori: ~0 rows (approximately)
/*!40000 ALTER TABLE `produk_kategori` DISABLE KEYS */;
/*!40000 ALTER TABLE `produk_kategori` ENABLE KEYS */;

-- Dumping structure for table marketplace-eid.review
CREATE TABLE IF NOT EXISTS `review` (
  `id_review` int(11) NOT NULL AUTO_INCREMENT,
  `id_produk` int(11) DEFAULT NULL,
  `id_pengguna` int(11) DEFAULT NULL,
  `pesan` varchar(255) DEFAULT NULL,
  `rating` varchar(255) DEFAULT NULL,
  `file_review` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_review`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table marketplace-eid.review: ~0 rows (approximately)
/*!40000 ALTER TABLE `review` DISABLE KEYS */;
/*!40000 ALTER TABLE `review` ENABLE KEYS */;

-- Dumping structure for table marketplace-eid.suplier
CREATE TABLE IF NOT EXISTS `suplier` (
  `id_suplier` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `is_active` enum('Y','N') DEFAULT NULL,
  `nama_toko` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `bidang` varchar(255) DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `join_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_suplier`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table marketplace-eid.suplier: ~0 rows (approximately)
/*!40000 ALTER TABLE `suplier` DISABLE KEYS */;
/*!40000 ALTER TABLE `suplier` ENABLE KEYS */;

-- Dumping structure for table marketplace-eid.transaksi
CREATE TABLE IF NOT EXISTS `transaksi` (
  `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `id_pengguna` int(11) DEFAULT NULL,
  `id_alamat_pengguna` int(11) DEFAULT NULL,
  `kode_unik` varchar(255) DEFAULT NULL,
  `total_transaksi` varchar(255) DEFAULT NULL,
  `status_transaksi` varchar(255) DEFAULT NULL,
  `payment_url` text,
  `catatan` text,
  `kode_voucher` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table marketplace-eid.transaksi: ~0 rows (approximately)
/*!40000 ALTER TABLE `transaksi` DISABLE KEYS */;
/*!40000 ALTER TABLE `transaksi` ENABLE KEYS */;

-- Dumping structure for table marketplace-eid.variasi
CREATE TABLE IF NOT EXISTS `variasi` (
  `id_variasi` int(11) NOT NULL AUTO_INCREMENT,
  `id_produk` int(11) DEFAULT NULL,
  `model_variasi` varchar(255) DEFAULT NULL,
  `harga` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_variasi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table marketplace-eid.variasi: ~0 rows (approximately)
/*!40000 ALTER TABLE `variasi` DISABLE KEYS */;
/*!40000 ALTER TABLE `variasi` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
