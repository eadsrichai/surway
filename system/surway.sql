-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Nov 28, 2023 at 09:57 AM
-- Server version: 10.10.2-MariaDB
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surway`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

DROP TABLE IF EXISTS `answer`;
CREATE TABLE IF NOT EXISTS `answer` (
  `id_answer` int(11) NOT NULL AUTO_INCREMENT,
  `id_topic` int(11) NOT NULL,
  `id_question` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `user_ans` varchar(200) NOT NULL,
  PRIMARY KEY (`id_answer`),
  KEY `id_topic` (`id_question`),
  KEY `id_user` (`id_user`),
  KEY `id_topic_2` (`id_topic`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id_answer`, `id_topic`, `id_question`, `id_user`, `user_ans`) VALUES
(13, 3, 7, 3, 'Iphone'),
(14, 3, 8, 3, 'ราคา 20,000 บาทขึ้นไป'),
(15, 3, 9, 3, '512 GB'),
(16, 9, 10, 3, 'น้อยกว่า 2 ชั่วโมงต่อวัน'),
(17, 9, 11, 3, 'ทำงานวิจัย'),
(18, 9, 12, 3, 'โทรศัพย์');

-- --------------------------------------------------------

--
-- Table structure for table `choice`
--

DROP TABLE IF EXISTS `choice`;
CREATE TABLE IF NOT EXISTS `choice` (
  `id_ch` int(11) NOT NULL AUTO_INCREMENT,
  `id_q` int(11) NOT NULL,
  `detail_ch` varchar(200) NOT NULL,
  PRIMARY KEY (`id_ch`),
  KEY `id_q` (`id_q`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `id_q` int(11) NOT NULL AUTO_INCREMENT,
  `id_topic` int(10) NOT NULL,
  `title_q` varchar(100) NOT NULL,
  `ch1_q` varchar(200) NOT NULL,
  `ch2_q` varchar(200) NOT NULL,
  `ch3_q` varchar(200) NOT NULL,
  `ch4_q` varchar(200) NOT NULL,
  PRIMARY KEY (`id_q`),
  KEY `id_topic` (`id_topic`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id_q`, `id_topic`, `title_q`, `ch1_q`, `ch2_q`, `ch3_q`, `ch4_q`) VALUES
(7, 3, 'ท่านคิดว่าโทรศัพท์ยี่ห้อใดน่าสนใจมากที่', 'Iphone', 'Sumsung', 'Nokie', 'Huewei'),
(8, 3, 'ท่านคิดว่าราคาโทรศัพท์ที่เหมาะสมกับการใช้งานของท่านควรมีราคาในช่วงใด', 'ไม่เกิน 10,000 บาท', 'ไม่เกิน 15,000 บาท', 'ไม่เกิน 20,000 บาท', 'ราคา 20,000 บาทขึ้นไป'),
(9, 3, 'ท่านคิดว่าหน่วยความจำสำหรับการบันทึกข้อมูลในโทรศัพย์ควรมีเท่าไร', '64 GB', '128 GB', '256 GB', '512 GB'),
(10, 9, 'ในแต่ละวันท่านใช้งานอินเทอร์เน็ตจำนวนกี่ชั่วโมง', 'น้อยกว่า 2 ชั่วโมงต่อวัน', 'ประมาณ 4 ชั่วโมงต่อวัน', 'ประมาณ 8 ชั่วโมงต่อวัน', 'มากกว่า 8 ชั่วโมงต่อวัน'),
(11, 9, 'ท่านใช้งานอินเทอร์เน็ตในเรื่องใด', 'เล่นเกมส์ออนไลน์', 'ทำงานวิจัย', 'ค้นคว้าหาความรู้ต่าง ๆ', 'ความบันเทิง ดูหนัง ฟังเพลง'),
(12, 9, 'ท่านใช้งานอินเทอร์เน็ตผ่านอุปกรณ์ใดมากที่สุด', 'โทรศัพย์', 'เท็บเล็ต', 'คอมพิวเตอร์พกพา', 'เครื่องคอมพิวเตอร์ตั้งโต๊ะ'),
(19, 15, 'นกมีกี่ขา', '2', '3', '4', '5'),
(20, 15, '2+3 =', '5', '6', '8', '5'),
(21, 15, '10+20 =', '100', '200', '300', '400'),
(22, 16, 'sfsdf', 'sfsdf', 'sdfsdfs', 'sdfsdf', 'sdfsdf'),
(23, 16, 'sdfsdf', 'sdfdsf', 'sdfsd', 'sdfsd', 'sdfsdf'),
(25, 16, 'ยี่ห้อโทรศัพท์ที่ท่านใช้อยู่ในปัจจุบัน', 'Iphone', 'Samsung', 'sfsdf', 'sdfdsf');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `id_role` varchar(2) NOT NULL,
  `name_role` varchar(30) NOT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `name_role`) VALUES
('1', 'Admin'),
('2', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

DROP TABLE IF EXISTS `topic`;
CREATE TABLE IF NOT EXISTS `topic` (
  `id_topic` int(11) NOT NULL AUTO_INCREMENT,
  `name_topic` varchar(50) NOT NULL,
  `detail_topic` varchar(250) NOT NULL,
  `status_topic` varchar(1) NOT NULL,
  PRIMARY KEY (`id_topic`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`id_topic`, `name_topic`, `detail_topic`, `status_topic`) VALUES
(3, 'ความต้องการใช้งานโทรศัพท์', 'ความต้องการใช้งานโทรศัพท์ในชีวิตประจำวัน', '1'),
(9, 'การใช้งานอินเทอร์เน็ต', 'การใช้งานอินเทอร์เน็ตในชีวิตประจำวัน', '1'),
(15, 'ปปปป', 'หกดหกดหกดหก', '1'),
(16, 'gfhfghgf', 'dfgfgfs', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `u_user` varchar(30) NOT NULL,
  `p_user` varchar(30) NOT NULL,
  `pre_user` varchar(10) NOT NULL,
  `fname_user` varchar(50) NOT NULL,
  `lname_user` varchar(50) NOT NULL,
  `email_user` varchar(30) NOT NULL,
  `tel_user` varchar(12) NOT NULL,
  `id_role` varchar(2) NOT NULL,
  `status_user` varchar(1) NOT NULL,
  PRIMARY KEY (`id_user`),
  KEY `id_user` (`id_user`,`id_role`),
  KEY `id_role` (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `u_user`, `p_user`, `pre_user`, `fname_user`, `lname_user`, `email_user`, `tel_user`, `id_role`, `status_user`) VALUES
(2, 'user1', '2222', 'นาย', 'วุฒิวงศ์', 'เอียดศรีชาย', 'wutkmutt@gmail.com', '0926124435', '1', '1'),
(3, 'user2', '1111', 'นาย', 'superman', 'blackjack', 'wutkmutt@gmail.com', '0926124435', '2', '1');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answer`
--
ALTER TABLE `answer`
  ADD CONSTRAINT `answer_ibfk_4` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `answer_ibfk_5` FOREIGN KEY (`id_question`) REFERENCES `question` (`id_q`);

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`id_topic`) REFERENCES `topic` (`id_topic`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
