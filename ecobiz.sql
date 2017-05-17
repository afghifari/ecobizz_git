-- MySQL dump 10.13  Distrib 5.7.18, for Linux (x86_64)
--
-- Host: localhost    Database: ecobiz
-- ------------------------------------------------------
-- Server version	5.7.18-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `attachments`
--

DROP TABLE IF EXISTS `attachments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attachments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(10) unsigned NOT NULL,
  `uri` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `attachments_post_id_foreign` (`post_id`),
  CONSTRAINT `attachments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `forum_posts` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attachments`
--

LOCK TABLES `attachments` WRITE;
/*!40000 ALTER TABLE `attachments` DISABLE KEYS */;
INSERT INTO `attachments` VALUES (1,1,'http://www.hbc333.com/data/out/193/47538062-random-image.png','2017-03-30 10:13:35','2017-03-30 10:13:35');
/*!40000 ALTER TABLE `attachments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forum_posts`
--

DROP TABLE IF EXISTS `forum_posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forum_posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `thread_id` int(10) unsigned NOT NULL,
  `owner_id` int(10) unsigned NOT NULL,
  `content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `forum_posts_thread_id_foreign` (`thread_id`),
  KEY `forum_posts_owner_id_foreign` (`owner_id`),
  CONSTRAINT `forum_posts_owner_id_foreign` FOREIGN KEY (`owner_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `forum_posts_thread_id_foreign` FOREIGN KEY (`thread_id`) REFERENCES `threads` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forum_posts`
--

LOCK TABLES `forum_posts` WRITE;
/*!40000 ALTER TABLE `forum_posts` DISABLE KEYS */;
INSERT INTO `forum_posts` VALUES (1,2,1,'Thread Content','2017-03-30 10:13:35','2017-03-30 10:13:35'),(2,2,2,'Thread Content X','2017-03-30 10:13:35','2017-03-30 10:13:35'),(3,2,1,'Komentar tes','2017-04-11 18:02:43','2017-04-11 18:02:43'),(4,2,1,'Lagi dong','2017-04-11 18:02:52','2017-04-11 18:02:52'),(5,1,1,'Isi Form','2017-04-11 18:07:49','2017-04-11 18:07:49'),(6,1,1,'Lagi','2017-04-11 18:07:55','2017-04-11 18:07:55'),(7,3,1,'Saya mau tidur','2017-04-12 10:32:46','2017-04-12 10:32:46'),(8,4,1,'Abc','2017-04-12 10:35:06','2017-04-12 10:35:06'),(9,4,1,'Ya tidurlah','2017-04-12 10:35:19','2017-04-12 10:35:19'),(10,5,2,'a','2017-04-12 10:36:34','2017-04-12 10:36:34'),(11,5,2,'a','2017-04-12 10:36:39','2017-04-12 10:36:39'),(12,6,1,'loas','2017-04-24 02:32:15','2017-04-24 02:32:15'),(13,1,1,'asdas','2017-04-24 02:32:31','2017-04-24 02:32:31'),(14,7,1,'Tes aktivitas','2017-05-02 21:59:18','2017-05-02 21:59:18'),(15,8,1,'Tes aktivitas','2017-05-02 21:59:40','2017-05-02 21:59:40'),(16,9,1,'Tes aktivitas','2017-05-02 22:02:23','2017-05-02 22:02:23'),(17,10,1,'Tes aktivitas','2017-05-02 22:02:43','2017-05-02 22:02:43'),(18,11,1,'Tes aktivitas','2017-05-02 22:03:31','2017-05-02 22:03:31'),(19,12,1,'Tes aktivitas','2017-05-02 22:03:48','2017-05-02 22:03:48'),(20,13,1,'Tes aktivitas','2017-05-02 22:04:21','2017-05-02 22:04:21'),(21,14,1,'Tes aktivitas','2017-05-02 22:04:49','2017-05-02 22:04:49'),(22,15,1,'Tes aktivitas','2017-05-02 22:04:56','2017-05-02 22:04:56'),(23,2,1,'asdas','2017-05-02 22:05:18','2017-05-02 22:05:18'),(24,2,1,'asdas','2017-05-02 22:05:38','2017-05-02 22:05:38'),(25,16,1,'sa','2017-05-02 23:42:34','2017-05-02 23:42:34'),(26,1,1,'a','2017-05-03 13:37:25','2017-05-03 13:37:25');
/*!40000 ALTER TABLE `forum_posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forum_views`
--

DROP TABLE IF EXISTS `forum_views`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forum_views` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `viewed_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `forum_views_user_id_foreign` (`user_id`),
  KEY `forum_views_viewed_id_foreign` (`viewed_id`),
  CONSTRAINT `forum_views_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `forum_views_viewed_id_foreign` FOREIGN KEY (`viewed_id`) REFERENCES `threads` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forum_views`
--

LOCK TABLES `forum_views` WRITE;
/*!40000 ALTER TABLE `forum_views` DISABLE KEYS */;
INSERT INTO `forum_views` VALUES (1,NULL,1,'2017-05-02 23:40:45','2017-05-02 23:40:45'),(2,NULL,1,'2017-05-02 23:40:58','2017-05-02 23:40:58'),(3,1,2,'2017-05-02 23:41:44','2017-05-02 23:41:44'),(4,1,8,'2017-05-02 23:42:11','2017-05-02 23:42:11'),(5,1,4,'2017-05-02 23:42:52','2017-05-02 23:42:52'),(6,1,1,'2017-05-03 13:36:29','2017-05-03 13:36:29'),(7,1,2,'2017-05-03 13:41:53','2017-05-03 13:41:53'),(8,1,4,'2017-05-03 13:42:09','2017-05-03 13:42:09'),(9,1,5,'2017-05-03 13:42:14','2017-05-03 13:42:14');
/*!40000 ALTER TABLE `forum_views` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forums`
--

