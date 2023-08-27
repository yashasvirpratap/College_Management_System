-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Mar 22, 2022 at 08:26 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `ID` int(11) NOT NULL,
  `User` varchar(50) NOT NULL,
  `Pass` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`ID`, `User`, `Pass`, `usertype`) VALUES
(1, 'admin@dsatm', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `ldate` varchar(50) NOT NULL,
  `adate` varchar(50) NOT NULL,
  `reason` text NOT NULL,
  `status` text NOT NULL DEFAULT 'Pending',
  `usertype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`ldate`, `adate`, `reason`, `status`, `usertype`) VALUES
('2022-03-24', '3', 'Sick', 'Rejected', 'prakash@dsatm');

-- --------------------------------------------------------

--
-- Table structure for table `teacherlogin`
--

CREATE TABLE `teacherlogin` (
  `ID` int(11) NOT NULL,
  `User` varchar(50) NOT NULL,
  `Pass` varchar(50) NOT NULL,
  `First` text NOT NULL,
  `Last` text NOT NULL,
  `Gender` text NOT NULL,
  `department` text NOT NULL,
  `subject` varchar(200) NOT NULL,
  `salary` int(11) NOT NULL,
  `usertype` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacherlogin`
--

INSERT INTO `teacherlogin` (`ID`, `User`, `Pass`, `First`, `Last`, `Gender`, `department`, `subject`, `salary`, `usertype`) VALUES
(1, 'prakash@dsatm', 'prakash', 'Prakash', 'Dubey', 'Male', 'Computer Science', 'CN', 300000, 'user'),
(2, 'riya@dsatm', 'riya', 'Riya', 'Dubey', 'Female', 'Electrical and Communication', 'CN', 200000, 'user'),
(3, 'keerthi@dsatm', 'keerthi', 'Keerti', 'Patil', 'Female', 'Information Science', 'DBMS', 200000, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `ID` int(11) NOT NULL,
  `class_name` varchar(50) NOT NULL,
  `timing` varchar(50) NOT NULL,
  `day` text NOT NULL,
  `subject` varchar(50) NOT NULL,
  `room_no` int(11) NOT NULL,
  `usertype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`ID`, `class_name`, `timing`, `day`, `subject`, `room_no`, `usertype`) VALUES
(1001, 'CSE5', '14:00', 'Monday', 'DBMS', 303, 'prakash@dsatm'),
(2002, 'ISE6', '10:30', 'Tuesday', 'CN', 202, 'riya@dsatm'),
(3003, 'ECE6', '9:30', 'Monday', 'CN', 202, 'riya@dsatm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `teacherlogin`
--
ALTER TABLE `teacherlogin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teacherlogin`
--
ALTER TABLE `teacherlogin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3004;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
