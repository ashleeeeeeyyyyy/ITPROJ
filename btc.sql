-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 12, 2019 at 05:07 PM
-- Server version: 5.7.24
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `btc`
--

-- --------------------------------------------------------

--
-- Table structure for table `cottages_guesthouses`
--

DROP TABLE IF EXISTS `cottages_guesthouses`;
CREATE TABLE IF NOT EXISTS `cottages_guesthouses` (
  `fac_id` int(11) NOT NULL,
  `bedrooms` int(11) DEFAULT NULL,
  `beds` int(11) DEFAULT NULL,
  `dep_price` int(11) DEFAULT NULL,
  `gov_price` int(11) DEFAULT NULL,
  `priv_price` int(11) DEFAULT NULL,
  PRIMARY KEY (`fac_id`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cottages_guesthouses`
--

INSERT INTO `cottages_guesthouses` (`fac_id`, `bedrooms`, `beds`, `dep_price`, `gov_price`, `priv_price`) VALUES
(1, 4, 11, 1700, 2100, 2600),
(2, 4, 11, 1700, 2100, 2600),
(3, 4, 11, 1700, 2100, 2600),
(4, 4, 11, 1700, 2100, 2600),
(5, 4, 11, 1700, 2100, 2600),
(6, 3, 7, 1400, 1700, 2300),
(7, 3, 7, 1400, 1700, 2300),
(8, 3, 7, 1400, 1700, 2300),
(9, 3, 7, 1400, 1700, 2300),
(10, 2, 5, 1100, 1400, 1700),
(11, 2, 5, 1100, 1400, 1700),
(12, 2, 5, 1100, 1400, 1700),
(13, 2, 5, 1100, 1400, 1700),
(14, 2, 5, 1100, 1400, 1700),
(15, 4, 10, 1700, 2100, 2600),
(16, 3, 8, 1400, 1700, 2300),
(17, 5, 18, 2100, 2600, 3300),
(18, 3, 7, 1400, 1700, 2300),
(19, 3, 6, 1100, 1400, 1700),
(20, 5, 17, 2100, 2600, 3300),
(21, 3, 14, 2100, 2600, 3300),
(22, 3, 9, 1400, 1700, 2300),
(23, 3, 10, 1700, 2100, 2600),
(24, 3, 9, 1400, 1700, 2300),
(25, 2, 4, 1100, 1400, 1700),
(26, 2, 4, 1100, 1400, 1700),
(27, 3, 6, 1300, 1600, 1900),
(28, 3, 6, 1300, 1600, 1900),
(29, 3, 6, 1300, 1600, 1900),
(30, 2, 5, 1100, 1400, 1700),
(31, 4, 9, 1400, 1700, 2300),
(32, 2, 6, 1100, 1400, 1700),
(33, 4, 12, 2100, 2600, 3300),
(34, 3, 10, 1700, 2100, 2600),
(35, 3, 10, 1700, 2100, 2600),
(36, 3, 9, 1700, 2100, 2600),
(37, 3, 9, 1700, 2100, 2600),
(38, 4, 14, 2100, 2600, 3300),
(39, 3, 8, 1400, 1700, 2300),
(40, 6, 14, 2100, 2600, 3300),
(41, 3, 7, 1400, 1700, 2300),
(42, 4, 10, 1700, 2100, 2600),
(43, 2, 5, 1100, 1400, 1700),
(44, 2, 4, 1100, 1400, 1700),
(45, 3, 8, 1400, 1700, 2300),
(46, 4, 9, 1400, 1700, 2300),
(47, 1, 3, 1100, 1400, 1700),
(48, 5, 18, 2100, 2600, 3300),
(49, 3, 11, 2100, 2600, 3300),
(50, 2, 5, 1100, 1400, 1700),
(51, 3, 8, 1400, 1700, 1900);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `cu_id` int(11) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(45) DEFAULT NULL,
  `l_name` varchar(45) DEFAULT NULL,
  `m_name` varchar(45) DEFAULT NULL,
  `house_no` varchar(45) DEFAULT NULL,
  `str_barangay` varchar(45) DEFAULT NULL,
  `city_municipality` varchar(45) DEFAULT NULL,
  `province` varchar(45) DEFAULT NULL,
  `office_no` varchar(45) DEFAULT NULL,
  `restel_num` varchar(45) DEFAULT NULL,
  `officetel_num` varchar(45) DEFAULT NULL,
  `adult_no` int(11) DEFAULT NULL,
  `child_no` int(11) DEFAULT NULL,
  `total_person` int(11) DEFAULT NULL,
  `contact_person` varchar(45) DEFAULT NULL,
  `contact_num` varchar(45) DEFAULT NULL,
  `category` varchar(45) DEFAULT NULL,
  `id_type` varchar(45) DEFAULT NULL,
  `id_no` varchar(45) DEFAULT NULL,
  `discount_card` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cu_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cu_re`
--

DROP TABLE IF EXISTS `cu_re`;
CREATE TABLE IF NOT EXISTS `cu_re` (
  `cu_id` int(11) NOT NULL,
  `reg_id` int(11) NOT NULL,
  `date` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cu_id`,`reg_id`),
  KEY `reg_id_idx` (`reg_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dormitories`
--

DROP TABLE IF EXISTS `dormitories`;
CREATE TABLE IF NOT EXISTS `dormitories` (
  `fac_id` int(11) NOT NULL,
  `dep_price` int(11) DEFAULT NULL,
  `gov_price` int(11) DEFAULT NULL,
  `priv_price` int(11) DEFAULT NULL,
  `category` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`fac_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dormitories`
--

INSERT INTO `dormitories` (`fac_id`, `dep_price`, `gov_price`, `priv_price`, `category`) VALUES
(66, 180, 190, 210, '1'),
(67, 180, 190, 210, '1'),
(68, 180, 190, 210, '2'),
(69, 150, 180, 200, '2'),
(70, 150, 180, 200, '2'),
(71, 150, 180, 200, '2'),
(72, 120, 130, 170, '3'),
(73, 120, 130, 170, '3'),
(74, 120, 130, 170, '3'),
(75, 120, 130, 170, '3'),
(76, 120, 130, 170, '3'),
(77, 120, 130, 170, '3'),
(78, 180, 190, 210, '3');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `emp_id` int(11) NOT NULL AUTO_INCREMENT,
  `l_name` varchar(45) DEFAULT NULL,
  `f_name` varchar(45) DEFAULT NULL,
  `m_name` varchar(45) DEFAULT NULL,
  `office` varchar(45) DEFAULT NULL,
  `position` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

DROP TABLE IF EXISTS `facilities`;
CREATE TABLE IF NOT EXISTS `facilities` (
  `fac_id` int(11) NOT NULL AUTO_INCREMENT,
  `fac_name` varchar(45) DEFAULT NULL,
  `category` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`fac_id`)
) ENGINE=MyISAM AUTO_INCREMENT=79 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`fac_id`, `fac_name`, `category`) VALUES
(1, 'Cottage 102', 'cottages'),
(2, 'Cottage 103', 'cottages'),
(3, 'Cottage 104', 'cottages'),
(4, 'Cottage 105', 'cottages'),
(5, 'Cottage 106', 'cottages'),
(6, 'Cottage 201', 'cottages'),
(7, 'Cottage 202', 'cottages'),
(8, 'Cottage 203', 'cottages'),
(9, 'Cottage 209', 'cottages'),
(10, 'Cottage 204', 'cottages'),
(11, 'Cottage 205', 'cottages'),
(12, 'Cottage 206', 'cottages'),
(13, 'Cottage 207', 'cottages'),
(14, 'Cottage 208', 'cottages'),
(15, 'Cottage 210 up', 'cottages'),
(16, 'Cottage 210 down', 'cottages'),
(17, 'Cottage 211', 'cottages'),
(18, 'Cottage 212 up', 'cottages'),
(19, 'Cottage 212 down', 'cottages'),
(20, 'Cottage 1', 'cottages'),
(21, 'Cottage 2 up', 'cottages'),
(22, 'Cottage 2 down', 'cottages'),
(23, 'Cottage 3 up', 'cottages'),
(24, 'Cottage 3 down', 'cottages'),
(25, 'Cottage 213A', 'cottages'),
(26, 'Cottage 213B', 'cottages'),
(27, 'Cottage 213C', 'cottages'),
(28, 'Guesthouse 3 up', 'guesthouse'),
(29, 'Guesthouse 3 down', 'guesthouse'),
(30, 'Guesthouse 3 basement', 'guesthouse'),
(31, 'Guesthouse 4', 'guesthouse'),
(32, 'Guesthouse 4A', 'guesthouse'),
(33, 'Guesthouse 4B', 'guesthouse'),
(34, 'Guesthouse 4C', 'guesthouse'),
(35, 'Guesthouse 4D', 'guesthouse'),
(36, 'Guesthouse 4E', 'guesthouse'),
(37, 'Guesthouse 4F', 'guesthouse'),
(38, 'Guesthouse 5 up', 'guesthouse'),
(39, 'Guesthouse 5 down', 'guesthouse'),
(40, 'Guesthouse 6', 'guesthouse'),
(41, 'Guesthouse 7', 'guesthouse'),
(42, 'Guesthouse 8 up', 'guesthouse'),
(43, 'Guesthouse 8 down', 'guesthouse'),
(44, 'Guesthouse 3 basement', 'guesthouse'),
(45, 'Guesthouse 9', 'guesthouse'),
(46, 'Guesthouse 10 up', 'guesthouse'),
(47, 'Guesthouse 10 down', 'guesthouse'),
(48, 'Guesthouse 11 up', 'guesthouse'),
(49, 'Guesthouse 11 down', 'guesthouse'),
(50, 'Textbook House up', 'guesthouse'),
(51, 'Textbook House down', 'guesthouse'),
(52, 'Benitez Hall', 'conference hall'),
(53, 'Carlos P. Romulo', 'conference hall'),
(54, 'Quezon Hall Main', 'conference hall'),
(55, 'Quezon Hall Down', 'conference hall'),
(56, 'Quirino Conference Hall', 'conference hall'),
(57, 'Oring-ao Hall', 'conference hall'),
(58, 'Audio Visual Room (AVR)', 'conference hall'),
(59, 'Pages Conference Hall', 'conference hall'),
(60, 'Albert Hall Left', 'conference hall'),
(61, 'Albert Hall Right', 'conference hall'),
(62, 'Grounds', 'conference hall'),
(63, 'Abada Hall', 'dining hall'),
(64, 'Albert Hall', 'dining hall'),
(65, 'Dirty Kitchen', 'kitchen'),
(66, 'Recto Hall', 'dormitories'),
(67, 'SQ Medical', 'dormitories'),
(68, 'Pages Hall', 'dormitories'),
(69, 'Quirino Hall', 'dormitories'),
(70, 'Roxas Hall', 'dormitories'),
(71, 'Hernandez Hall', 'dormitories'),
(72, 'Escoda', 'dormitories'),
(73, 'Staffhouse', 'dormitories'),
(74, 'Magsaysay', 'dormitories'),
(75, 'SQ Main', 'dormitories'),
(76, 'SQ Annex', 'dormitories'),
(77, 'Bachelors Hall', 'dormitories'),
(78, 'ESCODA ROOM 104', 'dormitories');

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

DROP TABLE IF EXISTS `fees`;
CREATE TABLE IF NOT EXISTS `fees` (
  `fee_id` int(11) NOT NULL AUTO_INCREMENT,
  `reservation_fee` int(11) DEFAULT NULL,
  `addservice_fee` int(11) DEFAULT NULL,
  `damages_fee` int(11) DEFAULT NULL,
  `total_fee` int(11) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`fee_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fe_pa`
--

DROP TABLE IF EXISTS `fe_pa`;
CREATE TABLE IF NOT EXISTS `fe_pa` (
  `fee_id` int(11) NOT NULL,
  `pay_id` int(11) NOT NULL,
  `downpayment` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`fee_id`,`pay_id`),
  KEY `pay_id_idx` (`pay_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `halls`
--

DROP TABLE IF EXISTS `halls`;
CREATE TABLE IF NOT EXISTS `halls` (
  `fac_id` int(11) NOT NULL,
  `in_price_deped` int(11) DEFAULT NULL,
  `in_price_ndeped` int(11) DEFAULT NULL,
  `out_price_deped` int(11) DEFAULT NULL,
  `out_price_ndeped` int(11) DEFAULT NULL,
  `halfday` int(11) DEFAULT NULL,
  `wholeday` int(11) DEFAULT NULL,
  PRIMARY KEY (`fac_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `halls`
--

INSERT INTO `halls` (`fac_id`, `in_price_deped`, `in_price_ndeped`, `out_price_deped`, `out_price_ndeped`, `halfday`, `wholeday`) VALUES
(52, 4000, 4500, 5000, 5500, NULL, NULL),
(53, 1800, 2200, 2800, 3300, NULL, NULL),
(54, 2200, 2700, 3200, 3700, NULL, NULL),
(55, 1700, 2200, 2700, 3200, NULL, NULL),
(56, 2200, 2700, 2700, 3200, NULL, NULL),
(57, 900, 1100, 1300, 1600, NULL, NULL),
(58, 1300, 1600, 1600, 2100, NULL, NULL),
(59, 1350, 1650, 1650, 2150, NULL, NULL),
(60, 1000, NULL, 1000, NULL, NULL, NULL),
(61, 1000, NULL, 1000, NULL, NULL, NULL),
(62, NULL, NULL, NULL, NULL, 550, 1000),
(63, 2000, 2000, 3500, 3500, NULL, NULL),
(64, 2000, 2000, 3500, 3500, NULL, NULL),
(65, 1100, 1100, 1600, 1600, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
CREATE TABLE IF NOT EXISTS `payments` (
  `pay_id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`pay_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE IF NOT EXISTS `registration` (
  `reg_id` int(11) NOT NULL AUTO_INCREMENT,
  `d_arrival` varchar(45) DEFAULT NULL,
  `d_departure` varchar(45) DEFAULT NULL,
  `fee_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`reg_id`),
  KEY `fee_id_idx` (`fee_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `re_em`
--

DROP TABLE IF EXISTS `re_em`;
CREATE TABLE IF NOT EXISTS `re_em` (
  `reg_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  PRIMARY KEY (`reg_id`,`emp_id`),
  KEY `emp_id_idx` (`emp_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `re_fa`
--

DROP TABLE IF EXISTS `re_fa`;
CREATE TABLE IF NOT EXISTS `re_fa` (
  `reg_id` int(11) NOT NULL,
  `fac_id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`fac_id`,`reg_id`),
  KEY `reg_id_idx` (`reg_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `re_se`
--

DROP TABLE IF EXISTS `re_se`;
CREATE TABLE IF NOT EXISTS `re_se` (
  `reg_id` int(11) NOT NULL,
  `ser_id` int(11) NOT NULL,
  `status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`reg_id`,`ser_id`),
  KEY `ser_id_idx` (`ser_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
CREATE TABLE IF NOT EXISTS `rooms` (
  `room_id` int(11) NOT NULL AUTO_INCREMENT,
  `fac_id` int(11) NOT NULL,
  `room_num` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`room_id`),
  KEY `fac_id_idx` (`fac_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_id`, `fac_id`, `room_num`, `status`) VALUES
(1, 66, 'Room 101', 'unavailable'),
(2, 67, 'Room 102', 'reserved'),
(3, 68, 'Room 103', 'vacant'),
(4, 69, 'Room 104', 'occupied');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `ser_id` int(11) NOT NULL AUTO_INCREMENT,
  `ser_name` varchar(45) DEFAULT NULL,
  `quantity` varchar(45) DEFAULT NULL,
  `price` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ser_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`ser_id`, `ser_name`, `quantity`, `price`, `status`) VALUES
(1, 'Photocopy', '1', '2.50', 'available'),
(2, 'FAX Machine', '1', '4', 'availble'),
(3, 'Telephone', '1', '5', 'available'),
(4, 'LCD Projector', '1', '2200', 'available'),
(5, 'Conference Table', '1', '55', 'available'),
(6, 'Monobloc Chairs', '1', '22', 'available'),
(7, 'Table Cloth', '1', '22', 'available'),
(8, 'Electricity', '1', '150', 'available'),
(9, 'Built-in Speaker', '1', '880', 'available'),
(10, 'Speaker and Mic', '1', '880', 'available'),
(12, 'Karaoke', '1', '330', 'available'),
(13, 'Videoke', '1', '1000', 'available');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `l_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `f_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `l_name`, `f_name`, `m_name`, `office`, `position`, `username`, `password`, `created_at`, `updated_at`, `remember_token`) VALUES
(1, 'Pua Phee', 'Aneeka', 'Della', 'Reservation', 'Head', 'aneeka', '$2y$10$bXXcZyxZkRs51IWkU9vcVO2yAlBbbH5jmRBNHSFGnGKVNsE.kWixS', '2019-04-12 09:04:02', '2019-04-12 09:04:02', 'MxxQcfRZiRkEr78yA5VvYc0zwvKS9p2OcMTI59R1j6w5chvYHwUUZHIBJj7N');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
