-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2019 at 04:46 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `calendar`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `color` varchar(7) DEFAULT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL,
  `presidentid` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `place` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `color`, `start`, `end`, `presidentid`, `description`, `place`) VALUES
(1, 'All Day Event', '#40E0D0', '2016-01-01 00:00:00', '0000-00-00 00:00:00', 0, '', ''),
(2, 'Long Event', '#FF0000', '2016-01-07 00:00:00', '2016-01-10 00:00:00', 0, '', ''),
(3, 'Repeating Event', '#0071c5', '2016-01-09 16:00:00', '0000-00-00 00:00:00', 0, '', ''),
(4, 'Conference', '#40E0D0', '2016-01-11 00:00:00', '2016-01-13 00:00:00', 0, '', ''),
(5, 'Meeting', '#000', '2016-01-12 10:30:00', '2016-01-12 12:30:00', 0, '', ''),
(6, 'Lunch', '#0071c5', '2016-01-12 12:00:00', '0000-00-00 00:00:00', 0, '', ''),
(7, 'Happy Hour', '#0071c5', '2016-01-12 17:30:00', '0000-00-00 00:00:00', 0, '', ''),
(8, 'Dinner', '#0071c5', '2016-01-12 20:00:00', '0000-00-00 00:00:00', 0, '', ''),
(9, 'Birthday Party', '#FFD700', '2016-01-14 07:00:00', '2016-01-14 07:00:00', 0, '', ''),
(10, 'Double click to change', '#008000', '2016-01-28 00:00:00', '0000-00-00 00:00:00', 0, '', ''),
(21, 'เปิดงาน', '#FF8C00', '2019-05-15 12:00:00', '2019-05-15 13:00:00', 1, 'เปิดงานที่หอกาญ', 'หอกาญ'),
(22, 'asd', '#008000', '2019-05-16 09:00:00', '2019-05-16 10:00:00', 1, 'asd', 'asd'),
(24, 'president2', '#40E0D0', '2019-05-17 08:00:00', '2019-05-17 09:00:00', 2, '', ''),
(25, 'president3', '#FF0000', '2019-05-18 07:00:00', '2019-05-18 08:00:00', 3, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `president`
--

CREATE TABLE `president` (
  `presidentid` int(5) NOT NULL,
  `presidentname` varchar(500) NOT NULL,
  `position` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `president`
--

INSERT INTO `president` (`presidentid`, `presidentname`, `position`) VALUES
(1, 'จันทโชติ ธรรมสาร', 'นายกรัฐมนตรี'),
(2, 'ฐิติพงศ์ สุริยะไกร', 'รองนายกรัฐมนตรี'),
(3, 'พงษ์ระวี เวียนศรี', 'ประธานบริหาร'),
(4, 'ติณห์ ผุยคำพิ', 'รองประธานบริหาร');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(3) NOT NULL,
  `name_surname` varchar(50) NOT NULL,
  `username` varchar(13) NOT NULL,
  `password` varchar(10) NOT NULL,
  `department` varchar(50) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `type` varchar(2) NOT NULL,
  `presidentid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `name_surname`, `username`, `password`, `department`, `tel`, `type`, `presidentid`) VALUES
(1, 'จันทโชติ ธรรมสาร', 'admin1', '1234', 'IT', '0923956498', '1', 1),
(2, 'กิตตินันท์ คนสอน', 'staff1', '1234', 'IT', '0965059567', '1', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `president`
--
ALTER TABLE `president`
  ADD PRIMARY KEY (`presidentid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `president`
--
ALTER TABLE `president`
  MODIFY `presidentid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
