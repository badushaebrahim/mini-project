-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2021 at 07:00 PM
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
-- Table structure for table `classpool`
--

CREATE TABLE `classpool` (
  `sujectname` text NOT NULL,
  `sibjectid` int(11) NOT NULL,
  `createdby` int(11) NOT NULL,
  `timeofcls` datetime NOT NULL,
  `timeofclose` datetime NOT NULL,
  `crid` int(11) NOT NULL,
  `statusofcls` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `facnotifpool`
--

CREATE TABLE `facnotifpool` (
  `about` text NOT NULL,
  `coresponding` text NOT NULL,
  `from` int(11) NOT NULL,
  `fnid` int(11) NOT NULL,
  `madeat` datetime NOT NULL,
  `stat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `sendertype` int(11) NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msgholder`
--

INSERT INTO `msgholder` (`senterid`, `reciverid`, `message`, `status`, `sendertype`, `uid`) VALUES
(0, 1, 'hello', '0', 2, 1),
(0, 1, 'hello', '0', 2, 2),
(3, 1, 'test3', '0', 2, 3),
(1, 1, 'test parent', '2', 3, 5),
(1, 5, 'badu test', '3', 3, 6);

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
('par', 'male', 'par@par.com', 'Badu@123', 3, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `questholer`
--

CREATE TABLE `questholer` (
  `examid` int(11) NOT NULL,
  `question` text NOT NULL,
  `op1` text NOT NULL,
  `op2` text NOT NULL,
  `op3` text NOT NULL,
  `op4` text NOT NULL,
  `answer` text NOT NULL,
  `questionid` int(11) NOT NULL,
  `connter` int(11) NOT NULL
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
('EBRAHIM', '2021-06-04', 'male', 'badushaebrahim62@gmail.com', 'asdgs@!!@122qqqq', 4),
('EBRAHIM BADUSHA O A', '2021-06-10', 'male', 'demo@demo.com', 'MMMmmm@123', 5),
('godwin', '2021-05-21', 'male', 'godw@gmail.com', 'buck@123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `stuentnotificpoll`
--

CREATE TABLE `stuentnotificpoll` (
  `about` text NOT NULL,
  `corespondinglink` text NOT NULL,
  `addedby` int(11) NOT NULL,
  `snid` int(11) NOT NULL,
  `madeat` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, '3', '1', '2021-09-14 10:33:44', 12),
(2, '3', '1', '2021-09-14 17:48:25', 12),
(3, '3', '2', '2021-09-14 20:52:05', 1),
(4, '3', '1', '2021-09-14 21:22:08', 9),
(5, '3', '1', '2021-09-14 21:43:26', 7),
(6, '3', '1', '2021-09-14 21:53:48', 10),
(7, '3', '2', '2021-09-15 09:40:39', 1),
(8, '3', '1', '2021-09-24 09:33:51', 13),
(9, '3', '2', '2021-09-24 22:22:28', 1);

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
('php', 1, 1),
('COA', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbltime`
--

CREATE TABLE `tbltime` (
  `tttime` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltime`
--

INSERT INTO `tbltime` (`tttime`) VALUES
(10);

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
(1, 'what is php', 'programming language', 'verbal language', 'age of person', 'headache', 'programming language', 1),
(1, 'what is its use', 'for web dev', 'for making games', 'for writing', 'for show', 'for web dev', 2),
(1, 'What is a session in PHP? ', 'it is used to pass data', 'used to make a cake', 'pass ideas', 'song holder', 'it is used to pass data', 3),
(2, 'what is coa', 'computer architecture ', 'cost assist', 'code assistant', 'cod', 'computer architecture ', 4),
(2, 'pick a cpu architecture', 'x64', 'rsic', 'ARM', 'ALL the above', 'ALL the above', 5),
(3, 'what is variable', 'a thing used to store data', 'a box', 'a crate', 'a job', 'a thing used to store data', 6),
(3, 'what is a constant', 'a non editable value', 'a show', 'a rock ', 'a story', 'a non editable value', 7),
(3, 'which is better js or php', 'php', 'both', 'js', 'none', 'both', 8),
(1, 'what is $var', 'variable ', 'loop', 'condition statement', 'break', 'variable ', 9),
(1, 'can php have oop concepts', 'yes', 'no', 'mabye', 'mnight', 'yes', 10),
(1, 'what is $a[]={1,2,3}', 'is array', 'is string', 'is integer', 'is null', 'is array', 11),
(1, 'What are the popular frameworks in PHP?', 'CakePHP', 'react js', 'mediapipe', 'chart js', 'CakePHP', 12),
(1, 'List some of the features of PHP7.', 'Scalar type declarations', 'Constant arrays using define()', 'Anonymous classes', 'All the above', 'All the above', 13),
(1, 'How many types of array are there in PHP', 'Indexed array', 'Associative array', 'Multidimensional array', 'all the Above', 'all the Above', 14),
(1, 'Explain some of the PHP array functions?', 'count()', 'map()', 'toString()', 'isNullable()', 'count()', 15),
(1, 'How to get the length of string?', 'strlen() ', 'Stringlenth()', 'SizeofString()', 'Strlengths()', 'strlen() ', 16);

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
(5),
(4);

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
('test', 1, 10, 1),
('test coa', 2, 10, 2),
('neo', 1, 10, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admlog`
--
ALTER TABLE `admlog`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `classpool`
--
ALTER TABLE `classpool`
  ADD PRIMARY KEY (`crid`);

--
-- Indexes for table `faclog`
--
ALTER TABLE `faclog`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `tid` (`tid`);

--
-- Indexes for table `facnotifpool`
--
ALTER TABLE `facnotifpool`
  ADD PRIMARY KEY (`fnid`);

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
-- Indexes for table `parentlog`
--
ALTER TABLE `parentlog`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `questholer`
--
ALTER TABLE `questholer`
  ADD PRIMARY KEY (`connter`);

--
-- Indexes for table `studlog`
--
ALTER TABLE `studlog`
  ADD PRIMARY KEY (`email`(150)),
  ADD UNIQUE KEY `uid` (`uid`);

--
-- Indexes for table `stuentnotificpoll`
--
ALTER TABLE `stuentnotificpoll`
  ADD PRIMARY KEY (`snid`);

--
-- Indexes for table `tblresult`
--
ALTER TABLE `tblresult`
  ADD PRIMARY KEY (`resultid`);

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
-- AUTO_INCREMENT for table `classpool`
--
ALTER TABLE `classpool`
  MODIFY `crid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faclog`
--
ALTER TABLE `faclog`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'AUTO_INCRIMRNT', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `facnotifpool`
--
ALTER TABLE `facnotifpool`
  MODIFY `fnid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feadlog`
--
ALTER TABLE `feadlog`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `msgholder`
--
ALTER TABLE `msgholder`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `parentlog`
--
ALTER TABLE `parentlog`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `questholer`
--
ALTER TABLE `questholer`
  MODIFY `connter` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `studlog`
--
ALTER TABLE `studlog`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `stuentnotificpoll`
--
ALTER TABLE `stuentnotificpoll`
  MODIFY `snid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblresult`
--
ALTER TABLE `tblresult`
  MODIFY `resultid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblsubject`
--
ALTER TABLE `tblsubject`
  MODIFY `sid2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbquestion`
--
ALTER TABLE `tbquestion`
  MODIFY `questionid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tlbexam`
--
ALTER TABLE `tlbexam`
  MODIFY `examid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;