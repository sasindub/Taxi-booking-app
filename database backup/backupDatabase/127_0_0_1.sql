-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2022 at 03:37 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `goway`
--
CREATE DATABASE IF NOT EXISTS `goway` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `goway`;

-- --------------------------------------------------------

--
-- Table structure for table `drive`
--

CREATE TABLE `drive` (
  `dmail` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `mobile` int(11) DEFAULT NULL,
  `vtype` varchar(255) DEFAULT NULL,
  `forp` varchar(50) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `vmodel` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drive`
--

INSERT INTO `drive` (`dmail`, `name`, `mobile`, `vtype`, `forp`, `district`, `vmodel`) VALUES
('as@gmail.com', 'as', NULL, NULL, NULL, NULL, NULL),
('kamah@gmail', 'Sasindu Bandara', 2147483647, 'car', NULL, 'kegalla', 'alto'),
('kamatah@gmail', 'Sasindu Bandara', 2147483647, 'van', 'full time', 'kegalle', 'caravan'),
('kiriabandara@gmail.com', 'banda', 774186332, 'van', 'full time', 'madakalapuwa', 'caravan'),
('sazubandara@gmail.com', 'Sasindu Bandara', 2147483647, 'tuk', 'full time', 'Matara', 'TVS'),
('shithabandara@gmail.com', 'Sas', 74186332, 'tuk', 'full time', 'ampara', 'TVS'),
('Sirith@gmail.com', 'Sirith', 2147483647, 'tuk', 'full time', 'Jaffna', 'Bajaj'),
('Sunil@gmail.com', 'Sunil', 774186332, 'van', 'part time', 'galle', 'every'),
('[value-1]', '[value-2]', 0, '[value-4]', '[value-5]', '[value-6]', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

CREATE TABLE `tour` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `tstart` varchar(255) DEFAULT NULL,
  `tend` varchar(255) DEFAULT NULL,
  `day` varchar(50) DEFAULT NULL,
  `vtype` varchar(20) DEFAULT NULL,
  `bag` int(11) DEFAULT NULL,
  `bagw` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `usr`
--

CREATE TABLE `usr` (
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `mobile` int(11) DEFAULT NULL,
  `nic` int(11) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drive`
--
ALTER TABLE `drive`
  ADD PRIMARY KEY (`dmail`);

--
-- Indexes for table `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usr`
--
ALTER TABLE `usr`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tour`
--
ALTER TABLE `tour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
