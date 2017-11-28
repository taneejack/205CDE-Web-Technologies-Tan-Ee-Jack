-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2017 at 03:58 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `formbooking`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `breakfast` text NOT NULL,
  `adulttrain` int(3) NOT NULL,
  `childrentrain` int(3) NOT NULL,
  `owlmuseum` int(3) NOT NULL,
  `roomadult` int(3) NOT NULL,
  `roomchildren` int(3) NOT NULL,
  `name1` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phonenumber` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`breakfast`, `adulttrain`, `childrentrain`, `owlmuseum`, `roomadult`, `roomchildren`, `name1`, `email`, `phonenumber`) VALUES
('2', 3, 1, 3, 3, 1, 'Lim Chia Yean', 'limchiayean@gmail.co', '012123456789'),
('22', 22, 2, 2, 2, 2, 'tan', '00000000000', '0'),
('2', 2, 2, 2, 2, 2, 'Tan Ee Han', '01299889988', '01299889988'),
('2', 2, 2, 2, 2, 2, 'Tan Ee Jack', 'tanez_995@hotmail.co', '0123029420');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`name1`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
