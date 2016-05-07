-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2016 at 06:32 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlthiolympicdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bailam`
--

CREATE TABLE `bailam` (
  `bailam_id` int(11) NOT NULL,
  `nguoidung_id` int(11) NOT NULL,
  `linhvuc_id` int(11) NOT NULL,
  `thoigiannop` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bailam`
--

INSERT INTO `bailam` (`bailam_id`, `nguoidung_id`, `linhvuc_id`, `thoigiannop`) VALUES
(1, 1, 1, '2016-05-12 00:00:00'),
(2, 1, 2, '2016-05-13 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `bailam_cau`
--

CREATE TABLE `bailam_cau` (
  `cau_id` int(11) NOT NULL,
  `bailam_id` int(11) NOT NULL,
  `dapannguoidung_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bailam_cau`
--

INSERT INTO `bailam_cau` (`cau_id`, `bailam_id`, `dapannguoidung_id`) VALUES
(3, 1, 1),
(3, 2, 2),
(5, 1, 6),
(5, 2, 8),
(6, 1, 12),
(6, 2, 12),
(7, 2, 13),
(7, 1, 14);

-- --------------------------------------------------------

--
-- Table structure for table `cau`
--

CREATE TABLE `cau` (
  `cau_id` int(11) NOT NULL,
  `linhvuc_id` int(11) NOT NULL,
  `noidung` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cau`
--

INSERT INTO `cau` (`cau_id`, `linhvuc_id`, `noidung`) VALUES
(3, 2, 'Máy tính ra đời khi nào?'),
(5, 1, '1 + 1 = ?'),
(6, 1, '2 + 2 = ?'),
(7, 2, 'Mạng Internet có ảnh hưởng như nào?');

-- --------------------------------------------------------

--
-- Table structure for table `cau_dapan`
--

CREATE TABLE `cau_dapan` (
  `cau_dapan_id` int(11) NOT NULL,
  `cau_id` int(11) NOT NULL,
  `dapandung` bit(1) NOT NULL,
  `noidungdapan` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cau_dapan`
--

INSERT INTO `cau_dapan` (`cau_dapan_id`, `cau_id`, `dapandung`, `noidungdapan`) VALUES
(1, 3, b'0', '1965'),
(2, 3, b'1', '1964'),
(3, 3, b'0', '1765'),
(4, 3, b'0', '1969'),
(5, 5, b'0', '1'),
(6, 5, b'1', '2'),
(7, 5, b'0', '3'),
(8, 5, b'0', '4'),
(9, 6, b'0', '2'),
(10, 6, b'1', '4'),
(11, 6, b'0', '6'),
(12, 6, b'0', '8'),
(13, 7, b'0', 'Có như không '),
(14, 7, b'1', 'Toàn cầu');

-- --------------------------------------------------------

--
-- Table structure for table `linhvuc`
--

CREATE TABLE `linhvuc` (
  `linhvuc_id` int(11) NOT NULL,
  `ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `linhvuc`
--

INSERT INTO `linhvuc` (`linhvuc_id`, `ten`) VALUES
(1, 'Toan'),
(2, 'Tin'),
(3, 'Anh Văn'),
(4, 'Anh Văn 2');

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `nguoidung_id` int(11) NOT NULL,
  `ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date DEFAULT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tendangnhap` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`nguoidung_id`, `ten`, `ngaysinh`, `diachi`, `tendangnhap`, `password`) VALUES
(1, 'Huỳnh Đức Phúc', '2016-05-11', 'Đà Nẵng', 'ducphuc', '123456'),
(2, 'Lê Văn A', '2016-05-03', 'Quãng Nam', 'levana', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bailam`
--
ALTER TABLE `bailam`
  ADD PRIMARY KEY (`bailam_id`),
  ADD KEY `fk_bailam_linhvuc` (`linhvuc_id`),
  ADD KEY `fk_bailam_nguoidung` (`nguoidung_id`);

--
-- Indexes for table `bailam_cau`
--
ALTER TABLE `bailam_cau`
  ADD PRIMARY KEY (`cau_id`,`bailam_id`),
  ADD KEY `fk_bailamcau_caudapan` (`dapannguoidung_id`),
  ADD KEY `fk_bailamcau_bailam` (`bailam_id`);

--
-- Indexes for table `cau`
--
ALTER TABLE `cau`
  ADD PRIMARY KEY (`cau_id`),
  ADD KEY `fk_cau_linhvuc` (`linhvuc_id`);

--
-- Indexes for table `cau_dapan`
--
ALTER TABLE `cau_dapan`
  ADD PRIMARY KEY (`cau_dapan_id`),
  ADD KEY `fk_caudapan_cau` (`cau_id`);

--
-- Indexes for table `linhvuc`
--
ALTER TABLE `linhvuc`
  ADD PRIMARY KEY (`linhvuc_id`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`nguoidung_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bailam`
--
ALTER TABLE `bailam`
  MODIFY `bailam_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cau`
--
ALTER TABLE `cau`
  MODIFY `cau_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `cau_dapan`
--
ALTER TABLE `cau_dapan`
  MODIFY `cau_dapan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `linhvuc`
--
ALTER TABLE `linhvuc`
  MODIFY `linhvuc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `nguoidung_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bailam`
--
ALTER TABLE `bailam`
  ADD CONSTRAINT `fk_bailam_linhvuc` FOREIGN KEY (`linhvuc_id`) REFERENCES `linhvuc` (`linhvuc_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_bailam_nguoidung` FOREIGN KEY (`nguoidung_id`) REFERENCES `nguoidung` (`nguoidung_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bailam_cau`
--
ALTER TABLE `bailam_cau`
  ADD CONSTRAINT `fk_bailamcau_bailam` FOREIGN KEY (`bailam_id`) REFERENCES `bailam` (`bailam_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_bailamcau_cau` FOREIGN KEY (`cau_id`) REFERENCES `cau` (`cau_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_bailamcau_caudapan` FOREIGN KEY (`dapannguoidung_id`) REFERENCES `cau_dapan` (`cau_dapan_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `cau`
--
ALTER TABLE `cau`
  ADD CONSTRAINT `fk_cau_linhvuc` FOREIGN KEY (`linhvuc_id`) REFERENCES `linhvuc` (`linhvuc_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cau_dapan`
--
ALTER TABLE `cau_dapan`
  ADD CONSTRAINT `fk_caudapan_cau` FOREIGN KEY (`cau_id`) REFERENCES `cau` (`cau_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
