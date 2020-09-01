-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2020 at 01:13 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db1`
--

-- --------------------------------------------------------

--
-- Table structure for table `cregtbl`
--

CREATE TABLE `cregtbl` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` int(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cregtbl`
--

INSERT INTO `cregtbl` (`id`, `name`, `email`, `number`, `password`) VALUES
(1, 'avc', 'a2@gmail.com', 1234567899, '111'),
(3, 'KK Solutions', 'kk@gmail.com', 1223334445, '111');

-- --------------------------------------------------------

--
-- Table structure for table `eregtbl`
--

CREATE TABLE `eregtbl` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` int(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eregtbl`
--

INSERT INTO `eregtbl` (`id`, `firstName`, `lastName`, `email`, `number`, `gender`, `password`) VALUES
(1, 'fwe', 'fewrsfe', 'a@gmail.com', 1234567890, 'm', '1234'),
(3, 'fwe', 'fewrsfe', 'qa@gmail.come', 1234567890, 'f', '1234'),
(4, 'fwe', 'fewrsfe', '1a@gmail.com', 1234567890, 'o', '1212'),
(5, 'fwe', 'fewrsfe', 'a@gmail.com2', 1234567890, 'o', 'er'),
(6, 'Alan', 'mathiwe', '33a@gmail.com', 1234567890, 'f', '0909'),
(8, 'siva', 'kumar', '4a@gmail.com', 1234567890, 'm', '12'),
(9, 'Eswara', 'Moorthy123', '22a@gmail.com', 1234567890, 'm', '12'),
(14, 'Eswar', 'Es', '4aa@gmail.com', 1234567890, 'F', '12'),
(16, 'Eswar', 'Essa', 'aa@gmail.com', 1234567890, 'Male', '12');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `qual` varchar(50) NOT NULL,
  `number` int(10) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `qual`, `number`, `address`) VALUES
(1, 'Software developer', 'BE', 1234567890, '1st street combature'),
(2, 'Tester', 'BE', 1234567890, 'coimbatore'),
(3, 'Tester', 'BE', 1234567890, 'coimbatore'),
(4, 'Technical Support', 'Arts', 1234567899, 'Tirupur'),
(5, 'HR', 'MBA', 2147483647, 'Coimbatore');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cregtbl`
--
ALTER TABLE `cregtbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eregtbl`
--
ALTER TABLE `eregtbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cregtbl`
--
ALTER TABLE `cregtbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `eregtbl`
--
ALTER TABLE `eregtbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
