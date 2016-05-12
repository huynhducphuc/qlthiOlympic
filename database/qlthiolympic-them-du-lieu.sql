-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2016 at 03:11 PM
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
  `thoigiannop` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bailam_cau`
--

CREATE TABLE `bailam_cau` (
  `cau_id` int(11) NOT NULL,
  `bailam_id` int(11) NOT NULL,
  `dapannguoidung_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(45, 19, 'Để chèn dòng trống giữa dòng 1 và dòng 2, sau khi đã đặt con trỏ vào đầu dòng 2, chúng ta phải sử dụng phím'),
(46, 19, 'Để dãn khoảng cách giữa các dòng là 1.5 line, cần thực hiện:'),
(47, 19, 'Để lựa chọn toàn bộ một ô trong bảng, bạn sẽ'),
(48, 19, 'Để tô màu nền cho một ô trong bảng cần thực hiện chọn ô này và thực hiện tiếp việc chọn màu từ:'),
(49, 19, 'Để xem nhanh một tài liệu trước khi in cần thực hiện:'),
(50, 19, 'Khẳng định nào sau đây là đúng:'),
(51, 19, 'Khẳng định nào sau đây là đúng?'),
(52, 19, 'Khẳng định nào sau đây là sai? Dữ liệu trộn thư (ví dụ, danh sách khách mời) có thể được lưu trữ trong:'),
(53, 19, 'Để khởi động lại máy tính, phát biểu nào dưới đây là sai'),
(54, 19, 'Để nhìn thấy các máy tính trong mạng nội bộ thì nhắp chọn biểu tượng có tên'),
(55, 19, 'Để tắt máy tính đúng cách ta chọn'),
(56, 19, 'Để xóa bỏ tệp tin trên đĩa mềm, người sử dụng\r\n'),
(57, 19, 'Bạn mở Notepad và gõ thử vào đó một vài chữ, sau đó bạn nhấn chuột vào biểu tượng (x) ở góc phải trên của cửa sổ. Điều gì sẽ xảy ra'),
(58, 19, 'Biểu tượng nào dưới đây là biểu tượng có sẵn của hệ thống MS-Windows'),
(59, 19, 'Cửa sổ Excel thuộc loại:'),
(60, 19, 'Trên Menu Bar của Cửa sổ Excel có một mục lệnh khác với Cửa sổ Word đó là :'),
(61, 19, 'Cửa sổ Excel khác Cửa sổ Word vì có thêm'),
(62, 19, 'Để xem nhanh trang bảng tính trước khi in, bạn sử dụng thao tác nào dưới đây'),
(63, 19, 'Bạn đã nhập số 15 vào ô C6. Bạn nhấn vào nút nào để có thể ô C6 có giá trị là $15'),
(64, 19, 'Ký tự nào sau đây không thuộc nhóm các ký tự kiểu số trong MS Excel'),
(65, 20, 'Is Susan ........... home?'),
(66, 20, '"Do the children go to school every day?"'),
(67, 20, 'What ............ now?\r\n'),
(68, 20, 'They always go to school ............. bicycle.'),
(69, 20, 'What color ........... his new car?'),
(70, 20, 'What color ........... his new car?'),
(71, 20, 'Are there many students in Room 12?\r\n'),
(72, 20, ' You should do your ................. before going to class'),
(73, 20, 'Mr. Pike ............ us English.'),
(74, 20, ' Tom and ............. are going to the birthday party together.\r\n'),
(75, 20, ' Our English lessons are ............... long.'),
(76, 20, ' Bangkok is ............ capital of Thailand.\r\n'),
(77, 20, 'There are .......... eggs on the table.'),
(78, 20, 'Green and magenta are complementary colors located opposite each other\r\non the color wheel, ………………..'),
(79, 20, 'A …………….. is a person who searches for valuable minerals.'),
(80, 20, 'John F. Kennedy was the youngest president of the United States and\r\n………………. to be assassinated.'),
(81, 20, 'Oscillatona, one of the few plants that can move about, ………………. a\r\nwavy, gliding motion.\r\n'),
(82, 20, 'Anyone reproducing copyrighted works without permission of the holders of\r\nthe copyrights ………….. breaking the law.'),
(83, 20, 'Civil engineers had better ………… to use steel supports in concrete\r\nstructures built on unstable geophysical sites.\r\n'),
(84, 20, ' The exam results could …………….. your career.\r\n'),
(85, 21, 'Muốn tóm tắt một văn bản chính luận cần'),
(86, 21, 'Thế nào là luận cứ trong bài văn nghị luận?'),
(87, 21, 'Nội dung quan trọng nhất trong văn bản "Nhận đường" (Nguyễn Đình Thi) là gì?'),
(88, 21, 'Thế nào là luận chứng trong bài văn nghị luận?'),
(89, 21, 'Quang Dũng viết bài thơ Tây Tiến bằng bút pháp:'),
(90, 21, 'Bài thơ "Đất nước" thể hiện những cảm nhận của Nguyễn Đình Thi về:'),
(91, 21, 'Trong bài thơ "Đất nước" của Nguyễn Đình Thi, khi nói về "mùa thu nay" chủ thể trữ tình đứng ở đâu để bộc lộ cảm xúc:'),
(92, 21, 'Câu thơ nào sau đây (trích trong bài "Tây Tiến" của Quang Dũng) thể hiện rõ nét nhất cách nói vừa rất tự nhiên, hồn nhiên, vừa đậm chất lính?'),
(93, 21, 'Có thể cho rằng "Việt Bắc là khúc hùng ca, khúc tình ca về Cách mạng, về cuộc kháng chiến và con người kháng chiến" vì bài thơ đã:'),
(94, 21, 'Việt Bắc là một bài thơ có nghệ thuật biểu hiện đậm đà tính dân tộc bởi:'),
(95, 21, 'Tác phẩm "Đất nước" của Nguyễn Khoa Điềm vốn là:'),
(96, 21, 'Bài thơ "Ngồi buồn nhớ Mẹ ta xưa" của Nguyễn Duy có nội dung:'),
(97, 21, 'Phong cách ngôn ngữ nghệ thuật được thể hiện ở những đặc trưng cơ bản nào:'),
(98, 21, 'Chi tiết nào sau đây không chính xác khi giới thiệu về A Phủ("Vợ chồng A Phủ" của Tô Hoài):'),
(99, 21, 'Bài thơ "Đất nước" của Nguyễn Khoa Điềm tiêu biểu cho giọng thơ nào sau đây:'),
(100, 21, 'Nét đẹp nổi bật đáng trân trọng ở bà cụ Tứ ("Vợ nhặt" của Kim Lân) là:'),
(101, 21, 'Tác phẩm nào sau đây không phải của Nguyễn Trung Thành?'),
(102, 21, 'Cảm hứng của tùy bút Sông Đà được khơi gợi từ:'),
(103, 21, 'Tác phẩm nào sau đây không phải của Hê-ming-uê?'),
(104, 21, 'Tác phẩm "Thương nhớ mười hai" của Vũ Bằng thuộc thể loại:');

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
(232, 45, b'1', 'ENTER'),
(233, 45, b'0', 'TAB'),
(234, 45, b'0', 'CTRL'),
(235, 45, b'0', 'ESC'),
(236, 46, b'1', 'Cả hai cách A và B đều thực hiện được'),
(237, 46, b'0', 'Format/paragraph/line spacing'),
(238, 46, b'0', 'Nhấn Ctrl + 5 tại dòng đó'),
(239, 46, b'0', 'Cả 2 cách A và B đều không thực hiện được'),
(240, 47, b'1', 'Nhấn chuột ở vị trí góc trái dưới của ô đó'),
(241, 47, b'0', 'Bôi đen văn bản đang có trong ô đó'),
(242, 47, b'0', 'Nhấn chuột ở bên trên ô đó'),
(243, 47, b'0', 'Nhấn đúp chuột vào ô đó'),
(244, 48, b'1', 'Format / Border and Sharding'),
(245, 48, b'0', 'Fortmat / Background'),
(246, 48, b'0', 'Table / Background'),
(247, 48, b'0', 'Table/ Border and Sharding'),
(248, 49, b'1', 'Nhấn chuột vào nút Print Preview trên thanh công cụ Standard'),
(249, 49, b'0', 'Nhấn tổ hợp phím Ctrl+P'),
(250, 49, b'0', 'Nhấn chuột vào biểu tượng máy in trên thanh công cụ Standard'),
(251, 49, b'0', 'Cả ba cách trên đều cho ra cùng một kết quả'),
(252, 50, b'1', 'Không thể áp dụng chữ hoa đầu đoạn cho các đoạn được định dạng kiểu danh sách liệt kê'),
(253, 50, b'0', 'Chỉ có thể áp dụng chữ hoa đầu đoạn cho đoạn đầu tiên tài liệu'),
(254, 50, b'0', 'Có thể áp dụng chữ hoa đầu đoạn (Drop Cap) cho tất cả các đoạn trong tài liệu kể cả các đoạn văn bản nằm trong bảng (Table)'),
(255, 50, b'0', 'Không thể áp dụng chữ hoa đầu đoạn cho nhiều đoạn trong cùng một trang tài liệu'),
(256, 51, b'1', 'Tất cả các khẳng định trên đều chưa hợp lý.'),
(257, 51, b'0', 'Công cụ kiểm tra lỗi chính tả và ngữ pháp của Word cho phép kiểm tra lỗi chính tả và ngữ pháp trong tài liệu của bạn bằng mọi thứ tiếng, ngoại trừ tiếng Việt.'),
(258, 51, b'0', 'Để thiết lập chế độ kiểm tra chính tả và ngữ pháp, cần đánh dấu vào lựa chọn AutoCorrect trong thực đơn lệnh Tools.'),
(259, 51, b'0', 'Những từ mầu đỏ đưa ra trong hộp thoại Spelling and Grammar là những từ bị sai hoàn toàn, bắt buộc chúng ta phải sửa.'),
(260, 52, b'1', 'Tệp tin thực thi (có phần mở rộng .exe)'),
(261, 52, b'0', 'Tệp tin Word (có phần mở rộng là .doc)'),
(262, 52, b'0', 'Tệp tin văn bản (có phần mở rộng là .txt)'),
(263, 52, b'0', 'Tệp tin Excel (có phần mở rộng là .xls)'),
(264, 53, b'1', 'Bấm nút Power trên hộp máy'),
(265, 53, b'0', 'Nhấn tổ hợp phím Ctrl - Alt - Del, chọn mục Restart'),
(266, 53, b'0', 'Từ cửa sổ màn hình nền nhấn nút Start - Shutdown, sau đó chọn mục Restart'),
(267, 53, b'0', 'Bấm nút Reset trên hộp máy'),
(272, 54, b'1', 'My Computer'),
(273, 54, b'0', 'My Documents'),
(274, 54, b'0', 'My Network Places'),
(275, 54, b'0', 'My Network'),
(276, 55, b'1', 'Nhấn nút Start ở góc dưới bên trái màn hình nền, chọn mục Shutdown'),
(277, 55, b'0', 'Tắt nguồn điện'),
(278, 55, b'0', 'Bấm nút Power trên hộp máy'),
(279, 55, b'0', 'Bấm nút Reset trên hộp máy'),
(280, 56, b'1', 'Mở cửa sổ My Computer.'),
(281, 56, b'0', 'Nhắp chọn Internet Explorer.'),
(282, 56, b'0', 'Mở cửa sổ tìm kiếm tệp tin Search'),
(283, 56, b'0', 'Mở cửa sổ Files Manager.'),
(284, 57, b'1', 'Một hộp thoại sẽ bật ra'),
(285, 57, b'0', 'Cửa sổ trên được thu nhỏ lại thành một biểu tượng'),
(286, 57, b'0', 'Cửa sổ trên được đóng lại'),
(287, 57, b'0', 'Cửa sổ trên được phóng to ra'),
(288, 58, b'1', 'Cả ba biểu tượng nêu trên'),
(289, 58, b'0', 'My Computer'),
(290, 58, b'0', 'Internet Explorer'),
(291, 58, b'0', 'My Documents'),
(292, 59, b'1', 'Cửa sổ ứng dụng'),
(293, 59, b'0', 'Cửa sổ tư liệu.'),
(294, 59, b'0', 'Cửa sổ thƣ mục.'),
(295, 59, b'0', 'Tất cả đều đúng.'),
(296, 60, b'1', 'Data'),
(297, 60, b'0', 'Add-Ins'),
(298, 60, b'0', 'Filter'),
(299, 60, b'0', 'Subtotal'),
(300, 61, b'1', 'Formula Bar'),
(301, 61, b'0', 'Input Line'),
(302, 61, b'0', 'Cell Reference'),
(303, 62, b'1', 'Vào menu File, chọn Print Preview'),
(304, 62, b'0', 'Vào menu File, chọn Print'),
(305, 62, b'0', 'Vào menu View, chọn Zoom'),
(306, 62, b'0', 'Vào menu File, chọn Web Page Preview'),
(307, 63, b'1', 'Chọn ô C6 rồi nhấn chuột vào nút $ trên thanh công cụ'),
(308, 63, b'0', 'Vào thực đơn Format - Cells - Number - Scientific'),
(309, 63, b'0', 'Vào thực đơn Format - Cells - Alignment - Accounting'),
(310, 63, b'0', 'Cả ba cách trên đều đúng'),
(311, 64, b'1', 'o'),
(312, 64, b'0', '0 1 2 3 4 5 6 7 8 9 + -'),
(313, 64, b'0', '$ ( )'),
(314, 64, b'0', '% E'),
(315, 65, b'1', 'at'),
(316, 65, b'0', 'in'),
(317, 65, b'0', 'on'),
(318, 65, b'0', 'under'),
(322, 66, b'1', 'Yes, they do.'),
(323, 66, b'0', 'Yes, they go.'),
(324, 66, b'0', 'They go.'),
(325, 67, b'1', ' is the time'),
(326, 67, b'0', ' does the time'),
(327, 67, b'0', 'is time'),
(328, 67, b'0', 'is it'),
(329, 68, b'1', 'by'),
(330, 68, b'0', 'with'),
(331, 68, b'0', 'in'),
(332, 68, b'0', 'on'),
(333, 69, b'1', 'by'),
(334, 69, b'0', 'with'),
(335, 69, b'0', 'in'),
(336, 69, b'0', 'on'),
(344, 71, b'1', 'Yes there are.'),
(345, 71, b'0', ' Yes, they are.'),
(346, 71, b'0', 'Some are'),
(347, 72, b'1', 'homework'),
(348, 72, b'0', 'home work'),
(349, 72, b'0', 'homeworks'),
(350, 72, b'0', 'housework'),
(351, 73, b'1', 'teaches'),
(352, 73, b'0', ' teach'),
(353, 73, b'0', 'teaching'),
(354, 73, b'0', 'to teach'),
(355, 74, b'1', 'I'),
(356, 74, b'0', 'me'),
(357, 74, b'0', 'my'),
(358, 74, b'0', 'mine'),
(363, 70, b'1', 'is'),
(364, 70, b'0', 'have'),
(365, 70, b'0', 'does'),
(366, 70, b'0', 'are'),
(367, 75, b'1', 'very'),
(368, 75, b'0', 'a lot of'),
(369, 75, b'0', 'many'),
(370, 75, b'0', 'much'),
(371, 76, b'1', 'the'),
(372, 76, b'0', 'a'),
(373, 76, b'0', 'an'),
(374, 76, b'0', 'one'),
(379, 77, b'1', 'some'),
(380, 77, b'0', 'any'),
(381, 77, b'0', 'many'),
(382, 77, b'0', 'much'),
(383, 78, b'1', ' and so are blue and yellow'),
(384, 78, b'0', 'and blue and yellow so'),
(385, 78, b'0', ' and too blue and yellow'),
(386, 78, b'0', 'and so blue and yellow do'),
(387, 79, b'1', 'prospector'),
(388, 79, b'0', 'prospects'),
(389, 79, b'0', 'prospect'),
(390, 79, b'0', ' prospective'),
(391, 80, b'1', 'the fourth'),
(392, 80, b'0', ' fourth'),
(393, 80, b'0', 'four'),
(394, 80, b'0', 'the four'),
(395, 81, b'1', ' has'),
(396, 81, b'0', 'having'),
(397, 81, b'0', 'being'),
(398, 81, b'0', 'with'),
(407, 84, b'1', 'determine'),
(408, 84, b'0', 'determinant'),
(409, 84, b'0', ' determination'),
(410, 84, b'0', ' determined'),
(411, 83, b'1', 'plan'),
(412, 83, b'0', ' planning'),
(413, 83, b'0', ' to plan'),
(414, 83, b'0', 'plans'),
(415, 82, b'1', 'is'),
(416, 82, b'0', 'are'),
(417, 82, b'0', 'was'),
(418, 82, b'0', 'were'),
(419, 85, b'1', ' nêu rõ luận đề cùng các luận điểm chính bằng lời văn ngắn gọn.'),
(420, 85, b'0', 'nêu rõ luận đề bằng lời văn ngắn gọn, súc tích.'),
(421, 85, b'0', 'nêu rõ luận điểm chính và các luận cứ tiêu biểu.'),
(422, 85, b'0', 'nêu được nội dung cơ bản một cách ngắn gọn.'),
(423, 86, b'1', ' Là các tài liệu dùng làm cơ sở thuyết minh luận điểm.'),
(424, 86, b'0', 'Là ý kiến của người viết về vấn đề được bàn luận trong bài văn.'),
(425, 86, b'0', 'Là cách thức, phương pháp triển khai vấn đề trong bài văn.'),
(426, 86, b'0', 'Là những quan niệm, đánh giá của người viết về vấn đề được bàn luận.'),
(427, 87, b'1', 'Khẳng định văn nghệ sĩ phải phục vụ cuộc chiến đấu của dân tộc.'),
(428, 87, b'0', 'Khẳng định giá trị của văn học nghệ thuật đối với cuộc sống.'),
(429, 87, b'0', 'Đề cao vai trò của quan điểm nghệ thuật trong sáng tác.'),
(430, 87, b'0', 'Ngợi ca những tác phẩm viết về cuộc kháng chiến chống Pháp.'),
(431, 88, b'1', ' Là cách phối hợp, tổ chức các lý lẽ và dẫn chứng để thuyết minh cho luận điểm.'),
(432, 88, b'0', 'Là cách sử dụng và phân tích dẫn chứng để làm sáng tỏ vấn đề cần bàn luận.'),
(433, 88, b'0', 'Là việc sử dụng kết hợp giữa lý lẽ và dẫn chứng thực tế để làm sáng tỏ vấn đề.'),
(434, 88, b'0', 'Là cách sử dụng và phân tích lý lẽ để làm sáng tỏ vấn đề cần bàn luận.'),
(435, 89, b'1', 'lãng mạn'),
(436, 89, b'0', 'hiện thực'),
(437, 89, b'0', 'trào lộng'),
(438, 89, b'0', 'châm biếm, mỉa mai'),
(439, 90, b'1', 'đất nước Việt Nam hiền hòa, đau thương nhưng quật khởi, hào hùng trong kháng chiến.'),
(440, 90, b'0', 'vẻ đẹp mùa thu Hà Nội những ngày đầu kháng chiến chống Pháp.'),
(441, 90, b'0', 'vẻ đẹp mùa thu Việt Bắc trong hiện tại miền Bắc giành được độc lập.'),
(442, 90, b'0', 'tội ác tày trời của kẻ thù và sức vùng dậy quật khởi của nhân dân ta.'),
(443, 91, b'1', 'Việt Bắc'),
(444, 91, b'0', 'Phố phường Hà Nội'),
(445, 91, b'0', 'Tây Ninh'),
(446, 91, b'0', 'Tây Bắc'),
(447, 92, b'1', 'Heo hút cồn mây súng ngửi trời.'),
(448, 92, b'0', 'Mường lát hoa về trong đêm hơi.'),
(449, 92, b'0', 'Nhớ ôi Tây Tiến cơm lên khói.'),
(450, 92, b'0', 'Nhớ về rừng núi nhớ chơi vơi'),
(451, 93, b'1', 'ghi lại chặng đường Cách mạng và kháng chiến gian khổ mà anh hùng, nhất là tình nghĩa gắn bó thắm thiết của những người kháng chiến với Việt Bắc, với nhân dân đất nước.'),
(452, 93, b'0', 'miêu tả thành công bức tranh thiên nhiên và con người Việt Bắc trong kháng chiến.'),
(453, 93, b'0', 'ca ngợi Cách mạng, ca ngợi Đảng, ca ngợi Bác Hồ và tình nghĩa của nhân dân Việt Bắc.'),
(454, 93, b'0', 'thể hiện sâu sắc tình nghĩa thủy chung giữa người cán bộ Cách mạng với nhân dân Việt Bắc.'),
(455, 94, b'1', 'thể thơ lục bát, kết cấu đối đáp của ca dao, ngôn ngữ giàu hình ảnh và đậm sắc thái dân gian.'),
(456, 94, b'0', 'thể thơ lục bát, kết cấu đối đáp giao duyên của ca dao.'),
(457, 94, b'0', 'ngôn ngữ thơ gần gũi lời ăn tiếng nói của nhân dân.'),
(458, 94, b'0', 'sử dụng nhiều ca dao, thành ngữ, tục ngữ'),
(459, 95, b'1', 'thể thơ đối đáp, kết cấu đối đáp của ca dao, ngôn ngữ giàu hình ảnh và đậm sắc thái dân gian'),
(460, 95, b'0', 'Một đoạn trích trong trường ca "Mặt đường khát vọng"'),
(461, 95, b'0', 'ngôn ngữ thơ gần gũi với lời ăn tiếng nói của nhân dân'),
(462, 95, b'0', 'sử dụng nhiều thành ngữ, ca dao, tục ngữ.'),
(463, 96, b'1', 'ca ngợi công ơn và tấm lòng yêu thương mênh mông, hy sinh tất cả vì con của người mẹ.'),
(464, 96, b'0', 'kể về công ơn sinh thành, dưỡng dục của người mẹ.'),
(465, 96, b'0', 'ca ngợi đức hy sinh của người mẹ.'),
(466, 96, b'0', 'bộc lộ lòng biết ơn đối với người mẹ.'),
(467, 97, b'1', 'Tính hình tượng, tính truyền cảm, tính cá thể hóa.'),
(468, 97, b'0', 'Tính trừu tượng, tính truyền cảm, tính cá thể hóa.'),
(469, 97, b'0', 'Tính truyền cảm, tính tượng hình, tính tượng thanh.'),
(470, 97, b'0', 'Tính tượng hình, tính tượng thanh, tính biểu cảm.'),
(471, 98, b'1', 'A Phủ là người yêu của Mị.'),
(472, 98, b'0', 'A Phủ khỏe, chạy nhanh như ngựa.'),
(473, 98, b'0', 'A Phủ cày giỏi và đi săn bò tót rất bạo.'),
(474, 98, b'0', ' A Phủ mồ côi, nghèo khổ và không thể lấy vợ.'),
(475, 99, b'1', 'Trữ tình - Chính luận.'),
(476, 99, b'0', 'Trữ tình - Triết lý.'),
(477, 99, b'0', 'Trữ tình - lãng mạn.'),
(478, 99, b'0', 'Trữ tình - Chính trị.'),
(479, 100, b'1', 'nhân hậu, giàu tình thương yêu.'),
(480, 100, b'0', 'chịu thương chịu khó.'),
(481, 100, b'0', 'cần mẫn lao động.'),
(482, 100, b'0', 'giản dị, chất phác.'),
(483, 101, b'1', 'Bức thư Cà Mau'),
(484, 101, b'0', 'Đất nước đứng lên'),
(485, 101, b'0', 'Rừng xà nu'),
(486, 101, b'0', 'Đất Quảng'),
(487, 102, b'1', 'hình ảnh thiên nhiên Tây Bắc.'),
(488, 102, b'0', 'hiện thực cuộc kháng chiến chống Pháp ở Tây Bắc.'),
(489, 102, b'0', 'thực tiễn xây dựng cuộc sống mới ở Tây Bắc.'),
(490, 102, b'0', 'hình ảnh con sông Đà.'),
(491, 103, b'1', 'Tự do'),
(492, 103, b'0', 'Ông già và biển cả.'),
(493, 103, b'0', 'Giã từ vũ khí.'),
(494, 103, b'0', 'Chuông nguyện hồn ai.'),
(495, 104, b'1', 'Bút kí- tùy bút.'),
(496, 104, b'0', 'Truyện ngắn'),
(497, 104, b'0', 'Hồi kí'),
(498, 104, b'0', 'Phóng sự');

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
(19, 'Tin Học', '', ''),
(20, 'Tiếng Anh', '', ''),
(21, 'Ngữ Văn', '', '');

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
(1, 'Huỳnh Đức Phúc', '1111-11-30', 'Đà Nẵng', 'lena', '123456'),
(2, 'Lê Văn A', '1111-05-03', 'Quãng Nam', 'lenalena', '123456'),
(3, 'phúc', '1111-11-30', 'da', 'admin', '123456'),
(10, 'noname', NULL, NULL, 'noname', '123456');

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
  MODIFY `bailam_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `cau`
--
ALTER TABLE `cau`
  MODIFY `cau_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
--
-- AUTO_INCREMENT for table `cau_dapan`
--
ALTER TABLE `cau_dapan`
  MODIFY `cau_dapan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=499;
--
-- AUTO_INCREMENT for table `linhvuc`
--
ALTER TABLE `linhvuc`
  MODIFY `linhvuc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `nguoidung_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
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
  ADD CONSTRAINT `fk_bailamcau_cau` FOREIGN KEY (`cau_id`) REFERENCES `cau` (`cau_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
