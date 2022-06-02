-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 08, 2022 at 06:19 AM
-- Server version: 8.0.26
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `UserName` varchar(15) NOT NULL,
  `Password` varchar(20) NOT NULL,
  PRIMARY KEY (`UserName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`UserName`, `Password`) VALUES
('1jbadmin101', 'admin101'),
('1jbadmin102', 'admin102');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

DROP TABLE IF EXISTS `branch`;
CREATE TABLE IF NOT EXISTS `branch` (
  `BranchID` int NOT NULL AUTO_INCREMENT,
  `BranchName` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Duration` varchar(10) NOT NULL,
  PRIMARY KEY (`BranchID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`BranchID`, `BranchName`, `Duration`) VALUES
(1, 'Admin', '4 Years'),
(2, 'CSE', '4 Years'),
(3, 'ISE', '4 Years'),
(4, 'ECE', '4 Years'),
(5, 'EEE', '4 Years'),
(6, 'Mech', '4 Years'),
(7, 'Civil', '4 Years');

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

DROP TABLE IF EXISTS `fees`;
CREATE TABLE IF NOT EXISTS `fees` (
  `FeesID` int NOT NULL,
  `StudentID` varchar(10) NOT NULL,
  `FeeParticulars` varchar(50) NOT NULL,
  `FeesToBePaid` decimal(9,2) NOT NULL,
  `FeesPaid` decimal(9,2) NOT NULL,
  `DueAmount` decimal(9,2) NOT NULL,
  `FeesStatus` varchar(20) NOT NULL,
  PRIMARY KEY (`FeesID`),
  KEY `student` (`StudentID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`FeesID`, `StudentID`, `FeeParticulars`, `FeesToBePaid`, `FeesPaid`, `DueAmount`, `FeesStatus`) VALUES
(1, '1JB19CS073', 'Tuition Fees,College Fees', '100000.00', '60000.00', '40000.00', 'NOT CLEARED'),
(2, '1JB19CS075', 'Tuition Fees,College Fees', '350000.00', '100000.00', '250000.00', 'NOT CLEARED'),
(3, '1JB19CS062', 'Tuition Fees,College Fees', '125000.00', '100000.00', '25000.00', 'NOT CLEARED'),
(4, '1jb19cs061', 'Tuition Fees', '109000.00', '90000.00', '19000.00', 'NOT CLEARED'),
(5, '1jb19cs068', 'Tuition Fees,College Fees', '110000.00', '110000.00', '0.00', 'PAID'),
(6, '1jb19is085', 'Tuition Fees', '125000.00', '100000.00', '25000.00', 'NOT CLEARED');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `StaffID` varchar(10) NOT NULL,
  `StaffName` varchar(30) NOT NULL,
  `ProctorPassword` varchar(20) NOT NULL,
  `StaffGender` varchar(10) NOT NULL,
  `DOB` date NOT NULL,
  `StaffPhoneNumber` bigint NOT NULL,
  `DeptID` int NOT NULL,
  `StaffAge` int NOT NULL,
  `Qualification` varchar(20) NOT NULL,
  `Designation` varchar(30) NOT NULL,
  `JoiningDate` date NOT NULL,
  PRIMARY KEY (`StaffID`),
  KEY `dept1` (`DeptID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`StaffID`, `StaffName`, `ProctorPassword`, `StaffGender`, `DOB`, `StaffPhoneNumber`, `DeptID`, `StaffAge`, `Qualification`, `Designation`, `JoiningDate`) VALUES
('1JBCS1', 'Roopa', '', 'Female', '1989-05-04', 7899329632, 2, 33, 'BE.,M.Tech,Ph.D', 'Associate Professor', '2012-01-15'),
('1JBCS103', 'Srikantaiaha', '', 'Male', '1970-12-12', 9694568760, 2, 52, 'BE.,M.Tech,Ph.D', 'Professor', '2000-02-08'),
('1JBCS2', 'Dhananjaya', '', 'Male', '1975-06-02', 9900658945, 2, 47, 'BE.,M.Tech,Ph.D', 'Assistant Professor', '2012-02-04'),
('1JBCSPROC1', 'Manasa  ', 'manasa123', 'Female', '1991-05-12', 9663646573, 2, 31, 'BE.,M.Tech', 'Assistant Professor', '2012-05-12'),
('1JBCSPROC2', 'Ajay', 'ajay123', 'Male', '1987-02-01', 9945332156, 2, 35, 'BE.,M.Tech', 'Associate Professor', '2012-01-17'),
('1JBIS1', 'Raghavendra', '', 'Male', '1990-09-01', 9966325198, 3, 32, 'BE.,M.Tech', 'Assistant Professor', '2022-01-16'),
('1JBISPROC2', 'Pavithra', 'pavithra123', 'Female', '1985-06-04', 9663646573, 3, 37, 'BE.,M.Tech,Ph.D', 'Assistant Professor', '2010-12-01');

-- --------------------------------------------------------

--
-- Table structure for table `studentslist`
--

DROP TABLE IF EXISTS `studentslist`;
CREATE TABLE IF NOT EXISTS `studentslist` (
  `StudentID` varchar(10) NOT NULL,
  `StudentName` varchar(30) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `StudentYear` varchar(15) NOT NULL,
  `AdmissionType` varchar(15) NOT NULL,
  `StudentPhoneNumber` bigint NOT NULL,
  `DeptID` int NOT NULL,
  `DOB` date NOT NULL,
  `StudentAge` int NOT NULL,
  `StudentGender` varchar(10) NOT NULL,
  `StudentResidence` varchar(15) NOT NULL,
  `CETorCOMEDKrank` bigint NOT NULL,
  `SSLCmarks` int NOT NULL,
  `SSLCpercentage` decimal(4,2) NOT NULL,
  `PUCmarks` int NOT NULL,
  `PUCpercentage` decimal(4,2) NOT NULL,
  `ProcID` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`StudentID`),
  KEY `dept` (`DeptID`),
  KEY `proc` (`ProcID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `studentslist`
--

INSERT INTO `studentslist` (`StudentID`, `StudentName`, `Password`, `StudentYear`, `AdmissionType`, `StudentPhoneNumber`, `DeptID`, `DOB`, `StudentAge`, `StudentGender`, `StudentResidence`, `CETorCOMEDKrank`, `SSLCmarks`, `SSLCpercentage`, `PUCmarks`, `PUCpercentage`, `ProcID`) VALUES
('1jb19cs061', 'Ishaan', 'ishaan123', 'third', 'CET', 9960335486, 1, '2001-11-02', 21, 'Male', 'hosteler', 101, 600, '96.00', 590, '98.33', '1JBCSPROC1'),
('1JB19CS062', 'Jayanth Kumar .S', 'mohan123', 'first', 'CET', 9945332156, 1, '2002-12-12', 20, 'Male', 'day-scholar', 100, 580, '92.80', 560, '93.33', '1JBCSPROC2'),
('1jb19cs068', 'Achyuth K', '503188', 'second', 'COMEDK', 6368954578, 2, '2001-03-01', 21, 'Male', 'hosteler', 1, 600, '96.00', 590, '98.33', '1JBCSPROC1'),
('1JB19CS073', 'Lalith Kumar.H', 'lalith123', 'first', 'CET', 9945332156, 1, '2002-12-12', 20, 'Male', 'day-scholar', 100, 580, '92.80', 560, '93.33', '1JBCSPROC1'),
('1JB19CS075', 'M.Girish', 'girish123', 'third', 'COMEDK', 9945336298, 3, '2001-02-01', 21, 'Male', 'hosteler', 110, 580, '92.80', 560, '93.33', '1JBISPROC2'),
('1JB19CS083', 'Mohan', 'mohanraj1234', 'first', 'CET', 6361801289, 1, '2001-09-01', 21, 'Male', 'day-scholar', 100000, 520, '83.20', 480, '80.00', '1JBCSPROC2'),
('1jb19is085', 'Naman Singh', '314072', 'second', 'COMEDK', 6364512890, 1, '2001-06-05', 21, 'Male', 'hostler', 7000, 580, '92.80', 555, '92.50', '1JBCSPROC2');

-- --------------------------------------------------------

--
-- Table structure for table `study`
--

DROP TABLE IF EXISTS `study`;
CREATE TABLE IF NOT EXISTS `study` (
  `StudentID` varchar(10) NOT NULL,
  `SubjectID` varchar(8) NOT NULL,
  `ClassesHeld` int NOT NULL,
  `ClassesAttended` int NOT NULL,
  `AttendancePercentage` decimal(6,2) NOT NULL,
  `InternalTest1` int NOT NULL,
  `InternalTest2` int NOT NULL,
  `InternalTest3` int NOT NULL,
  `InternalMaxMarks` int NOT NULL,
  `MCQ` int NOT NULL,
  `InternalAggregate` int NOT NULL,
  `ExternalObtained` int NOT NULL,
  `TotalMarks` int NOT NULL,
  `Status` varchar(15) NOT NULL,
  `Remarks` varchar(100) NOT NULL,
  PRIMARY KEY (`StudentID`,`SubjectID`),
  KEY `sub1` (`SubjectID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `study`
--

INSERT INTO `study` (`StudentID`, `SubjectID`, `ClassesHeld`, `ClassesAttended`, `AttendancePercentage`, `InternalTest1`, `InternalTest2`, `InternalTest3`, `InternalMaxMarks`, `MCQ`, `InternalAggregate`, `ExternalObtained`, `TotalMarks`, `Status`, `Remarks`) VALUES
('1JB19CS062', '18CS51', 45, 40, '88.89', 34, 39, 41, 50, 10, 23, 45, 78, 'PASS', 'good'),
('1jb19cs068', '18CS51', 40, 35, '87.50', 45, 46, 40, 50, 8, 26, 51, 85, 'PASS', 'Good'),
('1jb19cs068', '18CS52', 40, 36, '90.00', 32, 43, 23, 50, 5, 20, 42, 67, 'PASS', 'good'),
('1jb19cs068', '18CS53', 45, 32, '71.11', 34, 45, 43, 50, 6, 24, 42, 72, 'PASS', 'V Good'),
('1JB19CS073', '18CS51', 28, 25, '89.29', 45, 39, 48, 50, 9, 26, 45, 80, 'PASS', 'Good'),
('1JB19CS073', '18CS52', 35, 30, '85.71', 40, 40, 40, 50, 9, 24, 47, 80, 'PASS', 'V Good'),
('1JB19CS073', '18CS53', 40, 38, '95.00', 32, 36, 45, 50, 9, 23, 42, 74, 'PASS', 'good'),
('1JB19CS075', '18CS51', 35, 25, '71.43', 42, 41, 35, 50, 8, 24, 50, 82, 'PASS', '0'),
('1JB19CS075', '18CS52', 48, 31, '64.58', 35, 21, 35, 50, 8, 18, 34, 60, 'PASS', '0'),
('1JB19CS075', '18CS53', 32, 28, '87.50', 45, 42, 35, 50, 9, 24, 51, 84, 'PASS', '0'),
('1JB19CS075', '18CS54', 30, 29, '96.67', 35, 47, 36, 50, 8, 24, 51, 83, 'PASS', 'Good');

--
-- Triggers `study`
--
DROP TRIGGER IF EXISTS `attendance_percentage`;
DELIMITER $$
CREATE TRIGGER `attendance_percentage` BEFORE INSERT ON `study` FOR EACH ROW set NEW.AttendancePercentage=((NEW.ClassesAttended / NEW.ClassesHeld)*100)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
CREATE TABLE IF NOT EXISTS `subject` (
  `Sem` int NOT NULL,
  `SubID` varchar(8) NOT NULL,
  `SubDesc` varchar(50) NOT NULL,
  PRIMARY KEY (`SubID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`Sem`, `SubID`, `SubDesc`) VALUES
(5, '18CS51', 'Management and Enterpreneurship for IT'),
(5, '18CS52', 'Computer network and security'),
(5, '18CS53', 'Database Management System'),
(5, '18CS54', 'Automata Theory and Computability'),
(5, '18CS55', 'Application Developement Using Python'),
(5, '18CS56', 'Unix Programming');

-- --------------------------------------------------------

--
-- Table structure for table `teaches`
--

DROP TABLE IF EXISTS `teaches`;
CREATE TABLE IF NOT EXISTS `teaches` (
  `StaffID` varchar(10) NOT NULL,
  `SubjectID` varchar(8) NOT NULL,
  PRIMARY KEY (`StaffID`,`SubjectID`),
  KEY `sub` (`SubjectID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fees`
--
ALTER TABLE `fees`
  ADD CONSTRAINT `student` FOREIGN KEY (`StudentID`) REFERENCES `studentslist` (`StudentID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `dept1` FOREIGN KEY (`DeptID`) REFERENCES `branch` (`BranchID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `studentslist`
--
ALTER TABLE `studentslist`
  ADD CONSTRAINT `dept` FOREIGN KEY (`DeptID`) REFERENCES `branch` (`BranchID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `proc` FOREIGN KEY (`ProcID`) REFERENCES `staff` (`StaffID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `study`
--
ALTER TABLE `study`
  ADD CONSTRAINT `stud` FOREIGN KEY (`StudentID`) REFERENCES `studentslist` (`StudentID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sub1` FOREIGN KEY (`SubjectID`) REFERENCES `subject` (`SubID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teaches`
--
ALTER TABLE `teaches`
  ADD CONSTRAINT `staff` FOREIGN KEY (`StaffID`) REFERENCES `staff` (`StaffID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sub` FOREIGN KEY (`SubjectID`) REFERENCES `subject` (`SubID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
