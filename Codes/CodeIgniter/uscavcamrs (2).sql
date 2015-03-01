-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2015 at 07:49 PM
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
  `Activity_Name` text NOT NULL,
  `Activity_February` int(11) NOT NULL DEFAULT '0',
  `Activity_January` int(11) NOT NULL DEFAULT '0',
  `Activity_March` int(11) NOT NULL DEFAULT '0',
  `Activity_April` int(11) NOT NULL DEFAULT '0',
  `Activity_May` int(11) NOT NULL DEFAULT '0',
  `Activity_June` int(11) NOT NULL DEFAULT '0',
  `Activity_July` int(11) NOT NULL DEFAULT '0',
  `Activity_August` int(11) NOT NULL DEFAULT '0',
  `Activity_September` int(11) NOT NULL DEFAULT '0',
  `Activity_October` int(11) NOT NULL DEFAULT '0',
  `Activity_November` int(11) NOT NULL DEFAULT '0',
  `Activity_December` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Activity_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`Activity_ID`, `Activity_Name`, `Activity_February`, `Activity_January`, `Activity_March`, `Activity_April`, `Activity_May`, `Activity_June`, `Activity_July`, `Activity_August`, `Activity_September`, `Activity_October`, `Activity_November`, `Activity_December`) VALUES
