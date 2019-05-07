-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 29, 2019 at 08:10 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

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
  `status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`fac_id`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cottages_guesthouses`
--

INSERT INTO `cottages_guesthouses` (`fac_id`, `bedrooms`, `beds`, `dep_price`, `gov_price`, `priv_price`, `status`) VALUES
(1, 4, 11, 1700, 2100, 2600, 'available'),
(2, 4, 11, 1700, 2100, 2600, 'available'),
(3, 4, 11, 1700, 2100, 2600, 'available'),
(4, 4, 11, 1700, 2100, 2600, 'available'),
(5, 4, 11, 1700, 2100, 2600, 'available'),
(6, 3, 7, 1400, 1700, 2300, 'available'),
(7, 3, 7, 1400, 1700, 2300, 'available'),
(8, 3, 7, 1400, 1700, 2300, 'available'),
(9, 3, 7, 1400, 1700, 2300, 'available'),
(10, 2, 5, 1100, 1400, 1700, 'available'),
(11, 2, 5, 1100, 1400, 1700, 'available'),
(12, 2, 5, 1100, 1400, 1700, 'available'),
(13, 2, 5, 1100, 1400, 1700, 'available'),
(14, 2, 5, 1100, 1400, 1700, 'available'),
(15, 4, 10, 1700, 2100, 2600, 'available'),
(16, 3, 8, 1400, 1700, 2300, 'available'),
(17, 5, 18, 2100, 2600, 3300, 'available'),
(18, 3, 7, 1400, 1700, 2300, 'available'),
(19, 3, 6, 1100, 1400, 1700, 'available'),
(20, 5, 17, 2100, 2600, 3300, 'available'),
(21, 3, 14, 2100, 2600, 3300, 'available'),
(22, 3, 9, 1400, 1700, 2300, 'available'),
(23, 3, 10, 1700, 2100, 2600, 'available'),
(24, 3, 9, 1400, 1700, 2300, 'available'),
(25, 2, 4, 1100, 1400, 1700, 'available'),
(26, 2, 4, 1100, 1400, 1700, 'available'),
(27, 3, 6, 1300, 1600, 1900, 'available'),
(28, 3, 6, 1300, 1600, 1900, 'available'),
(29, 3, 6, 1300, 1600, 1900, 'available'),
(30, 2, 5, 1100, 1400, 1700, 'available'),
(31, 4, 9, 1400, 1700, 2300, 'available'),
(32, 2, 6, 1100, 1400, 1700, 'available'),
(33, 4, 12, 2100, 2600, 3300, 'available'),
(34, 3, 10, 1700, 2100, 2600, 'available'),
(35, 3, 10, 1700, 2100, 2600, 'available'),
(36, 3, 9, 1700, 2100, 2600, 'available'),
(37, 3, 9, 1700, 2100, 2600, 'available'),
(38, 4, 14, 2100, 2600, 3300, 'available'),
(39, 3, 8, 1400, 1700, 2300, 'available'),
(40, 6, 14, 2100, 2600, 3300, 'available'),
(41, 3, 7, 1400, 1700, 2300, 'available'),
(42, 4, 10, 1700, 2100, 2600, 'available'),
(43, 2, 5, 1100, 1400, 1700, 'available'),
(44, 2, 4, 1100, 1400, 1700, 'available'),
(45, 3, 8, 1400, 1700, 2300, 'available'),
(46, 4, 9, 1400, 1700, 2300, 'available'),
(47, 1, 3, 1100, 1400, 1700, 'available'),
(48, 5, 18, 2100, 2600, 3300, 'available'),
(49, 3, 11, 2100, 2600, 3300, 'available'),
(50, 2, 5, 1100, 1400, 1700, 'available'),
(51, 3, 8, 1400, 1700, 1900, 'available');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `cu_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `contact_num` varchar(45) DEFAULT NULL,
  `category` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `city_municipality` varchar(45) DEFAULT NULL,
  `province` varchar(45) DEFAULT NULL,
  `adult_no` int(11) DEFAULT NULL,
  `child_no` int(11) DEFAULT NULL,
  `discount_person` int(11) DEFAULT NULL,
  `total_person` int(11) DEFAULT NULL,
  `contact_person` varchar(45) DEFAULT NULL,
  `emergency_num` varchar(45) DEFAULT NULL,
  `id_type` varchar(45) DEFAULT NULL,
  `id_no` varchar(45) DEFAULT NULL,
  `discount_card` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19006 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cu_id`, `name`, `type`, `contact_num`, `category`, `address`, `city_municipality`, `province`, `adult_no`, `child_no`, `discount_person`, `total_person`, `contact_person`, `emergency_num`, `id_type`, `id_no`, `discount_card`) VALUES
