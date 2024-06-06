-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: viaduct.proxy.rlwy.net    Database: railway
-- ------------------------------------------------------
-- Server version	8.4.0

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
-- Table structure for table `codificaciones`
--

DROP TABLE IF EXISTS `codificaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `codificaciones` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `codificacion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `codificaciones`
--

LOCK TABLES `codificaciones` WRITE;
/*!40000 ALTER TABLE `codificaciones` DISABLE KEYS */;
INSERT INTO `codificaciones` VALUES (1,'Retenido','2024-05-27 15:58:03','2024-05-27 15:58:03'),(2,'No retenido - Precio','2024-05-27 15:58:03','2024-05-27 15:58:03'),(3,'No retenido - Cobertura','2024-05-27 15:58:03','2024-05-27 15:58:03'),(4,'No retenido - Compromiso','2024-05-27 15:58:03','2024-05-27 15:58:03'),(5,'No retenido - Averias','2024-05-27 15:58:03','2024-05-27 15:58:03');
/*!40000 ALTER TABLE `codificaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `descuentos`
--

DROP TABLE IF EXISTS `descuentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `descuentos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tipo` enum('porcentaje','entero') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'entero',
  `descuento` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `importe` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `descuentos`
--

LOCK TABLES `descuentos` WRITE;
/*!40000 ALTER TABLE `descuentos` DISABLE KEYS */;
INSERT INTO `descuentos` VALUES (1,'entero','5 €',5.00,'2024-05-27 15:58:03','2024-05-27 15:58:03'),(2,'entero','10 €',10.00,'2024-05-27 15:58:03','2024-05-27 15:58:03'),(3,'porcentaje','10 %',0.10,'2024-05-27 15:58:03','2024-05-27 15:58:03'),(4,'porcentaje','20 %',0.20,'2024-05-27 15:58:03','2024-05-27 15:58:03'),(5,'porcentaje','30 %',0.30,'2024-05-27 15:58:03','2024-05-27 15:58:03'),(6,'porcentaje','40 %',0.40,'2024-05-27 15:58:03','2024-05-27 15:58:03'),(7,'porcentaje','50 %',0.50,'2024-05-27 15:58:03','2024-05-27 15:58:03');
/*!40000 ALTER TABLE `descuentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `marcas`
--

DROP TABLE IF EXISTS `marcas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `marcas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `marca` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `marcas`
--

LOCK TABLES `marcas` WRITE;
/*!40000 ALTER TABLE `marcas` DISABLE KEYS */;
INSERT INTO `marcas` VALUES (1,'YOIGO','2024-05-27 15:58:03','2024-05-27 15:58:03'),(2,'MASMOVIL','2024-05-27 15:58:03','2024-05-27 15:58:03'),(3,'MOVISTAR','2024-05-27 16:08:35','2024-05-27 16:08:35'),(4,'VODAFONE','2024-05-28 11:25:34','2024-05-28 11:25:34'),(5,'ORANGE','2024-06-01 21:22:46','2024-06-01 21:22:46'),(6,'JAZZTEL','2024-06-01 21:23:07','2024-06-01 21:23:07');
/*!40000 ALTER TABLE `marcas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2014_10_12_100000_create_password_resets_table',1),(4,'2019_08_19_000000_create_failed_jobs_table',1),(5,'2019_12_14_000001_create_personal_access_tokens_table',1),(6,'2024_04_24_174936_create_codificaciones_table',1),(7,'2024_04_24_174945_create_tipos_table',1),(8,'2024_04_24_174954_create_marcas_table',1),(9,'2024_04_24_175102_create_productos_table',1),(10,'2024_04_24_175114_create_descuentos_table',1),(11,'2024_04_24_175251_create_puestos_table',1),(12,'2024_04_24_180915_create_registros_table',1),(13,'2024_05_27_160519_create_permission_tables',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_permissions`
--

LOCK TABLES `model_has_permissions` WRITE;
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_roles`
--

LOCK TABLES `model_has_roles` WRITE;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` VALUES (1,'App\\Models\\User',1);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
INSERT INTO `password_reset_tokens` VALUES ('juan@juan.com','$2y$12$7rPKMNKTMnPymmXbeKAfduKRsTf40yDrIPn3aIOzNdbJJu6fEbmde','2024-05-28 15:47:44');
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'admin','web','2024-05-27 15:58:03','2024-05-27 15:58:03');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `productos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_marca` bigint unsigned NOT NULL,
  `id_tipo` bigint unsigned NOT NULL,
  `producto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `productos_id_marca_foreign` (`id_marca`),
  KEY `productos_id_tipo_foreign` (`id_tipo`),
  CONSTRAINT `productos_id_marca_foreign` FOREIGN KEY (`id_marca`) REFERENCES `marcas` (`id`),
  CONSTRAINT `productos_id_tipo_foreign` FOREIGN KEY (`id_tipo`) REFERENCES `tipos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (1,1,1,'Ti',14.00,'2024-05-27 15:58:03','2024-05-27 15:58:03'),(2,1,1,'Ti + 500 MB',32.00,'2024-05-27 15:58:03','2024-05-27 15:58:03'),(3,1,1,'Ti + 1 GB',47.00,'2024-05-27 15:58:03','2024-05-27 15:58:03'),(4,1,2,'20 GB',13.00,'2024-05-27 15:58:03','2024-05-27 15:58:03'),(5,1,2,'45 GB',17.00,'2024-05-27 15:58:03','2024-05-27 15:58:03'),(6,1,2,'Infinita GB',27.00,'2024-05-27 15:58:03','2024-05-27 15:58:03'),(7,1,4,'Linea Duo',9.00,'2024-05-27 15:58:03','2024-05-27 15:58:03'),(8,1,4,'La sinfín 500 MB',6.00,'2024-05-27 15:58:03','2024-05-27 15:58:03'),(9,1,4,'La sinfín 20 GB',9.00,'2024-05-27 15:58:03','2024-05-27 15:58:03'),(10,1,3,'TV EXTRA',5.00,'2024-05-27 15:58:03','2024-05-27 15:58:03'),(11,1,3,'TV PREMIUN',11.00,'2024-05-27 15:58:03','2024-05-27 15:58:03'),(12,2,1,'Ti',12.90,'2024-05-27 15:58:03','2024-05-27 15:58:03'),(13,2,1,'Ti + 500 MB',31.99,'2024-05-27 15:58:03','2024-05-27 15:58:03'),(14,2,1,'Ti + 1 GB',41.99,'2024-05-27 15:58:03','2024-05-27 15:58:03'),(15,2,2,'MOVIL 48 GB',8.00,'2024-05-27 15:58:03','2024-05-27 15:58:03'),(16,2,2,'MOVIL 55 GB',10.00,'2024-05-27 15:58:03','2024-05-27 15:58:03'),(17,2,2,'MOVIL 105 GB',15.00,'2024-05-27 15:58:03','2024-05-27 15:58:03'),(18,2,4,'compartida',3.00,'2024-05-27 15:58:03','2024-05-27 15:58:03'),(19,2,4,'adicional 10gb',5.00,'2024-05-27 15:58:03','2024-05-27 15:58:03'),(20,2,4,'adicional 30 gb',10.00,'2024-05-27 15:58:03','2024-05-27 15:58:03'),(21,2,3,'TV PREMIUM',6.00,'2024-05-27 15:58:03','2024-05-27 15:58:03'),(22,2,3,'TV PREMIUM EXTRA',12.00,'2024-05-27 15:58:03','2024-05-27 15:58:03'),(23,1,5,'La sinfín 25 GB',16.00,'2024-05-27 15:58:03','2024-05-27 15:58:03'),(24,1,5,'La sinfín 55 GB',26.00,'2024-05-27 15:58:03','2024-05-27 15:58:03'),(25,1,5,'La sinfín INFINITA GB',35.00,'2024-05-27 15:58:03','2024-05-27 15:58:03'),(26,1,5,'La sinfín 500 MB',6.00,'2024-05-27 15:58:03','2024-05-27 15:58:03'),(27,2,5,'movil 20 gb',9.90,'2024-05-27 15:58:03','2024-05-27 15:58:03'),(28,2,5,'movil 30 gb',14.90,'2024-05-27 15:58:03','2024-05-27 15:58:03'),(29,2,5,'movil 70 gb',19.90,'2024-05-27 15:58:03','2024-05-27 15:58:03'),(30,3,1,'Ti + 300 MB',31.90,'2024-06-02 16:06:18','2024-06-02 16:06:26'),(31,3,1,'Ti + 600 MB',35.90,'2024-06-02 16:06:18','2024-06-02 16:06:26'),(32,3,1,'Ti + 1 GB',45.90,'2024-06-02 16:06:18','2024-06-02 16:06:26'),(33,3,5,'MOVIL 20 GB',16.95,'2024-06-02 16:06:18','2024-06-02 16:06:26'),(34,3,5,'MOVIL 50 GB',27.95,'2024-06-02 16:06:18','2024-06-02 16:06:26'),(35,3,5,'ILIMITADA GB',36.95,'2024-06-02 16:06:18','2024-06-02 16:06:26'),(36,3,4,'ILIMITADA 20 GB',7.90,'2024-06-02 16:06:18','2024-06-02 16:06:26'),(37,3,4,'ILIMITADA 50 GB',15.90,'2024-06-02 16:06:18','2024-06-02 16:06:26'),(38,3,4,'ILIMITADA GB',20.90,'2024-06-02 16:06:18','2024-06-02 16:06:26'),(39,3,2,'2 LINEAS 35 GB',17.00,'2024-06-02 16:06:18','2024-06-02 16:06:26'),(40,3,2,'2 LINEAS 105 GB',24.00,'2024-06-02 16:06:18','2024-06-02 16:06:26'),(41,3,3,'MOVISTAR PLUS',12.00,'2024-06-02 16:06:18','2024-06-02 16:06:26'),(42,3,3,'MOVISTAR PLUS NETFLIX',26.00,'2024-06-02 16:06:18','2024-06-02 16:06:26'),(43,3,3,'MOVISTAR PLUS NETFLIX PREMIUM',31.00,'2024-06-02 16:06:18','2024-06-02 16:06:26'),(44,4,1,'Ti + 300 MB',27.00,'2024-06-02 16:06:18','2024-06-02 16:06:26'),(45,4,1,'Ti + 600 MB',31.80,'2024-06-02 16:06:18','2024-06-02 16:06:26'),(46,4,1,'Ti + 1 GB',36.20,'2024-06-02 16:06:18','2024-06-02 16:06:26'),(47,4,5,'MOVIL 30 GB',15.00,'2024-06-02 16:06:18','2024-06-02 16:06:26'),(48,4,5,'ILIMITADA GB',26.10,'2024-06-02 16:06:18','2024-06-02 16:06:26'),(49,4,4,'ILIMITADA GB',11.90,'2024-06-02 16:06:18','2024-06-02 16:06:26'),(50,4,2,'MOVIL 50 GB',13.00,'2024-06-02 16:06:18','2024-06-02 16:06:26'),(51,4,2,'ILIMITADA GB',20.40,'2024-06-02 16:06:18','2024-06-02 16:06:26'),(52,4,3,'MAX',10.00,'2024-06-02 16:06:18','2024-06-02 16:06:26'),(53,4,3,'MAX + PRIME',14.00,'2024-06-02 16:06:18','2024-06-02 16:06:26'),(54,4,3,'DISNEY',10.00,'2024-06-02 16:06:18','2024-06-02 16:06:26'),(55,4,3,'DISNEY + PRIME',15.00,'2024-06-02 16:06:18','2024-06-02 16:06:26'),(56,5,1,'TI + 500 MB',33.00,'2024-06-02 16:06:18','2024-06-02 16:06:26'),(57,5,3,'TI + 1 GB',45.00,'2024-06-02 16:06:18','2024-06-02 16:06:26'),(58,5,2,'ILIMITADA GB',15.00,'2024-06-02 16:06:18','2024-06-02 16:06:26'),(59,5,3,'TV 60',10.00,'2024-06-02 16:06:18','2024-06-02 16:06:26'),(60,5,3,'TV 90',15.00,'2024-06-02 16:06:18','2024-06-02 16:06:26'),(61,5,3,'TV 90 + FUTBOL',25.00,'2024-06-02 16:06:18','2024-06-02 16:06:26'),(62,5,4,'ILIMITADA GB',10.00,'2024-06-02 16:06:18','2024-06-02 16:06:26'),(63,5,5,'FLEX 100 GB',15.00,'2024-06-02 16:06:18','2024-06-02 16:06:26'),(64,5,5,'FLEX 300 GB',26.00,'2024-06-02 16:06:18','2024-06-02 16:06:26'),(65,5,5,'ILIMITADA GB',50.00,'2024-06-02 16:06:18','2024-06-02 16:06:26'),(66,6,1,'TF',15.00,'2024-06-02 16:06:18','2024-06-02 16:06:26'),(67,6,1,'TF + NET 1',20.00,'2024-06-02 16:06:18','2024-06-02 16:06:26'),(68,6,1,'TF + NET 2',25.00,'2024-06-02 16:06:18','2024-06-02 16:06:26'),(69,6,1,'TF + NET 3',30.00,'2024-06-02 16:06:18','2024-06-02 16:06:26'),(70,6,1,'TF + NET 4',35.00,'2024-06-02 16:06:18','2024-06-02 16:06:26'),(71,6,2,'CONVERGENTE 1',10.00,'2024-06-02 16:06:18','2024-06-02 16:06:26'),(72,6,2,'CONVERGENTE 2',15.00,'2024-06-02 16:06:18','2024-06-02 16:06:26'),(73,6,2,'CONVERGENTE 3',20.00,'2024-06-02 16:06:18','2024-06-02 16:06:26'),(74,6,2,'CONVERGENTE 4',25.00,'2024-06-02 16:06:18','2024-06-02 16:06:26'),(75,6,3,'TV 1',5.00,'2024-06-02 16:06:18','2024-06-02 16:06:26'),(76,6,3,'TV 2',10.00,'2024-06-02 16:06:18','2024-06-02 16:06:26'),(77,6,3,'TV 3',15.00,'2024-06-02 16:06:18','2024-06-02 16:06:26'),(78,6,3,'TV 4',20.00,'2024-06-02 16:06:18','2024-06-02 16:06:26'),(79,6,4,'ADICIONAL 1',5.00,'2024-06-02 16:06:18','2024-06-02 16:06:26'),(80,6,4,'ADICIONAL 2',10.00,'2024-06-02 16:06:18','2024-06-02 16:06:26'),(81,6,4,'ADICIONAL 3',15.00,'2024-06-02 16:06:18','2024-06-02 16:06:26'),(82,6,4,'ADICIONAL 4',20.00,'2024-06-02 16:06:18','2024-06-02 16:06:26'),(83,6,4,'ADICIONAL 5',25.00,'2024-06-02 16:06:18','2024-06-02 16:06:26'),(84,6,5,'MOVIL 1',5.00,'2024-06-02 16:06:18','2024-06-02 16:06:26'),(85,6,5,'MOVIL 2',10.00,'2024-06-02 16:06:18','2024-06-02 16:06:26'),(86,6,5,'MOVIL 3',15.00,'2024-06-02 16:06:18','2024-06-02 16:06:26'),(87,6,5,'MOVIL 4',20.00,'2024-06-02 16:06:18','2024-06-02 16:06:26'),(88,6,5,'MOVIL 5',25.00,'2024-06-02 16:06:18','2024-06-02 16:06:26');
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `registros`
--

DROP TABLE IF EXISTS `registros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `registros` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `DNI` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `impuesto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_net` int DEFAULT NULL,
  `id_convergente` int DEFAULT NULL,
  `id_tv` int DEFAULT NULL,
  `id_descuento` int DEFAULT NULL,
  `id_adicional_1` int DEFAULT NULL,
  `id_adicional_2` int DEFAULT NULL,
  `id_adicional_3` int DEFAULT NULL,
  `id_adicional_4` int DEFAULT NULL,
  `id_adicional_5` int DEFAULT NULL,
  `cantidad_adicional_1` int DEFAULT NULL,
  `cantidad_adicional_2` int DEFAULT NULL,
  `cantidad_adicional_3` int DEFAULT NULL,
  `cantidad_adicional_4` int DEFAULT NULL,
  `cantidad_adicional_5` int DEFAULT NULL,
  `id_movil_1` int DEFAULT NULL,
  `id_movil_2` int DEFAULT NULL,
  `id_movil_3` int DEFAULT NULL,
  `id_movil_4` int DEFAULT NULL,
  `id_movil_5` int DEFAULT NULL,
  `cantidad_movil_1` int DEFAULT NULL,
  `cantidad_movil_2` int DEFAULT NULL,
  `cantidad_movil_3` int DEFAULT NULL,
  `cantidad_movil_4` int DEFAULT NULL,
  `cantidad_movil_5` int DEFAULT NULL,
  `descuento_movil_1` int DEFAULT NULL,
  `descuento_movil_2` int DEFAULT NULL,
  `descuento_movil_3` int DEFAULT NULL,
  `descuento_movil_4` int DEFAULT NULL,
  `descuento_movil_5` int DEFAULT NULL,
  `pvp` double(8,2) DEFAULT NULL,
  `codificacion` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `observaciones` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_codificacion` int DEFAULT NULL,
  `id_user` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registros`
--

LOCK TABLES `registros` WRITE;
/*!40000 ALTER TABLE `registros` DISABLE KEYS */;
INSERT INTO `registros` VALUES (1,'48357260J',NULL,'IVA',2,NULL,NULL,NULL,7,8,9,NULL,NULL,0,0,0,NULL,NULL,23,24,25,26,NULL,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,32.00,'El fijo es Ti + 500 MB total a pagar 32.00\r\n Codificacion: Retenido','aa',1,1,'2024-05-27 16:43:02','2024-05-27 16:43:02'),(2,'48357260J',NULL,'IVA',13,NULL,NULL,NULL,18,19,20,NULL,NULL,0,0,0,NULL,NULL,27,28,29,NULL,NULL,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,31.99,'El fijo es Ti + 500 MB total a pagar 31.99\r\n Codificacion: Retenido','sdsdsd',1,1,'2024-05-27 16:43:22','2024-05-27 16:43:22'),(3,'48357260J',NULL,'IVA',13,NULL,NULL,NULL,18,19,20,NULL,NULL,0,0,0,NULL,NULL,27,28,29,NULL,NULL,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,31.99,'El fijo es Ti + 500 MB total a pagar 31.99\r\n Codificacion: Retenido',NULL,1,1,'2024-05-27 16:48:08','2024-05-27 16:48:08'),(4,'48357260J',NULL,'IVA',13,NULL,NULL,NULL,18,19,20,NULL,NULL,0,0,0,NULL,NULL,27,28,29,NULL,NULL,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,31.99,'El fijo es Ti + 500 MB total a pagar 31.99\r\n Codificacion: Retenido',NULL,1,1,'2024-05-27 16:50:53','2024-05-27 16:50:53'),(5,'48357260J',NULL,'IVA',2,NULL,NULL,NULL,7,8,9,NULL,NULL,0,0,0,NULL,NULL,23,24,25,26,NULL,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,32.00,'El fijo es Ti + 500 MB total a pagar 32.00\r\n Codificacion: Retenido',NULL,1,1,'2024-05-28 09:13:04','2024-05-28 09:13:04'),(6,'48357260j',NULL,'IVA',2,NULL,NULL,NULL,7,8,9,NULL,NULL,0,0,0,NULL,NULL,23,24,25,26,NULL,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,32.00,'El fijo es Ti + 500 MB total a pagar 32.00\r\n Codificacion: Retenido',NULL,1,1,'2024-05-28 09:17:57','2024-05-28 09:17:57'),(7,'48357260J',NULL,'IVA',2,NULL,NULL,NULL,7,8,9,NULL,NULL,0,0,0,NULL,NULL,23,24,25,26,NULL,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,32.00,'El fijo es Ti + 500 MB total a pagar 32.00\r\n Codificacion: Retenido',NULL,1,1,'2024-05-28 09:25:08','2024-05-28 09:25:08'),(8,'48357260J',NULL,'IVA',2,NULL,NULL,NULL,7,8,9,NULL,NULL,0,0,0,NULL,NULL,23,24,25,26,NULL,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,32.00,'El fijo es Ti + 500 MB total a pagar 32.00\r\n Codificacion: Retenido',NULL,1,1,'2024-05-28 09:25:35','2024-05-28 09:25:35'),(9,'4855',NULL,'IVA',2,NULL,NULL,NULL,7,8,9,NULL,NULL,0,0,0,NULL,NULL,23,24,25,26,NULL,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,32.00,'El fijo es Ti + 500 MB total a pagar 32.00\r\n Codificacion: Retenido',NULL,1,1,'2024-05-28 09:59:37','2024-05-28 09:59:37'),(10,'4835726',NULL,'IVA',2,NULL,NULL,NULL,7,8,9,NULL,NULL,0,0,0,NULL,NULL,23,24,25,26,NULL,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,32.00,'El fijo es Ti + 500 MB total a pagar 32.00\r\n Codificacion: Retenido',NULL,1,1,'2024-05-28 11:13:00','2024-05-28 11:13:00'),(11,'sdfsfsf',NULL,'IVA',2,NULL,NULL,NULL,7,8,9,NULL,NULL,0,0,0,NULL,NULL,23,24,25,26,NULL,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,32.00,'El fijo es Ti + 500 MB total a pagar 32.00\r\n Codificacion: Retenido',NULL,1,1,'2024-05-28 12:12:25','2024-05-28 12:12:25'),(12,'qwqw',NULL,'IVA',1,NULL,NULL,NULL,7,8,9,NULL,NULL,NULL,NULL,NULL,NULL,NULL,23,24,25,26,NULL,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,14.00,'El fijo es Ti total a pagar 14.00\r\n Codificacion: Retenido',NULL,1,1,'2024-05-28 14:11:28','2024-05-28 14:11:28'),(13,'48357',NULL,'IVA',2,NULL,NULL,NULL,7,8,9,NULL,NULL,0,0,0,NULL,NULL,23,24,25,26,NULL,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,32.00,'El fijo es Ti + 500 MB total a pagar 32.00\r\n Codificacion: Retenido',NULL,1,1,'2024-05-28 14:33:15','2024-05-28 14:33:15'),(14,'48357260J',NULL,'IVA',NULL,NULL,NULL,NULL,7,8,9,NULL,NULL,0,0,0,NULL,NULL,23,24,25,26,NULL,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,0.00,'total a pagar 0.00\r\n Codificacion: Retenido',NULL,1,1,'2024-05-28 15:23:41','2024-05-28 15:23:41'),(15,'48357260J','666666666','IVA',2,NULL,NULL,NULL,7,8,9,NULL,NULL,0,0,0,NULL,NULL,23,24,25,26,NULL,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,32.00,'El fijo es Ti + 500 MB total a pagar 32.00\r\n Codificacion: Retenido',NULL,1,1,'2024-05-28 15:29:06','2024-05-28 15:29:06'),(16,'48357260J',NULL,'IVA',NULL,NULL,NULL,NULL,7,8,9,NULL,NULL,0,0,0,NULL,NULL,23,24,25,26,NULL,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,0.00,'total a pagar 0.00\r\n Codificacion: No retenido - Precio',NULL,2,1,'2024-05-28 15:46:48','2024-05-28 15:46:48'),(17,'48357260J',NULL,'IVA',2,NULL,NULL,NULL,7,8,9,NULL,NULL,0,0,0,NULL,NULL,23,24,25,26,NULL,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,32.00,'El fijo es Ti + 500 MB total a pagar 32.00\r\n Codificacion: Retenido',NULL,1,1,'2024-05-28 20:18:08','2024-05-28 20:18:08'),(18,'48357260J',NULL,'IVA',2,NULL,NULL,NULL,7,8,9,NULL,NULL,0,0,0,NULL,NULL,23,24,25,26,NULL,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,32.00,'El fijo es Ti + 500 MB total a pagar 32.00\r\n Codificacion: Retenido',NULL,1,1,'2024-05-28 20:32:25','2024-05-28 20:32:25'),(19,'48357260J',NULL,'IVA',2,NULL,NULL,NULL,7,8,9,NULL,NULL,0,0,0,NULL,NULL,23,24,25,26,NULL,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,32.00,'El fijo es Ti + 500 MB total a pagar 32.00\r\n Codificacion: Retenido',NULL,1,1,'2024-05-28 20:42:27','2024-05-28 20:42:27'),(20,'48357260J',NULL,'IVA',2,NULL,NULL,NULL,7,8,9,NULL,NULL,0,0,0,NULL,NULL,23,24,25,26,NULL,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,32.00,'El fijo es Ti + 500 MB total a pagar 32.00\r\n Codificacion: Retenido',NULL,1,1,'2024-05-28 20:43:19','2024-05-28 20:43:19'),(21,'48357260J',NULL,'IVA',2,NULL,NULL,NULL,7,8,9,NULL,NULL,0,0,0,NULL,NULL,23,24,25,26,NULL,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,32.00,'El fijo es Ti + 500 MB total a pagar 32.00\r\n Codificacion: Retenido',NULL,1,1,'2024-05-28 20:50:29','2024-05-28 20:50:29'),(22,'48357260J',NULL,'IVA',2,NULL,NULL,NULL,7,8,9,NULL,NULL,0,0,0,NULL,NULL,23,24,25,26,NULL,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,32.00,'El fijo es Ti + 500 MB total a pagar 32.00\r\n Codificacion: Retenido',NULL,1,1,'2024-06-01 10:45:35','2024-06-01 10:45:35'),(23,'48357260J',NULL,'IVA',2,NULL,NULL,NULL,7,8,9,NULL,NULL,0,0,0,NULL,NULL,23,24,25,26,NULL,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,32.00,'El fijo es Ti + 500 MB total a pagar 32.00\r\n Codificacion: Retenido',NULL,1,1,'2024-06-01 10:57:33','2024-06-01 10:57:33'),(24,'48357260J',NULL,'IVA',2,NULL,NULL,NULL,7,8,9,NULL,NULL,0,0,0,NULL,NULL,23,24,25,26,NULL,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,32.00,'El fijo es Ti + 500 MB total a pagar 32.00\r\n Codificacion: Retenido',NULL,1,1,'2024-06-01 11:06:42','2024-06-01 11:06:42'),(25,'48357260J',NULL,'IVA',2,NULL,NULL,NULL,7,8,9,NULL,NULL,0,0,0,NULL,NULL,23,24,25,26,NULL,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,32.00,'El fijo es Ti + 500 MB total a pagar 32.00\r\n Codificacion: Retenido',NULL,1,1,'2024-06-01 11:08:04','2024-06-01 11:08:04'),(26,'48357260J',NULL,'IVA',13,NULL,NULL,NULL,18,19,20,NULL,NULL,0,0,0,NULL,NULL,27,28,29,NULL,NULL,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,31.99,'El fijo es Ti + 500 MB total a pagar 31.99\r\n Codificacion: Retenido',NULL,1,1,'2024-06-01 21:04:53','2024-06-01 21:04:53'),(27,'Ggf',NULL,'IVA',13,NULL,NULL,NULL,18,19,20,NULL,NULL,0,0,0,NULL,NULL,27,28,29,NULL,NULL,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,31.99,'El fijo es Ti + 500 MB total a pagar 31.99',NULL,0,1,'2024-06-01 21:22:00','2024-06-01 21:22:00'),(28,NULL,NULL,'IPSI Melilla',3,5,11,7,7,8,9,NULL,NULL,1,1,1,NULL,NULL,23,24,25,26,NULL,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,55.91,'El fijo es Ti + 1 GB 45 GB TV PREMIUN descuento de 50 %\r\n adicional  1 Linea Duo 1 La sinfín 500 MB 1 La sinfín 20 GB total a pagar 55.91\r\n Codificacion: Retenido','prueba',1,2,'2024-06-02 10:30:31','2024-06-02 10:30:31'),(29,'48357',NULL,'IPSI Melilla',3,5,11,7,7,8,9,NULL,NULL,1,1,1,NULL,NULL,23,24,25,26,NULL,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,55.91,'El fijo es Ti + 1 GB 45 GB TV PREMIUN descuento de 50 %\r\n adicional  1 Linea Duo 1 La sinfín 500 MB 1 La sinfín 20 GB total a pagar 55.91\r\n Codificacion: Retenido','prueba',1,2,'2024-06-02 10:30:47','2024-06-02 10:30:47'),(30,'48357','666666666','IVA',NULL,NULL,NULL,NULL,7,8,9,NULL,NULL,0,0,0,NULL,NULL,23,24,25,26,NULL,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,0.00,'total a pagar 0.00',NULL,0,2,'2024-06-02 10:33:28','2024-06-02 10:33:28'),(31,'48357','666666666','IVA',2,NULL,NULL,NULL,7,8,9,NULL,NULL,0,0,0,NULL,NULL,23,24,25,26,NULL,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,32.00,'El fijo es Ti + 500 MB total a pagar 32.00\r\n Codificacion: No retenido - Precio',NULL,2,1,'2024-06-02 10:50:24','2024-06-02 10:50:24'),(32,NULL,'1','IVA',NULL,NULL,NULL,NULL,7,8,9,NULL,NULL,0,0,0,NULL,NULL,23,24,25,26,NULL,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,0.00,'total a pagar 0.00',NULL,0,1,'2024-06-02 11:01:48','2024-06-02 11:01:48'),(33,'48357',NULL,'IVA',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0.00,'total a pagar 0.00',NULL,0,1,'2024-06-02 11:04:47','2024-06-02 11:04:47'),(34,'48357',NULL,'IVA',2,NULL,NULL,NULL,7,8,9,NULL,NULL,0,0,0,NULL,NULL,23,24,25,26,NULL,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,32.00,'El fijo es Ti + 500 MB total a pagar 32.00',NULL,0,1,'2024-06-02 11:11:29','2024-06-02 11:11:29'),(35,'48357',NULL,'IVA',2,NULL,NULL,NULL,7,8,9,NULL,NULL,0,0,0,NULL,NULL,23,24,25,26,NULL,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,32.00,'El fijo es Ti + 500 MB total a pagar 32.00',NULL,0,1,'2024-06-02 13:12:32','2024-06-02 13:12:32'),(36,'48357','666666666','IVA',2,NULL,NULL,NULL,7,8,9,NULL,NULL,0,0,0,NULL,NULL,23,24,25,26,NULL,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,32.00,'Identificador: 48357\r\nTelefono: 666666666\r\nEl fijo es Ti + 500 MB total a pagar 32.00',NULL,0,1,'2024-06-02 13:27:03','2024-06-02 13:27:03'),(37,'48357','666666666','IVA',2,NULL,NULL,NULL,7,8,9,NULL,NULL,2,0,0,NULL,NULL,23,24,25,26,NULL,2,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,82.00,'Identificador: 48357\r\nTelefono: 666666666\r\nEl fijo es Ti + 500 MB\r\n adicional  2 Linea Duo\r\n movil  2 La sinfín 25 GB  con descuento % total a pagar 82.00','dsadasda',0,1,'2024-06-02 13:31:30','2024-06-02 13:31:30'),(38,'123456789','666666666','IVA',2,4,10,7,7,8,9,NULL,NULL,2,2,2,NULL,NULL,23,24,25,26,NULL,2,2,1,1,NULL,3,3,3,3,NULL,185.50,'Identificador: 123456789\r\nTelefono: 666666666\r\nEl fijo es Ti + 500 MB 20 GB TV EXTRA descuento de 50 %\r\n adicional  2 Linea Duo 2 La sinfín 500 MB 2 La sinfín 20 GB\r\n movil  2 La sinfín 25 GB  con descuento 10 % 2 La sinfín 55 GB  con descuento 10 % 1 La sinfín INFINITA GB  con descuento 10 % 1 La sinfín 500 MB  con descuento 10 % total a pagar 185.50\r\n Codificacion: Retenido','cliente con todo',1,2,'2024-06-02 19:10:48','2024-06-02 19:10:48'),(39,'1234','6666','IVA',2,NULL,NULL,NULL,7,8,9,NULL,NULL,0,0,0,NULL,NULL,23,24,25,26,NULL,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,32.00,'Identificador: 1234\r\nTelefono: 6666\r\nEl fijo es Ti + 500 MB total a pagar 32.00\r\n Codificacion: Retenido',NULL,1,2,'2024-06-02 19:15:54','2024-06-02 19:15:54'),(40,'48357','666666666','IVA',2,5,10,NULL,7,8,9,NULL,NULL,2,0,0,NULL,NULL,23,24,25,26,NULL,2,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,104.00,'Identificador: 48357\r\nTelefono: 666666666\r\nEl fijo es Ti + 500 MB 45 GB TV EXTRA\r\n adicional  2 Linea Duo\r\n movil  2 La sinfín 25 GB  con descuento % total a pagar 104.00 con IVA \r\n Codificacion: Retenido',NULL,1,1,'2024-06-03 19:45:09','2024-06-03 19:45:09'),(41,NULL,NULL,'IVA',2,5,NULL,NULL,7,8,9,NULL,NULL,1,1,1,NULL,NULL,23,24,25,26,NULL,1,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,89.00,'Identificador: \r\nTelefono: \r\nEl fijo es Ti + 500 MB 45 GB\r\n adicional  1 Linea Duo 1 La sinfín 500 MB 1 La sinfín 20 GB\r\n movil  1 La sinfín 25 GB  con descuento % total a pagar 89.00 con IVA \r\n Codificacion: Retenido',NULL,1,1,'2024-06-03 19:46:51','2024-06-03 19:46:51'),(42,'48357',NULL,'IVA',2,5,NULL,NULL,7,8,9,NULL,NULL,1,1,1,NULL,NULL,23,24,25,26,NULL,1,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,89.00,'Identificador: 48357\r\nTelefono: \r\nEl fijo es Ti + 500 MB 45 GB\r\n adicional  1 Linea Duo 1 La sinfín 500 MB 1 La sinfín 20 GB\r\n movil  1 La sinfín 25 GB  con descuento % total a pagar 89.00 con IVA \r\n Codificacion: Retenido',NULL,1,1,'2024-06-03 19:47:03','2024-06-03 19:47:03'),(43,'48357','666666666','IVA',2,4,10,3,7,8,9,NULL,NULL,1,2,1,NULL,NULL,23,24,25,26,NULL,1,1,1,0,NULL,NULL,NULL,NULL,NULL,NULL,152.00,NULL,'vendido',1,1,'2024-06-05 23:00:56','2024-06-05 23:00:56'),(44,'48357','666666666','IVA',2,4,10,3,7,8,9,NULL,NULL,1,2,2,NULL,NULL,23,24,25,26,NULL,1,1,1,0,NULL,NULL,NULL,NULL,NULL,NULL,161.00,NULL,'vendido',1,1,'2024-06-05 23:01:27','2024-06-05 23:01:27'),(45,'48357',NULL,'IVA',2,NULL,NULL,NULL,7,8,9,NULL,NULL,0,0,0,NULL,NULL,23,24,25,26,NULL,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,32.00,NULL,NULL,2,1,'2024-06-06 11:16:43','2024-06-06 11:16:43'),(46,'48357',NULL,'IVA',2,NULL,NULL,NULL,7,8,9,NULL,NULL,0,0,0,NULL,NULL,23,24,25,26,NULL,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,32.00,NULL,NULL,1,1,'2024-06-06 11:16:58','2024-06-06 11:16:58'),(47,'48357','666666666','IVA',2,NULL,NULL,NULL,7,8,9,NULL,NULL,0,0,0,NULL,NULL,23,24,25,26,NULL,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,32.00,'Identificador: 48357\r\nTelefono: 666666666\r\nEl fijo es Ti + 500 MB total a pagar 32.00 con IVA \r\n Codificacion: No retenido - Precio',NULL,2,1,'2024-06-06 12:38:49','2024-06-06 12:38:49'),(48,'48357','666666666','IVA',2,NULL,NULL,NULL,7,8,9,NULL,NULL,0,0,0,NULL,NULL,23,24,25,26,NULL,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,32.00,'Identificador: 48357\r\nTelefono: 666666666\r\nEl fijo es Ti + 500 MB total a pagar 32.00 con IVA \r\n Codificacion: Retenido',NULL,1,1,'2024-06-06 14:27:18','2024-06-06 14:27:18');
/*!40000 ALTER TABLE `registros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_has_permissions`
--

LOCK TABLES `role_has_permissions` WRITE;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
INSERT INTO `role_has_permissions` VALUES (1,1);
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin','web','2024-05-27 15:58:03','2024-05-27 15:58:03'),(2,'usuario','web','2024-05-27 15:58:03','2024-05-27 15:58:03');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipos`
--

DROP TABLE IF EXISTS `tipos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tipo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipos`
--

LOCK TABLES `tipos` WRITE;
/*!40000 ALTER TABLE `tipos` DISABLE KEYS */;
INSERT INTO `tipos` VALUES (1,'Net','2024-05-27 15:58:03','2024-05-27 15:58:03'),(2,'Convergente','2024-05-27 15:58:03','2024-05-27 15:58:03'),(3,'TV','2024-05-27 15:58:03','2024-05-27 15:58:03'),(4,'Adicional','2024-05-27 15:58:03','2024-05-27 15:58:03'),(5,'Movil','2024-05-27 15:58:03','2024-05-27 15:58:03');
/*!40000 ALTER TABLE `tipos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=109 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'JUAN','juan@juan.com',NULL,'$2y$12$.Qj8rgoFtEV.JhPC3AkQH.lcAPvh2VDWw4MmLJyCn.gQ3hFFQHfBO',NULL,'2024-05-27 15:57:33','2024-06-05 22:50:48'),(2,'ALICIA','ALICIA@ALICIA.com',NULL,'$2y$12$nu.PgdiE/4/0PUUsQ9Owje8n7uvbTgIdoQlC2YuyTVqkF/0w5wy26',NULL,'2024-05-27 15:57:33','2024-06-05 22:40:25'),(3,'MARTA','MARTA3@MARTA.com',NULL,'$2y$12$5ruIKKAceQrVgPwLMu09Cux0YMWh72paUtcAXAkFId59HGyVAkpbW',NULL,'2024-05-27 15:57:33','2024-05-27 15:57:33'),(4,'JESUS','JESUS4@JESUS.com',NULL,'$2y$12$p40AGySC0KpfOzVOwaAS0uvwYMjL0HiBPEgzH.VCV72AJLUIN/EOK',NULL,'2024-05-27 15:57:34','2024-05-27 15:57:34'),(5,'VICTOR','VICTOR5@VICTOR.com',NULL,'$2y$12$tIf4At3JeZ66VXWQBnkzL.J.s2d.ToYUPymA1hAUeZTzUn.NEfPA.',NULL,'2024-05-27 15:57:34','2024-05-27 15:57:34'),(6,'IRENE','IRENE6@IRENE.com',NULL,'$2y$12$V6WVRk0DStlQRxOFuoScIeOB/FBloamrHVX.vgToclXjRfNDxN9r2',NULL,'2024-05-27 15:57:34','2024-05-27 15:57:34'),(7,'ENRIQUE','ENRIQUE7@ENRIQUE.com',NULL,'$2y$12$snok7yvYebTX2ZnqIjwfz.370zAReXhpkjjykxVcKAUiDjRzvJVqy',NULL,'2024-05-27 15:57:35','2024-05-27 15:57:35'),(8,'ANDRES','ANDRES8@ANDRES.com',NULL,'$2y$12$NTGD8ChbPAjWOtUR87N4R.f4zx2N038FTmbw2ya7PdGp992U9XbYS',NULL,'2024-05-27 15:57:35','2024-05-27 15:57:35'),(9,'NURIA','NURIA9@NURIA.com',NULL,'$2y$12$Nam/9c/7eQ.Qby1JKY8I6ex3n2bHNFE6LiFLNASp.L63nJQUyWpeW',NULL,'2024-05-27 15:57:35','2024-05-27 15:57:35'),(10,'ANDRES','ANDRES10@ANDRES.com',NULL,'$2y$12$EOQZIms.jjalBlCADw2jLuKtwmrZw9BLKJwgRgJEON5BK1vJ/tgYu',NULL,'2024-05-27 15:57:35','2024-05-27 15:57:35'),(11,'SILVIA','SILVIA11@SILVIA.com',NULL,'$2y$12$tVXbvGC85FngVqfziuS97OJVHJlM1tbeCnfIG4R6hs3QFGiHgAQc.',NULL,'2024-05-27 15:57:36','2024-05-27 15:57:36'),(12,'FERNANDO','FERNANDO12@FERNANDO.com',NULL,'$2y$12$OMoGnCPmRRdqUyRUPfAzducDizHQUZWfuezV.fUD1IGhAPZN9AgUa',NULL,'2024-05-27 15:57:36','2024-05-27 15:57:36'),(13,'RICARDO','RICARDO13@RICARDO.com',NULL,'$2y$12$fkfuW0OG2gaA98KDKfR2dOXhRisjZ1Bl2ATN9pxAiOxq6FqLSiHwK',NULL,'2024-05-27 15:57:36','2024-05-27 15:57:36'),(14,'JESUS','JESUS14@JESUS.com',NULL,'$2y$12$cU41CN9igBEbpDxNRAbrYOfvXpMyvuvXyFOOfBEJDjgqbmM5Ctpu6',NULL,'2024-05-27 15:57:37','2024-05-27 15:57:37'),(15,'JESUS','JESUS15@JESUS.com',NULL,'$2y$12$no6BvpbPalEL2uiNtxXyWOMOShCBHyKiMKMwTsLgbAFWMMY1WhIMK',NULL,'2024-05-27 15:57:37','2024-05-27 15:57:37'),(16,'PATRICIA','PATRICIA16@PATRICIA.com',NULL,'$2y$12$Q59ZB98kvA/CllftgLCgqOjYj3uYWmI/lQbmKuim19cByI2ADOKKW',NULL,'2024-05-27 15:57:37','2024-05-27 15:57:37'),(17,'ALFONSO','ALFONSO17@ALFONSO.com',NULL,'$2y$12$YlQ.yIfLKyoUWiEykUZaOOLpsEVwS/qcbUQRymrYDT3KpupoyexIm',NULL,'2024-05-27 15:57:37','2024-05-27 15:57:37'),(18,'DOLORES','DOLORES18@DOLORES.com',NULL,'$2y$12$3M7FWt83WO2gQbBzEH3jduocsI2qG8pwuf31bIF.0MwfPKmH3HORe',NULL,'2024-05-27 15:57:38','2024-05-27 15:57:38'),(19,'SILVIA','SILVIA19@SILVIA.com',NULL,'$2y$12$iW5PsSlbWpizg1L6V9GlIukGlgYpFAqvnJA0pkjCoLXIHumCU0wQ6',NULL,'2024-05-27 15:57:38','2024-05-27 15:57:38'),(20,'ENRIQUE','ENRIQUE20@ENRIQUE.com',NULL,'$2y$12$DvbrIYhyTeGN7bC8nYoikug4vaTgGExUfCyK182lIXTKqls4.oMMi',NULL,'2024-05-27 15:57:38','2024-05-27 15:57:38'),(21,'ALFONSO','ALFONSO21@ALFONSO.com',NULL,'$2y$12$OWusG2I4LuAR18BH.glQh.1Q94aQwtb8EAdUPovZvWD..2v7PSg4u',NULL,'2024-05-27 15:57:39','2024-05-27 15:57:39'),(22,'SALVADOR','SALVADOR22@SALVADOR.com',NULL,'$2y$12$OgUQro2i/rOK4XOxaLv2TOoDHw49hRPnHWtX4FcRjRA37b/GbRHXS',NULL,'2024-05-27 15:57:39','2024-05-27 15:57:39'),(23,'JOSEFA','JOSEFA23@JOSEFA.com',NULL,'$2y$12$tm3HiHJk7JTVK8kyPdNLc.DYtEaYKdbX0/AKk5J/kcE4NRjQwq8Bm',NULL,'2024-05-27 15:57:39','2024-05-27 15:57:39'),(24,'ROSARIO','ROSARIO24@ROSARIO.com',NULL,'$2y$12$.ptYwv2zF288SEo.XTvn4OlvdaP9/thHbJ4yfYgCuomAEeEy/UFua',NULL,'2024-05-27 15:57:39','2024-05-27 15:57:39'),(25,'SARA','SARA25@SARA.com',NULL,'$2y$12$lKBlqdbvcl8Ns1c32xiII.F61fMjqzojj.a.bTzbIIt63.8rIt1fW',NULL,'2024-05-27 15:57:40','2024-05-27 15:57:40'),(26,'MANUELA','MANUELA26@MANUELA.com',NULL,'$2y$12$AYoAQglDalEGJCFpxtLN9uRP9q2Jm1xL4WK7ezqbYhmWPfXEu3lFS',NULL,'2024-05-27 15:57:40','2024-05-27 15:57:40'),(27,'ALVARO','ALVARO27@ALVARO.com',NULL,'$2y$12$k6nH9s.UNGfDmK3GMySLROcC/sLxcmWPC/aKsRAIArSJl4drey.vq',NULL,'2024-05-27 15:57:40','2024-05-27 15:57:40'),(28,'BEATRIZ','BEATRIZ28@BEATRIZ.com',NULL,'$2y$12$IqaWZsCMZCzKFaVbLBUGgOSpCXeXeBbiK5msHc5PpEOxuO7So6VTG',NULL,'2024-05-27 15:57:41','2024-05-27 15:57:41'),(29,'MARTA','MARTA29@MARTA.com',NULL,'$2y$12$ECCQh0zm8XAAMsJFbR1Fg.uDVTCnOna1b9U3z0OiPo3zZ4aST5SVW',NULL,'2024-05-27 15:57:41','2024-05-27 15:57:41'),(30,'RAFAEL','RAFAEL30@RAFAEL.com',NULL,'$2y$12$6hbQ.TclyTedrcOPOtY6VObXkGi7OorPs52brQsAQhpd53sRtGvTW',NULL,'2024-05-27 15:57:41','2024-05-27 15:57:41'),(31,'MARIA','MARIA31@MARIA.com',NULL,'$2y$12$VGhV1PcXfqGrDmDMIz97L.U.I8TT8hcwSflOi0mi.BpkNdBiikVv6',NULL,'2024-05-27 15:57:41','2024-05-27 15:57:41'),(32,'ALICIA','ALICIA32@ALICIA.com',NULL,'$2y$12$SkWONNB1mIcXwxXq1s7DsO3mdwW8lybA3L1qqXm6O23gvi0srw4VW',NULL,'2024-05-27 15:57:42','2024-05-27 15:57:42'),(33,'BEATRIZ','BEATRIZ33@BEATRIZ.com',NULL,'$2y$12$M3yYOqA2Jqou6WA0FZ2Diu69B/CEDvORjFAw.q0JiIlmg9hr2AxQS',NULL,'2024-05-27 15:57:42','2024-05-27 15:57:42'),(34,'PILAR','PILAR34@PILAR.com',NULL,'$2y$12$5BMtr0acMYn9GrB5mjtNruEirKqrrpqOypDRVEoPrGTN2//YFhxxm',NULL,'2024-05-27 15:57:42','2024-05-27 15:57:42'),(35,'MARTIN','MARTIN35@MARTIN.com',NULL,'$2y$12$4TO6Eo.PgE2yKg4NSkpQ6OKT8umkT7zR3Azbo4/o.SpxYGqTJrrbe',NULL,'2024-05-27 15:57:43','2024-05-27 15:57:43'),(36,'PATRICIA','PATRICIA36@PATRICIA.com',NULL,'$2y$12$YCPx4g46ocpTXf0FxhFYv.ql9YP7Ha1xV0G8KUpL0nkKzcv38u8T.',NULL,'2024-05-27 15:57:43','2024-05-27 15:57:43'),(37,'MIGUEL','MIGUEL37@MIGUEL.com',NULL,'$2y$12$pgHfhklOyPMLEg41bgBz4en82ZrvpNXOYqOPajNi0JsE.aZDAii2W',NULL,'2024-05-27 15:57:43','2024-05-27 15:57:43'),(38,'IRENE','IRENE38@IRENE.com',NULL,'$2y$12$gBQBJSvbccxfvBKZsRCDNOEPbh2.1QLKaKN4V2SGdxxuX5xql/guq',NULL,'2024-05-27 15:57:43','2024-05-27 15:57:43'),(39,'RAFAEL','RAFAEL39@RAFAEL.com',NULL,'$2y$12$KdDr/VoDa/sAHGMUvUo5GOjXmDNsgByzB42k2wySdCrk7OaZ9lk9G',NULL,'2024-05-27 15:57:44','2024-05-27 15:57:44'),(40,'FERNANDO','FERNANDO40@FERNANDO.com',NULL,'$2y$12$UD3z.ooXuQIKfAujqF2mzOmQLmDn1fPMc7m2j0UtMcZXxPWCnzxhO',NULL,'2024-05-27 15:57:44','2024-05-27 15:57:44'),(41,'ROBERTO','ROBERTO41@ROBERTO.com',NULL,'$2y$12$lzR3jFRtYEszT0VO3oqRQeI7mNz5hc9S/NFBdQFZGAMoYrhzzZ//y',NULL,'2024-05-27 15:57:44','2024-05-27 15:57:44'),(42,'ANTONIA','ANTONIA42@ANTONIA.com',NULL,'$2y$12$pIRkeh8O2TuCWbnEB8BzjOjk/jAK2poALkW5PR.VyEysohzFxBSRe',NULL,'2024-05-27 15:57:45','2024-05-27 15:57:45'),(43,'ALEJANDRO','ALEJANDRO43@ALEJANDRO.com',NULL,'$2y$12$C2feR3LWEV.wEBIoRi.W8et8D240j28rCCemnrtV3FqMWIyF5gWu6',NULL,'2024-05-27 15:57:45','2024-05-27 15:57:45'),(44,'ANGELA','ANGELA44@ANGELA.com',NULL,'$2y$12$wvoevypsTZscX.p4cVoC2OccfK7n4J9FWDCwL8eIpqiBcwCNxwAfG',NULL,'2024-05-27 15:57:45','2024-05-27 15:57:45'),(45,'MANUELA','MANUELA45@MANUELA.com',NULL,'$2y$12$unWYCyCxXoAxGgzBI8dTpOSyZhk7G3CTDkj50ucejnj6Om49Xy5uy',NULL,'2024-05-27 15:57:46','2024-05-27 15:57:46'),(46,'VICENTE','VICENTE46@VICENTE.com',NULL,'$2y$12$ouXSeCzaGnLdutXhs9GAzOG.8.p1VPaPmZRfC58d2vwfy4lRB/X2a',NULL,'2024-05-27 15:57:46','2024-05-27 15:57:46'),(47,'MARCOS','MARCOS47@MARCOS.com',NULL,'$2y$12$Ft/zNr7Dbw7vBItrR3FcuumF0zGJOcNPSuqnWjIOvJJcbe5.LKZZK',NULL,'2024-05-27 15:57:46','2024-05-27 15:57:46'),(48,'ALEJANDRO','ALEJANDRO48@ALEJANDRO.com',NULL,'$2y$12$n0e014De0tiklOia5kwVmuQpGAj.nm6k/bdexD7Ac7BYh5mbeBblO',NULL,'2024-05-27 15:57:46','2024-05-27 15:57:46'),(49,'BEATRIZ','BEATRIZ49@BEATRIZ.com',NULL,'$2y$12$LaUKcYbYla/uLdf69X.ExO1dRuahWP0ixXyFrmm/zHnGtFJYAnXni',NULL,'2024-05-27 15:57:47','2024-05-27 15:57:47'),(50,'PILAR','PILAR50@PILAR.com',NULL,'$2y$12$NKqF7xePF.FlSQjR3PSUeeaIJgX4.ADkz7Lb9tDpnmd2pHKDqcKq.',NULL,'2024-05-27 15:57:47','2024-05-27 15:57:47'),(51,'VICTORIA','VICTORIA51@VICTORIA.com',NULL,'$2y$12$tYNy31NEu8S0nCKIcKJq.eF.blINYBxJPoFPSzM0LJ3FwGBiHRBHK',NULL,'2024-05-27 15:57:47','2024-05-27 15:57:47'),(52,'ISABEL','ISABEL52@ISABEL.com',NULL,'$2y$12$t/guFfw/8SPF.wyfn19wH.zd5pkm.GEZiLohaGobdiWK.l3CrKpaK',NULL,'2024-05-27 15:57:48','2024-05-27 15:57:48'),(53,'LUISA','LUISA53@LUISA.com',NULL,'$2y$12$nb1NxbamLisHI53Lr34.2eOtJyLVyAd.qKeTdMgO1zW2rPw4URyWS',NULL,'2024-05-27 15:57:48','2024-05-27 15:57:48'),(54,'JOSE','JOSE54@JOSE.com',NULL,'$2y$12$8ddrlqycOpKxmCxhqAmYVOMa2/CJD0.f9WiDuNWcUcn.rDMi7a7JO',NULL,'2024-05-27 15:57:48','2024-05-27 15:57:48'),(55,'INMACULADA','INMACULADA55@INMACULADA.com',NULL,'$2y$12$leIhX5rtK4MgD.jCFIhKg.acsrjUsVVr6TmmFUmuLniCtKlcccCSy',NULL,'2024-05-27 15:57:48','2024-05-27 15:57:48'),(56,'JOAQUIN','JOAQUIN56@JOAQUIN.com',NULL,'$2y$12$EB7PCrp3BicGFzPdrngt/eiUYhcp4hLuAi7WMTwuuVzHrurqdNBoO',NULL,'2024-05-27 15:57:49','2024-05-27 15:57:49'),(57,'MAR','MAR57@MAR.com',NULL,'$2y$12$n6/t2itMPwcqmC8zeTXDouxRBLbvOMHTVzvbeOPhTUIX90A6NPAN.',NULL,'2024-05-27 15:57:49','2024-05-27 15:57:49'),(58,'ALBA','ALBA58@ALBA.com',NULL,'$2y$12$s6BoGYmZAAtpqZD42qJm1.96hTzYVutL0RvqhAUXSDlyIfS3KgVY2',NULL,'2024-05-27 15:57:49','2024-05-27 15:57:49'),(59,'JESUS','JESUS59@JESUS.com',NULL,'$2y$12$Sk8EXcUl7/WwwFbbi3.Rd.5n7.vPA8QZFqxLzdOe7/oV399BulgG6',NULL,'2024-05-27 15:57:50','2024-05-27 15:57:50'),(60,'SANTIAGO','SANTIAGO60@SANTIAGO.com',NULL,'$2y$12$YiuyC2hfkamYE1KT6qU/neo7XIxK0rNNPMP7.u1p1U7WwuYLqCLGK',NULL,'2024-05-27 15:57:50','2024-05-27 15:57:50'),(61,'CARLOS','CARLOS61@CARLOS.com',NULL,'$2y$12$ub5xSt5aJBySWmuEZH77BuWskZzS1JbeywtDJl6LWqi0SaXVVgWRK',NULL,'2024-05-27 15:57:50','2024-05-27 15:57:50'),(62,'JAVIER','JAVIER62@JAVIER.com',NULL,'$2y$12$LwWTuCmZt0fIobFqOUtMRO6ArcHY6YUccgl7.fbFPkHV.kf0J7KWq',NULL,'2024-05-27 15:57:50','2024-05-27 15:57:50'),(63,'INMACULADA','INMACULADA63@INMACULADA.com',NULL,'$2y$12$/W8ZvteoXQt2VpeoHRVPsO/Ay6MtdIfMvdWPCvX6VwSK6wIfc5.6K',NULL,'2024-05-27 15:57:51','2024-05-27 15:57:51'),(64,'JAIME','JAIME64@JAIME.com',NULL,'$2y$12$XORQW50Ih5RieBWcdRuPxuFvHUjZFqs1za3FeO18KAJGBILjRZrYS',NULL,'2024-05-27 15:57:51','2024-05-27 15:57:51'),(65,'CARMEN','CARMEN65@CARMEN.com',NULL,'$2y$12$33JTdpMRlNS7Aw9cx7RwD.k2/TVBZ5NJFrxfJ9iuWmwccvZ4fjKcq',NULL,'2024-05-27 15:57:51','2024-05-27 15:57:51'),(66,'FERNANDO','FERNANDO66@FERNANDO.com',NULL,'$2y$12$hjd9oHNbPYCRgkNiZ88us.BmHskY7Qp.5F4JkzdFC6PLZYe12tkxO',NULL,'2024-05-27 15:57:52','2024-05-27 15:57:52'),(67,'PABLO','PABLO67@PABLO.com',NULL,'$2y$12$edQPdYEUOGwXatQ67rCXsOa7/J.PrdaDDnguuUJ.hDHRL0Yz91mzi',NULL,'2024-05-27 15:57:52','2024-05-27 15:57:52'),(68,'YOLANDA','YOLANDA68@YOLANDA.com',NULL,'$2y$12$8VTCYfmlyCNMtgJkFq8do.xrbPurAcQRZec7cex2EvH/k3kTqrFx2',NULL,'2024-05-27 15:57:52','2024-05-27 15:57:52'),(69,'LAURA','LAURA69@LAURA.com',NULL,'$2y$12$ZMOM/0EFeIffRVr3giCbsOE7zFbZlCCk1Q6ymAj3Zo5EXP9S6OFKG',NULL,'2024-05-27 15:57:52','2024-05-27 15:57:52'),(70,'MARIO','MARIO70@MARIO.com',NULL,'$2y$12$FokLChkDcQa5k6//9nCUKucPyMgQ0J7TQpBhc55BcCHK36XAL.nmm',NULL,'2024-05-27 15:57:53','2024-05-27 15:57:53'),(71,'JAVIER','JAVIER71@JAVIER.com',NULL,'$2y$12$ZCNEx5fH198/5Ct.fcDfjuhJN0qGEiQfKXB2jR1fMeV3D/GQuFKzC',NULL,'2024-05-27 15:57:53','2024-05-27 15:57:53'),(72,'ANTONIO','ANTONIO72@ANTONIO.com',NULL,'$2y$12$AjLTJnHCsaNc3dZqN4h4p.HRzofm30UPbd39h.VN1xUOt89aU6MT2',NULL,'2024-05-27 15:57:53','2024-05-27 15:57:53'),(73,'FERNANDO','FERNANDO73@FERNANDO.com',NULL,'$2y$12$Grb6CLQ5pXqLhvu70RAp6erknGY2SQ.dsPkmPmr4O2bSuarWzShHK',NULL,'2024-05-27 15:57:54','2024-05-27 15:57:54'),(74,'LUCIA','LUCIA74@LUCIA.com',NULL,'$2y$12$ei.5wHzAnoad8WJIJBYO..M3K6wHwA.wAlkBeS3b1WZkvE7L0nX4C',NULL,'2024-05-27 15:57:54','2024-05-27 15:57:54'),(75,'ROSA','ROSA75@ROSA.com',NULL,'$2y$12$EmtAhTnaj9ATGaJ2S5ijzOtlyr/fNy20RLB.ul5TYTUpHsvRjLU7q',NULL,'2024-05-27 15:57:54','2024-05-27 15:57:54'),(76,'MANUEL','MANUEL76@MANUEL.com',NULL,'$2y$12$iPtlodDSnKTtCYKjX1FgcOl0uVO1GrIR0wvTjK1eK8/BN8oqspp1O',NULL,'2024-05-27 15:57:54','2024-05-27 15:57:54'),(77,'SALVADOR','SALVADOR77@SALVADOR.com',NULL,'$2y$12$0iQf1kzikuBbhKeE03OJ6.yOGMyypAkSa6thVPhZOhrKyz0Fh.rBC',NULL,'2024-05-27 15:57:55','2024-05-27 15:57:55'),(78,'PATRICIA','PATRICIA78@PATRICIA.com',NULL,'$2y$12$c.RQp87qVLCgXDPQKjUuHuxGTD0r6nmqq4eRjx9xx7YgdyRggE.xG',NULL,'2024-05-27 15:57:55','2024-05-27 15:57:55'),(79,'ELENA','ELENA79@ELENA.com',NULL,'$2y$12$0EXuzHmxxUu.ISbsihJsG.hZshOOUEeKqiZ2m1RvUzAxorCra7IXG',NULL,'2024-05-27 15:57:55','2024-05-27 15:57:55'),(80,'LUCIA','LUCIA80@LUCIA.com',NULL,'$2y$12$JT4uHxC2hfqisFHTLQdq0.irdA8PcDcCaDxYkZMsTXsywSCCUTn..',NULL,'2024-05-27 15:57:56','2024-05-27 15:57:56'),(81,'ISABEL','ISABEL81@ISABEL.com',NULL,'$2y$12$wZFbFYYPlO3z9G9my8412OTczIlN0/Zarp8PYCcmr61SaDGz/q0N2',NULL,'2024-05-27 15:57:56','2024-05-27 15:57:56'),(82,'IRENE','IRENE82@IRENE.com',NULL,'$2y$12$hZqp4/T3NCsE5L3i3T82Y.zT9fELqi/anTY/e7QQepTjMEYEkObWO',NULL,'2024-05-27 15:57:56','2024-05-27 15:57:56'),(83,'IRENE','IRENE83@IRENE.com',NULL,'$2y$12$G9BM.VhSKYx.aZz8T1hgSOz5cpapQxzXmCP1FCdNCGV5VqnU7f452',NULL,'2024-05-27 15:57:56','2024-05-27 15:57:56'),(84,'PABLO','PABLO84@PABLO.com',NULL,'$2y$12$RU8mcy0/sPYj1Un4At5WreEjM7GPHVRcRXsMwRz9IShoxN0RUy1oq',NULL,'2024-05-27 15:57:57','2024-05-27 15:57:57'),(85,'YOLANDA','YOLANDA85@YOLANDA.com',NULL,'$2y$12$JV95kfN2y.MvXznMiSOqa.EWMQhOJLbbvdKOxV2Nt062qV7Ilmwz6',NULL,'2024-05-27 15:57:57','2024-05-27 15:57:57'),(86,'SARA','SARA86@SARA.com',NULL,'$2y$12$Pwd/0aNibfHfZoFIziVVeO0p/VFe39JIFnQ.lDMvnB5Y7AFoJ3u.S',NULL,'2024-05-27 15:57:57','2024-05-27 15:57:57'),(87,'HUGO','HUGO87@HUGO.com',NULL,'$2y$12$SngEOu1tIdIWZw//G4v8wOOZrFt8AY5AU/zBoAluuwELHySMU.Mda',NULL,'2024-05-27 15:57:58','2024-05-27 15:57:58'),(88,'DAVID','DAVID88@DAVID.com',NULL,'$2y$12$72rkUO4sYF4LVyod5NnZHeheWxv0ij08ASUcIl/73C4iOM7Dg/xgC',NULL,'2024-05-27 15:57:58','2024-05-27 15:57:58'),(89,'SILVIA','SILVIA89@SILVIA.com',NULL,'$2y$12$B1S5ZAJodb7zYPAfITt38etDNLb.AYZNFnkBzaa9DKStbYaDHiRwy',NULL,'2024-05-27 15:57:58','2024-05-27 15:57:58'),(90,'DIEGO','DIEGO90@DIEGO.com',NULL,'$2y$12$xuK.fohaQAwEL0Ny6NjRK.LluQu3MBls4PCoC97dpi7nkyp2DP/lC',NULL,'2024-05-27 15:57:58','2024-05-27 15:57:58'),(91,'JAVIER','JAVIER91@JAVIER.com',NULL,'$2y$12$V5QLvslHdCQAQxxd29oDc.NlVrGFrHLsU/ozz.JgKX4Gakgig/yk6',NULL,'2024-05-27 15:57:59','2024-05-27 15:57:59'),(92,'EVA','EVA92@EVA.com',NULL,'$2y$12$U03y4nmhB.EU4SpWzaVcmONHnTQdshrS3wcshyH13HLJFWhEDcffu',NULL,'2024-05-27 15:57:59','2024-05-27 15:57:59'),(93,'ALICIA','ALICIA93@ALICIA.com',NULL,'$2y$12$JXLePpbguBzDiZZcRFXSE.Xv492L5K8l.24V/WbR8JvzlCaUOVzmO',NULL,'2024-05-27 15:57:59','2024-05-27 15:57:59'),(94,'JAIME','JAIME94@JAIME.com',NULL,'$2y$12$nn0V.sXSeZmuBMzzwOsVK.1qcxpCJrkz1a1.crMKjDvzWK.bpqvQ.',NULL,'2024-05-27 15:58:00','2024-05-27 15:58:00'),(95,'JAVIER','JAVIER95@JAVIER.com',NULL,'$2y$12$rhw1QqFpDb3ynhPHZe8PPeqMEifVHWlN6SAnJwtjKDX43EyiqtZ0a',NULL,'2024-05-27 15:58:00','2024-05-27 15:58:00'),(96,'JOSE','JOSE96@JOSE.com',NULL,'$2y$12$.ClN7IswYCqgBI6FSW0DFeADUuAig45/8hdhkxkZyWaaXCFvbNcpG',NULL,'2024-05-27 15:58:00','2024-05-27 15:58:00'),(97,'JUAN','JUAN97@JUAN.com',NULL,'$2y$12$1oooDDRIEFLE/ImhFNgoEuVomkWdyB5m9/tfVXSRvQeej1kDYRIUK',NULL,'2024-05-27 15:58:00','2024-05-27 15:58:00'),(98,'MIGUEL','MIGUEL98@MIGUEL.com',NULL,'$2y$12$XxKSJp9Hn1WaVK90WRg7vu.RIdjqD4J19gQORKJl9rE0uc5.PANiu',NULL,'2024-05-27 15:58:01','2024-05-27 15:58:01'),(99,'RAUL','RAUL99@RAUL.com',NULL,'$2y$12$w3a44nNcvkKWtbEUmO0FxOSjOtAQDcY4X6f5QqF7GeOkaqu5iEDDa',NULL,'2024-05-27 15:58:01','2024-05-27 15:58:01'),(100,'CRISTINA','CRISTINA100@CRISTINA.com',NULL,'$2y$12$uKr0MXw0xf8sXRbhqtUsruxXO/09Q7gZpItt/mbFZ5bygY4oLEndK',NULL,'2024-05-27 15:58:01','2024-05-27 15:58:01'),(101,'EMILIO','EMILIO101@EMILIO.com',NULL,'$2y$12$YA6R2nnxEEGeqCPK3IE9QOUUFG9jltxX/GY/C17jS8SUIrOTZtxeC',NULL,'2024-05-27 15:58:02','2024-05-27 15:58:02'),(102,'JULIA','JULIA102@JULIA.com',NULL,'$2y$12$6EdEnJsIJFIrofuZms.VD.83wmBleYO888Rcir8cdt3S7lc0xYBiC',NULL,'2024-05-27 15:58:02','2024-05-27 15:58:02'),(103,'RUBEN','RUBEN103@RUBEN.com',NULL,'$2y$12$.xPLAO46fDnxPxJukqnOGebW8xACvv36nuRHDiuWAAgWAdz6e6WES',NULL,'2024-05-27 15:58:02','2024-05-27 15:58:02'),(104,'MARIO','MARIO104@MARIO.com',NULL,'$2y$12$pCN0Ice26pLBAIE6ZnYYmeq8l/f3OiUZU2SUzxeb0Un6D61ScuB/e',NULL,'2024-05-27 15:58:02','2024-05-27 15:58:02'),(105,'LAURA','LAURA105@LAURA.com',NULL,'$2y$12$OOgR1Lf04vsnPm3G7iegpe9GfFCKtILkDdhJa6QT.ABFdPrW13V0O',NULL,'2024-05-27 15:58:03','2024-05-27 15:58:03'),(106,'FRANCISCA','FRANCISCA106@FRANCISCA.com',NULL,'$2y$12$vqV8FpVnec0BnSRdZzIh9ufCnE66/waBeo60jHC7LhklxKNxa8ev.',NULL,'2024-05-27 15:58:03','2024-05-27 15:58:03');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'railway'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-06-06 22:03:17
