-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2015 at 11:28 AM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`Activity_ID`, `Activity_Name`, `Activity_count`) VALUES
(1, 'Conference', 0),
(2, 'Video Showing', 0),
(3, 'Seminar', 0),
(4, 'Forum', 0);

-- --------------------------------------------------------

--
-- Table structure for table `asset`
--

CREATE TABLE IF NOT EXISTS `asset` (
  `Asset_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Campus_ID` int(11) NOT NULL,
  `Hall_ID` int(11) DEFAULT '0',
  `Asset_Name` varchar(64) NOT NULL,
  `Asset_Brand` varchar(64) NOT NULL,
  `Asset_Serial` varchar(16) NOT NULL,
  `Asset_Remarks` varchar(64) NOT NULL,
  `Asset_Quantity` int(11) NOT NULL,
  PRIMARY KEY (`Asset_ID`),
  UNIQUE KEY `Asset_ID` (`Asset_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `asset`
--

INSERT INTO `asset` (`Asset_ID`, `Campus_ID`, `Hall_ID`, `Asset_Name`, `Asset_Brand`, `Asset_Serial`, `Asset_Remarks`, `Asset_Quantity`) VALUES
(1, 1, 0, 'pAULO', 'Shaark', '123', 'Functioning', 10),
(2, 4, 0, 'DVD', 'Pioneer', 'asdasdas3132154', 'Functioning', 3),
(4, 4, 0, 'Speaker', 'MartinLogan CLX', '32132a1sdas', 'Functioning', 2),
(7, 1, 0, 'John', '0', '0', '0', 0),
(9, 4, 0, 'Broom', 'N/A', 'N/A', 'Functioning', 1);

-- --------------------------------------------------------

--
-- Table structure for table `campus`
--

CREATE TABLE IF NOT EXISTS `campus` (
  `Campus_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Campus_name` text NOT NULL,
  `Campus_address` text NOT NULL,
  PRIMARY KEY (`Campus_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `campus`
--

INSERT INTO `campus` (`Campus_ID`, `Campus_name`, `Campus_address`) VALUES
(1, 'Downtown', 'Colon'),
(2, 'North', 'Asilo'),
(3, 'South', 'Private'),
(4, 'Talamban', 'Talamban');

-- --------------------------------------------------------

--
-- Table structure for table `college_report`
--

CREATE TABLE IF NOT EXISTS `college_report` (
  `collegeReport_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Month` text,
  `CAFA` int(11) DEFAULT '0',
  `CAS` int(11) DEFAULT '0',
  `COE` int(11) DEFAULT '0',
  `COED` int(11) DEFAULT '0',
  `SBE` int(11) DEFAULT '0',
  `SHCP` int(11) DEFAULT '0',
  `SLG` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`collegeReport_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `college_report`
--

INSERT INTO `college_report` (`collegeReport_ID`, `Month`, `CAFA`, `CAS`, `COE`, `COED`, `SBE`, `SHCP`, `SLG`) VALUES
(1, 'October 2014', 1, 2, 3, 4, 5, 6, 7),
(2, 'November 2014', 7, 6, 5, 4, 3, 2, 1),
(5, 'December 2014', 11, 12, 13, 14, 15, 16, 17),
(6, 'January 2015', 17, 16, 15, 14, 13, 12, 11);

-- --------------------------------------------------------

--
-- Table structure for table `dutysched`
--

CREATE TABLE IF NOT EXISTS `dutysched` (
  `DutySched_ID` int(11) NOT NULL AUTO_INCREMENT,
  `WorkingStudent_ID` int(11) NOT NULL,
  `DutySched_Day` varchar(20) NOT NULL,
  `DutySched_TimeIn` time NOT NULL DEFAULT '00:00:00',
  `DutySched_TimeOut` time NOT NULL DEFAULT '00:00:00',
  PRIMARY KEY (`DutySched_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `dutysched`
--

INSERT INTO `dutysched` (`DutySched_ID`, `WorkingStudent_ID`, `DutySched_Day`, `DutySched_TimeIn`, `DutySched_TimeOut`) VALUES
(1, 1, 'Monday', '07:00:00', '11:00:00'),
(2, 1, 'Tuesday', '07:00:00', '11:00:00'),
(3, 1, 'Wednesday', '07:00:00', '11:00:00'),
(4, 1, 'Thursday', '07:00:00', '11:00:00'),
(5, 1, 'Friday', '07:00:00', '11:00:00'),
(6, 1, 'Saturday', '00:00:00', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `hall`
--

CREATE TABLE IF NOT EXISTS `hall` (
  `Hall_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Campus_ID` int(11) DEFAULT NULL,
  `Hall_Name` varchar(100) DEFAULT NULL,
  `Hall_Capacity` int(11) DEFAULT NULL,
  `Hall_Desc` text NOT NULL,
  `Hall_Remarks` varchar(50) NOT NULL DEFAULT 'Functioning',
  PRIMARY KEY (`Hall_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `hall`
--

INSERT INTO `hall` (`Hall_ID`, `Campus_ID`, `Hall_Name`, `Hall_Capacity`, `Hall_Desc`, `Hall_Remarks`) VALUES
(1, 4, 'Fr. Harold Rigney', 192, 'Biggest hall!!', 'Functioning'),
(2, 4, 'Fr. Robert Heoppener', 120, 'Located at the Talamban Campus', 'Functioning'),
(3, 4, 'CAS', 100, 'Located in the CAS Building', 'Functioning');

-- --------------------------------------------------------

--
-- Table structure for table `material_report`
--

CREATE TABLE IF NOT EXISTS `material_report` (
  `materialReport_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Software` int(11) NOT NULL DEFAULT '0',
  `Equipment` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`materialReport_ID`)
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`Person_ID`, `Person_Username`, `Person_Password`, `Person_Fname`, `Person_Lname`, `Person_Email`, `Person_type`) VALUES
(2, '1234VPA', '25d55ad283aa400af464c76d713c07ad', 'Bush', 'Bucia', 'approvevpaa@gmail.com', 'VPA'),
(3, '1234VPAA', '25d55ad283aa400af464c76d713c07ad', 'Anthony', 'Salas', 'approvevpaa@gmail.com', 'VPAA'),
(5, '1234OSA', '25d55ad283aa400af464c76d713c07ad', 'Mary Ann', 'Lumacang', 'endorseosa@gmail.com', 'OSA'),
(6, '1234staff', '25d55ad283aa400af464c76d713c07ad', 'Francis', 'Arnibal', 'staff@gmail.com', 'Staff'),
(7, '1234ws', '25d55ad283aa400af464c76d713c07ad', 'Salvador', 'Mercader', 'ws@gmail.com', 'WS'),
(10, 'N/A', 'sdlfhofywe9rysovvhnsdifgeoufshvsiufg', 'N/A', NULL, NULL, NULL),
(23, '11103083', '689bd6ce7f197812f4c6ba65c21392ae', 'Jacob', 'Borromeo', 'lupyduby@gmail.com', 'Faculty'),
(24, '12103083', '9ff92f2491bda2a14322affa5b25e106', 'Jay', 'Casanas', 'so@gmail.com', 'SO'),
(28, '1234Dean', 'ae05182fe5a07ce0ff80fac19c054f8f', 'Delia', 'Belleza', 'dean@gmail.com', 'Dean');

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
  `Reservation_Date` date NOT NULL,
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
  `Software_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Person_Username` varchar(11) DEFAULT NULL,
  `Campus_ID` int(11) DEFAULT NULL,
  `Software_CallNumber` varchar(10) NOT NULL,
  `Software_title` varchar(64) DEFAULT NULL,
  `Software_runningTime` varchar(50) DEFAULT NULL,
  `Software_Code` varchar(16) DEFAULT NULL,
  `Software_Quantity` int(11) DEFAULT NULL,
  `Software_Status` varchar(50) DEFAULT 'Available',
  PRIMARY KEY (`Software_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `softwares`
--

INSERT INTO `softwares` (`Software_ID`, `Person_Username`, `Campus_ID`, `Software_CallNumber`, `Software_title`, `Software_runningTime`, `Software_Code`, `Software_Quantity`, `Software_Status`) VALUES
(2, 'N/A', 3, 'CDm102r', 'Insurgent', '1:35:36', 'absc', 2, 'Available'),
(14, 'N/A', 4, 'CD1', 'Vigin', '1:30', 'N/A', 1, 'Available'),
(15, 'N/A', 3, 'CDm104r', 'Nothing', '1:00', 'N/A', 1, 'Available'),
(16, 'N/A', 4, 'CDm305r', 'Viriginity', '1:39', 'N/A', 1, 'Available'),
(17, 'N/A', 4, 'CD405r', 'Nothing', '3:30', 'N/A', 1, 'Available');

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
(1, 6, 4, 'Technician');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `studentorg`
--

INSERT INTO `studentorg` (`SO_ID`, `Person_ID`, `SO_Type`, `SO_Name`) VALUES
(5, 24, 'Co-Curricular', 'Datalogics');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_ID`, `Person_ID`, `Campus_ID`, `User_college`, `User_Office_Name`) VALUES
(2, 2, 4, 'N/A', 'Office of VP - Administration'),
(3, 3, 4, 'N/A', 'Office of VP - Academic Affairs'),
(5, 5, 4, 'CAS', 'Office of Student Affairs'),
(13, 23, 4, 'CAS', 'Department of Computer Science'),
(17, 28, 4, 'CAS', 'Office of the CAS Dean');

-- --------------------------------------------------------

--
-- Table structure for table `workingstudent`
--

CREATE TABLE IF NOT EXISTS `workingstudent` (
  `WorkingStudent_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Person_ID` int(16) DEFAULT NULL,
  `Campus_ID` int(16) DEFAULT NULL,
  `Hall_ID` int(16) DEFAULT NULL,
  PRIMARY KEY (`WorkingStudent_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `workingstudent`
--

INSERT INTO `workingstudent` (`WorkingStudent_ID`, `Person_ID`, `Campus_ID`, `Hall_ID`) VALUES
(1, 7, 4, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
