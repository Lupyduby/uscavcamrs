-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2015 at 10:21 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

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
`Activity_ID` int(11) NOT NULL,
  `Activity_Name` varchar(100) DEFAULT NULL,
  `Activity_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `asset`
--

CREATE TABLE IF NOT EXISTS `asset` (
`Asset_ID` int(11) NOT NULL,
  `Campus_ID` int(11) NOT NULL,
  `Hall_ID` int(11) DEFAULT '0',
  `Asset_Name` varchar(64) NOT NULL,
  `Asset_Brand` varchar(64) NOT NULL,
  `Asset_Serial` varchar(16) NOT NULL,
  `Asset_Remarks` varchar(64) NOT NULL,
  `Asset_Quantity` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asset`
--

INSERT INTO `asset` (`Asset_ID`, `Campus_ID`, `Hall_ID`, `Asset_Name`, `Asset_Brand`, `Asset_Serial`, `Asset_Remarks`, `Asset_Quantity`) VALUES
(1, 1, 0, 'pAULO', 'Shaark', '123', 'Functioning', 10),
(2, 4, 0, 'DVD', 'Pioneer', 'asdasdas3132154', 'Functioning', 3),
(4, 4, 0, 'Speaker', 'MartinLogan CLX', '32132a1sdas', 'Functioning', 2),
(5, 1, 0, 'Onii', 'AVaya', 'askdj', 'Functioning', 10),
(6, 1, 0, 'Onii', 'AVaya', 'askdj', 'Functioning', 10);

-- --------------------------------------------------------

--
-- Table structure for table `campus`
--

