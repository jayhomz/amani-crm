-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2018 at 03:42 PM
-- Server version: 10.1.29-MariaDB
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
-- Database: `amani`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients_info`
--

CREATE TABLE `clients_info` (
  `client_id` int(20) NOT NULL,
  `available` smallint(10) DEFAULT NULL,
  `call_back` datetime DEFAULT NULL,
  `interest` text,
  `backup_devices` varchar(20) DEFAULT NULL,
  `appointement_day` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `enquiry` varchar(20) DEFAULT NULL,
  `backup_important` varchar(20) DEFAULT NULL,
  `offsite` varchar(20) DEFAULT NULL,
  `affordable` varchar(20) DEFAULT NULL,
  `appointement_time` varchar(20) DEFAULT NULL,
  `call_back_time` varchar(20) DEFAULT NULL,
  `call_back_date` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients_info`
--

INSERT INTO `clients_info` (`client_id`, `available`, `call_back`, `interest`, `backup_devices`, `appointement_day`, `email`, `enquiry`, `backup_important`, `offsite`, `affordable`, `appointement_time`, `call_back_time`, `call_back_date`) VALUES
(1, NULL, NULL, 'Call Back or Not Interested', 'fsf', '2018-01-11', 'vbbfdg@ydf', 'es this question', 'agree', 'agree', 'disagree', '12:00', NULL, NULL),
(2, NULL, NULL, 'not interested or no', '', '2018-01-04', 'dsd@gmail.com', NULL, 'disagree', 'disagree', 'agree', '02:01', NULL, NULL),
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `client_name`
--

CREATE TABLE `client_name` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_name`
--

INSERT INTO `client_name` (`id`, `name`) VALUES
(1, 'John'),
(2, 'Ann'),
(3, 'Mary');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients_info`
--
ALTER TABLE `clients_info`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `client_name`
--
ALTER TABLE `client_name`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client_name`
--
ALTER TABLE `client_name`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
