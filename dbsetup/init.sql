CREATE DATABASE IF NOT EXISTS test;
/* CREATE DATABASE IF NOT EXISTS test; */
USE test;
-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2021 at 11:17 AM
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
  `timeofcls` datetime NOT NULL DEFAULT current_timestamp(),
  `timeofclose` datetime NOT NULL,
  `statusofcls` int(1) NOT NULL,
  `crid` int(11) NOT NULL,
  `gcls` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classpool`
--

INSERT INTO `classpool` (`sujectname`, `sibjectid`, `createdby`, `timeofcls`, `timeofclose`, `statusofcls`, `crid`, `gcls`) VALUES
('test', 1, 1, '2021-10-14 14:23:00', '2021-10-14 14:40:00', 2, 1, 'https://meet.google.com/kec-wofv-bxh'),
('notfi', 1, 1, '2021-10-21 19:11:00', '2021-10-21 19:13:00', 2, 2, 'https://meet.google.com/ndi-rfhi-wmx'),
('as', 1, 1, '2021-10-21 19:12:00', '2021-10-21 19:15:00', 2, 3, 'https://meet.google.com/ndi-rfhi-wmx'),
('testers', 1, 1, '2021-10-22 18:43:00', '2021-10-22 20:07:00', 2, 4, 'https://meet.google.com/ndi-rfhi-wmx'),
('on the way', 1, 1, '2021-10-22 20:10:00', '2021-10-22 20:13:00', 2, 5, 'https://meet.google.com/kec-wofv-bxh');

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
  `tid` int(11) NOT NULL COMMENT 'AUTO_INCRIMRNT',
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faclog`
--

INSERT INTO `faclog` (`name`, `gender`, `dob`, `email`, `paswd`, `post`, `tid`, `status`) VALUES
('et', 'male', '2021-07-10', 'et@et.com', 'Et@1231234', 'Profeser', 1, 0);

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
('et@et.com', 'this ', 2),
('et@et.com', 'hello admin', 3),
('', '', 4),
('godu@gamil.com', 'hello i have question', 5);

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
(1, 1, 'test parent', '2', 3, 5),
(1, 5, 'badu test', '3', 3, 6),
(3, 1, 'hello sir', '0', 2, 7),
(1, 1, 'hello par ', '2', 3, 8),
(1, 1, 'bye', '2', 3, 9),
(3, 1, 'hello et from parent', '0', 2, 10),
(0, 0, 'hello from par', '0', 2, 11),
(0, 0, 'hello gotm parnet', '0', 2, 13),
(0, 1, 'hello gotm parnet', '0', 2, 14),
(0, 1, 'sss', '0', 2, 15),
(0, 1, 'dad', '0', 2, 16),
(0, 1, 'asdasd', '0', 6, 17),
(1, 1, 'hello from', '0', 6, 18),
(1, 1, 'test from parent to fac 19th', '0', 2, 19),
(1, 1, 'to par 19', '2', 6, 20),
(1, 3, 'hello badu 19', '3', 3, 21),
(3, 1, 'hello et miss 19', '0', 1, 22);

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
  `pid` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parentlog`
--

INSERT INTO `parentlog` (`name`, `gender`, `email`, `pass`, `childname`, `addedby`, `pid`, `status`) VALUES
('par', 'male', 'par@par.com', 'Badu@123', 3, 1, 1, 0);

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
-- Table structure for table `studattends`
--

CREATE TABLE `studattends` (
  `clsid` int(11) NOT NULL,
  `studentid` int(11) NOT NULL,
  `time` datetime NOT NULL,
  `gid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studattends`
--

INSERT INTO `studattends` (`clsid`, `studentid`, `time`, `gid`) VALUES
(1, 3, '2021-10-14 14:24:51', 1),
(1, 3, '2021-10-14 14:34:42', 3),
(4, 3, '2021-10-22 19:20:33', 4);

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
  `uid` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studlog`
--

