
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customers` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `registration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `progress` int(11) NOT NULL DEFAULT 0,
  `status` enum('pending','progress','done') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'progress',
  `order_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `done_date` date DEFAULT NULL,
  `service_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_type_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `customers_registration_unique` (`registration`),
  KEY `customers_service_id_foreign` (`service_id`),
  KEY `customers_service_type_id_foreign` (`service_type_id`),
  CONSTRAINT `customers_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `customers_service_type_id_foreign` FOREIGN KEY (`service_type_id`) REFERENCES `service_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` VALUES ('996e7789-3c34-404c-b5be-d63820e61dc6','2023-06-17 17:21:49','2023-07-14 23:58:00','PBU-wk6MR2',NULL,'Azizah Awal','Limbung','mahasiswi','6554565464',40,'progress','2023-06-17',NULL,'996d39e6-9baa-4d2c-b2d3-b0b29b48b9b7','996a4ef1-399a-4bff-9ee7-94fe4b99c350'),('996e77b6-8293-4d09-b3cb-71a905530ff9','2023-06-17 17:22:19','2023-06-17 17:22:19','PBU-j2XLZT',NULL,'Sobariah','Paccinonggang','mahasiswi','4645644',0,'progress','2023-06-17',NULL,'996d3a3d-e9de-4ebf-a3e5-a7f656eda78b','996a4ef1-399a-4bff-9ee7-94fe4b99c350'),('99a28c27-4196-4073-af36-8b314807438d','2023-07-12 23:42:31','2023-07-13 00:02:33','PBU-ouKk1m',NULL,'ranti','rr','rr','rr',0,'progress','2023-07-13',NULL,'996a4ef1-417f-4aca-b2d9-15220269a28d','996a4ef1-399a-4bff-9ee7-94fe4b99c350'),('99a28e88-2412-4112-b4cd-f47a0fe05279','2023-07-12 23:49:10','2023-07-12 23:49:10','KHPg-dxtjaQ',NULL,'Inayah','Sudiang','mahasiswi','342234',0,'progress','2023-07-13',NULL,'996a4ef1-4953-4c6d-9e6d-2badb8c07ca8','996a4ef1-3ba7-4058-8762-5d069982ae14'),('99a28eb5-c442-48c2-a6d0-6e1b0bfb50a0','2023-07-12 23:49:40','2023-07-19 19:22:38','KHPh-oBFRIu',NULL,'Evi rahma','samata2','mahasiswi2','2244',33,'progress','2023-07-13',NULL,'996e69ee-ff4b-47f6-a236-78f0d644ed83','996a4ef1-3ac1-40c5-8288-552871c8d978'),('99a294c7-976e-44b1-8900-8f28289f6a1d','2023-07-13 00:06:38','2023-07-13 00:07:28','KHPh-hhnSMi',NULL,'tyanti','dgfg','gdfh','3243',33,'progress','2023-07-13',NULL,'996e69ee-ff4b-47f6-a236-78f0d644ed83','996a4ef1-3ac1-40c5-8288-552871c8d978'),('99a68d0d-39cd-4e54-a643-404216910ef0','2023-07-14 23:28:21','2023-07-18 00:12:25','KHPg-UUINQg',NULL,'cena','Tanjung','Tdk ada','3434435',100,'done','2023-07-15','2023-07-18','996a4ef1-4953-4c6d-9e6d-2badb8c07ca8','996a4ef1-3ba7-4058-8762-5d069982ae14'),('99a68d7e-b3b3-48d1-a11b-5b604bab4cca','2023-07-14 23:29:35','2023-07-14 23:29:35','KHPg-8pcruS',NULL,'Cipa','Tanjung','dfsfs','54353',0,'progress','2023-07-15',NULL,'996a4ef1-4953-4c6d-9e6d-2badb8c07ca8','996a4ef1-3ba7-4058-8762-5d069982ae14'),('99a68f43-1ea1-48a7-98fe-42c21c8ca355','2023-07-14 23:34:31','2023-07-14 23:34:31','KHPh-Yx9JPx',NULL,'anti','Bontolangkasa','dfdfdf','+6282399535262',0,'progress','2023-07-15',NULL,'996e69ee-ff4b-47f6-a236-78f0d644ed83','996a4ef1-3ac1-40c5-8288-552871c8d978'),('99a68f71-f865-4c35-80c4-9c6ae19a01e2','2023-07-14 23:35:02','2023-07-14 23:35:02','PBU-muJBWV',NULL,'yanti','fds','dfs','34242',0,'progress','2023-07-15',NULL,'996d3add-2a12-40d7-85ae-9d33bd106f65','996a4ef1-399a-4bff-9ee7-94fe4b99c350'),('99a69063-700b-4df4-ba6b-8ce0e0331531','2023-07-14 23:37:40','2023-07-14 23:37:40','KHPh-PVWOwY',NULL,'milaa','Samata','mahasiswi','0823-9953-5262',0,'progress','2023-07-15',NULL,'996e69ee-ff4b-47f6-a236-78f0d644ed83','996a4ef1-3ac1-40c5-8288-552871c8d978'),('99a69331-37e7-424f-bd19-a617cef172a9','2023-07-14 23:45:30','2023-07-14 23:45:30','KHPh-xQgqZw',NULL,'Siti Nurmianti2','Bontolangkasa','mahasiswi','+6282399535262',0,'progress','2023-07-15',NULL,'996e69ee-ff4b-47f6-a236-78f0d644ed83','996a4ef1-3ac1-40c5-8288-552871c8d978');
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `files`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `files` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `day_estimate` int(11) NOT NULL,
  `user_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `files_user_id_foreign` (`user_id`),
  CONSTRAINT `files_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `files` WRITE;
/*!40000 ALTER TABLE `files` DISABLE KEYS */;
INSERT INTO `files` VALUES ('996a4ef1-3d2b-425a-a604-67d652a6b7aa','2023-06-15 15:45:00','2023-06-18 17:12:29','NPWP Perusahaan','Kantor Pajak',7,'996a4ef1-370c-4b67-bbb6-031bd234bd6c'),('996a4ef1-3e90-4c2e-a481-688ebdac6bf8','2023-06-15 15:45:00','2023-06-17 02:21:13','BPJS Ketenagakerjaan','Kantor BPJS',14,'996a4ef1-370c-4b67-bbb6-031bd234bd6c'),('996a4ef1-3f92-4471-9288-a692cfba80fd','2023-06-15 15:45:00','2023-06-18 17:12:45','SK MENKUMHAM','Kantor Hukum',24,'996a4ef1-370c-4b67-bbb6-031bd234bd6c'),('996a50f3-24d2-4274-a9f3-c4a1cdbe71ac','2023-06-15 15:50:36','2023-06-17 02:21:39','SIUP (Surat Izin Usaha)','Kantor',3,'996a4fd1-371a-4f32-994a-5079ad3e38d6'),('996d349d-e54a-43c7-8d2b-c92f5f23f565','2023-06-17 02:18:52','2023-06-18 17:12:57','Akta Pendirian','Kantor',5,'996a4ef1-370c-4b67-bbb6-031bd234bd6c'),('996d3527-e051-4939-9abe-39ca3e5f3b67','2023-06-17 02:20:22','2023-06-17 02:20:22','NIB','Kantor',14,'996a4ef1-387f-48dc-9c74-93828ce3f1a8'),('996d3547-68c8-42e8-b5a6-7dbbbed444a3','2023-06-17 02:20:43','2023-06-17 02:20:43','SKDP (Surat Izin Domisili)','Kantor',2,'996a4fd1-371a-4f32-994a-5079ad3e38d6'),('996d3605-d645-42ae-bfc1-7b681e6eeb5b','2023-06-17 02:22:48','2023-06-17 02:22:48','NPWP','Kantor',20,'996a4ef1-387f-48dc-9c74-93828ce3f1a8'),('996d3631-6ee0-4f27-87cf-eee73ed08d0f','2023-06-17 02:23:16','2023-06-17 02:23:16','NPWP Yayasan','Kantor',5,'996a4ef1-387f-48dc-9c74-93828ce3f1a8'),('996d3651-b980-45ff-9890-ef035c147441','2023-06-17 02:23:38','2023-06-17 02:23:38','Izin Operasional','Kantor',3,'996a4fd1-371a-4f32-994a-5079ad3e38d6'),('996d3670-3c27-4429-8b1c-716138feb0aa','2023-06-17 02:23:58','2023-06-18 17:13:35','Izin Usaha','Kantor',5,'996a4ef1-370c-4b67-bbb6-031bd234bd6c'),('996d369b-e5a9-4a8c-aab2-2fcd5ddbab90','2023-06-17 02:24:26','2023-06-17 02:24:26','Izin Usaha Jasa Konstruksi','Kantor',5,'996a4fd1-371a-4f32-994a-5079ad3e38d6'),('996d36c8-d3f4-4117-87f9-599a8f385d1c','2023-06-17 02:24:56','2023-06-18 17:13:17','SBU (Sertifikat Badan usaha)','Kantor',5,'996a4ef1-370c-4b67-bbb6-031bd234bd6c'),('996d36f2-69ad-4529-ab58-3fd21c62bcfb','2023-06-17 02:25:23','2023-06-17 02:25:23','SKA/SKT','Kantor',4,'996a4ef1-370c-4b67-bbb6-031bd234bd6c'),('996d372c-b19b-4a21-8070-3ed68def6643','2023-06-17 02:26:01','2023-06-18 17:13:45','Akta Perubahan','Kantor',4,'996a4ef1-370c-4b67-bbb6-031bd234bd6c'),('996d380e-4178-42af-82e0-f72b3b3f8498','2023-06-17 02:28:29','2023-06-17 02:28:29','TDUP (Tanda Daftar Usaha Pariwisata)','Kantor',3,'996a4ef1-370c-4b67-bbb6-031bd234bd6c'),('996d3833-f138-49b3-b18f-8092e9d68bac','2023-06-17 02:28:54','2023-06-17 02:28:54','IUJK (Izin usaha jasa Konstruksi)','Kantor',7,'996a4ef1-370c-4b67-bbb6-031bd234bd6c');
/*!40000 ALTER TABLE `files` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_roles_table',1),(2,'2014_10_12_000000_create_users_table',1),(3,'2014_10_12_100000_create_password_resets_table',1),(4,'2019_08_19_000000_create_failed_jobs_table',1),(5,'2019_12_14_000001_create_personal_access_tokens_table',1),(6,'2023_05_26_111343_create_service_types_table',1),(7,'2023_05_26_111850_create_files_table',1),(8,'2023_05_26_112407_create_services_table',1),(9,'2023_05_26_112459_create_customers_table',1),(10,'2023_05_26_113541_create_reports_table',1),(11,'2023_05_26_120205_create_service_file_table',1),(12,'2023_06_01_032929_create_submissions_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `reports`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reports` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `registration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_date` date NOT NULL,
  `done_date` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `registration` (`registration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `reports` WRITE;
/*!40000 ALTER TABLE `reports` DISABLE KEYS */;
INSERT INTO `reports` VALUES ('99aca538-fc70-4555-bb85-32a920a95e97','2023-07-18 00:10:54','2023-07-18 00:10:54','KHPg-UUINQg','cena','Tanjung','Tdk ada','3434435','Surat Perjanjian','Keperluan Hukum Perorangan','2023-07-15','2023-07-18');
/*!40000 ALTER TABLE `reports` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `position` varchar(56) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES ('996a4ef1-23e2-4124-ada3-0039dbb544c8','2023-06-15 15:45:00','2023-06-15 15:45:00','administrator'),('996a4ef1-2a58-4c13-a44c-f8d54c6d296a','2023-06-15 15:45:00','2023-06-15 15:45:00','person_responsible');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `service_file`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `service_file` (
  `service_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  KEY `service_file_service_id_foreign` (`service_id`),
  KEY `service_file_file_id_foreign` (`file_id`),
  CONSTRAINT `service_file_file_id_foreign` FOREIGN KEY (`file_id`) REFERENCES `files` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `service_file_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `service_file` WRITE;
/*!40000 ALTER TABLE `service_file` DISABLE KEYS */;
INSERT INTO `service_file` VALUES ('996a4ef1-4953-4c6d-9e6d-2badb8c07ca8','996a4ef1-3f92-4471-9288-a692cfba80fd'),('996a4ef1-417f-4aca-b2d9-15220269a28d','996a4ef1-3e90-4c2e-a481-688ebdac6bf8'),('996a4ef1-417f-4aca-b2d9-15220269a28d','996a4ef1-3f92-4471-9288-a692cfba80fd'),('996a4ef1-417f-4aca-b2d9-15220269a28d','996a50f3-24d2-4274-a9f3-c4a1cdbe71ac'),('996d3939-4155-490e-9ff7-982b368b614e','996a4ef1-3d2b-425a-a604-67d652a6b7aa'),('996d3939-4155-490e-9ff7-982b368b614e','996a4ef1-3e90-4c2e-a481-688ebdac6bf8'),('996d3939-4155-490e-9ff7-982b368b614e','996a4ef1-3f92-4471-9288-a692cfba80fd'),('996d3939-4155-490e-9ff7-982b368b614e','996a50f3-24d2-4274-a9f3-c4a1cdbe71ac'),('996d3939-4155-490e-9ff7-982b368b614e','996d349d-e54a-43c7-8d2b-c92f5f23f565'),('996d3939-4155-490e-9ff7-982b368b614e','996d3527-e051-4939-9abe-39ca3e5f3b67'),('996d3939-4155-490e-9ff7-982b368b614e','996d3547-68c8-42e8-b5a6-7dbbbed444a3'),('996a4ef1-417f-4aca-b2d9-15220269a28d','996d349d-e54a-43c7-8d2b-c92f5f23f565'),('996a4ef1-417f-4aca-b2d9-15220269a28d','996d3527-e051-4939-9abe-39ca3e5f3b67'),('996a4ef1-417f-4aca-b2d9-15220269a28d','996d3547-68c8-42e8-b5a6-7dbbbed444a3'),('996a4ef1-417f-4aca-b2d9-15220269a28d','996d3605-d645-42ae-bfc1-7b681e6eeb5b'),('996d39e6-9baa-4d2c-b2d3-b0b29b48b9b7','996a4ef1-3f92-4471-9288-a692cfba80fd'),('996d39e6-9baa-4d2c-b2d3-b0b29b48b9b7','996d349d-e54a-43c7-8d2b-c92f5f23f565'),('996d39e6-9baa-4d2c-b2d3-b0b29b48b9b7','996d3527-e051-4939-9abe-39ca3e5f3b67'),('996d39e6-9baa-4d2c-b2d3-b0b29b48b9b7','996d3547-68c8-42e8-b5a6-7dbbbed444a3'),('996d39e6-9baa-4d2c-b2d3-b0b29b48b9b7','996d3631-6ee0-4f27-87cf-eee73ed08d0f'),('996d3a3d-e9de-4ebf-a3e5-a7f656eda78b','996a4ef1-3f92-4471-9288-a692cfba80fd'),('996d3a3d-e9de-4ebf-a3e5-a7f656eda78b','996d349d-e54a-43c7-8d2b-c92f5f23f565'),('996d3a3d-e9de-4ebf-a3e5-a7f656eda78b','996d3527-e051-4939-9abe-39ca3e5f3b67'),('996d3a3d-e9de-4ebf-a3e5-a7f656eda78b','996d3605-d645-42ae-bfc1-7b681e6eeb5b'),('996d3add-2a12-40d7-85ae-9d33bd106f65','996a4ef1-3d2b-425a-a604-67d652a6b7aa'),('996d3add-2a12-40d7-85ae-9d33bd106f65','996a4ef1-3e90-4c2e-a481-688ebdac6bf8'),('996d3add-2a12-40d7-85ae-9d33bd106f65','996a4ef1-3f92-4471-9288-a692cfba80fd'),('996d3add-2a12-40d7-85ae-9d33bd106f65','996d349d-e54a-43c7-8d2b-c92f5f23f565'),('996d3add-2a12-40d7-85ae-9d33bd106f65','996d3527-e051-4939-9abe-39ca3e5f3b67'),('996d3add-2a12-40d7-85ae-9d33bd106f65','996d3547-68c8-42e8-b5a6-7dbbbed444a3'),('996d3add-2a12-40d7-85ae-9d33bd106f65','996d369b-e5a9-4a8c-aab2-2fcd5ddbab90'),('996d3add-2a12-40d7-85ae-9d33bd106f65','996d36c8-d3f4-4117-87f9-599a8f385d1c'),('996d3add-2a12-40d7-85ae-9d33bd106f65','996d36f2-69ad-4529-ab58-3fd21c62bcfb'),('996e69ee-ff4b-47f6-a236-78f0d644ed83','996d36c8-d3f4-4117-87f9-599a8f385d1c'),('996e69ee-ff4b-47f6-a236-78f0d644ed83','996d380e-4178-42af-82e0-f72b3b3f8498'),('996e69ee-ff4b-47f6-a236-78f0d644ed83','996d3833-f138-49b3-b18f-8092e9d68bac');
/*!40000 ALTER TABLE `service_file` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `service_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `service_types` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `service_types_code_unique` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `service_types` WRITE;
/*!40000 ALTER TABLE `service_types` DISABLE KEYS */;
INSERT INTO `service_types` VALUES ('996a4ef1-399a-4bff-9ee7-94fe4b99c350','2023-06-15 15:45:00','2023-06-15 15:45:00','PBU','Pendirian Badan Hukum'),('996a4ef1-3ac1-40c5-8288-552871c8d978','2023-06-15 15:45:00','2023-06-15 15:45:00','KHPh','Keperluan Hukum Perusahaan'),('996a4ef1-3ba7-4058-8762-5d069982ae14','2023-06-15 15:45:00','2023-06-15 15:45:00','KHPg','Keperluan Hukum Perorangan');
/*!40000 ALTER TABLE `service_types` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `services` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` int(11) NOT NULL,
  `service_type_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `services_service_type_id_foreign` (`service_type_id`),
  CONSTRAINT `services_service_type_id_foreign` FOREIGN KEY (`service_type_id`) REFERENCES `service_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES ('996a4ef1-417f-4aca-b2d9-15220269a28d','2023-06-15 15:45:00','2023-06-17 02:32:42','Pendirian StartUp',10500000,'996a4ef1-399a-4bff-9ee7-94fe4b99c350'),('996a4ef1-4953-4c6d-9e6d-2badb8c07ca8','2023-06-15 15:45:00','2023-06-15 15:45:00','Surat Perjanjian',200000,'996a4ef1-3ba7-4058-8762-5d069982ae14'),('996d3939-4155-490e-9ff7-982b368b614e','2023-06-17 02:31:45','2023-06-17 02:31:45','Pendirian PT',9000000,'996a4ef1-399a-4bff-9ee7-94fe4b99c350'),('996d39e6-9baa-4d2c-b2d3-b0b29b48b9b7','2023-06-17 02:33:39','2023-06-17 02:33:39','Pendirian Yayasan',7500000,'996a4ef1-399a-4bff-9ee7-94fe4b99c350'),('996d3a3d-e9de-4ebf-a3e5-a7f656eda78b','2023-06-17 02:34:36','2023-06-17 02:34:36','Pendirian Firma',7000000,'996a4ef1-399a-4bff-9ee7-94fe4b99c350'),('996d3add-2a12-40d7-85ae-9d33bd106f65','2023-06-17 02:36:20','2023-06-17 17:21:05','Pendirian Konstruksi / Konsultan PT',10000000,'996a4ef1-399a-4bff-9ee7-94fe4b99c350'),('996e69ee-ff4b-47f6-a236-78f0d644ed83','2023-06-17 16:43:47','2023-06-17 16:43:47','Perizinan',333,'996a4ef1-3ac1-40c5-8288-552871c8d978');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `submissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `submissions` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `proof` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('pending','progress','done') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `done` date DEFAULT NULL,
  `information` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `submissions_file_id_foreign` (`file_id`),
  KEY `submissions_customer_id_foreign` (`customer_id`),
  CONSTRAINT `submissions_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `submissions_file_id_foreign` FOREIGN KEY (`file_id`) REFERENCES `files` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `submissions` WRITE;
/*!40000 ALTER TABLE `submissions` DISABLE KEYS */;
INSERT INTO `submissions` VALUES ('996e7789-45c7-4de7-a839-24c27990f9a5','2023-06-17 17:21:49','2023-07-14 23:58:00','administrator/996e7789-45c7-4de7-a839-24c27990f9a5/RVS1Lb5fYPZae29O77O0Rdlaw2tWNLEkyy4W3Bqb.png','done','2023-06-17',NULL,'Berkas telah di daftarkan pada loket','996a4ef1-3f92-4471-9288-a692cfba80fd','996e7789-3c34-404c-b5be-d63820e61dc6'),('996e7789-46ae-475f-a628-f3207d0f91da','2023-06-17 17:21:49','2023-07-13 00:52:37','administrator/996e7789-46ae-475f-a628-f3207d0f91da/QyllBg9NhtIuwDiQYVwW7FtqVwvjSHBDea7Kbe0X.png','done','2023-06-17','2023-06-19','selesai','996d349d-e54a-43c7-8d2b-c92f5f23f565','996e7789-3c34-404c-b5be-d63820e61dc6'),('996e7789-47af-41d7-8a2e-8f3111b648f5','2023-06-17 17:21:49','2023-06-17 17:21:49',NULL,'pending','2023-06-17',NULL,NULL,'996d3527-e051-4939-9abe-39ca3e5f3b67','996e7789-3c34-404c-b5be-d63820e61dc6'),('996e7789-48b2-4f6d-b820-bc3b8c253ff8','2023-06-17 17:21:49','2023-06-17 17:21:49',NULL,'pending','2023-06-17',NULL,NULL,'996d3547-68c8-42e8-b5a6-7dbbbed444a3','996e7789-3c34-404c-b5be-d63820e61dc6'),('996e7789-49be-4a71-a3e2-24c739a874de','2023-06-17 17:21:49','2023-06-17 17:21:49',NULL,'pending','2023-06-17',NULL,NULL,'996d3631-6ee0-4f27-87cf-eee73ed08d0f','996e7789-3c34-404c-b5be-d63820e61dc6'),('996e77b6-8cc7-40c7-9c0a-61025bdffd7a','2023-06-17 17:22:19','2023-07-09 15:10:10','administrator/996e77b6-8cc7-40c7-9c0a-61025bdffd7a/hO2The6YLVgseyVi4V1msM6TvkymmO7FFAANa6td.png','progress','2023-06-17',NULL,NULL,'996a4ef1-3f92-4471-9288-a692cfba80fd','996e77b6-8293-4d09-b3cb-71a905530ff9'),('996e77b6-8dcd-423d-9808-31d07ea26583','2023-06-17 17:22:19','2023-07-09 14:59:40','administrator/996e77b6-8dcd-423d-9808-31d07ea26583/U8HadvCi3WKBYF73F5lXtIlkaMrTteYQmzYlevLw.png','pending','2023-06-17',NULL,NULL,'996d349d-e54a-43c7-8d2b-c92f5f23f565','996e77b6-8293-4d09-b3cb-71a905530ff9'),('996e77b6-8ed7-4729-bd86-3619d53d3bfd','2023-06-17 17:22:19','2023-07-09 15:00:04','administrator/996e77b6-8ed7-4729-bd86-3619d53d3bfd/6mLPpr6vmpLfzQcUUfvUd0CSN27FZG8STV0Ds795.png','pending','2023-06-17',NULL,NULL,'996d3527-e051-4939-9abe-39ca3e5f3b67','996e77b6-8293-4d09-b3cb-71a905530ff9'),('996e77b6-8fe4-41ca-89cc-72ce98d62ea1','2023-06-17 17:22:19','2023-07-09 15:09:25','administrator/996e77b6-8fe4-41ca-89cc-72ce98d62ea1/oYZV274D4la5J54Fp7hxsdAbkLG652Y3E2EjArXg.png','pending','2023-06-17',NULL,NULL,'996d3605-d645-42ae-bfc1-7b681e6eeb5b','996e77b6-8293-4d09-b3cb-71a905530ff9'),('99a28c27-4d84-4813-851b-ca17bd98d874','2023-07-12 23:42:31','2023-07-13 00:02:57','administrator/99a28c27-4d84-4813-851b-ca17bd98d874/v8koeMO7zCsqAb5ZSrTrBQsdlr85ekKDKVEyg0wf.jpg','progress','2023-07-13',NULL,'tes','996a4ef1-3e90-4c2e-a481-688ebdac6bf8','99a28c27-4196-4073-af36-8b314807438d'),('99a28c27-4e83-4cc1-af2b-e59a98235059','2023-07-12 23:42:31','2023-07-12 23:42:31',NULL,'pending','2023-07-13',NULL,NULL,'996a4ef1-3f92-4471-9288-a692cfba80fd','99a28c27-4196-4073-af36-8b314807438d'),('99a28c27-4f34-46f4-a9ab-dcd69e1f78bb','2023-07-12 23:42:31','2023-07-12 23:42:31',NULL,'pending','2023-07-13',NULL,NULL,'996a50f3-24d2-4274-a9f3-c4a1cdbe71ac','99a28c27-4196-4073-af36-8b314807438d'),('99a28c27-502a-4323-a650-a40c37eb925e','2023-07-12 23:42:31','2023-07-12 23:42:31',NULL,'pending','2023-07-13',NULL,NULL,'996d349d-e54a-43c7-8d2b-c92f5f23f565','99a28c27-4196-4073-af36-8b314807438d'),('99a28c27-5141-41c2-a1e0-39494f2eaeb8','2023-07-12 23:42:31','2023-07-12 23:42:31',NULL,'pending','2023-07-13',NULL,NULL,'996d3527-e051-4939-9abe-39ca3e5f3b67','99a28c27-4196-4073-af36-8b314807438d'),('99a28c27-5260-4cb9-9810-178ae79e733c','2023-07-12 23:42:31','2023-07-12 23:42:31',NULL,'pending','2023-07-13',NULL,NULL,'996d3547-68c8-42e8-b5a6-7dbbbed444a3','99a28c27-4196-4073-af36-8b314807438d'),('99a28c27-5434-4073-b676-978d570c70a6','2023-07-12 23:42:31','2023-07-12 23:42:31',NULL,'pending','2023-07-13',NULL,NULL,'996d3605-d645-42ae-bfc1-7b681e6eeb5b','99a28c27-4196-4073-af36-8b314807438d'),('99a28e88-3001-4144-b8f4-377344fb2b57','2023-07-12 23:49:10','2023-07-12 23:49:10',NULL,'pending','2023-07-13',NULL,NULL,'996a4ef1-3f92-4471-9288-a692cfba80fd','99a28e88-2412-4112-b4cd-f47a0fe05279'),('99a28eb5-cffd-4ca4-b8ca-890f5f5df981','2023-07-12 23:49:40','2023-07-19 19:22:38','administrator/99a28eb5-cffd-4ca4-b8ca-890f5f5df981/WhJhRJ9RqGgYfPOWckvKRsKIgIsfoojVHRJ8GuwR.png','done','2023-07-13',NULL,'d','996d36c8-d3f4-4117-87f9-599a8f385d1c','99a28eb5-c442-48c2-a6d0-6e1b0bfb50a0'),('99a28eb5-d103-4933-bfe5-6c5e4dddcbb6','2023-07-12 23:49:40','2023-07-19 19:22:12','administrator/99a28eb5-d103-4933-bfe5-6c5e4dddcbb6/aH6C141ji1vP6KPGp8JYbk5r2J5Eq2cpLKDVVmNC.jpg','progress','2023-07-13',NULL,NULL,'996d380e-4178-42af-82e0-f72b3b3f8498','99a28eb5-c442-48c2-a6d0-6e1b0bfb50a0'),('99a28eb5-d308-42a3-b3f5-1f6a832f3fac','2023-07-12 23:49:40','2023-07-12 23:49:40',NULL,'pending','2023-07-13',NULL,NULL,'996d3833-f138-49b3-b18f-8092e9d68bac','99a28eb5-c442-48c2-a6d0-6e1b0bfb50a0'),('99a294c7-a51c-430c-85c1-1f0d6c3bfef4','2023-07-13 00:06:38','2023-07-13 00:07:28','administrator/99a294c7-a51c-430c-85c1-1f0d6c3bfef4/uXiTH5ZFXGZndZwwqutaUwsO0Q9FwZLalBKYYP4S.jpg','done','2023-07-13',NULL,'erwt','996d36c8-d3f4-4117-87f9-599a8f385d1c','99a294c7-976e-44b1-8900-8f28289f6a1d'),('99a294c7-a687-49b1-a0e4-e54b8cf4fdbf','2023-07-13 00:06:38','2023-07-13 00:06:38',NULL,'pending','2023-07-13',NULL,NULL,'996d380e-4178-42af-82e0-f72b3b3f8498','99a294c7-976e-44b1-8900-8f28289f6a1d'),('99a294c7-a85b-461c-8300-b9262a74b93e','2023-07-13 00:06:38','2023-07-13 00:06:38',NULL,'pending','2023-07-13',NULL,NULL,'996d3833-f138-49b3-b18f-8092e9d68bac','99a294c7-976e-44b1-8900-8f28289f6a1d'),('99a68d0e-17c0-4faa-a0b0-1a55d104eecc','2023-07-14 23:28:21','2023-07-18 00:12:25','administrator/99a68d0e-17c0-4faa-a0b0-1a55d104eecc/4oNlLGRa6644j729Vp2ErXR5h98J23CcVTsBeTMU.jpg','done','2023-07-15','2023-07-31','DD','996a4ef1-3f92-4471-9288-a692cfba80fd','99a68d0d-39cd-4e54-a643-404216910ef0'),('99a68d7e-bf54-43a9-8564-064aa28052b8','2023-07-14 23:29:35','2023-07-14 23:29:35',NULL,'pending','2023-07-15',NULL,NULL,'996a4ef1-3f92-4471-9288-a692cfba80fd','99a68d7e-b3b3-48d1-a11b-5b604bab4cca'),('99a68f43-28bb-4603-9568-5aab45c6b735','2023-07-14 23:34:31','2023-07-14 23:34:31',NULL,'pending','2023-07-15',NULL,NULL,'996d36c8-d3f4-4117-87f9-599a8f385d1c','99a68f43-1ea1-48a7-98fe-42c21c8ca355'),('99a68f43-298b-40ff-97e8-614d7cf4055a','2023-07-14 23:34:31','2023-07-14 23:34:31',NULL,'pending','2023-07-15',NULL,NULL,'996d380e-4178-42af-82e0-f72b3b3f8498','99a68f43-1ea1-48a7-98fe-42c21c8ca355'),('99a68f43-2ac8-4105-8112-9958272ef77b','2023-07-14 23:34:31','2023-07-14 23:34:31',NULL,'pending','2023-07-15',NULL,NULL,'996d3833-f138-49b3-b18f-8092e9d68bac','99a68f43-1ea1-48a7-98fe-42c21c8ca355'),('99a68f72-03c7-44d2-bdf3-d344e9b25fa4','2023-07-14 23:35:02','2023-07-14 23:35:02',NULL,'pending','2023-07-15',NULL,NULL,'996a4ef1-3d2b-425a-a604-67d652a6b7aa','99a68f71-f865-4c35-80c4-9c6ae19a01e2'),('99a68f72-04ac-4b56-a1eb-97f35a0fae32','2023-07-14 23:35:02','2023-07-14 23:35:02',NULL,'pending','2023-07-15',NULL,NULL,'996a4ef1-3e90-4c2e-a481-688ebdac6bf8','99a68f71-f865-4c35-80c4-9c6ae19a01e2'),('99a68f72-0581-40c1-9233-05afb8109f5d','2023-07-14 23:35:02','2023-07-14 23:35:02',NULL,'pending','2023-07-15',NULL,NULL,'996a4ef1-3f92-4471-9288-a692cfba80fd','99a68f71-f865-4c35-80c4-9c6ae19a01e2'),('99a68f72-064e-413c-9c48-60f3a02d99e4','2023-07-14 23:35:02','2023-07-14 23:35:02',NULL,'pending','2023-07-15',NULL,NULL,'996d349d-e54a-43c7-8d2b-c92f5f23f565','99a68f71-f865-4c35-80c4-9c6ae19a01e2'),('99a68f72-0723-42cc-ab99-e4976dcae9e4','2023-07-14 23:35:02','2023-07-14 23:35:02',NULL,'pending','2023-07-15',NULL,NULL,'996d3527-e051-4939-9abe-39ca3e5f3b67','99a68f71-f865-4c35-80c4-9c6ae19a01e2'),('99a68f72-080f-41bb-bb68-d347bb5d5bb1','2023-07-14 23:35:02','2023-07-14 23:35:02',NULL,'pending','2023-07-15',NULL,NULL,'996d3547-68c8-42e8-b5a6-7dbbbed444a3','99a68f71-f865-4c35-80c4-9c6ae19a01e2'),('99a68f72-09f2-42b4-b4f8-64ac2585bbd9','2023-07-14 23:35:02','2023-07-14 23:35:02',NULL,'pending','2023-07-15',NULL,NULL,'996d369b-e5a9-4a8c-aab2-2fcd5ddbab90','99a68f71-f865-4c35-80c4-9c6ae19a01e2'),('99a68f72-0aef-4a29-b2b7-e3362a70d623','2023-07-14 23:35:02','2023-07-14 23:35:02',NULL,'pending','2023-07-15',NULL,NULL,'996d36c8-d3f4-4117-87f9-599a8f385d1c','99a68f71-f865-4c35-80c4-9c6ae19a01e2'),('99a68f72-0bff-4d3b-a1f6-029283cefce2','2023-07-14 23:35:02','2023-07-14 23:35:02',NULL,'pending','2023-07-15',NULL,NULL,'996d36f2-69ad-4529-ab58-3fd21c62bcfb','99a68f71-f865-4c35-80c4-9c6ae19a01e2'),('99a69063-7de0-4dee-bf3b-9c5b0af9ab49','2023-07-14 23:37:40','2023-07-14 23:37:40',NULL,'pending','2023-07-15',NULL,NULL,'996d36c8-d3f4-4117-87f9-599a8f385d1c','99a69063-700b-4df4-ba6b-8ce0e0331531'),('99a69063-7f90-4b3a-86c7-0de38d89b831','2023-07-14 23:37:40','2023-07-14 23:37:40',NULL,'pending','2023-07-15',NULL,NULL,'996d380e-4178-42af-82e0-f72b3b3f8498','99a69063-700b-4df4-ba6b-8ce0e0331531'),('99a69063-808f-47c4-8d5c-92ed8c8d7a7f','2023-07-14 23:37:40','2023-07-14 23:37:40',NULL,'pending','2023-07-15',NULL,NULL,'996d3833-f138-49b3-b18f-8092e9d68bac','99a69063-700b-4df4-ba6b-8ce0e0331531'),('99a69331-4050-410b-a5ef-ec0e019b6a15','2023-07-14 23:45:30','2023-07-14 23:45:30',NULL,'pending','2023-07-15',NULL,NULL,'996d36c8-d3f4-4117-87f9-599a8f385d1c','99a69331-37e7-424f-bd19-a617cef172a9'),('99a69331-4122-425b-bfee-2e10670dc697','2023-07-14 23:45:30','2023-07-14 23:45:30',NULL,'pending','2023-07-15',NULL,NULL,'996d380e-4178-42af-82e0-f72b3b3f8498','99a69331-37e7-424f-bd19-a617cef172a9'),('99a69331-4219-46df-ba1a-872ef2c56699','2023-07-14 23:45:30','2023-07-14 23:45:30',NULL,'pending','2023-07-15',NULL,NULL,'996d3833-f138-49b3-b18f-8092e9d68bac','99a69331-37e7-424f-bd19-a617cef172a9');
/*!40000 ALTER TABLE `submissions` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_name_unique` (`name`),
  UNIQUE KEY `users_telp_unique` (`telp`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_id_foreign` (`role_id`),
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('996a4ef1-3486-4051-8e74-7cfa1d008de0','administrator/996a4ef1-3486-4051-8e74-7cfa1d008de0/RA1e4yDKREovjwUwnb4tUbOpecD21gq9rN2FPPAL.jpg','admin','Siti Nurmianti','082399535262','Sitinurmianti@gmail.com','Bontolangkasa','2014-01-18','2023-06-15 15:45:00','admin','jXawAwgmdrty0Ev7UuGTm6J5QyyxgSsPvW1ZqZ1puYHi3qLfHjW3GvRFrG81','2023-06-15 15:45:00','2023-07-17 23:50:11','996a4ef1-23e2-4124-ada3-0039dbb544c8'),('996a4ef1-370c-4b67-bbb6-031bd234bd6c','administrator/996a4ef1-370c-4b67-bbb6-031bd234bd6c/x62hwRDkbHDLIqWbHHvDhzNr4Afy9OHNDg177XzC.jpg','pj_2','Nurmilayanti','1-351-296-8983','ubeier@walker.com','Samata','1997-10-20','2023-06-15 15:45:00','pj_2','rP0LqgHRCAqk9Zircfef8Y7fEBIMtIKL1B7eazCFoQwV6oMNVlQh23nNQQLE','2023-06-15 15:45:00','2023-07-09 16:06:23','996a4ef1-2a58-4c13-a44c-f8d54c6d296a'),('996a4ef1-387f-48dc-9c74-93828ce3f1a8',NULL,'pj_3','Azizah','(724) 509-5439','Azizah@gmail.com','Limbung','1982-01-08','2023-06-15 15:45:00','pj_3','pPhdf8UMXjrOt9P6hX151azIVPc57Qqedbm4tvlC7VV59LWy9nFVhvgsgKve','2023-06-15 15:45:00','2023-07-17 23:53:48','996a4ef1-2a58-4c13-a44c-f8d54c6d296a'),('996a4fd1-371a-4f32-994a-5079ad3e38d6',NULL,'pj_4','Sobariah','0876374637','Sobariah@gmail.com','Bontolangkasa','2023-02-03',NULL,'22222',NULL,'2023-06-15 15:47:26','2023-06-22 13:09:56','996a4ef1-2a58-4c13-a44c-f8d54c6d296a'),('99c0665c-c2d7-4263-b42d-dc879b93caeb',NULL,'indira','Indira paradiba','2422','Sitinurmianti4599@gmail.com','Bontolangkasa','2023-07-18',NULL,'123',NULL,'2023-07-27 19:51:41','2023-07-27 19:51:41','996a4ef1-2a58-4c13-a44c-f8d54c6d296a');
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

