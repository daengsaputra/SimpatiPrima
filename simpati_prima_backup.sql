-- MySQL dump 10.13  Distrib 8.4.3, for Win64 (x86_64)
--
-- Host: localhost    Database: simpati_prima
-- ------------------------------------------------------
-- Server version	8.4.3

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
-- Table structure for table `assets`
--

DROP TABLE IF EXISTS `assets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `assets` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `kind` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'loanable',
  `quantity_total` int unsigned NOT NULL DEFAULT '0',
  `quantity_available` int unsigned NOT NULL DEFAULT '0',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bast_document_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bast_photo_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `assets_code_unique` (`code`),
  KEY `assets_kind_index` (`kind`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `assets`
--

LOCK TABLES `assets` WRITE;
/*!40000 ALTER TABLE `assets` DISABLE KEYS */;
INSERT INTO `assets` VALUES (1,'PJ-001','Laptop Operasional','Elektronik','Digunakan untuk kegiatan rapat dan presentasi.','loanable',12,12,'active',NULL,NULL,NULL,'2026-05-22 07:58:53','2026-05-22 07:58:53'),(2,'PJ-002','Proyektor Mini','Elektronik','Unit portabel untuk kegiatan sosialisasi.','loanable',6,4,'active',NULL,NULL,NULL,'2026-05-22 07:58:53','2026-05-22 07:58:53'),(3,'PJ-003','Sound System Portable','Audio','Perangkat audio untuk acara internal.','loanable',4,4,'inactive',NULL,NULL,NULL,'2026-05-22 07:58:53','2026-05-22 07:58:53'),(4,'PJ-004','Kamera DSLR','Dokumentasi','Digunakan untuk dokumentasi kegiatan resmi.','loanable',3,2,'active',NULL,NULL,NULL,'2026-05-22 07:58:53','2026-05-22 07:58:53'),(5,'INV-001','Printer Kantor','Elektronik','Perangkat cetak untuk tiap unit kerja.','inventory',8,8,'active',NULL,NULL,NULL,'2026-05-22 07:58:53','2026-05-22 07:58:53'),(6,'INV-002','Kursi Ergonomis','Furniture','Kursi kerja dengan sandaran kepala.','inventory',20,20,'active',NULL,NULL,NULL,'2026-05-22 07:58:53','2026-05-22 07:58:53'),(7,'INV-003','Lemari Arsip Besi','Furniture','Penyimpanan arsip dokumen penting.','inventory',10,10,'active',NULL,NULL,NULL,'2026-05-22 07:58:53','2026-05-22 07:58:53'),(8,'INV-004','Sofa Tamu','Furniture','Kursi tamu untuk ruang tunggu.','inventory',5,5,'inactive',NULL,NULL,NULL,'2026-05-22 07:58:53','2026-05-22 07:58:53');
/*!40000 ALTER TABLE `assets` ENABLE KEYS */;
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
INSERT INTO `cache` VALUES ('simpati-prima-cache-admin_ikpa|127.0.0.1:timer','i:1779441586;',1779441586),('simpati-prima-cache-sss|127.0.0.1','i:1;',1779441580),('simpati-prima-cache-sss|127.0.0.1:timer','i:1779441580;',1779441580);
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
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ikpa_unit_scores`
--

DROP TABLE IF EXISTS `ikpa_unit_scores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ikpa_unit_scores` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `ikpa_unit_id` bigint unsigned NOT NULL,
  `period_month` date NOT NULL,
  `revisi_dipa` tinyint unsigned NOT NULL DEFAULT '0',
  `deviasi_halaman_iii_dipa` tinyint unsigned NOT NULL DEFAULT '0',
  `penyerapan_anggaran` tinyint unsigned NOT NULL DEFAULT '0',
  `belanja_kontraktual` tinyint unsigned NOT NULL DEFAULT '0',
  `penyelesaian_tagihan` tinyint unsigned NOT NULL DEFAULT '0',
  `pengelolaan_up_tup` tinyint unsigned NOT NULL DEFAULT '0',
  `capaian_output` tinyint unsigned NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ikpa_unit_scores_ikpa_unit_id_period_month_unique` (`ikpa_unit_id`,`period_month`),
  CONSTRAINT `ikpa_unit_scores_ikpa_unit_id_foreign` FOREIGN KEY (`ikpa_unit_id`) REFERENCES `ikpa_units` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ikpa_unit_scores`
--

