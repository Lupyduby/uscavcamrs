-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2015 at 06:19 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `uscavcamrs`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE IF NOT EXISTS `activity` (
  `Activity_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Activity_Name` varchar(100) DEFAULT NULL,
  `Activity_count` int(11) DEFAULT NULL,
  PRIMARY KEY (`Activity_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `asset`
--

CREATE TABLE IF NOT EXISTS `asset` (
  `Asset_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Campus_ID` int(11) NOT NULL,
  `Hall_ID` int(11) DEFAULT NULL,
  `Asset_Name` varchar(64) NOT NULL,
  `Asset_Brand` varchar(64) NOT NULL,
  `Asset_Serial` varchar(16) NOT NULL,
  `Asset_Remarks` varchar(64) NOT NULL,
  `Asset_Quantity` int(11) NOT NULL,
  PRIMARY KEY (`Asset_ID`),
  UNIQUE KEY `Asset_ID` (`Asset_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `campus`
--

CREATE TABLE IF NOT EXISTS `campus` (
  `Campus_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Campus_name` text NOT NULL,
  `Campus_address` text NOT NULL,
  PRIMARY KEY (`Campus_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hall`
--

CREATE TABLE IF NOT EXISTS `hall` (
  `Hall_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Campus_ID` int(11) DEFAULT NULL,
  `Hall_Name` varchar(100) DEFAULT NULL,
  `Hall_Capacity` int(11) DEFAULT NULL,
  `Hall_Status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Hall_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE IF NOT EXISTS `person` (
  `Person_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Person_Username` varchar(50) DEFAULT NULL,
  `Person_Password` varchar(50) DEFAULT NULL,
  `Person_Fname` varchar(50) DEFAULT NULL,
  `Person_Lname` varchar(50) DEFAULT NULL,
  `Person_Email` varchar(50) DEFAULT NULL,
  `Person_type` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Person_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`Person_ID`, `Person_Username`, `Person_Password`, `Person_Fname`, `Person_Lname`, `Person_Email`, `Person_type`) VALUES
(1, 'cobi', '21128', 'Cobi', 'Lupyduby', 'char@gmail.com', 'Faculty'),
(2, 'VPA', '1234', 'Fr. VPA', 'Approver', 'approvevpaa@gmail.com', 'VPA'),
(3, 'VPAA', '1234', 'Fr. VPAA', 'Approver', 'approvevpaa@gmail.com', 'VPAA'),
(4, 'Dean', '1234', 'Mr. Dean', 'Endorser', 'endorseDean@gmail.com', 'Dean'),
(5, 'OSA', '1234', 'Mr. OSA', 'Endorser', 'endorseosa@gmail.com', 'OSA'),
(6, 'staff', '1234', 'Staff', 'Staff', 'staff@gmail.com', 'Staff'),
(7, 'ws', '1234', 'WS', 'WS', 'ws@gmail.com', 'WS');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `Reservation_ID` int(11) NOT NULL DEFAULT '0',
  `Person_ID` int(11) DEFAULT NULL,
  `Hall_ID` int(11) DEFAULT NULL,
  `Campus_ID` int(11) DEFAULT NULL,
  `Activity_ID` int(11) DEFAULT NULL,
  `Reservation_timeStart` time DEFAULT NULL,
  `Reservation_timeEnd` time DEFAULT NULL,
  `WorkingStudent_ID` int(11) DEFAULT NULL,
  `Endorsement_ID` int(11) DEFAULT NULL,
  `Approval_ID` int(11) DEFAULT NULL,
  `Reservation__Endorse_Status` varchar(16) NOT NULL DEFAULT 'Pending',
  `Reservation_Approve_Status` varchar(16) NOT NULL DEFAULT 'Pending',
  PRIMARY KEY (`Reservation_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `softwares`
--

CREATE TABLE IF NOT EXISTS `softwares` (
  `Software_ID` int(11) NOT NULL DEFAULT '0',
  `Person_ID` int(11) DEFAULT NULL,
  `Campus_ID` int(11) DEFAULT NULL,
  `Software_title` varchar(64) DEFAULT NULL,
  `Software_runningTime` varchar(50) DEFAULT NULL,
  `Software_Code` varchar(16) DEFAULT NULL,
  `Software_Year` year(4) DEFAULT NULL,
  `Software_Quantity` int(11) DEFAULT NULL,
  `Software_Subject` varchar(16) NOT NULL,
  `Software_Remarks` varchar(64) NOT NULL,
  `Software_Status` varchar(50) DEFAULT 'Available',
  PRIMARY KEY (`Software_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `Staff_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Person_ID` int(11) DEFAULT NULL,
  `Campus_ID` int(11) DEFAULT NULL,
  `Staff_Position` text,
  PRIMARY KEY (`Staff_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`Staff_ID`, `Person_ID`, `Campus_ID`, `Staff_Position`) VALUES
(1, 6, 4, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `studentorg`
--

CREATE TABLE IF NOT EXISTS `studentorg` (
  `SO_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Person_ID` int(11) DEFAULT NULL,
  `SO_Type` varchar(50) DEFAULT NULL,
  `SO_Name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`SO_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `User_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Person_ID` int(11) DEFAULT NULL,
  `Campus_ID` int(11) DEFAULT NULL,
  `User_college` varchar(64) DEFAULT NULL,
  `User_Office_Name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`User_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_ID`, `Person_ID`, `Campus_ID`, `User_college`, `User_Office_Name`) VALUES
(1, 1, 1, '1', NULL),
(2, 2, 4, NULL, NULL),
(3, 3, 4, NULL, NULL),
(4, 4, 4, '1', NULL),
(5, 5, 4, '1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `workingstudent`
--

CREATE TABLE IF NOT EXISTS `workingstudent` (
  `WorkingStudent_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Person_ID` int(16) DEFAULT NULL,
  `Campus_ID` int(16) DEFAULT NULL,
  `Hall_ID` int(16) DEFAULT NULL,
  `WorkingStudent_Duty_Time_In` time DEFAULT NULL,
  `WorkingStudent_Duty_Time_Out` time DEFAULT NULL,
  PRIMARY KEY (`WorkingStudent_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `workingstudent`
--

INSERT INTO `workingstudent` (`WorkingStudent_ID`, `Person_ID`, `Campus_ID`, `Hall_ID`, `WorkingStudent_Duty_Time_In`, `WorkingStudent_Duty_Time_Out`) VALUES
(1, 7, 1, 1, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
