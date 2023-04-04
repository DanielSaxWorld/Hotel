-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 27, 2023 at 01:06 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `imperia4_softdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `active_check_in`
--

CREATE TABLE IF NOT EXISTS `active_check_in` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date` date DEFAULT NULL,
  `staff_name` varchar(500) DEFAULT NULL,
  `lodge_id` varchar(500) DEFAULT NULL,
  `uin` varchar(500) DEFAULT NULL,
  `fullname` varchar(500) DEFAULT NULL,
  `phone` varchar(500) DEFAULT NULL,
  `arrival_date` date DEFAULT NULL,
  `checkout` date DEFAULT NULL,
  `room` varchar(500) DEFAULT NULL,
  `room_name` varchar(500) DEFAULT NULL,
  `room_price` float(12,2) DEFAULT NULL,
  `night` varchar(500) DEFAULT NULL,
  `payment_method` varchar(500) DEFAULT NULL,
  `purpose` varchar(500) DEFAULT NULL,
  `arrived_from` varchar(500) DEFAULT NULL,
  `nofguest` varchar(500) DEFAULT NULL,
  `discount` varchar(500) DEFAULT NULL,
  `caution_fee` float(12,2) DEFAULT NULL,
  `total_amount` float(12,2) DEFAULT NULL,
  `status` varchar(500) DEFAULT NULL,
  `credit` float(12,2) DEFAULT NULL,
  `debit` float(12,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `active_check_in`
--

INSERT INTO `active_check_in` (`id`, `time`, `date`, `staff_name`, `lodge_id`, `uin`, `fullname`, `phone`, `arrival_date`, `checkout`, `room`, `room_name`, `room_price`, `night`, `payment_method`, `purpose`, `arrived_from`, `nofguest`, `discount`, `caution_fee`, `total_amount`, `status`, `credit`, `debit`) VALUES
(4, '2023-01-25 08:57:20', '2023-01-25', 'Rachel Godspower', 'L250123093624', 'IBHG271222359', 'GODSPOWER OTALI', '08074400351', '2023-01-25', '2023-01-27', '5', 'Standard Double (807)', 18500.00, '2', 'POS (Zenith)', 'Leisure', 'Abuja', '1', '0', NULL, 37000.00, 'Checked-In', 0.00, 0.00),
(5, '2023-02-02 14:33:16', '2023-02-02', 'Rachel Godspower', 'L020223135337', 'IBHGR260123309', 'Rachael Modupe', '08062270550', '2023-02-02', '2023-02-03', '12', 'Deluxe Double (816)', 21500.00, '1', 'POS (UBA)', 'Leisure', 'Abuja', '1', '0', NULL, 21500.00, 'Checked-In', NULL, 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `booking_id` varchar(500) DEFAULT NULL,
  `uin` varchar(500) DEFAULT NULL,
  `fullname` varchar(500) DEFAULT NULL,
  `phone` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `checkin_date` date DEFAULT NULL,
  `checkout_date` date DEFAULT NULL,
  `noofguest` varchar(500) DEFAULT NULL,
  `room_name` varchar(500) DEFAULT NULL,
  `room_price` float(12,2) DEFAULT NULL,
  `room_id` varchar(500) DEFAULT NULL,
  `total_amount` float(12,2) DEFAULT NULL,
  `nights` int(11) DEFAULT NULL,
  `status` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `charges`
--

CREATE TABLE IF NOT EXISTS `charges` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date` date DEFAULT NULL,
  `transid` varchar(500) DEFAULT NULL,
  `staff_name` varchar(500) DEFAULT NULL,
  `lodge_id` varchar(500) DEFAULT NULL,
  `uin` varchar(500) DEFAULT NULL,
  `fullname` varchar(500) DEFAULT NULL,
  `phone` varchar(500) DEFAULT NULL,
  `room_name` varchar(500) DEFAULT NULL,
  `department` varchar(500) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `amount` float(12,2) DEFAULT NULL,
  `status` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `charges`
--

INSERT INTO `charges` (`id`, `time`, `date`, `transid`, `staff_name`, `lodge_id`, `uin`, `fullname`, `phone`, `room_name`, `department`, `description`, `amount`, `status`) VALUES
(1, '2023-01-24 10:38:51', '2023-01-24', 'IBHGC240123091824', 'Rachel Godspower', 'L230123082442', 'IBHG271222359', 'GODSPOWER OTALI', '08074400351', 'Standard Double (810)', 'Kitchen', 'Rice and Stew', 3500.00, 'Paid'),
(2, '2023-01-24 10:33:28', '2023-01-24', 'IBHGC240123093726', 'Rachel Godspower', 'L230123082442', 'IBHG271222359', 'GODSPOWER OTALI', '08074400351', 'Standard Double (810)', 'Laundry', '3 clothes washed', 1500.00, 'Paid'),
(3, '2023-01-24 11:31:02', '2023-01-24', 'IBHGC240123114833', 'Rachel Godspower', 'L230123082442', 'IBHG271222359', 'GODSPOWER OTALI', '08074400351', 'Standard Double (810)', 'Cortage', 'Cottage on drinks for party', 5000.00, 'Paid'),
(4, '2023-01-24 11:32:24', '2023-01-24', 'IBHGC240123123117', 'Rachel Godspower', 'L230123082442', 'IBHG271222359', 'GODSPOWER OTALI', '08074400351', 'Standard Double (810)', 'Kitchen', 'Amala  Ewedu with 5alive', 2500.00, 'Paid'),
(5, '2023-01-24 11:34:03', '2023-01-24', 'IBHGC240123123258', 'Rachel Godspower', 'L230123082442', 'IBHG271222359', 'GODSPOWER OTALI', '08074400351', 'Standard Double (810)', 'Laundry', '20 Litres of Petrol', 1000.00, 'Paid'),
(6, '2023-01-25 08:20:27', '2023-01-24', 'IBHGC240123123536', 'Rachel Godspower', 'L230123082442', 'IBHG271222359', 'GODSPOWER OTALI', '08074400351', 'Standard Double (810)', 'Kitchen', 'Rice and Stew', 1500.00, 'Paid'),
(7, '2023-01-25 08:28:19', '2023-01-25', 'IBHGC250123092642', 'Rachel Godspower', 'L250123092129', 'IBHG271222359', 'GODSPOWER OTALI', '08074400351', 'Standard Double (803)', 'Kitchen', 'Ejime Wedding', 1000.00, 'Paid'),
(8, '2023-01-25 08:35:45', '2023-01-25', 'IBHGC250123092921', 'Rachel Godspower', 'L250123092846', 'IBHG271222744', 'RICHARD OBADA', '08042789099', 'Deluxe Double (817)', 'Kitchen', 'Rice and Stew', 5000.00, 'Paid'),
(9, '2023-01-25 08:39:21', '2023-01-25', 'IBHGC250123093748', 'Rachel Godspower', 'L250123093624', 'IBHG271222359', 'GODSPOWER OTALI', '08074400351', 'Standard Double (808)', 'Kitchen', 'Rice and Stew', 5000.00, 'Paid'),
(10, '2023-01-25 08:39:38', '2023-01-25', 'IBHGC250123093827', 'Rachel Godspower', 'L250123093624', 'IBHG271222359', 'GODSPOWER OTALI', '08074400351', 'Standard Double (808)', 'Laundry', 'Clothe Ironing', 1000.00, 'Paid'),
(11, '2023-02-02 14:33:15', '2023-02-02', 'IBHGC020223153239', 'GODSPOWER OTALI', 'L020223135337', 'IBHGR260123309', 'Rachael Modupe', '08062270550', 'Deluxe Double (816)', 'Kitchen', 'Rice and Stew', 5000.00, 'Paid'),
(12, '2023-02-03 08:01:41', '2023-02-03', 'IBHGC030223090043', 'Rachel Godspower', 'L030223085852', 'IBHGR030223528', 'GODSPOWER OTALI', '08074400351', 'Deluxe Double (815)', 'Corkage', '20 Litres of Petrol', 5000.00, 'Paid');

-- --------------------------------------------------------

--
-- Table structure for table `check_in`
--

CREATE TABLE IF NOT EXISTS `check_in` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date` date DEFAULT NULL,
  `staff_name` varchar(500) DEFAULT NULL,
  `lodge_id` varchar(500) DEFAULT NULL,
  `uin` varchar(500) DEFAULT NULL,
  `fullname` varchar(500) DEFAULT NULL,
  `phone` varchar(500) DEFAULT NULL,
  `arrival_date` date DEFAULT NULL,
  `checkout` date DEFAULT NULL,
  `room` varchar(500) DEFAULT NULL,
  `room_name` varchar(500) DEFAULT NULL,
  `room_price` float(12,2) DEFAULT NULL,
  `night` varchar(500) DEFAULT NULL,
  `payment_method` varchar(500) DEFAULT NULL,
  `purpose` varchar(500) DEFAULT NULL,
  `arrived_from` varchar(500) DEFAULT NULL,
  `nofguest` varchar(500) DEFAULT NULL,
  `discount` varchar(500) DEFAULT NULL,
  `caution_fee` float(12,2) DEFAULT NULL,
  `total_amount` float(12,2) DEFAULT NULL,
  `status` varchar(500) DEFAULT NULL,
  `credit` float(12,2) DEFAULT NULL,
  `debit` float(12,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `check_in`
--

INSERT INTO `check_in` (`id`, `time`, `date`, `staff_name`, `lodge_id`, `uin`, `fullname`, `phone`, `arrival_date`, `checkout`, `room`, `room_name`, `room_price`, `night`, `payment_method`, `purpose`, `arrived_from`, `nofguest`, `discount`, `caution_fee`, `total_amount`, `status`, `credit`, `debit`) VALUES
(1, '2023-01-25 08:21:13', '2023-01-23', 'Rachel Godspower', 'L230123082442', 'IBHG271222359', 'GODSPOWER OTALI', '08074400351', '2023-01-23', '2023-01-24', '8', 'Standard Double (810)', 20500.00, '1', 'POS (Keystone)', 'Leisure', 'Abuja', '1', '0', NULL, 20500.00, 'Checked-Out', 0.00, 0.00),
(2, '2023-01-25 08:28:35', '2023-01-25', 'Rachel Godspower', 'L250123092129', 'IBHG271222359', 'GODSPOWER OTALI', '08074400351', '2023-01-25', '2023-01-27', '2', 'Standard Double (803)', 18500.00, '2', 'POS (Keystone)', 'Leisure', 'Abuja', '2', '0', NULL, 37000.00, 'Checked-Out', 0.00, 0.00),
(3, '2023-01-25 08:36:14', '2023-01-25', 'Rachel Godspower', 'L250123092846', 'IBHG271222744', 'RICHARD OBADA', '08042789099', '2023-01-25', '2023-01-26', '13', 'Deluxe Double (817)', 21500.00, '1', 'POS (Zenith)', 'Tourism', 'Abuja', '1', '0', NULL, 21500.00, 'Checked-Out', 0.00, 0.00),
(4, '2023-01-25 08:57:20', '2023-01-25', 'Rachel Godspower', 'L250123093624', 'IBHG271222359', 'GODSPOWER OTALI', '08074400351', '2023-01-25', '2023-01-27', '5', 'Standard Double (807)', 18500.00, '2', 'POS (Zenith)', 'Leisure', 'Abuja', '1', '0', NULL, 37000.00, 'Checked-In', 0.00, 0.00),
(5, '2023-02-02 14:33:16', '2023-02-02', 'Rachel Godspower', 'L020223135337', 'IBHGR260123309', 'Rachael Modupe', '08062270550', '2023-02-02', '2023-02-03', '12', 'Deluxe Double (816)', 21500.00, '1', 'POS (UBA)', 'Leisure', 'Abuja', '1', '0', NULL, 21500.00, 'Checked-In', NULL, 0.00),
(6, '2023-02-03 08:02:36', '2023-02-03', 'Rachel Godspower', 'L030223085852', 'IBHGR030223528', 'GODSPOWER OTALI', '08074400351', '2023-02-03', '2023-02-05', '11', 'Deluxe Double (815)', 21500.00, '2', 'Transfer (Keystone)', 'Leisure', 'Abuja', '1', '0', NULL, 43000.00, 'Checked-Out', NULL, 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `check_out`
--

CREATE TABLE IF NOT EXISTS `check_out` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date` date DEFAULT NULL,
  `staff_name` varchar(500) DEFAULT NULL,
  `lodge_id` varchar(500) DEFAULT NULL,
  `arrival_date` datetime DEFAULT NULL,
  `room` varchar(500) DEFAULT NULL,
  `room_name` varchar(500) DEFAULT NULL,
  `amount` float(12,2) DEFAULT NULL,
  `uin` varchar(500) DEFAULT NULL,
  `fullname` varchar(500) DEFAULT NULL,
  `phone` varchar(500) DEFAULT NULL,
  `checkout_date` datetime DEFAULT NULL,
  `return_caution` float(12,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `check_out`
--

INSERT INTO `check_out` (`id`, `time`, `date`, `staff_name`, `lodge_id`, `arrival_date`, `room`, `room_name`, `amount`, `uin`, `fullname`, `phone`, `checkout_date`, `return_caution`) VALUES
(1, '2023-01-25 08:21:13', '2023-01-25', NULL, 'L230123082442', '2023-01-23 00:00:00', '8', 'Standard Double (810)', 20500.00, 'IBHG271222359', 'GODSPOWER OTALI', '08074400351', '2023-01-25 09:21:00', NULL),
(2, '2023-01-25 08:28:35', '2023-01-25', NULL, 'L250123092129', '2023-01-25 00:00:00', '2', 'Standard Double (803)', 37000.00, 'IBHG271222359', 'GODSPOWER OTALI', '08074400351', '2023-01-25 09:28:00', NULL),
(3, '2023-01-25 08:36:14', '2023-01-25', NULL, 'L250123092846', '2023-01-25 00:00:00', '13', 'Deluxe Double (817)', 21500.00, 'IBHG271222744', 'RICHARD OBADA', '08042789099', '2023-01-25 09:36:00', NULL),
(4, '2023-02-03 08:02:36', '2023-02-03', NULL, 'L030223085852', '2023-02-03 00:00:00', '11', 'Deluxe Double (815)', 43000.00, 'IBHGR030223528', 'GODSPOWER OTALI', '08074400351', '2023-02-03 09:02:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dopex`
--

CREATE TABLE IF NOT EXISTS `dopex` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `opex_id` varchar(500) DEFAULT NULL,
  `opex_date` date DEFAULT NULL,
  `purpose` varchar(500) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `amount` float(12,2) DEFAULT NULL,
  `c_o` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `drepayment`
--

CREATE TABLE IF NOT EXISTS `drepayment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_number` varchar(500) DEFAULT NULL,
  `name` varchar(500) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `amount` float(12,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `dsales`
--

CREATE TABLE IF NOT EXISTS `dsales` (
  `transaction_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `gen_name` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `dsales`
--

INSERT INTO `dsales` (`transaction_id`, `invoice_number`, `cashier`, `date`, `type`, `price`, `amount`, `profit`, `due_date`, `name`, `balance`, `imei`, `time`, `qty`, `product_code`, `service`, `gen_name`) VALUES
(1, 'MHR-12394727127127', 'Rachel Godspower', '2022-12-27', 'cash', 500.00, '2200', '950', '2500', 'KIGSLEY DANIEL', '', 'Cash', '2022-12-27 12:40:22', '5', 'Egg Roll', 'Pastries', 'STOCK271222784');

-- --------------------------------------------------------

--
-- Table structure for table `dsales_order`
--

CREATE TABLE IF NOT EXISTS `dsales_order` (
  `transaction_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cashier` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `dsales_order`
--

INSERT INTO `dsales_order` (`transaction_id`, `invoice`, `product`, `qty`, `amount`, `profit`, `product_code`, `gen_name`, `name`, `price`, `discount`, `date`, `time`, `cashier`) VALUES
(1, 'MHR-12394727127127', '1', '2', '1000', '500', 'Egg Roll', 'STOCK271222784', 'Pastries', '500', '0', '2022-12-27', '2022-12-27 11:39:58', 'Rachel Godspower'),
(2, 'MHR-12394727127127', '2', '3', '1200', '450', 'Meat Pie', 'STOCK271222824', 'Pastries', '400', '0', '2022-12-27', '2022-12-27 11:40:05', 'Rachel Godspower');

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE IF NOT EXISTS `guest` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `uin` varchar(500) DEFAULT NULL,
  `fullname` varchar(500) DEFAULT NULL,
  `phone` varchar(500) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `occupation` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `gender` varchar(500) DEFAULT NULL,
  `civic_status` varchar(500) DEFAULT NULL,
  `vehicle_type` varchar(500) DEFAULT NULL,
  `plate_no` varchar(500) DEFAULT NULL,
  `vehicle_colour` varchar(500) DEFAULT NULL,
  `identification` varchar(500) DEFAULT NULL,
  `nok_name` varchar(500) DEFAULT NULL,
  `nok_phone` varchar(500) DEFAULT NULL,
  `valid_id` varchar(500) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`id`, `uin`, `fullname`, `phone`, `address`, `occupation`, `email`, `gender`, `civic_status`, `vehicle_type`, `plate_no`, `vehicle_colour`, `identification`, `nok_name`, `nok_phone`, `valid_id`) VALUES
(1, 'IBHG271222359', 'GODSPOWER OTALI', '08074400351', 'Plot 54, Sultan Dasuki Way, Kubwa, Abuja', 'Software Engineer', 'otaligodspower@gmail.com', 'Male', 'Married', 'Benz E320', 'AAA 232 DS', 'Green', 'Voter''s Card', 'RACHEL GODSPOWER-OTALI', '08062270550', 'SEASONS GREETINGS.jpg'),
(2, 'IBHG271222744', 'RICHARD OBADA', '08042789099', 'Ado Owo Road, PMB 693, Akure, Ondo State', 'civil servant', 'richardobada@gmail.com', 'Male', 'Married', '', '', '', 'Voter''s Card', 'Mark Mark', '', 'MERRY XMAS.jpg'),
(3, 'IBHGR260123309', 'Rachael Modupe', '08062270550', 'Alagbaka, Akure', 'Music Tutor', 'lawrenceobeten1@gmail.com', 'Female', 'Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'IBHGR030223528', 'GODSPOWER OTALI', '08074400351', 'Plot 54, Sultan Dasuki Way, Kubwa, Abuja', 'Software Engineer', 'otaligodspower@gmail.com', 'Male', 'Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `opex`
--

CREATE TABLE IF NOT EXISTS `opex` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `opex_id` varchar(500) DEFAULT NULL,
  `opex_date` date DEFAULT NULL,
  `purpose` varchar(500) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `amount` float(12,2) DEFAULT NULL,
  `c_o` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `opex`
--

INSERT INTO `opex` (`id`, `opex_id`, `opex_date`, `purpose`, `description`, `amount`, `c_o`) VALUES
(1, 'OPEX271222110050', '2022-12-27', 'Maintenance', '20 Litres of Petrol', 5000.00, 'Yemisi'),
(2, 'OPEX271222131950', '2022-12-27', 'Transportation', 'Purchase of Food Stuff', 10000.00, 'Yemisi');

-- --------------------------------------------------------

--
-- Table structure for table `opex_ctg`
--

CREATE TABLE IF NOT EXISTS `opex_ctg` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `category` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `opex_ctg`
--

INSERT INTO `opex_ctg` (`id`, `category`) VALUES
(1, 'Maintenance'),
(2, 'Fueling for Generator'),
(3, 'Transportation');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `total_profit` float(12,2) DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `products2`
--

CREATE TABLE IF NOT EXISTS `products2` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_code` varchar(200) NOT NULL,
  `gen_name` varchar(200) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `o_price` float(12,2) DEFAULT NULL,
  `price` float(12,2) DEFAULT NULL,
  `wsprice` float(12,2) DEFAULT NULL,
  `qty` int(10) NOT NULL,
  `date_arrival` varchar(500) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product_ctg`
--

CREATE TABLE IF NOT EXISTS `product_ctg` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `category` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `product_ctg`
--

INSERT INTO `product_ctg` (`id`, `category`) VALUES
(2, 'Pastries'),
(3, 'Swallow'),
(4, 'Alcohol Drink'),
(5, 'Soft Drink');

-- --------------------------------------------------------

--
-- Table structure for table `pro_distributor`
--

CREATE TABLE IF NOT EXISTS `pro_distributor` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `total_profit` float(12,2) DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pro_distributor`
--

INSERT INTO `pro_distributor` (`product_id`, `product_code`, `gen_name`, `product_name`, `o_price`, `price`, `profit`, `onhand_qty`, `qty`, `qty_sold`, `date_arrival`, `total`, `total_profit`) VALUES
(1, 'Egg Roll', 'STOCK271222784', 'Pastries', '250', '500', '250.00', 0, 18, 20, '2022-12-27', 10000.00, 5000.00),
(2, 'Meat Pie', 'STOCK271222824', 'Pastries', '250', '400', '150.00', 0, 17, 20, '2022-12-27', 8000.00, 3000.00);

-- --------------------------------------------------------

--
-- Table structure for table `repayment`
--

CREATE TABLE IF NOT EXISTS `repayment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_number` varchar(500) DEFAULT NULL,
  `name` varchar(500) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `amount` float(12,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `staff_name` varchar(500) DEFAULT NULL,
  `uin` varchar(500) DEFAULT NULL,
  `fullname` varchar(500) DEFAULT NULL,
  `phone` varchar(500) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `occupation` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `gender` varchar(500) DEFAULT NULL,
  `civic_status` varchar(500) DEFAULT NULL,
  `room` varchar(500) DEFAULT NULL,
  `nofroom` varchar(500) DEFAULT NULL,
  `deposit` float(12,2) DEFAULT NULL,
  `arrival_date` date DEFAULT NULL,
  `status` varchar(500) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `time`, `staff_name`, `uin`, `fullname`, `phone`, `address`, `occupation`, `email`, `gender`, `civic_status`, `room`, `nofroom`, `deposit`, `arrival_date`, `status`) VALUES
(1, '2023-02-02 12:54:14', 'Rachel Godspower', 'IBHGR260123309', 'Rachael Modupe', '08062270550', 'Alagbaka, Akure', 'Music Tutor', 'lawrenceobeten1@gmail.com', 'Female', 'Married', 'Deluxe Double', '1', 15000.00, '2023-01-27', 'checkin'),
(2, '2023-02-03 08:00:14', 'Rachel Godspower', 'IBHGR030223528', 'GODSPOWER OTALI', '08074400351', 'Plot 54, Sultan Dasuki Way, Kubwa, Abuja', 'Software Engineer', 'otaligodspower@gmail.com', 'Male', 'Married', 'Deluxe Double', '2', 20500.00, '2023-02-04', 'checkin');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `id` int(225) unsigned NOT NULL AUTO_INCREMENT,
  `room_id` int(11) NOT NULL,
  `room_name` varchar(500) DEFAULT NULL,
  `price` float(12,2) DEFAULT NULL,
  `room_status` varchar(500) DEFAULT NULL,
  `lodge_id` varchar(500) DEFAULT NULL,
  `uin` varchar(500) DEFAULT NULL,
  `fullname` varchar(500) DEFAULT NULL,
  `phone` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `room_id`, `room_name`, `price`, `room_status`, `lodge_id`, `uin`, `fullname`, `phone`) VALUES
(1, 1, 'Standard Double (802)', 20500.00, 'Available', '', '', '', ''),
(2, 2, 'Standard Double (803)', 18500.00, 'Available', '', '', '', ''),
(3, 3, 'Standard Double (804)', 18500.00, 'Available', '', '', '', ''),
(4, 4, 'Standard Double (805)', 18500.00, 'Available', '', '', '', ''),
(5, 5, 'Standard Double (807)', 18500.00, 'Occupied', 'L250123093624', 'IBHG271222359', 'GODSPOWER OTALI', '08074400351'),
(6, 6, 'Standard Double (808)', 18500.00, 'Available', '', '', '', ''),
(7, 7, 'Standard Double (809)', 18500.00, 'Available', NULL, NULL, NULL, NULL),
(8, 8, 'Standard Double (810)', 18500.00, 'Available', '', '', '', ''),
(9, 9, 'Standard Double (811)', 18500.00, 'Available', NULL, NULL, NULL, NULL),
(10, 10, 'Deluxe Double (814)', 21500.00, 'Available', '', '', '', ''),
(11, 11, 'Deluxe Double (815)', 21500.00, 'Available', '', '', '', ''),
(12, 12, 'Deluxe Double (816)', 21500.00, 'Occupied', 'L020223135337', 'IBHGR260123309', 'Rachael Modupe', '08062270550'),
(13, 13, 'Deluxe Double (817)', 21500.00, 'Available', '', '', '', ''),
(14, 14, 'Deluxe Double (818)', 21500.00, 'Available', NULL, NULL, NULL, NULL),
(15, 15, 'Deluxe Double (820)', 21500.00, 'Available', NULL, NULL, NULL, NULL),
(16, 16, 'Deluxe Double (821)', 21500.00, 'Available', NULL, NULL, NULL, NULL),
(17, 17, 'Deluxe Double (822)', 21500.00, 'Available', NULL, NULL, NULL, NULL),
(18, 18, 'Deluxe Double (823)', 21500.00, 'Available', NULL, NULL, NULL, NULL),
(19, 19, 'Executive Double (806)', 22500.00, 'Available', NULL, NULL, NULL, NULL),
(20, 20, 'Executive Double (819)', 22500.00, 'Available', NULL, NULL, NULL, NULL),
(21, 21, 'Executive Double (813)', 22500.00, 'Available', NULL, NULL, NULL, NULL),
(22, 22, 'Deluxe Suite (812)', 35000.00, 'Available', '', '', '', ''),
(23, 23, 'Duplex Suite (812/813)', 50000.00, 'Available', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `room_price`
--

CREATE TABLE IF NOT EXISTS `room_price` (
  `id` int(225) unsigned NOT NULL AUTO_INCREMENT,
  `room_id` int(11) NOT NULL,
  `room_name` varchar(500) DEFAULT NULL,
  `price` float(12,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `room_price`
--

INSERT INTO `room_price` (`id`, `room_id`, `room_name`, `price`) VALUES
(1, 1, 'Standard Double (802)', 20500.00),
(2, 2, 'Standard Double (803)', 18500.00),
(3, 3, 'Standard Double (804)', 18500.00),
(4, 4, 'Standard Double (805)', 18500.00),
(5, 5, 'Standard Double (807)', 18500.00),
(6, 6, 'Standard Double (808)', 18500.00),
(7, 7, 'Standard Double (809)', 18500.00),
(8, 8, 'Standard Double (810)', 18500.00),
(9, 9, 'Standard Double (811)', 18500.00),
(10, 10, 'Deluxe Double (814)', 21500.00),
(11, 11, 'Deluxe Double (815)', 21500.00),
(12, 12, 'Deluxe Double (816)', 21500.00),
(13, 13, 'Deluxe Double (817)', 21500.00),
(14, 14, 'Deluxe Double (818)', 21500.00),
(15, 15, 'Deluxe Double (820)', 21500.00),
(16, 16, 'Deluxe Double (821)', 21500.00),
(17, 17, 'Deluxe Double (822)', 21500.00),
(18, 18, 'Deluxe Double (823)', 21500.00),
(19, 19, 'Executive Double (806)', 22500.00),
(20, 20, 'Executive Double (819)', 22500.00),
(21, 21, 'Executive Double (813)', 22500.00),
(22, 22, 'Deluxe Suite (812)', 35000.00),
(23, 23, 'Duplex Suite (812/813)', 50000.00);

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE IF NOT EXISTS `salary` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `salary_id` varchar(500) DEFAULT NULL,
  `salary_date` date DEFAULT NULL,
  `staff_name` varchar(500) DEFAULT NULL,
  `payment_type` varchar(500) DEFAULT NULL,
  `month` varchar(500) DEFAULT NULL,
  `year` varchar(500) DEFAULT NULL,
  `salary_amount` float(12,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
  `transaction_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `qty` varchar(500) DEFAULT NULL,
  `product_code` varchar(500) DEFAULT NULL,
  `service` varchar(500) DEFAULT NULL,
  `gen_name` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sales_order`
--

CREATE TABLE IF NOT EXISTS `sales_order` (
  `transaction_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cashier` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sopex`
--

CREATE TABLE IF NOT EXISTS `sopex` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `opex_id` varchar(500) DEFAULT NULL,
  `opex_date` date DEFAULT NULL,
  `purpose` varchar(500) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `amount` float(12,2) DEFAULT NULL,
  `c_o` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sproducts`
--

CREATE TABLE IF NOT EXISTS `sproducts` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `total_profit` float(12,2) DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `sproducts`
--

INSERT INTO `sproducts` (`product_id`, `product_code`, `gen_name`, `product_name`, `o_price`, `price`, `profit`, `onhand_qty`, `qty`, `qty_sold`, `date_arrival`, `total`, `total_profit`) VALUES
(1, 'Throphy', 'STOCK271222984', 'Alcohol Drink', '350', '750', '400.00', 0, 41, 50, '2022-12-27', 37500.00, 20000.00),
(2, 'Hennessy VS', 'STOCK271222972', 'Alcohol Drink', '7500', '9500', '2000.00', 0, 8, 10, '2022-12-27', 95000.00, 20000.00);

-- --------------------------------------------------------

--
-- Table structure for table `srepayment`
--

CREATE TABLE IF NOT EXISTS `srepayment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_number` varchar(500) DEFAULT NULL,
  `name` varchar(500) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `amount` float(12,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ssales`
--

CREATE TABLE IF NOT EXISTS `ssales` (
  `transaction_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `qty` varchar(500) DEFAULT NULL,
  `product_code` varchar(500) DEFAULT NULL,
  `service` varchar(500) DEFAULT NULL,
  `gen_name` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ssales`
--

INSERT INTO `ssales` (`transaction_id`, `invoice_number`, `cashier`, `date`, `type`, `price`, `amount`, `profit`, `due_date`, `name`, `balance`, `imei`, `time`, `qty`, `product_code`, `service`, `gen_name`) VALUES
(1, 'IBH-12481927122431', 'Rachel Godspower', '2022-12-27', 'cash', 750.00, '25750', '7600', '26000', 'KIGSLEY DANIEL', '', 'POS', '2022-12-27 11:48:55', '11', 'Throphy', 'Alcohol Drink', 'STOCK271222984');

-- --------------------------------------------------------

--
-- Table structure for table `ssales_order`
--

CREATE TABLE IF NOT EXISTS `ssales_order` (
  `transaction_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cashier` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ssales_order`
--

INSERT INTO `ssales_order` (`transaction_id`, `invoice`, `product`, `qty`, `amount`, `profit`, `product_code`, `gen_name`, `name`, `price`, `discount`, `date`, `time`, `cashier`) VALUES
(1, 'IBH-12481927122431', '1', '9', '6750', '3600', 'Throphy', 'STOCK271222984', 'Alcohol Drink', '750', '0', '2022-12-27', '2022-12-27 11:48:30', 'Rachel Godspower'),
(2, 'IBH-12481927122431', '2', '2', '19000', '4000', 'Hennessy VS', 'STOCK271222972', 'Alcohol Drink', '9500', '0', '2022-12-27', '2022-12-27 11:48:38', 'Rachel Godspower');

-- --------------------------------------------------------

--
-- Table structure for table `staff_id`
--

CREATE TABLE IF NOT EXISTS `staff_id` (
  `id` int(225) unsigned NOT NULL AUTO_INCREMENT,
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
  `passport` varchar(500) DEFAULT NULL,
  `status` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `s/n` (`id`),
  KEY `passport` (`passport`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `staff_id`
--

INSERT INTO `staff_id` (`id`, `staff_id`, `fullname`, `email`, `phone`, `password`, `station`, `designation`, `business_name`, `business_phone`, `business_address`, `passport`, `status`) VALUES
(1, 'IBH2808', 'GODSPOWER OTALI', 'otaligodspower@gmail.com', '08074400351', '*BB28648D6242B0B600A4BFA4CF490048FC642405', 'Akure', 'Super Admin', 'Imperial Boni Hotels & Resorts', '+234-905-965-9790', 'Block 39, Plot 557, Ikere Street, Ijapo Estate, Akure, Ondo State - Nigeria', 'meinec.jpg', 'Active'),
(2, 'IBH710', 'Rachel Godspower', 'l4ladydee@gmail.com', '08062270550', '*BB28648D6242B0B600A4BFA4CF490048FC642405', 'Akure', 'Receptionist', 'Imperial Boni Hotels & Resorts', '+234-905-965-9790', 'Block 39, Plot 557, Ikere Street, Ijapo Estate, Akure, Ondo State - Nigeria', 'MERRY XMAS.jpg', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `workers`
--

CREATE TABLE IF NOT EXISTS `workers` (
  `id` int(225) unsigned NOT NULL AUTO_INCREMENT,
  `staff_no` varchar(500) DEFAULT NULL,
  `staff_name` varchar(500) DEFAULT NULL,
  `staff_email` varchar(500) DEFAULT NULL,
  `staff_phone` varchar(500) DEFAULT NULL,
  `staff_address` varchar(500) DEFAULT NULL,
  `staff_designation` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `s/n` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
