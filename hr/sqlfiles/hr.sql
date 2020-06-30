-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 24, 2019 at 06:01 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hr`
--

-- --------------------------------------------------------

--
-- Table structure for table `addjobs`
--

DROP TABLE IF EXISTS `addjobs`;
CREATE TABLE IF NOT EXISTS `addjobs` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Hr_Id` int(11) NOT NULL,
  `JobTitle` varchar(100) NOT NULL,
  `Technology` varchar(100) NOT NULL,
  `Salary` varchar(50) NOT NULL,
  `Job_Description` varchar(200) NOT NULL,
  `Vacancy` varchar(20) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addjobs`
--

INSERT INTO `addjobs` (`Id`, `Hr_Id`, `JobTitle`, `Technology`, `Salary`, `Job_Description`, `Vacancy`) VALUES
(4, 1, 'Sr. Java Developer', 'Java', '12,000-14,000', 'Min 2yr experienced Java developer', '2'),
(1, 1, 'php developer', 'Php', '8,000-9,000', 'Ajax, Php and MySql developer', '12'),
(5, 2, 'Fresher Python developer', 'Python', '15,000-18,000', 'Knowledge on Python Gui\'s', '6'),
(6, 1, 'Graphics Designer and Developer', 'Graphics Designer', '15,000 - 20,000', '1-2 Yr  Experienced graphics developer', '9');

-- --------------------------------------------------------

--
-- Table structure for table `appliedjobs`
--

DROP TABLE IF EXISTS `appliedjobs`;
CREATE TABLE IF NOT EXISTS `appliedjobs` (
  `Aj_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Applicant_id` int(11) NOT NULL,
  `Job_id` int(11) NOT NULL,
  `Hr_id` int(11) NOT NULL,
  `Interviewer_id` varchar(100) NOT NULL,
  `Date_Time` varchar(100) NOT NULL,
  `Marks` varchar(50) NOT NULL DEFAULT '0',
  `Status` varchar(100) NOT NULL DEFAULT 'Not Scheduled',
  PRIMARY KEY (`Aj_Id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appliedjobs`
--

INSERT INTO `appliedjobs` (`Aj_Id`, `Applicant_id`, `Job_id`, `Hr_id`, `Interviewer_id`, `Date_Time`, `Marks`, `Status`) VALUES
(1, 1, 1, 1, '1', '2019/05/10 11:30', '84', 'Hired'),
(15, 1, 4, 1, '1', '2019/06/15 10:00', '75', 'Interviewed'),
(10, 2, 1, 1, '1', '2019/03/23 01:45', '82', 'Hired'),
(11, 1, 5, 2, '', '', '0', 'Not Scheduled');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `Fb_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile` varchar(50) NOT NULL,
  `Message` varchar(200) NOT NULL,
  PRIMARY KEY (`Fb_Id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Fb_Id`, `Name`, `Email`, `Mobile`, `Message`) VALUES
(2, 'Pritam Banerjee', 'pritam.uav@gmail.com', '8981252716', 'Just Checking the Page ');

-- --------------------------------------------------------

--
-- Table structure for table `hrinfo`
--

DROP TABLE IF EXISTS `hrinfo`;
CREATE TABLE IF NOT EXISTS `hrinfo` (
  `Hr_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Hr_Mobile` varchar(50) NOT NULL,
  `Hr_Address` varchar(200) NOT NULL,
  PRIMARY KEY (`Hr_Id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hrinfo`
--

INSERT INTO `hrinfo` (`Hr_Id`, `Name`, `Email`, `Password`, `Hr_Mobile`, `Hr_Address`) VALUES
(1, 'Mr. Prabir Ram', 'pritam.uav@gmail.com', '123456', '8282817944', 'Uttarpara Hooghly-712232'),
(2, 'Mrs. Ratna Nah', 'prb03@yahoo.in', '456123', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `interviewerinfo`
--

DROP TABLE IF EXISTS `interviewerinfo`;
CREATE TABLE IF NOT EXISTS `interviewerinfo` (
  `Iv_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Iv_Name` varchar(50) NOT NULL,
  `Speciality` varchar(50) NOT NULL,
  `Iv_Email` varchar(200) NOT NULL,
  `Iv_Password` varchar(100) NOT NULL,
  `Iv_Mobile` varchar(50) NOT NULL,
  `Iv_Address` varchar(200) NOT NULL,
  PRIMARY KEY (`Iv_Id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interviewerinfo`
--

INSERT INTO `interviewerinfo` (`Iv_Id`, `Iv_Name`, `Speciality`, `Iv_Email`, `Iv_Password`, `Iv_Mobile`, `Iv_Address`) VALUES
(1, 'Mr. Samsundar Pal', 'Java', 'pritam.gov@gmail.com', '123456', '7894561231', 'K.L Sarani Ultadanga, bidhan Nagore'),
(2, 'Mrs. Ambika Kalna', 'Python', 'prb123@yahoo.com', '456123', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

DROP TABLE IF EXISTS `userinfo`;
CREATE TABLE IF NOT EXISTS `userinfo` (
  `Applicant_id` int(11) NOT NULL AUTO_INCREMENT,
  `Applicant_Name` varchar(100) NOT NULL,
  `Applicant_Email` varchar(100) NOT NULL,
  `Applicant_Password` varchar(100) NOT NULL,
  `Applicant_Mobile` varchar(100) NOT NULL,
  `Applicant_Gender` varchar(50) NOT NULL,
  `Applicant_Address` varchar(200) NOT NULL,
  PRIMARY KEY (`Applicant_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`Applicant_id`, `Applicant_Name`, `Applicant_Email`, `Applicant_Password`, `Applicant_Mobile`, `Applicant_Gender`, `Applicant_Address`) VALUES
(1, 'Ratul Saha', 'abc@gmail.com', '123456', '', '', ''),
(2, 'Subhro Koley', 'def@gmail.com', '123456', '', '', ''),
(4, 'Kaushik Karmakar', 'jkl@gmail.com', '456789', '7003842830', 'male', '78 Park Street, Kolkata-700029, West Bengal');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
