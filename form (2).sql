-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2024 at 01:47 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` int(20) DEFAULT NULL,
  `image` varbinary(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `name`, `address`, `email`, `mobile`, `image`) VALUES
(25, 'RAJA MODI', 'tokloroad', 'manashmodi480@gmail.com', 2147483647, 0x53637265656e73686f7420323032332d30392d3238203035323931352e706e67),
(26, 'RAJA MODI', 'tokloroad', 'manashmodi480@gmail.com', 2147483647, 0x53637265656e73686f7420323032332d30392d3238203035323931352e706e67),
(27, 'RAJA MODI', 'tokloroad', 'manashmodi480@gmail.com', 2147483647, 0x53637265656e73686f7420323032332d31312d3130203131333534362e706e67),
(28, 'manash mod', 'toklo road chakradharpur', 'manashmodi480@gmail.com', 2147483647, 0x6d6d6d732e6a7067),
(29, 'manash mod', 'toklo road chakradharpur', 'admin@gmail.com', 2147483647, 0x6d6d6d732e6a7067),
(30, 'manash mod', 'toklo road chakradharpur', 'admin@gmail.com', 2147483647, 0x6d6d6d732e6a7067),
(31, 'manash mod', 'toklo road chakradharpur', 'sritam@gmail.com', 2147483647, 0x6d6d6d732e6a7067),
(32, 'manash mod', 'toklo road chakradharpur', 'sritam@gmail.com', 2147483647, 0x6d6d6d732e6a7067),
(33, 'manash mod', 'toklo road chakradharpur', 'modi@gmail.com', 2147483647, 0x6d6d6d732e6a7067);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
