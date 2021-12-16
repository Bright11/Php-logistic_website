-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: fdb18.awardspace.net
-- Generation Time: Jul 31, 2021 at 02:26 AM
-- Server version: 5.7.20-log
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `3353983_3353983`
--

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `b_id` int(11) NOT NULL,
  `b_name` varchar(100) NOT NULL,
  `b_country` varchar(100) NOT NULL,
  `b_city` varchar(50) NOT NULL,
  `b_operation` varchar(20) NOT NULL DEFAULT 'Not active',
  `date_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_registered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `em_id` int(11) NOT NULL,
  `em_name` varchar(100) NOT NULL,
  `em_email` varchar(100) NOT NULL,
  `adminemail` varchar(100) DEFAULT NULL,
  `em_number` varchar(50) NOT NULL,
  `em_role` varchar(50) NOT NULL,
  `b_id` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `date_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_registered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `senderinfo`
--

CREATE TABLE `senderinfo` (
  `sender_id` int(11) NOT NULL,
  `sender_name` varchar(100) NOT NULL,
  `sender_email` varchar(100) NOT NULL,
  `sender_number` varchar(50) NOT NULL,
  `sender_country` varchar(255) NOT NULL,
  `sender_city` varchar(255) NOT NULL,
  `items` varchar(200) NOT NULL DEFAULT '0',
  `quantity` varchar(50) NOT NULL DEFAULT '0',
  `price` varchar(50) NOT NULL,
  `kg` varchar(20) NOT NULL,
  `b_id` varchar(200) NOT NULL,
  `tracking_id` varchar(10) NOT NULL,
  `em_name` varchar(200) NOT NULL,
  `date_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_registered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shippinginfo`
--

CREATE TABLE `shippinginfo` (
  `reciever_id` int(11) NOT NULL,
  `reciever_name` varchar(255) NOT NULL,
  `reciever_number` varchar(255) NOT NULL,
  `reciever_email` varchar(255) NOT NULL,
  `reciever_country` varchar(255) NOT NULL,
  `reciever_city` varchar(255) NOT NULL,
  `sending_by` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'New',
  `items` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `kg` varchar(100) NOT NULL,
  `b_id` varchar(200) NOT NULL,
  `current_location` varchar(100) NOT NULL,
  `tracking_id` varchar(10) NOT NULL,
  `message` varchar(255) NOT NULL DEFAULT 'You are secured',
  `reciever_dateupdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `recieverdate_registered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
