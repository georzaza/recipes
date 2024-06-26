-- MySQL dump 10.13  Distrib 8.0.27, for Linux (x86_64)
--
-- Host: localhost    Database: store
-- ------------------------------------------------------
-- Server version	8.0.27-0ubuntu0.21.10.1

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
-- Table structure for table `ingredients`
--

DROP TABLE IF EXISTS `ingredients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ingredients` (
  `ingredient_id` int unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ingredient_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recipe` int unsigned NOT NULL,
  PRIMARY KEY (`ingredient_id`),
  KEY `ingredients_recipe_foreign` (`recipe`),
  CONSTRAINT `ingredients_recipe_foreign` FOREIGN KEY (`recipe`) REFERENCES `recipes` (`recipe_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=108 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ingredients`
--

LOCK TABLES `ingredients` WRITE;
/*!40000 ALTER TABLE `ingredients` DISABLE KEYS */;
INSERT INTO `ingredients` VALUES (27,'2021-01-22 14:54:12','2021-01-22 14:54:12','Φύλλο χωριάτικο','1',2),(28,'2021-01-22 14:54:12','2021-01-22 14:54:12','τραχανάς ξινός','0.3',2),(29,'2021-01-22 14:54:12','2021-01-22 14:54:12','γαλοτύρι','0.2',2),(30,'2021-01-22 14:54:12','2021-01-22 14:54:12','φέτα','0.3',2),(31,'2021-01-22 14:54:12','2021-01-22 14:54:12','γάλα','1',2),(32,'2021-01-22 14:54:12','2021-01-22 14:54:12','αυγά','5',2),(33,'2021-01-22 14:54:12','2021-01-22 14:54:12','ελαιόλαδο','0.1',2),(34,'2021-01-22 14:54:12','2021-01-22 14:54:12','αλάτι','0.01',2),(35,'2021-01-22 14:54:12','2021-01-22 14:54:12','φρέσκο βούτηρο','0.02',2),(36,'2021-01-22 14:54:31','2021-01-22 14:54:31','ελαιόλαδο','0.7',1),(37,'2021-01-22 14:54:31','2021-01-22 14:54:31','μακαρόνια','0.4',1),(38,'2021-01-22 14:54:31','2021-01-22 14:54:31','σκόρδο','0.3',1),(39,'2021-01-22 14:54:31','2021-01-22 14:54:31','κρεμμύδι','1',1),(40,'2021-01-22 14:54:31','2021-01-22 14:54:31','πιπέρι','0.005',1),(41,'2021-01-22 14:54:31','2021-01-22 14:54:31','κοτόπουλο','0.5',1),(42,'2021-01-22 14:54:31','2021-01-22 14:54:31','τσίλι','0.002',1),(43,'2021-01-22 14:54:31','2021-01-22 14:54:31','πάπρικα','0.004',1),(44,'2021-01-22 14:54:31','2021-01-22 14:54:31','κόλιανδρο','0.005',1),(45,'2021-01-22 14:54:31','2021-01-22 14:54:31','γραβιέρα','0.3',1),(46,'2021-01-22 14:54:31','2021-01-22 14:54:31','μπεσαμέλ','0.2',1),(47,'2021-01-22 14:54:31','2021-01-22 14:54:31','μπαχάρι','0.1',1),(48,'2021-01-22 14:54:31','2021-01-22 14:54:31','κεφαλοτύρι','0.1',1),(49,'2021-01-22 14:54:31','2021-01-22 14:54:31','ντοματάκια','0.4',1),(50,'2021-01-22 14:54:31','2021-01-22 14:54:31','κέτσαπ','0.01',1),(51,'2021-01-22 14:54:31','2021-01-22 14:54:31','βούτηρο','0.01',1),(52,'2021-01-22 14:54:31','2021-01-22 14:54:31','αυγά','4',1),(53,'2021-01-22 14:54:31','2021-01-22 14:54:31','αλάτι','0.1',1),(54,'2021-01-22 15:10:17','2021-01-22 15:10:17','μπριζόλες χοιρινές','4',3),(55,'2021-01-22 15:10:17','2021-01-22 15:10:17','καλοκύθια σε φέτες','0.5',3),(56,'2021-01-22 15:10:17','2021-01-22 15:10:17','σάλτσα ντομάτας','0.2',3),(57,'2021-01-22 15:10:17','2021-01-22 15:10:17','σκόρδο','0.02',3),(58,'2021-01-22 15:10:17','2021-01-22 15:10:17','ξύδι βαλσάμικο','0.01',3),(59,'2021-01-22 15:10:17','2021-01-22 15:10:17','κόλιανδρο','0.01',3),(60,'2021-01-22 15:10:17','2021-01-22 15:10:17','ελαιόλαδο','0.2',3),(61,'2021-01-22 15:10:17','2021-01-22 15:10:17','αλάτι','0.01',3),(62,'2021-01-22 15:10:17','2021-01-22 15:10:17','πιπέρι','0.01',3),(63,'2021-01-22 15:14:20','2021-01-22 15:14:20','μανιτάρια λευκά','0.5',4),(64,'2021-01-22 15:14:20','2021-01-22 15:14:20','φρέσκα κρεμμύδια','0.04',4),(65,'2021-01-22 15:14:20','2021-01-22 15:14:20','ελαιόλαδο','0.03',4),(66,'2021-01-22 15:14:20','2021-01-22 15:14:20','κρεμμύδι','0.2',4),(67,'2021-01-22 15:14:20','2021-01-22 15:14:20','πιπέρι','0.01',4),(68,'2021-01-22 15:14:20','2021-01-22 15:14:20','μοσχοκάρυδο','0.01',4),(69,'2021-01-22 15:19:28','2021-01-22 15:19:28','αρακάς','0.5',5),(70,'2021-01-22 15:19:28','2021-01-22 15:19:28','καρότα','0.05',5),(71,'2021-01-22 15:19:28','2021-01-22 15:19:28','πατάτες','0.3',5),(72,'2021-01-22 15:19:28','2021-01-22 15:19:28','κρεμμύδια φρέσκα','0.06',5),(73,'2021-01-22 15:19:28','2021-01-22 15:19:28','πελτέ ντομάτας','0.02',5),(74,'2021-01-22 15:19:28','2021-01-22 15:19:28','ελαιόλαδο','0.1',5),(75,'2021-01-22 15:19:28','2021-01-22 15:19:28','άνηθος ψιλοκομμένο','0.05',5),(76,'2021-01-22 15:19:28','2021-01-22 15:19:28','αλάτι','0.01',5),(77,'2021-01-22 15:19:28','2021-01-22 15:19:28','πιπέρι','0.01',5),(78,'2021-01-22 15:26:45','2021-01-22 15:26:45','μακαρονια','0.3',6),(79,'2021-01-22 15:26:45','2021-01-22 15:26:45','θαλασσινά','0.2',6),(80,'2021-01-22 15:26:45','2021-01-22 15:26:45','σάλτσα ντομάτας','0.1',6),(81,'2021-01-22 15:26:45','2021-01-22 15:26:45','ντομάτες πομοντόρο','0.3',6),(82,'2021-01-22 15:26:45','2021-01-22 15:26:45','σκόρδο','0.02',6),(83,'2021-01-22 15:26:45','2021-01-22 15:26:45','κρεμμύδι','0.05',6),(84,'2021-01-22 15:26:45','2021-01-22 15:26:45','ελαιόλαδο','0.05',6),(85,'2021-01-22 15:26:45','2021-01-22 15:26:45','λευκό κρασί','0.05',6),(86,'2021-01-22 15:26:45','2021-01-22 15:26:45','μαϊντανός','0.01',6),(87,'2021-01-22 15:26:45','2021-01-22 15:26:45','αλάτι','0.01',6),(88,'2021-01-22 15:26:45','2021-01-22 15:26:45','θυμάρι','0.02',6),(89,'2021-01-22 15:26:45','2021-01-22 15:26:45','πάπρικα γλυκιά','0.05',6),(90,'2021-01-22 15:30:42','2021-01-22 15:30:42','πατάτες','1.5',7),(91,'2021-01-22 15:30:42','2021-01-22 15:30:42','μοτσαρέλλα','0.2',7),(92,'2021-01-22 15:30:42','2021-01-22 15:30:42','παρμεζάνα','0.075',7),(93,'2021-01-22 15:30:42','2021-01-22 15:30:42','βούτυρο','0.08',7),(94,'2021-01-22 15:30:42','2021-01-22 15:30:42','σκόρδο  λιωμένο','0.02',7),(95,'2021-01-22 15:30:42','2021-01-22 15:30:42','αλεύρι για όλες τις χρήσεις','0.04',7),(96,'2021-01-22 15:30:42','2021-01-22 15:30:42','γάλα','0.4',7),(97,'2021-01-22 15:30:42','2021-01-22 15:30:42','αλάτι','0.01',7),(98,'2021-01-22 15:30:42','2021-01-22 15:30:42','πιπέρι','0.01',7),(99,'2021-01-22 15:30:42','2021-01-22 15:30:42','κρεμμύδια φρέσκα','0.02',7),(100,'2021-01-22 15:33:55','2021-01-22 15:33:55','βούτυρο','0.25',8),(101,'2021-01-22 15:33:55','2021-01-22 15:33:55','ζάχατη κρυσταλλική','0.4',8),(102,'2021-01-22 15:33:55','2021-01-22 15:33:55','εκχύλισμα βανίλιας','0.01',8),(103,'2021-01-22 15:33:55','2021-01-22 15:33:55','αλάτι','0.005',8),(104,'2021-01-22 15:33:55','2021-01-22 15:33:55','κακάο','0.1',8),(105,'2021-01-22 15:33:55','2021-01-22 15:33:55','αλεύρι που φουσκώνει μόνο του','0.4',8),(106,'2021-01-22 15:33:55','2021-01-22 15:33:55','γάλα','0.3',8),(107,'2021-01-22 15:33:55','2021-01-22 15:33:55','αυγά','4',8);
/*!40000 ALTER TABLE `ingredients` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2019_12_14_000001_create_personal_access_tokens_table',1),(2,'2021_10_17_100000_create_password_resets_table',1),(3,'2021_11_17_000000_create_users_table',1),(4,'2021_12_13_130359_create_recipes_table',1),(5,'2021_12_13_130414_create_ingredients_table',1),(6,'2021_12_13_130422_create_products_table',1),(7,'2021_12_14_000000_create_failed_jobs_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
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
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `product_id` int unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exp_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'2021-01-22 15:34:52','2021-01-22 15:34:52','Αυγά','2021-01-30','12',NULL,'φρέσκα χωριού'),(2,'2021-01-22 15:35:23','2021-01-22 15:39:41','Γιαούρτι','2021-01-13','1','2',NULL),(3,'2021-01-22 15:35:48','2021-01-22 15:35:48','Μακαρόνια','2021-07-09','3',NULL,'σπαγγέτι'),(4,'2021-01-22 15:36:08','2021-01-22 15:36:08','Γάλα','2021-01-29','2','1',NULL),(5,'2021-01-22 15:36:28','2021-01-22 15:36:28','Γάλα','2021-02-05','4',NULL,'σοκολατούχο'),(6,'2021-01-22 15:37:18','2021-01-22 15:37:18','Μοτσαρέλα','2021-02-04','15','0.5','φέτες τόστ'),(7,'2021-01-22 15:37:46','2021-01-22 15:37:46','Γαλοπούλα','2021-02-04','15','0.5','φέτες τόστ'),(8,'2021-01-22 15:38:21','2021-01-22 15:38:21','Καρότα','2021-02-25','30',NULL,NULL),(9,'2021-01-22 15:38:57','2021-01-22 15:39:07','Κοτόπουλο','2021-01-28','2','0.2','σνίτσελ'),(10,'2021-01-22 15:39:31','2021-01-22 15:39:31','Κοτόπουλο','2021-01-29','1','1.5','ολόκληρο');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recipes`
--

DROP TABLE IF EXISTS `recipes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `recipes` (
  `recipe_id` int unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `recipe_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `execution` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`recipe_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recipes`
--

LOCK TABLES `recipes` WRITE;
/*!40000 ALTER TABLE `recipes` DISABLE KEYS */;
INSERT INTO `recipes` VALUES (1,'2021-01-22 12:43:24','2021-01-22 14:54:31','Παστίτσιο με κοτόπουλο','Αρχικά, σοτάρουμε το κρεμμύδι, το σκόρδο και το κοτόπουλο, κομμένο σε λεπτές λωρίδες.\r\n\r\nΑνακατεύουμε και ρίχνουμε αλάτι, πιπέρι, τσίλι, πάπρικα, κόλιανδρο και τα ντοματάκια με την κέτσαπ.\r\n\r\nΣτην συνέχεια, το ανακατεύουμε και το αφήνουμε να σιγοβράσει για 30 λεπτά.\r\n\r\nΒάζουμε σε πυρέξ, τα μισά βρασμένα μακαρόνια (τα οποία προηγουμένως έχουμε κάψει με λιωμένο βούτυρο και τα έχουμε ανακατέψει με τα τυριά και τα 2 αυγά).\r\n\r\nΒάζουμε τη σάλτσα του κοτόπουλου και από πάνω τα υπόλοιπα μακαρόνια.\r\n\r\nΚατόπιν, βάζουμε τη μπεσαμέλ (στη μπεσαμέλ μέσα έχουμε βάλει μέσα τα 2 αυγά χτυπημένα και 1 κούπα παρμεζάνα, αλάτι και πιπέρι).\r\n\r\nΤέλος, ψήνουμε το παστίτσιο μας στους 200 βαθμούς Κελσίου, για 45 με 60 λεπτά περίπου.'),(2,'2021-01-22 14:54:12','2021-01-22 14:54:12','Τυρόπιτα με τραχανά','Βράζουμε το γάλα σε μια κατσαρόλα και προσθέτουμε τον τραχανά, ανακατεύοντας συνεχώς σε χαμηλή φωτιά με ξύλινη κουτάλα. Αφού βράσει ο τραχανάς, αποσύρουμε την κατσαρόλα από τη φωτιά κι αφήνουμε λίγο να κρυώσει.\r\n    Προσθέτουμε το βούτυρο, την τριμμένη φέτα και το γαλοτύρι Ηπείρου.\r\n    Αλατοπιπερώνουμε αφού δοκιμάσουμε, γιατί τα τυριά έχουν ήδη αρκετό αλάτι.\r\n    Χτυπάμε σε ένα μπώλ τα αυγά και τα προσθέτουμε στη γέμιση.\r\n    Ανακατεύουμε πολύ καλά.\r\n    Σε ένα ρηχό ταψί για πίτα στρώνουμε ακτινωτά 3 φύλλα, λαδώνοντάς τα ενδιάμεσα, και αδειάζουμε τη γέμιση.\r\n    Σκεπάζουμε την πίτα με τα υπόλοιπα λαδωμένα φύλλα.\r\n    Μπήγουμε τις άκρες προς τα μέσα.\r\n    Χαράζουμε ελαφρώς την επιφάνεια των φύλλων και τη ραντίζουμε με λίγο νερό.\r\n    Ψήνουμε για περίπου 1 ώρα, σε καλά προθερμασμένο φούρνο στους 180°C,  μέχρι να ροδίσει καλά η επιφάνεια και να ξεκολλήσει η πίτα από το ταψί.'),(3,'2021-01-22 15:10:17','2021-01-22 15:10:17','Μπριζόλες με σάλτσα','Πλένουμε και στέγνωνουμε καλά τις μπριζόλες με χαρτί\r\n    Αλατοπιπέρωνουμε όλες τις πλευρές.\r\n    Ζεσταίνουμε μια κουταλιά λάδι σε ένα μεγάλο τηγάνι.\r\n    Βάζουμε τις μπριζόλες να ψηθούν σε δυνατή φωτιά για τρία λεπτά από την κάθε πλευρά.\r\n    Τις βάζουμε σε ένα πιάτο.\r\n    Ρίχνουμε το υπόλοιπο λάδι στο τηγάνι και προσθέτουμε τα κολοκυθάκια με αλάτι να σοταριστούν για δύο λεπτά.\r\n    Προσθέτουμε και το σκόρδο λιωμένο και τσιγάριζουμε για δύο λεπτά.\r\n    Ρίχνουμε στο τηγάνι το βαλσάμικο και ανακάτεψε καλά τα υλικά.\r\n    Προσθέτουμε στο φαγητό τη σάλτσα ντομάτας και αλατοπίπερο και άφηνουμε να πάρει βράση.\r\n    Μόλις ξεκινήσει ο βρασμός βάζουμε ξανά τις μπριζόλες στο τηγάνι.\r\n    Τις σκεπάζουμε με τη σάλτσα και τις αφήνουμε να μαγειρευτούν με το καπάκι για περίπου επτά λεπτά.\r\n    Πασπαλίζουμε με τον ψιλοκομμένο κόλιανδρο και σερβίρουμε.'),(4,'2021-01-22 15:14:20','2021-01-22 15:14:20','Μανιταρόσουπα','Σε μία κατσαρόλα σοτάρουμε το κρεμμύδι και το φρέσκο κρεμμυδάκι.\r\n    Μόλις βγάλουν τα αρώματά τους, ρίχνουμε και τα μανιτάρια.\r\n    Συνεχίζουμε το σοτάρισμα για 10 περίπου λεπτά, χαμηλώνοντας την φωτιά.\r\n    Ρίχνουμε 1,5 λίτρο ζεστό νερό, αλάτι, πιπέρι και το μοσχοκάρυδο.\r\n    Αφήνουμε να βράσει σε μέτρια φωτιά για 20- 25 λεπτά.\r\n    Σερβίρουμε με φρεσκοτριμμένο πιπέρι.'),(5,'2021-01-22 15:19:28','2021-01-22 15:19:28','Αρακάς','Ζεσταινουμε το μισό ελαιόλαδο στην κατσαρόλα και σοτάρουμε τα κρεμμυδάκια μας.\r\n    Προσθέτουμε τον αρακά,το καρότο,το πελτέ, αλάτι και πιπέρι.\r\n    Προσθέτουμε νερό ώστε να σκεπάζει τα μισά υλικά μας.\r\n    Σκεπάζουμε και σιγοβραζουμε για 20\'.\r\n    Προσθέτουμε το ελαιόλαδο, τον άνηθο και τις πατάτες.\r\n    Βράζουμε μέχρι να μαλακώσουν οι πατατες και να απορροφηθούν τα πολλά υγρά.'),(6,'2021-01-22 15:26:45','2021-01-22 15:26:45','Σπαγγέτι Μαρινάρα','Σε ένα φαρδύ και βαθύ τηγάνι βάζουμε το ελαιόλαδο να ζεσταθεί και προσθέτουμε το κρεμμύδι ψιλοκομμένο. Σωτάρουμε ως να γυαλίσει το κρεμμύδι σε μέτρια φωτιά.Όταν το κρεμμύδι γυαλίσει, προσθέτουμε τις δυο σκελίδες σκόρδο όπως είναι με την φλούδα τους αφού πρώτα τις πατήσουμε με την παλάμη μας να τις \"τσακίσουμε\". Με αυτό τον τρόπο το σκόρδο θα απελευθερώσει όλα του τα αρώματα αλλά χωρίς να βαρύνει το φαγητό. Αν σας αρέσει το σκόρδο πολύ! τότε ψιλοκόψτε και σκόρδο και προσθέστε το στην σάλτσα σας. Σωτάρουμε για άλλα 2-3 λεπτά να βγάλει και το σκόρδο τα αρώματά του.\r\n\r\nΠροσθέτουμε στο τηγάνι μας τις ντομάτες πομοντόρο κομμένες σε κυβάκια.\r\nΠροσθέτουμε, αλάτι, πάπρικα και θυμάρι και μαγειρεύουμε ως να πιεί η ντομάτα τα υγρά της και βγάλει όλα τα αρώματά της.Σβήνουμε με το κρασί και αφήνουμε να εξατιμστεί.Μόλις μείνει με το λαδάκι προσθέτουμε την σάλστα ντομάτας,Και τα θαλασσινά και αφήνουμε την σάλτσα σε χαμηλή φωτιά να δέσει.Στο μεταξύ σε φαρδιά κατσαρόλα, σε άφθονο αλατισμένο νερό βράζουμε τα μακαρόνια. Τα βράζουμε 1-2 λεπτά λιγότερο από την προτεινόμενη στην συσκευασία ώρα.Μόλις δέσει η σάλτσα μας προσθέτουμε και λίγο ψιλοκομμένο μαϊντανό.Όταν τα μακαρόνια μας βράσουν με μια τσιμπίδα τα αποσύρρουμε από την κατσαρόλα και τα ρίχνουμε μέσα στο τηγάνι μεταφέροντας και λίγο από το πλούσιο σε άμυλο νερό μέσα στο οποίο έβρασαν. Αυτό θα βοηθήσει να \"κολλήσει\" η σάλτσα στα μακαρόνια μας και να γίνει κρεμώδης (αν θυμάστε η σάλτσα ντομάτας που βάλαμε είναι ελάχιστη, τόσο - όσο)Σε χαμηλή φωτιά ανακατεύουμε καλά να πάει παντού κι αν χρειάζεται προσθέτουμε λίγο ακόμη νεράκι από αυτό που έβρασαν τα ζυμαρικά.Σερβίρουμε πασπαλίζοντας με λίγο ακόμη ψιλοκομμένο μαϊντανό. Εγώ προσωπικά δεν προτιμώ το τυρί στις μαρινάρες, αλλά αν εσάς σας αρέσει μπορείτε να πασπαλίσετε με λίγη ή και πολύ παρμεζάνα και φυσικά μπόλικο φρεσκοτριμμένο πιπέρι.'),(7,'2021-01-22 15:30:42','2021-01-22 15:30:42','Πατάτες ογκρατέν','Προθερμαίνουμε τον φούρνο στους 200°c.\r\n    Σε ένα τηγάνι λιώνουμε το βούτυρο και τσιγαρίζουμε με αυτό το σκόρδο για 1 λεπτό περίπου.\r\n    Προσθέτουμε το αλεύρι και το ανακατεύουμε για 2 λεπτά.\r\n    Χαμηλώνουμε τη θερμοκρασία και προσθέτουμε σιγά σιγά το γάλα ανακατεύοντας καλά.\r\n    Προσθέτουμε αλάτι και πιπέρι και ανακατεύουμε μέχρι να πήξει η κρέμα μας.\r\n    Λαδώνουμε ένα ταψί και απλώνουμε μια στρώση πατάτες.\r\n    Ρίχνουμε την μισή κρέμα μας και καλύπτουμε με τη μισή ποσότητα από τη μοτσαρέλλα και την παρμεζάνα.\r\n    Στρώνουμε τις υπόλοιπες πατάτες,την κρέμα και καλύπτουμε με τα υπόλοιπα τυριά.\r\n    Καλύπτουμε το ταψί με αλουμινόχαρτο και ψήνουμε για 40 λεπτά.\r\n    Αφαιρούμε το αλουμινόχαρτο και ψήνουμε για 30 λεπτά ακόμα μέχρι να πάρει χρώμα.\r\n    Γαρνίρουμε με τα κρεμμυδάκια'),(8,'2021-01-22 15:33:55','2021-01-22 15:33:55','Κέικ σοκολάτα','Προθερμαίνουμε τον φούρνο στους 180ο C στον αέρα.\r\n    Στον κάδο του μίξερ βάζουμε το βούτυρο, τη ζάχαρη, τη βανίλια, το αλάτι και χτυπάμε με το σύρμα για 5-6 λεπτά σε δυνατή ταχύτητα μέχρι να αφρατέψει.\r\n    Σε ένα μπολ βάζουμε το κακάο, το αλεύρι και ανακατεύουμε.\r\n    Βάζουμε στον κάδο του μίξερ 2-3 κ.σ. από το μείγμα των στερεών, συνεχίζουμε να χτυπάμε και προσθέτουμε ένα ένα τα αυγά.\r\n    Προσθέτουμε 3 κ.σ. από τα στερεά υλικά, το γάλα και συνεχίζουμε να χτυπάμε.\r\n    Αφαιρούμε τον κάδο, προσθέτουμε τα υπόλοιπα στερεά υλικά και ανακατεύουμε με μία κουτάλα μέχρι να ομογενοποιηθούν τα υλικά.\r\n    Βουτυρώνουμε και πασπαλίζουμε με κακάο μία φόρμα κέικ 28 εκ. με τρύπα και βάζουμε το μείγμα.\r\n    Ψήνουμε για 1 ώρα. Αφαιρούμε και αφήνουμε να κρυώσει σε σχάρα.\r\n    Σερβίρουμε με κακάο, άχνη ζάχαρη και λιωμένη κουβερτούρα.');
/*!40000 ALTER TABLE `recipes` ENABLE KEYS */;
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
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'giorgos','georzaza','__someone__@gmail.com',NULL,'$2y$10$OQ/qgk.b2W1tmswD0lSxx.FHg5pR/u7jdoiVxbriFoUV4MCKKcqMe',NULL,'2021-12-13 14:03:52','2021-12-13 14:03:52'),(2,'queen elisabeth','TheQueen','queen@queen.queen',NULL,'$2y$10$TkA.kbDQWNmodZefVhkGDOxFbpPQlcn5xqH5IbOpXjuzlQ2CZtXDG',NULL,'2021-12-15 19:51:01','2021-12-15 19:51:01'),(3,'JohnTheRipper','Johny','john@ripper',NULL,'$2y$10$RkZklBVo06ToBherbfJv9.TkmI9AGFScCGIFHRrjRbmFLRRhFc0S.',NULL,'2021-12-15 19:52:05','2021-12-15 19:52:05'),(4,'King George','the King','king@king',NULL,'$2y$10$z4pGfHfANhAiJS.Br/vqe.lEQT0yd4ypVFWm6cnPdFJNghmU1pzZS',NULL,'2021-12-15 19:52:47','2021-12-15 19:52:47'),(5,'Alexander The Great','Alex The Great','alex@great',NULL,'$2y$10$kUVRUjJw8Ok/Ps.Gexk/r.RH787dx5a0EIMV/iYTsWEtkKPXoMGiK',NULL,'2021-12-15 19:53:58','2021-12-15 19:53:58'),(6,'Fake Admin','fake_admin','fake@admin',NULL,'$2y$10$al5osRZXAEDF2GYCyR.sX.M6aPtALJC8thf5DqNAsBkG52kKna5fO',NULL,'2021-12-15 19:54:41','2021-12-15 19:54:41');
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

-- Dump completed on 2021-12-15 23:59:48

