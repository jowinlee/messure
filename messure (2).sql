-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2016 at 05:47 PM
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
  `status_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `sale` float NOT NULL,
  `invoice` float NOT NULL,
  `ringet` float NOT NULL,
  `new_customer` float NOT NULL,
  `year` year(4) NOT NULL,
  `week` int(11) NOT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`status_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status_id`, `sale`, `invoice`, `ringet`, `new_customer`, `year`, `week`, `date`) VALUES
(1, 4, 4, 4, 4, 0000, 0, '2016-06-14 21:58:30'),
(2, 2, 5, 5, 5, 0000, 0, '2016-06-14 23:03:19'),
(3, 3, 3, 4, 3, 2068, 0, '2016-06-14 23:25:27'),
(4, 54, 5, 56, 5, 2016, 0, '2016-06-15 21:59:17'),
(5, 45, 45, 56, 456, 2016, 24, '2016-06-15 22:51:47'),
(6, 88, 55, 56, 55, 2016, 24, '2016-06-15 23:17:15'),
(7, 87, 21, 87, 55, 2016, 24, '2016-06-15 23:17:40'),
(8, 78, 46464, 46465, 45646, 2016, 24, '2016-06-15 23:49:15');

-- --------------------------------------------------------

--
-- Table structure for table `week`
--

DROP TABLE IF EXISTS `week`;
CREATE TABLE IF NOT EXISTS `week` (
  `week_id` int(11) NOT NULL AUTO_INCREMENT,
  `week` int(11) NOT NULL,
  `year_id` int(11) NOT NULL,
  PRIMARY KEY (`week_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

DROP TABLE IF EXISTS `year`;
CREATE TABLE IF NOT EXISTS `year` (
  `year_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`year_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
