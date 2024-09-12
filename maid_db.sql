-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 05, 2023 at 12:01 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maid_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book`
--

DROP TABLE IF EXISTS `tbl_book`;
CREATE TABLE IF NOT EXISTS `tbl_book` (
  `order_id` int NOT NULL AUTO_INCREMENT,
  `u_id` varchar(3) NOT NULL,
  `name` varchar(15) NOT NULL,
  `address` varchar(30) NOT NULL,
  `service1` varchar(15) NOT NULL,
  `service2` varchar(15) NOT NULL,
  `service3` varchar(15) NOT NULL,
  `service4` varchar(15) NOT NULL,
  `total` varchar(5) NOT NULL,
  `u_key` varchar(1) NOT NULL,
  `date1` varchar(15) NOT NULL,
  `contact` varchar(13) NOT NULL,
  `time1` varchar(13) NOT NULL,
  `email` varchar(30) NOT NULL,
  `ppl_count` varchar(1) NOT NULL,
  `service_period` varchar(13) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=80 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_book`
--

INSERT INTO `tbl_book` (`order_id`, `u_id`, `name`, `address`, `service1`, `service2`, `service3`, `service4`, `total`, `u_key`, `date1`, `contact`, `time1`, `email`, `ppl_count`, `service_period`) VALUES
(79, '2', 'PSM', 'Manipal', 'Cooking', 'Sweeping', 'Washing', '', '1400', '1', '2023-05-10', '9123456780', '10:30am', 'psm@gmail.com', '5', '1day');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

DROP TABLE IF EXISTS `tbl_login`;
CREATE TABLE IF NOT EXISTS `tbl_login` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'aaa', '1234'),
(3, 'headmaid', 'headmaid'),
(4, 'sss', 'sss');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_maid`
--

DROP TABLE IF EXISTS `tbl_maid`;
CREATE TABLE IF NOT EXISTS `tbl_maid` (
  `m_id` int NOT NULL AUTO_INCREMENT,
  `m_name` varchar(15) NOT NULL,
  `m_address` varchar(30) NOT NULL,
  `m_img` varchar(200) NOT NULL,
  `m_contact` varchar(13) NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_maid`
--

INSERT INTO `tbl_maid` (`m_id`, `m_name`, `m_address`, `m_img`, `m_contact`) VALUES
(9, 'Lata K.', 'Manipal', 'img/maid1.jpg', '9521974761'),
(10, 'Heta B.', 'Manipal', 'img/maid2.jpg', '9998993998'),
(11, 'Rita K.', 'Manipal', 'img/maid3.jpg', '6355563891'),
(12, 'Sima G.', 'Manipal', 'img/maid4.jpg', '9992288381'),
(13, 'Sudha B.', 'Manipal', 'img/maid5.jpg', '8000914131'),
(14, 'Rekha J.', 'Manipal', 'img/maid1.jpg', '9990087605');

-- --------------------------------------------------------

--
-- Table structure for table `tb_maid_alloc`
--

DROP TABLE IF EXISTS `tb_maid_alloc`;
CREATE TABLE IF NOT EXISTS `tb_maid_alloc` (
  `maid_id` int NOT NULL,
  `maid_name` varchar(30) NOT NULL,
  `contact` varchar(13) NOT NULL,
  `maid_img` varchar(200) NOT NULL,
  `order_id` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_maid_alloc`
--

INSERT INTO `tb_maid_alloc` (`maid_id`, `maid_name`, `contact`, `maid_img`, `order_id`) VALUES
(9, 'Lata K.                       ', '9521974761   ', 'img/maid1.jpg                                        ', 79);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
