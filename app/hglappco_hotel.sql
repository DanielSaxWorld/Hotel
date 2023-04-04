-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 27, 2019 at 09:53 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hglappco_hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `active_check_in`
--

CREATE TABLE IF NOT EXISTS `active_check_in` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `lodge_id` varchar(500) DEFAULT NULL,
  `uin` varchar(500) DEFAULT NULL,
  `fullname` varchar(500) DEFAULT NULL,
  `phone` varchar(500) DEFAULT NULL,
  `arrival_date` date DEFAULT NULL,
  `arrival_time` time DEFAULT NULL,
  `room` varchar(500) DEFAULT NULL,
  `room_price` float(12,2) DEFAULT NULL,
  `night` varchar(500) DEFAULT NULL,
  `payment_method` varchar(500) DEFAULT NULL,
  `discount` varchar(500) DEFAULT NULL,
  `total_amount` float(12,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `check_in`
--

CREATE TABLE IF NOT EXISTS `check_in` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `lodge_id` varchar(500) DEFAULT NULL,
  `uin` varchar(500) DEFAULT NULL,
  `fullname` varchar(500) DEFAULT NULL,
  `phone` varchar(500) DEFAULT NULL,
  `arrival_date` date DEFAULT NULL,
  `arrival_time` time DEFAULT NULL,
  `room` varchar(500) DEFAULT NULL,
  `room_price` float(12,2) DEFAULT NULL,
  `night` varchar(500) DEFAULT NULL,
  `payment_method` varchar(500) DEFAULT NULL,
  `discount` varchar(500) DEFAULT NULL,
  `total_amount` float(12,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `check_out`
--

CREATE TABLE IF NOT EXISTS `check_out` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `lodge_id` varchar(500) DEFAULT NULL,
  `uin` varchar(500) DEFAULT NULL,
  `fullname` varchar(500) DEFAULT NULL,
  `phone` varchar(500) DEFAULT NULL,
  `checkout_date` date DEFAULT NULL,
  `checkout_time` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE IF NOT EXISTS `inventory` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `product_id` varchar(500) DEFAULT NULL,
  `brand` varchar(500) DEFAULT NULL,
  `category` varchar(500) DEFAULT NULL,
  `purchase_date` date DEFAULT NULL,
  `purchase_price` float(12,2) DEFAULT NULL,
  `selling_price` float(12,2) DEFAULT NULL,
  `profit` float(12,2) DEFAULT NULL,
  `qty` varchar(500) DEFAULT NULL,
  `qty_left` varchar(500) DEFAULT NULL,
  `total` float(12,2) DEFAULT NULL,
  `total_profit` float(12,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `amount` varchar(100) NOT NULL,
  `profit` varchar(100) NOT NULL,
  `due_date` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `balance` varchar(100) NOT NULL,
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
  `passport` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `s/n` (`id`),
  KEY `passport` (`passport`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `staff_id`
--

INSERT INTO `staff_id` (`id`, `staff_id`, `fullname`, `email`, `phone`, `password`, `station`, `designation`, `passport`) VALUES
(11, 'HGL/130819/81188', 'GOD''SPOWER OTALI', 'otaligodspower@gmail.com', '08074400351', '*F0CDD59238A1A533EFAD8443F3D825AFBDCF60EF', 'Akure', 'Web Master', 'GP Passport.jpg');

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
