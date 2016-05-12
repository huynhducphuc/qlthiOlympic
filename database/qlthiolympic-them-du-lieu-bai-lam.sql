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
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bailam`
--

LOCK TABLES `bailam` WRITE;
/*!40000 ALTER TABLE `bailam` DISABLE KEYS */;
INSERT INTO `bailam` VALUES (62,1,19,'2016-05-12 20:33:44'),(63,1,19,'2016-05-12 20:34:04'),(64,1,20,'2016-05-12 20:34:19'),(65,1,21,'2016-05-12 20:34:55'),(66,1,21,'2016-05-12 20:35:08'),(67,1,21,'2016-05-12 20:56:01'),(68,1,21,'2016-05-12 20:57:14'),(69,1,21,'2016-05-12 20:57:54'),(70,1,21,'2016-05-12 21:01:19'),(71,1,21,'2016-05-12 21:02:38'),(72,1,21,'2016-05-12 21:05:11'),(73,1,21,'2016-05-12 21:08:06'),(74,1,21,'2016-05-12 21:08:21'),(75,1,19,'2016-05-12 21:15:39'),(76,1,21,'2016-05-12 21:17:04'),(77,1,20,'2016-05-12 21:22:35'),(78,1,21,'2016-05-12 21:23:24'),(79,1,20,'2016-05-12 21:23:57'),(80,1,19,'2016-05-12 21:24:42'),(81,1,20,'2016-05-12 21:25:49'),(82,1,19,'2016-05-12 21:28:21'),(83,1,21,'2016-05-12 21:29:36'),(84,1,21,'2016-05-12 21:33:28'),(85,1,21,'2016-05-12 21:33:33'),(86,1,21,'2016-05-12 21:33:47'),(87,1,21,'2016-05-12 21:33:47'),(88,1,21,'2016-05-12 21:34:09'),(89,1,20,'2016-05-12 22:18:57'),(90,1,20,'2016-05-12 22:20:34'),(91,1,20,'2016-05-12 22:20:58'),(92,1,20,'2016-05-12 22:21:42'),(93,1,20,'2016-05-12 22:25:27'),(94,1,20,'2016-05-12 22:31:53'),(95,1,20,'2016-05-12 22:32:09'),(96,1,20,'2016-05-12 22:32:54'),(97,1,20,'2016-05-12 22:33:08'),(98,1,20,'2016-05-12 22:33:38'),(99,1,21,'2016-05-12 22:33:53'),(100,1,20,'2016-05-12 22:34:23'),(101,1,19,'2016-05-12 22:35:04'),(102,1,20,'2016-05-12 22:36:47'),(103,1,21,'2016-05-12 23:00:09'),(104,1,21,'2016-05-12 23:02:34'),(105,1,19,'2016-05-12 23:03:20');
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
INSERT INTO `bailam_cau` VALUES (45,63,0),(46,75,0),(47,62,0),(47,63,0),(47,75,0),(47,101,0),(48,62,0),(48,75,0),(49,62,0),(50,62,0),(50,63,0),(53,63,0),(54,62,0),(54,63,0),(55,62,0),(56,63,0),(56,101,0),(57,62,0),(57,63,0),(58,62,0),(58,63,0),(58,101,0),(59,62,0),(59,101,0),(60,63,0),(62,75,0),(63,75,0),(64,62,0),(64,63,0),(64,101,0),(65,77,0),(65,97,0),(66,64,0),(66,89,0),(66,92,0),(66,93,0),(66,94,0),(66,97,0),(67,64,0),(67,91,0),(67,97,0),(67,98,0),(68,64,0),(68,77,0),(68,90,0),(68,94,0),(68,96,0),(68,97,0),(69,64,0),(69,90,0),(69,91,0),(69,97,0),(69,98,0),(70,64,0),(70,77,0),(70,97,0),(70,98,0),(71,90,0),(71,96,0),(71,97,0),(71,100,0),(72,92,0),(72,93,0),(72,97,0),(73,95,0),(73,97,0),(73,98,0),(74,92,0),(74,95,0),(74,97,0),(75,90,0),(75,91,0),(75,93,0),(75,95,0),(75,97,0),(76,64,0),(76,94,0),(76,97,0),(76,100,0),(77,64,0),(77,89,0),(77,97,0),(77,100,0),(78,64,0),(78,96,0),(78,97,0),(79,64,0),(79,77,0),(79,96,0),(79,97,0),(80,64,0),(80,89,0),(80,91,0),(80,92,0),(80,94,0),(80,97,0),(81,89,0),(81,94,0),(81,97,0),(81,98,0),(81,100,0),(82,93,0),(82,95,0),(82,97,0),(83,77,0),(83,89,0),(83,91,0),(83,95,0),(83,96,0),(83,97,0),(84,90,0),(84,92,0),(84,93,0),(84,97,0),(85,65,0),(85,66,0),(85,69,0),(85,74,0),(85,86,0),(86,66,0),(86,70,0),(86,78,0),(86,84,0),(86,99,0),(87,66,0),(87,74,0),(87,76,0),(87,78,0),(87,84,0),(88,66,0),(88,70,0),(88,71,0),(88,72,0),(88,73,0),(88,99,0),(89,66,0),(89,68,0),(89,69,0),(89,71,0),(89,76,0),(89,88,0),(90,65,0),(90,66,0),(90,67,0),(90,71,0),(90,72,0),(90,78,0),(91,65,0),(91,66,0),(91,67,0),(91,70,0),(91,73,0),(91,85,0),(91,87,0),(91,99,0),(92,66,0),(92,68,0),(92,69,0),(92,78,0),(93,65,0),(93,66,0),(93,69,0),(94,65,0),(94,66,0),(94,68,0),(94,71,0),(94,85,0),(95,66,0),(95,67,0),(95,73,0),(95,84,0),(95,86,0),(96,67,0),(96,70,0),(96,72,0),(96,73,0),(96,76,0),(96,88,0),(97,65,0),(97,66,0),(97,71,0),(97,84,0),(97,85,0),(97,88,0),(98,65,0),(98,66,0),(98,67,0),(98,74,0),(98,84,0),(99,65,0),(99,66,0),(99,68,0),(99,70,0),(99,86,0),(100,66,0),(100,69,0),(100,76,0),(100,78,0),(100,86,0),(100,87,0),(100,99,0),(101,65,0),(101,66,0),(101,72,0),(101,74,0),(101,87,0),(102,65,0),(102,66,0),(102,68,0),(102,74,0),(102,86,0),(103,66,0),(103,85,0),(103,87,0),(104,66,0),(104,72,0),(104,73,0),(104,85,0),(104,99,0),(96,66,1),(45,105,234),(47,82,241),(48,80,246),(49,82,251),(50,82,255),(52,105,263),(53,105,266),(54,82,274),(56,80,283),(57,105,284),(60,80,298),(61,80,301),(62,82,305),(63,105,307),(64,80,312),(66,102,322),(66,79,324),(68,81,329),(68,79,331),(71,79,345),(70,100,364),(75,81,367),(75,102,367),(77,81,379),(77,102,380),(78,79,386),(79,81,387),(80,102,394),(81,81,395),(81,79,397),(83,102,414),(85,83,419),(85,103,422),(86,76,423),(86,88,424),(88,87,432),(88,83,434),(89,83,436),(89,104,436),(91,83,446),(91,103,446),(92,104,449),(93,103,451),(93,83,452),(93,88,453),(94,104,458),(95,83,462),(96,104,463),(98,83,473),(99,104,475),(99,83,476),(100,103,479),(102,83,487),(102,103,489),(104,83,498);
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
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cau`
--

