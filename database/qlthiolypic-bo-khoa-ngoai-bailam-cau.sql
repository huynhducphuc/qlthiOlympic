-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: localhost    Database: qlthiolympicdb
-- ------------------------------------------------------
-- Server version	5.7.11-log

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'admin','123456'),(2,'ducphuc','123456');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bailam`
--

DROP TABLE IF EXISTS `bailam`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bailam` (
  `bailam_id` int(11) NOT NULL AUTO_INCREMENT,
  `nguoidung_id` int(11) NOT NULL,
  `linhvuc_id` int(11) NOT NULL,
  `thoigiannop` datetime DEFAULT NULL,
  PRIMARY KEY (`bailam_id`),
  KEY `fk_bailam_linhvuc` (`linhvuc_id`),
  KEY `fk_bailam_nguoidung` (`nguoidung_id`),
  CONSTRAINT `fk_bailam_linhvuc` FOREIGN KEY (`linhvuc_id`) REFERENCES `linhvuc` (`linhvuc_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_bailam_nguoidung` FOREIGN KEY (`nguoidung_id`) REFERENCES `nguoidung` (`nguoidung_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bailam`
--

LOCK TABLES `bailam` WRITE;
/*!40000 ALTER TABLE `bailam` DISABLE KEYS */;
INSERT INTO `bailam` VALUES (1,1,1,'2016-05-12 00:00:00'),(2,1,2,'2016-05-13 00:00:00'),(3,2,2,'2016-05-12 13:12:43'),(5,1,2,'2016-05-12 13:50:56'),(6,1,2,'2016-05-12 14:16:18'),(7,1,2,NULL),(8,1,2,NULL),(9,2,3,NULL),(10,2,3,NULL),(11,1,3,'2016-05-12 09:30:22'),(12,1,3,'2016-05-12 09:30:25'),(13,1,2,'2016-05-12 09:30:37'),(14,1,3,'2016-05-12 14:33:59'),(15,1,2,'2016-05-12 14:34:47'),(16,1,2,'2016-05-12 14:35:20'),(17,1,2,'2016-05-12 14:35:30'),(18,1,2,'2016-05-12 14:37:36'),(19,1,2,'2016-05-12 14:40:11'),(20,1,2,'2016-05-12 14:41:55'),(21,1,2,'2016-05-12 14:42:10'),(22,1,2,'2016-05-12 14:43:33'),(23,1,2,'2016-05-12 14:46:55'),(24,1,2,'2016-05-12 14:50:22'),(25,1,2,'2016-05-12 14:51:56'),(26,1,3,'2016-05-12 14:54:09'),(27,1,2,'2016-05-12 14:54:14'),(28,1,3,'2016-05-12 14:57:28'),(29,1,3,'2016-05-12 14:57:32'),(30,1,3,'2016-05-12 14:57:33'),(31,1,2,'2016-05-12 14:58:46'),(32,1,2,'2016-05-12 14:58:55'),(33,1,2,'2016-05-12 14:59:04'),(34,1,2,'2016-05-12 15:00:48'),(35,1,2,'2016-05-12 15:01:44'),(36,1,2,'2016-05-12 15:02:03'),(37,1,2,'2016-05-12 15:02:23'),(38,1,2,'2016-05-12 15:02:41'),(39,1,2,'2016-05-12 15:03:08'),(40,1,2,'2016-05-12 15:03:15'),(41,1,2,'2016-05-12 15:03:23'),(42,1,2,'2016-05-12 15:04:37'),(43,1,2,'2016-05-12 15:21:32'),(44,1,2,'2016-05-12 15:21:52'),(45,1,2,'2016-05-12 15:22:12'),(46,1,2,'2016-05-12 15:23:16'),(47,1,2,'2016-05-12 15:23:18'),(48,1,2,'2016-05-12 15:24:10'),(49,1,2,'2016-05-12 15:24:13'),(50,1,2,'2016-05-12 15:24:16'),(51,1,2,'2016-05-12 15:25:50'),(52,1,2,'2016-05-12 15:32:06'),(53,1,5,'2016-05-12 15:32:13'),(54,1,1,'2016-05-12 15:32:17'),(55,1,2,'2016-05-12 15:32:23'),(56,1,2,'2016-05-12 15:44:13'),(57,1,2,'2016-05-12 15:44:16'),(58,1,2,'2016-05-12 15:45:42'),(59,1,2,'2016-05-12 15:46:42');
/*!40000 ALTER TABLE `bailam` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bailam_cau`
--

DROP TABLE IF EXISTS `bailam_cau`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bailam_cau` (
  `cau_id` int(11) NOT NULL,
  `bailam_id` int(11) NOT NULL,
  `dapannguoidung_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`cau_id`,`bailam_id`),
  KEY `fk_bailamcau_caudapan` (`dapannguoidung_id`),
  KEY `fk_bailamcau_bailam` (`bailam_id`),
  CONSTRAINT `fk_bailamcau_bailam` FOREIGN KEY (`bailam_id`) REFERENCES `bailam` (`bailam_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_bailamcau_cau` FOREIGN KEY (`cau_id`) REFERENCES `cau` (`cau_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bailam_cau`
--

LOCK TABLES `bailam_cau` WRITE;
/*!40000 ALTER TABLE `bailam_cau` DISABLE KEYS */;
INSERT INTO `bailam_cau` VALUES (5,23,NULL),(36,23,NULL),(37,23,NULL),(38,23,NULL),(39,23,NULL),(40,23,NULL),(41,23,NULL),(42,23,NULL),(43,23,NULL),(44,23,NULL),(5,24,0),(5,25,0),(5,27,0),(5,32,0),(5,33,0),(5,34,0),(5,36,0),(5,37,0),(5,38,0),(5,44,0),(5,45,0),(5,46,0),(5,47,0),(5,49,0),(5,50,0),(5,52,0),(5,55,0),(6,54,0),(36,22,0),(36,24,0),(36,25,0),(36,27,0),(36,31,0),(36,32,0),(36,35,0),(36,36,0),(36,37,0),(36,38,0),(36,40,0),(36,41,0),(36,42,0),(36,43,0),(36,44,0),(36,45,0),(36,49,0),(36,50,0),(36,51,0),(36,52,0),(36,55,0),(36,56,0),(36,58,0),(36,59,0),(37,24,0),(37,25,0),(37,27,0),(37,31,0),(37,35,0),(37,36,0),(37,39,0),(37,41,0),(37,46,0),(37,47,0),(37,50,0),(37,51,0),(37,56,0),(38,24,0),(38,25,0),(38,27,0),(38,31,0),(38,32,0),(38,33,0),(38,34,0),(38,37,0),(38,38,0),(38,39,0),(38,40,0),(38,42,0),(38,43,0),(38,44,0),(38,45,0),(38,47,0),(38,55,0),(38,57,0),(38,58,0),(38,59,0),(39,24,0),(39,25,0),(39,27,0),(39,33,0),(39,35,0),(39,37,0),(39,40,0),(39,41,0),(39,42,0),(39,48,0),(39,49,0),(39,50,0),(39,56,0),(39,58,0),(39,59,0),(40,24,0),(40,25,0),(40,27,0),(40,33,0),(40,34,0),(40,35,0),(40,36,0),(40,37,0),(40,38,0),(40,39,0),(40,44,0),(40,48,0),(40,51,0),(40,52,0),(40,55,0),(40,57,0),(41,24,0),(41,25,0),(41,27,0),(41,31,0),(41,32,0),(41,34,0),(41,35,0),(41,39,0),(41,41,0),(41,45,0),(41,46,0),(41,47,0),(41,51,0),(41,52,0),(41,55,0),(41,58,0),(42,24,0),(42,25,0),(42,27,0),(42,42,0),(42,43,0),(42,45,0),(42,48,0),(42,49,0),(42,50,0),(42,51,0),(42,57,0),(42,58,0),(42,59,0),(43,24,0),(43,25,0),(43,27,0),(43,34,0),(43,40,0),(43,41,0),(43,42,0),(43,43,0),(43,46,0),(43,48,0),(43,49,0),(43,56,0),(43,57,0),(44,24,0),(44,25,0),(44,27,0),(44,31,0),(44,32,0),(44,36,0),(44,38,0),(44,39,0),(44,40,0),(44,43,0),(44,44,0),(44,46,0),(44,47,0),(44,48,0),(44,52,0),(44,56,0),(44,57,0),(44,59,0),(37,33,1),(6,1,10),(6,2,10),(34,1,144),(34,2,145),(3,1,168),(3,2,168);
/*!40000 ALTER TABLE `bailam_cau` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cau`
--

DROP TABLE IF EXISTS `cau`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cau` (
  `cau_id` int(11) NOT NULL AUTO_INCREMENT,
  `linhvuc_id` int(11) NOT NULL,
  `noidung` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cau_id`),
  KEY `fk_cau_linhvuc` (`linhvuc_id`),
  CONSTRAINT `fk_cau_linhvuc` FOREIGN KEY (`linhvuc_id`) REFERENCES `linhvuc` (`linhvuc_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cau`
--

LOCK TABLES `cau` WRITE;
/*!40000 ALTER TABLE `cau` DISABLE KEYS */;
INSERT INTO `cau` VALUES (3,3,'Máy tính ra đời khi nào?'),(5,2,'1 + 1 = ?'),(6,1,'2 + 2 = ?'),(34,15,'câu anh văn mới thêm !'),(35,3,'câu hỏi anh văn 1'),(36,2,'câu hỏi về tin '),(37,2,'câu hỏi tin văn phòng'),(38,2,'ngôn ngữ lập trình'),(39,2,'câu hỏi thông cmn minh'),(40,2,'Câu hỏi VIp'),(41,2,'Câu hỏi 100tr'),(42,2,'Nội dung '),(43,2,'éo thể tin được?'),(44,2,'Tin học đại cương');
/*!40000 ALTER TABLE `cau` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cau_dapan`
--

DROP TABLE IF EXISTS `cau_dapan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cau_dapan` (
  `cau_dapan_id` int(11) NOT NULL AUTO_INCREMENT,
  `cau_id` int(11) NOT NULL,
  `dapandung` bit(1) NOT NULL,
  `noidungdapan` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cau_dapan_id`),
  KEY `fk_caudapan_cau` (`cau_id`),
  CONSTRAINT `fk_caudapan_cau` FOREIGN KEY (`cau_id`) REFERENCES `cau` (`cau_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=222 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cau_dapan`
--

LOCK TABLES `cau_dapan` WRITE;
/*!40000 ALTER TABLE `cau_dapan` DISABLE KEYS */;
INSERT INTO `cau_dapan` VALUES (9,6,'\0','2'),(10,6,'','4'),(11,6,'\0','6'),(12,6,'\0','8'),(144,34,'','câu anh văn đúng'),(145,34,'\0','câu anh văn sai'),(146,34,'\0','câu anh văn sai lần 3'),(147,34,'\0','sua roi '),(148,34,'\0','nghe'),(149,34,'\0','roi'),(150,34,'\0','1231'),(151,34,'\0','123123'),(161,3,'','1964'),(162,3,'\0','1965'),(163,3,'\0','1765'),(164,3,'\0','1969'),(165,3,'\0','1765'),(166,3,'\0','1969'),(167,3,'\0','1765'),(168,3,'\0','1969'),(169,3,'\0','1994'),(170,3,'\0','1965'),(171,35,'','đáp án đúng'),(172,35,'\0','sai 1'),(173,35,'\0','sai 2'),(174,35,'\0','sai3'),(175,35,'\0','sai 4'),(176,36,'','đáp án đúng1'),(177,36,'\0','đáp án  sai 1'),(178,36,'\0','đáp án  2'),(179,36,'\0','đáp án sai 3'),(180,37,'','đáp án '),(181,37,'\0','đáp án 1'),(182,37,'\0','đáp án 2'),(183,38,'','C++'),(184,38,'\0','Java'),(185,38,'\0','C#'),(186,39,'','đáp án đúng'),(187,39,'\0','đáp án '),(188,39,'\0','đáp án  sai 1'),(189,39,'\0','đáp án  sai 12'),(190,39,'\0','đáp án 123'),(191,40,'','10k'),(192,40,'\0','20k'),(193,40,'\0','30k'),(194,40,'\0','100k'),(199,5,'','222222'),(200,5,'\0','1'),(201,5,'\0','5'),(202,5,'\0','6'),(203,5,'\0','7'),(204,42,'','tin đúng '),(205,42,'\0','tin sai'),(206,42,'\0','tin sai lần 2'),(207,42,'\0','tin sai lần nữa'),(213,44,'','C'),(214,44,'\0','C++'),(215,44,'\0','C#'),(216,43,'','đúng'),(217,43,'\0','sai'),(218,41,'','đố làm được'),(219,41,'\0','làm được'),(220,41,'\0','chắc làm được'),(221,41,'\0','chắc chắn làm được');
/*!40000 ALTER TABLE `cau_dapan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `linhvuc`
--

DROP TABLE IF EXISTS `linhvuc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `linhvuc` (
  `linhvuc_id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mota` text COLLATE utf8_unicode_ci,
  `anh` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`linhvuc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `linhvuc`
--

LOCK TABLES `linhvuc` WRITE;
/*!40000 ALTER TABLE `linhvuc` DISABLE KEYS */;
INSERT INTO `linhvuc` VALUES (1,'Toan Cao Cấp 1','đây là mô tả của toán cao cấp 1, đây là mô tả của toán cao cấp 1, đây là mô tả của toán cao cấp 1',''),(2,'Tin',NULL,NULL),(3,'Anh Văn',NULL,NULL),(5,'Phuc',NULL,NULL),(7,'phuc',NULL,NULL),(8,'phuc',NULL,NULL),(9,'123',NULL,NULL),(10,'1',NULL,NULL),(14,'qưe',NULL,NULL),(15,'1231231232',NULL,NULL),(16,'123',NULL,NULL),(17,'Phúc đức','có mô tả','éo'),(18,'1','1','');
/*!40000 ALTER TABLE `linhvuc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nguoidung`
--

DROP TABLE IF EXISTS `nguoidung`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nguoidung` (
  `nguoidung_id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date DEFAULT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tendangnhap` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`nguoidung_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nguoidung`
--

LOCK TABLES `nguoidung` WRITE;
/*!40000 ALTER TABLE `nguoidung` DISABLE KEYS */;
INSERT INTO `nguoidung` VALUES (1,'Huỳnh Đức Phúc','1111-11-30','Đà Nẵng','lena','123456'),(2,'Lê Văn A','1111-05-03','Quãng Nam','lenalena','123456'),(3,'phúc','1111-11-30','da','admin','123456'),(10,'noname',NULL,NULL,'noname','123456');
/*!40000 ALTER TABLE `nguoidung` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'qlthiolympicdb'
--

--
-- Dumping routines for database 'qlthiolympicdb'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-05-12 16:39:18
