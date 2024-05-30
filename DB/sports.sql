-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 26, 2023 at 06:17 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sports`
--

-- --------------------------------------------------------

--
-- Table structure for table `sprtsin`
--

CREATE TABLE IF NOT EXISTS `sprtsin` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `usermail` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `sprtsin`
--

INSERT INTO `sprtsin` (`id`, `name`, `usermail`, `password`, `address`, `mobile`) VALUES
(2, 'rindhiya', 'rindhi', '1234', 'mdu', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `sprtslist`
--

CREATE TABLE IF NOT EXISTS `sprtslist` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `category` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `games` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sprtslist`
--

INSERT INTO `sprtslist` (`id`, `category`, `name`, `games`) VALUES
(1, 'Indoor', 'rindhiya', 'basket ball');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Registernumber` varchar(50) NOT NULL,
  `Course` varchar(50) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Mobile` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `Name`, `Registernumber`, `Course`, `Department`, `Address`, `Mobile`) VALUES
(1, 'rindhiya', '123456', 'BE', 'ECE', 'mdu', '123456789'),
(2, 'sibi', '123456', 'BE', 'ECE', 'mdu', '123456789'),
(3, 'sivanesh', '123456', 'BE', 'cse', 'mdu', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `tutorin`
--

CREATE TABLE IF NOT EXISTS `tutorin` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `usermail` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tutorin`
--

INSERT INTO `tutorin` (`id`, `name`, `usermail`, `password`, `address`, `mobile`) VALUES
(1, 'rindhi', 'rindhi@gmail.com', '1234', 'mdu', '123456789'),
(2, 'rindhi', 'rin@gmail.com', '1234', 'mdu', '123456789'),
(3, '', '', '', '', ''),
(4, 'rindhi', '', '', 'mdu', '123456789');