(1, 'Jones Padsuyan', 'Individual', '123', 'Private', 'Camp 7', 'Tuba', 'Benguet', 22, 11, 2, 22, 'Jonusu Padsuyan', '09123121231', 'Government', '1244656', 'PWD'),
(2, 'GROUP A', 'Group', '1234', 'Private', 'Bakakeng Norte', 'Baguio', 'Benguet', 11, 0, 2, 11, 'Ash', '09121232321', 'Government', '2353466', 'PWD'),
(3, 'Ashley Pua Phee', 'Individual', '09184339946', 'DepEd', 'Bakakeng Sur', 'Itogon', 'Benguet', 10, 1, 0, 11, 'Bill', '09112312151', 'Government', '3545467', 'None'),
(4, 'Group B', 'Group', '09123123233', 'DepEd', 'Camp 8', 'Baguio', 'Benguet', 9, 2, 0, 11, 'Regae', '09123122342', 'Government', '1234346', 'None'),
(5, 'Indiv 1', 'Individual', '09242424242', 'Government', 'Quezon Hill', 'Baguio', 'Benguet', 6, 5, 0, 12, 'Kenneth', '09145123231', 'Government', '1231312', 'None'),
(6, 'Group C', 'Group', '09212312313', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
  `fee_id` int(11) NOT NULL,
  `reg_id` int(11) NOT NULL,
  `registration_fee` int(11) DEFAULT '0',
  `services_fee` int(11) DEFAULT '0',
  `damages_fee` int(11) DEFAULT '0',
  `total` int(11) DEFAULT '0',
  `status` varchar(45) DEFAULT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`fee_id`),
  KEY `reg_id_idx` (`reg_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`fee_id`, `reg_id`, `registration_fee`, `services_fee`, `damages_fee`, `total`, `status`, `date`) VALUES
(1, 19001, 15600, 4675, 0, 21523, 'assessed', '2019-01-05 01:00:46'),
(2, 19002, 7800, 0, 0, 2600, 'assessed', '2019-01-09 00:00:46'),
(3, 19003, 2600, 0, 0, 2600, 'unassessed', '2019-01-10 00:00:46'),
(4, 19004, 2600, 0, 0, 2600, 'unassessed', '2019-01-11 00:00:46'),
(5, 19005, 2600, 0, 0, 0, 'unassessed', '2019-01-12 00:00:46');

-- --------------------------------------------------------

--
-- Table structure for table `fe_pa`
--

DROP TABLE IF EXISTS `fe_pa`;
CREATE TABLE IF NOT EXISTS `fe_pa` (
  `fee_id` int(11) NOT NULL,
  `pay_id` int(11) NOT NULL,
  `downpayment` int(11) DEFAULT '0',
  `date` date DEFAULT NULL,
  KEY `pay_id_idx` (`pay_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fe_pa`
--

INSERT INTO `fe_pa` (`fee_id`, `pay_id`, `downpayment`, `date`) VALUES
(1, 1, NULL, NULL),
(2, 2, NULL, NULL);

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
  `status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`fac_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `halls`
--

INSERT INTO `halls` (`fac_id`, `in_price_deped`, `in_price_ndeped`, `out_price_deped`, `out_price_ndeped`, `halfday`, `wholeday`, `status`) VALUES
(52, 4000, 4500, 5000, 5500, NULL, NULL, 'available'),
(53, 1800, 2200, 2800, 3300, NULL, NULL, 'available'),
(54, 2200, 2700, 3200, 3700, NULL, NULL, 'available'),
(55, 1700, 2200, 2700, 3200, NULL, NULL, 'available'),
(56, 2200, 2700, 2700, 3200, NULL, NULL, 'available'),
(57, 900, 1100, 1300, 1600, NULL, NULL, 'available'),
(58, 1300, 1600, 1600, 2100, NULL, NULL, 'available'),
(59, 1350, 1650, 1650, 2150, NULL, NULL, 'available'),
(60, 1000, NULL, 1000, NULL, NULL, NULL, 'available'),
(61, 1000, NULL, 1000, NULL, NULL, NULL, 'available'),
(62, NULL, NULL, NULL, NULL, 550, 1000, 'available'),
(63, 2000, 2000, 3500, 3500, NULL, NULL, 'available'),
(64, 2000, 2000, 3500, 3500, NULL, NULL, 'available'),
(65, 1100, 1100, 1600, 1600, NULL, NULL, 'available');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

DROP TABLE IF EXISTS `history`;
CREATE TABLE IF NOT EXISTS `history` (
  `name` varchar(45) DEFAULT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `activity` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`name`, `date`, `activity`) VALUES
('Pua Phee, Ashley Chester Della', '2019-04-29 07:39:08', 'User Logged In'),
('Pua Phee, Ashley Chester Della', '2019-04-29 07:39:15', 'User Logged Out'),
('Pua Phee, Ashley Chester Della', '2019-04-29 07:39:34', 'User Logged In'),
('Pua Phee, Ashley Chester Della', '2019-04-29 08:10:48', 'User Logged In');

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
  `pay_id` int(11) NOT NULL,
  `fee_id` int(11) NOT NULL,
  `current_balance` int(11) DEFAULT NULL,
  `amount_tendered` int(11) DEFAULT NULL,
  `change` int(11) DEFAULT NULL,
  `ending_balance` int(11) DEFAULT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`pay_id`),
  KEY `fee_id_idx` (`fee_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`pay_id`, `fee_id`, `current_balance`, `amount_tendered`, `change`, `ending_balance`, `date`, `status`) VALUES
