-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 13, 2018 at 09:01 AM
-- Server version: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `box1`
--

-- --------------------------------------------------------

--
-- Table structure for table `dimen`
--

DROP TABLE IF EXISTS `dimen`;
CREATE TABLE IF NOT EXISTS `dimen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` text NOT NULL,
  `weigth` text NOT NULL,
  `length` text NOT NULL,
  `width` text NOT NULL,
  `heigth` text NOT NULL,
  `qty` text NOT NULL,
  `volume` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dimen`
--

INSERT INTO `dimen` (`id`, `type`, `weigth`, `length`, `width`, `heigth`, `qty`, `volume`) VALUES
(1, '', '', '', '', '', '', '0'),
(2, '', '', '', '', '', '', '0'),
(3, 'carton', '1', '10', '10', '10', '1', '0.25'),
(4, 'carton', '1', '10', '10', '10', '1', '0.25'),
(5, '', '', '', '', '', '', '0'),
(6, '', '1', '20', '20', '20', '2', '2'),
(7, 'skid', '1', '20', '20', '20', '3', '0.1'),
(8, 'envelope', '1', '10', '10', '10', '1', '0.25'),
(9, 'skid', '1', '10', '10', '10', '1', '0.25'),
(10, 'skid', '1', '20', '30', '20', '3', '3'),
(11, 'skid', '1', '20', '30', '20', '4', '3'),
(12, 'skid', '1', '20', '30', '20', '1', '3'),
(13, 'skid', '1', '20', '30', '20', '1', '0.012'),
(14, 'envelope', '1', '10', '10', '10', '1', '0.25'),
(15, 'canton', '1', '10', '10', '10', '3', '0.75'),
(16, 'carton', '1', '10', '10', '10', '5', '1.25'),
(17, 'carton', '1', '10', '10', '10', '4', '0.25'),
(18, 'carton', '1', '10', '10', '10', '3', '0.25'),
(19, '', '', '0', '0', '0', '', '0'),
(20, '', '', '0', '0', '0', '', '0'),
(21, '', '', '0', '0', '0', '', '0'),
(22, '', '', '0', '0', '0', '', '0'),
(23, '', '', '0', '0', '0', '', '0'),
(24, '', '', '0', '0', '0', '', '0'),
(25, '', '', '0', '0', '0', '', '0'),
(26, '', '', '0', '0', '0', '', '0'),
(27, '', '', '0', '0', '0', '', '0'),
(28, '', '', '0', '0', '0', '', '0'),
(29, '', '', '0', '0', '0', '', '0'),
(30, '', '1', '20', '20', '20', '4', '2'),
(31, '', '', '0', '0', '0', '', '0'),
(32, '', '1', '20', '20', '20', '3', '2'),
(33, 'carton', '1', '20', '20', '20', '4', '2'),
(34, 'Select Type of Item', '', '0', '0', '0', '', '0'),
(35, 'envelope', '1', '20', '20', '20', '4', '2'),
(36, 'Select Type of Item', '', '0', '0', '0', '', '0'),
(37, 'skid', '1', '30', '40', '20', '3', '6'),
(38, 'Select Type of Item', '', '0', '0', '0', '', '0'),
(39, 'Select Type of Item', '', '0', '0', '0', '', '0'),
(40, 'envelope', '3', '20', '30', '40', '4', '6'),
(41, 'carton', '9', '9', '9', '9', '5', '0.18225');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

DROP TABLE IF EXISTS `info`;
CREATE TABLE IF NOT EXISTS `info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` text NOT NULL,
  `weigth` text NOT NULL,
  `length` text NOT NULL,
  `width` text NOT NULL,
  `heigth` text NOT NULL,
  `volume` text NOT NULL,
  `qty` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `type`, `weigth`, `length`, `width`, `heigth`, `volume`, `qty`) VALUES
(1, 'carton', '5', '20', '20', '20', '2', '1'),
(2, 'carton', '1', '50', '50', '50', '31.25', '1'),
(3, 'skid', '5', '20', '20', '20', '2', '1'),
(4, 'skid', '3', '30', '30', '30', '6.75', '1'),
(5, 'envelope', '5', '20', '20', '20', '2', '1'),
(6, 'envelope', '3', '40', '40', '40', '15', '2'),
(7, 'carton', '5', '30', '30', '30', '6.75', '1'),
(8, 'skid', '3', '40', '40', '40', '13.12', '1'),
(9, 'carton', '5', '30', '30', '30', '6.75', '1'),
(10, 'envelope', '3', '30', '30', '30', '6.75', '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