DROP TABLE IF EXISTS `forums`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forums` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forums`
--

LOCK TABLES `forums` WRITE;
/*!40000 ALTER TABLE `forums` DISABLE KEYS */;
INSERT INTO `forums` VALUES (1,'Forum ABC','Revisi','2017-03-30 10:13:34','2017-05-03 13:37:25'),(2,'Forum 2','Deskripsi forum 2','2017-03-30 10:13:34','2017-03-30 10:13:34');
/*!40000 ALTER TABLE `forums` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `friend_lists`
--

DROP TABLE IF EXISTS `friend_lists`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `friend_lists` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `own_id` int(10) unsigned NOT NULL,
  `friend_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `friend_lists_own_id_friend_id_unique` (`own_id`,`friend_id`),
  KEY `friend_lists_friend_id_foreign` (`friend_id`),
  CONSTRAINT `friend_lists_friend_id_foreign` FOREIGN KEY (`friend_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `friend_lists_own_id_foreign` FOREIGN KEY (`own_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `friend_lists`
--

LOCK TABLES `friend_lists` WRITE;
/*!40000 ALTER TABLE `friend_lists` DISABLE KEYS */;
INSERT INTO `friend_lists` VALUES (1,1,2,'2017-03-30 10:13:34','2017-03-30 10:13:34'),(2,2,1,'2017-03-30 10:13:34','2017-03-30 10:13:34');
/*!40000 ALTER TABLE `friend_lists` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `source_id` int(10) unsigned NOT NULL,
  `target_id` int(10) unsigned NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visible_to_owner` tinyint(1) NOT NULL DEFAULT '1',
  `visible_to_target` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `messages_source_id_foreign` (`source_id`),
  KEY `messages_target_id_foreign` (`target_id`),
  CONSTRAINT `messages_source_id_foreign` FOREIGN KEY (`source_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `messages_target_id_foreign` FOREIGN KEY (`target_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` VALUES (1,2,1,'Message B',1,1,'2017-03-30 10:13:34','2017-03-30 10:13:34');
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (24,'2014_10_12_100000_create_password_resets_table',1),(25,'2017_03_25_094218_create_roles_table',1),(26,'2017_03_27_000000_create_users_table',1),(27,'2017_03_30_155228_create_forums_table',1),(28,'2017_03_30_155234_create_threads_table',1),(29,'2017_03_30_155239_create_forum_posts_table',1),(30,'2017_03_30_155338_create_timeline_posts_table',1),(31,'2017_03_30_155343_create_messages_table',1),(32,'2017_03_30_155501_create_attachments_table',1),(33,'2017_03_30_155718_create_friend_lists_table',1),(34,'2017_04_23_134156_add_admin_field_to_users',2),(35,'2017_05_03_022218_create_user_activities_table',3),(36,'2017_05_03_022233_remove_last_seen_from_user_model',3),(37,'2017_05_03_022627_create_user_last_seens_table',3),(38,'2017_05_03_042509_create_forum_views_table',4),(39,'2017_05_03_043323_create_user_views_table',4),(40,'2017_05_03_122605_add_socmed_fields_to_user',5),(41,'2017_05_03_202946_remove_last_update_field_from_forum',6);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
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
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (2,'2017-03-30 10:13:34','2017-03-30 10:13:34','Dekopinwil'),(3,'2017-03-30 10:13:34','2017-03-30 10:13:34','Eksportir'),(4,'2017-03-30 10:13:34','2017-03-30 10:13:34','Investor'),(5,'2017-03-30 10:13:34','2017-03-30 10:13:34','ICT'),(6,'2017-03-30 10:13:34','2017-03-30 10:13:34','Konsultan'),(7,'2017-03-30 10:13:34','2017-03-30 10:13:34','Koperasi'),(9,'2017-03-30 10:13:34','2017-03-30 10:13:34','Industri'),(10,'2017-03-30 10:13:34','2017-03-30 10:13:34','Lainnya'),(11,'2017-04-23 08:22:29','2017-04-23 08:22:29','Raja'),(12,'2017-04-24 02:11:52','2017-04-24 02:11:52','Siswa');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `threads`
--

DROP TABLE IF EXISTS `threads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `threads` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `forum_id` int(10) unsigned NOT NULL,
  `owner_id` int(10) unsigned NOT NULL,
  `is_pinned` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `threads_forum_id_foreign` (`forum_id`),
  KEY `threads_owner_id_foreign` (`owner_id`),
  CONSTRAINT `threads_forum_id_foreign` FOREIGN KEY (`forum_id`) REFERENCES `forums` (`id`) ON DELETE CASCADE,
  CONSTRAINT `threads_owner_id_foreign` FOREIGN KEY (`owner_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `threads`
--

LOCK TABLES `threads` WRITE;
/*!40000 ALTER TABLE `threads` DISABLE KEYS */;
INSERT INTO `threads` VALUES (1,'Thread 1',1,1,0,'2017-03-30 10:13:35','2017-05-03 13:37:25'),(2,'Thread 2',1,2,0,'2017-03-30 10:13:35','2017-03-30 10:13:35'),(3,'Ini Topik Baru',2,1,0,'2017-04-12 10:32:46','2017-04-12 10:32:46'),(4,'Ini Topik kedu',2,1,0,'2017-04-12 10:35:05','2017-04-12 10:35:05'),(5,'a',2,2,0,'2017-04-12 10:36:34','2017-04-12 10:36:34'),(6,'TE',1,1,0,'2017-04-24 02:32:14','2017-04-24 02:32:14'),(7,'Topik Tes Aktivitas',1,1,0,'2017-05-02 21:59:18','2017-05-02 21:59:18'),(8,'Topik Tes Aktivitas',1,1,0,'2017-05-02 21:59:40','2017-05-02 21:59:40'),(9,'Topik Tes Aktivitas',1,1,0,'2017-05-02 22:02:23','2017-05-02 22:02:23'),(10,'Topik Tes Aktivitas',1,1,0,'2017-05-02 22:02:43','2017-05-02 22:02:43'),(11,'Topik Tes Aktivitas',1,1,0,'2017-05-02 22:03:31','2017-05-02 22:03:31'),(12,'Topik Tes Aktivitas',1,1,0,'2017-05-02 22:03:48','2017-05-02 22:03:48'),(13,'Topik Tes Aktivitas',1,1,0,'2017-05-02 22:04:21','2017-05-02 22:04:21'),(14,'Topik Tes Aktivitas',1,1,0,'2017-05-02 22:04:49','2017-05-02 22:04:49'),(15,'Topik Tes Aktivitas',1,1,0,'2017-05-02 22:04:56','2017-05-02 22:04:56'),(16,'as',2,1,0,'2017-05-02 23:42:34','2017-05-02 23:42:34');
/*!40000 ALTER TABLE `threads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `timeline_posts`
--

DROP TABLE IF EXISTS `timeline_posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `timeline_posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `timeline_posts_user_id_foreign` (`user_id`),
  CONSTRAINT `timeline_posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `timeline_posts`
--

LOCK TABLES `timeline_posts` WRITE;
/*!40000 ALTER TABLE `timeline_posts` DISABLE KEYS */;
INSERT INTO `timeline_posts` VALUES (1,2,'Timeline POST A','2017-03-30 10:13:34','2017-03-30 10:13:34'),(2,1,'sad','2017-04-11 18:25:50','2017-04-11 18:25:50'),(3,2,'asc','2017-04-12 10:37:32','2017-04-12 10:37:32'),(4,1,'dasadas','2017-05-02 22:06:10','2017-05-02 22:06:10');
/*!40000 ALTER TABLE `timeline_posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_activities`
--

DROP TABLE IF EXISTS `user_activities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_activities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `activity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `user_activities_user_id_foreign` (`user_id`),
  CONSTRAINT `user_activities_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_activities`
--

LOCK TABLES `user_activities` WRITE;
/*!40000 ALTER TABLE `user_activities` DISABLE KEYS */;
INSERT INTO `user_activities` VALUES (1,'2017-05-02 21:42:31','2017-05-02 21:42:31',1,'Logged Out'),(2,'2017-05-02 21:43:42','2017-05-02 21:43:42',1,'Logged In'),(3,'2017-05-02 21:46:50','2017-05-02 21:46:50',1,'Update Profile'),(4,'2017-05-02 21:48:38','2017-05-02 21:48:38',1,'Update Profile'),(5,'2017-05-02 21:58:32','2017-05-02 21:58:32',1,'Search Forum, Query = Search user : '),(6,'2017-05-02 21:58:48','2017-05-02 21:58:48',1,'Search Forum, Query = Search user, Query = a'),(7,'2017-05-02 21:58:54','2017-05-02 21:58:54',1,'Search Forum, Query = Search topik, Query = a'),(8,'2017-05-02 22:04:56','2017-05-02 22:04:56',1,'Created Thread Topik Tes Aktivitas on Forum Forum ABC'),(9,'2017-05-02 22:05:02','2017-05-02 22:05:02',1,'Search Forum, Query = Search user, Query = '),(10,'2017-05-02 22:05:38','2017-05-02 22:05:38',1,'Posted on Thread Thread 2 on Forum Forum ABC'),(11,'2017-05-02 22:05:55','2017-05-02 22:05:55',1,'Update Profile'),(12,'2017-05-02 22:06:10','2017-05-02 22:06:10',1,'Posted on Timeline'),(13,'2017-05-02 22:06:16','2017-05-02 22:06:16',1,'Logged Out'),(14,'2017-05-02 22:06:24','2017-05-02 22:06:24',1,'Logged In'),(15,'2017-05-02 22:09:56','2017-05-02 22:09:56',1,'Logged Out'),(16,'2017-05-02 23:11:10','2017-05-02 23:11:10',1,'Logged In'),(17,'2017-05-02 23:11:12','2017-05-02 23:11:12',1,'Search Forum, Query = Search user, Query = '),(18,'2017-05-02 23:15:53','2017-05-02 23:15:53',1,'Logged Out'),(19,'2017-05-02 23:41:18','2017-05-02 23:41:18',1,'Logged In'),(20,'2017-05-02 23:42:34','2017-05-02 23:42:34',1,'Created Thread as on Forum Forum 2'),(21,'2017-05-03 05:30:42','2017-05-03 05:30:42',1,'Logged In'),(22,'2017-05-03 05:38:37','2017-05-03 05:38:37',1,'Update Profile'),(23,'2017-05-03 05:44:44','2017-05-03 05:44:44',1,'Logged Out'),(24,'2017-05-03 05:45:25','2017-05-03 05:45:25',1,'Logged In'),(25,'2017-05-03 05:45:28','2017-05-03 05:45:28',1,'Search Forum, Query = Search user, Query = '),(26,'2017-05-03 05:51:40','2017-05-03 05:51:40',1,'Search Forum, Query = Search user, Query = '),(27,'2017-05-03 05:54:51','2017-05-03 05:54:51',1,'Search Forum, Query = Search user, Query = '),(28,'2017-05-03 05:55:22','2017-05-03 05:55:22',1,'Search Forum, Query = Search user, Query = '),(29,'2017-05-03 05:55:32','2017-05-03 05:55:32',1,'Search Forum, Query = Search user, Query = '),(30,'2017-05-03 05:55:45','2017-05-03 05:55:45',1,'Search Forum, Query = Search user, Query = '),(31,'2017-05-03 13:21:39','2017-05-03 13:21:39',1,'Logged Out'),(32,'2017-05-03 13:22:45','2017-05-03 13:22:45',1,'Logged In'),(33,'2017-05-03 13:37:25','2017-05-03 13:37:25',1,'Posted on Thread Thread 1 on Forum Forum ABC');
/*!40000 ALTER TABLE `user_activities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_last_seens`
--

DROP TABLE IF EXISTS `user_last_seens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_last_seens` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_last_seens_user_id_foreign` (`user_id`),
  CONSTRAINT `user_last_seens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_last_seens`
--

LOCK TABLES `user_last_seens` WRITE;
/*!40000 ALTER TABLE `user_last_seens` DISABLE KEYS */;
INSERT INTO `user_last_seens` VALUES (1,1,'2017-05-02 20:57:48','2017-05-03 13:54:47');
/*!40000 ALTER TABLE `user_last_seens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_views`
--

DROP TABLE IF EXISTS `user_views`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_views` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `viewed_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_views_user_id_foreign` (`user_id`),
  KEY `user_views_viewed_id_foreign` (`viewed_id`),
  CONSTRAINT `user_views_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `user_views_viewed_id_foreign` FOREIGN KEY (`viewed_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_views`
--

LOCK TABLES `user_views` WRITE;
/*!40000 ALTER TABLE `user_views` DISABLE KEYS */;
INSERT INTO `user_views` VALUES (12,1,3,'2017-05-02 23:15:39','2017-05-02 23:15:39'),(13,1,2,'2017-05-02 23:15:50','2017-05-02 23:15:50'),(14,NULL,1,'2017-05-02 23:15:56','2017-05-02 23:15:56'),(15,NULL,1,'2017-05-02 23:15:59','2017-05-02 23:15:59'),(16,NULL,1,'2017-05-02 23:16:01','2017-05-02 23:16:01'),(17,NULL,1,'2017-05-02 23:16:03','2017-05-02 23:16:03'),(18,NULL,1,'2017-05-02 23:16:05','2017-05-02 23:16:05'),(19,NULL,2,'2017-05-02 23:16:45','2017-05-02 23:16:45'),(20,NULL,2,'2017-05-02 23:16:46','2017-05-02 23:16:46'),(21,NULL,2,'2017-05-02 23:36:07','2017-05-02 23:36:07'),(22,NULL,2,'2017-05-02 23:36:42','2017-05-02 23:36:42'),(23,1,1,'2017-05-02 23:52:04','2017-05-02 23:52:04'),(24,1,2,'2017-05-02 23:52:14','2017-05-02 23:52:14'),(25,1,1,'2017-05-03 05:30:46','2017-05-03 05:30:46'),(26,1,1,'2017-05-03 05:31:47','2017-05-03 05:31:47'),(27,1,1,'2017-05-03 05:31:57','2017-05-03 05:31:57'),(28,1,1,'2017-05-03 05:33:17','2017-05-03 05:33:17'),(29,1,1,'2017-05-03 05:34:17','2017-05-03 05:34:17'),(30,1,1,'2017-05-03 05:38:37','2017-05-03 05:38:37'),(31,1,1,'2017-05-03 05:39:07','2017-05-03 05:39:07'),(32,1,1,'2017-05-03 05:39:20','2017-05-03 05:39:20'),(33,1,1,'2017-05-03 05:39:35','2017-05-03 05:39:35'),(34,1,1,'2017-05-03 05:51:45','2017-05-03 05:51:45'),(35,1,1,'2017-05-03 05:51:54','2017-05-03 05:51:54'),(36,1,1,'2017-05-03 05:52:06','2017-05-03 05:52:06'),(37,1,1,'2017-05-03 06:08:34','2017-05-03 06:08:34');
/*!40000 ALTER TABLE `user_views` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verified` tinyint(4) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `profile_picture` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `mobile_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `owner` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organization_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `organization_structure` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `needs` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `products` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `role_id` int(10) unsigned DEFAULT NULL,
  `profile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `whatsapp_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `facebook_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `twitter_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_id_foreign` (`role_id`),
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Albert','albert@einstein.com','$2y$10$zvhN.nEnSP1uvVZNO4UoUO8eCxrswPOKl1vjy1XWbqmO1w88kauq6',1,'Zefu3tYjr5zqhOVx5SlCdOhLDo0tFgJpttkFCpDNn62AT5aXdm9rIDrq1OxD','2017-03-30 10:13:34','2017-05-03 05:44:36','http://localhost:8000/storage/photos/profile/1/ucnobsOB7OOI9kW3fxghh6u0X4uZgCcuFJYc9OPE.jpeg','as','081xxxxxxx','Deskripsi lorem ipsum sung tulodo','Owneras','Nestle','asfc','http://localhost:8000/storage/photos/chart/1/y148bv6rk8uGSi6II0oYrdmccAUrg8oSsgpUbQbS.jpeg','ayam','',4,'',1,'081268900270','Raihannur R','raihannurr'),(2,'Tom','tom@frank.com','$2y$10$ch2eDRQKgRKnMzeL3a7XtOpFqktWdBf41MwNFMIyoNX1XaFjuiykO',0,'ofgXd5dw2YE4lvPljbqZR0FBuAJauMwclbzqf8t24twMxzJNJnsOXP5n9pDi','2017-03-30 10:13:34','2017-04-24 02:29:02','http://localhost:8000/storage/photos/profile/2/wHuEtedWKNAKz7OPEKSFuEZ4cLq97pMkEuHoZi8L.jpeg','a','081xxxxxxx','a','Owner','Tom\'s Organization','asfc',NULL,'','',NULL,'',0,'','',''),(3,'Raihan','asdadas@asodo.com','$2y$10$A9zmMiCgv/YhqZFAdUz1BO/q.lIS9WmV3dEgihlLG.sy9I.cLUzXS',0,'p27hHUjxJsJXaNoor3Lzh6O8T5SEinTwSOHMlQiVwwgeikbGOziD5kFdOnaw','2017-04-05 13:57:25','2017-04-05 14:07:34',NULL,'Cisitu','a','a','a','Organisasi milik a','a',NULL,'','',NULL,'',0,'','',''),(4,'Raihan','raihan@tes.com','$2y$10$oaBpFSBcmfNgEKvRdIahrufPTZ2eYLAxixsUbsloZbJDZ/hNDH38G',0,'spPp0VWc6GhMUOWCkjrYWZNZ7Cskb3zmR7cYyJBI7svNIRvjWs88MWvRx3LB','2017-04-23 07:06:20','2017-04-23 07:06:32',NULL,'Cisitu','08123212','Jual nasi padang','Raihan','Organisasi milik Raihan','nasi.padang.com',NULL,'','',NULL,'',0,'','',''),(5,'asdsa','assdaa@acs.com','$2y$10$7WlQWdlD3yLVXt7jicB/3e7HoHd8kSLoDGcI8/6HvhAVHFwJjPY7O',0,'ZFuLRsWrgAPD0KOz5XsApZKwAjuHWggBHSuGu8sikGI2elLsbC08s4pNlJaR','2017-04-23 08:47:03','2017-04-23 08:47:03',NULL,'sadas','asda','as\"','as','Organisasi milik as','bb',NULL,'','',2,'',0,'','',''),(6,'as1','a@casi.com','$2y$10$x8L0k2TMsHMLZAgZAQVulu0UL3zNKmbiWOzgUSz0l0/hf6Ccs5AF2',0,'1GnnSIdoI9agurlXhIdkg0vxtUbt7NBZayl8L8tMDKiShdZbsGUs8b1OhuHi','2017-04-23 08:52:42','2017-04-23 08:53:33',NULL,'asd','012801821','ada','asd','Organisasi milik asd','das',NULL,'','',NULL,'',0,'','',''),(7,'asdsadasa','asdadsad@uiafhsouh.com','$2y$10$YuQau9UVMRysNSwHVqZ49.qikD5uMxmNIDOYO0xGeRaQThbXd.gp2',0,'7nC1NZBowtx2PPIugKKvLt0xylFYnRToW7b23Yi8ielshAZtjZwLYY58PC8I','2017-04-23 08:53:52','2017-04-23 08:53:52',NULL,'dasd','sadojoa','asdsa','saidoj','Organisasi milik saidoj','csaio',NULL,'','',4,'',0,'','',''),(8,'asdas','aspp@oc.com','$2y$10$B5Rxa7Q8G.OIRXDTjtE/Z.eoXjhfM4p7mH7Af9.D2tAUA0uFt2Iqu',0,'vbCiMSXhjPWdtdacCo2D3tF8N5oFNpQVUk7zK84c2MUWITWR3T1LsQ0nm7PH','2017-04-23 08:56:03','2017-04-23 08:56:18',NULL,'ascacsacasca','11','sad','sad','Organisasi milik sad','sa',NULL,'','',NULL,'',0,'','',''),(9,'asda','a@ciaoh.com','$2y$10$XSVbAKH99a8I06XxUgCJ8ejTs5fM3lsINy5JtuHURiK7KwFoFCxMK',0,'ZXAQID8DWdBqqzD6UT8kMqo2ECaZetPIq2AJCzEqySm0ZtMyoHE7BpTbcXXN','2017-04-23 08:59:10','2017-04-23 08:59:10',NULL,'asd','oasdpjaoj','as','as','Organisasi milik as','sac',NULL,'','',NULL,'',0,'','',''),(10,'sada','asoi@cmm.com','$2y$10$Xbsyf4pJ0XAfecVAIt8w2.b.nD/RmqCv1a92X01UJA8itaWZ9aT.e',0,'OACPRfteCDZGlGrLMXbSsrbgWT8bprOM7CE8CrhMbEZQBggGuy35A5rGLDm7','2017-04-23 09:01:56','2017-04-23 09:01:59',NULL,'asdas','09210190','saj','csa','Organisasi milik csa','csa',NULL,'','',NULL,'',0,'','',''),(11,'asd','a@ocsa.com','$2y$10$iJS4xFIaaV0iTXSzfD4.Ve1/C7xovkiZ/yHZ7BRB4zpAJyyf/pZti',0,'ITloFwzRHfeiHkrqPkwNkwMZNLKDvAX8b6Ww2D9lkGAtHgk1aIiVaVbrg6P2','2017-04-23 09:04:04','2017-04-23 09:04:04',NULL,'aspo','012108','sa','csa','Organisasi milik csa','sa',NULL,'','',NULL,'',0,'','',''),(12,'Akuaku','asdbo@asco.com','$2y$10$WtDfOFKGS0DcFuRADyAXteeKXitQCAQ1FxtXYErFqM4k.wK/Czhym',0,'ZHBrcX0EdsyKFqaX57kXhagHp8xOOi1QpdL7l8lfiXPRiZ9hbqnzNNMMsSMC','2017-04-23 09:07:54','2017-04-23 09:09:05',NULL,'aasdo','sadoas','acsn','csa','Organisasi milik csa','csa',NULL,'','',NULL,'',0,'','',''),(13,'Aksadu09','asdo@ca.com','$2y$10$cnr9wJAhfqVtXKdSV6.nq.41SulhSdVXW2fdNq0lwWkCDFbpzX9Oy',0,NULL,'2017-04-23 09:09:35','2017-04-23 09:09:35',NULL,'asdpo','pasdksa','csap','csa','Organisasi milik csa','ca',NULL,'','',NULL,'',0,'','',''),(14,'asda','pp@acs.com','$2y$10$F3HTMTUZX8Wfel.kE92SFeSKkZCkRsr2hiKs1zAungaFWbvS3cRde',0,NULL,'2017-04-23 09:10:27','2017-04-23 09:10:27',NULL,'osaj','sao','adsp','csa','Organisasi milik csa','csa',NULL,'','',NULL,'',0,'','',''),(15,'asda','pasap@acs.com','$2y$10$8xq4CsrWe9GhbhHCiRWnKOd8nACW5GvTJ9eSm//sLfVhtGvqbcWWO',0,NULL,'2017-04-23 09:10:41','2017-04-23 09:10:41',NULL,'osaj','sao','adsp','csa','Organisasi milik csa','csa',NULL,'','',NULL,'',0,'','',''),(16,'asda','asdasd@acs.com','$2y$10$TOOo7wqE0DNZ4UfEe0D.nedopNFUbk8Bxl2C0JuiKG2TpWrtspVeK',0,NULL,'2017-04-23 09:11:00','2017-04-23 09:11:00',NULL,'osaj','sao','adsp','csa','Organisasi milik csa','csa',NULL,'','',NULL,'',0,'','',''),(17,'asdsaoi','apspp@da.com','$2y$10$9zwC/vctjih5EFATPRcHruKbDyvM2P8gjCOyepFuaCe6Fsia9V6Tu',0,NULL,'2017-04-23 09:11:27','2017-04-23 09:11:27',NULL,'appp','odsjaoj','pasjd','opc','Organisasi milik opc','csapo',NULL,'','',NULL,'',0,'','',''),(18,'asdsaoi','apsapp@da.com','$2y$10$M2dFvQscuvEcNxZIjhnwMuKxdkUJH2/zIBI9Yul1l48qqyOWIlcOm',0,'TIuZYwszPxnphacJkwlYTK86QQ3pwvQv7YGrHAf5x8ejxq4jZLuuPG1fz86g','2017-04-23 09:12:43','2017-04-23 09:12:43',NULL,'appp','odsjaoj','pasjd','opc','Organisasi milik opc','csapo',NULL,'','',NULL,'',0,'','',''),(19,'asdsa','pasdap@sado.com','$2y$10$W7OrOEJ/mEW.DhHblbOFjeIwqm10.sEETFbRCYEwFoDoL9Lo6vOOG',0,'1MM1UtZsPh4CNIelAJGTnkSLNbN5JiXMQrWtMJEbKTx9Pt0p8TjAZSJue2ot','2017-04-23 09:13:19','2017-04-23 09:13:33',NULL,'pasoa','odsap','asoi','canp','Organisasi milik canp','csa',NULL,'','',NULL,'',0,'','',''),(20,'pass','passa@ocasj.com','$2y$10$fGscbvvofvabBdd2I.1VLOUR5ywg5KVQCjYAL1fgZPHdFvQTqqqw.',0,NULL,'2017-04-23 09:13:51','2017-04-23 09:13:51',NULL,'pasdpa','odisa','sacoin','csa','Organisasi milik csa','csaoi',NULL,'','',NULL,'',0,'','',''),(21,'asdasa','aspodasopa@aoc.com','$2y$10$O5Xm8Wvc1xWmDeBTLH4sROnDniphYeOTKkmBZ2L1boSFgiUZbbCOa',0,NULL,'2017-04-23 10:14:48','2017-04-23 10:14:48',NULL,'aspdpaoo','saoj','csa','c','Organisasi milik c','csa',NULL,'','oascjiasijas',4,'',0,'','',''),(22,'Roy','roy@co.com','$2y$10$lAY5gf0Xpcllc1owSpBGfO4t2FemGlfWPsv0xVe.mZPEu8Ef6Z.n2',0,NULL,'2017-04-23 11:08:11','2017-04-23 11:08:11',NULL,'Jl Kapau','81268900280','Jual nasi kapau','Roy','Kapau Dagang','kapau.nasi.com',NULL,'','Nasi Kapau',NULL,'',0,'','',''),(23,'Roy','royco@abc.com','$2y$10$SgNsO7IHVB8U7nZJuL6mk.Ui44DuqxvZALYuNqZXEm5xvx.Iq1e/.',0,NULL,'2017-04-23 11:09:21','2017-04-23 11:09:21',NULL,'Jl Kapau','81268900280','Jual nasi kapau','Roy','Kapau Dagang','kapau.nasi.com',NULL,'','Nasi Kapau',11,'',0,'','',''),(24,'Roy','coco@roy.com','$2y$10$v5EK/LhBiIDu1lLOSVneBOb2PUG2NEwGYbkq.EsmL1EuQ0ag9zoRi',0,'7lsm7qzQMTW6ZLVe7CurrHdE2ZJTWnTIrxWfvOnfQML9jJnnBV7pLh1FCpIs','2017-04-23 11:11:42','2017-04-23 11:14:42',NULL,'Jl Kapau','081268900280','Jual nasi kapau','Roy','Kapau Dagang','kapau.nasi.com',NULL,'','Nasi Kapau',11,'',0,'','',''),(25,'Import','tes@import.com','$2y$10$DjSxepFL1vdEvYaOVmjPpe9.OLTqId3i2cFGMor.0B6TWXnV1z4Jy',0,'G9yLPiTI1p75NwFTVtd6zQkcCB4Ooiqr2lXigd7CcDipzifuVg6P5FDOWptp','2017-04-24 02:27:57','2017-04-24 02:29:28',NULL,'Caoscsaokcsa','081111','ASDlsa[','AODO','as;dk','lsad',NULL,'','sapdk[',4,'',0,'','',''),(26,'raisoiajioaj','1@a.coim','$2y$10$uTAUGCYtHYTb5lsHI8v3Pu.RoR9PE/gPzGVaX7gye4egxF5vY8ytC',0,NULL,'2017-05-03 05:30:37','2017-05-03 05:30:37',NULL,'sadojasiodjaojdsijoasji','osajdpoasj','acsapj','csapo','Organisasi milik csapo','caspo',NULL,'csa','acsapo',2,'',0,'sacpoj','csapjo','csapoj');
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

-- Dump completed on 2017-05-06 20:52:35
