-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 17, 2017 at 04:33 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `resume`
--
CREATE DATABASE IF NOT EXISTS `resume` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `resume`;

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

CREATE TABLE IF NOT EXISTS `table1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `gender` varchar(1000) NOT NULL,
  `experience` varchar(1000) NOT NULL,
  `resume` varchar(1000) NOT NULL,
  `path` varchar(1000) NOT NULL,
  `date` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `table1`
--

INSERT INTO `table1` (`id`, `name`, `email`, `password`, `city`, `qualification`, `gender`, `experience`, `resume`, `path`, `date`) VALUES
(5, 'admin111', 'admin@gmail.com', 'admin!@#', 'patna', 'MCA,BCA', 'Male', '2 Year', 'Draft - Risk Profiling of the client.docx', './folder/Draft - Risk Profiling of the client.docx', ''),
(6, 'neha', 'neha@gmail.com', 'admin', 'patna', 'MCA,BCA,12', 'Female', '4 Year', 'password.xlsx', './folder/password.xlsx', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