(1, 1, 3100, NULL, NULL, NULL, '2019-01-04 15:00:00', 'Partially Paid'),
(2, 2, 2600, NULL, NULL, NULL, '2019-01-08 15:00:00', 'Unpaid'),
(3, 1, 0, NULL, NULL, NULL, '2019-01-05 15:00:00', 'Fully Paid');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE IF NOT EXISTS `registration` (
  `reg_id` int(11) NOT NULL AUTO_INCREMENT,
  `cu_id` int(11) DEFAULT NULL,
  `mode` varchar(45) DEFAULT NULL,
  `registration_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `d_arrival` date DEFAULT NULL,
  `d_departure` date DEFAULT NULL,
  PRIMARY KEY (`reg_id`),
  KEY `cu_id_idx` (`cu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19006 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`reg_id`, `cu_id`, `mode`, `registration_date`, `d_arrival`, `d_departure`) VALUES
(19001, 1, 'Call', '2019-01-01 16:00:00', '2019-01-02', '2019-01-05'),
(19002, 2, 'Emaill', '2019-01-05 16:00:00', '2019-01-06', '2019-01-09'),
(19003, 3, 'Walk-in', '2019-04-20 09:26:53', '2019-01-01', '2019-01-05'),
(19004, 4, 'Walk-in', '2019-04-20 09:26:53', '2019-01-03', '2019-01-06'),
(19005, 5, 'Walk-in', '2019-04-20 09:26:53', '2019-01-06', '2019-01-10');

-- --------------------------------------------------------

--
-- Table structure for table `reg_fa`
--

