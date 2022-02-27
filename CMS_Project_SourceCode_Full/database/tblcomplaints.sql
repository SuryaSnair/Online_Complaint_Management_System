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
-- Table structure for table `tblcomplaints`
--

CREATE TABLE `tblcomplaints` (
  `complaintNumber` int(11) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `category` varchar(100) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `complaintDetails` mediumtext NOT NULL,
  `Place` varchar(100) NOT NULL,
  `land_mark` varchar(255) NOT NULL,
  `pin` int(25) NOT NULL,
  `Phone` varchar(25) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `image` blob NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcomplaints`
--

INSERT INTO `tblcomplaints` (`complaintNumber`, `Username`, `category`, `subject`, `complaintDetails`, `Place`, `land_mark`, `pin`, `Phone`, `status`, `image`, `regDate`) VALUES
(16, 'Surya S', 'Water Department', 'water leakage', 'water leakage', 'kudp', 'near devi temple', 657890, '8976567890', 2, '', '2022-01-22 15:27:49'),
(17, 'Chandra S', 'Garbage Department', 'Garbage disposal', 'gd dspl\r\nin city', 'peroor', 'near hsptl', 698765, '8976567890', 1, '', '2022-01-22 15:48:04'),
(18, 'Surya S', 'Electricity Department', 'Transformer is in danger', 'Transformer is in danger', 'kochi', 'near hsptl', 657890, '8976567890', 1, '', '2022-01-22 16:02:42'),
(19, 'Surya S', 'Road Department', 'Cracks on road', 'Cracks on road', 'tvm', 'near  ABC institution', 698765, '9526535252', 1, '', '2022-01-22 16:04:03'),
(20, 'Surya S', 'Garbage Department', 'Garbage disposal', 'Garbage disposal', 'east fort', 'near YUV dental clinic', 657890, '9526535252', 1, '', '2022-01-22 16:05:27'),
(21, 'Surya S', 'Water Department', 'water leakage', 'water leakage', 'nedumangadu', 'near  XYZ institution', 657878, '9865456788', 3, '', '2022-01-23 12:35:47'),
(22, 'Joy', 'Water Department', 'water logging', 'water logging due to damage in pipe', 'pathiripally', 'near akash institute', 657878, '8765432198', 1, '', '2022-01-23 14:35:46'),
(23, 'Surya S', 'Electricity Department', 'Electric post is in danger', 'Electric post is in danger', 'kollam', 'near  ABC institution', 698765, '8765432198', 0, '', '2022-01-25 09:46:38'),
(24, 'Surya S', 'Garbage Department', 'Garbage disposal', 'garbage disposal near school', 'tvm', 'near YUV dental clinic', 698765, '9526535252', 0, '', '2022-01-28 14:44:48'),
(25, 'Surya S', 'Water Department', 'water leakage', 'water leakage ', 'sreekaryam', 'near GHJ hsptl', 698700, '952658976', 1, '', '2022-01-29 05:16:36'),
(26, 'Surya S', 'Garbage Department', 'Garbage disposal', 'Garbage disposal', 'kochi', 'near devi temple', 657890, '9865456788', 0, '', '2022-01-29 05:26:36'),
(36, 'Surya S', 'Road Department', 'water logging', 'water logging on roads', 'kowdiar', 'near UBAN  hsptl', 657003, '9526535674', 0, 0x726f61642d77617465725f6c6f6767696e672e6a7067, '2022-01-30 06:36:43'),
(37, 'Surya S', 'Water Department', 'water leakage', 'w', 'kaj', 'sjsj', 98762, '8765432190', 3, 0x726f61642d77617465725f6c6f6767696e672e6a7067, '2022-02-04 16:08:26'),
(38, 'Surya S', 'Water Department', 'water leakagenshs', 'jhah', 'djhag', 'anag', 0, '9526535250', 1, 0x726f61642d77617465725f6c6f6767696e672e6a7067, '2022-02-10 14:59:59'),
(39, 'Ajith Menon', 'Water Department', 'water logging', 'water logging ', 'Tampanoor', 'Near Railway station', 698700, '8976543321', 3, 0x616a69746877617465722e6a7067, '2022-02-26 16:07:30'),
(42, 'Ajith Menon', 'Road Department', 'Road cracks', 'Cracks on road', 'Venjaramoodu', 'Near eye care hospital venjaramoodu', 657878, '8765432196', 0, 0x726f6164312e6a7067, '2022-02-26 16:29:14'),
(43, 'Angel', 'Road Department', 'water logging', 'Water logging on cracked roads', 'Ulloor', 'Near spice and tea cofee shop', 657878, '9524321119', 0, 0x726f6164322e6a7067, '2022-02-26 16:31:36'),
(44, 'Angruy', 'Water Department', 'Water Pipe broken', 'Water Pipe broken and water logged on roads causing severe road traffic and accidents', 'sreekaryam', 'near police station', 657878, '8976567898', 3, 0x7761746572312e6a7067, '2022-02-26 16:34:33'),
(45, 'David', 'Garbage Department', 'Firing Garbage', 'Firing Garbage on road side causing environment pollution', 'kattakada', 'near Kims hospital', 698762, '8765432190', 0, 0x676172332e6a706567, '2022-02-26 16:42:20'),
(46, 'Gopika S', 'Water Department', 'Water Pipe broken', 'Water Pipe broken', 'Peroorkada', 'near kstrc terminal', 695003, '8976532111', 2, 0x7761746572322e6a7067, '2022-02-26 16:44:49'),
(47, 'Jai Charan', 'Water Department', 'water logging', 'Water logging due to road cracks digged by kerala water authority for the past 3 months and still not completing works', 'nedumangadu', 'near ksrtc terminal', 695042, '8976567890', 0, 0x7761746572332e6a706567, '2022-02-26 16:48:35'),
(48, 'Jishnu', 'Water Department', 'water pipe leakage', 'water pipe leakage', 'Kudappanakunnu', 'near devi temple', 695043, '8765432190', 0, 0x7761746572342e6a7067, '2022-02-26 16:50:49'),
(49, 'Jishnu', 'Garbage Department', 'Garbage disposal', 'Garbage disposal on road sides by some unknowns near day care having 37 kids ', 'Kudappanakunnu', 'near ambadi day care', 695043, '8765432190', 0, 0x676172322e6a706567, '2022-02-26 16:53:21'),
(50, 'Jishu', 'Electricity Department', 'Transformer is in danger', 'Transformer is in danger', 'kochi', 'near infopark', 657878, '9526535250', 0, 0x6b736562312e6a7067, '2022-02-26 16:54:46'),
(51, 'Joy', 'Electricity Department', 'Electric post is in danger', 'Electric post is in danger', 'Vattapara', 'near MyG showroom', 698765, '8976567890', 0, 0x6b7365622e6a7067, '2022-02-26 16:56:31'),
(52, 'Manjima Mohan ', 'Electricity Department', 'Electric post is in danger', 'Electric post is in danger', 'Enikkara', 'near hymart super market ', 657878, '9526535250', 0, 0x6b736562332e6a7067, '2022-02-26 16:58:53'),
(53, 'Meenakshi MS', 'Electricity Department', 'Electric post', 'Replacement of electric post is approved but no action were taken', 'varkala', 'near shiva temple', 698733, '9865456000', 0, 0x6b736562342e6a7067, '2022-02-26 17:01:40'),
(54, 'Mouni Sooraj', 'Road Department', 'road cracks ', 'rain water logging on road cracks', 'ambalamukku', 'near srikrishna temple', 6980708, '87654321666', 0, 0x726f6164342e6a7067, '2022-02-26 17:04:51'),
(55, 'Nidhina J', 'Road Department', 'road breaks and cracks', 'breaks and cracks on road', 'kesavadasapuram', 'near YUV dental clinic', 657500, '8976567899', 0, 0x726f6164352e6a7067, '2022-02-26 17:08:20'),
(56, 'Sachin', 'Road Department', 'Cracks on road', 'breaks and cracks on roads', 'Neyyattinkara', 'near  Akash institution', 698400, '8765432192', 0, 0x726f6164332e6a7067, '2022-02-26 17:11:27'),
(57, 'Sachin', 'Garbage Department', 'Garbage disposal', 'Garbage disposal', 'Karuvatta', 'near  Time institution', 698763, '9976567890', 0, 0x676172342e6a7067, '2022-02-26 17:13:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblcomplaints`
--
ALTER TABLE `tblcomplaints`
  ADD PRIMARY KEY (`complaintNumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblcomplaints`
--
ALTER TABLE `tblcomplaints`
  MODIFY `complaintNumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