LOCK TABLES `ikpa_unit_scores` WRITE;
/*!40000 ALTER TABLE `ikpa_unit_scores` DISABLE KEYS */;
INSERT INTO `ikpa_unit_scores` VALUES (1,1,'2026-05-01',30,30,30,30,30,30,30,'2026-05-22 09:10:22','2026-05-22 09:10:22'),(2,2,'2026-05-01',60,60,60,60,60,60,60,'2026-05-22 09:10:22','2026-05-22 09:10:22'),(3,3,'2026-05-01',80,80,80,80,80,80,80,'2026-05-22 09:10:22','2026-05-22 09:10:22'),(4,4,'2026-05-01',0,0,0,0,0,0,0,'2026-05-22 09:10:22','2026-05-22 09:10:22'),(5,5,'2026-05-01',0,0,0,0,0,0,0,'2026-05-22 09:10:22','2026-05-22 09:10:22'),(6,6,'2026-05-01',0,0,0,0,0,0,0,'2026-05-22 09:10:22','2026-05-22 09:10:22'),(7,7,'2026-05-01',0,0,0,0,0,0,0,'2026-05-22 09:10:22','2026-05-22 09:10:22'),(8,8,'2026-05-01',0,0,0,0,0,0,0,'2026-05-22 09:10:22','2026-05-22 09:10:22'),(9,9,'2026-05-01',0,0,0,0,0,0,0,'2026-05-22 09:10:22','2026-05-22 09:10:22'),(10,10,'2026-05-01',0,0,0,0,0,0,0,'2026-05-22 09:10:22','2026-05-22 09:10:22'),(11,11,'2026-05-01',0,0,0,0,0,0,0,'2026-05-22 09:10:22','2026-05-22 09:10:22'),(12,12,'2026-05-01',0,0,0,0,0,0,0,'2026-05-22 09:10:22','2026-05-22 09:10:22'),(13,13,'2026-05-01',0,0,0,0,0,0,0,'2026-05-22 09:10:22','2026-05-22 09:10:22'),(14,14,'2026-05-01',0,0,0,0,0,0,0,'2026-05-22 09:10:22','2026-05-22 09:10:22'),(15,15,'2026-05-01',0,0,0,0,0,0,0,'2026-05-22 09:10:22','2026-05-22 09:10:22'),(16,16,'2026-05-01',0,0,0,0,0,0,0,'2026-05-22 09:10:22','2026-05-22 09:10:22'),(17,17,'2026-05-01',0,0,0,0,0,0,0,'2026-05-22 09:10:22','2026-05-22 09:10:22'),(18,18,'2026-05-01',0,0,0,0,0,0,0,'2026-05-22 09:10:22','2026-05-22 09:10:22'),(19,19,'2026-05-01',0,0,0,0,0,0,0,'2026-05-22 09:10:22','2026-05-22 09:10:22'),(20,20,'2026-05-01',100,100,100,100,100,100,100,'2026-05-22 09:10:22','2026-06-22 08:04:01');
/*!40000 ALTER TABLE `ikpa_unit_scores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ikpa_units`
--

DROP TABLE IF EXISTS `ikpa_units`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ikpa_units` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revisi_dipa` tinyint unsigned NOT NULL DEFAULT '0',
  `deviasi_halaman_iii_dipa` tinyint unsigned NOT NULL DEFAULT '0',
  `penyerapan_anggaran` tinyint unsigned NOT NULL DEFAULT '0',
  `belanja_kontraktual` tinyint unsigned NOT NULL DEFAULT '0',
  `penyelesaian_tagihan` tinyint unsigned NOT NULL DEFAULT '0',
  `pengelolaan_up_tup` tinyint unsigned NOT NULL DEFAULT '0',
  `capaian_output` tinyint unsigned NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ikpa_units`
--

LOCK TABLES `ikpa_units` WRITE;
/*!40000 ALTER TABLE `ikpa_units` DISABLE KEYS */;
INSERT INTO `ikpa_units` VALUES (1,'Biro Hukum dan Organisasi',30,30,30,30,30,30,30,'2026-05-22 07:59:16','2026-05-22 08:02:47'),(2,'Biro Umum dan Sumber Daya Manusia',60,60,60,60,60,60,60,'2026-05-22 07:59:16','2026-05-22 08:02:55'),(3,'Biro Perencanaan dan Keuangan',80,80,80,80,80,80,80,'2026-05-22 07:59:16','2026-05-22 08:03:05'),(4,'Biro Fasilitasi Pimpinan, Hubungan Masyarakat, dan Administrasi',0,0,0,0,0,0,0,'2026-05-22 08:03:17','2026-05-22 08:03:17'),(5,'Biro Pengawasan Internal',0,0,0,0,0,0,0,'2026-05-22 08:03:23','2026-05-22 08:03:23'),(6,'Direktorat Hubungan Antar Lembaga dan Kerja Sama',0,0,0,0,0,0,0,'2026-05-22 08:03:29','2026-05-22 08:03:29'),(7,'Direktorat Sosialisasi dan Komunikasi',0,0,0,0,0,0,0,'2026-05-22 08:03:35','2026-05-22 08:03:35'),(8,'Direktorat Jaringan dan Pembudayaan',0,0,0,0,0,0,0,'2026-05-22 08:03:42','2026-05-22 08:03:42'),(9,'Direktorat Analisis dan Penyelarasan',0,0,0,0,0,0,0,'2026-05-22 08:03:49','2026-05-22 08:03:49'),(10,'Direktorat Advokasi',0,0,0,0,0,0,0,'2026-05-22 08:03:54','2026-05-22 08:03:54'),(11,'Direktorat Penyusunan Rekomendasi Kebijakan dan Regulasi',0,0,0,0,0,0,0,'2026-05-22 08:04:02','2026-05-22 08:04:02'),(12,'Direktorat Pengkajian Kebijakan Pembinaan Ideologi Pancasila',0,0,0,0,0,0,0,'2026-05-22 08:04:13','2026-05-22 08:04:13'),(13,'Direktorat Pengkajian Materi Pembinaan Ideologi Pancasila',0,0,0,0,0,0,0,'2026-05-22 08:04:20','2026-05-22 08:04:20'),(14,'Direktorat Pengkajian Implementasi Pembinaan Ideologi Pancasila',0,0,0,0,0,0,0,'2026-05-22 08:04:26','2026-05-22 08:04:26'),(15,'Direktorat Perencanaan Pendidikan dan Pelatihan',0,0,0,0,0,0,0,'2026-05-22 08:04:31','2026-05-22 08:04:31'),(16,'Direktorat Standardisasi dan Kurikulum Pendidikan dan Pelatihan',0,0,0,0,0,0,0,'2026-05-22 08:04:36','2026-05-22 08:04:36'),(17,'Direktorat Pelaksanaan Pendidikan dan Pelatihan',0,0,0,0,0,0,0,'2026-05-22 08:04:41','2026-05-22 08:04:41'),(18,'Direktorat Pengendalian',0,0,0,0,0,0,0,'2026-05-22 08:04:46','2026-05-22 08:04:46'),(19,'Direktorat Evaluasi',0,0,0,0,0,0,0,'2026-05-22 08:04:51','2026-05-22 08:04:51'),(20,'Pusat Data dan Teknologi Informasi',0,0,0,0,0,0,0,'2026-05-22 08:04:57','2026-05-22 08:04:57');
/*!40000 ALTER TABLE `ikpa_units` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `loans`
--

DROP TABLE IF EXISTS `loans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `loans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `batch_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `asset_id` bigint unsigned NOT NULL,
  `borrower_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `borrower_contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activity_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int unsigned NOT NULL,
  `quantity_returned` int unsigned NOT NULL DEFAULT '0',
  `loan_date` date NOT NULL,
  `return_date_planned` date DEFAULT NULL,
  `return_date_actual` date DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'borrowed',
  `notes` text COLLATE utf8mb4_unicode_ci,
  `request_photo_path` text COLLATE utf8mb4_unicode_ci,
  `loan_photo_path` text COLLATE utf8mb4_unicode_ci,
  `return_photo_path` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `loans_asset_id_foreign` (`asset_id`),
  KEY `loans_batch_code_index` (`batch_code`),
  CONSTRAINT `loans_asset_id_foreign` FOREIGN KEY (`asset_id`) REFERENCES `assets` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `loans`
--

LOCK TABLES `loans` WRITE;
/*!40000 ALTER TABLE `loans` DISABLE KEYS */;
INSERT INTO `loans` VALUES (1,'LN-6ZWOL',1,'Bagian Umum','umum@example.com','Biro Perencanaan','Rapat Koordinasi Internal',4,4,'2026-05-12','2026-05-17','2026-05-16','returned','Pengembalian lebih cepat satu hari.',NULL,NULL,NULL,'2026-05-22 07:58:53','2026-05-22 07:58:53'),(2,'LN-RXIDZ',2,'Bagian Humas','humas@example.com','Biro Humas','Sosialisasi Layanan Digital',2,0,'2026-05-19','2026-05-24',NULL,'ongoing','Masih digunakan untuk roadshow.',NULL,NULL,NULL,'2026-05-22 07:58:53','2026-05-22 07:58:53'),(3,'LN-JSTYZ',4,'Bagian Dokumentasi','dok@example.com','Biro Dokumentasi','Peliputan Kegiatan Nasional',1,0,'2026-05-21','2026-05-28',NULL,'approved',NULL,NULL,NULL,NULL,'2026-05-22 07:58:53','2026-05-22 07:58:53');
/*!40000 ALTER TABLE `loans` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2026_05_19_000000_create_ikpa_units_table',1),(2,'0001_01_01_000000_create_users_table',2),(3,'0001_01_01_000001_create_cache_table',2),(4,'0001_01_01_000002_create_jobs_table',2),(5,'2025_09_12_152557_create_assets_table',2),(6,'2025_09_12_152558_create_loans_table',2),(7,'2025_09_13_075637_add_unit_to_loans_table',2),(8,'2025_09_13_165622_add_batch_code_to_loans_table',2),(9,'2025_09_13_201130_add_role_to_users_table',2),(10,'2025_09_13_230000_add_photo_to_users_table',2),(11,'2025_09_22_000001_add_photo_to_assets_table',2),(12,'2025_10_08_000002_add_kind_to_assets_table',2),(13,'2025_11_05_011021_add_quantity_returned_to_loans_table',2),(14,'2025_11_07_000100_add_activity_name_to_loans_table',2),(15,'2025_11_11_110000_add_bast_fields_to_assets_table',2),(16,'2025_11_12_000000_create_site_settings_table',2),(17,'2025_11_13_000500_add_attachment_columns_to_loans_table',2),(18,'2026_03_05_000001_normalize_user_roles_to_three_levels',2),(19,'2026_03_11_092700_change_attachment_columns_to_text_on_loans_table',2),(20,'2026_05_22_000001_create_ikpa_unit_scores_table',3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
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
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `site_settings`
--

DROP TABLE IF EXISTS `site_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `site_settings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `site_settings_key_unique` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `site_settings`
--

LOCK TABLES `site_settings` WRITE;
/*!40000 ALTER TABLE `site_settings` DISABLE KEYS */;
INSERT INTO `site_settings` VALUES (1,'landing_theme','aurora','2026-05-22 07:58:53','2026-05-22 07:58:53'),(2,'landing_video_path',NULL,'2026-05-22 07:58:53','2026-05-22 07:58:53'),(3,'landing_theme_surfaces','{\"surface1\":\"linear-gradient(140deg, #0b1220 0%, #05060a 55%, #020205 100%)\",\"surface2\":\"rgba(12,19,33,0.92)\",\"surface3\":\"rgba(18,35,64,0.65)\",\"accent\":\"#38bdf8\",\"accentSoft\":\"#dbeafe\",\"text_primary\":\"#e2e8f0\",\"text_secondary\":\"rgba(226, 232, 240, 0.75)\"}','2026-05-22 07:58:53','2026-05-22 07:58:53');
/*!40000 ALTER TABLE `site_settings` ENABLE KEYS */;
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
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'petugas',
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'daeng','daeng@example.com',NULL,'$2y$12$ugs79upMOaGNrpM/vYEVN.n2pDvRbUShCSRm5LamHLoqFeJ/Vxyg6','super_admin',NULL,NULL,'2026-05-22 07:58:52','2026-05-22 07:58:52'),(2,'admin_ikpa','admin_ikpa@example.com',NULL,'$2y$12$T8spEl5Q35tJ3xwt2hr5Oue1I5udjFGZ42lTlxL4yf0Bx2C3GUBrq','super_admin',NULL,NULL,'2026-05-22 07:58:52','2026-05-22 07:58:52'),(3,'naufal','naufal@example.com',NULL,'$2y$12$Ezq3tlZUlrNwAKD3/jT38uHmMAdoLL.g7iimoii7UGcWdOkhjk4xi','petugas',NULL,NULL,'2026-05-22 07:58:52','2026-05-22 07:58:52'),(4,'wahyu','wahyu@example.com',NULL,'$2y$12$rO49M0uA0PpnFjlByJWWQ.IASAdbFe6QGipRxkzqbQYPG2TNgK.my','petugas',NULL,NULL,'2026-05-22 07:58:53','2026-05-22 07:58:53'),(5,'pegawai','pegawai@example.com',NULL,'$2y$12$73fq5ioudH6RsfV0UMnPi.ka7IVZqnEUoi9JxqfeXFOHiBFmC5/xW','peminjam',NULL,NULL,'2026-05-22 07:58:53','2026-05-22 07:58:53');
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

-- Dump completed on 2026-06-22 21:24:29
