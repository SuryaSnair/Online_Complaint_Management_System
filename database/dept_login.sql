-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2022 at 05:29 PM
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
-- Table structure for table `dept_login`
--

CREATE TABLE `dept_login` (
  `dept_id` int(11) NOT NULL,
  `dept_name` varchar(255) NOT NULL,
  `dept_emailid` varchar(255) NOT NULL,
  `dept_phone` varchar(15) NOT NULL,
  `dept_address` varchar(255) NOT NULL,
  `dept_optr_name` varchar(255) NOT NULL,
  `dept_optr_desig` varchar(255) NOT NULL,
  `dept_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dept_login`
--

INSERT INTO `dept_login` (`dept_id`, `dept_name`, `dept_emailid`, `dept_phone`, `dept_address`, `dept_optr_name`, `dept_optr_desig`, `dept_password`) VALUES
(10001, 'Water Department', 'waterauthority@gmail.com', '7087654321', 'water bhavan', 'Surya S', 'clerk', 'water@2022'),
(10002, 'Electricity Department', 'ksebindia@gmail.com', '9087654321', 'Kerala State Electricity Board Ltd.,Vydyuthi Bhavanam,Pattom, Thiruvananthapuram', 'Shiva Kumar L', 'Computer Operator', 'kseb@2022'),
(10003, 'Road Department', 'pwdindia@gmail.com', '9555654321', '2nd Floor,South Block,Secretariat', 'Arjun Sekhar M', 'Computer Operator', 'road@2022'),
(10004, 'Garbage Department', 'coorperationtvm@gmail.com', '8976543567', 'Co operation office,Lms,palayam', 'Sandhya L P', 'Clerk', 'garbage@2022');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dept_login`
--
ALTER TABLE `dept_login`
  ADD PRIMARY KEY (`dept_id`),
  ADD UNIQUE KEY `dept_emailid` (`dept_emailid`,`dept_phone`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
