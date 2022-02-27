-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2022 at 11:23 AM
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
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `query_id` int(25) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  `query` varchar(255) NOT NULL,
  `reply` varchar(255) DEFAULT NULL,
  `date&time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`query_id`, `Username`, `category`, `query`, `reply`, `date&time`) VALUES
(3, 'Surya S', 'Water Department', 'jshgf', 'thankyou for communicating, we will do necessary action', '2022-02-02 15:13:58'),
(4, 'Surya S', 'Water Department', 'My complaint with id 25 is still processing. Any updates', 'ok we will look into it!', '2022-02-02 17:39:42'),
(5, 'Surya S', 'Electricity Department', 'complaint is not processed yet', 'ok we will look into it.. thanks for reporting...', '2022-02-02 18:17:25'),
(6, 'Surya S', 'Water Department', 'can i report water logging issues caused by road cracks here', 'No, you can use category as road dept for reporting such issues ', '2022-02-02 18:27:21'),
(7, 'Surya S', 'Water Department', 'can i report plastic burning related complaints', 'waiting for response...', '2022-02-04 16:09:56'),
(9, 'Surya S', 'Water Department', 'ajjs', 'iiSH', '2022-02-10 15:02:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`query_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `query_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
