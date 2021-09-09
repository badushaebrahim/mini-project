-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2021 at 12:36 PM
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
-- Table structure for table `admlog`
--

CREATE TABLE `admlog` (
  `email` varchar(150) NOT NULL,
  `pwds` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admlog`
--

INSERT INTO `admlog` (`email`, `pwds`) VALUES
('admin@admin.com', '123456789');

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

--
-- Dumping data for table `faclog`
--

INSERT INTO `faclog` (`name`, `gender`, `dob`, `email`, `paswd`, `post`, `tid`) VALUES
('et', 'male', '2021-07-10', 'et@et.com', 'Et@1231234', 'Profeser', 1);

-- --------------------------------------------------------

--
-- Table structure for table `feadlog`
--

CREATE TABLE `feadlog` (
  `email` text NOT NULL,
  `fed` text NOT NULL,
  `fid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feadlog`
--

INSERT INTO `feadlog` (`email`, `fed`, `fid`) VALUES
('test@gmail.com', 'sgiashgjafngjksangjkxfnjbdnkbjnzxjkbndfkjgbnxfkjbnjkfxbnkjzxfnbjkxnbjknxf;bnzxijbnjkdbnkjxfnbkjzndxbjknxkj', 1),
('et@et.com', 'this ', 2);

-- --------------------------------------------------------

--
-- Table structure for table `msgholder`
--

CREATE TABLE `msgholder` (
  `senterid` int(11) NOT NULL,
  `reciverid` int(11) NOT NULL,
  `message` text NOT NULL,
  `status` text NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msgholder`
--

INSERT INTO `msgholder` (`senterid`, `reciverid`, `message`, `status`, `uid`) VALUES
(3, 1, 'thsi shit wrk', '0', 1),
(3, 1, 'thsi shit wrk', '0', 2),
(3, 1, 'thsi shit wrk', '0', 3),
(3, 1, 'dsg', '0', 4),
(3, 1, 'dsg', '0', 5),
(3, 1, 'dsg', '0', 6),
(3, 1, 'fgnfgj', '0', 7);

-- --------------------------------------------------------

--
-- Table structure for table `parentlog`
--

CREATE TABLE `parentlog` (
  `name` text NOT NULL,
  `gender` text NOT NULL,
  `email` varchar(150) NOT NULL,
  `pass` text NOT NULL,
  `childname` int(11) NOT NULL,
  `addedby` int(11) NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parentlog`
--

INSERT INTO `parentlog` (`name`, `gender`, `email`, `pass`, `childname`, `addedby`, `pid`) VALUES
('par', 'male', 'par@par.com', 'Badu@123', 3, 0, 0);

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
('EBRAHIM', '2021-06-04', 'male', 'badushaebrahim62@gmail.com', 'asdgs@!!@122qqqq', 4),
('EBRAHIM BADUSHA O A', '2021-06-10', 'male', 'demo@demo.com', 'MMMmmm@123', 5),
('godwin', '2021-05-21', 'male', 'godw@gmail.com', 'buck@123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblresult`
--

CREATE TABLE `tblresult` (
  `resultid` int(11) NOT NULL,
  `userid` text NOT NULL,
  `examid` text NOT NULL,
  `examdate` datetime NOT NULL,
  `mark` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblresult`
--

INSERT INTO `tblresult` (`resultid`, `userid`, `examid`, `examdate`, `mark`) VALUES
(0, '3', '3', '2021-09-09 16:04:14', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblsubject`
--

CREATE TABLE `tblsubject` (
  `subjectname` text NOT NULL,
  `addedby` int(11) NOT NULL,
  `sid2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsubject`
--

INSERT INTO `tblsubject` (`subjectname`, `addedby`, `sid2`) VALUES
('php', 0, 1),
('COA', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbltime`
--

CREATE TABLE `tbltime` (
  `tttime` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbquestion`
--

CREATE TABLE `tbquestion` (
  `examid` int(11) NOT NULL,
  `question` text NOT NULL,
  `op1` text NOT NULL,
  `op2` text NOT NULL,
  `op3` text NOT NULL,
  `op4` text NOT NULL,
  `answer` text NOT NULL,
  `questionid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbquestion`
--

INSERT INTO `tbquestion` (`examid`, `question`, `op1`, `op2`, `op3`, `op4`, `answer`, `questionid`) VALUES
(1, 'what is php', 'web programing language', 'food', 'medecine', 'headace', 'web programing language', 1),
(2, 'coa full form', 'computer assistant', 'consumer assitant', 'computer architecture ', 'cost actor', 'computer architecture ', 2);

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `qid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp`
--

INSERT INTO `temp` (`qid`) VALUES
(0);

-- --------------------------------------------------------

--
-- Table structure for table `tlbexam`
--

CREATE TABLE `tlbexam` (
  `Examname` text NOT NULL,
  `subjectid` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `examid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tlbexam`
--

INSERT INTO `tlbexam` (`Examname`, `subjectid`, `duration`, `examid`) VALUES
('test', 1, 30, 1),
('test coa', 2, 30, 2),
('neo', 1, 15, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admlog`
--
ALTER TABLE `admlog`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `faclog`
--
ALTER TABLE `faclog`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `tid` (`tid`);

--
-- Indexes for table `feadlog`
--
ALTER TABLE `feadlog`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `msgholder`
--
ALTER TABLE `msgholder`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `studlog`
--
ALTER TABLE `studlog`
  ADD PRIMARY KEY (`email`(150)),
  ADD UNIQUE KEY `uid` (`uid`);

--
-- Indexes for table `tblsubject`
--
ALTER TABLE `tblsubject`
  ADD PRIMARY KEY (`sid2`);

--
-- Indexes for table `tbquestion`
--
ALTER TABLE `tbquestion`
  ADD PRIMARY KEY (`questionid`);

--
-- Indexes for table `tlbexam`
--
ALTER TABLE `tlbexam`
  ADD PRIMARY KEY (`examid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faclog`
--
ALTER TABLE `faclog`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'AUTO_INCRIMRNT', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feadlog`
--
ALTER TABLE `feadlog`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `msgholder`
--
ALTER TABLE `msgholder`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `studlog`
--
ALTER TABLE `studlog`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblsubject`
--
ALTER TABLE `tblsubject`
  MODIFY `sid2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbquestion`
--
ALTER TABLE `tbquestion`
  MODIFY `questionid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tlbexam`
--
ALTER TABLE `tlbexam`
  MODIFY `examid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