CREATE TABLE IF NOT EXISTS `campus` (
`Campus_ID` int(11) NOT NULL,
  `Campus_name` text NOT NULL,
  `Campus_address` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

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
-- Table structure for table `dutysched`
--

CREATE TABLE IF NOT EXISTS `dutysched` (
`DutySched_ID` int(11) NOT NULL,
  `WorkingStudent_ID` int(11) NOT NULL,
  `DutySched_Day` varchar(20) NOT NULL,
  `DutySched_TimeIn` time NOT NULL DEFAULT '00:00:00',
  `DutySched_TimeOut` time NOT NULL DEFAULT '00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

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
`Hall_ID` int(11) NOT NULL,
  `Campus_ID` int(11) DEFAULT NULL,
  `Hall_Name` varchar(100) DEFAULT NULL,
  `Hall_Capacity` int(11) DEFAULT NULL,
  `Hall_Desc` text NOT NULL,
  `Hall_Remarks` varchar(50) NOT NULL DEFAULT 'Functioning'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hall`
--

INSERT INTO `hall` (`Hall_ID`, `Campus_ID`, `Hall_Name`, `Hall_Capacity`, `Hall_Desc`, `Hall_Remarks`) VALUES
(1, 4, 'Fr. Harold Rigney', 192, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\n                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\n                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\n                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\n                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\n                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Functioning'),
(2, 4, 'Fr. Robert Heoppener', 120, 'Located at the Talamban Campus', 'Functioning');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE IF NOT EXISTS `person` (
`Person_ID` int(11) NOT NULL,
  `Person_Username` varchar(50) DEFAULT NULL,
  `Person_Password` varchar(50) DEFAULT NULL,
  `Person_Fname` varchar(50) DEFAULT NULL,
  `Person_Lname` varchar(50) DEFAULT NULL,
  `Person_Email` varchar(50) DEFAULT NULL,
  `Person_type` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`Person_ID`, `Person_Username`, `Person_Password`, `Person_Fname`, `Person_Lname`, `Person_Email`, `Person_type`) VALUES
(0, NULL, NULL, 'None', '', NULL, NULL),
(1, 'cobi', '21128', 'Cobi', 'Lupyduby', 'char@gmail.com', 'Faculty'),
(2, 'VPA', '1234', 'Bush', 'Bucia', 'approvevpaa@gmail.com', 'VPA'),
(3, 'VPAA', '1234', 'Anthony', 'Salas', 'approvevpaa@gmail.com', 'VPAA'),
(4, 'Dean', '1234', 'Delia', 'Belleza', 'endorseDean@gmail.com', 'Dean'),
(5, 'OSA', '1234', 'Mary Ann', 'Lumacang', 'endorseosa@gmail.com', 'OSA'),
(6, 'staff', '1234', 'Francis', 'Arnibal', 'staff@gmail.com', 'Staff'),
(7, 'ws', '1234', 'Salvador', 'Mercader', 'ws@gmail.com', 'WS'),
(9, 'so', '1234', 'Jay', 'Casanas', 'so@gmail.com', 'SO');

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
  `Reservation_Approve_Status` varchar(16) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `softwares`
--

CREATE TABLE IF NOT EXISTS `softwares` (
`Software_ID` int(11) NOT NULL,
  `Person_ID` int(11) DEFAULT NULL,
  `Campus_ID` int(11) DEFAULT NULL,
  `Software_CallNumber` varchar(10) NOT NULL,
  `Software_title` varchar(64) DEFAULT NULL,
  `Software_runningTime` varchar(50) DEFAULT NULL,
  `Software_Code` varchar(16) DEFAULT NULL,
  `Software_Quantity` int(11) DEFAULT NULL,
  `Software_Status` varchar(50) DEFAULT 'Available'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `softwares`
--

INSERT INTO `softwares` (`Software_ID`, `Person_ID`, `Campus_ID`, `Software_CallNumber`, `Software_title`, `Software_runningTime`, `Software_Code`, `Software_Quantity`, `Software_Status`) VALUES
(1, 0, 3, 'CDm101r', 'Divergent', '1:35:36', NULL, 1, 'Available'),
(2, 0, 3, 'CDm102r', 'Insurgent', '1:35:36', NULL, 1, 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
`Staff_ID` int(11) NOT NULL,
  `Person_ID` int(11) DEFAULT NULL,
  `Campus_ID` int(11) DEFAULT NULL,
  `Staff_Position` text
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

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
`SO_ID` int(11) NOT NULL,
  `Person_ID` int(11) DEFAULT NULL,
  `SO_Type` varchar(50) DEFAULT NULL,
  `SO_Name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentorg`
--

INSERT INTO `studentorg` (`SO_ID`, `Person_ID`, `SO_Type`, `SO_Name`) VALUES
(1, 9, 'Co-curricular', 'Datalogics');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`User_ID` int(11) NOT NULL,
  `Person_ID` int(11) DEFAULT NULL,
  `Campus_ID` int(11) DEFAULT NULL,
  `User_college` varchar(64) DEFAULT NULL,
  `User_Office_Name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_ID`, `Person_ID`, `Campus_ID`, `User_college`, `User_Office_Name`) VALUES
(1, 1, 1, 'CAS', NULL),
(2, 2, 4, 'N/A', 'Office of VP - Administration'),
(3, 3, 4, 'N/A', 'Office of VP - Academic Affairs'),
(4, 4, 4, 'CAS', 'CAS Dean''s Office'),
(5, 5, 4, 'CAS', 'Office of Student Affairs');

-- --------------------------------------------------------

--
-- Table structure for table `workingstudent`
--

CREATE TABLE IF NOT EXISTS `workingstudent` (
`WorkingStudent_ID` int(11) NOT NULL,
  `Person_ID` int(16) DEFAULT NULL,
  `Campus_ID` int(16) DEFAULT NULL,
  `Hall_ID` int(16) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workingstudent`
--

INSERT INTO `workingstudent` (`WorkingStudent_ID`, `Person_ID`, `Campus_ID`, `Hall_ID`) VALUES
(1, 7, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
 ADD PRIMARY KEY (`Activity_ID`);

--
-- Indexes for table `asset`
--
ALTER TABLE `asset`
 ADD PRIMARY KEY (`Asset_ID`), ADD UNIQUE KEY `Asset_ID` (`Asset_ID`);

--
-- Indexes for table `campus`
--
ALTER TABLE `campus`
 ADD PRIMARY KEY (`Campus_ID`);

--
-- Indexes for table `dutysched`
--
ALTER TABLE `dutysched`
 ADD PRIMARY KEY (`DutySched_ID`);

--
-- Indexes for table `hall`
--
ALTER TABLE `hall`
 ADD PRIMARY KEY (`Hall_ID`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
 ADD PRIMARY KEY (`Person_ID`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
 ADD PRIMARY KEY (`Reservation_ID`);

--
-- Indexes for table `softwares`
--
ALTER TABLE `softwares`
 ADD PRIMARY KEY (`Software_ID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
 ADD PRIMARY KEY (`Staff_ID`);

--
-- Indexes for table `studentorg`
--
ALTER TABLE `studentorg`
 ADD PRIMARY KEY (`SO_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `workingstudent`
--
ALTER TABLE `workingstudent`
 ADD PRIMARY KEY (`WorkingStudent_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
MODIFY `Activity_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `asset`
--
ALTER TABLE `asset`
MODIFY `Asset_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `campus`
--
ALTER TABLE `campus`
MODIFY `Campus_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `dutysched`
--
ALTER TABLE `dutysched`
MODIFY `DutySched_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `hall`
--
ALTER TABLE `hall`
MODIFY `Hall_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
MODIFY `Person_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `softwares`
--
ALTER TABLE `softwares`
MODIFY `Software_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
MODIFY `Staff_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `studentorg`
--
ALTER TABLE `studentorg`
MODIFY `SO_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `workingstudent`
--
ALTER TABLE `workingstudent`
MODIFY `WorkingStudent_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