(30, 'Seminar', 8, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(31, 'Forum', 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(32, 'Video Showing', 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(33, 'Conference', 1, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(34, 'hahahaha', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(35, 'adasdas', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(36, 'Lecture', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(37, 'ReEd 10', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

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
  `Asset_datePurchase` date NOT NULL,
  `Asset_dateUpdate` date NOT NULL,
  PRIMARY KEY (`Asset_ID`),
  UNIQUE KEY `Asset_ID` (`Asset_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `asset`
--

INSERT INTO `asset` (`Asset_ID`, `Campus_ID`, `Hall_ID`, `Asset_Name`, `Asset_Brand`, `Asset_Serial`, `Asset_Remarks`, `Asset_Quantity`, `Asset_datePurchase`, `Asset_dateUpdate`) VALUES
(1, 1, 0, 'pAULO', 'Shaark', '123', 'Functioning', 10, '2015-02-26', '0000-00-00'),
(6, 3, 1, 'Microphone', 'Shure', 'N/A', 'Functioning', 2, '2015-02-27', '2015-02-27'),
(7, 3, 1, 'Computer', 'Acer', 'N/A', 'Functioning', 1, '2015-02-26', '2015-02-26'),
(8, 3, 1, 'Overhead Projector', 'Epson', '5aE22A', 'Functioning', 1, '2015-02-26', '2015-02-26'),
(9, 3, 1, 'DVD Player', 'Pioneer', '55as48sc', 'Functioning', 1, '2015-02-26', '2015-02-26'),
(10, 3, 1, 'VHS Player', 'Sony', '547Asec114', 'Functioning', 1, '2015-02-26', '2015-02-26'),
(11, 3, 2, 'Microphone', 'Shure', 'N/A', 'Functioning', 2, '2015-02-27', '2015-02-27'),
(12, 3, 2, 'Computer', 'Acer', 'N/A', 'Functioning', 1, '2015-02-26', '2015-02-26'),
(13, 3, 2, 'Overhead Projector', 'Epson', '5aE22A', 'Functioning', 1, '2015-02-26', '2015-02-26'),
(14, 3, 2, 'DVD Player', 'Pioneer', '55as48sc', 'Functioning', 1, '2015-02-26', '2015-02-26'),
(15, 3, 2, 'VHS Player', 'Sony', '547Asec114', 'Functioning', 1, '2015-02-26', '2015-02-26'),
(16, 3, 3, 'Microphone', 'Shure', 'N/A', 'Functioning', 2, '2015-02-27', '2015-02-27'),
(17, 3, 3, 'Computer', 'Acer', 'N/A', 'Functioning', 1, '2015-02-26', '2015-02-26'),
(18, 3, 3, 'Overhead Projector', 'Epson', '5aE22A', 'Functioning', 1, '2015-02-26', '2015-02-26'),
(19, 3, 3, 'DVD Player', 'Pioneer', '55as48sc', 'Functioning', 1, '2015-02-26', '2015-02-26'),
(20, 3, 3, 'VHS Player', 'Sony', '547Asec114', 'Functioning', 1, '2015-02-26', '2015-02-26'),
(21, 2, 4, 'Microphone', 'Shure', 'N/A', 'Functioning', 2, '2015-02-27', '2015-02-27'),
(22, 2, 4, 'Computer', 'Acer', 'N/A', 'Functioning', 1, '2015-02-26', '2015-02-26'),
(23, 2, 4, 'Overhead Projector', 'Epson', '5aE22A', 'Functioning', 1, '2015-02-26', '2015-02-26'),
(24, 2, 4, 'DVD Player', 'Pioneer', '55as48sc', 'Functioning', 1, '2015-02-26', '2015-02-26'),
(25, 2, 4, 'VHS Player', 'Sony', '547Asec114', 'Functioning', 1, '2015-02-26', '2015-02-26'),
(26, 1, 5, 'Microphone', 'Shure', 'N/A', 'Functioning', 2, '2015-02-27', '2015-02-27'),
(27, 1, 5, 'Computer', 'Acer', 'N/A', 'Functioning', 1, '2015-02-26', '2015-02-26'),
(28, 1, 5, 'Overhead Projector', 'Epson', '5aE22A', 'Functioning', 1, '2015-02-26', '2015-02-26'),
(29, 1, 5, 'DVD Player', 'Pioneer', '55as48sc', 'Functioning', 1, '2015-02-26', '2015-02-26'),
(30, 1, 5, 'VHS Player', 'Sony', '547Asec114', 'Functioning', 1, '2015-02-26', '2015-02-26'),
(31, 1, 6, 'Microphone', 'Shure', 'N/A', 'Functioning', 2, '2015-02-27', '2015-02-27'),
(32, 1, 6, 'Computer', 'Acer', 'N/A', 'Functioning', 1, '2015-02-26', '2015-02-26'),
(33, 1, 6, 'Overhead Projector', 'Epson', '5aE22A', 'Functioning', 1, '2015-02-26', '2015-02-26'),
(34, 1, 6, 'DVD Player', 'Pioneer', '55as48sc', 'Functioning', 1, '2015-02-26', '2015-02-26'),
(35, 1, 6, 'VHS Player', 'Sony', '547Asec114', 'Functioning', 1, '2015-02-26', '2015-02-26');

-- --------------------------------------------------------

--
-- Table structure for table `campus`
--

CREATE TABLE IF NOT EXISTS `campus` (
  `Campus_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Campus_name` text NOT NULL,
  `Campus_address` text NOT NULL,
  PRIMARY KEY (`Campus_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `campus`
--

INSERT INTO `campus` (`Campus_ID`, `Campus_name`, `Campus_address`) VALUES
(1, 'Downtown', 'P. Del Rosario St. Cebu City'),
(2, 'South', 'J-Alcantara St. V-rama, Cebu City'),
(3, 'Talamban', 'Nasipit, Talamban, Cebu City');

-- --------------------------------------------------------

--
-- Table structure for table `college_report`
--

CREATE TABLE IF NOT EXISTS `college_report` (
  `college_ID` int(11) NOT NULL AUTO_INCREMENT,
  `college_Name` varchar(100) DEFAULT NULL,
  `college_January` int(11) NOT NULL DEFAULT '0',
  `college_February` int(11) NOT NULL DEFAULT '0',
  `college_March` int(11) NOT NULL DEFAULT '0',
  `college_April` int(11) NOT NULL DEFAULT '0',
  `college_May` int(11) NOT NULL DEFAULT '0',
  `college_June` int(11) NOT NULL DEFAULT '0',
  `college_July` int(11) NOT NULL DEFAULT '0',
  `college_August` int(11) DEFAULT '0',
  `college_September` int(11) NOT NULL DEFAULT '0',
  `college_October` int(11) NOT NULL DEFAULT '0',
  `college_November` int(11) NOT NULL DEFAULT '0',
  `college_December` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`college_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `college_report`
--

INSERT INTO `college_report` (`college_ID`, `college_Name`, `college_January`, `college_February`, `college_March`, `college_April`, `college_May`, `college_June`, `college_July`, `college_August`, `college_September`, `college_October`, `college_November`, `college_December`) VALUES
(0, 'CAS', 5, 84, 12, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'CAFA', 6, 5, 32, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 'SBE', 3, 23, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'SLG', 6, 10, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 'COE', 3, 1, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 'COED', 56, 5, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 'SHCP', 6, 8, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0);

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
  `Hall_January` int(11) NOT NULL DEFAULT '0',
  `Hall_February` int(11) NOT NULL DEFAULT '0',
  `Hall_March` int(11) NOT NULL DEFAULT '0',
  `Hall_April` int(11) NOT NULL DEFAULT '0',
  `Hall_May` int(11) NOT NULL DEFAULT '0',
  `Hall_June` int(11) NOT NULL DEFAULT '0',
  `Hall_July` int(11) NOT NULL DEFAULT '0',
  `Hall_August` int(11) DEFAULT '0',
  `Hall_September` int(11) NOT NULL DEFAULT '0',
  `Hall_October` int(11) NOT NULL DEFAULT '0',
  `Hall_November` int(11) NOT NULL DEFAULT '0',
  `Hall_December` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Hall_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `hall`
--

INSERT INTO `hall` (`Hall_ID`, `Campus_ID`, `Hall_Name`, `Hall_Capacity`, `Hall_Desc`, `Hall_Remarks`, `Hall_January`, `Hall_February`, `Hall_March`, `Hall_April`, `Hall_May`, `Hall_June`, `Hall_July`, `Hall_August`, `Hall_September`, `Hall_October`, `Hall_November`, `Hall_December`) VALUES
(1, 3, 'Fr. Harold Rigney Hall', 192, 'Oldest hall in talamaban', 'Functioning', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 3, 'Fr hoeppener Hall', 100, 'Found at the Nursing bldg', 'Functioning', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 3, 'Fr. Philip Van Engelen', 100, 'Found at the CAS building.', 'Functioning', 0, 5, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 2, 'Buchick Hall', 100, 'Found at the USC south campus', 'Functioning', 0, 3, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 1, 'Fr Butttenbruch Hall', 151, 'found at the USC main building, hahaha', 'Functioning', 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 1, 'Fr Albert Gansewinkel Hall', 120, 'found at LAW building', 'Functioning', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0);

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
  `Person_college` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Person_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`Person_ID`, `Person_Username`, `Person_Password`, `Person_Fname`, `Person_Lname`, `Person_Email`, `Person_type`, `Person_college`) VALUES
(1, 'N/A', 'sdlfhofywe9rysovvhnsdifgeoufshvsiufg', 'N/A', NULL, NULL, NULL, NULL),
(2, '1234VPA', '25d55ad283aa400af464c76d713c07ad', 'Bushing', 'Bucia', 'approvevpaa@gmail.com', 'VPA', NULL),
(3, '1234VPAA', '25d55ad283aa400af464c76d713c07ad', 'Anthony', 'Salas', 'approvevpaa@gmail.com', 'VPAA', NULL),
(6, '1234staff', '25d55ad283aa400af464c76d713c07ad', 'Francis', 'Arnibal', 'staff@gmail.com', 'Staff', NULL),
(7, '1234ws', '25d55ad283aa400af464c76d713c07ad', 'Salvador', 'Mercader', 'ws@gmail.com', 'WS', NULL),
(28, '1234Dean', 'ae05182fe5a07ce0ff80fac19c054f8f', 'Delia', 'Belleza', 'dean@gmail.com', 'Dean', 'CAS'),
(30, '1234Super', '0eb471439d687cca0ae2072b26fcd613', 'Maxie', 'Cabarron', 'super@gmail.com', 'Super', NULL),
(33, '1234StaffMain', '2ee8ffeb9790d72b22b2471bea76420d', 'Ka', 'Isda', 'kaka@gmail.com', 'Staff', NULL),
(37, '11103083', '689bd6ce7f197812f4c6ba65c21392ae', 'Jacob', 'Borromeo', 'lupyduby@gmail.com', 'Faculty', NULL),
(38, '1234COE', '25d55ad283aa400af464c76d713c07ad', 'USC', 'COE', 'coe@gmail.com', 'Dean', 'COE'),
(39, '1234COED', '25d55ad283aa400af464c76d713c07ad', 'USC', 'COED', 'coed@gmail.com', 'Dean', 'COED'),
(40, '1234CAFA', '25d55ad283aa400af464c76d713c07ad', 'USC', 'CAFA', 'cafa@gmail.com', 'Dean', 'CAFA'),
(41, '1234SLG', '25d55ad283aa400af464c76d713c07ad', 'USC', 'SLG', 'slg@gmail.com', 'Dean', 'SLG'),
(42, '1234SBE', '25d55ad283aa400af464c76d713c07ad', 'USC', 'SBE', 'sbe@gmail.com', 'Dean', 'SBE'),
(43, '1234SHCP', '25d55ad283aa400af464c76d713c07ad', 'USC', 'SHCP', 'shcp@gmail.com', 'Dean', 'SHCP');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `Reservation_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Person_ID` int(11) DEFAULT NULL,
  `Hall_ID` int(11) DEFAULT NULL,
  `Campus_ID` int(11) DEFAULT NULL,
  `Activity_ID` int(11) DEFAULT NULL,
  `Reservation_Purpose` text NOT NULL,
  `Reservation_Date` date NOT NULL,
  `Reservation_timeStart` time DEFAULT NULL,
  `Reservation_timeEnd` time DEFAULT NULL,
  `Reservation_Status` varchar(100) NOT NULL DEFAULT 'OK',
  `Endorsement_ID` int(11) DEFAULT NULL,
  `Approval_ID` int(11) DEFAULT NULL,
  `Reservation__Endorse_Status` varchar(16) NOT NULL DEFAULT 'Pending',
  `Reservation_Approve_Status` varchar(16) NOT NULL DEFAULT 'Pending',
  `Reservation_Message` text NOT NULL,
  `Reservation_Computer` tinyint(4) NOT NULL,
  `Reservation_DVDPlayer` tinyint(4) NOT NULL,
  `Reservation_Mic` tinyint(4) NOT NULL,
  `Reservation_LCD` tinyint(4) NOT NULL,
  `Reservation_VHS` int(11) NOT NULL DEFAULT '0',
  `Reservation_AssetID` text NOT NULL,
  `Reservation_Block` int(11) NOT NULL DEFAULT '0',
  `Reservation_BlockActivity` text NOT NULL,
  PRIMARY KEY (`Reservation_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=151 ;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`Reservation_ID`, `Person_ID`, `Hall_ID`, `Campus_ID`, `Activity_ID`, `Reservation_Purpose`, `Reservation_Date`, `Reservation_timeStart`, `Reservation_timeEnd`, `Reservation_Status`, `Endorsement_ID`, `Approval_ID`, `Reservation__Endorse_Status`, `Reservation_Approve_Status`, `Reservation_Message`, `Reservation_Computer`, `Reservation_DVDPlayer`, `Reservation_Mic`, `Reservation_LCD`, `Reservation_VHS`, `Reservation_AssetID`, `Reservation_Block`, `Reservation_BlockActivity`) VALUES
(143, 37, 1, 3, 34, 'Classroom Instruction-Related Activities', '2015-03-03', '07:30:00', '08:30:00', 'OK', 28, 3, 'Pending', 'Pending', '', 0, 0, 0, 0, 0, '[{"assetName":"7"},{"assetName":"9"},{"assetName":"6"},{"assetName":"8"},{"assetName":"10"}]', 0, ''),
(144, 37, 5, 1, NULL, '', '2015-03-18', '07:30:00', '08:30:00', 'OK', NULL, NULL, 'Pending', 'Pending', '', 0, 0, 0, 0, 0, '', 0, ''),
(145, 37, 5, 1, NULL, '', '2015-03-25', '07:30:00', '08:30:00', 'OK', NULL, NULL, 'Pending', 'Pending', '', 0, 0, 0, 0, 0, '', 0, ''),
(146, 37, 6, 1, NULL, '', '2015-03-26', '07:30:00', '08:30:00', 'OK', NULL, NULL, 'Pending', 'Pending', '', 0, 0, 0, 0, 0, '', 0, ''),
(147, 37, 4, 2, NULL, '', '2015-03-26', '07:30:00', '08:30:00', 'OK', NULL, NULL, 'Pending', 'Pending', '', 0, 0, 0, 0, 0, '', 0, ''),
(148, 37, 5, 1, NULL, '', '2015-03-24', '07:30:00', '08:30:00', 'OK', NULL, NULL, 'Pending', 'Pending', '', 0, 0, 0, 0, 0, '', 0, ''),
(149, 37, 2, 3, NULL, '', '2015-03-24', '07:30:00', '08:30:00', 'OK', NULL, NULL, 'Pending', 'Pending', '', 0, 0, 0, 0, 0, '', 0, ''),
(150, 37, 3, 3, NULL, '', '2015-03-24', '07:30:00', '08:30:00', 'OK', NULL, NULL, 'Pending', 'Pending', '', 0, 0, 0, 0, 0, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `softwaredateborrow`
--

CREATE TABLE IF NOT EXISTS `softwaredateborrow` (
  `sdb_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Software_ID` int(11) NOT NULL,
  `sdb_timeStart` time NOT NULL,
  `sdb_timeEnd` time NOT NULL,
  `sdb_date` date NOT NULL,
  PRIMARY KEY (`sdb_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `softwares`
--

CREATE TABLE IF NOT EXISTS `softwares` (
  `Software_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Reservation_ID` int(11) DEFAULT NULL,
  `Person_Username` varchar(11) DEFAULT NULL,
  `Campus_ID` int(11) DEFAULT NULL,
  `Software_CallNumber` varchar(10) NOT NULL,
  `Software_title` varchar(64) DEFAULT NULL,
  `Software_runningTime` varchar(50) DEFAULT NULL,
  `Software_Code` varchar(16) DEFAULT NULL,
  `Software_Quantity` int(11) DEFAULT NULL,
  `Software_Status` varchar(50) DEFAULT 'Available',
  `Software_January` int(11) NOT NULL DEFAULT '0',
  `Software_February` int(11) NOT NULL DEFAULT '0',
  `Software_March` int(11) NOT NULL DEFAULT '0',
  `Software_April` int(11) NOT NULL DEFAULT '0',
  `Software_May` int(11) NOT NULL DEFAULT '0',
  `Software_June` int(11) NOT NULL DEFAULT '0',
  `Software_July` int(11) NOT NULL DEFAULT '0',
  `Software_August` int(11) NOT NULL DEFAULT '0',
  `Software_September` int(11) NOT NULL DEFAULT '0',
  `Software_October` int(11) NOT NULL DEFAULT '0',
  `Software_November` int(11) NOT NULL DEFAULT '0',
  `Software_December` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Software_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `softwares`
--

INSERT INTO `softwares` (`Software_ID`, `Reservation_ID`, `Person_Username`, `Campus_ID`, `Software_CallNumber`, `Software_title`, `Software_runningTime`, `Software_Code`, `Software_Quantity`, `Software_Status`, `Software_January`, `Software_February`, `Software_March`, `Software_April`, `Software_May`, `Software_June`, `Software_July`, `Software_August`, `Software_September`, `Software_October`, `Software_November`, `Software_December`) VALUES
(2, NULL, 'N/A', 2, 'CDm102r', 'Insurgent V2', '1:35:36', 'absc', 1, 'Available', 13, 10, 0, 6, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 143, 'N/A', 3, 'CD1', 'Vigin', '1:31', 'N/A', 1, 'Available', 0, 1, 6, 0, 0, 0, 0, 4, 0, 4, 4, 0),
(15, NULL, 'N/A', 1, 'CDm104r', 'Nothing', '1:00', 'N/A', 1, 'Available', 0, 0, 0, 0, 0, 3, 0, 0, 5, 0, 0, 0),
(16, NULL, 'N/A', 2, 'CDm305r', 'Viriginity', '1:39', 'N/A', 1, 'Available', 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5),
(17, NULL, 'N/A', 1, 'CD123', 'The Beginning', '01:22', 'asda44', 1, 'Available', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(18, 143, 'N/A', 3, 'CD100', 'The end', '1:36', '54asE', 0, 'Available', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`Staff_ID`, `Person_ID`, `Campus_ID`, `Staff_Position`) VALUES
(1, 6, 3, 'Technician'),
(2, 30, 0, 'DOL'),
(3, 33, 1, 'Staff');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_ID`, `Person_ID`, `Campus_ID`, `User_college`, `User_Office_Name`) VALUES
(21, 2, 3, 'N/A', 'Office of VPA'),
(22, 3, 3, 'N/A', 'Office of VPAA'),
(23, 28, 3, 'CAS', 'Office of CAS Dean'),
(26, 37, 3, 'CAS', 'CS Dept'),
(27, 42, 1, 'SBE', 'Dean of SBE'),
(28, 41, 1, 'SLG', 'Dean of SLG'),
(29, 38, 3, 'COE', 'Dean of COE'),
(30, 39, 1, 'COED', 'Dean of COED'),
(31, 40, 3, 'CAFA', 'Dean of CAFA'),
(32, 43, 3, 'SHCP', 'Dean of SHCP');

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