INSERT INTO `studlog` (`name`, `dob`, `gender`, `email`, `pwd`, `uid`, `status`) VALUES
('badu', '2021-05-21', 'male', 'badu12@gmail.com', 'mok@123', 3, 0),
('EBRAHIM', '2021-06-04', 'male', 'badushaebrahim62@gmail.com', 'asdgs@!!@122qqqq', 4, 0),
('EBRAHIM BADUSHA O A', '2021-06-10', 'male', 'demo@demo.com', 'MMMmmm@123', 5, 0),
('godwin', '2021-05-21', 'male', 'godw@gmail.com', 'buck@123', 1, 0);

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

--
-- Dumping data for table `stuentnotificpoll`
--

INSERT INTO `stuentnotificpoll` (`about`, `corespondinglink`, `addedby`, `snid`, `madeat`) VALUES
('New Exam Sheduled', 'searchexam.php', 1, 1, '0000-00-00 00:00:00'),
('New Exam Sheduled', 'searchexam.php', 1, 2, '0000-00-00 00:00:00'),
('NEW CLASS-on the way At strrev(2021-10-22T20:10)', 'studcls.php', 1, 3, '2021-10-22 20:07:14');

-- --------------------------------------------------------

--
-- Table structure for table `tblresult`
--

CREATE TABLE `tblresult` (
  `resultid` int(11) NOT NULL,
  `userid` text NOT NULL,
  `examid` text NOT NULL,
  `examdate` datetime NOT NULL,
  `mark` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblresult`
--

INSERT INTO `tblresult` (`resultid`, `userid`, `examid`, `examdate`, `mark`, `total`) VALUES
(1, '3', '1', '2021-09-14 10:33:44', 12, 10),
(2, '3', '1', '2021-09-14 17:48:25', 12, 0),
(3, '3', '2', '2021-09-14 20:52:05', 1, 0),
(4, '3', '1', '2021-09-14 21:22:08', 9, 0),
(5, '3', '1', '2021-09-14 21:43:26', 7, 0),
(6, '3', '1', '2021-09-14 21:53:48', 10, 0),
(7, '3', '2', '2021-09-15 09:40:39', 1, 0),
(8, '3', '1', '2021-09-24 09:33:51', 13, 0),
(9, '3', '2', '2021-09-24 22:22:28', 1, 0),
(10, '3', '1', '2021-10-09 14:14:06', 8, 0),
(11, '3', '1', '2021-10-11 22:21:22', 11, 11),
(12, '3', '2', '2021-10-11 22:23:26', 1, 0);

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
(1, 'what is php', 'programming language', 'verbal language', 'age of person', 'headache2', 'programming language', 1),
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
(1, 'How to get the length of string?', 'strlen() ', 'Stringlenth()', 'SizeofString()', 'Strlengths()', 'strlen() ', 16),
(4, 'qq', 'q', 'w', 'e', 'r', 'q', 17);

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `qid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
('neo', 1, 10, 3),
('rm', 2, 1, 4),
('notif', 2, 1, 5),
('testfor not', 1, 4, 6);

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
-- Indexes for table `studattends`
--
ALTER TABLE `studattends`
  ADD PRIMARY KEY (`gid`);

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
  MODIFY `crid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `msgholder`
--
ALTER TABLE `msgholder`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `parentlog`
--
ALTER TABLE `parentlog`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `questholer`
--
ALTER TABLE `questholer`
  MODIFY `connter` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `studattends`
--
ALTER TABLE `studattends`
  MODIFY `gid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `studlog`
--
ALTER TABLE `studlog`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `stuentnotificpoll`
--
ALTER TABLE `stuentnotificpoll`
  MODIFY `snid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblresult`
--
ALTER TABLE `tblresult`
  MODIFY `resultid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tblsubject`
--
ALTER TABLE `tblsubject`
  MODIFY `sid2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbquestion`
--
ALTER TABLE `tbquestion`
  MODIFY `questionid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tlbexam`
--
ALTER TABLE `tlbexam`
  MODIFY `examid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


IF NOT EXISTS ('tlbexam'
	);