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
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `Reg_id` int(25) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Phone` varchar(14) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`Reg_id`, `Username`, `Email`, `Phone`, `Password`) VALUES
(30, 'Ajith Menon', 'ajithmen@gmail.com', '04719878765', 'menona'),
(1, 'Angel', 'angel@gmail.com', '7654321789', 'angel99'),
(2, 'Angruy', 'angruy@gmail.com', '7654321789', 'angruy7056'),
(3, 'Chandra S', 'chandra@gmail.com', '9993456789', 'chandra04'),
(4, 'David', 'david@gmail.com', '9876543212', 'david80'),
(18, 'Gopika S', 'gopikas123@gmail.com', '9786756454', 'supergopika'),
(25, 'Jai Charan', 'jaicharan@gmail.com', '7896543210', 'jaicha'),
(6, 'Jishnu', 'jishnu@gmail.com', '876543212', 'jishnu02'),
(7, 'Jishu', 'jishu@gmail.com', '9876543212', 'jishu02'),
(15, 'Joy', 'joy@gmail.com', '8765432190', 'joy70'),
(23, 'Manjima Mohan ', 'manjimamohan@gmail.com', '04715679874', 'manjimaghj'),
(17, 'Meenakshi MS', 'meena@gmail.com', '04712384567', 'meena99'),
(19, 'Meenu L.V', 'meenulv6@gmail.com', '9123405678', 'meenupoli'),
(29, 'Mouni Sooraj', 'mounisrj@gmail.com', '7676785940', 'srjmouni'),
(20, 'Nidhina J', 'nidhinaj00@gmail.com', '04712345678', 'nidhinamol'),
(26, 'Pandit Rahul', 'panditra@gmail.com', '8796574301', 'prahul'),
(27, 'Rajisha Nambiar', 'rajishan@gmail.com', '8679543200', 'rajinam'),
(22, 'Raman Manohar', 'raman@gmail.com', '9871236540', 'nanraman'),
(9, 'Sachin', 'sachin@gmail.com', '9993456876', 'sachin80'),
(21, 'Samantha R', 'samanthar456@gmail.com', '04719876543', 'samghj'),
(10, 'Sarath', 'sarath@gmail.com', '9993456876', 'sarath80'),
(28, 'Sheela Kumari', 'sheelak56@gmail.com', '04715678943', 'polisheela'),
(16, 'Suresh Kumar', 'suresh@gmail.com', '9878987890', 'Suresh70'),
(13, 'Surya S', 'surya@gmail.com', '9993456789', 'surya99'),
(14, 'Vishnu', 'vishnu@gmail.com', '9993456876', 'vishnu99'),
(24, 'Yasudheen Rahman', 'yasudheenr@gmail.com', '04712731192', 'yasurocks');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`Username`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Sl.no` (`Reg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `Reg_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
