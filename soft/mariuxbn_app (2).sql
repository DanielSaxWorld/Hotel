-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 30, 2022 at 11:57 PM
-- Server version: 10.3.35-MariaDB-log-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mariuxbn_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `active_check_in`
--

CREATE TABLE `active_check_in` (
  `id` int(225) NOT NULL,
  `time` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date` date DEFAULT NULL,
  `lodge_id` varchar(500) DEFAULT NULL,
  `uin` varchar(500) DEFAULT NULL,
  `fullname` varchar(500) DEFAULT NULL,
  `phone` varchar(500) DEFAULT NULL,
  `arrival_date` datetime DEFAULT NULL,
  `checkout` datetime DEFAULT NULL,
  `room` varchar(500) DEFAULT NULL,
  `room_name` varchar(500) DEFAULT NULL,
  `room_price` float(12,2) DEFAULT NULL,
  `night` varchar(500) DEFAULT NULL,
  `payment_method` varchar(500) DEFAULT NULL,
  `discount` varchar(500) DEFAULT NULL,
  `caution_fee` float(12,2) DEFAULT NULL,
  `total_amount` float(12,2) DEFAULT NULL,
  `status` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `active_check_in`
--

INSERT INTO `active_check_in` (`id`, `time`, `date`, `lodge_id`, `uin`, `fullname`, `phone`, `arrival_date`, `checkout`, `room`, `room_name`, `room_price`, `night`, `payment_method`, `discount`, `caution_fee`, `total_amount`, `status`) VALUES
(19, '2022-08-10 08:13:39', '2022-08-09', 'L090822100404', 'MHSG180222776', 'Emmanuel Kayode', '07067869400', '2022-08-10 10:04:00', '2022-08-11 10:04:00', '3', 'Super Classic (1107)', 15000.00, '1', 'Cash', '0', NULL, 15000.00, 'Checked-In'),
(20, '2022-08-09 09:34:01', '2022-08-09', 'L090822103328', 'MHSG180222776', 'Emmanuel Kayode', '07067869400', '2022-08-16 10:33:00', '2022-08-19 10:33:00', '3', 'Super Classic (1107)', 15000.00, '3', 'POS', '0', NULL, 45000.00, 'Reserved'),
(21, '2022-08-09 10:07:08', '2022-08-09', 'L090822110413', 'MHSG180222776', 'Emmanuel Kayode', '07067869400', '2022-08-10 11:06:00', '2022-08-11 11:06:00', '4', 'Super Classic (1108)', 15000.00, '1', 'Cash', '0', NULL, 15000.00, 'Reserved'),
(22, '2022-08-09 10:24:04', '2022-08-09', 'L090822112332', 'MHSG180222776', 'Emmanuel Kayode', '07067869400', '2022-09-01 11:23:00', '2022-09-09 11:23:00', '3', 'Super Classic (1107)', 15000.00, '8', 'POS', '0', NULL, 120000.00, 'Reserved'),
(23, '2022-08-09 10:25:43', '2022-08-09', 'L090822112517', 'MHSG180222776', 'Emmanuel Kayode', '07067869400', '2022-08-30 11:25:00', '2022-08-31 11:25:00', '3', 'Super Classic (1107)', 15000.00, '1', 'POS', '0', NULL, 15000.00, 'Reserved'),
(24, '2022-08-09 10:43:52', '2022-08-09', 'L090822114326', 'MHSG180222776', 'Emmanuel Kayode', '07067869400', '2022-09-08 11:43:00', '2022-09-09 11:43:00', '4', 'Super Classic (1108)', 15000.00, '1', 'Cash', '0', NULL, 15000.00, 'Reserved'),
(25, '2022-08-09 11:00:28', '2022-08-09', 'L090822115941', 'MHSG060622930', 'Aluko Opeyemi Folajimi', '07067903042', '2022-08-20 11:59:00', '2022-08-21 12:00:00', '3', 'Super Classic (1107)', 15000.00, '1', 'Cash', '0', NULL, 15000.00, 'Reserved'),
(26, '2022-08-09 11:31:20', '2022-08-09', 'L090822122918', 'MHSG090822519', 'adebayo  opeyemi', '09068209137', '2022-08-09 12:29:00', '2022-08-10 12:30:00', '5', 'Super Deluxe (1101)', 24500.00, '1', 'POS', '20%', NULL, 19600.00, 'Checked-In');

-- --------------------------------------------------------

--
-- Table structure for table `check_in`
--

CREATE TABLE `check_in` (
  `id` int(225) NOT NULL,
  `time` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date` date DEFAULT NULL,
  `lodge_id` varchar(500) DEFAULT NULL,
  `uin` varchar(500) DEFAULT NULL,
  `fullname` varchar(500) DEFAULT NULL,
  `phone` varchar(500) DEFAULT NULL,
  `arrival_date` datetime DEFAULT NULL,
  `checkout` datetime DEFAULT NULL,
  `room` varchar(500) DEFAULT NULL,
  `room_name` varchar(500) DEFAULT NULL,
  `room_price` float(12,2) DEFAULT NULL,
  `night` varchar(500) DEFAULT NULL,
  `payment_method` varchar(500) DEFAULT NULL,
  `discount` varchar(500) DEFAULT NULL,
  `caution_fee` float(12,2) DEFAULT NULL,
  `total_amount` float(12,2) DEFAULT NULL,
  `status` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `check_in`
--

INSERT INTO `check_in` (`id`, `time`, `date`, `lodge_id`, `uin`, `fullname`, `phone`, `arrival_date`, `checkout`, `room`, `room_name`, `room_price`, `night`, `payment_method`, `discount`, `caution_fee`, `total_amount`, `status`) VALUES
(1, '2022-02-22 13:21:05', '2022-02-22', 'L220222141746', 'MHSG180222776', 'Emmanuel Kayode', '07067869400', '2022-02-22 14:18:00', '2022-02-23 14:18:00', '1', 'Super Classic (001)', 16875.00, '1', 'Cash', '0', NULL, 16875.00, 'Checked-Out'),
(2, '2022-03-08 11:52:39', '2022-03-08', 'L080322124744', 'MHSG190222351', 'GODSPOWER OTALI', '08074400351', '2022-03-08 12:47:00', '2022-03-09 12:47:00', '3', 'Super Deluxe (101)', 26850.00, '1', 'POS', '3%', NULL, 26044.50, 'Checked-Out'),
(3, '2022-03-10 13:06:16', '2022-03-10', 'L100322140525', 'MHSG190222351', 'GODSPOWER OTALI', '08074400351', '2022-03-10 14:04:00', '2022-03-11 14:04:00', '1', 'Super Classic (001)', 17000.00, '1', 'Cash', '0', NULL, 17000.00, 'Checked-Out'),
(4, '2022-03-10 13:09:15', '2022-03-10', 'L100322140559', 'MHSG190222351', 'GODSPOWER OTALI', '08074400351', '2022-03-12 14:05:00', '2022-03-13 14:05:00', '1', 'Super Classic (001)', 17000.00, '2', 'Cash', '0', NULL, 34000.00, 'Checked-Out'),
(5, '2022-03-10 13:13:47', '2022-03-10', 'L100322141156', 'MHSG180222776', 'Emmanuel Kayode', '07067869400', '2022-03-10 14:11:00', '2022-03-11 14:11:00', '1', 'Super Classic (001)', 17000.00, '1', 'Cash', '0', NULL, 17000.00, 'Checked-Out'),
(6, '2022-03-29 10:23:03', '2022-03-10', 'L100322141328', 'MHSG180222776', 'Emmanuel Kayode', '07067869400', '2022-03-12 14:12:00', '2022-03-13 14:12:00', '1', 'Super Classic (001)', 17000.00, '1', 'POS', '0', NULL, 17000.00, 'Checked-Out'),
(7, '2022-03-29 11:38:04', '2022-03-29', 'L290322123033', 'MHSG290322615', 'AKINRIBOYA', '08034853635', '2022-03-29 11:56:00', '2022-03-30 11:56:00', '4', 'Super Classic (1108)', 15000.00, '1', 'POS', '10%', NULL, 13500.00, 'Checked-Out'),
(8, '2022-06-11 13:19:30', '2022-03-29', 'L290322124535', 'MHSG290322568', 'Arodunsi Oluwabusayo', '09057567248', '2022-03-29 12:10:00', '2022-03-30 12:11:00', '3', 'Super Classic (1107)', 15000.00, '1', 'POS', '0', NULL, 15000.00, 'Checked-Out'),
(9, '2022-06-11 13:12:38', '2022-06-11', 'L110622140800', 'MHSG110622725', 'Mercy', '08132202151', '2022-06-11 14:08:00', '2022-06-12 14:09:00', '5', 'Super Deluxe (1101)', 24500.00, '1', 'Cash', '5%', NULL, 23275.00, 'Checked-Out'),
(10, '2022-06-11 13:33:37', '2022-06-11', 'L110622142950', 'MHSG110622725', 'Mercy', '08132202151', '2022-06-11 16:30:00', '2022-06-12 14:30:00', '3', 'Super Classic (1107)', 15000.00, '1', 'Cash', '010%', NULL, 13500.00, 'Checked-Out'),
(11, '2022-06-17 10:51:48', '2022-06-11', 'L110622144354', 'MHSG290322615', 'AKINRIBOYA', '08034853635', '2022-06-11 14:44:00', '2022-06-12 14:44:00', '7', 'Super Deluxe (1103)', 24500.00, '1', 'Cash', '0', NULL, 24500.00, 'Checked-Out'),
(12, '2022-07-27 07:49:44', '2022-06-16', 'L160622221018', 'MHSG180222776', 'Emmanuel Kayode', '07067869400', '2022-06-16 22:10:00', '2022-06-17 22:10:00', '1', 'Super Classic (1104)', 15000.00, '1', 'Cash', '0', NULL, 15000.00, 'Checked-Out'),
(13, '2022-08-08 16:04:19', '2022-06-17', 'L170622123034', 'MHSG110622725', 'Mercy', '08132202151', '2022-06-17 12:30:00', '2022-06-21 12:30:00', '5', 'Super Deluxe (1101)', 24500.00, '4', 'POS', '0', NULL, 98000.00, 'Checked-Out'),
(14, '2022-08-10 08:12:15', '2022-06-22', 'L220622094054', 'MHSG060622930', 'Aluko Opeyemi Folajimi', '07067903042', '2022-06-22 09:41:00', '2022-06-24 09:41:00', '2', 'Super Classic (1106)', 15000.00, '2', 'Cash', '0', NULL, 30000.00, 'Checked-Out'),
(15, '2022-07-26 14:01:01', '2022-07-22', 'L220722113331', 'MHSG060622930', 'Aluko Opeyemi Folajimi', '07067903042', '2022-07-23 11:33:00', '2022-07-31 11:33:00', '3', 'Super Classic (1107)', 15000.00, '8', 'Cash', '0', NULL, 120000.00, 'Checked-Out'),
(16, '2022-07-27 07:49:03', '2022-07-22', 'L220722121444', 'MHSG180222776', 'Emmanuel Kayode', '07067869400', '2022-07-23 12:14:00', '2022-07-24 12:14:00', '3', 'Super Classic (1107)', 15000.00, '1', 'Cash', '0', NULL, 15000.00, 'Checked-Out'),
(17, '2022-08-10 08:12:46', '2022-08-02', 'L020822074801', 'MHSG180222776', 'Emmanuel Kayode', '07067869400', '2022-08-02 07:48:00', '2022-08-04 07:48:00', '1', 'Super Classic (1104)', 15000.00, '2', 'Cash', '10%', NULL, 13500.00, 'Checked-Out'),
(18, '2022-08-10 08:13:15', '2022-08-08', 'L080822164616', 'MHSG080822224', 'Christianah Adelusi', '08161746948', '2022-08-10 18:00:00', '2022-08-15 12:00:00', '25', 'Mariston Suite (1105)', 55000.00, '5', 'Transfer', '0', NULL, 275000.00, 'Checked-Out'),
(19, '2022-08-10 08:13:39', '2022-08-09', 'L090822100404', 'MHSG180222776', 'Emmanuel Kayode', '07067869400', '2022-08-10 10:04:00', '2022-08-11 10:04:00', '3', 'Super Classic (1107)', 15000.00, '1', 'Cash', '0', NULL, 15000.00, 'Checked-In'),
(20, '2022-08-09 09:34:01', '2022-08-09', 'L090822103328', 'MHSG180222776', 'Emmanuel Kayode', '07067869400', '2022-08-16 10:33:00', '2022-08-19 10:33:00', '3', 'Super Classic (1107)', 15000.00, '3', 'POS', '0', NULL, 15000.00, 'Reserved'),
(21, '2022-08-09 10:07:08', '2022-08-09', 'L090822110413', 'MHSG180222776', 'Emmanuel Kayode', '07067869400', '2022-08-10 11:06:00', '2022-08-11 11:06:00', '4', 'Super Classic (1108)', 15000.00, '1', 'Cash', '0', NULL, 15000.00, 'Reserved'),
(22, '2022-08-09 10:24:04', '2022-08-09', 'L090822112332', 'MHSG180222776', 'Emmanuel Kayode', '07067869400', '2022-09-01 11:23:00', '2022-09-09 11:23:00', '3', 'Super Classic (1107)', 15000.00, '8', 'POS', '0', NULL, 15000.00, 'Reserved'),
(23, '2022-08-09 10:25:43', '2022-08-09', 'L090822112517', 'MHSG180222776', 'Emmanuel Kayode', '07067869400', '2022-08-30 11:25:00', '2022-08-31 11:25:00', '3', 'Super Classic (1107)', 15000.00, '1', 'POS', '0', NULL, 15000.00, 'Reserved'),
(24, '2022-08-09 10:43:52', '2022-08-09', 'L090822114326', 'MHSG180222776', 'Emmanuel Kayode', '07067869400', '2022-09-08 11:43:00', '2022-09-09 11:43:00', '4', 'Super Classic (1108)', 15000.00, '1', 'Cash', '0', NULL, 15000.00, 'Reserved'),
(25, '2022-08-09 11:00:28', '2022-08-09', 'L090822115941', 'MHSG060622930', 'Aluko Opeyemi Folajimi', '07067903042', '2022-08-20 11:59:00', '2022-08-21 12:00:00', '3', 'Super Classic (1107)', 15000.00, '1', 'Cash', '0', NULL, 15000.00, 'Reserved'),
(26, '2022-08-09 11:31:20', '2022-08-09', 'L090822122918', 'MHSG090822519', 'adebayo  opeyemi', '09068209137', '2022-08-09 12:29:00', '2022-08-10 12:30:00', '5', 'Super Deluxe (1101)', 24500.00, '1', 'POS', '20%', NULL, 19600.00, 'Checked-In');

-- --------------------------------------------------------

--
-- Table structure for table `check_out`
--

CREATE TABLE `check_out` (
  `id` int(225) NOT NULL,
  `time` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date` date DEFAULT NULL,
  `lodge_id` varchar(500) DEFAULT NULL,
  `arrival_date` datetime DEFAULT NULL,
  `room` varchar(500) DEFAULT NULL,
  `room_name` varchar(500) DEFAULT NULL,
  `amount` float(12,2) DEFAULT NULL,
  `uin` varchar(500) DEFAULT NULL,
  `fullname` varchar(500) DEFAULT NULL,
  `phone` varchar(500) DEFAULT NULL,
  `checkout_date` datetime DEFAULT NULL,
  `return_caution` float(12,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `check_out`
--

INSERT INTO `check_out` (`id`, `time`, `date`, `lodge_id`, `arrival_date`, `room`, `room_name`, `amount`, `uin`, `fullname`, `phone`, `checkout_date`, `return_caution`) VALUES
(1, '2022-02-22 13:21:05', '2022-02-22', 'L220222141746', '2022-02-22 14:18:00', '1', 'Super Classic (001)', 16875.00, 'MHSG180222776', 'Emmanuel Kayode', '07067869400', '2022-02-22 14:20:00', NULL),
(2, '2022-03-08 11:52:39', '2022-03-08', 'L080322124744', '2022-03-08 12:47:00', '3', 'Super Deluxe (101)', 26044.50, 'MHSG190222351', 'GODSPOWER OTALI', '08074400351', '2022-03-08 12:52:00', NULL),
(3, '2022-03-10 13:09:15', '2022-03-10', 'L100322140559', '2022-03-12 14:05:00', '1', 'Super Classic (001)', 34000.00, 'MHSG190222351', 'GODSPOWER OTALI', '08074400351', '2022-03-10 14:08:00', NULL),
(4, '2022-03-29 10:23:03', '2022-03-29', 'L100322141328', '2022-03-12 14:12:00', '1', 'Super Classic (001)', 17000.00, 'MHSG180222776', 'Emmanuel Kayode', '07067869400', '2022-03-29 11:22:00', NULL),
(5, '2022-03-29 11:38:04', '2022-03-29', 'L290322123033', '2022-03-29 11:56:00', '4', 'Super Classic (1108)', 13500.00, 'MHSG290322615', 'AKINRIBOYA', '08034853635', '2022-03-30 12:03:00', NULL),
(6, '2022-06-11 13:12:38', '2022-06-11', 'L110622140800', '2022-06-11 14:08:00', '5', 'Super Deluxe (1101)', 23275.00, 'MHSG110622725', 'Mercy', '08132202151', '2022-06-11 14:12:00', NULL),
(7, '2022-06-11 13:19:30', '2022-06-11', 'L290322124535', '2022-03-29 12:10:00', '3', 'Super Classic (1107)', 15000.00, 'MHSG290322568', 'Arodunsi Oluwabusayo', '09057567248', '2022-06-11 17:19:00', NULL),
(8, '2022-06-11 13:33:37', '2022-06-11', 'L110622142950', '2022-06-11 16:30:00', '3', 'Super Classic (1107)', 13500.00, 'MHSG110622725', 'Mercy', '08132202151', '2022-06-11 17:33:00', NULL),
(9, '2022-06-17 10:51:48', '2022-06-17', 'L110622144354', '2022-06-11 14:44:00', '7', 'Super Deluxe (1103)', 24500.00, 'MHSG290322615', 'AKINRIBOYA', '08034853635', '2022-06-17 11:51:00', NULL),
(10, '2022-07-26 14:01:01', '2022-07-26', 'L220722113331', '2022-07-23 11:33:00', '3', 'Super Classic (1107)', 120000.00, 'MHSG060622930', 'Aluko Opeyemi Folajimi', '07067903042', '2022-07-26 15:00:00', NULL),
(11, '2022-07-27 07:49:03', '2022-07-27', 'L220722121444', '2022-07-23 12:14:00', '3', 'Super Classic (1107)', 15000.00, 'MHSG180222776', 'Emmanuel Kayode', '07067869400', '2022-07-27 08:48:00', NULL),
(12, '2022-07-27 07:49:44', '2022-07-27', 'L160622221018', '2022-06-16 22:10:00', '1', 'Super Classic (1104)', 15000.00, 'MHSG180222776', 'Emmanuel Kayode', '07067869400', '2022-07-27 08:49:00', NULL),
(13, '2022-08-08 16:04:19', '2022-08-08', 'L170622123034', '2022-06-17 12:30:00', '5', 'Super Deluxe (1101)', 98000.00, 'MHSG110622725', 'Mercy', '08132202151', '2022-08-08 17:04:00', NULL),
(14, '2022-08-10 08:12:15', '2022-08-10', 'L220622094054', '2022-06-22 09:41:00', '2', 'Super Classic (1106)', 30000.00, 'MHSG060622930', 'Aluko Opeyemi Folajimi', '07067903042', '2022-08-10 09:12:00', NULL),
(15, '2022-08-10 08:12:46', '2022-08-10', 'L020822074801', '2022-08-02 07:48:00', '1', 'Super Classic (1104)', 13500.00, 'MHSG180222776', 'Emmanuel Kayode', '07067869400', '2022-08-10 09:12:00', NULL),
(16, '2022-08-10 08:13:15', '2022-08-10', 'L080822164616', '2022-08-10 18:00:00', '25', 'Mariston Suite (1105)', 275000.00, 'MHSG080822224', 'Christianah Adelusi', '08161746948', '2022-08-10 09:13:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`) VALUES
(1, 'Kitchen'),
(7, 'Bar'),
(6, 'Laundary Items'),
(5, 'Reception'),
(9, 'Room Service'),
(10, 'House Keeping');

-- --------------------------------------------------------

--
-- Table structure for table `dispatch_stocked`
--

CREATE TABLE `dispatch_stocked` (
  `id` int(11) NOT NULL,
  `stock_id` int(11) NOT NULL,
  `issued_by` varchar(100) NOT NULL,
  `issued_to` varchar(110) NOT NULL,
  `department` varchar(100) NOT NULL,
  `available_quantity` int(11) NOT NULL,
  `issued_quantity` int(11) NOT NULL,
  `balance_quantity` int(11) NOT NULL,
  `description` text NOT NULL,
  `status` varchar(40) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dispatch_stocked`
--

INSERT INTO `dispatch_stocked` (`id`, `stock_id`, `issued_by`, `issued_to`, `department`, `available_quantity`, `issued_quantity`, `balance_quantity`, `description`, `status`, `date`) VALUES
(1, 2, '0', 'Durojaye Samson', '7', 20, 5, 15, 'Bar', 'DISPATCHED', '2022-08-17 00:50:58'),
(2, 2, '0', '', '', 30, 0, 30, 'Towels : Record Updated', 'UPDATED', '2022-08-17 00:51:40'),
(3, 2, '0', 'Emmanuel', '6', 30, 2, 28, 'This is a description for this towel', 'DISPATCHED', '2022-08-17 03:28:09'),
(4, 1, '0', 'Emmanuel', '6', 30, 2, 28, '', 'DISPATCHED', '2022-08-17 06:15:56'),
(5, 3, '0', 'Durojaye Samson', '10', 30, 10, 20, 'Replacement', 'DISPATCHED', '2022-08-17 06:16:09'),
(6, 1, 'Aluko Opeyemi Folajimi', 'Emmauel', '5', 28, 3, 25, '', 'DISPATCHED', '2022-08-17 06:22:00'),
(7, 2, 'Aluko Opeyemi Folajimi', 'Deji', '7', 30, 3, 27, 'Testing', 'DISPATCHED', '2022-08-17 06:31:25'),
(8, 6, '', '', '', 20, 0, 20, 'Hineken Drink : Added as New Stock', 'ADDED', '2022-08-17 06:37:32'),
(9, 6, 'Aluko Opeyemi Folajimi', 'Hakeem', '7', 20, 5, 15, '', 'DISPATCHED', '2022-08-17 06:38:34'),
(10, 6, '', '', '', 15, 0, 15, 'Hineken Drink : Record Updated', 'UPDATED', '2022-08-17 06:39:52');

-- --------------------------------------------------------

--
-- Table structure for table `dopex`
--

CREATE TABLE `dopex` (
  `id` int(225) NOT NULL,
  `opex_id` varchar(500) DEFAULT NULL,
  `opex_date` date DEFAULT NULL,
  `purpose` varchar(500) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `amount` float(12,2) DEFAULT NULL,
  `c_o` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dopex`
--

INSERT INTO `dopex` (`id`, `opex_id`, `opex_date`, `purpose`, `description`, `amount`, `c_o`) VALUES
(1, 'OPEX080322130851', '2022-03-08', 'Logistics', 'Going to the market', 200.00, 'Deji');

-- --------------------------------------------------------

--
-- Table structure for table `drepayment`
--

CREATE TABLE `drepayment` (
  `id` int(11) NOT NULL,
  `invoice_number` varchar(500) DEFAULT NULL,
  `name` varchar(500) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `amount` float(12,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dsales`
--

CREATE TABLE `dsales` (
  `transaction_id` int(11) NOT NULL,
  `invoice_number` varchar(100) NOT NULL,
  `cashier` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `type` varchar(100) NOT NULL,
  `price` float(12,2) DEFAULT NULL,
  `amount` varchar(100) NOT NULL,
  `profit` varchar(100) NOT NULL,
  `due_date` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `balance` varchar(100) NOT NULL,
  `imei` varchar(500) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `qty` varchar(500) DEFAULT NULL,
  `product_code` varchar(500) DEFAULT NULL,
  `service` varchar(500) DEFAULT NULL,
  `gen_name` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dsales`
--

INSERT INTO `dsales` (`transaction_id`, `invoice_number`, `cashier`, `date`, `type`, `price`, `amount`, `profit`, `due_date`, `name`, `balance`, `imei`, `time`, `qty`, `product_code`, `service`, `gen_name`) VALUES
(1, 'MHR-02352622021000', 'Ridwan Ajanlekoko', '2022-02-22', 'cash', 500.00, '1000', '400', '1000', '', '', 'Cash', '2022-02-22 14:37:43', '2', 'Eba', 'Swallow', 'STOCK220222480'),
(2, 'MHR-12564508033970', 'Ridwan Ajanlekoko', '2022-03-08', 'cash', 500.00, '1500', '600', '1500', '', '', 'Cash', '2022-03-08 12:59:04', '3', 'Eba', 'Swallow', 'STOCK220222480'),
(3, 'MHR-01005008032599', 'Ridwan Ajanlekoko', '2022-03-08', 'cash', 500.00, '1500', '800', '2000', '', '', 'Cash', '2022-03-08 13:06:19', '3', 'Eba', 'Swallow', 'STOCK220222480'),
(4, 'MHR-01130811067013', 'Ridwan Ajanlekoko', '2022-06-11', 'cash', 500.00, '2000', '1000', '2000', '', '', 'Cash', '2022-06-11 13:15:50', '4', 'Eba', 'Swallow', 'STOCK080322304'),
(5, 'MHR-01241011066515', 'Midemide', '2022-06-11', 'cash', 500.00, '3000', '1500', '3000', 'mide', '', 'Cash', '2022-06-11 13:25:14', '6', 'Eba', 'Swallow', 'STOCK080322304'),
(6, 'MHR-01224111063096', 'Ridwan Ajanlekoko', '2022-06-11', 'cash', 3000.00, '1039698', '130998', '100900', 'akin', '', 'Cash', '2022-06-11 13:32:35', '6', 'Chicken soup', 'Protein', 'STOCK060622973'),
(8, 'MHR-01323611069890', 'Ridwan Ajanlekoko', '2022-06-11', 'cash', 3000.00, '9000', '3000', '9000', '', '', 'Cash', '2022-06-11 13:35:40', '3', 'Chicken soup', 'Protein', 'STOCK060622973'),
(9, 'MHR-01354011068141', 'Ridwan Ajanlekoko', '2022-06-11', 'cash', 500.00, '500', '300', '1000', '', '', 'Cash', '2022-06-11 13:38:19', '1', 'Fish', 'Protein', 'STOCK080322251'),
(11, 'MHR-01480111064048', 'Ridwan Ajanlekoko', '2022-06-11', 'cash', 500.00, '4000', '1600', '4000', 'joy', '', 'Cash', '2022-06-11 13:49:05', '3', 'Fish', 'Protein', 'STOCK080322251'),
(12, 'MHR-11202109089760', 'TEst Rest', '2022-08-09', 'cash', 500.00, '1400', '800', '2000', '', '', 'Cash', '2022-08-09 11:22:42', '4', 'Fish', 'Protein', 'STOCK080322251'),
(13, 'MHR-11232609082248', 'TEst Rest', '2022-08-09', 'cash', 3000.00, '16000', '5500', '16000', '', '', 'POS', '2022-08-09 11:24:43', '10', 'Chicken soup', 'Protein', 'STOCK060622973');

-- --------------------------------------------------------

--
-- Table structure for table `dsales_order`
--

CREATE TABLE `dsales_order` (
  `transaction_id` int(11) NOT NULL,
  `invoice` varchar(100) NOT NULL,
  `product` varchar(100) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `profit` varchar(100) NOT NULL,
  `product_code` varchar(150) NOT NULL,
  `gen_name` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` varchar(100) NOT NULL,
  `discount` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `cashier` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dsales_order`
--

INSERT INTO `dsales_order` (`transaction_id`, `invoice`, `product`, `qty`, `amount`, `profit`, `product_code`, `gen_name`, `name`, `price`, `discount`, `date`, `time`, `cashier`) VALUES
(1, 'MHR-02352622021000', '1', '2', '1000', '400', 'Eba', 'STOCK220222480', 'Swallow', '500', '0', '2022-02-22', '2022-02-22 13:36:07', NULL),
(2, 'MHR-02402222022192', '1', '3', '1500', '600', 'Eba', 'STOCK220222480', 'Swallow', '500', '0', '2022-02-22', '2022-02-22 13:46:10', NULL),
(3, 'MHR-12564508033970', '1', '3', '1500', '600', 'Eba', 'STOCK220222480', 'Swallow', '500', '0', '2022-03-08', '2022-03-08 11:58:32', NULL),
(4, 'MHR-01005008032599', '1', '1', '500', '200', 'Eba', 'STOCK220222480', 'Swallow', '500', '0', '2022-03-08', '2022-03-08 12:02:26', NULL),
(5, 'MHR-01005008032599', '2', '2', '1000', '600', 'Fish', 'STOCK080322251', 'Protein', '500', '0', '2022-03-08', '2022-03-08 12:06:09', NULL),
(6, 'MHR-02594106069642', '2', '200', '100000', '60000', 'Fish', 'STOCK080322251', 'Protein', '500', '0', '2022-06-06', '2022-06-07 09:36:10', NULL),
(8, 'MHR-01130811067013', '2', '2', '1000', '600', 'Fish', 'STOCK080322251', 'Protein', '500', '0', '2022-06-11', '2022-06-11 12:15:04', NULL),
(9, 'MHR-01155011068227', '1', '2', '1000', '400', 'Eba', 'STOCK080322304', 'Swallow', '500', '0', '2022-06-11', '2022-06-11 12:17:14', NULL),
(10, 'MHR-01155011068227', '2', '2', '1000', '600', 'Fish', 'STOCK080322251', 'Protein', '500', '0', '2022-06-11', '2022-06-11 12:17:23', NULL),
(11, 'MHR-01155011068227', '1', '1', '500', '200', 'Eba', 'STOCK080322304', 'Swallow', '500', '0', '2022-06-11', '2022-06-11 12:18:01', NULL),
(12, 'MHR-01241011066515', '1', '3', '1500', '600', 'Eba', 'STOCK080322304', 'Swallow', '500', '0', '2022-06-11', '2022-06-11 12:24:41', NULL),
(13, 'MHR-01241011066515', '2', '3', '1500', '900', 'Fish', 'STOCK080322251', 'Protein', '500', '0', '2022-06-11', '2022-06-11 12:24:53', NULL),
(14, 'MHR-01224111063096', '3', '3', '9000', '3000', 'Chicken soup', 'STOCK060622973', 'Protein', '3000', '0', '2022-06-11', '2022-06-11 12:31:17', NULL),
(15, 'MHR-01224111063096', '4', '3', '1030698', '127998', '7381', 'STOCK060622162', 'BEER', '343566', '0', '2022-06-11', '2022-06-11 12:31:36', NULL),
(16, 'MHR-01332211069311', '1', '4', '2000', '800', 'Eba', 'STOCK080322304', 'Swallow', '500', '0', '2022-06-11', '2022-06-11 12:33:47', NULL),
(17, 'MHR-01323611069890', '3', '3', '9000', '3000', 'Chicken soup', 'STOCK060622973', 'Protein', '3000', '0', '2022-06-11', '2022-06-11 12:34:14', NULL),
(18, 'MHR-01354011068141', '2', '1', '500', '300', 'Fish', 'STOCK080322251', 'Protein', '500', '0', '2022-06-11', '2022-06-11 12:38:06', NULL),
(19, 'MHR-01381911061692', '1', '1', '500', '200', 'Eba', 'STOCK080322304', 'Swallow', '500', '0', '2022-06-11', '2022-06-11 12:40:18', NULL),
(20, 'MHR-01381911061692', '2', '1', '500', '300', 'Fish', 'STOCK080322251', 'Protein', '500', '0', '2022-06-11', '2022-06-11 12:43:09', NULL),
(21, 'MHR-01480111064048', '2', '2', '1000', '600', 'Fish', 'STOCK080322251', 'Protein', '500', '0', '2022-06-11', '2022-06-11 12:48:33', NULL),
(22, 'MHR-01480111064048', '3', '1', '3000', '1000', 'Chicken soup', 'STOCK060622973', 'Protein', '3000', '0', '2022-06-11', '2022-06-11 12:48:47', NULL),
(23, 'MHR-11202109089760', '2', '2', '1000', '600', 'Fish', 'STOCK080322251', 'Protein', '500', '0', '2022-08-09', '2022-08-09 10:21:23', 'TEst Rest'),
(24, 'MHR-11202109089760', '5', '2', '400', '200', 'Amala', 'STOCK170622882', 'Swallow', '200', '0', '2022-08-09', '2022-08-09 10:21:35', 'TEst Rest'),
(25, 'MHR-11232609082248', '3', '5', '15000', '5000', 'Chicken soup', 'STOCK060622973', 'Protein', '3000', '0', '2022-08-09', '2022-08-09 10:24:03', 'TEst Rest'),
(26, 'MHR-11232609082248', '5', '5', '1000', '500', 'Amala', 'STOCK170622882', 'Swallow', '200', '0', '2022-08-09', '2022-08-09 10:24:13', 'TEst Rest'),
(27, 'MHR-11283009086331', '2', '2', '1000', '600', 'Fish', 'STOCK080322251', 'Protein', '500', '0', '2022-08-09', '2022-08-09 10:28:42', 'TEst Rest'),
(28, 'MHR-07212009086618', '2', '2', '1000', '600', 'Fish', 'STOCK080322251', 'Protein', '500', '0', '2022-08-09', '2022-08-09 18:21:58', 'TEst Rest');

-- --------------------------------------------------------

--
-- Table structure for table `ewallet`
--

CREATE TABLE `ewallet` (
  `sn` int(11) NOT NULL,
  `uin` varchar(100) NOT NULL,
  `lodge_id` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `CrDt` varchar(20) NOT NULL,
  `amount` int(11) NOT NULL,
  `balance` int(11) NOT NULL,
  `user` varchar(30) NOT NULL,
  `approval` varchar(30) NOT NULL,
  `status` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ewallet`
--

INSERT INTO `ewallet` (`sn`, `uin`, `lodge_id`, `description`, `CrDt`, `amount`, `balance`, `user`, `approval`, `status`, `date`) VALUES
(1, 'MHSG180222776', '', 'Credit: Booking  fee', 'Credit', 200000, 200000, 'MHS7275', 'MHS6062', 1, '2022-08-02 02:47:31'),
(2, 'MHSG180222776', 'L020822074801', 'Debit: Check-in: Emmanuel Kayode into Room: 1 at Discount of 10%', 'Debit', 13500, 186500, 'MHS6062', '', 1, '2022-08-02 02:49:17'),
(3, 'MHSG110622725', '', 'Credit: Booking Fee for 2 Night(s)', 'Credit', 50000, 50000, 'MHS104', '', 0, '2022-08-08 11:39:37'),
(4, 'MHSG110622725', '', 'Credit: Booking Fee for 1 more Night', 'Credit', 20000, 20000, 'MHS104', '', 0, '2022-08-08 11:41:58'),
(8, 'MHSG110622725', '', 'Debit: Refund for Booking Fee for 2 Night(s)', 'Debit', 20000, -20000, 'MHS104', '', 0, '2022-08-08 11:59:44'),
(9, 'MHSG080822224', '', 'Credit: Booking Fee for 2 Night(s)', 'Credit', 50000, 50000, 'MHS7275', '', 0, '2022-08-08 12:17:35'),
(11, 'MHSG080822224', '', 'Debit: Refund for Booking Fee for 2 Night(s)', 'Debit', 40000, -40000, 'MHS7275', '', 0, '2022-08-08 12:20:41'),
(14, 'MHSG080822224', '', 'Debit: Refunf for Booking Fee for 2 Night(s)', 'Debit', 40000, -80000, 'MHS7275', '', 0, '2022-08-08 12:25:26'),
(19, 'MHSG080822224', '', 'Credit: Booking Fee for 2 Night(s)', 'Credit', 50000, -30000, '', '', 0, '2022-08-08 14:07:24'),
(20, 'MHSG180222776', 'L090822100404', 'Debit: Check-in: Emmanuel Kayode into Room: 3 at Discount of 0', 'Debit', 15000, 171500, 'MHS7275', '', 1, '2022-08-09 05:05:42'),
(21, 'MHSG290322615', '', 'Credit: Booking fee', 'Credit', 100000, 100000, 'MHS7275', '', 0, '2022-08-09 05:16:35'),
(22, 'MHSG180222776', 'L090822103328', 'Debit: Check-in: Emmanuel Kayode into Room: 3 at Discount of 0', 'Debit', 15000, 156500, '', '', 1, '2022-08-09 05:34:00'),
(23, 'MHSG180222776', 'L090822110413', 'Debit: Check-in: Emmanuel Kayode into Room: 4 at Discount of 0', 'Debit', 15000, 141500, '', '', 1, '2022-08-09 06:07:07'),
(24, 'MHSG180222776', 'L090822112332', 'Debit: Check-in: Emmanuel Kayode into Room: 3 at Discount of 0', 'Debit', 15000, 126500, 'MHS520', '', 1, '2022-08-09 06:24:02'),
(26, 'MHSG180222776', 'L090822114326', 'Debit: Check-in: Emmanuel Kayode into Room: 4 at Discount of 0', 'Debit', 15000, 111500, 'MHS520', '', 1, '2022-08-09 06:43:50'),
(27, 'MHSG060622930', '', 'Credit: Booking Fee for 1 Night', 'Credit', 20000, 20000, 'MHS599', 'MHS7275', 1, '2022-08-09 06:59:00'),
(28, 'MHSG060622930', 'L090822115941', 'Debit: Check-in: Aluko Opeyemi Folajimi into Room: 3 at Discount of 0', 'Debit', 15000, 5000, 'MHS599', '', 1, '2022-08-09 07:00:27'),
(29, 'MHSG090822519', '', 'Credit: Booking Fee for 2 Night(s)', 'Credit', 20000, 20000, 'MHS104', 'MHS7275', 1, '2022-08-09 07:23:30'),
(30, 'MHSG090822519', 'L090822122918', 'Debit: Check-in: adebayo  opeyemi into Room: 5 at Discount of 20%', 'Debit', 19600, 400, 'MHS191', '', 1, '2022-08-09 07:31:18');

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `id` int(225) NOT NULL,
  `uin` varchar(500) DEFAULT NULL,
  `fullname` varchar(500) DEFAULT NULL,
  `phone` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `gender` varchar(500) DEFAULT NULL,
  `civic_status` varchar(500) DEFAULT NULL,
  `vehicle_type` varchar(500) DEFAULT NULL,
  `plate_no` varchar(500) DEFAULT NULL,
  `vehicle_colour` varchar(500) DEFAULT NULL,
  `identification` varchar(500) DEFAULT NULL,
  `nok_name` varchar(500) DEFAULT NULL,
  `nok_phone` varchar(500) DEFAULT NULL,
  `valid_id` varchar(500) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`id`, `uin`, `fullname`, `phone`, `email`, `gender`, `civic_status`, `vehicle_type`, `plate_no`, `vehicle_colour`, `identification`, `nok_name`, `nok_phone`, `valid_id`) VALUES
(1, 'MHSG180222144', 'Ann Rex', '+2347069631931', 'samdoannex@gmail.com', 'Male', 'Single', 'nvewjcfo', '', 'RED', 'International Passport', 'VGWEMF', 'DDFWEDWDWD', 'ASA.jpg'),
(2, 'MHSG180222776', 'Emmanuel Kayode', '07067869400', 'adelugba.emma@gmail.com', 'Male', 'Single', '', '', '', 'National ID Card', 'Emmanuel', '07067869400', '108001595_3944866532250772_4254986070602460008_n.jpeg'),
(3, 'MHSG190222351', 'GODSPOWER OTALI', '08074400351', 'otaligodspower@gmail.com', 'Male', 'Married', 'Benz E320', 'AAA 232 DS', 'Green', 'Others', 'RACHEL GODSPOWER-OTALI', '080767788676', 'tech.jpg'),
(4, 'MHSG290322615', 'AKINRIBOYA', '08034853635', 'akinriboya@maristonhotels.com', 'Male', 'Married', '', '', '', 'National ID Card', 'mercy', '08146741179', 'bbbbb.jpg'),
(5, 'MHSG290322568', 'Arodunsi Oluwabusayo', '09057567248', 'oluwabusayo@maristonhotels.com', 'Male', 'Single', '', '', '', 'National ID Card', 'mercy', '08146741179', 'bbbbb.jpg'),
(6, 'MHSG060622930', 'Aluko Opeyemi Folajimi', '07067903042', 'folajimiopeyemisax13@gmail.com', 'Male', 'Single', 'bbm', 'iipp00', 'black', 'Voter\'s Card', 'Aluko Oluwapelumi', '08144892591', 'ope.jpg'),
(7, 'MHSG110622725', 'Mercy', '08132202151', '', 'Female', 'Single', '', '', '', 'Voter\'s Card', 'Random', '12345', 'Aani golden sella basmati rice.jpeg'),
(8, 'MHSG080822224', 'Christianah Adelusi', '08161746948', 'adelusic@gmail.com', 'Female', 'Single', '', '', '', 'Voter\'s Card', 'Tim', '1223456789', 'CAC-Registration-Fees.jpg'),
(9, 'MHSG090822519', 'adebayo  opeyemi', '09068209137', 'adead@gmail.com', 'Female', 'Single', '', '', 'blue', 'Voter\'s Card', 'ayo   ajewole', '1223456789', 'CAC-Registration-Fees.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `inventory_stock`
--

CREATE TABLE `inventory_stock` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `quantity_available` varchar(100) NOT NULL,
  `added_by` varchar(100) NOT NULL,
  `updated_by` varchar(100) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory_stock`
--

INSERT INTO `inventory_stock` (`id`, `title`, `quantity_available`, `added_by`, `updated_by`, `date_added`, `date_updated`) VALUES
(1, 'Tissue', '25', '', 'Aluko Opeyemi Folajimi', '2022-08-15 12:33:02', '2022-08-17 06:22:00'),
(2, 'Towels', '27', '', '', '2022-08-16 05:11:39', '2022-08-17 06:31:25'),
(3, 'Bulbs', '20', '', 'Aluko Opeyemi Folajimi', '2022-08-16 05:26:35', '2022-08-17 06:16:09'),
(4, 'Soap', '12', '', 'Aluko Opeyemi Folajimi', '2022-08-16 11:58:30', '2022-08-16 22:35:14'),
(5, 'Yam Tubers', '50', 'Aluko Opeyemi Folajimi', '', '2022-08-16 22:36:54', '0000-00-00 00:00:00'),
(6, 'Hineken Drink', '30', 'Aluko Opeyemi Folajimi', 'Aluko Opeyemi Folajimi', '2022-08-17 06:37:32', '2022-08-17 06:40:48');

-- --------------------------------------------------------

--
-- Table structure for table `opex`
--

CREATE TABLE `opex` (
  `id` int(225) NOT NULL,
  `opex_id` varchar(500) DEFAULT NULL,
  `opex_date` date DEFAULT NULL,
  `purpose` varchar(500) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `amount` float(12,2) DEFAULT NULL,
  `c_o` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `opex`
--

INSERT INTO `opex` (`id`, `opex_id`, `opex_date`, `purpose`, `description`, `amount`, `c_o`) VALUES
(1, 'OPEX060622160529', '2022-06-06', 'Logistics', 'Buy something', 2000.00, 'Emmanuel');

-- --------------------------------------------------------

--
-- Table structure for table `opex_ctg`
--

CREATE TABLE `opex_ctg` (
  `id` int(225) NOT NULL,
  `category` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `opex_ctg`
--

INSERT INTO `opex_ctg` (`id`, `category`) VALUES
(1, 'Logistics'),
(2, 'item purchase');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_code` varchar(200) NOT NULL,
  `gen_name` varchar(200) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `o_price` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `profit` varchar(100) NOT NULL,
  `onhand_qty` int(10) NOT NULL,
  `qty` int(10) NOT NULL,
  `qty_sold` int(10) NOT NULL,
  `date_arrival` varchar(500) NOT NULL,
  `total` float(12,2) DEFAULT NULL,
  `total_profit` float(12,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products2`
--

CREATE TABLE `products2` (
  `product_id` int(11) NOT NULL,
  `product_code` varchar(200) NOT NULL,
  `gen_name` varchar(200) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `o_price` float(12,2) DEFAULT NULL,
  `price` float(12,2) DEFAULT NULL,
  `wsprice` float(12,2) DEFAULT NULL,
  `qty` int(10) NOT NULL,
  `date_arrival` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_ctg`
--

CREATE TABLE `product_ctg` (
  `id` int(225) NOT NULL,
  `category` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_ctg`
--

INSERT INTO `product_ctg` (`id`, `category`) VALUES
(1, 'BEER'),
(2, 'Swallow'),
(3, 'Protein'),
(5, 'Soup');

-- --------------------------------------------------------

--
-- Table structure for table `pro_distributor`
--

CREATE TABLE `pro_distributor` (
  `product_id` int(11) NOT NULL,
  `product_code` varchar(200) NOT NULL,
  `gen_name` varchar(200) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `o_price` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `profit` varchar(100) NOT NULL,
  `onhand_qty` int(10) NOT NULL,
  `qty` int(10) NOT NULL,
  `qty_sold` int(10) NOT NULL,
  `date_arrival` varchar(500) NOT NULL,
  `total` float(12,2) DEFAULT NULL,
  `total_profit` float(12,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pro_distributor`
--

INSERT INTO `pro_distributor` (`product_id`, `product_code`, `gen_name`, `product_name`, `o_price`, `price`, `profit`, `onhand_qty`, `qty`, `qty_sold`, `date_arrival`, `total`, `total_profit`) VALUES
(1, 'Eba', 'STOCK100822668', 'Swallow', '400', '600', '200.00', 0, 200, 10, '2022-02-22', 5000.00, 2000.00),
(2, 'Fish', 'STOCK080322251', 'Protein', '200', '500', '300.00', 0, -199, 20, '2022-03-08', 10000.00, 6000.00),
(3, 'Chicken soup', 'STOCK060622973', 'Protein', '2000', '3000', '1000.00', 0, -7, 5, '2022-06-06', 15000.00, 5000.00),
(4, '7381', 'STOCK060622162', 'BEER', '300900', '343566', '42666.00', 0, 87, 90, '2022-06-24', 30920940.00, 3839940.00),
(5, 'Amala', 'STOCK170622882', 'Swallow', '100', '200', '100.00', 0, 1003, 1000, '2022-06-17', 200000.00, 100000.00),
(6, 'Egusi', 'STOCK170622245', 'Soup', '100', '200', '100.00', 0, 10, 10, '2022-06-17', 2000.00, 1000.00),
(7, 'ENG', 'STOCK140822841', 'BEER', '5000', '6000', '1000.00', 0, 10, 10, '2022-08-04', 60000.00, 10000.00);

-- --------------------------------------------------------

--
-- Table structure for table `repayment`
--

CREATE TABLE `repayment` (
  `id` int(11) NOT NULL,
  `invoice_number` varchar(500) DEFAULT NULL,
  `name` varchar(500) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `amount` float(12,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `room_name` varchar(500) DEFAULT NULL,
  `price` float(12,2) DEFAULT NULL,
  `room_status` varchar(500) DEFAULT NULL,
  `lodge_id` varchar(500) DEFAULT NULL,
  `uin` varchar(500) DEFAULT NULL,
  `fullname` varchar(500) DEFAULT NULL,
  `phone` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `room_id`, `room_name`, `price`, `room_status`, `lodge_id`, `uin`, `fullname`, `phone`) VALUES
(1, 1, 'Super Classic (1104)', 15000.00, 'Available', '', '', '', ''),
(2, 2, 'Super Classic (1106)', 15000.00, 'Available', '', '', '', ''),
(3, 3, 'Super Classic (1107)', 15000.00, 'Checked-In', 'L090822115941', 'MHSG060622930', 'Aluko Opeyemi Folajimi', '07067903042'),
(4, 4, 'Super Classic (1108)', 15000.00, 'Reserved', 'L090822114326', 'MHSG180222776', 'Emmanuel Kayode', '07067869400'),
(5, 5, 'Super Deluxe (1101)', 24500.00, 'Occupied', 'L090822122918', 'MHSG090822519', 'adebayo  opeyemi', '09068209137'),
(6, 6, 'Super Deluxe (1102)', 24500.00, 'Available', NULL, NULL, NULL, NULL),
(7, 7, 'Super Deluxe (1103)', 24500.00, 'Available', '', '', '', ''),
(8, 8, 'Super Deluxe (2201)', 24500.00, 'Available', NULL, NULL, NULL, NULL),
(9, 9, 'Super Deluxe (2202)', 24500.00, 'Available', NULL, NULL, NULL, NULL),
(10, 10, 'Super Deluxe (2203)', 24500.00, 'Available', NULL, NULL, NULL, NULL),
(11, 11, 'Super Deluxe (2204)', 24500.00, 'Available', NULL, NULL, NULL, NULL),
(12, 12, 'Super Deluxe (2205)', 24500.00, 'Available', NULL, NULL, NULL, NULL),
(13, 13, 'Super Deluxe (3305)', 24500.00, 'Available', NULL, NULL, NULL, NULL),
(14, 14, 'Super Deluxe (4401)', 24500.00, 'Available', NULL, NULL, NULL, NULL),
(15, 15, 'Super Deluxe (4402)', 24500.00, 'Available', NULL, NULL, NULL, NULL),
(16, 16, 'Executive Double (3301)', 27500.00, 'Available', NULL, NULL, NULL, NULL),
(17, 17, 'Executive Double (3302)', 27500.00, 'Available', NULL, NULL, NULL, NULL),
(18, 18, 'Executive Double (3303)', 27500.00, 'Available', NULL, NULL, NULL, NULL),
(19, 19, 'Executive Double (3304)', 27500.00, 'Available', NULL, NULL, NULL, NULL),
(20, 20, 'Executive Double (3306)', 27500.00, 'Available', NULL, NULL, NULL, NULL),
(21, 21, 'Executive Double (3308)', 27500.00, 'Available', NULL, NULL, NULL, NULL),
(22, 22, 'Executive Double (4403)', 27500.00, 'Available', NULL, NULL, NULL, NULL),
(23, 23, 'Super Executive (3309)', 30000.00, 'Available', NULL, NULL, NULL, NULL),
(24, 24, 'Super Executive (4405)', 30000.00, 'Available', NULL, NULL, NULL, NULL),
(25, 25, 'Mariston Suite (1105)', 55000.00, 'Available', '', '', '', ''),
(26, 26, 'Mariston Royal Suite (4405)', 60000.00, 'Available', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `room_price`
--

CREATE TABLE `room_price` (
  `id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `room_name` varchar(500) DEFAULT NULL,
  `price` float(12,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_price`
--

INSERT INTO `room_price` (`id`, `room_id`, `room_name`, `price`) VALUES
(1, 1, 'Super Classic (1104)', 15000.00),
(2, 2, 'Super Classic (1106)', 15000.00),
(3, 3, 'Super Classic (1107)', 15000.00),
(4, 4, 'Super Classic (1108)', 15000.00),
(5, 5, 'Super Deluxe (1101)', 24500.00),
(6, 6, 'Super Deluxe (1102)', 24500.00),
(7, 7, 'Super Deluxe (1103)', 24500.00),
(8, 8, 'Super Deluxe (2201)', 24500.00),
(9, 9, 'Super Deluxe (2202)', 24500.00),
(10, 10, 'Super Deluxe (2203)', 24500.00),
(11, 11, 'Super Deluxe (2204)', 24500.00),
(12, 12, 'Super Deluxe (2205)', 24500.00),
(13, 13, 'Super Deluxe (3305)', 24500.00),
(14, 14, 'Super Deluxe (4401)', 24500.00),
(15, 15, 'Super Deluxe (4402)', 24500.00),
(16, 16, 'Executive Double (3301)', 27500.00),
(17, 17, 'Executive Double (3302)', 27500.00),
(18, 18, 'Executive Double (3303)', 27500.00),
(19, 19, 'Executive Double (3304)', 27500.00),
(20, 20, 'Executive Double (3306)', 27500.00),
(21, 21, 'Executive Double (3308)', 27500.00),
(22, 22, 'Executive Double (4403)', 27500.00),
(23, 23, 'Super Executive (3309)', 30000.00),
(24, 24, 'Super Executive (4405)', 30000.00),
(25, 25, 'Mariston Suite (1105)', 55000.00),
(26, 26, 'Mariston Royal Suite (4405)', 60000.00);

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `id` int(225) NOT NULL,
  `salary_id` varchar(500) DEFAULT NULL,
  `salary_date` date DEFAULT NULL,
  `staff_name` varchar(500) DEFAULT NULL,
  `payment_type` varchar(500) DEFAULT NULL,
  `month` varchar(500) DEFAULT NULL,
  `year` varchar(500) DEFAULT NULL,
  `salary_amount` float(12,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`id`, `salary_id`, `salary_date`, `staff_name`, `payment_type`, `month`, `year`, `salary_amount`) VALUES
(1, 'SALARY060622142734', '2022-06-01', 'Folajimi', 'IOU', 'February', '2020', 55.00);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `transaction_id` int(11) NOT NULL,
  `invoice_number` varchar(100) NOT NULL,
  `cashier` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `type` varchar(100) NOT NULL,
  `price` float(12,2) DEFAULT NULL,
  `amount` varchar(100) NOT NULL,
  `profit` varchar(100) NOT NULL,
  `due_date` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `balance` varchar(100) NOT NULL,
  `imei` varchar(500) DEFAULT NULL,
  `time` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `qty` varchar(500) DEFAULT NULL,
  `product_code` varchar(500) DEFAULT NULL,
  `service` varchar(500) DEFAULT NULL,
  `gen_name` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`transaction_id`, `invoice_number`, `cashier`, `date`, `type`, `price`, `amount`, `profit`, `due_date`, `name`, `balance`, `imei`, `time`, `qty`, `product_code`, `service`, `gen_name`) VALUES
(1, 'MHS-05215518025373', 'Emmanuel Adelugba', '2022-02-18', 'cash', NULL, '', '0', '100', '', '', 'Cash', '2022-02-18 16:25:11', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sales_order`
--

CREATE TABLE `sales_order` (
  `transaction_id` int(11) NOT NULL,
  `invoice` varchar(100) NOT NULL,
  `product` varchar(100) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `profit` varchar(100) NOT NULL,
  `product_code` varchar(150) NOT NULL,
  `gen_name` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` varchar(100) NOT NULL,
  `discount` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `cashier` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sopex`
--

CREATE TABLE `sopex` (
  `id` int(225) NOT NULL,
  `opex_id` varchar(500) DEFAULT NULL,
  `opex_date` date DEFAULT NULL,
  `purpose` varchar(500) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `amount` float(12,2) DEFAULT NULL,
  `c_o` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sproducts`
--

CREATE TABLE `sproducts` (
  `product_id` int(11) NOT NULL,
  `product_code` varchar(200) NOT NULL,
  `gen_name` varchar(200) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `o_price` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `profit` varchar(100) NOT NULL,
  `onhand_qty` int(10) NOT NULL,
  `qty` int(10) NOT NULL,
  `qty_sold` int(10) NOT NULL,
  `date_arrival` varchar(500) NOT NULL,
  `total` float(12,2) DEFAULT NULL,
  `total_profit` float(12,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sproducts`
--

INSERT INTO `sproducts` (`product_id`, `product_code`, `gen_name`, `product_name`, `o_price`, `price`, `profit`, `onhand_qty`, `qty`, `qty_sold`, `date_arrival`, `total`, `total_profit`) VALUES
(1, 'Hennessy VS', 'STOCK180222646', 'Alcohol', '2500', '9500', '7000.00', 0, 1, 20, '2022-02-18', 190000.00, 140000.00),
(2, 'Red Label', 'STOCK180222964', 'Alcohol', '3500', '6500', '3000.00', 0, 0, 10, '2022-02-18', 65000.00, 30000.00),
(3, 'STAR', 'STOCK180222680', 'BEER', '250', '450', '200.00', 0, 77, 100, '2022-02-18', 45000.00, 20000.00);

-- --------------------------------------------------------

--
-- Table structure for table `srepayment`
--

CREATE TABLE `srepayment` (
  `id` int(11) NOT NULL,
  `invoice_number` varchar(500) DEFAULT NULL,
  `name` varchar(500) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `amount` float(12,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ssales`
--

CREATE TABLE `ssales` (
  `transaction_id` int(11) NOT NULL,
  `invoice_number` varchar(100) NOT NULL,
  `cashier` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `type` varchar(100) NOT NULL,
  `price` float(12,2) DEFAULT NULL,
  `amount` varchar(100) NOT NULL,
  `profit` varchar(100) NOT NULL,
  `due_date` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `balance` varchar(100) NOT NULL,
  `imei` varchar(500) DEFAULT NULL,
  `time` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `qty` varchar(500) DEFAULT NULL,
  `product_code` varchar(500) DEFAULT NULL,
  `service` varchar(500) DEFAULT NULL,
  `gen_name` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ssales`
--

INSERT INTO `ssales` (`transaction_id`, `invoice_number`, `cashier`, `date`, `type`, `price`, `amount`, `profit`, `due_date`, `name`, `balance`, `imei`, `time`, `qty`, `product_code`, `service`, `gen_name`) VALUES
(1, 'AAB-08372511066807', 'Jerome', '2022-06-11', 'cash', 9500.00, '19000', '14000', '20000', '', '', 'POS', '2022-06-11 07:39:19', '2', 'Hennessy VS', 'Alcohol', 'STOCK180222646'),
(2, 'AAB-10020211065158', 'Jerome', '2022-06-11', 'cash', 9500.00, '19000', '14000', '20000', '', '', 'Cash', '2022-06-11 09:02:34', '2', 'Hennessy VS', 'Alcohol', 'STOCK180222646'),
(3, 'AAB-01520211068283', 'Jerome', '2022-06-11', 'cash', 9500.00, '22500', '13000', '25000', '', '', 'POS', '2022-06-11 12:53:46', '3', 'Hennessy VS', 'Alcohol', 'STOCK180222646'),
(4, 'AAB-10523613064309', 'Jerome', '2022-06-13', 'cash', 9500.00, '12650', '8400', '13000', 'mich', '', 'Cash', '2022-06-13 09:57:19', '8', 'Hennessy VS', 'Alcohol', 'STOCK180222646'),
(5, 'AAB-11045613069387', 'Jerome', '2022-06-13', 'cash', 6500.00, '51000', '34000', '51000', 'amanda', '', 'Transfer', '2022-06-13 10:06:10', '6', 'Red Label', 'Alcohol', 'STOCK180222964'),
(6, 'AAB-11080513064120', 'Jerome', '2022-06-13', 'cash', 9500.00, '22150', '15400', '22150', 'funke', '', 'Cash', '2022-06-13 10:09:26', '9', 'Hennessy VS', 'Alcohol', 'STOCK180222646'),
(7, 'AAB-01464913065619', 'Jerome', '2022-06-13', 'cash', 6500.00, '20400', '9400', '20000', 'maryjane', '', 'Cash', '2022-06-13 12:49:24', '5', 'Red Label', 'Alcohol', 'STOCK180222964'),
(8, 'AAB-01532713067142', 'Jerome', '2022-06-13', 'cash', 9500.00, '29400', '21400', '30000', '', '', 'Transfer', '2022-06-13 12:56:41', '5', 'Hennessy VS', 'Alcohol', 'STOCK180222646'),
(9, 'AAB-09594214062150', 'Jerome', '2022-06-14', 'cash', 6500.00, '6500', '3000', '7000', 'dry skin boy', '', 'Cash', '2022-06-14 09:02:39', '1', 'Red Label', 'Alcohol', 'STOCK180222964'),
(10, 'AAB-10190216067385', 'Jerome', '2022-06-16', 'cash', 9500.00, '9500', '7000', '10000', '', '', 'Cash', '2022-06-16 21:21:50', '1', 'Hennessy VS', 'Alcohol', 'STOCK180222646'),
(11, 'AAB-11422316062571', 'Jerome', '2022-06-16', 'cash', 450.00, '450', '200', '500', '', '', 'Cash', '2022-06-16 22:45:39', '1', 'STAR', 'BEER', 'STOCK180222680');

-- --------------------------------------------------------

--
-- Table structure for table `ssales_order`
--

CREATE TABLE `ssales_order` (
  `transaction_id` int(11) NOT NULL,
  `invoice` varchar(100) NOT NULL,
  `product` varchar(100) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `profit` varchar(100) NOT NULL,
  `product_code` varchar(150) NOT NULL,
  `gen_name` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` varchar(100) NOT NULL,
  `discount` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `cashier` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ssales_order`
--

INSERT INTO `ssales_order` (`transaction_id`, `invoice`, `product`, `qty`, `amount`, `profit`, `product_code`, `gen_name`, `name`, `price`, `discount`, `date`, `time`, `cashier`) VALUES
(1, 'AAB-08372511066807', '1', '2', '19000', '14000', 'Hennessy VS', 'STOCK180222646', 'Alcohol', '9500', '0', '2022-06-11', '2022-06-16 22:42:11', NULL),
(2, 'AAB-10020211065158', '1', '2', '19000', '14000', 'Hennessy VS', 'STOCK180222646', 'Alcohol', '9500', '0', '2022-06-11', '2022-06-16 22:42:11', NULL),
(3, 'AAB-01520211068283', '1', '1', '9500', '7000', 'Hennessy VS', 'STOCK180222646', 'Alcohol', '9500', '0', '2022-06-11', '2022-06-16 22:42:11', NULL),
(4, 'AAB-01520211068283', '2', '2', '13000', '6000', 'Red Label', 'STOCK180222964', 'Alcohol', '6500', '0', '2022-06-11', '2022-06-16 22:42:11', NULL),
(5, 'AAB-10475413068819', '1', '6', '57000', '42000', 'Hennessy VS', 'STOCK180222646', 'Alcohol', '9500', '0', '2022-06-13', '2022-06-16 22:42:11', NULL),
(6, 'AAB-10475413068819', '2', '2', '13000', '6000', 'Red Label', 'STOCK180222964', 'Alcohol', '6500', '0', '2022-06-13', '2022-06-16 22:42:11', NULL),
(7, 'AAB-10523613064309', '1', '1', '9500', '7000', 'Hennessy VS', 'STOCK180222646', 'Alcohol', '9500', '0', '2022-06-13', '2022-06-16 22:42:11', NULL),
(8, 'AAB-10523613064309', '3', '7', '3150', '1400', 'STAR', 'STOCK180222680', 'BEER', '450', '0', '2022-06-13', '2022-06-16 22:42:11', NULL),
(9, 'AAB-11045613069387', '2', '2', '13000', '6000', 'Red Label', 'STOCK180222964', 'Alcohol', '6500', '0', '2022-06-13', '2022-06-16 22:42:11', NULL),
(10, 'AAB-11045613069387', '1', '4', '38000', '28000', 'Hennessy VS', 'STOCK180222646', 'Alcohol', '9500', '0', '2022-06-13', '2022-06-16 22:42:11', NULL),
(11, 'AAB-11080513064120', '1', '2', '19000', '14000', 'Hennessy VS', 'STOCK180222646', 'Alcohol', '9500', '0', '2022-06-13', '2022-06-16 22:42:11', NULL),
(12, 'AAB-11080513064120', '3', '7', '3150', '1400', 'STAR', 'STOCK180222680', 'BEER', '450', '0', '2022-06-13', '2022-06-16 22:42:11', NULL),
(13, 'AAB-01464913065619', '2', '3', '19500', '9000', 'Red Label', 'STOCK180222964', 'Alcohol', '6500', '0', '2022-06-13', '2022-06-16 22:42:11', NULL),
(14, 'AAB-01464913065619', '3', '2', '900', '400', 'STAR', 'STOCK180222680', 'BEER', '450', '0', '2022-06-13', '2022-06-16 22:42:11', NULL),
(15, 'AAB-01532713067142', '1', '3', '28500', '21000', 'Hennessy VS', 'STOCK180222646', 'Alcohol', '9500', '0', '2022-06-13', '2022-06-16 22:42:11', NULL),
(16, 'AAB-01532713067142', '3', '2', '900', '400', 'STAR', 'STOCK180222680', 'BEER', '450', '0', '2022-06-13', '2022-06-16 22:42:11', NULL),
(17, 'AAB-09594214062150', '2', '1', '6500', '3000', 'Red Label', 'STOCK180222964', 'Alcohol', '6500', '0', '2022-06-14', '2022-06-16 22:42:11', NULL),
(18, 'AAB-10190216067385', '1', '1', '9500', '7000', 'Hennessy VS', 'STOCK180222646', 'Alcohol', '9500', '0', '2022-06-16', '2022-06-16 22:42:11', NULL),
(19, 'AAB-11422316062571', '3', '1', '450', '200', 'STAR', 'STOCK180222680', 'BEER', '450', '0', '2022-06-16', '2022-06-16 22:45:22', NULL),
(21, 'MHB-07330809083960', '3', '2', '900', '400', 'STAR', 'STOCK180222680', 'BEER', '450', '0', '2022-08-09', '2022-08-09 18:33:21', 'Test Bar');

-- --------------------------------------------------------

--
-- Table structure for table `staff_id`
--

CREATE TABLE `staff_id` (
  `id` int(225) UNSIGNED NOT NULL,
  `staff_id` varchar(500) DEFAULT NULL,
  `fullname` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `phone` varchar(500) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `station` varchar(500) DEFAULT NULL,
  `designation` varchar(500) DEFAULT NULL,
  `business_name` varchar(500) DEFAULT NULL,
  `business_phone` varchar(500) DEFAULT NULL,
  `business_address` varchar(500) DEFAULT NULL,
  `passport` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_id`
--

INSERT INTO `staff_id` (`id`, `staff_id`, `fullname`, `email`, `phone`, `password`, `station`, `designation`, `business_name`, `business_phone`, `business_address`, `passport`) VALUES
(1, 'MHS8353', 'ade ade', 'samdoannex@gmail.com', '+2347069631931', '*C35E172A8B0199E7F39ACAE3FF42CEEFC0E291DD', 'Akure', 'Super Admin', 'Mariston Hotels & Suites', '+234-706-786-9400', 'NTA Road, Oba-Ile Akure, Ondo State', '4264381_11571770.jpg'),
(2, 'MHS7275', 'Emmanuel Adelugba', 'adelugba.emma@gmail.com', '07067869400', '*FD571203974BA9AFE270FE62151AE967ECA5E0AA', 'Akure', 'Super Admin', 'Mariston Hotels & Suites', '+234-706-786-9400', 'NTA Road, Oba-Ile Akure, Ondo State', '108001595_3944866532250772_4254986070602460008_n.jpeg'),
(3, 'MHS3610', 'GODSPOWER OTALI', 'otaligodspower@gmail.com', '08074400351', '*AFDE125BC67FDD91829CD671190650C4C8C94638', 'Akure', 'Super Admin', 'Mariston Hotels & Suites', '+234-706-786-9400', 'NTA Road, Oba-Ile Akure, Ondo State', 'meinec.jpg'),
(4, 'MHS647', 'Ridwan Ajanlekoko', 'adelugba.emma+TC001@gmail.com', '07067869401', '*032197AE5731D4664921A6CCAC7CFCE6A0698693', 'Akure', 'Restaurants', 'Mariston Hotel & Suites', '+234-706-786-9400', 'NTA Road, Oba-Ile Akure, Ondo State', 'NIN.jpg'),
(5, 'MHS946', 'Mariston Reception', 'reception@maristonhotels.com', '07038983428', '*032197AE5731D4664921A6CCAC7CFCE6A0698693', 'Akure', 'Receptionist', 'Mariston Hotel & Suites', '+234-706-786-9400', 'NTA Road, Oba-Ile Akure, Ondo State', 'lcb-icon.png'),
(6, 'MHS183', 'Mercy James', 'fizzybeauty@gmail.com', '08146741179', '*032197AE5731D4664921A6CCAC7CFCE6A0698693', 'Akure', 'Receptionist', 'Mariston Hotel & Suites', '+234-706-786-9400', 'NTA Road, Oba-Ile Akure, Ondo State', 'lcb-icon.png'),
(12, 'MHS104', 'Opeyemi Aluko', 'folajimiopeyemisax13@gmail.com', '07067903042', '*E9D057131C22A0D76B4AAD2C61655BDFA706E637', 'Akure', 'Bar', 'Mariston Hotel & Suites', '+234-706-786-9400', 'NTA Road, Oba-Ile Akure, Ondo State', 'ope.jpg'),
(13, 'MHS994', 'Aluko Opeyemi Folajimi', 'folajimiopeyemisax13@gmail.com', '07067903042', '*E9D057131C22A0D76B4AAD2C61655BDFA706E637', 'Akure', 'MainStore', 'Mariston Hotel & Suites', '+234-706-786-9400', 'NTA Road, Oba-Ile Akure, Ondo State', 'Screenshot from 2022-06-03 11-46-38.png'),
(15, 'MHS60', 'Olamide', 'olamidealowooja@gmail.com', '08099886829', '*032197AE5731D4664921A6CCAC7CFCE6A0698693', 'Akure', 'Receptionist', 'Mariston Hotel & Suites', '+234-706-786-9400', 'NTA Road, Oba-Ile Akure, Ondo State', 'figma-removebg-preview.png'),
(16, 'MHS231', 'Jerome', 'adelugba.emma@gmail.com', '09063814512', '*FD571203974BA9AFE270FE62151AE967ECA5E0AA', 'Akure', 'Bar', 'Mariston Hotel & Suites', '+234-706-786-9400', 'NTA Road, Oba-Ile Akure, Ondo State', 'Maroon Background.jpg'),
(17, 'MHS520', 'Zion', 'adelugba.emma@gmail.com', '09063814513', '*032197AE5731D4664921A6CCAC7CFCE6A0698693', 'Akure', 'Receptionist', 'Mariston Hotel & Suites', '+234-706-786-9400', 'NTA Road, Oba-Ile Akure, Ondo State', 'Fp maroon icon.png'),
(18, 'MHS248', 'Midemide', 'adelugba.emma@gmail.com', '09063814512', '*032197AE5731D4664921A6CCAC7CFCE6A0698693', 'Akure', 'Restaurants', 'Mariston Hotel & Suites', '+234-706-786-9400', 'NTA Road, Oba-Ile Akure, Ondo State', 'Fp white icon.png'),
(19, 'MHS783', 'Mariston Bar', 'bar@maristonhotels.com', '07067869401', '*032197AE5731D4664921A6CCAC7CFCE6A0698693', 'Akure', 'Bar', 'Mariston Hotel & Suites', '+234-706-786-9400', 'NTA Road, Oba-Ile Akure, Ondo State', 'pp.jpeg'),
(20, 'MHS470', 'Mariston Restaurants', 'restaurants@maristonhotels.com', '07067869502', '*032197AE5731D4664921A6CCAC7CFCE6A0698693', 'Akure', 'Restaurants', 'Mariston Hotel & Suites', '+234-706-786-9400', 'NTA Road, Oba-Ile Akure, Ondo State', 'lcm-icon.png'),
(21, 'MHS6062', 'Bringforthjoy', 'adelugba.emma@yahoo.com', '07066619331', '*032197AE5731D4664921A6CCAC7CFCE6A0698693', 'Akure', 'Super Admin', 'Mariston Hotels & Suites', '+234-706-786-9400', 'NTA Road, Oba-Ile Akure, Ondo State', '1637908538480_pp.jpeg'),
(22, 'MHS191', 'Christiana Adelusi', 'christyadelusi@gmail.com', '07067903042', '*00A51F3F48415C7D4E8908980D443C29C69B60C9', 'Akure', 'Receptionist', 'Mariston Hotel & Suites', '+234-706-786-9400', 'NTA Road, Oba-Ile Akure, Ondo State', 'Screenshot from 2022-08-08 15-03-58.png'),
(23, 'MHS599', 'Test Recep', 'test@gmail.com', '07067869411', '*032197AE5731D4664921A6CCAC7CFCE6A0698693', 'Akure', 'Receptionist', 'Mariston Hotel & Suites', '+234-706-786-9400', 'NTA Road, Oba-Ile Akure, Ondo State', 'favicon.ico'),
(24, 'MHS447', 'Test Bar', 'testbar@gmail.com', '07067869422', '*032197AE5731D4664921A6CCAC7CFCE6A0698693', 'Akure', 'Bar', 'Mariston Hotel & Suites', '+234-706-786-9400', 'NTA Road, Oba-Ile Akure, Ondo State', 'Screenshot 2021-09-06 at 11.38.49.png'),
(25, 'MHS98', 'TEst Rest', 'testrest@gmail.com', '07067869433', '*032197AE5731D4664921A6CCAC7CFCE6A0698693', 'Akure', 'Restaurants', 'Mariston Hotel & Suites', '+234-706-786-9400', 'NTA Road, Oba-Ile Akure, Ondo State', 'Screenshot 2021-09-06 at 11.38.49.png'),
(26, 'MHS001', 'Aluko Opeyemi Folajimi', 'folajimiopeyemisax13@gmail.com', '08034815117', '*032197AE5731D4664921A6CCAC7CFCE6A0698693', 'Akure', 'MainStore', 'Mariston Hotel & Suites', '+234-706-786-9400', 'NTA Road, Oba-Ile Akure, Ondo State', 'Screenshot from 2022-06-03 11-46-38.png'),
(27, 'MHS6', 'Mariston Super Admin', 'admin@maristonhotels.com', '07067869499', '*032197AE5731D4664921A6CCAC7CFCE6A0698693', 'Akure', 'Super Admin', 'Mariston Hotel & Suites', '+234-706-786-9400', 'NTA Road, Oba-Ile Akure, Ondo State', '1639132307849_live-care-logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `workers`
--

CREATE TABLE `workers` (
  `id` int(225) UNSIGNED NOT NULL,
  `staff_no` varchar(500) DEFAULT NULL,
  `staff_name` varchar(500) DEFAULT NULL,
  `staff_email` varchar(500) DEFAULT NULL,
  `staff_phone` varchar(500) DEFAULT NULL,
  `staff_address` varchar(500) DEFAULT NULL,
  `staff_designation` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workers`
--

INSERT INTO `workers` (`id`, `staff_no`, `staff_name`, `staff_email`, `staff_phone`, `staff_address`, `staff_designation`) VALUES
(1, 'AAS135040', 'Ridwan Ajanlekoko', 'adelugba.emma+TC001@gmail.com', '07067869400', 'Akure', 'Main Store'),
(3, 'AAS222946', 'Folajimi', 'folajimiopeyemisax13@gmail.com', '07067903042', 'Futa South gate, Akure. Ondo state', 'Akure'),
(4, 'AAS111554', 'Ogunmekpon James', 'ogunmekpon.james@gmail.com', '08099886829', 'Futa southgate', 'Bar attendant');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `active_check_in`
--
ALTER TABLE `active_check_in`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `check_in`
--
ALTER TABLE `check_in`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `check_out`
--
ALTER TABLE `check_out`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `dispatch_stocked`
--
ALTER TABLE `dispatch_stocked`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `stock_id` (`stock_id`,`issued_to`,`department`,`issued_quantity`,`status`);

--
-- Indexes for table `dopex`
--
ALTER TABLE `dopex`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drepayment`
--
ALTER TABLE `drepayment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dsales`
--
ALTER TABLE `dsales`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `dsales_order`
--
ALTER TABLE `dsales_order`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `ewallet`
--
ALTER TABLE `ewallet`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE KEY `Username` (`uin`,`description`,`CrDt`,`amount`,`user`) USING BTREE;

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD KEY `id` (`id`);

--
-- Indexes for table `inventory_stock`
--
ALTER TABLE `inventory_stock`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Indexes for table `opex`
--
ALTER TABLE `opex`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `opex_ctg`
--
ALTER TABLE `opex_ctg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `products2`
--
ALTER TABLE `products2`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_ctg`
--
ALTER TABLE `product_ctg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pro_distributor`
--
ALTER TABLE `pro_distributor`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `repayment`
--
ALTER TABLE `repayment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_price`
--
ALTER TABLE `room_price`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `sales_order`
--
ALTER TABLE `sales_order`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `sopex`
--
ALTER TABLE `sopex`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sproducts`
--
ALTER TABLE `sproducts`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `srepayment`
--
ALTER TABLE `srepayment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ssales`
--
ALTER TABLE `ssales`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `ssales_order`
--
ALTER TABLE `ssales_order`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `staff_id`
--
ALTER TABLE `staff_id`
  ADD PRIMARY KEY (`id`),
  ADD KEY `s/n` (`id`),
  ADD KEY `passport` (`passport`);

--
-- Indexes for table `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `s/n` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `active_check_in`
--
ALTER TABLE `active_check_in`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `check_in`
--
ALTER TABLE `check_in`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `check_out`
--
ALTER TABLE `check_out`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `dispatch_stocked`
--
ALTER TABLE `dispatch_stocked`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `dopex`
--
ALTER TABLE `dopex`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `drepayment`
--
ALTER TABLE `drepayment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dsales`
--
ALTER TABLE `dsales`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `dsales_order`
--
ALTER TABLE `dsales_order`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `ewallet`
--
ALTER TABLE `ewallet`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `inventory_stock`
--
ALTER TABLE `inventory_stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `opex`
--
ALTER TABLE `opex`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `opex_ctg`
--
ALTER TABLE `opex_ctg`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products2`
--
ALTER TABLE `products2`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_ctg`
--
ALTER TABLE `product_ctg`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pro_distributor`
--
ALTER TABLE `pro_distributor`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `repayment`
--
ALTER TABLE `repayment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `room_price`
--
ALTER TABLE `room_price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sales_order`
--
ALTER TABLE `sales_order`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sopex`
--
ALTER TABLE `sopex`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sproducts`
--
ALTER TABLE `sproducts`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `srepayment`
--
ALTER TABLE `srepayment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ssales`
--
ALTER TABLE `ssales`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ssales_order`
--
ALTER TABLE `ssales_order`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `staff_id`
--
ALTER TABLE `staff_id`
  MODIFY `id` int(225) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `workers`
--
ALTER TABLE `workers`
  MODIFY `id` int(225) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
