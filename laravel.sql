-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: localhost    Database: laravel_wringinanom
-- ------------------------------------------------------
-- Server version	8.0.36

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `anggota_pindah`
--

DROP TABLE IF EXISTS `anggota_pindah`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `anggota_pindah` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `letter_perpindahan_id` bigint unsigned NOT NULL,
  `nik` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Relationship to main applicant',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `anggota_pindah_letter_perpindahan_id_foreign` (`letter_perpindahan_id`),
  CONSTRAINT `anggota_pindah_letter_perpindahan_id_foreign` FOREIGN KEY (`letter_perpindahan_id`) REFERENCES `kepindahan` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `anggota_pindah`
--

LOCK TABLES `anggota_pindah` WRITE;
/*!40000 ALTER TABLE `anggota_pindah` DISABLE KEYS */;
INSERT INTO `anggota_pindah` VALUES (1,1,'2312341231234123','spongebob','Teman','2025-03-02 21:41:23','2025-03-02 21:41:23');
/*!40000 ALTER TABLE `anggota_pindah` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `birth_notes`
--

DROP TABLE IF EXISTS `birth_notes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `birth_notes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_dok_journey` int NOT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_wa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_saksi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik_saksi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality_saksi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_saksi2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik_saksi2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality_saksi2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_dad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik_dad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place_born_dad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_born_dad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality_dad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_mom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik_mom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place_born_mom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_born_mom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality_mom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_kk_anak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hub_keluarga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_child` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender_child` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place_birth_child` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place_birth_child2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_birth_child` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hour_birth_child` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_birth_child` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_birth_child` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `helper_birth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight_child` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `height_child` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_type_child` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion_child` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality_child` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disability` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` year NOT NULL DEFAULT '2025',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `birth_notes`
--

LOCK TABLES `birth_notes` WRITE;
/*!40000 ALTER TABLE `birth_notes` DISABLE KEYS */;
INSERT INTO `birth_notes` VALUES (1,'Euguene Krabs','9502099889231231',1,'2','089976554432','Patrick Star','9502099889231231','2','Spongebob Squarepants','9502099889231231','2','Euguene Krabs','9502099889231231','Bikini Bottom','2025-03-02','2','Mama Krabs','9873672987673732','Rock Bottom','2025-03-02','2','9502099889231231','1','Euguene Sicilian','1','5','Ponorogo','2025-03-02','10:14','1','1','3','500','20','A','5','1','3',2025,'2025-03-02 21:37:54','2025-03-02 21:37:54');
/*!40000 ALTER TABLE `birth_notes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `budget_categories`
--

DROP TABLE IF EXISTS `budget_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `budget_categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `budget_categories`
--

LOCK TABLES `budget_categories` WRITE;
/*!40000 ALTER TABLE `budget_categories` DISABLE KEYS */;
INSERT INTO `budget_categories` VALUES (1,'Pendapatan'),(2,'Belanja'),(3,'Prioritas Dana Desa'),(4,'Rencana Kegiatan Pembangunan Infrastruktur');
/*!40000 ALTER TABLE `budget_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `budgets`
--

DROP TABLE IF EXISTS `budgets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `budgets` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` bigint NOT NULL,
  `year` year NOT NULL,
  `category_id` bigint unsigned NOT NULL,
  `is_total` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `budgets_category_id_foreign` (`category_id`),
  CONSTRAINT `budgets_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `budget_categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `budgets`
--

LOCK TABLES `budgets` WRITE;
/*!40000 ALTER TABLE `budgets` DISABLE KEYS */;
INSERT INTO `budgets` VALUES (1,'Pendapatan Asli Desa',181800000,2024,1,0),(2,'Dana Desa',1235203000,2024,1,0),(3,'Alokasi Dana Desa',779650000,2024,1,0),(4,'Bantuan Keuangan Kabupaten',0,2024,1,0),(5,'Penerima Bagi Hasil Pajak Dan Retribusi',0,2024,1,0),(6,'Lain-lain',0,2024,1,0),(7,'Total',2196653000,2024,1,1),(8,'Bidang Penyelenggaraan Pemerintah Desa',751684766,2024,2,0),(9,'Bidang Pelaksaan Pembangunan Desa',682053000,2024,2,0),(10,'Bidang Pembinaan Kemasyarakatan',349727064,2024,2,0),(11,'Bidang Penanggulangan Bencana Darurat dan Mendesak Desa',152642224,2024,2,0),(12,'Jumlah Belanja',2256607055,2024,2,1),(13,'Surplus/Defisit',59954055,2024,2,0),(14,'Penerimaan Pembiayaan Penyertaan Modal Desa',64954055,2024,2,0),(15,'Penerima Pembiayaan Penyertaan Modal Desa',5000000,2024,2,0),(16,'Pembiayaan Netto',59954055,2024,2,0),(17,'Bantuan Langsung Tunai Desa',144000000,2024,3,0),(18,'Ketahanan Pangan',260000000,2024,3,0),(19,'Konvergensi Stanting',45250000,2024,3,0),(20,'Pavingasi Jalan RT 01 RW 01 Dukuh Krajan',25000000,2024,4,0),(21,'Pavingasi Jalan RT 05 Rw 01 Dukuh Krajan',75000000,2024,4,0),(22,'Pemeliharaan/Reham Kantor Desa',100000000,2024,4,0),(23,'Cadangan boss',0,2024,4,0),(24,'Pendapatan Asli Desa',181065000,2023,1,0),(25,'Dana Desa',1229576000,2023,1,0),(26,'Alokasi Dana Desa',683087566,2023,1,0),(27,'Bantuan Keuangan Kabupaten',450000000,2023,1,0),(28,'Penerima Bagi Hasil Pajak Dan Retribusi',14972047,2023,1,0),(29,'Lain-lain',407106988,2023,1,0),(30,'Total',2965807601,2023,1,1),(31,'Bidang Penyelenggaraan Pemerintah Desa',787189130,2023,2,0),(32,'Bidang Pelaksaan Pembangunan Desa',1545075505,2023,2,0),(33,'Bidang Pembinaan Kemasyarakatan',314932160,2023,2,0),(34,'Bidang Penanggulangan Bencana Darurat dan Mendesak Desa',151819000,2023,2,0),(35,'Jumlah Belanja',3049172995,2023,2,1),(36,'Surplus/Defisit',83365393,2023,2,0),(37,'Penerimaan Pembiayaan',168319449,2023,2,0),(38,'Pengeluaran Pembiayaan',20000000,2023,2,0),(39,'Pembiayaan Netto',148319449,2023,2,0),(40,'SILPA/SILPA Tahun Berjalan',64954055,2023,2,0);
/*!40000 ALTER TABLE `budgets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
INSERT INTO `cache` VALUES ('356a192b7913b04c54574d18c28d46e6395428ab','i:1;',1741056724),('356a192b7913b04c54574d18c28d46e6395428ab:timer','i:1741056724;',1741056724),('a17961fa74e9275d529f489537f179c05d50c2f3','i:1;',1741056601),('a17961fa74e9275d529f489537f179c05d50c2f3:timer','i:1741056601;',1741056601);
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Pembangunan',NULL,NULL),(2,'Kegiatan',NULL,NULL),(3,'Pengumuman',NULL,NULL);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `complaints`
--

DROP TABLE IF EXISTS `complaints`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `complaints` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `complaints`
--

LOCK TABLES `complaints` WRITE;
/*!40000 ALTER TABLE `complaints` DISABLE KEYS */;
/*!40000 ALTER TABLE `complaints` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `creations`
--

DROP TABLE IF EXISTS `creations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `creations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `creations`
--

LOCK TABLES `creations` WRITE;
/*!40000 ALTER TABLE `creations` DISABLE KEYS */;
INSERT INTO `creations` VALUES (1,'Industri','Desa Wringinanom, Kecamatan Sambit, Kabupaten Ponorogo, dikenal sebagai sentra industri genteng dan batu bata. Industri ini telah menjadi tulang punggung perekonomian desa, di mana banyak warga yang terlibat dalam proses produksi hingga distribusi. Genteng dan batu bata buatan Desa Wringinanom terkenal akan kualitasnya yang kokoh dan tahan lama, menjadikannya pilihan utama untuk kebutuhan konstruksi di daerah sekitar.','genteng.svg','2025-02-10 04:34:40','2025-02-10 04:34:40'),(2,'Kesenian','Desa Wringinanom juga kaya akan seni budaya tradisional yang terus dilestarikan oleh masyarakat. Kesenian seperti Gajah-gajahan dan Reog Songo Mulang Joyo menjadi identitas desa yang selalu ditampilkan dalam berbagai acara adat dan perayaan. Selain itu, seni Karawitan dan Gong Gumbeng menambah keberagaman budaya desa, menghadirkan keindahan harmoni musik tradisional yang diwariskan dari generasi ke generasi. Melalui berbagai kesenian ini, Desa Wringinanom tidak hanya menjaga warisan budaya tetapi juga memperkuat ikatan sosial masyarakat.','kesenian.svg','2025-02-10 04:34:40','2025-02-10 04:34:40');
/*!40000 ALTER TABLE `creations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `death_notes`
--

DROP TABLE IF EXISTS `death_notes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `death_notes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_dok_journey` int NOT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_wa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_saksi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik_saksi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality_saksi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_saksi2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik_saksi2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality_saksi2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_dad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik_dad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place_born_dad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_born_dad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality_dad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_mom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik_mom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place_born_mom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_born_mom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality_mom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik_death` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_death` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_death` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hour_death` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caused_death` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place_death` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info_death` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` year NOT NULL DEFAULT '2025',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `death_notes`
--

LOCK TABLES `death_notes` WRITE;
/*!40000 ALTER TABLE `death_notes` DISABLE KEYS */;
INSERT INTO `death_notes` VALUES (1,'Harold Squarepants','9873672987673743',1,'1','089976554432','Patrick Star','9873672987673749','2','Spongebob Squarepants','9873672987673748','2','Harold Squarepants','9873672987673743','Bikini Bottom','1995-08-09','2','Margaret Squarepants','9873672987673744','Rock Bottom','1990-05-04','2','9873672987673745','Budiono Squarepants','2025-03-02','02:50','2','Bikini Bottom Hospital','1',2025,'2025-03-02 21:32:12','2025-03-02 21:32:12'),(2,'Harold Squarepants','9873672987673743',2,'1','089976554432','Patrick Star','9873672987673749','2','Spongebob Squarepants','9873672987673748','2','Harold Squarepants','9873672987673743','Bikini Bottom','1995-08-09','2','Margaret Squarepants','9873672987673744','Rock Bottom','1990-05-04','2','9873672987673745','Budiono Squarepants','2025-03-02','02:50','2','Bikini Bottom Hospital','1',2025,'2025-03-02 21:37:13','2025-03-02 21:37:13');
/*!40000 ALTER TABLE `death_notes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `demographics`
--

DROP TABLE IF EXISTS `demographics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `demographics` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `dusun` int NOT NULL,
  `rukun_warga` int NOT NULL,
  `rukun_tetangga` int NOT NULL,
  `jiwa` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `demographics`
--

LOCK TABLES `demographics` WRITE;
/*!40000 ALTER TABLE `demographics` DISABLE KEYS */;
INSERT INTO `demographics` VALUES (1,4,9,39,5212);
/*!40000 ALTER TABLE `demographics` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `documents`
--

DROP TABLE IF EXISTS `documents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `documents` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pdf_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documents`
--

LOCK TABLES `documents` WRITE;
/*!40000 ALTER TABLE `documents` DISABLE KEYS */;
/*!40000 ALTER TABLE `documents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dtks`
--

DROP TABLE IF EXISTS `dtks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `dtks` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rt/rw` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_ktp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_kk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_rumah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_lantai_rumah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dtks`
--

LOCK TABLES `dtks` WRITE;
/*!40000 ALTER TABLE `dtks` DISABLE KEYS */;
/*!40000 ALTER TABLE `dtks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `galeries`
--

DROP TABLE IF EXISTS `galeries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `galeries` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galeries`
--

LOCK TABLES `galeries` WRITE;
/*!40000 ALTER TABLE `galeries` DISABLE KEYS */;
INSERT INTO `galeries` VALUES (1,'Pawai Kendaraan','1.jpg','A grand parade showcasing beautifully decorated vehicles.','2025-02-05 05:54:42','2025-02-05 05:54:42'),(2,'Pawai Kendaraan','2.jpg','An exciting display of creativity and culture in motion.','2025-02-05 05:54:42','2025-02-05 05:54:42'),(3,'Pawai Kendaraan','3.jpg','A wonderful celebration filled with vibrant colors and joy.','2025-02-05 05:54:42','2025-02-05 05:54:42'),(4,'Pawai Kendaraan','4.jpg','A procession of uniquely designed cars and motorcycles.','2025-02-05 05:54:42','2025-02-05 05:54:42'),(5,'Pawai Kendaraan','5.jpg','A festival of moving art bringing excitement to the streets.','2025-02-05 05:54:42','2025-02-05 05:54:42'),(6,'Pawai Kendaraan','6.jpg','A spectacular show of traditional and modern vehicle decorations.','2025-02-05 05:54:42','2025-02-05 05:54:42'),(7,'Pawai Kendaraan','7.jpg','A thrilling event with participants displaying their themed vehicles.','2025-02-05 05:54:42','2025-02-05 05:54:42'),(8,'Pawai Kendaraan','8.jpg','A crowd-pleasing parade filled with dazzling lights and music.','2025-02-05 05:54:42','2025-02-05 05:54:42'),(9,'Pawai Kendaraan','9.jpg','A lively event featuring impressive vehicle modifications.','2025-02-05 05:54:42','2025-02-05 05:54:42'),(10,'Pawai Kendaraan','10.jpg','A colorful convoy capturing the essence of the celebration.','2025-02-05 05:54:42','2025-02-05 05:54:42'),(11,'Pawai Kendaraan','11.jpg','An artistic expression through beautifully adorned automobiles.','2025-02-05 05:54:42','2025-02-05 05:54:42'),(12,'Pawai Kendaraan','12.jpg','A mesmerizing street performance featuring themed floats.','2025-02-05 05:54:42','2025-02-05 05:54:42'),(13,'Pawai Kendaraan','13.jpg','A joyous occasion where vehicles become moving masterpieces.','2025-02-05 05:54:42','2025-02-05 05:54:42'),(14,'Pawai Kendaraan','14.jpg','A cultural spectacle blending tradition and innovation.','2025-02-05 05:54:42','2025-02-05 05:54:42'),(15,'Pawai Kendaraan','15.jpg','A captivating journey of creativity on wheels.','2025-02-05 05:54:42','2025-02-05 05:54:42'),(16,'Pawai Kendaraan','16.jpg','A breathtaking lineup of decorated vehicles bringing smiles to all.','2025-02-05 05:54:42','2025-02-05 05:54:42');
/*!40000 ALTER TABLE `galeries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kepindahan`
--

DROP TABLE IF EXISTS `kepindahan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kepindahan` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `no_kk` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Family card number',
  `nama_lengkap` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Main applicant name',
  `nik` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'National ID number',
  `no_wa` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'WhatsApp number',
  `alamat_asal` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Original address',
  `rt_asal` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rw_asal` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_pos_asal` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `klasifikasi_kepindahan` tinyint unsigned NOT NULL COMMENT '1-4 classification type',
  `alamat_pindah` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Destination address',
  `rt_pindah` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rw_pindah` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desa` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kabupaten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_pos_pindah` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Phone number',
  `alasan_pindah` tinyint unsigned NOT NULL COMMENT '1-7 reason code',
  `jenis_kepindahan` tinyint unsigned NOT NULL COMMENT '1-4 type code',
  `anggota_tidak_pindah` tinyint unsigned NOT NULL COMMENT 'Number of members not moving',
  `anggota_pindah` tinyint unsigned NOT NULL COMMENT 'Number of members moving',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kepindahan`
--

LOCK TABLES `kepindahan` WRITE;
/*!40000 ALTER TABLE `kepindahan` DISABLE KEYS */;
INSERT INTO `kepindahan` VALUES (1,'2312344421231231','Patrick Star','9873672987673743','083848882888','Dusun Krajan','3','1','65432',1,'Bikini Bottom','2','3','Bikini Bottom','Atlantis','Atlantis City','Samudra Pasifik','332211','082211223311',2,1,1,1,'2025-03-02 21:41:23','2025-03-02 21:41:23');
/*!40000 ALTER TABLE `kepindahan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `letter_businesses`
--

DROP TABLE IF EXISTS `letter_businesses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `letter_businesses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `no_letter` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_ktp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agriculture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `industry` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock_breeding` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `handicraft` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_wa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` year NOT NULL DEFAULT '2025',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `letter_businesses`
--

LOCK TABLES `letter_businesses` WRITE;
/*!40000 ALTER TABLE `letter_businesses` DISABLE KEYS */;
INSERT INTO `letter_businesses` VALUES (1,1,'Patrick Star','RT 003 RW 001 Dukuh Krajan Desa Wringinanom Kecamatan Sambit Kabupaten Ponorogo','2312342123423212','Gogot Tani',NULL,NULL,NULL,NULL,NULL,NULL,'089978337211',2025,'2025-03-02 20:53:02','2025-03-02 20:53:02'),(2,2,'Patrick Star','RT 003 RW 001 Dukuh Krajan Desa Wringinanom Kecamatan Sambit Kabupaten Ponorogo','2312342123423212',NULL,NULL,NULL,'Gogot Farm',NULL,NULL,NULL,'089978337211',2025,'2025-03-02 20:53:40','2025-03-02 20:53:40');
/*!40000 ALTER TABLE `letter_businesses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `letter_counters`
--

DROP TABLE IF EXISTS `letter_counters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `letter_counters` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `latest_no` int NOT NULL DEFAULT '0',
  `year` year NOT NULL DEFAULT '2025',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `letter_counters`
--

LOCK TABLES `letter_counters` WRITE;
/*!40000 ALTER TABLE `letter_counters` DISABLE KEYS */;
INSERT INTO `letter_counters` VALUES (1,7,2025,'2025-03-02 20:53:02','2025-03-02 21:39:22');
/*!40000 ALTER TABLE `letter_counters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `letter_deaths`
--

DROP TABLE IF EXISTS `letter_deaths`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `letter_deaths` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `no_letter` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_death` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hour_death` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cause_death` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mom_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dad_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_wa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` year NOT NULL DEFAULT '2025',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `letter_deaths`
--

LOCK TABLES `letter_deaths` WRITE;
/*!40000 ALTER TABLE `letter_deaths` DISABLE KEYS */;
INSERT INTO `letter_deaths` VALUES (1,6,'Eugune Krabs','1232342132123212','2025-03-02','09:27','Kecelakaan','Mama Krabs','Daddy Krabs','0899287662312',2025,'2025-03-02 21:05:48','2025-03-02 21:05:48');
/*!40000 ALTER TABLE `letter_deaths` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `letter_fuels`
--

DROP TABLE IF EXISTS `letter_fuels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `letter_fuels` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `no_letter` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_consumer_sector` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tool_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tool_sum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tool_power` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tool_use` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tool_time_used_hour` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tool_time_used_daily` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jbt_consumption` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tool_sum2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `volume_allocation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pick_up_place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_distributor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_distributor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `purchasing_tools_used` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_wa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` year NOT NULL DEFAULT '2025',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `letter_fuels`
--

LOCK TABLES `letter_fuels` WRITE;
/*!40000 ALTER TABLE `letter_fuels` DISABLE KEYS */;
INSERT INTO `letter_fuels` VALUES (3,3,'Mr. Krabs','9502012349213213','RT 003 / RW 001 Dusun Krajan Desa Wringinanom Kecamatan Sambit','Krusty Krab','Usaha Tani','Pertanian','Diesel','10','2000','Pertanian Industri','11','11','13','-','500','SPBU Sambit','54.634.11','Ds. Besuki, Kec. Sambit Kab. Ponorogo','Uang','089978992233',2025,'2025-03-02 20:58:52','2025-03-02 20:58:52'),(4,4,'Bu Sutini','9502012349213213','RT 003 / RW 001 Dusun Krajan Desa Wringinanom Kecamatan Sambit','Krusty Krab','Usaha Tani','Pertanian','Diesel','10','2000','Pertanian Industri','11','11','13','-','500','SPBU Nailan','54.634.12','JL. Raya Ds. Balong-Slahung Kab. Ponorogo','Kredit','089978992233',2025,'2025-03-02 20:59:44','2025-03-02 20:59:44');
/*!40000 ALTER TABLE `letter_fuels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `letter_incapacities`
--

DROP TABLE IF EXISTS `letter_incapacities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `letter_incapacities` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `no_letter` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'WNI',
  `education` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marriage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_child` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir_child` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir_child` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender_child` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `education_child` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_child` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_wa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` year NOT NULL DEFAULT '2025',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `letter_incapacities`
--

LOCK TABLES `letter_incapacities` WRITE;
/*!40000 ALTER TABLE `letter_incapacities` DISABLE KEYS */;
INSERT INTO `letter_incapacities` VALUES (1,5,'Eugune Krabs','1980-09-17','Bikini Bottom','Laki-Laki','WNI','S1 Ekonomi','Manager Toko','Duda','9805020030232323','Katolik','RT 003 RW 002 Dukuh Krajan Desa Wringinanom Kecamatan Sambit Kabupaten Ponorogo','Euguene Pearl','2005-08-03','Ponorogo','Perempuan','SMA','RT 003 RW 002 Dukuh Krajan Desa Wringinanom Kecamatan Sambit Kabupaten Ponorogo','082211223311',2025,'2025-03-02 21:04:15','2025-03-02 21:04:15');
/*!40000 ALTER TABLE `letter_incapacities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `letter_losts`
--

DROP TABLE IF EXISTS `letter_losts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `letter_losts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `no_letter` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marriage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_kk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `information` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_wa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` year NOT NULL DEFAULT '2025',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `letter_losts`
--

LOCK TABLES `letter_losts` WRITE;
/*!40000 ALTER TABLE `letter_losts` DISABLE KEYS */;
INSERT INTO `letter_losts` VALUES (1,7,'Patrick Star','Ponorogo','2025-03-21','Laki-Laki','WNI','Islam','Sudah Kawin','Serabutan','SMA','9873672987673743','9873672987673743','RT 002 RW 001 Dukuh Krajan Desa Wringinanom Kecamatan Sambit Kabupaten Ponorogo','Iphone 16 pro max++','089567668944',2025,'2025-03-02 21:39:22','2025-03-02 21:39:22');
/*!40000 ALTER TABLE `letter_losts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `locations`
--

DROP TABLE IF EXISTS `locations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `locations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `locations_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `locations`
--

LOCK TABLES `locations` WRITE;
/*!40000 ALTER TABLE `locations` DISABLE KEYS */;
INSERT INTO `locations` VALUES (1,'Banyuripan',NULL,NULL),(2,'Krajan',NULL,NULL),(3,'Nambang',NULL,NULL),(4,'Tambong',NULL,NULL);
/*!40000 ALTER TABLE `locations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2024_12_06_211030_create_users_table',1),(2,'2024_12_06_211040_create_cache_table',1),(3,'2024_12_06_211506_create_sessions_table',1),(4,'2024_12_18_123220_create_news_table',1),(5,'2024_12_18_123302_create_documents_table',1),(6,'2024_12_18_123319_create_complaints_table',1),(7,'2024_12_18_123332_create_galeries_table',1),(8,'2024_12_18_123350_create_organizations_table',1),(9,'2024_12_18_123404_create_demographics_table',1),(10,'2024_12_18_123435_create_budget_categories_table',1),(11,'2024_12_18_123440_create_budgets_table',1),(12,'2024_12_18_123533_create_letter_incapacities_table',1),(13,'2024_12_18_123547_create_letter_deaths_table',1),(14,'2024_12_18_123610_create_letter_businesses_table',1),(15,'2024_12_18_123623_create_letter_losts_table',1),(16,'2024_12_18_123800_create_creations_table',1),(17,'2024_12_18_123850_create_death_notes_table',1),(18,'2024_12_18_123900_create_birth_notes_table',1),(19,'2024_12_18_123948_create_letter_fuels_table',1),(20,'2025_02_04_110812_create_categories_table',1),(21,'2025_02_04_111123_create_news_categories_table',1),(22,'2025_02_04_132449_create_locations_table',1),(23,'2025_02_04_132707_create_news_location_table',1),(24,'2025_02_07_164411_create_letter_counters_table',1),(25,'2025_02_24_023039_create_dtks_table',1),(26,'2025_02_28_043008_create_kepindahans_table',1),(27,'2025_02_28_043805_create_anggota_pindahs_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `news` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,'Pawai Kemerdekaan 17 Agustus','Voluptates atque reiciendis voluptatem voluptates. Voluptas doloremque qui tempore reprehenderit quas libero nostrum. Sint tenetur consequatur error veritatis.','01JMCKEPJ27F112X5PTM9QE1H8.png','2025-01-04 17:00:00','2025-03-02 20:51:52','2025-03-03 19:49:59'),(2,'Itaque a ex neque est est doloribus.','Natus dolores perferendis reprehenderit magnam ut. Eligendi accusantium minus aliquid reiciendis. Provident aspernatur voluptas voluptatibus cum.','01JMCKEPJ27F112X5PTM9QE1H8.png','2025-02-13 19:09:11','2025-03-02 20:51:52','2025-03-02 20:51:52'),(3,'Mloko Sewu','<p>Lorem Ipsum Dolor Sit Amet Capscicum</p>','01JNFH14W0F1HGCVJHK78CNX29.jpg','2025-03-03 17:00:00','2025-03-03 19:51:16','2025-03-03 19:51:16');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news_category`
--

DROP TABLE IF EXISTS `news_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `news_category` (
  `news_id` bigint unsigned NOT NULL,
  `category_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`news_id`,`category_id`),
  KEY `news_category_category_id_foreign` (`category_id`),
  CONSTRAINT `news_category_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  CONSTRAINT `news_category_news_id_foreign` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news_category`
--

LOCK TABLES `news_category` WRITE;
/*!40000 ALTER TABLE `news_category` DISABLE KEYS */;
INSERT INTO `news_category` VALUES (3,1),(1,2),(2,2),(2,3);
/*!40000 ALTER TABLE `news_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news_location`
--

DROP TABLE IF EXISTS `news_location`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `news_location` (
  `news_id` bigint unsigned NOT NULL,
  `location_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`news_id`,`location_id`),
  KEY `news_location_location_id_foreign` (`location_id`),
  CONSTRAINT `news_location_location_id_foreign` FOREIGN KEY (`location_id`) REFERENCES `locations` (`id`) ON DELETE CASCADE,
  CONSTRAINT `news_location_news_id_foreign` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news_location`
--

LOCK TABLES `news_location` WRITE;
/*!40000 ALTER TABLE `news_location` DISABLE KEYS */;
INSERT INTO `news_location` VALUES (1,2),(3,3),(2,4);
/*!40000 ALTER TABLE `news_location` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `organizations`
--

DROP TABLE IF EXISTS `organizations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `organizations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `organizations`
--

LOCK TABLES `organizations` WRITE;
/*!40000 ALTER TABLE `organizations` DISABLE KEYS */;
INSERT INTO `organizations` VALUES (1,'Karang Taruna','Karang Taruna Anom Mekar Buana adalah organisasi kepemudaan di Desa Wringinanom, Kecamatan Sambit, Kabupaten Ponorogo, yang berperan aktif dalam pemberdayaan pemuda dan pembangunan masyarakat. Organisasi ini mengadakan berbagai kegiatan seperti pelatihan keterampilan, gotong royong, pelestarian seni budaya, serta turnamen olahraga untuk mempererat solidaritas dan meningkatkan kesejahteraan warga. Sebagai mitra pemerintah desa, Anom Mekar Buana menjadi motor penggerak kemajuan melalui inovasi dan semangat kebersamaan.','anom_mekar_buana.svg','2025-02-10 04:34:40','2025-02-10 04:34:40'),(2,'BPD','Badan Permusyawaratan Desa (BPD) Wringinanom adalah lembaga perwakilan masyarakat yang berfungsi sebagai mitra pemerintah desa dalam menyusun kebijakan, mengawasi pelaksanaan pembangunan, serta menampung dan menyalurkan aspirasi warga. BPD berperan aktif dalam mewujudkan tata kelola pemerintahan desa yang transparan, akuntabel, dan partisipatif untuk mendukung tercapainya kesejahteraan masyarakat Desa Wringinanom.','burung.svg','2025-02-10 04:34:40','2025-02-10 04:34:40'),(3,'PKK','Pemberdayaan dan Kesejahteraan Keluarga (PKK) Desa Wringinanom merupakan gerakan yang bertujuan memberdayakan keluarga dalam berbagai bidang, seperti pendidikan, kesehatan, dan ekonomi. Melalui 10 Program Pokok PKK, organisasi ini aktif mengadakan kegiatan seperti penyuluhan kesehatan, pelatihan keterampilan bagi ibu-ibu rumah tangga, hingga kegiatan sosial yang mempererat hubungan antarwarga. PKK menjadi mitra strategis pemerintah desa dalam membangun keluarga yang sejahtera dan mandiri.','jalu_astronot.svg','2025-02-10 04:34:40','2025-02-10 04:34:40'),(4,'BUMDes','Badan Usaha Milik Desa (BUMDes) Wringinanom adalah lembaga ekonomi desa yang bertugas mengelola aset dan potensi lokal untuk meningkatkan pendapatan asli desa dan kesejahteraan masyarakat. BUMDes mengelola berbagai unit usaha, seperti jasa keuangan, perdagangan, dan pengelolaan sumber daya lokal. Sebagai penggerak ekonomi desa, BUMDes berkomitmen menghadirkan inovasi dan pemberdayaan ekonomi yang berkelanjutan bagi warga Desa Wringinanom','jalu_batik.svg','2025-02-10 04:34:40','2025-02-10 04:34:40');
/*!40000 ALTER TABLE `organizations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('zqb2U8nGXQMECFC582H2ePYh2MYwZ8ioKqMsjIug',1,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36','YTo3OntzOjY6Il90b2tlbiI7czo0MDoiOG9QaW1ZOHJLaVZkY2J5eXhhYXhTbUFVTk9jbkR0aG9YSXNHRmwyUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkREhiTlp0bVlQeHY0akRrWTlWbERHdUtzOTlkTUM1NkdRckdiNDdXNEVFSlhiTUsyLzU3YWEiO3M6ODoiZmlsYW1lbnQiO2E6MDp7fX0=',1741058348);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'jabung','dsjabung@gmail.com',NULL,'$2y$12$DHbNZtmYPxv4jDkY9VlDGuKs99dMC56GQrGb47W4EEJXbMK2/57aa',NULL,'2024-09-23 12:12:54','2024-09-23 12:12:54');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-03-04 10:33:24
