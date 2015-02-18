-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2015 at 12:08 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`Activity_ID`, `Activity_Name`, `Activity_February`, `Activity_January`, `Activity_March`, `Activity_April`, `Activity_May`, `Activity_June`, `Activity_July`, `Activity_August`, `Activity_September`, `Activity_October`, `Activity_November`, `Activity_December`) VALUES
(1, 'Seminar', 37, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'Forum', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 'Video Showing', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'Conference', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 'Sound System', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 'Documentation', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, 'sdsdfsdf', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(24, 'Wow!', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(25, 'wahahaha', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(26, 'sdfsdfsdf', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(27, 'sdfsdfsdf', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(28, 'sdfsdfsdf', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(29, 'wahahah', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `asset`
--

INSERT INTO `asset` (`Asset_ID`, `Campus_ID`, `Hall_ID`, `Asset_Name`, `Asset_Brand`, `Asset_Serial`, `Asset_Remarks`, `Asset_Quantity`) VALUES
(1, 1, 0, 'pAULO', 'Shaark', '123', 'Functioning', 10),
(2, 3, 0, 'DVD', 'Pioneere', 'asdasdas3132154', 'Functioning', 3),
(4, 3, 0, 'Speaker', 'MartinLogan CLX', '32132a1sdas', 'Functioning', 2),
(5, 3, 0, 'DVD Player', 'Pioneer', '1030241', 'Functioning', 1);

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
(0, 'CAS', 0, 65, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'CAFA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 'SBE', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'SLG', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 'COE', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 'COED', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 'SHCP', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `hall`
--

INSERT INTO `hall` (`Hall_ID`, `Campus_ID`, `Hall_Name`, `Hall_Capacity`, `Hall_Desc`, `Hall_Remarks`) VALUES
(1, 3, 'Fr. Harold Rigney Hall', 192, 'Oldest hall in talamaban', 'Functioning'),
(2, 3, 'Fr hoeppener Hall', 100, 'Found at the Nursing bldg', 'Functioning'),
(3, 3, 'Fr. Philip Van Engelen', 100, 'Found at the CAS building.', 'Functioning'),
(4, 2, 'Buchick Hall', 100, 'Found at the USC south campus', 'Functioning'),
(5, 1, 'Fr Butttenbruch Hall', 151, 'found at the USC main building', 'Functioning'),
(6, 1, 'Fr Albert Gansewinkel Hall', 120, 'found at LAW building', 'Functioning');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`Person_ID`, `Person_Username`, `Person_Password`, `Person_Fname`, `Person_Lname`, `Person_Email`, `Person_type`) VALUES
(2, '1234VPA', '25d55ad283aa400af464c76d713c07ad', 'Bushing', 'Bucia', 'approvevpaa@gmail.com', 'VPA'),
(3, '1234VPAA', '25d55ad283aa400af464c76d713c07ad', 'Anthony', 'Salas', 'approvevpaa@gmail.com', 'VPAA'),
(5, '1234OSA', '25d55ad283aa400af464c76d713c07ad', 'Mary Ann', 'Lumacanga', 'endorseosa@gmail.com', 'OSA'),
(6, '1234staff', '25d55ad283aa400af464c76d713c07ad', 'Francis', 'Arnibal', 'staff@gmail.com', 'Staff'),
(7, '1234ws', '25d55ad283aa400af464c76d713c07ad', 'Salvador', 'Mercader', 'ws@gmail.com', 'WS'),
(10, 'N/A', 'sdlfhofywe9rysovvhnsdifgeoufshvsiufg', 'N/A', NULL, NULL, NULL),
(23, '11103083', '689bd6ce7f197812f4c6ba65c21392ae', 'Jacob', 'sdsfdgdfg', 'lupyduby@gmail.com', 'Faculty'),
(24, '12103083', '9ff92f2491bda2a14322affa5b25e106', 'Yngwie', 'Enriquez', 'so@gmail.com', 'SO'),
(28, '1234Dean', 'ae05182fe5a07ce0ff80fac19c054f8f', 'Delia', 'Belleza', 'dean@gmail.com', 'Dean'),
(29, '12345678', '25d55ad283aa400af464c76d713c07ad', 'NANA', 'OW', 'waa@gmail.com', 'Faculty'),
(30, '1234Super', '0eb471439d687cca0ae2072b26fcd613', 'Maxie', 'Cabarron', 'super@gmail.com', 'Super'),
(33, '1234StaffMain', '2ee8ffeb9790d72b22b2471bea76420d', 'Ka', 'Isda', 'kaka@gmail.com', 'Staff'),
(35, '12345678', '25d55ad283aa400af464c76d713c07ad', 'sdsdfsdfs', 'sdadasad', 'sfsdfs@gmail.com', 'Office');

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
  `Reservation_Block` int(11) NOT NULL DEFAULT '0',
  `Reservation_BlockActivity` text NOT NULL,
  PRIMARY KEY (`Reservation_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=96 ;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`Reservation_ID`, `Person_ID`, `Hall_ID`, `Campus_ID`, `Activity_ID`, `Reservation_Purpose`, `Reservation_Date`, `Reservation_timeStart`, `Reservation_timeEnd`, `Endorsement_ID`, `Approval_ID`, `Reservation__Endorse_Status`, `Reservation_Approve_Status`, `Reservation_Message`, `Reservation_Computer`, `Reservation_DVDPlayer`, `Reservation_Mic`, `Reservation_LCD`, `Reservation_VHS`, `Reservation_Block`, `Reservation_BlockActivity`) VALUES
(1, 28, 5, 3, 1, 'College Based Activities', '2015-02-16', '08:30:00', '09:00:00', 28, 2, 'approve', 'Bushing Bucia', '', 0, 0, 0, 0, 0, 0, ''),
(93, 23, 1, 3, 1, 'Classroom Instruction-Related Activities', '2015-02-23', '07:30:00', '08:30:00', 28, 3, 'Disapprove', 'Pending', 'sdfsdfsdfsdfsdfljsdlkfjs', 1, 1, 1, 0, 0, 0, ''),
(94, 23, 4, 2, NULL, '', '2015-02-23', '07:30:00', '08:30:00', NULL, NULL, 'Pending', 'Pending', '', 0, 0, 0, 0, 0, 0, ''),
(95, 23, 4, 2, 1, 'Classroom Instruction-Related Activities', '2015-02-23', '07:30:00', '08:30:00', 28, 3, 'Disapprove', 'Pending', 'sdfsdfsfs', 0, 0, 0, 0, 0, 0, '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `softwares`
--

INSERT INTO `softwares` (`Software_ID`, `Reservation_ID`, `Person_Username`, `Campus_ID`, `Software_CallNumber`, `Software_title`, `Software_runningTime`, `Software_Code`, `Software_Quantity`, `Software_Status`, `Software_January`, `Software_February`, `Software_March`, `Software_April`, `Software_May`, `Software_June`, `Software_July`, `Software_August`, `Software_September`, `Software_October`, `Software_November`, `Software_December`) VALUES
(2, 73, '11103083', 2, 'CDm102r', 'Insurgent V2', '1:35:36', 'absc', 2, 'Borrowed', 0, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 54, '11103083', 3, 'CD1', 'Vigin', '1:31', 'N/A', 1, 'Borrowed', 0, 1, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 52, '11103083', 3, 'CDm104r', 'Nothing', '1:00', 'N/A', 1, 'Borrowed', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(16, 65, '11103083', 3, 'CDm305r', 'Viriginity', '1:39', 'N/A', 1, 'Borrowed', 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_ID`, `Person_ID`, `Campus_ID`, `User_college`, `User_Office_Name`) VALUES
(2, 2, 3, 'N/A', 'Office of VP - Administration'),
(3, 3, 3, 'N/A', 'Office of VP - Academic Affairs'),
(5, 5, 3, 'CAS', 'Office of Student Affairs'),
(13, 23, 3, 'CAS', 'Department of Computer Science'),
(17, 28, 3, 'CAS', 'Office of the CAS Dean'),
(18, 29, 3, 'CAS', 'CS'),
(19, 34, 3, 'SBE', ''),
(20, 35, 3, 'SBE', 'SEcurity');

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
