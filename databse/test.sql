-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2021 at 07:56 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `faclog`
--

CREATE TABLE `faclog` (
  `name` text NOT NULL,
  `gender` text NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(150) NOT NULL,
  `paswd` text NOT NULL,
  `post` text NOT NULL,
  `tid` int(11) NOT NULL COMMENT 'AUTO_INCRIMRNT'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `msgholder`
--

CREATE TABLE `msgholder` (
  `senterid` int(11) NOT NULL,
  `reciverid` int(11) NOT NULL,
  `message` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `parentlog`
--

CREATE TABLE `parentlog` (
  `name` text NOT NULL,
  `gender` text NOT NULL,
  `email` varchar(150) NOT NULL,
  `pass` text NOT NULL,
  `childname` text NOT NULL,
  `addedby` text NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studlog`
--

CREATE TABLE `studlog` (
  `name` text NOT NULL,
  `dob` date NOT NULL,
  `gender` text NOT NULL,
  `email` text NOT NULL,
  `pwd` text NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studlog`
--

INSERT INTO `studlog` (`name`, `dob`, `gender`, `email`, `pwd`, `uid`) VALUES
('badu', '2021-05-21', 'male', 'badu12@gmail.com', 'mok@123', 3),
('EBRAHIM BADUSHA O A', '2021-06-04', 'male', 'badushaebrahim62@gmail.com', 'asdgs@!!@122qqqq', 4),
('EBRAHIM BADUSHA O A', '2021-06-10', 'male', 'demo@demo.com', 'MMMmmm@123', 5),
('godwin', '2021-05-21', 'male', 'godw@gmail.com', 'buck@123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faclog`
--
ALTER TABLE `faclog`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `tid` (`tid`);

--
-- Indexes for table `parentlog`
--
ALTER TABLE `parentlog`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `pid` (`pid`);

--
-- Indexes for table `studlog`
--
ALTER TABLE `studlog`
  ADD PRIMARY KEY (`email`(150)),
  ADD UNIQUE KEY `uid` (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faclog`
--
ALTER TABLE `faclog`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'AUTO_INCRIMRNT';

--
-- AUTO_INCREMENT for table `parentlog`
--
ALTER TABLE `parentlog`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `studlog`
--
ALTER TABLE `studlog`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
