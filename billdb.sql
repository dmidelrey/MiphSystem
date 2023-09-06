-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2015 at 02:25 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `billdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(128) NOT NULL AUTO_INCREMENT,
  `fname` varchar(128) NOT NULL,
  `lname` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `fname`, `lname`, `username`, `password`) VALUES
(32, 'Jannah', 'Mazo', 'jannah', '11'),
(37, 'Armando', 'Langido', 'loading', '93'),
(38, 'waqas', 'yaqoob', 'waqas', 'waqas');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE IF NOT EXISTS `bill` (
  `bill_id` int(128) NOT NULL AUTO_INCREMENT,
  `ttl_electric` int(11) NOT NULL,
  `ttl_rental` int(11) NOT NULL,
  `ttl_water` int(11) NOT NULL,
  `date_issued` date NOT NULL,
  `tenant_id` int(128) NOT NULL,
  `room_id` int(11) NOT NULL,
  `issued_by` varchar(28) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`bill_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bill_id`, `ttl_electric`, `ttl_rental`, `ttl_water`, `date_issued`, `tenant_id`, `room_id`, `issued_by`, `status`) VALUES
(22, 50, 1000, 0, '2015-03-15', 28, 20, 'waqas yaqoob', 1),
(23, 50, 1000, 1, '2015-03-15', 27, 20, 'waqas yaqoob', 1);

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE IF NOT EXISTS `discount` (
  `dis_id` int(11) NOT NULL AUTO_INCREMENT,
  `dis_prc` text NOT NULL,
  `dis_val` text NOT NULL,
  PRIMARY KEY (`dis_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `discount`
--

INSERT INTO `discount` (`dis_id`, `dis_prc`, `dis_val`) VALUES
(1, '0%', '0'),
(2, '10%', '0.10'),
(3, '20%', '0.20'),
(4, '30%', '0.30'),
(5, '40%', '0.40'),
(6, '50%', '0.50'),
(7, '60%', '0.60'),
(8, '70%', '0.70'),
(9, '80%', '0.80'),
(10, '90%', '0.90'),
(11, '100%', '0.100');

-- --------------------------------------------------------

--
-- Table structure for table `electricity`
--

