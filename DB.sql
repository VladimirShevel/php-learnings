-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 29, 2019 at 10:19 PM
-- Server version: 5.7.20
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testSpheremallDB`
--
CREATE DATABASE IF NOT EXISTS `testSpheremallDB` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `testSpheremallDB`;

-- --------------------------------------------------------

--
-- Table structure for table `attribute`
--

DROP TABLE IF EXISTS `attribute`;
CREATE TABLE IF NOT EXISTS `attribute` (
  `code` int(11) NOT NULL AUTO_INCREMENT,
  `attribName` varchar(120) NOT NULL,
  `attributeValue` varchar(120) NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `attribute`
--

INSERT INTO `attribute` (`code`, `attribName`, `attributeValue`) VALUES
(1, 'size', 'S'),
(2, 'size', 'M'),
(3, 'size', 'L'),
(4, 'size', 'XL'),
(5, 'size', 'XXL'),
(6, 'colour', 'RED'),
(7, 'colour', 'WHITE'),
(8, 'colour', 'BLACK'),
(9, 'colour', 'GREEN'),
(10, 'colour', 'BLUE'),
(11, 'material', 'METALL'),
(12, 'material', 'PAPER'),
(13, 'material', 'PLASTIC'),
(14, 'material', 'GLASS');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `email` text NOT NULL,
  `photo` text NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `surname`, `email`, `photo`, `comment`) VALUES
(0, 'Vasya', 'Pupkin', 'v.pupkin@example.com', 'garazh1_3.jpg', 'RYHRTYTYURTU'),
(18, 'Vasya', 'Pupkin', 'v.shevel@gmail.com', '5b8ee10dcee07482dfd802ba36w7--ukrasheniya-kulon-chasovoj-klyuch.jpg', 'Woohoo!!!!!'),
(19, 'Vladimir', 'Pupkin', 'v.shevel@gmail.com', '1.jpg', 'Woohoo!!!!'),
(20, 'Vladimir', 'Pupkin', 'v.shevel@gmail.com', '1.jpg', 'Woohoo!!!!'),
(21, 'qwqeqe', 'qweqwe', 'v.shevel@gmail.com', '366747_600.jpg', ''),
(22, 'Vladimir', 'Shevel', 'v.shevel@gmail.com', '52de806925c14f80f918f9d3ebb2424d.jpg', 'qererertretret');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `productid` int(11) NOT NULL AUTO_INCREMENT,
  `productName` varchar(120) DEFAULT NULL,
  `productDescription` text,
  `productPrice` tinytext,
  PRIMARY KEY (`productid`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productid`, `productName`, `productDescription`, `productPrice`) VALUES
(26, 'PS4', 'Gamecosole for all family', '12500 '),
(27, 'GalaxyS10', 'Samsung falgman smartphone', '28000');

-- --------------------------------------------------------

--
-- Table structure for table `product_attribute`
--

DROP TABLE IF EXISTS `product_attribute`;
CREATE TABLE IF NOT EXISTS `product_attribute` (
  `productid` int(11) NOT NULL,
  `attributeid` int(11) NOT NULL,
  KEY `productid` (`productid`),
  KEY `attributeid` (`attributeid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_attribute`
--

INSERT INTO `product_attribute` (`productid`, `attributeid`) VALUES
(26, 8),
(26, 11);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_attribute`
--
ALTER TABLE `product_attribute`
  ADD CONSTRAINT `product_attribute_ibfk_1` FOREIGN KEY (`productid`) REFERENCES `product` (`productid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_attribute_ibfk_2` FOREIGN KEY (`attributeid`) REFERENCES `attribute` (`code`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
