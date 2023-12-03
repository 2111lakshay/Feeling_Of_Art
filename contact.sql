-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2022 at 01:32 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contact`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `message` text DEFAULT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `first_name`, `last_name`, `email`, `phone`, `message`, `datetime`, `status`) VALUES
(3, 'Lakshay', 'Jatawat', 'lakshayjatawat2003@gmail.com', '+9173853753', '', '2022-01-22 17:21:30', 1),
(4, 'Lakshay', 'Jatawat', 'lakshayjatawat2003@gmail.com', '+9173853753', '', '2022-01-22 17:22:35', 1),
(5, 'Lakshay', 'Jatawat', 'lakshayjatawat2003@gmail.com', '+9173853753', '', '2022-01-22 17:25:32', 1),
(6, 'Lakshay', 'Jatawat', 'lakshayjatawat2003@gmail.com', '+9173853753', 'hello', '2022-01-22 17:34:20', 1),
(7, 'Lakshay', 'Jatawat', 'lakshayjatawat2003@gmail.com', '+9173853753', 'hello', '2022-01-22 17:36:48', 1),
(8, 'Lakshay', 'Jatawat', 'lakshayjatawat2003@gmail.com', '+9173853753', 'hello', '2022-01-22 17:37:23', 1),
(9, 'Lakshay', 'Jatawat', 'lakshayjatawat2003@gmail.com', '+9173853753', 'A/201,Sai dham co-operative housing soc., samarth ramdas nagar, navghar, vasai road east', '2022-01-22 17:37:44', 1),
(10, 'Lakshay', 'Jatawat', 'lakshayjatawat2003@gmail.com', '+9173853753', 'A/201,Sai dham co-operative housing soc., samarth ramdas nagar, navghar, vasai road east', '2022-01-22 17:39:24', 1),
(11, 'Lakshay', 'Jatawat', 'lakshayjatawat2003@gmail.com', '+9173853753', 'A/201,Sai dham co-operative housing soc., samarth ramdas nagar, navghar, vasai road east', '2022-01-22 17:39:31', 1),
(12, 'Lakshay', 'Jatawat', 'lakshayjatawat2003@gmail.com', '+9194053732', 'A/201,Sai dham co-operative housing soc., samarth ramdas nagar, navghar, vasai road east', '2022-01-22 17:40:15', 1),
(13, 'Lakshay', 'Jatawat', 'lakshayjatawat2003@gmail.com', '+9173853753', 'A/201,Sai dham co-operative housing soc., samarth ramdas nagar, navghar, vasai road east', '2022-01-22 17:44:06', 1),
(14, 'Lakshay', 'Jatawat', 'lakshayjatawat2003@gmail.com', '+9173853753', 'A/201,Sai dham co-operative housing soc., samarth ramdas nagar, navghar, vasai road east', '2022-01-22 17:44:38', 1),
(15, 'Lakshay', 'Jatawat', 'lakshayjatawat2003@gmail.com', '+9173853753', 'A/201,Sai dham co-operative housing soc., samarth ramdas nagar, navghar, vasai road east', '2022-01-22 17:44:49', 1),
(16, 'Lakshay', 'Jatawat', 'lakshayjatawat2003@gmail.com', '+9173853753', 'A/201,Sai dham co-operative housing soc., samarth ramdas nagar, navghar, vasai road east', '2022-01-22 17:45:21', 1),
(17, 'Lakshay', 'Jatawat', 'lakshayjatawat2003@gmail.com', '+9173853753', 'A/201,Sai dham co-operative housing soc., samarth ramdas nagar, navghar, vasai road east', '2022-01-22 17:45:33', 1),
(18, 'Lakshay', 'Jatawat', 'lakshayjatawat2003@gmail.com', '+9173853753', '1319\r\nKUNDAN NAGAR', '2022-01-22 17:47:51', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
