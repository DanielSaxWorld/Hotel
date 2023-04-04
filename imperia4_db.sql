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
-- Database: `imperia4_db`
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
  `room_name` varchar(500) DEFAULT NULL,
  `room_price` float(12,2) DEFAULT NULL,
  `night` varchar(500) DEFAULT NULL,
  `payment_method` varchar(500) DEFAULT NULL,
  `discount` varchar(500) DEFAULT NULL,
  `caution_fee` float(12,2) DEFAULT NULL,
  `total_amount` float(12,2) DEFAULT NULL,
  `status` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `booking_id` varchar(500) DEFAULT NULL,
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
  `room_name` varchar(500) DEFAULT NULL,
  `room_price` float(12,2) DEFAULT NULL,
  `night` varchar(500) DEFAULT NULL,
  `payment_method` varchar(500) DEFAULT NULL,
  `discount` varchar(500) DEFAULT NULL,
  `caution_fee` float(12,2) DEFAULT NULL,
  `total_amount` float(12,2) DEFAULT NULL,
  `status` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `room_name` varchar(500) DEFAULT NULL,
  `amount` float(12,2) DEFAULT NULL,
  `uin` varchar(500) DEFAULT NULL,
  `fullname` varchar(500) DEFAULT NULL,
  `phone` varchar(500) DEFAULT NULL,
  `checkout_date` datetime DEFAULT NULL,
  `return_caution` float(12,2) DEFAULT NULL,
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`id`, `uin`, `fullname`, `phone`, `email`, `gender`, `civic_status`, `vehicle_type`, `plate_no`, `vehicle_colour`, `identification`, `nok_name`, `nok_phone`, `valid_id`) VALUES
(1, 'IMHG270922183', 'GODSPOWER OTALI', '08074400351', 'otaligodspower@gmail.com', 'Male', 'Married', '', '', '', 'Voter''s Card', 'RACHEL GODSPOWER-OTALI', '08074400351', 'WhatsApp Image 2022-09-23 at 10.02.41 AM.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `room_id` varchar(500) DEFAULT NULL,
  `room_name` varchar(500) DEFAULT NULL,
  `price` float(12,2) DEFAULT NULL,
  `capacity` varchar(500) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `photos` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `room_id`, `room_name`, `price`, `capacity`, `description`, `photos`) VALUES
(1, 'IMHRoom9208', 'Standard Double', 18500.00, '2 Adults 2 Children', 'Lovely apertment to make you comfortable', 'WhatsApp Image 2022-09-21 at 9.24.14 AM.jpeg'),
(2, 'IMHRoom583', 'Deluxe Double', 21500.00, '2 Adults 2 Children', 'Beautifully and highly equipped with different amenities that give you a home feeling.', 'WhatsApp Image 2022-09-21 at 9.24.18 AM.jpeg'),
(3, 'IMHRoom2637', 'Executive Double', 22500.00, '2 Adults 2 Children', 'Tastefully furnished with interiors for your relaxation and comfort', 'WhatsApp Image 2022-09-21 at 9.24.27 AM (1).jpeg'),
(4, 'IMHRoom8359', 'Deluxe Suite', 35000.00, '2 Adults 2 Children', 'We offer a friendly, safe and supportive environment that suites your taste with excellent facilities.', 'WhatsApp Image 2022-09-21 at 9.24.35 AM.jpeg'),
(5, 'IMHRoom8692', 'Duplex Suite', 50000.00, '3 Adults 3 Children', 'well equipped with different amenities for your comfort and relaxation', 'WhatsApp Image 2022-09-21 at 9.24.28 AM.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `room_price`
--

CREATE TABLE IF NOT EXISTS `room_price` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `room_id` int(11) NOT NULL,
  `room_name` varchar(500) DEFAULT NULL,
  `price` float(12,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `room_price`
--

INSERT INTO `room_price` (`id`, `room_id`, `room_name`, `price`) VALUES
(1, 0, 'Standard Double', 18500.00),
(2, 0, 'Deluxe Double', 21500.00),
(3, 0, 'Executive Double', 22500.00),
(4, 0, 'Deluxe Suite', 35000.00),
(5, 0, 'Duplex Suite', 50000.00);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