DROP TABLE IF EXISTS `reg_fa`;
CREATE TABLE IF NOT EXISTS `reg_fa` (
  `reg_id` int(11) NOT NULL,
  `fac_name` varchar(45) DEFAULT NULL,
  `room_name` varchar(45) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `capacity` int(11) DEFAULT NULL,
  `excess` int(11) DEFAULT '0',
  KEY `reg_id_idx` (`reg_id`),
  KEY `room_id_idx` (`room_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_fa`
--

INSERT INTO `reg_fa` (`reg_id`, `fac_name`, `room_name`, `price`, `capacity`, `excess`) VALUES
(19005, 'Cottage 106', NULL, 2600, 11, 0),
(19001, 'Cottage 103', NULL, 2600, 11, 0),
(19002, 'Cottage 102', NULL, 2600, 11, 0),
(19001, 'Cottage 101', NULL, 2600, 11, 3),
(19004, 'Cottage 105', NULL, 2600, 11, 0),
(19003, 'Cottage 104', NULL, 2600, 11, 3),
(19001, 'Cottage 201', NULL, 2600, 11, 0);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `res_id` int(11) NOT NULL AUTO_INCREMENT,
  `cu_id` int(11) NOT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `mode` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT 'reserved',
  `d_arrival` date DEFAULT NULL,
  `d_departure` date DEFAULT NULL,
  PRIMARY KEY (`res_id`),
  KEY `cu_id_idx` (`cu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`res_id`, `cu_id`, `date`, `mode`, `status`, `d_arrival`, `d_departure`) VALUES
(1, 1, '2018-12-31 16:00:00', 'Call', 'registered', '2019-01-02', '2019-01-05'),
(2, 2, '2019-01-04 16:00:00', 'Email', 'registered', '2019-01-06', '2019-01-09'),
(3, 5, '2019-01-04 16:00:00', 'Email', 'reserved', '2019-01-07', '2019-01-09'),
(4, 6, '2019-04-29 05:26:26', 'Call', 'pending', '2019-01-09', '2019-01-12');

-- --------------------------------------------------------

--
-- Table structure for table `res_fa`
--

DROP TABLE IF EXISTS `res_fa`;
CREATE TABLE IF NOT EXISTS `res_fa` (
  `res_id` int(11) NOT NULL,
  `fac_name` varchar(45) DEFAULT NULL,
  `room_num` varchar(45) DEFAULT NULL,
  KEY `res_id_idx` (`res_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `res_fa`
--

INSERT INTO `res_fa` (`res_id`, `fac_name`, `room_num`) VALUES
(1, 'Cottage 101', NULL),
(2, 'Cottage 102', NULL),
(1, 'Cottage 103', NULL),
(3, 'Cottage 201', NULL);

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
-- Table structure for table `re_se`
--

DROP TABLE IF EXISTS `re_se`;
CREATE TABLE IF NOT EXISTS `re_se` (
  `reg_id` int(11) NOT NULL,
  `ser_name` varchar(45) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
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
  `beds` varchar(45) DEFAULT NULL,
  `details` varchar(45) DEFAULT NULL,
  `status` varchar(45) CHARACTER SET big5 DEFAULT NULL,
  PRIMARY KEY (`room_id`),
  KEY `fac_id_idx` (`fac_id`)
) ENGINE=MyISAM AUTO_INCREMENT=170 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_id`, `fac_id`, `room_num`, `beds`, `details`, `status`) VALUES
(1, 66, 'Room 101', '7', 'w/ private toilet & bath', 'available'),
(2, 66, 'Room 102', '7', 'w/ private toilet & bath', 'available'),
(3, 66, 'Room 103', '5', 'w/ private toilet & bath', 'unavailable'),
(4, 66, 'Room 104', '6', 'w/ private toilet & bath', 'available'),
(5, 66, 'Room 105', '5', 'w/ private toilet & bath', 'available'),
(6, 66, 'Room 106', '6', 'w/ private toilet & bath', 'available'),
(7, 66, 'Room 107', '6', 'w/ private toilet & bath', 'available'),
(8, 66, 'Room 108', '6', 'w/ private toilet & bath', 'available'),
(9, 66, 'Room 109', '5', 'w/ private toilet & bath', 'available'),
(10, 66, 'Room 110', '5', 'w/ private toilet & bath', 'available'),
(11, 66, 'Room 113', '7', 'w/ private toilet & bath', 'available'),
(12, 66, 'Room 201', '7', 'w/ private toilet & bath', 'available'),
(13, 66, 'Room 202', '7', 'w/ private toilet & bath', 'available'),
(14, 66, 'Room 203', '5', 'w/ private toilet & bath', 'unavailable'),
(15, 66, 'Room 204', '6', 'w/ private toilet & bath', 'available'),
(16, 66, 'Room 205', '5', 'w/ private toilet & bath', 'available'),
(17, 66, 'Room 206', '6', 'w/ private toilet & bath', 'available'),
(18, 66, 'Room 207', '6', 'w/ private toilet & bath', 'available'),
(19, 66, 'Room 208', '6', 'w/ private toilet & bath', 'available'),
(20, 66, 'Room 209', '6', 'w/ private toilet & bath', 'available'),
(21, 66, 'Room 210', '6', 'w/ private toilet & bath', 'available'),
(22, 66, 'Room 212', '7', 'w/ private toilet & bath', 'available'),
(23, 66, 'Room 213', '6', 'w/ private toilet & bath', 'available'),
(24, 66, 'Room 214', '5', 'w/ private toilet & bath', 'available'),
(25, 67, 'Room 101', '4', 'w/ common toilet & bath', 'available'),
(26, 68, 'Room 101', '2', 'w/ common toilet & bath', 'available'),
(27, 68, 'Room 102', '3', 'w/ common toilet & bath', 'available'),
(28, 68, 'Room 103', '5', 'w/ common toilet & bath', 'available'),
(29, 68, 'Room 104', '2', 'w/ common toilet & bath', 'unavailable'),
(30, 68, 'Room 105', '2', 'w/ common toilet & bath', 'available'),
(31, 68, 'Room 106', '7', 'w/ common toilet & bath', 'available'),
(32, 68, 'Room 107', '2', 'w/ common toilet & bath', 'unavailable'),
(33, 68, 'Room 201', '2', 'w/ common toilet & bath', 'available'),
(34, 68, 'Room 202', '2', 'w/ common toilet & bath', 'available'),
(35, 68, 'Room 203', '2', 'w/ common toilet & bath', 'available'),
(36, 68, 'Room 204', '2', 'w/ common toilet & bath', 'available'),
(37, 68, 'Room 205', '2', 'w/ common toilet & bath', 'available'),
(38, 68, 'Room 206', '4', 'w/ common toilet & bath', 'available'),
(39, 68, 'Room 207', '2', 'w/ common toilet & bath', 'available'),
(40, 68, 'Room 208', '3', 'w/ common toilet & bath', 'available'),
(41, 68, 'Room 209', '5', 'w/ common toilet & bath', 'available'),
(42, 68, 'Room 210', '4', 'w/ common toilet & bath', 'available'),
(43, 68, 'Room 211', '2', 'w/ common toilet & bath', 'available'),
(44, 68, 'Room 212', '2', 'w/ common toilet & bath', 'available'),
(45, 69, 'Room 201', '12', 'w/ common toilet & bath', 'available'),
(46, 69, 'Room 202', '10', 'w/ common toilet & bath', 'available'),
(47, 69, 'Room 203', '9', 'w/ common toilet & bath', 'available'),
(48, 69, 'Room 204', '8', 'w/ common toilet & bath', 'available'),
(49, 69, 'Room 205', '6', 'w/ common toilet & bath', 'available'),
(50, 69, 'Room 206', '8', 'w/ common toilet & bath', 'unavailable'),
(51, 69, 'Room 207', '8', 'w/ common toilet & bath', 'available'),
(52, 69, 'Room 208', '8', 'w/ common toilet & bath', 'unavailable'),
(53, 69, 'Room 209', '4', 'w/ common toilet & bath', 'available'),
(54, 69, 'Room 210', '8', 'w/ common toilet & bath', 'available'),
(55, 69, 'Room 211', '4', 'w/ common toilet & bath', 'available'),
(56, 69, 'Room 212', '8', 'w/ common toilet & bath', 'available'),
(57, 69, 'Room 213', '4', 'w/ common toilet & bath', 'available'),
(58, 69, 'Room 214', '7', 'w/ common toilet & bath', 'available'),
(59, 69, 'Room 215', '4', 'w/ common toilet & bath', 'available'),
(60, 69, 'Room 216', '8', 'w/ common toilet & bath', 'available'),
(61, 69, 'Room 217', '4', 'w/ common toilet & bath', 'available'),
(62, 69, 'Room 218', '8', 'w/ common toilet & bath', 'available'),
(63, 69, 'Room 219', '4', 'w/ common toilet & bath', 'available'),
(64, 69, 'Room 220', '6', 'w/ common toilet & bath', 'available'),
(65, 69, 'Room 221', '4', 'w/ common toilet & bath', 'available'),
(66, 70, 'Room 101 ', '7', 'w/ private toilet & bath', 'available'),
(67, 70, 'Room 102', '10', 'w/ private toilet & bath', 'available'),
(68, 70, 'Room 104', '7', 'w/ private toilet & bath', 'available'),
(69, 70, 'Room 105', '7', 'w/ private toilet & bath', 'available'),
(70, 70, 'Room 106', '4', 'w/ private toilet & bath', 'available'),
(71, 70, 'Room 107', '4', 'w/ private toilet & bath', 'available'),
(72, 70, 'Room 108', '7', 'w/ private toilet & bath', 'available'),
(73, 70, 'Room 109', '7', 'w/ private toilet & bath', 'available'),
(74, 70, 'Room 111', '6', 'w/ private toilet & bath', 'available'),
(75, 70, 'Room 112', '10', 'w/ private toilet & bath', 'available'),
(76, 70, 'Room 113', '7', 'w/ private toilet & bath', 'unavailable'),
(77, 70, 'Room 201', '7', 'w/ private toilet & bath', 'available'),
(78, 70, 'Room 202', '7', 'w/ private toilet & bath', 'available'),
(79, 70, 'Room 203', '5', 'w/ common toilet & bath', 'available'),
(80, 70, 'Room 204', '10', 'w/ common toilet & bath', 'available'),
(81, 70, 'Room 205', '7', 'w/ private toilet & bath', 'available'),
(82, 70, 'Room 206', '7', 'w/ private toilet & bath', 'available'),
(83, 70, 'Room 207', '20', 'w/ private toilet & bath', 'available'),
(84, 70, 'Room 208', '7', 'w/ private toilet & bath', 'available'),
(85, 70, 'Room 209', '7', 'w/ private toilet & bath', 'available'),
(86, 70, 'Room 211', '6', 'w/ private toilet & bath', 'available'),
(87, 70, 'Room 212', '7', 'w/ private toilet & bath', 'available'),
(88, 70, 'Room 213', '7', 'w/ private toilet & bath', 'available'),
(89, 70, 'Room 301', '8', 'w/ private toilet & bath', 'available'),
(90, 70, 'Room 302', '8', 'w/ private toilet & bath', 'available'),
(91, 70, 'Room 305', '9', 'w/ private toilet & bath', 'available'),
(92, 70, 'Room 306', '9', 'w/ private toilet & bath', 'available'),
(93, 70, 'Room 307', '20', 'w/ private toilet & bath', 'available'),
(94, 70, 'Room 308', '8', 'w/ private toilet & bath', 'available'),
(95, 70, 'Room 309', '8', 'w/ private toilet & bath', 'available'),
(96, 70, 'Room 312', '8', 'w/ private toilet & bath', 'available'),
(97, 70, 'Room 313', '8', 'w/ private toilet & bath', 'available'),
(98, 71, 'Room 1', '12', 'w/ private toilet & bath', 'available'),
(99, 71, 'Room 2', '8', 'w/ private toilet & bath', 'available'),
(100, 71, 'Room 3', '8', 'w/ private toilet & bath', 'available'),
(101, 71, 'Room 4', '8', 'w/ private toilet & bath', 'available'),
(102, 71, 'Room 5', '8', 'w/ private toilet & bath', 'available'),
(103, 71, 'Room 6', '8', 'w/ private toilet & bath', 'available'),
(104, 71, 'Room 7', '8', 'w/ private toilet & bath', 'available'),
(105, 71, 'Room 7A', '8', 'w/ common toilet & bath', 'available'),
(106, 71, 'Room 8', '10', 'w/ common toilet & bath', 'available'),
(107, 71, 'Room 9', '10', 'w/ common toilet & bath', 'available'),
(108, 71, 'Room 10', '12', 'w/ common toilet & bath', 'available'),
(109, 72, 'Room 101', '5', 'w/ common toilet & bath', 'available'),
(110, 72, 'Room 102', '8', 'w/ common toilet & bath', 'available'),
(111, 72, 'Room 103', '14', 'w/ common toilet & bath', 'unavailable'),
(112, 78, 'Room 104', '9', 'w/ private toilet & bath', 'available'),
(113, 72, 'Room 201', '13', 'w/ common toilet & bath', 'available'),
(114, 72, 'Room 202', '13', 'w/ common toilet & bath', 'available'),
(115, 72, 'Room 203', '13', 'w/ common toilet & bath', 'available'),
(116, 72, 'Room 204', '2', 'w/ common toilet & bath', 'available'),
(117, 72, 'Room 205', '3', 'w/ common toilet & bath', 'unavailable'),
(118, 73, 'Room 101 A', '7', 'w/ common toilet & bath', 'available'),
(119, 73, 'Room 102 A', '7', 'w/ common toilet & bath', 'available'),
(120, 73, 'Room 103 A', '7', 'w/ common toilet & bath', 'available'),
(121, 73, 'Room 101 B', '2', 'w/ common toilet & bath', 'available'),
(122, 73, 'Room 102 B', '3', 'w/ common toilet & bath', 'available'),
(123, 73, 'Room 103 B', '3', 'w/ common toilet & bath', 'available'),
(124, 73, 'Room 201 C', '7', 'w/ common toilet & bath', 'available'),
(125, 73, 'Room 202 C', '7', 'w/ common toilet & bath', 'available'),
(126, 73, 'Room 203 C', '7', 'w/ common toilet & bath', 'available'),
(127, 73, 'Room 204 C', '4', 'w/ common toilet & bath', 'available'),
(128, 73, 'Room 201 D', '4', 'w/ common toilet & bath', 'available'),
(129, 73, 'Room 202 D', '4', 'w/ common toilet & bath', 'available'),
(130, 73, 'Room 203 D', '4', 'w/ common toilet & bath', 'available'),
(131, 74, 'Room 101', '4', 'w/ common toilet & bath', 'available'),
(132, 74, 'Room 102', '4', 'w/ common toilet & bath', 'available'),
(133, 74, 'Room 103', '4', 'w/ common toilet & bath', 'available'),
(134, 74, 'Room 104', '5', 'w/ common toilet & bath', 'available'),
(135, 74, 'Room 105', '4', 'w/ common toilet & bath', 'available'),
(136, 74, 'Room 106', '4', 'w/ common toilet & bath', 'available'),
(137, 74, 'Room 107', '4', 'w/ common toilet & bath', 'available'),
(139, 74, 'Room 109', '4', 'w/ common toilet & bath', 'available'),
(140, 74, 'Room 110', '4', 'w/ common toilet & bath', 'available'),
(141, 74, 'Room 111', '4', 'w/ common toilet & bath', 'available'),
(142, 74, 'Room 112', '6', 'w/ common toilet & bath', 'available'),
(143, 74, 'Room 113', '4', 'w/ common toilet & bath', 'available'),
(144, 74, 'Room 114', '4', 'w/ common toilet & bath', 'available'),
(145, 75, 'Room 101', '13', 'w/ private toilet & bath', 'available'),
(146, 75, 'Room 102', '12', 'w/ private toilet & bath', 'available'),
(147, 75, 'Room 201', '9', 'w/ common toilet & bath', 'available'),
(148, 75, 'Room 203', '8', 'w/ common toilet & bath', 'available'),
(149, 75, 'Room 204', '8', 'w/ common toilet & bath', 'available'),
(150, 75, 'Room 205', '8', 'w/ common toilet & bath', 'available'),
(151, 75, 'Room 206', '5', 'w/ common toilet & bath', 'available'),
(152, 76, 'Room 1', '4', 'w/ common toilet & bath', 'available'),
(153, 76, 'Room 2', '4', 'w/ common toilet & bath', 'available'),
(154, 76, 'Room 3', '4', 'w/ common toilet & bath', 'available'),
(155, 76, 'Room 4', '4', 'w/ common toilet & bath', 'available'),
(156, 76, 'Room 5', '4', 'w/ common toilet & bath', 'available'),
(157, 76, 'Room 6', '4', 'w/ common toilet & bath', 'available'),
(158, 76, 'Room 7', '4', 'w/ common toilet & bath', 'available'),
(159, 76, 'Room 8', '4', 'w/ common toilet & bath', 'available'),
(160, 77, 'Room 101', '4', 'w/ common toilet & bath', 'available'),
(161, 77, 'Room 102', '4', 'w/ common toilet & bath', 'available'),
(162, 77, 'Room 103', '4', 'w/ common toilet & bath', 'available'),
(163, 77, 'Room 104', '4', 'w/ common toilet & bath', 'available'),
(164, 77, 'Room 105', '4', 'w/ common toilet & bath', 'available'),
(165, 77, 'Room 201', '4', 'w/ common toilet & bath', 'available'),
(166, 77, 'Room 202', '4', 'w/ common toilet & bath', 'available'),
(167, 77, 'Room 203', '4', 'w/ common toilet & bath', 'available'),
(168, 77, 'Room 204', '4', 'w/ common toilet & bath', 'available'),
(169, 77, 'Room 205', '4', 'w/ common toilet & bath', 'available');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `ser_id` int(11) NOT NULL AUTO_INCREMENT,
  `ser_name` varchar(45) DEFAULT NULL,
  `price` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ser_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`ser_id`, `ser_name`, `price`, `status`) VALUES
(1, 'Photocopy', '2.50', 'available'),
(2, 'FAX Machine', '4', 'available'),
(3, 'Telephone', '5', 'available'),
(4, 'LCD Projector', '2200', 'available'),
(5, 'Conference Table', '55', 'available'),
(6, 'Monobloc Chairs', '22', 'available'),
(7, 'Table Cloth', '22', 'available'),
(8, 'Electricity', '150', 'available'),
(9, 'Built-in Speaker', '880', 'available'),
(10, 'Speaker and Mic', '880', 'available'),
(12, 'Karaoke', '330', 'available'),
(13, 'Videoke', '1000', 'available');

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
  `status` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT 'active',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `l_name`, `f_name`, `m_name`, `office`, `position`, `username`, `password`, `created_at`, `updated_at`, `remember_token`, `status`) VALUES
(1, 'Pua Phee', 'Aneeka', 'Della', 'Reservation', 'Head', 'aneeka', '$2y$10$bXXcZyxZkRs51IWkU9vcVO2yAlBbbH5jmRBNHSFGnGKVNsE.kWixS', '2019-04-12 09:04:02', '2019-04-12 09:04:02', 'MxxQcfRZiRkEr78yA5VvYc0zwvKS9p2OcMTI59R1j6w5chvYHwUUZHIBJj7N', 'active'),
(2, 'Hilarion', 'Bill Lenard', 'Reyes', 'Accounting', 'Head', 'bill', '$2y$10$oYW1uTcLjyIIrjCa/YbyHOStuBEBHwF2dyVHXlxBy2KvwxuRiNbRa', '2019-04-28 23:36:47', '2019-04-28 23:36:47', NULL, 'active'),
(3, 'Pua Phee', 'Ashley Chester', 'Della', 'Reservation', 'Head', 'ashley', '$2y$10$/rP4AMbGR7Lt3D4t7j6kkeeYswxV6B7REoaK0PNRr2V05RDhpMnb6', '2019-04-28 23:37:08', '2019-04-28 23:37:08', 'w96mnsTXF8LMdRQTIuLIkntAdNiWRAI32IchVKYpj3jEAGICYVcruCsLsYRa', 'active'),
(4, 'Piso', 'Henrhod', 'Yadno', 'Front Desk', 'Head', 'piso', '$2y$10$Z6X.8ewE4LLSv.ICCKTLwuftHk/3ibp7.FtZ62w4.LuMjXEH0wQBC', '2019-04-28 23:37:25', '2019-04-28 23:37:25', NULL, 'active'),
(5, 'Padsuyan', 'Jones', 'Mariano', 'Supervisor', 'Head', 'jones', '$2y$10$BvqS26TJTSbS5UlkJzExM.1vJIVH3zlGmxW7PT38Tl8rsgqxqAT12', '2019-04-28 23:37:39', '2019-04-28 23:37:39', NULL, 'active'),
(6, 'Laroya', 'Regae', 'Hernandez', 'Superintendent', 'Head', 'regae', '$2y$10$4OmZW5RQc4kT4q.3AkkD5.nN4DOXiBW8VjBnw5/q84cRBS6n1rsDC', '2019-04-28 23:38:04', '2019-04-28 23:38:04', NULL, 'active'),
(7, 'Dela Rosa', 'Zyrieh', 'Soliven', 'Cashier', 'Head', 'zyrieh', '$2y$10$omfB8OsmhmapDXmCjUSRPunU7CWV4Gb9w.hyvUeuJXJThKvfFz65W', '2019-04-28 23:38:44', '2019-04-28 23:38:44', NULL, 'active');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
