-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2016 at 06:37 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '123456'),
(2, 'ducphuc', '123456');

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
(6, 1, 10),
(34, 1, 146),
(3, 1, 168);

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
(3, 3, 'Máy tính ra đời khi nào?'),
(5, 2, '1 + 1 = ?'),
(6, 1, '2 + 2 = ?'),
(34, 15, 'câu anh văn mới thêm !'),
(35, 3, 'câu hỏi anh văn 1'),
(36, 2, 'câu hỏi về tin '),
(37, 2, 'câu hỏi tin văn phòng'),
(38, 2, 'ngôn ngữ lập trình'),
(39, 2, 'câu hỏi thông cmn minh'),
(40, 2, 'Câu hỏi VIp'),
(41, 2, 'Câu hỏi 100tr'),
(42, 2, 'Nội dung '),
(43, 2, 'éo thể tin được?'),
(44, 2, 'Tin học đại cương');

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
(9, 6, b'0', '2'),
(10, 6, b'1', '4'),
(11, 6, b'0', '6'),
(12, 6, b'0', '8'),
(144, 34, b'1', 'câu anh văn đúng'),
(145, 34, b'0', 'câu anh văn sai'),
(146, 34, b'0', 'câu anh văn sai lần 3'),
(147, 34, b'0', 'sua roi '),
(148, 34, b'0', 'nghe'),
(149, 34, b'0', 'roi'),
(150, 34, b'0', '1231'),
(151, 34, b'0', '123123'),
(161, 3, b'1', '1964'),
(162, 3, b'0', '1965'),
(163, 3, b'0', '1765'),
(164, 3, b'0', '1969'),
(165, 3, b'0', '1765'),
(166, 3, b'0', '1969'),
(167, 3, b'0', '1765'),
(168, 3, b'0', '1969'),
(169, 3, b'0', '1994'),
(170, 3, b'0', '1965'),
(171, 35, b'1', 'đáp án đúng'),
(172, 35, b'0', 'sai 1'),
(173, 35, b'0', 'sai 2'),
(174, 35, b'0', 'sai3'),
(175, 35, b'0', 'sai 4'),
(176, 36, b'1', 'đáp án đúng1'),
(177, 36, b'0', 'đáp án  sai 1'),
(178, 36, b'0', 'đáp án  2'),
(179, 36, b'0', 'đáp án sai 3'),
(180, 37, b'1', 'đáp án '),
(181, 37, b'0', 'đáp án 1'),
(182, 37, b'0', 'đáp án 2'),
(183, 38, b'1', 'C++'),
(184, 38, b'0', 'Java'),
(185, 38, b'0', 'C#'),
(186, 39, b'1', 'đáp án đúng'),
(187, 39, b'0', 'đáp án '),
(188, 39, b'0', 'đáp án  sai 1'),
(189, 39, b'0', 'đáp án  sai 12'),
(190, 39, b'0', 'đáp án 123'),
(191, 40, b'1', '10k'),
(192, 40, b'0', '20k'),
(193, 40, b'0', '30k'),
(194, 40, b'0', '100k'),
(199, 5, b'1', '222222'),
(200, 5, b'0', '1'),
(201, 5, b'0', '5'),
(202, 5, b'0', '6'),
(203, 5, b'0', '7'),
(204, 42, b'1', 'tin đúng '),
(205, 42, b'0', 'tin sai'),
(206, 42, b'0', 'tin sai lần 2'),
(207, 42, b'0', 'tin sai lần nữa'),
(213, 44, b'1', 'C'),
(214, 44, b'0', 'C++'),
(215, 44, b'0', 'C#'),
(216, 43, b'1', 'đúng'),
(217, 43, b'0', 'sai'),
(218, 41, b'1', 'đố làm được'),
(219, 41, b'0', 'làm được'),
(220, 41, b'0', 'chắc làm được'),
(221, 41, b'0', 'chắc chắn làm được');

-- --------------------------------------------------------

--
-- Table structure for table `linhvuc`
--

CREATE TABLE `linhvuc` (
  `linhvuc_id` int(11) NOT NULL,
  `ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mota` text COLLATE utf8_unicode_ci,
  `anh` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `linhvuc`
--

INSERT INTO `linhvuc` (`linhvuc_id`, `ten`, `mota`, `anh`) VALUES
(1, 'Toan Cao Cấp 1', '', ''),
(2, 'Tin', NULL, NULL),
(3, 'Anh Văn', NULL, NULL),
(5, 'Phuc', NULL, NULL),
(7, 'phuc', NULL, NULL),
(8, 'phuc', NULL, NULL),
(9, '123', NULL, NULL),
(10, '1', NULL, NULL),
(14, 'qưe', NULL, NULL),
(15, '1231231232', NULL, NULL),
(16, '123', NULL, NULL),
(17, 'Phúc đức', 'có mô tả', 'éo'),
(18, '1', '1', '');

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
  `matkhau` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`nguoidung_id`, `ten`, `ngaysinh`, `diachi`, `tendangnhap`, `matkhau`) VALUES
(1, 'Huỳnh Đức Phúc', '1111-11-30', 'Đà Nẵng', 'ducphuc', '123456'),
(2, 'Lê Văn A', '1111-05-03', 'Quãng Nam', 'levana', '123456'),
(3, 'phúc', '1111-11-30', 'da', '123', '123'),
(4, '123', '0000-00-00', '13', '133', '13'),
(8, 'sdádasda', '1994-06-18', 'qưeqwe', 'qưeqwe', 'qưeqeq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `bailam`
--
ALTER TABLE `bailam`
  MODIFY `bailam_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cau`
--
ALTER TABLE `cau`
  MODIFY `cau_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `cau_dapan`
--
ALTER TABLE `cau_dapan`
  MODIFY `cau_dapan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=222;
--
-- AUTO_INCREMENT for table `linhvuc`
--
ALTER TABLE `linhvuc`
  MODIFY `linhvuc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `nguoidung_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
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
  ADD CONSTRAINT `fk_bailamcau_bailam` FOREIGN KEY (`bailam_id`) REFERENCES `bailam` (`bailam_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_bailamcau_cau` FOREIGN KEY (`cau_id`) REFERENCES `cau` (`cau_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_bailamcau_caudapan` FOREIGN KEY (`dapannguoidung_id`) REFERENCES `cau_dapan` (`cau_dapan_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
