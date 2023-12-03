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
-- Database: `my website`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `userpassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `userpassword`) VALUES
(1, 'laksh', 'laksh2111');

-- --------------------------------------------------------

--
-- Table structure for table `tblartwork`
--

CREATE TABLE `tblartwork` (
  `id` int(11) NOT NULL,
  `Aname` varchar(100) NOT NULL,
  `Aprize` varchar(100) NOT NULL,
  `Aimage` varchar(200) NOT NULL,
  `ACategory` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblartwork`
--

INSERT INTO `tblartwork` (`id`, `Aname`, `Aprize`, `Aimage`, `ACategory`) VALUES
(2, 'Sonu Sood', '150/-', 'uploadimage/sketch-2.jpg', ' Sketches'),
(3, 'Sushant Singh Rajput', '100/-', 'uploadimage/sketch-3.jpg', ' Sketches'),
(4, 'Darshan Raval', '200/-', 'uploadimage/sketch-4.jpg', ' Sketches'),
(5, 'Siddharth Nigam', '100', 'uploadimage/sketch-5.jpg', ' Sketches'),
(6, 'Irfan Khan', '200/-', 'uploadimage/sketch-6.jpg', ' Sketches'),
(7, 'Siddharth Malhotra', '1000/-', 'uploadimage/sketch-8.jpg', ' Sketches'),
(8, 'Horse Painting', '200/-', 'uploadimage/paint-1.jpg', ' painting'),
(9, 'Modern Art Painting', '500/-', 'uploadimage/paint-2.jpg', ' painting'),
(12, 'Scenery', '200/-', 'uploadimage/paint-3.jpg', ' painting'),
(13, 'Pot painting1', '200/-', 'uploadimage/paint-4.jpg', ' painting'),
(14, 'Pot painting2', '200/-', 'uploadimage/paint-5.jpg', ' painting'),
(16, 'Liquid Cube', '150/-', 'uploadimage/creative-1.jpg', ' creative'),
(17, 'Broken Heart', '200/-', 'uploadimage/creative-2.jpg', ' creative'),
(18, 'Mixed Creature', '200/-', 'uploadimage/creative-3.jpg', ' creative'),
(19, 'Feather ', '200/-', 'uploadimage/creative-4.jpg', ' creative'),
(20, 'Nature', '200/-', 'uploadimage/creative-5.jpg', ' creative'),
(21, 'Face art', '300/-', 'uploadimage/creative-6.jpg', ' creative'),
(22, 'Eyes', '100/-', 'uploadimage/pen-1.jpg', ' pen'),
(23, 'Mixed Face', '250/-', 'uploadimage/pen-2.jpg', ' pen'),
(24, 'Scenery', '100/-', 'uploadimage/pen-3.jpg', ' pen'),
(25, 'Dress', '100/-', 'uploadimage/pen-5.jpg', ' pen'),
(26, 'Rose', '200/-', 'uploadimage/pen-6.jpg', ' pen'),
(27, 'Dil Bechara', '2000/-', 'uploadimage/sketch.jpg', ' sketches');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblartwork`
--
ALTER TABLE `tblartwork`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblartwork`
--
ALTER TABLE `tblartwork`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
