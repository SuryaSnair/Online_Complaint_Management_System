-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2022 at 11:24 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ocms`
--

-- --------------------------------------------------------

--
-- Table structure for table `send_result`
--

CREATE TABLE `send_result` (
  `c_id` int(25) NOT NULL,
  `image` blob NOT NULL,
  `dept_id` int(25) NOT NULL,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `send_result`
--

INSERT INTO `send_result` (`c_id`, `image`, `dept_id`, `comments`) VALUES
(21, 0x726f61645f636f727265637465642e6a7067, 10001, 'Completed all works and thankyou for reporting...keep supporting cms'),
(22, 0x46312e6c617267652e6a7067, 10001, 'Completed... thankyou for supporting cms'),
(25, 0x706578656c732d6d61782d616e647265792d313139373039352e6a7067, 10001, 'completed ...keep reporting\r\nthankyou'),
(38, 0x726f61645f636f727265637465642e6a7067, 10001, 'completed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `send_result`
--
ALTER TABLE `send_result`
  ADD PRIMARY KEY (`c_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
