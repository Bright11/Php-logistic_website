-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2021 at 11:45 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shippingsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminsregister`
--

CREATE TABLE `adminsregister` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `a_number` varchar(100) NOT NULL,
  `a_country` varchar(100) NOT NULL,
  `a_city` varchar(50) NOT NULL,
  `a_operation` varchar(20) NOT NULL DEFAULT 'Not active',
  `a_role` varchar(50) NOT NULL,
  `b_id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `message` longtext NOT NULL DEFAULT 'You are secured',
  `date_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date_registered` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminsregister`
--

INSERT INTO `adminsregister` (`a_id`, `a_name`, `email`, `a_number`, `a_country`, `a_city`, `a_operation`, `a_role`, `b_id`, `password`, `message`, `date_update`, `date_registered`) VALUES
(3, 'Bright', 'chikanwazuo@gmail.com', '0485944', 'UK', 'nairobe', 'Not active', 'Admin', '1', '$2y$10$Dg1YAJojuIpTXHNqVl1XG.3RhpA34OikmzN8RNmO6et', 'You are secured', '2021-07-25 13:57:42', '2021-07-25 13:57:42');

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
  `date_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date_registered` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`b_id`, `b_name`, `b_country`, `b_city`, `b_operation`, `date_update`, `date_registered`) VALUES
(7, 'bright C Web Developer', 'Kumasi', 'Ghana', 'Not active', '2021-07-27 11:06:56', '2021-07-27 11:06:56'),
(14, 'Glorious city', 'Ghana', 'Accra', 'Not active', '2021-07-27 13:16:02', '2021-07-27 13:16:02');

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
  `date_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date_registered` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`em_id`, `em_name`, `em_email`, `adminemail`, `em_number`, `em_role`, `b_id`, `password`, `date_update`, `date_registered`) VALUES
(19, 'Bright', 'james@gmail.com', 'james@gmail.com', '94748463', 'admin', '7', '$2y$10$j4pg4rQtTv4rzCOF/746ceiK5wg96L83cBGImwW05pkrau3gz9Tti', '2021-07-27 11:08:14', '2021-07-27 11:08:14'),
(20, 'faith', 'faith@gmail.com', NULL, '94748463999', 'employee', '7', '$2y$10$rElTO7j4CKr/iss5vhlE5eqfri4NaoXlLbXuoAj2y0XjPTujMkLi6', '2021-07-27 11:11:15', '2021-07-27 11:11:15'),
(21, 'glory', 'gift@gmail.com', 'gift@gmail.com', '94748463999', 'admin', '8', '$2y$10$/DB1rHBheHeBx7Yp3MmfnOkcpgmVI.UQCIxT0Axu5PEzTyVDgpVae', '2021-07-27 13:03:06', '2021-07-27 13:03:06');

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
  `date_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date_registered` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `senderinfo`
--

INSERT INTO `senderinfo` (`sender_id`, `sender_name`, `sender_email`, `sender_number`, `sender_country`, `sender_city`, `items`, `quantity`, `price`, `kg`, `b_id`, `tracking_id`, `em_name`, `date_update`, `date_registered`) VALUES
(7, 'Gloria', 'gloria@gmail.com', '0987643', 'Ghana', 'Accra', 'Rice', '5', '200', '100KG', '7', 'kUtlfHtegp', 'faith', '2021-07-27 11:13:48', '2021-07-27 11:13:48');

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
  `message` longtext NOT NULL DEFAULT 'You are secured',
  `reciever_dateupdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `recieverdate_registered` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shippinginfo`
--

INSERT INTO `shippinginfo` (`reciever_id`, `reciever_name`, `reciever_number`, `reciever_email`, `reciever_country`, `reciever_city`, `sending_by`, `status`, `items`, `quantity`, `kg`, `b_id`, `current_location`, `tracking_id`, `message`, `reciever_dateupdate`, `recieverdate_registered`) VALUES
(7, 'Isacc', '0987555', 'isacc@gmail.com', 'united state', 'Chicago', 'Air', 'On the way', 'Rice', '5', '100KG', '7', 'Nigeria', 'kUtlfHtegp', 'Your Item is on the way.', '2021-07-27 11:21:57', '2021-07-27 11:14:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminsregister`
--
ALTER TABLE `adminsregister`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`em_id`);

--
-- Indexes for table `senderinfo`
--
ALTER TABLE `senderinfo`
  ADD PRIMARY KEY (`sender_id`);

--
-- Indexes for table `shippinginfo`
--
ALTER TABLE `shippinginfo`
  ADD PRIMARY KEY (`reciever_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminsregister`
--
ALTER TABLE `adminsregister`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `em_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `senderinfo`
--
ALTER TABLE `senderinfo`
  MODIFY `sender_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `shippinginfo`
--
ALTER TABLE `shippinginfo`
  MODIFY `reciever_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
