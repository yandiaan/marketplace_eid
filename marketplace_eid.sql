-- MySQL dump 10.13  Distrib 8.0.19, for Linux (x86_64)
--
-- Host: localhost    Database: marketplace_eid
-- ------------------------------------------------------
-- Server version	8.0.19

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES UTF8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `alamat_pengguna`
--

DROP TABLE IF EXISTS `alamat_pengguna`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `alamat_pengguna` (
  `id_alamat_pengguna` int NOT NULL AUTO_INCREMENT,
  `id_pengguna` int DEFAULT NULL,
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
  PRIMARY KEY (`id_alamat_pengguna`),
  KEY `id_pengguna` (`id_pengguna`),
  CONSTRAINT `alamat_pengguna_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `customer` (`id_customer`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alamat_pengguna`
--

LOCK TABLES `alamat_pengguna` WRITE;
/*!40000 ALTER TABLE `alamat_pengguna` DISABLE KEYS */;
/*!40000 ALTER TABLE `alamat_pengguna` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cities`
--

DROP TABLE IF EXISTS `cities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cities` (
  `city_id` int NOT NULL AUTO_INCREMENT,
  `city_name` varchar(255) DEFAULT NULL,
  `prov_id` int DEFAULT NULL,
  PRIMARY KEY (`city_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=476 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cities`
--

LOCK TABLES `cities` WRITE;
/*!40000 ALTER TABLE `cities` DISABLE KEYS */;
INSERT INTO `cities` VALUES (1,'PIDIE JAYA',1),(2,'SIMEULUE',1),(3,'BIREUEN',1),(4,'ACEH TIMUR',1),(5,'ACEH UTARA',1),(6,'PIDIE',1),(7,'ACEH BARAT DAYA',1),(8,'GAYO LUES',1),(9,'ACEH SELATAN',1),(10,'ACEH TAMIANG',1),(11,'ACEH BESAR',1),(12,'ACEH TENGGARA',1),(13,'BENER MERIAH',1),(14,'ACEH JAYA',1),(15,'LHOKSEUMAWE',1),(16,'ACEH BARAT',1),(17,'NAGAN RAYA',1),(18,'LANGSA',1),(19,'BANDA ACEH',1),(20,'ACEH SINGKIL',1),(21,'SABANG',1),(22,'ACEH TENGAH',1),(23,'SUBULUSSALAM',1),(24,'NIAS SELATAN',2),(25,'MANDAILING NATAL',2),(26,'DAIRI',2),(27,'LABUHAN BATU UTARA',2),(28,'TAPANULI UTARA',2),(29,'SIMALUNGUN',2),(30,'LANGKAT',2),(31,'SERDANG BEDAGAI',2),(32,'TAPANULI SELATAN',2),(33,'ASAHAN',2),(34,'PADANG LAWAS UTARA',2),(35,'PADANG LAWAS',2),(36,'LABUHAN BATU SELATAN',2),(37,'PADANG SIDEMPUAN',2),(38,'TOBA SAMOSIR',2),(39,'TAPANULI TENGAH',2),(40,'HUMBANG HASUNDUTAN',2),(41,'SIBOLGA',2),(42,'BATU BARA',2),(43,'SAMOSIR',2),(44,'PEMATANG SIANTAR',2),(45,'LABUHAN BATU',2),(46,'DELI SERDANG',2),(47,'GUNUNGSITOLI',2),(48,'NIAS UTARA',2),(49,'NIAS',2),(50,'KARO',2),(51,'NIAS BARAT',2),(52,'MEDAN',2),(53,'PAKPAK BHARAT',2),(54,'TEBING TINGGI',2),(55,'BINJAI',2),(56,'TANJUNG BALAI',2),(57,'DHARMASRAYA',3),(58,'SOLOK SELATAN',3),(59,'SIJUNJUNG (SAWAH LUNTO SIJUNJUNG)',3),(60,'PASAMAN BARAT',3),(61,'SOLOK',3),(62,'PASAMAN',3),(63,'PARIAMAN',3),(64,'TANAH DATAR',3),(65,'PADANG PARIAMAN',3),(66,'PESISIR SELATAN',3),(67,'PADANG',3),(68,'SAWAH LUNTO',3),(69,'LIMA PULUH KOTO / KOTA',3),(70,'AGAM',3),(71,'PAYAKUMBUH',3),(72,'BUKITTINGGI',3),(73,'PADANG PANJANG',3),(74,'KEPULAUAN MENTAWAI',3),(75,'INDRAGIRI HILIR',4),(76,'KUANTAN SINGINGI',4),(77,'PELALAWAN',4),(78,'PEKANBARU',4),(79,'ROKAN HILIR',4),(80,'BENGKALIS',4),(81,'INDRAGIRI HULU',4),(82,'ROKAN HULU',4),(83,'KAMPAR',4),(84,'KEPULAUAN MERANTI',4),(85,'DUMAI',4),(86,'SIAK',4),(87,'TEBO',5),(88,'TANJUNG JABUNG BARAT',5),(89,'MUARO JAMBI',5),(90,'KERINCI',5),(91,'MERANGIN',5),(92,'BUNGO',5),(93,'TANJUNG JABUNG TIMUR',5),(94,'SUNGAIPENUH',5),(95,'BATANG HARI',5),(96,'JAMBI',5),(97,'SAROLANGUN',5),(98,'PALEMBANG',6),(99,'LAHAT',6),(100,'OGAN KOMERING ULU TIMUR',6),(101,'MUSI BANYUASIN',6),(102,'PAGAR ALAM',6),(103,'OGAN KOMERING ULU SELATAN',6),(104,'BANYUASIN',6),(105,'MUSI RAWAS',6),(106,'MUARA ENIM',6),(107,'OGAN KOMERING ULU',6),(108,'OGAN KOMERING ILIR',6),(109,'EMPAT LAWANG',6),(110,'LUBUK LINGGAU',6),(111,'PRABUMULIH',6),(112,'OGAN ILIR',6),(113,'BENGKULU TENGAH',7),(114,'REJANG LEBONG',7),(115,'MUKO MUKO',7),(116,'KAUR',7),(117,'BENGKULU UTARA',7),(118,'LEBONG',7),(119,'KEPAHIANG',7),(120,'BENGKULU SELATAN',7),(121,'SELUMA',7),(122,'BENGKULU',7),(123,'LAMPUNG UTARA',8),(124,'WAY KANAN',8),(125,'LAMPUNG TENGAH',8),(126,'MESUJI',8),(127,'PRINGSEWU',8),(128,'LAMPUNG TIMUR',8),(129,'LAMPUNG SELATAN',8),(130,'TULANG BAWANG',8),(131,'TULANG BAWANG BARAT',8),(132,'TANGGAMUS',8),(133,'LAMPUNG BARAT',8),(134,'PESISIR BARAT',8),(135,'PESAWARAN',8),(136,'BANDAR LAMPUNG',8),(137,'METRO',8),(138,'BELITUNG',9),(139,'BELITUNG TIMUR',9),(140,'BANGKA',9),(141,'BANGKA SELATAN',9),(142,'BANGKA BARAT',9),(143,'PANGKAL PINANG',9),(144,'BANGKA TENGAH',9),(145,'KEPULAUAN ANAMBAS',10),(146,'BINTAN',10),(147,'NATUNA',10),(148,'BATAM',10),(149,'TANJUNG PINANG',10),(150,'KARIMUN',10),(151,'LINGGA',10),(152,'JAKARTA UTARA',11),(153,'JAKARTA BARAT',11),(154,'JAKARTA TIMUR',11),(155,'JAKARTA SELATAN',11),(156,'JAKARTA PUSAT',11),(157,'KEPULAUAN SERIBU',11),(158,'DEPOK',12),(159,'KARAWANG',12),(160,'CIREBON',12),(161,'BANDUNG',12),(162,'SUKABUMI',12),(163,'SUMEDANG',12),(164,'INDRAMAYU',12),(165,'MAJALENGKA',12),(166,'KUNINGAN',12),(167,'TASIKMALAYA',12),(168,'CIAMIS',12),(169,'SUBANG',12),(170,'PURWAKARTA',12),(171,'BOGOR',12),(172,'BEKASI',12),(173,'GARUT',12),(174,'PANGANDARAN',12),(175,'CIANJUR',12),(176,'BANJAR',12),(177,'BANDUNG BARAT',12),(178,'CIMAHI',12),(179,'PURBALINGGA',13),(180,'KEBUMEN',13),(181,'MAGELANG',13),(182,'CILACAP',13),(183,'BATANG',13),(184,'BANJARNEGARA',13),(185,'BLORA',13),(186,'BREBES',13),(187,'BANYUMAS',13),(188,'WONOSOBO',13),(189,'TEGAL',13),(190,'PURWOREJO',13),(191,'PATI',13),(192,'SUKOHARJO',13),(193,'KARANGANYAR',13),(194,'PEKALONGAN',13),(195,'PEMALANG',13),(196,'BOYOLALI',13),(197,'GROBOGAN',13),(198,'SEMARANG',13),(199,'DEMAK',13),(200,'REMBANG',13),(201,'KLATEN',13),(202,'KUDUS',13),(203,'TEMANGGUNG',13),(204,'SRAGEN',13),(205,'JEPARA',13),(206,'WONOGIRI',13),(207,'KENDAL',13),(208,'SURAKARTA (SOLO)',13),(209,'SALATIGA',13),(210,'SLEMAN',14),(211,'BANTUL',14),(212,'YOGYAKARTA',14),(213,'GUNUNG KIDUL',14),(214,'KULON PROGO',14),(215,'GRESIK',15),(216,'KEDIRI',15),(217,'SAMPANG',15),(218,'BANGKALAN',15),(219,'SUMENEP',15),(220,'SITUBONDO',15),(221,'SURABAYA',15),(222,'JEMBER',15),(223,'PAMEKASAN',15),(224,'JOMBANG',15),(225,'PROBOLINGGO',15),(226,'BANYUWANGI',15),(227,'PASURUAN',15),(228,'BOJONEGORO',15),(229,'BONDOWOSO',15),(230,'MAGETAN',15),(231,'LUMAJANG',15),(232,'MALANG',15),(233,'BLITAR',15),(234,'SIDOARJO',15),(235,'LAMONGAN',15),(236,'PACITAN',15),(237,'TULUNGAGUNG',15),(238,'MOJOKERTO',15),(239,'MADIUN',15),(240,'PONOROGO',15),(241,'NGAWI',15),(242,'NGANJUK',15),(243,'TUBAN',15),(244,'TRENGGALEK',15),(245,'BATU',15),(246,'TANGERANG',16),(247,'SERANG',16),(248,'PANDEGLANG',16),(249,'LEBAK',16),(250,'TANGERANG SELATAN',16),(251,'CILEGON',16),(252,'KLUNGKUNG',17),(253,'KARANGASEM',17),(254,'BANGLI',17),(255,'TABANAN',17),(256,'GIANYAR',17),(257,'BADUNG',17),(258,'JEMBRANA',17),(259,'BULELENG',17),(260,'DENPASAR',17),(261,'MATARAM',18),(262,'DOMPU',18),(263,'SUMBAWA BARAT',18),(264,'SUMBAWA',18),(265,'LOMBOK TENGAH',18),(266,'LOMBOK TIMUR',18),(267,'LOMBOK UTARA',18),(268,'LOMBOK BARAT',18),(269,'BIMA',18),(270,'TIMOR TENGAH SELATAN',19),(271,'FLORES TIMUR',19),(272,'ALOR',19),(273,'ENDE',19),(274,'NAGEKEO',19),(275,'KUPANG',19),(276,'SIKKA',19),(277,'NGADA',19),(278,'TIMOR TENGAH UTARA',19),(279,'BELU',19),(280,'LEMBATA',19),(281,'SUMBA BARAT DAYA',19),(282,'SUMBA BARAT',19),(283,'SUMBA TENGAH',19),(284,'SUMBA TIMUR',19),(285,'ROTE NDAO',19),(286,'MANGGARAI TIMUR',19),(287,'MANGGARAI',19),(288,'SABU RAIJUA',19),(289,'MANGGARAI BARAT',19),(290,'LANDAK',20),(291,'KETAPANG',20),(292,'SINTANG',20),(293,'KUBU RAYA',20),(294,'PONTIANAK',20),(295,'KAYONG UTARA',20),(296,'BENGKAYANG',20),(297,'KAPUAS HULU',20),(298,'SAMBAS',20),(299,'SINGKAWANG',20),(300,'SANGGAU',20),(301,'MELAWI',20),(302,'SEKADAU',20),(303,'KOTAWARINGIN TIMUR',21),(304,'SUKAMARA',21),(305,'KOTAWARINGIN BARAT',21),(306,'BARITO TIMUR',21),(307,'KAPUAS',21),(308,'PULANG PISAU',21),(309,'LAMANDAU',21),(310,'SERUYAN',21),(311,'KATINGAN',21),(312,'BARITO SELATAN',21),(313,'MURUNG RAYA',21),(314,'BARITO UTARA',21),(315,'GUNUNG MAS',21),(316,'PALANGKA RAYA',21),(317,'TAPIN',22),(318,'BANJAR',22),(319,'HULU SUNGAI TENGAH',22),(320,'TABALONG',22),(321,'HULU SUNGAI UTARA',22),(322,'BALANGAN',22),(323,'TANAH BUMBU',22),(324,'BANJARMASIN',22),(325,'KOTABARU',22),(326,'TANAH LAUT',22),(327,'HULU SUNGAI SELATAN',22),(328,'BARITO KUALA',22),(329,'BANJARBARU',22),(330,'KUTAI BARAT',23),(331,'SAMARINDA',23),(332,'PASER',23),(333,'KUTAI KARTANEGARA',23),(334,'BERAU',23),(335,'PENAJAM PASER UTARA',23),(336,'BONTANG',23),(337,'KUTAI TIMUR',23),(338,'BALIKPAPAN',23),(339,'MALINAU',24),(340,'NUNUKAN',24),(341,'BULUNGAN (BULONGAN)',24),(342,'TANA TIDUNG',24),(343,'TARAKAN',24),(344,'BOLAANG MONGONDOW (BOLMONG)',25),(345,'BOLAANG MONGONDOW SELATAN',25),(346,'MINAHASA SELATAN',25),(347,'BITUNG',25),(348,'MINAHASA',25),(349,'KEPULAUAN SANGIHE',25),(350,'MINAHASA UTARA',25),(351,'KEPULAUAN TALAUD',25),(352,'KEPULAUAN SIAU TAGULANDANG BIARO (SITARO)',25),(353,'MANADO',25),(354,'BOLAANG MONGONDOW UTARA',25),(355,'BOLAANG MONGONDOW TIMUR',25),(356,'MINAHASA TENGGARA',25),(357,'KOTAMOBAGU',25),(358,'TOMOHON',25),(359,'BANGGAI KEPULAUAN',26),(360,'TOLI-TOLI',26),(361,'PARIGI MOUTONG',26),(362,'BUOL',26),(363,'DONGGALA',26),(364,'POSO',26),(365,'MOROWALI',26),(366,'TOJO UNA-UNA',26),(367,'BANGGAI',26),(368,'SIGI',26),(369,'PALU',26),(370,'MAROS',27),(371,'WAJO',27),(372,'BONE',27),(373,'SOPPENG',27),(374,'SIDENRENG RAPPANG / RAPANG',27),(375,'TAKALAR',27),(376,'BARRU',27),(377,'LUWU TIMUR',27),(378,'SINJAI',27),(379,'PANGKAJENE KEPULAUAN',27),(380,'PINRANG',27),(381,'JENEPONTO',27),(382,'PALOPO',27),(383,'TORAJA UTARA',27),(384,'LUWU',27),(385,'BULUKUMBA',27),(386,'MAKASSAR',27),(387,'SELAYAR (KEPULAUAN SELAYAR)',27),(388,'TANA TORAJA',27),(389,'LUWU UTARA',27),(390,'BANTAENG',27),(391,'GOWA',27),(392,'ENREKANG',27),(393,'PAREPARE',27),(394,'KOLAKA',28),(395,'MUNA',28),(396,'KONAWE SELATAN',28),(397,'KENDARI',28),(398,'KONAWE',28),(399,'KONAWE UTARA',28),(400,'KOLAKA UTARA',28),(401,'BUTON',28),(402,'BOMBANA',28),(403,'WAKATOBI',28),(404,'BAU-BAU',28),(405,'BUTON UTARA',28),(406,'GORONTALO UTARA',29),(407,'BONE BOLANGO',29),(408,'GORONTALO',29),(409,'BOALEMO',29),(410,'POHUWATO',29),(411,'MAJENE',30),(412,'MAMUJU',30),(413,'MAMUJU UTARA',30),(414,'POLEWALI MANDAR',30),(415,'MAMASA',30),(416,'MALUKU TENGGARA BARAT',31),(417,'MALUKU TENGGARA',31),(418,'SERAM BAGIAN BARAT',31),(419,'MALUKU TENGAH',31),(420,'SERAM BAGIAN TIMUR',31),(421,'MALUKU BARAT DAYA',31),(422,'AMBON',31),(423,'BURU',31),(424,'BURU SELATAN',31),(425,'KEPULAUAN ARU',31),(426,'TUAL',31),(427,'HALMAHERA BARAT',32),(428,'TIDORE KEPULAUAN',32),(429,'TERNATE',32),(430,'PULAU MOROTAI',32),(431,'KEPULAUAN SULA',32),(432,'HALMAHERA SELATAN',32),(433,'HALMAHERA TENGAH',32),(434,'HALMAHERA TIMUR',32),(435,'HALMAHERA UTARA',32),(436,'YALIMO',33),(437,'DOGIYAI',33),(438,'ASMAT',33),(439,'JAYAPURA',33),(440,'PANIAI',33),(441,'MAPPI',33),(442,'TOLIKARA',33),(443,'PUNCAK JAYA',33),(444,'PEGUNUNGAN BINTANG',33),(445,'JAYAWIJAYA',33),(446,'LANNY JAYA',33),(447,'NDUGA',33),(448,'BIAK NUMFOR',33),(449,'KEPULAUAN YAPEN (YAPEN WAROPEN)',33),(450,'PUNCAK',33),(451,'INTAN JAYA',33),(452,'WAROPEN',33),(453,'NABIRE',33),(454,'MIMIKA',33),(455,'BOVEN DIGOEL',33),(456,'YAHUKIMO',33),(457,'SARMI',33),(458,'MERAUKE',33),(459,'DEIYAI (DELIYAI)',33),(460,'KEEROM',33),(461,'SUPIORI',33),(462,'MAMBERAMO RAYA',33),(463,'MAMBERAMO TENGAH',33),(464,'RAJA AMPAT',34),(465,'MANOKWARI SELATAN',34),(466,'MANOKWARI',34),(467,'KAIMANA',34),(468,'MAYBRAT',34),(469,'SORONG SELATAN',34),(470,'FAKFAK',34),(471,'PEGUNUNGAN ARFAK',34),(472,'TAMBRAUW',34),(473,'SORONG',34),(474,'TELUK WONDAMA',34),(475,'TELUK BINTUNI',34);
/*!40000 ALTER TABLE `cities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `customer` (
  `id_customer` int NOT NULL AUTO_INCREMENT,
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` VALUES (1,'admin','rizki@gmail.com','$2y$10$73NCG.YIHTl4FjW2I1dLp.GK7xUjU5Qke9qQapubFcDGjYqoCdEo2','rizki','','LK','0000-00-00','','','','',1,'2022-09-05 01:24:31'),(2,'rizkidarms','adminrizki@gmail.com','$2y$10$G.GutueX3jnBLZ8cqRyVFeVd.2hwD7Otcwf2rSxjpKIirmk.bobWG','Rizki','','LK','0000-00-00','','','','',0,'2022-09-07 06:32:27');
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detail_transaksi`
--

DROP TABLE IF EXISTS `detail_transaksi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `detail_transaksi` (
  `id_detail_transaksi` int NOT NULL AUTO_INCREMENT,
  `id_transaksi` int DEFAULT NULL,
  `id_produk` int DEFAULT NULL,
  `id_suplier` int DEFAULT NULL,
  `jumlah` varchar(100) DEFAULT NULL,
  `id_variasi` int DEFAULT NULL,
  `catatan` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_detail_transaksi`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detail_transaksi`
--

LOCK TABLES `detail_transaksi` WRITE;
/*!40000 ALTER TABLE `detail_transaksi` DISABLE KEYS */;
INSERT INTO `detail_transaksi` VALUES (8,19,1,NULL,'1',1,NULL,'2022-09-29 00:24:37',NULL,'2022-09-29 00:24:37'),(9,20,2,NULL,'2',NULL,NULL,'2022-09-29 00:27:12',NULL,'2022-09-29 00:27:12'),(10,21,2,NULL,'1',NULL,NULL,'2022-09-29 00:28:15',NULL,'2022-09-29 00:28:15'),(11,22,1,NULL,'3',1,NULL,'2022-09-29 00:32:30',NULL,'2022-09-29 00:32:30'),(12,23,1,NULL,'1',NULL,NULL,'2022-09-29 00:48:28',NULL,'2022-09-29 00:48:28'),(13,24,2,NULL,'1',NULL,NULL,'2022-09-29 01:44:38',NULL,'2022-09-29 01:44:38'),(14,25,2,NULL,'1',NULL,NULL,'2022-09-29 01:46:07',NULL,'2022-09-29 01:46:07'),(15,26,2,NULL,'1',NULL,NULL,'2022-09-29 01:46:28',NULL,'2022-09-29 01:46:28'),(16,27,2,NULL,'1',NULL,NULL,'2022-09-29 01:47:00',NULL,'2022-09-29 01:47:00'),(17,28,2,NULL,'1',NULL,NULL,'2022-10-03 01:18:12',NULL,'2022-10-03 01:18:12');
/*!40000 ALTER TABLE `detail_transaksi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `diskon`
--

DROP TABLE IF EXISTS `diskon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `diskon` (
  `id_diskon` int NOT NULL AUTO_INCREMENT,
  `id_produk` int DEFAULT NULL,
  `nama_diskon` varchar(255) DEFAULT NULL,
  `persentase` decimal(20,6) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_diskon`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `diskon`
--

LOCK TABLES `diskon` WRITE;
/*!40000 ALTER TABLE `diskon` DISABLE KEYS */;
/*!40000 ALTER TABLE `diskon` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `galeri_produk`
--

DROP TABLE IF EXISTS `galeri_produk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `galeri_produk` (
  `id_galeri_produk` int NOT NULL AUTO_INCREMENT,
  `id_produk` int DEFAULT NULL,
  `id_variasi` int DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_galeri_produk`),
  KEY `id_produk` (`id_produk`),
  CONSTRAINT `galeri_produk_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galeri_produk`
--

LOCK TABLES `galeri_produk` WRITE;
/*!40000 ALTER TABLE `galeri_produk` DISABLE KEYS */;
INSERT INTO `galeri_produk` VALUES (60,68,NULL,NULL,'/public/upload/galeri/produk_galeri_221020065122+Drx.png'),(61,68,NULL,NULL,'/public/upload/galeri/produk_galeri_221020065122j1Ks.png'),(62,68,NULL,NULL,'/public/upload/galeri/produk_galeri_221020065122ezFk.png');
/*!40000 ALTER TABLE `galeri_produk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `keranjang`
--

DROP TABLE IF EXISTS `keranjang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `keranjang` (
  `id_keranjang` int NOT NULL AUTO_INCREMENT,
  `id_pengguna` int DEFAULT NULL,
  `id_produk` int DEFAULT NULL,
  `jumlah` int DEFAULT NULL,
  `is_checked` tinyint(1) NOT NULL,
  `id_variasi` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_keranjang`),
  KEY `id_produk` (`id_produk`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `keranjang`
--

LOCK TABLES `keranjang` WRITE;
/*!40000 ALTER TABLE `keranjang` DISABLE KEYS */;
INSERT INTO `keranjang` VALUES (21,1,35,1,1,NULL,'2022-10-17 01:46:23','2022-10-17 02:15:21');
/*!40000 ALTER TABLE `keranjang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produk`
--

DROP TABLE IF EXISTS `produk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `produk` (
  `id_produk` int NOT NULL AUTO_INCREMENT,
  `id_suplier` int DEFAULT '0',
  `id_produk_kategori` int DEFAULT '0',
  `nama_produk` varchar(100) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `spesifikasi` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `brand` varchar(100) DEFAULT NULL,
  `harga` varchar(100) DEFAULT NULL,
  `berat` varchar(100) DEFAULT NULL,
  `lebar` varchar(100) DEFAULT NULL,
  `tinggi` varchar(100) DEFAULT NULL,
  `garansi` text,
  `is_variation` tinyint(1) DEFAULT NULL,
  `delete_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_produk`),
  KEY `id_suplier` (`id_suplier`),
  KEY `id_produk_kategori` (`id_produk_kategori`),
  CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_suplier`) REFERENCES `suplier` (`id_suplier`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `produk_ibfk_2` FOREIGN KEY (`id_produk_kategori`) REFERENCES `produk_kategori` (`id_produk_kategori`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produk`
--

LOCK TABLES `produk` WRITE;
/*!40000 ALTER TABLE `produk` DISABLE KEYS */;
INSERT INTO `produk` VALUES (68,1,5,'Lorem ipsum dolor sit amet','lorem-ipsum-dolor-sit-amet-Nzk5','&lt;p&gt;abc&lt;/p&gt;','&lt;p&gt;abc&lt;/p&gt;','ABC','20000','1','2','3','&lt;p&gt;abc&lt;/p&gt;',NULL,NULL,'2022-10-20 06:51:22','2022-10-20 06:51:22');
/*!40000 ALTER TABLE `produk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produk_kategori`
--

DROP TABLE IF EXISTS `produk_kategori`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `produk_kategori` (
  `id_produk_kategori` int NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_produk_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produk_kategori`
--

LOCK TABLES `produk_kategori` WRITE;
/*!40000 ALTER TABLE `produk_kategori` DISABLE KEYS */;
INSERT INTO `produk_kategori` VALUES (1,'Dinding','2022-09-15 04:54:01','2022-09-15 04:54:01'),(2,'Elektrikal','2022-09-15 04:54:01','2022-09-15 04:54:01'),(3,'Lantai','2022-09-15 06:22:00','2022-09-15 06:22:00'),(4,'Mekanikal','2022-09-15 06:22:00','2022-09-15 06:22:00'),(5,'Pintu & jendela','2022-09-15 06:24:43','2022-09-15 06:24:49'),(6,'Plafon & Atap','2022-09-15 06:24:55','2022-09-15 06:25:00'),(7,'Plumbing','2022-09-15 06:24:03','2022-09-15 06:24:03'),(8,'Sanitari','2022-09-15 06:24:03','2022-09-15 06:24:03');
/*!40000 ALTER TABLE `produk_kategori` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `provinces`
--

DROP TABLE IF EXISTS `provinces`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `provinces` (
  `prov_id` int NOT NULL AUTO_INCREMENT,
  `prov_name` varchar(255) DEFAULT NULL,
  `locationid` int DEFAULT NULL,
  `status` int DEFAULT '1',
  PRIMARY KEY (`prov_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `provinces`
--

LOCK TABLES `provinces` WRITE;
/*!40000 ALTER TABLE `provinces` DISABLE KEYS */;
INSERT INTO `provinces` VALUES (1,'ACEH',1,1),(2,'SUMATERA UTARA',1,1),(3,'SUMATERA BARAT',1,1),(4,'RIAU',1,1),(5,'JAMBI',1,1),(6,'SUMATERA SELATAN',1,1),(7,'BENGKULU',1,1),(8,'LAMPUNG',1,1),(9,'KEPULAUAN BANGKA BELITUNG',1,1),(10,'KEPULAUAN RIAU',1,1),(11,'DKI JAKARTA',1,1),(12,'JAWA BARAT',1,1),(13,'JAWA TENGAH',1,1),(14,'DI YOGYAKARTA',1,1),(15,'JAWA TIMUR',1,1),(16,'BANTEN',1,1),(17,'BALI',1,1),(18,'NUSA TENGGARA BARAT',1,1),(19,'NUSA TENGGARA TIMUR',1,1),(20,'KALIMANTAN BARAT',1,1),(21,'KALIMANTAN TENGAH',1,1),(22,'KALIMANTAN SELATAN',1,1),(23,'KALIMANTAN TIMUR',1,1),(24,'KALIMANTAN UTARA',1,1),(25,'SULAWESI UTARA',1,1),(26,'SULAWESI TENGAH',1,1),(27,'SULAWESI SELATAN',1,1),(28,'SULAWESI TENGGARA',1,1),(29,'GORONTALO',1,1),(30,'SULAWESI BARAT',1,1),(31,'MALUKU',1,1),(32,'MALUKU UTARA',1,1),(33,'PAPUA',1,1),(34,'PAPUA BARAT',1,1);
/*!40000 ALTER TABLE `provinces` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `review`
--

DROP TABLE IF EXISTS `review`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `review` (
  `id_review` int NOT NULL AUTO_INCREMENT,
  `id_produk` int DEFAULT NULL,
  `id_pengguna` int DEFAULT NULL,
  `nama_pengguna` varchar(100) NOT NULL,
  `pesan` varchar(255) DEFAULT NULL,
  `rating` varchar(255) DEFAULT NULL,
  `file_review` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_review`),
  CONSTRAINT `review_chk_1` CHECK (json_valid(`file_review`))
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `review`
--

LOCK TABLES `review` WRITE;
/*!40000 ALTER TABLE `review` DISABLE KEYS */;
INSERT INTO `review` VALUES (38,1,1,'rizki','sad','5',NULL,'2022-09-26 17:00:00','2022-09-26 17:00:00'),(39,1,1,'rizki','asdsa','5',NULL,'2022-09-26 17:00:00','2022-09-26 17:00:00'),(40,1,1,'rizki','asdsaasdasd','5',NULL,'2022-09-26 17:00:00','2022-09-26 17:00:00'),(41,1,1,'rizki','dasdadas','5',NULL,'2022-09-26 17:00:00','2022-09-26 17:00:00'),(42,1,1,'rizki','ou','5',NULL,'2022-09-26 17:00:00','2022-09-26 17:00:00'),(43,7,1,'sdf','sdf','5',NULL,NULL,NULL);
/*!40000 ALTER TABLE `review` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `suplier`
--

DROP TABLE IF EXISTS `suplier`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `suplier` (
  `id_suplier` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `nama_toko` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `lokasi` varchar(255) DEFAULT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `join_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_suplier`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `suplier`
--

LOCK TABLES `suplier` WRITE;
/*!40000 ALTER TABLE `suplier` DISABLE KEYS */;
INSERT INTO `suplier` VALUES (1,'toko rizki','tokorizki@gmail.com','$2y$10$rSGSM8voqimUigwXJ.cQ0.u89QNDEGVn46aVEt/RvFpo8MtbO/W3a',NULL,'Toko Berkah','ini deskripsi yang sangat panjang','jogja sleman jawa tengah indonesia',NULL,NULL,NULL,NULL),(2,'toko AWAN','tokoawan@gmail.com','$2y$10$cytGU27KppN9UeFQDybCyeiDqnE9VL0UtHnrivDVbEdY9mxF6OsEm',NULL,'Toko Berkah','ini deskripsi yang sangat panjang','jogja sleman jawa tengah indonesia',NULL,NULL,NULL,NULL),(3,'toko maul','tokomaul@gmail.com','$2y$10$GVz95xYIJi2VtWAYCehwLepe15N6HQlU8GKhz.ZS2vDUXSBLsORpW',NULL,'Toko Berkah maul','ini deskripsi yang sangat panjang banget','jogja sleman jawa tengah indonesia okey',NULL,NULL,NULL,NULL),(4,'toko dian','tokodian@gmail.com','$2y$10$DFQWCB0jV3BQoprgWOYACOCPhYSG5vCpuc4e4oXvO7b28Olb/gFQi',NULL,'Toko Berkah dian frond','ini deskripsi yang sangat panjang banget poll','jogja sleman jawa tengah indonesia okey','public/upload/banner_220915071103.jpg','public/upload/logo_220915074512.png',NULL,NULL),(5,'baru','baru@gmail.com','$2y$10$LTuFNnMIXvSJVIG7zCuiDOjdj9lktfTnEkLMlB5kaDKpelNIQjcZu',NULL,'baru','ini deskripsi yang sangat panjang banget poll','jogja sleman jawa tengah indonesia okey',NULL,NULL,'2022-09-15 00:00:00',NULL);
/*!40000 ALTER TABLE `suplier` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transaksi`
--

DROP TABLE IF EXISTS `transaksi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `transaksi` (
  `id_transaksi` int NOT NULL AUTO_INCREMENT,
  `id_pengguna` int DEFAULT NULL,
  `id_alamat_pengguna` int DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transaksi`
--

LOCK TABLES `transaksi` WRITE;
/*!40000 ALTER TABLE `transaksi` DISABLE KEYS */;
INSERT INTO `transaksi` VALUES (19,1,1,'ESTM283747824','10000',NULL,'url midtrans',NULL,'code voucer','2022-09-29 00:24:37',NULL,'2022-09-29 00:24:37'),(20,1,1,'ESTM283747824','600000',NULL,'url midtrans',NULL,'code voucer','2022-09-29 00:27:12',NULL,'2022-09-29 00:27:12'),(21,1,1,'ESTM283747824','300000',NULL,'https://app.sandbox.midtrans.com/snap/v3/redirection/eda03a2f-6d12-4c97-9eb3-a93c4ffc66ba',NULL,'code voucer','2022-09-29 00:28:15',NULL,'2022-09-29 00:28:15'),(22,1,1,'ESTM283747824','30000',NULL,'https://app.sandbox.midtrans.com/snap/v3/redirection/937dcfa0-9719-4caf-9cb1-63ff07582ce6',NULL,'code voucer','2022-09-29 00:32:30',NULL,'2022-09-29 00:32:30'),(23,1,1,'ESTM283747824','100000',NULL,'https://app.sandbox.midtrans.com/snap/v3/redirection/fff94b90-cb9d-4b40-babe-437561e4d510',NULL,'code voucer','2022-09-29 00:48:27',NULL,'2022-09-29 00:48:27'),(24,1,1,'ESTM283747824','300000',NULL,'https://app.sandbox.midtrans.com/snap/v3/redirection/8e7f6ecb-7a08-4ec8-b4e0-26feefd76de7',NULL,'code voucer','2022-09-29 01:44:38',NULL,'2022-09-29 01:44:38'),(25,1,1,'ESTM283747824','300000',NULL,'https://app.sandbox.midtrans.com/snap/v3/redirection/d530a3a4-3202-4f29-9479-3abe39422c09',NULL,'code voucer','2022-09-29 01:46:06',NULL,'2022-09-29 01:46:06'),(26,1,1,'ESTM283747824','300000',NULL,'https://app.sandbox.midtrans.com/snap/v3/redirection/7c8779af-cbc4-4216-aa63-f948b9af8f67',NULL,'code voucer','2022-09-29 01:46:28',NULL,'2022-09-29 01:46:28'),(27,1,1,'ESTM283747824','300000',NULL,'https://app.sandbox.midtrans.com/snap/v3/redirection/8e408d64-68f5-4d2f-a26f-5ca0864603f6',NULL,'code voucer','2022-09-29 01:47:00',NULL,'2022-09-29 01:47:00'),(28,1,1,'ESTM283747824','300000',NULL,'https://app.sandbox.midtrans.com/snap/v3/redirection/19f86a67-fcdc-4a53-9b29-4b55d7108c6e',NULL,'code voucer','2022-10-03 01:18:12',NULL,'2022-10-03 01:18:12');
/*!40000 ALTER TABLE `transaksi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `variasi`
--

DROP TABLE IF EXISTS `variasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `variasi` (
  `id_variasi` int NOT NULL AUTO_INCREMENT,
  `id_produk` int DEFAULT NULL,
  `model_variasi` varchar(255) DEFAULT NULL,
  `harga` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_variasi`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `variasi`
--

LOCK TABLES `variasi` WRITE;
/*!40000 ALTER TABLE `variasi` DISABLE KEYS */;
INSERT INTO `variasi` VALUES (1,1,'nbjkbjk','10000',NULL,NULL),(2,1,'Model baru','20000',NULL,NULL),(8,2,'warna biru','20000','2022-10-04 17:00:00','2022-10-04 17:00:00'),(9,2,'warna biru','20000','2022-10-04 17:00:00','2022-10-04 17:00:00'),(10,2,'warna biru','20000','2022-10-04 17:00:00','2022-10-04 17:00:00'),(11,6,'warna biru','20000','2022-10-04 17:00:00','2022-10-04 17:00:00'),(12,31,'warna biru','20000','2022-10-06 17:00:00','2022-10-06 17:00:00'),(13,31,'warna biru','20000','2022-10-06 17:00:00','2022-10-06 17:00:00');
/*!40000 ALTER TABLE `variasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wilayah_distribusi`
--

DROP TABLE IF EXISTS `wilayah_distribusi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `wilayah_distribusi` (
  `id_wilayah_distribusi` int NOT NULL AUTO_INCREMENT,
  `id_suplier` int NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_wilayah_distribusi`),
  KEY `id_suplier` (`id_suplier`),
  CONSTRAINT `wilayah_distribusi_ibfk_1` FOREIGN KEY (`id_suplier`) REFERENCES `suplier` (`id_suplier`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wilayah_distribusi`
--

LOCK TABLES `wilayah_distribusi` WRITE;
/*!40000 ALTER TABLE `wilayah_distribusi` DISABLE KEYS */;
INSERT INTO `wilayah_distribusi` VALUES (1,1,'ACEH','PIDIE JAYA','2022-10-19 02:41:38'),(2,1,'SUMATERA BARAT','PIDIE JAYA','2022-10-19 02:42:04');
/*!40000 ALTER TABLE `wilayah_distribusi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wilayah_produk`
--

DROP TABLE IF EXISTS `wilayah_produk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `wilayah_produk` (
  `id_wilayah_produk` int NOT NULL AUTO_INCREMENT,
  `id_produk` int NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `created_at` int NOT NULL,
  PRIMARY KEY (`id_wilayah_produk`),
  KEY `id_produk` (`id_produk`),
  CONSTRAINT `wilayah_produk_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wilayah_produk`
--

LOCK TABLES `wilayah_produk` WRITE;
/*!40000 ALTER TABLE `wilayah_produk` DISABLE KEYS */;
/*!40000 ALTER TABLE `wilayah_produk` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-10-21  1:14:23