LOCK TABLES `cau` WRITE;
/*!40000 ALTER TABLE `cau` DISABLE KEYS */;
INSERT INTO `cau` VALUES (45,19,'Để chèn dòng trống giữa dòng 1 và dòng 2, sau khi đã đặt con trỏ vào đầu dòng 2, chúng ta phải sử dụng phím'),(46,19,'Để dãn khoảng cách giữa các dòng là 1.5 line, cần thực hiện:'),(47,19,'Để lựa chọn toàn bộ một ô trong bảng, bạn sẽ'),(48,19,'Để tô màu nền cho một ô trong bảng cần thực hiện chọn ô này và thực hiện tiếp việc chọn màu từ:'),(49,19,'Để xem nhanh một tài liệu trước khi in cần thực hiện:'),(50,19,'Khẳng định nào sau đây là đúng:'),(51,19,'Khẳng định nào sau đây là đúng?'),(52,19,'Khẳng định nào sau đây là sai? Dữ liệu trộn thư (ví dụ, danh sách khách mời) có thể được lưu trữ trong:'),(53,19,'Để khởi động lại máy tính, phát biểu nào dưới đây là sai'),(54,19,'Để nhìn thấy các máy tính trong mạng nội bộ thì nhắp chọn biểu tượng có tên'),(55,19,'Để tắt máy tính đúng cách ta chọn'),(56,19,'Để xóa bỏ tệp tin trên đĩa mềm, người sử dụng\r\n'),(57,19,'Bạn mở Notepad và gõ thử vào đó một vài chữ, sau đó bạn nhấn chuột vào biểu tượng (x) ở góc phải trên của cửa sổ. Điều gì sẽ xảy ra'),(58,19,'Biểu tượng nào dưới đây là biểu tượng có sẵn của hệ thống MS-Windows'),(59,19,'Cửa sổ Excel thuộc loại:'),(60,19,'Trên Menu Bar của Cửa sổ Excel có một mục lệnh khác với Cửa sổ Word đó là :'),(61,19,'Cửa sổ Excel khác Cửa sổ Word vì có thêm'),(62,19,'Để xem nhanh trang bảng tính trước khi in, bạn sử dụng thao tác nào dưới đây'),(63,19,'Bạn đã nhập số 15 vào ô C6. Bạn nhấn vào nút nào để có thể ô C6 có giá trị là $15'),(64,19,'Ký tự nào sau đây không thuộc nhóm các ký tự kiểu số trong MS Excel'),(65,20,'Is Susan ........... home?'),(66,20,'\"Do the children go to school every day?\"'),(67,20,'What ............ now?\r\n'),(68,20,'They always go to school ............. bicycle.'),(69,20,'What color ........... his new car?'),(70,20,'What color ........... his new car?'),(71,20,'Are there many students in Room 12?\r\n'),(72,20,' You should do your ................. before going to class'),(73,20,'Mr. Pike ............ us English.'),(74,20,' Tom and ............. are going to the birthday party together.\r\n'),(75,20,' Our English lessons are ............... long.'),(76,20,' Bangkok is ............ capital of Thailand.\r\n'),(77,20,'There are .......... eggs on the table.'),(78,20,'Green and magenta are complementary colors located opposite each other\r\non the color wheel, ………………..'),(79,20,'A …………….. is a person who searches for valuable minerals.'),(80,20,'John F. Kennedy was the youngest president of the United States and\r\n………………. to be assassinated.'),(81,20,'Oscillatona, one of the few plants that can move about, ………………. a\r\nwavy, gliding motion.\r\n'),(82,20,'Anyone reproducing copyrighted works without permission of the holders of\r\nthe copyrights ………….. breaking the law.'),(83,20,'Civil engineers had better ………… to use steel supports in concrete\r\nstructures built on unstable geophysical sites.\r\n'),(84,20,' The exam results could …………….. your career.\r\n'),(85,21,'Muốn tóm tắt một văn bản chính luận cần'),(86,21,'Thế nào là luận cứ trong bài văn nghị luận?'),(87,21,'Nội dung quan trọng nhất trong văn bản \"Nhận đường\" (Nguyễn Đình Thi) là gì?'),(88,21,'Thế nào là luận chứng trong bài văn nghị luận?'),(89,21,'Quang Dũng viết bài thơ Tây Tiến bằng bút pháp:'),(90,21,'Bài thơ \"Đất nước\" thể hiện những cảm nhận của Nguyễn Đình Thi về:'),(91,21,'Trong bài thơ \"Đất nước\" của Nguyễn Đình Thi, khi nói về \"mùa thu nay\" chủ thể trữ tình đứng ở đâu để bộc lộ cảm xúc:'),(92,21,'Câu thơ nào sau đây (trích trong bài \"Tây Tiến\" của Quang Dũng) thể hiện rõ nét nhất cách nói vừa rất tự nhiên, hồn nhiên, vừa đậm chất lính?'),(93,21,'Có thể cho rằng \"Việt Bắc là khúc hùng ca, khúc tình ca về Cách mạng, về cuộc kháng chiến và con người kháng chiến\" vì bài thơ đã:'),(94,21,'Việt Bắc là một bài thơ có nghệ thuật biểu hiện đậm đà tính dân tộc bởi:'),(95,21,'Tác phẩm \"Đất nước\" của Nguyễn Khoa Điềm vốn là:'),(96,21,'Bài thơ \"Ngồi buồn nhớ Mẹ ta xưa\" của Nguyễn Duy có nội dung:'),(97,21,'Phong cách ngôn ngữ nghệ thuật được thể hiện ở những đặc trưng cơ bản nào:'),(98,21,'Chi tiết nào sau đây không chính xác khi giới thiệu về A Phủ(\"Vợ chồng A Phủ\" của Tô Hoài):'),(99,21,'Bài thơ \"Đất nước\" của Nguyễn Khoa Điềm tiêu biểu cho giọng thơ nào sau đây:'),(100,21,'Nét đẹp nổi bật đáng trân trọng ở bà cụ Tứ (\"Vợ nhặt\" của Kim Lân) là:'),(101,21,'Tác phẩm nào sau đây không phải của Nguyễn Trung Thành?'),(102,21,'Cảm hứng của tùy bút Sông Đà được khơi gợi từ:'),(103,21,'Tác phẩm nào sau đây không phải của Hê-ming-uê?'),(104,21,'Tác phẩm \"Thương nhớ mười hai\" của Vũ Bằng thuộc thể loại:');
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
) ENGINE=InnoDB AUTO_INCREMENT=499 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cau_dapan`
--

LOCK TABLES `cau_dapan` WRITE;
/*!40000 ALTER TABLE `cau_dapan` DISABLE KEYS */;
INSERT INTO `cau_dapan` VALUES (232,45,'','ENTER'),(233,45,'\0','TAB'),(234,45,'\0','CTRL'),(235,45,'\0','ESC'),(236,46,'','Cả hai cách A và B đều thực hiện được'),(237,46,'\0','Format/paragraph/line spacing'),(238,46,'\0','Nhấn Ctrl + 5 tại dòng đó'),(239,46,'\0','Cả 2 cách A và B đều không thực hiện được'),(240,47,'','Nhấn chuột ở vị trí góc trái dưới của ô đó'),(241,47,'\0','Bôi đen văn bản đang có trong ô đó'),(242,47,'\0','Nhấn chuột ở bên trên ô đó'),(243,47,'\0','Nhấn đúp chuột vào ô đó'),(244,48,'','Format / Border and Sharding'),(245,48,'\0','Fortmat / Background'),(246,48,'\0','Table / Background'),(247,48,'\0','Table/ Border and Sharding'),(248,49,'','Nhấn chuột vào nút Print Preview trên thanh công cụ Standard'),(249,49,'\0','Nhấn tổ hợp phím Ctrl+P'),(250,49,'\0','Nhấn chuột vào biểu tượng máy in trên thanh công cụ Standard'),(251,49,'\0','Cả ba cách trên đều cho ra cùng một kết quả'),(252,50,'','Không thể áp dụng chữ hoa đầu đoạn cho các đoạn được định dạng kiểu danh sách liệt kê'),(253,50,'\0','Chỉ có thể áp dụng chữ hoa đầu đoạn cho đoạn đầu tiên tài liệu'),(254,50,'\0','Có thể áp dụng chữ hoa đầu đoạn (Drop Cap) cho tất cả các đoạn trong tài liệu kể cả các đoạn văn bản nằm trong bảng (Table)'),(255,50,'\0','Không thể áp dụng chữ hoa đầu đoạn cho nhiều đoạn trong cùng một trang tài liệu'),(256,51,'','Tất cả các khẳng định trên đều chưa hợp lý.'),(257,51,'\0','Công cụ kiểm tra lỗi chính tả và ngữ pháp của Word cho phép kiểm tra lỗi chính tả và ngữ pháp trong tài liệu của bạn bằng mọi thứ tiếng, ngoại trừ tiếng Việt.'),(258,51,'\0','Để thiết lập chế độ kiểm tra chính tả và ngữ pháp, cần đánh dấu vào lựa chọn AutoCorrect trong thực đơn lệnh Tools.'),(259,51,'\0','Những từ mầu đỏ đưa ra trong hộp thoại Spelling and Grammar là những từ bị sai hoàn toàn, bắt buộc chúng ta phải sửa.'),(260,52,'','Tệp tin thực thi (có phần mở rộng .exe)'),(261,52,'\0','Tệp tin Word (có phần mở rộng là .doc)'),(262,52,'\0','Tệp tin văn bản (có phần mở rộng là .txt)'),(263,52,'\0','Tệp tin Excel (có phần mở rộng là .xls)'),(264,53,'','Bấm nút Power trên hộp máy'),(265,53,'\0','Nhấn tổ hợp phím Ctrl - Alt - Del, chọn mục Restart'),(266,53,'\0','Từ cửa sổ màn hình nền nhấn nút Start - Shutdown, sau đó chọn mục Restart'),(267,53,'\0','Bấm nút Reset trên hộp máy'),(272,54,'','My Computer'),(273,54,'\0','My Documents'),(274,54,'\0','My Network Places'),(275,54,'\0','My Network'),(276,55,'','Nhấn nút Start ở góc dưới bên trái màn hình nền, chọn mục Shutdown'),(277,55,'\0','Tắt nguồn điện'),(278,55,'\0','Bấm nút Power trên hộp máy'),(279,55,'\0','Bấm nút Reset trên hộp máy'),(280,56,'','Mở cửa sổ My Computer.'),(281,56,'\0','Nhắp chọn Internet Explorer.'),(282,56,'\0','Mở cửa sổ tìm kiếm tệp tin Search'),(283,56,'\0','Mở cửa sổ Files Manager.'),(284,57,'','Một hộp thoại sẽ bật ra'),(285,57,'\0','Cửa sổ trên được thu nhỏ lại thành một biểu tượng'),(286,57,'\0','Cửa sổ trên được đóng lại'),(287,57,'\0','Cửa sổ trên được phóng to ra'),(288,58,'','Cả ba biểu tượng nêu trên'),(289,58,'\0','My Computer'),(290,58,'\0','Internet Explorer'),(291,58,'\0','My Documents'),(292,59,'','Cửa sổ ứng dụng'),(293,59,'\0','Cửa sổ tư liệu.'),(294,59,'\0','Cửa sổ thƣ mục.'),(295,59,'\0','Tất cả đều đúng.'),(296,60,'','Data'),(297,60,'\0','Add-Ins'),(298,60,'\0','Filter'),(299,60,'\0','Subtotal'),(300,61,'','Formula Bar'),(301,61,'\0','Input Line'),(302,61,'\0','Cell Reference'),(303,62,'','Vào menu File, chọn Print Preview'),(304,62,'\0','Vào menu File, chọn Print'),(305,62,'\0','Vào menu View, chọn Zoom'),(306,62,'\0','Vào menu File, chọn Web Page Preview'),(307,63,'','Chọn ô C6 rồi nhấn chuột vào nút $ trên thanh công cụ'),(308,63,'\0','Vào thực đơn Format - Cells - Number - Scientific'),(309,63,'\0','Vào thực đơn Format - Cells - Alignment - Accounting'),(310,63,'\0','Cả ba cách trên đều đúng'),(311,64,'','o'),(312,64,'\0','0 1 2 3 4 5 6 7 8 9 + -'),(313,64,'\0','$ ( )'),(314,64,'\0','% E'),(315,65,'','at'),(316,65,'\0','in'),(317,65,'\0','on'),(318,65,'\0','under'),(322,66,'','Yes, they do.'),(323,66,'\0','Yes, they go.'),(324,66,'\0','They go.'),(325,67,'',' is the time'),(326,67,'\0',' does the time'),(327,67,'\0','is time'),(328,67,'\0','is it'),(329,68,'','by'),(330,68,'\0','with'),(331,68,'\0','in'),(332,68,'\0','on'),(333,69,'','by'),(334,69,'\0','with'),(335,69,'\0','in'),(336,69,'\0','on'),(344,71,'','Yes there are.'),(345,71,'\0',' Yes, they are.'),(346,71,'\0','Some are'),(347,72,'','homework'),(348,72,'\0','home work'),(349,72,'\0','homeworks'),(350,72,'\0','housework'),(351,73,'','teaches'),(352,73,'\0',' teach'),(353,73,'\0','teaching'),(354,73,'\0','to teach'),(355,74,'','I'),(356,74,'\0','me'),(357,74,'\0','my'),(358,74,'\0','mine'),(363,70,'','is'),(364,70,'\0','have'),(365,70,'\0','does'),(366,70,'\0','are'),(367,75,'','very'),(368,75,'\0','a lot of'),(369,75,'\0','many'),(370,75,'\0','much'),(371,76,'','the'),(372,76,'\0','a'),(373,76,'\0','an'),(374,76,'\0','one'),(379,77,'','some'),(380,77,'\0','any'),(381,77,'\0','many'),(382,77,'\0','much'),(383,78,'',' and so are blue and yellow'),(384,78,'\0','and blue and yellow so'),(385,78,'\0',' and too blue and yellow'),(386,78,'\0','and so blue and yellow do'),(387,79,'','prospector'),(388,79,'\0','prospects'),(389,79,'\0','prospect'),(390,79,'\0',' prospective'),(391,80,'','the fourth'),(392,80,'\0',' fourth'),(393,80,'\0','four'),(394,80,'\0','the four'),(395,81,'',' has'),(396,81,'\0','having'),(397,81,'\0','being'),(398,81,'\0','with'),(407,84,'','determine'),(408,84,'\0','determinant'),(409,84,'\0',' determination'),(410,84,'\0',' determined'),(411,83,'','plan'),(412,83,'\0',' planning'),(413,83,'\0',' to plan'),(414,83,'\0','plans'),(415,82,'','is'),(416,82,'\0','are'),(417,82,'\0','was'),(418,82,'\0','were'),(419,85,'',' nêu rõ luận đề cùng các luận điểm chính bằng lời văn ngắn gọn.'),(420,85,'\0','nêu rõ luận đề bằng lời văn ngắn gọn, súc tích.'),(421,85,'\0','nêu rõ luận điểm chính và các luận cứ tiêu biểu.'),(422,85,'\0','nêu được nội dung cơ bản một cách ngắn gọn.'),(423,86,'',' Là các tài liệu dùng làm cơ sở thuyết minh luận điểm.'),(424,86,'\0','Là ý kiến của người viết về vấn đề được bàn luận trong bài văn.'),(425,86,'\0','Là cách thức, phương pháp triển khai vấn đề trong bài văn.'),(426,86,'\0','Là những quan niệm, đánh giá của người viết về vấn đề được bàn luận.'),(427,87,'','Khẳng định văn nghệ sĩ phải phục vụ cuộc chiến đấu của dân tộc.'),(428,87,'\0','Khẳng định giá trị của văn học nghệ thuật đối với cuộc sống.'),(429,87,'\0','Đề cao vai trò của quan điểm nghệ thuật trong sáng tác.'),(430,87,'\0','Ngợi ca những tác phẩm viết về cuộc kháng chiến chống Pháp.'),(431,88,'',' Là cách phối hợp, tổ chức các lý lẽ và dẫn chứng để thuyết minh cho luận điểm.'),(432,88,'\0','Là cách sử dụng và phân tích dẫn chứng để làm sáng tỏ vấn đề cần bàn luận.'),(433,88,'\0','Là việc sử dụng kết hợp giữa lý lẽ và dẫn chứng thực tế để làm sáng tỏ vấn đề.'),(434,88,'\0','Là cách sử dụng và phân tích lý lẽ để làm sáng tỏ vấn đề cần bàn luận.'),(435,89,'','lãng mạn'),(436,89,'\0','hiện thực'),(437,89,'\0','trào lộng'),(438,89,'\0','châm biếm, mỉa mai'),(439,90,'','đất nước Việt Nam hiền hòa, đau thương nhưng quật khởi, hào hùng trong kháng chiến.'),(440,90,'\0','vẻ đẹp mùa thu Hà Nội những ngày đầu kháng chiến chống Pháp.'),(441,90,'\0','vẻ đẹp mùa thu Việt Bắc trong hiện tại miền Bắc giành được độc lập.'),(442,90,'\0','tội ác tày trời của kẻ thù và sức vùng dậy quật khởi của nhân dân ta.'),(443,91,'','Việt Bắc'),(444,91,'\0','Phố phường Hà Nội'),(445,91,'\0','Tây Ninh'),(446,91,'\0','Tây Bắc'),(447,92,'','Heo hút cồn mây súng ngửi trời.'),(448,92,'\0','Mường lát hoa về trong đêm hơi.'),(449,92,'\0','Nhớ ôi Tây Tiến cơm lên khói.'),(450,92,'\0','Nhớ về rừng núi nhớ chơi vơi'),(451,93,'','ghi lại chặng đường Cách mạng và kháng chiến gian khổ mà anh hùng, nhất là tình nghĩa gắn bó thắm thiết của những người kháng chiến với Việt Bắc, với nhân dân đất nước.'),(452,93,'\0','miêu tả thành công bức tranh thiên nhiên và con người Việt Bắc trong kháng chiến.'),(453,93,'\0','ca ngợi Cách mạng, ca ngợi Đảng, ca ngợi Bác Hồ và tình nghĩa của nhân dân Việt Bắc.'),(454,93,'\0','thể hiện sâu sắc tình nghĩa thủy chung giữa người cán bộ Cách mạng với nhân dân Việt Bắc.'),(455,94,'','thể thơ lục bát, kết cấu đối đáp của ca dao, ngôn ngữ giàu hình ảnh và đậm sắc thái dân gian.'),(456,94,'\0','thể thơ lục bát, kết cấu đối đáp giao duyên của ca dao.'),(457,94,'\0','ngôn ngữ thơ gần gũi lời ăn tiếng nói của nhân dân.'),(458,94,'\0','sử dụng nhiều ca dao, thành ngữ, tục ngữ'),(459,95,'','thể thơ đối đáp, kết cấu đối đáp của ca dao, ngôn ngữ giàu hình ảnh và đậm sắc thái dân gian'),(460,95,'\0','Một đoạn trích trong trường ca \"Mặt đường khát vọng\"'),(461,95,'\0','ngôn ngữ thơ gần gũi với lời ăn tiếng nói của nhân dân'),(462,95,'\0','sử dụng nhiều thành ngữ, ca dao, tục ngữ.'),(463,96,'','ca ngợi công ơn và tấm lòng yêu thương mênh mông, hy sinh tất cả vì con của người mẹ.'),(464,96,'\0','kể về công ơn sinh thành, dưỡng dục của người mẹ.'),(465,96,'\0','ca ngợi đức hy sinh của người mẹ.'),(466,96,'\0','bộc lộ lòng biết ơn đối với người mẹ.'),(467,97,'','Tính hình tượng, tính truyền cảm, tính cá thể hóa.'),(468,97,'\0','Tính trừu tượng, tính truyền cảm, tính cá thể hóa.'),(469,97,'\0','Tính truyền cảm, tính tượng hình, tính tượng thanh.'),(470,97,'\0','Tính tượng hình, tính tượng thanh, tính biểu cảm.'),(471,98,'','A Phủ là người yêu của Mị.'),(472,98,'\0','A Phủ khỏe, chạy nhanh như ngựa.'),(473,98,'\0','A Phủ cày giỏi và đi săn bò tót rất bạo.'),(474,98,'\0',' A Phủ mồ côi, nghèo khổ và không thể lấy vợ.'),(475,99,'','Trữ tình - Chính luận.'),(476,99,'\0','Trữ tình - Triết lý.'),(477,99,'\0','Trữ tình - lãng mạn.'),(478,99,'\0','Trữ tình - Chính trị.'),(479,100,'','nhân hậu, giàu tình thương yêu.'),(480,100,'\0','chịu thương chịu khó.'),(481,100,'\0','cần mẫn lao động.'),(482,100,'\0','giản dị, chất phác.'),(483,101,'','Bức thư Cà Mau'),(484,101,'\0','Đất nước đứng lên'),(485,101,'\0','Rừng xà nu'),(486,101,'\0','Đất Quảng'),(487,102,'','hình ảnh thiên nhiên Tây Bắc.'),(488,102,'\0','hiện thực cuộc kháng chiến chống Pháp ở Tây Bắc.'),(489,102,'\0','thực tiễn xây dựng cuộc sống mới ở Tây Bắc.'),(490,102,'\0','hình ảnh con sông Đà.'),(491,103,'','Tự do'),(492,103,'\0','Ông già và biển cả.'),(493,103,'\0','Giã từ vũ khí.'),(494,103,'\0','Chuông nguyện hồn ai.'),(495,104,'','Bút kí- tùy bút.'),(496,104,'\0','Truyện ngắn'),(497,104,'\0','Hồi kí'),(498,104,'\0','Phóng sự');
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
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `linhvuc`
--

LOCK TABLES `linhvuc` WRITE;
/*!40000 ALTER TABLE `linhvuc` DISABLE KEYS */;
INSERT INTO `linhvuc` VALUES (19,'Tin Học','',''),(20,'Tiếng Anh','',''),(21,'Ngữ Văn','','');
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

-- Dump completed on 2016-05-12 23:08:54
