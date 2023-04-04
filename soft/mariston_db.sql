-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 14, 2021 at 01:39 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mariston_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `active_check_in`
--

CREATE TABLE IF NOT EXISTS `active_check_in` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date` date DEFAULT NULL,
  `lodge_id` varchar(500) DEFAULT NULL,
  `uin` varchar(500) DEFAULT NULL,
  `fullname` varchar(500) DEFAULT NULL,
  `phone` varchar(500) DEFAULT NULL,
  `arrival_date` datetime DEFAULT NULL,
  `checkout` datetime DEFAULT NULL,
  `room` varchar(500) DEFAULT NULL,
  `room_price` float(12,2) DEFAULT NULL,
  `night` varchar(500) DEFAULT NULL,
  `payment_method` varchar(500) DEFAULT NULL,
  `discount` varchar(500) DEFAULT NULL,
  `caution_fee` float(12,2) DEFAULT NULL,
  `total_amount` float(12,2) DEFAULT NULL,
  `status` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Table structure for table `check_in`
--

CREATE TABLE IF NOT EXISTS `check_in` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date` date DEFAULT NULL,
  `lodge_id` varchar(500) DEFAULT NULL,
  `uin` varchar(500) DEFAULT NULL,
  `fullname` varchar(500) DEFAULT NULL,
  `phone` varchar(500) DEFAULT NULL,
  `arrival_date` datetime DEFAULT NULL,
  `checkout` datetime DEFAULT NULL,
  `room` varchar(500) DEFAULT NULL,
  `room_price` float(12,2) DEFAULT NULL,
  `night` varchar(500) DEFAULT NULL,
  `payment_method` varchar(500) DEFAULT NULL,
  `discount` varchar(500) DEFAULT NULL,
  `caution_fee` float(12,2) DEFAULT NULL,
  `total_amount` float(12,2) DEFAULT NULL,
  `status` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `check_in`
--

INSERT INTO `check_in` (`id`, `time`, `date`, `lodge_id`, `uin`, `fullname`, `phone`, `arrival_date`, `checkout`, `room`, `room_price`, `night`, `payment_method`, `discount`, `caution_fee`, `total_amount`, `status`) VALUES
(5, '2021-12-14 13:25:15', '2021-12-14', 'L141221131410', 'MHSG141221640', 'GODSPOWER OTALI', '08074400351', '2021-12-14 14:14:00', '2021-12-15 14:14:00', 'Super Classic', 16875.00, '1', 'Cash', '0', 0.00, 16875.00, 'Checked-Out'),
(6, '2021-12-14 13:27:50', '2021-12-14', 'L141221132654', 'MHSG141221640', 'GODSPOWER OTALI', '08074400351', '2021-12-14 14:26:00', '2021-12-15 14:26:00', 'Super Deluxe', 26850.00, '1', 'POS', '0', NULL, 26850.00, 'Checked-Out');

-- --------------------------------------------------------

--
-- Table structure for table `check_out`
--

CREATE TABLE IF NOT EXISTS `check_out` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date` date DEFAULT NULL,
  `lodge_id` varchar(500) DEFAULT NULL,
  `arrival_date` datetime DEFAULT NULL,
  `room` varchar(500) DEFAULT NULL,
  `amount` float(12,2) DEFAULT NULL,
  `uin` varchar(500) DEFAULT NULL,
  `fullname` varchar(500) DEFAULT NULL,
  `phone` varchar(500) DEFAULT NULL,
  `checkout_date` datetime DEFAULT NULL,
  `return_caution` float(12,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `check_out`
--

INSERT INTO `check_out` (`id`, `time`, `date`, `lodge_id`, `arrival_date`, `room`, `amount`, `uin`, `fullname`, `phone`, `checkout_date`, `return_caution`) VALUES
(5, '2021-12-14 13:25:15', '2021-12-14', 'L141221131410', '2021-12-14 14:14:00', 'Super Classic', 16875.00, 'MHSG141221640', 'GODSPOWER OTALI', '08074400351', '2021-12-14 14:25:00', NULL),
(6, '2021-12-14 13:27:49', '2021-12-14', 'L141221132654', '2021-12-14 14:26:00', 'Super Deluxe', 26850.00, 'MHSG141221640', 'GODSPOWER OTALI', '08074400351', '2021-12-14 14:27:00', NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

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
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE IF NOT EXISTS `guest` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
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
  `valid_id` varchar(500) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`id`, `uin`, `fullname`, `phone`, `email`, `gender`, `civic_status`, `vehicle_type`, `plate_no`, `vehicle_colour`, `identification`, `nok_name`, `nok_phone`, `valid_id`) VALUES
(4, 'MHSG141221640', 'GODSPOWER OTALI', '08074400351', 'otaligodspower@gmail.com', 'Female', 'Married', 'Benz E320', 'AKR 123 EQ', 'Green', 'International Passport', 'RACHEL GODSPOWER-OTALI', '08062270550', 'WADR Capture.JPG');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `opex_ctg`
--

CREATE TABLE IF NOT EXISTS `opex_ctg` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `category` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

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
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  PRIMARY KEY (`id`),
  KEY `s/n` (`id`),
  KEY `passport` (`passport`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `staff_id`
--

INSERT INTO `staff_id` (`id`, `staff_id`, `fullname`, `email`, `phone`, `password`, `station`, `designation`, `business_name`, `business_phone`, `business_address`, `passport`) VALUES
(5, 'MHS3753', 'GODSPOWER OTALI', 'otaligodspower@gmail.com', '08074400351', '*BB28648D6242B0B600A4BFA4CF490048FC642405', 'Akure', 'Super Admin', 'Mariston Hotel & Suites', '+234-706-786-9400', 'NTA Road, Oba-Ile Akure, Ondo State', 'meinec.jpg');

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