CREATE TABLE IF NOT EXISTS `electricity` (
  `electric_id` int(128) NOT NULL AUTO_INCREMENT,
  `amount` varchar(128) NOT NULL,
  `room_id` int(128) NOT NULL,
  `date_st` date NOT NULL,
  `date_end` date NOT NULL,
  PRIMARY KEY (`electric_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `electricity`
--

INSERT INTO `electricity` (`electric_id`, `amount`, `room_id`, `date_st`, `date_end`) VALUES
(1, '100', 20, '2015-03-12', '2015-03-16'),
(2, '200', 15, '2015-03-12', '2015-03-16');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `room_id` int(128) NOT NULL AUTO_INCREMENT,
  `room_name` varchar(128) NOT NULL,
  `rental` varchar(128) NOT NULL,
  PRIMARY KEY (`room_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_name`, `rental`) VALUES
(1, 'Prep 1', '2000'),
(2, 'Nursary ', '1800'),
(3, 'Class 1 A', '2000'),
(4, 'Class 2 A', '1890'),
(5, 'Class 3 A', '1832'),
(6, 'Class 4 A', '1833'),
(7, 'Class 5 A', '1850'),
(8, 'Class 6 A', '1700'),
(9, 'Class 7 A', '2100'),
(14, 'Class 8 A', '2000'),
(15, 'Class 9 A', '2000'),
(20, 'Class 10 A', '2000');

-- --------------------------------------------------------

--
-- Table structure for table `tenant`
--

CREATE TABLE IF NOT EXISTS `tenant` (
  `tenant_id` int(128) NOT NULL AUTO_INCREMENT,
  `room_id` int(11) NOT NULL,
  `gender` varchar(128) NOT NULL,
  `fname` varchar(128) NOT NULL,
  `mname` varchar(128) NOT NULL,
  `lname` varchar(128) NOT NULL,
  `nname` varchar(128) NOT NULL,
  `age` text NOT NULL,
  `bdate` date NOT NULL,
  `address` varchar(128) NOT NULL,
  `contact` text NOT NULL,
  `water` varchar(128) NOT NULL,
  `date_registered` date NOT NULL,
  `dis_id` int(11) NOT NULL,
  PRIMARY KEY (`tenant_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `tenant`
--

INSERT INTO `tenant` (`tenant_id`, `room_id`, `gender`, `fname`, `mname`, `lname`, `nname`, `age`, `bdate`, `address`, `contact`, `water`, `date_registered`, `dis_id`) VALUES
(1, 1, 'Male', 'Armando', 'Moya', 'Langido', 'Jr', '21', '1993-07-23', 'Caliling, Cauayan Negros Occidental', '09491232217', '100', '2015-02-14', 1),
(2, 1, 'Male', 'Jewel', 'Langido', 'Nepomuceno', 'Jewel', '18', '1996-10-01', 'Caliling, Cauayan Negros Occidental', '09486566789', '100', '2015-02-14', 1),
(3, 2, 'Male', 'Abraham, Jr.', 'Langido', 'Gajo', 'Jun2x', '23', '1991-06-24', 'Inayaun, Cauayan Negros Occidental', '09218765434', '100', '2015-02-14', 1),
(4, 2, 'Male', 'Abraham III', 'Langido', 'Gajo', 'Abbey', '17', '1997-11-22', 'Inayaun, Cauayan Negros Occidental', '09190987678', '100', '2015-02-14', 1),
(5, 3, 'Male', 'Ian Kieth', 'Mondejar', 'Castillo', 'Bebe', '20', '1994-10-30', 'Tabu', '09189874730', '100', '2015-02-14', 1),
(6, 3, 'Female', 'Jannah Mae', 'Padilla', 'Mazo', 'sweet', '20', '1994-09-06', 'Tiling, Cauayan Negros Occidental', '09190983049', '100', '2015-02-14', 1),
(7, 4, 'Male', 'Gem Dean', 'Panganiban', 'Gamboa', 'Bem2x', '20', '1994-04-04', 'Kabankalan City', '09219095869', '100', '2015-02-14', 1),
(8, 4, 'Male', 'Jeffrey', 'Alicanda', 'Daliva', 'Jeff', '22', '1992-03-22', 'Isio, Cauayan Negros Occidental', '09100938574', '100', '2015-02-14', 1),
(9, 5, 'Male', 'Jonald', 'T.', 'Sevellejo', 'Jonald', '21', '1993-09-29', 'Guilungan, Cauayan Negros Occidental', '09488077653', '100', '2015-02-14', 1),
(10, 5, 'Male', 'Reynaldo', 'T.', 'Tianzon', 'Oting', '24', '1990-02-12', 'Kabankalan City', '09209300100', '100', '2015-02-14', 1),
(11, 6, 'Male', 'Franklin', 'M.', 'Castro', 'Frank', '20', '1994-06-21', 'Sipalay City', '09102100394', '100', '2015-02-14', 1),
(12, 6, 'Male', 'Aster', 'T.', 'Bandolos', 'Aster', '20', '1994-08-27', 'Tabu', '09109920194', '100', '2015-02-14', 1),
(13, 7, 'Male', 'Kristian Rey', 'B.', 'Tondo', 'Bro', '20', '1994-05-22', 'Tabu', '09182009218', '100', '2015-02-14', 1),
(14, 7, 'Male', 'Vincent', 'T.', 'Gallendo', 'Kapitan', '20', '1994-05-21', 'Mabinay', '09102165402', '100', '2015-02-14', 1),
(15, 8, 'Female', 'Ellaine Mar', 'T. ', 'Manuel', 'Len2x', '20', '1994-08-28', 'Sipalay City', '09201284635', '100', '2015-02-14', 1),
(16, 8, 'Female', 'Pearly Laine', 'M.', 'Lamata', 'Pearl', '20', '1994-06-20', 'Kabankalan City', '09102190493', '100', '2015-02-14', 1),
(17, 9, 'Male', 'Hector Neil', 'B.', 'Cornea', 'Hector', '23', '1991-04-04', 'Dumaguete', '09102183940', '100', '2015-02-14', 1),
(18, 9, 'Female', 'Novie Grace', 'T.', 'Ligo', 'Novie', '23', '1991-06-20', 'Dumaguete', '09102194039', '100', '2015-02-14', 1),
(19, 14, 'Female', 'Mariel', 'T. ', 'Tababa', 'Mariel', '21', '1993-05-21', 'Isio, Cauayan Negros Occidental', '09192194657', '100', '2015-02-14', 1),
(20, 14, 'Female', 'Jeheili', 'P.', 'Omero', 'Jeil', '21', '1993-07-16', 'Cauayan Negros Occidental', '09202817645', '100', '2015-02-14', 1),
(26, 19, 'Male', 'jonremus', 'remus', 'sevellejo', 'wala', '105', '2015-12-31', 'cauayan', '09123456789', '80', '2015-02-15', 2),
(27, 20, 'Male', 'waqas', 'o', 'Yaqoob', 'waqas', '34', '0000-00-00', 'Rawalpindi', '032215272712', '1', '2015-03-15', 1),
(28, 20, 'Male', 'ali', 'q', 'khan', 'aliii', '23', '0000-00-00', 'morgh', '03215272712', '0', '2015-03-15', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
