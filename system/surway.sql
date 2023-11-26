-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Nov 26, 2023 at 01:39 PM
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
-- Table structure for table `ans`
--

DROP TABLE IF EXISTS `ans`;
CREATE TABLE IF NOT EXISTS `ans` (
  `id_ans` int(11) NOT NULL AUTO_INCREMENT,
  `id_ch` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_ans`),
  KEY `id_topic` (`id_ch`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `title_q` varchar(100) NOT NULL,
  `id_topic` int(10) NOT NULL,
  PRIMARY KEY (`id_q`),
  KEY `id_topic` (`id_topic`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`id_topic`, `name_topic`, `detail_topic`, `status_topic`) VALUES
(3, 'ความพึงพอใจในการใช้ห้องคอมพิวเตอร์', 'ความพึงพอใจในการใช้ห้องคอมพิวเตอร์ วิทยาลัยเทคนิคพังงา', '1'),
(5, 'xxxx', 'yyy', '1'),
(6, 'aa', 'bbbb', '1'),
(7, 'www', 'tttt', '1'),
(8, 'www', 'tttt', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `u_user` varchar(30) NOT NULL,
  `p_user` varchar(30) NOT NULL,
  `fname_user` varchar(50) NOT NULL,
  `lname_user` varchar(50) NOT NULL,
  `email_user` varchar(30) NOT NULL,
  `tel_user` varchar(12) NOT NULL,
  `id_role` varchar(2) NOT NULL,
  PRIMARY KEY (`id_user`),
  KEY `id_user` (`id_user`,`id_role`),
  KEY `id_role` (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `u_user`, `p_user`, `fname_user`, `lname_user`, `email_user`, `tel_user`, `id_role`) VALUES
(1, 'user1', '1234', 'วุฒิวงศ์', 'เอียดศรีชาย', 'xx@gmail.com', '0926124435', '2');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ans`
--
ALTER TABLE `ans`
  ADD CONSTRAINT `ans_ibfk_3` FOREIGN KEY (`id_ch`) REFERENCES `choice` (`id_ch`),
  ADD CONSTRAINT `ans_ibfk_4` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `choice`
--
ALTER TABLE `choice`
  ADD CONSTRAINT `choice_ibfk_1` FOREIGN KEY (`id_q`) REFERENCES `question` (`id_q`);

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`id_topic`) REFERENCES `topic` (`id_topic`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
