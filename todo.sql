-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2022 at 05:18 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todo`
--

-- --------------------------------------------------------

--
-- Table structure for table `todoadmin`
--

CREATE TABLE `todoadmin` (
  `id` int(11) NOT NULL,
  `todo` varchar(100) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `todoadmin`
--

INSERT INTO `todoadmin` (`id`, `todo`, `status`) VALUES
(7, 'Java 1pm-3pm', 1),
(8, 'php 3pm-4pm', 1),
(10, 'SQL 4pm-5pm', 0),
(11, 'Python 5pm-7pm', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `todoadmin`
--
ALTER TABLE `todoadmin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `todoadmin`
--
ALTER TABLE `todoadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
