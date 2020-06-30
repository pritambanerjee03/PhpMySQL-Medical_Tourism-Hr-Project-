-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 22, 2019 at 06:35 PM
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
-- Database: `medical`
--

-- --------------------------------------------------------

--
-- Table structure for table `bloodcampappointment`
--

DROP TABLE IF EXISTS `bloodcampappointment`;
CREATE TABLE IF NOT EXISTS `bloodcampappointment` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `personal_Id` varchar(200) NOT NULL,
  `personal_Id_no` varchar(200) NOT NULL,
  `address` varchar(300) NOT NULL,
  `booking_type` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `blood_grp` varchar(100) NOT NULL,
  `donated_blood` varchar(100) NOT NULL,
  `chronic_disease` varchar(300) NOT NULL,
  `medication` varchar(100) NOT NULL,
  `medication_details` varchar(100) NOT NULL,
  `action` varchar(200) NOT NULL DEFAULT 'active',
  PRIMARY KEY (`slno`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bloodcampappointment`
--

INSERT INTO `bloodcampappointment` (`slno`, `id`, `name`, `mobile`, `email`, `personal_Id`, `personal_Id_no`, `address`, `booking_type`, `age`, `gender`, `blood_grp`, `donated_blood`, `chronic_disease`, `medication`, `medication_details`, `action`) VALUES
(1, 'pritam.uav', 'PRATYUSH BANERJEE', '8981252716', 'pratyushbanerjee07@gmail.com', 'Voter Card', '7412369', '34/A/A Santinagar Street P.O - Bhadrakali , Dist-Hooghly', 'Blood Donation', '22', 'Male', 'A+', 'NO', 'lolkfknn ndsl', 'YES', 'fnyjyt ff', 'active'),
(2, 'pritam.uav', 'PRATYUSH BANERJEE', '8981252716', 'pratyushbanerjee07@gmail.com', 'Aadhar Card', '5263', '34/A/A Santinagar Street P.O - Bhadrakali , Dist-Hooghly', 'Blood Donation', '31', 'Male', 'B+', 'NO', 'dont know', 'YES', 'wstghhgfhg gkjhg', 'active'),
(6, 'pritam.uav', 'pritam', '7896314', 'a@gmail.com', 'Voter Card', '789325', 'dssssssssssssss', 'Blood Donation', '50', 'Male', 'AB+', 'NO', 'dfffffffffffffff', 'YES', 'fdddddddddddd', 'active'),
(7, 'pritam.uav', 'pritam', '89632145', 'pritam@gmail.com', 'Aadhar Card', '7894563214', 'bkj', 'Blood Donation', '47', 'Male', 'AB+', 'NO', 'jbjkhvhjvhj', 'NO', '', 'passive');

-- --------------------------------------------------------

--
-- Table structure for table `doctorappointment`
--

DROP TABLE IF EXISTS `doctorappointment`;
CREATE TABLE IF NOT EXISTS `doctorappointment` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `age` int(20) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `address` varchar(300) NOT NULL,
  `date_app` varchar(60) NOT NULL,
  `speciality` varchar(200) NOT NULL,
  `docname` varchar(300) NOT NULL,
  `hospital_name` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `town` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `action` varchar(200) NOT NULL DEFAULT 'active',
  PRIMARY KEY (`slno`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorappointment`
--

INSERT INTO `doctorappointment` (`slno`, `id`, `name`, `age`, `gender`, `address`, `date_app`, `speciality`, `docname`, `hospital_name`, `mobile`, `email`, `town`, `country`, `action`) VALUES
(1, 'pritam.uav', 'prb', 9, 'Male', 'dkjfesdb ', '22-Mar-2019', 'Medicine', 'Dr. Bhabatosh Biswas', 'Desun Hospital & Heart Institute', '89632145', 'pritam@gmail.com', 'uttarpara', 'india', 'passive'),
(11, 'pritam.uav', 'pritam', 11, 'Male', 'gchgfg', '07-Mar-2019', 'Medicine', 'Dr. Mrinal Kanti Das', 'B.M. Birla Heart Research Center', '89632145789', 'pritam@gmail.coml', 'uttarpara', 'india', 'passive'),
(12, 'pritam.uav', 'prb', 8, 'Male', 'rgrggggggggggge', '26-Apr-2019', 'Medicine', 'Dr. Bhabatosh Biswas', 'Desun Hospital & Heart Institute', '8965412345', 'pritam.uav@yahoo.in', 'uttarpara', 'india', 'passive'),
(13, 'pritam.uav', 'Arnab', 38, 'Male', 'uttarpara', '02-May-2019', 'Medicine', 'Dr. Mrinal Kanti Das', 'B.M. Birla Heart Research Center', '123', 'arnab3bhar@gmail.com', 'srp', 'India', 'active'),
(14, 'pritam.uav', 'pritam banerjee', 4, 'Male', 'bb bjkb jh', '16-May-2019', 'Dermatology', 'Dr. Sunil Bhattacharya', 'Apollo Gleneagles Hospital', '8981252716', 'pritam.uav@gmail.com', 'uttarpara', 'india', 'active'),
(15, 'pritam.uav', 'Ram', 12, 'Male', 'vhvd vhcgvhgdvc', '06-May-2019', 'Dermatology', 'Dr. Ketaki Maitra', 'Desun Hospital & Heart Institute', '8963214789', 'ram6bhar@gmail.com', 'upa', 'India', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `doctorlist`
--

DROP TABLE IF EXISTS `doctorlist`;
CREATE TABLE IF NOT EXISTS `doctorlist` (
  `id` varchar(20) NOT NULL,
  `docname` varchar(200) NOT NULL,
  `speciality` varchar(200) NOT NULL,
  `hospital_name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorlist`
--

INSERT INTO `doctorlist` (`id`, `docname`, `speciality`, `hospital_name`) VALUES
('A1', 'Dr. Bhabatosh Biswas', 'Medicine', 'Desun Hospital & Heart Institute'),
('A2', 'Dr. Bimal Kumar Khetawat', 'Medicine', 'Apollo Gleneagles Hospital'),
('A3', 'Dr. Chanchal Goswami', 'Medicine', 'AMRI Hospital'),
('A4', 'Dr. Mrinal Kanti Das', 'Medicine', 'B.M. Birla Heart Research Center'),
('B1', 'Dr. Anirban Sarkar', 'Cardiology', 'Desun Hospital & Heart Institute'),
('B2', 'Dr. Arindam Bhattacharya', 'Cardiology', 'Apollo Gleneagles Hospital'),
('B3', 'Dr. Ashwini Ghatak', 'Cardiology', 'AMRI Hospital'),
('B4', 'Dr. Ritam Dasgupta', 'Cardiology', 'B.M. Birla Heart Research Center'),
('C1', 'Dr. Debasish Banerjee', 'Neuro-Science', 'Desun Hospital & Heart Institute'),
('C2', 'Dr. Amal sekhar Dubey', 'Neuro-Science', 'Apollo Gleneagles Hospital'),
('C3', 'Dr. Kamal Kochar', 'Neuro-Science', 'AMRI Hospital'),
('C4', 'Dr. Amitava Mitra', 'Neuro-Science', 'B.M. Birla Heart Research Center'),
('D1', 'Dr. Ketaki Maitra', 'Dermatology', 'Desun Hospital & Heart Institute'),
('D2', 'Dr. Sunil Bhattacharya', 'Dermatology', 'Apollo Gleneagles Hospital'),
('D3', 'Dr. Indrajit Basu', 'Dermatology', 'AMRI Hospital'),
('D4', 'Dr. Jayanta Roy', 'Dermatology', 'B.M. Birla Heart Research Center'),
('E1', 'Dr. Goutam Mondal', 'Gastro-Science', 'Desun Hospital & Heart Institute'),
('E2', 'Dr. Dipak Mazumdar', 'Gastro-Science', 'Apollo Gleneagles Hospital'),
('E3', 'Dr. Gourav Basu', 'Gastro-Science', 'AMRI Hospital'),
('E4', 'Dr. Kakoli Samanta', 'Gastro-Science', 'B.M. Birla Heart Research Center'),
('F1', 'Dr. Shabnam kar', 'Gynae-Oncology', 'Desun Hospital & Heart Institute'),
('F2', 'Dr. Ruchi Banerjee', 'Gynae-Oncology', 'Apollo Gleneagles Hospital'),
('F3', 'Dr. Swapna Kumar Abasthi', 'Gynae-Oncology', 'AMRI Hospital'),
('F4', 'Dr. Avishek Gayen', 'Gynae-Oncology', 'B.M. Birla Heart Research Center');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `message` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=184 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `username`, `name`, `email`, `message`) VALUES
(183, 'pritam.uav', 'pritam', 'pritam.uav@gmail.com', 'tyt hgchg');

-- --------------------------------------------------------

--
-- Table structure for table `hostappointment`
--

DROP TABLE IF EXISTS `hostappointment`;
CREATE TABLE IF NOT EXISTS `hostappointment` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `organization` varchar(200) NOT NULL,
  `eventname` varchar(200) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `audience` varchar(100) NOT NULL,
  `performer_name` varchar(100) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `startdate` varchar(100) NOT NULL,
  `venue` varchar(300) NOT NULL,
  `comments` varchar(300) NOT NULL,
  `action` varchar(200) NOT NULL DEFAULT 'active',
  PRIMARY KEY (`slno`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostappointment`
--

INSERT INTO `hostappointment` (`slno`, `id`, `name`, `mobile`, `email`, `organization`, `eventname`, `genre`, `audience`, `performer_name`, `duration`, `startdate`, `venue`, `comments`, `action`) VALUES
(1, 'pritam.uav', 'pritam banerjee', '8981252716', 'pritam.uav@gmail.com', 'St.Thomas', 'Rakto Dan', '3', '1', 'Club Members', '3', '04-Nov-2018', 'Uttarpara', 'thank you kindly msg as soon as possible', 'passive'),
(2, 'pritam.uav', 'PRATYUSH BANERJEE', '8981252716', 'pratyushbanerjee07@gmail.com', 'lol', 'pop', 'Medical Camp', 'Public', 'poi', '2', '30-Nov-2018', 'poklo', 'hello world', 'passive'),
(3, 'pritam.uav@gmail.com', 'PRATYUSH BANERJEE', '8981252716', 'pratyushbanerjee07@gmail.com', 'hii at night', 'pop', 'Blood Donation Camp', 'Others', 'poi at night', '4', '28-Nov-2018', 'poklo usa', 'it can be anything', 'active'),
(4, 'pritam.uav@gmail.com', 'PRATYUSH BANERJEE', '8981252716', 'pratyushbanerjee07@gmail.com', 'hii at night', 'pop', 'Others', 'Invitation', 'poi at night all', '6', '01-Dec-2018', 'poklo usa kolkata', 'uujgujg u iguiglugukjg', 'active'),
(5, 'pritam.uav', 'PRATYUSH BANERJEE', '8981252716', 'pratyushbanerjee07@gmail.com', 'hii at night', 'pop', 'Blood Donation Camp', 'Invitation', 'poi at night all', '2', '05-Dec-2018', 'poklo', 'knkl', 'active'),
(6, 'pritam.uav', 'PRATYUSH BANERJEE', '8981252716', 'pratyushbanerjee07@gmail.com', 'st thomas', 'pop', 'Yoga Camp', 'Private', 'anyone', '7', '15-Nov-2018', 'poklo usa', 'hsajhcv udgsugcsudgv dhuvgdsukjvhufd', 'passive'),
(7, 'pritam.uav', 'PRATYUSH BANERJEE', '8981252716', 'pratyushbanerjee07@gmail.com', 'lol', 'pop', 'Medical Camp', 'Others', 'anyone', '3', '30-Nov-2018', 'poklo', 'nnklnkl', 'active'),
(11, 'pritam.uav', 'pritam', '89632145', 'pritam@gmail.com', 'bmndv', 'bbbdsncn', 'Yoga Camp', 'Public', 'bsvnc', '6', '20-Feb-2019', 'bnmbn', 'bmnbb', 'active'),
(12, 'pritam.uav', 'Agnibha', '8964521389', 'agnibha@gmail.com', 'youth club dumdum', 'folk songs', 'Others', 'Public', 'Baul Artists from birbhum', '3', '16-May-2019', 'Dumdum', 'please we want to collaborate with you', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `hotelappointment`
--

DROP TABLE IF EXISTS `hotelappointment`;
CREATE TABLE IF NOT EXISTS `hotelappointment` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(100) NOT NULL,
  `patient_name` varchar(200) NOT NULL,
  `doc_app` varchar(200) NOT NULL,
  `hotel_name` varchar(200) NOT NULL,
  `check_in` varchar(200) NOT NULL,
  `check_out` varchar(200) NOT NULL,
  `rooms` varchar(100) NOT NULL,
  `guests` varchar(100) NOT NULL,
  `action` varchar(200) NOT NULL DEFAULT 'active',
  `docslno` int(11) NOT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotelappointment`
--

INSERT INTO `hotelappointment` (`slno`, `id`, `patient_name`, `doc_app`, `hotel_name`, `check_in`, `check_out`, `rooms`, `guests`, `action`, `docslno`) VALUES
(3, 'pritam.uav', 'pritam', '07-Mar-2019', 'The Peerless Inn', '07-Mar-2019', '08-Mar-2019', '2', '2', 'active', 11),
(4, 'pritam.uav', 'prb', '26-Apr-2019', 'JW Marriott Hotel', '27-Apr-2019', '29-Apr-2019', '2', '2', 'passive', 12),
(5, 'pritam.uav', 'Arnab', '02-May-2019', 'Hyatt Regency', '03-May-2019', '05-May-2019', '2', '1', 'active', 13),
(6, 'pritam.uav', 'pritam banerjee', '16-May-2019', 'ITC Sonar', '19-May-2019', '20-May-2019', '2', '3', 'active', 14);

-- --------------------------------------------------------

--
-- Table structure for table `restaurantappointment`
--

DROP TABLE IF EXISTS `restaurantappointment`;
CREATE TABLE IF NOT EXISTS `restaurantappointment` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(100) NOT NULL,
  `patient_name` varchar(200) NOT NULL,
  `doc_app` varchar(200) NOT NULL,
  `restaurant_name` varchar(200) NOT NULL,
  `food_pref` varchar(200) NOT NULL,
  `persons` varchar(200) NOT NULL,
  `date` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `action` varchar(200) NOT NULL DEFAULT 'active',
  `docslno` int(11) NOT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurantappointment`
--

INSERT INTO `restaurantappointment` (`slno`, `id`, `patient_name`, `doc_app`, `restaurant_name`, `food_pref`, `persons`, `date`, `time`, `action`, `docslno`) VALUES
(5, 'pritam.uav', 'pritam', '07-Mar-2019', 'Mainland China', 'Veg', '1', '07-03-2019', '8:36 AM', 'active', 11),
(6, 'pritam.uav', 'pritam', '07-Mar-2019', 'Barbeque Nation', 'Non-Veg', '4+', '15-03-2019', '2:31 PM', 'active', 11),
(7, 'pritam.uav', 'Arnab', '02-May-2019', 'JW Kitchen', 'Non-Veg', '1', '03-05-2019', '12:33 PM', 'active', 13);

-- --------------------------------------------------------

--
-- Table structure for table `seminarappointment`
--

DROP TABLE IF EXISTS `seminarappointment`;
CREATE TABLE IF NOT EXISTS `seminarappointment` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `personal_Id` varchar(200) NOT NULL,
  `personal_Id_no` varchar(200) NOT NULL,
  `address` varchar(300) NOT NULL,
  `booking_type` varchar(100) NOT NULL,
  `program_name` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `no_of_seats` varchar(100) NOT NULL,
  `seat_type` varchar(100) NOT NULL,
  `action` varchar(200) NOT NULL DEFAULT 'active',
  PRIMARY KEY (`slno`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seminarappointment`
--

INSERT INTO `seminarappointment` (`slno`, `id`, `name`, `mobile`, `email`, `personal_Id`, `personal_Id_no`, `address`, `booking_type`, `program_name`, `date`, `time`, `no_of_seats`, `seat_type`, `action`) VALUES
(1, 'pritam.uav', 'PRATYUSH BANERJEE', '8981252716', 'pratyushbanerjee07@gmail.com', 'Aadhar Card', '5263', '34/A/A Santinagar Street P.O - Bhadrakali , Dist-Hooghly', 'Seminar', 'Workout vs Diet', '28th December', '5:00PM - 8:00PM', '3', 'Premium Rs.120 per seat', 'active'),
(3, 'pritam.uav', 'PRATYUSH BANERJEE', '8981252716', 'pratyushbanerjee07@gmail.com', 'Pan Card', '7412369', '34/A/A Santinagar Street P.O - Bhadrakali , Dist-Hooghly', 'Seminar', 'Modern Day LifeStyle', '29th December', '12:30PM - 3:30PM', '3', 'Enterprise Rs.180 per seat', 'active'),
(4, 'pritam.uav', 'pritam', '89632145', 'pritam@gmail.coml', 'Aadhar Card', '7894563214', 'jv', 'Seminar', 'Workout vs Diet', '27th December', '12:30PM - 3:30PM', '2', 'Basic Rs.80 per seat', 'passive');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

DROP TABLE IF EXISTS `userinfo`;
CREATE TABLE IF NOT EXISTS `userinfo` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `phone_no` varchar(50) DEFAULT NULL,
  `dob` varchar(50) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `updation_date` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`email`, `password`, `first_name`, `last_name`, `phone_no`, `dob`, `address`, `updation_date`) VALUES
('pritam.uav@gmail.com', '123', 'Pritam', 'Banerjee', '7003842831', '10-May-1996', 'uttarpara', '26-01-2019 01:06:40 AM'),
('pratyushbanerjee07@gmail.com', 'prb07', 'Pratyush', 'Banerjee', '7003844048', '12-Oct-1990', 'Uttarpar Bhadrakali hooghly', '27-01-2019 12:37:38 AM'),
('agnibha@gmail.com', '147', 'agnibha', 'chakrobarti', '8287897100', '13-Aug-1997', 'jekhane khusi thaki pagol ami sobai jane', '27-01-2019 12:26:34 AM'),
('pratyushbanerjee08@gmail.com', '456', NULL, '', '', '', '', ''),
('pratyushbanerjee09@gmail.com', '741', NULL, '', '', '', '', ''),
('abc@kol.com', '123', NULL, NULL, NULL, NULL, NULL, NULL),
('abc@kol.in', '123', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `yogacampappointment`
--

DROP TABLE IF EXISTS `yogacampappointment`;
CREATE TABLE IF NOT EXISTS `yogacampappointment` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `personal_Id` varchar(200) NOT NULL,
  `personal_Id_no` varchar(200) NOT NULL,
  `address` varchar(300) NOT NULL,
  `booking_type` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `program_name` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `duration` varchar(100) NOT NULL,
  `start_date` varchar(100) NOT NULL,
  `food_choice` varchar(100) NOT NULL,
  `disease_name` varchar(100) NOT NULL,
  `medicine` varchar(100) NOT NULL,
  `medicine_details` varchar(300) NOT NULL,
  `food_allergy` varchar(100) NOT NULL,
  `food_allergy_details` varchar(300) NOT NULL,
  `action` varchar(200) NOT NULL DEFAULT 'active',
  PRIMARY KEY (`slno`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yogacampappointment`
--

INSERT INTO `yogacampappointment` (`slno`, `id`, `name`, `mobile`, `email`, `personal_Id`, `personal_Id_no`, `address`, `booking_type`, `age`, `gender`, `program_name`, `location`, `duration`, `start_date`, `food_choice`, `disease_name`, `medicine`, `medicine_details`, `food_allergy`, `food_allergy_details`, `action`) VALUES
(1, 'pritam.uav', 'PRATYUSH BANERJEE', '8981252716', 'pratyushbanerjee07@gmail.com', 'Aadhar Card', '5263', '34/A/A Santinagar Street P.O - Bhadrakali , Dist-Hooghly', 'Yoga Camp', '8', 'Male', 'whatever you want', 'Mumbai', '3 Days', '27th December', 'Non Veg', 'Heart Disease', 'YES', 'pan80', 'YES', 'i love to eat food', 'passive'),
(2, 'pritam.uav', 'PRATYUSH BANERJEE', '8981252716', 'pratyushbanerjee07@gmail.com', 'Voter Card', '8520', '34/A/A Santinagar Street P.O - Bhadrakali , Dist-Hooghly', 'Yoga Camp', '', 'Male', 'anything lol', 'Delhi', '3 Days', '27th December', 'Non Veg', 'Diabetes', 'NO', '', 'NO', '', 'passive'),
(4, 'pritam.uav', 'PRATYUSH BANERJEE', '8981252716', 'pratyushbanerjee07@gmail.com', 'Voter Card', '7412369', '34/A/A Santinagar Street P.O - Bhadrakali , Dist-Hooghly', 'Yoga Camp', '', 'Female', 'Stay Fit, Stay Healthy', 'Delhi', '7 Days', '31st December', 'Veg', 'Arthritis', 'NO', '', 'NO', '', 'active'),
(6, 'pritam.uav', 'pritam', '85612221', 'pritam.uav@yah.com', 'Voter Card', '8451236', 'qqqqqqqqqqqqqqqqqqqqqqq', 'Yoga Camp', '4', 'Male', 'Stay Fit, Stay Healthy', 'Delhi', '3 Days', '27th February', 'Veg', 'Diabetes', 'YES', 'ccccccccccc', 'YES', 'dddddddddddd', 'active'),
(7, 'pritam.uav', 'pritam', '7896314', 'a@gmail.com', 'Voter Card', '789325', 'jbdfkjbjd', 'Yoga Camp', '', 'Male', 'Stay Fit, Stay Healthy', 'Delhi', '3 Days', '', 'Non Veg', 'High Blood Pressure', 'YES', 'rsdgg', 'YES', 'esgggg', 'passive'),
(8, 'pritam.uav', 'pritam', '89632145', 'pritam@gmail.coml', 'Voter Card', '7894563214', 'hjv', 'Yoga Camp', '', 'Male', 'Stay Fit, Stay Healthy', 'Mumbai', '3 Days', '27th February', 'Veg', 'Heart Disease', 'YES', 'jhvjhvhj', 'YES', 'vvjhvjhvjh', 'active');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
