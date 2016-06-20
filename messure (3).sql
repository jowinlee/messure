-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2016 at 11:53 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `messure`
--

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
CREATE TABLE IF NOT EXISTS `status` (
  `week_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `year_id` bigint(20) NOT NULL,
  `sale` float NOT NULL,
  `invoice` float NOT NULL,
  `ringet` float NOT NULL,
  `new_customer` float NOT NULL,
  `year` year(4) NOT NULL,
  `week` int(11) NOT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`week_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`week_id`, `year_id`, `sale`, `invoice`, `ringet`, `new_customer`, `year`, `week`, `date`) VALUES
(15, 0, 9, 5, 4, 8, 2016, 24, '2016-06-16 23:42:20'),
(1, 1, 2, 5, 5, 5, 2016, 24, '2016-06-14 23:03:19'),
(14, 1, 34, 45, 45, 345, 2016, 24, '2016-06-16 23:33:06'),
(13, 2, 9, 9, 9, 9, 2016, 24, '2016-06-16 22:57:06'),
(12, 2, 9, 9, 9, 69, 2016, 24, '2016-06-16 22:57:01'),
(11, 1, 9, 9, 69, 9, 2016, 24, '2016-06-16 22:56:57'),
(10, 2, 9, 9, 6, 3, 2016, 24, '2016-06-16 22:56:52'),
(9, 1, 8, 8, 9, 8, 2016, 24, '2016-06-16 22:56:48'),
(16, 1, 8, 8, 9, 456, 2016, 24, '2016-06-16 23:51:47'),
(17, 2, 0, 0, 0, 0, 2016, 25, '2016-06-20 17:09:10');

-- --------------------------------------------------------

--
-- Table structure for table `week`
--

DROP TABLE IF EXISTS `week`;
CREATE TABLE IF NOT EXISTS `week` (
  `week_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `year_id` bigint(20) NOT NULL,
  `week` int(11) NOT NULL,
  PRIMARY KEY (`week_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `week`
--

INSERT INTO `week` (`week_id`, `year_id`, `week`) VALUES
(1, 1, 24),
(2, 1, 25),
(3, 1, 26),
(4, 1, 25),
(5, 1, 26);

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

DROP TABLE IF EXISTS `year`;
CREATE TABLE IF NOT EXISTS `year` (
  `year_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`year_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `year`
--

INSERT INTO `year` (`year_id`, `year`) VALUES
(1, 2015),
(2, 2016);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
